<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    <?php 
    $currentFile = basename($_SERVER['PHP_SELF']);
    $pageTitle = ucfirst(str_replace(".php"," ", $currentFile));
    if ($pageTitle == 'Index ') {
        $pageTitle = "Home";
    }
    echo $pageTitle;
    ?> 
    | TR&amp;CC</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">
</head>
<header>
    <div class="logocontainer">
        <a href="index.php"><img class="logo" src="img/TR&CC_main.png"></a>
    </div>
    <nav>
        <ul>
        <li><a href="index.php"><span>home</span></a></li>
        <li><a href="events.php"><span>events</span></a></li>
        <li><a href="#"><span>members</span></a></li>
        <li><a href="#"><span>police</span></a></li>
        <li><a href="#"><span>thread</span></a></li>
        </ul>
    </nav>
</header>
<script src="scripts/header.js"></script>