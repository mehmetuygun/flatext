@extends('admin.layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Hotel Detail</h3>
		</div>
		<div class="panel-body">
			@if (Session::has('alert_success'))
				<div class="alert alert-success" role="alert">{{ Session::get('alert_success') }}</div>
				{{ Session::forget('alert_success') }}
			@endif
			<form class="form-horizontal" method="POST" action="">
				{{ csrf_field() }}
				<div class="form-group @if ($errors->has('name')) has-error @endif" >
					<label for="inputName" class="col-sm-3 control-label">Hotel Name</label>
					<div class="col-sm-9">
					<input value="{{ old('name', App\User::find(Auth::user()->id)->hotel->name) }}" type="text" class="form-control" id="inputName"  name="name" placeholder="Hotel Name" aria-describedby="helpBlock1">
					@if ($errors->has('name'))
				 		<span id="helpBlock1" class="help-block">{{ $errors->first('name') }}</span>
					@endif
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection