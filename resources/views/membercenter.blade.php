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
<link href="{{ asset('css/mobile_member.css') }}" rel="stylesheet">
<style type="text/css">.fancybox-margin{margin-right:0px;}</style></head>
<body ontouchstart="" block-ui="main" class="ng-scope block-ui block-ui-anim-fade" aria-busy="false">
<a href="https://www.mykubet.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.kubetkubet.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.kubetnav.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.te7.com.tw/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.ex589.com/home/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.casino5168.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<a href="https://www.ex5888.com/" style="display:block;overflow:hidden;height:0;width:0"></a>
<ajax-anti-forgery-token token="CWWSLly33Rxtw6_489et0h6NZskhb_Db2vn5_Bg73H5ApVJeWmwmbgUQ7CtDavKDOdcuqy_whx8q4PwaKqQqrtCw4z81:hg5DopntdSzpmjcL-jVKVVLI76pVyKMiwV1Z6lzMWI1JCNWR2G8iHXWKRoQRtOv9C0rWIrPr45AHvdDD_LkjO0p-JhFnS0KG3RRJCPTNpcr5OVEMe9iInG0n_hP6gQnlkLSeiA2"></ajax-anti-forgery-token>
<!-- start Header -->
<div ng-controller="HeaderCtrl as ctrl" class="bg_header ng-scope">
<authorize-user-status></authorize-user-status>
<input type="hidden" id="hfLID" value="0813635868" autocomplete="off">
<input type="hidden" id="hfAID" value="35452550a14d45440adcb5b01e9e5bbd" autocomplete="off">
<a class="btn_back" ></a>
<h1 class="bg_header_name ">TÔI</h1>
<div class="header_R">
<!-- ngIf: ctrl.model.MessageBoxCount > 0 --><div class="btn_bell on ng-scope" ng-if="ctrl.model.MessageBoxCount > 0" ng-click="ctrl.RedirectPage('/Mobile/Member/PersonalMessage', 'MemberCenter')"></div><!-- end ngIf: ctrl.model.MessageBoxCount > 0 -->
<!-- ngIf: ctrl.model.MessageBoxCount == 0 -->
</div>
</div>
<div id="inforMDropOUT" ng-controller="HeaderGamePointListCtrl as ctrl" class="inforMDropOUT ng-scope">
<div class="inforMDrop">
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
<div ng-controller="PointsControlCenterCtrl as ctrl" style="display: none;" class="ng-scope">
<span ng-bind="ctrl.isPointsChange.IsTotalBalanceLoading" class="ng-binding"></span>
</div>
<!-- end Header -->
<div id="container_main" class="container_main">
<style type="text/css">
/* 修正美術原提供版本為三個按鈕，需求只要兩個按鈕間距問題 */
.popShare_btn > div + div:after {
margin-left: -24px;
}
/*修正遮罩不完全問題*/
#popShare {
margin:0;
}
</style>
<div ng-controller="MemberCenterCtrl as ctrl" class="ng-scope">
<ul class="member">
<!--level1尊,level2金,level3白,level4钻,level5神-->
<li class="memberFace" ng-init="ctrl.SetFaceImgUrl('/Areas/Mobile/Content/Images/vi-vn/icon_level.svg')">
<img ng-src="{{asset('/media/mobile/icon_level1.svg')}}" ng-show="ctrl.model.ShowFaceImg" src="{{asset('/media/mobile/icon_level1.svg')}}" class="">
<span ng-bind="ctrl.model.LoginInfo.LevelTypeName" class="ng-binding">Đồng</span>
</li>
<li class="memberID">
<span>0813635868</span>
<span class="t_yellow ng-binding" ng-bind="ctrl.model.LoginInfo.NickName">duc</span>
</li>
</ul>
<ul class="memberNum">
<!-- ngIf: !ctrl.model.IsShowTotalBalance --><li ng-if="!ctrl.model.IsShowTotalBalance" ng-click="ctrl.ClickTotalBalance()" class="ng-scope"><span class="t_orange btn_mAmount off"></span><span>Tổng số điểm</span></li><!-- end ngIf: !ctrl.model.IsShowTotalBalance -->
<!-- ngIf: ctrl.model.IsShowTotalBalance && (ctrl.model.LoginStatus !== 2 || !ctrl.model.IsShowBalanceAmount || !ctrl.model.LoginAreaPointsControlCenter.IsAllGameBalanceReady) -->
<!-- ngIf: ctrl.model.LoginStatus == 2 && ctrl.model.IsShowBalanceAmount && ctrl.model.IsShowTotalBalance && ctrl.model.LoginAreaPointsControlCenter.IsAllGameBalanceReady -->
<!-- ngIf: ctrl.model.LoginStatus !== 2 || !ctrl.model.IsShowBalanceAmount -->
<!-- ngIf: ctrl.model.LoginStatus == 2 && ctrl.model.IsShowBalanceAmount --><li ng-if="ctrl.model.LoginStatus == 2 &amp;&amp; ctrl.model.IsShowBalanceAmount" class="ng-scope"><span class="t_orange btn_mAmount ng-binding" ng-bind="ctrl.model.BalanceAmount | currency:'$ ':'0'">$ 0</span><span>TK Chính</span></li><!-- end ngIf: ctrl.model.LoginStatus == 2 && ctrl.model.IsShowBalanceAmount -->
</ul>
<div class="memberOne">
<a class="icon_mRec" ng-click="ctrl.RedirectPage('/Mobile/Member/TransactionRecords')">Lịch sử giao dịch</a>
<a class="icon_mCard" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberBank')">Quản lí ngân hàng</a>
<a class="icon_member" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberEdit')">Tư liệu hội viên</a>
<a class="icon_mPSW" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberPWDEdit')">Thay đổi mật khẩu</a>
</div>
<div class="memberTwo">
<!-- ngIf: ctrl.model.ShowMemberTransferBtn -->
<!-- ngIf: ctrl.CheckTransferPermission() --><a class="icon_mTransRec ng-scope" ng-if="ctrl.CheckTransferPermission()" ng-click="ctrl.RedirectPage('/Mobile/Member/TransferRecords')">Lịch sử chuyển điểm</a><!-- end ngIf: ctrl.CheckTransferPermission() -->
<!-- ngIf: !ctrl.CheckTransferPermission() -->
<a class="icon_mBonus" ng-click="ctrl.RedirectPage('/Mobile/Member/BonusRecords')">Khuyến mãi</a>
<a class="icon_mSet on" ng-class="{'on':ctrl.model.ShowTransitionSettingRedDot}" ng-click="ctrl.RemoveRedDot('transitionSetting');ctrl.RedirectPage('/Mobile/Member/TransitionSetting', 'TransitionSetting')"><span>Chuyển quỹ tự động</span></a>
<a class="icon_mShare" ng-class="{'on':ctrl.model.ShowShareAPPRedDot}" ng-click="ctrl.RemoveRedDot('shareAPP')" pop-open="#popShare" id="shareAPP"><span>Chia sẻ APP</span></a>
<!--iOS裝置 + 正常戶 才顯示下載APP，並且當日只允許下載一次-->
<!-- ngIf: ctrl.model.IsIOSDisplayDownloadApp -->
<!--非iOS裝置不限制當日下載次數-->
<!-- ngIf: ctrl.model.IsAndroidDisplayDownloadApp -->
<a class="icon_mComplian" ng-click="ctrl.openComplianBox( '/Mobile/CustomerService/ComplianBox')">Khiếu nại</a>
<a class="icon_mAbout" ng-click="ctrl.RedirectPage('/Mobile/CustomerService/AboutUs')">Giới thiệu</a>
<a class="icon_mHelp" ng-click="ctrl.RedirectPage('/Mobile/CustomerService/HelpCenter')">Vấn đề thường gặp</a>
<a class="icon_mActiv" ng-click="ctrl.RedirectPage('/Mobile/CustomerService/AboutUs?query=data3')">Hậu trường hoạt động</a>
<a class="icon_mTeach" ng-click="ctrl.RedirectPage('/Mobile/Home/CustomerTeachIOS')">Hướng dẫn người mới</a>
</div>
<div style="text-align: center; padding: 0 3%;">
<a href="{{ route('logout') }}" style="text-decoration: none;">
<input style="width: 100%;" class="btn_logout" id="signout" type="button" value="Đăng xuất" data-signout="/Mobile/Home/login" ng-click="ctrl.DoSignOut()">
</a>
</div>


