<?php 
    $sessionssql = "SELECT * FROM sessions";
    $sessionsquery = mysqli_query($databaseConnection, $sessionssql);

    while($row = mysqli_fetch_array($sessionsquery)){
        $session_datetime = $row["session_datetime"];
        $session_host = $row["session_host"];
        echo $session_datetime;
    }
?>