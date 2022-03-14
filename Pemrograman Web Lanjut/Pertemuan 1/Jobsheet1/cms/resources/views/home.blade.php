<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Perusahaan Listrik Negara</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Pictures/LOGO.png">PLN</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li class="active"><a href="/products">Products</a></li>
      <li class="active"><a href="/news">News</a></li>
      <li class="active"><a href="/program">Program</a></li>
      <li class="active"><a href="/about">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
	<div class="row">
    <div >
      <h3 >INFORMASI</h3>
      Bagian ini memberi semua informasi terkini untuk membantu Anda melakukan transaksi listrik PLN dengan lebih efisien. Anda dapat memilih untuk pasang listrik baru, melakukan perubahan daya, dan melakukan sambungan listrik sementara maupun pengaduan gangguan dan layanan listrik lainnya. Melakukan transaksi listrik PLN tidak pernah semudah ini dengan segala sesuatu di bawah satu atap.
      </p>
    </div>
  </div>
</div>
</body>
</html> -->

@extends('masterLayout')

@section('content')


<!--============ Slider ============-->


<div class="sliderwrapper">
      <div id="slider" class="container">
           <div class="slider">
      			<ul class="slides">
    		 	 	  <li class="slide">
                      	<h4 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h4>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                         the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                          type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                           also the leap into 
                         electronic typesetting</p>
                      <img src="images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slide1img"> 
                      </li>
      			 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                         the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                          type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                           also the leap into 
                         electronic typesetting</p>
                      <img src="images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
     			 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                         the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                          type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                           also the leap into 
                         electronic typesetting</p>
                      <img src="images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
        		  </ul>
            </div>
      </div> <!-- End of Slider-->
</div> <!-- end of sliderwrapper-->



<!--============ Best Dishes ============-->



<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
       
		 <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
      <div class="slider">
      		    <ul class="slides">
          	 	 <li class="slide">
                  @foreach ($posts as $post)
                    <div class="{{$post->slug}}">
                          <img src="images/{{$post->image}}.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>{{$post->name}}</h3>
                      </div> <!-- end of item-->
                  @endforeach
                   
                  </li>
                   <li class="slide">
                    
                      @foreach ($posts as $post)
                    <div class="{{$post->slug}}">
                          <img src="images/{{$post->image}}.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>{{$post->name}}</h3>
                      </div> <!-- end of item-->
                  @endforeach
                  </li>
                   
        </ul>
      </div> <!-- end of slider-->
    </div> <!-- end of besth dishes-->
</div> <!-- end of bestdishes wrapper-->

<!--============ BOOK ONLINE ============-->

<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> BOOK ONLINE</h3>
    <form >
    <input type="text" class="name wow zoomIn" placeholder="Your Name" >
    <input type="text" class="email wow zoomIn" placeholder="Your E-MAIL">
    <input type="text" class="from wow zoomIn" placeholder="09-06-2014">
    <input type="text" class="to wow zoomIn" placeholder="09-06-2014">
    <input type="text" class="persons wow zoomIn" placeholder="Number of persons">
    
   
    
    <button class="booknow wow fadeInUp"> BOOK NOW </button>
    
    </form>
    
    
    </div>
</div> <!-- end of book online wrapper-->



<!--============ MAP ============-->

<div class="mapwrapper">
    <div id="map" class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3453.66325428613!2d31.24094885319519!3d30.046517359733745!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1403554513536"   class="googlemap"></iframe>
    
    
    </div> <!-- end of map id-->

</div>    <!-- end of map wrapper-->



<!--============ Contact us ============-->


<div class="contactwrapper">
  <div id="contactus" class="container">
        <h3 class="wow fadeInUp" data-wow-delay="0.3s">CONTACT US</h3>
        <div class="staff">
       	  <ul>
                  <li><img src="images/char3.png" width="163" height="163" class="myimage wow fadeIn" title="mido" alt="1">
                  
                  
            </li>
                  <li><img src="images/char4.png" width="163" height="163" class="myimage2 wow fadeIn" data-wow-delay="0.8s"
                   alt="1"></li> 
                  <li><img src="images/char5.png" width="163" height="163" class="myimage3 wow fadeIn" 
                  data-wow-delay="0.8s" 
                  alt="1"></li>
                  <li><img src="images/char6.png" width="163" height="163" class="myimage4 wow fadeIn" alt="1"
                   data-wow-delay="0.8s"
                  ></li>
                  <li><img src="images/char1.png" width="163" height="163" class="myimage5 wow fadeIn" alt="1"
                  data-wow-delay="0.8s"></li>
                  <li><img src="images/char2.png" width="163" height="163" class="myimage6 wow fadeIn" alt="1"
                  data-wow-delay="0.8s"
                  ></li>
             </ul>   
             
         </div>   
      <!--end of .staff-->
        
    <img src="images/pop1.png" width="486" height="137" class="firstpop" alt="pop">
    <img src="images/popup2.png" width="487" height="137"  class="secondpop" alt="pop">
    <img src="images/popup3.png" width="487" height="137"  class="thirdpop" alt="pop">
    <img src="images/popup4.png" width="487" height="137"  class="fourthpop" alt="pop">  
    <img src="images/popup6.png" width="487" height="137"  class="fifthpop" alt="pop">  
    <img src="images/popup7.png" width="487" height="137"  class="sixthpop" alt="pop">  
    
    
    </div> 
    <!--contactus class-->
</div> <!-- end of contact wrapper-->

@endsection