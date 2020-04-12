<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 14. 03. 20
 * Time: 13:52
 */
$pageData['title'] = "Team Spectralis | Results";
$pageData['meta']['description'] = "Results from tournaments";
$pageData['meta']['keywords'] = "tournaments";
$pageData['og']['title'] = "Team Spectralis | Results";
$pageData['og']['description'] = "Results from tournaments";
$pageData['og']['image'] = "https://teamspectralis.com/img/thumbnail.png";
?>

<div class="section" style="background:url('/img/cover/cover1.png')center;background-size:cover;">
    <div class="container">
        <h2>Results</h2>
        <p>Here are some of our tournament and other event results.</p>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <?php
            //Always sort these by date, descending
            $results = [
                [
                    "name"=>"Pircolino & Aadoxee",
                    "image"=>"https://i.imgur.com/uc3gSiB.png",
                    "tournament" => "HOPSI Lockdown",
                    "placement" => "#1",
                    "game" => "Fortnite",
                    "link" => "https://hop.si/lockdown-fn",
                    "date" => "30.3.2020",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "aadoxee",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Dinosaur & SnipaaX",
                    "image"=>"https://i.imgur.com/lCW70Ve.png",
                    "tournament" => "HOPSI Lockdown",
                    "placement" => "#2",
                    "game" => "Fortnite",
                    "link" => "https://hop.si/lockdown-fn",
                    "date" => "30.3.2020",
                    "nameLink1" => "dinosaur",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Luša, Miša",
                    "image"=>"https://i.imgur.com/Er8o6Dx.png",
                    "tournament" => "Daily Duo Cup",
                    "placement" => "#40",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S12_DailyDuos_EU_PC?window=S12_DailyDuos_EU_PC_Event5",
                    "date" => "29.3.2020",
                    "nameLink1" => "luka",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Jekouc & Pircolino",
                    "image"=>"https://i.imgur.com/bzYLHDH.png",
                    "tournament" => "FNCS duo Week 1",
                    "placement" => "#240",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S12_FNCS_Week1_EU_PC?window=S12_FNCS_Week1_EU_PC_Event2&page=2",
                    "date" => "21.3.2020",
                    "nameLink1" => "jekouc",
                    "nameLink2" => "pircolino",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "2",
                ],
                [
                    "name"=>"Pircolino",
                    "image"=>"https://i.imgur.com/8vCdl6Z.png",
                    "tournament" => "Platform Cash Cup Solo PC (Shadow) W1 EU",
                    "placement" => "#24",
                    "game" => "Fortnite",
                    "link" => "https://fortnite-esports.gamepedia.com/Platform_Cash_Cup_Solo_-_PC:_Chapter_2_Season_2_(Shadow)/Week_1/Europe",
                    "date" => "19.3.2020",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Hraizer",
                    "image"=>"https://i.imgur.com/mxtAW22.jpg",
                    "tournament" => "Platform Cash Cup Solo (Shadow)",
                    "placement" => "#213",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S12_CC_Platform_EU_PC_Shadow?window=S12_CC_Platform_EU_PC_Shadow_Event1&page=2",
                    "date" => "19.3.2019",
                    "nameLink1" => "hraizer",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Pircolino & Jekouc",
                    "image"=>"https://i.imgur.com/bzYLHDH.png",
                    "tournament" => "Contender cash cup duos event - 400$",
                    "placement" => "#40",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S12_CC_Contenders_EU_Ghost",
                    "date" => "18.3.2020",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "jekouc",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "2",
                ],
                [
                    "name"=>"Luša, Swaggie",
                    "image"=>"https://i.imgur.com/7Dl5HIC.png",
                    "tournament" => "CONTENDER'S CASH CUP",
                    "placement" => "#241",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S12_CC_Contenders_EU_Shadow?window=S12_CC_Contenders_EU_Shadow_Event1",
                    "date" => "18.3.2020",
                    "nameLink1" => "luka",
                    "nameLink2" => "Swaggie",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Luša",
                    "image"=>"https://i.imgur.com/Er8o6Dx.png",
                    "tournament" => "Solo Shadow Hypenite+",
                    "placement" => "#36",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S12_HypeNight_EU_Level2_Shadow?window=S12_HypeNight_EU_Level2_Shadow_Event1",
                    "date" => "6.3.2020",
                    "nameLink1" => "luka",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Pircolino & Aadoxee",
                    "image"=>"https://i.imgur.com/uc3gSiB.png",
                    "tournament" => "Winter royale duos - 900$",
                    "placement" => "#52",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S11_WinterRoyale_PC_EU",
                    "date" => "20.12.2019",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "aadoxee",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Luša & Miša",
                    "image"=>"https://i.imgur.com/Er8o6Dx.png",
                    "tournament" => "Winter royale duos - 400$",
                    "placement" => "#301",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S11_WinterRoyale_PC_EU?window=S11_WinterRoyale_PC_EU_Event1&page=3",
                    "date" => "20.12.2019",
                    "nameLink1" => "luša",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Pircolino",
                    "image"=>"https://i.imgur.com/8vCdl6Z.png",
                    "tournament" => "CONTENDER'S CASH CUP",
                    "placement" => "#115",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S11_CC_Contenders_EU?window=S11_CC_Contenders_EU_Event8&page=1",
                    "date" => "19.12.2019",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Sparke & Klevz",
                    "image"=>"https://i.imgur.com/vahMVSw.png",
                    "tournament" => "Starfall 4",
                    "placement" => "#2",
                    "game" => "Fortnite",
                    "link" => "https://pbyte.si/dogodki/starfall-4/",
                    "date" => "23.11.2019",
                    "nameLink1" => "sparke",
                    "nameLink2" => "klevz",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Dinosaur & T1rc",
                    "image"=>"https://i.imgur.com/lCW70Ve.png",
                    "tournament" => "Starfall 4",
                    "placement" => "#3",
                    "game" => "Fortnite",
                    "link" => "https://pbyte.si/dogodki/starfall-4/",
                    "date" => "23.11.2019",
                    "nameLink1" => "dinosaur",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Pircolino",
                    "image"=>"https://i.imgur.com/8vCdl6Z.png",
                    "tournament" => "CONTENDER'S CASH CUP",
                    "placement" => "#193",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S11_CC_Contenders_EU?window=S11_CC_Contenders_EU_Event4&page=1",
                    "date" => "21.11.2019",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Sparx",
                    "image"=>"https://i.imgur.com/7KEi4i4.png",
                    "tournament" => "CONTENDER'S CASH CUP solo",
                    "placement" => "#139",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_S11_CC_Contenders_EU?window=S11_CC_Contenders_EU_Event3&page=1",
                    "date" => "14.11.2019",
                    "nameLink1" => "sparx",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Pircolino, Aadoxee, Ciceey",
                    "image"=>"https://i.imgur.com/uc3gSiB.png",
                    "tournament" => "Champion's Trios Cash Cup W4 EU",
                    "placement" => "#127",
                    "game" => "Fortnite",
                    "link" => "https://fortnite-esports.gamepedia.com/Trio_Cash_Cup_3/Europe/Week_4",
                    "date" => "13.9.2019",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "aadoxee",
                    "nameLink3" => "ciceey",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Pircolino, Slove, TaySon",
                    "image"=>"https://i.imgur.com/8vCdl6Z.png",
                    "tournament" => "Champion's Trios Cash Cup W1 EU",
                    "placement" => "#90",
                    "game" => "Fortnite",
                    "link" => "https://fortnite-esports.gamepedia.com/Trio_Cash_Cup_3/Europe",
                    "date" => "23.8.2019",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "slove",
                    "nameLink3" => "tayson",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Pircolino & Smooth",
                    "image"=>"https://i.imgur.com/8vCdl6Z.png",
                    "tournament" => "Telemach Epicenter 19",
                    "placement" => "#1",
                    "game" => "Fortnite",
                    "link" => "https://epicenter.si/ec19/",
                    "date" => "20.7.2019",
                    "nameLink1" => "pircolino",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
                [
                    "name"=>"Sparx & Megnaroz",
                    "image"=>"https://i.imgur.com/7KEi4i4.png",
                    "tournament" => "World Cup Warmup 2019 duo",
                    "placement" => "#124",
                    "game" => "Fortnite",
                    "link" => "https://fortnitetracker.com/events/epicgames_WorldCupWarmup_EU?window=WorldCupWarmup_EU_Event1&page=1",
                    "date" => "6.4.2019",
                    "nameLink1" => "sparx",
                    "nameLink2" => "",
                    "nameLink3" => "",
                    "nameLink4" => "",
                    "players" => "1",
                ],
            ];
            #https://fortnitetracker.com/events/epicgames_S12_CC_Platform_EU_PC_Shadow?window=S12_CC_Platform_EU_PC_Shadow_Event1&page=2
            if($results){
                $cc = 0;
                foreach($results as $result){
                    ?>
                    <div class="col-xs-12 col-md-6">
                        <?php
                        include __DIR__."/../components/result.php";
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