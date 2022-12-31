@extends('layouts.header')
@extends('layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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

                                <!-- Multi Columns Form -->
                                <h5 class="card-title"> Data Calon Mahasiswa</h5>

                                @foreach ($nilai2 as $a)
                                    <form class="row g-3" method="post" action="">

                                        @csrf
                                        <div class="col-md-8">
                                            <label for="inputName5" class="form-label">Nama Camaba</label>
                                            <input type="text" class="form-control" id="inputName5"
                                                value="{{ $a->nama }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputName5" class="form-label">Periode Daftar</label>
                                            <input type="text" class="form-control" id="inputName5"
                                                value="{{ $a->periode }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputName5" class="form-label">Pilihan Prodi 1</label>
                                            <input type="text" class="form-control" id="inputName5"
                                                value="{{ $a->prodi1 }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputName5" class="form-label">Pilihan Prodi 2</label>
                                            <input type="text" class="form-control" id="inputName5"
                                                value="{{ $a->prodi2 }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputName5" class="form-label">Pilihan Prodi 3</label>
                                            <input type="text" class="form-control" id="inputName5"
                                                value="{{ $a->prodi3 }}">
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-success">Ubah Data</button>
                                            <button type="reset" class="btn btn-secondary">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                @endforeach
                                </form><!-- End Multi Columns Form -->
                            </div>
                        </div>
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                        <!-- Customers Card -->
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title"> Nilai Calon Mahasiswa | <span>Menjurus ke Program Studi</span></h5>

                                <!-- Multi Columns Form -->
                                @foreach ($nilai as $a)
                                    <form class="row g-3" method="post"
                                        action="/data-mahasiswa/{{ $idProdi }}/edit/{{ $id }}">
                                        @csrf
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Pilihan Prodi Ke</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->pilihan }}" name="pilihan">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Matematika</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->matematika }}" name="matematika">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Fisika</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->fisika }}" name="fisika">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Kimia</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->kimia }}" name="kimia">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Biologi</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->biologi }}" name="biologi">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Sanggup Studi</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->kesanggupan }}" name="kesanggupan">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Bahasa Inggris</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->inggris }}" name="inggris">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Ujian Lisan</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->ujian_lisan }}" name="ujian_lisan">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Bahasa Arab</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->arab }}" name="arab">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Pemikiran</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->inggris }}" name="pemikiran">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Pendanaan</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->pendanaan }}" name="pendanaan">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Studi terakhir</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->pendidikan_terakhir }}" name="pendidikan_terakhir">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Penghasilan</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->penghasilan }}" name="penghasilan">
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-success">Ubah Nilai</button>
                                            <button type="reset" class="btn btn-secondary">
                                                Reset
                                            </button>
                                        </div>
                                    </form><!-- End Multi Columns Form -->
                                @endforeach
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
