{*
 * CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2014. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Web:   http://www.cubecart.com
 * Email:  sales@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
 *}
<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="utf-8">
<head>
  <meta charset="utf-8">
  <title>{$LANG.dashboard.title_admin_cp}</title>
  <link rel="shortcut icon" href="{$STORE_URL}/favicon.ico" type="image/x-icon">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{$SKIN_VARS.admin_folder}/skins/{$SKIN_VARS.skin_folder}/styles/layout.css" media="screen">
  <link rel="stylesheet" href="{$SKIN_VARS.admin_folder}/skins/{$SKIN_VARS.skin_folder}/styles/font-awesome.min.css">
  {if isset($JQUERY_STYLES)}
  	{foreach from=$JQUERY_STYLES item=style}
  	<link rel="stylesheet" type="text/css" href="{$style}" media="screen">
  	{/foreach}
  {/if}
  <link rel="stylesheet" type="text/css" href="js/styles/styles.php" media="screen">
</head>

<body>
  <div id="header">
  <span class="user_info">{$LANG.settings.title_welcome_back} <a href="?_g=settings&node=admins&action=edit&admin_id={$ADMIN_UID}">{$ADMIN_USER}</a> - <a href="?_g=logout">{$LANG.account.logout} <i class="fa fa-sign-out"></i></a></span>
  </div>
  <div id="wrapper">
  <div id="navigation">
  {include file='templates/common.search.php'}
  {if isset($NAVIGATION)}
    {foreach from=$NAVIGATION item=group}
	<div id="{$group.group}" class="menu" onclick="$('#menu_{$group.group}').toggle();">{$group.title}</div>
	{if isset($group.members)}
	<ul id="menu_{$group.group}" class="submenu">
	  {foreach from=$group.members item=nav}
	  <li><a href="{$nav.url}" target="{$nav.target}">{$nav.title}</a></li>
	  {/foreach}
	</ul>
	{/if}
	{/foreach}
  {/if}
  </div>
  <div id="content">
	<div id="tab_control">
	  {if isset($TABS)}
	  {foreach from=$TABS item=tab}
	  <div id="{$tab.tab_id}" class="tab">
		{if !empty($tab.notify)}<span class="tab_notify">{$tab.notify}</span>{/if}
		<a href="{$tab.url}{$tab.target}" accesskey="{$tab.accesskey}">{$tab.name}</a>
	  </div>
	  {/foreach}
	  {/if}
	</div>
	<div id="content_body">
	<div id="breadcrumbs">
	  <div class="inner">
	  <span class="helpdocs" style="float: right;">
		<a href="{$HELP_URL}" id="wikihelp" class="colorbox wiki">{$LANG.common.help}</a> | <a href="index.php" target="_blank">{$LANG.settings.store_status} - {if ($STORE_STATUS)}<span class="store_open">{$LANG.common.open}</span>{else}<span class="store_closed">{$LANG.common.closed}</span>{/if}</a>
	  </span>
	  <a href="?">{$LANG.dashboard.title_dashboard}</a>
	  {if isset($CRUMBS)}{foreach from=$CRUMBS item=crumb} &raquo; <a href="{$crumb.url}">{$crumb.title}</a>{/foreach}{/if}
	  </div>
	</div>
	{include file='templates/common.gui_message.php'}
	<div id="page_content">
	  <noscript><p class="warnText">{$LANG.settings.error_js_required}</p></noscript>
	  <div id="loading_content"><img src="{$SKIN_VARS.admin_folder}/skins/{$SKIN_VARS.skin_folder}/images/loading.gif" alt=""></div>
	  {$DISPLAY_CONTENT}
	</div>

	</div>
	{include file='templates/ccpower.php'}
  </div>
  </div>
  <div style="display: none" id="val_admin_folder">{$SKIN_VARS.admin_folder}</div>
  <div style="display: none" id="val_admin_file">{$SKIN_VARS.admin_file}</div>
  <div style="display: none" id="val_skin_folder">{$SKIN_VARS.skin_folder}</div>
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.10.4.min.js"></script>
  <script type="text/javascript" src="js/plugins.php"></script>
  <!-- Include CKEditor -->
  <script type="text/javascript" src="includes/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="includes/ckeditor/adapters/jquery.js"></script>
  <!-- Common JavaScript functionality -->
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/admin.js"></script>
  {if isset($CLOSE_WINDOW)}
  	<script type="text/javascript">
  	$(document).ready(function () {
  		setInterval(function() { window.close(); }, 1000);
  	});
  	</script>
  {/if}
  {if is_array($EXTRA_JS)}
  	{foreach from=$EXTRA_JS item=js_src}
  		<script type="text/javascript" src="{$js_src}"></script>
  	{/foreach}
  {/if}

</body>
</html>