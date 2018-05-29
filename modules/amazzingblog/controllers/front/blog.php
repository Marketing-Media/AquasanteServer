<?php
/**
* 2007-2018 Amazzing
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
*
*  @author    Amazzing <mail@amazzing.ru>
*  @copyright 2007-2018 Amazzing
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

class AmazzingBlogBlogModuleFrontController extends ModuleFrontControllerCore
{
    public $breadcrumb_items = array();

    public function init()
    {
        $this->display_column_left = true;
        $this->display_column_right = true;
        parent::init();
    }

    public function getCurrentURL()
    {
        $current_url = Tools::getCurrentUrlProtocolPrefix().$_SERVER['HTTP_HOST'].$this->module->getRequestURI();
        return rawurldecode($current_url);
    }

    public function initContent()
    {
        $this->context = Context::getContext();
        $this->id_lang = $this->context->language->id;
        $this->id_shop = $this->context->shop->id;
        if (Tools::isSubmit('ajax') && Tools::isSubmit('action')) {
            $action_method = 'ajax'.Tools::getValue('action');
            $this->module->verifyMethod($action_method, $this);
            $this->$action_method();
        }
        $this->current_url = $this->getCurrentURL();
        if ($this->current_url == $this->module->getNotAvailableLink()) {
            $this->displayNotAvailable();
        } else {
            $this->defineCurrentPage();
        }
        parent::initContent();
    }

    public function defineCurrentPage()
    {
        $id_post = Tools::getValue('id_post');
        $id_category = Tools::getValue('id_category', $this->module->root_id);
        $tags = Tools::getValue('tags');
        $page = Tools::getValue('page', 1);
        $link_rewrite = '';
        if ($this->module->friendly_url) {
            $parsed_url = parse_url($this->current_url);
            $request_uri = rawurldecode($parsed_url['path']);
            $exploded_request = explode('/'.$this->module->slug.'/', $request_uri);
            if (count($exploded_request) > 1) {
                $this->current_path = $exploded_request[1];
                $exploded_request = explode('/', rtrim($exploded_request[1], '/'));
                $link_rewrite = array_pop($exploded_request);
                if ((int)$link_rewrite.'' == $link_rewrite) {
                    $page = $link_rewrite;
                    $link_rewrite = array_pop($exploded_request);
                }
            }
            if ($link_rewrite) {
                if (isset($exploded_request[0]) && $exploded_request[0] == 'tags') {
                    $tags = $link_rewrite;
                } elseif ($possible_id_category = $this->module->getIdByLinkRewrite('category', $link_rewrite)) {
                    $id_category = $possible_id_category;
                } elseif ($possible_id_post = $this->module->getIdByLinkRewrite('post', $link_rewrite)) {
                    $id_post = $possible_id_post;
                } else {
                    $this->redirect404();
                }
            }
        }
        if ($id_post) {
            $this->blogCanonicalRedirection($this->module->getPostLink($id_post, $link_rewrite));
            $this->displayPost($id_post);
        } elseif ($tags) {
            $this->blogCanonicalRedirection($this->module->getTagLink($tags, $page));
            $tag_urls = explode('_', $tags);
            $this->displayTaggedPosts($tag_urls, $page);
        } else {
            $this->blogCanonicalRedirection($this->module->getCategoryLink($id_category, $link_rewrite, $page));
            $this->displayCategory($id_category, $page);
        }
    }

    public function blogCanonicalRedirection($canonical_url)
    {
        if ($this->current_url != $canonical_url) {
            Tools::redirect($canonical_url);
        }
    }

    public function redirect404()
    {
        Tools::redirect($this->module->getNotAvailableLink());
    }

    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();
        foreach ($this->breadcrumb_items as $item) {
            $breadcrumb['links'][] = $item;
        }
        return $breadcrumb;
    }

    public function displayTaggedPosts($tag_urls, $page)
    {
        $tag_ids = array();
        $tag_names = array_combine($tag_urls, $tag_urls);
        $tag_data = $this->module->db->executeS('
            SELECT id_tag, tag_name, tag_url FROM '._DB_PREFIX_.'a_blog_tag WHERE
            tag_url IN (\''.implode('\', \'', array_map('pSQL', $tag_urls)).'\')
            AND id_lang = '.(int)$this->id_lang.'
        ');
        foreach ($tag_data as $row) {
            $tag_ids[$row['id_tag']] = $row['id_tag'];
            $tag_names[$row['tag_url']] = $row['tag_name'];
        }
        $custom_title = $this->module->l('Search by tags').': '.implode(', ', $tag_names);
        $custom_values = array(
            'category' => array(
                'title' => $custom_title,
                'meta_title' => $custom_title,
                'meta_keywords' => '',
                'meta_description' => '',
                'description' => '',
            ),
            'category_settings' => array(
                'show_subcategories' => false,
                'main_img' => false,
            ),
            'additional_filters' => array('id_tag' => !empty($tag_ids) ? $tag_ids : array(0)),
            'cat_parents' => $this->module->getCategoryParents($this->module->root_id),
            'first_page_url' => $this->module->getTagLink($tag_urls),
        );
        $this->displayCategory($this->module->root_id, $page, $custom_values);
    }

    public function getChildCategories($id_category)
    {
        $children = $this->module->db->executeS('
            SELECT id_category FROM '._DB_PREFIX_.'a_blog_category
            WHERE id_parent = '.(int)$id_category.' AND active = 1
        ');
        $cat_ids = array();
        foreach ($children as $child) {
            $cat_ids[$child['id_category']] = $child['id_category'];
            if ($sub_children = $this->getChildCategories($child['id_category'])) {
                foreach ($sub_children as $cat_id) {
                    $cat_ids[$cat_id] = $cat_id;
                }
            }
        }
        return array_values($cat_ids);
    }

    public function getCategoryData($id_category)
    {
        return $this->module->db->getRow('
            SELECT * FROM '._DB_PREFIX_.'a_blog_category c
            LEFT JOIN '._DB_PREFIX_.'a_blog_category_lang cl
                ON c.id_category = cl.id_category AND cl.id_lang = '.(int)$this->id_lang.'
            WHERE c.id_category = '.(int)$id_category.' AND cl.id_shop = '.(int)$this->id_shop.'
            AND c.active = 1
        ');
    }

    public function displayCategory($id_category, $page, $custom_values = array())
    {
        if (!$category = $this->getCategoryData($id_category)) {
            $this->redirect404();
        }
        $values = array(
            'category' => $category,
            'category_settings' => $this->module->getSettings('category'),
            'post_list_settings' => $this->module->getSettings('postlist'),
            'additional_filters' => array('active' => 1),
            'cat_parents' => $this->module->getCategoryParents($id_category, true, false),
            'subcategories' => array(),
            'first_page_url' => $this->module->getCategoryLink($id_category, $category['link_rewrite']),
        );
        foreach (array_keys($values) as $name) {
            if (isset($custom_values[$name])) {
                $value = $custom_values[$name];
                $values[$name] = is_array($values[$name]) ? array_merge($values[$name], $value) : $value;
            }
        }
        if (empty($custom_values['additional_filters']['id_tag'])) {
            $this->id_category = $id_category;
            $cat_ids = array($id_category);
            if (!empty($values['category_settings']['include_all'])) {
                $cat_ids = array_merge($cat_ids, $this->getChildCategories($id_category));
            }
            $values['additional_filters']['id_category'] = $cat_ids;
        }
        // all $values will be included in smarty array
        $values['pagination_settings'] = $this->module->getPaginationSettings(
            'post',
            $values['post_list_settings'],
            $values['additional_filters'],
            $page
        );
        $values['posts'] = $this->module->getPostListInfos(
            $values['pagination_settings'],
            $values['post_list_settings']['order_by'],
            'DESC',
            $values['additional_filters']
        );
        if (!$values['posts'] && $page > 1) {
            Tools::redirect($values['first_page_url']);
        }
        if (!empty($values['category_settings']['show_subcategories'])) {
            $values['subcategories'] = $this->getSubcategoriesData($id_category, $values['category_settings']);
        }
        $params = array('resource_type' => 'category', 'id' => $id_category, 'page' => $page);
        $this->module->prepareHeaderData($params);
        Media::addJsDef(array('ab_first_page_url' => $values['first_page_url']));
        $smarty_array = array(
            'blog' => $this->module,
            'hide_left_column' => !$values['category_settings']['display_column_left'],
            'hide_right_column' => !$values['category_settings']['display_column_right'],
        );
        foreach ($values as $name => $value) {
            $smarty_array['ab_'.$name] = $value; // ab_prefix is used to avoid possible var name interference
        }
        if ($this->module->is_17) {
            $this->defineBreadCrumbItems($values['cat_parents'], $values['category']['title']);
        }
        $this->context->smarty->assign($smarty_array);
        $this->assignMetaFields($values['category'], $values['category_settings']);
        $this->setCurrentTemplate('category.tpl', $values['category_settings']);
    }

    public function getSubcategoriesData($id_category, $settings)
    {
        $subcategories = $this->module->db->executeS('
            SELECT * FROM '._DB_PREFIX_.'a_blog_category c
            LEFT JOIN '._DB_PREFIX_.'a_blog_category_lang cl
                ON c.id_category = cl.id_category AND cl.id_lang = '.(int)$this->id_lang.'
            WHERE c.active = 1 AND c.id_parent = '.(int)$id_category.' AND cl.id_shop = '.(int)$this->id_shop.'
        ');
        foreach ($subcategories as $i => &$s) {
            $cat_ids = array($s['id_category']);
            if (!empty($settings['include_all'])) {
                $cat_ids = array_merge($cat_ids, $this->getChildCategories($s['id_category']));
            }
            $subcat_additional_filters = array('id_category' => $cat_ids, 'active' => 1);
            $posts_num = $this->module->getTotal('post', $subcat_additional_filters);
            if (!$posts_num && $settings['show_subcategories'] == 1) {
                unset($subcategories[$i]);
            }
            $s['posts_num'] = $posts_num;
            $s['url'] = $this->module->getCategoryLink($s['id_category'], $s['link_rewrite']);
        }
        return $subcategories;
    }

    public function assignMetaFields($resource, $settings)
    {
        $meta_title = !empty($resource['meta_title']) ? $resource['meta_title'] : $resource['title'];
        if (!empty($settings['shop_name_in_mt'])) {
            $meta_title .= ' - '.Configuration::get('PS_SHOP_NAME');
        }
        $this->context->smarty->assign(array(
            'meta_title' => $meta_title,
            'meta_description' => $resource['meta_description'],
            'meta_keywords' => $resource['meta_keywords'],
        ));
    }

    public function setCurrentTemplate($tpl_name, $settings)
    {
        if ($this->module->is_17) {
            $this->context->smarty->assign(array(
                'html' => $this->displayTemplate($tpl_name),
            ));
            $page = 'blog';
            $this->context->controller->php_self = $page;
            if (!empty($settings['display_column_left']) && !empty($settings['display_column_right'])) {
                $layout = 'both-columns';
            } elseif (!empty($settings['display_column_left'])) {
                $layout = 'left-column';
            } elseif (!empty($settings['display_column_right'])) {
                $layout = 'right-column';
            } else {
                $layout = 'full-width';
            }
            $this->context->shop->theme->setPageLayouts(array($page => 'layout-'.$layout));
            $this->setTemplate('module:amazzingblog/views/templates/front/content-17.tpl');
        } else {
            $this->setTemplate($tpl_name);
        }
    }

    public function displayTemplate($tpl_name)
    {
        $local_path = _PS_MODULE_DIR_.$this->module->name.'/'.$this->module->name.'.php';
        return $this->module->display($local_path, 'views/templates/front/'.$tpl_name);
    }

    public function getPostData($id_post)
    {
        $query = new DbQuery();
        $query->select('p.*, pl.*, s.views, s.comments, s.likes');
        $query->from('a_blog_post', 'p');
        $lang_join_on = 'pl.id_post = p.id_post AND pl.id_lang = '.(int)$this->id_lang.
        ' AND pl.id_shop = '.(int)$this->id_shop;
        $query->innerJoin('a_blog_post_lang', 'pl', $lang_join_on);
        $query->leftJoin('a_blog_post_stats', 's', 's.id_post = p.id_post');
        $query->where('p.id_post = '.(int)$id_post);
        $query->where('p.active = 1');
        $this->module->onlyPublishedAssociation($query);
        return $this->module->db->getRow($query);
    }

    public function displayPost($id_post)
    {
        if (!$post = $this->getPostData($id_post)) {
            $this->redirect404();
        }
        $settings = $this->module->getSettings('post');
        $comment_settings = $this->module->getSettings('comment');
        $this->id_post = $id_post;
        $this->module->addPostStats($id_post, 'views');
        $post['views'] += 1;
        $params = array('resource_type' => 'post', 'id' => $id_post, 'post_category' => $post['id_category_default']);
        $this->module->prepareHeaderData($params);
        $img_type = $settings['main_img_type'];
        $main_path = 'posts/'.$post['id_post'].'/'.$img_type.'/'.$post['main_img'];
        if (is_file($this->module->img_dir_local.$main_path)) {
            $post['main_img'] = $this->module->img_dir.$main_path;
            $this->og_image = Tools::getHttpHost(true).$post['main_img'];
        } else {
            $post['main_img'] = '';
        }
        if (!empty($settings['show_tags'])) {
            $post['tags'] = $this->module->getPostTags($id_post, $this->id_lang, false);
        }
        if (!empty($this->module->general_settings['user_comments'])) {
            $comments = $this->module->db->executeS('
                SELECT * FROM '._DB_PREFIX_.'a_blog_comment c
                LEFT JOIN '._DB_PREFIX_.'a_blog_user bu ON bu.id_user = c.id_user
                WHERE c.id_post = '.(int)$id_post.' AND id_shop = '.(int)$this->id_shop.' AND c.active = 1
                '.(empty($comment_settings['instant_publish']) ? ' AND approved_by <> 0' : '').'
                ORDER BY date_add ASC
            ');
        } else {
            $comments = array();
        }
        $category_parents = $this->module->getCategoryParents($post['id_category_default']);
        if ($this->module->is_17) {
            $this->defineBreadCrumbItems($category_parents, $post['title']);
        }
        $this->context->smarty->assign(array(
            'ab_post' => $post,
            'ab_post_settings' => $settings,
            'ab_comment_settings' => $comment_settings,
            'ab_cat_parents' => $category_parents,
            'ab_user_data' => $this->module->getUserData($this->context->customer->id_guest),
            'ab_comments' => $comments,
            'avatars_dir' => $this->module->img_dir.'avatars/',
            'blog' => $this->module,
            'hide_left_column' => !$settings['display_column_left'],
            'hide_right_column' => !$settings['display_column_right'],
        ));
        $this->assignMetaFields($post, $settings);
        $this->setCurrentTemplate('post.tpl', $settings);
    }

    public function displayNotAvailable()
    {
        $not_available_txt = $this->module->l('Not available');
        $category_parents = $this->module->getCategoryParents($this->module->root_id);
        if ($this->module->is_17) {
            $this->defineBreadCrumbItems($category_parents, $not_available_txt);
        }
        $this->context->smarty->assign(array(
            'meta_title' => $not_available_txt,
            'not_available_txt' => $not_available_txt,
            'meta_description' => '',
            'meta_keywords' => '',
            'ab_cat_parents' => $category_parents,
            'blog' => $this->module,
        ));
        $this->setCurrentTemplate('not-available.tpl', $this->module->getSettings('category'));
    }

    public function defineBreadCrumbItems($category_parents, $current_title)
    {
        foreach ($category_parents as $c) {
            $this->breadcrumb_items[] = array(
                'title' => $c['title'],
                'url' => $this->module->getCategoryLink($c['id_category'], $c['link_rewrite']),
            );
        }
        $this->breadcrumb_items[] = array('title' => $current_title, 'url' => '');
    }

    public function ajaxSubmitComment()
    {
        $this->module->ajaxSubmitComment();
    }

    public function ajaxSendNotification()
    {
        $this->module->ajaxSendNotification();
    }

    public function ajaxLoadPosts()
    {
        $post_list_settings = $this->module->getSettings('postlist');
        $additional_filters = $this->module->unserialize(Tools::getValue('additional_filters'));
        foreach ($additional_filters as &$f) {
            $f = explode(',', $f);
        }
        $additional_filters['active'] = 1;
        $pagination_settings = $this->module->getPaginationSettings('post', $post_list_settings, $additional_filters);
        $posts = $this->module->getPostListInfos(
            $pagination_settings,
            $post_list_settings['order_by'],
            'DESC',
            $additional_filters
        );
        $this->context->smarty->assign(array(
            'settings' => $post_list_settings,
            'ab_pagination_settings' => $pagination_settings,
            'ab_first_page_url' => Tools::getValue('ab_first_page_url'),
            'posts' => $posts,
            'blog' => $this->module,
        ));
        $ret = array(
            'html' => utf8_encode($this->displayTemplate('post-list.tpl')),
        );
        exit(Tools::jsonEncode($ret));
    }
}
