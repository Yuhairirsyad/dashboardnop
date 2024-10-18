@extends('admin.main')
@section('nav')
<ul class="menu">
	<li class="sidebar-title">Menu</li>

	<li class="sidebar-item">
		<a href="{{route('index')}}" class='sidebar-link'>
			<i class="bi bi-grid-fill"></i>
			<span>Dashboard</span>
		</a>
	</li>

	<li class="sidebar-item">
		<a href="{{route('quotes')}}" class='sidebar-link'>
			<i class="bi bi-chat-left-quote-fill"></i>
			<span>Quotes</span>
		</a>
	</li>

	<li class="sidebar-item has-sub">
		<a href="#" class='sidebar-link'>
			<i class="bi bi-people-fill"></i>
			<span>Group</span>
		</a>
		<ul class="submenu">
			<li class="submenu-item">
				<a href="{{route('input')}}">Input Group</a>
			</li>
			<li class="submenu-item">
				<a href="{{route('grouping')}}">Grouping Athlete</a>
			</li>
		</ul>
	</li>

	<li class="sidebar-item active">
		<a href="{{ route('challenges') }}" class='sidebar-link'>
			<i class="bi bi-clock-fill"></i>
			<span>Data Challenges</span>
		</a>
	</li>

	<!-- <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Components</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="component-alert.html">Alert</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-badge.html">Badge</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-breadcrumb.html">Breadcrumb</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-button.html">Button</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-card.html">Card</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-carousel.html">Carousel</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-dropdown.html">Dropdown</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-list-group.html">List Group</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-modal.html">Modal</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-navs.html">Navs</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-pagination.html">Pagination</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-progress.html">Progress</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-spinner.html">Spinner</a>
                </li>
                <li class="submenu-item ">
                  <a href="component-tooltip.html">Tooltip</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>Extra Components</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="extra-component-avatar.html">Avatar</a>
                </li>
                <li class="submenu-item ">
                  <a href="extra-component-sweetalert.html">Sweet Alert</a>
                </li>
                <li class="submenu-item ">
                  <a href="extra-component-toastify.html">Toastify</a>
                </li>
                <li class="submenu-item ">
                  <a href="extra-component-rating.html">Rating</a>
                </li>
                <li class="submenu-item ">
                  <a href="extra-component-divider.html">Divider</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Layouts</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="layout-default.html">Default Layout</a>
                </li>
                <li class="submenu-item ">
                  <a href="layout-vertical-1-column.html">1 Column</a>
                </li>
                <li class="submenu-item ">
                  <a href="layout-vertical-navbar.html">Vertical with Navbar</a>
                </li>
                <li class="submenu-item ">
                  <a href="layout-horizontal.html">Horizontal Menu</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-title">Forms &amp; Tables</li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-hexagon-fill"></i>
                <span>Form Elements</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="form-element-input.html">Input</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-element-input-group.html">Input Group</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-element-select.html">Select</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-element-radio.html">Radio</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-element-checkbox.html">Checkbox</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-element-textarea.html">Textarea</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item  ">
              <a href="form-layout.html" class='sidebar-link'>
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Form Layout</span>
              </a>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-pen-fill"></i>
                <span>Form Editor</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="form-editor-quill.html">Quill</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-ckeditor.html">CKEditor</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-summernote.html">Summernote</a>
                </li>
                <li class="submenu-item ">
                  <a href="form-editor-tinymce.html">TinyMCE</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item  ">
              <a href="table.html" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Table</span>
              </a>
            </li>

            <li class="sidebar-item  ">
              <a href="table-datatable.html" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>Datatable</span>
              </a>
            </li>

            <li class="sidebar-title">Extra UI</li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-pentagon-fill"></i>
                <span>Widgets</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="ui-widgets-chatbox.html">Chatbox</a>
                </li>
                <li class="submenu-item ">
                  <a href="ui-widgets-pricing.html">Pricing</a>
                </li>
                <li class="submenu-item ">
                  <a href="ui-widgets-todolist.html">To-do List</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-egg-fill"></i>
                <span>Icons</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                </li>
                <li class="submenu-item ">
                  <a href="ui-icons-fontawesome.html">Fontawesome</a>
                </li>
                <li class="submenu-item ">
                  <a href="ui-icons-dripicons.html">Dripicons</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-bar-chart-fill"></i>
                <span>Charts</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="ui-chart-chartjs.html">ChartJS</a>
                </li>
                <li class="submenu-item ">
                  <a href="ui-chart-apexcharts.html">Apexcharts</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item  ">
              <a href="ui-file-uploader.html" class='sidebar-link'>
                <i class="bi bi-cloud-arrow-up-fill"></i>
                <span>File Uploader</span>
              </a>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-map-fill"></i>
                <span>Maps</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="ui-map-google-map.html">Google Map</a>
                </li>
                <li class="submenu-item ">
                  <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-title">Pages</li>

            <li class="sidebar-item  ">
              <a href="application-email.html" class='sidebar-link'>
                <i class="bi bi-envelope-fill"></i>
                <span>Email Application</span>
              </a>
            </li>

            <li class="sidebar-item  ">
              <a href="application-chat.html" class='sidebar-link'>
                <i class="bi bi-chat-dots-fill"></i>
                <span>Chat Application</span>
              </a>
            </li>

            <li class="sidebar-item  ">
              <a href="application-gallery.html" class='sidebar-link'>
                <i class="bi bi-image-fill"></i>
                <span>Photo Gallery</span>
              </a>
            </li>

            <li class="sidebar-item  ">
              <a href="application-checkout.html" class='sidebar-link'>
                <i class="bi bi-basket-fill"></i>
                <span>Checkout Page</span>
              </a>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-person-badge-fill"></i>
                <span>Authentication</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="auth-login.html">Login</a>
                </li>
                <li class="submenu-item ">
                  <a href="auth-register.html">Register</a>
                </li>
                <li class="submenu-item ">
                  <a href="auth-forgot-password.html">Forgot Password</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item  has-sub">
              <a href="#" class='sidebar-link'>
                <i class="bi bi-x-octagon-fill"></i>
                <span>Errors</span>
              </a>
              <ul class="submenu ">
                <li class="submenu-item ">
                  <a href="error-403.html">403</a>
                </li>
                <li class="submenu-item ">
                  <a href="error-404.html">404</a>
                </li>
                <li class="submenu-item ">
                  <a href="error-500.html">500</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-title">Raise Support</li>

            <li class="sidebar-item  ">
              <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                <i class="bi bi-life-preserver"></i>
                <span>Documentation</span>
              </a>
            </li>

            <li class="sidebar-item  ">
              <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                <i class="bi bi-puzzle"></i>
                <span>Contribute</span>
              </a>
            </li>

            <li class="sidebar-item  ">
              <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                <i class="bi bi-cash"></i>
                <span>Donate</span>
              </a>
            </li> -->

