:where(html) {
    -webkit-text-size-adjust: 100%;
    -moz-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.15
}

:where(h1) {
    font-size: 2em;
    margin-block-end:.67em;margin-block-start:.67em}

:where(dl,ol,ul) :where(dl,ol,ul) {
    margin-block-end:0;margin-block-start:0}

:where(hr) {
    box-sizing: initial;
    color: inherit;
    height: 0
}

:where(abbr[title]) {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
}

:where(b,strong) {
    font-weight: bolder
}

:where(code,kbd,pre,samp) {
    font-family: monospace,monospace;
    font-size: 1em
}

:where(small) {
    font-size: 80%
}

:where(table) {
    border-color: currentColor;
    text-indent: 0
}

:where(button,input,select) {
    margin: 0
}

:where(button) {
    text-transform: none
}

:where(button,input:is([type=button i],[type=reset i],[type=submit i])) {
    -webkit-appearance: button
}

:where(progress) {
    vertical-align: initial
}

:where(select) {
    text-transform: none
}

:where(textarea) {
    margin: 0
}

:where(input[type=search i]) {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

::-webkit-inner-spin-button,::-webkit-outer-spin-button {
    height: auto
}

::-webkit-input-placeholder {
    color: inherit;
    opacity: .54
}

::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

:where(button,input:is([type=button i],[type=color i],[type=reset i],[type=submit i]))::-moz-focus-inner {
    border-style: none;
    padding: 0
}

:where(button,input:is([type=button i],[type=color i],[type=reset i],[type=submit i]))::-moz-focusring {
    outline: 1px dotted ButtonText
}

:where(:-moz-ui-invalid) {
    box-shadow: none
}

:where(dialog) {
    background-color: #fff;
    border: solid;
    color: #000;
    height: -moz-fit-content;
    height: -webkit-fit-content;
    height: fit-content;
    left: 0;
    margin: auto;
    padding: 1em;
    position: absolute;
    right: 0;
    width: -moz-fit-content;
    width: -webkit-fit-content;
    width: fit-content
}

:where(dialog:not([open])) {
    display: none
}

:where(summary) {
    display: list-item
}

:root {
    --swiper-navigation-size: 44px;
    --swiper-theme-color: #007aff
}

body {
    -webkit-text-size-adjust: none;
    -moz-text-size-adjust: none;
    text-size-adjust: none;
    background-color: #242424;
    font-family: Arial,Microsoft JhengHei,Helvetica,sans-serif;
    font-size: 13px;
    margin: 0;
    padding: 0
}

* {
    -ms-overflow-style: none
}

::-webkit-scrollbar {
    display: none
}

.scrollBody {
    display: flex;
    height: 100vh;
    justify-content: center;
    overflow: hidden;
    width: 100vw
}

.scrollBody>.scrollbar-macosx {
    width: 100%
}

.scrollBody>.scrollbar-macosx>.scroll-element {
    z-index: 1000
}

.scrollBody>.scrollbar-macosx>.scroll-element.scroll-y .scroll-bar {
    background-color: #0000
}

.scrollBody>.scrollbar-macosx>.scroll-element.scroll-x .scroll-bar {
    box-shadow: 0 0 2px gray;
    height: 17px;
    opacity: .5;
    top: -17px;
    z-index: 999
}

.block-ui {
    position: relative
}

body.block-ui {
    position: static
}

.block-ui-main>.block-ui-container,body.block-ui>.block-ui-container {
    position: fixed
}

.block-ui-container {
    bottom: 0;
    filter: alpha(opacity=0);
    height: 0;
    left: 0;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 8000
}

.block-ui-active>.block-ui-container {
    cursor: wait;
    height: 100%
}

.block-ui-active .block-ui-active>.block-ui-container {
    height: 0
}

.block-ui-visible>.block-ui-container {
    filter: alpha(opacity=100);
    opacity: 1
}

.block-ui-overlay {
    background-color: #fff;
    filter: alpha(opacity=50);
    height: 100%;
    opacity: .5;
    width: 100%
}

.block-ui-message-container {
    height: 0;
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
    top: 25%;
    z-index: 10001
}

.block-ui-message {
    border-radius: 4px;
    color: #f5f5f5;
    display: inline-block;
    filter: alpha(opacity=100);
    font-size: 16px;
    font-weight: 700;
    padding: 10px;
    text-align: left
}

.block-ui-anim-fade>.block-ui-container {
    display: none;
    transition: height 0s linear .2s,opacity .2s ease 0s
}

.block-ui-anim-fade.block-ui-active>.block-ui-container {
    display: block;
    transition-delay: 0s
}

.swal2-container {
    -webkit-overflow-scrolling: touch;
    align-items: center;
    background-color: #0000;
    bottom: 0;
    display: flex;
    flex-direction: row;
    justify-content: center;
    left: 0;
    overflow-x: hidden;
    padding: 10px;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 9999
}

.swal2-container.swal2-top {
    align-items: flex-start
}

.swal2-container.swal2-top-left,.swal2-container.swal2-top-start {
    align-items: flex-start;
    justify-content: flex-start
}

.swal2-container.swal2-top-end,.swal2-container.swal2-top-right {
    align-items: flex-start;
    justify-content: flex-end
}

.swal2-container.swal2-center {
    align-items: center
}

.swal2-container.swal2-center-left,.swal2-container.swal2-center-start {
    align-items: center;
    justify-content: flex-start
}

.swal2-container.swal2-center-end,.swal2-container.swal2-center-right {
    align-items: center;
    justify-content: flex-end
}

.swal2-container.swal2-bottom {
    align-items: flex-end
}

.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start {
    align-items: flex-end;
    justify-content: flex-start
}

.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right {
    align-items: flex-end;
    justify-content: flex-end
}

.swal2-container.swal2-grow-fullscreen>.swal2-modal {
    align-self: stretch;
    display: flex!important;
    flex: 1 1;
    justify-content: center
}

.swal2-container.swal2-grow-row>.swal2-modal {
    align-content: center;
    display: flex!important;
    flex: 1 1;
    justify-content: center
}

.swal2-container.swal2-grow-column {
    flex: 1 1;
    flex-direction: column
}

.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top {
    align-items: center
}

.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start {
    align-items: flex-start
}

.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right {
    align-items: flex-end
}

.swal2-container.swal2-grow-column>.swal2-modal {
    align-content: center;
    display: flex!important;
    flex: 1 1;
    justify-content: center
}

.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
    margin: auto
}

