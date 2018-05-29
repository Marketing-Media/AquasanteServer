{*
* 2007-2018 Amazzing
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
*
*  @author    Amazzing <mail@amazzing.ru>
*  @copyright 2007-2018 Amazzing
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*
*}

	{if $user_data.user_name}
<form class="new-comment{if $ab_comment_settings.captcha} has-captcha{/if}" enctype="multipart/form-data">
	<input type="hidden" name="id_post" value="{$id_post|intval}">
	<input type="hidden" name="action" value="SubmitComment">
	<div class="comment-item" data-name="content">
		<div class="user-avatar">
			<div class="avatar-img{if empty($user_data.avatar)} empty{/if}"{if !empty($user_data.avatar)} style="background-image:url({$avatars_dir|cat:$user_data.avatar|escape:'html':'UTF-8'})"{/if}></div>
			<div class="hidden"><input class="avatar-file" type="file" name="avatar_file"></div>
			<a href="#" class="edit-avatar text-center" title="{l s='Upload new' mod='amazzingblog'}"><i class="icon-file-upload"></i></a>
		</div>
		{if ($ab_comment_settings.allow_html)}
			<script type="text/javascript" src="//cdn.tinymce.com/4/tinymce.min.js"></script>
			<div class="mce-placeholder">{l s='Your comment...' mod='amazzingblog'}</div>
			<div id="new-comment-content" class="mce-input"></div>
		{else}
			<textarea id="new-comment-content" class="textarea-input" name="content" placeholder="{l s='Your comment...' mod='amazzingblog'}"></textarea>
		{/if}
	</div>
	<div class="new-comment-footer">
		<span class="input-label">{l s='Comment as' mod='amazzingblog'}</span>
		<div class="inline-block" data-name="user_name">
			<input type="text" value="{$user_data.user_name|escape:'html':'UTF-8'}" name="user_name" placeholder="{l s='Your Name' mod='amazzingblog'}">
			<div class="note-below-text">* {l s='This name will be applied to all of your comments' mod='amazzingblog'}</div>
		</div>
		<button type="{if $ab_comment_settings.captcha}button{else}submit{/if}" class="btn btn-primary submit-comment">{l s='Submit' mod='amazzingblog'}</button>
		{if $ab_comment_settings.captcha}
			<script src="https://www.google.com/recaptcha/api.js" async defer></script>
			<div class="g-recaptcha" data-sitekey="{$ab_comment_settings.captcha_key|escape:'html':'UTF-8'}" data-callback="captchaReady" data-size="invisible" data-badge="inline"></div>
		{/if}
	</div>
</form>
{/if}
{* since 1.5.0 *}
