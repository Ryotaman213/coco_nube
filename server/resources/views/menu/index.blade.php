@extends('layouts.app')

@extends('layouts.header')

@section('content')
<div class="bg-white text-center">
  <div class="mx-auto">
    <p class="h4 font-weight-bold">MENU</p>
    <p class="h5 font-weight-bold">セットメニュー</p>
  <table class="table table-condensed h6">
    @foreach( $set_menus as $set_menu)
    <tr>
      <th>{{ $set_menu->name }}</th>
      <th>￥{{  number_format($set_menu->price) }}〜</th>
      <th>{{ $set_menu->note }}</th>
    </tr>
    @endforeach
  <table>
    <p class="h5 font-weight-bold">カットメニュー</p>
  <table class="table table-condensed h6">
    @foreach( $cut_menus as $cut_menu)
    <tr>
      <th>{{ $cut_menu->name }}</th>
      <th>￥{{  number_format($set_menu->price) }}〜</th>
      <th>{{ $cut_menu->note }}</th>
    </tr>
    @endforeach
  <table>
    <p class="h5 font-weight-bold">カラーメニュー</p>
  <table class="table table-condensed h6">
    @foreach( $color_menus as $color_menu)
    <tr>
      <th>{{ $color_menu->name }}</th>
      <th>￥{{  number_format($color_menu->price) }}〜</th>
      <th>{{ $color_menu->note }}</th>
    </tr>
    @endforeach
  <table>
    <p class="h5 font-weight-bold">パーマメニュー</p>
  <table class="table table-condensed h6">
    @foreach( $parm_menus as $parm_menu)
    <tr>
      <th>{{ $parm_menu->name }}</th>
      <th>￥{{  number_format($parm_menu->price) }}〜</th>
      <th>{{ $parm_menu->note }}</th>
    </tr>
    @endforeach
  <table>
    <p class="h5 font-weight-bold">縮毛矯正メニュー</p>
  <table class="table table-condensed h6">
    @foreach( $straight_menus as $straight_menu)
    <tr>
      <th>{{ $straight_menu->name }}</th>
      <th>￥{{  number_format($straight_menu->price) }}〜</th>
      <th>{{ $straight_menu->note }}</th>
    </tr>
    @endforeach
  <table>
    <p class="h5 font-weight-bold">トリートメントメニュー</p>
  <table class="table table-condensed h6">
    @foreach( $treatment_menus as $treatment_menu)
    <tr>
      <th>{{ $treatment_menu->name }}</th>
      <th>￥{{  number_format($treatment_menu->price) }}〜</th>
      <th>{{ $treatment_menu->note }}</th>
    </tr>
    @endforeach
  <table>
    <p class="h5 font-weight-bold">ヘアセットメニュー</p>
  <table class="table table-condensed h6">
    @foreach( $hair_set_menus as $hair_set_menu)
    <tr>
      <th>{{ $hair_set_menu->name }}</th>
      <th>￥{{  number_format($hair_set_menu->price) }}〜</th>
      <th>{{ $hair_set_menu->note }}</th>
    </tr>
    @endforeach
  <table>
    <p class="h5 font-weight-bold">ヘッドスパメニュー</p>
  <table class="table table-condensed h6">
    @foreach( $head_spa_menus as $head_spa_menu)
    <tr>
      <th>{{ $hair_set_menu->name }}</th>
      <th>￥{{  number_format($head_spa_menu->price) }}〜</th>
      <th>{{ $head_spa_menu->note }}</th>
    </tr>
    @endforeach
  <table>
    <p class="h5 font-weight-bold">その他のメニュー</p>
  <table class="table table-condensed h6">
    @foreach( $other_menus as $other_menu)
    <tr>
      <th>{{ $other_menu->name }}</th>
      <th>￥{{  number_format($other_menu->price) }}〜</th>
      <th>{{ $head_spa_menu->note }}</th>
    </tr>
    @endforeach
  <table>
  </div>
</div>
@endsection
