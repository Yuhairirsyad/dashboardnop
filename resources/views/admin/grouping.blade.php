@extends('admin.main')

@section(section: 'nav')
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
			<li class="sidebar-item  active">
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


<main class="content">
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Grouping</strong> Dashboard</h1>
    <form id="athleteForm" action="{{ route('update.athletes.group') }}" method="POST">
      @csrf
      <div class="d-flex flex-column flex-sm-row justify-content-center mt-4 align-items-center mb-3">
          <input id="areaInput" type="text" class="form-control col-md-2 col-xl-2 col-sm-6 mb-2 mb-sm-0" placeholder="Area" readonly>
          <input id="areaHidden" type="hidden" name="area" value="">

          <select id="grupSelect" name="grup" class="form-select col-md-3 col-xl-2 col-sm-6 mx-sm-2 mb-2 mb-sm-0" aria-label="Grup select" required>
              <option selected value="">Pilih Grup</option>
              @foreach($grups as $grup)
                  <option value="{{ $grup->grup }}" data-area="{{ $grup->area }}">{{ $grup->grup }}</option>
              @endforeach
          </select>

          <button type="submit" class="btn btn-primary d-block d-sm-inline-block col-md-3 col-xl-2 col-sm-6 mx-sm-2 mb-2 mb-sm-0 w-sm-auto">Simpan</button>
          <button type="button" id="resetButton" class="btn btn-danger d-block d-sm-inline-block col-md-3 col-xl-2 col-sm-6 mx-sm-2 mb-2 mb-sm-0 w-sm-auto">Reset</button>
      </div>

		<div class="card-body table-responsive pt-5">
			<table id="example" class="table table-striped" style="width:100%">
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
                  <input type="checkbox" name="selected_athletes[]" value="{{ $athlete->id }}">
              </td>
          </tr>
          @endforeach
				</tbody>
			</table>
		</div>
  </form>

  </div>
</main>

<script>
document.getElementById('grupSelect').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var area = selectedOption.getAttribute('data-area');
    document.getElementById('areaInput').value = area;
    document.getElementById('areaHidden').value = area;
});

document.getElementById('resetButton').addEventListener('click', function() {
    var form = document.getElementById('athleteForm');
    form.action = "{{ route('reset.athletes.group') }}";
    form.submit();
});
	</script>

@endsection
