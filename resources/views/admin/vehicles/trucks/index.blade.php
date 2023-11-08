@extends('admin.index')
@section('content')
    <style>
        .cool-card {
            background-color: #fff;
            border-radius: 2%;
            box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            height: 600 px;
        }

        .cool-card-image {
            margin: auto;
            object-fit: cover;
            width: 100%;
            height: 200px;
        }

        .cool-card-content {
            margin-left: 10px;
        }

        .card-title {
            margin-left: 10px;
        }

        .cool-card-body {}
    </style>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('index.html') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
            <a href="{{ route('trucks.create') }}"><button class="btn btn-success">add an item</button></a>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">


                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="cool-card">
                                <div class="cool-card-body">
                                    <h5 class="card-title">VFX-50 <span>| Pick-up Truck</span></h5>

                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin/assets/img/depositphotos_241743680-stock-illustration-realistic-car-truck-pickup-side.jpg') }}"
                                            class="cool-card-image" alt="">
                                    </div>

                                    <table class="cool-card-content">
                                        <tr>
                                            <td>Brand/Model</td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mileage</td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Cargo Capacity</td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>Fuel Capacity</td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->

                        @foreach ($trucks as $truck)
                            <div class="col-xxl-4 col-md-6 mb-5">
                                <div class="cool-card">
                                    <div class="cool-card-body">
                                        <h5 class="card-title">VFX-50 <span>| Pick-up Truck</span></h5>

                                        <div class="d-flex align-items-center">
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($truck->image_path) }}"
                                                class="cool-card-image" alt="">
                                        </div>

                                        <table class="cool-card-content">
                                            <tr>
                                                <td>Brand</td>
                                                <td>:</td>
                                                <td>{{ $truck->brand }}</td>
                                            </tr>
                                            <tr>
                                                <td>Model</td>
                                                <td>:</td>
                                                <td>{{ $truck->model }}</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage</td>
                                                <td>:</td>
                                                <td>{{ $truck->mileage }}</td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td>:</td>
                                                <td>{{ $truck->type }}</td>
                                            </tr>
                                            <tr>
                                                <td>Cargo Capacity</td>
                                                <td>:</td>
                                                <td>{{ $truck->cargo_capacity }}</td>
                                            </tr>

                                            <tr>
                                                <td>Fuel Capacity</td>
                                                <td>:</td>
                                                <td>{{ $truck->fuel_capacity }}</td>
                                            </tr>

                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>{{ $truck->status }}</td>
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
