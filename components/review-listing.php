<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 13. 04. 20
 * Time: 01:31
 */
$pageData['title'] = "Team Spectralis | Reviews";
$pageData['meta']['description'] = "Product reviews";
$pageData['meta']['keywords'] = "review";
$pageData['og']['title'] = "Team Spectralis | Reviews";
$pageData['og']['description'] = "Product reviews";
$pageData['og']['image'] = "https://teamspectralis.com/img/thumbnail.png";
?>

<div class="section" style="background:url('/img/cover/cover2.png')center;background-size:cover;">
    <div class="container">
        <h2>Reviews</h2>
        <p>Read reviews of our sponsor's products.</p>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <?php
            if($reviewData){
                $cc = 0;
                foreach($reviewData as $review){
                    ?>
                    <div class="col-xs-12 col-md-6">
                        <?php
                        include __DIR__."/../components/review-listing-single.php";
                        ?>
                    </div>
                    <?php
                    $cc++;
                    if($cc%2 == 0){
                        ?>
                        <div class="clearfix"></div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</div>