<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>北京视频制作|北京宣传片制作|简意传媒影视工作室</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="/Public/css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Public/css/style.css" />
    <link rel="stylesheet" href="/Public/css/headers/header1.css" />
    <link rel="stylesheet" href="/Public/css/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/Public/css/style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="/Public/css/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="/Public/css/flexslider/flexslider.css" type="text/css" media="screen" />  
    <link rel="stylesheet" href="/Public/css/revolution_slider/css/rs-style.css" media="screen" />
    <link rel="stylesheet" href="/Public/css/revolution_slider/rs-plugin/css/settings.css" media="screen" />    
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="/Public/css/themes/default.css" id="style_color" />
    <link rel="stylesheet" href="/Public/css/themes/headers/default.css" id="style_color-header-1" />    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head> 

<body>

<!--=== Top ===-->    
<div class="top">
    <div class="container">         
        <ul class="loginbar pull-right">
            <li>咨询热线：010-57459069
            </li>   
             
        </ul>
    </div>      
</div><!--/top-->
<!--=== End Top ===-->    

<!--=== Header ===-->
<div class="header">               
    <div class="container"> 
        <!-- Logo -->       
        <div class="logo">                                             
            <a href="index.html"><img id="logo-header" src="/Public/img/logo.png" alt="Logo" /></a>
        </div><!-- /logo -->        
                                    
        <!-- Menu -->       
        <div class="navbar">                                
            <div class="navbar-inner">                                  
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->                                  
                <div class="nav-collapse collapse">                                     
                    <ul class="nav top-2">
                     <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($vo['no'] == 1): ?>class="active"<?php endif; ?>>
                     	<a href="<?php echo ($vo["url"]); ?>" <?php if($vo['has_child'] == 1 ): ?>class="dropdown-toggle" data-toggle="dropdown"<?php endif; ?>><?php echo ($vo["name"]); ?>
                     	<?php if($vo['has_child'] == 1 ): ?><b class="caret"></b><?php endif; ?>                      
                        </a> 
                         <?php if($vo['has_child'] == 1 ): ?><ul class="dropdown-menu">
                         <?php if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$submenu): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>"><?php echo ($submenu["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                          </ul><?php endif; ?>  
                     	<b class="caret-out"></b> 
                     	</li><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                       
                        <li><a class="search"><i class="icon-search search-btn"></i></a></li>                               
                    </ul>
                    <div class="search-open">
                        <div class="input-append">
                            <form />
                                <input type="text" class="span3" placeholder="Search" />
                                <button type="submit" class="btn-u">Go</button>
                            </form>
                        </div>
                    </div>
                </div><!-- /nav-collapse -->                                
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->                          
    </div><!-- /container -->               
</div><!--/header -->      
<!--=== End Header ===-->

