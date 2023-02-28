<x-layout>
  <x-slot name="title">
    新規投稿
  </x-slot>
  <h1>新規投稿</h1>
  <form action="{{ route('post.store') }}" name="postForm" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label name="title">タイトル</label>
      <input type="text" name="title" value="{{ old('title') }}">
      @error('title')
        <div class="errors">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label name="body">内容</label>
      <textarea name="body" value="{{ old('body') }}"></textarea>
      @error('body')
        <div class="errors">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label name="image">画像</label>
      <input type="file" name="image">
    </div>
    <button type="submit">新規投稿</button>
</form>
</x-layout>