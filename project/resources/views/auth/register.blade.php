@extends('layouts.auth')

@section('content')
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                        </li>
                    </ul>
                </div>
<form method="POST" action="{{route('register')}}">
                <div class="tab-content" id="main_form">
				
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h4 class="text-center">Step 1</h4>
                        <div class="row">

                                @csrf
                                {{-- role --}}
                                <div class="form-group">
                                    <select class="form-select" id="role" name="role" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="user">Jobseeker</option>
                                        <option value="author">Recruiter</option>
                                    </select>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">



                                        {{-- first_name --}}
                                        <div class="form-group">
                                            <input id="first_name" name="first_name" type="text" class="form-control  @error('first_name') is-invalid @enderror" placeholder="First Name *" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus />
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        {{-- password --}}
                                        <div class="form-group">
                                            <input id="password" name="password" type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password *" value="{{ old('password') }}" required autocomplete="password" autofocus />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password *" name="password_confirmation" value="{{ old('password_confirmation') }}" required />
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-md-6">

                                        {{-- last_name --}}
                                        <div class="form-group">
                                            <input id="last_name" name="last_name" type="text" class="form-control  @error('last_name') is-invalid @enderror" placeholder="Last Name *" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus />
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        {{-- email --}}
                                        <div class="form-group">
                                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email *" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        {{-- phone_number --}}
                                        <div class="form-group">
                                            <input id="phone_number" name="phone_number" type="text" minlength="10" maxlength="10" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Your Phone *" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus />
                                            @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        



                                    </div>
                                </div>
                            


                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h4 class="text-center">Step 2</h4>
                        <div class="row">
                            <div class="col-md-6" id="birthday">
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required >
                                </div>
                            </div>
                            <div class="col-md-6" id="nationalty">
                                <div class="form-group">
                                    <label>nationality</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" id="urlln">
                                <div class="form-group">
                                    <label>LinkedIn URL</label>
                                    <input class="form-control" type="text" name="name" placeholder="www.linkedinexemple.com">
                                </div>
                            </div>
                            <div class="col-md-6" id="town">
                                <div class="form-group">
                                    <label>Town of residence *</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" id="gender">
                                <label>gender</label>
                                <select class="form-select" name="role" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="user">male</option>
                                    <option value="author">female</option>
                                </select>
                            </div>
                            <div class="col-md-6" id="Civility">
                                <label>Civility</label>

                                <select class="form-select" name="role" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="user">mr</option>
                                    <option value="author">mrs</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6" id="Company_Name">
                                <div class="form-group">
                                    <label>Company name</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6" id="line">
                                <div class="form-group">
                                    <label>Line of business</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                             
                        </div>

                        <div class="row">
                            <div class="col-md-6" id="regcommercial">
                                <div class="form-group">
                                    <label>Commercial Register</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                           <!-- <div class="col-md-6" id="workforce">
                                <div class="form-group">
                                    <label>Workforce number</label>
                                    <select name="workforce_number" class="form-control" required>
                                        <option></option>
                                        <option>from 1 to 49</option>
                                        <option>from 50 to 149 </option>
                                        <option>from 150 to 249</option>
                                        <option>from 250 to 499</option>
                                        <option>from 500 to 749</option>
                                        <option>from 750 to 999 </option>
                                        <option>more than 1000 </option>
                                    </select>
                                </div>
                            </div>-->
                        </div>

                        <div class="row">
                            <div class="col-md-6" id="city">
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6" id="phone">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                        </div>


                        <ul class="list-inline pull-right">
                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                            <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                            <li><button type="button" class="default-btn next-step">Continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h4 class="text-center">Step 3</h4>
                        <div class="row">
                            <div class="col-md-6" id="level">
                                <div class="form-group">
                                    <label>Level of education</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6" id="school">
                                <div class="form-group">
                                    <label>School</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6" id="location">
                                <div class="form-group">
                                    <label>School location</label>
                                    <input class="form-control" type="text" name="name" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6" id="from">
                                <div class="form-group">
                                    <label>From </label>
                                    <input type="date" class="form-control @error('from') is-invalid @enderror" name="from"  required >
                                </div>
                            </div>
                            <div class="col-md-6" id="to">
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="date" class="form-control @error('to') is-invalid @enderror" name="to"  required >                                </div>
                            </div>
                            <div class="form-group" id="resume">
                                <label>Resume</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Select file</label>
                                </div>
                            </div>
                        </div>
						
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                            <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                            <li><button type="button" class="default-btn next-step">Continue</button></li>
							<input type="submit" class="btnRegister" value="register" />
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <h4 class="text-center"></h4>
                        <div class="all-info-container">
                            <p class="font-weight-normal" id="message">Thank you for registering with RECRUITMENT.
                                A confirmation email will be sent to you as soon as possible.
                            </p>

                           
                        </div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                            <li><button type="button" class="default-btn next-step">Finish</button></li>
                        </ul>
                    </div>
                    
					<div class="clearfix"></div>
                </div>
</form>
            </div>
        </div>
    </div>

</div>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src="./script.js"></script>

