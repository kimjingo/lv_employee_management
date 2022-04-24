@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items-cneter justfy-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">
        User management
    </h1>
</div>
<div class="row">
    <div class="card mx-auto">
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="card-header">
            <a href="{{ route('users.create') }}" class="float-right">Create</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{ $user->username }}</td>
                        <td>{{$user->email }}</td>
                        <td>
                            <a href="{{route('users.edit', $user)}}">Edit</a> | <a href="{{route('users.destroy', $user)}}">Delete</a>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection