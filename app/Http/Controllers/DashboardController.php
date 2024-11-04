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

class DashboardController extends Controller
{
    public function dashgrub(){
        $data = DB::table('list_daftar')
            ->leftJoin('data_challenges', 'list_daftar.id_athlete', '=', 'data_challenges.id_athlete')
            ->select(
                'list_daftar.username',
                DB::raw('SUM(data_challenges.distance) / 1000 as total_distance'), // Convert to kilometers
                DB::raw('COUNT(data_challenges.id) as activity_count')
            )
            ->groupBy('list_daftar.username')
            ->orderByDesc('total_distance')
            ->get();

        return view('dashgrub', compact('data'));

    }

    public function sertifikat(){
        $data = listdaftar::all();
        return view('dashboard.sertifikat', compact('data'));
    }

    public function leader()
    {
        // Mengambil satu kutipan secara acak
        $quote = Quotes::inRandomOrder()->first();

        // Calculate metrics for each category
        $metrics = [
            'fastest' => DB::table('data_challenges')
            ->join('list_daftar', 'data_challenges.id_athlete', '=', 'list_daftar.id_athlete')
            ->select(
                'list_daftar.username',
                DB::raw('(SUM(distance) / (SUM(waktu) / 60)/60) as speed')
            )
                ->groupBy('list_daftar.username')
                ->orderByDesc('speed')
                ->first(),

            'kilometer' => DB::table('data_challenges')
            ->join('list_daftar', 'data_challenges.id_athlete', '=', 'list_daftar.id_athlete')
            ->select(
                'list_daftar.username',
                DB::raw('SUM(distance) / 1000 as total_distance')
            )
                ->groupBy('list_daftar.username')
                ->orderByDesc('total_distance')
                ->first(),

            'durable' => DB::table('data_challenges')
            ->join('list_daftar', 'data_challenges.id_athlete', '=', 'list_daftar.id_athlete')
            ->select(
                'list_daftar.username',
                DB::raw('SUM(waktu) / 3600 as total_hours')
            )
                ->groupBy('list_daftar.username')
                ->orderByDesc('total_hours')
                ->first(),

            'active' => DB::table('data_challenges')
            ->join('list_daftar', 'data_challenges.id_athlete', '=', 'list_daftar.id_athlete')
            ->select(
                'list_daftar.username',
                DB::raw('COUNT(*) as activity_count')
            )
                ->groupBy('list_daftar.username')
                ->orderByDesc('activity_count')
                ->first(),

            'calories' => DB::table('data_challenges')
                ->join('list_daftar', 'data_challenges.id_athlete', '=', 'list_daftar.id_athlete')
                ->select(
                    'list_daftar.username',
                    DB::raw('SUM(kalori) as total_calories')
                )
                ->where('kalori', '>', 0)
                ->groupBy('list_daftar.username')
                ->orderByDesc('total_calories')
                ->first(),

        ];

        // In DashboardController.php, modify the $data query:
        $data = DB::table('list_daftar')
        ->leftJoin('data_challenges', 'list_daftar.id_athlete', '=', 'data_challenges.id_athlete')
        ->select(
            'list_daftar.username',
            DB::raw('SUM(data_challenges.distance) / 1000 as total_distance'), // Convert to kilometers
            DB::raw('COUNT(data_challenges.id) as activity_count')
        )
        ->groupBy('list_daftar.username')
        ->orderByDesc('total_distance')
        ->get();


        return view('dashboard.content', compact('quote', 'data', 'metrics'));
    }

    



}
