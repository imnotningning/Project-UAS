@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
    <div class="container">
        <table class='table'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $use)
                    <tr>
                        <td>{{ $use->name }}</td>
                        <td>{{ $use->email }}</td>
                        <td><a class="delete-user" href="{{ URL::route("deleteUser1", $use->id) }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
