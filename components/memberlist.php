<?php 
    $membersql = "SELECT * FROM members";
    $memberquery = mysqli_query($databaseConnection, $membersql);

    while($row = mysqli_fetch_array($memberquery)){
        $gtp_name = $row["gtp_name"];
        $xbox_name = $row["xbox_name"];
        $join_date = date("n/j/Y", strtotime($row["join_date"]));
        $gtp_avatar = $row["gtp_avatar"];
        echo 
        '<div class="member grid">
                <div class="memberimg" >
                    <img src="' . $gtp_avatar . '">
                </div>
                <div class="memberinfo">
                    <h4>' . $gtp_name . '</h4>
                    <p>' . $xbox_name . '</p>
                    <span>Joined on ' . $join_date . '</span>
                </div>
                
            </div>';
    }
?>