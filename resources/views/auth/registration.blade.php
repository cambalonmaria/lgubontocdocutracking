@extends('layouts.auth')

@section('content')
<div class="card col-sm-12">
    <form method="post" action="{{ route('registration.perform') }}">
  
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group">
                    <label for="type" class="control-label">Type</label>
                    <select name="type" id="type" class="form-control form-control-sm rounded-0" required>
                    <option value="1" >Administrator</option>
                    <option value="2" >Staff</option>
                    </select>
                </div>

        
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="fullname" value="{{ ('fullname') }}" placeholder="Fullname">
            <label for="floatingName">Fullname</label>
            @if ($errors->has('fullname'))
                <span class="text-danger text-left">{{ $errors->first('fullname') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="position" value="{{ ('position') }}" placeholder="Confirm Password" >
            <label>Position</label>
            @if ($errors->has('position'))
                <span class="text-danger text-left">{{ $errors->first('position') }}</span>
            @endif
        </div>
         <div class="form-group form-floating mb-3">
            <input type="department" class="form-control" name="department" value="{{ ('department') }}" placeholder="Department" >
            <label>Position</label>
            @if ($errors->has('department'))
                <span class="text-danger text-left">{{ $errors->first('department') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        @include('auth.partials.copy')

    </form>
</div>
@endsection