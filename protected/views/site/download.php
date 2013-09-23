<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<div id="container">
    <div id="content" class="wrap">                                           

        <div class="marginBottom30 clearFix">

            <div class="col1-4">
                <h2>Resources</h2>
                <ul>                    
                    <li>
                        <a href="<?= $baseUrl; ?>/download" class="more">Download</a>
                    </li>
                    <li>
                        <a href="<?= $baseUrl; ?>/tradingtools" class="more">MT4</a>
                    </li>
                </ul>
                
            </div>

            <div class="col3-4">
                <h2 class="separate">Download</h2>
                <img src="<?= $baseUrl; ?>/images/trader_phone.jpg" width="700px">
                <h3>Mobile</h3>
                <p>For your convenience, you can access your account from a range of mobile devices so you can trade on the go. It is a native application built specifically for the MT4 Platform and equipe with real-time pricing and execution of your trades.</p>
                <a href="https://itunes.apple.com/gb/app/metatrader-4/id496212596?mt=8" target="_blank"><img src="<?= $baseUrl; ?>/images/img-app-store-apple.png"></a>
                <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4" target="_blank"><img src="<?= $baseUrl; ?>/images/img-google-play.png"></a>
            </div>
        </div>          
    </div>
</div>