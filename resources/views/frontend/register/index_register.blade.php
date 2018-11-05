@extends('layouts.frontend')

@section('title','ACV Register')

@section('content')
<section class="parallax-services" data-parallax="scroll" data-image-src="{{ asset('frontend/img/registration-bg.jpg')}}">
    <span class="overlay-medium-light zindex-lower"></span>  
</section>
<section>
    <div class="container">
    <div class="col-md-12 registration-section">
        <div class="quotes-section">
            <h2 class="quotes">"Lelang semakin asyik, karyawan baik-baik, proses adm dan surat-surat cepat."
                <span>jhone Doe</span>
            </h2>
            <h2 class="quotes">"Pelayanan ramah. Semoga balai lelang IBID tambah lebih maju lagi bisa menandingi balai lelang yang lain !"
                <span>Fatih Nabumi</span>
            </h2>
            <h2 class="quotes">"Informasi unit mobil cepat, pelunasan cepat, layanannya ramah, pengembalian deposit cepat, pengeluaran unit cepat.
                <span>Mas Eko</span>
            </h2>
        </div>
        <div class="box-shadow bg-white bg-pattern-city section-registration">
            <div class="form-registration form-default">
                <div class="col-md-6 col-md-offset-1 border-right">
                    <h3 class="text-center">Daftar Akun Baru</h3>
                    <div>
                        <form>
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input id="firstname" name="firstname" placeholder="Nama Lengkap" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input id="firstname" name="firstname" placeholder="Email" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 input-notification">
                                        <input id="firstname" name="firstname" placeholder="Ext: 08197689999" class="form-control input-md" type="text"><span>Pastikan nomor yang anda masukan <strong>benar</strong>. Agar kami mudah melakukan verifikasi</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input id="password" name="firstname" placeholder="Masukan Password" class="form-control input-md" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 input-notification">
                                        <input id="firstname" name="firstname" placeholder="Ulangi kata sandi" class="form-control input-md" type="text"><span>Kata sandi tidak sama</span>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Daftar Sekarang</button>
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="form-registration form-default">
                    <div class="col-md-4 borer">
                        <h3 class="text-center">Gunakan Social Media</h3>
                        <div>
                            <form>
                                <fieldset>
                                    <div class="form-group">
                                        <div class="login-socialmedia register-socialmedia">
                                            <a href="{{ url('auth/facebook') }}" class="login-facebook"><span class="ic ic-facebook"></span>Daftar via Facebook</a>
                                            <a href="{{ url('auth/twitter') }}" class="login-twitter"><span class="ic ic-twitter"></span>Daftar via Twitter</a>
                                            <a href="{{ url('auth/google') }}" class="login-google"><span class="ic ic-google"></span>Daftar via Google</a>
                                            <!--  <a href="//ibid.astra.co.id/omni/linkedin/linkedin/" class="login-linkedin"><span class="ic ic-linkedin"></span>Daftar via Linkedin</a> -->
                                        </div>
                                        <div class="text-center mt30 login-socialmedia-help">
                                            <p>sudah punya akun? <a class="hover-cursor" data-toggle="modal" data-target="#ModalLogin">Masuk disini</a></p>
                                            <p>Atau anda kesulitan dalam proses registrasi ? <a href="contact-us.html">Hubungi kami</a></p>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<script>
    (function() {
          var quotes = $(".quotes");
          var quoteIndex = -1;
          
          function showNextQuote() {
              ++quoteIndex;
              quotes.eq(quoteIndex % quotes.length)
                  .fadeIn(1000)
                  .delay(4000)
                  .fadeOut(1000, showNextQuote);
          }
          
          showNextQuote();
          
      })();
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