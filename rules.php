<?php include("components/headnav.php"); ?>
<div class="intro">
    <div class="borderdown"></div>
    <h1>Laws of the land</h1>
    <p>TR&amp;CC relies on its members to control themselves, and most do just fine. But without any ground rules, things may get slightly out of hand...
    </p>
    <p>Rule changes can and do happen. If you would like to modify a rule, please post your concerns in the thread.</p>
    <p>Game mode specific rules can be located on the <a href="sessions.php">sessions</a> page.</p>

</div>
<div class="infobox noimg">
    <div class="description">
        <h3>General</h3>
        <ul>
            <?php 
                $rulesql = "SELECT * FROM rules WHERE ";
                $generalRule = $rulesql . "rule_type = 'general'";
                $gameplayRule = $rulesql . "rule_type = 'gameplay'";
                $behaviorRule = $rulesql . "rule_type = 'behavior'";            
                
                $rulequery = mysqli_query($databaseConnection, $generalRule);
                include("components/rulelist.php");
            ?>
        </ul>
        <h3>Gameplay</h3>
        <ul>
            <?php 
                $rulequery = mysqli_query($databaseConnection, $gameplayRule);
                include("components/rulelist.php");
            ?>
        </ul>
        <h3>Behavior</h3>
    </div>
    <div class="border"></div>
</div>
<?php include("components/footer.php"); ?>