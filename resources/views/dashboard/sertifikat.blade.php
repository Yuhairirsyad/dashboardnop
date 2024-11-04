@extends('dashboard.leaderboard')
@section('main')

<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="{{route('leader')}}" class="nav_logo">
                <img src="img/logotelkomsel.png" alt="" width="25">
                <span class="nav_logo-name">Telkomsel</span>
            </a>
            <div class="nav_list">
                <a href="{{route('leader')}}" class="nav_link ">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="#" class="nav_link">
                    <i class="bi bi-people nav_icon"></i>
                    <span class="nav_name">Users</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-message-square-detail nav_icon'></i>
                    <span class="nav_name">Messages</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-bookmark nav_icon'></i>
                    <span class="nav_name">Bookmark</span>
                </a>
                <a href="{{route('sertifikat')}}" class="nav_link active">
                    <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">Files</span>
                </a>
                <a href="#" class="nav_link">
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                    <span class="nav_name">Stats</span>
                </a>
            </div>
        </div>
        <a href="{{route('login')}}" class="nav_link">
            <img src="assets/images/faces/2.jpg" width="26" class="rounded-circle" alt="User Avatar">
            <span class="nav_name">Login</span>
        </a>
    </nav>
</div>

<div class="content">

    <div class="page-header">
        <div class="row text-center">
            <div class="col-12 mt-4">
                <h3 style="font-weight: 700; color:#25396f;">Buat Sertifikat</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="/generate-pdf" method="POST">
                        @csrf
                        <label for="selected_atlet">Pilih Atlet:</label>
                        <select name="selected_atlet" id="selected_atlet" required>
                            <option value="">--Pilih Atlet--</option>
                            @foreach($data as $atlet)
                            <option value="{{ $atlet->id_athlete }}">
                                {{ $atlet->firstname }} {{ $atlet->lastname }} ({{ $atlet->username }})
                            </option>
                            @endforeach
                        </select>

                        <button type="submit">Cetak PDF</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>

@endsection
