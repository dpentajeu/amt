<?php
$baseUrl = Yii::app()->request->baseUrl;
$cs = Yii::app()->clientScript;
$cs->registerPackage('bootstrap');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AMT Market</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="<?php echo $baseUrl; ?>/img/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo $baseUrl; ?>/apple-touch-icon.png">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/main.css?v=1.0" media="screen,projection">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style.css">
        <script src="<?php echo $baseUrl; ?>/js/jquery.mousewheel-3.0.4.pack.js"></script>
        <script src="<?php echo $baseUrl; ?>/js/jquery.fancybox-1.3.4.pack.js"></script><!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style type="text/css">
            .navbar {
                border-radius: 0;
                margin-bottom: 0;
            }
            .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus,
            .navbar .navbar-nav>.active>a {
                color: #555;
                background-color: #e7e7e7;
            }
            ul.nav li.dropdown:hover > ul.dropdown-menu {
                display: block;    
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                var $window = $(window),
                    $event = $('#nav');
                $window.scroll(function() {
                    if ($window.scrollTop() > 80) {
                        $event.addClass('navbar-fixed-top');
                    } else {
                        $event.removeClass('navbar-fixed-top');
                    }
                });
            })
        </script>
    </head>
    <body>
        <header style="background: white;">
            <div class="container">
                <div style="padding: .8em 0;">
                    <a id="logo" href="<?php $baseUrl; ?>/">
                        <img style="height:50px;" src="<?php echo $baseUrl; ?>/img/AMT_logo.png" />
                    </a>
                </div>
            </div>
            <div>
                <nav id="nav" class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <?php $this->widget('zii.widgets.CMenu',array(
                                'htmlOptions'=>array(
                                    'class'=>'nav navbar-nav',
                                    ),
                                'encodeLabel'=>false,
                                'items'=>array(
                                    array('label'=>'Home', 'url'=>array('site/index')),
                                    array(
                                        'label'=>'About AMT <b class="caret"></b>',
                                        'itemOptions'=>array('class'=>'dropdown'),
                                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                                        'url'=>array('site/page', 'view'=>'aboutus'),
                                        'items'=>array(
                                            array('label'=>'Why us', 'url'=>array('site/page', 'view'=>'whyus')),
                                            array('label'=>'Industry leader', 'url'=>array('site/page', 'view'=>'industryleader')),
                                            array('label'=>'Testimonial', 'url'=>array('site/page', 'view'=>'testimonial')),
                                        )
                                    ),
                                    array('label'=>'News', 'url'=>array('site/news')),
                                    array(
                                        'label'=>'Knowledge centre <b class="caret"></b>',
                                        'itemOptions'=>array('class'=>'dropdown'),
                                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                                        'url'=>array('site/page', 'view'=>'whatisforex'),
                                        'items'=>array(
                                            array('label'=>'Education', 'url'=>array('site/page', 'view'=>'education')),
                                            array('label'=>'Trading tips', 'url'=>array('site/page', 'view'=>'tradingtips')),
                                            array('label'=>'Why trade Forex?', 'url'=>array('site/page', 'view'=>'whyforex')),
                                            array('label'=>'FAQ', 'url'=>array('site/page', 'view'=>'faq')),
                                        )
                                    ),
                                    array('label'=>'Resources', 'url'=>array('site/page', 'view'=>'download')),
                                ),
                            ));
                            $this->widget('zii.widgets.CMenu',array(
                                'htmlOptions'=>array(
                                    'class'=>'nav navbar-nav navbar-right',
                                    ),
                                'encodeLabel'=>false,
                                'items'=>array(
                                    array('label'=>"<img src='{$baseUrl}/images/user.png' style='height: 20px;'> Sign in", 'url'=>'http://member.amtmarket.com/'),
                                ),
                            )); ?>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <?php echo $content; ?>
        <footer>
            <div id="footer">
                <div class="wrap clearFix">
                    <div class="col1-4">
                        <a href="./" id="footerLogo">AMT Market</a>
                        <p class="light">&copy; 2013 Auto Matrix Traders Limited. All Rights Reserved.</p>
                        <p>
                            <a href="<?= $baseUrl ?>/privacy" style="text-decoration:underline;">Privacy Policy</a>
                            &nbsp;&nbsp;
                            <a href="<?= $baseUrl ?>/terms" style="text-decoration:underline;">Term of use</a>
                        </p>
                    </div>
                    <div class="col1-4">
                        <h3>About us</h3>        
                        <p>At AMT Market, we provide you leading forex resources, news and services that will impact your forex trading experience.</p>

                    </div>
                    <div class="col1-4">
                        <h3>Software</h3>
                        <img src="<?= $baseUrl?>/images/mt4-family.png">
                    </div>
                    <div class="col1-4">
                        <h3>Contact us</h3>   
                        <p>We'll love to hear from you. Email us for your inquiries.</p>                     
                        <a href="mailto:support@amtmarket.com" class="button"><span>Email us</span></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
