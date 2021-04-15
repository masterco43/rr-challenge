@extends('layouts.basicLayout')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feedback.css') }}" >
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="" style="font-weight: bold; margin-bottom: 0;">Feedback</h1>
                <span class="text-muted greyout" style="margin-top: 0;">Get in touch</span>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card ">
                    <div class="card-body">
                        <div class="row" style="padding-left: 3%;">
                            <img src="{{ URL::asset('/images/rr-logo.svg') }}" alt="rr-logo" height="35%" width="35%">
                            <img src="{{ URL::asset('/images/help-icon.png') }}" class="justify-content-right greyout" 
                                style="margin-right:3%; margin-left: auto;" alt="help-icon" height="20px" width="20px"
                                title="A quick way to send a comment or a question to a developer"
                                >
                        </div>
                        <div class="row" style="padding-left: 3%;">
                            <span class="required" style="font-weight: bold;">Work Remotely. Better.</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nameInput" style="font-weight: bold;">Name <span class="required" style="">*</span></label>
                            <input type="email" class="form-control" id="nameInput" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="emailInput" style="font-weight: bold;">E-mail Address <span class="required" style="">*</span></label>
                            <input type="text" class="form-control" id="emailInput" name="email" placeholder="Enter E-mail">
                        </div>
                        <div class="form-group">
                            <label for="commentInput" style="font-weight: bold;">Questions / Comments <span class="required" style="">*</span></label>
                            <textarea class="form-control" id="commentInput" name="comments" placeholder="Enter Questions/Comments" rows="4" onkeyup="changeCounter()" maxlength="200"></textarea>
                            <small id="counter" class="form-text text-right" style="color: #6c757d"><span id="count-input">0</span>/200</small>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center" style="padding-bottom: 10px;">
                                <button type="submit" class="btn btn-secondary btn-lg borderless" style="background-color: #ea5d24 !important;">Submit</button>
                            </div>
                            <div class="col-md-6 text-center">
                                <button type="button" class="btn btn-outline-secondary btn-lg borderless"><u>Reset</u></button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <script>
        function changeCounter(){
            console.log($('#commentInput').val().length);
            count = $('#commentInput').val().length;
            $('#count-input').html(count);
            if(count > 199)
                $('#counter').css('color','red');
            else
                $('#counter').css('color','#6c757d');
        }
    </script>
@endsection