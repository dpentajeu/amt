<?php
$baseUrl = Yii::app()->request->baseUrl;
$cs = Yii::app()->clientScript;
$cs->registerCssFile("{$baseUrl}/css/flexslider.css");
$cs->registerScriptFile("{$baseUrl}/js/jquery.flexslider-min.js");
$cs->registerCss("slider", "
    #sliderwrap {
        max-width: 986px;
        float: none;
        background-color: white;
        border: 1px solid #d5d5d5;
        padding: 6px;
    }
    .slides li {
        display: none;
    }
    .row.smaller {
        padding: 0 100px;
    }
    ");
$cs->registerScript("flexslider", "
    $('#flexslider').flexslider({
        animation: 'slide', //<!--you can also choose fade here-->
        directionNav: true, //<!--Attention: if you choose true here, the nav-buttons will also appear in the ticker! -->
        keyboardNav: true,
        mousewheel: true,
        prevText: 'Previous', //String: Set the text for the 'previous' directionNav item
        nextText: 'Next',
    });
    ");
?>
<div id="container">
    <div class="container">
        <div class="row">
            <div id="sliderwrap" class="col-md-10 col-md-offset-1">
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
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
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
        </div>
        <div class="row smaller">
            <div class="col-md-4">
                <h2 class="separate">New to Forex?</h2>
                <div class="content withIcon icon2"><p>In the market where the results are not only instant, they’re staggering. Education plays a crucial role in first-time traders' development.  Learn how to trade Forex supported by our resources and experience team. <a href="#">Learn more</a></p></div>
            </div>
            <div class="col-md-4">
                <h2 class="separate">Try a demo account</h2>
                <div class="content withIcon icon1"><p>Demo a no-risk and free platform. Ready to jump into trading with a free AMT demo account? Try our popular MetaTrader 4 account. MetaTrader has been a leader in Forex trading software for years.</p><a href="<?= $baseUrl ?>/demoaccount" class="button"><span>Try it now</span></a></div>
            </div>
            <div class="col-md-4">
                <h2 class="separate">Open a live account</h2>
                <div class="content withIcon icon3"><p>Regardless of your skill-level, strategy, or trading size, AMT offers an optimal solution for online Forex trading for you to trade effectively. Our application process is secure, fast, and simple.</p><a href="<?= $baseUrl ?>/liveaccount" class="button"><span>Sign up</span></a></div>
            </div>
        </div>
        <div class="row smaller">
            <h2 class="separate"></h2>
            <div class="marginBottom30 clearFix">
                <div class="col1-4">
                    <p><strong>HIGH RISK WARNING:</strong> Foreign exchange trading carries a high level of risk that may not be suitable for all. Leverage creates additional risk and loss exposure. Before you decide to trade foreign exchange, carefully consider your investment objectives, experience level, and risk tolerance.</p>
                    <p><strong>ADVISORY WARNING:</strong> AMT Market provides references/links to selected blogs and other sources of market information as an educational service to its clients and prospects and does not endorse the recommendations of the blogs or other sources of information. We are committed to protecting our customers' personal and financial information.</p>
                </div>
                <div class="col1-4">
                    <p>In the course of providing you with financial products and services, we need to collect and maintain certain nonpublic personal information about you. Most importantly, we do not sell your personal information to anyone. 
                    Please note the information on this website is intended for retail customers only, and certain representations herein may not be applicable to Eligible Contract Participants (i.e., institutional clients). Anyone opening a live trading account needs to adhere to the laws of their local country as such laws may differ from country to country. Check with local authorities to determine your country's regulations.</p>
                </div>
                <div class="col1-4">
                    <script src="http://www.dailyfx.com/dailyfxcalendar?l=5&w=230" type="text/javascript" ></script>
                    <table style="font:10px Verdana,Geneva,sans-serif;color:#ffffff;width: 230px;" border="0" cellspacing="0" cellpadding="0" bgcolor="#FD8B0A"><tr style="text-align:center;"><td style="vertical-align: bottom; white-space:nowrap; padding: 5px 0 7px 0; "><a href="http://www.dailyfx.com/minicalendar" target="_blank" class="footer">Grab This!</a></td><td>|</td><td><a href="http://www.dailyfx.com/calendar" target="_blank" class="footer">Economic Calendar</a></td><td>|</td><td><a href="http://www.dailyfx.com" target="_blank" class="footer">Forex News</a></td></tr></table>
                </div>
                <div class="col1-4">
                    <iframe scrolling="no" frameborder="0" class="ChartIFrame" style="width: 280px; height: 410px; border: 0px none;" src="http://stocks.avatrade.com/StocksIFrame2.aspx"></iframe>
                </div>
            </div>
        </div> <!-- / .wrap -->
    </div>
</div> <!-- / #container -->