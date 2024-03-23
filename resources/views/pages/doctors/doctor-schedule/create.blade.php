@extends('layouts.app')

@section('title', 'Add Schedule')

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
                <h1>Add Schedule</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Schedule</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <zh2 class="section-title">Schedule</zh2>
                <div class="card">
                    <form action="{{ route('doctor-schedule.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="doctor_id" class="form-label">Doctor</label>
                                    <select name="doctor_id" id="doctor_id"
                                        class="form-control selectric @error('doctor_id') is-invalid @enderror">
                                        <option value disabled selected>Select Doctor</option>
                                        @foreach ($doctors as $item)
                                            <option value="{{ $item->id }}">{{ $item->doctor_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('doctor_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="senin" class="form-label">Jadwal Senin</label>
                                    <input type="senin" class="form-control @error('senin') is-invalid @enderror"
                                        name="senin" placeholder="Masukan Jam" id="senin" >
                                    @error('senin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="selasa" class="form-label">Jadwal Selasa</label>
                                    <input type="selasa" class="form-control @error('selasa') is-invalid @enderror"
                                        name="selasa" placeholder="Masukan Jam" id="selasa" >
                                    @error('selasa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="rabu" class="form-label">Jadwal Rabu</label>
                                    <input type="rabu" class="form-control @error('rabu') is-invalid @enderror"
                                        name="rabu" placeholder="Masukan Jam" id="rabu" >
                                    @error('rabu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="kamis" class="form-label">Jadwal Kamis</label>
                                    <input type="kamis" class="form-control @error('kamis') is-invalid @enderror"
                                        name="kamis" placeholder="Masukan Jam" id="kamis" >
                                    @error('kamis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="jumat" class="form-label">Jadwal Jum'at</label>
                                    <input type="jumat" class="form-control @error('jumat') is-invalid @enderror"
                                        name="jumat" placeholder="Masukan Jam" id="jumat" >
                                    @error('jumat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="sabtu" class="form-label">Jadwal Sabtu</label>
                                    <input type="sabtu" class="form-control @error('sabtu') is-invalid @enderror"
                                        name="sabtu" placeholder="Masukan Jam" id="sabtu" >
                                    @error('sabtu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="minggu" class="form-label">Jadwal Minggu</label>
                                    <input type="minggu" class="form-control @error('minggu') is-invalid @enderror"
                                        name="minggu" placeholder="Masukan Jam" id="minggu" >
                                    @error('minggu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note" class="form-control @error('note') is-invalid @enderror"
                                        style="resize: none; height: 100%;" ></textarea>
                                    @error('note')
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
