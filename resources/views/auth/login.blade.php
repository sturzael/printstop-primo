@extends('layouts.authLayout')

@section('content')
                <p>{{ __('voyager::login.signin_below') }}</p>

                <form action="{{ route('login') }}" method="POST">
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

                    <button type="submit" class="btn btn-block login-button" >
                        <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
                        <span class="signin">{{ __('voyager::generic.login') }}</span>
                    </button>
              </form>
              <button class="btn btn-block login-button" style="float:right; margin-left:20px;" onClick="window.location='/password/reset'">
                        <span class="signin"><a style="color:white;" href="/password/reset">
                          {{ __('Forgot Your Password?') }}</a></span>
                    </button>
                    <button class="btn btn-block login-button" style="float:right;" onClick="window.location='/register'">
                        <span><a style="color:white;" href="/register">
                        Register</a></span>
                    </button>

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
