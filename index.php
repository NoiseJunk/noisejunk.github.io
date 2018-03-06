<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "info@fortnightinflorida.com";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                                
            }
            
        }        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='https://fonts.googleapis.com/css?family=Quicksand|Pacifico|Orbitron:400,500,700|Michroma' rel='stylesheet' type='text/css'>
        <link rel="icon" href="resources/img/palm1.jpg">
        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
	#mc_embed_signup{background:rgba(62, 171, 191, 0); clear:left; font:16px; width:100%;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        
        <title>Fortnight In Florida | Official Website</title>
    
    
    </head>
    <body>
            <header>
               <!---
                <div class="main-title">
                    <h1>Fortnight In Fl</h1>
                </div>
                !--->
                   <nav>
                            <div class="row">
                                        <div class="social-nav">
                                            <ul class="social-links">
                                            <li><a href="http://www.facebook.com/fortnightinflorida" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="http://www.twitter.com/fortnightinfl" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="https://soundcloud.com/fortnightinflorida" target="_blank"><i class="ion-cloud"></i></a></li>
                                            <li><a href="https://www.instagram.com/fortnightinflorida/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCMDHl-9enRpswTfzUohTNmA" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                        </ul>

                                        </div>
                                    
                                
                                      <ul class="main-nav js--main-nav">
                                        <li> <a href="#funding">News</a></li>
                                        <li> <a href="#music">Music</a></li>
                                        <li> <a href="#press">Press</a></li>
                                        <li> <a href="#tour">Tour</a></li>
                                        <li> <a href="#videos">Videos</a></li>
                                        <li> <a href="http://fortnightinflorida.bigcartel.com" target="_blank">Shop</a></li>
                                        <li> <a href="#about1">About</a></li>
                                        <li> <a href="#contact">Contact</a></li>
                                    
                                    </ul>
                                
                            
                                
                                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a> 
                            </div>
                              
                        
                    </nav>
               <!-- <div class="launch-poster">
                    <img src="resources/img/Facebook-Event-lighter.jpg" alt="eplaunch">
                </div>
                !--->
                <!---
                <div class="block">
                    <h1>FORTNIGHT IN FLORIDA</h1>
                    !--->
                    <div class="debut-news">
                    <p>Debut Album - arriving early 2018!</p>
                    </div>
                
                    <h1><img src="resources/img/FL%20LOGO%20white.png" alt="FIFLLOGO" id="logo"></h1>
                
                    <!-- Begin MailChimp Signup Form -->
<div class="mailing-list">
       <div id="mc_embed_signup">
<form action="https://fortnightinflorida.us17.list-manage.com/subscribe/post?u=3613f5becb23c7eba4dd69ec8&amp;id=0ac4614a39" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Come join our mailing list:</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3613f5becb23c7eba4dd69ec8_0ac4614a39" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>         
                
</div>

