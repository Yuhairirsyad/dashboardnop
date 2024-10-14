@extends('admin.main')
@section('nav')
<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="{{route('index')}}">
			<span class="align-middle">AdminKit</span>
		</a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Pages
			</li>

			<li class="sidebar-item active">
				<a class="sidebar-link" href="{{route('index')}}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('quotes')}}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Quotes</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('grouping')}}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Grouping
						Athlte</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('input')}}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Input Grup</span>
				</a>
			</li>

			<!-- <li class="sidebar-item active">
          <a class="sidebar-link" href="#" data-bs-toggle="collapse" data-bs-target="#submenu">
            <i class="align-middle" data-feather="sliders"></i> 
            <span class="align-middle">Dashboard</span>
          </a>
          <ul id="submenu" class="collapse">
            <li class="sidebar-item">
              <a class="sidebar-link" href="overview.html">Overview</a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="statistics.html">Statistics</a>
            </li>
          </ul>
        </li> -->


			<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
            </a>
					</li> -->

			<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li> -->

			<!-- <li class="sidebar-header">
						Tools & Components
					</li> -->

			<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="ui-buttons.html">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-forms.html">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-cards.html">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
            </a>
					</li> -->

			<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li> -->

			<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li> -->

			<!-- <li class="sidebar-header">
						Plugins & Addons
					</li> -->

			<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li> -->

			<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li> -->
		</ul>

		<!-- <div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div> -->
	</div>
</nav>
@endsection
@section('content')


