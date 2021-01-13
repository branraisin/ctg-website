<?php
//    require_once "/home/ucicslcu/public_html/nexus/private/includes/header.php";

    //Redirect if not set
/*
    if (!isset($_GET["old"])) {
        header('Location: '."https://sites.google.com/uci.edu/ctglv4dlc/");
        die;
    }
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Change Thru Games 7</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/iisZaXN.png">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <meta charset="UTF-8">
    </head>

    <head> 
        <body>

            <!-- Animate on Scroll library -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>


            <div id="menu">
                <div id="menu_left">
                <a class="active" >Change Thru Games 7</a>
                </div>
                <div id="menu_right">
                    <a href="#home">Home</a>
                    <a href="#donate">Donate</a>
                    <a href="#commitee">Committee</a>
                </div>
            </div>
            <section id= "home">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <center>
                <h1 class="line anim-typewriter1" style="font-size: 160%;"> Welcome to the 7th iteration of</h1>
                <h1 id="hide" class="ml5" style="font-size: 800%; visibility:hidden;">
                    <span class="text-wrapper">
                        <span class="line0 line1"></span>
                        <span class="letters letters-left">Change</span>
                        <span class="letters letters-middle">Thru</span>
                        <span class="letters letters-right">Games</span>
                        <span class="line0 line2"></span>
                    </span>
                </h1>
                  
                <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                <script src="title_script.js"></script>
                <h1 class="line anim-typewriter2"style="font-size: 160%;"> An 8-hour video game marathon brought to</h1>
                <h1 class="line anim-typewriter3"style="font-size: 160%;"> you by UCI Circle K!</h1>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <button onclick="window.open('https://www.twitch.tv/changethrugames')" class="watch-button" type="button" style="font-family: trulymadly;">Watch</button>
                </center>
            </section>

            <div class="box-container3" style="margin-top: 5%;">
                <div id="pic2" class="clearbox2" data-aos="flip-left" data-aos-duration="800">
                    <a target="_blank"><img src="https://i.imgur.com/XvvWl2i.png" style="width: 100px; height: 100px"></a>
                    <p>&nbsp;</p>
                    <h4> Change Thru Games will host gaming tournaments for players to participate in this year with games such as League of Legends, Valorant, Tetris,s and more! </h4>
                </div>
                <div id="ctg" class="clearbox2" data-aos="flip-up" data-aos-duration="800">
                    <a target="_blank"><img src="https://i.imgur.com/4hb14sU.png" style="width: 100px; height: 100px"></a>
                    <p>&nbsp;</p>
                    <h4>Alongside video games at Change Thru Games, players will also have the oppurtunity to be apart of board game tournaments such as Codenames, Mafia, and Egyptian War! </h4>
                </div>

                <div id="pic3" class="clearbox2" data-aos="flip-right" data-aos-duration="800">
                    <a target="_blank" href="https://drive.google.com/file/d/1HdpC7jnGPsN9tIORSUebxORrDJaWDXa3/view?usp=sharing"><img src="https://i.imgur.com/L4OarC7.png" alt="Here is a link to our panphlet!" style="width: 100px; height: 100px"></a>
                    <p>&nbsp;</p>
                    <h4>Every year, all of the proceeds earned at Change Thru Games are donated to a charity! To read more about it, click on the image above to read our sponsorship panphlet! </h4>
                </div>

            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
            <div class="box-container2">
                <div id="pic1" class="clearbox" data-aos="zoom-in" data-aos-duration="800">
                    <a target="_blank" ><img src="https://i.imgur.com/FrOLIsa.png"  style="width: 600px; height: 279px; border-radius: 25px; box-shadow: 5px 5px 10px 10px rgba(0,0,0,0.5);"></a>
                </div>
                <div id="ctg" class="clearbox" data-aos="zoom-in" data-aos-duration="800">
                    <h3>About UCI Circle K</h3>
                    <p>&nbsp;</p>
                    <h4>Circle K clubs all over the world are based on the tenets of Service, Leadership, and Fellowship. 
                        We are the largest collegiate student-led service organization in the world, and UCI boasts the biggest club in all of Circle K International. 
                        From weekly service projects and leadership events to a welcoming family system and growing mentor-mentee program, there is something for everyone here in CKI, 
                        and we hope you enjoy your time with us from the moment you join! Give more, do more, be more. That's what it means to be part of UC Irvine Circle K!
                    </h4>
                    <p>&nbsp;</p>
                    <h4>To visit our website, please press on the link below: 
                    <a target="_blank" href="http://www.ucicirclek.com/">http://www.ucicirclek.com/</a>
                        </h4>
                </div>
            </div>

            <div class="box-container2">
                <div id="ctg" class="clearbox" data-aos="zoom-in" data-aos-duration="800">
                    <h3>Fundraising for Breast Cancer Support</h3>
                    <p>&nbsp;</p>
                    <h4>
                        This year we are donating all of our proceeds to the Breast Cancer Fundraiser. The Breast Cancer Fundraiser is an
                        organization that supports breast cancer patients with value added services. In their services, they include "WeCare" packages
                        that service breast cancer patients through their treatment and recovery, which focus on
                        beauty, comfort, wellness, journey, and loved ones. They are also work with corporate partners across the country 
                        to host employee engagement events where they get to build packages and personalized notes for future patients in need.
                        In addition to their packages, they also partner with hospitals to bring breast cancer patients together 
                        for an afternoon of community, education, and the distrubution of their packages.
                    </h4>
                </div>

                <div id="pic1" class="clearbox" data-aos="zoom-in" data-aos-duration="800">
                    <a href="https://www.thebreastcancerfundraiser.org/" target="_blank" ><img src="https://i.imgur.com/nEr4TOs.png" style="width: 600px; height: 279px; border-radius: 25px; box-shadow: 5px 5px 10px 10px rgba(0,0,0,0.5);"></a>
                </div>
            </div>

            <div id="donate" data-aos="zoom-in" data-aos-duration="800">
                <center>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                    <h3 style="font-size: 25px;">How to Donate</h3>
                    <p>&nbsp;</p>
                    <h4 style="font-size: 20px;">To donate to the cause, press one of the pictures, use one of <br/>
                        the following methods below, and comment Change Thru Games!
                    </h4>
                    <p>&nbsp;</p>
                    <a target="_blank" href="https://venmo.com/ucicki"><img src="https://i.imgur.com/nuvzpHg.png" alt="Donate through Venmo here!" style="width: 75px; height: 75px"></a>
                    &nbsp; &nbsp; &nbsp; &nbsp; 
                    <a target="_blank" href="https://www.paypal.me/dbanana01"><img src="https://i.imgur.com/i7rZgRF.png" alt="Donate through Paypal here!" style="width: 75px; height: 75px"></a>
                    <p>&nbsp;</p>
                    <h3 style="font-size: 25px;">And a big thank you to our sponsors!</h3>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <a target="_blank" href="https://bouncealerts.com/"><img src="https://i.imgur.com/UY2x3We.png" style="width: 100; height: 100px"></a>
                    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    <a target="_blank" href="https://glassbottomgames.com/"><img src="https://i.imgur.com/we2UW1a.png" style="width: 53px; height: 100px"></a>
                    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    <a target="_blank" href="https://esports.uci.edu/"><img src="https://i.imgur.com/dG7J9ic.png" style="width: 100px; height: 100px"></a>
                    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    <a target="_blank" href="https://tohru.io/#/mainPage"><img src="https://i.imgur.com/KKKvZuV.png" style="width: 100px; height: 100px"></a>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </center>
            </div>


            <section id="commitee">
                <div class="tabs">
                    <div class="tab-header">
                        <div class="active" style="font-size: 18px;">
                            <i class="fa fa-code"></i> CTG Chairs
                        </div>
                        <div style="font-size: 18px;">
                            <i class="fa fa-pencil-square"></i> Admin Team
                        </div>
                        <div style="font-size: 18px;">
                            <i class="fa fa-bar-chart"></i> Comp. Team
                        </div>
                        <div style="font-size: 18px;">
                            <i class="fa fa-envelope"></i> Creative Team
                        </div>
                        <div style="font-size: 18px;"><i></i> Streaming Team
                        </div>
                        </div>
                        <div class="tab-indicator"></div>
                        <div class="tab-content">
                        
                            <div class="ctg-tab active">
                                <div style="margin-left: 0%; margin-bottom: 3%;">
                                    <img class="ctg-img" src="https://i.imgur.com/X8lSVbA.jpg" alt="James" style="width: 120px; height: 120px;"></img>

                                    <h2 style="margin-bottom: 0;">James Molamphy</h2>
                                    <h4>CTG Director</h4>
                                </div>
                                
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="https://i.imgur.com/cXePGIs.png?1" alt="Andre" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Andre Yee</h2>
                                        <h4 style="width: 10em;">Competitive Production Assistant</h4>
                                    </div>
    

                                    <img class="ctg-img-right" src="https://i.imgur.com/BwZztXl.jpg" alt="Chaya" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Chaya Pearl</h2>
                                        <h4 style="width: 10em;">Administrative Production Assistant</h4>
                                    </div>
                                </div>
    
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="./img/Audrey.jpg" alt="Audrey" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Audrey Shi</h2>
                                        <h4 style="width: 10em;">Creative Production Assistant</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="https://i.imgur.com/QdOP7c4.jpg" alt="Mercy" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2 class="h2-name">Mercy Anne Cruz</h2>
                                        <h4 style="width: 10em;">Fundraising Chair</h4>
                                    </div>
                                </div>
    
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="https://i.imgur.com/ocHfiTe.png" alt="Kimhuy" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Kimhuy Ngo</h2>
                                        <h4 style="width: 10em;">Media Chair</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="https://i.imgur.com/ASslEKq.jpg" alt="Brian" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Brian Nguyen</h2>
                                        <h4 style="width: 10em;">Sponsorship Chair</h4>
                                    </div>
                                </div>
    
                                <div class="ctg-row">

                                    <img class="ctg-img-left" src="https://i.imgur.com/qZU0SgJ.jpg" alt="Brandon" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Brandon Kincaid</h2>
                                        <h4 style="width: 10em;">Marketing Chair</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="https://i.imgur.com/RfVQ2Tt.png" alt="CJ" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2 class="h2-name">CJ Cabrera</h2>
                                        <h4 style="width: 10em;">Stream Chair</h4>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="ctg-tab">  
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="https://i.imgur.com/BwZztXl.jpg" alt="Celina" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Chaya Pearl</h2>
                                        <h4 style="width: 10em;">Administrative Production Assistant</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="https://i.imgur.com/ASslEKq.jpg" alt="Izzabella" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Brian Nguyen</h2>
                                        <h4 style="width: 10em;">Sponsorship Chair</h4>
                                    </div>
                                </div>
                                
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="https://i.imgur.com/LUxiWoK.jpg?1" alt="Mercy" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2 class="h2-name">Mercy Anne Cruz</h2>
                                        <h4 style="width: 10em;">Fundraising Chair</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="https://i.imgur.com/GU6iDjK.jpg?1" alt="Celina" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Celina Tiqui</h2>
                                        <h4 style="width: 10em;">Administrative Intern</h4>
                                    </div>
                                </div>
    
                                <div class="ctg-row">

                                    <img class="ctg-img-left" src="https://i.imgur.com/iZH5SIT.jpg" alt="Jon" style="margin-right: 20px;"></img>

                                    <div style="margin-top: 2%;">
                                        <h2>Jon Estrada</h2>
                                        <h4 style="width: 10em;">Administrative Intern</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="https://i.imgur.com/LH80YK0.jpg" alt="Valerie" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Valerie Nguyen</h2>
                                        <h4 style="width: 10em;">Administrative Intern</h4>
                                    </div>
                                </div>

                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="https://i.imgur.com/2DoEMQ8.jpg" alt="Izzabella" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Izzabella Ramiscal</h2>
                                        <h4 style="width: 10em;">Administrative Intern</h4>
                                    </div>
                                </div>

                                
                            </div>
                            
                            <div class="ctg-tab">

                                <div style="margin-left: 0%; margin-bottom: 3%;">
                                    <img class="ctg-img" src="https://i.imgur.com/cXePGIs.png?1" alt="James" style="width: 120px; height: 120px;"></img>
                                    <h2 style="margin-bottom: 0;">Andre Yee</h2>
                                    <h4>Competitive Production Assistant</h4>
                                </div>

                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="./img/BrianL.jpg" alt="BrianL" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Brian Liu</h2>
                                        <h4 style="width: 10em;">Competitive Intern</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="https://i.imgur.com/yhVtSg7.jpg" alt="Jen" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Jen Delgado</h2>
                                        <h4 style="width: 10em;">Competitive Intern</h4>
                                    </div>
                                </div>
    
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="https://i.imgur.com/UBsoR35.jpg" alt="Shania" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Shania Relucio</h2>
                                        <h4 style="width: 10em;">Competitive Intern</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="https://i.imgur.com/tYyQsUB.jpg" alt="William" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>William Nguyen</h2>
                                        <h4 style="width: 10em;">Competitive Intern</h4>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="ctg-tab">
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="./img/Audrey.jpg" alt="Audrey" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Audrey Shi</h2>
                                        <h4 style="width: 10em;">Creative Production Assistant</h4>
                                    </div>

                                    <img class="ctg-img-right" src="https://i.imgur.com/ocHfiTe.png" alt="Kimhuy" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Kimhuy Ngo</h2>
                                        <h4 style="width: 10em;">Media Chair</h4>
                                    </div>
                                </div>
                                
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="https://i.imgur.com/d79Po0O.jpg?1" alt="Brandon" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Brandon Kincaid</h2>
                                        <h4 style="width: 10em;">Marketing Chair</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="./img/Andres.jpg" alt="Andres" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Andres Cervantes</h2>
                                        <h4 style="width: 10em;">Creative Intern</h4>
                                    </div>
                                </div>
    
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="./img/Edith.jpg" alt="Edith" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Edith Crisostomo</h2>
                                        <h4 style="width: 10em;">Creative Intern</h4>
                                    </div>
    

                                    <img class="ctg-img-right" src="https://i.imgur.com/n3ejbDv.jpg" alt="Ian" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Ian Baylon</h2>
                                        <h4 style="width: 10em;">Creative Intern</h4>
                                    </div>
                                </div>  
                                
                                <div class="ctg-row">

                                    <img class="ctg-img-left" src="https://i.imgur.com/pOlr0EY.jpg" alt="Jay" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 4%;">
                                        <h2>Jay Han</h2>
                                        <h4 style="width: 10em;">Creative Intern</h4>
                                    </div>

                                    <img class="ctg-img-right" src="./img/Cynthia.jpg" alt="Cynthia" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Cynthia Yu</h2>
                                        <h4 style="width: 10em;">Creative Intern</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="ctg-tab">
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="https://i.imgur.com/gcLNByF.jpg" alt="Tin" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Tin Luu</h2>
                                        <h4 style="width: 10em;">Stream Caster</h4>
                                    </div>

                                    <img class="ctg-img-right" src="https://i.imgur.com/bcfXtpF.jpg" alt="Arthur" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>Arthur Tham</h2>
                                        <h4 style="width: 10em;">Stream Caster</h4>
                                    </div>
                                </div>
                                
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="./" alt="_" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>[Name]</h2>
                                        <h4 style="width: 10em;">Stream Caster</h4>
                                    </div>
    
                                    <img class="ctg-img-right" src="./" alt="_" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>[Name]</h2>
                                        <h4 style="width: 10em;">Stream Caster</h4>
                                    </div>
                                </div>
    
                                <div class="ctg-row">
                                    <img class="ctg-img-left" src="./" alt="_" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>[Name]</h2>
                                        <h4 style="width: 10em;">Stream Caster</h4>
                                    </div>
    

                                    <img class="ctg-img-right" src="./" alt="_" style="margin-right: 20px;"></img>
                                    <div style="margin-top: 2%;">
                                        <h2>[Name]</h2>
                                        <h4 style="width: 10em;">Stream Caster</h4>
                                    </div>
                                </div>  
                            </div>

                            
                        </div>
                    </div>
                <script src=tab_script.js></script>
            </section>
            
            
            <section id="footer">
            <div id="logos">
                </div>
                <hr class="featurette-divider">
                <span style="font-family: 'Open Sans', sans-serif; color: white;">
                    <center>
                    <p>&nbsp;</p>(c) 2020-2021 University of California, Irvine - Circle K - All Rights Reserved.
                    <br>You may not distribute, copy, nor sell this content without explicit permission from its owner.<br>
                    <p>&nbsp;</p>
                    <button onclick="window.open('https://www.ucicirclek.com/ctg6/')" class="watch-button" type="button" style="font-family: trulymadly; width: 300px">CTG 6: DLC Throwback</button>
                    <p>&nbsp;</p>
                    </center>
                    </span>

                    <div id="emblems" style="float:right; position: relative; top:-125px;">
                        <a target="_blank" href="https://www.facebook.com/groups/cnhckicitrus"><img src="https://i.imgur.com/JKAww4q.png" alt="Citrus Division" style="width: 100px; height: 100px"></a>
                        <a target="_blank" href="http://www.cnhcirclek.org/"><img src="https://i.imgur.com/r43dbsc.png" alt="Cal-Nev-Ha District" style="width: 100px; height: 100px"></a>
                        <a target="_blank" href="http://www.circlek.org/"><img src="http://www.ucicirclek.com/public/css/cki_emblem.png" alt="Circle K International" style="width: 100px; height: 100px"></a>
                        
                    </div>
                   
            </footer>


        </body>
    </head>
</html>
