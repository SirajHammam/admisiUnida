<?php

namespace App\Http\Controllers;

use App\Models\dataKriteria;
use App\Models\patokanBobotSaintek;
use Illuminate\Http\Request;

class DataKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProdi = patokanBobotSaintek::all();
        // $dataProdi = DB::table('patokan_bobot_sainteks')->where('id', '=', '3')->get();

        return view('dataKriteria.index', [
            'title' => 'Data Kriteria',
            'dataProdi' => $dataProdi,

        ]);
    }

    public function prodi($prodi)
    {
        // if ($prodi == 'ti') {
        //     $title = 'Teknik Informatika';
        // } elseif ($prodi == 'tip') {
        //     $title = 'Teknik Industri Pertanian';
        // } elseif ($prodi == 'agro') {
        //     $title = 'Agroteknologi';
        // } elseif ($prodi == 'hi') {
        //     $title = 'Hubungan Internasional';
        // } elseif ($prodi == 'ilkom') {
        //     $title = 'Ilmu Komunikasi';
        // }

        // $dataProdi = DB::table('patokan_bobot_sainteks')->where('id', '=', '3')->get();

        // return view('SubMenu.data_kriteria', [
        //     'title' => $title,
        //     'dataProdi' => $dataProdi,
        //     'prodi' => $prodi,

        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataKriteria.tambahData', [
            'title' => 'Input Kriteria'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newKriteria = $request->validate([
            'prodi' => 'required',
            'matematika' => 'required',
            'fisika' => 'required',
            'kimia' => 'required',
            'biologi' => 'required',
            'kesanggupan' => 'required',
            'pilihan' => 'required',
            'inggris' => 'required',
            'ujian_lisan' => 'required',
            'arab' => 'required',
            'pemikiran' => 'required',
            'pendanaan' => 'required',
            'pendidikan_terakhir' => 'required',
            'penghasilan' => 'required',
        ]);

        patokanBobotSaintek::create($newKriteria);
        return redirect('/data-kriteria')->with('success', 'Data Berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function show(dataKriteria $dataKriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKriteria $dataKriteria, $id)
    {
        $nilaiKriteria = patokanBobotSaintek::where('id', $id)->first();
        return view('dataKriteria.edit', [
            'title' => 'Ubah Nilai Kriteria',
            'nilaiKriteria' => $nilaiKriteria
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataKriteria $dataKriteria, $id)
    {
        $validatedData = $request->validate([
            'matematika' => 'required|between:1,5',
            'fisika' => 'required|between:1,5',
            'kimia' => 'required|between:1,5',
            'biologi' => 'required|between:1,5',
            'kesanggupan' => 'required|between:1,5',
            'pilihan' => 'required|between:1,5',
            'inggris' => 'required|between:1,5',
            'ujian_lisan' => 'required|between:1,5',
            'arab' => 'required|between:1,5',
            'pemikiran' => 'required|between:1,5',
            'pendanaan' => 'required|between:1,5',
            'pendidikan_terakhir' => 'required|between:1,5',
            'penghasilan' => 'required|between:1,5',
        ]);

        $nilaiKriteria = patokanBobotSaintek::findOrFail($id);
        $nilaiKriteria->update($validatedData);
        return redirect('/data-kriteria')->with('success', 'Nilai pembobotan kriteria telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKriteria $dataKriteria)
    {
        //
    }
}
