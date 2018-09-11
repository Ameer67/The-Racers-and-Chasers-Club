<?php 
    $sessionssql = "SELECT * FROM sessions";
    $sessionsquery = mysqli_query($databaseConnection, $sessionssql);

    while($row = mysqli_fetch_array($sessionsquery)){
        $session_datetime = $row["session_datetime"];
        $session_host = $row["session_host"];
        $session_mode = $row["session_mode"];
        $session_class = $row["session_class"];
        echo 
        '<div class="session grid">
        <div class="sessionheader grid">
            <div class="sessionclass">' . $session_class . '</div>
            <div class="sessionmode"> ' . $session_mode . '</div>
        </div>
        <div class="sessioninfo">
            <h4 class="date">' . date("F j, Y ", strtotime($session_datetime)) . '<span class="time"> at ' .  date("g:i A ", strtotime($session_datetime)) .'</span></h4>
            <p> Hosted by ' . $session_host . '</p>
        </div>  
    </div>';
    }
?>