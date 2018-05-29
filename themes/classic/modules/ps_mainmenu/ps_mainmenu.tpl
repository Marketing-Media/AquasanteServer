{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
    {if $nodes|count}
      {if $depth == 0}
        <ul class="navbar-nav mr-auto" id="top-menu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink{$node.page_identifier}" data-depth="{$depth}">
          {foreach from=$nodes item=node}
              <li class=" {$node.type} {if $node.current} active {/if} nav-item  {if $node.children} dropdown {/if}" id="{$node.page_identifier}">  
                
                <a class="nav-link {if $node.children}dropdown-toggle"  id="navbarDropdown{$node.page_identifier}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" {/if} href="{$node.url}">
                 <i class="far fa-bars bfirst"></i> {$node.label}   
                </a>
                {menu nodes=$node.children depth=$node.depth parent=$node}              
              </li>   
          {/foreach}
        </ul>
      {else}
        <div class="dropdown-menu" aria-labelledby="navbarDropdown{$node.page_identifier}">
            {foreach from=$nodes item=node}  
              <a class="dropdown-item" href="{$node.url}">{$node.label}</a>
            {/foreach}
        </div>
      {/if}
    {/if}
    
{/function}


    

    {menu nodes=$menu.children}
    <div class="clearfix"></div>
    
