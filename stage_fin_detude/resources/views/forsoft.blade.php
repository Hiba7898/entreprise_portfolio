@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6> Vous êtes les bienvenus</h6>
                  <h4>FORSOFT</h4>
                  <p>FORSOFT est une société de service spécialisée dans la réalisation et<br>
                                       la commercialisation de projet informatique.</p>
                  
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Nous sommes ici pour vous soutenir </h6>
                  <h4>DÉVELOPPER VOTRE ACTIVITÉ</h4>
                  <p>Intégration des solutions informatiques sur mesure basées sur les dernières technologies.</p>
                  
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                <h6>Nous sommes prêts à vous aider</h6>
                  <h4>CONSEIL & AUDIT INFORMATIQUE</h4>
                  <p>Des consultants qualifiés pour vous offrir un diagnostic et un conseil en management a pour vocation d'assister votre entreprise sur des sujets de gestion
                  et d'optimisation de vos métiers où des fonctions dites de support comme : RH (formation, paie, recrutement...), Les Systèmes d'Information,
                  La Finance (fusion-acquisitions, contrôle de gestion, comptabilité, trésorerie...), Les Achats etc.
                  </p>
                  
                </div>
            </div>
          </div>
         

          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Demander un rappel maintenant ?</h4>
          </div>
          <div class="col-md-4">
            <a href="{{route('contact')}}" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2  style="color:  #3992c6;">Forsoft<em> Services </em></h2>
              <span>Depuis plus de 7 ans, ForSoft aide les entreprises
               marocaines et internationales à se développer</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img id="sage" src="assets\images\Sage_logo.png" alt="" >
              <div class="down-content">
                
                <p>
                Gestion Commerciale <br>
                Comptabilité <br>
                Paie & RH <br>
                BI Reporting <br> 
                </p>
                <a href="{{route('services')}}" class="filled-button">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets\images\microsoft_PNG20.png" alt="">
              <div class="down-content">
                <p>
                Office 365<br>
                Windows client /serveur<br>
                Antivirus <br>
                Cloud<br>

                </p>
                <a href="{{route('solution-MICROSOFT')}}" class="filled-button">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img id="FORSOFT" src="assets\images\logo_Forsoft_transparent.png" alt="">
              <div class="down-content">
                <p>
                Conseil & Formation<br>
                Systèmes Informatiques<br>
                Sécurité des Systèmes<br>
                Logistique<br>
               
                </p>
                <a href="{{route('Qui_Somme_Nous')}}" class="filled-button">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span>  <img src="assets\images\Sage_logo.png" width="90px"></span>
              <h2>Forsoft dans <em>le top 3 du classement </em>Top League des partenaires Sage Afrique </h2>
              <p>FORSOFT est une équipe innovante, réactive et soucieuse d’établir un rapport de proximité avec
                  vous, nous sommes en alerte permanente, attentifs à l’évolution du marché et aux besoins du client,
                  et dans le cadre de son partenariat avec SAGE MAROC vous propose la solution de gestion SAGE
                  100 ERP, en assurant le processus de la mise en place en amont et en aval y compris la formation .</p>
            
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">2016</div>
                  <div class="count-title">Date de creation</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">80</div>
                  <div class="count-title">Projets réalisés</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">300</div>
                  <div class="count-title">Sage en maroc</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">150</div>
                  <div class="count-title">client Fidèle</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets/images/more-info.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>qui sommes nous</span>
                    <h2>FOR<em>SOFT</em></h2>
                    <p>Que vous soyez une petite ou moyenne entreprise, quelque soit votre secteur d’activité ! Entreprises
                      de négoce, de services, production, BTP, associations, commerces de détail, restaurateurs…, des
                      solutions adaptées vous attendent également.
.</p>
                    <a href="{{route('Qui_Somme_Nous')}}" class="filled-button">En savoir plus</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>les caractéristiques  <em>forsoft</em></h2>
              <span>FORSOFT s’appuie sur de multiples compétences </span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Expertise</h4>
                  <p>Notre particularité est de vous apporter une double compétence, la maîtrise des Technologies de l'Information et de la Communication et celle du management de l'information.</p>
                </div>
                <img src="assets\images\cloud-download.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Innovation</h4>
                  <p>La recherche constante et l’utilisation des nouvelles technologies se sont deux facteurs indispensables face à une digitalisation tout en se basant sur l’expérience de nos clients.</p>
                </div>
                <img src="assets\images\consulting-48.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>L’accompagnement</h4>
                  <p>Les actions d’accompagnement permettent non <br>
                    seulement d’assurer la fluidité de transition,<br>
                    mais aussi de tirer le meilleur parti <br>
                    de l’informatisation.</p>
                </div>
                <img src="assets\images\tablet.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Qualité</h4>
                  <p>Parmi nos principaux objectifs, vous proposez un service et des solutions de qualités en s’appuyant sur notre savoir-faire et notre capacité à vous assister dans les différentes étapes du projet.</p>
                </div>
                <img src="assets\images\cogs.png" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>Forsoft<em>/Sage</em></span>
                    <h2>Vous voulez gérer vos processus métier dans  <em>la sérénité et bien piloter votre entreprise ?</em></h2>
                    <p>Les Logiciels Sage vous offrent le savoir-faire<br>
                     cumulé durant plus de 40 ans d’un Editeur international<br>
                     qui comprend bien les attentes des entreprises <br>
                     de différentes tailles opérant dans divers domaines<br>
                     d’activités.</p>
                    <a href="" class="filled-button">En savoir plus</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets\images\developpeur-web-strasbourg-1-1920x1280-1.jpeg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="color:#3992c6">Nous <em>contacter</em></h2>
              <span>Vous avez un projet dont vous souhaitez discuter avec nous? Écrivez-nous ci-dessous, nous serions ravis de parler</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="{{route('sendEmail')}}" method="POST">
              @csrf
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" class="form-control" name="name" id="name" placeholder="nom & prénom" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" class="form-control" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Adresse email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
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
                      <button type="submit" id="form-submit" class="border-button">Envoyer votre message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
    @endsection


 

    