@extends('admin.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('index.html') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        @foreach ($cars as $car)
                            <div class="col-xxl-4 col-md-6 mb-5">
                                <div class="cool-card">
                                    <div class="cool-card-body">
                                        <h5 class="card-title">VFX-50 <span>| Pick-up Car</span></h5>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($car->image_path) }}"
                                                class="cool-card-image" alt="">
                                        </div>

                                        <table class="cool-card-content">
                                            <tr>
                                                <td>Brand</td>
                                                <td>:</td>
                                                <td>{{ $car->brand }}</td>
                                            </tr>
                                            <tr>
                                                <td>Model</td>
                                                <td>:</td>
                                                <td>{{ $car->model }}</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage</td>
                                                <td>:</td>
                                                <td>{{ $car->mileage }}</td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td>:</td>
                                                <td>{{ $car->type }}</td>
                                            </tr>
                                            <tr>
                                                <td>Cargo Capacity</td>
                                                <td>:</td>
                                                <td>{{ $car->cargo_capacity }}</td>
                                            </tr>

                                            <tr>
                                                <td>Fuel Capacity</td>
                                                <td>:</td>
                                                <td>{{ $car->fuel_capacity }}</td>
                                            </tr>

                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>{{ $car->status }}</td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <div>
                                            <button>Update</button>
                                            <button>Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="{{ url('#') }}" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="{{ url('#') }}">Today</a></li>
                                        <li><a class="dropdown-item" href="{{ url('#') }}">This Month</a></li>
                                        <li><a class="dropdown-item" href="{{ url('#') }}">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Sales <span>| Today</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="{{ url('#') }}" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="{{ url('#') }}">Today</a></li>
                                        <li><a class="dropdown-item" href="{{ url('#') }}">This Month</a></li>
                                        <li><a class="dropdown-item" href="{{ url('#') }}">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$3,264</h6>
                                            <span class="text-success small pt-1 fw-bold">8%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="{{ url('#') }}" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="{{ url('#') }}">Today</a></li>
                                        <li><a class="dropdown-item" href="{{ url('#') }}">This Month</a></li>
                                        <li><a class="dropdown-item" href="{{ url('#') }}">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="{{ url('#') }}" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="{{ url('#') }}">Today</a></li>
                                        <li><a class="dropdown-item" href="{{ url('#') }}">This Month</a></li>
                                        <li><a class="dropdown-item" href="{{ url('#') }}">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->


                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">




                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
