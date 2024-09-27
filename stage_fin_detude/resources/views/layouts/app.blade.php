<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
     <!-- fevicon -->
    <link  rel="FORSOFT icon" type="png" href="assets\images\logo Forsoft (faveicon).png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>FORSOFT-Ingénierie des systémes d'information</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=CllgCJNstzGKsfthjfqlPNzBxpsXKRnZpCcZlMjhKdlQJkHkvDvNxFjgCNbGJPqHpSBCHWLGgsV"><i  class="fa fa-envelope"></i>site@forsoft.ma</a></li>
              <li><a ><i class="fa fa-phone"></i>  +212 (0) 5 22 45 09 21 </a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="https://www.facebook.com/forsoft.ma/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/forsoftma"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/forsoft/"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCRM0zgmgwESJbegnazibsaQ"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{route('forsoft')}}">
          <img src="assets\images\logo_Forsoft_transparent.png" width="180px" ></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="{{route('forsoft')}}">Forsoft
                  
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="{{route('services')}}">engagements & solutions</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="{{route('reference')}}">Références</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Qui_Somme_Nous')}}"> Qui Somme Nous?</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact Nous</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
       <!-- Footer Starts Here -->
       <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>ForSoft</h4>
            <p>FORSOFT est une société de service spécialisée dans la réalisation et
                        la commercialisation de projet informatique .</p>
          
          </div>
          <div class="col-md-3 footer-item">
            <h4>Liens utiles</h4>
            <ul class="menu-list">
            <li><a href="https://www.facebook.com/forsoft.ma/"><i class="fa fa-facebook"></i> Facebook</a></li>
              <li><a href="https://twitter.com/forsoftma"><i class="fa fa-twitter"></i> Twitter</a></li>
              <li><a href="https://www.linkedin.com/company/forsoft/"><i class="fa fa-linkedin"></i> Linkedin</a></li>
              <li><a href="https://www.youtube.com/channel/UCRM0zgmgwESJbegnazibsaQ"><i class="fa fa-youtube"></i> Youtube</a></li>            


            </ul>

          </div>
          <div class="col-md-3 footer-item">
            <h4>Pages additionnelles</h4>
            <ul class="menu-list">
              <li><a href="forsoft">Forsoft</a></li>
              <li><a href="services">engagements & solutions</a></li>
              <li><a href="reference">Références</a></li>
              <li><a href="Qui_Somme_Nous">Qui_Somme_Nous</a></li>
              <li><a href="contact">contacter</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contacter Nous</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="{{route('sendEmail')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" class="form-control" name="name" id="name" placeholder="nom & prénom" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" class="form-control" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Adresse email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea  rows="6" class="form-control" name="message" id="message" placeholder="Votre message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Envoyer votre message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>copyright<i class="fa fa-copyright" aria-hidden="true"></i>2023 FORSOFT</p>.
            

          </div>
        </div>
      </div>
    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>