@media (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .swal2-container .swal2-modal {
        margin: 0!important
    }
}

.swal2-container.swal2-fade {
    transition: background-color .1s
}

.swal2-container.swal2-backdrop-show {
    background-color: #0006
}

.swal2-popup {
    background: #fff;
    border-radius: .3125em;
    box-sizing: border-box;
    display: none;
    flex-direction: column;
    font-family: inherit;
    font-size: 1rem;
    justify-content: center;
    max-width: 100%;
    overflow: hidden;
    padding: 1em 2em;
    position: relative;
    width: 18em
}

.swal2-popup:focus {
    outline: none
}

.swal2-popup.swal2-loading {
    overflow-y: hidden
}

.swal2-popup .swal2-header {
    display: flex;
    margin-bottom: 1em
}

.swal2-popup .swal2-header,.swal2-popup .swal2-title {
    align-items: center;
    flex-direction: column;
    justify-content: center
}

.swal2-popup .swal2-title {
    word-wrap: break-word;
    color: #242424;
    display: block;
    font-size: 1.0625em;
    font-weight: 600;
    margin: 0 0 1em;
    max-width: 100%;
    padding: 0;
    position: relative;
    text-align: center;
    text-transform: none
}

.swal2-popup .swal2-actions {
    align-items: center;
    border-top: 1px solid #eee;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0 -2em -1em;
    width: calc(100% + 4em);
    z-index: 1
}

