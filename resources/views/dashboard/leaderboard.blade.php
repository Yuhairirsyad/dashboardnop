<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>
        :root {
            --header-height: 3rem;
            --nav-width: 68px;
            --first-color: #4723D9;
            --first-color-light: #AFA5D9;
            --white-color: #F7F6FB;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }

        * {
            box-sizing: border-box;
        }

        body {
            background-image: url('img/bg3.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s;
        }

        a {
            text-decoration: none;
        }

        .header {
            width: 100%;
            height: 10%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: transparent;
            z-index: var(--z-fixed);
            transition: .5s;
        }

        .clock {
            width: 650px;
            position: relative;
            top: 35%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            zoom: 0.5;
            -moz-transform: scale(0.5);
        }

        .flip-clock-label {
            color: rgb(0, 0, 0) !important;
            font-size: 24px !important;
            padding-left: 20px !important;
        }

        .flip-clock-dot {
            background: #fff;
        }

        .time-labels {
            text-align: center;
            margin-top: 10px;
            font-size: 20px;
            font-weight: bold;
            color: rgb(255, 255, 255);
        }

        .time-labels span {
            margin: 0 5px;
        }


        .avatar img {
            border-radius: 50%;
            width: 35px;
            height: 35px;
            object-fit: cover;
        }

        .header_toggle {
            color: #31363F;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .header_img {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden;
        }

        .header_img img {
            width: 40px;
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: #31363F;
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed);
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem;
        }

        .nav_logo {
            margin-bottom: 2rem;
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--white-color);
        }

        .nav_logo-name {
            color: var(--white-color);
            font-weight: 700;
        }

        .nav_link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s;
        }

        .nav_link:hover {
            color: var(--white-color);
        }

        .nav_icon {
            font-size: 1.25rem;
        }

        .show {
            left: 0;
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem);
        }

        .active {
            color: var(--white-color);
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color);
        }

        .height-100 {
            height: 100vh;
        }

        .podium {
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .podium:hover {
            transform: translateY(-10px);
        }

        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem);
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
            }

            .header_img {
                width: 40px;
                height: 40px;
            }

            .header_img img {
                width: 45px;
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0;
            }

            .show {
                width: calc(var(--nav-width) + 156px);
            }

            .body-pd {
                padding-left: calc(var(--nav-width) + 188px);
            }
        }
    </style>

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <div class="header_img">
            <img src="https://i.imgur.com/hczKIze.jpg" alt="">
        </div>
        <!-- <div class="user-menu d-flex align-items-center">
            <div class="user-img d-flex align-items-center me-2">
                <div class="avatar avatar-md">
                    <img src="assets/images/faces/2.jpg" width="40" class="rounded-circle" alt="User Avatar">
                </div>
            </div>
            <div class="user-name text-end me-3">
                <a href="login" class="mt-3 text-muted text-decoration-none hover:text-primary">Login</a>
            </div>
        </div> -->
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <img src="img/logotelkomsel.png" alt="" width="25">
                    <span class="nav_logo-name">Telkomsel</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
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
                    <a href="#" class="nav_link">
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

    <!-- Container Main start -->
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
                                        <span style="font-weight: bold; color: #000000;">Fastest</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Kilometer</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Durable</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Active</span>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <span style="font-weight: bold; color: #000000;">Kalori</span>
                                    </div>
                                </div>
                                <!-- Medals Images -->
                                <div class="row text-center justify-content-center mb-4">
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <a><img src="img/gambarmedal.png" alt="" width="60"
                                                style="border-radius: 50%;"></a>
                                    </div>
                                </div>

                                <hr style="border-top: 2px solid #333; width: 80%; margin: 20px auto;">

                                <h2 align="center" style="color:#1fc5c5; font-size: 18px; font-weight: bold;">
                                    Winners from each category
                                </h2>
                            </div>

                            <div class="card-body">
                                <div class="container">
                                    <div class="row text-center justify-content-center">
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background:#435ebe; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 1</p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background: #198754; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 2</p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background: #dc3545; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 3</p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background: #8E24AA; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 4</p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                            <div class="podium shadow-sm p-3"
                                                style="height: 150px; background: #6c757d; border-radius: 10px;">
                                                <h5 class="font-weight-bold text-white">
                                                    <i class="fas fa-trophy"></i> 1st Place
                                                </h5>
                                                <p class="text-white">Name 5</p>
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

                    <table id="example" class="table table-striped bg-light" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009-01-12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012-03-29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008-11-28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012-12-02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012-08-06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010-10-14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009-09-15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008-12-13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008-12-19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013-03-03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008-10-16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012-12-18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010-03-17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012-11-27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010-06-09</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009-04-10</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012-10-13</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012-09-26</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011-09-03</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009-06-25</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011-12-12</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sydney</td>
                                <td>23</td>
                                <td>2010-09-20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009-10-09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010-12-22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010-11-14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011-06-07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010-03-11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011-08-14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sydney</td>
                                <td>37</td>
                                <td>2011-06-02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009-10-22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011-05-07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008-10-26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011-03-09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009-12-09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008-12-16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010-02-12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009-02-14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008-12-11</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008-09-26</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011-02-03</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011-05-03</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009-08-19</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013-08-11</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009-07-07</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012-04-09</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010-01-04</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012-06-01</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013-02-01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011-12-06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011-03-21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009-02-27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010-07-14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008-11-13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011-06-27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011-01-25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>


    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>
    <script>
        $(document).ready(function () {
            let clock;
            let currentDate = new Date();
            let targetDate = new Date("2024-12-31T23:59:59");
            let diff = Math.max((targetDate.getTime() - currentDate.getTime()) / 1000, 0);

            clock = $(".clock").FlipClock(diff, {
                clockFace: "DailyCounter",
                countdown: true,
                callbacks: {
                    stop: function () {
                        console.log("Timer has ended!");
                        alert("The countdown has ended.");
                    }
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function (event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    body = document.getElementById(bodyId),
                    header = document.getElementById(headerId);
                if (toggle && nav && body && header) {
                    toggle.addEventListener('click', () => {
                        nav.classList.toggle('show');
                        body.classList.toggle('body-pd');
                        header.classList.toggle('body-pd');
                    });
                }
            }
            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>