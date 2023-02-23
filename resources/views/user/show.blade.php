<x-layout>
  <x-slot name="title">
    {{ $user->name }}さんのページ
  </x-slot>

  <h1>{{ $user->name }}さんのページ</h1>
  <p><a href="{{ route('user.edit', $user); }}">編集画面</a></p>
  <p><a href="{{ route('post.create') }}">新規投稿</a></p>

</x-layout>