<!--End mc_embed_signup-->
                    
                    <div class="spotify-follow">
                        <iframe src="https://embed.spotify.com/follow/1/?uri=spotify:artist:6rAdr6N0K8zfMTufUvOqnp&size=basic&theme=dark&show-count=0" width="200" height="25" id="spotify" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                    </div>        
                    
            </header>
        
        <section class="section-funding js--section-funding" id="funding">
            <h2 class="funding">Latest News!</h2>
            <p>Thanks to everyone who donated to our Debut Album Campaign - The Album is now mixed and Mastered - We're just doing the artwork!</p> 
            <p>We are so grateful for your support!</p>
            <p>Rockfield studios was amazing and you can see our Campaign and daily diary videos in full below</p>
            <div class="row">
                <div class="col span-1-of-2">
                    <iframe width="80%" height="400px" src="https://www.youtube.com/embed/videoseries?list=PLdBS5ouiZtLEUd4i_l0w5baXpUbJtbiH5" frameborder="0" allowfullscreen class="ep"></iframe>
                </div>
                <div class="col span-1-of-2">
                    <h4><em>Coming Soon:</em></h4>
                    <img src="resources/img/Inflight.jpg" class="inflight">
                
                </div>    
            </div>
        </section>
        
        <section class="section-music js--section-music" id="music">
            <h2>Music</h2>
            
            <!---
            <div class="row shop-link-div">
                <a href="https://open.spotify.com/artist/6rAdr6N0K8zfMTufUvOqnp" target="_blank"><img src="resources/img/spotify.jpg" class="shop-links"></a>
                <a href="https://itunes.apple.com/us/artist/fortnight-in-florida/id879117725#" target="_blank"><img src="resources/img/itunes.jpg" class="shop-links"></a>
            </div>

          !--->

            <div class="row">
                    <div class="playerdiv">
                        <iframe class="player" width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/181149478&amp;color=00aabb&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    </div>
            </div>
            
        </section>

        <section class="section-press" id="press">
                    <h2>Press</h2>
                    <div class="row box">   
                        <div class="col span-1-of-4 press-box">
                            
                                <a href="http://glas.to/ETC16long" target="_blank"> <img src="resources/img/longlisted.jpg" alt="glasto"></a>
                            
                        
                        </div>
                        <div class="col span-1-of-4 press-box">
                            
                                <a href="http://members.theunsignedguide.com/blog/607" target="_blank"><img src="resources/img/Unisgnedg.png" alt="unsigned"></a>
                            
                            
                        </div>
                        <div class="col span-1-of-4 press-box">
                            
                                <a href="http://freshonthenet.co.uk/2016/05/faves199/" target="_blank"><img src="resources/img/Freshnet2.png" alt="Freshnet2"></a>
                            
                            
                        </div>
                        <div class="col span-1-of-4 press-box">
                            
                                <a href="http://freshonthenet.co.uk/2015/05/faves153/" target="_blank"> 
                               <img src="resources/img/freshnet1.png" alt="freshnet1"></a>
                            
                          
                        </div>
                            
            </div>
            <div class="quotes">
                
                <blockquote><em>"Smooth electronic soul with lovely gently shuffling beats and gorgeous muted guitars"</em></blockquote>
                <br>
                <p class="author">blackplastic.co.uk</p>
                
                <br>
            
                <blockquote><em>“The intro to this song dangerously flirts with a slow disco vibe (I actually thought it was Daft Punk), however, when singer Simon Middleton settles us down with a simple gesture of ‘It’s alright’, the song finds direction with subtle, ambient synths keeping the groove flowing accompanied but some excellent fills and progression by drummer Andrew Gallop (great name for a drummer).”</em></blockquote>
                <br>
                <p class="author">Bobby – Fresh On The Net’s Fresh Favs 199</p>
                
                <br>
                
                <blockquote><em>"Droning ambient hypnotism at it’s finest. Fans of The American Analogue Set please stop here."</em></blockquote>
                <br>
                <p class="author">blornagain</p>

                
            </div>
            </section>
        

        <section class="section-tour" id="tour">
            <h2>Tour</h2>
        <a href="http://www.songkick.com/artists/8259243" class="songkick-widget" data-theme="dark" data-track-button="on" data-detect-style="true" data-background-color="transparent">Fortnight In Florida tour dates</a>
