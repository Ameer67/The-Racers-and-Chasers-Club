<?php include("components/headnav.php"); ?>
<div class="intro">
    <div>
        <h1>Members of the club</h1>
    </div>
    <p>The Racers &amp; Chasers Club</p> 
</div>
<div class="infobox noimg">
    <div>
        <div class="infotop icongrid">
            <div>
                <h3>Current members</h3>
                <p></p>
            </div>
            
            <div class="icon">
                <img src="img/icons/binoculars.png" alt="binoculars">
            </div>
        </div>
        <div class="infobottom pursuitgrid">
            <?php include("components/memberlist.php") ?>
        
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
<?php include("components/footer.php"); ?>