.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
    opacity: .4
}

.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
    background-image: linear-gradient(#0000001a,#0000001a)
}

.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
    background-image: linear-gradient(#0003,#0003)
}

.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
    animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    background-color: #0000!important;
    border: .25em solid #0000;
    border-radius: 100%;
    box-sizing: border-box;
    color: #0000;
    cursor: default;
    height: 2.5em;
    margin: .46875em;
    padding: 0;
    -webkit-user-select: none;
    user-select: none;
    width: 2.5em
}

.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
    margin-left: 30px;
    margin-right: 30px
}

.swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm:after {
    animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    border: 3px solid #999;
    border-radius: 50%;
    border-right-color: #0000;
    box-shadow: 1px 1px 1px #fff;
    content: "";
    display: inline-block;
    height: 15px;
    margin-left: 5px;
    width: 15px
}

.swal2-popup .swal2-styled:not([disabled]) {
    align-items: center;
    cursor: pointer;
    display: flex;
    flex: 1 1;
    height: 45px;
    justify-content: center
}

.swal2-popup .swal2-styled.swal2-confirm {
    border: 0;
    border-radius: 0;
    box-shadow: none;
    color: #008bec;
    margin: 0
}

.swal2-popup .swal2-styled.swal2-cancel,.swal2-popup .swal2-styled.swal2-confirm {
    background: #0000 none repeat 0 0/auto auto padding-box border-box scroll;
    background: initial;
    background-color: #fff;
    font-size: 1.0625em;
    font-weight: 700
}

.swal2-popup .swal2-styled.swal2-cancel {
    border: 0;
    color: #a1a1a1
}

.swal2-popup .swal2-styled+.swal2-styled {
    border-left: 1px solid #eee!important
}

.swal2-popup .swal2-styled:focus {
    outline: none
}

.swal2-popup .swal2-styled::-moz-focus-inner {
    border: 0
}

.swal2-popup .swal2-footer {
    border-top: 1px solid #eee;
    color: #545454;
    font-size: 1em;
    justify-content: center;
    margin: 1.25em 0 0;
    padding: 1em 0 0
}

.swal2-popup .swal2-image {
    margin: 1.25em auto;
    max-width: 100%
}

.swal2-popup .swal2-close {
    background: #0000;
    border: none;
    border-radius: 0;
    color: #ccc;
    cursor: pointer;
    font-family: serif;
    font-size: 2.5em;
    height: 1.2em;
    justify-content: center;
    line-height: 1.2;
    overflow: hidden;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: color .1s ease-out;
    width: 1.2em
}

.swal2-popup .swal2-close:hover {
    color: #f27474;
    transform: none
}

.swal2-popup>.swal2-checkbox,.swal2-popup>.swal2-file,.swal2-popup>.swal2-input,.swal2-popup>.swal2-radio,.swal2-popup>.swal2-select,.swal2-popup>.swal2-textarea {
    display: none
}

.swal2-popup .swal2-html-container {
    word-wrap: break-word;
    align-items: center;
    color: #242424;
    display: flex;
    font-size: 1em;
    justify-content: center;
    line-height: normal;
    margin: 0 auto 1em;
    padding: 0;
    z-index: 1
}

.swal2-popup #swal2-html-container {
    text-align: center
}

.swal2-popup .swal2-checkbox,.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-radio,.swal2-popup .swal2-select,.swal2-popup .swal2-textarea {
    margin: 1em auto
}

.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-textarea {
    border: 1px solid #d9d9d9;
    border-radius: .1875em;
    box-shadow: inset 0 1px 1px #0000000f;
    box-sizing: border-box;
    font-size: 1.125em;
    transition: border-color .3s,box-shadow .3s;
    width: 100%
}

.swal2-popup .swal2-file.swal2-inputerror,.swal2-popup .swal2-input.swal2-inputerror,.swal2-popup .swal2-textarea.swal2-inputerror {
    border-color: #f27474!important;
    box-shadow: 0 0 2px #f27474!important
}

