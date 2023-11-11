<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="padding: 25px;padding-top: 0;">
        <form id="basicForm" autocomplete="off">
            <div class="modal-header custom-header px-0">
                <h5 id="exampleModalLabel" class="modal-title" style="font-size: 22px; font-weight: 600;">
                    Please Enter
                    Your Password </h5>
                <button type="button" id="btn-close" data-dismiss="modal"
                    style="background-color:transparent;border:none; color: #7d7e82">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body" style="padding: 0">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size: 16px; margin-bottom: 10px;"> For your security, you must enter your
                            password to continue. </p>
                        <label for="password"
                            style="color: #7d7e82;font-weight: 400;font-size: 14px;font-family: Helvetica Neue, Helvetica, Arial, lucida grande, tahoma, verdana, arial, sans-serif;">Password:</label>
                        <br />
                        <div class="input-group" id="show_hide_password">
                            <input class="form-control shadow-none" name="password" id="password" type="password">
                            <i class="bi bi-eye-slash"
                                style="position: absolute;z-index: 999;;right: 10px;top: 7px;cursor: pointer"
                                id="togglePassword">
                            </i>
                        </div>
                        <p class="password-error" style="color: #ff4d4f;font-size:14px;margin-top: 6px;display: none;">
                            Incorrect password</p>
                    </div>
                    <div class="col-md-12" style="text-align: right;padding-top: 20px">
                        <button class="btn btn-primary" id="submitLogin">
                            <i class="fa fa-spin fa-circle-o-notch" style="display: none" aria-hidden="true"></i>
                            Continue</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
