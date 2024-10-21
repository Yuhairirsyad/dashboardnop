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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
            background-image: url('img/garis.jpg');
            background-size: cover;
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>
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
            <a href="#" class="nav_link">
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
    </div>

    {{-- Kategori Personal --}}
    <div class="row mb-5">
        <div class="col-12 col-xl-8">
            <div class="card" style="box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); border-radius: 15px;">
                <div class="card-header mb-3 text-center">
                    <div class="row text-center justify-content-center mb-4">
                        <div class="col-md-2 col-8">
                            <span style="font-weight: bold; color: #007BFF;">Fastest</span>
                        </div>
                        <div class="col-md-2 col-8">
                            <span style="font-weight: bold; color: #28A745;">Kilometer</span>
                        </div>
                        <div class="col-md-2 col-8">
                            <span style="font-weight: bold; color: #DC3545;">Durable</span>
                        </div>
                        <div class="col-md-2 col-8">
                            <span style="font-weight: bold; color: #9b59b6;">Active</span>
                        </div>
                        <div class="col-md-2 col-8">
                            <span style="font-weight: bold; color: #17A2B8;">Kalori</span>
                        </div>
                    </div>

                    <div class="row text-center justify-content-center mb-4">
                        <div class="col-md-2 col-8">
                            <a><img src="img/gambarmedal.png" alt="" width="60"
                                    style="border-radius: 50%; transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
                        </div>
                        <div class="col-md-2 col-8">
                            <a><img src="img/gambarmedal.png" alt="" width="60"
                                    style="border-radius: 50%; transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
                        </div>
                        <div class="col-md-2 col-8">
                            <a><img src="img/gambarmedal.png" alt="" width="60"
                                    style="border-radius: 50%; transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
                        </div>
                        <div class="col-md-2 col-8">
                            <a><img src="img/gambarmedal.png" alt="" width="60"
                                    style="border-radius: 50%; transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
                        </div>
                        <div class="col-md-2 col-8">
                            <a><img src="img/gambarmedal.png" alt="" width="60"
                                    style="border-radius: 50%; transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
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
                            <div class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                <div class="podium shadow-sm p-3"
                                    style="height: 150px; background: linear-gradient(to top, #007BFF, #00D2FF); border-radius: 10px;">
                                    <h5 class="font-weight-bold text-white">
                                        <i class="fas fa-trophy"></i> 1st Place
                                    </h5>
                                    <p class="text-white">Name 1</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                <div class="podium shadow-sm p-3"
                                    style="height: 150px; background: linear-gradient(to top, #28A745, #63c296); border-radius: 10px;">
                                    <h5 class="font-weight-bold text-white">
                                        <i class="fas fa-trophy"></i> 1st Place
                                    </h5>
                                    <p class="text-white">Name 2</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                <div class="podium shadow-sm p-3"
                                    style="height: 150px; background: linear-gradient(to top, #DC3545, #FF6F71); border-radius: 10px;">
                                    <h5 class="font-weight-bold text-white">
                                        <i class="fas fa-trophy"></i> 1st Place
                                    </h5>
                                    <p class="text-white">Name 3</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                <div class="podium shadow-sm p-3"
                                    style="height: 150px; background: linear-gradient(to top, #8931ac, #b881ce); border-radius: 10px;">
                                    <h5 class="font-weight-bold text-white">
                                        <i class="fas fa-trophy"></i> 1st Place
                                    </h5>
                                    <p class="text-white">Name 4</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                <div class="podium shadow-sm p-3"
                                    style="height: 150px; background: linear-gradient(to top, #17A2B8, #73c0df); border-radius: 10px;">
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

    {{-- Kategori Grup --}}
    <div class="row mt-5">
        <div class="col-12 col-xl-8">
            <div class="card" style="box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); border-radius: 15px;">
                <div class="card-header mb-3 text-center">
                    <div class="row text-center justify-content-center mb-4">
                        <div class="col-md-3 col-8">
                            <span style="font-weight: bold; color: #28A745;">Kilometer</span>
                        </div>
                        <div class="col-md-3 col-8">
                            <span style="font-weight: bold; color: #9b59b6;">Active</span>
                        </div>
                    </div>

                    <div class="row text-center justify-content-center mb-4">
                        <div class="col-md-3 col-8">
                            <a><img src="img/gambarmedal.png" alt="" width="60"
                                    style="border-radius: 50%; transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
                        </div>
                        <div class="col-md-3 col-8">
                            <a><img src="img/gambarmedal.png" alt="" width="60"
                                    style="border-radius: 50%; transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
                        </div>
                    </div>

                    <hr style="border-top: 2px solid #333; width: 80%; margin: 20px auto;">

                    <h2 align="center" style="color:#1fc5c5; font-size: 18px; font-weight: bold;">
                        Winners from Group each category
                    </h2>
                </div>

                <div class="card-body">
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            <div class="col-md-3 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                <div class="podium shadow-sm p-3"
                                    style="height: 150px; background: linear-gradient(to top, #28A745, #63c296); border-radius: 10px;">
                                    <h5 class="font-weight-bold text-white">
                                        <i class="fas fa-trophy"></i> 1st Place
                                    </h5>
                                    <p class="text-white">Name 2</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-8 d-flex flex-column align-items-center justify-content-end mb-4">
                                <div class="podium shadow-sm p-3"
                                    style="height: 150px; background: linear-gradient(to top, #8931ac, #b881ce); border-radius: 10px;">
                                    <h5 class="font-weight-bold text-white">
                                        <i class="fas fa-trophy"></i> 1st Place
                                    </h5>
                                    <p class="text-white">Name 4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            let clock;
            let currentDate = new Date();
            let targetDate = new Date("2024-12-31T23:59:59");

            let diff = Math.max((targetDate.getTime() - currentDate.getTime()) / 1000, 0);

            clock = $(".clock").FlipClock(diff, {
                clockFace: "DailyCounter",
                countdown: true,
                callbacks: {
                    stop: function() {
                        console.log("Timer has ended!");
                        alert("The countdown has ended.");
                    }
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function(event) {
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
