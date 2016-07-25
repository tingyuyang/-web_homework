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
    <form action="signup-submit.php">
   <fieldset>
       <legend>New User Signup:</legend>
           <div class="column">Name:</div>
           <input type="text" size="16" maxlength="16" name="name">
           <br>
            <div class ="column">Gender:</div>
                <input type="radio" name="sex" value="M">Male
                <input type="radio" name="sex" value="F">Female
            <br>
            <div class="column">Age:</div>
            <input type="text" size="6" maxlength="2" name="age">
            <br>
            <div class="column">Personality Type: </div>
            <input type="text" size="6" maxlength="4" name="personality">
            <br>
            <div class="column">Favorite OS: </div>
            <select name="operating system">
              <option value="Windows">Windows</option>
              <option value="Mac OS X">Mac OS X</option>
              <option value="Linux">Linux</option>
            </select>
            <br>
            <div class="column">Seeking Age: </div>
            <input type="text" size="6" maxlength="2" placeholder="min" name="min age"> to
            <input type="text" size="6" maxlength="2" placeholder="max" name="max age">
            <br>
            <input type="submit" value="Signup">
    </fieldset>
    </form>
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