<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ordering System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <link href= "{{asset('https://fonts.googleapis.com/css?family=Tajawal&display=swap')}}" rel="stylesheet">


    <link href="{{asset('https://fonts.googleapis.com/css?family=Tajawal&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/sign.css')}}">


    <style>
      /* *{margin:0px; padding:0px; font-family:'Tajwal';} */
      
      /* Full-width input fields */
      input[type=text], input[type=password] {
      width: 90%;
      padding: 12px 20px;
      margin: 8px 26px;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size:16px;
      }
      .btn.btn-white.btn-outline-white:hover
    {
      color:#c8a97e !important;
    }
      /* Set a style for all buttons */
      /*button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 26px;
      border: none;
      cursor: pointer;
      width: 90%;
      font-size:20px;
      }
      button:hover {
      opacity: 0.8;
      } */
/* Center the image and position the close button */
.imgcontainer {
text-align: center;
margin: 24px 0 12px 0;
position: relative;
}
.avatar {
width: 200px;
height:200px;
border-radius: 50%;
}/* The Modal (background) */
.modal {
display:none;
position: fixed;
z-index: 1;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: rgba(0,0,0,0.4);
}
/* Modal Content Box */
.modal-content {
background-color: #fefefe;
margin: 4% auto 15% auto;
border: 1px solid #888;
width: 40%;
padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
position: absolute;
right: 25px;
top: 0;
color: #000;
font-size: 35px;
font-weight: bold;
}
.close:hover,.close:focus {
color: red;
cursor: pointer;
}



/* Add Zoom Animation */
.animate {
animation: zoom 0.6s
}
@keyframes zoom {
from {transform: scale(0)}
to {transform: scale(1)}
}
      </style>
  </head>
  <body>
    
	  

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light text-right " id="ftco-navbar" dir="rtl">
	    <div class="container">
	      <a class="navbar-brand " href="index.html">Order System</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> القائمة
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav" >
	        <ul class="navbar-nav ">
	        	<li class="nav-item active"><a href="/" class="nav-link">الرئيسية</a></li>
            <li class="nav-item"><a href="/meals" class="nav-link">القائمة</a></li>
            <li class="nav-item "><a href="/about" class="nav-link">معلومات عنّا</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">تواصل معنا</a></li>
            <li class="nav-item cta"><a href="/reservation" class="nav-link">حجز طاولة</a></li>
          </ul>
          <ul class="navbar-nav mr-auto">
            <li id="signup"   class=" nav-item "  onclick="document.getElementById('modal-wrapper').style.display='block'" ><a  class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3 nav-link" >Sign Up</a></li>
            <li   class="nav-item "  onclick="document.getElementById('modal-wrapper').style.display='block'" ><a  class="mr-4 btn btn-primary p-3 px-xl-4 py-xl-3 nav-link">Sign In</a></li>
          </ul>
              
              <div id="modal-wrapper" class="modal">
              
              <form class="modal-content animate" action="">
              
              <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
              <h1 style="text-align:center">تسجيل الدخول</h1>
              </div>
              
              
               
              <div class="container">
              <input type="text" placeholder="Enter Username" name="uname">
              <input type="password" placeholder="Enter Password" name="psw">
              <button type="submit">Login</button>
           
              </div>
              
              </form>
              
              </div>
              <script>
                      // If user clicks anywhere outside of the modal, Modal will close
                      
                      var modal = document.getElementById('modal-wrapper');
                      window.onclick = function(event) {
                      if (event.target == modal) {
                      modal.style.display = "none";
                      }
                      }
                      </script>
	   
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    @yield('content')




    {{-- footer --}}

     <footer class="ftco-footer ftco-bg-dark" dir="rtl">
      <div class="container" dir="rtl">
        <div class="row" dir="rtl">
          <div class="col-md-12 col-lg-12" dir="rtl">
            <div class="ftco-footer-widget" dir="rtl">
              <h2 class="ftco-heading-2 text-right mb-1" >Order System</h2>
              <p class="text-right mb-1"> نظام الطلب اونلاين للمطاعم و المقاهي وايضا نظام حجز طاولات قبل الوصول للمطعم او المقهى لتفادي الزحمة</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-0" dir="rtl">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tec Camp by Our Team
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  
{{-- END footer --}}
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('js/jquery.min.js')}}"></script>

  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>

  <script src="{{asset('js/popper.min.js')}}"></script>

  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>

  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>

  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>

  <script src="{{asset('js/owl.carousel.min.js')}}"></script>

  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

  <script src="{{asset('js/aos.js')}}"></script>

  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>

  <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>

  <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>

  <script src="{{asset('js/scrollax.min.js')}}"></script>

  <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>

  <script src="{{asset('js/google-map.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>
    
  </body>
</html>