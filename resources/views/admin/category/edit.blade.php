@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Category</div>
                    <div class="card-body">

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('update.category', $category->id) }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-12 form-group mb-2">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                           name="name" value="{{ $category->name }}">
                                    @error('name')
                                    <div class="invalid-feedback mb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12 form-group">
                                    <input class="form-control @error('desc') is-invalid @enderror" type="text"
                                           name="desc" value="{{ $category->desc }}">
                                    @error('desc')
                                    <div class="invalid-feedback mb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                    <a href="{{ route('list.categories') }}" class="btn btn-secondary">Back to List</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
