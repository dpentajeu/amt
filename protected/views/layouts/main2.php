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
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="stylesheet" href="css/main.css?v=1.0" media="screen,projection">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script src="js/jquery.mousewheel-3.0.4.pack.js"></script>
        <script src="js/jquery.fancybox-1.3.4.pack.js"></script><script src="js/custom.js">
        </script><!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>            
        
        <header><div class="wrap">
                <div id="header">   
                    
                    <a id="logo" href="./" title="Asterisk"><img style="width:280px;height:70px" src="<?= $baseUrl; ?>/img/AMT_logo.png" /></a>
                    
                    <hr><nav><ul><li>
                                <a href="<?= $baseUrl ?>" title="Home">
                                    <strong>Home</strong>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $baseUrl;?>/aboutus" title="About">
                                    <strong>About</strong>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $baseUrl;?>/whatisforex" title="Basic">
                                    <strong>Basic</strong>
                                </a>
                            </li>
                        </ul></nav></div> <!-- / #header -->
                
                <?php $isFrontpage = false;
                        if ((Yii::app()->controller->getId().'/'.Yii::app()->controller->getAction()->getId()) == 'site/index'  ) { 
                            $isFrontpage = true;
                        } if($isFrontpage == true){?>
                <hr><div id="intro">
                        
                    <h1>Hi, Welcome to AMT Market!</h1>
                    <h2></h2>
                    
                    <p>Your finance solution.</p>
                    
                    <a href="<?= $baseUrl;?>/aboutus" class="button" title="MORE ABOUT US"><span>MORE ABOUT US</span></a>
                    
                    <div id="macbook">
                        <img src="<?= $baseUrl;?>/img/pages/finance.jpg" style="width: 366px; height: 227px;" alt="Screen"></div>

                </div> <!-- / #intro -->
                
                <hr><div id="subIntro">
                        
                    <div class="floatLeft">
                        <h2>AMT Market's innovative solutions</h2>                    
                        <p class="large">are your gateway to the Forex market. We are revolutionary thinkers in finance who have set the trend in Forex by delivering new technologies backed by world-class support for individual and institutional traders.</p>
                    </div>               
                </div> <!-- / #subIntro -->
                <?php } ?>
            </div>
        </header><hr>      
        
        <?php echo $content; ?>
        
        <footer><div id="footer">
                
                <div class="wrap clearFix">
                    
                    <div class="col1-4">
                        <a href="./" id="footerLogo">AMT Market</a>
                        
                        <p class="light">&copy; 2013 AMT Market All Rights Reserved.</p>
                    </div>
                    
                    <div class="col1-4">
                        <h3>About us</h3>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                    
                    <div class="col1-4">
                        <h3>Follow us</h3>
                        
                        <p class="followUs clearFix">
                            <a href="./" class="facebook">Facebook</a>
                            <a href="./" class="twitter">Twitter</a>
                            <a href="./" class="rss">RSS</a>
                            <a href="./" class="linkedin">LinkedIn</a>
                            <a href="./" class="vimeo">Vimeo</a>
                            <a href="./" class="digg">Digg</a>
                            <a href="./" class="delicious">Delicious</a>
                        </p>                                                
                    </div>
                    
                    <div class="col1-4">
                        <h3>Stay udpated</h3>
                        
                        <form action="" method="post">
                            <fieldset><input type="text" class="text" value="Your e-mail"><input type="submit" class="submit" value="Subscribe"></fieldset></form>                                      
                    </div>
                    
                </div>
                
            </div>
        </footer></body></html>
