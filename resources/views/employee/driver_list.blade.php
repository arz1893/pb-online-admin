@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}">Ke Home</a>
    <table class="table">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Birthdate</th>
        </thead>
        <tbody>
            @foreach($drivers as $driver)
                <tr>
                    <td>{{ $driver->getContact->firstname }}</td>
                    <td>{{ $driver->getContact->lastname }}</td>
                    <td>{{ $driver->getContact->email }}</td>
                    <td>{{ $driver->getContact->phone }}</td>
                    <td>{{ $driver->getContact->birthdate }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection