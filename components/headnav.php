<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    <?php 
    $currentFile = basename($_SERVER['PHP_SELF']);
    $pageTitle = ucfirst(str_replace(".php","", $currentFile));
    if ($pageTitle == "Index") {
        $pageTitle = "Home";
    }
    echo $pageTitle;
    ?> 
    | TR&amp;CC</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">
</head>
<?php include("dbsettings.php") ?>
<body>

<div class="banner">
</div>
<script src="scripts/bannerGradient.js"></script>
<div class="sidenav grid">
    <div class="logocontainer">
        <a href="index.php">
            <img src="img/TR&amp;CC_main_shadow.png">
        </a>
    </div>
    <nav>
        <ul>
            <li class="<?php if ($pageTitle == "Home") {
                echo "current";} ?>">
                <a href="index.php">
                    <span>home</span>
                </a>
            </li>
            <li class="<?php if ($pageTitle == "Sessions") {
                echo "current";} ?>">
                <a href="sessions.php">
                    <span>sessions</span>
                </a>
            </li>
            <li class="<?php if ($pageTitle == "Rules") {
                echo "current";} ?>">
                <a href="rules.php">
                    <span>rules</span>
                </a>
            </li>
            <li class="<?php if ($pageTitle == "Members") {
                echo "current";} ?>">
                <a href="members.php">
                    <span>members</span>
                </a>
            </li>
            <li class="<?php if ($pageTitle == "Police") {
                echo "current";} ?>">
                <a href="police.php">
                    <span>police</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span>thread</span>
                </a>
            </li>
            <li id="signup">
                <a href="members.php#join">
                    <span>sign up</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="datetime">
        <h5>
            <span>
            <?php echo date('F j, Y g:i a');?></span> Central Time
        </h5>
    </div>
</div>

<section class="content<?php 
if ($pageTitle == "Home") {
    echo " home";
};
?>">