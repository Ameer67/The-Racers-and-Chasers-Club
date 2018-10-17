<?php include("components/headnav.php"); ?>
<div class="intro grid">
    <div>
        <h1>Laws of the land</h1>
    </div>
    
    <div class="description">
        <p>TR&amp;CC relies on its members to control themselves, and most do just fine. But without any ground rules, things may get slightly out of hand...
        Rule changes can and do happen. If you would like to modify a rule, please post your concerns in the thread. Game mode specific rules can be located on the <a href="sessions.php">sessions</a> page.</p>
    </div>
    

</div>
<div class="infobox">
    <div>
        <div class="infotop">
            <h3>General</h3>
        </div>
        <div class="infobottom">
            <ul>
                <?php 
                    $rulesql = "SELECT * FROM rules WHERE ";
                    $generalRule = $rulesql . "rule_type = 'general'";
                    $gameplayRule = $rulesql . "rule_type = 'gameplay'";
                    $behaviorRule = $rulesql . "rule_type = 'behavior'";
                    $carRule = $rulesql . "rule_type = 'cars'";          
                    
                    $rulequery = mysqli_query($databaseConnection, $generalRule);
                    include("components/rulelist.php");
                ?>
            </ul>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>

<div class="infobox">
    <div>
        <div class="infotop">
            <h3>Gameplay</h3>
        </div>
        <div class="infobottom">
            <ul>
                <?php 
                    $rulequery = mysqli_query($databaseConnection, $gameplayRule);
                    include("components/rulelist.php");
                ?>
            </ul>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>

<div class="infobox">
    <div>
        <div class="infotop">
            <h3>Behavior</h3>
        </div>
        <div class="infobottom">
            <ul>
                <?php 
                    $rulequery = mysqli_query($databaseConnection, $behaviorRule);
                    include("components/rulelist.php");
                ?>
            </ul>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>

<div class="infobox">
    <div>
        <div class="infotop">
            <h3>Car regulations</h3>
        </div>
        <div class="infobottom">
            <ul>
                <?php 
                    $rulequery = mysqli_query($databaseConnection, $carRule);
                    include("components/rulelist.php");
                ?>
                <li>Engine swaps originating from race cars are banned, which are as follows:
                    <div class="policecarrestrictions" style="margin-top:.5em;">
                        <div class="trigrid grid">
                            <p>1.6L I4 - Turbo Rally (300hp)</p>
                            <p>2.0L F4 - Turbo Rally (330hp)</p>
                            <p>2.6L 4 Rotor - Racing (690hp)</p>
                            <p>1.7L V12 - Racing (750hp)</p>
                            <p>7.2L V8 - Racing (850hp)</p>
                        </div>
                    </div>
                </li>
                <li>Engine swaps are completely prohibited for the following vehicles (mostly D, C, B class muscle cars):
                    <div class="policecarrestrictions" style="margin-top:.5em;">
                        <div class="trigrid grid">
                            <p>1965	Ford	Mustang GT Coupe</p>
                            <p>1966	Chevrolet	Nova Super Sport</p>
                            <p>1967	Chevrolet	Corvette [C2] Stingray 427</p>
                            <p>1968	Dodge	Dart HEMI Super Stock</p>
                            <p>1969	Chevrolet	Camaro  [Gen 1] SS Coupe</p>
                            <p>1969	Chevrolet	Nova Super Sport 396</p>
                            <p>1969	Dodge	Charger Daytona HEMI</p>
                            <p>1969	Dodge	Charger R/T</p>
                            <p>1969	Ford	Mustang Boss 302</p>
                            <p>1969	Oldsmobile	Hurst/Olds 442</p>
                            <p>1969	Pontiac	GTO Judge</p>
                            <p>1970	Chevrolet	Camaro [Gen 2.1] Z28</p>
                            <p>1970	Chevrolet	Chevelle Super Sport 454</p>
                            <p>1970	Chevrolet	Corvette [C3] ZR-1</p>
                            <p>1970	Dodge	Challenger R/T</p>
                            <p>1971	AMC	Javelin-AMX</p>
                            <p>1971	Ford	Mustang Mach 1</p>
                            <p>1971	Plymouth	Cuda 426 Hemi</p>
                            <p>1972	Chrysler	VH Valiant Charger R/T E49</p>
                            <p>1972	Ford	Falcon XA GT-HO</p>
                            <p>1973	Ford	XB Falcon GT</p>
                            <p>1973	Holden	HQ Monaro GTS 350</p>
                            <p>1973	Pontiac	Firebird Trans Am SD-455
                            <p>1974	James Bond	AMC Hornet JB Edition</p>
                            <p>1977	Holden	Torana A9X</p>
                            <p>1977	Pontiac	Firebird Trans Am</p>
                            <p>1979	Chevrolet	Camaro  [Gen 2.2] Z28</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="infoimg"></div>
    <div class="border"></div>
</div>
</section> 
</body> 
</html>