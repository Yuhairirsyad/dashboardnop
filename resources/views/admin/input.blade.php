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

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('index')}}">
				<i class="bi bi-speedometer"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('quotes')}}">
				<i class="bi bi-quote"></i> <span class="align-middle">Quotes</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('grouping')}}">
				<i class="bi bi-people-fill"></i> <span class="align-middle">Grouping
						Athlte</span>
				</a>
			</li>
			<li class="sidebar-item active">
				<a class="sidebar-link" href="{{route('input')}}">
				<i class="bi bi-send-fill"></i> <span class="align-middle">Input Grup</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('challenges')}}">
				<i class="bi bi-activity"></i> <span class="align-middle">Data
						Challenges</span>
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
		<h1 class="h3 mb-3"><strong>Group</strong> Dashboard</h1>
		<form action="{{ route('input.store') }}" method="POST" style="background-color: gainsboro">
			@csrf
			<div class="row pb-3 pt-2">
				<!-- Input Group Section -->
				<div class="col-md-6">
					<div>
						<p>PILIH AREA</p>
					</div>
					<div>
						<label class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="area" value="JAWA TENGAH" required>
							<span class="form-check-label">JAWA TENGAH</span>
						</label>
						<label class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="area" value="JAWA TIMUR" required>
							<span class="form-check-label">JAWA TIMUR</span>
						</label>
						<label class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="area" value="BALINUSRA" required>
							<span class="form-check-label">BALINUSRA</span>
						</label>
					</div>
				</div>
				<div class="col-md-4">
					<h6>Input Group</h6>
					<div class="input-group">
						<input type="text" class="form-control" name="grup" placeholder="Input">
						<button class="btn btn-primary ms-2" type="submit">Simpan</button>
					</div>
				</div>
			</div>
		</form>

		<!-- Table for displaying group data -->
		<div class="card-body table-responsive pt-5">
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Area</th>
						<th>Grup</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $item)
					<tr>
						<th>{{ $loop->iteration }}</th>
						<td>{{ $item->area }}</td>
						<td>{{ $item->grup }}</td>
						<td>
							<!-- Button to trigger edit modal -->
							<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
								<i class="bi bi-pencil"></i> Edit
							</a>

							<!-- Modal for editing group data -->
							<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Grup</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<!-- Form Edit -->
											<form action="{{ route('input.update', ['id' => $item->id]) }}" method="POST">
												@csrf
												@method('POST')
												<div class="mb-3">
													<label for="area{{ $item->id }}" class="form-label">Area</label>
													<select class="form-select" id="area{{ $item->id }}" name="area" required>
														<option value="JAWA TENGAH" {{ $item->area == 'JAWA TENGAH' ? 'selected' : '' }}>JAWA TENGAH</option>
														<option value="JAWA TIMUR" {{ $item->area == 'JAWA TIMUR' ? 'selected' : '' }}>JAWA TIMUR</option>
														<option value="BALINUSRA" {{ $item->area == 'BALINUSRA' ? 'selected' : '' }}>BALINUSRA</option>
													</select>
												</div>
												<div class="mb-3">
													<label for="grup{{ $item->id }}" class="form-label">Grup</label>
													<input type="text" class="form-control" id="grup{{ $item->id }}" name="grup" value="{{ $item->grup }}" required>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Save changes</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>							
							<!-- Tombol Hapus -->
							<a data-bs-toggle="modal" data-bs-target="#modal-hapus{{ $item->id }}" class="btn btn-danger">
								<i class="bi bi-trash"></i> Hapus
							</a>

							<!-- Modal Konfirmasi Hapus -->
							<div class="modal fade" id="modal-hapus{{ $item->id }}" tabindex="-1"
								aria-labelledby="modalHapusLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											Apakah anda yakin akan menghapus grup ini?
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-bs-dismiss="modal">Batal</button>
											<form action="{{ route('input.destroy', ['id' => $item->id]) }}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger">Hapus</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
</main>
<hr>

<!-- Table to display the data -->


@endsection