.swal2-popup .swal2-file:focus,.swal2-popup .swal2-input:focus,.swal2-popup .swal2-textarea:focus {
    border: 1px solid #b4dbed;
    box-shadow: 0 0 3px #c4e6f5;
    outline: none
}

.swal2-popup .swal2-file::placeholder,.swal2-popup .swal2-input::placeholder,.swal2-popup .swal2-textarea::placeholder {
    color: #ccc
}

.swal2-popup .swal2-range input {
    width: 80%
}

.swal2-popup .swal2-range output {
    font-weight: 600;
    text-align: center;
    width: 20%
}

.swal2-popup .swal2-range input,.swal2-popup .swal2-range output {
    font-size: 1.125em;
    height: 2.625em;
    line-height: 2.625em;
    margin: 1em auto;
    padding: 0
}

.swal2-popup .swal2-input {
    height: 2.625em;
    padding: 0 .75em
}

.swal2-popup .swal2-input[type=number] {
    max-width: 10em
}

.swal2-popup .swal2-file {
    font-size: 1.125em
}

.swal2-popup .swal2-textarea {
    height: 6.75em;
    padding: .75em
}

.swal2-popup .swal2-select {
    color: #545454;
    font-size: 1.125em;
    max-width: 100%;
    min-width: 50%;
    padding: .375em .625em
}

.swal2-popup .swal2-checkbox,.swal2-popup .swal2-radio {
    align-items: center;
    justify-content: center
}

.swal2-popup .swal2-checkbox label,.swal2-popup .swal2-radio label {
    font-size: 1.125em;
    margin: 0 .6em
}

.swal2-popup .swal2-checkbox input,.swal2-popup .swal2-radio input {
    margin: 0 .4em
}

.swal2-popup .swal2-validation-message {
    align-items: center;
    background: #f0f0f0;
    color: #666;
    display: none;
    font-size: 1em;
    font-weight: 300;
    justify-content: center;
    overflow: hidden;
    padding: .625em
}

.swal2-popup .swal2-validation-message:before {
    zoom:normal;background-color: #f27474;
    border-radius: 50%;
    color: #fff;
    content: "!";
    display: inline-block;
    font-weight: 600;
    height: 1.5em;
    line-height: 1.5em;
    margin: 0 .625em;
    min-width: 1.5em;
    text-align: center;
    width: 1.5em
}

@supports(-ms-accelerator:true) {
    .swal2-range input {
        width: 100%!important
    }

    .swal2-range output {
        display: none
    }
}

@media (-ms-high-contrast:active),(-ms-high-contrast:none) {
    .swal2-range input {
        width: 100%!important
    }

    .swal2-range output {
        display: none
    }
}

@-moz-document url-prefix() {
    .swal2-close:focus {
        outline: 2px solid #32649666
    }
}

.swal2-icon {
    zoom:80%;border: .25em solid #0000;
    border-radius: 50%;
    box-sizing: initial;
    cursor: default;
    height: 5em;
    justify-content: center;
    line-height: 5em;
    margin: 1em auto 0;
    position: relative;
    -webkit-user-select: none;
    user-select: none;
    width: 5em
}

.swal2-icon-text {
    font-size: 3.75em
}

.swal2-icon.swal2-error {
    border-color: #f27474
}

.swal2-icon.swal2-error .swal2-x-mark {
    flex-grow: 1;
    position: relative
}

.swal2-icon.swal2-error [class^=swal2-x-mark-line] {
    background-color: #f27474;
    border-radius: .125em;
    display: block;
    height: .3125em;
    position: absolute;
    top: 2.3125em;
    width: 2.9375em
}

.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
    left: 1.0625em;
    transform: rotate(45deg)
}

.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
    right: 1em;
    transform: rotate(-45deg)
}

.swal2-icon.swal2-warning {
    border-color: #facea8;
    color: #f8bb86
}

.swal2-icon.swal2-info {
    border-color: #9de0f6;
    color: #3fc3ee
}

