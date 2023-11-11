<style>
    .react-clock {
        display: block;
        position: relative;
    }

    .react-clock,
    .react-clock *,
    .react-clock *:before,
    .react-clock *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .react-clock__face {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border: 1px solid black;
        border-radius: 50%;
    }

    .react-clock__hand {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        right: 50%;
    }

    .react-clock__hand__body {
        position: absolute;
        background-color: black;
        transform: translateX(-50%);
    }

    .react-clock__mark {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        right: 50%;
    }

    .react-clock__mark__body {
        position: absolute;
        background-color: black;
        transform: translateX(-50%);
    }

    .react-clock__mark__number {
        position: absolute;
        left: -40px;
        width: 80px;
        text-align: center;
    }

    .react-clock__second-hand__body {
        background-color: red;
    }
</style>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    .main {
        max-height: 100vh;
        height: 100vh;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .thumnail {
        margin: auto;
    }

    .thumnail .content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        font-size: 1.08rem;
        width: 85%;
        margin: auto;
    }

    .thumnail .content b {
        margin: 15px 0 0 0;
    }

    .thumnail .content p {
        padding: 0 10px;
        margin: 15px 0;
        line-height: 1.08rem;
    }

    .thumnail .content .bottom {
        background-color: #F0F1F6;
    }

    .thumnail .content .bottom p {
        padding: 20px 10px;
        margin: 0;
    }

    .main .container .button {
        background: rgb(37, 116, 234);
        margin: 15px auto;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border-radius: 5px;
    }

    .main .container .button a {
        padding: 16px 0;
        width: 100%;
        text-align: center;
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-size: 1.1rem;
    }

    .main .footer {
        margin: 3rem 0;
        font-size: .9rem;
    }

    .main .footer a {
        text-decoration: none;
        color: black;
    }

    .main .footer a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {

        .thumnail img {
            width: 100%;
        }
    }


    /* BUSINESSS PAGE */

    .business .top-header {
        background-color: #355797;
        text-align: left;
        padding: 15px 20px;
    }

    .business .topHeader .metalogo {
        margin-top: -2px;
    }

    .business .metahead {
        color: #fff;
        display: inline-block;
        padding-left: 15px;
        margin-left: 15px;
        border-left: 1px solid #fff;
        margin-bottom: 0;
        font-size: 14px;
    }

    .business .searchicon {
        width: 20px;
        float: right;
        margin-top: 4px;
    }

    .business .masheader {
        background-repeat: no-repeat;
        background-size: cover;
    }

    .business .masheader .wrapper {
        background-color: rgba(36, 55, 96, .7);
    }

    .business .masheader .businesshelp {
        padding-top: 60px;
        margin-bottom: 0;
        color: #fff;
        text-align: center;
        font-family: Helvetica;
        font-size: 12px;
        letter-spacing: 3px;
        line-height: 21px;
    }

    .business .masheader .businesshelpcenter {
        padding-bottom: 60px;
        font-size: 40px;
        color: #fff;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        font-weight: 300;
        margin: 0;
    }

    .business .footer {
        background-color: #4080ff !important;
        margin-top: 70px !important;
        padding-top: 40px !important;
        padding-bottom: 40px !important;
        text-align: center !important;
    }

    .business .logofooter {
        width: 90px;
        padding-bottom: 15px;
    }

    .business .footer p {
        color: #fff;
    }

    .business .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .business ul {
        list-style-type: none;
        padding-left: 0 !important;
        margin-left: 0 !important;
    }

    .business ul li {
        padding-left: 0;
        margin-left: 0;
    }

    .business .footer ul li p {
        text-align: left;
        margin-bottom: 10px;
        font-size: 14px;
    }

    .business .fontbold {
        font-weight: 700;
    }

    .business .bottomfooter {
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
        margin: auto;
    }

    .business .bottomfooter ul li {
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 14px;
    }

    .business .form {
        padding: 25px 16px 0;
        max-width: 550px;
        margin: auto;
        margin-top: 60px;
        background-color: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        margin-bottom: 30px;
        border-radius: 10px;
    }

    .business .form .header-form .header-top {
        width: 80%;
        display: flex;
        margin: auto;
    }

    .business .form .header-form .header-bottom {
        width: 90%;
        display: flex;
        margin: auto;
        justify-content: space-between;
        color: rgb(48, 132, 244);
        font-size: 13px;
    }

    .business .form .header-form .line {
        width: 49%;
        height: 2px;
        max-width: 100%;
        background-color: rgb(48, 132, 244);
        margin: auto;
    }

    .business .form .header-form .dot {
        width: 8px;
        height: 8px;
        background-color: rgb(48, 132, 244);
        border-radius: 50px;
        margin: auto;
    }

    .business .form strong {
        font-weight: bolder;
    }

    .business .form .form-group {
        margin-bottom: 1rem;
    }

    .business .form label {
        font-weight: 400;
        font-size: 14px;
        font-family: Helvetica Neue, Helvetica, Arial, lucida grande, tahoma, verdana, arial, sans-serif;
    }

    .business .form .butoni {
        background-color: #eaf4fc !important;
        color: #267df1 !important;
        margin-top: 15px !important;
        font-weight: 400 !important;
        padding: 5px 20px !important;
        border-radius: 4px !important;
        text-transform: none !important;
        font-weight: 700 !important;
        opacity: 1 !important;
        width: 100%;
    }

    /* POPUP START */
    .popup {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        opacity: 0;
        z-index: -99;
        transition: 0.3s ease-in-out;
    }

    .popup.active {
        opacity: 1;
        z-index: 99;
        transition: 0.3s ease-in-out;
    }

    .popup .background {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.3);
        opacity: 0;
        transition: 0.2s ease-in-out;
    }

    .popup.active .background {
        opacity: 1;
        transition: 0.2s ease-in-out;
    }

    .popup .content {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        max-width: 650px;
        height: min-content;
        background-color: white;
        margin: auto;
        padding: 25px;
        border-radius: 5px;
    }

    .popup .modal-header {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
        align-items: flex-start;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #dee2e6;
        border-top-left-radius: calc(0.3rem - 1px);
        border-top-right-radius: calc(0.3rem - 1px);
    }

    .popup button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .popup .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
    }

    .popup label {
        color: #7d7e82;
        font-weight: 400;
        font-size: 14px;
        font-family: Helvetica Neue, Helvetica, Arial, lucida grande, tahoma, verdana, arial, sans-serif;
    }


    .popup .butoni {
        color: rgb(255, 255, 255) !important;
        background-color: rgb(44, 132, 244);
        margin-top: 20px !important;
        width: auto !important;
        padding: 5px 20px;
        border-radius: 4px !important;
        text-transform: none !important;
        font-weight: 700 !important;
        opacity: 1 !important;
    }

    /* CONFIRM */
    .confirm .header {
        background-color: #fff;
        padding-top: 8px;
        padding-bottom: 8px;
        -webkit-box-shadow: 1px 1px 8px 1px rgba(0, 0, 0, .1);
    }

    .confirm .header .fotoh {
        width: 94%;
        margin: 0 auto;
    }

    .confirm .twh3 {
        border-bottom: 1px solid rgba(0, 0, 0, .101);
        font-size: 16px;
        color: #4b4f56;
        padding: 12px;
        font-weight: 700;
    }

    .confirm .content {
        box-shadow: 1px 1px 8px 1px rgba(0, 0, 0, .1);
        max-width: 650px;
        border-radius: 10px;
        margin: 50px auto 60px auto;
    }

    .confirm .bodyyy p {
        font-size: 13px;
    }

    .confirm .bodyyy {
        padding: 10px 20px !important;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
    }

    .confirm .form-control {
        border: 1px solid #d0d0d0 !important;
        border-radius: 4px !important;
        padding: 10px !important;
        resize: none !important;
        -webkit-appearance: none !important;
    }

    #sendcodeagain {
        font-size: 14px;
        padding-left: 10px;
        border: none;
        color: #385898;
        text-decoration: none;
        display: none;
        font-weight: 600;
    }

    #sendcodeagain.active {
        display: block;
    }

    #timer {
        padding-left: 10px !important;
    }

    #timer.active {
        display: none;
    }

    .confirm .footerii {
        padding: 10px 20px !important;
        height: 55px;
    }

    #code::-webkit-outer-spin-button,
    #code::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin-right: 10px;
    }

    #code[type=number] {
        -moz-appearance: textfield;
    }

    .confirm .butoni {
        padding: 3px 7px;
    }

    .confirm .popup {
        font-size: 14px;
    }

    .confirm .popup p {
        margin: 5px 0;
    }

    /* UPLOAD IMAGES */

    .upload-image {
        background: #dddfe2;
        min-height: 100vh;
    }

    .upload-image .main-upload .form {
        width: 100%;
    }

    .upload-image .main-upload .form .bg {
        width: 100%;
        background-color: white;
        border-radius: 0px 0px 5px 5px;
    }

    .upload-image .main-upload .form h6 {
        color: black;
        margin: 0;
        padding: 12px;
        font-weight: 700;
        border-bottom-color: rgba(0, 0, 0, .101);
        border-bottom: 1px solid #e5e5e5;
        background: #f5f6f7;
    }

    .upload-image .main-upload .form p {
        padding: 8px;
        margin: 0;
        font-size: 14px;
        border-bottom-color: rgba(0, 0, 0, .101);
        border-bottom: 1px solid #e5e5e5;
    }

    .upload-image .main-upload .form .item-form {
        padding: 8px;
    }

    .upload-image .main-upload .form .item-form p {
        padding: 0;
        border: none;
    }

    .upload-image .main-upload .form .item-form p.mini {
        font-size: 12px;
    }

    .upload-image .main-upload .form .item-form #file {
        padding: 0;
        margin: 8px 0;
        outline: none;
        border: none;
    }

    .upload-image .main-upload .form #btn-submit {
        width: 100%;
        margin-top: 12px;
        text-shadow: 0 -1px rgba(0, 0, 0, .25);
        background-color: #627aad;
        outline: none;
        border: none;
        padding: 7px 0;
        color: white;
        border-radius: 5px;
        font-weight: 700;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
    }

    .upload-image .footer {
        margin-top: 20px;
    }

    .upload-image .footer b {
        font-size: 16px;
    }

    .upload-image .footer a {
        color: #576b95;
        cursor: pointer;
        text-decoration: none;
        font-size: 14px;
        line-height: 18px;
    }

    .ant-input-affix-wrapper>input.ant-input {
        margin: 0;
        padding: 5px 10px !important;
    }

    .ant-input-number-handler-wrap {
        display: none !important;
    }

    .center-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Center horizontally */
        justify-content: center;
        /* Center vertically */
        height: 100vh;
        /* Make the container fill the viewport height */
    }