<script src="//widget.songkick.com/widget.js"></script>    
        
            <div class="previous-gigs">
            
                <h3>Previous Gigs</h3>
                
                <br>
                
                    <p>Wilkestocke Festival, Herts</p>
                    <p>Westway LAB Festival, Portugal</p>
                    <p>Cargo, London</p>
                    <p>The Brunswick, Brighton</p> 
                    <p>Amersham Arms, New Cross</p> 
                    <p>Freedom Bar &amp; Club, Soho</p>
                    <p>Paradise - By way of Kensal Rise</p>
                    <p>The Horn, St. Albans</p>
                    <p>Yamaha Music Store, London</p> 
                    <p>93 Feet East, London</p> 
                     
                    
            </div>
            
            
        </section> 
        
        <section class="section-videos" id="videos">
            <h2>Videos</h2>
            <div class="row">
                <div class="ep">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZmQXESVlChQ" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="ep">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/kBU3A0GEuS8" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="ep">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/lsIHz2U_-e8" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="ep">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/0k4FuaJfOX4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
                
                
            
            
        </section>
        
        <section class="section-gallery">
            
            <ul class="gallery-showcase clearfix">
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGEp.jpg" alt="IGEp">
                    </figure>
                    
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/AIR.jpg" alt="Air">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGMaster.jpg" alt="IGMaster">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGPemises.jpg" alt="IGPremises">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/SEAmersham.jpg" alt="SEAmersham">
                    </figure>
                    
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGShaeds.jpg" alt="IGShades">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGSimon.jpg" alt="IGSimon">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGTrolley.jpg" alt="IGTrolley">
                    </figure>
                </li>
            </ul>
            <ul class="gallery-showcase clearfix">
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGWilke.jpg" alt="IGWilke">
                    </figure>
                    
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/Rockfield.jpg" alt="Rockfield">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGWilke2.jpg" alt="IGWilke2">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/SAmersham.jpg" alt="SAmersham">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGplane.jpg" alt="IGPlane">
                    </figure>
                    
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/Roadtrip.jpg" alt="Roadtrip">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/GAmersham.jpg" alt="GAmersham">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IGheartbreaker.jpg" alt="IGHeartbreaker">
                    </figure>
                </li>
            </ul>
        </section>
        
        
        
        <section class="section-about" id="about1">
                    <h2>About</h2>

            <div class="about">
            <p>‘Fortnight In Florida’ are a London based trio hailing Toro Y Moi, Holy Ghost! and Hot Chip amongst their biggest influences.</p><br>

            <p>Born from a shared love of disco, synth pop, and encyclopaedic regurgitations of Alan Partridge quotes, ‘Fortnight In Florida’ symbolises the anticipation of escaping the daily grind, expressed by their own brand of ‘Chilled Electronic Pop’.</p>

            <br>

            <p>After finishing a tour as Keys player for Lianne La Havas, the bands Singer-songwriter Simon Middleton met Eamonn Dawe (Bass/Guitars) on a previous musical venture and ‘Fortnight In Florida' was formed, shortly followed by Andrew Gallop on Drums.</p>
            <br>

            <p>With 3 singles and a debut EP 'So Long' released in 2016, ‘Fortnight In Florida’ made the ‘Glastonbury 2016 Emerging Talent Longlist’ and the ‘Unsigned Guide's Emerging Acts of 2017’ list having already featured in their Spotlight blog - their tracks <em>'Cameo'</em> and <em>'It's Alright'</em> both made the 'Fresh On The Net' Fresh faves, and enjoyed Radio play on BBC6 Music and Amazing Radio. </p>  
            <br>    

            <p>In 2017 they launched a crowd funding campaign to help them raise funds to record their debut album at Rockfield in South Wales, UK. With the final touches being made to the album they look set to release the album in the Spring 2018.</p>

                    </div>
            
            
        </section> 
        
        <section class="contact-container" id="contact">
        
        <div class="contact clearfix">
        <h2>Contact</h2>
            
            <div id="error"><? echo $error.$successMessage; ?></div>
            
          <div class="contacts">

              <form method="post">
                  <fieldset class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" >
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="exampleTextarea">What would you like to ask us?</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                  </fieldset>
                  <button type="submit" id="submit" class="btn">Submit</button>
                </form>  

            </div>      
      
          
        </div>
        <div class="direct-contacts">
            <a href="mailto:info@fortnightinflorida.com"><p><i class="ion-ios-email"></i> info@fortnightinflorida.com</p></a>
            
        </div>    
        </section>
        
        
        
<!---
            <section class="section-gallery" id="gallery">
            
        <img src="resources/img/ZigfidBW.jpg" width="100%">
        <!---        
            <div class="row gallery-row">
            <ul class="gallery-showcase">
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/FortnightinFlorida.jpg" alt="FIF">
                    </figure>
                </li>
                <li>    
                    <figure class="gallery-photo">
                        <img src="resources/img/Workshoplive.png" alt="Workshop live">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IMG_3716.JPG" alt="Fifplane">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/IMG_3644.JPG" alt="Workshop live">
                    </figure>
                </li>
            </ul>
            <ul class="gallery-showcase">
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/Workshoplive.png" alt="wilkestock">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/Workshoplive.png" alt="Workshop live">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/Workshoplive.png" alt="Workshop live">
                    </figure>
                </li>
                <li>
                    <figure class="gallery-photo">
                        <img src="resources/img/Workshoplive.png" alt="Workshop live">
                    </figure>
                </li>
            </ul>
            
         </div>

         !--->
   
        
  <!---
       <section class="section-contact" id="contact">
            <h2>Contact</h2>
            <div class="row">
                <form method="post" action="#" class="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Mailing List?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes Please
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Get In Touch</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="your message"></textarea>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp; </label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                            
                        </div>
                    </div>
                </form>
            
            </div>
        
        </section>
        !--->

        <footer class="clearfix">
            
            <div class="foot-copy">
                <p class="copyright">
                Copyright &copy; 2018.  All rights reserved 
                </p>
            </div>
     
        </footer>
        
            <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
    </script>
    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
            <script src="//cdn.jsdelivr.net/g/respond@1.4.2,html5shiv@3.7.3"></script>
            <script src="//cdn.jsdelivr.net/g/respond@1.4.2,html5shiv@3.7.3,selectivizr@1.0.3b"></script>
            <script src="vendors/js/jquery.waypoints.min.js"></script>
            <script src="resources/js/script.js"></script>
        
        
    </body>





</html>