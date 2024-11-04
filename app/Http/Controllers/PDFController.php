<?php

namespace App\Http\Controllers;

use App\Models\Datachallenge;
use App\Models\Listdaftar;
use App\Models\Quotes;
use App\Models\Input;
use App\Models\GrupChallenges;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mpdf\Mpdf;

class PDFController extends Controller
{
    // Helper method to format time from minutes to HH:MM:SS
    private function formatTime($minutes)
    {
        $hours = floor($minutes / 60);
        $remainingMinutes = $minutes % 60;
        return sprintf('%02d:%02d:00', $hours, $remainingMinutes);
    }

    // Helper method to calculate pace in minutes per kilometer
    private function calculatePace($totalDistance, $totalMinutes)
    {
        if ($totalDistance <= 0) return "00:00";
        $minutesPerKm = $totalMinutes / $totalDistance;
        $paceMinutes = floor($minutesPerKm);
        $paceSeconds = floor(($minutesPerKm - $paceMinutes) * 60);
        return sprintf('%02d:%02d', $paceMinutes, $paceSeconds);
    }

    public function generatePDF(Request $request)
    {
        // Find athlete data
        $atletId = $request->input('selected_atlet');
        $atlet = Listdaftar::find($atletId);

        if (!$atlet) {
            return redirect('/sertifikat')->with('error', 'Atlet tidak ditemukan.');
        }

        // Calculate athlete statistics
        $stats = Datachallenge::where('id_athlete', $atlet->id_athlete)
            ->selectRaw('
                SUM(distance)/1000 as total_distance,
                SUM(kalori) as total_calories,
                COUNT(*) as total_activities,
                SUM(waktu) as total_time
            ')
            ->first();

        // Initialize MPDF with landscape A4 settings
        $mpdf = new \Mpdf\Mpdf([
            'orientation' => 'L',
            'format' => 'A4',
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_top' => 0,
            'margin_bottom' => 0,
        ]);

        // Set background image
        $backgroundImage = public_path('img/template2.png');
        $mpdf->SetDefaultBodyCSS('background', "url('" . $backgroundImage . "')");
        $mpdf->SetDefaultBodyCSS('background-image-resize', 6);

        // CSS Stylesheet definition
        $stylesheet = '
            /* Base container styles */
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            /* Main certificate container - adjusted position downward */
.certificate-container {
    position: absolute;
    top: 43%;
    left: 10%;
    transform: translate(-50%, -50%);
    width: 80%; /* Adjust width as needed */
    text-align: center;
}


            /* Athlete name styling - main focus point */
            .athlete-name {
                position: absolute;
                top: 80mm;
                width: 100%;
                text-align: center;
                font-size: 48px;
                font-weight: bold;
                color: #ff8f00;
                text-transform: uppercase;
            }

            /* Statistics container */
            .stats-container {
                position: absolute;
                top: 110mm;
                width: 100%;
                text-align: center;
            }

            /* Statistics row layout */
            .stats-row {
                display: inline-block;
                margin: 0 auto;
                text-align: center;
                width: 80%;
            }

            /* Individual stat item styling */
            .stat-item {
                display: inline-block;
                margin: 0 15px;
                font-size: 14px;
            }

            /* Rank position styling */
            .rank {
                position: absolute;
                top: 130mm;
                width: 100%;
                text-align: center;
                font-size: 14px;
            }
        ';

        $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

        // Format the statistics
        $totalDistance = number_format($stats->total_distance, 1);
        $totalCalories = number_format($stats->total_calories, 0);
        $totalActivities = number_format($stats->total_activities, 0);
        $totalTime = $this->formatTime($stats->total_time);
        $pace = $this->calculatePace($stats->total_distance, $stats->total_time);

        // Combine first and last name
        $fullName = $atlet->firstname . ' ' . $atlet->lastname;

        // HTML Certificate Structure
        $htmlContent = '
            <div class="certificate-container">

                <div class="athlete-name">' . $fullName . '</div>

                <!-- Statistics section -->
                <div class="stats-container">
                    <!-- First row of stats -->
                    <div class="stats-row">
                        <span class="stat-item">Distance : ' . $totalDistance . ' Km</span>
                        <span class="stat-item">Calories : ' . $totalCalories . ' Cal</span>
                        <span class="stat-item">Activities : ' . $totalActivities . '</span>
                    </div>
                    <!-- Second row of stats -->
                    <div class="stats-row" style="margin-top: 10px;">
                        <span class="stat-item">Time : ' . $totalTime . '</span>
                        <span class="stat-item">Pace : ' . $pace . ' min/km</span>
                    </div>
                </div>

                <!-- Rank display -->
                <div class="rank">Rank : N/A</div>
            </div>';

        $mpdf->WriteHTML($htmlContent);

        // Output the PDF
        return $mpdf->Output('sertifikat_' . $fullName . '.pdf', 'I');
    }
}
