@extends('Layouts.header')
@extends('Layouts.sidebar')

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
                                <h5 class="card-title">
                                    Data Pribadi | <span> Calon Mahasiswa </span>
                                </h5>
                                <!-- Multi Columns Form -->
                                <form class="row g-3">
                                    @foreach ($nilai2 as $a)
                                        <div class="col-md-9">
                                            <label for="inputName5" class="form-label">Nama Camaba</label>
                                            <input type="text" class="form-control" id="inputName5"
                                                value="{{ $a->nama }}">
                                        </div>
                                    @endforeach
                                    @foreach ($nilai as $a)
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Pilihan Prodi Ke</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->pilihan }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Matematika</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->matematika }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Fisika</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->fisika }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Kimia</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->kimia }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Biologi</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->biologi }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Sanggup Studi</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->kesanggupan }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Bahasa Inggris</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->inggris }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Ujian Lisan</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->ujian_lisan }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Bahasa Arab</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->arab }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Pemikiran</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->inggris }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Pendanaan</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->pendanaan }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Studi terakhir</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->pendidikan_terakhir }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Penghasilan</label>
                                            <input type="text" class="form-control" id=""
                                                value="{{ $a->penghasilan }}">
                                        </div>
                                    @endforeach
                                </form><!-- End Multi Columns Form -->

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
