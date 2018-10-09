@extends('layouts.authLayout')

@section('content')
                <p>{{ __('voyager::login.signin_below') }}</p>

                <form action="/auth/login" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default" id="emailGroup">
                        <label>{{ __('voyager::generic.email') }}</label>
                        <div class="controls">
                            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
                         </div>
                    </div>

                    <div class="form-group form-group-default" id="passwordGroup">
                        <label>{{ __('voyager::generic.password') }}</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-block login-button">
                        <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
                        <span class="signin">{{ __('voyager::generic.login') }}</span>
                    </button>

                    <button class="btn btn-block login-button" style="float:right;">
                        <span class="signin"><a style="color:white;">
                          {{ __('Forgot Your Password?') }}</a></span>
                    </button>

              </form>

              <div style="clear:both"></div>

              @if(!$errors->isEmpty())
              <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
              </div>
              @endif
@endsection
