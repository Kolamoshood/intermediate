@extends('layouts.app')

@section('content')

<div class="page-title-area bg-25">
    <div class="container">
        <div class="page-title-content">
            <h2>Register</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>

                <li class="active">Register</li>
            </ul>
        </div>
    </div>
</div>

<section class="user-area ptb-100">
			<div class="container">
			<div class="user-form-content max-width-600">
				<form class="user-form"method="POST" action="{{ route('register')}}">
                        @csrf
					<h3>Create an account</h3>

					<div class="row">
						<div class="col-12">
							<div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
								<input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
                        <div class="col-12">
							<div class="form-group">
                            <label for="password-confirm">{{('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>

						<div class="col-12">
							<div class="login-action">
								<span class="log-rem">
									<input id="remember-2" type="checkbox">
									<label>Show password</label>
								</span>
							</div>
						</div>

						<div class="col-12">
							<button class="default-btn register" type="submit">
                            {{ __('Register') }}
							</button>
						</div>
						
					</div>
				</form>
			</div>
		</section>



@endsection
