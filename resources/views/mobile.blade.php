<html ng-app="OBSMobileApp" class="ng-scope">

<head>
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="cache-control" content="no-siteapp">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-title" content="KU Web">
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta name="mobile-web-app-capable" content="no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" sizes="57x57" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/Areas/Mobile/Content/Images/TouchIcon20220413/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://ku8338.net/Areas/Mobile/Content/Images/TouchIcon20220413/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://ku8338.net/Areas/Mobile/Content/Images/TouchIcon20220413/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://ku8338.net/Areas/Mobile/Content/Images/TouchIcon20220413/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://ku8338.net/Areas/Mobile/Content/Images/TouchIcon20220413/favicon-16x16.png">
    <title>KU Web</title>
    <!--網址加入主畫面捷徑Icon END-->
    <meta name="browsermode" content="application">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/main_mobile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile_home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile_join.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <script>
        // var isPageHide = false;
        // window.addEventListener("pageshow", function (e) {
        // if (e.persisted) {
        // window.location.reload();
        // } else if (isPageHide) {
        // window.location.reload();
        // }
        // });
        // window.addEventListener("pagehide", function (e) {
        // isPageHide = true;
        // });
    </script>
    <style type="text/css">
        .fancybox-margin {
            margin-right: 15px;
        }
    </style>

</head>

