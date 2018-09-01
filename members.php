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
        <fieldset>
            <label for="gtpaccount">
               <p>I have created a GTPlanet account</p>
            <input type="checkbox" name="gtpaccount" id="gtpaccount">
            </label>
            <label for="mic">
                   <p>I have a microphone</p>
               <input type="checkbox" name="mic" id="mic">
            </label>
             <label for="stealthunits">
                  <p>How many stealth units are allowed on duty?</p>
                <select name="stealthunits" id="stealthunits">
                    <option value="0">0</option>
                    <option value="0">1</option>
                    <option value="0">2</option>
                    <option value="0">3</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <label for="xbl">
                <p>Xbox Live Gamertag:</p>
                <input type="text" name="xbl" id="xbl">
            </label>
            <label for="timezone">
                <p>Timezone:</p>
                <input type="text" name="timezone" id="timezone">
            </label>
            <label for="clubdiscover">
                <p>How did you discover this club?:</p>
                <textarea name="clubdiscover" id="clubdiscover"></textarea>
            </label>
            <label for="share">
                 <p>Anything else you'd like to share?:</p>
                <textarea name="share" id="share"></textarea>
            </label>
        </fieldset>
    </form>
</div>
<?php include("components/footer.php"); ?>