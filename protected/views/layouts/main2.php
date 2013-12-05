<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <title>AMT Market</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="David Kohout &amp; Tom&Atilde;&iexcl;&Aring;&iexcl; Lach - www.tomaslach.cz">
        <link rel="shortcut icon" href="<?= $baseUrl; ?>/img/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="stylesheet" href="css/main.css?v=1.0" media="screen,projection">
        <link rel="stylesheet" href="css/style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script src="js/jquery.mousewheel-3.0.4.pack.js"></script>
        <script src="js/jquery.fancybox-1.3.4.pack.js"></script><!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->          
    </head>
    <body>            
        
        <header style="<?php echo $this->style ?>"><div class="wrap">
                <div id="header">   
                    
                    <a id="logo" href="./" title="Asterisk"><img style="width:280px;height:70px;margin: 0.5em 0 0 0;" src="<?= $baseUrl; ?>/img/AMT_logo.png" /></a>
                    
                    <hr><nav>
                            <ul>
                            <li>
                                <a href="<?= $baseUrl;?>/" title="">
                                    <strong>Home</strong>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $baseUrl;?>/aboutus" title="">
                                    <strong>About AMT</strong>
                                </a>
                                <ul>
                                    <li><a href="<?= $baseUrl;?>/whyus">Why us</a></li>
                                    <li><a href="<?= $baseUrl;?>/industryleader">Industry leader</a></li>
                                    <li><a href="<?= $baseUrl;?>/testimonial">Testimonial</a></li>                       
                                </ul>
                            </li>
                            <li>
                                <a href="<?= $baseUrl;?>/news" title="">
                                    <strong>News</strong>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $baseUrl;?>/whatisforex" title="">
                                    <strong>Knowledge centre</strong>
                                </a>
                                <ul>
                                    <li><a href="<?= $baseUrl;?>/education">Education</a></li> 
                                    <li><a href="<?= $baseUrl;?>/whyforex">Why trade Forex?</a></li>
                                    <li><a href="<?= $baseUrl;?>/faq">FAQ</a></li>                    
                                </ul>
                            </li>
                            <li>
                                <a href="<?= $baseUrl;?>/download" title="">
                                    <strong>Resources</strong>
                                </a>
                                <ul>                                    
                                    <li><a href="<?= $baseUrl;?>/tradingtools">MT4</a></li>                       
                                </ul>
                            </li>
                            <li style="padding-top:25px">
                                <a href="http://member.amtmarket.com/" style="padding:0px;"><img src="<?= $baseUrl ?>/images/user.png"></a>
                            </li>
                        </ul></nav></div> <!-- / #header -->
                
                <?php $isFrontpage = false;
                        if ((Yii::app()->controller->getId().'/'.Yii::app()->controller->getAction()->getId()) == 'site/index'  ) { 
                            $isFrontpage = true;
                        } 
                        if($isFrontpage == true){   ?>
               
                    <link rel="stylesheet" href="<?= $baseUrl ?>/css/flexslider.css" />
                    <script src="<?= $baseUrl ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $('#flexslider').flexslider({
                                animation: "slide", //<!--you can also choose fade here-->
                                directionNav: true, //<!--Attention: if you choose true here, the nav-buttons will also appear in the ticker! -->
                                keyboardNav: true,
                                mousewheel: true,
                                prevText: "Previous", //String: Set the text for the "previous" directionNav item
                                nextText: "Next",
                            });
                        });
                    </script>
                    <style>
                        #sliderwrap {
                            max-width: 986px;
                            float: none;
                            /*margin: 15px auto 0px auto;*/
                            max-height: 280px;
                            background-color: white;
                            border: 1px solid #d5d5d5;
                            padding: 6px;
                        }
                    </style>

                <hr>
                <div id="sliderwrap">
                    <div id="flexslider" style="height:280px;">                        
                        <ul class="slides">
                            <li>
                                <a href="<?=$baseUrl ?>/liveaccount">
                                    <img src="<?= $baseUrl ?>/images/banner1.png" alt="demo-image" />
                                </a>
                            </li>
                            <li>
                                <a href="<?=$baseUrl ?>/whyus">
                                    <img src="<?= $baseUrl ?>/images/banner3.jpg" alt="demo-image" />
                                </a>
                            </li>
                            <li>
                                <a href="<?=$baseUrl ?>/whatisforex">
                                    <img src="<?= $baseUrl ?>/images/banner4.gif" alt="demo-image" />
                                </a>
                            </li>
                            <li>
                                <a href="<?=$baseUrl ?>/education">
                                    <img src="<?= $baseUrl ?>/images/banner5.jpg" alt="demo-image" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr><div id="subIntro">
                        
                    <div class="floatLeft">
                        <h2>AMT Market's innovative solutions</h2> 
                        <div class="col1-4">
                            <img src="<?=$baseUrl ?>/images/tablettradingforex.gif">
                        </div> 
                        <div class="col3-4">           
                            <p class="large" style="margin-left: 60px">AMT Market delivers high quality service through our offerings of superior technology, liquidity and trade execution to our customers. <a href="<?= $baseUrl ?>/whyus">Trade forex and more.</a></p>
                        </div>
                    </div>            
                </div> <!-- / #subIntro -->

                <?php } ?>
            </div>
        </header>      
        
        <?php echo $content; ?>
        
        <footer><div id="footer">
                
                <div class="wrap clearFix">
                    
                    <div class="col1-4">
                        <a href="./" id="footerLogo">AMT Market</a>
                        
                        <p class="light">&copy; 2013 Auto Matrix Traders Limited. All Rights Reserved.</p>
                        <p>
                            <a href="<?= $baseUrl ?>/privacy" style="text-decoration:underline;">Privacy Policy</a>
                            &nbsp&nbsp
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
        </footer></body></html>
