@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1> Nos Engagements & Solutions</h1>
            <h5  style="color: #3992c6">Pensez-vous à améliorer facilement l'efficacité de votre entreprise ?  </h5><br>
            <span>FORSOFT, Partenaire agréé Sage, 
                  vous propose toute une palette de services pour maitriser<br>
                  la gestion de votre entreprise et optimiser vos ressources 
                  afin de briller de mille feux. </span>
          </div>
        </div>
      </div>
    </div><br><br>

    <div class="col-md-12">
            <div class="section-heading">
              <h2 style="color: #3992c6">Les Engagements </h2>
            </div>
          </div>

    <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>	Proactivité</h4>
                  <p>Nous privilégions l’écoute permanente de nos clients pour mieux cerner leurs attentes.</p>
                </div>
                <img src="assets\images\cloud-download.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>	Professionnalisme </h4>
                  <p>Notre équipe aux compétences transverses vous garantisse une gestion efficace de votre projet.</p>
                </div>
                <img src="assets\images\consulting-48.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>	Agilité</h4>
                  <p>Nos méthodes agiles nous permettent de mieux répondre à vos besoins.</p>
                </div>
                <img src="assets\images\tablet.png" alt="">
              </div>
             </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-12">
            <div class="section-heading">
            <h4 style="color: #3992c6">Les Solutions Sage</h4>
              <h2 style="color: #000000">Choisissez la solution adaptée à votre activité</h2>
              
            </div>
          </div>
    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Gestion comptable, fiscale & financière  <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Gestion commerciale  <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>Gestion Paie & RH  <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'>ERP & Solutions intégrées  <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-5'>BI & REPORTING <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/single_service_01.jpg" alt="">
                <h4>Gestion comptable, fiscale & financière</h4>
                <p>La solution de gestion comptable, fiscale & financière Sage 100Cloud, regroupe l’ensemble des fonctions nécessaires aux directions comptables et financières et vous apporte une expertise clé en main. Elle s’adapte à l’ensemble de vos besoins et vous permet de piloter votre activité et vos investissements en temps réel tout en maitrisant vos risques.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/single_service_02.jpg" alt="">
                <h4>Gestion commerciale</h4>
                <p>Sage 100cloud Gestion commerciale vous offre tous les outils nécessaires à la maîtrise de votre chaîne commerciale. Il vous permet de maîtriser l'ensemble de la chaine commerciale et accélérer vos processus de vente.</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/single_service_03.jpg" alt="">
                <h4>Gestion Paie & RH</h4>
                <p>Sage 100cloud Paie & RH vous permet de simplifier vos processus RH tout en fiabilisant vos bulletins de paie et vos déclarations sociales. Vous pouvez ainsi réduire le temps et les efforts alloués aux tâches administratives et vous consacrer plus à la fidélisation des talents de votre entreprise.</p>
              </article>
              <article id='tabs-4'>
                <img src="assets/images/single_service_04.jpg" alt="">
                <h4>ERP & Solutions intégrées </h4>
                <p>L’ERP Sage pour PME est un progiciel de gestion intégré qui vous aide à avoir une vision globale de votre activité, de vos finances, de votre production et de votre performance commerciale.</p>
              </article>
              <article id='tabs-5'>
                <img src="assets/images/business intelligence tools.jpg" alt="">
                <h4>BI & REPORTING</h4>
                <p>Sage BI Reporting pour Sage 100cloud, vous permet de disposer d’un outil efficace pour générer des tableaux de bord pertinents et orienter vos choix stratégiques.</p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div><br><br>

   
    @endsection