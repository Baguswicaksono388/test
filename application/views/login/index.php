<div class="container">
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" name="email" placeholder="Enter email">
					<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="row">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-block btn-primary">Login</button>
					</div>
				</div>
			</form>
			<br>
			<div class="row">
				<div class="col-sm-12">
					<p class="card-text">Tidak mempunyai akun ? <a href="<?= base_url('login/registration') ?>">Registrasi</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
