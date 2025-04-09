<html ng-app="OBSMobileApp" class="ng-scope"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta http-equiv="cache-control" content="no-siteapp">
<meta name="format-detection" content="telephone=no">
<meta name="browsermode" content="application">
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
<link rel="icon" type="image/png" sizes="192x192" href="/Areas/Mobile/Content/Images/TouchIcon20220413/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/Areas/Mobile/Content/Images/TouchIcon20220413/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/Areas/Mobile/Content/Images/TouchIcon20220413/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/Areas/Mobile/Content/Images/TouchIcon20220413/favicon-16x16.png">
<title>KU Web</title>
<style>
[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
display: none !important;
}
html {
-webkit-text-size-adjust: none; /* Never autoresize text */
}
</style>
<link href="{{ asset('css/main_mobile.css') }}" rel="stylesheet">
<link href="{{ asset('css/mobile_CustomerServ.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style type="text/css">.fancybox-margin{margin-right:0px;}</style></head>
<body ontouchstart="" block-ui="main" class="ng-scope block-ui block-ui-anim-fade" aria-busy="false">
<a href="https://www.mykubet.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.kubetkubet.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.kubetnav.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.te7.com.tw/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.ex589.com/home/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.casino5168.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.ex5888.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<ajax-anti-forgery-token token="mth_51WzON9tI8W7Yugb0wJiR2EOYgWqV05ZdlMuWr4bNmsAssqUvrOlmicJ783hkCf7I_hdjDQs25N9gslSW0V68PM1:vb9Z78CG1eNiS-5CxZNOKUfvIdP0iD5R8DCmw03jY1s6ouNopc8smKywT2zSmW5AfK7Tak4QRAMV5yPknHcHTOQzkHeq2ZMylCcOYW9w-mDqJvstztaX2gWfjrfbDPV546TA9A2"></ajax-anti-forgery-token>
<!-- start Header -->
<div ng-controller="HeaderCtrl as ctrl" class="bg_header ng-scope">
<authorize-user-status></authorize-user-status>
<input type="hidden" id="hfLID" value="836699796" autocomplete="off">
<input type="hidden" id="hfAID" value="3698c21a9ce325130b7f75f110926dd0" autocomplete="off">
<a class="btn_back" ng-click="ctrl.HeaderGoBack()"></a>
<h1 class="bg_header_name ">HỖ TRỢ</h1>
<div style="display:none">
<div id="signout" class="btn_inforOut" ng-click="ctrl.DoSignOut()" data-signout="/Mobile/Home/login"></div>
</div>
</div>
<div id="inforMDropOUT" ng-controller="HeaderGamePointListCtrl as ctrl" class="inforMDropOUT ng-scope">
<div class="inforMDrop">
<ul class="inforMDropT">
<!-- ngRepeat: row in ctrl.model.GameMenusBalanceList track by row.GameID -->
</ul>
<ul class="inforMDropB">
<li>
<div class="t_yellow">Tổng số điểm</div>
<div class="t_yellow ng-binding" ng-bind="ctrl.model.LoginAreaPointsControlCenter.TotalBalance | number">0</div>
</li>
<!-- ngRepeat: row in ctrl.model.GameMenusBottomList track by row.GameID -->
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
<!-- end Header -->
<div id="container_main" class="container_main">
<ajax-anti-forgery-token token="_WqJhHprU5lH60A-gNKuVLJ41ytZCpCIf88MCQylKmmvL1nP_5EGOCNHzAE34MJ01ACm2b1Frw0A9715JF8HwJudx0c1:aS2x4gTWVqToLt4ZomJEPMJQuNJi72tOPeFQb1EJHIIrh6uDL2IBcCCeGVyFhdVSV6BXPpXow6mZ57CQaEc2GTQSmVMvbvJX9CTcDn4wV1l5zJQIN6uZNjnNMjXzmhE3z3Hovw2"></ajax-anti-forgery-token>
<!--頁面內容-->
<div class="service ng-scope" ng-controller="ServiceCenterCtrl as ctrl">
<div>
<a class="service_Link" ng-click="ctrl.GoCSLiveChat(false)">
Liên hệ ngay
</a>
<ul class="service_list" ng-click="ctrl.GoCSLiveChat(false)">
<li class="service_InL">
<div class="Serv_img"><img src="{{ asset('media/mobile/icon_Serv_online.svg') }}"></div>
</li>
<li class="service_InC">
<h3>Hỗ trợ</h3> <!-- 在線客服 -->
</li>
<li class="service_InR">
<div class="btn_ServID">Liên hệ</div>
</li>
</ul>
<!-- ngIf: true --><ul class="service_list ng-scope" ng-if="true" ng-click="ctrl.GoServiceCallBack($event)">
<li class="service_InL">
<div class="Serv_img"><img src=" {{ asset('media/mobile/icon_Serv_callBack.svg')}}"></div>
</li>
<li class="service_InC">
<h3>Dịch vụ gọi lại</h3>
</li>
<li class="service_InR">
<div class="btn_ServID">Đăng ký</div>
<div class="serMaintain_in">
<div class="serMaintain_text ng-binding" ng-bind="ctrl.model.CallbackServiceApplyMessage"></div>
</div>
</li>
</ul><!-- end ngIf: true -->
<!-- ngIf: false -->
<ul class="service_list" ng-click="ctrl.ClearTimeout($event)" onclick="window.open('https://t.me/kuthongbao393', '_blank')">
<li class="service_InL">
<div class="Serv_img"><img src="{{ asset('media/mobile/icon_Serv_telegram.svg')}}"></div>
</li>
<li class="service_InC">
<h3>Telegram</h3>
</li>
<li class="service_InR">
<div class="btn_ServID">Liên hệ</div>
</li>
</ul>
<ul class="service_list" ng-click="ctrl.ClearTimeout($event)" copy-to-clipboard="" copy-to-clipboard-func="ctrl.model.Viber">
<li class="service_InL">
<div class="Serv_img"><img src="{{ asset('media/mobile/icon_Serv_viber.svg')}}"></div>
</li>
<li class="service_InC">
<h3>+639672091151</h3>
</li>
<li class="service_InR">
<div class="btn_ServID">Sao chép</div>
</li>
</ul>
<!--電話客服-->
<ul class="service_list" ng-click="ctrl.ClearTimeout($event)" onclick="location.href='tel:+639672091151'">
<li class="service_InL">
<div class="Serv_img"><img src="{{ asset('media/mobile/icon_Serv_phone.svg')}} "></div>
</li>
<li class="service_InC">
<h3>
+639672091151
</h3>
</li>
<li class="service_InR">
<div class="btn_ServID">Gọi ngay</div>
</li>
</ul>
<!--客服郵件-->
<ul class="service_list" ng-click="ctrl.ClearTimeout($event)" copy-to-clipboard="" copy-to-clipboard-func="ctrl.model.Email">
<li class="service_InL">
<div class="Serv_img"><img src="{{ asset('media/mobile/icon_Serv_email.svg')}}  "></div>
</li>
<li class="service_InC" style="word-break: break-all;">
<h3>
ku12bet@gmail.com
</h3>
</li>
<li class="service_InR">
<div class="btn_ServID" suc-img="{{ asset('media/mobile/icon_checkGreen.svg')}}   ">
Sao chép
</div>
</li>
</ul>
<input type="hidden" name="hidViber" id="hidViber" value="+639064061820" autocomplete="off">
<input type="hidden" name="hidEMail" id="hidEMail" value="ku12bet@gmail.com" autocomplete="off">
</div>
</div>
<!--頁面內容 end-->
<alert-rule rule-name="複製成功" rule-message="Sao chép thành công"></alert-rule>
<alert-rule rule-name="您的申請正在處理中，請稍後！" rule-message="Yêu cầu của bạn đang được xử lý, vui lòng chờ đợi！"></alert-rule>
<alert-rule rule-name="系統繁忙中，請稍候再試！" rule-message="Hệ thống đang bận, vui lòng thử lại sau！"></alert-rule>
<alert-rule rule-name="系統繁忙中，請稍候再試！！" rule-message="Hệ thống đang bận, vui lòng thử lại sau！！"></alert-rule>
<alert-rule rule-name="您提交的太頻繁，請稍後再試！！！" rule-message="Yêu cầu quá thường xuyên, vui lòng thử lại sau！！！"></alert-rule>
<alert-rule rule-name="系統異常請稍後再試" rule-message="Lỗi hệ thống, vui lòng thử lại sau"></alert-rule>
<alert-rule rule-name="很抱歉，回電服務目前關閉中，請暫時使用其他客服管道聯繫我們，謝謝！" rule-message="Xin lỗi, dịch vụ gọi lại hiện tại không thể sử dụng, hãy sử dụng cách khác để liên hệ với chúng tôi, cảm ơn!"></alert-rule> 
<alert-rule rule-name="《在線客服》維護中" rule-message="《Hỗ trợ trực tuyến》đang bảo trì"></alert-rule> 
</div>
<input id="hfCopySuccessImg" name="hfCopySuccessImg" type="hidden" value="/Areas/Mobile/Content/Images/icon_checkGreen.svg" autocomplete="off">
<input id="hfLanguageCode" name="hfLanguageCode" type="hidden" value="vi-vn" autocomplete="off">
<input id="hfCountry" name="hfCountry" type="hidden" value="618" autocomplete="off">
<!-- start Footer -->
<style>
.footer_maintainTxt {
word-wrap: break-word;
word-break: normal;
}
</style>
<div ng-controller="FooterCtrl as ctrl" ng-show="ctrl.AppContextIsLoad()" class="ng-scope">
<div class="footer_mask_all" id="footer_mask_all" style="display:none"></div>
<div class="footer" id="FooterTouchstartControll">
<a href="{{route('mobileHome')}}" ng-click="ctrl.RedirectPage('/Mobile/Home', 'Home')" class="footer_list btn_footer_home">
<h5>Trang chủ</h5>
</a>
<a id="ServiceCenter" ng-class="{'active':ctrl.footerMenuSelections.ServiceCenter.active }" ng-click="ctrl.RedirectPage('/Mobile/Member/ServiceCenter', 'ServiceCenter')" class="footer_list btn_footer_serv active">
<h5>Hỗ trợ</h5>
</a>
<!-- ngIf: !ctrl.IsDepositWithdrawalCenterSlideOpen() -->
<!-- ngIf: ctrl.IsDepositWithdrawalCenterSlideOpen() --><a class="footer_list btn_footer_DW ng-scope" ng-if="ctrl.IsDepositWithdrawalCenterSlideOpen()" ng-class="{'canel-toggle':ctrl.CanelToggle(),'active':ctrl.footerMenuSelections.DepositWithdrawal.active || (ctrl.footerMenuSelections.PlatfromTransfer.active &amp;&amp; !ctrl.isGameLobby)}" no-redirect="false" ng-click="ctrl.DepositWithdrawalSelectChange()" id="DepositCenter">
<h5 id="DepositCenterH5">Nạp rút tiền</h5>
</a><!-- end ngIf: ctrl.IsDepositWithdrawalCenterSlideOpen() -->
<div class="footer_DW_open off" ng-class="{'on':ctrl.isDWopen,'off':!ctrl.isDWopen}">
<div>
<!-- ngIf: !ctrl.CheckTopMenuPermission('CanPlatfromTransfer') -->
<!-- ngIf: !ctrl.CheckTopMenuPermission('CanPlatfromTransfer') -->
<!-- ngIf: ctrl.CheckTopMenuPermission('CanPlatfromTransfer') --><a ng-if="ctrl.CheckTopMenuPermission('CanPlatfromTransfer')" id="PlatformTransfer" ng-click="ctrl.RedirectPage('/Mobile/Member/PlatformTransfer', 'DepositWithdrawal')" class="btn_footer_transfer ng-scope">
<span id="PlatformTransferSpan">Chuyển quỹ</span>
</a><!-- end ngIf: ctrl.CheckTopMenuPermission('CanPlatfromTransfer') -->
<!-- ngIf: !ctrl.IsDepositOpen() -->
<!-- ngIf: !ctrl.IsDepositOpen() -->
<!-- ngIf: ctrl.IsDepositOpen() --><a ng-if="ctrl.IsDepositOpen()" id="MemberDeposit" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberDeposit', 'DepositWithdrawal')" check-registered-additionally="" class="btn_footer_deposit ng-scope">
<div class="img_deposit" id="MemberDepositImage"></div>
<span id="MemberDepositSpan">Nạp tiền</span>
</a><!-- end ngIf: ctrl.IsDepositOpen() -->
<!-- ngIf: !ctrl.IsWithdrawalOpen() -->
<!-- ngIf: !ctrl.IsWithdrawalOpen() -->
<!-- ngIf: ctrl.IsWithdrawalOpen() --><a ng-if="ctrl.IsWithdrawalOpen()" id="MemberWithdrawal" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberWithdrawal', 'DepositWithdrawal')" check-registered-additionally="" class="btn_footer_withdrawal ng-scope">
<div class="img_withdrawal" id="MemberWithdrawalImage"></div>
<span id="MemberWithdrawalSpan">Rút tiền</span>
</a><!-- end ngIf: ctrl.IsWithdrawalOpen() -->
</div>
</div>
<!-- ngIf: !ctrl.isGameLobby --><a href="{{route('transaction')}}" ng-if="!ctrl.isGameLobby" ng-click="ctrl.RedirectPage('/Mobile/Member/TransactionRecords', 'TransactionRecords')" id="TransactionRecords" ng-class="{'active':ctrl.footerMenuSelections.TransactionRecords.active }" class="footer_list btn_footer_tradeRec ng-scope">
<h5>
Giao dịch
</h5>
</a><!-- end ngIf: !ctrl.isGameLobby -->
<!-- ngIf: !ctrl.CheckTopMenuPermission('CanPlatfromTransfer') && ctrl.isGameLobby -->
<!-- ngIf: ctrl.CheckTopMenuPermission('CanPlatfromTransfer') && ctrl.isGameLobby -->
<!--會員中心-->
<a href="{{route('membercenter')}}" id="MemberCenter" class="footer_list btn_footer_menu redC" ng-class="{'active':ctrl.footerMenuSelections.MemberCenter.active ,'redC':ctrl.ShowRedDot() }" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberCenter', 'MemberCenter')">
<h5 id="MemberCenterH5">Tôi</h5>
</a>
</div>
<!--維護彈跳視窗-->
<div class="mask" id="excl_Popup">
<div class="popup_container">
<div class="popup_bg_upper">
<div class="popup">
<div class="popup_T">
<span>Chú ý</span>
</div>
<div class="popup_In">
<!--內容-->
<img class="index_submit_icon" src="/Areas/Mobile/Content/images/vi-vn/icon_excl.svg">
<div ng-show="ctrl.CheckCanFunction=='CanDeposit'" class="ng-hide">
<!-- ngIf: !ctrl.CheckTopMenuPermission('CanDeposit') -->
<!-- ngIf: ctrl.CheckTopMenuPermission('CanDeposit') && !ctrl.CheckTopMenuPermission('CanDepositP') && ctrl.appConfig.CompetenceModel.MemberStatus != 3 -->
<!-- ngIf: ctrl.CheckTopMenuPermission('CanDeposit') && !ctrl.CheckTopMenuPermission('CanDepositP') && ctrl.appConfig.CompetenceModel.MemberStatus === 3 -->
</div>
<div ng-show="ctrl.CheckCanFunction=='CanPlatfromTransfer'" class="ng-hide">
<div class="index_submit_text">
Xin lỗi, chức năng chuyển khoản đang bảo trì
</div>
</div>
<div ng-show="ctrl.CheckCanFunction=='CanWithdrawal'" class="ng-hide">
<!-- ngIf: !ctrl.CheckTopMenuPermission('CanWithdrawal') -->
<!-- ngIf: ctrl.CheckTopMenuPermission('CanWithdrawal') && (!ctrl.CheckTopMenuPermission('CanWithdrawalP'))  -->
</div>
<!--內容 end-->
</div>
<div class="popup_button">
<input type="button" class="btn_popupW100" value="Xác nhận" ng-click="ctrl.PopupClose('excl_Popup')">
</div>
</div>
</div>
</div>
</div>
<input type="hidden" id="PltformMember" value="TK Chính" autocomplete="off"><input type="hidden" id="PltformNBB" value="KU Thể Thao" autocomplete="off"><input type="hidden" id="PltformBB_LiveGame" value="KU Casino" autocomplete="off"><input type="hidden" id="PltformTS" value="JZ Thể Thao" autocomplete="off"><input type="hidden" id="PltformBB_Ball" value="KU Xổ Số" autocomplete="off"><input type="hidden" id="PltformDDD" value="3D" autocomplete="off"><input type="hidden" id="PltformAGIN" value="AG" autocomplete="off"><input type="hidden" id="PltformWM" value="WM" autocomplete="off"><input type="hidden" id="PltformGPI" value="GPI" autocomplete="off"><input type="hidden" id="PltformDG" value="DG" autocomplete="off"><input type="hidden" id="PltformSA" value="SA" autocomplete="off"><input type="hidden" id="PltformAES" value="AES" autocomplete="off"><input type="hidden" id="PltformEVO" value="EVO" autocomplete="off"><input type="hidden" id="PltformOBLive" value="DB Casino" autocomplete="off"><input type="hidden" id="PltformCMD" value="CMD" autocomplete="off"><input type="hidden" id="PltformOneBook" value="SABA" autocomplete="off"><input type="hidden" id="PltformAI" value="AI" autocomplete="off"><input type="hidden" id="PltformNewBBIN" value="BBIN" autocomplete="off"><input type="hidden" id="PltformOBSport" value="PANDA" autocomplete="off"><input type="hidden" id="PltformIMone" value="IM" autocomplete="off"><input type="hidden" id="PltformOBESport" value="DB E-sports" autocomplete="off"><input type="hidden" id="PltformBNG" value="BNG" autocomplete="off"><input type="hidden" id="PltformCQNine" value="CQ9" autocomplete="off"><input type="hidden" id="PltformPLS" value="PLS" autocomplete="off"><input type="hidden" id="PltformRKFive" value="RK5" autocomplete="off"><input type="hidden" id="PltformDS" value="DS" autocomplete="off"><input type="hidden" id="PltformLC" value="V8" autocomplete="off"><input type="hidden" id="PltformKS" value="KS" autocomplete="off"><input type="hidden" id="PltformPG" value="PG" autocomplete="off"><input type="hidden" id="PltformKA" value="KA" autocomplete="off"><input type="hidden" id="PltformFTG" value="FTG" autocomplete="off"><input type="hidden" id="PltformFC" value="FC" autocomplete="off"><input type="hidden" id="PltformAT" value="AT" autocomplete="off"><input type="hidden" id="PltformOBFish" value="DB Bắn Cá" autocomplete="off"><input type="hidden" id="PltformSM" value="COOL-IN" autocomplete="off"><input type="hidden" id="PltformLover" value="Quà tặng miễn phí" autocomplete="off"><input type="hidden" id="PltformKUIM" value="Phòng chat KU" autocomplete="off"><input type="hidden" id="PltformAnchorGift" value="AnchorGift" autocomplete="off"><input type="hidden" id="PltformFriendReward" value="Ví bạn bè" autocomplete="off"><input type="hidden" id="PltformAmeba" value="AE" autocomplete="off"><input type="hidden" id="PltformAVIA" value="AVIA" autocomplete="off"><input type="hidden" id="PltformPS" value="PS" autocomplete="off"><input type="hidden" id="PltformXG" value="XG" autocomplete="off"><div class="mask_all" id="GameLobbyFastTransfer">
<div class="popup_container">
<div class="popup_bg">
<div class="popup popupFast">
<div class="btn_close" ng-click="ctrl.PopClose()"></div>
<div class="popup_T">
<span>Chuyển khoản nhanh</span>
</div>
<div class="popup_In">
<!--內容-->
<div class="formPopup">
<ul>
<li class="formPopup_sum">
<div>
<div class="formPopup_T">TK Chính</div>
<div class="PopupMoney ng-binding" ng-bind="ctrl.displayAmount.MainAmount"></div>
<div class="formPopup_T" ng-switch="ctrl.gameType">
<div ng-bind="ctrl.ChangePlatformName(ctrl.gameType)" class="ng-binding"></div>
</div>
<div class="PopupMoney ng-binding" ng-bind="ctrl.displayAmount.GameBalance"></div>
</div>
<div class="formPopup_btn">
<!--T17232 主帳戶金額為0 全轉按鈕不打開-->
<input type="button" class="btn_transfer ng-hide" value="Chuyển hết" ajax-submit-auto-disable="Chuyển hết" ng-valid-click="ctrl.TransferMainAllAmountToGame()" ng-show="ctrl.displayAmount.MainAmount != 0 &amp;&amp; ctrl.isDisabled == false">
<input type="button" class="btn_transfer noOpacity" value="Chuyển hết" ng-show="ctrl.displayAmount.MainAmount == 0 || ctrl.isDisabled == true" disabled="disabled">
</div>
</li>
<li class="formPopup_sum">
<div>
<div class="keyboard textMoney ng-pristine ng-untouched ng-valid ng-binding on ng-empty" id="transferAmount" multi-show-numeric-keypad-v2="" tabindex="100" placeholder="Nhập số điểm" focus-to-top="#GameLobbyFastTransfer" open-keyboard="true" ng-model="ctrl.transferAmount" ng-bind="ctrl.transferAmount" enabled-click-event="false" style="outline: none;"></div><div class="btn_closeKB" data-len="0" style="display: none;"></div>
</div>
<div class="formPopup_btn">
<!--T17232 主帳戶金額為0 或 數字鍵盤沒有輸入值 全部轉回不打開-->
<input type="button" value="Xác nhận" ajax-submit-auto-disable="Đang chuyển..." ng-valid-click="ctrl.TransferFromAccountToGame()" ng-show="!ctrl.isDisabled &amp;&amp; ctrl.transferAmount != '' &amp;&amp; ctrl.transferAmount != null" class="ng-hide">
<input type="button" value="Xác nhận" ng-show="ctrl.isDisabled || ctrl.transferAmount == '' || ctrl.transferAmount == null" disabled="disabled">
</div>
</li>
</ul>
<!--keyType -->
<div multi-numeric-keypad-v2="transferAmount" use-chips="true" money="1" class="transferAmount ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" no-zero="1" ng-model="ctrl.transferAmount" customclass="Popup" max-length="10" max-amount="0" style="display: table;"><div ng-show="usechips==='true'" class="numPlusArea" style="display: flex;">
                            <div class="typePlusNum number100">+100</div>
                            <div class="typePlusNum number500">+500</div>
                            <div class="typePlusNum number1000">+1000</div>
                            <div class="typePlusNum number2000">+2000</div>
                        </div>
                        <table ng-show="usepoint==='false'" class="numInputArea Popup" style="display: table;">
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
                        <table ng-show="usepoint==='true'" class="numInputArea ng-hide" style="display: table;">
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
                        </table></div>
