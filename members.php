<?php include("components/headnav.php"); ?>
<div class="intro grid">
    <div>
        <h1>Who's In</h1>
    </div>
</div>
<div class="infobox">
    <div>
        <div class="infotop grid">
            <div>
                <h3>Current Members</h3>
                <p></p>
            </div>
            
            <div class="icon">
                <img src="img/icons/members.png" alt="members">
            </div>
        </div>
        <div class="infobottom trigrid grid">
            <!-- <div class="member grid">
                <div class="memberimg" >
                    <img src="img/defaultmember.jpg">
                </div>
                <div class="memberinfo">
                    <h4>GTPlanet name</h4>
                    <p>Xbox Live Gamertag</p>
                </div>
            </div> -->
            <?php include("components/memberlist.php") ?>
        
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
<div class="infobox" >
    <div>
        <div class="infotop grid">
            <div>
                <h3>Join the club</h3>
                <p>Like what you see and interested in joining us? After you've taken a good look around the site, please complete the steps below.</p>
            </div>
            
            <div class="icon">
                <img src="img/icons/application.png" alt="application">
            </div>
        </div>
        <div class="infobottom" id="join">
            <ol>
                <li>
                    <p>Create a <a href="https://www.gtplanet.net/">GTPlanet account</a>. Our <a href="https://www.gtplanet.net/forum/threads/the-racers-chasers-club.382202/">thread</a> on the GTPlanet Forums allows for easy communication between club members. (It's also a good site for the latest Forza (and other racing games) news.)</p>
                </li>
                <li>
                    <p>Answer the following questions.</p>
                </li>
            </ol>
            <form id="quiz"><div>  
                <p id="badresponse"> Please make sure everything is filled out correctly.</p>
                <label for="gtpaccount">
                    <p>I have created a GTPlanet account</p>
                    <input type="checkbox" name="gtpaccount" id="gtpaccount">
                </label>
                <label for="mic">
                    <p>I have a microphone</p>
                    <input type="checkbox" name="mic" id="mic">
                </label>
                <label for="tires">
                    <p>What kind of tires should all cars have at least?</p>
                    <select name="tires" id="tires">
                        <option value=""></option>
                        <option value="Street">Street tires</option>
                        <option value="Sport">Sport tires</option>
                        <option value="Race">Race tires</option>
                        <option value="Drag">Drag tires</option>
                    </select>
                </label>
                <label for="s
                <label for="gamemodemap">
                    <p>In what game mode is use of the map prohibited?</p>
                    <select name="gamemodemap" id="gamemodemap">
                        <option value=""></option>
                        <option value="Need For Speed">Need For Speed</option>
                        <option value="Duel">Duel</option>
                        <option value="Open Patrol">Open Patrol</option>
                    </select>
                </label>
                <label for="stealthunits">
                    <p>How many stealth units are allowed on duty?</p>
                    <select name="stealthunits" id="stealthunits">
                        <option value=""></option>
                        <option value="0">67</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </label>
                <label for="">
                    <p>Submit your answers to move onto the next step.</p>
                    <button type="button" id="quizsubmit">Submit</button>
                </label>
            </div></form>
            <ol start="3" id="applicationstep3">
                <li>
                    <p>Now fill out your information.</p>
                </li>
            </ol>
            <form id="application">
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
                <label for="">
                    <p>Press submit to move onto the next step.</p>
                    <button type="button" id="applicationsubmit">Submit</button>
                </label>
            </form>
            <ol start="4" id="applicationstep4">
                <li>
                    <p>Finally, copy the below information, <a href="https://www.gtplanet.net/forum/conversations/add?to=Ameer67">create a conversation with Ameer67 on GTPlanet,</a> and paste it into the text box. Set the title to something like "Club application," "TR&amp;CC application," etc.</p>
                </li>
            </ol>
            <form id="applicationresults">
                <p>Xbox Live Gamertag: </p>
                <p>Timezone: </p>
                <p>How did you discover this club?: </p>
                <p>Anything else you'd like to share?: </p>
            </form>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
</section> 
<script src="scripts/quiz.js"></script>
</body> 
</html>