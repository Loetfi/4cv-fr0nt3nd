@extends('layouts.frontend')

@section('title','ACV Homepage')

@section('content')
	<header>
	    <div class="row-down"><i class="fa fa-chevron-down"></i></div>
	    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
	        <!-- <ol class="carousel-indicators">
	            <li data-target="#carouselHacked" data-slide-to="0" class="active"></li>
	            <li data-target="#carouselHacked" data-slide-to="1"></li>
	            </ol> -->
	        <div class="carousel-inner" role="listbox">
	            <div class="item active" style="background-image:url('{{asset("frontend/img/1.jpg")}}');">
	                <div class="car-float"><img class="img-responsive animated fadeInRight" src="{{ asset('frontend/img/slider-pattern.png') }}"></div>
	                <div class="darknes">
	                    <div class="carousel-caption">
	                        <div class="col-md-9 col-sm-12 col-xs-12 animated fadeInUp">
	                            <h1>Solusi tepat mengecek kendaraan idaman Anda</h1>
	                            <p data-wow-duration="" data-wow-delay="1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                tempor incididunt ut labore et dolore magna aliqua.
	                            </p>
	                            <button type="button" class="btn btn-green f-bd" data-toggle="modal" data-target="#squarespaceModal">ORDER INSPECTION</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="item" style="background-image:url('img/2.jpg');">
	                <div class="car-float"><img class="img-responsive animated fadeInRight" src="{{ asset('frontend/img/slider-pattern2.png') }}"></div>
	                <div class="darknes">
	                    <div class="carousel-caption">
	                        <div class="col-md-9 col-sm-12 col-xs-12 animated fadeInUp">
	                            <h1>Pastikan Legalitas Dokumen kendaraan anda</h1>
	                            <p data-wow-duration="" data-wow-delay="1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                tempor incididunt ut labore et dolore magna aliqua.
	                            </p>
	                            <button type="button" class="btn btn-green f-bd" data-toggle="modal" data-target="#squarespaceModal">ORDER INSPECTION</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Controls -->
	        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	        </a>
	    </div>

	    @if (session()->has('flash_notification.message'))
		  	<div id="flash_notification">
			  	<div class="alert alert-{{ session()->get('flash_notification.type') }} alert-dismissible">
			    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			    	{!! session()->get('flash_notification.message') !!}
			  	</div>
		  	</div>
		@endif

	</header>

	<section class="about-us">
	    <div class="container">
	        <div class="col-md-8 col-md-offset-2">
	            <h2 class="tittle-head tittle-pattern fc-purple mb10">Who <span>we are</span></h2>
	            <p>Membeli mobil jangan sampai seperti membeli kucing dalam karung. Anda harus tahu seluk beluk kondisi sebenarnya kendaraan idaman Anda.</p>
	            <p><strong>Astra Car Valuation</strong> menyediakan jasa inspeksi mobil independen terlengkap dan terpercaya yang dilakukan oleh para ahli mobil berpengalaman. Dengan melihat laporan inspeksi dari kami, Anda bisa mendapat informasi yang lengkap terkait kondisi mobil idaman Anda.</p>
	            <div class="row col-md-12 text-center">
	                <a href="about-us.html" class="btn-a pull-right">selengkapnya <i class="fa fa-arrow-right"></i></a>
	            </div>
	        </div>
	    </div>
	    <div class="container">
	        <div class="col-md-8 col-md-offset-2 rich-content text-center wow animated fadeInLeft">
	            <div class="dotted">
	                <a class="dott-icon cat">
	                    <span>
	                        <p>Painting inspection</p>
	                    </span>
	                </a>
	                <a class="dott-icon body">
	                    <span>
	                        <p>interior checking</p>
	                    </span>
	                </a>
	                <a class="dott-icon engine">
	                    <span>
	                        <p>engine inspection</p>
	                    </span>
	                </a>
	                <a class="dott-icon frame">
	                    <span>
	                        <p>Frame checking</p>
	                    </span>
	                </a>
	            </div>
	            <img src="{{ asset('frontend/img/car-content.png') }}" class="img-responsive">
	        </div>
	    </div>
	</section>
	<section class="our-services">
	    <div class="container">
	        <div class="col-md-10 col-md-offset-1">
	            <h2 class="tittle-head text-center"><span>OUR</span> SERVICES</h2>
	            <div class="row">
	                <div class="col-md-6">
	                    <a href="our-services.html">
	                        <div class="service-box">
	                            <div class="col-md-3">
	                                <div class="icon-services ic-car">icon</div>
	                            </div>
	                            <div class="col-md-9">
	                                <h3>Car Inspection</h3>
	                                <p>Ketahui seluk beluk kondisi kendaraan idaman Anda dengan inspeksi kendaraan terlengkap yang dilakukan secara menyeluruh, mendetail dan dilakukan oleh ahlinya</p>
	                            </div>
	                        </div>
	                    </a>
	                </div>
	                <div class="col-md-6">
	                    <a href="our-services.html#document-info-bg">
	                        <div class="service-box">
	                            <div class="col-md-3">
	                                <div class="icon-services ic-doc">icon</div>
	                            </div>
	                            <div class="col-md-9">
	                                <h3>Document <span>+car</span> Inspection</h3>
	                                <p>Kami mengerti keabsahan dokumen menjadi faktor yang penting dalam bertransaksi mobil bekas. Cek keabsahan dokumen kendaraan idaman Anda sebelum bertransaksi.</p>
	                            </div>
	                        </div>
	                    </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<section>
	    <div class="container advantage">
	        <div class="col-md-5">
	            <h3 class="tittle italic tal-c">Buyer</h3>
	            <p>Kami menawarkan jasa inspeksi untuk kendaraan incaran Anda secara menyeluruh, lengkap, dan presisi.</p>
	            <ul>
	                <li>Percaya diri, membeli mobil bekas bukan lagi seperti membeli kucing dalam karung</li>
	                <li>Mudah, inspeksi dilakukan di tempat anda</li>
	                <li>Dapatkan laporan inspeksi lengkap secara real time</li>
	            </ul>
	        </div>
	        <div class="col-md-5 pull-right">
	            <h3 class="tittle italic tal-c">Seller</h3>
	            <p>Kami menawarkan jasa inspeksi untuk kendaraan yang Anda jual secara menyeluruh, lengkap, dan presisi</p>
	            <ul>
	                <li>Yakinkan pembeli dengan kondisi kendaraan yang Anda jual</li>
	                <li>Mudah, inspeksi dilakukan di tempat anda</li>
	                <li>Dapatkan laporan inspeksi lengkap secara real time</li>
	            </ul>
	        </div>
	    </div>
	    <div class="container">
	        <div class="col-md-8 text-center col-md-offset-2 mt30">
	            <p>Apakah Anda High Volume Partners seperti Company Fleet, Business to Business (B2B) atau Balai Lelang?Kami menawarkan jasa inspeksi untuk asset kendaraan secara menyeluruh, lengkap, dan presisi.Astra Car Valuation bisa memenuhi inspeksi kendaraan sesuai kebutuhan Anda. Hubungi kami dan kami akan hadir untuk Anda</p>
	        </div>
	    </div>
	</section>
	<section class="usp">
	    <div class="container">
	        <div class="row text-center mb40">
	            <h2 class="tittle-head tittle-pattern tal-c">how <span>it works</span></h2>
	        </div>
	        <div class="row clearfix">
	            <div class="col-md-3">
	                <div class="col-md-12 tal-c"><img src="{{ asset('frontend/img/icon/usp-doc.png') }}"></div>
	                <div class="col-md-11 col-md-offset-1 mb40">
	                    <div class="col-md-4 col-sm-4 col-xs-4 no-gutter number">01</div>
	                    <div class="col-md-8 col-sm-8 col-xs-8 no-gutter text">Isi data pribadi dan data kendaraan</div>
	                </div>
	            </div>
	            <div class="col-md-3 mb30">
	                <div class="col-md-12 tal-c"><img src="{{ asset('frontend/img/icon/usp-call.png') }}"></div>
	                <div class="col-md-11 col-md-offset-1">
	                    <div class="col-md-4 col-sm-4 col-xs-4 no-gutter number">02</div>
	                    <div class="col-md-8 col-sm-8 col-xs-8 no-gutter text">Buat jadwal inspeksi dengan Customer Care</div>
	                </div>
	            </div>
	            <div class="col-md-3 mb30">
	                <div class="col-md-12 tal-c"><img src="{{ asset('frontend/img/icon/usp-inspector.png') }}"></div>
	                <div class="col-md-11 col-md-offset-1">
	                    <div class="col-md-4 col-sm-4 col-xs-4 no-gutter number">03</div>
	                    <div class="col-md-8 col-sm-8 col-xs-8 no-gutter text">Inspector Ahli kami  datang sesuai waktu dan lokasi</div>
	                </div>
	            </div>
	            <div class="col-md-3 mb30">
	                <div class="col-md-12 tal-c"><img src="{{ asset('frontend/img/icon/usp-report.png') }}"></div>
	                <div class="col-md-11 col-md-offset-1">
	                    <div class="col-md-4 col-sm-4 col-xs-4 no-gutter number">04</div>
	                    <div class="col-md-8 col-sm-8 col-xs-8 no-gutter text">Dapatkan laporan inspeksi secara online</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<section class="testimonial">
	    <div id="testimonial-acv" class="container col-md-10 col-md-offset-1 testimonial-slider">
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Lelang semakin asyik, karyawan baik-baik, proses adm dan surat-surat cepat."<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi1.png') }}">
	        </div>
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Pelayanan ramah. Semoga balai lelang IBID tambah lebih maju lagi bisa menandingi balai lelang yang lain !"<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi3.png') }}">
	        </div>
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Informasi unit mobil cepat, pelunasan cepat, layanannya ramah, pengembalian deposit cepat, pengeluaran unit cepat."<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi5.png') }}">
	        </div>
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Informasi unit mobil cepat, pelunasan cepat, layanannya ramah, pengembalian deposit cepat, pengeluaran unit cepat"<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi3.png') }}">
	        </div>
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Pelunasan no.1 Tercepat, Balai lelang paling best, balai lelang paling ramah, makanan paling enak"<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi4.png') }}">
	        </div>
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Satu kata "bagus" baik dari sisi harga, mobil, show dan kru ibid"<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi5.png') }}">
	        </div>
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Pelunasan no.1 Tercepat, Balai lelang paling best, balai lelang paling ramah, makanan paling enak"<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi2.png') }}">
	        </div>
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Informasi unit mobil cepat, pelunasan cepat, layanannya ramah, pengembalian deposit cepat, pengeluaran unit cepat"<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi4.png') }}">
	        </div>
	        <div class="text-center box-t">
	            <div class="testi-quotes">"Pelunasan no.1 Tercepat, Balai lelang paling best, balai lelang paling ramah, makanan paling enak"<span>Jhone Doe</span></div>
	            <img src="{{ asset('frontend/img/testi5.png') }}">
	        </div>
	    </div>
	</section>
	<section class="cta-home">
	    <div class="container">
	        <div class="col-md-8">
	            <h2 class="tittle">Jangan sampai menyesal dalam bertransaksi mobil bekas</h2>
	            <p>Periksa kendaraan idaman anda bersama kami</p>
	        </div>
	        <div class="col-md-4 tal-c"><a data-toggle="modal" data-target="#squarespaceModal" href="#">order inspection</a></div>
	    </div>
	</section>
	<section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('frontend/img/parallax3.jpg') }}">
	    <span class="overlay">
	        <div class="container mt60">
	            <div class="col-md-12 text-center cont-hp">
	                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
	                <span><i class="fa fa-phone"></i> <a href="#">087898999</a></span>
	                <span><i class="fa fa-paper-plane"></i> <a class="" href="#">Contact us</a></span>
	            </div>
	        </div>
	    </span>
	</section>
	<section class="seo-text">
	    <div class="container">
	        <div class="col-md-6">
	            <h3>
	            Lorem ipsum dolor sit amet</h2>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
	        </div>
	        <div class="col-md-6">
	            <h3>Lorem ipsum dolor sit amet</h3>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
	        </div>
	    </div>
	</section>

<!--
<style>
#sanusiCoba{
	background: red;
	border: 5px solid black;
	border-radius: 5px;
	position: absolute;
	margin: 20px auto;
	height: 100px;
}
</style>
	 <div id="sanusiCoba">
		tulisannya ada disini
	</div> -->
@endsection

@section('script')
	<script>
	    new WOW().init();
	</script>
	<script>
	    (function() {
	        $.fatNav();
	    }());
	</script> 
	<!-- splash screen while page loading -->
	<script type="text/javascript">
	    $(window).load(function() {
	      $(".preloader").delay(1000).fadeOut("slow");
	    })
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
@endsection