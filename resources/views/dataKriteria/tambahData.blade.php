@extends('Layouts.header')
@extends('Layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Data Kriteria</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">


                        <!-- Customers Card -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kriteria Baru</h5>

                                <!-- Multi Columns Form -->
                                <form class="row g-3" method="post" action="/data-kriteria/create">
                                    @csrf

                                    {{-- @foreach ($nilai as $a) --}}
                                    <div class="col-md-12">
                                        <label for="inputName5" class="form-label">Nama Program Studi</label>
                                        <input type="text" class="form-control @error('prodi') is-invalid @enderror"
                                            id="prodi" name="prodi">
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="matematika" class="form-label">Matematika</label>
                                        <select class="form-select" name="matematika">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="fisika" class="form-label">Fisika</label>
                                        <select class="form-select" name="fisika">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail5" class="form-label">Kimia</label>
                                        <select class="form-select" name="kimia">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputPassword5" class="form-label">Biologi</label>
                                        <select class="form-select" name="biologi">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="kesanggupan" class="form-label">Kesanggupan</label>
                                        <select class="form-select" name="kesanggupan">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pilihan" class="form-label">Pilihan Prodi</label>
                                        <select class="form-select" name="pilihan">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail5" class="form-label">Bahasa Inggris</label>
                                        <select class="form-select" name="inggris">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputPassword5" class="form-label">Ujian Lisan</label>
                                        <select class="form-select" name="ujian_lisan">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail5" class="form-label">Bahasa Arab</label>
                                        <select class="form-select" name="arab">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pemikiran" class="form-label">Pemikiran</label>
                                        <select class="form-select" name="pemikiran">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pendanaan" class="form-label">Pendanaan</label>
                                        <select class="form-select" name="pendanaan">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                        <select class="form-select" name="pendidikan_terakhir">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="penghasilan" class="form-label">Penghasilan</label>
                                        <select class="form-select" name="penghasilan">
                                            <option selected=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <a href="/data-kriteria" type="reset" class="btn btn-secondary">Kembali</a>
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

@extends('Layouts.footer')
