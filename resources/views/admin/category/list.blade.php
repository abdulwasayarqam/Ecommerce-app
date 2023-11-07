@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h1>Category List</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('create.category') }}" class="btn btn-primary">Create Category</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->desc }}</td>
                                    <td>
                                        <a href="{{ route('edit.category', $category->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="post" action="{{ route('delete.category', $category->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
