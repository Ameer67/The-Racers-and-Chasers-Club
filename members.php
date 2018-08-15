<?php include("components/headnav.php"); ?>
<!-- <?php 
    $sql = "SELECT * FROM members";
    $query = mysqli_query($databaseConnection, $sql);

    while($row = mysqli_fetch_array($query)){
        $gtp_name = $row["gtp_name"];
        $xbox_name = $row["xbox_name"];
        echo "<p>" . $gtp_name . "</p>", $xbox_name;
    }

    
?> -->
<div class="intro">
    <div class="borderdown"></div>
    <h1>Rules</h1>
    <p>The Racers &amp; Chasers Club is a group of players who try to simulate 
    the experiences of a police officer or a street racer while staying true to the following core values:
    fun, realistic, and democratic.
    </p>
    <p>Forza Horizon 4 is where club sessions are hosted
    (which are typically held on Fridays and weekends). 
    Members are expected to join sessions approximately once
    every two weeks or as much as possible.</p>
    <p>Respect is the name of the game in TR&amp;CC.</p>
</div>
<div class="infobox noimg">
    <div class="description">
        <ul>
            <?php 
            $rulesql = "SELECT * FROM rules";
            $rulequery = mysqli_query($databaseConnection, $rulesql);

            while($row = mysqli_fetch_array($rulequery)){
                $rule = $row["rule"];
                echo "<li>" . $rule . "</li>";
            }

            
            ?>
        </ul>
    </div>
    <div class="border"></div>
</div>
<?php include("components/footer.php"); ?>