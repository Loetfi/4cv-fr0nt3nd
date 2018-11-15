@extends('layouts.frontend')

@section('title','ACV Register')

@section('css')
<style type="text/css">
    .toast-top-center {
        position: fixed;
        top: 100px;
        margin-top: 100px auto;
        /*left: 50%;*/
    }
    input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }
    .btn-warning {
        font-family: "open_sansregular", Helvetica, San serif;
        background-color: #ec971f;
        font-size: 14px;
        color: #ffffff;
        padding: 10px 25px;
        display: inline-block;
        border: 1px solid #ec971f;
        border-radius: 0 !important;
    }
    .btn-warning:hover {
        background-color: transparent;
        border: 1px solid #ec971f;
        color: #ec971f;
    } 
</style>
@endsection

@section('content')
<section class="parallax-services" data-parallax="scroll" data-image-src="{{ asset('frontend/img/registration-bg.jpg')}}">
    <span class="overlay-medium-light zindex-lower"></span>  
</section>
<section>
    <div id="notification"></div>
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
                        <form id="frm-register">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input id="fullname" name="fullname" placeholder="Nama Lengkap" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input id="email" name="email" placeholder="Email" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 input-notification">
                                        <input id="phone_number" name="phone_number" placeholder="Ext: 08197689999" class="form-control input-md" type="number"><span>Pastikan nomor yang anda masukan <strong>benar</strong>. Agar kami mudah melakukan verifikasi</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input id="password" name="password" placeholder="Masukan Password" class="form-control input-md" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 input-notification">
                                        <input id="confirm_password" name="confirm_password" placeholder="Ulangi kata sandi" class="form-control input-md" type="password">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-info" type="submit" id="btn-register">Daftar Sekarang</button> <button type="button" class="btn btn-warning" id="btn-resend-email" style="display:none;">Kirim Ulang Email</button>
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
<div id="loader_before_send" style="display: none;">
    <img src="{{ asset('frontend/img/loader-ball.gif') }}">
</div>
@endsection

@section('script')
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ asset('frontend/js/blockUI.min.js') }}"></script>
<script>
    new WOW().init();
</script>
<script>
    (function() {
        $.fatNav();
    }());
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
<!-- jquery validate -->
<script>
$(document).ready(function() {
    $('#btn-resend-email').hide();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    jQuery(function($) {
        $.validator.setDefaults({
            errorClass: 'help-block',
            highlight: function(element) {
                $(element)
                    .closest('.form-group')
                    .addClass('has-error');
            },
            unhighlight: function(element) {
                $(element)
                    .closest('.form-group')
                    .removeClass('has-error')
                    .addClass('has-success');
            }
        });

        $('#frm-register').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                fullname: {
                    required: true
                },
                phone_number: {
                    required: true,
                    number: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 12,
                },
                confirm_password: {
                    required: true,
                    equalTo: "#password",
                }
            },
            submitHandler: function(form) {
                $.ajax({
                    type: 'POST',
                    url: '{{ url("register/store")}}',
                    dataType: "json",
                    data: $('#frm-register').serialize(),
                    beforeSend: function (r) {
                        $.blockUI({   
                            // message: $('#loader_before_send'),
                            css: { 
                                border: 'none', 
                                padding: '15px', 
                                backgroundColor: '#000', 
                                '-webkit-border-radius': '10px', 
                                '-moz-border-radius': '10px', 
                                opacity: .5, 
                                color: '#fff' 
                            }
                        }); 
                    },
                    success: function(r) {
                        // console.log(r);
                        if(r.status == 1) {
                            // $('#frm-register')[0].reset();
                            toastr.options = {
                                timeOut : 0,
                                extendedTimeOut : 100,
                                tapToDismiss : true,
                                debug : false,
                                fadeOut: 10,
                                positionClass : "toast-top-center"
                            };
                            toastr.success(r.message,'Success');
                            $('input').prop('disabled', true);
                            $('#btn-register').attr('disabled',true);
                            $('#btn-resend-email').show();
                        } else {
                            toastr.options = {
                                timeOut : 0,
                                extendedTimeOut : 100,
                                tapToDismiss : true,
                                debug : false,
                                fadeOut: 10,
                                positionClass : "toast-top-center"
                            };
                            toastr.error(r.message,'Error');
                        }
                    },
                    error: function(r) {
                        toastr.error('Terjadi kesalahan, cobalah beberapa saat lagi','Error', {timeOut: 3000});
                    },
                    complete: function(r) {
                        $.unblockUI();
                    }
                });
            }
        });
    });

    $('#btn-resend-email').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '{{ url("register/resend-email")}}',
            dataType: "json",
            // data: {otp_code:otp_code},
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
});
</script>
@endsection