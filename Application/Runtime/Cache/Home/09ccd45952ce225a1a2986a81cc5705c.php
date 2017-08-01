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
<div class="about_box">
    <img src="<?php echo ($TEMPLATE_PATH); ?>img/about_ZSBg.png" class="about_zs" alt="关于我们背景装饰">
    <div class="content">
        <div class="com_info">
            <p class="video_title about_title"><span>公司</span>简介</p>
            <p class="com_infoText">／河北水木文化传播有限公司是专业从事影视广告、现代企业宣传片、专题</p>
            <p class="com_infoText">片、纪录片拍摄及制作的影视机构。公司秉承</p>
            <p class="com_infoText">“弱水三千，只取一木”</p>
            <p class="com_infoText">文化理念，以创意为引导，着眼于前卫视角，把握设计思想脉搏／</p>
            <p class="com_infoText">运用现代化的设计理念及精益求精的专业态度，为客户提供优良的策划及制作服务／</p>
            <p class="com_infoText">创造出有创意的、切实可行的影片和营销方案，为党政机关、企业及其产品创造良好的视觉</p>
            <p class="com_infoText">内容，提升形象，创造优势，开创美好前景／ </p>
        </div>
        <div class="com_service">
            <p class="video_title about_title no_bottom"><span>公司</span>文化</p>
            <p class="service_title">服务内容</p>
            <ul class="service_box">
                <li class="service01">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/chess_black.png" alt="黑色棋子" class="chess_black">
                    <p class="service_text">企业形象类宣传片</p>
                </li>
                <li class="service02">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/chess_white.png" alt="白色棋子" class="chess_white">
                    <p class="service_text">党政机关类宣传片</p>
                </li>
                <li class="service03">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/chess_black.png" alt="黑色棋子" class="chess_black">
                    <p class="service_text">企业产品类宣传片／官告片</p>
                </li>
                <li class="service04">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/chess_black.png" alt="黑色棋子" class="chess_black">
                    <p class="service_text">能源类企业宣传片</p>
                </li>
                <li class="service05">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/chess_white.png" alt="白色棋子" class="chess_white">
                    <p class="service_text">房地产类宣传片</p>
                </li>
                <li class="service06">
                    <img src="<?php echo ($TEMPLATE_PATH); ?>img/chess_black.png" alt="黑色棋子" class="chess_black">
                    <p class="service_text">个人形象MV</p>
                </li>
            </ul>
        </div>
        <p class="service_bottomT">河北水木文化传播有限公司专业从事各类宣传片及制作／</p>
        <p class="service_bottomT align_right">致力于创造良好视觉内容，提升形象，创造优势，开创美好前景／</p>
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