<?php include("components/headnav.php"); ?>
<div class="intro grid">
    <div>
        <h1>Game modes</h1>
    </div>
    <p>Two game modes, two times the action. </p> 
</div>
<div class="infobox">
    <div>
        <div class="infotop grid">
            <div>
                <h3>Open Patrol</h3>
                <p>Hide and seek - big boy version.</p>
            </div>
            
            <div class="icon">
                <img src="img/icons/binoculars.png" alt="binoculars">
            </div>
        </div>
        <div class="infobottom">
            <div class="modeinfo">
                <h4>Objective</h4>
                <p><span>Racers:</span> Roam around the streets causing havoc and avoid getting busted.</p>
                <p><span>Cops:</span> Be on the lookout for anyone causing trouble and bust them immediately.</p>
            </div>
            <div class="modeinfo">
                <h4>How it works</h4>
                <p>One person is assigned to be a racer, and everyone else is a cop. (If there are 8+ players, two racers are allowed simultaneously.) See the <a href="police.php">"Catching the criminals"</a> section to see how pursuits work and when a racer is considered busted. Once a racer's turn is up, someone else is allowed to take their spot and the previous racer must switch to a cop. </p>
            </div>
            <div class="modeinfo">
                <h4>Specific rules/regulations</h4>
                <ul>
                    <li>Gameplay boundaries are limited to a specific area (ex: Edinburgh) that will be stated beforehand.</li>
                    <li>Minimap and names above cars MUST be turned OFF. Do NOT check the map at all (unless ambulance).</li>
                    <li>Only 1 drone is allowed at a time and only for 5 minutes. There is a 2-minute cooldown period if that officer wants to resume using the drone.</li>
                    <li>Only the lead unit and/or dispatcher should call out pursuit priority and location.</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
<div class="infobox">
    <div>
        <div class="infotop grid">
            <div>
                <h3>Duel</h3>
                <p>Run away from the cops <span style="font-style:italic;">and</span> &nbsp;win the race.</p>
            </div>
            <div class="icon">
                <img src="img/icons/twocars.png" alt="twocars">
            </div>
        </div>
        <div class="infobottom">
            <div class="modeinfo">
                <h4>Objective</h4>
                <p><span>Racers:</span> Race to the destination following the route without getting caught.</p>
                <p><span>Cops:</span> Bust the racers before they reach the finish line.</p>
            </div>
            <div class="modeinfo">
                <h4>How it works</h4>
                <p>The host of the lobby will set a group destination (the finish line) on the map. Two people are assigned to be racers, and everyone else is a cop. Once a racer's turn is up, someone else is allowed to take their spot and the previous racer must switch to a cop. </p>
            </div>
            <div class="modeinfo">
                <h4>Specific rules/regulations</h4>
                <ul>
                    <li>Racers MUST follow fixed a route. Cops do not have to follow it.</li>
                    <li>Fast traveling is prohibited once the race starts.</li>
                    <li>Minimap and names above cars are allowed.</li>
                    <li>Pursuit priorities do not apply.</li>
                    <li>SWAT vehicles are not allowed.</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
<div class="intro">
    <div>
        <h1>Sessions</h1>
    </div>
    <p>In TR&amp;CC, the terms "session," "lobby," and "room" are used interchangeably. Any member is allowed to create a session, but proper planning is necessary. To get a session started, the host will need to post on the thread stating the following: game mode, car class, date, time, and an optional description. All sessions should be posted at least a few hours (or days - to allow for schedule issues) before the actual lobby starts. Impromptu lobbies are allowed to be opened, but are not recommended.</p> 
</div>
<div class="infobox">
    <div>
        <div class="infotop grid">
            <div>
                <h3>Upcoming sessions</h3>
                <p>We've hosted <span class="sessioncount">67</span> lobbies so far! All dates and times are in Central Time.</p>
            </div>
            <div class="icon">
                <img src="img/icons/calendar.png" alt="calendar">
            </div>
        </div>
        <div class="infobottom trigrid grid">
            
            <?php include("components/sessionslist.php") ?>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
</section> 
<script src="scripts/sessionClass.js" type="text/javascript"></script>
<script src="scripts/sessionCount.js" type="text/javascript"></script>
</body> 
</html>