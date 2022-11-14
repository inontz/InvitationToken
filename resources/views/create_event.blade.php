@extends('layout.master')
@section('content')
    <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            Dindaeng Regiteration !
        </div>
        <div class="card-body">
            <h5 class="card-title">Register New Event</h5>
            <form action="{{ route('invitation.store') }}" method="post" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Event Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Invitation Card</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="image">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>
@endsection