<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>User</strong> Dashboard</h1>
		<a href="#" class="btn btn-primary mb-3 mt-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
			<b>+</b> Tambah Data
		</a>
		<!-- Modal Tambah Data -->
		<!-- Modal Tambah Data -->
		<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tambahModalLabel">Tambah Data Atlet</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- Form Tambah Data -->
						<form action="{{route('crtuser')}}" method="POST">
							@csrf
							<div class="mb-3">
								<label for="id_athlete" class="form-label">ID Athlete</label>
								<input type="text" class="form-control" id="id_athlete" name="id_athlete" required>
							</div>
							<div class="mb-3">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control" id="username" name="username" required>
							</div>
							<div class="mb-3">
								<label for="firstname" class="form-label">First Name</label>
								<input type="text" class="form-control" id="firstname" name="firstname" required>
							</div>
							<div class="mb-3">
								<label for="lastname" class="form-label">Last Name</label>
								<input type="text" class="form-control" id="lastname" name="lastname" required>
							</div>
							<div class="mb-3">
								<label for="refresh_token" class="form-label">Refresh Token</label>
								<input type="text" class="form-control" id="refresh_token" name="refresh_token">
							</div>
							<div class="mb-3">
								<label for="access_token" class="form-label">Access Token</label>
								<input type="text" class="form-control" id="access_token" name="access_token">
							</div>
							<div class="mb-3">
								<label for="foto_profil" class="form-label">Foto Profil</label>
								<input type="text" class="form-control" id="foto_profil" name="foto_profil">
							</div>
							<div class="mb-3">
								<label for="area" class="form-label">Area</label>
								<input type="text" class="form-control" id="area" name="area">
							</div>
							<div class="mb-3">
								<label for="grup" class="form-label">Grup</label>
								<input type="text" class="form-control" id="grup" name="grup">
							</div>
							<div class="mb-3">
								<label for="warna" class="form-label">Warna</label>
								<input type="text" class="form-control" id="warna" name="warna">
							</div>
							<div class="mb-3">
								<label for="tgl_register" class="form-label">Tanggal dan Waktu Register</label>
								<input type="datetime-local" class="form-control" id="tgl_register" name="tgl_register"
									required>
							</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
					</form>
				</div>
			</div>
		</div>



		<!-- <div class="row">
			<div class="col-xl-6 col-xxl-5 d-flex">
				<div class="w-100">
					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Sales</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="truck"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">2.382</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65%
										</span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Visitors</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="users"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">14.212</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25%
										</span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Earnings</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">$21.300</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65%
										</span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Orders</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="shopping-cart"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">64</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25%
										</span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-6 col-xxl-7">
				<div class="card flex-fill w-100">
					<div class="card-header">

						<h5 class="card-title mb-0">Recent Movement</h5>
					</div>
					<div class="card-body py-3">
						<div class="chart chart-sm">
							<canvas id="chartjs-dashboard-line"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
				<div class="card flex-fill w-100">
					<div class="card-header">

						<h5 class="card-title mb-0">Browser Usage</h5>
					</div>
					<div class="card-body d-flex">
						<div class="align-self-center w-100">
							<div class="py-3">
								<div class="chart chart-xs">
									<canvas id="chartjs-dashboard-pie"></canvas>
								</div>
							</div>

							<table class="table mb-0">
								<tbody>
									<tr>
										<td>Chrome</td>
										<td class="text-end">4306</td>
									</tr>
									<tr>
										<td>Firefox</td>
										<td class="text-end">3801</td>
									</tr>
									<tr>
										<td>IE</td>
										<td class="text-end">1689</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
				<div class="card flex-fill w-100">
					<div class="card-header">

						<h5 class="card-title mb-0">Real-Time</h5>
					</div>
					<div class="card-body px-4">
						<div id="world_map" style="height:350px;"></div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Calendar</h5>
					</div>
					<div class="card-body d-flex">
						<div class="align-self-center w-100">
							<div class="chart">
								<div id="datetimepicker-dashboard"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-lg-8 col-xxl-9 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Latest Projects</h5>
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
								<th>Name</th>
								<th class="d-none d-xl-table-cell">Start Date</th>
								<th class="d-none d-xl-table-cell">End Date</th>
								<th>Status</th>
								<th class="d-none d-md-table-cell">Assignee</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Project Apollo</td>
								<td class="d-none d-xl-table-cell">01/01/2023</td>
								<td class="d-none d-xl-table-cell">31/06/2023</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">Vanessa Tucker</td>
							</tr>
							<tr>
								<td>Project Fireball</td>
								<td class="d-none d-xl-table-cell">01/01/2023</td>
								<td class="d-none d-xl-table-cell">31/06/2023</td>
								<td><span class="badge bg-danger">Cancelled</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
							<tr>
								<td>Project Hades</td>
								<td class="d-none d-xl-table-cell">01/01/2023</td>
								<td class="d-none d-xl-table-cell">31/06/2023</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">Sharon Lessman</td>
							</tr>
							<tr>
								<td>Project Nitro</td>
								<td class="d-none d-xl-table-cell">01/01/2023</td>
								<td class="d-none d-xl-table-cell">31/06/2023</td>
								<td><span class="badge bg-warning">In progress</span></td>
								<td class="d-none d-md-table-cell">Vanessa Tucker</td>
							</tr>
							<tr>
								<td>Project Phoenix</td>
								<td class="d-none d-xl-table-cell">01/01/2023</td>
								<td class="d-none d-xl-table-cell">31/06/2023</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
							<tr>
								<td>Project X</td>
								<td class="d-none d-xl-table-cell">01/01/2023</td>
								<td class="d-none d-xl-table-cell">31/06/2023</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">Sharon Lessman</td>
							</tr>
							<tr>
								<td>Project Romeo</td>
								<td class="d-none d-xl-table-cell">01/01/2023</td>
								<td class="d-none d-xl-table-cell">31/06/2023</td>
								<td><span class="badge bg-success">Done</span></td>
								<td class="d-none d-md-table-cell">Christina Mason</td>
							</tr>
							<tr>
								<td>Project Wombat</td>
								<td class="d-none d-xl-table-cell">01/01/2023</td>
								<td class="d-none d-xl-table-cell">31/06/2023</td>
								<td><span class="badge bg-warning">In progress</span></td>
								<td class="d-none d-md-table-cell">William Harris</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-xxl-3 d-flex">
				<div class="card flex-fill w-100">
					<div class="card-header">

						<h5 class="card-title mb-0">Monthly Sales</h5>
					</div>
					<div class="card-body d-flex w-100">
						<div class="align-self-center chart chart-lg">
							<canvas id="chartjs-dashboard-bar"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="card-body table-responsive p-0">
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>Action</th>
						<th>No</th>
						<th>ID Athlete</th>
						<th>Username</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Refresh Token</th>
						<th>Access Token</th>
						<th>Foto Profil</th>
						<th>Area</th>
						<th>Grup</th>
						<th>Warna</th>
						<th>Tanggal Register</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $d)
						<tr>
							<td>
								<!-- Tombol Edit -->
								<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
									<i class="bi bi-pencil"></i> Edit
								</a>

								
								<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editModal">
									<i class="bi bi-trash"></i> Hapus
								</a>
							</td>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $d->id_athlete }}</td>
							<td>{{ $d->username }}</td>
							<td>{{$d->firstname}}</td>
							<td>{{$d->lastname}}</td>
							<td>{{$d->refresh_token}}</td>
							<td>{{$d->access_token}}</td>
							<td>{{$d->foto_profil}}</td>
							<td>{{$d->area}}</td>
							<td>{{$d->grup}}</td>
							<td>{{$d->warna}}</td>
							<td>{{$d->tgl_register}}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>No</th>
						<th>ID Athlete</th>
						<th>Username</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Refresh Token</th>
						<th>Access Token</th>
						<th>Foto Profil</th>
						<th>Area</th>
						<th>Grup</th>
						<th>Warna</th>
						<th>Tanggal Register</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>
</main>
@endsection