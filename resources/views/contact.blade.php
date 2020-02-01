 @extends('layout.main')
    
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">التواصل</h1>
           </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-4 pt-5 px-2 pb-2 p-md-5 order-md-last">
						<h2 class="h4 mb-2 mb-md-5 font-weight-bold text-right">تواصل معنا </h2>
					<form action="{{ route('sendMessage')}}" method="post" class="form-validation row" autocomplete="off">
              						@csrf

              {{-- <div class="form-group">
                <input type="text" class="form-control text-right" placeholder="إسمك ">
              </div> --}}
              <div class="form-group">
                <input type="text" class="form-control text-right" name="email" placeholder="بريدك الالكتروني">
              </div>
              <div class="form-group">
                <input type="text" class="form-control text-right " name="subject" placeholder="الموضوع ">
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" class="form-control text-right" name="message" placeholder="رسالتك"></textarea>
              </div>
              <br> 
              <div class="form-group text-right">
                <input type="submit" value=" أرسل " class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-8 d-flex align-items-stretch">
						{{-- <div id="map"></div> --}}

            		{{-- <div>			<img src="images/location1.jpg" alt="image"> </div> --}}
                <a href="https://www.google.com/maps/dir//Hive+space,+Tower+Road,+%E1%B9%ACar%C4%81-bu-lus+al-Gharb/@32.8710921,13.1441054,15.12z/data=!4m9!4m8!1m0!1m5!1m1!1s0x13a8ed3335449ccb:0xa04ed0f6acf28fcf!2m2!1d13.130425!2d32.8688644!3e0">
         <img alt="image" src="images/location1.png">
      </a>

					</div>
				</div>
			</div>
		</section>
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">

            <h2 class="h2 font-weight-bold text-right">:معلومات التواصل</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	<div class="dbox text-right">
	            <p><span><strong>العنوان :</strong></span> حي الاندلس بجانب جامع بدر </p>
            </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="dbox text-right">
	            <p><span><strong>رقم الهاتف :</strong></span> <a href="tel://1234567920">+ 92 555 5555</a></p>
            </div>
          </div>
          <div class="col-md-4 d-flex text-left">
          	<div class="dbox text-right">
	            <p><span class="text-right"><strong>الإيميل :</strong></span> <a href="mailto:info@yoursite.com">مطعم@جيميل.كوم</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		
  @endsection