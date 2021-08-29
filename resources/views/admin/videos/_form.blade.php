<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $video->title) }}" required>
    @error('title')
        <p class="form-text text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="youtube_code">Youtube Code/ID</label>
    <input type="text" name="youtube_code" id="youtube_code" class="form-control" value="{{ old('youtube_code', $video->youtube_code) }}" required>
    @error('youtube_code')
        <p class="form-text text-danger">{{ $message }}</p>
    @enderror
</div>
