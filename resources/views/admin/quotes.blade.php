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
			<li class="sidebar-item active">
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
<style>
	/* Ubah warna header tabel */
	#example thead {
		background-color: #7FA1C3;
		/* Hijau */
		color: white;
	}

	/* Baris genap */
	#example tbody tr:nth-child(even) {
		background-color: #f2f2f2;
		/* Warna abu-abu muda */
	}

	/* Baris ganjil */
	#example tbody tr:nth-child(odd) {
		background-color: #ffffff;
		/* Warna putih */
	}

	/* Hover efek untuk baris */
	#example tbody tr:hover {
		background-color: #ddd;
		/* Abu-abu gelap */
	}

	/* Warna footer */
	#example tfoot {
		background-color: #ddd;
		color: white;
	}
</style>
<main class="content">
	<div class="container-fluid p-0">
	@if (session('successqts'))
          <div class="alert alert-success">
            {{ session('successqts') }}
          </div>
        @endif
	@if (session('edtscss'))
          <div class="alert alert-success">
            {{ session('edtscss') }}
          </div>
        @endif
	@if (session('dltquts'))
          <div class="alert alert-success">
            {{ session('dltquts') }}
          </div>
        @endif
		<h1 class="h3 mb-3"><strong>Quotes</strong> Dashboard</h1>
		<form action="{{route('crtquotes')}}" method="post">
			@csrf
			<div class="d-flex align-items-start">
				<textarea rows="3" cols="40" class="mb-2 mt-2 me-2" name="quotes"
					placeholder="Masukan Kata-kata Terbaikmu!"></textarea>
				@error('quotes')
					<small>{{ $message }}</small>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary mb-4">Simpan</button>
			<button type="reset" class="btn btn-danger mb-4">Reset</button>
		</form>

		<div class="card-body table-responsive p-0">
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Quotes</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $d)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $d->quotes }}</td>
							<td>
								<!-- Tombol Edit -->
								<a href="#" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#editModal{{ $d->id }}">
									<i class="bi bi-pencil"></i> Edit
								</a>

								<!-- Modal Bootstrap -->
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
												<!-- Form Edit Quotes -->
												<form action="{{ route('updateqts', ['id' => $d->id]) }}" method="POST">
													@csrf
													@method('POST')
													<div class="mb-3">
														<label for="quote{{ $d->id }}" class="form-label">Quote</label>
														<textarea class="form-control" id="quote{{ $d->id }}" name="quote"
															rows="3">{{ $d->quotes }}</textarea>
														@error('quote')
															<small>{{ $message }}</small>
														@enderror
													</div>

													<div class="modal-footer">
														<button type="button" class="btn btn-secondary"
															data-bs-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Save changes</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>



								<!-- Tombol Hapus -->
								<a data-bs-toggle="modal" data-bs-target="#modal-hapus{{ $d->id }}" class="btn btn-danger">
									<i class="bi bi-trash"></i> Hapus
								</a>

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
												Apakah Anda yakin ingin menghapus quote ini?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Batal</button>
												<form action="{{ route('deletequotes', ['id' => $d->id]) }}" method="POST">
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
				<tfoot>
					<tr>
						<th>No</th>
						<th>Quotes</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
</main>
@endsection