<!--=== Slider ===-->
<div class="fullwidthbanner-container">
    <div class="fullwidthabnner">
        <ul>
            <!-- THE FIRST SLIDE -->
            <li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300" data-thumb="/Public/img/sliders/revolution/thumbs/thumb1.jpg">

                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                <img src="/Public/img/sliders/revolution/bg1.jpg" />

                <div class="caption large_text sfb bg-black-opacity" data-x="176" data-y="12" data-speed="300" data-start="800" data-easing="easeOutExpo">
                     OVER 
                     <span style="color: #ffcc00;">1000</span> 
                     SATISFIED CUSTOMERS
                </div>

                <div class="caption randomrotate" data-x="189" data-y="76" data-speed="600" data-start="1100" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p1.jpg" alt="Image 2" />
                </div>

                <div class="caption randomrotate" data-x="0" data-y="92" data-speed="600" data-start="1200" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p2.jpg" alt="Image 3" />
                </div>

                <div class="caption randomrotate" data-x="200" data-y="209" data-speed="600" data-start="1300" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p6.jpg" alt="Image 4" />
                </div>

                <div class="caption randomrotate" data-x="97" data-y="117" data-speed="300" data-start="1400" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p4.jpg" alt="Image 5" />
                </div>

                <div class="caption randomrotate" data-x="14" data-y="222" data-speed="600" data-start="1500" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p5.jpg" alt="Image 6" />
                </div>

                <div class="caption randomrotate" data-x="638" data-y="201" data-speed="300" data-start="1600" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p3.jpg" alt="Image 7" />
                </div>

                <div class="caption randomrotate" data-x="717" data-y="294" data-speed="300" data-start="1700" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p4.jpg" alt="Image 8" />
                </div>

                <div class="caption randomrotate" data-x="682" data-y="79" data-speed="300" data-start="1800" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p8.jpg" alt="Image 9" />
                </div>

                <div class="caption randomrotate" data-x="807" data-y="71" data-speed="300" data-start="1900" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p10.jpg" alt="Image 10" />
                </div>

                <div class="caption randomrotate" data-x="818" data-y="271" data-speed="300" data-start="2000" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p5.jpg" alt="Image 11" />
                </div>

                <div class="caption randomrotate" data-x="95" data-y="248" data-speed="300" data-start="2100" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p9.jpg" alt="Image 12" />
                </div>

                <div class="caption randomrotate" data-x="762" data-y="165" data-speed="300" data-start="2200" data-easing="easeOutExpo">
                     <img class="img-border" src="/Public/img/sliders/revolution/p7.jpg" alt="Image 13" />
                </div>
            </li>

            <!-- THE SECOND SLIDE -->
            <li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-delay="9400" data-thumb="/Public/img/sliders/revolution/thumbs/thumb2.jpg">

                <!-- THE MAIN IMAGE IN THE SECOND SLIDE -->                                               
                <img src="/Public/img/sliders/revolution/bg2.jpg" />

                <div class="caption very_big_white lfl stl" data-x="18" data-y="343" data-speed="300" data-start="500" data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine">
                     TIMELINED CAPTIONS
                </div>

                <div class="caption big_white lfl stl" data-x="18" data-y="390" data-speed="300" data-start="800" data-easing="easeOutExpo" data-end="9100" data-endspeed="300" data-endeasing="easeInSine">
                     MOVE CAPTIONS IN AND OUT ON ONE SLIDE
                </div>

                <div class="caption lft ltb" data-x="600" data-y="0" data-speed="600" data-start="1100" data-easing="easeOutExpo" data-end="3100" data-endspeed="600" data-endeasing="easeInSine">
                     <img src="/Public/img/sliders/revolution/drink2.jpg" alt="Image 3" />
                </div>

                <div class="caption bold_green_text sft stb" data-x="760" data-y="290" data-speed="300" data-start="1400" data-easing="easeOutExpo" data-end="3300" data-endspeed="300" data-endeasing="easeInSine">
                     PRADA
                </div>

                <div class="caption big_black sfb stb" data-x="780" data-y="320" data-speed="300" data-start="1700" data-easing="easeOutExpo" data-end="3200" data-endspeed="300" data-endeasing="easeInSine">
                     $ 128
                </div>

                <div class="caption lft ltb" data-x="600" data-y="0" data-speed="600" data-start="3600" data-easing="easeOutExpo" data-end="5600" data-endspeed="600" data-endeasing="easeInSine">
                     <img src="/Public/img/sliders/revolution/drink1.jpg" alt="Image 6" />
                </div>

                <div class="caption bold_brown_text sft stb" data-x="760" data-y="290" data-speed="300" data-start="3900" data-easing="easeOutExpo" data-end="5800" data-endspeed="300" data-endeasing="easeInSine">
                     Dolce & Gabbana
                </div>

                <div class="caption big_black sfb stb" data-x="780" data-y="320" data-speed="300" data-start="4200" data-easing="easeOutExpo" data-end="5700" data-endspeed="300" data-endeasing="easeInSine">
                     $ 116
                </div>

                <div class="caption lft ltb" data-x="600" data-y="0" data-speed="600" data-start="6100" data-easing="easeOutExpo" data-end="8100" data-endspeed="300" data-endeasing="easeInSine">
                     <img src="/Public/img/sliders/revolution/drink3.jpg" alt="Image 9" />
                </div>

                <div class="caption bold_red_text sft stb" data-x="760" data-y="290" data-speed="300" data-start="6400" data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine">
                     L'EAU DE CHLOE
                </div>

                <div class="caption big_black sfb stb" data-x="780" data-y="320" data-speed="300" data-start="6700" data-easing="easeOutExpo" data-end="8200" data-endspeed="300" data-endeasing="easeInSine">
                     $ 142
                </div>
            </li>

            <!-- THE THIRD SLIDE -->
            <li data-transition="slideleft" data-slotamount="1" data-masterspeed="300" data-thumb="/Public/img/sliders/revolution/thumbs/thumb3.jpg">

                <!-- THE MAIN IMAGE IN THE THIRD SLIDE -->                                               
                <img src="/Public/img/sliders/revolution/bg3.jpg" />

                <div class="caption large_text sft" data-x="10" data-y="44" data-speed="300" data-start="800" data-easing="easeOutExpo">
                     TOUCH ENABLED
                </div>

                <div class="caption medium_text sfl" data-x="39" data-y="82" data-speed="300" data-start="1100" data-easing="easeOutExpo">
                     AND
                </div>

                <div class="caption large_text sfr" data-x="88" data-y="78" data-speed="300" data-start="1100" data-easing="easeOutExpo">
                     <span style="color: #72c02c;">RESPONSIVE</span>
                </div>

                <div class="caption lfl" data-x="10" data-y="150" data-speed="800" data-start="900" data-easing="easeOutExpo">
                     <img src="/Public/img/sliders/revolution/imac.png" alt="Image 4" />
                </div>

                <div class="caption lfl" data-x="210" data-y="245" data-speed="600" data-start="1000" data-easing="easeOutExpo">
                     <img src="/Public/img/sliders/revolution/ipad.png" alt="Image 5" />
                </div>

                <div class="caption lfl" data-x="322" data-y="313" data-speed="400" data-start="1100" data-easing="easeOutExpo">
                     <img src="/Public/img/sliders/revolution/iphone.png" alt="Image 6" />
                </div>

                <div class="caption lft" data-x="500" data-y="130" data-speed="300" data-start="500" data-easing="easeOutExpo">
                     <img src="/Public/img/sliders/revolution/html5andcss3.png" alt="Image 6" />
                </div>
            </li>

            <!-- THE FOURTH SLIDE -->
            <li data-transition="flyin" data-slotamount="1" data-masterspeed="300" data-thumb="/Public/img/sliders/revolution/thumbs/thumb4.jpg">
                
                <!-- THE MAIN IMAGE IN THE FOURTH SLIDE -->                                
                <img src="/Public/img/sliders/revolution/bg4.jpg" />

                <div class="caption lfb boxshadow" data-x="0" data-y="120" data-speed="900" data-start="500" data-easing="easeOutBack">
                     <iframe src="http://player.youku.com/embed/XMTI1Mzg1Mzk1Mg==" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe> 
                </div>

                <div class="caption sft big_black" data-x="550" data-y="120" data-speed="300" data-start="1200" data-easing="easeOutExpo">
                     Video Support
                </div>
                
                <div class="caption sft big_white" data-x="550" data-y="162" data-speed="300" data-start="1300" data-easing="easeOutExpo">
                     Vimeo Example
                </div>
                
                <div class="caption lfb medium_grey" data-x="550" data-y="215" data-speed="300" data-start="1400" data-easing="easeOutExpo">
                     You can easily add
                </div>
                
                <div class="caption lfb medium_grey" data-x="550" data-y="240" data-speed="300" data-start="1500" data-easing="easeOutExpo">   
                     Vimeo & Youtube Videos
                </div>
                
                <div class="caption lfb medium_grey" data-x="550" data-y="265" data-speed="300" data-start="1600" data-easing="easeOutExpo">
                     to your Slides
                </div>
            </li>
        </ul>

        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