<body class="login_body ng-scope block-ui block-ui-anim-fade" block-ui="main" aria-busy="false">
    <a href="https://www.mykubet.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.kubetkubet.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.kubetnav.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://te77.net/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.ex589.com/home/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.casino5168.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <a href="https://www.ex5888.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
    <ajax-anti-forgery-token token="qscLg5EWoAZ8q28zK4Rtu41Ji-wQS5Y3Ya1EKK8c1yvvAlVpk7xSompY-AlyMPfie3M8WEygl8Y2JWXOeFG_nryzlqg1:Ewc37JUWaOkrwQWSMk9wp8pQo-lMGJOQfCeYDSl-Sj20bDULEbHi0pyFQlAsZWROY6b5V_y884NHLEXDuLjvdAV8eCw1"></ajax-anti-forgery-token>
    <div ng-controller="LoginCtrl as ctrl" class="ng-scope">
        <!-- ngIf: !ctrl.needSetProtectCode -->
        <div ng-if="!ctrl.needSetProtectCode" class="ng-scope">
            <input type="hidden" id="ismobile" value="true" autocomplete="off">
            <div ng-controller="ADCtrl as ctrl" id="top_btnAD" class="ng-scope btn_AD" ng-class="ctrl.IsShowAppDownLoad &amp;&amp; true ? 'btn_AD' : ''">
                <div class="btn_ADclose" ng-click="ctrl.CloseAppDownload()"></div>
                <div class="ADtxt">
                    <!-- <div>KU APP</div>
    Vui chơi thỏa thích <span>ngay tức thì, mọi lúc mọi nơi</span>
    </div> -->
                    <a class="btn_ADdl" ng-click="ctrl.RedirectPage('/Common/DownloadMyApp')">Tải về</a>
                </div>
                <div class="bg_header">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="圖層_1" x="0px" y="0px" width="86px" height="22px" viewBox="0 0 86 22" style="enable-background:new 0 0 86 22;" xml:space="preserve">
                        <style type="text/css">
                            <!-- .st0 {
                                display: none;
                            } -->

                            .st1 {
                                display: inline;
                            }

                            .st2 {
                                fill: #FFA71A;
                            }

                            .st3 {
                                fill: #399FD8;
                            }

                            .st4 {
                                fill: #6B95B2;
                            }

                            .st5 {
                                fill: #FFFFFF;
                            }
                            
                        </style>
                        <g class="st0">
                            <g class="st1">
                                <g>
                                    <g>
                                        <path class="st2" d="M40.3,0.7c-0.9,0-2,0-3.4,0c-0.1,0-0.1,0.8-0.2,2.3c-0.1,1.5-0.2,3.3-0.3,5.1c-0.2,2.2-0.3,3.7-0.3,4.2      c-0.1,0.6-0.2,1.1-0.3,1.5c-0.2,0.4-0.3,0.8-0.5,1c-0.2,0.3-0.3,0.4-0.6,0.6c-0.3,0.2-0.5,0.3-0.9,0.4C33.4,16,32.9,16,32.5,16      c-0.5,0-1-0.1-1.5-0.3s-0.9-0.4-1.2-0.8c-0.2-0.2-0.3-0.4-0.4-0.8c1.2,5.3,5.1,6.1,7.6,5.6c0.7-0.2,1.3-0.4,2-0.8      c0.9-0.5,1.6-1,2.1-1.6c0.4-0.6,0.9-1.3,1-2.1c0.2-0.9,0.3-2.2,0.3-4.2c0-0.2,0-0.3,0-0.5l0.9-9.9L40.3,0.7L40.3,0.7z" />
                                        <path class="st2" d="M29.1,16.4c-0.1-2,0-4.3,0-4.3c0-0.4,0-1.1,0.1-2.1s0.1-2.1,0.2-3.3l0.4-6.1c-1.3,0-2.3,0.1-3,0.1      c-0.6,0-1.6,0-3.2-0.1l-0.3,5.7c-0.1,1.2-0.1,2.1-0.2,2.7l-0.2,2.3c-0.1,0.9-0.1,1.5-0.2,2c0,0.4-0.1,0.9-0.1,1      c0,0.7,0.1,1.3,0.3,1.9c0.2,0.5,0.3,0.9,0.6,1.4c0.3,0.4,0.6,0.8,1.1,1.1c0.5,0.4,1.2,0.8,1.9,1c0.8,0.3,1.5,0.5,2.5,0.7      c0.9,0.2,1.7,0.2,2.6,0.3C30.6,20.2,29.2,18.5,29.1,16.4z" />
                                    </g>
                                    <g>
                                        <path class="st3" d="M20.7,1c-2.1,0-3.3,0.1-3.4,0.1c-0.6,0-1.9,0-3.6-0.1L13,2.2l-6.1,6L7.3,1C5.7,1,4.6,1.1,4.2,1.1      c-0.6,0-1.7,0-3.3-0.1v1.2c0,1-0.1,2.8-0.2,5.3c-0.2,3.7-0.3,6.5-0.4,8.6C0.2,17.3,0.1,19.2,0,21c1.7-0.1,2.8-0.1,3.3-0.1      L6.4,21l0.1-6L20.7,1z" />
                                        <path class="st3" d="M13.8,10.1c0,0,0.4,0.7,1.1,1.7c3.6,5.8,7,8.7,8.4,9.1c-3.1,0-7.4,0.1-9.3-1.2c-2-1.3-3-3.9-4-5.5      L13.8,10.1z" />
                                    </g>
                                </g>
                            </g>
                            <g class="st1">
                                <g>
                                    <path class="st4" d="M84.4,20.6C83.3,20,82.3,19,82,17.7c0-0.2-0.4-1.3-0.4-1.8c0,0,0,0,0-0.1c0-0.6,0-1.3,0-1.9h1.8L84,5.3h-2     l0.3-4.7h-2c-0.6,0-1.1,0-1.6,0.1c-0.2,0-0.5,0-0.6,0c-0.4,0-1.2,0-2.3-0.1l-1.9-0.1L73.5,7c-1.4-1.4-3.2-2.1-5.4-2.1     c-2.3,0-5.2,0.8-6.9,2.4c-0.4,0.3-0.7,0.7-1,1C60,8,59.8,7.7,59.5,7.4c-1.5-1.6-3.4-2.5-5.6-2.5l0.3-4.3h-8.4l-0.9,12     c-0.2,2.3,0.3,4.3,1.5,5.9c0.7,0.9,1.6,1.7,2.7,2.2c1.1,0.5,2.3,0.8,3.4,0.8c2.3,0,4.3-0.8,6-2.3c0.4-0.3,0.7-0.7,0.9-1     c0.2,0.3,0.5,0.6,0.7,0.9c1,1.1,2.2,1.8,3.6,2.1c0.2,0.1,0.4,0.1,0.6,0.1h0.1c0.4,0.1,0.9,0.1,1.3,0.1c2.2,0,5-0.7,6.4-1.9     c0.5-0.4,0.9-0.9,1.2-1.4c0.1,0.3,0.2,0.6,0.4,0.8c0.3,0.5,0.6,0.8,1,1.2c0.4,0.4,0.9,0.6,1.6,0.8c0.7,0.3,1.7,0.5,2.6,0.6     c1,0.1,2.1,0.1,3.3,0.1c1.1,0,2.2-0.2,3.4-0.3C85.5,21.1,84.9,20.9,84.4,20.6z" />
                                </g>
                                <g>
                                    <path class="st5" d="M52.2,2.2l-0.8,10.3C51.3,14.2,51.8,15,53,15c0.5,0,1-0.2,1.4-0.5c0.4-0.4,0.6-0.8,0.6-1.3s-0.1-0.9-0.4-1.3     c-0.3-0.4-0.7-0.5-1.2-0.5c-0.3,0-0.8,0.2-1.2,0.5l0.4-5.2c0.6-0.1,1-0.1,1.3-0.1c1.8,0,3.3,0.6,4.4,1.9c1.2,1.3,1.7,2.8,1.6,4.6     c-0.1,1.8-0.9,3.4-2.3,4.7c-1.4,1.3-3,1.9-4.9,1.9c-0.9,0-1.9-0.2-2.7-0.6c-0.9-0.4-1.6-1-2.1-1.7c-0.9-1.2-1.3-2.8-1.2-4.7     l0.8-10.5C47.5,2.2,52.2,2.2,52.2,2.2z" />
                                    <path class="st5" d="M72.1,8.4c-1.2-1.2-2.7-1.9-4.5-1.9c-1.9,0-3.5,0.6-4.9,1.9c-1.4,1.3-2.1,2.8-2.3,4.7s0.4,3.4,1.6,4.7     c0.8,0.8,1.7,1.4,2.8,1.7c0.1,0,0.3,0.1,0.4,0.1c1.9,0.2,4,0,5.6-1.5c0.9-0.8,1.6-1.8,2.1-3.4c-0.2,0.3-0.3,0.5-0.5,0.7     c-0.4,0.3-0.8,0.5-1.4,0.7c-0.5,0.1-1,0.2-1.6,0.2c-0.1,0-0.2,0-0.3,0c-0.5,0-1,0-1.5-0.2c-0.4-0.1-0.7-0.2-1-0.4     c-0.3-0.1-0.5-0.3-0.6-0.5c-0.1-0.1-0.1-0.1-0.2-0.2c-0.1-0.1-0.2-0.2-0.3-0.3c-0.3-0.5-0.4-1.1-0.3-1.9c0.1-0.8,0.3-1.4,0.7-1.9     c0.4-0.5,0.9-0.8,1.5-0.8c0.9,0,1.4,0.5,1.5,1.4h-2.4c-0.2,0.4-0.3,0.8-0.3,1.2c0,0.3,0,0.6,0.1,1h7.2c0.1-0.4,0.1-0.7,0.1-0.9     C73.7,11.2,73.2,9.7,72.1,8.4z" />
                                    <path class="st5" d="M79.5,16c-0.1-1.7,0-3.8,0-3.8c0-0.1,0-0.1,0-0.2h1.9l0.4-5h-2.1L80,2.1c-1,0-1.8,0.1-2.3,0.1     s-1.3,0-2.5-0.1l-0.2,5c0,1.1,0,1.8-0.1,2.4l-0.1,2c-0.1,0.8-0.1,1.4-0.1,1.7c0,0.4-0.1,0.8-0.1,0.9c0,0.6,0.1,1.1,0.2,1.7     c0.1,0.5,0.3,0.8,0.5,1.2c0.2,0.4,0.5,0.7,0.9,1c0.4,0.4,0.9,0.7,1.5,0.9c0.6,0.2,1.2,0.5,1.9,0.6c0.7,0.2,1.3,0.2,2,0.2     C80.6,19.3,79.6,17.8,79.5,16z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="st4" d="M39.8,20.1l1.4-18.3H51c1.8,0,3.2,0.6,4.3,1.6c0.9,1,1.4,2.3,1.3,3.8c-0.1,1.2-0.6,2.2-1.3,3.1    c0.2,0.2,0.5,0.5,0.6,0.7c0.7,0.9,0.9,2.1,0.8,3.3c-0.1,1-0.3,2-0.9,2.8s-1.3,1.5-2.1,2c-0.6,0.3-1.3,0.6-2.3,0.7    c-1.5,0.2-2,0.2-2.2,0.2h-9.3V20.1z" />
                                <path class="st5" d="M42.6,3.3H51c1.4,0,2.4,0.3,3.1,1.2c0.7,0.7,1,1.6,0.9,2.8c-0.1,0.9-0.3,1.7-1,2.3c-0.3,0.5-0.9,0.8-1.6,1    c1,0.2,1.7,0.7,2.2,1.4c0.5,0.7,0.6,1.5,0.6,2.4c-0.1,0.8-0.3,1.5-0.7,2.2c-0.3,0.7-0.9,1.2-1.6,1.5c-0.3,0.2-1,0.3-1.7,0.5    c-1,0.1-1.7,0.2-2.1,0.2h-7.8L42.6,3.3z M46.6,9.3h2c0.7,0,1.2-0.1,1.5-0.3s0.5-0.6,0.5-1.2c0-0.5-0.1-0.8-0.3-1    c-0.1-0.2-0.6-0.3-1.3-0.3h-2L46.6,9.3z M46.2,15.4h2.3c0.8,0,1.4-0.1,1.7-0.5c0.3-0.3,0.6-0.7,0.6-1.2c0-0.5-0.1-0.8-0.3-1.2    c-0.3-0.2-0.8-0.5-1.6-0.5h-2.3L46.2,15.4z" />
                                <polygon class="st4" points="54.6,20.1 56.1,1.8 71,1.8 70.6,8 70,8 69.5,13.5 62.5,13.5 62.5,13.8 70.3,13.8 69.9,20.1   " />
                                <path class="st5" d="M57.3,3.3h12.1l-0.2,3.3h-7.6l-0.1,2.3h7l-0.2,3.2h-7l-0.2,3h7.8l-0.2,3.5H56.2L57.3,3.3z" />
                                <polygon class="st4" points="72.6,20.1 73.6,8.5 69,8.5 69.4,1.8 86,1.8 85.5,8.5 80.9,8.5 80,20.1   " />
                                <path class="st5" d="M70.8,3.3h13.7l-0.3,3.8h-4.6l-0.8,11.5h-4.6L75.1,7h-4.6L70.8,3.3z" />
                            </g>
                            <g>
                                <g>
                                    <path class="st2" d="M36.4,1.9c-0.8,0-1.7,0-3.1,0c-0.1,0-0.1,0.7-0.1,2.1C33,5.4,33,7,32.9,8.6c-0.1,2-0.2,3.3-0.3,3.8     c-0.1,0.6-0.1,1-0.3,1.4c-0.1,0.3-0.3,0.7-0.5,0.9c-0.1,0.2-0.3,0.3-0.6,0.6c-0.2,0.2-0.5,0.3-0.8,0.3c-0.3,0.1-0.8,0.1-1.2,0.1     c-0.5,0-0.9-0.1-1.4-0.2c-0.5-0.1-0.8-0.3-1-0.7c-0.1-0.1-0.2-0.3-0.3-0.7c1,4.8,4.6,5.5,6.9,5.1c0.6-0.1,1.2-0.3,1.7-0.7     c0.8-0.5,1.5-0.9,1.8-1.5c0.3-0.6,0.8-1.2,0.9-2c0.1-0.8,0.3-2,0.3-3.8c0-0.1,0-0.2,0-0.5l0.8-9L36.4,1.9L36.4,1.9z" />
                                    <path class="st2" d="M26.4,16.2c-0.1-1.7,0-3.9,0-3.9c0-0.3,0-1,0.1-1.8c0.1-0.9,0.1-1.8,0.1-3L26.9,2c-1.2,0-2.1,0.1-2.6,0.1     c-0.6,0-1.5,0-2.9-0.1l-0.2,5.1c-0.1,1-0.1,1.8-0.1,2.4L21,11.6c-0.1,0.8-0.1,1.4-0.1,1.7c0,0.3-0.1,0.8-0.1,0.9     c0,0.6,0.1,1.2,0.2,1.7c0.1,0.5,0.3,0.8,0.6,1.3c0.2,0.3,0.6,0.7,1,1c0.5,0.3,1,0.7,1.7,0.9c0.7,0.2,1.4,0.5,2.2,0.6     c0.8,0.1,1.5,0.1,2.3,0.2C27.6,19.5,26.5,18,26.4,16.2z" />
                                </g>
                                <g>
                                    <path class="st3" d="M18.8,2.1c-1.8,0-3,0.1-3.1,0.1c-0.6,0-1.7,0-3.2-0.1l-0.7,1L6.2,8.7l0.3-6.4c-1.5,0-2.4,0.1-2.8,0.1     c-0.6,0-1.5,0-3-0.1v1c0,0.9-0.1,2.5-0.1,4.8c-0.1,3.3-0.2,5.9-0.3,7.7c-0.1,1-0.1,2.8-0.3,4.4c1.5-0.1,2.5-0.1,3-0.1l2.8,0.1     l0.1-5.3L18.8,2.1z" />
                                    <path class="st3" d="M12.5,10.4c0,0,0.3,0.6,1,1.5c3.2,5.3,6.3,7.8,7.6,8.2c-2.8,0-6.7,0.1-8.4-1s-2.6-3.6-3.7-5L12.5,10.4z" />
                                </g>
                            </g>
                        </g>
                    </svg>


                    @if(auth()->check())
                    <div class="header_R">
                        <div class="icon_inforID" id="GameMenu" balance-slide="" balance-slide-func="ctrl.ClickSlide()" slide-open-check="ctrl.IsOpenCheck('index')">
                            <div class="infor_ID">{{ Auth::user()->name }}</div>
                            <div class="icon_inforMoney close">

                                <span ng-if="ctrl.model.LoginStatus == 2 &amp;&amp; ctrl.model.IsShowBalanceAmount &amp;&amp; !ctrl.isGameLobby" ng-bind="ctrl.model.BalanceAmount | number" class="ng-binding ng-scope">0</span><!-- end ngIf: ctrl.model.LoginStatus == 2 && ctrl.model.IsShowBalanceAmount && !ctrl.isGameLobby -->

                                <span id="signout" class="btn_inforOut" ng-click="ctrl.DoSignOut()" data-signout="/Mobile/Home/login"></span>
                            </div>
                        </div>

                        <div ng-if="ctrl.model.MessageBoxCount > 0" class="btn_inforMail on aniRing ng-scope" ng-click="ctrl.RedirectPage('/Mobile/Member/PersonalMessage')"></div><!-- end ngIf: ctrl.model.MessageBoxCount > 0 -->
                    </div>
                    @else
                    <div class="header_R">

                        <a ng-if="ctrl.IsFriendExist() || true" id="open-register" class="btn_join ng-scope">Đăng ký
                        </a>
                        <a class="btn_login" id="open-login">Đăng nhập</a>

                    </div>
                    @endif
                </div>

                <div class="container_main container_login">
                    <div class="swiper swiper2 swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" ng-click="ctrl.DeleteSessionStorage()" id="swiper-wrapper-10e1b775eb681465d" aria-live="off" style="transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="8" style="width: 360px; transition-duration: 0ms; opacity: 1; transform: translate3d(0px, 0px, 0px);"><img style="cursor: default;" src="https://images.hjad963.net/FileSystem/Images/7fd57363b7c24016acc1440e204cc35e.jpg"></div>
                            <div class="swiper-slide" data-swiper-slide-index="0" style="width: 360px; transition-duration: 0ms; opacity: 1; transform: translate3d(-360px, 0px, 0px);">
                                <a href="/Mobile/Event/RaffleTicket">
                                    <img src="{{asset('media/mobile/87c190d4c3d842af9a124c35a72c62c2.jpg')}}">
                                </a>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="1" style="width: 413px; transition-duration: 0ms; opacity: 1; transform: translate3d(-720px, 0px, 0px);">
                                <a href="/Mobile/Home/SponRecord?showTopBar=0&amp;showFooterBar=0">
                                    <img src="images/bc11f595b8e745c49c2160d572c133eb.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="2" style="width: 360px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1080px, 0px, 0px);">
                                <img style="cursor: default;" src="https://images.hjad963.net/FileSystem/Images/7db8c8a77d5b47f4998d3f50a904a928.jpg">
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="3" style="width: 360px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1440px, 0px, 0px);">
                                <img style="cursor: default;" src="{{asset('media/mobile/6cdf844b2e284d0c95eb97bc15b66e85.jpg')}}">
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="4" style="width: 360px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1800px, 0px, 0px);">
                                <img style="cursor: default;" src="https://images.hjad963.net/FileSystem/Images/6440370bc389403ea7650407a40a4d4e.jpg">
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="5" style="width: 360px; transition-duration: 0ms; opacity: 1; transform: translate3d(-2160px, 0px, 0px);">
                                <a href="/Mobile/Home/DepositUSDTExample"><img src="https://images.hjad963.net/FileSystem/Images/8777983cd49b4113ad3d3f150b49c49f.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="6" style="width: 360px; transition-duration: 0ms; opacity: 1; transform: translate3d(-2520px, 0px, 0px);">
                                <a href="/Mobile/BonusCenter/LatestOffers?tab=2">
                                    <img src="https://images.hjad963.net/FileSystem/Images/86194aada50b4e5b9bf27dc1b7d53674.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="7" style="width: 360px; transition-duration: 0ms; opacity: 1; transform: translate3d(-2880px, 0px, 0px);">
                                <img style="cursor: default;" src="{{asset('media/mobile/87c190d4c3d842af9a124c35a72c62c2.jpg')}}">
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="8" style="width: 360px; transition-duration: 0ms; opacity: 0; transform: translate3d(-3240px, 0px, 0px);">
                                <img style="cursor: default;" src="https://images.hjad963.net/FileSystem/Images/7fd57363b7c24016acc1440e204cc35e.jpg">
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 360px; transition-duration: 0ms; opacity: 0; transform: translate3d(-3600px, 0px, 0px);"><a href="/Mobile/Event/RaffleTicket"><img src="https://images.hjad963.net/FileSystem/Images/87c190d4c3d842af9a124c35a72c62c2.jpg"></a></div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 8" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 9"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="GameList">
                        <style>
                            .transMsg {
                                margin-top: 15%;
                                height: 100%;
                            }

                            .transMsg img {
                                margin: 0 auto;
                                width: 20%;
                                display: block;
                            }

                            .transMsg span {
                                display: table;
                                text-align: center;
                                margin-top: 30px;
                                width: 100%;
                                vertical-align: middle;
                                font-size: 20px;
                                line-height: 30px;
                            }
                        </style>
                        <div class="GameList_L swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-vertical">
                            <div class="btn_GL on" tabindex="0" aria-current="true">
                                <div class="ic_GLhot">

                                </div>
                                <h2>HOT</h2>
                            </div>
                            <div class="btn_GL" tabindex="0">
                                <div class="ic_GLlive">

                                </div>
                                <h2>LIVE CASINO</h2>
                            </div>
                            <div class="btn_GL" tabindex="0">
                                <div class="ic_GLloto"></div>
                                <h2>XỔ SỐ</h2>
                            </div>
                            <div class="btn_GL" tabindex="0">
                                <div class="ic_GLsport">

                                </div>
                                <h2>THỂ THAO</h2>
                            </div>
                            <div class="btn_GL" tabindex="0">
                                <div class="ic_GLslot"></div>
                                <h2>GAMES</h2>
                            </div>
                            <div class="btn_GL" tabindex="0">
                                <div class="ic_GLchess">

                                </div>
                                <h2>ĐỐI KHÁNG</h2>
                            </div>
                            <div class="btn_GL" tabindex="0">
                                <div class="ic_GLfish"></div>
                                <h2>BẮN CÁ</h2>
                            </div>
                            <div class="btn_GL" tabindex="0">
                                <div class="ic_GLesport">

                                </div>
                                <h2>E-SPORTS</h2>
                            </div>
                        </div>
                        <div class="GameList_RBox swiper swiper1 ng-scope block-ui block-ui-anim-fade swiper-initialized swiper-vertical swiper-pointer-events swiper-autoheight" block-ui="gameListBlock" aria-busy="false">
                            <ajax-anti-forgery-token token="W-Wk72fm31Y-M00yedlIiHJh0GRBAnOmPbQAGotTIUJ9TSZXYXWCCgCfO2YC-FHQQShf-qmQhYedan2XxnJRZ5f2OCA1:nBNSCaNckttV-yahDDakAUteiv1oIoaatLXLRQGmHUOI-1I4OeWI8-Frs8bzg9UJ1ojnRupypiQ4aeKx7xMotZVwA0Y1"></ajax-anti-forgery-token><input type="hidden" id="PltformMember" value="TK Chính" autocomplete="off"><input type="hidden" id="PltformNBB" value="KU Thể Thao" autocomplete="off"><input type="hidden" id="PltformBB_LiveGame" value="KU Casino" autocomplete="off"><input type="hidden" id="PltformTS" value="JZ Thể Thao" autocomplete="off"><input type="hidden" id="PltformBB_Ball" value="KU Xổ Số" autocomplete="off"><input type="hidden" id="PltformDDD" value="3D" autocomplete="off"><input type="hidden" id="PltformAGIN" value="AG" autocomplete="off"><input type="hidden" id="PltformWM" value="WM" autocomplete="off"><input type="hidden" id="PltformGPI" value="GPI" autocomplete="off"><input type="hidden" id="PltformDG" value="DG" autocomplete="off"><input type="hidden" id="PltformSA" value="SA" autocomplete="off"><input type="hidden" id="PltformAES" value="AES" autocomplete="off"><input type="hidden" id="PltformEVO" value="EVO" autocomplete="off"><input type="hidden" id="PltformPP" value="PP" autocomplete="off"><input type="hidden" id="PltformOBLive" value="DB Casino" autocomplete="off"><input type="hidden" id="PltformCMD" value="CMD" autocomplete="off"><input type="hidden" id="PltformOneBook" value="SABA" autocomplete="off"><input type="hidden" id="PltformAI" value="AI" autocomplete="off"><input type="hidden" id="PltformNewBBIN" value="BBIN" autocomplete="off"><input type="hidden" id="PltformOBSport" value="PANDA" autocomplete="off"><input type="hidden" id="PltformIMone" value="IM" autocomplete="off"><input type="hidden" id="PltformOBESport" value="DB E-sports" autocomplete="off"><input type="hidden" id="PltformBNG" value="BNG" autocomplete="off"><input type="hidden" id="PltformCQNine" value="CQ9" autocomplete="off"><input type="hidden" id="PltformPLS" value="PLS" autocomplete="off"><input type="hidden" id="PltformRKFive" value="RK5" autocomplete="off"><input type="hidden" id="PltformDS" value="DS" autocomplete="off"><input type="hidden" id="PltformLC" value="V8" autocomplete="off"><input type="hidden" id="PltformOBChess" value="DB Đối Kháng" autocomplete="off"><input type="hidden" id="PltformKS" value="KS" autocomplete="off"><input type="hidden" id="PltformPG" value="PG" autocomplete="off"><input type="hidden" id="PltformFTG" value="FTG" autocomplete="off"><input type="hidden" id="PltformFC" value="FC" autocomplete="off"><input type="hidden" id="PltformOBEgame" value="DB Games" autocomplete="off"><input type="hidden" id="PltformOBFish" value="DB Bắn Cá" autocomplete="off"><input type="hidden" id="PltformAT" value="AT" autocomplete="off"><input type="hidden" id="PltformSM" value="COOL-IN" autocomplete="off"><input type="hidden" id="PltformLover" value="Quà tặng miễn phí" autocomplete="off"><input type="hidden" id="PltformKUIM" value="Phòng chat KU" autocomplete="off"><input type="hidden" id="PltformAnchorGift" value="AnchorGift" autocomplete="off"><input type="hidden" id="PltformFriendReward" value="Ví bạn bè" autocomplete="off"><input type="hidden" id="PltformAmeba" value="AE" autocomplete="off"><input type="hidden" id="PltformAVIA" value="AVIA" autocomplete="off"><input type="hidden" id="PltformKA" value="KA" autocomplete="off"><input type="hidden" id="PltformXG" value="XG" autocomplete="off"><input type="hidden" id="PltformPS" value="PS" autocomplete="off">
                            <div class="swiper-wrapper" id="swiper-wrapper-1029edef794e1a652" aria-live="polite" style="height: 383px; transform: translate3d(0px, 0px, 0px);">
                                <div class="GameList_R on moveIMG swiper-slide swiper-slide-active" style="height: 663px;" role="group" aria-label="1 / 8">
                                    <div class="btn_GLhotLive " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_jackpot"></div>
                                        <div class="t_GL">
                                            <h1>KU CASINO</h1>
                                            <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLhotLoto " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>KU XỔ SỐ</h1>
                                            <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLhotSport " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>KU THỂ THAO</h1>
                                            <div class="logo_CAO">
                                                <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                                <img src="{{asset('media/mobile/logo_CAO.svg')}}">
                                                <img src="{{asset('media/mobile/logo_OSA.svg')}}">

                                            </div>
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLhotSlot " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>3D GAMES</h1>
                                            <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLACT " ng-click="ctrl.RedirectRaffleTicketPage('/Mobile/Event/RaffleTicket')" enable-protect="false">
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="boxGL">
                                        <div class="btn_GLhotStudio " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                            <div class="t_GL">
                                                <h1 class="swiper swiperCI swiper-initialized swiper-vertical swiper-pointer-events swiper-autoheight">
                                                    <span class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, -82px, 0px); height: 16px;" id="swiper-wrapper-c4274f4b6ebb624a" aria-live="off"><span class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="height: 15.5px; margin-bottom: 5px;" role="group" aria-label="2 / 3">PHIM ẢNH</span><span class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="height: 15.5px; margin-bottom: 5px;" role="group" aria-label="3 / 3">FORUM</span>
                                                        <span class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="height: 15.5px; margin-bottom: 5px;" role="group" aria-label="1 / 3">CI LIVE</span>
                                                        <span class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="height: 15.5px; margin-bottom: 5px;" role="group" aria-label="2 / 3">PHIM ẢNH</span>
                                                        <span class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="height: 15.5px; margin-bottom: 5px;" role="group" aria-label="3 / 3">FORUM</span>
                                                        <span class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="height: 15.5px; margin-bottom: 5px;" role="group" aria-label="1 / 3">CI LIVE</span><span class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="height: 15.5px; margin-bottom: 5px;" role="group" aria-label="2 / 3">PHIM ẢNH</span></span>
                                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                                </h1>
                                                <img src="{{asset('media/mobile/logo_CI.svg')}}">
                                            </div>
                                        </div>
                                        <div class="btn_GLhotCAO " window-open-simple="/Mobile/Home/SponRecord" target="_self" enable-protect="false">
                                            <div class="t_GL">
                                                <h1>ĐỐI TÁC<br>LALIGA</h1>
                                                <img src="{{asset('media/mobile/logo_LaLiga.svg')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="GameList_R swiper-slide swiper-slide-next" style="height: 383px;" role="group" aria-label="2 / 8">
                                    <div class="btn_GLliveKU " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_jackpot"></div>
                                        <div class="t_GL">
                                            <h1>KU</h1>
                                            <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLlivePP " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_new"></div>
                                        <div class="t_GL">
                                            <h1>PP</h1>
                                            <img src="{{asset('media/mobile/logo_PP.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLliveDG " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>DG</h1>
                                            <img src="{{asset('media/mobile/logo_DG.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLliveAES " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>AES</h1>
                                            <img src="{{asset('media/mobile/logo_AES.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLliveOB " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>DB</h1>
                                            <img src="{{asset('media/mobile/logo_OBlive.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLliveAG " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>AG</h1>
                                            <img src="{{asset('media/mobile/logo_AG.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLliveWM " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>WM</h1>
                                            <img src="{{asset('media/mobile/logo_WM.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLliveSA " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>SA</h1>
                                            <img src="{{asset('media/mobile/logo_SA.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLliveGPI " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>GPI</h1>
                                            <img src="{{asset('media/mobile/logo_GPI.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLliveEVO " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>EVO</h1>
                                            <img src="{{asset('media/mobile/logo_EVO.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                </div>
                                <div class="GameList_R wholeTwo moveIMG swiper-slide" style="height: 383px;" role="group" aria-label="3 / 8">
                                    <div class="btn_GLlotoKU w100 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_hot"></div>
                                        <div class="t_GL">
                                            <h1>KU</h1>
                                            <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLlotoBBIN w100 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>BBIN</h1>
                                            <img src="{{asset('media/mobile/logo_BBIN.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                </div>
                                <div class="GameList_R evenThree moveIMG swiper-slide" style="height: 383px;" role="group" aria-label="4 / 8">
                                    <div class="btn_GLsportKU " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_hot"></div>
                                        <div class="t_GL">
                                            <h1>KU</h1>
                                            <div class="logo_CAO">
                                                <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                                <img src="{{asset('media/mobile/logo_OSA.svg')}}">
                                                <img src="{{asset('media/mobile/logo_OSA.svg')}}">

                                            </div>
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLsportJZ " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>JZ</h1>
                                            <img src="{{asset('media/mobile/logo_JZ.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLsportSB " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>SABA</h1>
                                            <img src="{{asset('media/mobile/logo_SABA.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLsportCMD " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>CMD</h1>
                                            <img src="{{asset('media/mobile/logo_CMD.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLsportAI " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>AI</h1>
                                            <img src="{{asset('media/mobile/logo_AI.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLsportOB " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>PANDA</h1>
                                            <img src="{{asset('media/mobile/logo_OBsport.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                </div>
                                <div class="GameList_R moveIMG swiper-slide" style="height: 383px;" role="group" aria-label="5 / 8">
                                    <div class="btn_GLslot3D " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_hot"></div>
                                        <div class="t_GL">
                                            <h1>3D</h1>
                                            <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotPP " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_new"></div>
                                        <div class="t_GL">
                                            <h1>PP</h1>
                                            <img src="{{asset('media/mobile/logo_pp.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotPG " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>PG</h1>
                                            <img src="{{asset('media/mobile/logo_PG.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotFC " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>FC</h1>
                                            <img src="{{asset('media/mobile/logo_FC.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotBNG " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>BNG</h1>
                                            <img src="{{asset('media/mobile/logo_bng.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotCQ9 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>CQ9</h1>
                                            <img src="{{asset('media/mobile/logo_CQ9.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotPLS " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>PLS</h1>
                                            <img src="{{asset('media/mobile/logo_playson.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotDS " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>DS</h1>
                                            <img src="{{asset('media/mobile/logo_DS.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotRK5 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>RK5</h1>
                                            <img src="{{asset('media/mobile/logo_RK5.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLslotDB " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>DB</h1>
                                            <img src="{{asset('media/mobile/logo_obegame.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                </div>
                                <div class="GameList_R wholeThree moveIMG swiper-slide" style="height: 383px;" role="group" aria-label="6 / 8">
                                    <div class="btn_GLchess3D w100 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_hot"></div>
                                        <div class="t_GL">
                                            <h1>3D</h1>
                                            <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLchessV8 w100 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>V8</h1>
                                            <img src="{{asset('media/mobile/logo_V8.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLchessDB w100 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>DB</h1>
                                            <img src="{{asset('media/mobile/logo_OBchess.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                </div>
                                <div class="GameList_R evenFour moveIMG swiper-slide" style="height: 383px;" role="group" aria-label="7 / 8">
                                    <div class="btn_GLfish3D w100 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="GL_hot"></div>
                                        <div class="t_GL">
                                            <h1>3D</h1>
                                            <img src="{{asset('media/mobile/logo_KUyo.svg')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLfishDS " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>DS</h1>
                                            <img src="{{asset('media/mobile/logo_DS.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLfishKS " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>KS</h1>
                                            <img src="{{asset('media/mobile/logo_KS.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLfishCQ9 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>CQ9</h1>
                                            <img src="{{asset('media/mobile/logo_CQ9.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLfishAG " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>AG</h1>
                                            <img src="{{asset('media/mobile/logo_AG.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLfishV8 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>V8</h1>
                                            <img src="{{asset('media/mobile/logo_V8.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLfishDB " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>DB</h1>
                                            <img src="{{asset('media/mobile/logo_obfish.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                </div>
                                <div class="GameList_R wholeTwo moveIMG swiper-slide" style="height: 383px;" role="group" aria-label="8 / 8">
                                    <div class="btn_GLesportIM w100 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>IM</h1>
                                            <img src="{{asset('media/mobile/logo_IM.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                    <div class="btn_GLesportSB w100 " ng-click="ctrl.ShowLogIn()" enable-protect="false">
                                        <div class="t_GL">
                                            <h1>SABA</h1>
                                            <img src="{{asset('media/mobile/logo_SABA.png')}}">
                                        </div>
                                        <div class="img_GL"><span></span></div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="[{&quot;menuName&quot;:&quot;HotGame&quot;,&quot;name&quot;:&quot;HOT&quot;,&quot;iconClass&quot;:&quot;ic_GLhot&quot;,&quot;sort&quot;:1},{&quot;menuName&quot;:&quot;LiveGame&quot;,&quot;name&quot;:&quot;LIVE CASINO&quot;,&quot;iconClass&quot;:&quot;ic_GLlive&quot;,&quot;sort&quot;:2},{&quot;menuName&quot;:&quot;LotteryGame&quot;,&quot;name&quot;:&quot;XỔ SỐ&quot;,&quot;iconClass&quot;:&quot;ic_GLloto&quot;,&quot;sort&quot;:3},{&quot;menuName&quot;:&quot;SportGaming&quot;,&quot;name&quot;:&quot;THỂ THAO&quot;,&quot;iconClass&quot;:&quot;ic_GLsport&quot;,&quot;sort&quot;:4},{&quot;menuName&quot;:&quot;EGame&quot;,&quot;name&quot;:&quot;GAMES&quot;,&quot;iconClass&quot;:&quot;ic_GLslot&quot;,&quot;sort&quot;:5},{&quot;menuName&quot;:&quot;ChessGame&quot;,&quot;name&quot;:&quot;ĐỐI KHÁNG&quot;,&quot;iconClass&quot;:&quot;ic_GLchess&quot;,&quot;sort&quot;:6},{&quot;menuName&quot;:&quot;EFishGame&quot;,&quot;name&quot;:&quot;BẮN CÁ&quot;,&quot;iconClass&quot;:&quot;ic_GLfish&quot;,&quot;sort&quot;:8},{&quot;menuName&quot;:&quot;ESportGame&quot;,&quot;name&quot;:&quot;E-SPORTS&quot;,&quot;iconClass&quot;:&quot;ic_GLesport&quot;,&quot;sort&quot;:8}]" id="GameMainMenu" autocomplete="off">
                            <div block-ui-container="" class="block-ui-container ng-scope">
                                <div class="block-ui-overlay" ng-class="state.overrideOverlayClass">

                                </div>
                                <div class="block-ui-message-container" aria-live="assertive" aria-atomic="true">
                                    <!-- <div class="block-ui-message" ng-class="$_blockUiMessageClass"><div class="mask_Loading_custom" ng-class="state.overrideMaskClass"> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
            <div>
                <img src="/Content/Images/logo_KU.png" style="display:none;" onload="IMG_ID = '29039ed48c7749aa8a4d7d7b0d3a0eb1';IMG_PG = 'e3f08305dF03m1Dp'">
            </div>
        </div>
        <!--公告視窗-->
        <!--重要公告-->
        <div id="importantNews" class="mask_IMP ng-scope" ng-controller="ImportantNewsCtrl as ctrl" style="z-index: 99; display: none">
            <div class="popup">
                <div class="btn_close" ng-click="ctrl.CloseImportantNews()"></div>
                <div class="popup_T">Thông báo quan trọng</div>
                <div class="popup_In">
                    <div bind-html-compile="ctrl.model.ImportantNewsItem.NewsContent"></div>
                </div>
            </div>
        </div>
        <!--2023女優活動 Icon-->
        <!--頁面內容 end-->
        <div class="footer login">
            <style>
                .footer_maintainTxt {
                    word-wrap: break-word;
                    word-break: normal;
                }
            </style>
            <a href="" class="footer_list btn_footer_gift ">
                <h5>Ưu Đãi</h5>
            </a>
            <a href="{{route('service')}}" class="footer_list btn_footer_serv">
                <h5>Hỗ trợ</h5>
            </a>
            <a class="footer_list btn_footer_DW off" ng-click="ctrl.ShowLogIn()">
                <h5>Nạp rút tiền</h5>
                <div class="footer_DW_open off" ng-class="{'on':ctrl.isDWopen,'off':!ctrl.isDWopen}">
