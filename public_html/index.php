<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>ROAR IT</title>
        <link rel="stylesheet" type="text/css" href="/styles.css">
        <style>
            *{
    margin: 20px;
    padding:0;
}
body{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 15;
    line-height: 1.5;
    background: color #a02323;
}
#container{
    background-color: #8f8989;
    margin: 50px auto;
    overflow: auto;
    width: 60%;
    min-height: 630px;
}
header h1{
    color:#ffffff;
    font-size:32px;
    padding: 15px 0 10px 10px;
    border-bottom: 1px solid #ffffff;
}
.roars{
    width: 90%;
    background-color: #f4f4f4;
    height:400px;
    margin:70px auto;
    overflow: auto;
}
.roar{
    list-style:none;
    padding: 8px;
    border-bottom: 1px #cccc dotted;
}
.input{
    width:90%;
    min-height: 80px;
    margin:auto;
    padding: 0;
}
#input input[type="text"]{
    height: 25px;
    width:70%;
    length: 100%;
    padding:3px;
    margin-bottom:20px;
    border:#666666 solid 1px;
}
#input .roar-btn(
    padding:5px;
    margin-bottom:30px;
    width:100%;
    margin:10px auto;
)

@media only screen and (max-width:768px){
    #input input [type='text']{
        width:98;
    }
}
        </style>
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