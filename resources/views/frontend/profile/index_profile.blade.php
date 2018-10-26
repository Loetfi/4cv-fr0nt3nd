@extends('layouts.frontend')

@section('title', 'ACV Profile')

@section('content')
<section class="account-management">
    <div class="am-header">
        <div class="container">
            <div class="col-md-3">
                <span class="avatar"><img src="img/avatar.png" class="img-responsive"></span>
            </div>
            <div class="col-md-9 prof-info">
                <h3>Jhon Doe Nabumi</h3>
                <h5>Karyawan Swasta</h5>
                <div>
                    <p>jhone.doe@gmail.com</p>
                    <p>081908695233</p>
                    <p>Jl.Raya kebon kosong Rt 04/018</p>
                    <p>Bekasi, jawa barat</p>
                </div>
            </div>
        </div>
    </div>
    <div class="am-body">
        <div class="container">
            <div class="col-md-3 ">
                <div class="nav-side-menu box-shadow bg-white">
                    <div class="brand"></div>
                    <i class="fa fa-arrow-down toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                    <div class="menu-list">
                        <ul id="menu-content" class="menu-content collapse out">
                            <li class="ic-bell">
                                <a  href="am-notification.html" >Notification Alert</a>
                            </li>
                            <li class="ic-history active">
                                <a href="am-history.html">Inspection History</a>
                            </li>
                            <li class="ic-mail">
                                <a href="#">Mail Box</a>
                            </li>
                            <li class="ic-profile">
                                <a href="#">Profile Setting</a>
                            </li>
                        </ul>
                        <div class="cta-profile">
                            <a href="#">order inspection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="detail-tabing box-shadow bg-white">
                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">
                                    Booking</a>
                                </li>
                                <li>
                                    <a href="#tab_default_2" data-toggle="tab">
                                    History</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_default_1">
                                    <div class="col-md-12 timeline-header">
                                        <h4>car inspection</h4>
                                        <h5>B 1234 NBO | Avanza</h5>
                                        <ul class="timeline">
                                            <li>
                                                <time>17 Januari 2018</time>
                                                <span>Report delivered</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                                            </li>
                                            <li>
                                                <time>13 Januari 2018</time>
                                                <span>inspection Done</span>
                                                <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                                            </li>
                                            <li>
                                                <time>11 Januari 2018</time>
                                                <span>booking order</span>
                                                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 timeline-header">
                                        <h4>car inspection</h4>
                                        <h5>B 1234 NBO | Avanza</h5>
                                        <ul class="timeline">
                                            <li>
                                                <time>17 Januari 2018</time>
                                                <span>Report delivered</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                                            </li>
                                            <li>
                                                <time>13 Januari 2018</time>
                                                <span>inspection Done</span>
                                                <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                                            </li>
                                            <li>
                                                <time>11 Januari 2018</time>
                                                <span>booking order</span>
                                                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane tab-history" id="tab_default_2">
                                    <!-- History 1 -->
                                    <div class="row list-history">
                                        <div class="col-md-4">
                                            <img src="img/thumb.jpg" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                            <h2><span>premium car</span></h2>
                                            <div class="col-md-6 no-gutter">
                                                <h3>Detail Kendaraan</h3>
                                                <ul>
                                                    <li>Merek <span>Toyota</span></li>
                                                    <li>Tipe <span>Avanza</span></li>
                                                    <li>Tahun <span>2011  </span></li>
                                                    <li>Nopol <span>B 1234 NMK</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 no-gutter">
                                                <h3>Lokasi Inspeksi</h3>
                                                <ul>
                                                    <li>
                                                        <p>JL. Letnan Jenderal T.B. Simatupang, Rt 03/015 No. 25, Cilandak,  kel.Petamburan Kel. Jatimarga Jakarta 12430</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span><a href="#">download report</a></span>
                                    </div>
                                    <!-- History 2 -->
                                    <div class="row list-history">
                                        <div class="col-md-4">
                                            <img src="img/thumb.jpg" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                            <h2><span>luxury car</span></h2>
                                            <div class="col-md-6 no-gutter">
                                                <h3>Detail Kendaraan</h3>
                                                <ul>
                                                    <li>Merek <span>Toyota</span></li>
                                                    <li>Tipe <span>Avanza</span></li>
                                                    <li>Tahun <span>2011  </span></li>
                                                    <li>Nopol <span>B 1234 NMK</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 no-gutter">
                                                <h3>Lokasi Inspeksi</h3>
                                                <ul>
                                                    <li>
                                                        <p>l. Jend Ahmad Yani Kav.51 (samping SPBU Shell), Cempaka Putih. Jakarta Pusat 14240</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="#">download report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TAB END -->
                </div>
            </div>
        </div>
        <div></div>
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