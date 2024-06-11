@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Listado de Estudiantes</h2>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>CIF</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cif }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                    </td>
                </tr>
            @endforeach
        </tbody>
</div>
@endsection
