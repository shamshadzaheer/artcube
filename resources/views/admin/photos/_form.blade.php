<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $photo->title) }}" required>
    @error('title')
        <p class="form-text text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="file">Photo File (jpg,jpeg,png)</label>
    <input type="file" name="file" id="file" class="form-control" @if(is_null($photo->file)) required @endif>
    @error('file')
        <p class="form-text text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
   <img src="{{ $photo->getUrl() }}" alt="{{ $photo->title }}" class="img-thumbnail">
</div>
