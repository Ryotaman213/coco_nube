@extends('layouts.app')

@extends('layouts.header')

@section('content')
<div class="bg-white text-center">
  <div class="mx-auto text-center pt-5">
    <p class="h4">MENU</p>
    @foreach( $menus as $menu)
    <td>
      <tr>{{ $menu->name }}</tr>
      <tr>{{ $menu->price }}</tr>
    </td>
    <br>
  @endforeach
  </div>
</div>
@endsection
