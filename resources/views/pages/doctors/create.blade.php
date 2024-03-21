@extends('layouts.app')

@section('title', 'Add Doctor')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Doctor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Doctor</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Doctor</h2>
                <div class="card">
                    <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="doctor_name" class="form-label">Nama</label>
                                    <input type="text"
                                        class="form-control @error('doctor_name')
                                is-invalid
                            @enderror"
                                        name="doctor_name" placeholder="Masukan Nama Dokter" id="doctor_name" required>
                                    @error('doctor_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="doctor_email" class="form-label">Email</label>
                                    <input type="doctor_email"
                                        class="form-control @error('doctor_email') is-invalid @enderror" name="doctor_email"
                                        placeholder="Masukan Email Dokter" id="doctor_email" required>
                                    @error('doctor_email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="doctor_phone">Nomor HP</label>
                                    <input type="number" class="form-control @error('doctor_phone') is-invalide @enderror"
                                        name="doctor_phone" placeholder="Masukan Nomor Dokter" id="doctor_phone" required>
                                    @error('doctor_phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input type="file" name="photo" id="photo"
                                        class="form-control @error('photo') is-invalide @enderror" required>
                                    @error('photo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="doctor_specialist">Spesialis</label>
                                    <input type="text"
                                        class="form-control @error('doctor_specialist') is-invalide @enderror"
                                        name="doctor_specialist" placeholder="Masukan Nomor Dokter" id="doctor_specialist"
                                        required>
                                    @error('doctor_specialist')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sip">SIP</label>
                                    <input type="text" class="form-control @error('sip') is-invalide @enderror"
                                        name="sip" placeholder="Masukan SIP" id="sip" required>
                                    @error('sip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="id_ihs">ID IHS</label>
                                    <input type="text" class="form-control @error('id_ihs') is-invalide @enderror"
                                        name="id_ihs" placeholder="Masukan ID IHS" id="id_ihs" required>
                                    @error('id_ihs')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control @error('nik') is-invalide @enderror"
                                        name="nik" placeholder="Masukan NIK" id="nik" required>
                                    @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address">Alamat Dokter</label>
                                    <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                                        style="resize: none; height: 100%;" required></textarea>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
