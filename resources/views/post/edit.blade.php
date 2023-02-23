<x-layout>
  <x-slot name="title">
    投稿編集
  </x-slot>
  <h1>{{ $post->title }}編集画面</h1>
  <form action="{{ route('post.update', $post) }}" name="postForm" method="post">
    @method('PATCH')
    @csrf
    <div class="form_group">
      <label name="title">タイトル
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
          <div class="errors">
            {{ $message }}
          </div>
        @enderror
      </label>
    </div>
    <div class="form_group">
      <label name="body">内容
        <textarea name="body">{{ old('body', $post->body) }}</textarea>
        @error('body')
          <div class="errors">
            {{ $message }}
          </div>
        @enderror
      </label>
    </div>
    <button type="submit">投稿編集</button>
  </form>
</x-layout>