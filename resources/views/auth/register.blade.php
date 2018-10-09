@extends('layouts.authLayout')

@section('content')
                <p>{{ __('Register') }}</p>

                <form action="{{ route('register') }}" method="POST">
                        @csrf
                    <div class="form-group form-group-default">
                        <label for="name" >{{ __('Name') }}</label>
                        <div class="controls">
                            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required >
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                         </div>
                    </div>

                    <div class="form-group form-group-default">
                        <label>{{ __('E-Mail Address') }}</label>
                        <div class="controls">
                            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required >
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                         </div>
                    </div>

                    <div class="form-group form-group-default">
                        <label>{{ __('Customer Code') }}</label>
                        <div class="controls">
                            <input type="text" name="code" id="code" value="{{ old('code') }}" placeholder="123456" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" required >
                            @if ($errors->has('code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('code') }}</strong>
                                </span>
                            @endif
                         </div>
                    </div>


                    <div class="form-group form-group-default">
                        <label>{{ __('Password') }}</label>
                        <div class="controls">
                            <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required >
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                         </div>
                    </div>

                    <div class="form-group form-group-default">
                        <label>{{ __('Confirm Password') }}</label>
                        <div class="controls">
                            <input type="password" name="password_confirmation" id="password-confirm" required class="form-control">

                         </div>
                    </div>



                    <button type="submit" class="btn btn-block login-button">
                        <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
                        <span class="signin">{{ __('Register') }}</span>
                    </button>

              </form>

              <div style="clear:both"></div>

              <!-- @if(!$errors->isEmpty())
              <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
              </div>
              @endif -->
@endsection