<!-- 分享APP -->
<div class="mask_all" id="popShare">
<div class="popup_container">
<div class="popup_bg">
<div class="popup popShare">
<div class="btn_close popup_close"></div>
<div class="popup_T">Chia sẻ APP</div>
<div class="popup_In">
<img class="img_qrApp" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAApQAAAKUCAIAAAA1rT9rAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAALpiSURBVHhe7P2Jc11Xne9/P38HyVNFV12qflQ1VVRRxe9J7ISbzmW6dNM0nWZKQxp+0MBN4Ad0M0PClGammTsMnXiQbU2epziO53h2PE8ajuZZlixbgyVZ2udZ65y3jWLHytZHOl9pea9XnaLTIL+/a29ZWdpn/P9EC18+QCw9SoFTZo7x5hifGRy2OcZLSERRNBv8PAWFpUcpcMrMMd4c4zODwzbHeAmJKIpmg5+noLD0KAVOmTnGm2N8ZnDY5hgvIRFF0Wzw8xQUlh6lwCkzx3hzjM8MDtsc4yUkoiiaDX6egsLSoxQ4ZeYYb47xmcFhm2O8hEQURbPBz1NQWHqUAqfMHOPNMT4zOGxzjJeQiKJoNvh5CgpLj1LglJljvDnGZwaHbY7xEhJRFM0GP09BYelRCpwyc4w3x/jM4LDNMV5CIoqi2eDnKSgsPUqBU2aO8eYYnxkctjnGS0hEUTQb/DwFhaVHKXDKzDHeHOMzg8M2x3gJiSiKZoOfp6Cw9CgFTpk5xptjfGZw2OYYLyERRdFs8PMUFJYepcApM8d4c4zPDA7bHOMlJKIomg1+noLC0qMUOGXmGG+O8ZnBYZtjvIREFEWzwc9TUFh6lAKnzBzjzTE+Mzhsc4yXkIiiaDb4eQoKS49S4JSZY7w5xmcGh22O8RISURTNBj9PQWHpUQqcMnOMN8f4zOCwzTFeQiKKotng5ykoLD1KgVNmjvHmGJ8ZHLY5xktIRFE0G/w8BYWlRylwyswx3hzjM4PDNsd4CYkoimaDn6egsPQoBU6ZOcabY3xmcNjmGC8hEUXRbPDzFBSWHqXAKTPHeHOMzwwO2xzjJSSiuxXf5ygFTpmERFBYuoSEhISEhISEOcZLSEhISEhISGQGhy0hISEhIRGlwCmzx/woBU6ZhERQWLqEhISEhISEhDnGS0hISEhISEhkBoctISEhISERpcAps8f8KAVOmYREUFi6hISEhISEhIQ5xktISEhISEhIZAaHLSEhISEhEaXAKbPH/CgFTpmERFBYuoSEhISEhISEOcZLSEhISEhISGQGhy0hISEhIRGlwCmzx/woBU6ZhERQWLqEhISEhISEhDnGS0hISEhISEhkBoctISEhISERpcAps8f8KAVOmYREUFi6hISEhISEhIQ5xktISEhISEhIZAaHLSEhISEhEaXAKbPH/CgFTpmERFBYuoSEhISEhISEOcZLSEhISEhISGQGhy0hISEhIRGlwCmzx/woBU6ZhERQWLqEhISEhISEhDnGS0hISEhISEhkBoctISEhISERpcAps8f8KAVOmYREUFi6hISEhISEhIQ5xktISEhISEhIZAaHLSEhISEhEaXAKbPH/CgFTpmERFBYuoSEhISEhISEOcZLSEhISEhISGQGhy0hISEhIRGlwCmzx/woBU6ZhERQWLqEhISEhISEhDnGS0hISEhISEhkBoctISEhISERpcAps8f8KAVOmYREUFi6hISEhISEhIQ5xktISEhISEhIZAaHLSEhISEhEaXAKbPH/CgFTpmERFBYuoSEhISEhISEOcZLSEhISEhISGQGhy0hISEhIRGlwCmzx/woBU6ZhERQWLqEhISEhISEhDnGS0hISEhISEhkBoctISEhISERpcAps8f8KAVOmYREUFi6hISEhISEhIQ5xktISEhISEhIZAaHLSEhISEhEaXAKbPH/CgFTpmERFBYuoSEhISEhISEOcZLSEhISEhISGQGhy0hISEhIRGlwCmzx/woBU6ZhERQWLqEhISEhISEhDnGS0hISEhISEhkBoctISEhISERpcAps8f8KAVOmYREUFi6hISEhISEhIQ5xktISEhISEhIZAaHLSEhISEhEaXAKbPH/CgFTpmERFBYuoSEhISEhISEOcZLSEhISEhISGQGhy0hISEhIRGlwCmzx/woBU6ZhERQWLqEhISEhISEhDnGS0hISEhISEhkBoctISEhISERpcAps8d8CYmgsHQJCQkJCQkJCQmJKAVOmYSEhERQWHpQWLqEhISEhISEhIREUFi6hIQ95ktIBIWlS0hISEhISEhISEQpcMokJCQkgsLSg8LSJSQkJCQkJCQkJILC0iUk7DFfQiIoLF1CQkJCQkJCQkIiSoFTJiEhIREUlh4Uli4hISEhISEhISERFJYuIWGP+RISQWHpEhISEhISEhISElEKnDIJCQmJoLD0oLB0CQkJCQkJCQkJiaCwdAkJe8yXkAgKS5eQkJCQkJCQkJCIUuCUSUhISASFpQeFpUtISEhI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2WN+lAKnTEJCQkJCwhzjJSSiBYxvlYSEhIQ5xgeFpUtIRClwyuwxP0qBUyYhISEhIWGO8RIS0QLGt0pCQkLCHOODwtIlJKIUOGX2mB+lwCmTkJCQkJAwx3gJiWgB41slISEhYY7xQWHpEhJRCpwye8yPUuCUSUhISEhImGO8hES0gPGtkpCQkDDH+KCwdAmJKAVOmT3mRylwyiQkJCQkJMwxXkIiWsD4VklISEiYY3xQWLqERJQCp8we86MUOGUSEhISEhLmGC8hES1gfKskJCQkzDE+KCxdQiJKgVNmj/lRCpwyCQkJCQkJc4yXkIgWML5VEhISEuYYHxSWLiERpcAps8f8KAVOmYSEhISEhDnGS0hECxjfKgkJCQlzjA8KS5eQiFLglNljfpQCp0xCQkJCQsIc4yUkogWMb5WEhISEOcYHhaVLSEQpcMrsMT9KgVMmISEhISFhjvESEtECxrdKQkJCwhzjg8LSJSSiFDhl9pgfpcApk5CQkJCQMMd4CYloAeNbJSEhIWGO8UFh6RISUQqcsuhuxfdZQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQiKKotng50lCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCIoqi2eDnSUJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkIiiqLZ4OdJQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQiKKotng50lCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCIoqi2eDnSUJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkIiiqLZ4OdJQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQiKKotng50lCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCIoqi2eDnSUJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkIiiqLZ4OdJQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQiKKotng50lCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCIoqi2eDnSUJCQkJC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43RLSEhIBIWlS0iYY7yEhISEhERQWLqEhISEhISEhDnGB2XeFs05k5CQkIhKjNMtISEhERSWLiFhjvESEhISEhJBYekSEhISEhISEuYYH5R5WzTnTEJCQiIqMU63hISERFBYuoSEOcZLSEhISEgEhaVLSEhISEhISJhjfFDmbdGcMwkJCYmoxDjdEhISEkFh6RIS5hgvISEhISERFJYuISEhISEhIWGO8UGZt0VzziQkJCSiEuN0S0hISASFpUtImGO8hISEhIREUFi6hISEhISEhIQ5xgdl3hbNOZOQkJCISozTLSEhIREUli4hYY7xEhISEhISQWHpEhISEhISEhLmGB+UeVs050xCQkIiKjFOt4SEhERQWLqEhDnGS0hISEhIBIWlS0hISEhISEiYY3xQ5m3RnDMJCQmJqMQ43RISEhJBYekSEuYYLyEhISEhERSWLiEhISEhISFhjvFBmbdFc84kJCQkohLjdEtISEgEhaVLSJhjvISEhISERFBYuoSEhISEhISEOcYHZd4WzTmTkJCQiEqM0y0hISERFJYuIWGO8RISEhISEkFh6RISEhISEhIS5hgflHlbNOdMQkJCIioxTreEhIREUFi6hIQ5xktISEhISASFpUtISEhISEhImGN8UOZt0ZwzCQkJiajEON0SEhISQWHpEhLmGC8hISEhIREUli4hISEhISEhYY7xQZm3RXPOJCQkJKIS43RLSEhIBIWlS0iYY7yEhISEhERQWLqEhISEhISEhDnGB2XeFs05k5CQkIhKjNMtISEhERSWLiFhjvESEhISEhJBYekSEhISEhISEuYYH5QgT/RssHQJCQkJc4yPSozTHaXAKZOQkJCQkAgKS5eQkJCQkJCQMMd4c0GerNlg6RISEhLmGD9/WEcURbb4CZSQkJCQkJCQMMd4c0GerNlg6RISEhLmGG+L2VEUzR9+GiUkJCQkJCQkzDHeXJAnazZYuoSEhIQ5xhticBRF84ofSAkJCQkJCQkJc4w3F+TJmg2WLiEhIWGO8SYYGUXRAsCPpYSEhISEhISEOcabC/JkzQZLl5CQkDDH+NJjXhRFCwM/mRISEhISEhIS5hhvLsiTNRssXUJCQsIc40uPeVEULQz8ZEpISEhISEhImGO8uSBP1mywdAkJCQlzjC8xhk0xMZlcHhqv6xzaX3t5w4meNS/3rDve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YY7xEhISEvaYb47xEhISEhISEhISEjPkNrO2vmsH6vqXHej82obG95cVNu/lDQt683725r3lTYtWtdy/vOHDVc1f3dDw3Evtu89fynUNDQyNv+rT09xefmVkvLF7+Gju8o6zvTvPXTrRNNDRf83t83zFguL2kp665Mza5Pkv5SsKm011KTfvqvv8q8mLL5rqa5nmvcZKxV95X8l31ybnN/uH3qvus9q8/+A378uFzTt/x/tg+DGbFl9qjvESEhISEhLmGC8hISFhj/nmGC8hISEhISEhISExQyNjE029I7vO9z2zu/Vzq3PvWebfVdS/5fjSulfslwvuVuN+vVi8qnXRyub3lNV+a0vLsgMd+2v6G7qH3fZ8feLV/xXsNmn3m8qhuv6yA+0/3tb8yx0ta491nW8fHLw2zlcsHEni32e7+MnWW57wm836e3lO+Nze3ObtssXN+4UvJUeX5BsO3NjJbBU375765MLWZNf3k+oH/T3bq0t8t/n6R5ODv/d3NvQ1+xMer7xngoSEhDnGS0hISNhjvjnGS0hISEhISEhISMzQ8NhErnt42+ne/3yx5RMVdW9fduO+6AW7eRffFH2Z/3zu/7my6b0r67+yLud37tr+pp4Rfx/4qz2x3F1zX59MLl0dc5falYc7v76x6d3Laz60qu7n25v3XLzUebnw7i0L6pFvt4tcu+o/leRERbLls35/3VD6zfv5L+T9G4W+VNjJzO8258q7zm/eOw037wO/K2zeTf7pcnHzngkSEhLmGC8hISFhj/nmGC8hISEhISEhISExQ27zrusc2nyy50fbmh5dVfvQzQeSl9beumsujJvbuRevaPLX3GWNH6xqdtvwkpfaijv34MgdXxI2dn2ib3DsQvvgphPdP3y+6X2rGh6s7lm0ounza+orjnSebb16eWjMbft89UJQ3Lw7zicn3eb9Gb+HlXDz9jf/+VpbP3fjMe/CTmZsYtx/EIv7feXsRv9e7pWLS7t5F+823/ix5NAfb7y92rC/w+MO+DGbFl9qjvESEhISEhLmGC8hISFhj/nmGC8hISEhISEhISExQ8OjfvPedLLnP7Y1fXhl7YNLLiz4zbt+8cqWxSub37ms5pubmpcd6Nxf09fUM3x15I5vfer++76rYxfbB58/3fvrHc2frqp3G/+Dq3sXrfSva//ljpYXz12q7xpyV+38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ISEhISEhISEhISEhISEhoaEhISEhISEhIREUli4hkRkctoSEhIQ5xktIBIWlm2O8hISEhISEhISEhISEhISEhISEhISGhoSEhISEhIREUFi6hERmcNgSEhIS5hgvIREUlm6O8RISEhISEhISEhISEhISEhISEhISGhoSEhISEhISEkFh6RISmcFhS0hISJhjvIREUFi6OcZLSEhISEhISEhISEhISEhISEhISGhoSEhISEhISEgEhaVLSGQGhy0hISFhjvESEkFh6eYYLyEhISEhISEhISEhISEhISEhISGhoSEhISEhISEhERSWLiGRGRy2hISEhDnGS0gEhaWbY7yEhISEhISEhISEhISEhISEhISEhIaGhISEhISEhERQWLqERGZw2BISEhLmGC8hERSWbo7xEhISEhISEhISEhISEhISEhISEhIaGhISEhISEhISQWHpEhKZwWFLSEhImGO8hERQWLo5xktISEhISEhISEhISEhISEhISEhIaGhISEhISEhISASFpUtIZAaHLSEhIWGO8RISQWHp5hgvISEhISEhISEhISEhISEhISEhIaGhISEhISEhISERFJYuIZEZHLaEhISEOcZLSASFpZtjvISEhISEhISEhISEhISEhISEhISEhoaEhISEhISERFBYuoREZnDYEhISEuYYLyERFJZujvESEhISEhISEhISEhISEhISEhISEhoaEhISEhISEhJBYekSEpnBYUtISEiYY7yERFBYujnGS0hISEhISEhISEhISEhISEhISEhoaEhISEhISEhIBIWlS0hkBoctISEhYY7xEhJBYenmGC8hISEhISEhISEhISEhISEhISEhoaEhISEhISEhIREUli4hkRkctoSEhIQ5xktIBIWlm2O8hISEhISEhISEhISEhISEhISEhISGhoSEhISEhIREUFi6hERmcNgSEhIS5hgvIREUlm6O8RISEhISEhISEhISEhISEhISEhISGhoSEhISEhISEkFh6RISmcFhS0hISJhjvIREUFi6OcZLSEhISEhISEhISEhISEhISEhISGhoSEhISEhISEgEhaVLSGQGhy0hISFhjvESEkFh6eYYLyEhISEhISEhISEhISEhISEhISGhoSEhISEhISEhERSWLiGRGRy2hISEhDnGS0gEhaWbY7yEhISEhISEhISEhISEhISE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">
<div class="popShare_btn">
<div class="btn_shareCopy" ng-click="ctrl.CopyShareApp('https://gu1vn.net/Common/DownloadMyApp?t=638572194544931302')">Sao chép</div>
<div class="btn_shareSafe" ng-click="ctrl.SaveShareApp(false,'/Common/DownloadShareAppImages.png')">Lưu</div>
</div>
<div class="txt_share" id="shareCopy">Sao chép thành công</div>
<div class="txt_share" id="shareSafe">Ảnh đã được lưu vào album điện thoại</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
<a href="{{route('mobileHome')}}" class="footer_list btn_footer_home">
<h5>Trang chủ</h5>
</a>
<a href="{{route('service')}}" id="ServiceCenter" ng-class="{'active':ctrl.footerMenuSelections.ServiceCenter.active }" ng-click="ctrl.RedirectPage('/Mobile/Member/ServiceCenter', 'ServiceCenter')" class="footer_list btn_footer_serv">
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
<!-- ngIf: !ctrl.isGameLobby --><a href="{{route('service')}}" ng-if="!ctrl.isGameLobby" ng-click="ctrl.RedirectPage('/Mobile/Member/TransactionRecords', 'TransactionRecords')" id="TransactionRecords" ng-class="{'active':ctrl.footerMenuSelections.TransactionRecords.active }" class="footer_list btn_footer_tradeRec ng-scope">
<h5>
Giao dịch
</h5>
</a><!-- end ngIf: !ctrl.isGameLobby -->
<!-- ngIf: !ctrl.CheckTopMenuPermission('CanPlatfromTransfer') && ctrl.isGameLobby -->
<!-- ngIf: ctrl.CheckTopMenuPermission('CanPlatfromTransfer') && ctrl.isGameLobby -->
<!--會員中心-->
<a id="MemberCenter" class="footer_list btn_footer_menu active redC" ng-class="{'active':ctrl.footerMenuSelections.MemberCenter.active ,'redC':ctrl.ShowRedDot() }" ng-click="ctrl.RedirectPage('/Mobile/Member/MemberCenter', 'MemberCenter')">
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
<input type="hidden" id="PltformMember" value="TK Chính" autocomplete="off"><input type="hidden" id="PltformNBB" value="KU Thể Thao" autocomplete="off"><input type="hidden" id="PltformBB_LiveGame" value="KU Casino" autocomplete="off"><input type="hidden" id="PltformTS" value="JZ Thể Thao" autocomplete="off"><input type="hidden" id="PltformBB_Ball" value="KU Xổ Số" autocomplete="off"><input type="hidden" id="PltformDDD" value="3D" autocomplete="off"><input type="hidden" id="PltformAGIN" value="AG" autocomplete="off"><input type="hidden" id="PltformWM" value="WM" autocomplete="off"><input type="hidden" id="PltformGPI" value="GPI" autocomplete="off"><input type="hidden" id="PltformDG" value="DG" autocomplete="off"><input type="hidden" id="PltformSA" value="SA" autocomplete="off"><input type="hidden" id="PltformAES" value="AES" autocomplete="off"><input type="hidden" id="PltformEVO" value="EVO" autocomplete="off"><input type="hidden" id="PltformOBLive" value="DB Casino" autocomplete="off"><input type="hidden" id="PltformCMD" value="CMD" autocomplete="off"><input type="hidden" id="PltformOneBook" value="SABA" autocomplete="off"><input type="hidden" id="PltformAI" value="AI" autocomplete="off"><input type="hidden" id="PltformNewBBIN" value="BBIN" autocomplete="off"><input type="hidden" id="PltformOBSport" value="PANDA" autocomplete="off"><input type="hidden" id="PltformIMone" value="IM" autocomplete="off"><input type="hidden" id="PltformOBESport" value="DB E-sports" autocomplete="off"><input type="hidden" id="PltformBNG" value="BNG" autocomplete="off"><input type="hidden" id="PltformCQNine" value="CQ9" autocomplete="off"><input type="hidden" id="PltformPLS" value="PLS" autocomplete="off"><input type="hidden" id="PltformRKFive" value="RK5" autocomplete="off"><input type="hidden" id="PltformDS" value="DS" autocomplete="off"><input type="hidden" id="PltformLC" value="V8" autocomplete="off"><input type="hidden" id="PltformOBChess" value="DB Đối Kháng" autocomplete="off"><input type="hidden" id="PltformKS" value="KS" autocomplete="off"><input type="hidden" id="PltformPG" value="PG" autocomplete="off"><input type="hidden" id="PltformKA" value="KA" autocomplete="off"><input type="hidden" id="PltformFTG" value="FTG" autocomplete="off"><input type="hidden" id="PltformFC" value="FC" autocomplete="off"><input type="hidden" id="PltformOBEgame" value="DB Games" autocomplete="off"><input type="hidden" id="PltformOBFish" value="DB Bắn Cá" autocomplete="off"><input type="hidden" id="PltformAT" value="AT" autocomplete="off"><input type="hidden" id="PltformSM" value="COOL-IN" autocomplete="off"><input type="hidden" id="PltformLover" value="Quà tặng miễn phí" autocomplete="off"><input type="hidden" id="PltformKUIM" value="Phòng chat KU" autocomplete="off"><input type="hidden" id="PltformAnchorGift" value="AnchorGift" autocomplete="off"><input type="hidden" id="PltformFriendReward" value="Ví bạn bè" autocomplete="off"><input type="hidden" id="PltformAmeba" value="AE" autocomplete="off"><input type="hidden" id="PltformAVIA" value="AVIA" autocomplete="off"><input type="hidden" id="PltformPS" value="PS" autocomplete="off"><input type="hidden" id="PltformXG" value="XG" autocomplete="off"><div class="mask_all" id="GameLobbyFastTransfer">
<div class="popup_container">
<div class="popup_bg">
<div class="popup popupFast ng-scope block-ui block-ui-anim-fade" block-ui="transferBlock" aria-busy="false">
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
<input type="button" class="btn_transfer ng-hide" value="Chuyển hết" ajax-submit-auto-disable="" ng-valid-click="ctrl.TransferMainAllAmountToGame()" ng-show="ctrl.displayAmount.MainAmount != 0 &amp;&amp; ctrl.isDisabled == false">
<input type="button" class="btn_transfer noOpacity" value="Chuyển hết" ng-show="ctrl.displayAmount.MainAmount == 0 || ctrl.isDisabled == true" disabled="disabled">
</div>
</li>
<li class="formPopup_sum">
<div>
<div class="keyboard textMoney ng-pristine ng-untouched ng-valid ng-binding on ng-empty" id="transferAmount" multi-show-numeric-keypad-v2="" tabindex="100" placeholder="Nhập số điểm" focus-to-top="#GameLobbyFastTransfer" open-keyboard="true" ng-model="ctrl.transferAmount" ng-bind="ctrl.transferAmount" enabled-click-event="false" style="outline: none;"></div><div class="btn_closeKB" data-len="0" style="display: none;"></div>
</div>
<div class="formPopup_btn">
<!--T17232 主帳戶金額為0 或 數字鍵盤沒有輸入值 全部轉回不打開-->
<input type="button" value="Xác nhận" ajax-submit-auto-disable="" ng-valid-click="ctrl.TransferFromAccountToGame()" ng-show="!ctrl.isDisabled &amp;&amp; ctrl.transferAmount != '' &amp;&amp; ctrl.transferAmount != null" class="ng-hide">
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
<div block-ui-container="" class="block-ui-container ng-scope"><div class="block-ui-overlay" ng-class="state.overrideOverlayClass"></div><div class="block-ui-message-container" aria-live="assertive" aria-atomic="true"><div class="block-ui-message" ng-class="$_blockUiMessageClass"><div class="mask_Loading_custom" ng-class="state.overrideMaskClass"></div></div></div></div></div>
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
<input type="hidden" id="hfUniqueSessionId" value="TM1551838558147706880" autocomplete="off">
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
<alert-rule rule-name="5分鐘內限申請一次投訴箱，如急需諮詢，請聯繫【在線客服】" rule-message="Trong vòng 5 phút chỉ được phép để lại tin nhắn một lần! Nếu cần được giải đáp nhanh chóng, vui lòng liên hệ (Hỗ trợ)"></alert-rule>
<alert-rule rule-name="該瀏覽器不支持此操作" rule-message="Trình duyệt này không hỗ trợ thao tác này"></alert-rule>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/bundle/thirdpartyplugin.m-memberportal.20181204A.js"></script>
<script src="/Scripts/App/Libs/moment/i18n/vi-vn.js"></script>
<script src="/bundle/base.m-memberportal.20181204A.js"></script>
<script src="/bundles/app.m.js?v=GdOVzIuvWOkROTQeE1evEQp5AWgVqkgjNOJxYmS2QEk1"></script>
<script src="/bundles/menu.m.js?v=wu2nM9CtwWv2FFdbMLd-v280rdxpBsmiaNFV9_P7anE1"></script>
<script src="/bundles/app/mobile-member-membercenter.js?v=9o9yZPLQHwsokbUMNAYe9Sp55Wh1Qlt-AE7VSGcq5Vmg1"></script>
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