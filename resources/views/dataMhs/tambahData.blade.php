@extends('layouts.header')
@extends('layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Data Mahasiswa</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-10">
                    <div class="row">


                        <!-- Customers Card -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Baru <span>| Periode</span></h5>

                                <!-- Multi Columns Form -->
                                <form class="row g-3" method="post" action="/data-mahasiswa/create">
                                    @csrf

                                    {{-- @foreach ($nilai as $a) --}}
                                    <div class="col-md-12">
                                        <label for="inputName5" class="form-label">Nama Camaba</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            id="nama" name="nama">
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputName5"
                                            class="form-label @error('prodi1') is-invalid @enderror">Pilihan Prodi 1</label>
                                        <select class="form-select" name="prodi1">
                                            <option selected=""> - Pilih item -</option>

                                            <option value="iqt">Ilmu Qur'an dan Tafsir</option>
                                            <option value="saa">Studi Agama-Agama</option>
                                            <option value="afi">Aqidah dan Filsafat</option>
                                            <option value="ti">Teknik Informatika</option>
                                            <option value="tip">Teknologi Industri Pertanian</option>
                                            <option value="agro">Agroteknologi</option>
                                            <option value="hi">Hubungan International</option>
                                            <option value="ilkom">Ilmu Komunikasi</option>
                                            <option value="pai">Pendidikan Agama islam</option>
                                            <option value="pba">Pendidikan Bahasa Arab</option>
                                            <option value="tbi">Tadris Bahasa Inggris</option>
                                            <option value="ei">Ekonomi Islam</option>
                                            <option value="mb">Management</option>
                                            <option value="hes">Hukum Ekonomi Syariah</option>
                                            <option value="pm">Perbandingan Mazhab</option>
                                            <option value="k3">Kesehatan dan Keselamatan Kerja</option>
                                            <option value="far">Farmasi</option>
                                            <option value="gizi">Ilmu Gizi</option>

                                        </select>
                                        {{-- <input type="text" class="form-control" id="prodi1" name="prodi1"> --}}
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputName5"
                                            class="form-label @error('prodi2') is-invalid @enderror">Pilihan Prodi 2</label>
                                        <select class="form-select" name="prodi2">
                                            <option selected="">- Pilih item -</option>

                                            <option value="iqt">Ilmu Qur'an dan Tafsir</option>
                                            <option value="saa">Studi Agama-Agama</option>
                                            <option value="afi">Aqidah dan Filsafat</option>
                                            <option value="ti">Teknik Informatika</option>
                                            <option value="tip">Teknologi Industri Pertanian</option>
                                            <option value="agro">Agroteknologi</option>
                                            <option value="hi">Hubungan International</option>
                                            <option value="ilkom">Ilmu Komunikasi</option>
                                            <option value="pai">Pendidikan Agama islam</option>
                                            <option value="pba">Pendidikan Bahasa Arab</option>
                                            <option value="tbi">Tadris Bahasa Inggris</option>
                                            <option value="ei">Ekonomi Islam</option>
                                            <option value="mb">Management</option>
                                            <option value="hes">Hukum Ekonomi Syariah</option>
                                            <option value="pm">Perbandingan Mazhab</option>
                                            <option value="k3">Kesehatan dan Keselamatan Kerja</option>
                                            <option value="far">Farmasi</option>
                                            <option value="gizi">Ilmu Gizi</option>


                                        </select>
                                        {{-- <input type="text" class="form-control" id="prodi2" name="prodi2"> --}}
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputName5"
                                            class="form-label @error('prodi3') is-invalid @enderror">Pilihan Prodi 3</label>
                                        <select class="form-select" name="prodi3">
                                            <option selected="">- Pilih item -</option>

                                            <option value="iqt">Ilmu Qur'an dan Tafsir</option>
                                            <option value="saa">Studi Agama-Agama</option>
                                            <option value="afi">Aqidah dan Filsafat</option>
                                            <option value="ti">Teknik Informatika</option>
                                            <option value="tip">Teknologi Industri Pertanian</option>
                                            <option value="agro">Agroteknologi</option>
                                            <option value="hi">Hubungan International</option>
                                            <option value="ilkom">Ilmu Komunikasi</option>
                                            <option value="pai">Pendidikan Agama islam</option>
                                            <option value="pba">Pendidikan Bahasa Arab</option>
                                            <option value="tbi">Tadris Bahasa Inggris</option>
                                            <option value="ei">Ekonomi Islam</option>
                                            <option value="mb">Management</option>
                                            <option value="hes">Hukum Ekonomi Syariah</option>
                                            <option value="pm">Perbandingan Mazhab</option>
                                            <option value="k3">Kesehatan dan Keselamatan Kerja</option>
                                            <option value="far">Farmasi</option>
                                            <option value="gizi">Ilmu Gizi</option>

                                        </select>
                                        {{-- <input type="text" class="form-control" id="prodi3" name="prodi3"> --}}
                                    </div>
                                    <div class="col-md-3">
                                        <label for="matematika" class="form-label">Matematika</label>
                                        <input type="text"
                                            class="form-control @error('matematika') is-invalid @enderror" id="matematika"
                                            name="matematika">
                                        @error('matematika')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="fisika" class="form-label">Fisika</label>
                                        <input type="text" class="form-control @error('fisika') is-invalid @enderror"
                                            id="fisika" name="fisika">
                                        @error('fisika')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Kimia</label>
                                        <input type="text" class="form-control @error('kimia') is-invalid @enderror"
                                            id="kimia" name="kimia">
                                        @error('kimia')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Biologi</label>
                                        <input type="text" class="form-control @error('biologi') is-invalid @enderror"
                                            id="biologi" name="biologi">
                                        @error('biologi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- tambahan baru --}}
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Dirosah Islamiyyah</label>
                                        <input type="text" class="form-control @error('dirosah') is-invalid @enderror"
                                            id="dirosah" name="dirosah">
                                        @error('dirosah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Pengetahuan Umum</label>
                                        <input type="text"
                                            class="form-control @error('peng-umum') is-invalid @enderror" id="peng-umum"
                                            name="peng-umum">
                                        @error('peng-umum')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">TBI</label>
                                        <input type="text" class="form-control @error('tbi') is-invalid @enderror"
                                            id="tbi" name="tbi">
                                        @error('tbi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- End tambahan --}}

                                    <div class="col-md-3">
                                        <label for="kesanggupan" class="form-label">Kesanggupan Studi</label>
                                        <select class="form-select" name="kesanggupan">
                                            <option selected="">- Pilih item -</option>
                                            <option value="5">lanjut S2</option>
                                            <option value="4">S1 + Staff</option>
                                            <option value="3">S1</option>
                                            <option value="2">1/2 tahun</option>
                                            <option value="1">tidak tau</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Bahasa Inggris</label>
                                        <input type="text" class="form-control @error('inggris') is-invalid @enderror"
                                            id="inggris" name="inggris">
                                        @error('inggris')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Bahasa Arab</label>
                                        <input type="text" class="form-control @error('arab') is-invalid @enderror"
                                            id="arab" name="arab">
                                        @error('arab')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Ujian Lisan</label>
                                        <input type="text"
                                            class="form-control @error('ujian_lisan') is-invalid @enderror"
                                            id="ujian_lisan" name="ujian_lisan">
                                        @error('ujian_lisan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pemikiran" class="form-label">Pemikiran</label>
                                        <select class="form-select" name="pemikiran">
                                            <option selected="">- Pilih item -</option>
                                            <option value="4">Baik</option>
                                            <option value="3">Cukup</option>
                                            <option value="2">Kurang</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pendanaan" class="form-label">pendanaan</label>
                                        <select class="form-select" name="pendanaan">
                                            <option selected="">- Pilih item -</option>
                                            <option value="4">organisasi</option>
                                            <option value="3">keluarga</option>
                                            <option value="2">wali</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pendidikan_terakhir" class="form-label">pendidikan terakhir</label>
                                        <select class="form-select" name="pendidikan_terakhir">
                                            <option selected="">- Pilih item -</option>
                                            <option value="5">s3</option>
                                            <option value="4">s2</option>
                                            <option value="3">s1</option>
                                            <option value="2">sma kebawah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="penghasilan" class="form-label">penghasilan</label>
                                        <select class="form-select" name="penghasilan">
                                            <option selected="">- Pilih item -</option>
                                            <option value="5">> 10Jt</option>
                                            <option value="4">5Jt - 9Jt</option>
                                            <option value="3">2Jt - 4Jt</option>
                                            <option value="2">
                                                < 1Jt</option>
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                        <a href="/data-mahasiswa" type="reset" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('layouts.footer')
