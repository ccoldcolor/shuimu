<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ($TEMPLATE_PATH); ?>css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ($TEMPLATE_PATH); ?>css/iconfont.css"/>
    <title>河北水木文化传播有限公司</title>
</head>
<body>
<div class="header_box">
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_headerBgL.png" class="header_bgLeft" alt="header左侧背景" />
	<img src="<?php echo ($TEMPLATE_PATH); ?>img/index_headerBgR.png" class="header_bgRight" alt="header右侧背景" />
    <div class="content">
        <a href="index.html" class="logo">
            <img src="<?php echo ($TEMPLATE_PATH); ?>img/logoT.png" width="240" alt="河北水木文化logo">
        </a>
    </div>
    <div class="nav_box">
        <div class="content">
            <ul class="nav">
                <li>
                    <a href="/" <?php if($now_action == 'index'): ?>class="active"<?php endif; ?>>网站首页</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/classic_case');?>" <?php if($now_action == 'classic_case'): ?>class="active"<?php endif; ?>>经典案例</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/video');?>" <?php if($now_action == 'video'): ?>class="active"<?php endif; ?>>视频链接</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/about');?>" <?php if($now_action == 'about'): ?>class="active"<?php endif; ?>>关于我们</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/contact');?>" <?php if($now_action == 'contact'): ?>class="active"<?php endif; ?>>联系我们</a>
                </li>
            </ul>
        </div>
    </div>  
<svg class="hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <filter id="blur">
            <feGaussianBlur stdDeviation="4"></feGaussianBlur>
        </filter>
    </defs>
</svg>
<div class="case_box">
    <img src="<?php echo ($TEMPLATE_PATH); ?>img/caseZSBg_left.png" class="case_zs zs_left" alt="案例背景装饰">
    <img src="<?php echo ($TEMPLATE_PATH); ?>img/caseZSBg_right.png" class="case_zs zs_right" alt="案例背景装饰">
    <div class="content">
        <div class="case case01">
            <a href="content.html" class="case_href">
                <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic01.png" alt="经典案例">
                <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic01.png" alt="经典案例" class="shadow">
            </a>
            <div class="case_infoBox">
                <p>建筑漫游</p>
                <p>企宣片</p>
                <p>广告片</p>
                <p>纪录片</p>
                <p class="info_title">经典案例</p>
            </div>
        </div>
        <div class="case case02">
            <p class="case_title">纪录片</p>
            <a href="content.html" class="case_href">
                <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic02.png" alt="纪录片">
                <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic02.png" alt="纪录片" class="shadow">
            </a>
            <p class="case_tip">以真实生活为创作素材，以真人真事为表现对象</p>
            <p class="case_tip">并对其进行艺术的加工与展现</p>
            <p class="case_tip">以电影为例，电影的诞生始于纪录片的创作</p>
        </div>
        <div class="case case03">
            <ul>
                <li>
                    <p class="case_title">广告片</p>
                    <a href="content.html" class="case_href">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic03.png" alt="广告片">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic03.png" alt="广告片" class="shadow">
                    </a>
                    <p class="case_tip">集信息高度集中、高度浓缩的节目</p>
                    <p class="case_tip">视听兼备、声画统一</p>
                    <p class="case_tip">广告片兼有报纸、广播和电影的视听特色</p>
                </li>
                <li>
                    <p class="case_title">企宣片</p>
                    <a href="content.html" class="case_href">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic04.png" alt="企宣片">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic04.png" alt="企宣片" class="shadow">
                    </a>
                    <p class="case_tip">集信息高度集中、高度浓缩的节目</p>
                    <p class="case_tip">视听兼备、声画统一</p>
                    <p class="case_tip">广播和电影的视听特色</p>
                </li>
                <li>
                    <p class="case_title">建筑漫游</p>
                    <a href="content.html" class="case_href">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic05.png" alt="建筑漫游">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic05.png" alt="建筑漫游" class="shadow">
                    </a>
                    <p class="case_tip">利用虚拟现实技术对现实中的建筑</p>
                    <p class="case_tip">进行三维仿真具有</p>
                    <p class="case_tip">人机交互性、真实建筑空间感</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="case_other">
        <div class="content">
            <ul>
                <li>
                    <a href="content.html" class="case_href other01">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/case_otherPic01.png" alt="大鱼海棠">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/case_otherPic01.png" alt="大鱼海棠" class="shadow">
                    </a>
                </li>
                <li>
                    <a href="content.html" class="case_href other02">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/case_otherPic02.png" alt="使徒行者">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/case_otherPic02.png" alt="使徒行者" class="shadow">
                    </a>
                </li>
                <li>
                    <a href="content.html" class="case_href other03">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/case_otherPic03.png" alt="咸鱼">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/case_otherPic03.png" alt="咸鱼" class="shadow">
                    </a>
                </li>
                <li>
                    <a href="content.html" class="case_href other04">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/case_otherPic04.png" alt="THE LOST TOMB">
                        <img src="<?php echo ($TEMPLATE_PATH); ?>img/case_otherPic04.png" alt="THE LOST TOMB" class="shadow">
                    </a>
                </li>
            </ul>
            <p class="other_titleBg">其它案例</p>
        </div>
    </div>
<div class="partner">
    <div class="content">
        <div class="partner_title">
            <p><span>合作客户</span></p>
        </div>
        <div class="partner_list">
            <ul>
                <li>高邑县人民检察院</li>
                <li>北京百变空间网络科技有限公司</li>
                <li>石家庄云高网络科技有限公司</li>
                <li>石家庄裕华区法院</li>
                <li>糖烟酒周刊</li>
            </ul>
            <ul>
                <li>兴业银行石家庄分行</li>
                <li>光大银行石家庄分行</li>
                <li>糖烟酒周刊</li>
                <li>光大银行石家庄分行</li>
                <li>石家庄裕华区法院</li>
            </ul>
            <ul>
                <li>高邑县人民检察院</li>
                <li>北京百变空间网络科技有限公司</li>
                <li>石家庄云高网络科技有限公司</li>
                <li>兴业银行石家庄分行</li>
            </ul>
        </div>
    </div>
    <a href="index.html" class="logo_bottom">
        <img src="<?php echo ($TEMPLATE_PATH); ?>img/logoB.png" alt="底部logo" width="180">
    </a>
</div>

<div class="footer">
    <p class="footer_top">“弱水三千，只取一木”</p>
    <p class="footer_bottom">河北水木文化传播有限公司&nbsp;|&nbsp;版权所有2008—2016&nbsp;冀ICP备16010573号</p>
</div>
<script src="<?php echo ($TEMPLATE_PATH); ?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ($TEMPLATE_PATH); ?>js/jquery.backgroundcover.min.js" type="text/javascript"></script>
<script src="<?php echo ($TEMPLATE_PATH); ?>js/index.js" type="text/javascript"></script>
</body>
</html>