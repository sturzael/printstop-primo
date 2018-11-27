@extends('layouts.authLayout')

@section('content')
 <p>{{ __('Reset Password') }}</p>
	<form method="POST" action="{{ route('password.email') }}">
		@csrf
		
    <div class="form-group form-group-default">
			<label for="email">{{ __('E-Mail Address') }}</label>
       <div class="controls">
         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="email@domain.com">
          @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
      </div>
    </div>

    <button type="submit" class="btn btn-block login-button">
    	<span class="signin">   {{ __('Send Password Reset Link') }}</span>
    </button>             							
	</form>
	
<div style="clear:both"></div>
@endsection
