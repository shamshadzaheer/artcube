<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $page->title) }}" required>
    @error('title')
        <p class="form-text text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="body">Text</label>
    <textarea name="body" id="body" rows="3" class="form-control text-editor">{{ old('body', $page->body) }}</textarea>
    @error('body')
        <p class="form-text text-danger">{{ $message }}</p>
    @enderror
</div>
