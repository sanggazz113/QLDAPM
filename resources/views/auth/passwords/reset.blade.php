@extends('layouts.admin')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Khôi phục mật khẩu</div>
				<div class="card-body">
					<form method="post" action="{{ route('password.update') }}">
						@csrf
						<input type="hidden" name="token" value="{{ $token }}" />
						<div class="mb-3">
							<label class="form-label" for="email">Địa chỉ Email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $email ?? old('email') }}" required />
							@error('email')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="mb-3">
							<label class="form-label" for="password">Mật khẩu mới</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required />
							@error('password')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="mb-3">
							<label class="form-label" for="password-confirm">Xác nhận mật khẩu mới</label>
							<input type="password" class="form-control" id="password-confirm" name="password_confirmation" required />
							@error('password_confirmation')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="mb-0">
							<button type="submit" class="btn btn-primary"><i class="fal fa-exchange-alt"></i> Đổi mật khẩu</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection