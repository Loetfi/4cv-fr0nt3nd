@extends('layouts.frontend')

@section('title','ACV Page Send Link Email')

@section('content')
<section class="parallax-services" data-parallax="scroll" data-image-src="{{ asset('frontend/img/registration-bg.jpg')}}">
    <span class="overlay-medium-light zindex-lower"></span>  
</section>
<section>
    <div class="container">
        <div class="col-md-12 contactus-section ztop">
            <div class="box-shadow bg-white bg-pattern-city section-registration">
                <h3 class="text-center">Resend Email Link Active Account</h3>
                <h5>Lorem ipsum dolor</h5>
                <!-- <p>Send us your enquiry and our friendly staff will get back to you within 24 hours</p> -->
                <div class="form-registration form-default col-md-12 col-xs-12">
                    <div>
                        <form id="frm-resendlink">
                        	@csrf
                            <fieldset>
                            	<input type="hidden" name="hash" value="{{ $hash }}">
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <input id="email" name="email" placeholder="Email" class="form-control input-md" type="text">
                                    </div>
                                </div>
                                <div class="form-group text-center col-md-8">
                                    <button type="submit" class="btn btn-info" id="btn-kirim"><i class="fa fa-paper-plane"></i> Kirim</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<!-- splash screen while page loading -->
<script>
    $(window).load(function() {
      $(".preloader").delay(100).fadeOut("slow");
    });

    $(document).ready(function() {
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

	        $('#frm-resendlink').validate({
	            rules: {
	                email: {
	                    required: true,
	                    email: true
	                }
	            },
	            submitHandler: function(form) {
	                $.ajax({
	                    type: 'POST',
	                    url: '{{ url("register/send-link")}}',
	                    dataType: "json",
	                    data: $('#frm-resendlink').serialize(),
	                    beforeSend: function (r) {
	                    },
	                    success: function(r) {
	                        console.log(r);
	                        if(r.status == 1) {
	                            // toastr.success(r.message,'Success Register', {timeOut: 3000});

	                            // setTimeout(function() {
	                                window.location.href = '{{ url("/") }}';  
	                            // }, 4000);
	                        } else {
	                            toastr.error(r.message,'Error', {timeOut: 3000});
	                        }
	                    },
	                    error: function(r) {
	                        toastr.error('Terjadi kesalahan sistem, cobalah beberapa saat lagi','Error', {timeOut: 3000});
	                    }
	                });
	            }
	        });
	    });
    });
</script>
@endsection