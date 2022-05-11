@extends('layouts.layout')
@section('content')
    <h1>LIST MAHASISWA BINUS UNIVERSITY</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">NIM</th>
        <th scope="col">Jurusan</th>
        <th scope="col">ACTION</th>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
            <th scope="row">{{ $student->id }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->tanggal_lahir }}</td>
            <td>{{ $student->NIM }}</td>
            <td>{{ $student->jurusan }}</td>
            <td>
                <a href="{{ route('getStudentById', ['id' => $student->id]) }}"><button type="submit" class="btn btn-primary">EDIT</button></a>
                <form action="{{ route('delete', ['id' => $student->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>

            </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection
