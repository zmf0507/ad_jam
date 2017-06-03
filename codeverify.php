<?php
session_start();
include 'db.php';
include 'redirectverify.php';

$wer = $_POST['code'];

$rr = $conn->prepare("SELECT * FROM users WHERE username = ?");
$rr->bindParam(1,$_SESSION['uname']);
$rr->execute();
$r = $rr->fetch();

if($wer == $r['verify'])
{
  $to      = $r['email'];
  $subject = ' Congratulations '.$_SESSION['uname'];

  $message .= '<style id="media-query">
    /* Client-specific Styles & Reset */
    #outlook a {
        padding: 0;
    }

    /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
    }

    /* Buttons */
    .button a {
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
        text-align: center;
    }

    .button a div {
        text-align: center !important;
    }

    /* Outlook First */
    body.outlook p {
        display: inline !important;
    }

    /*  Media Queries */
  @media only screen and (max-width: 500px) {
  table[class="body"] img {
    height: auto !important;
    width: 100% !important; }
  table[class="body"] img.fullwidth {
    max-width: 100% !important; }
  table[class="body"] center {
    min-width: 0 !important; }
  table[class="body"] .container {
    width: 95% !important; }
  table[class="body"] .row {
    width: 100% !important;
    display: block !important; }
  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important; }
  table[class="body"] .columns, table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important; }
  table[class="body"] .wrapper.first .columns, table[class="body"] .wrapper.first .column {
    display: table !important; }
  table[class="body"] table.columns td, table[class="body"] table.column td, .col {
    width: 100% !important; }
  table[class="body"] table.columns td.expander {
    width: 1px !important; }
  table[class="body"] .right-text-pad, table[class="body"] .text-pad-right {
    padding-left: 10px !important; }
  table[class="body"] .left-text-pad, table[class="body"] .text-pad-left {
    padding-right: 10px !important; }
  table[class="body"] .hide-for-small, table[class="body"] .show-for-desktop {
    display: none !important; }
  table[class="body"] .show-for-small, table[class="body"] .hide-for-desktop {
    display: inherit !important; }
  .mixed-two-up .col {
    width: 100% !important; } }
  @media screen and (max-width: 500px) {
      div[class="col"] {
          width: 100% !important;
      }
    }

    @media screen and (min-width: 501px) {
      table[class="container"] {
          width: 500px !important;
      }
    }
  </style>
  <table class="body" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed" cellpadding="0" cellspacing="0" width="100%" border="0">
      <tbody><tr style="vertical-align: top">
          <td class="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF" align="center" valign="top">

              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #00AFFF" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px">
        <div style="color:#FFFFFF;line-height:120%;font-family:\'Lucida Sans Unicode\', \'Lucida Grande\', \'Lucida Sans\', Geneva, Verdana, sans-serif;">
          <div style=\'font-family:"Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Geneva, Verdana, sans-serif;font-size:12px;line-height:14px;color:#FFFFFF;text-align:left;\'><p style="margin: 0;font-size: 18px;line-height: 22px"><span style="font-size: 22px; line-height: 26px;"><strong><span style="line-height: 26px; font-size: 22px;"><span style="font-size: 40px; line-height: 57px;">SCONJ</span></span></strong></span></p></div>
        </div>
    </td>
  </tr>
  </tbody></table>
  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 5px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#FFFFFF;line-height:120%;font-family:\'Lucida Sans Unicode\', \'Lucida Grande\', \'Lucida Sans\', Geneva, Verdana, sans-serif;">
          <div style=\'font-family:"Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Geneva, Verdana, sans-serif;font-size:12px;line-height:14px;color:#FFFFFF;text-align:left;\'><p style="margin: 0;font-size: 14px;line-height: 17px"><span style="font-size: 14px; line-height: 16px;" id="_mce_caret" data-mce-bogus="true"><span style="font-size: 28px; line-height: 33px;">&#65279;A students network</span></span></p></div>
        </div>
    </td>
  </tr>
  </tbody></table>
  </td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px">
        <div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">
          <div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px"><span style="font-size: 24px; line-height: 28px;"><strong><span style="line-height: 28px; font-size: 24px;">Congratualtions '.$_SESSION['uname'].'</span></strong></span></p></div>
        </div>
    </td>
  </tr>
  </tbody></table>
  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 10px">
        <div style="color:#777777;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">
          <div style="font-size:12px;line-height:14px;color:#777777;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 12px;line-height: 14px">&nbsp;You are the new member of SCONJ family</p></div>
        </div>
    </td>
  </tr>
  </tbody></table>
  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#aaaaaa;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">
          <div style=\'font-size:12px;line-height:14px;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;color:#aaaaaa;text-align:left;\'><p style="margin: 0;font-size: 12px;line-height: 14px"><span style="font-size: 20px; line-height: 24px;"></span><span style="font-size: 20px; line-height: 24px;">&#65279; .</span><span style="font-size: 20px; line-height: 24px;">You have successfully verified your account@SCONJ and now you can enjoy our awesome features</span></p></div>
        </div>
    </td>
  </tr>
  </tbody></table>
  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr style="vertical-align: top">
    <td class="button-container" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
      <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tbody><tr style="vertical-align: top">
          <td class="button" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%" align="center" valign="middle">
              <!--[if mso]>
                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href=""
                  style="
                    height:42px;
                    v-text-anchor:middle;
                    width:410px;"
                    arcsize="10%"
                    strokecolor="#00AFFF"
                    fillcolor="#00AFFF" >
                <w:anchorlock/>
                  <center
                    style="color:#ffffff;
                      font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;
                      font-size:16px;">
              <![endif]-->
             <!--[if !mso]><!- - --><div style="display: inline-block;
              border-radius: 4px;
              -webkit-border-radius: 4px;
              -moz-border-radius: 4px;
              max-width: 80%;
              width: 100%;
              border-top: 0px solid transparent;
              border-right: 0px solid transparent;
              border-bottom: 0px solid transparent;
              border-left: 0px solid transparent;" align="center">

              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 42" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;border-radius: 4px;                   -webkit-border-radius: 4px;                   -moz-border-radius: 4px;                  color: #ffffff;                  background-color: #00AFFF;                  padding-top: 5px;                   padding-right: 20px;                  padding-bottom: 5px;                  padding-left: 20px;                  font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align: center" valign="middle"><!--<![endif]-->
                  <a href="www.sconj.org" style="display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;background-color: #00AFFF;color: #ffffff" href="" target="_blank">
                        <span style="font-size:16px;line-height:32px;">Click here to Login</span>
                  </a>
                <!--[if !mso]><!- - --></td></tr></tbody></table>
              </div><!--<![endif]-->
              <!--[if mso]>
                    </center>
                </v:roundrect>
              <![endif]-->
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
  </tbody></table>
  </td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #444444" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 25px;padding-right: 0px;padding-bottom: 25px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="center" valign="top">
      <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr style="vertical-align: top">
          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;max-width: 193px" align="center" valign="top">

            <!--[if (gte mso 9)|(IE)]>
            <table width="203" align="left" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left">
            <![endif]-->
            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%" align="left" cellpadding="0" cellspacing="0" border="0">
              <tbody><tr style="vertical-align: top">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="left" valign="middle">


                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0" height="37">
                      <tbody><tr style="vertical-align: top">
                          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="37" align="left" valign="middle">
                            <a href="https://www.facebook.com/sconjify" title="Facebook" target="_blank">
                                <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important" src="www.sconj.org/images/facebook.png" alt="Facebook" title="Facebook" width="32">
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0" height="37">
                      <tbody><tr style="vertical-align: top">
                          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="37" align="left" valign="middle">
                            <a href="http://twitter.com/sconj" title="Twitter" target="_blank">
                                <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important" src="www.sconj.org/images/twitter.png" alt="Twitter" title="Twitter" width="32">
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0" height="37">
                      <tbody><tr style="vertical-align: top">
                          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="37" align="left" valign="middle">
                            <a href="https://plus.google.com/+SconjOrgz/posts?gmbpt=true&hl=en" title="Google+" target="_blank">
                                <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important" src="www.sconj.org/images/googleplus.png" alt="Google+" title="Google+" width="32">
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0" height="37">
                      <tbody><tr style="vertical-align: top">
                          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="37" align="left" valign="middle">
                            <a href="https://www.linkedin.com/in/zaki-mustafa-530503104?trk=nav_responsive_tab_profile" title="LinkedIn" target="_blank">
                                <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important" src="www.sconj.org/images/linkedin.png" alt="LinkedIn" title="LinkedIn" width="32">
                            </a>
                          </td>
                      </tr>
                  </tbody></table>

                </td>
              </tr>
            </tbody></table>
            <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
  </tbody></table><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#bbbbbb;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">
          <div style="font-size:12px;line-height:14px;color:#bbbbbb;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 12px; line-height: 14px; background-color: transparent;"><a style="color:#00BDFF;text-decoration: none;" href="http://www.sconj.org" target="_blank">SCONJ</a>&nbsp;Network Pvt. Ltd. &#169; 2016</span></p><p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 12px; line-height: 14px; background-color: transparent;">From India, With love</span></p></div>
        </div>
    </td>
  </tr>
  </tbody></table>
  </td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
          </td>
      </tr>
  </tbody></table>


  </body>';
  $sender_email = "verify@sconj.org";
 $headers = "Content-Type: text/html; charset=UTF-8\r\n";

 $headers .= 'From: ' . $sender_email . "\r\n" .
     'Reply-To: ' . $sender_email . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
$m = "yes";
  $rr = $conn->prepare("UPDATE users set verify = ? WHERE username = ?");
  $rr->bindParam(1,$m);
  $rr->bindParam(2,$_SESSION['uname']);
  $rr->execute();

  header("location: moreinfo.php");
}
else {
    header("location: noverify.php");
}


?>