<!--=== End Slider ===-->
<!--=== Purchase Block ===-->
<div class="row-fluid purchase margin-bottom-30">
    <div class="container">
		<div class="span9">
            <span>专业服务、质量过硬、客户第一</span>
            <p>简意时代文化传媒（北京）有限公司是一家集策划、拍摄、制作、包装于一体的影视制作公司。公司拥有先进的设备和专业的技术团队。不断的创新，进取，为国内外诸多大型企业制作精良的宣传视频。</p>
        </div>
        <a href="http://sc.chinaz.com/moban/" class="btn-buy hover-effect">立即咨询</a>
    </div>
</div><!--/row-fluid-->
<!-- End Purchase Block -->

<!--=== Content Part ===-->
<div class="container">	
	<!-- Service Blocks -->
	<div class="row-fluid">
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-film"></i>
    			<div class="desc">
    				<h4>专注目标</h4>
                    <p>简意传媒团队均来自国内领先的媒体企业，核心骨干具有新浪、搜狐、CSDN等视频制作与拍摄经验。我们是一群专注与本业的年轻人，坚信只有专注才能创造不朽价值，只有专业才能提供上乘服务。</p>
    			</div>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-cog"></i>
    			<div class="desc">
    				<h4>质量过硬</h4>
                    <p>从视频的拍摄、剪辑到出片我们始终追求高质量服务，细节是我们关注的G点，每一段视频都进过反复考虑，确保最后出片达到高品质。</p>
    			</div>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-user"></i>
    			<div class="desc">
    				<h4>客户第一</h4>
                    <p>简意传媒坚信只有让客户满意的作品才是好作品。在每段视频的制作中我们会充分尊重客户的需求，在每一次合作者让客户像度假一样愉快体验使我们追求的目标。</p>
    			</div>
    		</div>	
    	</div>			    
	</div><!--/row-fluid-->
	<!-- //End Service Blokcs -->

	<!-- Recent Works -->
	<div class="headline"><h3>经典案例</h3></div>
    <ul class="thumbnails">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="/Public/img/carousel/12.jpg" alt="" /></div>
                    <a class="btn-more hover-effect" href="#">read more +</a>					
                </div>
                <h3><a class="hover-effect" href="#">万达企业宣传片</a></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="/Public/img/carousel/13.jpg" alt="" /></div>
                    <a class="btn-more hover-effect" href="#">read more +</a>					
                </div>
                <h3><a class="hover-effect" href="#">珠海城市宣传片</a></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="/Public/img/carousel/19.jpg" alt="" /></div>
                    <a class="btn-more hover-effect" href="#">read more +</a>					
                </div>
                <h3><a class="hover-effect" href="#">海德商用企业宣传片</a></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="/Public/img/carousel/20.jpg" alt="" /></div>
                    <a class="btn-more hover-effect" href="#">read more +</a>					
                </div>
                <h3><a class="hover-effect" href="#">中信银行企业宣传片</a></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
            </div>
        </li>
    </ul><!--/thumbnails-->
	<!-- //End Recent Works -->
    
	<!-- Information Blokcs -->
	<div class="row-fluid margin-bottom-20">
    	<!-- Who We Are -->
		<div class="span8">
			<div class="headline"><h3>业务范围</h3></div>
			<p><img class="pull-left lft-img-margin img-width-200" src="/Public/img/carousel/2.jpg" alt="" />Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone.</p>	
            <ul class="unstyled">
            	<li><i class="icon-ok color-green"></i> Donec id elit non mi porta gravida</li>
            	<li><i class="icon-ok color-green"></i> Corporate and Creative</li>
            	<li><i class="icon-ok color-green"></i> Responsive Bootstrap Template</li>
            	<li><i class="icon-ok color-green"></i> Corporate and Creative</li>
            </ul><br />

            <blockquote class="hero-unify">
                <p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why. Unify is an incredibly beautiful responsive Bootstrap Template for corporate professionals.</p>
                <small>CEO, Jack Bour</small>
            </blockquote>
        </div><!--/span8-->        

        <!-- Latest Shots -->
        <div class="span4">
			<div class="headline"><h3>Latest Shots</h3></div>
			<div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="/Public/img/carousel/5.jpg" alt="" />
                    <div class="carousel-caption">
                      <p>Cras justo odio, dapibus ac facilisis in, egestas.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="/Public/img/carousel/4.jpg" alt="" />
                    <div class="carousel-caption">
                      <p>Cras justo odio, dapibus ac facilisis in, egestas.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="/Public/img/carousel/3.jpg" alt="" />
                    <div class="carousel-caption">
                      <p>Cras justo odio, dapibus ac facilisis in, egestas.</p>
                    </div>
                  </div>
                </div>
                
                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-angle-left"></i></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-angle-right"></i></a>
                </div>
			</div>
        </div><!--/span4-->
	</div><!--/row-fluid-->	
	<!-- //End Information Blokcs -->

	<!-- Our Clients -->
	<div id="clients-flexslider" class="flexslider home clients">
        <div class="headline"><h3>Our Clients</h3></div>	
		<ul class="slides">
			<li>
                <a href="#">
                    <img src="/Public/img/clients/hp_grey.png" alt="" /> 
                    <img src="/Public/img/clients/hp.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/igneus_grey.png" alt="" /> 
                    <img src="/Public/img/clients/igneus.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/vadafone_grey.png" alt="" /> 
                    <img src="/Public/img/clients/vadafone.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/walmart_grey.png" alt="" /> 
                    <img src="/Public/img/clients/walmart.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/shell_grey.png" alt="" /> 
                    <img src="/Public/img/clients/shell.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/natural_grey.png" alt="" /> 
                    <img src="/Public/img/clients/natural.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/aztec_grey.png" alt="" /> 
                    <img src="/Public/img/clients/aztec.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/gamescast_grey.png" alt="" /> 
                    <img src="/Public/img/clients/gamescast.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/cisco_grey.png" alt="" /> 
                    <img src="/Public/img/clients/cisco.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/everyday_grey.png" alt="" /> 
                    <img src="/Public/img/clients/everyday.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/cocacola_grey.png" alt="" /> 
                    <img src="/Public/img/clients/cocacola.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/spinworkx_grey.png" alt="" /> 
                    <img src="/Public/img/clients/spinworkx.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/shell_grey.png" alt="" /> 
                    <img src="/Public/img/clients/shell.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/natural_grey.png" alt="" /> 
                    <img src="/Public/img/clients/natural.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/gamescast_grey.png" alt="" /> 
                    <img src="/Public/img/clients/gamescast.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/everyday_grey.png" alt="" /> 
                    <img src="/Public/img/clients/everyday.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="/Public/img/clients/spinworkx_grey.png" alt="" /> 
                    <img src="/Public/img/clients/spinworkx.png" class="color-img" alt="" />
                </a>
            </li>
		</ul>
	</div><!--/flexslider-->
	<!-- //End Our Clients -->
