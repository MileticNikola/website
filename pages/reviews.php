<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 13. 04. 20
 * Time: 01:21
 */
$article = null;
$reviewData = [
    "steelseries-apex-pro"=>[
        "slug"=>"steelseries-apex-pro", //always same as key
        "title"=>"Steelseries Apex Pro",
        "description"=>"The SteelSeries Apex Pro is an amazing gaming keyboard. It's responsive and you can set the actuation point of your keys to your preferred setting.",
        "excerpt"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        "images"=>[
            [
                "path"=>"https://media.steelseriescdn.com/thumbs/filer_public/26/df/26df0c3b-c866-447b-8d36-22841b770e55/buyimg_apex7_001-v2.jpg__1850x800_q100_crop-scale_optimize_subsampling-2.jpg",
                "alt"=>"Image 1",
            ],
            [
                "path"=>"https://d1lss44hh2trtw.cloudfront.net/assets/editorial/2019/11/steelseries-apex-pro-review.jpg",
                "alt"=>"Image 2"
            ],
        ]
    ],
    "steelseries-arctis-pro"=>[
        "slug"=>"steelseries-arctis-pro", //always same as key
        "title"=>"SteelSeries Arctis Pro",
        "description"=>"There’s only one word for the Arctis Pro + GameDAC’s design: elegance. While its biggest competitors seem to all be designing the most ambitious-looking, gamers’ headsets, it’s bringing it all back down to earth with a simple, minimalist and no fluff design.",
        "excerpt"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        "images"=>[
            [
                "path"=>"https://i.imgur.com/W4z4gTv.png",
                "alt"=>"Image 1",
            ],
            [
                "path"=>"https://i.imgur.com/4ndxIcZ.png",
                "alt"=>"Image 2"
            ],
        ]
    ],
];
if($path && isset($path[1])){
    $slug = addslashes($path[1]);
    if(isset($reviewData[$slug])){
        $article = $reviewData[$slug];
    }
}
if($article){
    //Single page, show full data
    include __DIR__."/../components/review-single.php";
}else{
    //Listing, show excerpts
    include __DIR__."/../components/review-listing.php";
}