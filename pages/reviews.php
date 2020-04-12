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
        "description"=>"Phosfluorescently plagiarize installed base internal",
        "excerpt"=>"Energistically e-enable seamless solutions and client-centered technology. Intrinsicly streamline leveraged technology and goal-oriented systems. Completely utilize alternative architectures before maintainable web-readiness.",
        "images"=>[
            [
                "path"=>"/img/reviews/3.png",
                "alt"=>"Image 1",
            ],
            [
                "path"=>"/img/reviews/3.png",
                "alt"=>"Image 2"
            ],
        ]
    ],
    "steelseries-apex-7"=>[
        "slug"=>"steelseries-apex-7", //always same as key
        "title"=>"SteelSeries Apex 7",
        "description"=>"Phosfluorescently plagiarize installed base internal",
        "excerpt"=>"Energistically e-enable seamless solutions and client-centered technology. Intrinsicly streamline leveraged technology and goal-oriented systems. Completely utilize alternative architectures before maintainable web-readiness.",
        "images"=>[
            [
                "path"=>"/img/reviews/3.png",
                "alt"=>"Image 1",
            ],
            [
                "path"=>"/img/reviews/3.png",
                "alt"=>"Image 2"
            ],
        ]
    ],
];
if($path[1]){
    $slug = addslashes($path[1]);
    if($reviewData[$slug]){
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