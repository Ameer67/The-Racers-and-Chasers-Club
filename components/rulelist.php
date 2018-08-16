<?php 
    while($row = mysqli_fetch_array($rulequery)){
        $rule = $row["rule"];
        echo "<li>" . $rule . "</li>";
    }
?>