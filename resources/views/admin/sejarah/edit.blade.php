@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Sejarah</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.sejarah.update', $sejarah->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea name="konten" id="konten" class="form-control" rows="7">{{ old('konten', $sejarah->konten) }}</textarea>
                    </div>
                    <a href="{{ route('admin.sejarah.index') }}" class="btn btn-secondary mt-2">Batal</a>
                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor.create(document.querySelector('#konten')).catch(error => console.error(error));
</script>
@endsection
