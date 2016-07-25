<!DOCTYPE html>
<head>
    <title>NerdLuv</title>
    <meta charset="utf-8">
    <link href="https://webster.cs.washington.edu/css/nerdluv.css" type="text/css" rel="stylesheet">
    <div id="bannerarea">
        <img src="https://webster.cs.washington.edu/images/nerdluv/nerdluv.png" alt="banner logo">
        <br>
        where meek geeks meet
    </div>
</head>
<body>
    <?php
        $newuser=implode(",", $_GET)."\n";
        file_put_contents("singles.txt", $newuser, FILE_APPEND);
    ?>
    <p><strong>Thank you!</strong></p>
    Welcome to NerdLuv,
    <?php
     $name=$_GET["name"];
    print $name;
    ?>
    !
    <br><br>
    Now 
    <a href="matches.php">
        log in to see your matches!
    </a>
</body>
<br><br>
<footer>
    <p>
        This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin! Thank you for using our site.
    </p>
    <p>
        Results and page (C) Copyright NerdLuv Inc.
    </p>
    <a href="index.php">
        <img src="https://webster.cs.washington.edu/images/nerdluv/back.gif" alt="icon">
            Back to the front page
    </a>
    <div id="w3c">
        <a href="https://webster.cs.washington.edu/validate-html.php">
            <img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML">
        </a>
        <a href="https://webster.cs.washington.edu/validate-css.php">
            <img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS">
        </a>
    </div>
</footer>
</html>