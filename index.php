<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Psoppins%26display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>   
    <title>Manolis Stivaktas</title>
    <meta name="google-site-verification" content="lVOnwmcxkVKnkBPdpINtQqhihC5ORcXLALo_LrDPDWc" />
    <link rel = "icon" 
        href = "https://cdn2.iconfinder.com/data/icons/seo-internet-marketing-6/256/Custom_Coding-512.png" 
        type = "image/x-icon"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>

    <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>  -->
    <button class="scrollToTop" id="myBtn" title="Go to top">Top</button> 

    <div id="home_"></div>
    
    <nav class="navigation-bar">
        <!-- <a href="#"><img class="logo" src="iron-man.jpg" alt="logo of website"></a> -->
        <div class="page-logo">
            <a href="#home_"><p>Manolis Stivaktas</p></a>
        </div>

        <ul id="myLinks">
            <li><a href="#home_"><i class="fa fa-home"></i><div class="mrgn">Home</div></a></li>
            <li><a href="#about_"><i class="fa fa-user"></i><div class="mrgn">About</div></a></li>
            <li><a href="#portfolio_"><i class="fa fa-book"></i><div class="mrgn">Portfolio</div></a></li>
            <li><a href="#contact_"><i class="fa fa-envelope"></i><div class="mrgn">Contact</div></a></li>
        </ul>
        <div class="music-btn">
            <audio id="myMusic"><source src="LaVieEnRose.mp3" type="audio/mp3"></audio>
            <p>Music</p>
            <div class="btn">
                <i class="fa fa-play-circle" id="icon"></i>
                <i class="fa fa-pause-circle" id="icon"></i>
            </div>
        </div>
        <a href="javascript:void(0);" title="Toggle menu" class="mobile-icon-menu" onclick="myFunction()">
            <i class="fa fa-bars"></i>Menu
        </a>
    </nav>
    
    <section>
        <div class="container">
            <div class="introduction">
                <p><span class="mobile" style="color: rgb(21, 147, 219);">&lt;b&gt;</span>Hello<span class="mobile" style="color: rgb(21, 147, 219);">&lt;/b&gt;</span></p>
                <br><p>I'm<span style="color: rgb(21, 147, 219); font-size: 38px;"> Manolis Stivaktas,</span></p>
                <br><p>a B.Sc. Student in Computer Science at the University of Athens!</p>
            </div>
            <div class="about-section-photo2">
                <img src="images/me.jpeg" alt="Self-portrait">
            </div>
            <div  id="about_" style="margin-top: 26.5%;"></div>
            <div id="about">     
                <div class="about-section-text">
                    <div class="title"><i class="fa fa-user mrgn"></i><h1>About</h1></div>
                    <p>
                        Since you've got here, maybe you are interested in learning some things about me! 
                        Currently, I'm in the fourth-year of my bachelor studies, at the <a href="https://www.di.uoa.gr/en" target="_blank">Department of Informatics and Telecommunications</a>,
                        <a href="https://en.uoa.gr/" target="_blank">National and Kapodistrian University of Athens</a>.
                        Throughout these years, multiple fields of Computer Science captured my interest, such as Artificial Intelligence, Databases
                        and Web Development. Up to now, Human-Computer Interaction is the field that I have 
                        enhanced my creativity, by focusing on providing friendly-user experiences. In the meantime, 
                        having undertaken multiple projects for various academic courses, I've built strong foundations in Data Structures and Algorithms, 
                        which contributed in further developing my soft skills e.g. working under pressure, time management, teamwork,
                        communication and problem solving. Last but not least, I am an amateur guitar player, with a 
                        little out of tune voice, who enjoys traditional dancing, photography, hiking and traveling!
                        <br><br>
                    > Stay <span style="color: rgb(230, 188, 53);">true</span> to yourself, yet be open to <span style="color: rgb(230, 188, 53);">learn</span>
                        <br>
                    > <span style="color: rgb(230, 188, 53);">Think</span> about things <span style="color: rgb(230, 188, 53);">ʎlʇuǝɹǝɟɟᴉp</span>
                    </p>
                    <!-- <button class="button">Download CV</button> -->
                </div>
                <div class="about-section-photo">
                    <img src="images/me.jpeg" alt="Self-portrait">
                </div>
            </div>
            <div id="portfolio_"></div>
            <div id="portfolio">                
                <div class="title"><i class="fa fa-book mrgn"></i><h1>Portfolio</h1></div>
                <div class="portfolio-section">
                    <div class="two-images">
                            <div class="image">
                                <a href="https://github.com/mansstiv/Website-Redesign">
                                    <img class="image__img" src="images/prototyping.png" alt="Procedure of prototyping">
                                    <div class="image__overlay image__overlay--primary">
                                        <div class="image__title">Website Redesign</div>
                                        <p class="image__description first">
                                            Redesigned the website of "Ministry of Labour and Social Affairs (Greece)". 
                                            Both front-end (HTML & CSS) and back-end (PHP & MySQL) technologies were used.
                                        </p>
                                        <p class="image__description second">
                                            Ministry of Labour and Social Affairs (Greece), front-end (HTML & CSS), back-end (PHP & MySQL).
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a href="https://github.com/mansstiv/Pacman-Simulation">
                                    <img class="image__img" src="images/pacman.png" alt="Pacman picture">
                                    <div class="image__overlay image__overlay--primary">
                                        <div class="image__title">Pacman Simulation</div>
                                        <p class="image__description first">
                                            Created a pacman simulation in Python, as a part of Berkeley's University Artificial Intelligence course. 
                                            Project is divided into two parts. Firstly a basic agent and multiple search algorithms were implemented. 
                                            In the second part, problem became more complex, while designing intelligent multiagents.
                                        </p>
                                        <p class="image__description second">
                                          Berkeley University AI, Intelligent Agents & Multiagents, General Search Algorithms, Python.                                  </p>
                                    </div>
                                </a>
                            </div>
                    </div>
                    <div class="two-images mrgn-top">
                        <div class="image">
                            <a href="https://github.com/mansstiv/System-Programming">
                                <img class="image__img" src="images/insystem-programming-.png" alt="Inside of a system">
                                <div class="image__overlay image__overlay--primary">
                                    <div class="image__title">System Programming</div>
                                    <p class="image__description first">
                                      Projects created as a part of "System Programming" course. Gained knowledge on thread programming, inter process 
                                      communication (named pipes), low-level I/O and network communication (implemented a multithreading server-client model).  
                                    </p>
                                    <p class="image__description second">
                                        Multithreading Client-Server Model, Processes, Low-Level I/O, Named Pipes, Data Structures. 
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="image">
                            <a href="https://github.com/mansstiv/Comment-Classifier">
                                <img class="image__img" src="images/comment.png" alt="Comment picture">
                                <div class="image__overlay image__overlay--primary">
                                    <div class="image__title">Comment Classifier</div>
                                    <p class="image__description first">
                                        A machine learning system which takes a comment as an input and ranks it as offensive or non-offensive (neutral). 
                                        To measure its effectiveness, the following classification algorithms were used: Naive Bayes, SVM and Random Forest.  
                                    </p>
                                    <p class="image__description second">
                                        Insulting Comments, Machine Learning System, Classification Algorithms, NumPy & Pandas & Scikit-learn.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact_"></div>
            <div id="contact">
                <div class="title"><i class="fa fa-envelope mrgn"></i><h1>Contact</h1></div>
            </div>
            <div class="footer">
                <div class="contact-section">
                    <p>sdi1700152[at]di.uoa.gr</p>
                    <br><p>manolis.stivaktas[at]gmail.com</p>
                    <div class="social">
                        <a href="https://www.facebook.com/manolis.stivaktas/" target="_blank" title="Go to my facebook page"><i class="fa fa-facebook"></i></a>                   
                        <a href="https://www.instagram.com/mansstiv/" target="_blank" title="Go to my instagram page"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/manolis-stivaktas-2481291bb/" target="_blank" title="Go to my linkedin page"><i class="fa fa-linkedin"></i></a>
                        <a href="https://github.com/mansstiv" target="_blank" title="Go to my github page"><i class="fa fa-github"></i></a>
                    </div>
                </div>
                <!-- <img src="poster.jpg" alt="earth background"> -->
            </div>
        </div>
    </section>


 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            $(".music-btn .fa-play-circle").on('click', function(){
                $(this).hide();
                $(".fa-pause-circle").fadeIn();
                $("#myMusic")[0].play();
                $("#myMusic")[0].loop = true;
            });
            $(".music-btn .fa-pause-circle").on('click', function(){
                $(this).hide();
                $(".fa-play-circle").fadeIn();
                $("#myMusic")[0].pause();
            });
        });
        
        // Scrolling effects for navlinks
        $(document).ready(function(){

            var $root = $('html, body');
            $('.navigation-bar a').click(function() {
                var href = $.attr(this, 'href');

                $root.animate({
                    scrollTop: $(href).offset().top
                }, 950, function () {
                    window.location.hash = href;
                });

                return false;
            });
        });

        // Code inspired by https://www.lambdatest.com/blog/browser-compatible-smooth-scrolling-with-css-js-jquery/
        // Scroll to top button
        $(document).ready(function(){
            var $root = $('html, body');

            // Check to see if the window is top if not then display button
            $(window).scroll(function(){
                if ($(this).scrollTop() > 20) {
                    $('.scrollToTop').fadeIn(200)
                } else {
                    $('.scrollToTop').fadeOut(200);
                }
            });

            //Click event to scroll to top
            $('.scrollToTop').click(function(){
                $root.animate({scrollTop : 0},950);
                return false;
            });    
        });   

        function myFunction() {
            var x = document.getElementById("myLinks");
            // var link = documentquerySelectorAll("li");
            if (x.style.display === "flex") {
                x.style.display = "none";

            } else {
                x.style.cssText = "display:flex;"
            }
        }         

    </script>


</body>
</html>


