<!doctype html>
<html class="no-js h-100" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Admin </title>
	<?php $this->load->view('admin/include/css');?>
</head>

<body class="h-100">
				<?php
         echo '<script src="'.base_url('asset/').'plugins/sweetalert/sweetalert.min.js"></script>';
         if($this->session->flashdata('success'))
         {
            echo '<script>';
            echo 'swal({
                  title: "Done",
                  text: "'.$this->session->flashdata('success').'",              
                  showConfirmButton: true,
                  type: "success"
                  });
                  </script>';
         }         
         if($this->session->flashdata('error'))
         {
            echo '<script>';
            echo 'swal({
                  title: "Failed",
                  text: "'.$this->session->flashdata('error').'",              
                  showConfirmButton: true,
                  type: "error"
                  });
                  </script>';
         }
         ?>
	<div class="color-switcher-toggle animated pulse infinite">
		<i class="material-icons">settings</i>
	</div>
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('admin/include/sidebar');?>
			<main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
				<div class="main-navbar sticky-top bg-white">
					<!-- Main Navbar -->
					<nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
						<form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
							<div class="input-group input-group-seamless ml-3">
								<div class="input-group-prepend">

								</div>
						</form>
						<nav class="nav">
							<a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
								data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
								<i class="material-icons">&#xE5D2;</i>
							</a>
						</nav>
					</nav>
				</div>
				<!-- / .main-navbar -->
				<div class="main-content-container container-fluid px-4">
					<!-- page header -->
					<div class="header">
						<h2>
							<a href="#" data-toggle="modal" data-target="#addBanner" class="btn btn-primary">
								<i class="material-icons">add</i>
								<span>ADD ACCOUNT</span>
							</a>
						</h2>
					</div>
					<!-- Add Banner Modal -->
					<div class="modal fade" id="addBanner">
						<div class="modal-dialog">
							<div class="modal-content">
								<?php echo form_open('banner/adding', array('class' => 'form-horizontal', 'autocomplete' => 'off')); ?>
								<div class="modal-header">
									<h4 class="modal-title">ADD ACCOUNT</h4>
								</div>
								<div class="modal-body">
									<div id="error"></div>
									<div class="row clearfix">
										<form action="<?php echo base_url('admin/prosesregister');?>">
											<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
												<label>Name </label>
											</div>
											<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
												<div class="form-group">
													<div class="form-line">
														<input type="email" class="form-control" id="username" placeholder="Enter Username">
													</div>
												</div>
											</div>
											<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
												<label>Password </label>
											</div>
											<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
												<div class="form-group">
													<div class="form-line">
														<input type="password" class="form-control" id="password" placeholder="Password">
													</div>
												</div>
											</div>
											</div>
										</form>
								</div>
								<div class="modal-footer">
									<?php echo form_submit('submit', 'ADD', array('class' => 'btn btn-success waves-effect')); ?>
									<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CANCEL</button>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
					<!-- End Create Modal -->
					<!-- end page header -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card card-small mb-3">
								<div class="card-body">
									<div class="body">
										<table class="table table-bordered table-striped table-hover dataTable js-exportable">
											<thead>
												<tr>
													<th style="text-align:center;" width="10">No</th>
													<th>Cover</th>
													<th style="text-align:center;" width="70">Action</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="main-footer d-flex p-2 px-3 bg-white border-top">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
					</ul>
					<span class="copyright ml-auto my-auto mr-2">Copyright © 2018
						<a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
					</span>
				</footer>
			</main>
		</div>
	</div>
	</div>
	<?php $this->load->view('admin/include/js');?>
</body>

</html>
