@extends('layouts.auth')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="card mx-4">
			<div class="card-body p-4">
				<h1>Register</h1>
				<p class="text-muted">Create your account</p>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<svg class="c-icon">
								<use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
							</svg>
						</span>
					</div>
					<input class="form-control" type="text" placeholder="Username">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<svg class="c-icon">
								<use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
							</svg>
						</span>
					</div>
					<input class="form-control" type="text" placeholder="Email">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<svg class="c-icon">
								<use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
							</svg>
						</span>
					</div>
					<input class="form-control" type="password" placeholder="Password">
				</div>
				<div class="input-group mb-4">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<svg class="c-icon">
								<use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
							</svg>
						</span>
					</div>
					<input class="form-control" type="password" placeholder="Repeat password">
				</div>
				<button class="btn btn-block btn-success" type="button">Create Account</button>
			</div>
		</div>
	</div>
</div>
@endsection
