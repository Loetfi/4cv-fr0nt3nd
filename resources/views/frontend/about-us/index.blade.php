@extends('layouts.frontend')

@section('ttile','ACV About us')

@section('content')
	<section class="parallax-services" data-parallax="scroll" data-image-src="{{ asset('frontend/img/parallax-aboutus.png') }}">
	    <span class="overlay-super-light"></span>  
	</section>
	<section>
	    <div class="container">
	        <div class="col-md-12 about-section">
	            <div class="col-md-12 mb30 col-white">
	                <h2 class="tittle-head">About <span>Us</span></h2>
	                <h3>Astra Car Valuation adalah penyedia jasa inspeksi kendaraan yang independen, terlengkap, dan dilakukan oleh ahlinya</h3>
	            </div>
	            <div class="col-md-4 about-info">
	                <img src="{{ asset('frontend/img/about-us.png') }}" class="img-responsive">
	            </div>
	            <div class="col-md-8 mt120">
	                <p>Astra Car Valuation dibangun atas inisiasi dari PT Balai Lelang Serasi (ibid) - ASTRA Group sejak tahun 2016.</p>
	                <p>Sebagai balai lelang kendaraan milik Astra Group, ibid sangat peduli terhadap transparansi informasi kondisi kendaraan yang dilelang sehingga pelanggan dapat mengetahui kondisi kendaraan yang diinginkan sebelum membelinya.</p>
	                <p>Oleh karena itu, sistem inspeksi kendaraan roda empat Astra Car Valuation (ACV) diciptakan. ACV sudah digunakan oleh internal ibid sejak Oktober 2016 – saat ini, dan jumlah kendaraan yang telah diinspeksi mencapai belasan ribu kendaraan.</p>
	                <p>Agar bisa bermanfaat bagi lebih banyak pelanggan, maka sejak 2018 ACV dapat digunakan oleh siapa saja yang hendak melakukan transaksi mobil bekas di mana saja, kapan saja.
	                </p>
	            </div>
	        </div>
	    </div>
	</section>
	<div class="cta-footer mt120">
	    <div class="container">
	        <div class="col-md-8">
	            <h2>Ketahui kondisi kendaraan idaman Anda bersama Astra Car Valuation.</h2>
	            <p>Lorem ipsum dolor sit amet, consectetur</p>
	        </div>
	        <div class="col-md-4 text-center">
	            <a href="#" class="btn-green mt5" data-toggle="modal" data-target="#ModalBooking">Booking inspection</a>       
	        </div>
	    </div>
	</div>
@endsection

@section('script')
	<script>
	    (function() {
	        $.fatNav();
	    }());
	</script>
	<script>
	    new WOW().init();
	</script>
	<!-- TESTIMONIAL SCROLL -->
	<script type="text/javascript">
	    $(document).on('ready', function() {
	      $("#testimonial-acv").slick({
	        dots: true,
	        infinite: true,
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        responsive: [{
	          breakpoint: 1024,
	          settings: {
	            slidesToShow: 4,
	            slidesToScroll: 4,
	            infinite: !0,
	            dots: !0
	          }
	        }, {
	          breakpoint: 600,
	          settings: {
	            slidesToShow: 3,
	            slidesToScroll: 3
	          }
	        }, {
	          breakpoint: 480,
	          settings: {
	            slidesToShow: 1,
	            slidesToScroll: 1
	          }
	        }]
	      });
	    });
	</script>
	<!-- FADEIN BIG SLIDER -->
	<script>
	    $('#carouselHacked').carousel();
	</script>
	<!-- NAVIGATION -->
	<script>
	    var $jnoc = jQuery.noConflict();
	    $jnoc(document).on("scroll", function() {
	      if($jnoc(document).scrollTop()>20) {
	        $jnoc("nav").removeClass("large").addClass("small");
	      } else {
	        $jnoc("nav").removeClass("small").addClass("large");
	      }
	    });
	</script>
	<!-- PARALLAX -->
	<script>
	    $(document).scroll(function () {  
	      var $movebg = $(window).scrollTop() * -0.3;
	      $('.parallax').css('background-positionY', ($movebg) + 'px');
	    });
	</script>
	<!-- splash screen while page loading -->
	<script type="text/javascript">
	    $(window).load(function() {
	      $(".preloader").delay(100).fadeOut("slow");
	    })
	</script>
@endsection