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
<div class="connect_box">
    <img src="<?php echo ($TEMPLATE_PATH); ?>img/about_ZSBg.png" class="about_zs" alt="联系我们背景装饰">
    <div class="content">
        <div class="connect_info">
            <div class="connect_left" id="map"></div>
            <div class="connect_right">
                <p class="connect_title">联系方式：</p>
                <ul>
                    <li class="no_left">
                        <a href="">
                        	<span class="icon iconfont icon-stroke_weixin"></span>
	                        <div class="tip weixin">
	                        	<img src="<?php echo ($TEMPLATE_PATH); ?>img/weixin_erweima.png" alt="微信二维码" width="120" />
	                        </div>
                        </a>
                        <p>微信联系</p>
                    </li>
                    <li>
                        <a href="">
                        	<span class="icon iconfont icon-dingyue"></span>
                        	<div class="tip dingyue">
	                        	<img src="<?php echo ($TEMPLATE_PATH); ?>img/dingyue_erweima.png" alt="微信二维码" width="120" />
	                        </div>
                        </a>
                        <p>订阅信息</p>
                        
                    </li>
                    <li>
                        <a href="">
                        	<span class="icon iconfont icon-stroke_weibo"></span>
                        	<div class="tip weibo">
	                        	<p>河北水木文化传播有限公司</p>
	                        </div>
                        </a>
                        <p>微博联系</p>
                        
                    </li>
                </ul>
                <p>电话／18931157738</p>
                <p>邮箱／shuimuwenhua@163.com</p>
                <p>QQ／1913854349</p>
                <p>地址／石家庄市裕华区大马庄园6号楼3单元1702</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=5GtLwsjllAyjOpxCgaywPMcjDfCexAue"></script>
    <script type="text/javascript" src="<?php echo ($TEMPLATE_PATH); ?>js/map.js"></script>
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