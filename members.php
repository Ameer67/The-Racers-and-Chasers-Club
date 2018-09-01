<?php include("components/headnav.php"); ?>
<div class="intro">
    <div>
        <h1>Members of the club</h1>
    </div>
    <p>Take a look at who's in The Racers &amp; Chasers Club</p> 
</div>
<div class="infobox noimg">
    <div>
        <div class="infotop icongrid">
            <div>
                <h3>Current members</h3>
                <p></p>
            </div>
            
            <div class="icon">
                <img src="img/icons/members.png" alt="members">
            </div>
        </div>
        <div class="infobottom pursuitgrid">
            <?php include("components/memberlist.php") ?>
        
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
<div>
    <h3>Join the club</h3>
    <p>Like what you see and interested in joining us? Please complete the steps below.</p>
    <form action="">  
        <label for="gtpaccount">
    I have created a GTPlanet account <input type="checkbox" name="gtpaccount" id="gtpaccount">
    </label>
        <input type="checkbox" name="gtpaccount" id="">
        <input type="checkbox" name="microphone" id="">
        <select name="stealthunits" id=""></select>
        I have created a GTPlanet account []
        I have a microphone []
        How many stealth units are allowed on-duty? [0,1,2,3,4]

        Xbox Live Gamertag
        Time zone
        How did you discover this club?
        Anything else you would like to share?
    </form>
</div>
<?php include("components/footer.php"); ?>