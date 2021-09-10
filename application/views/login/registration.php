<div class="container">
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<form method="post" action="/login/registration">
				<div class="msg align-center">
					<h1 class="title text-center">Registration</h1>
				</div><br>
				<?php if ($this->session->flashdata('message')) { ?>
					<div class="">
						<?= $this->session->flashdata('message') ?>
					</div>
				<?php
				} ?>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" name="email" placeholder="Enter email" required>
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Fullname</label>
					<input type="text" class="form-control" name="name" placeholder="Enter email" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" required>
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tanggal Lahir</label>
					<input type="date" class="form-control" name="dob" placeholder="Tanggal Lahir" required>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-block btn-primary">Daftar</button>
					</div>
				</div>
			</form>
			<br>
			<div class="row">
				<div class="col-sm-12">
					<p class="card-text"><a href="<?= base_url('login/index') ?>">Login?</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
