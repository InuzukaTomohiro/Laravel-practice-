<x-layout>
  <x-slot name="title">
    {{ $post->title }}詳細
  </x-slot>
  <h1>投稿詳細</h1>
  <p><a href="{{ route('post.index') }}">投稿一覧</a></p>
  <a href="{{ route('post.edit', $post) }}">
    <h2>{{ $post->title }}</h2>
    <p>{!! nl2br(e($post->body)) !!}</p>
  </a>
</x-layout>
