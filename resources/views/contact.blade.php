 @extends('layout.main')
    
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">التواصل</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span>تواصل معنا <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
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
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
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