@extends('layouts.admin')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Đăng nhập</div>
				<div class="card-body">
					<form method="post" action="{{ route('login') }}">
						@csrf
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required />
							@error('email')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						
						<div class="mb-3">
							<label for="password" class="form-label">Mật khẩu</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required />
							@error('password')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						
						<div class="mb-3 form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
							<label class="form-check-label" for="remember">Duy trì đăng nhập</label>
						</div>
						
						<div class="mb-0">
							<button type="submit" class="btn btn-info"><i class="fal fa-sign-in-alt"></i> Đăng nhập</button>
							@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">Quên mật khẩu?</a>
							@endif
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection