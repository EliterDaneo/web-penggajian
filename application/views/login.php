<!-- bg-gradient-primary -->
<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-6 col-lg-6 col-md-7">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-12">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">SISFO PENGGAJIAN</h1>
									<h4 class="h4 text-gray-900 mb-4">SMK MUTU WONOSOBO</h4>
								</div>
								<?php if ($this->session->flashdata('error')): ?>
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<?php echo $this->session->flashdata('error'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								<?php endif; ?>
								<?php if ($this->session->flashdata('success')): ?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										<?php echo $this->session->flashdata('success'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								<?php endif; ?>
								<form class="user" method="POST" action="<?= base_url('welcome') ?>">
									<div class="form-group">
										<input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
											aria-describedby="emailHelp" placeholder="Enter Email Address...">
										<?= form_error('email', '<div class="text-small text-danger"></div>') ?>
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control form-control-user"
											id="exampleInputPassword" placeholder="Password">
										<?= form_error('password', '<div class="text-small text-danger"></div>') ?>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
									<hr>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>