</ul>
@endsection

@section('content')

<style>
	.btn-group-spaced .btn {
		margin-right: 5px;
	}

	.btn-group-spaced .btn:last-child {
		margin-right: 0;
	}
</style>
<div id="main-content">

	<div class="page-heading">
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6 order-md-1 order-last">
					<h3>Dashboard</h3>
					<!-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> -->
				</div>
				<!-- <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data User
                                        </li>
                                    </ol>
                                </nav>
                            </div> -->
			</div>
		</div>
		<section class="section">
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
			<div class="alert alert-danger">
				{{ session('successchalllges') }}
			</div>
		@endif
			<div class="card">
				<div class="card-header">
					<a href="#" class="btn btn-primary mb-3 mt-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
						<b>+</b> Tambah Data
					</a>
					<!-- Modal Tambah Data -->
					<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
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
											<input type="date" class="form-control" id="tanggal_ambil"
												name="tanggal_ambil">
											@error('tanggal_ambil')
												<small>{{$message}}</small>
											@enderror
										</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary"
										data-bs-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped" id="table1">
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
											<button type="button" class="btn btn-sm btn-primary p-2" data-bs-toggle="modal"
												data-bs-target="#editModal{{ $d->id }}">
												<i class="bi bi-pencil-square"></i>
											</button>
											<button type="button" class="btn btn-sm btn-danger p-2" data-bs-toggle="modal"
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
														<h5 class="modal-title" id="editModalLabel{{ $d->id }}">Edit Quotes
														</h5>
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
																<label for="id_athlete" class="form-label">ID
																	Athlete</label>
																<input type="text" class="form-control" id="id_athlete"
																	name="id_athlete" value="{{$d->id_athlete}}">
																@error('id_athlete')
																	<small>{{ $message }}</small>
																@enderror
															</div>
															<div class="mb-3">
																<label for="id_kegiatan" class="form-label">ID
																	Kegiatan</label>
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
																<input type="text" class="form-control" id="kalori"
																	name="kalori" value="{{$d->kalori}}">
																@error('kalori')
																	<small>{{ $message }}</small>
																@enderror
															</div>
															<div class="mb-3">
																<label for="waktu" class="form-label">Waktu</label>
																<input type="text" class="form-control" id="waktu"
																	name="waktu" value="{{$d->waktu}}">
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
																<label for="tanggal_ambil" class="form-label">Tanggal
																	Ambil</label>
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
														<form action="{{ route('deletechalenges', ['id' => $d->id]) }}"
															method="POST">
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
					</table>
				</div>
			</div>

		</section>
	</div>
</div>
@endsection