</div>
<!--內容 end-->
</div>
<div class="popup_button">
<!--T17232 三方帳戶金額為0 全部轉回不打開-->
<!-- ngIf: ctrl.displayAmount.GameBalance != '0' && ctrl.isDisabled == false -->
<!-- ngIf: ctrl.displayAmount.GameBalance == 0 || ctrl.isDisabled == true --><input type="button" class="btn_popupW100 ng-scope" ng-if="ctrl.displayAmount.GameBalance == 0 || ctrl.isDisabled == true" value="Chuyển hết về tài khoản chính" disabled="disabled" style="background-color: #eee !important; color: #a1a1a1 !important;"><!-- end ngIf: ctrl.displayAmount.GameBalance == 0 || ctrl.isDisabled == true -->
</div>
</div>
</div>
</div>
</div>
<div class="mask_all" id="GameLobbyFastTransferLogOut">
<div class="popup_container">
<div class="popup_bg">
<div class="popup popupFast">
<div class="btn_close" ng-click="ctrl.CloseTransferBoxBackIndex()"></div>
<div class="popup_T">
<span>Chuyển khoản nhanh</span>
</div>
<div class="popup_In popup_off">
<img src="/Content/images/prompt.svg">
<span>
Chức năng hiện tại không thể sử dụng!<br>
Trang chủ đã đăng xuất, vui lòng đăng nhập lại!
</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!--帳號密碼錯誤被鎖定禁登提示 Start-->
<!--帳號密碼錯誤被鎖定禁登提示-->
<div ng-controller="LoginLockPopupCtrl as ctrl" class="mask_all mask_new ng-scope" id="msgLock" style="display:none">
<div class="popup_container">
<div class="popup_bg">
<div class="popup">
<div class="popup_T">Tin nhắn</div>
<div class="popup_In">
<div class="popupCenter"><span style="color:black!important" bind-html-compile="ctrl.model.SignInOverLimitErrorMsg"></span></div>
</div>
<div class="popup_button" style="display:flex!important">
<input type="button" class="w50L" value="Hủy" ng-click="ctrl.AccountLockClose()">
<input class="w50R" type="button" value="Liên hệ hỗ trợ" ng-click="ctrl.RedirectPage('/Mobile/Member/ServiceCenter', 'ServiceCenter')">
</div>
</div>
</div>
</div>
</div>
<!--帳號密碼錯誤被鎖定禁登提示 End-->
<!-- end Footer -->
<!--彈跳視窗 Start-->
<div style="display:none" class="mask_join info_new" id="notifyMessage">
<div class="popup_container">
<div class="popup_bg_upper">
<div class="popup">
<div class="btn_close popup_close"></div>
<div class="popup_T">
<span>Tin nhắn cá nhân</span>
</div>
<div class="popup_In">
<!--內容-->
<div class="joinT">『Bạn có tin nhắn chưa đọc』</div>
<div id="info_newIn" class="joinIn"></div>
<!--內容 end-->
</div>
<div class="popup_button" onclick="location.href ='/Mobile/Member/PersonalMessage'">
<input type="button" class="btn_popupW100 popup_close" value="Kiểm tra ngay" ng-click="ctrl.FancyBoxClose()">
</div>
</div>
</div>
</div>
</div>
<!--彈跳視窗 End-->
<input type="hidden" id="hfUniqueSessionId" value="TM1542188071676952576" autocomplete="off">
<input type="hidden" value="" id="hfloggedinInfo" autocomplete="off">

