@extends ('_master')
@section ('content')
    <!-- Carousel
    ================================================== -->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">H@ck the W0rld</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Security Info <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Secure Coding Information</a></li>
                    <li><a href="#">Secure Auditing</a></li>
                    <li><a href="#">Vulnerability Assessments</a></li>
                    <li><a href="#">Hacking</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Harvard Projects</li>
                    <li><a href="#">PHP and Laravel</a></li>
                    <li><a href="#">Oracle and Coldfusion</a></li>
                    <li><a href="#">XML Technologies</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         
          <div class="container">
            <div class="carousel-caption">
              <img src="images/Harvard_logo.png" style="width: 140px; height: 136px;" alt="First slide">
              <h1>Harvard - Education</h1>
              <p>Harvard University provides various educational opportunities.  Click learn more to be redirected to Harvard's Extension School.</p>
              <p><a class="btn btn-lg btn-primary" href="http://www.extension.harvard.edu" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <img src="images/MIT_Seal.png" style="width: 140px; height: 136px;" alt="Second slide">
              <h1>MIT - Education</h1>
              <p>MIT offers numerous educational opportunities in the areas of computer science and information security via traditional and non-traditional methods.</p>
              <p><a class="btn btn-lg btn-primary" href="http://web.mit.edu/professional/" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <img src="images/nova_seal.png" style="width: 140px; height: 136px;" alt="Third slide">
              <h1>NSU - Education</h1>
              <p>NSU offers Master and PhD programs in computer science with NSA designation.  NSU also provides on and off campus delivery.</p>
              <p><a class="btn btn-lg btn-primary" href="http://scis.nova.edu/" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/github.gif" alt="Github image" style="width: 140px; height: 140px;">
          <h2>Online Repository</h2>
          <p>Guthub is a perfect solution for code versioning.  It provides a robust set of features along with having your code maintained in the cloud.  It provides for both public and private repositories.  Check it out!</p>
          <p><a class="btn btn-default" href="http://www.github.com" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/Bootstrap.jpg" alt="Bootstrap image" style="width: 140px; height: 140px;">
          <h2>Bootstrap Framework</h2>
          <p>Tired of creating plain and boring sites from scratch?  Have no fear, bootstrap is here!  Bootstrap provides a front-end site framework for building nice websites.  Select the view details to find out more.</p>
          <p><a class="btn btn-default" href="http://getbootstrap.com" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/DO.png" alt="Digital Ocean image" style="width: 140px; height: 140px;">
          <h2>Digital Ocean</h2>
          <p>Digital Ocean is a simple and effective solution for cloud webserver instantiation.  Digital Ocean provides a step-by-step setup for creating your cloud webserver for your web based application(s).</p>
          <p><a class="btn btn-default" href="http://digitalocean.com" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; H@ck the W0rld &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
@stop