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

        <a href="/data-mahasiswa/create" class="btn btn-success mt-2 mb-3"><i class="bi bi-plus-circle"></i> Tambah Data</a>
        <section class="section">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-9">
                    <div class="row">

                        <!-- Customers Card -->
                        <div class="col-lg-9">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Data Mahasiswa | <span> Sains dan Teknologi </span>
                                        </h5>
                                        <table class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Program Studi</th>
                                                    <th scope="col">Data Mhs</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kriteria as $p)
                                                    <tr>
                                                        <td>{{ $p->id }}</td>
                                                        <td>{{ $p->prodi }}</td>
                                                        <td>
                                                            <a href="/data-mahasiswa/{{ $p->id }}"
                                                                class="btn btn-success"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Recent Sales -->
                        </div><!-- End Customers Card -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('layouts.footer')
