<?php 
    $rulesql = "SELECT * FROM rules WHERE ";
    $generalRule = $rulesql . "rule_type = 'general'";
    $gameplayRule = $rulesql . "rule_type = 'gameplay'";
    $behaviorRule = $rulesql . "rule_type = 'behavior'";

    while($row = mysqli_fetch_array($rulequery)){
        $rule = $row["rule"];
        echo "<li>" . $rule . "</li>";
    }
?>