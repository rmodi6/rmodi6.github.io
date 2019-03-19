<?php
  header('Access-Control-Allow-Origin: https://rmodi6.github.io');
  header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
  header('Access-Control-Max-Age: 1000');
  header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $to = "modi.ruchit6+webhost@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $name . " contacted me through my Website.";
    $subject2 = "Thank You!";
    $message = "Hi Ruchit,\n" . $_POST['message'];
    $message2 = "Hi " . explode(" ", $name)[0] . ",\nGlad to hear from you and looking forward to what you have to say. Your message is important to me and I will respond as soon as possible.\nThank You! :)\n\nRegards,\nRuchit Modi.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Ruchit Modi</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="paper/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109519426-1"></script>
    <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109519426-1');
    </script>
  </head>

  <body id="ruchit-modi" data-spy="scroll" data-target="#navigation-bar">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navigation-bar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand smooth-scroll" href="#ruchit-modi" title="Back To Top">Ruchit Modi</a>
        </div>
        <!-- navbar-collapse -->
        <div class="collapse navbar-collapse" id="navbar">
          <a href="download/Resume_Ruchit_Modi.pdf" title="Download My Resume" class="btn btn-success navbar-btn navbar-right"><span class="glyphicon glyphicon-file"></span> Resume</a>
          <ul class="nav navbar-nav">
            <li role="presentation" class="active"><a class="smooth-scroll" href="#about-me" title="Read About Me">About Me</a></li>
            <li role="presentation"><a class="smooth-scroll" href="#skills" title="Look At My Skills">Skills</a></li>
            <li role="presentation"><a class="smooth-scroll" href="#stuffs-made" title="See Stuffs Made">Stuffs Made</a></li>
            <li role="presentation"><a class="smooth-scroll" href="#contact-me" title="Say Hi">Contact Me</a></li>
          </ul>
        </div>
        <!--navbar-collapse -->
      </div>
    </nav>
    <!-- End Navigation Bar -->

    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <div class="container">
        <br /><br /><br /><br /><br /><br />
        <h1>&lt;RUCHIT-MODI&gt;</h1>
        <p>An Aspiring Coder</p>
        <ul class="share-buttons">
          <li><a href="https://www.facebook.com/rmodi6" title="Facebook" target="_blank"><img src="images/flat_web_icon_set/color/Facebook.png"></a></li>
          <li><a href="https://twitter.com/rmodi6" target="_blank" title="Twitter"><img src="images/flat_web_icon_set/color/Twitter.png"></a></li>
          <li><a href="https://plus.google.com/+RuchitModi" target="_blank" title="Google+"><img src="images/flat_web_icon_set/color/Google+.png"></a></li>
          <li><a href="https://www.linkedin.com/in/rmodi6" target="_blank" title="LinkedIn"><img src="images/flat_web_icon_set/color/LinkedIn.png"></a></li>
          <li><a href="https://github.com/rmodi6" target="_blank" title="GitHub"><img src="images/flat_web_icon_set/color/GitHub-light.png"></a></li>
          <li><a href="mailto:modi.ruchit6+webhost@gmail.com?subject=&body=Hi%20Ruchit%2C%0D" target="_blank" title="Email"><img src="images/flat_web_icon_set/color/Email.png"></a></li>
        </ul>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- About Me -->

    <div class="container">
      <section>
        <div class="page-header" id="about-me">
          <h2>About Me</h2>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <span class="glyphicon glyphicon-briefcase"></span>
                <h4><strong>Work</strong></h4>
                <p>Working as a Software Development Engineer Level 2 at <strong>Media.Net</strong>. Developing applications that help display contextually relevant advertisement keywords on publisher pages.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <span class="glyphicon glyphicon-book"></span>
                <h4><strong>Education</strong></h4>
                <p>Pursued Bachelor of Technology Degree in Information Technology from the prestigious <strong>Veermata Jijabai Technological Institute</strong>, Mumbai. Learned about software development and different programming languages.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <span class="glyphicon glyphicon-bookmark"></span>
                <h4><strong>Extra-Curricular</strong></h4>
                <p>From Kindergarten to High School, participated in various academic and non-academic competitions (&amp; won some of them). Held the post of Treasurer at 'Interact Club', a social service club.<br /></p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <span class="glyphicon glyphicon-star"></span>
                <h4><strong>Goals</strong></h4>
                <p>To become a software engineer, and create and revolutionize technology by automating almost everything in the future. Developing softwares to help simplify various day-to-day activities.<br /><br /></p>
              </div>
            </div>
          </div>

        </div>
        <!-- End Row -->
      </section>
    </div>
    <!-- End About Me -->

    <!-- Skills -->

    <div class="container">
      <section>
        <div class="page-header" id="skills">
          <h2>Skills</h2>
        </div>
        <frameset>
          <iframe id="mindmap" class="mindmap" src="mindmap/index.html"></iframe>
        </frameset>
      </section>
    </div>
    
    <!-- End Skills -->

    <!-- Stuffs Made -->

    <div class="container">
      <section>
        <div class="page-header" id="stuffs-made">
          <h2>Stuffs Made</h2>
        </div>

        <div class="row featurette">
          <div class="col-sm-7">
            <h3 class="featurette-heading">Machine Learning <br /><span class="text-muted">Email Classification</span></h3>
            <p class="lead">A content-based classification program to classify new emails containing a variety of messages into user-defined folders, that will help the users to organize their emails systematically and in a more convenient manner, using Machine Learning algorithms viz. K Nearest Neighbors &amp; Naïve Bayes. It was made as a Final Year Project in the B. Tech. Programme.</p>
            <a href="https://github.com/rmodi6/Email-Classification" title="Source Code" target="_blank"><button class="btn btn-primary"><i class="fa fa-code-fork"></i> Fork</button></a>
            <a href="https://doi.org/10.1007/978-981-10-6875-1_9" title="Springer Published Paper" target="_blank"><button class="btn btn-success"><i class="fa fa-paperclip"></i> Paper</button></a>
          </div>
          <br />
          <div class="col-sm-5">
            
            <!-- Video -->
            <div class="video-container">
            <iframe src="https://www.youtube.com/embed/0bxs2zrR5fU" width="100%" height="100%" allowfullscreen></iframe>
            </div>
            <!-- End Video -->

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-sm-7 col-sm-push-5" >
            <h3 class="featurette-heading">Database Management System <br /><span class="text-muted">Company-Clinic Database Management</span></h3>
            <p class="lead">An application software that can be used by a company-clinic to keep records of all the employees and their relatives for their free treatment at the company&#39;s clinic along with the information of medicines &amp; prescriptions, and many other features.</p>
            <a href="download/Company Clinic Database System (Eclipse Project).rar" title="Download Source Code"><button class="btn btn-primary"><i class="fa fa-code"></i> Source Code</button></a>
            <a href="download/Company Clinic Database Management.rar" title="Download Application"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span> Application</button></a>
          </div>
          <br />
          <div class="col-sm-5 col-sm-pull-7">
            
            <!-- Carousel -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active carousel-ccds">
                  <img  class="carousel-ccds" src="images/ccds.png" alt="ccds">
                </div>

                <div class="item carousel-ccds">
                  <img class="carousel-ccds" src="images/ccds4.png" alt="ccds4">
                </div>

                <div class="item carousel-ccds">
                  <img class="carousel-ccds" src="images/ccds5.png" alt="ccds5">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" title="Previous" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" title="Next" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- End Carousel -->
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-sm-7">
            <h3 class="featurette-heading">Java Applets <br /><span class="text-muted">Snakes 2 Game</span></h3>
            <p class="lead">A 2-player version of the classic Snake game made using Java AWT tools in Eclipse IDE.</p>
            <a href="snakes2/Snakes2.rar" title="Download Source Code"><button class="btn btn-primary"><i class="fa fa-code"></i> Source Code</button></a>
            <a href="snakes2/Snakes2.html" title="Play It!" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=300,height=300');
 return false;"><button class="btn btn-success"><span class="glyphicon glyphicon-play"></span> Play</button></a>
          </div>
          <br />
          <div class="col-sm-5">
            
            <!-- Carousel -->
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel2" data-slide-to="1"></li>
                <li data-target="#myCarousel2" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active carousel-snakes2">
                  <img class="carousel-snakes2" src="images/snakes.png" alt="snakes2 image">
                </div>

                <div class="item carousel-snakes2">
                  <img class="carousel-snakes2" src="images/snakes2.png" alt="snakes2 image">
                </div>

                <div class="item carousel-snakes2">
                  <img class="carousel-snakes2" src="images/snakes3.png" alt="snakes2 image">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel2" title="Previous" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel2" title="Next" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- End Carousel -->

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-sm-8 col-sm-push-4">
            <h3 class="featurette-heading">Java Swing <br /><span class="text-muted">Minesweeper Game</span></h3>
            <p class="lead">The age-old annoying Minesweeper game on Windows implemented in Java using Java Swing tools that required deep knowledge of data structures and algorithms.</p>
            <a href="https://github.com/rmodi6/Minesweeper-Game" title="Source Code" target="_blank"><button class="btn btn-primary"><i class="fa fa-code"></i> Source Code</button></a>
            <a href="minesweeper/Minesweeper.jar" title="Download Application"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span> Application</button></a>
          </div>
          <br />
          <div class="col-sm-4 col-sm-pull-8">
            
            <!-- Carousel -->
            <div id="myCarousel3" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel3" data-slide-to="1"></li>
                <li data-target="#myCarousel3" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active carousel-minesweeper">
                  <img class="carousel-minesweeper" src="images/minesweeper.png" alt="minesweeper image">
                </div>

                <div class="item carousel-minesweeper">
                  <img class="carousel-minesweeper" src="images/minesweeper2.png" alt="minesweeper image">
                </div>

                <div class="item carousel-minesweeper">
                  <img class="carousel-minesweeper" src="images/minesweeper3.png" alt="minesweeper image">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel3" title="Previous" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel3" title="Next" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- End Carousel -->

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-sm-8">
            <h3 class="featurette-heading">Artificial Intelligence <br /><span class="text-muted">Tic Tac Toe with AI</span></h3>
            <p class="lead">Tic Tac Toe game (a.k.a. Noughts and Crosses) with an AI opponent that either wins or draws but never loses, developed using MinMax Algorithm with alpha-beta pruning for optimization.</p>
            <a href="https://github.com/rmodi6/TicTacToe-with-AI" title="Source Code" target="_blank"><button class="btn btn-primary"><i class="fa fa-code"></i> Source Code</button></a>
            <a href="tictactoe/TicTacToe.jar" title="Download Application"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span> Application</button></a>
          </div>
          <br />
          <div class="col-sm-4">
            
            <!-- Carousel -->
            <div id="myCarousel4" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel4" data-slide-to="1"></li>
                <li data-target="#myCarousel4" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active carousel-tictactoe">
                  <img class="carousel-tictactoe" src="images/tictactoe.png" alt="tictactoe image">
                </div>

                <div class="item carousel-tictactoe">
                  <img class="carousel-tictactoe" src="images/tictactoe2.png" alt="tictactoe image">
                </div>

                <div class="item carousel-tictactoe">
                  <img class="carousel-tictactoe" src="images/tictactoe3.png" alt="tictactoe image">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel4" title="Previous" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel4" title="Next" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- End Carousel -->

          </div>
        </div>

        <hr class="featurette-divider">

      </section>
    </div>
    <!-- End Stuffs Made -->

    <!-- Contact Me -->
    <div class="container well">
      <section>
        <div class="page-header" id="contact-me">
          <h3>Contact Me</h3>
        </div>
        <div class="row">
          <div class="col-sm-8 pull-left">
            <form action="https://modiruchit.000webhostapp.com/" method="post" class="form-horizontal">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email Address">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="message" name="message" 
                  cols="20" rows="5" placeholder="Enter your Message"></textarea>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <button type="submit" name="submit" value="Submit" title="Say Hi!" class="btn btn-primary">Say Hi!</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-sm-4">
            <p class="lead">Find me on</p>
            <ul class="share-buttons">
              <li><a href="https://www.facebook.com/rmodi6" title="Facebook" target="_blank"><img src="images/flat_web_icon_set/color/Facebook.png"></a></li>
              <li><a href="https://twitter.com/rmodi6" target="_blank" title="Twitter"><img src="images/flat_web_icon_set/color/Twitter.png"></a></li>
              <li><a href="https://plus.google.com/+RuchitModi" target="_blank" title="Google+"><img src="images/flat_web_icon_set/color/Google+.png"></a></li>
              <li><a href="https://www.linkedin.com/in/rmodi6" target="_blank" title="LinkedIn"><img src="images/flat_web_icon_set/color/LinkedIn.png"></a></li>
              <li><a href="https://github.com/rmodi6" target="_blank" title="GitHub"><img src="images/flat_web_icon_set/color/GitHub-dark.png"></a></li>
            </ul>
            <br />
            <p class="lead">Mail me at</p>
            <ul class="share-buttons">
              <li><a href="mailto:modi.ruchit6+webhost@gmail.com?subject=&body=Hi%20Ruchit%2C%0D" target="_blank" title="Email"><img src="images/flat_web_icon_set/color/Email.png"></a></li>
            </ul>
          </div>
        </div>
      </section>
    </div>
    <!-- End Contact Me --> 

    <!-- Footer -->
    <footer>
        <div class="container text-center">
        <h6>&bull;Ruchit Modi&bull;</h6>
    </footer>
    <!-- End Footer -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <!-- Scrolling JavaScript -->
    <script type="text/javascript">
      $('a.smooth-scroll').click(function(){
          $('html, body').animate({
              scrollTop: $( $.attr(this, 'href') ).offset().top
          }, 500);
          return false;
      });
    </script>
    <!-- Bootstrap JavaScript -->
    <script type="text/javascript" src="paper/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="paper/js/bootstrap-notify.min.js"></script>
    <script type="text/javascript">
      $('#mindmap').on('load', function() {
        $("#mindmap").contents().find("div").last().remove();
      });
      $(window).on('load', function() {
        $("div").last().remove();
      });

      $("form").submit(function(e) {
        var form = $(this);
        $.ajax({ 
          url: form.attr('action'),
          type: form.attr('method'),
          crossDomain: true,
          data: form.serialize(),
          success: function(response) {
            $.notify({
              icon: 'glyphicon glyphicon-info-sign',
              message: 'Your message has been sent!'
            });
          }
        });
        return false;
      });
    </script>
    <div></div>

  </body>
</html>