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
<div class="video_box">
    <img src="<?php echo ($TEMPLATE_PATH); ?>img/video_ZSBg.png" class="video_zs" alt="视频链接背景装饰">
    <div class="content box">
        <p class="video_title"><span>经典</span>案例链接</p>
        <ul class="video_list01">
            <li>
                <a href="content.html" class="case_href video01">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic03.png" alt="跋山涉水">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic03.png" alt="跋山涉水" class="shadow">
                </a>
            </li>
            <li>
                <a href="content.html" class="case_href video02">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic04.png" alt="THE LOST TOMB">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic04.png" alt="THE LOST TOMB" class="shadow">
                </a>
            </li>
            <li>
                <a href="content.html" class="case_href video03">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic05.png" alt="跋山涉水">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/casePic05.png" alt="跋山涉水" class="shadow">
                </a>
            </li>
        </ul>
        <ul class="video_list02">
            <li>
                <a href="content.html" class="case_href video04">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/videoPic01.png" alt="本草">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/videoPic01.png" alt="本草" class="shadow">
                </a>
            </li>
            <li class="video05">
                <a href="content.html" class="case_href video05">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/videoPic02.png" alt="平安岛">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/videoPic02.png" alt="平安岛" class="shadow">
                </a>
            </li>
        </ul>
        <div class="video_type">
            <p class="type02">视频链接</p>
            <p class="type01">经典案例</p>
        </div>
    </div>
    <div class="content">
        <p class="video_title"><span>其它</span>案例链接</p>
        <table border="0" cellspacing="0" class="video_other">
            <tr>
                <th>海洋故事</th>
                <td>
                    <a href="content.html">1.http://www.youtube.com/watch?v=c6n9NLM65DI&feature=related</a>
                </td>
            </tr>
            <tr>
                <th>玛莎</th>
                <td>
                    <a href="content.html">2.http://www.youtube.com/watch?v=c6n9NLM65DI&feature=related</a>
                </td>
            </tr>
            <tr>
                <th>单车旅记</th>
                <td>
                    <a href="content.html">3.http://www.youtube.com/watch?v=c6n9NLM65DI&feature=related</a>
                </td>
            </tr>
            <tr>
                <th>汤姆巡航</th>
                <td>
                    <a href="content.html">4.http://www.youtube.com/watch?v=c6n9NLM65DI&feature=related</a>
                </td>
            </tr>
        </table>
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