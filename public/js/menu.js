/* ç¸®å°å¤±æ•—ă€‚æ­£åœ¨å‚³å›æœªç¸®å°ç„å…§å®¹ă€‚
(735,21-22): run-time error JS1005: Expected '(': {
(737,9-10): run-time error JS1006: Expected ')': }
(737,9-10): run-time error JS1008: Expected '{': }
(737,10-11): run-time error JS1195: Expected expression: ,
(738,29-30): run-time error JS1010: Expected identifier: (
(745,21-22): run-time error JS1005: Expected '(': {
(747,9-10): run-time error JS1006: Expected ')': }
(747,9-10): run-time error JS1008: Expected '{': }
(749,2-3): run-time error JS1195: Expected expression: )
(783,1): run-time error JS1009: Expected '}'
(783,1): run-time error JS1107: Expecting more source characters
(728,20-31): run-time error JS1301: End of file encountered before function is properly closed: function ()
(783,1): run-time error JS1107: Expecting more source characters
(783,1): run-time error JS1009: Expected '}'
(705,15-26): run-time error JS1301: End of file encountered before function is properly closed: function ()
(783,1): run-time error JS1107: Expecting more source characters
(783,1): run-time error JS1006: Expected ')'
 */
$(document).ready(function () {
    console.log('chau');
    var windowInnerHeight, intervalTimer;
    var userAgent = navigator.userAgent.toLowerCase();
    var footerTop = parseInt($(".footer").css('top'));
    var stopChangeFooter;

    $(".loginID,.loginPW").focus(function (e) {
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

        $('html,body').animate({ scrollTop: bodyScrollTop + inputOffsetTop - headerTop }, movingSpeed);
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
    $("#callPopup").click(function () {
        $("#popup_open").show();
        $(".footer_DW_open").removeClass("on");
        //var bodyScroll = $(window).scrollTop();
        //$('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
    });
    $("#callPopup2").click(function () {
        $("#popup_open2").show();
        $(".footer_DW_open").removeClass("on");
        //var bodyScroll = $(window).scrollTop();
        //$('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
    });
    $("#callPopup3").click(function () {
        $("#popup_open").show();
        $(".footer_DW_open").removeClass("on");
        //var bodyScroll = $(window).scrollTop();
        //$('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
    });
    $(".popup_close").click(function () {
        $(".mask,.mask_join,.mask_all").hide();
        var bodyScroll = $(window).scrollTop();
        $('.container_main').removeAttr('style');
        $(window).scrollTop(bodyScroll);
    });
    $(".popupCI").closest('.mask_all').click(function () {
        $(this).hide();
    });
    $(".popupCI").closest('.mask_all *').click(function () {
        event.stopPropagation();
    });
    $("#VRlottery").click(function () {
        $("#popup_open").show();
        $(".footer_DW_open").removeClass("on");
        var bodyScroll = $(window).scrollTop();
        $('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
    });
    $("#openGame").click(function () {
        $("#popup_open").hide();
        $("#popup_Game").show();
    });
    $("#Popup_excl").click(function () {
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
    $("#accountID").focusout(function () {
        $("#accountID_open").show();
    });
    $("#accountID_open").children("a").click(function () {
        $("#accountID_open").hide();
    });
    //æœå°‹æ¢ä»¶
    $("#Search_T").click(function () {
        if ($("#Search_In").css("display") == "none") {
            $("#Search_In").slideDown("fast");
            $(this).addClass("on");
        } else {
            $("#Search_In").slideUp("fast");
            $(this).removeClass("on");
        }
    });
    //å±•é–‹é¸å–®-é‡‘æµé¸æ“‡
    $(".btn_depositSelect_T").click(function () {
        if ($(this).parent(".deposit_select").children(".depositSelect_In").css("display") == "none") {
            $(this).parent(".deposit_select").children(".depositSelect_In").slideDown("fast");
            $(this).addClass("on");
        } else {
            $(this).parent(".deposit_select").children(".depositSelect_In").slideUp("fast");
            $(this).removeClass("on");
        }
    });
    $(".btn_newsSelect_T").click(function () {
        if ($(this).parent(".news_select").children(".newsSelect_In").css("display") == "none") {
            $(this).parent(".news_select").children(".newsSelect_In").slideDown("fast");
            $(this).addClass("on");
        } else {
            $(this).parent(".news_select").children(".newsSelect_In").slideUp("fast");
            $(this).removeClass("on");
        }
    });
    $(".loginID,.loginPW").focus(function () {
        $('.login_main').addClass("on");
    });
    $(".loginID,.loginPW").blur(function () {
        $('.login_main').removeClass("on");
    });

    //ææ¬¾å°ˆå€-é€è¡Œå¸³è™Ÿ
    $("#btn_bankID").click(function () {
        if ($("#bankID_In").css("display") == "none") {
            $("#bankID_In").slideDown("fast");
        } else {
            $("#bankID_In").slideUp("fast");
        }
    });
    $("#bankID_In").click(function () {
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
    $(".news_listT").click(function () {
        if ($(this).parent(".news_list").children(".news_listIn").css("display") == "none") {
            $(this).parent(".news_list").children(".news_listIn").slideDown("fast");
            $(this).addClass("on");
        } else {
            $(this).parent(".news_list").children(".news_listIn").slideUp("fast");
            $(this).removeClass("on");
        }
    });
    //æ´»å¨ç‚¹æ•°-é¡åˆ¥åˆ‡æ›
    $(".btn_BRSelect_T").click(function () {
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
    $(".bonusRec_listT").click(function () {
        if ($(this).parent(".bonusRec_list").children(".bonusRec_listIn").css("display") == "none") {
            $(this).parent(".bonusRec_list").children(".bonusRec_listIn").slideDown("fast");
            $(this).addClass("on");
        } else {
            $(this).parent(".bonusRec_list").children(".bonusRec_listIn").slideUp("fast");
            $(this).removeClass("on");
        }
    });
    //æœ€æ–°å„ªæƒ 
    $(".bonus_list").click(function () {
        if ($(this).children(".bonus_listIn").css("display") == "none") {
            $(this).children(".bonus_listIn").slideDown("fast");
            $(this).children(".bonus_listT").addClass("on");
        } else {
            $(this).children(".bonus_listIn").slideUp("fast");
            $(this).children(".bonus_listT").removeClass("on");
        }
    });
    $('.bonus_listIn').click(function (e) {
        event.stopPropagation();
    });
    $('.WCtop').click(function () {
        // å…ˆé—œé–‰
        $('.WC_Table_member').find('.on').not(this).toggleClass('on').siblings(".WCbottm").slideToggle();
        // å¾Œæ‰“é–‹
        $(this).toggleClass('on').siblings(".WCbottm").slideToggle();
    })
    $(".BAR_list:first").addClass("on");
    $(".BAR_list").click(function () {
        if ($(this).children(".BAR_listIn").css("display") == "none") {
            $(this).addClass("on");
        } else {
            $(this).removeClass("on");
        }
    });
    //å…³äºæˆ‘ä»¬/ç‰Œç…§å±•ç¤º
    $(".license_arrow").click(function () {
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
    $(".btn_helpSelect_T").click(function () {
        if ($(this).parent(".helpSelect").children(".helpSelect_In").css("display") == "none") {
            $(this).parent(".helpSelect").children(".helpSelect_In").slideDown("fast");
            $(this).addClass("on");
        } else {
            $(this).parent(".helpSelect").children(".helpSelect_In").slideUp("fast");
            $(this).removeClass("on");
        }
    });
    //å¸®å©ä¸­å¿ƒ
    $(".FAQ_listT").click(function () {
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
    $('[class*="btn_GL"],.btn_CI,.btn_studio,.btn_chat').click(function () {
        if (maintainTimeout) {
            clearTimeout(maintainTimeout);
        }

        if ($(this).hasClass("maintain") || $(this).closest(".container_main").hasClass("container_login")) {
            $('.gameMainTain_in').not($(this).find('.gameMainTain_in')).hide();
            $('.footer_maintain').hide();

            $(this).find('.gameMainTain_in').toggle();

            maintainTimeout = setTimeout(function () {
                $('.gameMainTain_in').hide();
            }, 3000);
        }
    });
    $(function () {
        $(document).bind('click touchend', function (e) {
            var target = $(e.target);
            if (target.closest('[class*="btn_GL"].maintain,.container_login [class*="btn_GL"],.popupCI .maintain').length == 0) {
                $('.gameMainTain_in').hide();
            }
        })
    })
    // T24302: ç§»é™¤ :not(.btn_footer_DW)' åˆ¤æ–·ï¼Œæ”¹ç”±å‡½å¼å…§åˆ¤æ–·
    $(document).on('click', '.footer_list.off,.btn_footer_deposit.off,.btn_footer_withdrawal.off,.btn_footer_transfer.off', _.debounce(function () {
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

        maintainTimeout = setTimeout(function () {
            console.log("timeout..");
            if (elemMaintain.css("display") === "block") {
                console.log("hide");
                elemMaintain.hide();
            }
        }, 3000);
    }, 300, { leading: true, trailing: false }));
    //è£œå……è¨»å†/zaloPayæ³¡æ³¡æç¤ºè¦–çª— æ³¨æ„å¯«åœ¨é€™é‚ä¸æœƒæœ‰æ•ˆæœ å·²ç§»è‡³RegisterAdditionally.Controller.ts è£¡
    $('.btn_prompt:not(.keyboard)').click(function () {
        $('.txt_prompt').not($(this).siblings()).hide().parent().css("z-index", "1");
        $(this).siblings('.txt_prompt').show().parent().css("z-index", "2");
    });
    $('.btn_prompt.keyboard').click(function () {
        $('.txt_prompt').not($(this).siblings()).hide().parent().css("z-index", "1");
        if ($(this).siblings('.numInputArea').hasClass("on")) {
            $(this).siblings('.txt_prompt').hide().parent().css("z-index", "1");
        } else {
            $(this).siblings('.txt_prompt').show().parent().css("z-index", "2");
        }
    });

    //èå¤©å®¤ç»´æ¤
    $('.btn_chat.off').click(function () {
        if (maintainTimeout) {
            clearTimeout(maintainTimeout);
        }
        var elemMaintain = $(this).find('.chatMaintain');
        $('.chatMaintain').not(elemMaintain).hide();
        elemMaintain.toggle();

        maintainTimeout = setTimeout(function () {
            if (elemMaintain.css("display") === "block") {
                elemMaintain.hide();
            }
        }, 3000);
    });
    $(function () {
        $(document).bind('click touchend', function (e) {
            var target = $(e.target);
            if (target.closest(".btn_chat.off,.chatMaintain").length == 0) {
                $('.chatMaintain').hide();
            }
        })
    })

    $(document).on('focus', ':text,:password,textarea', function (event) {
        var timeout = userAgent.match(/(\(ipod|\(iphone|\(ipad)/) ? 500 : 0;

        setTimeout(function () {
            $(".mask").addClass("mask_noBottom");
        }, timeout);
        windowInnerHeight = window.innerHeight;
        $(".footer").css("top", footerTop);
        clearTimeout(stopChangeFooter);
    });

    $(document).on('focusout', ':text,:password,textarea', function (event) {
        FooterRecover();
    });

    $(window).resize(function () { //checking for window resize event
        if (window.innerHeight != windowInnerHeight) {
            FooterRecover();
        }
    });

    function FooterRecover() {
        var timeout = userAgent.match(/(\(ipod|\(iphone|\(ipad)/) ? 600 : 0;

        stopChangeFooter = setTimeout(function () {
            $(".mask").removeClass("mask_noBottom");
            $(".footer").css("top", "");
        }, timeout);
    }

    //ç½®é ‚KU APPä¸‹è¼‰å»£å‘
    $('.btn_ADclose').click(function () {
        $('.btn_AD').remove();
    });

    //æˆ‘/æœƒå“¡ä¸­å¿ƒ
    $(".memberDrop").click(function () {
        $(this).siblings('.memberDrop').removeClass("on").find('ul').slideUp("fast");
        $(this).toggleClass("on");
        if ($(this).hasClass("on")) {
            $(this).find('ul').slideDown("fast");
        } else {
            $(this).find('ul').slideUp("fast");
        }
    });
    $(".memberDrop ul").click(function () {
        event.stopPropagation();
    });

    //æ–°æ‰‹å¯¼å¼•è§†é¢‘-ç¾å¥³å½±éŸ³å¯¼è§ˆ
    $(".girlTitle > li").click(function () {
        $(this).addClass('on').siblings().removeClass('on');
        switch ($(this).attr('id')) {
            case "btn_girlC01":
                $(this).parent().animate({ scrollLeft: 0 }, 500);
                $('#img_girlC01,#girlC01').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                break;
            case "btn_girlC02":
                $(this).parent().animate({ scrollLeft: 0 }, 500);
                $('#img_girlC02,#girlC02').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                break;
            case "btn_girlC03":
                $('#img_girlC03,#girlC03').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                break;
            case "btn_girlC04":
                $(this).parent().animate({ scrollLeft: 200 }, 500);
                $('#img_girlC04,#girlC04').fadeIn().addClass('on').siblings('img,[class*="girlContent"]').removeClass('on').hide();
                break;
            case "btn_girlC05":
                $(this).parent().animate({ scrollLeft: 200 }, 500);
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
            }
            else {
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
                renderBullet: function (index, className) {
                    return `<div class="${className}" >
                                                <div class="${myBullet[index].iconClass}"></div>
                                                <h2>${myBullet[index].name}</h2>
                                            </div >`
                }
            },
            on: {
                slideChangeTransitionEnd: function () {
                    $('.swiper-slide').scrollTop(0);

                    if (localStorage) {
                        localStorage.setItem(setKey, this.activeIndex);
                    }
                }
            }
        });

        var startScroll, touchStart, touchCurrent;
        swiper1.slides.on('touchstart', function (e) {
            startScroll = Math.floor(this.scrollTop);
            touchStart = e.targetTouches[0].pageY;/*å–å¾—åˆæ¬¡è§¸æ‘¸*/
        }, true);

        swiper1.slides.on('touchmove', function (e) {
            touchCurrent = e.targetTouches[0].pageY;/*å–å¾—ç•¶å‰è§¸æ‘¸*/
            var touchesDiff = touchCurrent - touchStart;/*ç¬¬ä¸€æ¬¡è§¸æ‘¸èˆ‡ç•¶å‰è§¸æ‘¸ ç„å·®è·*/
            var slide = this;
            var onlyScrolling =/*åˆ¤æ–·æ˜¯å¦æ»¾å‹•*/
                (slide.scrollHeight > slide.offsetHeight) && //ç•¶slideå¯æ»¾å‹•æ™‚æ‰å…è¨±
                (
                    (touchesDiff < 0 && startScroll === 0) || //å¾ä¸é‚ç·£é–‹å§‹æ»¾å‹•åˆ°åº•éƒ¨
                    (touchesDiff > 0 && startScroll === (slide.scrollHeight - slide.offsetHeight)) || //å¾åº•éƒ¨é‚ç·£é–‹å§‹æ»¾å‹•åˆ°é ‚éƒ¨
                    (startScroll > 0 && (startScroll < (slide.scrollHeight - slide.offsetHeight) &&
                        (slide.scrollHeight < (slide.clientHeight + slide.scrollTop - 10) || touchesDiff > 0))) //å¾ä¸­é–“é–‹å§‹
                );
            if (onlyScrolling) {
                e.stopPropagation();/*é—œé–‰silde touchmoveäº‹ä»¶*/
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
    $('.mainMenu').click(function () { $(this).toggleClass('active'); })

    /*å¾—çåå–®_å–æ¶ˆé¸å–*/
    $(document).bind('touchstart', function (e) {
        /*é¦–é _é¸å–®& å¾—çåå–®*/
        if ($(e.target).closest(`.mainMenu,.winner li,.giftList li`).length <= 0 && $('.mainMenu,.winner li,.giftList li').hasClass('active')) {
            $('.mainMenu,.winner li,.giftList li').removeClass('active')
        }
    })

    /*å½ˆçª—æŒ‰éˆ•å›é¥‹*/
    $('.popMsgSend,.memberSend,.selectBotton,.gameLink_btn').on('touchstart', function () {
        $(this).addClass('active')
    })

    $('.popMsgSend,.memberSend,.selectBotton,.gameLink_btn').on('touchend', function () {
        $(this).removeClass('active')
    })

    //æœ€æ–°å„ªæƒ -ç›´æ’­
    $("#callBV").click(function () {
        $('#bonusVideo').fadeIn().find('video')[0].play();
        $(".footer_DW_open").removeClass("on");
        var bodyScroll = $(window).scrollTop();
        $('.container_main').css({ 'position': 'fixed', 'top': '-' + bodyScroll + 'px' });
    });

    $(".btn_closeBV").click(function () {
        $(this).closest('.bonusVideo').fadeOut().find('video').get(0).pause();
        var bodyScroll = $(window).scrollTop();
        $('body').removeAttr('style');
        $(window).scrollTop(bodyScroll);
    });

    $(".btn_weekVideo li").click(function () {
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
document.addEventListener("touchstart", function () { }, true);;
$(document).ready(function () {
    //å€‹äººè¨æ¯
    var checkAllStau = false;

    $(".pMail_listTitle").off();
    $("div.pMail").on("click", ".pMail_listTitle,.icon_arrow", function () {
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

    $("div.pMail").on("click", ".pMailCheckbox", function () {
        if (!$(this).is(".on")) {
            $(this).addClass("on");
        } else {
            $(this).removeClass("on");
        }
    });

    $("#BtnSelectAll").on("click", function () {
        $(".pMailCheckbox").addClass("on");
    });

    $("#BtnSelectAllCancel").on("click", function () {
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
    $(document).on('touchstart', function (event) {
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
    $("#callLogin").click(function () {
        var display = $(".mask,.mask_join,.mask_all").css("display");

        if (display === "block") {
            $('.container_main').css({ 'position': 'fixed', 'top': '0px' });
        }
        else {
            $('.container_main').removeAttr('style');
        }
    });
    // ç•¶é é¢æ˜¯å¥½ç¦®äº”é¸ä¸€æ™‚ï¼Œæ§åˆ¶ä¸é¢ç„menu é—œé–‰
    var closeMenu = function (event) {
        event.stopPropagation();

        if (event.originalEvent.data != "closemenu") {
            return;
        }

        $('.inforMDropOUT').slideUp('fast');
        $('div.icon_inforMoney').removeClass('on');
    };

    $(window).on("message", closeMenu);

    // T45861 ç§»é™¤ä½¿ç¶²é ä¸å¯æ»¾å‹•
    $(".popup_close").click(function () {
        $('html,body').removeClass('ovfHiden');
    });
});;
var oriApp = (function () {
    return {
        changeTitle: function (title) {
            if (typeof JBS != "undefined") { //å®‰å“
                JBS.ChangeTitle(title);
            } else if (window.webkit) { //ios
                window.webkit.messageHandlers.ChangeTitle.postMessage(title);
            }
        },
        shareRefLink: function (url) { //åˆ†äº«APPé¢æ¿
            if (typeof JBS != "undefined") { //å®‰å“
                JBS.shareRefLink(url);
            } else if (typeof window['webkit'] != "undefined" && window['webkit']) { //ios
                window['webkit'].messageHandlers.shareRefLink.postMessage(url);
            }
        },
        backUrl: function (url) { //å›ä¸ä¸€é 
            if (typeof JBS != "undefined") { //å®‰å“
                JBS.backUrl(url);
            } else if (typeof window['webkit'] != "undefined" && window['webkit']) { //ios
                window['webkit'].messageHandlers.backUrl.postMessage(url);
            }
        },
        goBackUrl: function () { //å‰å¾€ä¸ä¸€é 
            try {
                if (typeof JBS != "undefined") { //å®‰å“
                    JBS.goBackUrl();
                } else if (typeof window['webkit'] != "undefined" && window['webkit']) { //ios
                    window['webkit'].messageHandlers.goBackUrl.postMessage("goBackUrl");
                }
            } catch {
            }
        },
        CheckGame: function (path) { //é€²å…¥éæˆ²
            try {
                if (typeof JBS != "undefined") { //å®‰å“
                    JBS.CheckGame(path);
                } else if (typeof window['webkit'] != "undefined" && window['webkit']) { //ios
                    window['webkit'].messageHandlers.CheckGame.postMessage(path);
                }
            } catch {
            }
        }
    };
})();;
var embeddedApp = (function () {
    var _SaveImageCallback;

    return {
        openCslive: function (url) {
            if (typeof JBS != "undefined") { //å®‰å“
                JBS.openCslive(url);
            } else if (window.webkit) { //ios
                window.webkit.messageHandlers.openCslive.postMessage(url);
            } else {
                window.open("/OnlineCS", "_blank");
            }
        },
        initSaveImagesCallback: function (callback) {
            //APPä¸‹è¼‰å®Œåœ–ç‰‡ä¸»å‹•å›CAllä»‹é¢
            _SaveImageCallback = callback;
        },
        saveImages: function (url, callback) {
            if (window.webkit) {
                window.webkit.messageHandlers.saveImages.postMessage(url);
            }
        },
        saveImagesCallback: function (result) {
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