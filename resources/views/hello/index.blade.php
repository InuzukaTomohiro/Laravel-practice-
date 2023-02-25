<x-layout>
  <x-slot name="title">
    インジェクション練習
  </x-slot>
  <body>
    <h1>Hello</h1>
    <p>{{$strMsg}}</p>
    <ul>
      @foreach($aryData as $item)
      <li>
        {{$item}}
      </li>
      @endforeach
    </ul>
  </body>

</x-layout>