@extends('layouts.app')

@extends('layouts.header')

@section('content')
<div class="bg-white text-center">
  <div class="mx-auto">
    <p class="h4 font-weight-bold pt-3 pb-3">MENU</p>
    <table class="table table-condensed h6 table-striped">
      <thead class="thead-dark">
      <tr>
        <th class="h6 font-weight-bold">セットメニュー</th>
        <th></th>
        <th></th>
      </tr>
      </thead>
    @foreach( $set_menus as $set_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $set_menu->name }}</th>
      <th>￥{{  number_format($set_menu->price) }}〜</th>
      <th>{{ $set_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
    <thead class="thead-dark">
      <tr>
        <th class="h6 font-weight-bold">カット</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    @foreach( $cut_menus as $cut_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $cut_menu->name }}</th>
      <th>￥{{  number_format($set_menu->price) }}〜</th>
      <th>{{ $cut_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
    <thead class="thead-dark">
    <tr>
      <th class="h6 font-weight-bold">カラー</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    @foreach( $color_menus as $color_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $color_menu->name }}</th>
      <th>￥{{  number_format($color_menu->price) }}〜</th>
      <th>{{ $color_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
    <thead class="thead-dark">
    <tr>
      <th class="h6 font-weight-bold">パーマ</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    @foreach( $parm_menus as $parm_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $parm_menu->name }}</th>
      <th>￥{{  number_format($parm_menu->price) }}〜</th>
      <th>{{ $parm_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
    <thead class="thead-dark">
    <tr>
      <th class="h6 font-weight-bold">縮毛矯正</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    @foreach( $straight_menus as $straight_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $straight_menu->name }}</th>
      <th>￥{{  number_format($straight_menu->price) }}〜</th>
      <th>{{ $straight_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
    <thead class="thead-dark">
    <tr>
      <th class="h6 font-weight-bold">トリートメント</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    @foreach( $treatment_menus as $treatment_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $treatment_menu->name }}</th>
      <th>￥{{  number_format($treatment_menu->price) }}〜</th>
      <th>{{ $treatment_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
    <thead class="thead-dark">
    <tr>
      <th class="h6 font-weight-bold">ヘアセット</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
    @foreach( $hair_set_menus as $hair_set_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $hair_set_menu->name }}</th>
      <th>￥{{  number_format($hair_set_menu->price) }}〜</th>
      <th>{{ $hair_set_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
    <thead class="thead-dark">
    <tr>
      <th class="h6 font-weight-bold">ヘッドスパ</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
    @foreach( $head_spa_menus as $head_spa_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $hair_set_menu->name }}</th>
      <th>￥{{  number_format($head_spa_menu->price) }}〜</th>
      <th>{{ $head_spa_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
    <thead class="thead-dark">
    <tr>
      <th class="h6 font-weight-bold">その他メニュー</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
    @foreach( $other_menus as $head_spa_menu)
    <t-body>
    <tr style="font-size: 0.8rem;">
      <th>{{ $hair_set_menu->name }}</th>
      <th>￥{{  number_format($head_spa_menu->price) }}〜</th>
      <th>{{ $head_spa_menu->note }}</th>
    </tr>
  </t-body>
    @endforeach
  <table>
  </div>
</div>
@endsection
