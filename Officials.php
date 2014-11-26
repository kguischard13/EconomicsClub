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

                
                <div id="titlebar"> <center><b>Club Officials</b></center> </div>
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

                <ul style="list-style-type:none; overflow:auto;padding: 10px; margin:0;text-align:center;">

                    <li class="members">
                        <div>
                           <img src="Images/Blank.png" alt="Imagine"> 

                            <span>
                                <b>Faculty Moderator:</b><br> Dr. Caitlin Greatrex
                            </span> 
                            
                        </div>    
                    </li>

                    <li class="members">
                        <div>
                           <img src="Images/Blank.png" alt="Imagine"> 

                            <span>
                                <b>President/Senator:</b><br>Ron Distante
                            </span> 
                            
                        </div>    
                    </li>

                    <li class="members">
                        <div>
                           <img src="Images/Blank.png" alt="Imagine"> 

                            <span>
                                <b>Vice President:</b><br>Daniel Henriquez
                            </span> 
                            
                        </div>    
                    </li>

                    <li class="members">
                        <div>
                           <img src="Images/Blank.png" alt="Imagine"> 

                            <span>
                                <b>Vice President:</b><br>Camaro Bolton
                            </span> 
                            
                        </div>    
                    </li>

                    <li class="members">
                        <div>
                           <img src="Images/Blank.png" alt="Imagine"> 

                            <span>
                                <b>Vice President:</b><br>Diana Arroyave-Ocampo
                            </span> 
                            
                        </div>    
                    </li>

                    <li class="members">
                        <div>
                           <img src="Images/Blank.png" alt="Imagine"> 

                            <span>
                                <b>Vice President:</b><br>Victor Kuc
                            </span> 
                            
                        </div>    
                    </li>

                    <?php
                    
                    if (isset($_SESSION['UserId'])) {
                    printf("<br><br><hr><br>");
                    
                    
                    


                    printf("<span style=\"font-size:x-large;text-align:center; display: block;\"><b><u>Club Members</u></b></span>");

                    $con = mysqli_connect($server,$username,$password, $dbname);

                    if (mysqli_connect_errno() ){
                        echo "Couldnt connect ".mysql_connect_error();
                    }   

                        
                    $Events = mysqli_query($con,"select * from Members where Flag = 3");

                    while($row = mysqli_fetch_array($Events)){
                        printf("<li class=\"members\"><div>");

                        printf("<img src=\" ".$row['MemberPictures']." \" >");
        
                        printf("<span>");
                        printf("<b>".$row['Position'].":</b><br>".$row['Name']);

                        printf("</span>");

                        printf("<div></li>");
            
                    }
                    }

                    ?>
                    
                    









                </ul>
                <!-- <img src="" alt="Imagine" style="width: 200px; height:200px; background-color: black; float:left; ">

                <div style="min-width: 65%;float: left; margin-left: 20px; margin-top:90px; background-color: black;">asadsadadasda<br>ajsdalidsuajkbdai lagosuilsudfbasyfda</div> -->
                <!-- <div id="officials">
                    <div id="imgDiv"></div>
                </div> -->
            
            
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