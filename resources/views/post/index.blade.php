<x-layout>
  <x-slot name="title">
    投稿一覧
  </x-slot>
  <h1>投稿一覧</h1>
  <a href="{{ route('post.create') }}">新規投稿</a>
  <ul>
    @forelse ($posts as $post)
      <a href="{{ route('post.show', $post)}}">
        <li>
          <img src="{{ '/storage/' . $post->file_name }}" class='w-100 mb-3'/>
          {{ $post->title }}
          <div class="delete_btn">
            <form action="{{ route('post.destroy', $post) }}" method="post" onclick='return confirm("削除しますか？");'>
              @method('DELETE')
              @csrf
              <button type="submit">削除</button>
            </form>
          </div>
        </li>
      </a>
    @empty
      <p>投稿がありません</p>
    @endforelse
  </ul>
</x-layout>
