<?php include("components/headnav.php"); ?>
<div class="intro">
    <div class="borderdown"></div>
    <h1>Laws of the land</h1>
    <p>TR&amp;CC relies on its members to control themselves, and most do just fine. But without any ground rules, things may get slightly out of hand...
    </p>
    <p>Rule changes can and do happen. If you would like to modify a rule, please post your concerns in the thread.</p>

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