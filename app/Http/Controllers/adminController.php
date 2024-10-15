<?php

namespace App\Http\Controllers;

use App\Models\Listdaftar;
use App\Models\Quotes;
use App\Models\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class adminController extends Controller
{
    // INDEX
    public function index()
    {
        $data = Listdaftar::get();
        return view('admin.index', compact('data'));
    }

    // CREATE USER
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

        $data = $request->only([
            'id_athlete', 'username', 'firstname', 'lastname', 'refresh_token', 'access_token', 'foto_profil', 'area', 'grup', 'warna', 'tgl_register'
        ]);

        Listdaftar::create($data);

        return redirect()->route('index')->with('success', 'Data Berhasil Ditambahkan');
    }

    // EDIT USER
    public function editusr(Request $request, $id)
    {
        $data = Listdaftar::find($id);
        return view('index', compact('data'));
    }

    // UPDATE USER
    public function updateusr(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_athlete' => 'required|unique:list_daftar,id,' . $id,
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

        $data = $request->only([
            'id_athlete', 'username', 'firstname', 'lastname', 'refresh_token', 'access_token', 'foto_profil', 'area', 'grup', 'warna', 'tgl_register'
        ]);

        Listdaftar::whereId($id)->update($data);

        return redirect()->route('index');
    }

    // DELETE USER
    public function deleteusr(Request $request, $id)
    {
        $datausr = Listdaftar::find($id);

        if (!$datausr) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        $datausr->delete();

        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }

    // QUOTES SECTION
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

        Quotes::create(['quotes' => $request->quotes]);

        return redirect()->route('quotes');
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

        Quotes::whereId($id)->update(['quotes' => $request->quote]);

        return redirect()->route('quotes');
    }

    public function deletequotes(Request $request, $id)
    {
        $quote = Quotes::find($id);

        if (!$quote) {
            return redirect()->back()->with('error', 'Quote tidak ditemukan.');
        }

        $quote->delete();

        return redirect()->back()->with('success', 'Quote berhasil dihapus.');
    }

    // INPUT SECTION
    // Tampilkan halaman input group
    public function inputgroup(): Factory|View
    {
        $data = Input::all();
        return view('admin.input', compact('data'));
    }

    // Tampilkan halaman input yang lain
    public function inputPage(): Factory|View
    {
        $data = Input::all();
        return view('admin.input', compact('data'));
    }

    // Simpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'area' => 'required',
            'grup' => 'required',
        ]);

        Input::create($request->only(['area', 'grup']));

        return redirect()->route('inputgroup')->with('success', 'Data berhasil disimpan!');
    }

    // Tampilkan halaman edit
    public function edit($id)
    {
        $data = Input::findOrFail($id);
        return view('admin.edit', compact('data'));
    }

    // Update data
public function update(Request $request, $id)
{
    $request->validate([
        'area' => 'required',
        'grup' => 'required',
    ]);

    $data = Input::findOrFail($id);
    $data->update($request->only(['area', 'grup']));

    return redirect()->route('inputgroup')->with('success', 'Data berhasil diupdate!');
}

    // Hapus data
    public function destroy($id)
    {
        $data = Input::findOrFail($id);
        $data->delete();

        return redirect()->route('inputgroup')->with('success', 'Data berhasil dihapus!');
    }


    // DATA CHALLENGES
    public function grupchallenges(): Factory|View
    {
        return view('admin.challenges');
    }
}
