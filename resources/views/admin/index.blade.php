@extends('admin.main')
@section('nav')
<ul class="menu">
  <li class="sidebar-title">Menu</li>

  <li class="sidebar-item active ">
    <a href="{{route('index')}}" class='sidebar-link'>
      <i class="bi bi-grid-fill"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="sidebar-item">
    <a href="{{ route('quotes') }}" class='sidebar-link'>
      <i class="bi bi-chat-left-quote-fill"></i>
      <span>Quotes</span>
    </a>
  </li>

  <li class="sidebar-item has-sub">
    <a href="#" class='sidebar-link'>
      <i class="bi bi-people-fill"></i>
      <span>Group</span>
    </a>
    <ul class="submenu ">
      <li class="submenu-item ">
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
    @if (session('successtmbh'))
			<div class="alert alert-success">
				{{ session('successtmbh') }}
			</div>
		@endif
		@if (session('updusr'))
			<div class="alert alert-success">
				{{ session('updusr') }}
			</div>
		@endif
		@if (session('successhps'))
			<div class="alert alert-danger">
				{{ session('successhps') }}
			</div>
		@endif
		@if (session('successadm'))
			<div class="alert alert-success">
				{{ session('successadm') }}
			</div>
		@endif
      <div class="card">
        <div class="card-header">
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <b>+</b> Tambah Data
          </a>
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
                      <input type="text" class="form-control" id="id_athlete" name="id_athlete">
                      @error('id_athlete')
              <small>{{$message}}</small>
            @enderror
                    </div>
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" id="username" name="username">
                      @error('username')
              <small>{{$message}}</small>
            @enderror
                    </div>
                    <div class="mb-3">
                      <label for="firstname" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstname" name="firstname">
                      @error('firstname')
              <small>{{$message}}</small>
            @enderror
                    </div>
                    <div class="mb-3">
                      <label for="lastname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastname" name="lastname">
                      @error('lastname')
              <small>{{$message}}</small>
            @enderror
                    </div>
                    <div class="mb-3">
                      <label for="refresh_token" class="form-label">Refresh Token</label>
                      <input type="text" class="form-control" id="refresh_token" name="refresh_token">
                      @error('refresh_token')
              <small>{{$message}}</small>
            @enderror
                    </div>
                    <div class="mb-3">
                      <label for="access_token" class="form-label">Access Token</label>
                      <input type="text" class="form-control" id="access_token" name="access_token">
                      @error('access_token')
              <small>{{$message}}</small>
            @enderror
                    </div>
                    <div class="mb-3">
                      <label for="foto_profil" class="form-label">Foto Profil</label>
                      <input type="text" class="form-control" id="foto_profil" name="foto_profil">
                      @error('foto_profil')
              <small>{{$message}}</small>
            @enderror
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
                      @error('warna')
              <small>{{$message}}</small>
            @enderror
                    </div>
                    <div class="mb-3">
                      <label for="tgl_register" class="form-label">Tanggal dan Waktu
                        Register</label>
                      <input type="datetime-local" class="form-control" id="tgl_register" name="tgl_register">
                      @error('tgl_register')
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
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table1">
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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Form Edit data -->
                <form action="{{ route('updateusr', ['id' => $d->id]) }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                  <label for="id_athlete" class="form-label">ID
                  Athlete</label>
                  <input type="text" class="form-control" id="id_athlete" name="id_athlete"
                  value="{{$d->id_athlete}}">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username"
                  value="{{$d->username}} ">
                </div>
                <div class="mb-3">
                  <label for="firstname" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstname" name="firstname"
                  value="{{$d->firstname}}">
                </div>
                <div class="mb-3">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname"
                  value="{{$d->lastname}}">
                </div>
                <div class="mb-3">
                  <label for="refresh_token" class="form-label">Refresh
                  Token</label>
                  <input type="text" class="form-control" id="refresh_token" name="refresh_token"
                  value="{{$d->refresh_token}}">
                </div>
                <div class="mb-3">
                  <label for="access_token" class="form-label">Access
                  Token</label>
                  <input type="text" class="form-control" id="access_token" name="access_token"
                  value="{{$d->access_token}}">

                </div>
                <div class="mb-3">
                  <label for="foto_profil" class="form-label">Foto
                  Profil</label>
                  <input type="text" class="form-control" id="foto_profil" name="foto_profil"
                  value="{{$d->foto_profil}}">

                </div>
                <div class="mb-3">
                  <label for="area" class="form-label">Area</label>
                  <input type="text" class="form-control" id="area" name="area" value="{{$d->area}}">
                </div>
                <div class="mb-3">
                  <label for="grup" class="form-label">Grup</label>
                  <input type="text" class="form-control" id="grup" name="grup" value="{{$d->grup}}">
                </div>
                <div class="mb-3">
                  <label for="warna" class="form-label">Warna</label>
                  <input type="text" class="form-control" id="warna" name="warna" value="{{$d->warna}}">
                </div>
                <div class="mb-3">
                  <label for="tgl_register" class="form-label">Tanggal dan
                  Waktu
                  Register</label>
                  <input type="datetime-local" class="form-control" id="tgl_register" name="tgl_register"
                  value="{{$d->tgl_register}}">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save
                  changes</button>
                </div>
                </form>
              </div>
              </div>
            </div>
            </div>

            <!-- Modal Konfirmasi Hapus -->
            <div class="modal fade" id="modal-hapus{{ $d->id }}" tabindex="-1" aria-labelledby="modalHapusLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="{{ route('deleteusr', ['id' => $d->id]) }}" method="POST">
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
          </table>
        </div>
      </div>

    </section>
  </div>
</div>
@endsection