@extends('admin.layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Account</h3>
		</div>
		<div class="panel-body">
			@if (Session::has('alert_success'))
				<div class="alert alert-success" role="alert">{{ Session::get('alert_success') }}</div>
				{{ Session::forget('alert_success') }}
			@endif
			<form class="form-horizontal" method="POST" action="">
				{{ csrf_field() }}
				<div class="form-group @if ($errors->has('first_name')) has-error @endif" >
					<label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
					<div class="col-sm-10">
					<input value="{{ old('first_name', Auth::user()->first_name) }}" type="text" class="form-control" id="inputFirstName"  name="first_name" placeholder="First Name" aria-describedby="helpBlock1">
					@if ($errors->has('first_name'))
				 		<span id="helpBlock1" class="help-block">{{ $errors->first('first_name') }}</span>
					@endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('last_name')) has-error @endif"">
					<label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
					<div class="col-sm-10">
						<input value="{{ old('last_name', Auth::user()->last_name) }}" type="text" class="form-control" id="inputLastName"  name="last_name" placeholder="Last Name" aria-describedby="helpBlock2">
					@if ($errors->has('last_name'))
				 		<span id="helpBlock2" class="help-block">{{ $errors->first('last_name') }}</span>
					@endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('email')) has-error @endif"">
					<label for="inputEmail" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input value="{{ old('email', Auth::user()->email) }}" type="email" class="form-control" id="inputEmail"  name="email" placeholder="Email" aria-describedby="helpBlock3">
						@if ($errors->has('email'))
					 		<span id="helpBlock3" class="help-block">{{ $errors->first('email') }}</span>
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