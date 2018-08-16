<?php include("components/headnav.php"); ?>
<div class="intro">
    <div style="position:relative;">
        <h1>Laws of the land</h1>
    </div>
    
    <div class="description">
        <p>TR&amp;CC relies on its members to control themselves, and most do just fine. But without any ground rules, things may get slightly out of hand...
        Rule changes can and do happen. If you would like to modify a rule, please post your concerns in the thread. Game mode specific rules can be located on the <a href="sessions.php">sessions</a> page.</p>
    </div>
    

</div>
<div class="infobox noimg">
    <div>
        <div class="infotop">
            <h3>General</h3>
        </div>
        <div class="infobottom">
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
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>

<div class="infobox noimg">
    <div>
        <div class="infotop">
            <h3>Gameplay</h3>
        </div>
        <div class="infobottom">
            <ul>
                <?php 
                    $rulequery = mysqli_query($databaseConnection, $gameplayRule);
                    include("components/rulelist.php");
                ?>
            </ul>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>

<div class="infobox noimg">
    <div>
        <div class="infotop">
            <h3>Behavior</h3>
        </div>
        <div class="infobottom">
            <ul>
                <?php 
                    $rulequery = mysqli_query($databaseConnection, $behaviorRule);
                    include("components/rulelist.php");
                ?>
            </ul>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
<?php include("components/footer.php"); ?>