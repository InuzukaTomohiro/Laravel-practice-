<x-layout>
  <x-slot name="title">
    検索結果
  </x-slot>
  <h1>投稿検索結果</h1>
  <p>「{{ $keyword }}」は{{ count($searchPosts )}}個該当しました。</p>
  @forelse ($searchPosts as $post)
  <p>title:
    {{ $post->title }}
  </p>
  <p>body:
    {{ $post->body }}
  </p>
  @empty
    <p>検索結果はありません</p>
  @endforelse
</x-layout>