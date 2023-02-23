<x-layout>
  <x-slot name="title">
    ログインフォーム
  </x-slot>
  @isset($errors)
    <p style="color: red;">{{ $errors->first('message') }}</p>
  @endisset
  <form action="/login" name="loginform" method="post">
    @csrf
    <dl>
      <dt>メールアドレス</dt>
      <dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
      <dt>パスワード</dt>
      <dd><input type="password" name="password" size="30"></dd>
    </dl>
    <button type="submit" name="action" value="send">ログイン</button>
  </form>
</x-layout>
