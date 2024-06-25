
@if ($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ( $errors->all() as $error)

                <li>{{ $error}}</li>

            @endforeach
        </ul>
    </div>

@endif



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add-data')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}" required>
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" name="location"  value="{{ old('mlocation')}}"  required>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" class="form-control" id="status" name="status"  value="{{ old('status')}}"  required>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"  value="{{ old('start_date')}}" required>
                </div>
                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" class="form-control" id="end_date" name="end_date"  value="{{ old('end_date')}}"  required>
                </div>
                <div class="form-group">
                    <label for="poster">Poster:</label>
                    <input type="file" class="form-control" id="poster" name="poster"  value="{{ old('poster')}}" >
                </div>
                <div class="form-group">
                    <label for="desc">Description:</label>
                    <textarea class="form-control" id="desc" name="desc"  value="{{ old('desc')}}" ></textarea>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
