@extends('layouts.layout')
@section('content')
    <h1>UPDATE FORM</h1>

    <form action="{{ route('updateStudent', ['id' => $student->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch');
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input name='name' type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" value="{{ $student->name }}">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input name='tanggal_lahir' type="date" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" value="{{ $student->tanggal_lahir }}">
        </div>
        <div class="mb-3">
            <label for="NIM" class="form-label">NIM</label>
            <input name='NIM' type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" value="{{ $student->NIM }}">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input name='jurusan' type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" value="{{ $student->jurusan }}">
        </div>
        <button type="submit" class="btn btn-success">UPDATE</button>
    </form>
@endsection
