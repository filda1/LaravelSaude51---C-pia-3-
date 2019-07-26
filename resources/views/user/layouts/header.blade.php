
<!-- Navigation -->
 <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">

    @if( (!isset( $posts[4]->image )) and ( !empty( $posts[4]->body )) )

    <img class="d-block w-100" src= "{{url('/storage/'. $posts[4]->body )}}" alt=" ">      
    @else

    <img class="rounded float-left" src="user/img/logo-rede.png" alt="">

    @endif

    

      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
          <h6><small>
          
          @if( (!isset( $cate[0]->image )) and ( !isset( $cate[0]->body )) )

          <a class="nav-link py-0 px-0 px-lg-2 rounded js-scroll-trigger" href="/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $cate[0]->name }}</a></small></h6>     
         @else
         <a class="nav-link py-0 px-0 px-lg-2 rounded js-scroll-trigger" href="/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $cate[0]->name }}</a></small></h6>

         @endif
          
          

            
          </li>
          <li class="nav-item mx-0 mx-lg-1">      
            <h6><small><a class="nav-link py-0 px-0 px-lg-2 rounded js-scroll-trigger" href="search">{{ $cate[1]->name }}</a></small></h6>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <h6><small><a class="nav-link py-0 px-0 px-lg-2 rounded js-scroll-trigger" href="{{route('login')}}">{{ $cate[2]->name }}</a></small></h6>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <br><br><br><br><br><br>
  <!-- Masthead -->
  <header>
      
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
 
   <!--   @if( (!isset( $posts[0]->image )) and ( !isset( $posts[0]->body )) )

      <img class="d-block w-100" src= "{{url('/storage/'. $posts[0]->body )}}" alt="{{ $posts[0]->slug }}">      
      @else

      <img class="d-block w-100" src="user/img/banner1.jpg" alt="slide #1">

      @endif -->

     
     <!-- Masthead  <img class="d-block w-100" src= "{{url('/storage/'.R8OW647RTiXODLea9ntosGIDCHRbncbMFDGKBx4I.jpeg )}}" alt="{{ $posts[0]->slug }}"> --> 
     <img class="d-block w-100" src="storage/R8OW647RTiXODLea9ntosGIDCHRbncbMFDGKBx4I.jpeg " alt="slide #1">


    </div>
    <div class="carousel-item">

    

      <img class="d-block w-100" src= "{{url('/storage/'. $posts[1]->body )}}" alt="{{ $posts[1]->slug }}">      
  

     

      
    </div>
    <div class="carousel-item">


      <img class="d-block w-100" src= "{{url('/storage/'. $posts[2]->body )}}" alt=" ">      
   




    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Search form -->

      <!-- Masthead Avatar Image 
      <img class="masthead-avatar mb-5" src="user/img/avataaars.svg" alt="">-->
   

      <!-- Masthead Heading  
      <h1 class="masthead-heading text-uppercase mb-0">Start Bootstrap</h1>-->

      <!-- Icon Divider 
       <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>-->
      

      <!-- Masthead Subheading 
      <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>-->
    
  </header>