</div><!--/container-->		
<!-- End Content Part -->
<!--=== Footer ===-->
<div class="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="span4">
                <!-- About -->
		        <div class="headline"><h3>About</h3></div>	
				<p class="margin-bottom-25">Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.</p>	

	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Monthly Newsletter</h3></div>	
				<p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
				<form class="form-inline" />
					<div class="input-append">
						<input type="text" placeholder="Email Address" class="input-medium" />
						<button class="btn-u">Subscribe</button>
					</div>
				</form>							
			</div><!--/span4-->	
			
			<div class="span4">
                <div class="posts">
                    <div class="headline"><h3>Recent Blog Entries</h3></div>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="/Public/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="/Public/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="/Public/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p> 
                        </dd>
                    </dl>
                </div>
			</div><!--/span4-->

			<div class="span4">
	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Contact Us</h3></div>	
                <address>
					25, Lorem Lis Street, Orange <br />
					California, US <br />
					Phone: 800 123 3456 <br />
					Fax: 800 123 3456 <br />
					Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                </address>

                <!-- Stay Connected -->
		        <div class="headline"><h3>Stay Connected</h3></div>	
                <ul class="social-icons">
                    <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                    <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                    <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                    <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                    <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                    <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                    <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                </ul>
			</div><!--/span4-->
		</div><!--/row-fluid-->	
	</div><!--/container-->	
</div><!--/footer-->	
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">						
	            <p>Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
			</div>
			<div class="span4">	
				<a href="index.html"><img id="logo-footer" src="/Public/img/logo.png" class="pull-right" alt="" /></a>
			</div>
		</div><!--/row-fluid-->
	</div><!--/container-->	
</div><!--/copyright-->	
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->			
<script type="text/javascript" src="/Public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/Public/js/modernizr.custom.js"></script>		
<script type="text/javascript" src="/Public/css/bootstrap/js/bootstrap.min.js"></script>	
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="/Public/css/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/Public/css/back-to-top.js"></script>
<script type="text/javascript" src="/Public/css/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/Public/css/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<!-- JS Page Level -->           
<script type="text/javascript" src="/Public/js/app.js"></script>
<script type="text/javascript" src="/Public/js/pages/index.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initRevolutionSlider();        
    });
</script>
<!--[if lt IE 9]>
    <script src="/Public/js/respond.js"></script>
<![endif]-->

</body>
</html>