<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 13. 04. 20
 * Time: 01:33
 */
?>
<a class="result" href="/reviews/<?=$review['slug']?>">
    <div class="row no-margin">
        <div class="col-xs-12 col-md-4 no-padding">
            <div class="result-image">
                <img src="<?php echo $review['images'][0]['path']?>" alt="<?php echo $review['images'][0]['alt']?>" class="img-fluid"/>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 no-padding">
            <div class="result-info">
                <h5><?php echo $review['title']?></h5>
                <h6><?php echo $review['excerpt']?></h6>
            </div>
        </div>
    </div>
</a>