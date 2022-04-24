@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items-cneter justfy-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">
        Country management
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
            <a href="{{ route('countries.create') }}" class="float-right">Create</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Code</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($countries as $country)
                    <tr>
                        <th scope="row">{{$country->id}}</th>
                        <td>{{ $country->name }}</td>
                        <td>{{$country->code }}</td>
                        <td>
                            <a href="{{route('countries.edit', $country)}}">Edit</a> | <a href="{{route('countries.destroy', $country)}}">Delete</a>
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