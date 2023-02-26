<x-layout>
  <x-slot name="title">
    ホーム
  </x-slot>
  <div class="mb-5 border-bt">
    <h1>Laravel 練習用アプリ！</h1>
  </div>
    <h3 class="border-bottom">実装機能一覧</h3>
    <ul>
      <li>ユーザー認証機能</li>
      <li><a href="{{ route('post.index') }}">投稿機能(CRUD処理)</a></li>
      <li><a href="{{ route('hello') }}">メソッドインジェクション</a></li>
      <li><a href="{{ route('dice') }}">サイコロゲーム(コンストラクトインジェクション)</a></li>
      <li><a href="{{ route('search') }}">投稿検索機能</a></li>
    </ul>
  <p>こんにちは！
  @if (Auth::check())
    {{ \Auth::user()->name }}さん</p>
  <p><a href="/logout">ログアウト</a></p>
  @else
  ゲストさん</p>
  <p><a href="/login">ログイン</a><br><a href="/register">会員登録</a></p>
    @endif
</x-layout>