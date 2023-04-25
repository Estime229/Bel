@extends('layouts.header')

@section('ici')
@include('layouts.detailshead')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert alert-primary">
    <center>   <h3 class="modal-title"btn btn-primary id="exampleModalLabel">Envoyez un message à Bel Alliance Consulting</h3></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
         <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
 <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{ old('email') ?: Auth::user()->email }}">
        </div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>


   <!-- end section -->
  
      <div id="features" class="section wb">
         <div class="container">
            <div class="section-title row text-center">
            <center>    <div class="col-md-8 col-md-offset-2">
              <small>All Awesome Property Details</small>
             
                  <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               </div></center>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="property-detail row clearfix">
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-coupon effect-1"></i>
                  <h4>Square Feet : 3200</h4>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-family-room effect-1"></i>
                  <h4>Ideal for Family</h4>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-house effect-1"></i>
                  <h4>Garage : 2</h4>
               </div>
               <!-- end col -->  
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-full-bed effect-1"></i>
                  <h4>Bedrooms : 3</h4>
               </div>
               <!-- end col -->  
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-swimming-pool effect-1"></i>
                  <h4>Pool : Yes</h4>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-calendar effect-1"></i>
                  <h4>Build in : 2015</h4>
               </div>
               <!-- end col -->  
                  <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="fa fa-home effect-1"></i>
                  <h4>Balcon / Terrasse : oui</h4>
               </div>
               <!-- end col -->  
                  <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="fa fa-tree effect-1"></i>
                  <h4>Jardin : oui</h4>
               </div>
               <!-- end col -->  
                  <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="fa fa-cutlery effect-1"></i>
                  <h4>Proche des restaurants: oui</h4>
               </div>
               <!-- end col -->  
                  <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="fa fa-calendar-check-o effect-1"></i>
                  <h4>Disponibilité : dès aujourd'hui</h4>
               </div>
               <!-- end col -->  
                  <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="fa fa-money effect-1"></i>
                  <h4>Prix : 250 /mois</h4>
               </div>
               <!-- end col -->  
                  <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="fa fa-map-marker  effect-1"></i>
                  <h4>Emplacement : Cotonou</h4>
               </div>
               <!-- end col -->  
            </div>
            <!-- end how-its-work -->
            <hr class="invis">
            <div class="row text-center">
               <div class="col-md-4 col-sm-3 col-xs-6">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/estate_01.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>Spacious and Large Garden</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-4 col-sm-3 col-xs-6">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/estate_01.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>Spacious and Large Garden</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-4 col-sm-3 col-xs-6">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/estate_03.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>With its Own Pool</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-4 col-sm-3 col-xs-6">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/estate_01.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>Spacious and Large Garden</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-4 col-sm-3 col-xs-6">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/estate_02.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>In Forests- Fresh Clean Air</h3>
                  </div>
                  <!-- end service -->

               </div>
               <div class="col-md-4 col-sm-3 col-xs-6">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/estate_01.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>Spacious and Large Garden</h3>
                  </div>
                  <!-- end service -->
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
         <div class="sep1"></div>
      </div>
      <!-- end section -->
      <div id="agent" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_02.png');">
         <div class="container">
    <div class="section-title row text-center">
                    <center><div class="col-md-8 col-md-offset-2">
                  <h3>Agent Details</h3>
               </div></center>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-3">
                  <div class="post-media wow fadeIn">
                     <img src="uploads/agent.jpg" alt="" class="img-responsive img-rounded">
                     <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>The Agent</h4>
                     <h2>Yourim AHOUNOU</h2>
                     <p class="lead">En tant qu'agent immobilier, je travaille dans l'industrie de l'immobilier et j'aide mes clients à acheter, vendre ou louer des biens immobiliers. Pour réussir dans ce domaine, je dois être compétent dans divers domaines, notamment la négociation, la communication, la résolution de problèmes, la gestion de temps et l'organisation. J'ai également une connaissance approfondie du marché immobilier local, ce qui me permet de répondre aux questions et préoccupations de mes clients et de travailler avec diligence pour garantir que les transactions immobilières se déroulent en douceur. En outre, j'ai une forte éthique professionnelle et je m'efforce toujours d'agir dans le meilleur intérêt de mes clients..</p>
                 <button type="button" class="btn btn-light global-radius btn-brd grd1 effect-1"  data-toggle="modal" data-target="#exampleModal">Contact Me </button>
                  </div>

                  <!-- end messagebox -->
                  
               </div>
               <!-- end col -->
               <div class="col-md-3">
                  <div class="agencies_meta clearfix">
                     <span><i class="fa fa-envelope "></i> <a href="mailto:support@sitename.com">support@sitename.com</a></span>
                     <span><i class="fa fa-link "></i> <a href="#">www.sitename.com</a></span>
                     <span><i class="fa fa-phone-square "></i> +1 232 444 55 66</span>
                     <span><i class="fa fa-print "></i> +1 232 444 55 66</span>
                     <span><i class="fa fa-facebook-square "></i> <a href="#">facebook.com/tagline</a></span>
                     <span><i class="fa fa-twitter-square "></i> <a href="#">twitter.com/tagline</a></span>
                     <span><i class="fa fa-linkedin-square "></i> <a href="#">linkedin.com/tagline</a></span>
                  </div>
                  <!-- end agencies_meta -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         
      </div>
     

@endsection