</style>
<style>
    .carousel .control-arrow,
    .carousel.carousel-slider .control-arrow {
        -webkit-transition: all .25s ease-in;
        -moz-transition: all .25s ease-in;
        -ms-transition: all .25s ease-in;
        -o-transition: all .25s ease-in;
        transition: all .25s ease-in;
        opacity: .4;
        filter: alpha(opacity=40);
        position: absolute;
        z-index: 2;
        top: 20px;
        background: none;
        border: 0;
        font-size: 32px;
        cursor: pointer
    }

    .carousel .control-arrow:focus,
    .carousel .control-arrow:hover {
        opacity: 1;
        filter: alpha(opacity=100)
    }

    .carousel .control-arrow:before,
    .carousel.carousel-slider .control-arrow:before {
        margin: 0 5px;
        display: inline-block;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        content: ''
    }

    .carousel .control-disabled.control-arrow {
        opacity: 0;
        filter: alpha(opacity=0);
        cursor: inherit;
        display: none
    }

    .carousel .control-prev.control-arrow {
        left: 0
    }

    .carousel .control-prev.control-arrow:before {
        border-right: 8px solid #fff
    }

    .carousel .control-next.control-arrow {
        right: 0
    }

    .carousel .control-next.control-arrow:before {
        border-left: 8px solid #fff
    }

    .carousel-root {
        outline: none
    }

    .carousel {
        position: relative;
        width: 100%
    }

    .carousel * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .carousel img {
        width: 100%;
        display: inline-block;
        pointer-events: none
    }

    .carousel .carousel {
        position: relative
    }

    .carousel .control-arrow {
        outline: 0;
        border: 0;
        background: none;
        top: 50%;
        margin-top: -13px;
        font-size: 18px
    }

    .carousel .thumbs-wrapper {
        margin: 20px;
        overflow: hidden
    }

    .carousel .thumbs {
        -webkit-transition: all .15s ease-in;
        -moz-transition: all .15s ease-in;
        -ms-transition: all .15s ease-in;
        -o-transition: all .15s ease-in;
        transition: all .15s ease-in;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        position: relative;
        list-style: none;
        white-space: nowrap
    }

    .carousel .thumb {
        -webkit-transition: border .15s ease-in;
        -moz-transition: border .15s ease-in;
        -ms-transition: border .15s ease-in;
        -o-transition: border .15s ease-in;
        transition: border .15s ease-in;
        display: inline-block;
        margin-right: 6px;
        white-space: nowrap;
        overflow: hidden;
        border: 3px solid #fff;
        padding: 2px
    }

    .carousel .thumb:focus {
        border: 3px solid #ccc;
        outline: none
    }

    .carousel .thumb.selected,
    .carousel .thumb:hover {
        border: 3px solid #333
    }

    .carousel .thumb img {
        vertical-align: top
    }

    .carousel.carousel-slider {
        position: relative;
        margin: 0;
        overflow: hidden
    }

    .carousel.carousel-slider .control-arrow {
        top: 0;
        color: #fff;
        font-size: 26px;
        bottom: 0;
        margin-top: 0;
        padding: 5px
    }

    .carousel.carousel-slider .control-arrow:hover {
        background: rgba(0, 0, 0, 0.2)
    }

    .carousel .slider-wrapper {
        overflow: hidden;
        margin: auto;
        width: 100%;
        -webkit-transition: height .15s ease-in;
        -moz-transition: height .15s ease-in;
        -ms-transition: height .15s ease-in;
        -o-transition: height .15s ease-in;
        transition: height .15s ease-in
    }

    .carousel .slider-wrapper.axis-horizontal .slider {
        -ms-box-orient: horizontal;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -moz-flex;
        display: -webkit-flex;
        display: flex
    }

    .carousel .slider-wrapper.axis-horizontal .slider .slide {
        flex-direction: column;
        flex-flow: column
    }

    .carousel .slider-wrapper.axis-vertical {
        -ms-box-orient: horizontal;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -moz-flex;
        display: -webkit-flex;
        display: flex
    }

    .carousel .slider-wrapper.axis-vertical .slider {
        -webkit-flex-direction: column;
        flex-direction: column
    }

    .carousel .slider {
        margin: 0;
        padding: 0;
        position: relative;
        list-style: none;
        width: 100%
    }

    .carousel .slider.animated {
        -webkit-transition: all .35s ease-in-out;
        -moz-transition: all .35s ease-in-out;
        -ms-transition: all .35s ease-in-out;
        -o-transition: all .35s ease-in-out;
        transition: all .35s ease-in-out
    }

    .carousel .slide {
        min-width: 100%;
        margin: 0;
        position: relative;
        text-align: center
    }

    .carousel .slide img {
        width: 100%;
        vertical-align: top;
        border: 0
    }

    .carousel .slide iframe {
        display: inline-block;
        width: calc(100% - 80px);
        margin: 0 40px 40px;
        border: 0
    }

    .carousel .slide .legend {
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        position: absolute;
        bottom: 40px;
        left: 50%;
        margin-left: -45%;
        width: 90%;
        border-radius: 10px;
        background: #000;
        color: #fff;
        padding: 10px;
        font-size: 12px;
        text-align: center;
        opacity: 0.25;
        -webkit-transition: opacity .35s ease-in-out;
        -moz-transition: opacity .35s ease-in-out;
        -ms-transition: opacity .35s ease-in-out;
        -o-transition: opacity .35s ease-in-out;
        transition: opacity .35s ease-in-out
    }

    .carousel .control-dots {
        position: absolute;
        bottom: 0;
        margin: 10px 0;
        padding: 0;
        text-align: center;
        width: 100%;
        z-index: 1
    }

    @media (min-width: 960px) {
        .carousel .control-dots {
            bottom: 0
        }
    }

    .carousel .control-dots .dot {
        -webkit-transition: opacity .25s ease-in;
        -moz-transition: opacity .25s ease-in;
        -ms-transition: opacity .25s ease-in;
        -o-transition: opacity .25s ease-in;
        transition: opacity .25s ease-in;
        opacity: .3;
        filter: alpha(opacity=30);
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.9);
        background: #fff;
        border-radius: 50%;
        width: 8px;
        height: 8px;
        cursor: pointer;
        display: inline-block;
        margin: 0 8px
    }

    .carousel .control-dots .dot.selected,
    .carousel .control-dots .dot:hover {
        opacity: 1;
        filter: alpha(opacity=100)
    }

    .carousel .carousel-status {
        position: absolute;
        top: 0;
        right: 0;
        padding: 5px;
        font-size: 10px;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.9);
        color: #fff
    }

    .carousel:hover .slide .legend {
        opacity: 1
    }

    span.error {
        color: red !important;
    }

    @media (min-width: 1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1320px;
        }
    }
</style>
