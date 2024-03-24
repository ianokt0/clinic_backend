@extends('layouts.app')

@section('title', 'Add Patient')

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
                <h1>Add Patient</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Patient</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Patient</h2>
                <div class="card">
                    <form action="{{ route('patient.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="patient_name" class="form-label">Nama</label>
                                    <input type="text"
                                        class="form-control @error('patient_name')
                                is-invalid
                            @enderror"
                                        name="patient_name" placeholder="Masukan Nama Pasien" id="patient_name" required>
                                    @error('patient_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="patient_email" class="form-label">Email</label>
                                    <input type="patient_email"
                                        class="form-control @error('patient_email') is-invalid @enderror" name="patient_email"
                                        placeholder="Masukan Email Pasien" id="patient_email" required>
                                    @error('patient_email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="patient_phone">Nomor HP</label>
                                    <input type="number" class="form-control @error('patient_phone') is-invalide @enderror"
                                        name="patient_phone" placeholder="Masukan Nomor Pasien" id="patient_phone" required>
                                    @error('patient_phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="patient_specialist">Spesialis</label>
                                    <input type="text"
                                        class="form-control @error('patient_specialist') is-invalide @enderror"
                                        name="patient_specialist" placeholder="Masukan Nomor Pasien" id="patient_specialist"
                                        required>
                                    @error('patient_specialist')
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
                                    <label for="address">Alamat Pasien</label>
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
