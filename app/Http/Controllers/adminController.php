<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function  index(){
        return view('admin.index');
    }

    public function quotes(){
        return view('admin.quotes');
    }


    public function inputgroup(){
        return view('admin.input');
}
    
    public function grouping(){
        return view('admin.grouping');
    }

      /**
     * Ekspor data pengguna ke Excel.
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    // public function exportUsers()
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }
}
