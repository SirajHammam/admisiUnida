<?php

namespace App\Http\Controllers;

use App\Models\agro;
use App\Models\camaba;
use App\Models\dataMahasiswa;
use App\Models\patokanBobotSaintek;
use App\Models\periode;
use App\Models\saintek;
use App\Models\ti;
use App\Models\tip;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = patokanBobotSaintek::all();
        return view('dataMhs.index', [
            'title' => 'Data Mahasiswa',
            'kriteria' => $kriteria,
        ]);
    }

    public function prodi($id)
    {
        if ($id == '1') {
            $title = 'Teknik Informatika';
            $prodi_id = $id;
            $dataMahasiswa = DB::table('camabas')
                ->join('tis', 'tis.camaba_id', '=', 'camabas.id')
                ->where('camabas.prodi1', 'ti')
                ->orWhere('camabas.prodi2', 'ti')
                ->orWhere('camabas.prodi3', 'ti')
                ->get();
        } elseif ($id == '2') {
            $title = 'Teknologi Industri Pertanian';
            $prodi_id = $id;
            $dataMahasiswa = DB::table('camabas')
                ->join('tips', 'tips.camaba_id', '=', 'camabas.id')
                ->where('camabas.prodi1', 'tip')
                ->orWhere('camabas.prodi2', 'tip')
                ->orWhere('camabas.prodi3', 'tip')
                ->get();
        } elseif ($id == '3') {
            $title = 'Agroteknologi';
            $prodi_id = $id;
            $dataMahasiswa = DB::table('camabas')
                ->join('agros', 'agros.camaba_id', '=', 'camabas.id')
                ->where('camabas.prodi1', 'agro')
                ->orWhere('camabas.prodi2', 'agro')
                ->orWhere('camabas.prodi3', 'agro')
                ->get();
        }

        return view('dataMhs.dataMhs', [
            'title' => $title,
            'dataMahasiswa' => $dataMahasiswa,
            'prodi_id' => $prodi_id,
            'idProdi' => $id,
        ]);
    }

    public function read($prodi_id, $id)
    {
        $data = [];

        if ($prodi_id == 1) {
            $data = ti::where('camaba_id', $id)->get();
            $data2 = camaba::where('id', $id)->get();
        } elseif ($prodi_id == 2) {
            $data = tip::where('camaba_id', $id)->get();
            $data2 = camaba::where('id', $id)->get();
        } elseif ($prodi_id == 3) {
            $data = agro::where('camaba_id', $id)->get();
            $data2 = camaba::where('id', $id)->get();
        }



        return view('dataMhs.readData', [
            'title' => 'Data Mahasiswa',
            'nilai' => $data,
            'nilai2' => $data2,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataMhs.tambahData', [
            'title' => 'Input Data'
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
        $camaba_id = count(camaba::all()) + 1;
        $icamaba = $request->validate([
            'nama' => 'required',
            'prodi1' => 'required',
            'prodi2' => 'required',
            'prodi3' => 'required'
        ]);

        $isaintek = $request->validate([
            'matematika' => 'required',
            'fisika' => 'required',
            'kimia' => 'required',
            'biologi' => 'required',
            'kesanggupan' => 'required',
            'inggris' => 'required',
            'ujian_lisan' => 'required',
            'arab' => 'required',
            'pemikiran' => 'required',
            'pendanaan' => 'required',
            'pendidikan_terakhir' => 'required',
            'penghasilan' => 'required',
        ]);

        $isaintek['camaba_id'] = $camaba_id;
        $icamaba['periode'] = 0;

        if ($request['prodi1'] == 'ti') {
            $iti = $isaintek;
            $iti['pilihan'] = 5;
            $iti['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iti['periode'] = $key['periode'];
            }
            ti::create($iti);
        } elseif ($request['prodi2'] == 'ti') {
            $iti = $isaintek;
            $iti['pilihan'] = 3;
            $iti['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iti['periode'] = $key['periode'];
            }
            ti::create($iti);
        } elseif ($request['prodi3'] == 'ti') {
            $iti = $isaintek;
            $iti['pilihan'] = 2;
            $iti['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iti['periode'] = $key['periode'];
            }
            ti::create($iti);
        }

        if ($request['prodi1'] == 'tip') {
            $itip = $isaintek;
            $itip['pilihan'] = 5;
            $itip['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $itip['periode'] = $key['periode'];
            }
            tip::create($itip);
        } elseif ($request['prodi2'] == 'tip') {
            $itip = $isaintek;
            $itip['pilihan'] = 3;
            $itip['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $itip['periode'] = $key['periode'];
            }
            tip::create($itip);
        } elseif ($request['prodi3'] == 'tip') {
            $itip = $isaintek;
            $itip['pilihan'] = 2;
            $itip['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $itip['periode'] = $key['periode'];
            }
            tip::create($itip);
        }

        if ($request['prodi1'] == 'agro') {
            $iagro = $isaintek;
            $iagro['pilihan'] = 5;
            $iagro['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iagro['periode'] = $key['periode'];
            }
            agro::create($iagro);
        } elseif ($request['prodi2'] == 'agro') {
            $iagro = $isaintek;
            $iagro['pilihan'] = 3;
            $iagro['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iagro['periode'] = $key['periode'];
            }
            agro::create($iagro);
        } elseif ($request['prodi3'] == 'agro') {
            $iagro = $isaintek;
            $iagro['pilihan'] = 2;
            $iagro['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iagro['periode'] = $key['periode'];
            }
            agro::create($iagro);
        }

        $icamaba['periode'] = 0;
        $c = periode::where('status', 'aktif')->first();
        $icamaba['periode'] = $c['periode'];

        if ($request['prodi1'] == 'ti' && $request['prodi2'] == 'ti' && $request['prodi3'] == 'ti' && $request['prodi1'] == 'tip' && $request['prodi2'] == 'tip' && $request['prodi3'] == 'tip' && $request['prodi1'] == 'agro' && $request['prodi2'] == 'agro' && $request['prodi3'] == 'agro') {
            camaba::create($icamaba);
        }

        return redirect('/data-mahasiswa')->with('success', 'Data Berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(dataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(dataMahasiswa $dataMahasiswa, $prodi_id, $id)
    {
        $data = [];

        if ($prodi_id == 1) {
            $data = ti::where('camaba_id', $id)->get();
            $data2 = camaba::where('id', $id)->get();
        } elseif ($prodi_id == 2) {
            $data = tip::where('camaba_id', $id)->get();
            $data2 = camaba::where('id', $id)->get();
        } elseif ($prodi_id == 3) {
            $data = agro::where('camaba_id', $id)->get();
            $data2 = camaba::where('id', $id)->get();
        }



        return view('dataMhs.editData', [
            'title' => 'Data Mahasiswa',
            'nilai' => $data,
            'nilai2' => $data2,
            'idProdi' => $prodi_id,
            'id' => $id,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataMahasiswa $dataMahasiswa, $idProdi, $id)
    {
        // $icamaba = $request->validate([
        //     'nama' => 'required',
        //     'prodi1' => 'required',
        //     'prodi2' => 'required',
        //     'prodi3' => 'required'
        // ]);

        $isaintek = $request->validate([
            'matematika' => 'required',
            'fisika' => 'required',
            'kimia' => 'required',
            'biologi' => 'required',
            'kesanggupan' => 'required',
            'inggris' => 'required',
            'ujian_lisan' => 'required',
            'arab' => 'required',
            'pemikiran' => 'required',
            'pendanaan' => 'required',
            'pendidikan_terakhir' => 'required',
            'penghasilan' => 'required',
        ]);

        if ($idProdi == 1) {
            $editData = ti::where('camaba_id', $id)->first();
            $editData->update($isaintek);
        } elseif ($idProdi == 2) {
            $editData = tip::where('camaba_id', $id)->first();
            $editData->update($isaintek);
        } elseif ($idProdi == 3) {
            $editData = agro::where('camaba_id', $id)->first();
            $editData->update($isaintek);
        }
        // $updateData = camaba::findOrFail($id);
        // $updateData->update($icamaba);

        return redirect('/data-mahasiswa')->with('success', 'Data calon mahasiswa berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataMahasiswa $dataMahasiswa, $idProdi, $id)
    {
        $hapusProdi = [];
        if ($idProdi == 1) {
            $hapusProdi = ti::where('id', $id)->first();
        } elseif ($idProdi == 2) {
            $hapusProdi = tip::where('id', $id)->first();
        } elseif ($idProdi == 3) {
            $hapusProdi = agro::where('id', $id)->first();
        }
        $hapusProdi->delete();
        return redirect('/data-mahasiswa')->with('success', 'Data calon mahasiswa berhasil dihapus');
    }



    // CODINGAN TAK TERPAKAI

    public function perperiode($prodi)
    {
        $periodes = periode::all();
        return view('dataMhs.perperiode', [
            'periodes' => $periodes,
            'prodi' => $prodi,
            'title' => 'Periode'
        ]);
    }

    public function perperiodeperprodi($periode, $prodi)
    {
        if ($prodi == 'ti') {
            $title = 'Teknik Informatika';
            $data = camaba::Where(function ($query) use ($periode) {
                $query->where("periode", $periode);
            })
                ->Where(function ($query) {
                    $query->where('prodi1', '=', 'ti')
                        ->orWhere('prodi2', '=', 'ti')
                        ->orWhere('prodi3', '=', 'ti');
                })
                ->get();
        } elseif ($prodi == 'tip') {
            $title = 'Teknik Industri Pertanian';
            $data = camaba::Where(function ($query) use ($periode) {
                $query->where("periode", $periode);
            })
                ->Where(function ($query) {
                    $query->where('prodi1', '=', 'tip')
                        ->orWhere('prodi2', '=', 'tip')
                        ->orWhere('prodi3', '=', 'tip');
                })
                ->get();
        } elseif ($prodi == 'agro') {
            $title = 'Agroteknologi';
            $data = camaba::Where(function ($query) use ($periode) {
                $query->where("periode", $periode);
            })
                ->Where(function ($query) {
                    $query->where('prodi1', '=', 'agro')
                        ->orWhere('prodi2', '=', 'agro')
                        ->orWhere('prodi3', '=', 'agro');
                })
                ->get();
        }

        return view('dataMhs.dataMhs', [
            'title' => $title,
            'data' => $data,
        ]);
    }
}
