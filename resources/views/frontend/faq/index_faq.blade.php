@extends('layouts.frontend')

@section('ttile','ACV Faq')

@section('content')
	<section class="parallax-services" data-parallax="scroll" data-image-src="{{ asset('frontend/img/faq-bg.jpg') }}">
	    <span class="overlay-light zindex-lower"></span>  
	</section>
	<section>
	    <div class="container">
	    <div class="col-md-12 faq-section">
	        <h2 class="tittle-head">Frequently <span>asked questions</span></h2>
	        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet</h4>
	        <div class="box-shadow bg-white accordion-faq p25 mt30 mb30">
	            <div class="panel-group" id="accordion">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
	                            Apa itu Astra Car Valuation?
	                            </a><i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseOne" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            Berada di bawah naungan Astra Group, Astra Car Valuation adalah penyedia jasa inspeksi independen untuk kendaraan roda empat atau lebih. 
	                            Inspeksi kendaraan kami dilakukan oleh inspector ahli yang sudah berpengalaman menganalisa kondisi mobil serta bagian-bagiannya selama bertahun-tahun.
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
	                            Apa keunggulan Astra Car Valuation?
	                            </a><i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseTwo" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p>a. Independen, kami tidak berpihak dan tidak terikat dengan pihak manapun. Hasil inspeksi kami adalah murni hasil analisa kondisi kendaraan Anda secara menyeluruh.</p>
	                            <p>b. Inspeksi kami dilakukan secara lengkap dan presisi. Hasil inspeksi kami tidak mengandung unsur subjektivitas dari inspector, karena Astra Car Valuation sudah menggunakan sistem inspeksi mobil terbaik dan terbaru.</p>
	                            <p>c. Kami akan hadir untuk Anda. Kami mengerti kesibukan Anda, cukup tentukan lokasi dan waktu pengecekan kendaraan dan kami akan menghampiri Anda.</p>
	                            <p>d. Kami menyediakan laporan digital atas hasil inspeksi kendaraan Anda dalam waktu dua jam setelah proses pemeriksaan kendaraan selesai dilakukan.</p>
	                            <p>e. Puluhan ribu database. Kami memiliki puluhan ribu database sehingga kami akan memberikan prediksi harga jual kendaraan Anda sesuai dengan kondisinya.</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
	                            Bagaimana cara kerjanya? 
	                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseThree" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p>a. Isi data kendaraan dan data diri Anda di website kami</p>
	                            <p>b. Customer Care kami akan menghubungi Anda dalam waktu 1 hari kerja setelah setelah Anda memasukkan data pada website kami</p>
	                            <p>c. Atur jadwal inspeksi dengan Customer Care kami </p>
	                            <p>d. Inspector kami akan datang memeriksa kendaraan Anda sesuai jadwal yang ditetapkan</p>
	                            <p>e. Laporan digital akan kami kirimkan dalam waktu maksimal 2 jam setelah proses inspeksi selesai dilakukan</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
	                            Berapa biaya yang diperlukan? 
	                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseFour" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            Klik di sini (LINK) untuk mengetahui biaya selengkapnya
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
	                            Di mana saja area layanan Astra Car Valuation? 
	                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseFive" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            Saat ini Astra Car Valuation melayani inspeksi kendaraan Anda di Jakarta saja
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
	                            Apakah harus booking jadwal terlebih dahulu?
	                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseSix" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p>Kami membutuhkan booking jadwal dan konfirmasi pembayaran dalam 1x24 jam setelah Anda membuat jadwal inspeksi dengan Customer Care kami.</p>
	                            <p>Permintaan inspeksi di hari yang sama dapat dilakukan jika memang masih ada jadwal inspeksi yang tersedia.</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
	                            Mobil apa saja yang bisa diinspeksi? 
	                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseSeven" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            Kami menerima pemeriksaan semua mobil penumpang dan mobil komersil yang beredar di Indonesia. Hubungi Customer Care kami untuk memastikan mobil Anda bisa kami inspeksi.
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
	                            Hari kerja Astra Car Valuation? 
	                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseEight" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            Kami melayani pemeriksaan mobil Anda setiap hari Senin-Sabtu pukul 09:00 - 16:00. Kami libur pada hari Minggu an tanggal merah.
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
	                            Bagaimana jika saya ingin merubah jadwal inspeksi?
	                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseNine" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p>Perubahan jadwal inspeksi memungkinkan untuk dilakukan selama proses inspeksi kendaraan belum berjalan. Inspector kami akan menghubungi Anda sebelum berangkat ke lokasi Anda.</p>
	                            <p>Hubungi Customer Care kami untuk melakukan perubahan jadwal.</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
	                            Bisakah saya membatalkan inspeksi kendaraan saya?
	                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
	                        </h4>
	                    </div>
	                    <div id="collapseTen" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p>Anda bisa melakukan pembatalan inspeksi kendaraan Anda selama pembatalan dilakukan sebelum proses inspeksi kendaraan berlangsung. Anda akan dikenakan biaya administrasi sebesar 60% dari total pembayaran Anda.</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="box-shadow bg-white p25">
	            <div class="col-md-3"><img src="{{ asset('frontend/img/icon/faq-state.png') }}" class="img-responsive"></div>
	            <div class="col-md-9">
	                <h3 class="font-tittle">Masih butuh bantuan ?</h3>
	                <p>Sedang mencari jawaban, ingin mendapatkan solusi, atau hanya sekedar memberikan masukan atas kinerja kami? Silakan hubungi kami melalui layanan LIVE CHAT ini. Kami akan segera membantu menyelesaikan masalah Anda dengan cepat dan mudah!</p>
	                <div class="col-md-12 no-gutter no-radius mt10">
	                    <a class="btn-info ico-hp" href="contact-us.html">Hubungi kami</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<div class="cta-footer mt60">
	    <div class="container">
	        <div class="col-md-8">
	            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
	            <p>Lorem ipsum dolor sit amet, consectetur</p>
	        </div>
	        <div class="col-md-4 text-center">
	            <a href="#" class="btn-green mt5">Booking inspection</a>
	        </div>
	    </div>
	</div>
@endsection

@section('script')
	<script>
	    new WOW().init();
	</script>
	<script>
	    function toggleChevron(e) {
	      $(e.target)
	        .prev('.panel-heading')
	        .find("i.indicator")
	        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
	      }
	    $('#accordion').on('hidden.bs.collapse', toggleChevron);
	    $('#accordion').on('shown.bs.collapse', toggleChevron);
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