@extends('admin.main')

@section(section: 'nav')
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
			<li class="submenu-item">
				<a href="{{route('input')}}">Input Group</a>
			</li>
			<li class="submenu-item active">
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
					<h3>Quotes</h3>
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
    @if (session('successgrupings'))
			<div class="alert alert-success">
				{{ session('successgrupings') }}
			</div>
		@endif
		@if (session('successupdtgropus'))
			<div class="alert alert-danger">
				{{ session('successupdtgropus') }}
			</div>
		@endif
			<div class="card">
				<div class="card-header">
					<form id="athleteForm" action="{{ route('update.athletes.group') }}" method="POST">
						@csrf
						<div class="d-flex flex-column flex-sm-row justify-content-center mt-4 align-items-center mb-3">
							<input id="areaInput" type="text"
								class="form-control mx-1" placeholder="Area"
								readonly>
							<input id="areaHidden" type="hidden" name="area" value="">

							<select id="grupSelect" name="grup"
								class="form-select mx-1"
								aria-label="Grup select" required>
								<option selected value="">Pilih Grup</option>
								@foreach($grups as $grup)
									<option value="{{ $grup->grup }}" data-area="{{ $grup->area }}">{{ $grup->grup }}
									</option>
								@endforeach
							</select>

							<button type="submit"
								class="btn btn-primary d-block d-sm-inline-block col-md-3 col-xl-2 col-sm-6 mx-sm-2 mb-2 mb-sm-0 w-sm-auto">Simpan</button>
							<button type="button" id="resetButton"
								class="btn btn-danger d-block d-sm-inline-block col-md-3 col-xl-2 col-sm-6 mx-sm-2 mb-2 mb-sm-0 w-sm-auto">Reset</button>
						</div>

						<div class="card-body">
							<table class="table table-striped" id="table1">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Riwayat / Peringkat</th>
										<th>Grup Saat Ini</th>
										<th>Area Saat Ini</th>
										<th>Pilih</th>
									</tr>
								</thead>
								<tbody>
									@php $no = 1; @endphp
									@foreach($data as $athlete)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $athlete->firstname }} {{ $athlete->lastname }}</td>
											<td>{{ $athlete->distance ?? '0' }} Km</td>
											<td>{{ $athlete->grup ?? 'Belum diatur' }}</td>
											<td>{{ $athlete->area ?? 'Belum diatur' }}</td>
											<td>
												<input type="checkbox" name="selected_athletes[]"
													value="{{ $athlete->id }}">
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>

		</section>
	</div>
</div>

<script>
	document.getElementById('grupSelect').addEventListener('change', function () {
		var selectedOption = this.options[this.selectedIndex];
		var area = selectedOption.getAttribute('data-area');
		document.getElementById('areaInput').value = area;
		document.getElementById('areaHidden').value = area;
	});

	document.getElementById('resetButton').addEventListener('click', function () {
		var form = document.getElementById('athleteForm');
		form.action = "{{ route('reset.athletes.group') }}";
		form.submit();
	});
</script>

@endsection