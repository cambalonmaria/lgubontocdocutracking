@extends('layouts.auth')

@section('content')
<div class="card col-sm-12">
    <form method="post" id="form-register">
  
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>
       
        <div class="form-group form-floating mb-3">
            <label for="floatingEmail">Department</label>
            <select name="department" id="" class="form-control mb-3">
                <option value="OFFICE OF THE MUNICIPAL MAYOR">OFFICE OF THE MUNICIPAL MAYOR</option>
                <option value="OFFICE OF THE SANGGUNIANG BAYAN">OFFICE OF THE SANGGUNIANG BAYAN</option>
                <option value="MUNICIPAL PLANNING AND DEVELOPMENT OFFICE">MUNICIPAL PLANNING AND DEVELOPMENT OFFICE</option>
                <option value="MUNICIPAL ENGINEERING OFFICE">MUNICIPAL ENGINEERING OFFICE</option>
                <option value="BIDS AWARDS COMMITTE">BIDS AWARDS COMMITTE</option>
                <option value="MMUNICIPAL ACCOUNTING OFFICE">MUNICIPAL ACCOUNTING OFFICE</option>
                <option value="HUMAN RESOURCE MANAGEMENT OFFICE">HUMAN RESOURCE MANAGEMENT OFFICE</option>
                <option value="MMUNICIPAL BUDGET OFFICE">MUNICIPAL BUDGET OFFICE</option>
                <option value="MUNICIPAL AGRICULTURE & SERVICES OFFICE">MUNICIPAL AGRICULTURE & SERVICES OFFICE</option>
                <option value="MUNICIPAL SOCIAL WELFARE OFFICE">MUNICIPAL SOCIAL WELFARE OFFICE</option>
                <option value="MUNICIPAL TREASURER'S OFFICE">MUNICIPAL TREASURER'S OFFICE</option>
                <option value="MUNICIPAL ASSESSOR'S OFFICE">MUNICIPAL ASSESSOR'S OFFICE</option>
                <option value="MUNICIPAL CIVIL REGISTRAR'S OFFICE">MUNICIPAL CIVIL REGISTRAR'S OFFICE</option>
                <option value="MMUNICIPAL HEALTH OFFICE">MUNICIPAL HEALTH OFFICE</option>
                <option value="GENERAL SERVICES OFFICE">GENERAL SERVICES OFFICE</option>
                <option value="MUNICIPAL TOURISM OFFICE">MUNICIPAL TOURISM OFFICE</option>
                <option value="MUNICIPAL DISASTER RISK REDUCTION MANAGEMENT OFFICE">MUNICIPAL DISASTER RISK REDUCTION MANAGEMENT OFFICE</option>
                <option value="SENIOR CITIZEN OFFICE">SENIOR CITIZEN OFFICE</option>
            </select>
        </div>
        

        <div class="form-group form-floating mb-3">
            <label for="floatingEmail">Position</label>
            <input type="text" class="form-control" name="position" placeholder="Enter position" required="required" autofocus>
        </div>

        <div class="form-group form-floating mb-3">
             <label for="floatingEmail">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
             <label for="floatingName">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('username') }}" placeholder="Name" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <label for="floatingPassword">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingConfirmPassword">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="confirm-password"  placeholder="Confirm Password" required="required">
            <span style="color:tomato; display:none" id="error-pass">Password does not match</span>
        </div>
        <span id="response"></span>

        <button class="w-100 btn btn-lg btn-primary" type="button" id="btn-register">Register</button>
        
        @include('auth.partials.copy')

    </form>
</div>
<script src="{{ asset('asset/jquery/jquery.min.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

   $('#btn-register').click(function (e) { 
    e.preventDefault();

    let confirm_pass = $('#confirm-password').val();
    let password = $('#password').val();

    if(confirm_pass != password){
        return $('#error-pass').css('display', 'block');
    }else{
        $('#error-pass').css('display', 'none');
    }

    if($('#form-register input').val() == ""){
        return $('#reponse').text('Missing Fields');
    }

    $.ajax({
        type: "POST",
        url: '/registerUser',
        data: $("#form-register").serialize(),
        dataType: "json",
        success: function (response) {
            if(response.status_code == 1){
                $('#response').text('Success');
                $('#response').css('color', 'light-green');
                location.href = "/login";
            }
            else{
                $('#response').text('Error, There was an error during the process');
                $('#response').css('color', 'tomato');
            }
        }
    });
    
   });
</script>
@endsection
