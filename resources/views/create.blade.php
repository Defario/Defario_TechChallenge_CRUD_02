@extends('layouts.layout')
@section('content')
    <h1>FORM REGISTRASI</h1>

    <form action="{{ route('createStudent') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input name='name' type="text" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input name='tanggal_lahir' type="date" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="NIM" class="form-label">NIM</label>
            <input name='NIM' type="text" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input name='jurusan' type="text" class="form-control" id="formGroupExampleInput" >
        </div>
        <button type="submit" class="btn btn-primary">INSERT</button>
    </form>
@endsection
