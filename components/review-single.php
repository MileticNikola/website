<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 13. 04. 20
 * Time: 01:31
 */
$pageData['title'] = "Team Spectralis | Review ".$article['title'];
$pageData['meta']['description'] = $article['excerpt'];
$pageData['meta']['keywords'] = "review";
$pageData['og']['title'] = "Team Spectralis | Review ".$article['title'];
$pageData['og']['description'] = $article['excerpt'];
$pageData['og']['image'] = "https://teamspectralis.com/img/thumbnail.png";
?>

<div class="section" style="background:url('/img/cover/cover2.png')center;background-size:cover;">
    <div class="container">
        <h2><?php echo $article['title']?></h2>
        <p><?php echo $article['excerpt']?></p>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="review">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <?
                    if($article['images']){
                        foreach ($article['images'] as $image){
                            ?>
                            <img src="<?php echo $image['path']?>" alt="<?php echo $image['alt']?>" class="img-fluid"/>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="col-xs-12 col-md-8">
                    <article>
                        <?php echo $article['description']?>
                        <div class="clearfix"></div>
                        <a href="/reviews" class="btn btn-primary">Back to review list</a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>