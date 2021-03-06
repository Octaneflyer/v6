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
<div id="general" class="tab_content">
	<h3>{$LANG.maintain.title_query_db}</h3>
	<p>{$INFO} {if !empty($PREFIX)} {$LANG.maintain.table_prefix}: '{$PREFIX}'{/if}</p>
	<form action="{$VAL_SELF}" method="post">
		<fieldset><legend>{$LANG.maintain.query_box}</legend>
		<div><textarea name="query" id="query" rows="25" cols="100">{$VAL_QUERY}</textarea></div>
	  <div>
		<input type="hidden" name="execute" value="1">
		<input type="hidden" name="previous-tab" id="previous-tab" value="sql">
		<input type="submit" value="{$LANG.form.submit}">
	  </div>
	  </fieldset>
	  <input type="hidden" name="token" value="{$SESSION_TOKEN}">
	</form>
</div>