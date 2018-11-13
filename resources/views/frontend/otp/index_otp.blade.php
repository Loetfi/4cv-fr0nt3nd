@extends('layouts.frontend')

@section('title','ACV - OTP')

@section('css')
@endsection

@section('content')
<section class="blank">
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2 otp-section">
                <div class="col-md-4 col-sm-4 col-xs-4"><img src="{{ asset('frontend/img/otp-pattern.png') }}" class="img-responsive"></div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <h2>Verifikasi nomor HP (OTP)</h2>
                    <h4>Masukan kode verifikasi Disini</h4>
                    <form id="frm-otp">
                        @csrf
                        <div class="numb-otp">
                            <input name="otp_code[]" type="phone" class="vcode-input" maxlength="1" id="vcode1" required>
                            <input name="otp_code[]" type="phone" class="vcode-input" maxlength="1" id="vcode2" required>
                            <input name="otp_code[]" type="phone" class="vcode-input" maxlength="1" id="vcode3" required>
                            <input name="otp_code[]" type="phone" class="vcode-input" maxlength="1" id="vcode4" required>
                            <input name="otp_code[]" type="phone" class="vcode-input" maxlength="1" id="vcode5" required>
                        </div>
                    </form>
                    
                    <p>Tidak menerima kode OTP ? <a href="#" id="link-kirim-ulang">kirim ulang</a></p>
                    <div id="time-countdown"></div>
                    <span class="text-center col-md-6 mb20">
                        <button class="btn-info mt10 text-right" id="btn-verifikasi">
                            Verifikasi
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
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
<script>
    $(document).ready(function() {
        $('#btn-verifikasi').show();
        countdown();
        $('#btn-verifikasi').on('click', function(e) {
            e.preventDefault();
            var otp_code = $("input[name='otp_code[]']").map(function() {
                return $(this).val();
            }).get().join().replace(/,/g, '');

            // console.log(data);
            $.ajax({
                type: 'POST',
                url: '{{ url("otp/validate-otp")}}',
                dataType: "json",
                data: {otp_code:otp_code},
                beforeSend: function (r) {
                    console.log(r);
                },
                success: function(r) {
                    toastr.info(r.message,'Info');
                },
                error: function(r) {
                    console.log(r);
                }
            });
        });

        $('#link-kirim-ulang').on('click', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '{{ url("otp/resend-otp")}}',
                dataType: "json",
                // data: {otp_code:otp_code},
                beforeSend: function (r) {
                    console.log(r);
                },
                success: function(r) {
                    toastr.info(r.message,'Info');
                    countdown();
                },
                error: function(r) {
                    console.log(r);
                }
            }); 
        });
    });
    
    function countdown()
    {
        $('#btn-verifikasi').show();
        jQuery(function($) {
            var time = new Date().getTime() + 12000;
            
            $('#time-countdown').countdown(time)
            .on('update.countdown', function(event) {
                var $this = $(this);
                $this.html(event.strftime('<p id="waktu">Waktu tersisa : <b>%M:%S</b></p>'));
            }).on('finish.countdown', function(event) {
                var $this = $(this);
                $this.html(event.strftime('<p id="waktu">Waktu tersisa : <b>00:00</b></p>'));
                $('#btn-verifikasi').hide();
            });
        });
    }
</script>
@endsection