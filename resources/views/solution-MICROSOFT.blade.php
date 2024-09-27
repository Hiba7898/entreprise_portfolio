@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>SOLUTIONS MICROSOFT</h1>
            <p style="color: #3992c6"> les applications de qualité pour optimiser la productivité, la connexion et la sécurité  </p><br>
            <span></span>
          </div>
        </div>
      </div>
    </div><br><br>

    <div class="col-md-12">
            <div class="section-heading">
            <h4 style="color: #3992c6">Les Solutions microsoft</h4>
              <h2 style="color: #000000">Trouvez l’offre adaptée à vos besoins</h2>
              
            </div>
          </div>
    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Office 365 <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Antivirus  <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>Cloud  <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'>Windows client /serveur <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-5'>Sauvegarde <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/office-365-icon-2.png" alt="">
                <h4>Office 365</h4>
                <p>Microsoft 365 rassemble des applications Office premium telles que Word, Excel et PowerPoint avec 1 To de stockage cloud OneDrive, une sécurité avancée et bien plus encore, ...</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/Featured_Antivirus-Terbaik-Jaminan-Aman-untuk-PC-dan-Laptop-1024x529.jpg" alt="">
                <h4>Antivirus</h4>
                <p>Un antivirus est un logiciel informatique destiné à identifier et à effacer des logiciels malveillants (malwares en anglais), également appelés virus, ...</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/istockphoto-1277731016-612x612.jpg" alt="">
                <h4>Cloud</h4>
                <p>Le cloud computing fournit des services tels que le stockage de données, la sécurité, la mise en réseau, les applications logicielles et la Business ...</p>
              </article>
              <article id='tabs-4'>
                <img src="assets/images/WF-wsus.jpg" alt="">
                <h4>Windows client /serveur </h4>
                <p>L'architecture client/serveur désigne un mode de communication entre plusieurs ordinateurs d'un réseau qui distingue un ou plusieurs postes clients du serveur </p>
              </article>
              <article id='tabs-5'>
                <img src="assets/images/art_3_sauv_lexique_1200__w630.jpg" alt="">
                <h4>Sauvegarde</h4>
                <p>En informatique, la sauvegarde (backup en anglais) est l'opération qui consiste à dupliquer et à mettre en sécurité les données contenues dans un système informatique. </p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div><br><br>

   
    @endsection