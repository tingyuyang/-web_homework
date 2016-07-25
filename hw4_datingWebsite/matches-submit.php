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
    Matches for 
    <?php
     $name=$_GET["name"];
     print $name;
    ?>
    <?php
        $user=$_GET["name"];
        $singles=file("singles.txt");
        foreach($singles as $i){
            list($name, $gender, $age, $personality, $system, $minage, $maxage)=explode(",", $i);
            if ($name==$user){
                break;
            }
        }
        foreach($singles as $i){
            list($mname, $mgender, $mage, $mpersonality, $msystem, $mminage, $mmaxage)=explode(",", $i);
            $check=false;
            for($j=0; $j<4; $j++){
                if ($personality[$j]==$mpersonality[$j]){
                    $check=true;
                    break;
                }
            }
            if ($mgender!=$gender && $system==$msystem){
                if ($age>=$mminage && $age<=$mmaxage){
                    if($mage>=$minage && $mage<=$maxage){
                        if($check==true){
                            echo("<div class='match'>
                                <img src='https://webster.cs.washington.edu/images/nerdluv/user.jpg' alt='user photo'>
                            </div>");
                        echo "<div class='match'>Name: $mname <br> Age: $mage <br> Gender: $mgender <br> Personality: $mpersonality <br> System: $msystem</div>";
                        
                        }
                    }
                }
            }
        }
    ?>
</body>
<footer>
     <div>
        <p>
            This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin! Thank you for using our site.
        </p>
        <p>
            Results and page (C) Copyright NerdLuv Inc.
        </p>
        <ul>
            <li>
                <a href="index.php">
                    <img src="https://webster.cs.washington.edu/images/nerdluv/back.gif" alt="icon">
                    Back to the front page
                </a>
            </li>
        </ul>
    </div>
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