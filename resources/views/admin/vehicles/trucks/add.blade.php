@extends('admin.index')
@section('content')
    <main id="main" class="main">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">General Form Elements</h5>

                    <!-- General Form Elements -->
                    {{-- <form>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Brand</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Model</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select name="" id="">
                                    <option value="Pickup">Pickup</option>
                                    <option value="Box">Box</option>
                                    <option value="Semi">Semi</option>
                                    <option value="Dump">Dump</option>
                                    <option value="Refrigerated">Refrigerated</option>
                                    <option value="Flatbed">Flatbed</option>
                                    <option value="Tow">Tow</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">License Plate</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">VIN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Manufacture Date</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Cargo Capacity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Fuel Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Fuel Capacity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Mileage</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Daily Cost</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select name="" id="">
                                    <option value="unavailable">unavailable</option>
                                    <option value="available">available</option>
                                    <option value="in maintenance">in maintenance</option>
                                </select>
                            </div>
                        </div>



                    </form><!-- End General Form Elements --> --}}

                    <form action="{{ route('trucks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="brand" name="brand" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="model" class="col-sm-2 col-form-label">Model</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="model" name="model" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="type" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="type" name="type" required>
                                    <option value="Pickup">Pickup</option>
                                    <option value="Box">Box</option>
                                    <option value="Semi">Semi</option>
                                    <option value="Dump">Dump</option>
                                    <option value="Refrigerated">Refrigerated</option>
                                    <option value="Flatbed">Flatbed</option>
                                    <option value="Tow">Tow</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="license_plate" class="col-sm-2 col-form-label">License Plate</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="license_plate" name="license_plate" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="VIN" class="col-sm-2 col-form-label">VIN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="VIN" name="VIN" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="manufacture_date" class="col-sm-2 col-form-label">Manufacture Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="manufacture_date" name="manufacture_date"
                                    required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="color" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="color" name="color" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cargo_capacity" class="col-sm-2 col-form-label">Cargo Capacity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cargo_capacity" name="cargo_capacity"
                                    required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fuel_type" class="col-sm-2 col-form-label">Fuel Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fuel_type" name="fuel_type" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fuel_capacity" class="col-sm-2 col-form-label">Fuel Capacity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fuel_capacity" name="fuel_capacity" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mileage" class="col-sm-2 col-form-label">Mileage</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="mileage" name="mileage" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="daily_cost" class="col-sm-2 col-form-label">Daily Cost</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="daily_cost" name="daily_cost" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="status" name="status" required>
                                    <option value="unavailable">Unavailable</option>
                                    <option value="available">Available</option>
                                    <option value="in maintenance">In Maintenance</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="failed_at" class="col-sm-2 col-form-label">Failed At</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="failed_at" name="failed_at">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="image_path" name="image_path">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>



                    {{-- <div class="container mt-5">
                        <h2>Truck Information Form</h2>
                        <form method="POST" action="{{ route('trucks.store') }}">
                            @csrf

                            @foreach ($truck->getFillable() as $attribute)
                                <div class="form-group">
                                    <label
                                        for="{{ $attribute }}">{{ ucwords(str_replace('_', ' ', $attribute)) }}:</label>
                                    <input type="{{ $attribute === 'failed_at' ? 'date' : 'text' }}" class="form-control"
                                        id="{{ $attribute }}" name="{{ $attribute }}" required>
                                </div>
                            @endforeach

                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" id="status" name="status" required>
                                    @foreach ($truck->enums['status'] as $status)
                                        <option value="{{ $status }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> --}}




                </div>
            </div>

        </div>
    </main><!-- End #main -->
@endsection
