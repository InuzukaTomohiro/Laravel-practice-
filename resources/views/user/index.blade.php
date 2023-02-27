<x-layout>
  <x-slot name="title">
    ユーザー一覧
  </x-slot>
  <p>{{ $flash }}</p>
  <h1>登録済みユーザー</h1>
  @foreach ($users as $user)
    <p><a href="{{ route('user.show', $user) }}">{{ $user->name }}</a></p>
  @endforeach
</x-layout>