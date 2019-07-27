@extends('user/layouts/app')

@section('main-content')

 <!-- Portfolio Section -->
 <section class="page-section portfolio" id="portfolio">
    <div class="container">
      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div >
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
    gggg

    
            <!-- Portfolio Item 1
               @if( (!isset( $page[0]->image )) and ( !isset( $page[0]->body )) )

           <a href="search"><img class="img-fluid" src= "{{url('/storage/'. $page[0]->body )}}" alt=" "></a>      
            @else

            <a href="search"><img class="img-fluid" src="user/img/directorio.png" alt=""></a>

            @endif -->

            <a href="search"><img class="img-fluid" src="user/img/directorio.png" alt=""></a>

   
            <div class="caption">
            <br>
            <p class="h5">{{ $page[0]->text }}</p>
            </div>
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div >
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div> 
          
       
             <!-- Portfolio Item 2
                 @if( (!isset( $page[1]->image )) and ( !isset( $page[1]->body )) )

             <a href="aderir"><img class="img-fluid" src= "{{url('/storage/'. $page[1]->body )}}" alt=" "></a>      
           @else

           <a href="aderir"><img class="img-fluid" src="user/img/cartao.png" alt=""></a>

          @endif -->

          <a href="aderir"><img class="img-fluid" src="user/img/cartao.png" alt=""></a>
                
         
              
            
            <div class="caption">
            <br>
            <p class="h5">{{ $page[1]->text }}</p>
            </div>
          </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div >
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>

          
            
        <!-- Portfolio Item 3
            @if( (!isset( $page[2]->image )) and ( !isset( $page[2]->body )) )

              <a href="modal2"><img class="img-fluid" src= "{{url('/storage/'. $page[2]->body )}}" alt=" "></a>      
             @else

              <a href=""><img class="img-fluid" src="user/img/parceiro.png" alt=""></a>

            @endif -->
              
           

              <a href=" "><img class="img-fluid" src="user/img/parceiro.png" alt=""></a>

           

            
            
            <div class="caption">
            <br>
            <p class="h5">{{ $page[2]->text }}</p>
            </div>
          </div>
        </div>

        <!-- Portfolio Item 4 -->
        <div class="col-md-6 col-lg-4">
          <div>
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
         
             <!-- Portfoli
             o Item 4 
                @if( (!isset( $page[3]->image )) and ( !isset( $page[3]->body )) )

             <a href="modal2"><img class="img-fluid" src= "{{url('/storage/'. $page[3]->body )}}" alt=" "></a>      
              @else

              

            @endif-->

            <img class="img-fluid" src="user/img/reserv.png" alt="">
          
               
            <div class="caption">
            <br>
            <p class="h5">{{ $page[3]->text }}</p>
            </div>
          </div>
        </div>


          <!-- Portfolio Item 4 -->
          <div class="col-md-6 col-lg-4">
          <div>
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
         
             
                <!-- Portfolio Item 4 
                   @if( (!isset( $page[4]->image )) and ( !isset( $page[4]->body )) )

              <a href="modal"><img class="img-fluid" src= "{{url('/storage/'. $page[4]->body )}}" alt=" "></a>      
             @else

             <a href="modal" ><img class="img-fluid" src="user/img/directorio.png" alt=""></a>

            @endif-->
 
            <a href="modal" ><img class="img-fluid" src="user/img/directorio.png" alt=""></a>
               
            <div class="caption">
            <br>

            <p class="h5">{{ $page[4]->text }}</p>

            </div>
          </div>
        </div>
          

  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">A UniversoRH marca nacional registada no Inpi, torna-se numa das empresas com mais parcerias, conquistadas ao logo de mais de 15 anos de Outsorcing , foi responsável pela expansão de vários negócios em rede e pela prestação de diversos serviços</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">A adaptação ao mercado e o conhecimento adquirido ao longo dos anos em diversas áreas, permitiu obter o know-how que sustenta este projecto solido com garantia de máxima qualidade.</p>
        </div>
      </div>

      <!-- About Section Button -->
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#">
          <i class="fas fa-download mr-2"></i>
          Info!
        </a>
      </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form enctype="multipart/form-data" novalidate="novalidate" method="POST" action=" {{ url('mail/send') }}">
          {{ csrf_field() }}

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" name="name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>

      </div>
    </div>
    
  </section>

@endsection