<script type="text/javascript">
    $("#role").change(function() {
        role = $("#role").find(':selected').val();
        if (role == "user") {
            $('#birthday').show();
            $('#nationalty').show();
            $('#urlln').show();
            $('#town').show();
            $('#gender').show();
            $('#Civility').show();
            $('#level').show();
            $('#field').show();
            $('#school').show();
            $('#location').show();
            $('#from').show();
            $('#to').show();
            $('#resume').show();
            $('#Company_Name').hide();
            $('#line').hide();
            $('#regcommercial').hide();
            $('#workforce').hide();
            $('#city').hide();
            $('#phone').hide();
            $('#message').hide();

        } else {
            $('#birthday').hide();
            $('#nationalty').hide();
            $('#urlln').hide();
            $('#town').hide();
            $('#gender').hide();
            $('#Civility').hide();
            $('#level').hide();
            $('#field').hide();
            $('#school').hide();
            $('#location').hide();
            $('#from').hide();
            $('#to').hide();
            $('#resume').hide();
            $('#Company_Name').show();
            $('#line').show();
            $('#regcommercial').show();
            $('#workforce').show();
            $('#city').show();
            $('#phone').show();
            $('#message').show();
        }
    });



    $('.selectItem').on('click', function() {
        alert("hi")
        $("#role").val($(this).attr("id"));
    });


    // ------------step-wizard-------------
    $(document).ready(function() {
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);

        });
        $(".prev-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });
</script>
@endsection

@push('css')
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    body {
        font-family: 'Roboto', sans-serif;
    }

    * {
        margin: 0;
        padding: 0;
    }

    i {
        margin-right: 10px;
    }

    /*------------------------*/
    input:focus,
    button:focus,
    .form-control:focus {
        outline: none;
        box-shadow: none;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #fff;
    }

    /*----------step-wizard------------*/
    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    .align-items-center {
        align-items: center;
    }

    /*---------signup-step-------------*/
    .bg-color {
        background-color: #333;
    }

    .signup-step-container {
        padding: 150px 0px;
        padding-bottom: 60px;
    }




    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard>div.wizard-inner {
        position: relative;
        margin-bottom: 50px;
        text-align: center;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 75%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 15px;
        z-index: 1;
    }

    .wizard .nav-tabs>li.active>a,
    .wizard .nav-tabs>li.active>a:hover,
    .wizard .nav-tabs>li.active>a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        border-radius: 50%;
        background: #fff;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 16px;
        color: #0e214b;
        font-weight: 500;
        border: 1px solid #ddd;
    }

    span.round-tab i {
        color: #555555;
    }

    .wizard li.active span.round-tab {
        background: #0db02b;
        color: #fff;
        border-color: #0db02b;
    }

    .wizard li.active span.round-tab i {
        color: #5bc0de;
    }

    .wizard .nav-tabs>li.active>a i {
        color: #0db02b;
    }

    .wizard .nav-tabs>li {
        width: 25%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: red;
        transition: 0.1s ease-in-out;
    }



    .wizard .nav-tabs>li a {
        width: 30px;
        height: 30px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
        background-color: transparent;
        position: relative;
        top: 0;
    }

    .wizard .nav-tabs>li a i {
        position: absolute;
        top: -15px;
        font-style: normal;
        font-weight: 400;
        white-space: nowrap;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 12px;
        font-weight: 700;
        color: #000;
    }

    .wizard .nav-tabs>li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 20px;
    }


    .wizard h3 {
        margin-top: 0;
    }

    .prev-step,
    .next-step {
        font-size: 13px;
        padding: 8px 24px;
        border: none;
        border-radius: 4px;
        margin-top: 30px;
    }

    .next-step {
        background-color: #0db02b;
    }

    .skip-btn {
        background-color: #cec12d;
    }

    .step-head {
        font-size: 20px;
        text-align: center;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .term-check {
        font-size: 14px;
        font-weight: 400;
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 40px;
        margin-bottom: 0;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 40px;
        margin: 0;
        opacity: 0;
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: 40px;
        padding: .375rem .75rem;
        font-weight: 400;
        line-height: 2;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: 38px;
        padding: .375rem .75rem;
        line-height: 2;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 .25rem .25rem 0;
    }

    .footer-link {
        margin-top: 30px;
    }

    

    .list-content {
        margin-bottom: 10px;
    }

    .list-content a {
        padding: 10px 15px;
        width: 100%;
        display: inline-block;
        background-color: #f5f5f5;
        position: relative;
        color: #565656;
        font-weight: 400;
        border-radius: 4px;
    }

    .list-content a[aria-expanded="true"] i {
        transform: rotate(180deg);
    }

    .list-content a i {
        text-align: right;
        position: absolute;
        top: 15px;
        right: 10px;
        transition: 0.5s;
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        background-color: #fdfdfd;
    }

    .list-box {
        padding: 10px;
    }

    .signup-logo-header .logo_area {
        width: 200px;
    }

    .signup-logo-header .nav>li {
        padding: 0;
    }

    .signup-logo-header .header-flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .list-inline li {
        display: inline-block;
    }

    .pull-right {
        float: right;
    }

    /*-----------custom-checkbox-----------*/
    /*----------Custom-Checkbox---------*/
    input[type="checkbox"] {
        position: relative;
        display: inline-block;
        margin-right: 5px;
    }

    input[type="checkbox"]::before,
    input[type="checkbox"]::after {
        position: absolute;
        content: "";
        display: inline-block;
    }

    input[type="checkbox"]::before {
        height: 16px;
        width: 16px;
        border: 1px solid #999;
        left: 0px;
        top: 0px;
        background-color: #fff;
        border-radius: 2px;
    }

    input[type="checkbox"]::after {
        height: 5px;
        width: 9px;
        left: 4px;
        top: 4px;
    }

    input[type="checkbox"]:checked::after {
        content: "";
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        transform: rotate(-45deg);
    }

    input[type="checkbox"]:checked::before {
        background-color: #18ba60;
        border-color: #18ba60;
    }






    @media (max-width: 767px) {
        .sign-content h3 {
            font-size: 40px;
        }

        .wizard .nav-tabs>li a i {
            display: none;
        }

        .signup-logo-header .navbar-toggle {
            margin: 0;
            margin-top: 8px;
        }

        .signup-logo-header .logo_area {
            margin-top: 0;
        }

        .signup-logo-header .header-flex {
            display: block;
        }
    }
</style>
@endpush