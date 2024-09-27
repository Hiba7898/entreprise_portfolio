@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contacter Nous</h1>
            <span>Vous avez un projet dont vous souhaitez discuter avec nous?<br>
               Écrivez-nous ci-dessous, nous serions ravis de parler</span>
          </div>
        </div>
      </div>
    </div>

    

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>téléphone</h4>
              <a href="#">+212 (0) 5 22 45 09 21</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <a href="#">site@forsoft.ma</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Localisation</h4>
              <a href="https://goo.gl/maps/znYwJFaT6hWtpK6B6">sidi maarouf,panorama 2,2éme Etage</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="color:  #3992c6;">Merci de remplir le 
               <em>formulaire</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="{{route('sendEmail')}}"  method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" class="form-control" name="name" id="name" placeholder="Nom & Prenom" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" class="form-control" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Address email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea  rows="6" class="form-control" name="message" id="message" placeholder="Votre Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831.5053224090574!2d-7.650509438755797!3d33.526832103882406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d1cad378bb7%3A0x72b39f4e7765b7a0!2s14-11%20P3007%2C%20Casablanca!5e0!3m2!1sfr!2sma!4v1682673000484!5m2!1sfr!2sma" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
 
    @endsection

  