<x-layout>
  <x-slot name="title">
    ユーザー情報編集画面
  </x-slot>
  <h1>編集画面</h1>
    <form action="{{ route('user.update', $user) }}" method="post">
      @method('PATCH')
      @csrf
      <input type="text" name="name" value="{{ $user->name }}">
      <input type="text" name="email" value="{{ $user->email }}">
      <button type="submit">編集する</button>
    </form>
    <p><a href="{{ route('user.show', $user) }}">マイページ</a></p>
</x-layout>