<div id="valid-rule-block">
<valid-rule rule-name="required" rule-message="Bắt buộc điền"></valid-rule>
<valid-rule rule-name="number" rule-message="Nhập số nguyên"></valid-rule>
<valid-rule rule-name="min" rule-message="Nhập số nguyên"></valid-rule>
<valid-rule rule-name="maxlength" rule-message="Đừng nhập vượt quá {0} chữ số"></valid-rule>
</div>
<div id="alert-rule-block">
<!-- SweetAlert多國語言設定(若是自訂Alert，請在各自頁面增加規則) -->
<alert-rule rule-name="建立成功" rule-message="Tạo thành công"></alert-rule>
<alert-rule rule-name="建立失敗" rule-message="Tạo thất bại"></alert-rule>
<alert-rule rule-name="更新成功" rule-message="Cập nhật thành công"></alert-rule>
<alert-rule rule-name="更新失敗" rule-message="Cập nhật thất bại"></alert-rule>
<alert-rule rule-name="刪除成功" rule-message="Xóa thành công"></alert-rule>
<alert-rule rule-name="刪除失敗" rule-message="Xóa thất bại"></alert-rule>
<alert-rule rule-name="參數錯誤" rule-message="Lỗi tham số"></alert-rule>
<alert-rule rule-name="確認刪除" rule-message="Xác nhận xóa bỏ"></alert-rule>
<alert-rule rule-name="確認修改" rule-message="Xác nhận sửa đổi"></alert-rule>
<alert-rule rule-name="刪除後將無法復原是否還要進行" rule-message="Sau khi xóa sẽ không thể khôi phục, có muốn tiến hành hay không"></alert-rule>
<alert-rule rule-name="請填寫刷新時間" rule-message="Vui lòng nhập thời gian làm mới"></alert-rule>
<alert-rule rule-name="刷新時間需大於10秒" rule-message="Thời gian làm mới phải lớn hơn 10 giây"></alert-rule>
<alert-rule rule-name="轉換語系發生問題" rule-message="Chuyển đổi ngôn ngữ xảy ra lỗi"></alert-rule>
<alert-rule rule-name="處理中" rule-message="Đang xử lý"></alert-rule>
<alert-rule rule-name="新增書籤Cmd" rule-message="Vui lòng bấm Cmd + D để dấu trang"></alert-rule>
<alert-rule rule-name="新增書籤Ctrl" rule-message="Vui lòng bấm Ctrl + D để dấu trang"></alert-rule>
<alert-rule rule-name="您已經登入" rule-message="Bạn đã đăng nhập"></alert-rule>
<alert-rule rule-name="確認" rule-message="Xác nhận"></alert-rule>
<alert-rule rule-name="取消" rule-message="Hủy"></alert-rule>
<alert-rule rule-name="您沒有進入" rule-message="Bạn không có quyền hạn vào "></alert-rule>
<alert-rule rule-name="的權限，請至本網其他項目投注" rule-message="的權限，請至本網其他項目投注"></alert-rule>
<alert-rule rule-name="的權限，請至本網其他項目投注，謝謝！" rule-message=", vui lòng đặt cược hạng mục khác, cảm ơn !"></alert-rule>
<alert-rule rule-name="KU彩票" rule-message="KU XỔ SỐ"></alert-rule>
<alert-rule rule-name="TS真人" rule-message="TS"></alert-rule>
<alert-rule rule-name="聊愛玩色" rule-message="Chat sex"></alert-rule>
<alert-rule rule-name="查詢有效服務列表發生問題" rule-message="Kiểm tra danh sách dịch vụ hữu hiệu xảy ra lỗi"></alert-rule>
<alert-rule rule-name="系統異常請稍後再試" rule-message="Lỗi hệ thống, vui lòng thử lại sau"></alert-rule>
<alert-rule rule-name="網路異常，請刷新頁面" rule-message="Lỗi mạng, vui lòng làm mới giao diện"></alert-rule>
<alert-rule rule-name="請求異常，請稍後再試" rule-message="Lỗi truy cập, vui lòng thử lại sau"></alert-rule>
<alert-rule rule-name="您沒有進入《{0}》的權限！" rule-message="Bạn không có quyền hạn vào《{0}》!"></alert-rule>
<alert-rule rule-name="轉帳維護中" rule-message="Bảo trì"></alert-rule>
<alert-rule rule-name="信息" rule-message="Tin nhắn"></alert-rule>
<alert-rule rule-name="聯繫客服" rule-message="Liên hệ hỗ trợ"></alert-rule>
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
<alert-rule rule-name="您的帳號已禁止登入，如有疑問請聯繫客服人員" rule-message="Tài khoản của bạn đã cấm đăng nhập, nếu có thắc mắc vui lòng liên hệ hỗ trợ"></alert-rule>
<alert-rule rule-name="偵測到重複登入，已將您登出" rule-message="Đăng nhập trùng lặp, bạn đã đăng xuất"></alert-rule>
<alert-rule rule-name="您已經登出" rule-message="Tài khoản đã bị đăng xuất"></alert-rule>
<alert-rule rule-name="單次登入時間過長已超過限制時間，已將您登出" rule-message="Thời gian đăng nhập của một lần đã vượt quá thời gian hạn chế, bạn đã đăng xuất"></alert-rule>
<alert-rule rule-name="您帳號已被禁止登入，已將您登出" rule-message="Tài khoản của bạn đã bị cấm đăng nhập, bạn đã đăng xuất"></alert-rule>
<alert-rule rule-name="您帳號已被黑名單，已將您登出" rule-message="Tài khoản của bạn đã là danh sách đen, bạn đã đăng xuất"></alert-rule>
<alert-rule rule-name="系統維護中，已將您登出" rule-message="Hệ thống đang bảo trì, bạn đã đăng xuất"></alert-rule>
<alert-rule rule-name="系統異常，已將您登出" rule-message="Lỗi hệ thống, bạn đã đăng xuất"></alert-rule>
<alert-rule rule-name="總額度" rule-message="Tổng số điểm"></alert-rule>
<alert-rule rule-name="您的帳號已被鎖定，請聯繫客服" rule-message="Tài khoản của bạn đã bị khóa, vui lòng liên hệ hỗ trợ"></alert-rule>
<alert-rule rule-name="請勿提供手機驗證碼給他人！" rule-message="Vui lòng không cung cấp mã xác minh OTP cho bất kì ai!"></alert-rule>
<alert-rule rule-name="您的可轉餘額為0" rule-message="Số dư bạn có thể chuyển là 0"></alert-rule>
<alert-rule rule-name="全部遊戲轉點至主帳戶成功" rule-message="Chuyển hết về tài khoản chính thành công"></alert-rule>
<alert-rule rule-name="很抱歉，目前{0}轉帳功能維護中！" rule-message="Xin lỗi, chức năng chuyển khoản {0} đang bảo trì！"></alert-rule>
<alert-rule rule-name="該平台餘額不足" rule-message="該平台餘額不足"></alert-rule>
</div>
<script src="/bundle/thirdpartyplugin.m-memberportal.20181204A.js"></script>
<script src="/Scripts/App/Libs/moment/i18n/vi-vn.js"></script>
<script src="/bundle/base.m-memberportal.20181204A.js"></script>
<script src="/bundles/app.m.js?v=1XQo4VAht5VaMqKWgs6_qeOeulGaEOk3SQ_7byGlzJo1"></script>
<script src="/bundles/menu.m.js?v=FFy1WQXGbSdzUN0Mb8zK9hHuKd8aJ1mAkQGqjYoBNvg1"></script>
<script src="/bundles/app/mobile-member-servicecenter.js?v=nsfVbmDq3Dz6YiSXj3cHBZh6gpEKYYifs5eSH1UDU-E1"></script>
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
"SiteCultureAcronym":"VN"
});
</script>

<div block-ui-container="" class="block-ui-container ng-scope"><div class="block-ui-overlay" ng-class="state.overrideOverlayClass"></div><div class="block-ui-message-container" aria-live="assertive" aria-atomic="true"><div class="block-ui-message" ng-class="$_blockUiMessageClass"><div class="mask_Loading_custom" ng-class="state.overrideMaskClass"></div></div></div></div>

<script>
 $('.btn_back' ).on('click', function() {
    window.history.back();
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

    
});
     
</script>
</body></html>