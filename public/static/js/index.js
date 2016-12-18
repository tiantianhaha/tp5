/*
 *@Explain: new version2.0 
 *@Use: for index and experience
*/

$(".imgList dl:nth-child(2n)").addClass("clemr");

$(function(){
	/*	开启全程体验Button
	----------------------------------------------------------------------------------------------------*/
	$("#clickExper").click(function(event){
		event.preventDefault();
		var _this = $(this);
		$("html").stop().animate({ scrollTop: $(_this.attr("href")).offset().top },1500,function(){
			 $(_this.attr("href")).fadeOut(500,function(){
				$("#exper").fadeIn(100);
			 });
		});
	});
	
	$(".experSec").hover(function(){
		$(this).find(".detail_layer").fadeIn(500);
	},function(){
		$(this).find(".detail_layer").fadeOut(500);
	})
	
	 var body_h = $('body').height();

    $('.mask').css('height', body_h);

    $('.login_box_n .close').on('click', function () {
        $('.login_box_n,.mask').fadeOut();
    });

    $('#hd .nav li').hover(function () {
        var left_d = $(this).position().left;
        var left_n = left_d + Math.round(($(this).width() - 150) / 2);
        $('#hd .nav .bg').stop().animate({ 'left': left_n }, 300);
    }, function () {
        var peth = $(this).parent().find('.on');
        var left_a = peth.position().left;
        var left_b = left_a + Math.round((peth.width() - 150) / 2);
        $('#hd .nav .bg').stop().animate({ 'left': left_b }, 300);
    });

    if($('#hd .nav .on').length > 0){
    	var no_l = $('#hd .nav .on').position().left + Math.round(($('#hd .nav .on').width() - 150) / 2);
        $('#hd .nav .bg').css('left', no_l);
    }

    $('#hd .login_box_h .user').hover(function () {
        $(this).stop().animate({ 'height': '108px' }, 300);
    }, function () {
        $(this).stop().animate({ 'height': '27px' }, 300);
    });

    $('#hd .login_box_h .user a').hover(function () {
        var top_d = $(this).position().top;
        $('#hd .login_box_h .user .hover_bg').stop().animate({ 'top': top_d }, 200);
    }, function () {
        $('#hd .login_box_h .user .hover_bg').stop().animate({ 'top': 0 }, 200);
    });

    $('#hd .search_box .text').focusin(function () {
        $(this).parent().find('.val').hide();
    });
    $('#hd .search_box .text').focusout(function () {
        if ($(this).val() == "") {
            $(this).parent().find('.val').show();
        };
    });
	
	
	$("#freeExper li").hover(function () {
        $(this).find('.lucency').show();
    }, function () {
        $(this).find('.lucency').hide();
    });
	$("#freeExper li:nth-child(3n)").addClass("clemr");
	
	$("#thumbnail li").click(function () {
		var f_value = $(this).find(".aPosi").attr("href");
		var flash_html = '<object width="868" height="538" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param id="video_url1" value="' + f_value + '" name="movie"><param value="high" name="quality"><param value="transparent" name="wmode"><embed id="video_url2" width="868" height="538" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="' + f_value + '"></object>';
	
		$('.playArea .playBox').html(flash_html);
	
		$("#thumbnail li").find(".aPosi").removeClass("aBlue");
		$(this).find(".aPosi").addClass("aBlue");
		return false;
	}).hover(function(){
		$(this).find(".bgBlack").show();
	},function(){
		$(this).find(".bgBlack").hide();
	});

	if($("#jqScroll").length > 0){
		$("#jqScroll").jscroll({
			W:"13px",    
	        Bg:"#363636",  
			Bar:{
	            Bd:{    //设置滚动滚轴边框颜色：鼠标离开(默认)，经过
	                Out:"#50c8d7",
	                Hover:"#50c8d7"
	            },
				 Bg:{    //设置滚动条滚轴背景：鼠标离开(默认)，经过，点击
	                Out:"#50c8d7",
	                Hover:"#50c8d7",
	                Focus:"#50c8d7"
	            }
	        }, 
			Btn:{
	            btn:false,    //是否显示上下按钮 false为不显示
	        }, 
		});
	}
})