.swal2-icon.swal2-question {
    border-color: #c9dae1;
    color: #87adbd
}

.swal2-icon.swal2-success {
    border-color: #a5dc86
}

.swal2-icon.swal2-success [class^=swal2-success-circular-line] {
    border-radius: 50%;
    height: 7.5em;
    position: absolute;
    transform: rotate(45deg);
    width: 3.75em
}

.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
    border-radius: 7.5em 0 0 7.5em;
    left: -2.0635em;
    top: -.4375em;
    transform: rotate(-45deg);
    transform-origin: 3.75em 3.75em
}

.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
    border-radius: 0 7.5em 7.5em 0;
    left: 1.875em;
    top: -.6875em;
    transform: rotate(-45deg);
    transform-origin: 0 3.75em
}

.swal2-icon.swal2-success .swal2-success-ring {
    border: .25em solid #a5dc864d;
    border-radius: 50%;
    box-sizing: initial;
    height: 100%;
    left: -.25em;
    position: absolute;
    top: -.25em;
    width: 100%;
    z-index: 2
}

.swal2-icon.swal2-success .swal2-success-fix {
    height: 5.625em;
    left: 1.625em;
    position: absolute;
    top: .5em;
    transform: rotate(-45deg);
    width: .4375em;
    z-index: 1
}

.swal2-icon.swal2-success [class^=swal2-success-line] {
    background-color: #a5dc86;
    border-radius: .125em;
    display: block;
    height: .3125em;
    position: absolute;
    z-index: 2
}

.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
    left: .875em;
    top: 2.875em;
    transform: rotate(45deg);
    width: 1.5625em
}

.swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
    right: .5em;
    top: 2.375em;
    transform: rotate(-45deg);
    width: 2.9375em
}

.swal2-progresssteps {
    align-items: center;
    font-weight: 600;
    margin: 0 0 1.25em;
    padding: 0
}

.swal2-progresssteps li {
    display: inline-block;
    position: relative
}

.swal2-progresssteps .swal2-progresscircle {
    background: #3085d6;
    border-radius: 2em;
    color: #fff;
    height: 2em;
    line-height: 2em;
    text-align: center;
    width: 2em;
    z-index: 20
}

.swal2-progresssteps .swal2-progresscircle:first-child {
    margin-left: 0
}

.swal2-progresssteps .swal2-progresscircle:last-child {
    margin-right: 0
}

.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
    background: #3085d6
}

.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle,.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
    background: #add8e6
}

.swal2-progresssteps .swal2-progressline {
    background: #3085d6;
    height: .4em;
    margin: 0 -1px;
    width: 2.5em;
    z-index: 10
}

[class^=swal2] {
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    outline: none
}

.swal2-show {
    animation: swal2-show .3s
}

.swal2-show.swal2-noanimation {
    animation: none
}

.swal2-hide {
    animation: swal2-hide .15s forwards
}

.swal2-hide.swal2-noanimation {
    animation: none
}

[dir=rtl] .swal2-close {
    left: 0;
    right: auto
}

.swal2-animate-success-icon .swal2-success-line-tip {
    animation: swal2-animate-success-line-tip .75s
}

.swal2-animate-success-icon .swal2-success-line-long {
    animation: swal2-animate-success-line-long .75s
}

.swal2-animate-success-icon .swal2-success-circular-line-right {
    animation: swal2-rotate-success-circular-line 4.25s ease-in
}

.swal2-animate-error-icon {
    animation: swal2-animate-error-icon .5s
}

.swal2-animate-error-icon .swal2-x-mark {
    animation: swal2-animate-error-x-mark .5s
}

@keyframes swal2-rotate-loading {
    0% {
        transform: rotate(0deg)
    }

    to {
        transform: rotate(1turn)
    }
}

@media print {
    body.swal2-backdrop-show:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow-y: scroll!important
    }

    body.swal2-backdrop-show:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
        display: none
    }

    body.swal2-backdrop-show:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
        position: static!important
    }
}
