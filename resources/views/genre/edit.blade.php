@extends('template.master');
@section('content')

  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
    <div class="card-header">
                <h3 class="card-title">Edit Data Genre</h3>
              </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('genre.update', $genres->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Nama Genre</label>
      <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Genre" value="{{ old('nama', $genres->Nama) }}">
    </div>
    @error('nama')
      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
    @enderror
  </div>
  <div class="px-3 d-flex justify-content-between align-items-center">
    <button type="reset" class="btn btn-warning">Reset</button>
    <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

    </div>
    <!-- /.card -->
  </div>
@endsection