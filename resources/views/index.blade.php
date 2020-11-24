<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Autoservis</title>
        <!--Font awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!--Scroll reveal CDN-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
        
 
    </head>
    <body>
        <header> <!--Navigacia + logo-->
            <div class="container">
                <nav class="nav">
                    <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </div>
                    <a href="index.html" class="logo"><img src="{{asset('public/images/logo-autospeed.jpg')}}" alt=""></a>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link active">Domov</a>
                        </li>
                        <li class="nav-item">
                            <a href="about-us" class="nav-link">O&nbsp;NÁS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">SLUŽBY</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">EMISNÁ&nbsp;KONTROLA</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">OBJEDNAŤ&nbsp;sa</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">KONTAKT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Header ends-->

        <!-- Sipka ktora nas posle na vrch stranky-->
        <section class="hero" id="hero">
            <div class="container">
                <h2 class="sub-headline">
                    <span class="first-letter">A</span>utoservis
                </h2>
                <h1 class="headline">Auto-speed</h1>
                <div class="headline-description">
                    <div class="separator">
                        <div class="line line-left"></div>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        <div class="line line-right"></div>
                    </div>
                    <div class="single-animation">
                        <h5>Prievidza</h5>
                        <a href="#" class="btn cta-btn">O nás</a>
                    </div>
                </div>
            </div>
        </section>
            <!-- Hero ends-->
            <!-- About us -->
            
        <section class="about-us">
            <div class="container">
                    <div class="autoservis-info">
                        <div class="autoservis-description padding-right animate-left">
                            <div class="global-headline">
                                <h2 class="sub-headline">
                                    <span class="first-letter">N</span>áš
                                </h2>
                                <h1 class="headline headline-dark">príbeh</h1>
                                <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                            </div>
                            <p>
                                Firma vznikla v roku 2001 v areáli bývalého družstva v Prievidzi. V našich začiatkoch sme vykonávali len menšie mechanické a klampiarske práce. Neskoršie sa firma rozšírila o striekací box a lakovňu. Firma sa stále rozširuje o nové možnosti ako je diagnostika, el. rozvody,GO, emisná kontrola atď.
                            </p>
                        </div>
                        <div class="autoservis-info-img animate-right">
                            <img src="{{url('public/images/sluzby_background.jpg')}}" alt="">
                        </div>
                    </div>
            </div>
        </section>
        <!-- O nas  ends-->
        <!-- Sluzby -->
        <section class="sluzby py-5 bg-light">
            <div class="services-section">
                <div class="inner-width">
                    <div class="section-title">
                        <div class="global-headline-services">
                            <h2 class="sub-headline">
                                <span class="first-letter">N</span>aše
                            </h2>
                            <h1 class="headline headline-dark">Služby</h1>
                            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        </div>
                    </div>
                  <div class="services-container">
          
                    <div class="service-box">
                      <div class="service-icon">
                        <i class="fas fa-stethoscope"></i>
                      </div>
                      <div class="service-title">Diagnostika vozidiel</div>
                      <div class="service-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                      </div>
                    </div>
          
                    <div class="service-box">
                      <div class="service-icon">
                        <i class="fas fa-balance-scale"></i>
                      </div>
                      <div class="service-title">Geometria</div>
                      <div class="service-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                      </div>
                    </div>
          
                    <div class="service-box">
                      <div class="service-icon">
                        <i class="fas fa-temperature-low"></i>
                      </div>
                      <div class="service-title">Servis klimatizácii</div>
                      <div class="service-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                      </div>
                    </div>
          
                    <div class="service-box">
                      <div class="service-icon">
                        <<i class="fas fa-spray-can"></i>
                      </div>
                      <div class="service-title">Lakovanie</div>
                      <div class="service-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                      </div>
                    </div>
          
                    <div class="service-box">
                      <div class="service-icon">
                        <i class="fas fa-wrench"></i>
                      </div>
                      <div class="service-title">Automechanické práce</div>
                      <div class="service-desc">
                        
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                        
                        </div>
                    </div>
          
                    <div class="service-box">
                      <div class="service-icon">
                        <i class="fas fa-car-crash"></i>
                      </div>
                      <div class="service-title">Autoklampiarske práce</div>
                      <div class="service-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                      </div>
                    </div>

                    <div class="service-box">
                        <div class="service-icon">
                          <i class=""></i>
                        </div>
                        <div class="service-title">Pneuservis</div>
                        <div class="service-desc">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                        </div>
                      </div>

                      <div class="service-box">
                        <div class="service-icon">
                          <i class="fas fa-object-ungroup"></i>
                        </div>
                        <div class="service-title">Emisná kontrola</div>
                        <div class="service-desc">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                        </div>
                      </div>

                      <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div class="service-title">Odťahová služba</div>
                        <div class="service-desc">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </section>
        
        <!-- Sluzby  ends-->
        <!--Formular-->
        <section class="discover-our-menu">
            <div class="container">
                <div class="autoservis-info">
                    <div class="image-group padding-right animate-left">
                        <img src="{{url('public/images/sluzby.jpg')}}" alt="">
                        <img src="{{url('public/images/sluzby2.jpg')}}" alt="">
                        <img src="{{url('public/images/sluzby3.jpg')}}" alt="">
                        <img src="{{url('public/images/sluzby4.jpg')}}" alt="">
                    </div>
                    <div class="autoservis-description animate-right">
                        <div class="global-headline">
                            <h2 class="sub-headline">
                                <span class="first-letter">E</span>misná
                            </h2>
                            <h1 class="headline headline-dark">Kontrola</h1>
                            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, optio aliquid? Optio ea a porro veniam cum, perferendis enim, rem rerum temporibus et nobis eaque earum aliquid incidunt nulla in.
                        </p>
                        <a href="#" class="btn body-btn">Objednajte sa tu</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Formular, ale mali byt sluzby ends-->
        <section class="about-us">
            <div class="container">
                    <div class="autoservis-info">
                        <div class="autoservis-description padding-right animate-left">
                            <div class="global-headline">
                                <h2 class="sub-headline">
                                    <span class="first-letter">N</span>ájdete
                                </h2>
                                <h1 class="headline headline-dark"> nás</h1>
                                <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                            </div>
                            <p>     
                                    <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Adresa</h2>
                                    <p>Severná 13, Prievidza, 97101</p>
                                    <h2><i class="fa fa-phone" aria-hidden="true"></i> Telefón</h2>
                                    <p>Mikuš: +421 907 582 904 <br>
                                        Paprčka: +421 908 232 080 <br>
                                        Firma: 046/542 7302
                                    </p>
                                    <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
                                    <p>maros.autospeed@gmail.com</p>
                                    <h2><i class="fas fa-lock-open"></i> Otváracie hodiny</h2>
                                    <p>Pondelok-Piatok <br>
                                        8:00-16:30
                                    </p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                            </p>
                        </div>
                        <div class="autoservis-info-img animate-right">
                            <div class="mapWrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.5779084590986!2d18.6357560156713!3d48.770856379279046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4714dc5a1b1b5741%3A0x9b6e8f23fc611e26!2sAUTO-SPEED%20s.r.o!5e0!3m2!1ssk!2ssk!4v1606162877083!5m2!1ssk!2ssk" width="577" height="681" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>  
                        </div>
                    </div>
            </div>
        </section>
        <!--Culinary deligt ends-->
        <footer>
            <div class="container">
                <div class="back-to-top">
                    <a href="#hero"><i class="fas fa-chevron-up"></i></a>
                </div>
                <div class="footer-content">
                    <div class="footer-content-about animate-top">
              
                        <div class="footer-content-divider animate-bottom">
                            <div class="footer-section links">
                                <h4>MENU</h4>
                                <div class="border"></div>
                                    <ul>
                                        <a href=""><li>DOMOV</li></a>
                                        <a href=""><li>O NÁS</li></a>
                                        <a href=""><li>SLUŽBY</li></a>
                                        <a href=""><li>EMISNÁ KONTROLA</li></a>
                                        <a href=""><li>OBJEDNAŤ SA</li></a>
                                    </ul>
                            </div>
                            <div class="footer-section social-media">

                                <h4>Kontakt</h4>
                                <div class="border"></div>
                                <ul>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Severná 13, Prievidza, 97101 </li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> Mikuš: +421 907 582 904 <br>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> Paprčka: +421 908 232 080 </li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> Firma: 046/542 7302 </li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> maros.autospeed@gmail.com</li>
                                </ul>

                                <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-section open-hours">

                                <h4>Otváracie hodiny</h4>
                                <div class="border"></div>
                                <table class="social-icons">
                                    <tr><th><p>Pondelok-Piatok</p></th></tr>
                                    <tr><th><p>8:00-16:30</p></th></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <script src="{{asset('public/js/main.js')}}"></script>
   
    
    </body>
</html>