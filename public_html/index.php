<?php include 'database.php' ;?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>ROAR IT</title>
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
    </head>
    <body>
        <div id="container">
            <header>
                <h1>ROAR IT! Roarbox</h1>
            </header>
            <div class="roars">
                <ul>
                    <li class="roar"><span>0800h-Onyango:Iwacho nang'o!</span></li>
                    <li class="roar"><span>0900h-Wairire!</span></li>
                    <li class="roar"><span>0920h-Wafula: Wolauriye wandu wa nyasaye!</span></li>
                    <li class="roar"><span>0930h-Kazungu: amukadze wakwehu!</span></li>
                    <li class="roar"><span>0940h-Mutuke: Ntawie maundu!</span></li>
                    <li class="roar"><span>1000h-Brad: Good morning ladies and gentlemen!</span></li>
                </ul>
            </div>
            <div class="input">
                <form method="post" action="/process.php">
                    <input type="text" name="user" placeholder="Enter your name"/>
                    <input type="text" name="message" placeholder="Enter your messsage"/>
                    <br>
                    <input class="roar-btn" type="button" name="submit" value="Roar It Out"/>
                </form>
            </div>
        </div>
    </body>
</html>