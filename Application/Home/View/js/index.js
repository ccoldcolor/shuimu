$(function () {
    /*index.html*/
    $(".header_box,.jilu,.guanggao_info,.guanggao,.qixuan_info,.qixuan,.jianzhu_info,.jianzhu,.partner").backgroundcover({
        safearea: '0,0,0,0'
    });
    /*case.html*/
    function getIEVersion() {
        var ua = navigator.userAgent;
        var ver = 0;
        if (ua) {
            if (ua.match(/MSIE\s+([\d]+)\./i)) {
                ver = RegExp.$1;
            } else if (ua.match(/Trident.*rv\s*:\s*([\d]+)\./i)) {
                ver = RegExp.$1;
            }
        }
        return parseInt(ver);
    }

    //设置case.html在IE8中为纯色，IE9+为垂直平铺的图片
    var isIE = /msie/.test(navigator.userAgent.toLowerCase());
    if (isIE) {
        var IEVer = getIEVersion();
        var background = '';
        if (IEVer) {
            switch (IEVer) {
                case 8:
                    background = '#fbf9f7';
                    break;
                default:
                    background = '#fbf9f7 url("img/caseBg.jpg") repeat-y';
                    break;
            }
        }
        // $(".case_box,.video_box,.about_box").css({background: background, backgroundSize: "100% auto"});
    }
    //IE10+ blur
    if (typeof document.msHidden != "undefined") {
        [].slice.call(document.querySelectorAll(".shadow")).forEach(function (img) {
            img.classList.add("hidden");
            var myImage = new Image(), src = img.src;
            img.insertAdjacentHTML("afterend", '<svg class="blur">\
			<image xlink:href="' + src + '" src="' + src + '" width="302" height="302" y="10" x="0" filter="url(#blur)" />\
		</svg>');
        });
    }
	//鼠标滑过图片放大和显示阴影效果
    var imgHref = $(".case_href");
    imgHref.hover(function () {
        $(this).find(".shadow").animate({opacity: 0.4}, 200);
        $(this).find(".blur").animate({opacity: 0.5}, 200);
    }, function () {
        $(this).find(".shadow").animate({opacity: 0}, 200);
        $(this).find(".blur").animate({opacity: 0}, 200);
    });
    /*content.html*/
    var btn_upload = $(".video_upload"),btn_name = btn_upload.name, form = $(".video_form");
    btn_upload.on('click',function () {
        if(btn_name == "hide"){
            form.fadeIn("300");
            btn_name = "show";
        }else{
            form.fadeOut("300");
            btn_name = "hide";
        }
    });
});