@extends('admin.main')
@section('title','User Setting')
@section('content')
<h1>User</h1>
<hr>

@if(session('result') == 'success')
<div class="alert alert-success alert-dismissiable fade show">
	<strong>Updated !</strong>Berhasil di Update.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

	<button type="button" class="close" data-dismiss="alert">&times;

=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
	</button>
	</div>
@elseif(session('result') == 'fail')
	<div class="alert alert-danger alert-dismissiable fade show">
	<strong>Failed !</strong>Gagal di Update.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

	<button type="button" class="close" data-dismiss="alert">&times;
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
=======
	<button type="button" class="close" data-dismiss="alert">
		&times;
>>>>>>> vidio eps 10
	</button>
	</div>
	@endif

<div class="row">
	<div class="col-md-6">
		<form method="post" action="{{ route('admin.user.setting') }}">
			<div class="card mb-3">
				<div class="card-header"><h5>Setting</h5></div>
				<div class="card-body">
					{{ csrf_field() }}

					<div class="form-group form-label-group">
						<input type="text" name="name"
						class="form-control {{$errors->has('name')?'is-invalid':''}}"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

						value="{{ old('name',$dt->name) }}" 
						id="iName" placeholder="Name" required>

						
=======
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
>>>>>>> vidio eps 10
=======
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
>>>>>>> vidio eps 10
=======
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
>>>>>>> vidio eps 10
=======
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
>>>>>>> vidio eps 10
=======
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
>>>>>>> vidio eps 10
=======
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
>>>>>>> vidio eps 10
=======
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
>>>>>>> vidio eps 10
=======
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
>>>>>>> vidio eps 10
						<label for="iName">Name</label>
						@if($errors->has('name'))
						<div class="invalid-feedback">{{$errors->first('name')}}</div>
						@endif
					</div>

					<div class="form-group form-label-group">
						<input type="text" name="email"
						class="form-control {{$errors->has('email')?'is-invalid':''}}"
						value="{{ old('email',$dt->email)}}"
						id="iName" placeholder="Name" required>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
						<label for="iEmail">Email</label>
						@if($errors->has('email'))
						<div class="invalid-feedback">{{$errors->first('email')}}</div>
						@endif
					</div>
						

					<div class="form-group form-label-group">
						<input type="password" name="password"
						class="form-control {{$errors->has('password')?'is-invalid':''}}"
						id="iPassword" placeholder="iPassword" required>
						<label for="iPassword">Password</label>
						@if($errors->has('password'))
						<div class="invalid-feedback">{{$errors->first('password')}}</div>
						@endif
						<div class="form-text text-muted">
							<small>Kosongkan Password apabila tidak di ubah</small>

						</div>
						
					</div>

					<div class="form-group form-label-group">
						<input type="password" name="repassword"
						class="form-control {{$errors->has('repassword')?'is-invalid':''}}"
						id="iRePassword" placeholder="Re Password" required>
						<label for="iRePassword">Re Password</label>
						@if($errors->has('repassword'))
						<div class="invalid-feedback">{{$errors->first('repassword')}}</div>
						@endif
		
					</div>
				</div>


			<div class="card-footer">
				<button type="submit" class="btn btn-primary shadow-sm">Update</button>
				
				</div>
				
			</div>
		</form>
	</div>
</div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
@endsection