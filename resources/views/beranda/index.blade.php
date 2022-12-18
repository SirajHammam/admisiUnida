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

                        <!-- TI -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Teknik Informatika</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalTi }}</h6>
                                            <span class="text-muted small pt-1">Mahasiswa</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End TI -->

                        <!-- TIP -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Industri Pertanian</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalTip }}</h6>
                                            <span class="text-muted small pt-1">Mahasiswa</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End TIP -->

                        <!-- AGRO -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Agroteknologi</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalAgro }}</h6>
                                            <span class="text-muted small pt-1">Mahasiswa</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End AGRO -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Program Studi <span>Teknik Informatika</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Studi</th>
                                                <th scope="col">MTK</th>
                                                <th scope="col">B. Inggris</th>
                                                <th scope="col">Dana</th>
                                                <th scope="col">pilihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($ti as $item)
                                                <tr>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    <th scope="row">{{ $i }}</th>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->kesanggupan }}</td>
                                                    <td>{{ $item->matematika }}</td>
                                                    <td>{{ $item->inggris }}</td>
                                                    <td>{{ $item->pendanaan }}</td>
                                                    <td>{{ $item->pilihan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Program Studi <span>Teknik Industri Pertanian</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Studi</th>
                                                <th scope="col">MTK</th>
                                                <th scope="col">Fisika</th>
                                                <th scope="col">Kimia</th>
                                                <th scope="col">Pilihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($tip as $item)
                                                <tr>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    <th scope="row">{{ $i }}</th>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->kesanggupan }}</td>
                                                    <td>{{ $item->matematika }}</td>
                                                    <td>{{ $item->fisika }}</td>
                                                    <td>{{ $item->kimia }}</td>
                                                    <td>{{ $item->pilihan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Program Studi <span>Agroteknologi</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Studi</th>
                                                <th scope="col">biologi</th>
                                                <th scope="col">MTK</th>
                                                <th scope="col">Kimia</th>
                                                <th scope="col">Pilihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($agro as $item)
                                                <tr>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    <th scope="row">{{ $i }}</th>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->kesanggupan }}</td>
                                                    <td>{{ $item->biologi }}</td>
                                                    <td>{{ $item->matematika }}</td>
                                                    <td>{{ $item->kimia }}</td>
                                                    <td>{{ $item->pilihan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Website Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Calon Mahasiswa<span>| Today</span></h5>

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Program Studi',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                    value: {{ $totalTi }},
                                                    name: 'Teknik Informatika'
                                                },
                                                {
                                                    value: {{ $totalTip }},
                                                    name: 'Teknik Indstri Pertanian'
                                                },
                                                {
                                                    value: {{ $totalAgro }},
                                                    name: 'Agroteknologi'
                                                },
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Website Traffic -->


                </div><!-- End Right side columns -->

            </div>
        </section>

    </main>
    //
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
