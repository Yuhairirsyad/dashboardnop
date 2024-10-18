@extends('user')
@section('user')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Countdown Timer</title>
        <style>
            .body {
                background-color: #bebfbf;
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

            .marquee-container {
                text-align: center;
                margin-top: 20px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <body>
        {{-- ATAS --}}
        <h2 align="center" style="margin: 10px;padding-bottom: 5px;">Q4 2024 T-Flyers Jateng DIY</h2>
        <h4 align="center" class="mb-5" style="padding-top: 0px;padding-bottom: 15px;color:#bebfbf;font-size:12px;">
            Start At: 01 Oktober 2024 | 00:00 - End At: 31 Desember 2024 | 23:59
        </h4>
        <div class="clock mt-5 d-flex justify-content-center"></div>
        <div class="marquee-container">
            <marquee width="425" scrollamount="1000" scrolldelay="11000" class="justify-content-center">
                <h5 style="color:darkseagreen;" class="justify-content-center"><i>Update Data Every 09:00 Pagi dan 21:00 Malam</i></h5>
            </marquee>
        </div>


        {{-- Marquee BAWAH --}}
        <h1>Halo</h1>        

        <script>
            jQuery(document).ready(function($) {
                let clock;
                let currentDate = new Date(); // Waktu saat ini
                let targetDate = new Date("2024-10-31T23:59:59"); // Tentukan target tanggal berakhirnya

                // Hitung selisih waktu antara tanggal sekarang dan target dalam detik
                let diff = (targetDate.getTime() - currentDate.getTime()) / 1000;

                // Cek apakah waktu target sudah lewat
                if (diff <= 0) {
                    clock = $(".clock").FlipClock(0, {
                        clockFace: "DailyCounter",
                        countdown: true,
                        autostart: false
                    });
                    console.log("Date has already passed!");
                } else {
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
                }
            });
        </script>
    </body>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>

    </html>
@endsection
