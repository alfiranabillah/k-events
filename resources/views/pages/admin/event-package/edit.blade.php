@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 justify-content-end">
                    <h6>Event Table</h6>
                </div>

                <div class="card-body px-4 pt-4 pb-2">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('update-data', $item->id_event) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
    <div class="col-md-6 mb-3">
        <label for="id_organizers" class="form-label">Organizer ID</label>
        <input type="text" name="id_organizers" class="form-control" id="id_organizers" value="{{ $item->id_organizers }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6 mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ $item->location }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $item->status }}">
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6 mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $item->price }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="start_date" class="form-label">Start Date</label>
        <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $item->start_date }}">
    </div>
</div>
<div class="mb-3">
    <label for="poster" class="form-label">Poster</label>
    <input type="file" class="form-control" id="poster" name="poster">
    @if($item->poster)
        <img src="{{ asset('images/' . $item->poster) }}" width="100" height="100" alt="Poster">
    @endif
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description">{{ $item->description }}</textarea>
</div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                        <footer class="footer pt-3">
                            <div class="container-fluid">
                                <div class="row align-items-center justify-content-lg-between">
                                    <div class="col-lg-6 mb-lg-0 mb-4">
                                        <div class="copyright text-center text-sm text-muted text-lg-start">
                                            © <script>
                                                document.write(new Date().getFullYear())
                                            </script>,
                                            made with <i class="fa fa-heart"></i> by
                                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                                            for a better web.
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                            <li class="nav-item">
                                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>

@include('pages.admin.event-package.create')
@endsection
