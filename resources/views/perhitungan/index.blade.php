@extends('layouts.header')
@extends('layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Perhitungan</li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-9">
                    <div class="row">

                        <!-- Customers Card -->
                        <div class="col-lg-9">
                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Sistem Pendukung Keputusan
                                        </h5>
                                        <table class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nomor</th>
                                                    <th scope="col">Program Studi</th>
                                                    <th scope="col">Proses Hitung</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $p)
                                                    <tr>
                                                        <td>{{ $p->id }}</td>
                                                        <td>{{ $p->prodi }}</td>
                                                        <td>
                                                            <a href="/perhitungan/{{ $periode }}/{{ $p->id }}"
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