<div class="parent">
<a ng-if="" id="PlatformTransfer" ng-click="" class="btn_footer_transfer ng-scope topup">
<span id="PlatformTransferSpan">Chuyển quỹ</span>
</a>

<a ng-if="ctrl.IsDepositOpen()" id="MemberDeposit" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberDeposit', 'DepositWithdrawal')" check-registered-additionally="" class="btn_footer_deposit ng-scope topup">
<div class="img_deposit " id="MemberDepositImage"></div>
<span id="MemberDepositSpan">Nạp tiền</span>
</a>

<a ng-if="ctrl.IsWithdrawalOpen()" id="MemberWithdrawal" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberWithdrawal', 'DepositWithdrawal')" check-registered-additionally="" class="btn_footer_withdrawal ng-scope topup">
<div class="img_withdrawal topup" id="MemberWithdrawalImage"></div>
<span id="MemberWithdrawalSpan">Rút tiền</span>
</a>
</div>
</div>
            </a>
            <a href="{{route('transaction')}}" class="footer_list btn_footer_tradeRec off" ng-click="ctrl.ShowLogIn()">
                <h5>Giao dịch</h5>
            </a>
            <a href="{{route('membercenter')}}" class="footer_list btn_footer_menu off" ng-click="ctrl.ShowLogIn()">
                <h5>Tôi</h5>
            </a>
        </div>
    </div><!-- end ngIf: !ctrl.needSetProtectCode -->
    </div>
    <style>
        .loginID,
        loginPW {
            color: black;
        }

        .error_login {
            margin-bottom: 20px;
        }

        .bg_header_main {
            background: #0f548b repeat-y;
            color: #fff;
        }

        @media (min-width: 350px) {
            .swal2-popup.zh-cn {
                min-width: 300px;
            }
        }
    </style>
    <div ng-controller="LoginPopupCtrl as ctrl" ng-style="!ctrl.needSetProtectCode?{'position':'fixed','z-index':'99'}:''" block-ui="LoginPopup" class="ng-scope block-ui block-ui-anim-fade" aria-busy="false" style="position: fixed; z-index: 99;">
        <!--彈跳視窗-->
        <div class="mask_all" id="popup_login" ng-init="ctrl.login.UniqueSessionId = 'TM1542271612571308032'">
            <div class="popup_container">
                <div class="popup_bg">
                    <div class="popup">
                        <div class="btn_close popup_close" ng-click="ctrl.ClearForm()"></div>
                        <div class="popup_T">Đăng nhập hội viên</div>
                        <div class="popup_In">
                            <!--內容-->
                            <form id="frmLogin" name="frmLogin" form-validation-setting="false" custom-error-class="#errorstyle" error-panel-id="after" as-name="ctrl" data-action="/Mobile/Home" class="ng-pristine ng-invalid ng-invalid-required" novalidate="novalidate">
                                <input type="hidden" value="/Mobile/Register/Register" id="registerurl" autocomplete="off">
                                <input type="hidden" id="errorstyle" value="{&quot;parent&quot;:&quot;.login_list&quot;, &quot;parentError&quot;:&quot;error_login&quot;, &quot;spanError&quot;:&quot;error_login_t&quot;}" autocomplete="off">
                                <div class="login_list">
                                    <input id="txtAccountID" name="txtAccountID" type="text" class="loginID ng-pristine ng-untouched ng-isolate-scope ng-empty ng-invalid ng-invalid-required" placeholder="Tài khoản" autocomplete="off" required="" cksafetyaccountid="true" ng-model="ctrl.login.AccountID" ng-focus="ctrl.KeyboardClose('CellPhone')" ng-change="ctrl.VerifyAccountID()" validate-input-reg-custom-immediate="false" validate-input-reg-custom="^[A-Za-z0-9]{0,10}$" validate-input-reg-custom-blur="ctrl.TriggerInputOnBlur(val)" max-length="10" ng-trim="false" capitalize="" aria-required="true">
                                </div>
                                <div class="login_list pwON off">
                                    <input id="txtAccountPWD" name="txtAccountPWD" type="password" class="loginPW ng-pristine ng-untouched ng-isolate-scope ng-empty ng-invalid ng-invalid-required" placeholder="Mật khẩu" autocomplete="new-password" required="" ckaccountpwd="true" ng-model="ctrl.login.AccountPWD" ng-focus="ctrl.KeyboardClose('CellPhone')" ng-change="ctrl.VerifyAccountPWD()" validate-input-reg-custom-immediate="false" validate-input-reg-custom="^[A-Za-z0-9]{0,10}$" ng-trim="false" allow-trim-space="true" password-eye="false" aria-required="true">
                                    <div id="errorPW" class="error_login_t" style="display: none;"></div>
                                    <!-- ngIf: !ctrl.login.ShowPhoneVerify --><a href="/Mobile/Member/ForgetPwd" ng-if="!ctrl.login.ShowPhoneVerify" class="loginFG ng-scope">Quên mật khẩu?</a><!-- end ngIf: !ctrl.login.ShowPhoneVerify -->
                                    <span class="icon_pw"></span>
                                </div>
                                <!-- ngIf: ctrl.login.ShowPhoneVerify -->
                                <div>
                                    <div class="CellPhone ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" multi-numeric-keypad-v2="CellPhone" ng-model="ctrl.login.CellPhone" numeric-keypad-call-back="ctrl.VerifyCellPhone()" max-length="10">
                                        <div ng-show="usechips==='true'" class="numPlusArea ng-hide">
                                            <div class="typePlusNum number100">+100</div>
                                            <div class="typePlusNum number500">+500</div>
                                            <div class="typePlusNum number1000">+1000</div>
                                            <div class="typePlusNum number2000">+2000</div>
                                        </div>
                                        <table ng-show="usepoint==='false'" class="numInputArea ">
                                            <tbody>
                                                <tr>
                                                    <td class="typeNum PopupNum number1"></td>
                                                    <td class="typeNum PopupNum number2"></td>
                                                    <td class="typeNum PopupNum number3"></td>
                                                    <td class="typeNum PopupNum number4"></td>
                                                    <td class="typeNum PopupNum number5"></td>
                                                    <td class="typeNum PopupNum numClear"></td>
                                                </tr>
                                                <tr>
                                                    <td class="typeNum PopupNum number6"></td>
                                                    <td class="typeNum PopupNum number7"></td>
                                                    <td class="typeNum PopupNum number8"></td>
                                                    <td class="typeNum PopupNum number9"></td>
                                                    <td colspan="2" class="typeNum PopupNum number0"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table ng-show="usepoint==='true'" class="numInputArea ng-hide">
                                            <tbody>
                                                <tr>
                                                    <td class="typeNum PopupNum number1"></td>
                                                    <td class="typeNum PopupNum number2"></td>
                                                    <td class="typeNum PopupNum number3"></td>
                                                    <td class="typeNum PopupNum number4"></td>
                                                    <td class="typeNum PopupNum number5"></td>
                                                    <td class="typeNum PopupNum numClear"></td>
                                                </tr>
                                                <tr>
                                                    <td class="typeNum PopupNum number6"></td>
                                                    <td class="typeNum PopupNum number7"></td>
                                                    <td class="typeNum PopupNum number8"></td>
                                                    <td class="typeNum PopupNum number9"></td>
                                                    <td class="typeNum PopupNum number0"></td>
                                                    <td class="typeNum PopupNum numPoint"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ngIf: ctrl.login.ShowSliderCaptcha -->
                                <div ng-if="ctrl.login.ShowSliderCaptcha" class="popVerify ng-scope">
                                    <slider-captcha slider-bg-image="data:image/Jpeg;base64,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" slider-image="data:image/Png;base64,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" slider-success="ctrl.HandleCaptchaSuccess(data)" slider-fail="ctrl.HandleCaptchaFail()" slider-refresh="ctrl.SliderRefreshCallback()" trigger-verify="ctrl.VerifyLoginForm()">
                                        <div class="slidercaptcha card">
                                            <div class="card-header">
                                                <span></span>
                                            </div>
                                            <div class="card-body">
                                                <div class="sliderCaptcha-area" style="position: relative; width: 280px; margin: 0px auto;">
                                                    <canvas class="sliderBg" width="280" height="155"></canvas>
                                                    <i class="refreshIcon fa fa-redo" ng-click="refresh()"></i>
                                                    <canvas class="sliderBlock" height="155" width="100"></canvas>
                                                    <div class="sliderContainer">
                                                        <div class="slided"></div>
                                                        <div class="sliderMask">
                                                            <div class="slider">
                                                                <i class="arrow"></i>
                                                            </div>
                                                        </div>
                                                        <span class="sliderText ng-binding" ng-show="!isMoving()">Trượt mũi tên ghép hình</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </slider-captcha>
                                </div><!-- end ngIf: ctrl.login.ShowSliderCaptcha -->
                                <!-- ngIf: !ctrl.login.ShowSliderCaptcha && (true || ctrl.IsFriendExist()) -->
                                <input type="button" ng-class="ctrl.login.ShowSliderCaptcha || !(true || ctrl.IsFriendExist()) ? 'btn_sign w100' : 'btn_sign w50R'" ng-disabled="!ctrl.IsLoginButtonEnable()" id="btnSignIn" value="Đăng nhập" ajax-submit-auto-disable-v2="Đang đăng nhập" ng-promise-click="ctrl.SignCheck()" disabled="disabled" class="btn_sign w100">
                            </form>
                            <!--內容 end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ngIf: ctrl.needSetProtectCode -->
        <div class="mask_join mask_new " id="loginSet" style="display: none;">
            <div class="popup_container">
                <div class="popup_bg">
                    <div class="popup">
                        <div class="popup_T">Tin nhắn</div>
                        <div class="popup_In">
                            <!--內容-->
                            <div class="popupCenter">Chưa cài đặt mật khẩu bảo mật sẽ không thể đăng nhập, có tiếp tục hay không ?</div>
                        </div>
                        <div class="popup_button">
                            <input type="button" class="w50L" value="Thoát" ng-click="ctrl.popupConfirm()">
                            <input type="button" class="w50R popup_close" value="Tiếp tục" ng-click="ctrl.popupCancel()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--帳號密碼錯誤被鎖定禁登提示-->
        <div class="mask_all mask_new" id="loginLock" style="display: none;">
            <div class="popup_container">
                <div class="popup_bg">
                    <div class="popup">
                        <div class="popup_T">Tin nhắn</div>
                        <div class="popup_In">
                            <div class="popupCenter"><span bind-html-compile="ctrl.login.SignInOverLimitErrorMsg"></span></div>
                        </div>
                        <div class="popup_button">
                            <input type="button" class="w50L" value="Hủy" ng-click="ctrl.SignInFailedOverLimitClose()">
                            <input class="w50R" type="button" value="Liên hệ hỗ trợ" ng-click="ctrl.RedirectPage('/Mobile/Member/ServiceCenter', 'ServiceCenter')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div block-ui-container="" class="block-ui-container ng-scope">
            <div class="block-ui-overlay" ng-class="state.overrideOverlayClass"></div>
            <div class="block-ui-message-container" aria-live="assertive" aria-atomic="true">
                <div class="block-ui-message" ng-class="$_blockUiMessageClass">
                    <div class="mask_Loading_custom" ng-class="state.overrideMaskClass"></div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="hfLoginVerification" ng-init="ctrl.login.LoginVerification = '1'" ng-value="1" autocomplete="off" value="1">
    <style>
        #mask_SliderCaptcha .popup {
            width: fit-content;
        }

        #mask_SliderCaptcha .popup_In {
            padding: 0 25px 6px 25px;
        }

        /*T39349 取代main.css的popup屬性與margin-top重置*/
        #mask_SliderCaptcha .popup_In {
            padding-top: 18px !important;
        }

        #mask_SliderCaptcha .popup_button {
            margin-top: 0px !important;
            padding-bottom: 18px !important;
        }

        @media (min-width: 320px) and (max-width: 360px) {
            #mask_SliderCaptcha .popup_In {
                padding-top: 15px !important;
                padding: 0 7px 0 7px;
            }

            #mask_SliderCaptcha .popup_button {
                margin-top: 0px !important;
                padding-bottom: 15px !important;
            }
        }

        @media (min-width: 361px) and (max-width: 399px) {
            #mask_SliderCaptcha .popup_In {
                padding: 0 17px 0 17px;
            }
        }

        @media (min-width: 400px) {
            #mask_SliderCaptcha .popup_In {
                padding-top: 26px !important;
            }

            #mask_SliderCaptcha .popup_button {
                margin-top: 0px !important;
                padding-bottom: 26px !important;
            }
        }
    </style>
    <div ng-controller="CaptchaCodePanelCtrl as ctrl" block-ui="CaptchaCodePanel" class="ng-scope block-ui block-ui-anim-fade" aria-busy="false">
        <!--彈跳驗證碼視窗-->
        <div class="mask_all ng-hide" id="msgBox" style="display:none;" ng-style="{'display': ctrl.IsVisible() ? 'block' : 'none'}" ng-show="ctrl.IsVisible()">
            <div class="msgBox">
                <div class="btn_close" ng-click="ctrl.EmitPanelClose()"></div>
                <div class="msgBox_T" ng-show="ctrl.model.CurrentVerifyModeCache == 1">Xác nhận qua SMS</div>
                <div class="msgBox_Txt ng-binding" ng-show="ctrl.model.CurrentVerifyModeCache == 1">
                    Đã gửi mã xác nhận đến
                </div>
                <div class="msgBox_T ng-hide" ng-show="ctrl.model.CurrentVerifyModeCache == 2">Xác nhận bằng giọng nói</div>
                <div class="msgBox_Txt ng-binding ng-hide" ng-show="ctrl.model.CurrentVerifyModeCache == 2">
                    Đã gọi đến số
                    <br>
                    <img class="img_call" ng-src="image/icon_errorHint.svg" src="image/icon_errorHint.svg">Vui lòng chú ý để nhận cuộc gọi！
                </div>
                <ul class="msgBox_Num">
                    <li ng-class="ctrl.model.CaptchaCode1 == '' ? '' : 'on'" class="ng-binding"></li>
                    <li ng-class="ctrl.model.CaptchaCode2 == '' ? '' : 'on'" class="ng-binding"></li>
                    <li ng-class="ctrl.model.CaptchaCode3 == '' ? '' : 'on'" class="ng-binding"></li>
                    <li ng-class="ctrl.model.CaptchaCode4 == '' ? '' : 'on'" class="ng-binding"></li>
                </ul>
                <div id="verifyCaptchaCodeButton" class="CaptchaCode ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" multi-numeric-keypad-v2="CaptchaCode" ng-model="ctrl.model.CaptchaCode" numeric-keypad-call-back="ctrl.VerifyCaptchaChange(true)" max-length="4">
                    <div ng-show="usechips==='true'" class="numPlusArea ng-hide">
                        <div class="typePlusNum number100">+100</div>
                        <div class="typePlusNum number500">+500</div>
                        <div class="typePlusNum number1000">+1000</div>
                        <div class="typePlusNum number2000">+2000</div>
                    </div>
                    <table ng-show="usepoint==='false'" class="numInputArea ">
                        <tbody>
                            <tr>
                                <td class="typeNum PopupNum number1"></td>
                                <td class="typeNum PopupNum number2"></td>
                                <td class="typeNum PopupNum number3"></td>
                                <td class="typeNum PopupNum number4"></td>
                                <td class="typeNum PopupNum number5"></td>
                                <td class="typeNum PopupNum numClear"></td>
                            </tr>
                            <tr>
                                <td class="typeNum PopupNum number6"></td>
                                <td class="typeNum PopupNum number7"></td>
                                <td class="typeNum PopupNum number8"></td>
                                <td class="typeNum PopupNum number9"></td>
                                <td colspan="2" class="typeNum PopupNum number0"></td>
                            </tr>
                        </tbody>
                    </table>
                    <table ng-show="usepoint==='true'" class="numInputArea ng-hide">
                        <tbody>
                            <tr>
                                <td class="typeNum PopupNum number1"></td>
                                <td class="typeNum PopupNum number2"></td>
                                <td class="typeNum PopupNum number3"></td>
                                <td class="typeNum PopupNum number4"></td>
                                <td class="typeNum PopupNum number5"></td>
                                <td class="typeNum PopupNum numClear"></td>
                            </tr>
                            <tr>
                                <td class="typeNum PopupNum number6"></td>
                                <td class="typeNum PopupNum number7"></td>
                                <td class="typeNum PopupNum number8"></td>
                                <td class="typeNum PopupNum number9"></td>
                                <td class="typeNum PopupNum number0"></td>
                                <td class="typeNum PopupNum numPoint"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form_button">
                    <!-- ngIf: ctrl.model.CallCustomerServiceCounts <= 0 && ctrl.IsSendCaptchaButtonEnabled() --><input type="button" class="w100 bg_colorDB ng-scope" id="btn02" ng-class="ctrl.GetSendCaptchaButtonClass()" ng-click="ctrl.SendCaptchaButtonClick()" ng-disabled="!ctrl.model.ElementManager.IsEnabled('sendCaptchaButton')" ng-value="ctrl.GetSendCaptchaButtonName()" original-name="Gửi mã" ng-if="ctrl.model.CallCustomerServiceCounts <= 0 &amp;&amp; ctrl.IsSendCaptchaButtonEnabled()" value="Gửi mã"><!-- end ngIf: ctrl.model.CallCustomerServiceCounts <= 0 && ctrl.IsSendCaptchaButtonEnabled() -->
                    <!-- ngIf: !ctrl.IsSendCaptchaButtonEnabled() -->
                    <!-- ngIf: ctrl.model.CallCustomerServiceCounts > 0 && ctrl.IsSendCaptchaButtonEnabled() -->
                </div>
            </div>
        </div>
        <!--滑塊驗證碼-->
        <div class="mask_join full_layout" id="mask_SliderCaptcha">
            <div class="popup_container">
                <div class="popup_bg_upper full_layout">
                    <!--T38732 11/11 安全驗證彈窗按鈕處白背景需完整顯示-->
                    <div class="popup" style="background-color: #fff;">
                        <div class="btn_close popup_close" ng-click="ctrl.CaptchaImageClose()"></div>
                        <div class="popup_T">
                            <span>Xác nhận bảo mật</span>
                        </div>
                        <div class="popup_In">
                            <!--內容-->
                            <slider-captcha slider-bg-image="" slider-image="" slider-max-error="5" slider-success="ctrl.HandleCaptchaSuccess(data)" slider-fail="ctrl.HandleCaptchaFail()" slider-refresh="ctrl.SliderRefreshCallback()">
                                <div class="slidercaptcha card">
                                    <div class="card-header">
                                        <span></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="sliderCaptcha-area" style="position: relative; width: 280px; margin: 0px auto;">
                                            <canvas class="sliderBg" width="280" height="155"></canvas>
                                            <i class="refreshIcon fa fa-redo" ng-click="refresh()"></i>
                                            <canvas class="sliderBlock" height="155" width="100"></canvas>
                                            <div class="sliderContainer">
                                                <div class="slided"></div>
                                                <div class="sliderMask">
                                                    <div class="slider">
                                                        <i class="arrow"></i>
                                                    </div>
                                                </div>
                                                <span class="sliderText ng-binding" ng-show="!isMoving()">Trượt mũi tên ghép hình</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </slider-captcha>
                            <!--內容 end-->
                        </div>
                        <div class="popup_button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mask_all" id="PopSuccess" ng-click="ctrl.ClosePopSuccess();" style="display: none;">
            <div class="popup_container">
                <div class="popup_bg">
                    <div class="popup popupShort">
                        <div class="popup_In">
                            <div class="popupS_T"><img src="/Areas/Mobile/Content/Images/icon_checkGreen.svg"></div>
                            <div class="popupS_In">Xác minh thành công!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="hfDefaultCountDownSecond" value="30" autocomplete="off">
        <div block-ui-container="" class="block-ui-container ng-scope">
            <div class="block-ui-overlay" ng-class="state.overrideOverlayClass"></div>
            <div class="block-ui-message-container" aria-live="assertive" aria-atomic="true">
                <div class="block-ui-message" ng-class="$_blockUiMessageClass">
                    <div class="mask_Loading_custom" ng-class="state.overrideMaskClass"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('js/thirdpartyplugin.m-memberportal.20181204A.js') }}"></script>
    <script src="{{ asset('js/base.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/swiper.v7.4.1.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- <script src="js/js.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/bundles/app/mobile-home-login.js?v=PCYIe0k4OUG4yUBhuBZvEWSnZWR-BkV42MerFnUO9sw1"></script>
    <script type="text/javascript">
        OBSMobileApp.GlobalJsConfig.SetConfig({
            "SignalRNFSvcHost": "//sgrapi.ku6688.net/NFSvc",
            "SignalRNFSvcIsDebug": "false",
            "GetGameBalanceTime": "30",
            "DDDFastTransferCallBackUrl": '',
            "FastTransferGameID": '',
            "EntryRef": '',
            "SiteCulture": "vi-vn",
            "CountryID": "618",
            "SiteCultureAcronym": "VN"
        });
    </script>
    <script>
    </script>
    <div id="valid-rule-block">
        <valid-rule rule-name="maxlength" rule-message="Nhập 4 ~ 10 ký tự chữ và số hoặc số điện thoại"></valid-rule>
        <valid-rule rule-name="required" rule-message="Bắt buộc điền"></valid-rule>
        <valid-rule rule-name="ckSafetyAccountID" rule-message="Tài khoản là tổ hợp 4 ~ 10 ký tự chữ và số"></valid-rule>
        <valid-rule rule-name="ckAccountPWD" rule-message="6 ~ 10 ký tự chữ và số"></valid-rule>
        <valid-rule rule-name="ckCellPhoneVerify" rule-message="Sai quy cách SĐT Việt Nam"></valid-rule>
        <valid-rule rule-name="ckPWD" rule-message="6 ~ 10 ký tự chữ và số"></valid-rule>
        <valid-rule rule-name="ckProtectCodeConfirmation" rule-message="Mật khẩu bảo mật không thống nhất!"></valid-rule>
        <valid-rule rule-name="ckProtectCodeRequired" rule-message="Mật khẩu bảo mật không được để trống!"></valid-rule>
        <valid-rule rule-name="ckCheckPWDConfirmationRequired" rule-message="Xin hãy nhập lại không được để trống!"></valid-rule>
        <valid-rule rule-name="ckSimplePassword" rule-message="Mật khẩu quá đơn giản, hãy thiết lập lại"></valid-rule>
    </div>
    <div id="alert-rule-block">
        <alert-rule rule-name="系統異常請稍後再試" rule-message="Lỗi hệ thống, vui lòng thử lại sau"></alert-rule>
        <alert-rule rule-name="網路異常，請刷新頁面" rule-message="Lỗi mạng, vui lòng làm mới giao diện"></alert-rule>
        <alert-rule rule-name="請求異常，請稍後再試" rule-message="Lỗi truy cập, vui lòng thử lại sau"></alert-rule>
        <alert-rule rule-name="確認" rule-message="Xác nhận"></alert-rule>
        <alert-rule rule-name="登入錯誤次數超過10次" rule-message="Số lần đăng nhập sai vượt quá 10 lần"></alert-rule>
        <alert-rule rule-name="登 錄" rule-message="Đăng nhập"></alert-rule>
        <alert-rule rule-name="登錄中" rule-message="Đang đăng nhập"></alert-rule>
        <alert-rule rule-name="網站維護中，無法進行註冊" rule-message="Trang mạng đang bảo trì, không thể đăng ký hội viên"></alert-rule>
        <alert-rule rule-name="很抱歉，目前會員註冊關閉中" rule-message="Xin lỗi, hiện tại không mở chức năng đăng ký hội viên"></alert-rule>
        <alert-rule rule-name="請重新嘗試" rule-message="Thử lại"></alert-rule>
        <alert-rule rule-name="按住箭頭，向右滑動驗證" rule-message="Trượt mũi tên ghép hình"></alert-rule>
        <alert-rule rule-name="帳號/手機號碼" rule-message="Tài khoản / SĐT"></alert-rule>
        <alert-rule rule-name="帳號" rule-message="Tài khoản"></alert-rule>
        <alert-rule rule-name="未設置保護密碼則無法登入帳號，是否繼續？" rule-message="Chưa cài đặt mật khẩu bảo mật sẽ không thể đăng nhập, có tiếp tục hay không ?"></alert-rule>
        <alert-rule rule-name="離開" rule-message="Thoát"></alert-rule>
        <alert-rule rule-name="繼續" rule-message="Tiếp tục"></alert-rule>
        <alert-rule rule-name="您今日驗證次數已達上限，請聯繫客服專員!" rule-message="Số lần xác nhận trong ngày của bạn đã đạt mức tối đa, vui lòng liên hệ hỗ trợ!"></alert-rule>
        <alert-rule rule-name="客服人員將致電與您聯繫，請您留意接聽電話" rule-message="Nhân viên hỗ trợ sẽ liên hệ bạn, vui lòng chú ý để nhận cuộc gọi"></alert-rule>
        <alert-rule rule-name="很抱歉，回電服務目前關閉中，請暫時使用其他客服管道聯繫我們，謝謝！" rule-message="Xin lỗi, dịch vụ gọi lại hiện tại không thể sử dụng, hãy sử dụng cách khác để liên hệ với chúng tôi, cảm ơn!"></alert-rule>
        <alert-rule rule-name="重發驗證碼" rule-message="Gửi lại"></alert-rule>
        <alert-rule rule-name="聯繫客服" rule-message="Liên hệ hỗ trợ"></alert-rule>
        <alert-rule rule-name="獲取驗證碼" rule-message="Gửi mã"></alert-rule>
        <alert-rule rule-name="您輸入的手機號碼未驗證，請聯繫客服，謝謝！" rule-message="Số điện thoại bạn nhập chưa xác nhận, vui lòng liên hệ hỗ trợ, cám ơn!"></alert-rule>
        <alert-rule rule-name="發送中" rule-message="Đang gửi"></alert-rule>
        <alert-rule rule-name="保護密碼與登錄密碼不可相同" rule-message="Mật khẩu bảo mật và Mật khẩu tài khoản không được giống nhau"></alert-rule>
        <alert-rule rule-name="保護密碼與會員帳號不可相同" rule-message="Phải khác tài khoản đăng nhập"></alert-rule>
        <alert-rule rule-name="帳號或密碼錯誤" rule-message="Tài khoản hoặc mật khẩu sai"></alert-rule>
        <alert-rule rule-name="帳號或密碼錯誤，請重新輸入！" rule-message="Tài khoản hoặc mật khẩu sai, hãy nhập lại!"></alert-rule>
        <alert-rule rule-name="登入頻繁，請稍後再登入！！！" rule-message="Đăng nhập quá thường xuyên, vui lòng đăng nhập sau!!!"></alert-rule>
        <alert-rule rule-name="信息" rule-message="Tin nhắn"></alert-rule>
        <alert-rule rule-name="短信" rule-message="Gửi mã"></alert-rule>
        <alert-rule rule-name="請檢查輸入網址是否有誤，網路信號是否正常，請嘗試重新整理頁面或聯繫客服!" rule-message="Vui lòng kiểm tra địa chỉ trang mạng chính xác hay không, tín hiệu đường truyền có bình thường không, vui lòng làm mới giao diện hoặc liên hệ hỗ trợ!"></alert-rule>
        <alert-rule rule-name="您的帳號已被鎖定" rule-message="Tài khoản của bạn đã bị khóa"></alert-rule>
        <alert-rule rule-name="請聯繫客服，謝謝" rule-message="Vui lòng liên hệ hỗ trợ, cám ơn"></alert-rule>
        <alert-rule rule-name="讀取中" rule-message="loading"></alert-rule>
        <alert-rule rule-name="請勿提供手機驗證碼給他人！！" rule-message="Vui lòng không cung cấp mã xác minh OTP cho bất kì ai!!"></alert-rule>
        <alert-rule rule-name="短信" rule-message="Gửi mã"></alert-rule>
        <alert-rule rule-name="語音" rule-message="Tin nhắn thoại"></alert-rule>
        <alert-rule rule-name="發送語音驗證碼" rule-message="Gửi mã xác nhận qua tin nhắn thoại"></alert-rule>
        <alert-rule rule-name="重發" rule-message="Gửi lại"></alert-rule>
        <alert-rule rule-name="重發驗證碼" rule-message="Gửi lại"></alert-rule>
        <alert-rule rule-name="發送中" rule-message="Đang gửi"></alert-rule>
        <alert-rule rule-name="聯繫客服" rule-message="Liên hệ hỗ trợ"></alert-rule>
        <alert-rule rule-name="已驗證" rule-message="Đã xác nhận"></alert-rule>
        <alert-rule rule-name="轉點中" rule-message="Đang chuyển"></alert-rule>
        <alert-rule rule-name="轉點金額不能大於帳戶餘額" rule-message="Điểm chuyển không được nhiều hơn số dư trong tài khoản"></alert-rule>
        <alert-rule rule-name="載入中" rule-message="Đang tải"></alert-rule>
        <alert-rule rule-name="維護中" rule-message="Đang bảo trì"></alert-rule>
        <alert-rule rule-name="請輸入轉點金額" rule-message="Vui lòng nhập số tiền chuyển điểm"></alert-rule>
        <alert-rule rule-name="轉點成功" rule-message="Chuyển điểm thành công"></alert-rule>
        <alert-rule rule-name="進入遊戲" rule-message="Vào trò chơi"></alert-rule>
        <alert-rule rule-name="關閉視窗" rule-message="Tắt cửa sổ"></alert-rule>
        <alert-rule rule-name="請輸入整數金額" rule-message="Nhập số nguyên"></alert-rule>
        <alert-rule rule-name="請輸入金額" rule-message="Nhập số điểm"></alert-rule>
        <alert-rule rule-name="很抱歉，目前轉帳功能維護中" rule-message="Xin lỗi, chức năng chuyển khoản đang bảo trì"></alert-rule>
        <alert-rule rule-name="很抱歉，目前轉帳功能維護中！" rule-message="Xin lỗi, chức năng chuyển khoản đang bảo trì！"></alert-rule>
        <alert-rule rule-name="平台轉帳維護中" rule-message="Chuyển khoản bảo trì"></alert-rule>
        <alert-rule rule-name="您存入的額度高於上限" rule-message="Số tiền bạn nạp vào cao hơn mức tối đa"></alert-rule>
        <alert-rule rule-name="您的可轉金額為0" rule-message="Số tiền bạn có thể chuyển là 0"></alert-rule>
        <alert-rule rule-name="主帳戶餘額不足" rule-message="Số dư của bạn không đủ"></alert-rule>
        <alert-rule rule-name="今日互轉次數已達到限定值" rule-message="Số lần chuyển điểm trong ngày đã đạt mức hạn chế"></alert-rule>
        <alert-rule rule-name="今日互轉額度已達限定值" rule-message="Số điểm chuyển trong ngày đã đạt mức hạn chế"></alert-rule>
        <alert-rule rule-name="您的可用額度不足" rule-message="Số dư của bạn không đủ"></alert-rule>
        <alert-rule rule-name="代理商金額不足" rule-message="Số dư đại lý không đủ"></alert-rule>
        <alert-rule rule-name="【{0}】與【{1}】互轉失敗，請聯繫客服！" rule-message="【{0}】và【{1}】Chuyển điểm thất bại, vui lòng liên hệ hỗ trợ!"></alert-rule>
        <alert-rule rule-name="主帳戶" rule-message="TK Chính"></alert-rule>
        <alert-rule rule-name="很抱歉，目前存款功能暫不開放，請聯繫客服中心！" rule-message="Xin lỗi, hiện tại chức năng nạp tiền tạm thời chưa mở, xin vui lòng liên hệ hỗ trợ khách hàng!"></alert-rule>
        <alert-rule rule-name="您已完善資料，待通過資料審核，" rule-message="Bạn đã hoàn tất tư liệu, vui lòng chờ thông qua xét duyệt,"></alert-rule>
        <alert-rule rule-name="即開放存款，請耐心等候" rule-message="Mở nạp tiền, vui lòng chờ đợi"></alert-rule>
        <alert-rule rule-name="很抱歉，目前提款功能暫不開放，請聯繫客服中心！" rule-message="Xin lỗi, hiện tại chức năng rút tiền tạm thời chưa mở, xin vui lòng liên hệ hỗ trợ khách hàng!"></alert-rule>
        <alert-rule rule-name="很抱歉，目前存提款功能維護中" rule-message="Xin lỗi, hiện nay chức năng nạp rút tiền đang bảo trì"></alert-rule>
        <alert-rule rule-name="很抱歉，目前存提款功能暫不開放，請聯繫客服中心！" rule-message="Xin lỗi, hiện tại chức năng nạp rút tiền tạm thời chưa mở, xin vui lòng liên hệ hỗ trợ khách hàng!"></alert-rule>
        <alert-rule rule-name="您已完善資料，待通過資料審核，即開放存款，請耐心等候" rule-message="Bạn đã hoàn thiện thông tin, sau khi xét duyệt thông qua sẽ mở chức năng nạp tiền, vui lòng nhẫn nại chờ đợi"></alert-rule>
        <alert-rule rule-name="轉帳功能維護中" rule-message="đang bảo trì"></alert-rule>
        <alert-rule rule-name="XXX與XXX互轉失敗，請重新操作" rule-message="{0} và {1} Chuyển điểm thất bại, vui lòng thao tác lại"></alert-rule>
        <alert-rule rule-name="轉點失敗" rule-message="Chuyển điểm thất bại"></alert-rule>
        <alert-rule rule-name="轉點失敗，請重新操作" rule-message="Chuyển điểm thất bại, vui lòng thao tác lại"></alert-rule>
        <alert-rule rule-name="繁忙中" rule-message="Đang bận"></alert-rule>
        <alert-rule rule-name="系統繁忙請稍候" rule-message="Hệ thống đang bận, vui lòng chờ"></alert-rule>
        <alert-rule rule-name="正在維護中，請先至本網站其他項目進行投注！" rule-message="đang bảo trì, vui lòng đặt cược hạng mục khác trước, cảm ơn !"></alert-rule>
        <alert-rule rule-name="單筆互轉額度超過限定值" rule-message="Số điểm chuyển vượt quá mức tối đa của một lần chuyển"></alert-rule>
        <alert-rule rule-name="主帳戶與XXX互轉失敗，請重新操作" rule-message="TK Chính và {0} Chuyển điểm thất bại, vui lòng thao tác lại"></alert-rule>
        <alert-rule rule-name="主帳戶與XXX互轉失敗" rule-message="Tài khoản chính và《{0}》chuyển khoản cho nhau thất bại"></alert-rule>
        <alert-rule rule-name="3D館" rule-message="3D"></alert-rule>
        <alert-rule rule-name="您沒有額度，請先進行轉帳！" rule-message="您沒有額度，請先進行轉帳！"></alert-rule>
        <alert-rule rule-name="請求失敗" rule-message="Yêu cầu thất bại"></alert-rule>
        <alert-rule rule-name="轉帳" rule-message="Chuyển khoản"></alert-rule>
        <alert-rule rule-name="操作次數過於頻繁，請稍候再試" rule-message="Số lần thao tác quá thường xuyên, vui lòng thử lại sau"></alert-rule>
        <alert-rule rule-name="轉帳金額需高於5點以上" rule-message="Số điểm chuyển phải cao hơn 5 điểm"></alert-rule>
        <alert-rule rule-name="轉帳金額低於限制，請轉入5點以上！" rule-message="Số điểm chuyển thấp hơn hạn mức,vui lòng chuyển trên 5 điểm!"></alert-rule>
        <alert-rule rule-name="轉帳金額低於限制" rule-message="Số điểm chuyển thấp hơn hạn mức"></alert-rule>
        <alert-rule rule-name="請轉入5點以上" rule-message="vui lòng chuyển từ 5 điểm trở lên"></alert-rule>
        <alert-rule rule-name="在3D電子遊戲中或離開遊戲30秒內，暫不允許提點" rule-message="Đang trong 3D hoặc rời khỏi trò chơi trong vòng 30 giây thì không được phép chuyển điểm"></alert-rule>
        <alert-rule rule-name="敬請期待！" rule-message="Sắp ra mắt!"></alert-rule>
    </div>


    <div block-ui-container="" class="block-ui-container ng-scope">
        <div class="block-ui-overlay" ng-class="state.overrideOverlayClass"></div>
        <div class="block-ui-message-container" aria-live="assertive" aria-atomic="true">
            <div class="block-ui-message" ng-class="$_blockUiMessageClass">
                <div class="mask_Loading_custom" ng-class="state.overrideMaskClass"></div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var windowInnerHeight, intervalTimer;
            var userAgent = navigator.userAgent.toLowerCase();
            var footerTop = parseInt($(".footer").css('top'));
            var stopChangeFooter;

            $(".loginID,.loginPW").focus(function(e) {
                var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop || window.pageYOffset;
                var inputOffsetTop = $(this)[0].getBoundingClientRect().top;
                var headerTop = 105;
                // åœ¨android firefoxé€Ÿåº¦å¤ªå¿«ç§»å‹•æœƒå…ˆä¸‹å†ä¸ï¼Œæ‰€ä»¥æ”¾æ…¢ç§»å‹•é€Ÿåº¦
                var movingSpeed = 600;

                if (userAgent.match(/(\(ipod|\(iphone|\(ipad)/)) {
                    headerTop = 50;
                    movingSpeed = 300;
                }

                if ($(".bg_header").length !== 0 && $(".bg_header").css("display") !== "none") {
                    headerTop += $(".bg_header").height();
                }
                if ($(".infor").length !== 0 && $(".infor").css("display") !== "none") {
                    headerTop += $(".infor").height();
                }
                if ($(".container_T").length) {
                    headerTop += $(".container_T").height();
                }

                $('html,body').animate({
                    scrollTop: bodyScrollTop + inputOffsetTop - headerTop
                }, movingSpeed);
            });

            //$("textarea:not(#massage,.gift_textarea,.NoteMessage)").focus(function (e) {
            //    $(".footer,.footer_login").css('display', 'none').hide();
            //    windowInnerHeight = null;

            //    var tempScrollTop = null;
            //    setTimeout(function () {
            //        windowInnerHeight = window.innerHeight;
            //        if (intervalTimer) {
            //            clearInterval(intervalTimer);
            //        }
            //        intervalTimer = setInterval(function () {
            //            // è®¡æ—¶å™¨æ‰§è¡Œç„ï¼Œéœ€è¦åˆ¤æ–­çª—å£å¯è§†é«˜åº¦ï¼Œå¦‚æœæ”¹å˜è¯´æ˜androidé”®ç›˜éè—äº†
            //            // è¿™é‡Œé€»è¾‘å¯ä»¥æ›´æ”¹ä¸‹ï¼Œæœ‰å¯èƒ½å…¶ä»–jsäº‹ä»¶ä¼å¯¼è‡´é«˜åº¦å˜åŒ–ï¼Œè¿™é‡Œå°±åªåä¸ªç®€å•åˆ¤æ–­äº†
            //            if (windowInnerHeight && window.innerHeight > windowInnerHeight) {
            //                clearInterval(intervalTimer);
            //            }
            //            else {
            //                if (tempScrollTop == null) {
            //                    var headerTop = -10;
            //                    headerTop += jQuery(".bg_header").height();
            //                    headerTop += jQuery(".infor").height();
            //                    $('html,body').animate({ scrollTop: headerTop }, 200);

            //                    tempScrollTop = headerTop;
            //                }
            //            }
            //        }, 200);
            //    }, 500);
            //});

            // å½ˆè·³è¦–çª—æ§åˆ¶
            $("#callPopup").click(function() {
                $("#popup_open").show();
                $(".footer_DW_open").removeClass("on");
                //var bodyScroll = $(window).scrollTop();
                //$('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
            });
            $("#callPopup2").click(function() {
                $("#popup_open2").show();
                $(".footer_DW_open").removeClass("on");
                //var bodyScroll = $(window).scrollTop();
                //$('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
            });
            $("#callPopup3").click(function() {
                $("#popup_open").show();
                $(".footer_DW_open").removeClass("on");
                //var bodyScroll = $(window).scrollTop();
                //$('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
            });
            $(".popup_close").click(function() {
                $(".mask,.mask_join,.mask_all").hide();
                var bodyScroll = $(window).scrollTop();
                $('.container_main').removeAttr('style');
                $(window).scrollTop(bodyScroll);
            });
            $(".popupCI").closest('.mask_all').click(function() {
                $(this).hide();
            });
            $(".popupCI").closest('.mask_all *').click(function() {
                event.stopPropagation();
            });
            $("#VRlottery").click(function() {
                $("#popup_open").show();
                $(".footer_DW_open").removeClass("on");
                var bodyScroll = $(window).scrollTop();
                $('.container_main').css({
                    'position': 'fixed',
                    'top': '-' + bodyScroll + 'px'
                });
            });
            $("#openGame").click(function() {
                $("#popup_open").hide();
                $("#popup_Game").show();
            });
            $("#Popup_excl").click(function() {
                $("#excl_Popup").show();
            });
            //æœƒå“¡è¨»å†
            //$("#btn_msgBox").click(function () {
            //    $('#msgBox').show();
            //    var bodyScroll = $(window).scrollTop();
            //    $('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
            //});
            //$("#msgBox *").click(function () {
            //    event.stopPropagation();
            //});
            //$(".msgBox .btn_close").click(function () {
            //    $(this).closest('[class*="mask"]').hide();
            //    var bodyScroll = $(window).scrollTop();
            //    $('.container_main').removeAttr('style');
            //    $(window).scrollTop(bodyScroll);
            //});
            //æœƒå“¡è¨»å†-æœƒå“¡å¸³è™Ÿæç¤ºå­—
            $("#accountID").focusout(function() {
                $("#accountID_open").show();
            });
            $("#accountID_open").children("a").click(function() {
                $("#accountID_open").hide();
            });
            //æœå°‹æ¢ä»¶
            $("#Search_T").click(function() {
                if ($("#Search_In").css("display") == "none") {
                    $("#Search_In").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $("#Search_In").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            //å±•é–‹é¸å–®-é‡‘æµé¸æ“‡
            $(".btn_depositSelect_T").click(function() {
                if ($(this).parent(".deposit_select").children(".depositSelect_In").css("display") == "none") {
                    $(this).parent(".deposit_select").children(".depositSelect_In").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $(this).parent(".deposit_select").children(".depositSelect_In").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            $(".btn_newsSelect_T").click(function() {
                if ($(this).parent(".news_select").children(".newsSelect_In").css("display") == "none") {
                    $(this).parent(".news_select").children(".newsSelect_In").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $(this).parent(".news_select").children(".newsSelect_In").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            $(".loginID,.loginPW").focus(function() {
                $('.login_main').addClass("on");
            });
            $(".loginID,.loginPW").blur(function() {
                $('.login_main').removeClass("on");
            });

            //ææ¬¾å°ˆå€-é€è¡Œå¸³è™Ÿ
            $("#btn_bankID").click(function() {
                if ($("#bankID_In").css("display") == "none") {
                    $("#bankID_In").slideDown("fast");
                } else {
                    $("#bankID_In").slideUp("fast");
                }
            });
            $("#bankID_In").click(function() {
                $("#bankID_In").slideUp("fast");
            });
            ////äº¤æ˜“è®°å½•
            // $(".tradeRec").children(".tradeRec_list:first").children(".tradeRec_listT").addClass("on");
            // $(".tradeRec").children(".tradeRec_list:first").children(".tradeRec_listIn").slideDown();
            // $(".tradeRec_listTR").click(function () {
            //     if ($(this).parent(".tradeRec_listT").parent(".tradeRec_list").children(".tradeRec_listIn").css("display") == "none") {
            //         $(this).parent(".tradeRec_listT").parent(".tradeRec_list").children(".tradeRec_listIn").slideDown("fast");
            //         $(this).parent(".tradeRec_listT").addClass("on");
            //     } else {
            //         $(this).parent(".tradeRec_listT").parent(".tradeRec_list").children(".tradeRec_listIn").slideUp("fast");
            //         $(this).parent(".tradeRec_listT").removeClass("on");
            //     }
            // });
            //å…¬å‘/æ´»å‹•è´ˆé»
            $(".news").children(".news_list:first").children(".news_listT").addClass("on");
            $(".news").children(".news_list:first").children(".news_listIn").slideDown();
            $(".news_listT").click(function() {
                if ($(this).parent(".news_list").children(".news_listIn").css("display") == "none") {
                    $(this).parent(".news_list").children(".news_listIn").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $(this).parent(".news_list").children(".news_listIn").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            //æ´»å¨ç‚¹æ•°-é¡åˆ¥åˆ‡æ›
            $(".btn_BRSelect_T").click(function() {
                if ($(this).parent(".BRSelect").children(".BRSelect_In").css("display") == "none") {
                    $(this).parent(".BRSelect").children(".BRSelect_In").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $(this).parent(".BRSelect").children(".BRSelect_In").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            //æ´»å¨ç‚¹æ•°-åˆ—è¡¨
            $(".bonusRec").children(".bonusRec_list:first").children(".bonusRec_listT").addClass("on");
            $(".bonusRec").children(".bonusRec_list:first").children(".bonusRec_listIn").slideDown();
            $(".bonusRec_listT").click(function() {
                if ($(this).parent(".bonusRec_list").children(".bonusRec_listIn").css("display") == "none") {
                    $(this).parent(".bonusRec_list").children(".bonusRec_listIn").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $(this).parent(".bonusRec_list").children(".bonusRec_listIn").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            //æœ€æ–°å„ªæƒ 
            $(".bonus_list").click(function() {
                if ($(this).children(".bonus_listIn").css("display") == "none") {
                    $(this).children(".bonus_listIn").slideDown("fast");
                    $(this).children(".bonus_listT").addClass("on");
                } else {
                    $(this).children(".bonus_listIn").slideUp("fast");
                    $(this).children(".bonus_listT").removeClass("on");
                }
            });
            $('.bonus_listIn').click(function(e) {
                event.stopPropagation();
            });
            $('.WCtop').click(function() {
                // å…ˆé—œé–‰
                $('.WC_Table_member').find('.on').not(this).toggleClass('on').siblings(".WCbottm").slideToggle();
                // å¾Œæ‰“é–‹
                $(this).toggleClass('on').siblings(".WCbottm").slideToggle();
            })
            $(".BAR_list:first").addClass("on");
            $(".BAR_list").click(function() {
                if ($(this).children(".BAR_listIn").css("display") == "none") {
                    $(this).addClass("on");
                } else {
                    $(this).removeClass("on");
                }
            });
            //å…³äºæˆ‘ä»¬/ç‰Œç…§å±•ç¤º
            $(".license_arrow").click(function() {
                if ($(this).parent(".license_list").children(".license_listIn").css("display") == "none") {
                    $(this).parent(".license_list").children(".license_listIn").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $(this).parent(".license_list").children(".license_listIn").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            //å¸®å©ä¸­å¿ƒ-é¡åˆ¥é¸æ“‡
            //é–‹å•Ÿç¶²ç«™å°è¦½å€å¡ï¼Œé è¨­å®ä½åœ¨ç¶²ç«™å°è¦½åŸèƒ½
            $(".helpSelect").children(".helpSelect_In").slideDown();
            $(".btn_helpSelect_T").addClass("on");
            $(".btn_helpSelect_T").click(function() {
                if ($(this).parent(".helpSelect").children(".helpSelect_In").css("display") == "none") {
                    $(this).parent(".helpSelect").children(".helpSelect_In").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $(this).parent(".helpSelect").children(".helpSelect_In").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            //å¸®å©ä¸­å¿ƒ
            $(".FAQ_listT").click(function() {
                if ($(this).parent(".FAQ_list").children(".FAQ_listIn").css("display") == "none") {
                    $(this).parent(".FAQ_list").children(".FAQ_listIn").slideDown("fast");
                    $(this).addClass("on");
                } else {
                    $(this).parent(".FAQ_list").children(".FAQ_listIn").slideUp("fast");
                    $(this).removeClass("on");
                }
            });
            //éæˆ²ç¶­è­·ä¸­(é¦–é )-æç¤ºæ°£æ³¡
            var maintainTimeout;
            $('[class*="btn_GL"],.btn_CI,.btn_studio,.btn_chat').click(function() {
                if (maintainTimeout) {
                    clearTimeout(maintainTimeout);
                }

                if ($(this).hasClass("maintain") || $(this).closest(".container_main").hasClass("container_login")) {
                    $('.gameMainTain_in').not($(this).find('.gameMainTain_in')).hide();
                    $('.footer_maintain').hide();

                    $(this).find('.gameMainTain_in').toggle();

                    maintainTimeout = setTimeout(function() {
                        $('.gameMainTain_in').hide();
                    }, 3000);
                }
            });
            $(function() {
                $(document).bind('click touchend', function(e) {
                    var target = $(e.target);
                    if (target.closest('[class*="btn_GL"].maintain,.container_login [class*="btn_GL"],.popupCI .maintain').length == 0) {
                        $('.gameMainTain_in').hide();
                    }
                })
            })
            // T24302: ç§»é™¤ :not(.btn_footer_DW)' åˆ¤æ–·ï¼Œæ”¹ç”±å‡½å¼å…§åˆ¤æ–·
            $(document).on('click', '.footer_list.off,.btn_footer_deposit.off,.btn_footer_withdrawal.off,.btn_footer_transfer.off', _.debounce(function() {
                var elemMaintain = $(this).find('.footer_maintain');

                if ($(this).attr('class').indexOf("footer_list") == -1) {
                    $(".footer_DW_open").addClass("on");
                    elemMaintain = $(this).next(".footer_maintain");
                }

                // T24302: æœªç™»å…¥æƒ…æ³ä¸‹é‚„æ˜¯è¦è·‘é€™ä¸€æ®µ
                if (maintainTimeout) {
                    clearTimeout(maintainTimeout);
                }

                $('.footer_maintain').not(elemMaintain).hide();

                elemMaintain.toggle();

                maintainTimeout = setTimeout(function() {
                    console.log("timeout..");
                    if (elemMaintain.css("display") === "block") {
                        console.log("hide");
                        elemMaintain.hide();
                    }
                }, 3000);
            }, 300, {
                leading: true,
                trailing: false
            }));
            //è£œå……è¨»å†/zaloPayæ³¡æ³¡æç¤ºè¦–çª— æ³¨æ„å¯«åœ¨é€™é‚ä¸æœƒæœ‰æ•ˆæœ å·²ç§»è‡³RegisterAdditionally.Controller.ts è£¡
            $('.btn_prompt:not(.keyboard)').click(function() {
                $('.txt_prompt').not($(this).siblings()).hide().parent().css("z-index", "1");
                $(this).siblings('.txt_prompt').show().parent().css("z-index", "2");
            });
            $('.btn_prompt.keyboard').click(function() {
                $('.txt_prompt').not($(this).siblings()).hide().parent().css("z-index", "1");
                if ($(this).siblings('.numInputArea').hasClass("on")) {
                    $(this).siblings('.txt_prompt').hide().parent().css("z-index", "1");
                } else {
                    $(this).siblings('.txt_prompt').show().parent().css("z-index", "2");
                }
            });

            //èå¤©å®¤ç»´æ¤
            $('.btn_chat.off').click(function() {
                if (maintainTimeout) {
                    clearTimeout(maintainTimeout);
                }
                var elemMaintain = $(this).find('.chatMaintain');
                $('.chatMaintain').not(elemMaintain).hide();
                elemMaintain.toggle();

                maintainTimeout = setTimeout(function() {
                    if (elemMaintain.css("display") === "block") {
                        elemMaintain.hide();
                    }
                }, 3000);
            });
            $(function() {
                $(document).bind('click touchend', function(e) {
                    var target = $(e.target);
                    if (target.closest(".btn_chat.off,.chatMaintain").length == 0) {
                        $('.chatMaintain').hide();
                    }
                })
            })

            $(document).on('focus', ':text,:password,textarea', function(event) {
                var timeout = userAgent.match(/(\(ipod|\(iphone|\(ipad)/) ? 500 : 0;

                setTimeout(function() {
                    $(".mask").addClass("mask_noBottom");
                }, timeout);
                windowInnerHeight = window.innerHeight;
                $(".footer").css("top", footerTop);
                clearTimeout(stopChangeFooter);
            });

            $(document).on('focusout', ':text,:password,textarea', function(event) {
                FooterRecover();
            });

            $(window).resize(function() { //checking for window resize event
                if (window.innerHeight != windowInnerHeight) {
                    FooterRecover();
                }
            });

            function FooterRecover() {
                var timeout = userAgent.match(/(\(ipod|\(iphone|\(ipad)/) ? 600 : 0;

                stopChangeFooter = setTimeout(function() {
                    $(".mask").removeClass("mask_noBottom");
                    $(".footer").css("top", "");
                }, timeout);
            }

            //ç½®é ‚KU APPä¸‹è¼‰å»£å‘
            $('.btn_ADclose').click(function() {
                $('.btn_AD').remove();
            });

            //æˆ‘/æœƒå“¡ä¸­å¿ƒ
            $(".memberDrop").click(function() {
                $(this).siblings('.memberDrop').removeClass("on").find('ul').slideUp("fast");
                $(this).toggleClass("on");
                if ($(this).hasClass("on")) {
                    $(this).find('ul').slideDown("fast");
                } else {
                    $(this).find('ul').slideUp("fast");
                }
            });
            $(".memberDrop ul").click(function() {
                event.stopPropagation();
            });

            //æ–°æ‰‹å¯¼å¼•è§†é¢‘-ç¾å¥³å½±éŸ³å¯¼è§ˆ
            $(".girlTitle > li").click(function() {
                $(this).addClass('on').siblings().removeClass('on');
                switch ($(this).attr('id')) {
                    case "btn_girlC01":
                        $(this).parent().animate({
                            scrollLeft: 0
                        }, 500);
                        $('#img_girlC01,#girlC01').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                        break;
                    case "btn_girlC02":
                        $(this).parent().animate({
                            scrollLeft: 0
                        }, 500);
                        $('#img_girlC02,#girlC02').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                        break;
                    case "btn_girlC03":
                        $('#img_girlC03,#girlC03').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                        break;
                    case "btn_girlC04":
                        $(this).parent().animate({
                            scrollLeft: 200
                        }, 500);
                        $('#img_girlC04,#girlC04').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                        break;
                    case "btn_girlC05":
                        $(this).parent().animate({
                            scrollLeft: 200
                        }, 500);
                        $('#img_girlC05,#girlC05').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                        break;
                }
            });

            if (jQuery("#GameMainMenu").val()) {
                //é¦–é 
                var myBullet = JSON.parse(jQuery("#GameMainMenu").val());

                //é¦–é -swiper
                var swiper2 = new Swiper(".swiper2", {
                    spaceBetween: 30,
                    loop: true,
                    effect: "fade",
                    speed: 600,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    }
                });

                var setKey = "GameMainMenuID";
                var currentIndex = 0;
                if (localStorage) {
                    var item = localStorage.getItem(setKey);
                    if (item !== null && !$(".container_main").hasClass("container_login")) {
                        currentIndex = item;
                    } else {
                        localStorage.removeItem(setKey);
                    }
                }

                var swiper1 = new Swiper('.swiper1', {
                    touchRatio: 0.5,
                    direction: "vertical",
                    autoHeight: true,
                    initialSlide: currentIndex,
                    pagination: {
                        el: '.GameList_L',
                        bulletClass: 'btn_GL',
                        bulletActiveClass: 'on',
                        clickable: true,
                        renderBullet: function(index, className) {
                            return `<div class="${className}" >
                                                <div class="${myBullet[index].iconClass}"></div>
                                                <h2>${myBullet[index].name}</h2>
                                            </div >`
                        }
                    },
                    on: {
                        slideChangeTransitionEnd: function() {
                            $('.swiper-slide').scrollTop(0);

                            if (localStorage) {
                                localStorage.setItem(setKey, this.activeIndex);
                            }
                        }
                    }
                });

                var startScroll, touchStart, touchCurrent;
                swiper1.slides.on('touchstart', function(e) {
                    startScroll = Math.floor(this.scrollTop);
                    touchStart = e.targetTouches[0].pageY; /*å–å¾—åˆæ¬¡è§¸æ‘¸*/
                }, true);

                swiper1.slides.on('touchmove', function(e) {
                    touchCurrent = e.targetTouches[0].pageY; /*å–å¾—ç•¶å‰è§¸æ‘¸*/
                    var touchesDiff = touchCurrent - touchStart; /*ç¬¬ä¸€æ¬¡è§¸æ‘¸èˆ‡ç•¶å‰è§¸æ‘¸ ç„å·®è·*/
                    var slide = this;
                    var onlyScrolling = /*åˆ¤æ–·æ˜¯å¦æ»¾å‹•*/
                        (slide.scrollHeight > slide.offsetHeight) && //ç•¶slideå¯æ»¾å‹•æ™‚æ‰å…è¨±
                        (
                            (touchesDiff < 0 && startScroll === 0) || //å¾ä¸é‚ç·£é–‹å§‹æ»¾å‹•åˆ°åº•éƒ¨
                            (touchesDiff > 0 && startScroll === (slide.scrollHeight - slide.offsetHeight)) || //å¾åº•éƒ¨é‚ç·£é–‹å§‹æ»¾å‹•åˆ°é ‚éƒ¨
                            (startScroll > 0 && (startScroll < (slide.scrollHeight - slide.offsetHeight) &&
                                (slide.scrollHeight < (slide.clientHeight + slide.scrollTop - 10) || touchesDiff > 0))) //å¾ä¸­é–“é–‹å§‹
                        );
                    if (onlyScrolling) {
                        e.stopPropagation(); /*é—œé–‰silde touchmoveäº‹ä»¶*/
                    }
                }, true);

                const swiperCI = new Swiper('.swiperCI', {
                    spaceBetween: 5,
                    direction: "vertical",
                    autoHeight: true,
                    loop: true,
                    slidesPerView: 2,
                    speed: 2000,
                    autoplay: {
                        delay: 2000,
                    },
                    allowTouchMove: false,
                });
            }

            //2022FIFAWorldCup

            /*é¦–é _é¸å–®*/
            $('.mainMenu').click(function() {
                $(this).toggleClass('active');
            })

            /*å¾—çåå–®_å–æ¶ˆé¸å–*/
            $(document).bind('touchstart', function(e) {
                /*é¦–é _é¸å–®& å¾—çåå–®*/
                if ($(e.target).closest(`.mainMenu,.winner li,.giftList li`).length <= 0 && $('.mainMenu,.winner li,.giftList li').hasClass('active')) {
                    $('.mainMenu,.winner li,.giftList li').removeClass('active')
                }
            })

            /*å½ˆçª—æŒ‰éˆ•å›é¥‹*/
            $('.popMsgSend,.memberSend,.selectBotton,.gameLink_btn').on('touchstart', function() {
                $(this).addClass('active')
            })

            $('.popMsgSend,.memberSend,.selectBotton,.gameLink_btn').on('touchend', function() {
                $(this).removeClass('active')
            })

            //æœ€æ–°å„ªæƒ -ç›´æ’­
            $("#callBV").click(function() {
                $('#bonusVideo').fadeIn().find('video')[0].play();
                $(".footer_DW_open").removeClass("on");
                var bodyScroll = $(window).scrollTop();
                $('.container_main').css({
                    'position': 'fixed',
                    'top': '-' + bodyScroll + 'px'
                });
            });

            $(".btn_closeBV").click(function() {
                $(this).closest('.bonusVideo').fadeOut().find('video').get(0).pause();
                var bodyScroll = $(window).scrollTop();
                $('body').removeAttr('style');
                $(window).scrollTop(bodyScroll);
            });

            $(".btn_weekVideo li").click(function() {
                $(this).addClass('on').siblings().removeClass('on');
                switch ($(this).attr('id')) {
                    case "callWeek01":
                        $('.weekIn').find('video').get(0).pause();
                        $('#week01').show().siblings('.weekIn').hide();
                        $('#week01').find('video')[0].play();
                        break;
                    case "callWeek02":
                        $('.weekIn').find('video').get(0).pause();
                        $('#week02').show().siblings('.weekIn').hide();
                        $('#week02').find('video')[0].play();
                        break;
                }
            });
        });
        //å•Ÿå‹•æ‰‹æ©Ÿactiveç‹€æ…‹
        document.addEventListener("touchstart", function() {}, true);;
        $(document).ready(function() {
            //å€‹äººè¨æ¯
            var checkAllStau = false;

            $(".pMail_listTitle").off();
            $("div.pMail").on("click", ".pMail_listTitle,.icon_arrow", function() {
                $(".pMail_listT").not($(this)).removeClass("on");
                $(".pMail_listIn").not($(this).siblings()).slideUp("fast");
                if ($(this).parent(".pMail_listT").parent(".pMail_list").children(".pMail_listIn").css("display") == "none") {
                    $(this).parent(".pMail_listT").parent(".pMail_list").children(".pMail_listIn").slideDown("fast");
                    $(this).parent(".pMail_listT").addClass("on");
                } else {
                    $(this).parent(".pMail_listT").parent(".pMail_list").children(".pMail_listIn").slideUp("fast");
                    $(this).parent(".pMail_listT").removeClass("on");
                }
            });

            $("div.pMail").on("click", ".pMailCheckbox", function() {
                if (!$(this).is(".on")) {
                    $(this).addClass("on");
                } else {
                    $(this).removeClass("on");
                }
            });

            $("#BtnSelectAll").on("click", function() {
                $(".pMailCheckbox").addClass("on");
            });

            $("#BtnSelectAllCancel").on("click", function() {
                $(".pMailCheckbox").removeClass("on");
            });

            //ç§»é™¤JSå°äº¤æ˜“ç´€éŒ„å°tRecCheckboxç„æ§åˆ¶ï¼Œé¿å…èˆ‡ng-classäº’ç›¸å½±éŸ¿Start
            //äº¤æ˜“è¨˜éŒ„
            //$("div.tradeRec").on("click", ".tRecCheckbox", function () {
            //    if (!$(this).is(".on")) {
            //        $(this).addClass("on");
            //    } else {
            //        $(this).removeClass("on");
            //    }
            //});

            //$("#BtnSelectAll").on("click", function () {
            //    $(".tRecCheckbox").addClass("on");
            //});

            //$("#BtnSelectAllCancel").on("click", function () {
            //    $(".tRecCheckbox").removeClass("on");
            //});
            //ç§»é™¤JSå°äº¤æ˜“ç´€éŒ„å°tRecCheckboxç„æ§åˆ¶ï¼Œé¿å…èˆ‡ng-classäº’ç›¸å½±éŸ¿End
            // Mobile å­˜æå°ˆå€ç„é»é¸æ•ˆæœæ§åˆ¶
            $(document).on('touchstart', function(event) {
                event.stopPropagation();

                var isFooterDWOpen = $(".footer_DW_open").length > 0 && $(".footer_DW_open").hasClass("on");
                var clickId = $(event.target).attr("id");
                var isFooterIcon = ($(event.target).hasClass("footer_list") ||
                        clickId == 'MemberDeposit' ||
                        clickId == 'MemberWithdrawal' ||
                        clickId == 'PlatformTransfer' ||
                        clickId == 'PlatformTransferSpan' ||
                        clickId == 'MemberDepositSpan' ||
                        clickId == 'MemberWithdrawalSpan' ||
                        clickId == 'MemberDepositImage' ||
                        clickId == 'MemberWithdrawalImage' ||
                        clickId == 'DepositCenterH5') &&
                    (!$(event.target).hasClass("btn_footer_DW off"));
                if ($('#FooterTouchstartControll').length > 0 && !isFooterIcon && isFooterDWOpen) {
                    $(".footer_DW_open").removeClass("on");
                    $("body").css("-webkit-overflow-scrolling", "touch").css("overflow", "auto");

                    angular.element("#FooterTouchstartControll").scope().$apply(() => {
                        angular.element("#FooterTouchstartControll").controller().RefreshFooterActivity();
                    });
                }
            });
            //T24717 ç¬¬6é» é»æ“ç™»å…¥é å¤–å€åŸŸé€²è¡Œæ»‘å‹•ï¼Œè«‹èª¿æ•´ç‚ºç™»å…¥é ä¸‹å±¤ç„¡æ³•æ»‘å‹•
            $("#callLogin").click(function() {
                var display = $(".mask,.mask_join,.mask_all").css("display");

                if (display === "block") {
                    $('.container_main').css({
                        'position': 'fixed',
                        'top': '0px'
                    });
                } else {
                    $('.container_main').removeAttr('style');
                }
            });
            // ç•¶é é¢æ˜¯å¥½ç¦®äº”é¸ä¸€æ™‚ï¼Œæ§åˆ¶ä¸é¢ç„menu é—œé–‰
            
            var closeMenu = function(event) {
                event.stopPropagation();

                if (event.originalEvent.data != "closemenu") {
                    return;
                }

                $('.inforMDropOUT').slideUp('fast');
                $('div.icon_inforMoney').removeClass('on');
            };

            $(window).on("message", closeMenu);

            // T45861 ç§»é™¤ä½¿ç¶²é ä¸å¯æ»¾å‹•
            $(".popup_close").click(function() {
                $('html,body').removeClass('ovfHiden');
            });
        });;
        var oriApp = (function() {
            return {
                changeTitle: function(title) {
                    if (typeof JBS != "undefined") { //å®‰å“
                        JBS.ChangeTitle(title);
                    } else if (window.webkit) { //ios
                        window.webkit.messageHandlers.ChangeTitle.postMessage(title);
                    }
                },
                shareRefLink: function(url) { //åˆ†äº«APPé¢æ¿
                    if (typeof JBS != "undefined") { //å®‰å“
                        JBS.shareRefLink(url);
                    } else if (typeof window['webkit'] != "undefined" && window['webkit']) { //ios
                        window['webkit'].messageHandlers.shareRefLink.postMessage(url);
                    }
                },
                backUrl: function(url) { //å›ä¸ä¸€é 
                    if (typeof JBS != "undefined") { //å®‰å“
                        JBS.backUrl(url);
                    } else if (typeof window['webkit'] != "undefined" && window['webkit']) { //ios
                        window['webkit'].messageHandlers.backUrl.postMessage(url);
                    }
                },
                goBackUrl: function() { //å‰å¾€ä¸ä¸€é 
                    try {
                        if (typeof JBS != "undefined") { //å®‰å“
                            JBS.goBackUrl();
                        } else if (typeof window['webkit'] != "undefined" && window['webkit']) { //ios
                            window['webkit'].messageHandlers.goBackUrl.postMessage("goBackUrl");
                        }
                    } catch {}
                },
                CheckGame: function(path) { //é€²å…¥éæˆ²
                    try {
                        if (typeof JBS != "undefined") { //å®‰å“
                            JBS.CheckGame(path);
                        } else if (typeof window['webkit'] != "undefined" && window['webkit']) { //ios
                            window['webkit'].messageHandlers.CheckGame.postMessage(path);
                        }
                    } catch {}
                }
            };
        })();;
        var embeddedApp = (function() {
            var _SaveImageCallback;

            return {
                openCslive: function(url) {
                    if (typeof JBS != "undefined") { //å®‰å“
                        JBS.openCslive(url);
                    } else if (window.webkit) { //ios
                        window.webkit.messageHandlers.openCslive.postMessage(url);
                    } else {
                        window.open("/OnlineCS", "_blank");
                    }
                },
                initSaveImagesCallback: function(callback) {
                    //APPä¸‹è¼‰å®Œåœ–ç‰‡ä¸»å‹•å›CAllä»‹é¢
                    _SaveImageCallback = callback;
                },
                saveImages: function(url, callback) {
                    if (window.webkit) {
                        window.webkit.messageHandlers.saveImages.postMessage(url);
                    }
                },
                saveImagesCallback: function(result) {
                    if (typeof _SaveImageCallback == 'function') {
                        if (result) {
                            _SaveImageCallback(true);
                        } else {
                            _SaveImageCallback(false);
                        }
                    }
                }
            };
        })();;
    </script>
   <div id="inforMDropOUT" ng-controller="HeaderGamePointListCtrl as ctrl" class="inforMDropOUT ng-scope left" >
<div class="inforMDrop" >
<ul class="inforMDropT">
<!-- ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">KU Thể Thao</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">KU Casino</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">JZ Thể Thao</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">KU Xổ Số</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">3D</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">AG</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">WM</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">GPI</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">DG</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">SA</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">AES</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">EVO</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">DB Casino</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">CMD</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">SABA</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">AI</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">BBIN</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">PANDA</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">IM</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">DB E-sports</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">BNG</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">CQ9</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">PLS</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">RK5</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">DS</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">V8</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">KS</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">PG</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">KA</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">FTG</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">FC</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">COOL-IN</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBalanceList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" ng-class="{true: 't_pink', false: ''}[row.Visible == '0']" class="ng-binding">Ví bạn bè</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" class="ng-scope">
<span ng-bind="row.Balance | number" class="ng-binding">0</span>
<!-- ngIf: row.Balance >= 1 -->
</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Balance == 0 && row.Visible == '0' -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID -->
</ul>
<ul class="inforMDropB">
<li>
<div class="t_yellow">Tổng số điểm</div>
<div class="t_yellow ng-binding" ng-bind="ctrl.model.LoginAreaPointsControlCenter.TotalBalance | number">0</div>
</li>
<!-- ngRepeat: row in ctrl.model.GameMenusBottomList track by row.GameID --><li ng-repeat="row in ctrl.model.GameMenusBottomList track by row.GameID" class="ng-scope">
<div ng-bind="row.ServiceName" class="t_purple ng-binding">Quà tặng miễn phí</div>
<!-- ngIf: row.Balance !== null && row.Visible == '1' --><div ng-if="row.Balance !== null &amp;&amp; row.Visible == '1'" ng-bind="row.Balance | number" style="color:#cb83ff" class="ng-binding ng-scope">0</div><!-- end ngIf: row.Balance !== null && row.Visible == '1' -->
<!-- ngIf: row.Balance === null && row.Visible !== '0' -->
<!-- ngIf: row.Visible == '0' && row.Balance !== null -->
</li><!-- end ngRepeat: row in ctrl.model.GameMenusBottomList track by row.GameID -->
<li class="btn_backAll">
<!-- ngIf: ctrl.CheckTopMenuPermission('CanPlatfromTransfer') && ctrl.NoneAvailableGame == false --><span ng-if="ctrl.CheckTopMenuPermission('CanPlatfromTransfer') &amp;&amp; ctrl.NoneAvailableGame == false" class="ng-scope">
<a ng-click="ctrl.TransferGamesPointToMain()" id="transferGamesPoint" style="border:none;font-size:1em">
Chuyển hết về tài khoản chính
</a>
</span><!-- end ngIf: ctrl.CheckTopMenuPermission('CanPlatfromTransfer') && ctrl.NoneAvailableGame == false -->
<!-- ngIf: !ctrl.CheckTopMenuPermission('CanPlatfromTransfer') || ctrl.NoneAvailableGame == true -->
</li>
</ul>
</div>
</div>
</div>
<div id="authModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5);">
    <div style="background:#fff; margin:10% auto; padding:0px; width:400px; position:relative; ">
      <button style="font-size: 20px; top:0px; right: 0px;" onclick="$('#authModal').hide()">X</button>

      <div id="loginForm" style="border-top-left-radius: 10px !important; ">
        <div>
        <h3 style="font-size: 0.95em;line-height: 48px; background-color: #eee; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">Đăng nhập hội viên</h3>
        </div>
        
        <form id="login-form" style="padding: 10px;" action="{{ route('mobile.login') }}" method="POST">
        @csrf
        <div class="input-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="圖層_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
            <style type="text/css">.st0{fill:#45B5DA;}
            </style>
            <g>
	        <g>
		    <path class="st0" d="M27.3,29.6c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c3.3-0.1,6-1.2,8-3.5c4.4-4.9,3.7-13.4,3.6-14.2    C39,5.9,36.1,3,33.7,1.6C32,0.6,29.9,0,27.6,0h-0.1c0,0,0,0,0,0h-0.1c-1.3,0-3.7,0.2-6.1,1.6c-2.4,1.4-5.3,4.3-5.6,10.4    c-0.1,0.8-0.8,9.3,3.6,14.2C21.3,28.4,24,29.6,27.3,29.6z M18.7,12.2C18.7,12.2,18.8,12.2,18.7,12.2c0.4-8.3,6.2-9.1,8.7-9.1h0    c0,0,0.1,0,0.1,0c3.1,0.1,8.3,1.3,8.7,9c0,0,0,0.1,0,0.1c0,0.1,0.8,7.8-2.8,11.9c-1.4,1.6-3.3,2.4-5.9,2.4c0,0,0,0-0.1,0l0,0    c0,0,0,0-0.1,0c-2.5,0-4.4-0.8-5.9-2.4C18,20.1,18.7,12.3,18.7,12.2z"/>
		    <path class="st0" d="M50.9,43.7C50.9,43.7,50.9,43.7,50.9,43.7c0-0.1,0-0.2,0-0.3c-0.1-2.3-0.2-7.5-5.2-9.2c0,0-0.1,0-0.1,0    c-5.1-1.3-9.4-4.3-9.5-4.3c-0.7-0.5-1.7-0.3-2.1,0.4c-0.5,0.7-0.3,1.7,0.4,2.1c0.2,0.1,4.7,3.3,10.4,4.7c2.7,0.9,2.9,3.8,3,6.4    c0,0.1,0,0.2,0,0.3c0,1-0.1,2.6-0.2,3.5c-1.8,1-9.1,4.7-20.1,4.7c-11,0-18.2-3.6-20.1-4.7c-0.2-0.9-0.3-2.5-0.2-3.5    c0-0.1,0-0.2,0-0.3c0.1-2.6,0.4-5.4,3-6.4c5.7-1.5,10.2-4.6,10.4-4.7c0.7-0.5,0.9-1.4,0.4-2.1c-0.5-0.7-1.4-0.9-2.1-0.4    c0,0-4.3,3-9.5,4.3c0,0-0.1,0-0.1,0c-4.9,1.7-5.1,7-5.2,9.2c0,0.1,0,0.2,0,0.3c0,0,0,0,0,0c0,0.6,0,3.6,0.6,5.2    c0.1,0.3,0.3,0.5,0.6,0.7c0.3,0.2,8.5,5.4,22.2,5.4s21.9-5.2,22.2-5.4c0.3-0.2,0.5-0.4,0.6-0.7C50.9,47.3,50.9,44.3,50.9,43.7z"/>
	        </g>
            </g>
            </svg>
            <input type="text" name="name" placeholder="Tài khoản">
        </div>
          <br>
          <div class="input-icon">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="圖層_1" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#45B5DA;}
</style>
<g>
	<path class="st0" d="M23.5,44c0,2.2,1.8,4,4,4c2.2,0,4-1.8,4-4v-4.7c1.1-1,1.7-2.5,1.7-4.1c0-3.1-2.6-5.7-5.7-5.7   c-3.1,0-5.7,2.6-5.7,5.7c0,1.5,0.6,2.9,1.7,4.1V44z M29.2,36.9c-0.6,0.6-0.9,1.3-0.9,2.1v5c0,0.5-0.4,0.8-0.8,0.8   c-0.5,0-0.8-0.4-0.8-0.8v-5c0-0.8-0.3-1.5-0.9-2.1c-0.5-0.4-0.8-1.1-0.8-1.8c0-1.4,1.1-2.5,2.5-2.5c1.3,0,2.5,1.2,2.5,2.5   C30,35.9,29.7,36.5,29.2,36.9L29.2,36.9z"/>
	<path class="st0" d="M43.4,22.3h-3.7V12.1C39.6,5.4,34.2,0,27.5,0S15.4,5.4,15.4,12.1v10.2h-3.7c-2.3,0-4.2,1.9-4.2,4.2v24.3   c0,2.3,1.9,4.2,4.2,4.2h31.7c2.3,0,4.2-1.9,4.2-4.2V26.5C47.6,24.2,45.7,22.3,43.4,22.3z M27.5,3.1c5,0,9.1,4.1,9.1,9.1v10.2H18.4   V12.1C18.4,7.1,22.5,3.1,27.5,3.1z M10.6,26.5c0-0.6,0.5-1,1-1h31.7c0.6,0,1,0.5,1,1v24.3c0,0.6-0.5,1-1,1H11.6c-0.6,0-1-0.5-1-1   V26.5z"/>
</g>
</svg>
          <input type="password" name="password" placeholder="Mật khẩu">
          </div>
          
          <span class="toggle-password" onclick="togglePassword()" id="toggleIcon">
          </span>
          <p onclick="toggleForm('forgot')" style="cursor:pointer; text-align: right; color: #337caa; font-size: 0.9em;">Quên mật khẩu?</p>
           <!-- Google reCAPTCHA -->
           <div id="captcha"></div>

        <input type="hidden" name="lot_number">
        <input type="hidden" name="captcha_output">
        <input type="hidden" name="pass_token">
        <input type="hidden" name="gen_time">
         
          <br>
          
          <button id="login-button" type="submit" disabled style="background-color: #aaa;">Đăng nhập</button>
        </form>
        <!-- <p onclick="toggleForm('register')" style="cursor:pointer;">Chưa có tài khoản? Đăng ký</p> -->
      </div>

      <div id="registerForm" style="display:none; padding: 20px;">
          <h3 style="color: #5aaaf3; text-align: center; margin-bottom: 20px;">ĐĂNG KÝ HỘI VIÊN</h3>
        <form id="register-form" style="display: flex; flex-direction: column; gap: 16px;">

    <div style="display: flex; flex-direction: column;">
      <label for="" style="margin-bottom: 5px; font-weight: bold;">Tài khoản</label>
    <input type="text" name="name" placeholder="4 ~ 10 ký tự chữ và số" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
    </div>

    <div style="display: flex; flex-direction: column;">
      <label for="" style="margin-bottom: 5px; font-weight: bold;">Biệt danh</label>
      <input type="text" name="nickname" placeholder="Nhập tối đa 8 ký tự" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
    </div>
    <div style="display: flex; flex-direction: column;">
      <label for="" style="margin-bottom: 5px; font-weight: bold;">Số điện thoại</label>
      <input type="string" name="phone" pattern="^0\d{8,9}$" placeholder="SĐT" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;" required>
    </div> 
    <div style="display: flex; flex-direction: column;">
      <label for="" style="margin-bottom: 5px; font-weight: bold;">Mật khẩu</label>
      <input type="password" name="password" placeholder="4 ~ 10 ký tự chữ và số" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
    </div>

    <!-- Checkboxes -->
    <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px; font-size: 14px; color: #333;">
      <label style="display: flex; align-items: flex-start; gap: 8px;">
        <input type="checkbox" name="promotion_sms" value="1" style="height: 10px; background-color: blue;" checked>
        <span>Nhận thông tin khuyến mãi qua tin nhắn điện thoại</span>
      </label>

      <label style="display: flex; align-items: flex-start; gap: 8px;">
        <input type="checkbox" name="agree_terms" id="agree_terms" required style="height: 10px;background-color: blue " checked>
        <span>
          Tôi đã 18 tuổi, đồng thời đã đọc và đồng ý quy tắc cá cược 
          <a href="https://ku8338.net/Home/GameTerms" target="_blank" style="color: #5aaaf3; text-decoration: underline;">Điều khoản</a>
        </span>
      </label>
    </div>

    <button type="submit" style="padding: 10px; background-color: #5aaaf3; border: none; color: white; border-radius: 6px; cursor: pointer;">
      Đăng ký
    </button>
  </form>

  <p onclick="toggleForm('login')" style="cursor:pointer; text-align: center; margin-top: 15px; color: #5aaaf3;">
    Đã có tài khoản? Đăng nhập
  </p>
</div>
      <div id="forgotForm">
        <h3>Quên mật khẩu</h3>
        <hr>
        <div>
          <!-- <img src="{{asset('media/icon_indexImg.png')}}" alt=""> -->
          <span>Hãy nhập dữ liệu và nhận mã xác nhận！</span>
        </div>
        <form id="forgotPassword">
          <select name="PWType" id="PWType">
            <option label="Vui lòng chọn loại mật khẩu" value="0" selected="selected">Vui lòng chọn loại mật khẩu</option>
            <option label="Mật khẩu đăng nhập" value="1">Mật khẩu đăng nhập</option>
            <option label="Mật khẩu bảo mật" value="2">Mật khẩu bảo mật</option>
            <option label="Mật khẩu đăng nhập và bảo mật" value="3">Mật khẩu đăng nhập và bảo mật</option>
          </select>
          <div>
            <input type="text" placeholder="Tài khoản">
          </div>
          <div class="input-code-wrapper">
            <input type="text" placeholder="SĐT đã đăng ký">
            <button type="button" class="send-code-btn">Gửi mã</button>
          </div>
          <div>
            <input type="text" placeholder="Nhập 4 con số">
          </div>
        </form>
      </div>
      <div id="message" style="margin-top:10px; color:green;"></div>
    </div>
  </div>
    <div id="popup" class="popup">
    <div class="popup-content">
      <h2 class="tn"> Tin nhắn</h2>
      <p class="tn"></p>
      <p>Chuyển hết về tài khoản chính thành công</p>
      <button id="closePopup" class="close-popup">Xác nhận</button>
    </div>
  </div>
  @if(Auth::check())
    <input style="display: none;" class="check_link" type="text" value="{{route('link301')}}">
@else
    <input style="display: none;" class="check_link" type="text" value="abc">
@endif
@if(Auth::check())
    <input style="display: none;" class="check_link_topup" type="text" value="{{route('linkTopup')}}">
@else
    <input style="display: none;" class="check_link_topup" type="text" value="abc">
@endif

@if(Auth::check() && session('show_phone_prompt'))
    <script>
    $(document).ready(function () {
        showPhonePrompt(); // Gọi hàm hiện modal
    });

    function showPhonePrompt() {
        const html = `
            <div id="phonePromptModal" style="position: fixed; top: 30%; left: 35%; background: #fff; border: 1px solid #ccc; padding: 20px; z-index: 9999;">
              <h4>Vui lòng xác nhận lại số điện thoại</h4>
              <input type="text" id="user-phone" placeholder="Nhập số điện thoại (tùy chọn)">
              <br><br>
              <button onclick="submitPhone()">Lưu</button>
              <button onclick="dismissPhonePrompt()">Bỏ qua</button>
              <p id="phone-message"></p>
            </div>`;
        $('body').append(html);
    }

    function submitPhone() {
        const phone = $('#user-phone').val().trim();

        $.post('/update-phone', {
            phone: phone,
            _token: '{{ csrf_token() }}'
        })
        .done(function () {
            $('#phone-message').css('color', 'green').text('Cập nhật thành công!');
            setTimeout(() => location.reload(), 1000);
        })
        .fail(function () {
            $('#phone-message').css('color', 'red').text('Cập nhật thất bại');
        });
    }

    function dismissPhonePrompt() {
        $.post('/dismiss-phone-prompt', {
            _token: '{{ csrf_token() }}'
        }).always(() => location.reload());
    }
</script>
@endif

</body>
<chatgpt-sidebar data-gpts-theme="light"></chatgpt-sidebar>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function toggleForm(type) {
        if (type === 'login') {
            $('#loginForm').show();
            $('#registerForm').hide();
            $('#forgotForm').hide();

        } else if (type === 'register') {
            $('#registerForm').show();
            $('#loginForm').hide();
            $('#forgotForm').hide();
        } else if (type == 'forgot') {
            $('#registerForm').hide();
            $('#loginForm').hide();
            $('#forgotForm').show();
        }
    }


    // MainMenu
    $('.GameList_R').click(function() {
        if ($('.check_link').val() === 'abc') {
            toggleForm('login');
            $('#authModal').show();
        } else {
            window.location.href = $('.check_link').val(); // Đổi thành URL bạn muốn chuyển tới
        }

    });
    $('.btn_footer_tradeRec , .btn_footer_menu').click(function(e) {
        if ($('.check_link').val() === 'abc') {
            e.preventDefault();
            toggleForm('login');
            $('#authModal').show();
        } 

    });



    $('.topup').click(function() {
      if($('.check_link_topup').val() === 'abc'){
        toggleForm('login');
        $('#authModal').show();
      }else{
        window.location.href = $('.check_link_topup').val(); // Đổi thành URL bạn muốn chuyển tới
      }
    
  });

    $('#open-login').click(function() {
        toggleForm('login');
        $('#authModal').show();
    });

    $('#open-register').click(function() {
        toggleForm('register');
        $('#authModal').show();
    });

    // Đăng nhập

    let phoneStepShown = false;

// Bật reCAPTCHA khi checkbox được tick
$('#show-captcha').change(function () {
  if ($(this).is(':checked')) {
    $('#captcha').show(); 
  } else {
    $('#captcha').hide();
    // Không cần reset như grecaptcha.reset(), vì GeeTest không hỗ trợ kiểu này
  }
});

$('#login-form').submit(function (e) {
  const name = $('#login-form input[name="name"]').val().trim();
  const password = $('#login-form input[name="password"]').val().trim();

  // Lấy dữ liệu từ các input ẩn mà GeeTest đã đổ vào
  const lotNumber = $('input[name="lot_number"]').val();
  const captchaOutput = $('input[name="captcha_output"]').val();
  const passToken = $('input[name="pass_token"]').val();
  const genTime = $('input[name="gen_time"]').val();

  let errors = [];

  if (!name) errors.push('Vui lòng nhập tài khoản.');
  if (!password) errors.push('Vui lòng nhập mật khẩu.');
  if (!lotNumber || !captchaOutput || !passToken || !genTime) {
    errors.push('Vui lòng hoàn thành CAPTCHA.');
  }

  if (errors.length > 0) {
    e.preventDefault(); // chặn submit
    $('#message').css('color', 'red').html(errors.join('<br>'));
    return;
  }

  // Nếu mọi thứ ok, để form submit bình thường
});

    $('#register-form').submit(function(e) {
        e.preventDefault();

        const formData = $(this).serialize();

        $.post('/register', formData)
            .done(function(data) {
                $('#message').css('color', 'green').text(data.message);
                setTimeout(() => location.reload(), 1000);
            })
            .fail(function(err) {
                $('#message').css('color', 'red').text(err.responseJSON?.message || 'Đăng ký thất bại');
            });
    });
</script>
<script>
        const btnBackAll = document.querySelector('.btn_backAll');
    const popup = document.getElementById('popup');
    const closePopup = document.getElementById('closePopup');
    $('.close').click(function() {
        $('.icon_inforMoney').removeClass('close');
        $('.icon_inforMoney').addClass('highlight');
        $('#inforMDropOUT, .inforMDrop').addClass('activate');
    });
    $('.inforMDropOUT').click(function(e) {    
        if ($(e.target).is('.inforMDropT') || $(e.target).closest('.inforMDropT').length) {
      return; // không ẩn
    }  
    if ($(e.target).is('.btn_backAll') || $(e.target).closest('.btn_backAll').length) {
        $('#inforMDropOUT, .inforMDrop').removeClass('activate');
        popup.style.display = 'flex';
      }
    if ($(e.target).is('.inforMDropB') || $(e.target).closest('.inforMDropB').length) {
        
      return;
    
    }
   
   
        // $('.icon_inforMoney').removeClass('highlight');
        $('#inforMDropOUT, .inforMDrop').removeClass('activate');
    });

    



    // Hiển thị popup khi nhấn vào returnMainP
    

    // Ẩn popup khi nhấn nút xác nhận
    closePopup.addEventListener('click', function() {
      popup.style.display = 'none';
      $('.memberPMenuT').removeAttr('style');
      $('.memberPMenuB').removeAttr('style');
      
    });
</script>

<script>
    $(document).ready(function () {
        $('.btn_footer_DW').click(function() {
        $('.footer_DW_open').toggleClass('on');
        if ($('.parent a').length !== 3) {
        $('.parent a:first').remove();
    }    
    });
    // $('.GameList_R').click(function() {
    //     window.location.href = $('.end_link').val();
    // });
    // GameList_R 

});
     
</script>

<script>
  function checkLoginFormStatus() {
    const name = $('#login-form input[name="name"]').val().trim();
    const password = $('#login-form input[name="password"]').val().trim();
    const lot_number = $('input[name="lot_number"]').val();
    const captcha_output = $('input[name="captcha_output"]').val();
    const pass_token = $('input[name="pass_token"]').val();
    const gen_time = $('input[name="gen_time"]').val();

    const isValid = name && password && lot_number && captcha_output && pass_token && gen_time;

    if (isValid) {
      $('#login-button').prop('disabled', false).css('background-color', '#32abff');
    } else {
      $('#login-button').prop('disabled', true).css('background-color', '#aaa');
    }
  }

  // Kiểm tra lại mỗi khi người dùng nhập
  $('#login-form input[name="name"], #login-form input[name="password"]').on('input', checkLoginFormStatus);

  // Gọi khi reCAPTCHA hoàn thành
  function onCaptchaCompleted() {
    checkLoginFormStatus();
  }

  // Gọi lại khi reset captcha (ví dụ bỏ tick)
  function onCaptchaExpired() {
    checkLoginFormStatus();
  }
</script>

<script src="https://static.geetest.com/v4/gt4.js"></script>
<script>
    fetch('/captcha/init')
        .then(res => res.json())
        .then(data => {
            initGeetest4({
                captchaId: data.captcha_id,
                product: 'float',
                challenge: data.challenge,
            }, function (captcha) {
                captcha.appendTo("#captcha");
                captcha.onReady(() => {
                    console.log("GeeTest ready");
                });
                captcha.onSuccess(() => {
                    const result = captcha.getValidate();
                    document.querySelector('input[name=lot_number]').value = result.lot_number;
                    document.querySelector('input[name=captcha_output]').value = result.captcha_output;
                    document.querySelector('input[name=pass_token]').value = result.pass_token;
                    document.querySelector('input[name=gen_time]').value = result.gen_time;
                    checkLoginFormStatus();
                });
            });
        });
</script>
</html>