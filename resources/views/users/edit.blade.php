@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Edit user</h2>
                <hr>
            </div>

            <div class="form-content">
                <form method="POST" action="/users/{{$users->id}}">
                    @method('PUT')
                    @csrf

                    <div class="col-md-6">
                        <label for="id">ID</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"
                               name="id" value="{{$users->id}}" readonly>
                    </div>

                    <div class="col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                               name="name" value="{{$users->name}}">
                    </div>

                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                               id="email" name="email" value="{{$users->email}}">
                    </div>

                    <div class="col-md-6">
                        <label for="isAdmin">Administrator</label>
                        <input type="text" class="form-control @error('isAdmin') is-invalid @enderror"
                               id="isAdmin" name="isAdmin" value="{{$users->isAdmin}}">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Save">
                    <a class="btn btn-warning mx-1" href="/users">Cancel</a>
                </form>
            </div>
        </div>
    </div>


@endsection
