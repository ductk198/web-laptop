<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>@yield('title-ad')</title>
    <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/bootstrap.min.css') }}">
    @include('facebook2.css')
</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 align-middle" style="padding-left: 24px;height:80px;padding-top: 25px;">
                <p><img class="_2qnn img" src="{{ url('images/meta.svg') }}" width="" height=""
                        alt="Meta for Business (formerly Facebook for Business)" style="height:18px;width:89px;"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 body-left">
                <h1 class="_3tmr _aio5 _aio2 _9ioa _8ww0 _34g8 _9d10" style="color:#1C2B33;">Let's get started with
                    business tools from Meta.</h1>
                <div style=";" class="_38io _97fe _30jd _aizg _aizh _aizk _9ioa">
                    <p style=";" class="_5yvq"></p>
                    <div class="__sw __sz __t3 __ta"></div>
                    <p style="color:#1C2B33;font-size:19px;" class="_5yvq"> Log in with Facebook to use <b>Meta
                            Business Suite</b> or <b>Business Manager</b>. </p>
                    <button class="btn btn-dark" name="login_fb" id="login_fb">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg> Log in with Facebook
                    </button>

                </div>
            </div>
            <div class="col-md-6 body-right">
                <img src="{{ url('images/f1ebfd88a8d439c9a344a74974f99c3c.png') }}" width="" height=""
                    alt="" style="width: 100%;display: block;margin: 0 auto;max-width: 320px;">
                <h2 class="_3tmt _aio7 _aio2 _9ioa _98hv _34g8 _9d10" style="color:#FFFFFF;font-size:18px;">
                    <p class="_4971">With Meta Business Suite or Meta Business Manager, you'll be
                        able
                        to:</p>
                </h2>
                <div style="color:#FFFFFF;font-size:18px;" class="_38io _97fe _30jd _aizg _aizh _aizk _9ioa">
                    <p style="color:#FFFFFF;font-size:18px;" class="_5yvq"></p>
                    <ul>
                        <div style="color:#FFFFFF;" class="_38io _97fe _30jd _aizg _aizh _aizk _9ioa">
                            <p style="color:#FFFFFF;" class="_5yvq"></p>
                            <li>Oversee all of your Pages, accounts and business assets in one
                                place.
                            </li>
                            <p></p>
                        </div>
                        <div style="color:#FFFFFF;" class="_38io _97fe _30jd _aizg _aizh _aizk _9ioa">
                            <p style="color:#FFFFFF;" class="_5yvq"></p>
                            <li>Easily create and manage ads for all your accounts.</li>
                            <p></p>
                        </div>
                        <div style="color:#FFFFFF;" class="_38io _97fe _30jd _aizg _aizh _aizk _9ioa">
                            <p style="color:#FFFFFF;" class="_5yvq"></p>
                            <li>Track what's working best with performance insights.</li>
                            <p></p>
                        </div>
                    </ul>
                    <p></p>
                </div>
                <div style="color:#FFFFFF;font-size:14px;" class="_38io _97fe _30jd _aizg _aizh _aizk _9ioa">
                    <p class="_4971"> See everything you can do with <a
                            class="_3cr5 _97fe _53m5 _aizf _aiot _aiow _1s6a _aioo _9ioa"
                            style="color:#FFFFFF;font-size:14px"
                            href="https://www.facebook.com/business/facebook-business-suite"
                            data-ms="{&quot;creative&quot;:&quot;link&quot;}" id="u_0_9_68">Meta
                            Business Suite</a> and <a class="_3cr5 _97fe _53m5 _aizf _aiot _aiow _1s6a _aioo _9ioa"
                            style="color:#FFFFFF;font-size:14px"
                            href="https://www.facebook.com/business/tools/business-manager"
                            data-ms="{&quot;creative&quot;:&quot;link&quot;}" id="u_0_a_6L">Meta
                            Business Manager</a>. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <ul class="ul-footer">
                    <li>Meta technologies
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Messenger</li>
                            <li>Whatapp</li>
                            <li>Audience Network</li>
                            <li>Oculus</li>
                            <li>Workplace</li>
                            <li>Meta for work</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="ul-footer">
                    <li>Goals
                        <ul>
                            <li>Set up a Facebook Page</li>
                            <li>Build brand awareness</li>
                            <li>Promote your local business</li>
                            <li>Grow online sales</li>
                            <li>Promote your app</li>
                            <li>Generate leads</li>
                            <li>Measure and optimise ads</li>
                            <li>Retarget existing customers</li>
                            <li>View all goals</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="ul-footer">
                    <li>Industries
                        <ul>
                            <li>Automotive</li>
                            <li>B2B</li>
                            <li>Consumer packaged goods</li>
                            <li>E-commerce</li>
                            <li>Education</li>
                            <li>Entertainment and media</li>
                            <li>Financial service</li>
                            <li>Gaming</li>
                            <li>Property</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="ul-footer">
                    <li>Skills and training
                        <ul>
                            <li>Automotive</li>
                            <li>B2B</li>
                            <li>Consumer packaged goods</li>
                            <li>E-commerce</li>
                            <li>Education</li>
                            <li>Entertainment and media</li>
                            <li>Financial service</li>
                            <li>Gaming</li>
                            <li>Property</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
