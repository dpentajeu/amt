<?php
    $baseUrl = Yii::app()->request->baseUrl;
?>
<div id="container">
    <div id="content" class="wrap">                                           

        <h2 class="separate">News</h2>
        
        <?php    $i = 0;
                 foreach ($activeNews as $element)
                 { 
                    foreach ($element as $key => $value) ${$key} = $value;
                    if ($i%4==0) echo '<div class="marginBottom30 clearFix">';
        ?>
                 <div class="col1-4">
                     <h3><?= $title; ?></h3>
                     <small class="date"><?= $pubDate; ?></small>
                     <a href="<?= $link; ?>" target="_blank"><p><?= $description; ?></p></a>
                 </div>

        <?php     
            if ($i%4==3) echo '</div>';
            $i++;
        }?>
         
    </div>
</div>