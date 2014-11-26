<?php
    include("DatabaseDetails.inc");
    session_start();
?>
<html>
    <head>
        <title>Economics Club</title>
<!--        <meta name='viewport' content='minimum-scale=0.98, maximum-scale=5,  initial-scale=0.98, user-scalable=no, width=1024'>-->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="jQueryJS/signinButton.js"></script>

        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel='stylesheet' type='text/CSS' href='CSS/homeCSS.css'>
        
        <style>
            
        </style>
        
    </head>
    
    <body>
        
        <div id="container">
           
            <div id="header" style="position: relative; left: 0; top: 0;">

                <a href="HomePageEC.html">
                    <img id= 'logo' src="Images/Logo.png" alt = 'Logo'>
                </a>

                <?php
                    if(isset($_SESSION['UserId'])){
                        printf("<div style='float: right'>
            <a href=\"logout.php\"><button type=\"button\" >Log Out</button></a>
            </div>");
                        
                    }else{
                        printf("<button id=\"create-user\"><font size=\"1\">Sign In</font></button>");
                    }

                ?>

                <div id="titlebar"> <center><b>Economics Club</b></center> </div>

<!--                <button id="create-user">Sign In</button>-->
                
                <div id="dialog-form" title="Sign In">
                    <p class="validateTips">All form fields are required.</p>
 
                    <form>
                        <fieldset>
                            
                            <!-- <label for="name">Name:&nbsp;</label>
                            <input type="text" name="name" id="name" value="" class="text ui-widget-content ui-corner-all"><br><br> -->
                            
                            <label for="email">Email:&nbsp;</label>
                            <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all"><br><br>
                            
                            <label for="password">Password:&nbsp;</label>
                            <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
                            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                        </fieldset>
                    </form>
                </div>
<!--                End of dialog-form div -->
            
            </div>
            
            
<!--            End of header div    -->
            <div id="nav">
                <div id='links'>
                    <div id="linktitle"><center><b>Links</b></center></div>
                    <hr>
                    <div>
                        <ul>
                            <li><a href="HomePageEC.php">Home</a></li>
                            <li><a href="Officials.php">Club Officials</a></li>
                            <li><a href="Schedule.php">Events</a></li>
                            <li><a href="#">Store</a></li>
                        </ul>
                        
                    </div>
                    
                    
                </div>
            
            </div>
<!--            End of nav div-->
            
            <div id="content">
                <center><h1>What is the Economics Club?</h1></center>
                
                <p style="font-size: 20px">
                    The Economics Club, originally known as the Economics Colloquium at the time of its founding in 1950, is an academic student organization at Iona College. Our membership is open to all enrolled students interested in learning more about the field of economics through our numerous activities at the college. Between guest speakers and alumni visits, touring the major exchanges, and competing in the College Fed Challenge, our members are always involved on and off campus.
                    <br>
                    <br>
                    <br><br><br><br>
                    Picture for here...... or something and more info
     
                </p>
                <img src="Images/ECGroup.jpg" style="width: 500px; height:450px;">
            
            
            </div>
<!--            End of Content div-->
            
            <div style="width:100%;height: 20px; overflow:hidden;"></div>
            <hr style="height:1px;width:100%; margin: 0px auto;">
            <div style="width:100%;height: 20px; overflow:hidden;"></div>
            
            <div id="footer" align='center'>
                <p>Copyright By Iona Economics Club. All Rights reserved</p>
            </div>
<!--            End of footer div-->
        </div>
<!--        End of Container div-->
    
    </body>
</html>