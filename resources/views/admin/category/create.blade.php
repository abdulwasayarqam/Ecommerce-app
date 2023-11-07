@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create category</div>
                    <div class="card-body">

                        @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif

                        <form action="{{route('store.category')}}" method="post">{{----}}
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group mb-2" >
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"  name="name" placeholder="Enter the cateogry">
                                    @error('name')
                                    <div class="invalid-feedback mb-2">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12 form-group " >
                                    <input class="form-control @error('name') is-invalid @enderror"" type="text" name="desc" placeholder="Enter the desc">
                                    @error('name')
                                    <div class="invalid-feedback mb-2">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-12 text-end" >
                                    <button class="btn btn-primary" type="submit">Create</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
