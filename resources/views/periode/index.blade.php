@extends('layouts.header')
@extends('layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Input Periode</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Input Periode</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Tahun Ajaran Baru</h5>
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                            <!-- Horizontal Form -->
                            <form method="post" action="/periode">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Periode</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('periode')) is-invalid @endif"
                                            name="periode" value="{{ old('periode') }}" placeholder="Periode">
                                        @if ($errors->has('periode'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('periode') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <button type="submit" class="btn btn-success">Buat Baru</button>
                                    <button type="reset" class="btn btn-light">
                                        Reset
                                    </button>
                                </div>
                            </form>
                            <!-- End Horizontal Form -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Periode</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($periode as $p)
                                            <tr>
                                                <td>{{ $p->periode }}</td>
                                                @if ($p->status == 'aktif')
                                                    <td><span class="badge bg-success">Periode aktif</span></td>
                                                @else
                                                    <td><span class="badge bg-danger">Periode nonaktif</span></td>
                                                @endif
                                                <td>
                                                    <form action="periode/destroyed/{{ $p->id }}" method="post">
                                                        <a href="periode/edit/{{ $p->id }}"
                                                            class="btn
                                                            btn-warning bi bi-pencil text-light"></a>
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger bi bi-trash"></button>
                                                    </form>
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

@extends('layouts.footer')
