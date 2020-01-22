@extends('layout.main')
    
@section('content')

    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate mt-5">
            	<span class="subheading">Order System</span>
              <h1 class="mb-5">نظام الطلب الخاص بالمطاعم</h1>
            </br>
              
            </div>
       </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate mt-5">
            	<span class="subheading">احجز طلبيتك</span>
              <h1 class="mb-5"> وأنت في مكانك  </h1>
            </br>
              
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate mt-5">
            	<span class="subheading">احجز طاولة</span>
              <h1 class="mb-5"> من حوشك</h1>
            </br>
            
            </div>

          </div>
        </div>
    
      </div>
    </section>

    
		
		<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <span class="subheading mb-5">خدماتنا</span>
          
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">حجز طاولة</h3>
                <p>امكانية حجز طاولة، حتى تصل الى المطعم وتجدها في انتظارك، دون اي انتظار.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">طلب الطعام</h3>
                <p>لا ادعي للإنتظار مجدداً في طوابير طويلة حتى تحصل على طعامك، يمكنك الآن طلب وجبتك المفضلة من خلال تطبيقنا .</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">منيو رقمية</h3>
                <p>اطلب طعامك انت وعائلتك أو اصدقائك داخل طاولات المطعم بمنيو رقمية سهلة الاستخدام!.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    
	@endsection