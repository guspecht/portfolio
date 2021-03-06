<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gustavo Specht, Software Developer">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,Gustavo Specht, Software Developer">
    <meta name="author" content="Gustavo Specht">

    <!-- Web App Manifest -->
    <link rel="manifest" href="./manifest.json">

    <!-- Favicon -->
    <link rel="icon" href="./img/gustavoSpecht.png">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap v4.4.1/bootstrap.min.css">

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Responsive CSS File -->
    <link rel="stylesheet" href="./css/responsive.css">

    <title>Gustavo Specht</title>
    
</head>
<body>
    <?php
    include('./phpfunctions.php');
    addVisitor();
    ?>

    <!-- Start Header Area -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                
                <a class="navbar-brand" href="https://gustavospecht.com/" title="Go To https://gustavospecht.com/">Gustavo Specht</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>                    
                    <li class="nav-item ">
                        <a class="nav-link" href="#about-me">About Me</a>
                    </li>
                </ul>
                </div>
            </nav>
        </div>

        <!-- Start banner Area -->
        <section id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-white text-center">
                        <h1>Web Developer</h1>
                        <p><i class="fas fa-map-marker-alt"></i> Perth, WA, Australia.</p>                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start Socials Area -->

        <section id="socials">
            <div class="container">
                <div class="row"> 
                    <div class="col-sm-6 col-md-3 move">             
                        <a href="https://www.linkedin.com/in/guspecht" rel="noreferrer" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i><p class="text-white">Linkedin</p></a>                    
                    </div> 
                    <div class="col-sm-6 col-md-3 move">                                     
                        <a href="https://github.com/guspecht?tab=repositories" rel="noreferrer" target="_blank" title="GitHub"><i class="fab fa-github"></i><p class="text-white">Git Hub</p></a>                                                   
                    </div>  
                    <div class="col-sm-6 col-md-3 move">                                                              
                        <a href="mailto: guspecht@hotmail.com" rel="noreferrer" target="_blank" title="Email Me"><i class="fas fa-at"></i><p class="text-white">Email Me</p></a>
                    </div>  
                    <div class="col-sm-6 col-md-3 move last">                                    
                            <a href="files/gustavoSpechtResume.docx" target="_blank" rel="noreferrer" title="Download Resume" download="gustavoSpechtResume"><i class="fas fa-file-download"></i><p class="text-white">Download Resume</p></a>                                                    
                    </div>   
                </div>
            </div>
        </section>

        <!-- End Socials Area -->

    </header>
    <!-- End Header Area -->

    <!-- Start Main Area -->
    <main>
        
        <!-- Start Technologies Area -->
        <section id="technologies">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="https://img.icons8.com/color/48/000000/html-5.png" title="HTML 5" alt="HTML 5">
                        <img src="https://img.icons8.com/color/48/000000/css3.png" title="CSS 3" alt="CSS 3">
                        <img src="https://img.icons8.com/officel/48/000000/php-logo.png" title="PHP" alt="PHP">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://img.icons8.com/color/48/000000/javascript.png" title="Javascript" alt="Javascript">                                         
                        <img src="https://img.icons8.com/color/48/000000/git.png" title="Git" alt="Git">
                        <img src="https://img.icons8.com/color/48/000000/typescript.png" title="Typescript" alt="Typescript">

                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://img.icons8.com/color/48/000000/bootstrap.png" title="Bootstrap" alt="Bootstrap">
                        <img src="https://img.icons8.com/color/48/000000/angularjs.png" title="Angular" alt="Angular">
                        <img src="https://img.icons8.com/color/48/000000/nodejs.png" title="Nodejs" alt="Nodejs">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Technologies Area -->

         <!-- Start Projects Area -->
         <section id="projects">
            <h1 class="text-center">Projects</h1>            
            <div class="container">  

                <!-- Start COVID-19's API Project -->
                <h3 class="project-title">COVID-19's API</h3>
                <div class="row">                                    
                    <div class="col-md-6">                        
                        <div class="card text-center">
                            <video width="100%" height="100%" autoplay loop muted playsinline preload="auto">
                                <source src="./img/covid19stats.mp4" type="video/mp4">                                                              
                            </video>   
                            <div class="card-body">                              
                                <p class="card-text">This Project was made using the follow technologies:</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://angular.io/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="Angular"><img src="https://img.icons8.com/color/32/000000/angularjs.png" alt="Angular"> Angular</a></li> 
                                <li class="list-group-item"><a href="https://covid19.mathdro.id/api" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="Covid19 Mathdro's API"><img src="https://img.icons8.com/bubbles/32/000000/coronavirus.png" alt="Covid19 Mathdro's API"> Covid19 Mathdro's API</a></li>
                                <li class="list-group-item"><a href="https://leafletjs.com/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="Leafletjs Library"><img src="https://img.icons8.com/ultraviolet/32/000000/library.png" alt="Leafletjs"> Leafletjs Library</a></li>                              
                            </ul>
                            <div class="card-body">
                                <a href="https://gustavospecht.com/covid19stats/" rel="noreferrer" target="_blank" class="card-link" title="Go To https://gustavospecht.com/covid19stats/"><i class="fas fa-globe"></i> View Project</a>
                                <a href="https://github.com/guspecht/covid19Stats" rel="noreferrer" class="card-link" target="_blank" title="View Code"><i class="fab fa-github-square"></i> View Code</a>
                            </div>
                            </div>
                    </div>

                    <div class="col-md-6 project-info">
                        <h2 class="text-center font-weight-bold">My Role</h2>
                        <p class="desc">I was responsable to Link my angular website to get the Covid19 Mathdro's API information and make it work with the Leafletjs Library to show the maps.</p>
                        <h2 class="text-center font-weight-bold">Project Difficulties</h2>
                        <p class="desc">It was my first time using a Leafletjs Library and Covid19 Mathdro's API.</p>
                        <h2 class="text-center font-weight-bold">My Solution</h2>
                        <p class="desc">I had to read a lot of documentation.</p>
                        <h2 class="text-center font-weight-bold">Notable Features</h2>
                        <ul>
                            <li>
                                Worked With Covid19 Mathdro's API.
                            </li>
                            <li>
                                Worked With Leafletjs Library.
                            </li>
                        </ul>                        
                    </div> 
                </div>
                <!-- End COVID-19's API Project --> 

                <div class="row">
                    <div class="col-md-12">
                        <hr>                                
                    </div> 
                </div>

                <!-- Start NASA's API Project -->
                <h3 class="project-title">NASA's API</h3>
                <div class="row">                                    
                    <div class="col-md-6">                        
                        <div class="card text-center">
                            <video width="100%" height="100%" autoplay loop muted playsinline preload="auto">
                                <source src="./img/spaceInfo.mp4" type="video/mp4">                                                              
                            </video>   
                            <div class="card-body">                              
                              <p class="card-text">This Project was made using the follow technologies:</p>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><a href="https://angular.io/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="Angular"><img src="https://img.icons8.com/color/32/000000/angularjs.png" alt="Angular"> Angular</a></li> 
                              <li class="list-group-item"><a href="https://api.nasa.gov/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="NASA's API"><img src="https://img.icons8.com/color/32/000000/nasa.png" alt="NASA's API"> NASA's API</a></li>
                              <li class="list-group-item"><a href="https://www.esri.com/en-us/arcgis/about-arcgis/overview" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="ArcGIS's API"><img src="https://img.icons8.com/cute-clipart/32/000000/api.png" alt="ArcGIS's API."> ArcGIS's API</a></li>                              
                            </ul>
                            <div class="card-body">
                              <a href="https://gustavospecht.com/spaceInfo" rel="noreferrer" target="_blank" class="card-link" title="Go To https://gustavospecht.com/spaceInfo"><i class="fas fa-globe"></i> View Project</a>
                              <a href="https://github.com/guspecht/NASA-API" rel="noreferrer" class="card-link" target="_blank" title="View Code"><i class="fab fa-github-square"></i> View Code</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-6 project-info">
                        <h2 class="text-center font-weight-bold">My Role</h2>
                        <p class="desc">I was responsable to Link my angular website to NASA's API using ArcGIS API.</p>
                        <h2 class="text-center font-weight-bold">Project Difficulties</h2>
                        <p class="desc">It was my first time making a website using Angular and working with a NASA's API and the ArcGIS's API.</p>
                        <h2 class="text-center font-weight-bold">My Solution</h2>
                        <p class="desc">To solve this problem i had to read a lot of documentation during the entire process.</p>
                        <h2 class="text-center font-weight-bold">Notable Features</h2>
                        <ul>
                            <li>
                                Worked With NASA's API.
                            </li>
                            <li>
                                Worked With ArcGIS's API.
                            </li>
                            <li>
                                All the 3 Maps are loaded from the NASA's API using the ArcGIS's API.
                            </li>
                            <li>
                                The news is loaded from the NASA's API, everyday you will have a new news from the NASA.
                            </li>
                        </ul>                        
                    </div> 
                </div>
                <!-- End NASA's API Project -->     
                    
                <div class="row">
                    <div class="col-md-12">
                        <hr>                                
                    </div> 
                </div>

                <!-- Start Removal Company Project -->
                <h3 class="project-title">Removal Company</h3>
                <div class="row">                                    
                    <div class="col-md-6">                        
                        <div class="card text-center">
                            <video width="100%" height="100%" autoplay loop muted playsinline preload="auto">
                                <source src="./img/legendz.mp4" type="video/mp4">                                                              
                            </video>   
                            <div class="card-body">                              
                              <p class="card-text">This Project was made using the follow technologies:</p>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><a href="https://laravel.com/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="Laravel"><img src="https://img.icons8.com/windows/32/000000/laravel.png" alt="Laravel"> Laravel</a></li>
                              <li class="list-group-item"><a href="https://www.mysql.com/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="MySql"><img src="https://img.icons8.com/ios/32/000000/mysql-logo.png" alt="MySql"> MySql</a></li>
                              <li class="list-group-item"><a href="https://www.php.net/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="PHP"><img src="https://img.icons8.com/officel/32/000000/php-logo.png" alt="PHP"> PHP</a></li>                              
                            </ul>
                            <div class="card-body">
                              <a href="https://www.legendz.com.au/" rel="noreferrer" target="_blank" class="card-link" title="Go To https://www.legendz.com.au/"><i class="fas fa-globe"></i> View Project</a>
                              <a rel="noreferrer" class="card-link" target="_blank" title="View Code Disabled"><i class="fab fa-github-square"></i> Private Code</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-6 project-info">
                        <h2 class="text-center font-weight-bold">My Role</h2>
                        <p class="desc">In this project i met regularly with the client discussing project requirements, vision and end goals.</p>
                        <h2 class="text-center font-weight-bold">Project Difficulties</h2>
                        <p class="desc">This project really tested my skills, it was my first time working with Laravel Framework and i was alone in this journey. So i had to use a pre build template and focus in the rest of the project.</p>
                        <h2 class="text-center font-weight-bold">My Solution</h2>
                        <p class="desc">To solve this struggle, i had to start a Laravel Course and read a lot of documentation to be able to solve all the client needs.</p>
                        <h2 class="text-center font-weight-bold">Notable Features</h2>
                        <ul>
                            <li>
                                Worked With blade templates.
                            </li>
                            <li>
                                Send email to the client after a quote and save it in database to store data.
                            </li>
                        </ul>                        
                    </div> 
                </div>
                <!-- End Removal Company Project -->     
                    
                <div class="row">
                    <div class="col-md-12">
                        <hr>                                
                    </div> 
                </div>

                <!-- Start Channel Website Project -->            
                <h3 class="project-title">Channel Website</h3>                   
                <div class="row">                                                              
                    <div class="col-md-6"> 
                                        
                        <div class="card text-center">
                            <video width="100%" height="100%" autoplay loop muted playsinline preload="auto">
                                <source src="./img/gustavoSpechtYoutube.mp4" type="video/mp4">                                                              
                            </video>                            
                            <div class="card-body">                              
                                <p class="card-text">This Project was made using the follow technologies:</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://www.php.net/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="PHP"><img src="https://img.icons8.com/officel/32/000000/php-logo.png" alt="PHP"> PHP</a></li>
                                <li class="list-group-item"><a href="https://www.w3schools.com/css/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="CSS 3"><img src="https://img.icons8.com/color/32/000000/css3.png" alt="CSS 3"> CSS 3</a></li>
                            <li class="list-group-item"><a href="https://www.w3schools.com/html/html5_intro.asp" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="HTML 5"><img src="https://img.icons8.com/color/32/000000/html-5.png" alt="HTML 5"> HTML 5</a></li>
                            </ul>
                            <div class="card-body">
                                <a href="https://gustavospecht.com/youtube/" rel="noreferrer" target="_blank" class="card-link" title="Go To https://gustavospecht.com/youtube/"><i class="fas fa-globe"></i> View Project</a>
                                <a href="https://github.com/guspecht/youtube-channel-site" rel="noreferrer" class="card-link" target="_blank" title="View Code"><i class="fab fa-github-square"></i> View Code</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 project-info">
                        <h2 class="text-center font-weight-bold">My Role</h2>
                        <p class="desc">This was a project for my youtube channel, i was responsable for everything such as layout, color picking, design, content and so on.</p>
                        <h2 class="text-center font-weight-bold">Practice my skills</h2>
                        <p class="desc">It was a good project to practice my skills, PHP, html 5 and css3. </p>                        
                        <h2 class="text-center font-weight-bold">Notable Features</h2>
                        <ul>
                            <li class="">
                                It's full responsive without bootstrap.
                            </li>
                            <li>
                                Save the contact form/newsletter information such as name, email, text, ip, date in a .json file.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Channel Website Project -->

                <div class="row">
                    <div class="col-md-12">
                        <hr>                                
                    </div> 
                </div>

                <!-- Start Portfolio Project -->
                <h3 class="project-title">Portfolio</h3>   
                <div class="row">                                                  
                    <div class="col-md-6">                        
                        <div class="card text-center">
                            <video width="100%" height="100%" autoplay loop muted playsinline preload="auto">
                                <source src="./img/portfolio.mp4" type="video/mp4">                                                                             
                            </video>
                            <div class="card-body">                              
                                <p class="card-text">This Project was made using the follow technologies:</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://getbootstrap.com/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="Bootstrap"><img src="https://img.icons8.com/color/32/000000/bootstrap.png" alt="Bootstrap"> Bootstrap</a></li>
                                <li class="list-group-item"><a href="https://www.w3schools.com/css/" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="CSS 3"><img src="https://img.icons8.com/color/32/000000/css3.png" alt="CSS 3"> CSS 3</a></li>
                                <li class="list-group-item"><a href="https://www.w3schools.com/html/html5_intro.asp" rel="noreferrer" target="_blank" class="btn btn-primary btn-block" role="button" aria-pressed="true" title="HTML 5"><img src="https://img.icons8.com/color/32/000000/html-5.png" alt="HTML 5"> HTML 5</a></li>
                            </ul>
                            <div class="card-body">
                                <a href="https://gustavospecht.com/" rel="noreferrer" target="_blank" class="card-link" title="Go To https://gustavospecht.com/"><i class="fas fa-globe"></i> View Project</a>
                                <a href="https://github.com/guspecht/portfolio" rel="noreferrer" class="card-link" target="_blank" title="View Code"><i class="fab fa-github-square"></i> View Code</a>
                            </div>
                            </div>
                    </div>

                    <div class="col-md-6 project-info">
                        <h2 class="text-center font-weight-bold">My Portfolio</h2>
                        <p class="desc">This is the website that you are right now.</p>
                        <h2 class="text-center font-weight-bold">Show my Work</h2>
                        <p class="desc">It was a excellent project to be able to show my skills and what i have done until now. </p>                        
                        <h2 class="text-center font-weight-bold">Notable Features</h2>
                        <ul>
                            <li class="">
                                Worked with bootstrap.
                            </li>
                            <li>
                                Fully Responsive.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Portfolio Project -->   

            </div>
        </section>
        <!-- End Projects Area -->

        <!-- Start About-me Area -->
        <section id="about-me">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center"> About Me</h1>
                        <p>Gustavo Specht is a Web Developer who <strong> loves technology </strong> and he believes that coding alone is hard and progress is slow, working with a team is a two way relationship where he can provide  <strong>value to you</strong>, while you invest on him!</p>
                        <p>Gustavo is currently studying <strong>MEAN stack</strong> and seeking for a full time job. he is always interested in a challenge. Reach out to guspecht@hotmail.com to connect!</p>                    
                    </div>    
                </div>
            </div>
        </section>
        <!-- End About-me Area -->

    </main>
    <!-- End Main Area -->

    <!-- Start Footer Area -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy;2020 all rights reserved | This template is made by <a href="https://www.gustavospecht.com">Gustavo Specht</a>.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/Bootstrap v4.4.1/bootstrap.min.js"></script> 
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c7ea7a1c74.js" crossorigin="anonymous"></script>

    <!-- Custom JS File -->
    <script src="./js/main.js"></script>




</body>
</html>