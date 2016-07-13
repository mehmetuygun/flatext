@extends('admin.layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Change Password</h3>
		</div>
		<div class="panel-body">
			@if (Session::has('alert_success'))
				<div class="alert alert-success" role="alert">{{ Session::get('alert_success') }}</div>
			@endif
			<form class="form-horizontal" method="POST" action="">
				{{ csrf_field() }}
				<div class="form-group @if ($errors->has('current_password')) has-error @endif" >
					<label for="inputCurrentPassword" class="col-sm-3 control-label">Current Password</label>
					<div class="col-sm-9">
					<input value="{{ old('first_name') }}" type="password" class="form-control" id="inputCurrentPassword"  name="current_password" placeholder="Current Password" aria-describedby="helpBlock1">
					@if ($errors->has('current_password'))
				 		<span id="helpBlock1" class="help-block">{{ $errors->first('current_password') }}</span>
					@endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('password')) has-error @endif"">
					<label for="inputPassword" class="col-sm-3 control-label">Password</label>
					<div class="col-sm-9">
						<input value="{{ old('password') }}" type="password" class="form-control" id="inputPassword"  name="password" placeholder="Password" aria-describedby="helpBlock2">
					@if ($errors->has('password'))
				 		<span id="helpBlock2" class="help-block">{{ $errors->first('password') }}</span>
					@endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('password_confirmation')) has-error @endif"">
					<label for="inputConfirmPassword" class="col-sm-3 control-label">Password Confirmation</label>
					<div class="col-sm-9">
						<input value="{{ old('password_confirmation') }}" type="password" class="form-control" id="inputConfirmPassword"  name="password_confirmation" placeholder="Password Confirmation" aria-describedby="helpBlock3">
						@if ($errors->has('password_confirmation'))
					 		<span id="helpBlock3" class="help-block">{{ $errors->first('password_confirmation') }}</span>
						@endif
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection