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
    public function showForm()
    {
        $options = [
            'Option 1' => 'Pilihan 1',
            'Option 2' => 'Pilihan 2',
            'Option 3' => 'Pilihan 3',
        ];

        return view('select_form', compact('options'));
    }

    private function formatTime($minutes)
    {
        $hours = floor($minutes / 60);
        $remainingMinutes = $minutes % 60;
        return sprintf('%02d:%02d:00', $hours, $remainingMinutes);
    }

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
        $atletId = $request->input('selected_atlet');
        $atlet = Listdaftar::find($atletId);

        if (!$atlet) {
            return redirect('/sertifikat')->with('error', 'Atlet tidak ditemukan.');
        }

        // Get athlete's statistics
        $stats = Datachallenge::where('id_athlete', $atlet->id_athlete)
            ->selectRaw('
                SUM(distance)/1000 as total_distance,
                SUM(kalori) as total_calories,
                COUNT(*) as total_activities,
                SUM(waktu) as total_time
            ')
            ->first();

        $mpdf = new \Mpdf\Mpdf([
            'orientation' => 'L',
            'format' => 'A4',
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_top' => 0,
            'margin_bottom' => 0,
        ]);

        // Background image
        $backgroundImage = public_path('img/template2.png');
        $mpdf->SetDefaultBodyCSS('background', "url('" . $backgroundImage . "')");
        $mpdf->SetDefaultBodyCSS('background-image-resize', 6);

        $stylesheet = '
    body {
        margin: 0;
        padding: 0;
    }
    .certificate-container {
        width: 297mm;
        height: 210mm;
        position: relative;
    }
    .certificate-header {
        position: absolute;
        top: 0;
        width: 100%;
        text-align: center;
        padding-top: 64mm;
    }
    .athlete-name {
        font-family: arial;
        font-size: 48px;
        font-weight: bold;
        color: #ff6b00;
        margin: 0 auto;
        padding: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
        width: 80%;
        margin-bottom: 15mm;
    }
    .stats-row {
        width: 90%;
        margin: 0 auto;
        display: table;
        table-layout: fixed;
    }
    .stat-item {
        display: table-cell;
        text-align: center;
        padding: 0 2mm;
    }
    .stat-value {
        font-family: arial;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 2mm;
    }
    .stat-label {
        font-family: arial;
        font-size: 14px;
        color: #666;
        text-transform: uppercase;
    }
';
        $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

        // Format statistics
        $totalDistance = number_format($stats->total_distance, 1);
        $totalCalories = number_format($stats->total_calories, 0);
        $totalActivities = number_format($stats->total_activities, 0);
        $totalTime = $this->formatTime($stats->total_time);
        $pace = $this->calculatePace($stats->total_distance, $stats->total_time);

        // Content
        $fullName = $atlet->firstname . ' ' . $atlet->lastname;
        $htmlContent = '
    <div class="certificate-container">
        <div class="certificate-header">
            <div class="athlete-name">' . $fullName . '</div>
            <div class="stats-row">
                <div class="stat-item">
                    <div class="stat-value">' . $totalDistance . ' KM</div>
                    <div class="stat-label">Distance</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">' . $totalCalories . '</div>
                    <div class="stat-label">Calories</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">' . $totalActivities . '</div>
                    <div class="stat-label">Activities</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">' . $totalTime . '</div>
                    <div class="stat-label">Time</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">' . $pace . '</div>
                    <div class="stat-label">Pace</div>
                </div>
            </div>
        </div>
    </div>';

        $mpdf->WriteHTML($htmlContent);

        return $mpdf->Output('sertifikat_' . $fullName . '.pdf', 'I');
    }
}
