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

	<li class="sidebar-item active has-sub">
		<a href="#" class='sidebar-link'>
			<i class="bi bi-people-fill"></i>
			<span>Group</span>
		</a>
		<ul class="submenu active">
			<li class="submenu-item active ">
				<a href="{{route('input')}}">Input Group</a>
			</li>
			<li class="submenu-item ">
				<a href="{{route('grouping')}}">Grouping Athlete</a>
			</li>
		</ul>
	</li>

  <li class="sidebar-item">
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
<div id="main-content">

	<div class="page-heading">
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6 order-md-1 order-last">
					<h3>Input Group</h3>
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
    @if (session('successinpt'))
			<div class="alert alert-success">
				{{ session('successinpt') }}
			</div>
		@endif
		@if (session('successupdtinpt'))
			<div class="alert alert-success">
				{{ session('successupdtinpt') }}
			</div>
		@endif
		@if (session('successhpsinpt'))
			<div class="alert alert-danger">
				{{ session('successhpsinpt') }}
			</div>
		@endif
			<div class="card">
				<div class="card-header">
					<form action="{{ route('input.store') }}" method="POST" style="background-color: gainsboro"
						class="rounded-3">
						@csrf
						<div class="row pb-3 pt-2">
							<!-- Input Group Section -->
							<div class="col-md-6 mx-3">
								<div>
									<p>PILIH AREA</p>
								</div>
								<div>
									<label class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="area" value="JAWA TENGAH"
											required>
										<span class="form-check-label">JAWA TENGAH</span>
									</label>
									<label class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="area" value="JAWA TIMUR"
											required>
										<span class="form-check-label">JAWA TIMUR</span>
									</label>
									<label class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="area" value="BALINUSRA"
											required>
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
				</div>
				<div class="card-body">
					<table class="table table-striped" id="table1">
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
										<a href="#" class="btn btn-primary" data-bs-toggle="modal"
											data-bs-target="#editModal{{ $item->id }}">
											<i class="bi bi-pencil"></i> Edit
										</a>

										<!-- Modal for editing group data -->
										<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
											aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Grup
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal"
															aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<!-- Form Edit -->
														<form action="{{ route('input.update', ['id' => $item->id]) }}"
															method="POST">
															@csrf
															@method('POST')
															<div class="mb-3">
																<label for="area{{ $item->id }}"
																	class="form-label">Area</label>
																<select class="form-select" id="area{{ $item->id }}"
																	name="area" required>
																	<option value="JAWA TENGAH" {{ $item->area == 'JAWA TENGAH' ? 'selected' : '' }}>JAWA TENGAH</option>
																	<option value="JAWA TIMUR" {{ $item->area == 'JAWA TIMUR' ? 'selected' : '' }}>JAWA TIMUR</option>
																	<option value="BALINUSRA" {{ $item->area == 'BALINUSRA' ? 'selected' : '' }}>BALINUSRA</option>
																</select>
															</div>
															<div class="mb-3">
																<label for="grup{{ $item->id }}"
																	class="form-label">Grup</label>
																<input type="text" class="form-control"
																	id="grup{{ $item->id }}" name="grup"
																	value="{{ $item->grup }}" required>
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
										<!-- Tombol Hapus -->
										<a data-bs-toggle="modal" data-bs-target="#modal-hapus{{ $item->id }}"
											class="btn btn-danger">
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
														<form action="{{ route('input.destroy', ['id' => $item->id]) }}"
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