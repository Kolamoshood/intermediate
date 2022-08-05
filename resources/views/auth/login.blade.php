@extends('layouts.app')

@section('content')

        <div class="page-title-area bg-25">
			<div class="container">
				<div class="page-title-content">
					<h2>Log in</h2>

					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">Log in</li>
					</ul>
				</div>
			</div>
		</div>
        
		<section class="user-area ptb-100">
			<div class="container">
			<div class="user-form-content max-width-600">
				<form class="user-form" method="POST" action="{{ route('login')}}">
					<h3>Log in to your account</h3>

					<div class="row">
						<div class="col-12">
							<div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="col-12">
							<div class="login-action">
								<span class="log-rem">
									<input id="remember-2" class="form-check-input" type="checkbox" name="remember"{{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
								</span>
								
								<span class="forgot-login">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
								</span>
							</div>
						</div>

						<div class="col-12">
							<button class="default-btn" type="submit">
                                {{ __('Login') }}
							</button>
						</div>

						<div class="col-12">
							<p class="create">Don’t have an account? <a href="{{ route('register')}}">create</a></p>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- End User Area -->

		<!-- Start Footer Area -->
	


@endsection
