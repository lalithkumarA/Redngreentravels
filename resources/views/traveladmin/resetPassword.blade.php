@extends('traveladmin.travellayout.master')

@section('app-title')
Reset Password
@endsection

@section('breadcrumb-item')
Reset Password
@endsection

@section('content')

<center><div class="middle">
	<form action="{{ url('/resetPassword') }}" method="post">
		{{ csrf_field() }}
	<div class="tile-reset">
		<div class="embed-responsive">
			<div class="form-group">
				<label class="control-label-reset" style="padding-right: 5px;">Enter Current Password</label>
				<input class="form-control-reset" name="oldPassword" type="password"  required="">
				<br>
			</div>
			<div class="form-group">
				<label class="control-label-reset" style="padding-right: 23px;">Enter New Password&nbsp</label>
				<input class="form-control-reset" name="password" type="password" required=""><br>
			</div>
			<div class="form-group">
				<label class="control-label-reset" style="padding-right: 5px;">Re-enter New Password</label>
				<input class="form-control-reset" name="password_confirmation" type="password" required=""><br>
			</div>
		</div>
		<div class="embed-responsive">
			<div class="form-group btn-container">
				<button class="btn1 btn-primary btn-reset">Reset</button>
			</div>
		</div>
	</div>
	</form>
</div></center>
@endsection