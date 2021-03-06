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
{if $RECAPTCHA}
<h3>{$LANG.form.verify_human}</h3>
<div class="row">
   <div class="medium-6 columns">
      {if $RECAPTCHA==='2'}
         <div class="g-recaptcha" data-sitekey="{$CONFIG.recaptcha_public_key}"></div>
      {else}
      <script type="text/javascript">
         var RecaptchaOptions = {
            theme : 'custom',
            custom_theme_widget: 'recaptcha_widget'
         };
      </script>
      <div id="recaptcha_widget" style="display:none">
         <div class="row">
            <div id="recaptcha_image" class="small-8 columns"></div>
            <div class="medium-4 columns"><a href="javascript:Recaptcha.reload()"><i class="fa fa-refresh"></i></a></div>
         </div>
         <div class="recaptcha_only_if_incorrect_sol" class="error">Incorrect please try again</div>
         <span class="recaptcha_only_if_image"><label for="recaptcha_response_field">Enter the words above:</label></span>
         <span class="recaptcha_only_if_audio">Enter the numbers you hear:</span>
         <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" required />
         <div class="recaptcha_only_if_image hide"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
         <div class="recaptcha_only_if_audio hide"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
         <div><a href="javascript:Recaptcha.showhelp()" class="hide">Help</a></div>
      </div>
      <script type="text/javascript"
         src="http://www.google.com/recaptcha/api/challenge?k=6LfT4sASAAAAAOl71cRz11Fm0erGiqNG8VAfKTHn"></script>
      <noscript>
         <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LfT4sASAAAAAOl71cRz11Fm0erGiqNG8VAfKTHn"
            height="300" width="500" frameborder="0"></iframe><br>
         <textarea name="recaptcha_challenge_field" rows="3" cols="40">
         </textarea>
         <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
      </noscript>
      {/if}
   </div>
</div>
{/if}