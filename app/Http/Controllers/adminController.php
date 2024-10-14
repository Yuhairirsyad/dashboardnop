<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Listdaftar;
use App\Models\Quotes;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{

    // INDEX
    public function index()
    {
        $data = Listdaftar::get();
        return view('admin.index', compact('data'));
    }

    public function crtuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_athlete' => 'required|unique:list_daftar',
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'refresh_token' => 'required',
            'access_token' => 'required',
            'foto_profil' => 'required',
            'area' => 'nullable',
            'grup' => 'nullable',
            'warna' => 'required',
            'tgl_register' => 'required',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        $data['id_athlete'] = $request->id_athlete;
        $data['username'] = $request->username;
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['refresh_token'] = $request->refresh_token;
        $data['access_token'] = $request->access_token;
        $data['foto_profil'] = $request->foto_profil;
        if ($request->area) {
            $data['area'] = $request->area;
        }

        if ($request->grup) {
            $data['grup'] = $request->grup;
        }
        $data['warna'] = $request->warna;
        $data['tgl_register'] = $request->tgl_register;

        Listdaftar::create($data);
        return redirect()->route('index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function editusr(Request $request, $id)
    {
        $data = Listdaftar::find($id);
        return view('index', compact('data'));
    }

    public function updateusr(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_athlete' => 'required|unique:list_daftar,id_athlete,' . $id,
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'refresh_token' => 'required',
            'access_token' => 'required',
            'foto_profil' => 'required',
            'area' => 'nullable',
            'grup' => 'nullable',
            'warna' => 'required',
            'tgl_register' => 'required',
        ]);


        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        $data['id_athlete'] = $request->id_athlete;
        $data['username'] = $request->username;
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['refresh_token'] = $request->refresh_token;
        $data['access_token'] = $request->access_token;
        $data['foto_profil'] = $request->foto_profil;
        if ($request->area) {
            $data['area'] = $request->area;
        }

        if ($request->grup) {
            $data['grup'] = $request->grup;
        }
        $data['warna'] = $request->warna;
        $data['tgl_register'] = $request->tgl_register;

        Listdaftar::whereId($id)->update($data);

        return redirect()->route('index')->with('updusr', 'Data berhasil diperbarui');
    }

    public function deleteusr(Request $request, $id)
    {
        $datausr = Listdaftar::find($id);

        if (!$datausr) {
            return redirect()->back()->with('error', 'data tidak ditemukan.');
        }

        $datausr->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    // END INDEX

    // QUOTES
    public function quotes()
    {
        $data = Quotes::get();
        return view('admin.quotes', compact('data'));
    }

    public function crtquotes(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'quotes' => 'required',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        $data['quotes'] = $request->quotes;

        Quotes::create($data);

        return redirect()->route('quotes')->with('successqts', 'Quote  berhasil dibuat');
    }

    public function editqts(Request $request, $id)
    {
        $data = Quotes::find($id);
        return view('quotes', compact('data'));
    }


    public function updateqts(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quote' => 'required',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        $data['quotes'] = $request->quote;

        Quotes::whereId($id)->update($data);

        return redirect()->route('quotes')->with('edtscss', 'Quote berhasil diperbarui');
    }

    public function deletequotes(Request $request, $id)
    {
        $quote = Quotes::find($id);

        if (!$quote) {
            return redirect()->back()->with('error', 'Quote tidak ditemukan.');
        }

        $quote->delete();

        return redirect()->back()->with('dltquts', 'Quote berhasil dihapus.');
    }

    // END QUOTES




    public function inputgroup()
    {
        return view('admin.input');
    }

    public function grouping()
    {
        return view('admin.grouping');
    }
}
