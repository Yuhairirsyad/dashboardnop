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
                    <a href="{{route('leader')}}" class="nav_link active">
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
                    <a href="{{route('sertifikat')}}" class="nav_link ">
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
                    <h3 style="font-weight: 700; color:#25396f;">Walk & Run Challenge Q4 2024 T-Flyers Jateng DIY</h3>
                    <p class="text-muted">Start At: 01 Oktober 2024 | 00:00 - End At: 31 Desember 2024 | 23:59</p>
                    <div class="clock-container mt-5">
                        <div class="clock"></div>
                    </div>
                    <marquee width="400" scrollamount="1000" scrolldelay="11000" class="justify-content-center">
                        <h5 style="color:#1B1A55;" class="justify-content-center"><i>Update Data Every 09:00 Pagi
                                dan 21:00 Malam</i></h5>
                    </marquee>
                </div>
            </div>
        </div>


        {{-- Kategori Personal --}}
        <section class="row">
            <div class="col-12 col-lg-8 mb-3">
                <!-- Personal Category Section -->
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-bottom p-3">
                                <h4 class="fw-bold" style="color:#25396f;">Personal Category</h4>
                            </div>
                            <div class="card-header bg-white mb-3 text-center">
                                <!-- Personal Stats -->
                                <div class="row text-center justify-content-center mb-4">
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Fastest <br> {{ number_format($metrics['fastest']->speed ?? 0, 2) }}</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Kilometer <br> {{ number_format($metrics['kilometer']->total_distance ?? 0, 2) }} Km</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Durable <br> {{ number_format($metrics['durable']->total_hours ?? 0, 1) }} Jam</span>
                                    </div>
                                    <div class="col-md-2 col-8">f
                                        <span style="font-weight: bold; color: #000000;">Active <br> {{ $metrics['active']->activity_count ?? 0 }} Aktifitas</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Kalori <br> {{ number_format($metrics['calories']->total_calories ?? 0) }} Kcal</span>
                                    </div>
                                </div>
                                <!-- Medals Images -->
                                <div class="row text-center justify-content-center mb-4">
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/medaldef.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/medaldef.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/medaldef.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/medaldef.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/medaldef.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>

                                </div>

                                <hr style="border-top: 2px solid #333; width: 80%; margin: 20px auto;">

                                <h2 align="center" style="color:#1fc5c5; font-size: 18px; font-weight: bold;">
                                    Winners from each category
                                </h2>
                            </div>

                            <div id="individualCards" class="card-body">
                                <div class="container">
                                    <div class="row text-center justify-content-center">
                                        <!-- Individual Fastest -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background:#435ebe; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most Fastest
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">{{ $metrics['fastest']->username ?? 'N/A' }}</p>
                                                    <small class="text-white">{{ number_format($metrics['fastest']->speed ?? 0, 2) }} Menit /km</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Individual Kilometer -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background: #198754; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most KM
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">{{ $metrics['kilometer']->username ?? 'N/A' }}</p>
                                                    <small class="text-white">{{ number_format($metrics['kilometer']->total_distance ?? 0, 2) }} Km</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Individual Durable -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background: #dc3545; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most Durable
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">{{ $metrics['durable']->username ?? 'N/A' }}</p>
                                                    <small class="text-white">{{ number_format($metrics['durable']->total_hours ?? 0, 1) }} Jam</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Individual Active -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background: #8E24AA; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most Active
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">{{ $metrics['active']->username ?? 'N/A' }}</p>
                                                    <small class="text-white">{{ $metrics['active']->activity_count ?? 0 }} Aktifitas</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Individual Calories -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background: #6c757d; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most Calories
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">{{ $metrics['calories']->username ?? 'N/A' }}</p>
                                                    <small class="text-white">{{ number_format($metrics['calories']->total_calories ?? 0) }} kcal</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Group Cards Section -->
                            <div id="groupCards" class="card-body" style="display: none;">
                                <div class="container">
                                    <div class="row text-center justify-content-center">
                                        <!-- Group Fastest -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background:#435ebe; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Fastest Team
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">Team Alpha</p>
                                                    <small class="text-white">4.5 Menit/km</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Group Distance -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background: #198754; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most KM Team
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">Team Gamma</p>
                                                    <small class="text-white">312.45 Km</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Group Durable -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background: #dc3545; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most Durable Team
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">Team Beta</p>
                                                    <small class="text-white">48.5 Jam</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Group Active -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background: #8E24AA; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most Active Team
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">Team Gamma</p>
                                                    <small class="text-white">156 Aktifitas</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Group Calories -->
                                        <div class="col-md-2 col-8 mb-4">
                                            <div class="podium shadow-sm p-3 d-flex flex-column justify-content-between"
                                                style="height: 200px; background: #6c757d; border-radius: 10px; min-width: 160px;">
                                                <h5 class="font-weight-bold text-white mb-2">
                                                    <i class="fas fa-trophy"></i> Most Calories Team
                                                </h5>
                                                <div class="medal-container mb-2">
                                                    <img src="img/medaldef.png" alt="" width="60" style="border-radius: 50%;">
                                                </div>
                                                <div class="info-container">
                                                    <p class="text-white mb-1">Team Alpha</p>
                                                    <small class="text-white">25,480 kcal</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Quotes Section -->
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="fw-bold" style="color:#25396f;">Currently Group Selected</h4>
                    </div>
                    <div class="card-content text-center pb-4">
                        <button type="button" id="switchTableBtn" class="mx-2 mt-3 fs-1 btn btn-primary" onclick="switchTable()">Individu</button>
                    </div>
                </div>

                <!-- Visitor Section -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="fw-bold" style="color:#25396f;">Visitor</h4>
                    </div>
                    <div class="card-content pb-4">
                        <blockquote class="blockquote text-center fw-bold mt-5">
                            <h5><img src="https://img.icons8.com/color/30/null/user-group-man-man--v1.png"> Visitor
                                Today: 8
                                Visitors</h5>
                            <h5> <img src="https://img.icons8.com/color/30/null/user-group-man-man--v1.png"> Visitor
                                Yesterday : 18 Visitors</h5>
                            <h5><img src="https://img.icons8.com/color/30/null/group.png"> Total Visitor : 1122 Visitors
                            </h5>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="fw-bold" style="color:#25396f;">Quotes</h4>
                    </div>
                    <div class="card-content pb-4">
                        <blockquote class="blockquote text-center fw-bold mt-5">
                            <p class="mb-0">"{{ $quote->quotes}}"</p>
                        </blockquote>
                    </div>
                </div>

                <!-- Visitor Section -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="fw-bold" style="color:#25396f;">Visitor</h4>
                    </div>
                    <div class="card-content pb-4">
                        <blockquote class="blockquote text-center fw-bold mt-5">
                            <h5><img src="https://img.icons8.com/color/30/null/user-group-man-man--v1.png"> Visitor
                                Today: 8
                                Visitors</h5>
                            <h5> <img src="https://img.icons8.com/color/30/null/user-group-man-man--v1.png"> Visitor
                                Yesterday : 18 Visitors</h5>
                            <h5><img src="https://img.icons8.com/color/30/null/group.png"> Total Visitor : 1122 Visitors
                            </h5>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8 mt-3">
                <div class="card p-3">
                    <!-- Individual Table -->
                    <table id="individualTable" class="table table-striped bg-light" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Total Distance (KM)</th>
                                <th>Activities</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $item->username }}</td>
                                <td>{{ number_format($item->total_distance ?? 0, 2) }}</td>
                                <td>
                                    <span class="badge bg-primary" title="Number of activities">
                                        {{ $item->activity_count }} activities
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Group Table -->
                    <table id="groupTable" class="table table-striped bg-light" style="width:100%; display: none;">
                        <thead>
                            <tr>
                                <th>Nama Grup</th>
                                <th>Total Members</th>
                                <th>Total Distance (KM)</th>
                                <th>Total Activities</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Team Alpha</td>
                                <td>5</td>
                                <td>245.75</td>
                                <td>
                                    <span class="badge bg-primary" title="Number of activities">
                                        125 activities
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Team Beta</td>
                                <td>4</td>
                                <td>198.30</td>
                                <td>
                                    <span class="badge bg-primary" title="Number of activities">
                                        98 activities
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Team Gamma</td>
                                <td>6</td>
                                <td>312.45</td>
                                <td>
                                    <span class="badge bg-primary" title="Number of activities">
                                        156 activities
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


    </div>

    <script>
        let isIndividual = true;

        function switchTable() {
            const individualTable = document.getElementById('individualTable');
            const groupTable = document.getElementById('groupTable');
            const individualCards = document.getElementById('individualCards');
            const groupCards = document.getElementById('groupCards');
            const button = document.getElementById('switchTableBtn');
            const header = button.closest('.card').querySelector('.card-header h4');

            if (isIndividual) {
                // Switch to Group view
                individualTable.style.display = 'none';
                groupTable.style.display = 'table';
                individualCards.style.display = 'none';
                groupCards.style.display = 'block';
                button.textContent = 'Individu';
                header.textContent = 'Currently Group Selected';
            } else {
                // Switch to Individual view
                individualTable.style.display = 'table';
                groupTable.style.display = 'none';
                individualCards.style.display = 'block';
                groupCards.style.display = 'none';
                button.textContent = 'Group';
                header.textContent = 'Currently Individual Selected';
            }

            isIndividual = !isIndividual;
        }
    </script>

    @endsection
