@extends('layouts.frontend')

@section('title','ACV - OTP')

@section('content')
<section class="blank">
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2 otp-section">
                <div class="col-md-4 col-sm-4 col-xs-4"><img src="{{ asset('frontend/img/otp-pattern.png') }}" class="img-responsive"></div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <h2>Verifikasi nomor HP (OTP)</h2>
                    <h4>Masukan kode verifikasi Disini</h4>
                    <div class="numb-otp">
                        <input type="phone" class="vcode-input" maxlength="1" id="vcode1">
                        <input type="phone" class="vcode-input" maxlength="1" id="vcode1">
                        <input type="phone" class="vcode-input" maxlength="1" id="vcode1">
                        <input type="phone" class="vcode-input" maxlength="1" id="vcode1">
                        <input type="phone" class="vcode-input" maxlength="1" id="vcode1">
                    </div>
                    <p>Tidak menerima kode OTP ? <a href="#">kirim ulang</a></p>
                    <span class="text-center col-md-6 mb20"><a class="btn-info mt10 text-right" href="#">Verifikasi</a></span>
                </div>
            </div>
        </div>
    </div>
</section>
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