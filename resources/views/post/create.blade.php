<x-layout>
  <x-slot name="title">
    新規投稿
  </x-slot>
  <h1>新規投稿</h1>
  <form action="{{ route('post.store') }}" name="postForm" method="post">
    @csrf
    <div class="form_group">
      <label name="title">タイトル
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
          <div class="errors">
            {{ $message }}
          </div>
        @enderror
      </label>
    </div>
    <div class="form_group">
      <label name="body">内容
        <textarea name="body" value="{{ old('body') }}"></textarea>
        @error('body')
          <div class="errors">
            {{ $message }}
          </div>
        @enderror
      </label>
    </div>
    <button type="submit">新規投稿</button>
</form>
</x-layout>