<!DOCTYPE html>
<html>
<head>
<title>Sistema de informacion de ADOPCION Y EXTRAVIOS DE MASCOTAS</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
 <link href="/css/app.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.boton').mouseover(function(){
                $('audio')[0].play();
            });
            $('.boton2').mouseover(function(){
                $('audio')[1].play();
            });
        });
    </script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            </div>
            <div class="full">
            <div class="menu">
                <ul>
                    <li><a href="/"><h4>Home</h4></a></li>
                    <li><a href="/reviews" ><h4>Mascotas</h4></i></a></li>
                    <li><a href="/contacto"></i><h4>formulario</h4></a></li>
                </ul>
            </div>
            <audio autoplay><source src="sounds/perrofeliz.mp3" type="audio/mp3"></audio>
        <div class="main">
          
        
@yield('content')
<script type="text/javascript">
        $(window).load(function() {
            
          $("#flexiselDemo1").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: false,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 2
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 3
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 4
                    }
                }
            });
            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>    
        </div>
        
        <div class="news">
            <div class="col-md-6 news-left-grid">
                
                <h2>INFORMACION DE MASCOTAS EXTRAVIADAS</h2>
                <h4>INFORMACION DE MASCOTAS EN ADOPCION</h4>
                <a href="#"><i class="book"></i>MASCOTAS</a>
                
            </div>
            <div class="col-md-6 news-right-grid">
                <h3>INFORMACIONES</h3>
                <div class="news-grid">
                    <h5>MASCOTAS EXTRAVIADAS</h5>
                    <label>detalles</label>
                    <p>Se tiene informacion de mascotas recuperadas con posibles dueños para la recuperacion de ella, se brinda fecha y lugar en el que se encontro a la mascota extraviada.</p>
                </div>
                <div class="news-grid">
                    <h5>MASCOTAS EN ADOPCION</h5>
                    <label>detalles</label>
                    <p>Se tiene informacion de mascotas en adopcion para poder adoptarlas segun a los requisitos de cada mascota </p>
                </div>
                
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="more-reviews">
             <ul id="flexiselDemo2">
            <li><img src="images/m1.jpg" alt=""/></li>
            <li><img src="images/m2.jpg" alt=""/></li>
            <li><img src="images/m3.jpg" alt=""/></li>
            <li><img src="images/m4.jpg" alt=""/></li>
        </ul>
            <script type="text/javascript">
        $(window).load(function() {
            
          $("#flexiselDemo2").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: false,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 2
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 3
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>    
        </div>  

    </div>
    </div>
    <div class="clearfix"></div>

        </div>
    </body>
</html>
