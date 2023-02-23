<x-layout>
  <x-slot name="title">
    ログインフォーム
  </x-slot>
  @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  @endif
  <form action="/register" name="registform" method="post" id="registform">
    @csrf
    <dl>
      <dt>名前：</dt>
      <dd>
        <input type="text" name="name" size="30">
        <span>{{ $errors->first('name') }}</span>
      </dd>
    </dl>
    <dl>
      <dt>メールアドレス：</dt>
      <dd>
        <input type="text" name="email" size="30">
        <span>{{ $errors->first('email') }}</span>
      </dd>
    </dl>
    <dl>
      <dt>パスワード：</dt>
      <dd>
        <input type="password" name="password" size="30">
        <span>{{ $errors->first('password') }}</span>
      </dd>
    </dl>
    <dl>
      <dt>パスワード（確認用）：</dt>
      <dd>
        <input type="password" name="password_confirmation" size="30">
        <span>{{ $errors->first('password_confirmation') }}</span>
      </dd>
    </dl>
    <button type="submit" name="action" value="send">送信</button>
  </form>
  <p><a href="{{ route('login') }}" >ログイン画面</a></p>  
</x-layout>
    
