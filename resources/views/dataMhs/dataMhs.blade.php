@extends('Layouts.header')
@extends('Layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Data Mahasiswa</li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                @if (session()->has('delete'))
                    <div class="alert alert-success">
                        {{ session()->get('delete') }}
                    </div>
                @endif

                <div class="col-lg-12">
                    <!-- Recent Sales -->
                    <div class="col-lg-10">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Calon Mahasiswa<span> | Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Periode</th>
                                            <th scope="col">Pilihan</th>
                                            <th scope="col">Sanggup</th>
                                            <th scope="col">B. Arab</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($dataMahasiswa as $a)
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $a->nama }}</td>
                                                <td>{{ $a->periode }}</td>
                                                <td>{{ $a->pilihan }}</td>
                                                <td>{{ $a->kesanggupan }}</td>
                                                <td>{{ $a->arab }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col g-1">
                                                            <a href="/data-mahasiswa/{{ $prodi_id }}/show/{{ $a->id }}"
                                                                class="btn btn-success">
                                                                <i class="bi bi-eye"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col g-1">
                                                            <a href="/data-mahasiswa/{{ $prodi_id }}/{{ $a->id }}"
                                                                class="btn btn-warning text-light">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col g-1">
                                                            <form
                                                                action="/data-mahasiswa/{{ $idProdi }}/hapus/{{ $a->id }}"
                                                                method="post" class="">
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit"><i
                                                                        class="bi bi-trash"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Sales -->
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
