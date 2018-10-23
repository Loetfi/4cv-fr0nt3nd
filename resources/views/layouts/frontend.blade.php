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

        <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/jquery.fatNav.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/slick-theme.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('frontend/css/respond.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        
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
        
        <!-- POPUP REGISTRATION -->
        <!-- line modal -->
        <div class="modal modal-registration fade mt60" id="ModalRegistration" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog w900">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <div class="col-md-6 p-info">
                            <span class="overlay-medium-light">
                                <p>" bergabunglah bersama komunitas otomotif dan percayakan inspeksi kendaraan anda bersama kami "</p>
                            </span>
                        </div>
                        <div class="col-md-6 p25">
                            <h3 class="text-center">Daftar Akun Baru</h3>
                            <form class="form-default">
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
                                            <input id="firstname" name="firstname" placeholder="Ext: 08197689999" class="form-control input-md" type="text"><span>Pastikan nomor yang anda masukan <strong>benar</strong> agar mudah melakukan verifikasi</span>
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
                                    <div class="form-group text-right">
                                        <button class="btn btn-line-info">cancel</button>
                                        <button class="btn btn-green">Daftar</button>   
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- POPUP LOGIN -->
        <!-- line modal -->
        <div class="modal modal-registration fade mt60" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <div class="col-md-12 p25">
                            <h3 class="text-center">Masuk Akun</h3>
                            <form class="form-default">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="firstname" name="firstname" placeholder="Nama Lengkap" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="password" type="password" name="firstname" placeholder="Password" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button class="btn btn-line-info">cancel</button>
                                        <button class="btn btn-green">Daftar</button>   
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dragable Testimonial Section -->
        <script src="{{ asset('frontend/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/parallax.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/js/wow.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.fatNav.js') }}"></script>
        
        @yield('script')
    
    </body>
</html>