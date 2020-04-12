<?php
$user = addslashes($path[1]);
$sql = "SELECT * FROM `members`, `member_roles`, `member_social` WHERE `members`.`id` = member_social.id AND `members`.`role` = `member_roles`.`id` AND `username` = ?;";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user]);
if ($stmt->rowCount() == 0) {
    $pageData['title'] = "Team Spectralis | ".$user."'s profile";
    ?>
    <div class="section" style="background:url('/img/cover/cover2.png')center;background-size:cover;">
        <div class="container">
            <h2>User's profile</h2>
            <p>Here you can view user's general information.</p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="alert alert-warning">
                User <?=$user?> not found!
            </div>
        </div>
    </div>
    <?php

}else{
    $result = $stmt->fetch();

    $pageData['title'] = "Team Spectralis | ".$user."'s profile";
    $pageData['meta']['description'] = $result["description"];
    $pageData['meta']['keywords'] = "team, roster, pros, professional, staff, gamer, fortnite, apex, csgo";
    $pageData['og']['title'] = "Team Spectralis | ".$user."'s profile";
    $pageData['og']['description'] = $result["description"];
    $pageData['og']['image'] = "https://teamspectralis.com/img/thumbnail.png";
    ?>

    <div class="section" style="background:url('/img/cover/cover2.png')center;background-size:cover;">
        <div class="container">
            <h2><?= $user ?>'s profile</h2>
            <p>Here you can view user's general information.</p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 center">
                    <h3 class="bold" style="color: var(--yellow);"><?= $result["username"] ?> <i class="<?= $result["icon"] ?>" style="color: var(--yellow);"></i></h3>
                    <small>(<?= $result["name"] ?>)</small>
                    <br>
                    <img src="/img/members/<?= strtolower($result["username"]) ?>.png" class="img-fluid avatar-square" alt="<?= $result["username"] ?>">
                    <div class="social-container">
                        <?php
                        if ($result["twitter"] != null) echo '<a href="' . $result["twitter"] . '" class="social"><i class="fab fa-twitter fa-lg icon-link"></i></a>';
                        if ($result["youtube"] != null) echo '<a href="' . $result["youtube"] . '" class="social"><i class="fab fa-youtube fa-lg icon-link"></i></a>';
                        if ($result["facebook"] != null) echo '<a href="' . $result["facebook"] . '" class="social"><i class="fab fa-facebook fa-lg icon-link"></i></a>';
                        if ($result["instagram"] != null) echo '<a href="' . $result["instagram"] . '" class="social"><i class="fab fa-instagram fa-lg icon-link"></i></a>';
                        if ($result["website"] != null) echo '<a href="' . $result["website"] . '" class="social"><i class="fab fab fas fa-globe fa-lg icon-link"></i></a>';
                        if ($result["twitch"] != null) echo '<a href="' . $result["twitch"] . '" class="social"><i class="fab fa-twitch fa-lg icon-link"></i></a>';
                        ?>
                    </div>
                    <h4>About me</h4>
                    <p class="justify"><?= $result["description"] ?></p>
                </div>
                <div class="col-12 col-md-6">
                    <?php
                    $f_settings_sql = "SELECT * FROM `member_fortnite_settings` WHERE `id` = ?;";
                    $f_settings_stmt = $pdo->prepare($f_settings_sql);
                    $f_settings_stmt->execute([$result["id"]]);
                    $f_settings_result = $f_settings_stmt->fetch();

                    if ($f_settings_stmt->rowCount() != 0) {
                        echo "<h4>Fortnite Settings</h4>";
                        echo "<table class='table table-dark'>";
                        echo "<tr><td>Sensitivity</td><td>" . $f_settings_result["sensitivity"] . "</td></tr>";
                        echo "<tr><td>DPI</td><td>" . $f_settings_result["dpi"] . "</td></tr>";
                        echo "<tr><td>Ramp</td><td>" . $f_settings_result["ramp"] . "</td></tr>";
                        echo "<tr><td>Wall</td><td>" . $f_settings_result["wall"] . "</td></tr>";
                        echo "<tr><td>Floor</td><td>" . $f_settings_result["floor"] . "</td></tr>";
                        echo "<tr><td>Roof</td><td>" . $f_settings_result["roof"] . "</td></tr>";
                        echo "<tr><td>Trap</td><td>" . $f_settings_result["trap"] . "</td></tr>";
                        echo "<tr><td>Edit</td><td>" . $f_settings_result["edit"] . "</td></tr>";
                        echo "<tr><td>Use</td><td>" . $f_settings_result["use"] . "</td></tr>";
                        echo "</table>";
                    }

                    $a_settings_sql = "SELECT * FROM `member_apex_settings` WHERE `id` = ?;";
                    $a_settings_stmt = $pdo->prepare($a_settings_sql);
                    $a_settings_stmt->execute([$result["id"]]);
                    $a_settings_result = $a_settings_stmt->fetch();

                    if ($a_settings_stmt->rowCount() != 0) {
                        echo "<h4>Apex Settings</h4>";
                        echo "<table class='table table-dark'>";
                        echo "<tr><td>Sensitivity</td><td>" . $a_settings_result["sensitivity"] . "</td></tr>";
                        echo "<tr><td>DPI</td><td>" . $a_settings_result["dpi"] . "</td></tr>";
                        echo "<tr><td>Jump</td><td>" . $a_settings_result["jump"] . "</td></tr>";
                        echo "<tr><td>Crouch</td><td>" . $a_settings_result["crouch"] . "</td></tr>";
                        echo "<tr><td>Sprint</td><td>" . $a_settings_result["sprint"] . "</td></tr>";
                        echo "<tr><td>Use</td><td>" . $a_settings_result["use"] . "</td></tr>";
                        echo "</table>";
                    }

                    $c_settings_sql = "SELECT * FROM `member_cs_settings` WHERE `id` = ?;";
                    $c_settings_stmt = $pdo->prepare($c_settings_sql);
                    $c_settings_stmt->execute([$result["id"]]);
                    $c_settings_result = $c_settings_stmt->fetch();

                    if ($c_settings_stmt->rowCount() != 0) {
                        echo "<h4>CS:GO Settings</h4>";
                        echo "<table class='table table-dark'>";
                        echo "<tr><td>Sensitivity</td><td>" . $c_settings_result["sensitivity"] . "</td></tr>";
                        echo "<tr><td>DPI</td><td>" . $c_settings_result["dpi"] . "</td></tr>";
                        echo "<tr><td>Zoom sensitivity</td><td>" . $c_settings_result["zoom_sensitivity"] . "</td></tr>";
                        echo "<tr><td>Resolution</td><td>" . $c_settings_result["resolution"] . "</td></tr>";
                        echo "<tr><td>Aspect ratio</td><td>" . $c_settings_result["aspect"] . "</td></tr>";
                        echo "<tr><td>Scaling</td><td>" . $c_settings_result["scaling"] . "</td></tr>";
                        echo "<tr><td>Crosshair</td><td>" . $c_settings_result["crosshair"] . "</td></tr>";
                        echo "<tr><td>Viewmodel</td><td>" . $c_settings_result["viewmodel"] . "</td></tr>";
                        echo "<tr><td>cl_bob</td><td>" . $c_settings_result["cl_bob"] . "</td></tr>";
                        echo "</table>";
                    }

                    if ($f_settings_stmt->rowCount() == 0 && $a_settings_stmt->rowCount() == 0 && $c_settings_stmt->rowCount() == 0) {
                        echo "<h4>Settings</h4>";
                        echo "<p>This user does not have any settings displayed.</p>";
                    }
                    ?>
                </div>
            </div>
            <div style="text-align: right;">
                <a href="/team"><div class="btn btn-primary"><i class="fas fa-arrow-left"></i> Return</div></a>
            </div>
        </div>
    </div>
    <?php
}