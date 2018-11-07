<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="title" content="">

        <link rel="shortcut icon" href="images/icon/favicon.ico">
        <link rel="icon" type="image/png" href="images/icon/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="images/icon/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="images/icon/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="images/icon/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="images/icon/favicon-32x32.png" sizes="32x32">
        <!-- META OPENGRAPH FACEBOOK -->
        <meta property="og:url" content="" />
        <meta property="og:type" content=""/>
        <meta property="og:title" content="" />
        <meta property="og:description" content=""/>
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="">
        <!-- META OPENGRAPH TWITTER -->
        <meta name="twitter:card" content="">
        <meta name="twitter:site" content="">
        <meta name="twitter:creator" content="">
        <meta name="twitter:url" content="">
        <meta name="twitter:domain" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image:src" content="">

        <!-- token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/jquery.fatNav.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/slick-theme.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('frontend/css/respond.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" type="text/css">
        
        @yield('css')
    </head>
    <body>
        <div class="preloader"></div>
        
        @include('layouts.frontend.menu')
        
        @yield('content')
        
        @include('layouts.frontend.footer')

        <!-- FORM BOOKING INSPECTION -->
        <!-- line modal -->
        <div class="modal modal-booking fade mt60" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">BOOKING INSPECTION</h3>
                    </div>
                    <div class="modal-body">
                        <!-- content goes here -->
                        <form class="form-horizontal">
                            <div class="col-md-12 bg-purple">
                                <div class="col-md-6 text-center">
                                    <h2>JADWAL DAN LOKASI INSPEKSI</h2>
                                </div>
                                <div class='col-sm-6'>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="frb frb-success col-md-6">
                                    <input type="radio" id="radio-button-1" name="radio-button" value="1">
                                    <label for="radio-button-1">
                                        <span class="frb-title">Alamat Pribadi</span>
                                        <select class="form-control">
                                            <optgroup label="DKI Jakarta">
                                                <option value="volvo">Jakarta Barat</option>
                                                <option value="saab">Jakarta Timur</option>
                                                <option value="saab">Jakarta Selatan</option>
                                                <option value="saab">Jakarta Pusat</option>
                                                <option value="saab">Jakarta Utara</option>
                                            </optgroup>
                                            <optgroup label="German Cars">
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </optgroup>
                                        </select>
                                        <input id="firstname" name="firstname" placeholder="Nama Lengkap" class="form-control input-md" type="text">
                                    </label>
                                </div>
                                <div class="frb frb-success col-md-6">
                                    <input type="radio" id="radio-button-2" name="radio-button" value="2">
                                    <label for="radio-button-2">
                                    <span class="frb-title">Pool IBID</span>
                                    <span class="frb-description">Jl. Bintaro Mulia I / 3 (Jl. RC Veteran) Bintaro Pesanggrahan, Jakarta Selatan 12250</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-carding">
                                <h2><span>identitas</span> diri</h2>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="firstname">Nama Lengkap</label>  
                                    <div class="col-md-8">
                                        <input id="firstname" name="firstname" placeholder="Nama Lengkap" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="firstname">Email</label>  
                                    <div class="col-md-8">
                                        <input id="firstname" name="firstname" placeholder="Email" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="firstname">Nomor Telepon</label>  
                                    <div class="col-md-8">
                                        <input id="firstname" name="firstname" placeholder="Ext: 08197689999" class="form-control input-md" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-carding">
                                <h2><span>identitas</span> Kendaraan</h2>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="firstname">Nomor Polisi</label>  
                                    <div class="col-md-8">
                                        <input id="firstname" name="firstname" placeholder="ext: B 123 RF " class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="firstname">Merek</label>  
                                    <div class="col-md-8">
                                        <input id="firstname" name="firstname" placeholder="Merek" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="firstname">Seri</label>  
                                    <div class="col-md-8">
                                        <input id="firstname" name="Seri" placeholder="Seri" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="tahun">Tipe</label>  
                                    <div class="col-md-8">
                                        <input id="firstname" name="Seri" placeholder="Tipe" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="tahun">Transmisi</label>  
                                    <div class="col-md-8">
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="matic">Pilih Transmisi</option>
                                            <option value="matic">Matic</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="tahun">Tahun</label>  
                                    <div class="col-md-8">
                                        <input id="firstname" name="Seri" placeholder="Tahun" class="form-control input-md" type="text">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                            </div>
                            <div class="btn-group btn-delete hidden" role="group">
                                <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @guest
        <!-- POPUP LOGIN -->
        <!-- line modal -->
        <div class="modal modal-registration fade mt60" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content bg-pattern-city">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <div class="col-md-12 p25">
                    <div class="form-registration form-default">
                        <div class="col-md-6">
                            <h3 class="text-center mb30">Masuk Akun</h3>
                            <div>
                                <form id="frm-login" method="POST">
                                    @csrf
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input id="email" name="email" placeholder="email" class="form-control input-md" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input id="password" name="password" placeholder="password" type="password" class="form-control input-md" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-info" type="submit" id="btn-login">Masuk Sekarang</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="form-registration form-default">
                            <div class="col-md-6 borer">
                                <h3 class="text-center mb30">Gunakan Social Media</h3>
                                <div>
                                    <form>
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="login-socialmedia register-socialmedia">
                                                    <a href="{{ url('auth/facebook') }}" class="login-facebook"><span class="ic ic-facebook"></span>Masuk via Facebook</a>
                                                    <a href="{{ url('auth/twitter') }}" class="login-twitter"><span class="ic ic-twitter"></span>Masuk via Twitter</a>
                                                    <a href="{{ url('auth/google') }}" class="login-google"><span class="ic ic-google"></span>Masuk via Google</a>
                                                    <!--  <a href="//ibid.astra.co.id/omni/linkedin/linkedin/" class="login-linkedin"><span class="ic ic-linkedin"></span>Daftar via Linkedin</a> -->
                                                </div>
                                                <div class="text-center mt30 login-socialmedia-help">
                                                    <p>belum punya akun? <a href="registration-page.html">Daftar disini</a></p>
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
        </div>
        @else
        <!-- user login -->
        @endguest

        <!-- Dragable Testimonial Section -->
        <script src="{{ asset('frontend/js/jquery-2.2.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/slick.js') }}"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/parallax.js') }}"></script>
        <script src="{{ asset('frontend/js/wow.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.fatNav.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @guest
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        <script>
            $(document).ready(function() {
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

                    $('#frm-login').validate({
                        rules: {
                            email: {
                                required: true
                            },
                            password: {
                                required: true
                            }
                        },
                        submitHandler: function(form) {
                            $.ajax({
                                type: 'POST',
                                url: '{{ url("login")}}',
                                dataType: "json",
                                data: $('#frm-login').serialize(),
                                beforeSend: function (r) {
                                },
                                success: function(r) {
                                    if(r.status == 1) {
                                        toastr.success('Success login', 'Success', {timeOut: 2000})
                                        setTimeout(function() {
                                            window.location.href = '{{ url("profile") }}';  
                                        }, 2500);
                                    } else {
                                        toastr.error('Your email or password wrong', 'Error', {timeOut: 2000});                        
                                    }
                                },
                                error: function(r) {}
                            });
                        }
                    });
                });
            });
        </script>
        @endguest

        @yield('script')
    
    </body>
</html>