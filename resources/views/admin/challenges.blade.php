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
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('input')}}">
					<i class="bi bi-send-fill"></i> <span class="align-middle">Input Grup</span>
				</a>
			</li>
			<li class="sidebar-item active">
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
<style>
	select.form-control {
		appearance: auto;
		/* Pastikan browser menggunakan tampilan bawaan */
		-webkit-appearance: auto;
		/* Safari dan Chrome */
		-moz-appearance: auto;
		/* Firefox */
	}

	.btn-group-spaced .btn {
		margin-right: 5px;
	}

	.btn-group-spaced .btn:last-child {
		margin-right: 0;
	}
</style>
<main class="content">
	<div class="container-fluid p-0">
		@if (session('successdtclgs'))
			<div class="alert alert-success">
				{{ session('successdtclgs') }}
			</div>
		@endif
		@if (session('updchlgs'))
			<div class="alert alert-success">
				{{ session('updchlgs') }}
			</div>
		@endif
		@if (session('successchalllges'))
			<div class="alert alert-success">
				{{ session('successchalllges') }}
			</div>
		@endif
		<h1 class="h3 mb-3"><strong>Data Challenges</strong></h1>
		<a href="#" class="btn btn-primary mb-3 mt-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
			<b>+</b> Tambah Data
		</a>
		<!-- Modal Tambah Data -->
		<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- Form Tambah Data -->
						<form action="{{route('crtchallenges')}}" method="POST">
							@csrf
							<div class="mb-3">
								<label for="id_athlete" class="form-label">ID Athlete</label>
								<input type="text" class="form-control" id="id_athlete" name="id_athlete">
								@error('id_athlete')
									<small>{{$message}}</small>
								@enderror
							</div>
							<div class="mb-3">
								<label for="id_kegiatan" class="form-label">ID Kegiatan</label>
								<input type="text" class="form-control" id="id_kegiatan" name="id_kegiatan">
								@error('id_kegiatan')
									<small>{{$message}}</small>
								@enderror
							</div>
							<div class="mb-3">
								<label for="kegiatan" class="form-label">Kegiatan</label>
								<input type="text" class="form-control" id="kegiatan" name="kegiatan">
								@error('kegiatan')
									<small>{{$message}}</small>
								@enderror
							</div>
							<div class="mb-3">
								<label for="distance" class="form-label">Distance</label>
								<input type="text" class="form-control" id="distance" name="distance">
								@error('distance')
									<small>{{$message}}</small>
								@enderror
							</div>
							<div class="mb-3">
								<label for="kalori" class="form-label">Kalori</label>
								<input type="text" class="form-control" id="kalori" name="kalori">
								@error('kalori')
									<small>{{$message}}</small>
								@enderror
							</div>
							<div class="mb-3">
								<label for="waktu" class="form-label">Waktu</label>
								<input type="text" class="form-control" id="waktu" name="waktu">
								@error('waktu')
									<small>{{$message}}</small>
								@enderror
							</div>
							<div class="mb-3">
								<label for="tipe" class="form-label">Tipe</label>
								<select class="form-control" id="tipe" name="tipe">
									<option value="" disabled selected>-- Pilih Tipe --</option>
									<option value="Run">Run</option>
									<option value="Walk">Walk</option>
								</select>
								@error('tipe')
									<small>{{ $message }}</small>
								@enderror
							</div>

							<div class="mb-3">
								<label for="tanggal_kegiatan" class="form-label">Tanggal Kegiatan</label>
								<input type="datetime-local" class="form-control" id="tanggal_kegiatan"
									name="tanggal_kegiatan">
								@error('tanggal_kegiatan')
									<small>{{$message}}</small>
								@enderror
							</div>
							<div class="mb-3">
								<label for="tanggal_ambil" class="form-label">Tanggal Ambil</label>
								<input type="date" class="form-control" id="tanggal_ambil" name="tanggal_ambil">
								@error('tanggal_ambil')
									<small>{{$message}}</small>
								@enderror
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


		<div class="card-body table-responsive p-0">
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>Action</th>
						<th>No</th>
						<th>ID Athlete</th>
						<th>ID Kegiatan</th>
						<th>Kegiatan</th>
						<th>Distance</th>
						<th>Kalori</th>
						<th>Waktu</th>
						<th>Tipe</th>
						<th>Tanggal Kegiatan</th>
						<th>Tanggal Ambil</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $d)
						<tr>
							<td>
								<div class="btn-group btn-group-spaced" role="group">
									<button type="button" class="btn btn-xl btn-primary" data-bs-toggle="modal"
										data-bs-target="#editModal{{ $d->id }}">
										<i class="bi bi-pencil-square"></i>
									</button>
									<button type="button" class="btn btn-xl btn-danger" data-bs-toggle="modal"
										data-bs-target="#modal-hapus{{ $d->id }}">
										<i class="bi bi-trash"></i>
									</button>
								</div>

								<!-- Modal Edit -->
								<div class="modal fade" id="editModal{{ $d->id }}" tabindex="-1"
									aria-labelledby="editModalLabel{{ $d->id }}" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="editModalLabel{{ $d->id }}">Edit Quotes</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<!-- Form Edit data -->
												<form action="{{ route('updatechallenges', ['id' => $d->id]) }}"
													method="POST">
													@csrf
													@method('POST')
													<div class="mb-3">
														<label for="id_athlete" class="form-label">ID Athlete</label>
														<input type="text" class="form-control" id="id_athlete"
															name="id_athlete" value="{{$d->id_athlete}}">
														@error('id_athlete')
															<small>{{ $message }}</small>
														@enderror
													</div>
													<div class="mb-3">
														<label for="id_kegiatan" class="form-label">ID Kegiatan</label>
														<input type="text" class="form-control" id="id_kegiatan"
															name="id_kegiatan" value="{{$d->id_kegiatan}}">
														@error('id_kegiatan')
															<small>{{ $message }}</small>
														@enderror
													</div>
													<div class="mb-3">
														<label for="kegiatan" class="form-label">Kegiatan</label>
														<input type="text" class="form-control" id="kegiatan"
															name="kegiatan" value="{{$d->kegiatan}}">
														@error('kegiatan')
															<small>{{ $message }}</small>
														@enderror
													</div>
													<div class="mb-3">
														<label for="distance" class="form-label">Distance</label>
														<input type="text" class="form-control" id="distance"
															name="distance" value="{{$d->distance}}">
														@error('distance')
															<small>{{ $message }}</small>
														@enderror
													</div>
													<div class="mb-3">
														<label for="kalori" class="form-label">Kalori</label>
														<input type="text" class="form-control" id="kalori" name="kalori"
															value="{{$d->kalori}}">
														@error('kalori')
															<small>{{ $message }}</small>
														@enderror
													</div>
													<div class="mb-3">
														<label for="waktu" class="form-label">Waktu</label>
														<input type="text" class="form-control" id="waktu" name="waktu"
															value="{{$d->waktu}}">
														@error('waktu')
															<small>{{ $message }}</small>
														@enderror

													</div>
													<div class="mb-3">
														<label for="tipe" class="form-label">Tipe</label>
														<select class="form-control" id="tipe" name="tipe">
															<option value="" disabled>-- Pilih Tipe --</option>
															<option value="Run" {{ $d->tipe == 'Run' ? 'selected' : '' }}>Run
															</option>
															<option value="Walk" {{ $d->tipe == 'Walk' ? 'selected' : '' }}>
																Walk</option>
														</select>
														@error('tipe')
															<small>{{ $message }}</small>
														@enderror
													</div>


													<div class="mb-3">
														<label for="tanggal_kegiatan" class="form-label">Tanggal
															Kegiatan</label>
														<input type="datetime-local" class="form-control"
															id="tanggal_kegiatan" name="tanggal_kegiatan"
															value="{{$d->tanggal_kegiatan}}">
														@error('tanggal_kegiatan')
															<small>{{$message}}</small>
														@enderror
													</div>
													<div class="mb-3">
														<label for="tanggal_ambil" class="form-label">Tanggal Ambil</label>
														<input type="date" class="form-control" id="tanggal_ambil"
															name="tanggal_ambil" value="{{$d->tanggal_ambil}}">
														@error('tanggal_ambil')
															<small>{{$message}}</small>
														@enderror
													</div>

													<div class="modal-footer">
														<button type="button" class="btn btn-secondary"
															data-bs-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Save
															changes</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

								<!-- Modal Konfirmasi Hapus -->
								<div class="modal fade" id="modal-hapus{{ $d->id }}" tabindex="-1"
									aria-labelledby="modalHapusLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												Apakah Anda yakin ingin menghapus data ini?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Batal</button>
												<form action="{{ route('deletechalenges', ['id' => $d->id]) }}" method="POST">
													@csrf
													@method('DELETE')
													<button type="submit" class="btn btn-danger">Hapus</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</td>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $d->id_athlete }}</td>
							<td>{{ $d->id_kegiatan }}</td>
							<td>{{$d->kegiatan}}</td>
							<td>{{$d->distance}}</td>
							<td>{{$d->kalori}}</td>
							<td>{{$d->waktu}}</td>
							<td>{{$d->tipe}}</td>
							<td>{{$d->tanggal_kegiatan}}</td>
							<td>{{$d->tanggal_ambil}}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Action</th>
						<th>No</th>
						<th>ID Athlete</th>
						<th>ID Kegiatan</th>
						<th>Kegiatan</th>
						<th>Distance</th>
						<th>Kalori</th>
						<th>Waktu</th>
						<th>Tipe</th>
						<th>Tanggal Kegiatan</th>
						<th>Tanggal Ambil</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>
</main>
@endsection