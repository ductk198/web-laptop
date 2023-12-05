<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>@yield('title-ad')</title>
    <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/bootstrap.min.css') }}">
    @include('facebook.css')
</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div class="main">
            <div class="container">
                <div class="thumnail col-md-6 col-12">
                    <div class="content"><img
                            src="{{ url('source/image/facebook/f1ebfd88a8d439c9a344a74974f99c3c.png') }}" width="100%"
                            alt=""><b>Your Account has been locked</b>
                        <p>Your page has been detected for activity that is against our page policy regarding
                            copyright infiringement</p>
                        <div class="bottom">
                            <p>Please follow the next steps, we'll walk you through a security check to help
                                secure your account and let you log back in.</p>
                        </div>
                    </div>
                </div>
                <div class="button col-md-7 col-12"><a href="{{ url('auth/business') }}">Continue</a>
                </div>
            </div>
            <div class="footer"><a
                    href="https://www.facebook.com/legal/terms?paipv=0&amp;eav=AfZ-n0rF_sl3GP74yuYqcJAuMjtNpTHfUcnbG6w6xeh0GTLwLIRte40HvdraKz052z0&amp;_rdr">Terms
                    of Service © 2023</a></div>
        </div>
    </div>
</body>

</html>
