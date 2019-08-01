@extends('layouts.app')

@extends('layouts.header')

@section('content')
<div class="bg-white text-center">
  <div class="mx-auto text-center p-5">
   <!--  <table class="table table-bordered">
  <thead>
    <tr>
      @foreach ( $weeks as $dayOfWeek)
      <th>{{ $dayOfWeek }}</th>
      @endforeach
    </tr>
  </thead>
  <tbody>
    @foreach ($dates as $date)
    @if ($date->dayOfWeek == 0)
    <tr>
    @endif
      <td
        @if ($date->month != $currentMonth)
        class="bg-secondary"
        @endif
        @if ( '月' )
        class="bg-danger"
        @endif
      >
        {{ $date->day }}
      </td>
    @if ($date->dayOfWeek == 6)
    </tr>
    @endif
    @endforeach
  </tbody>
</table> -->
  </div>
</div>
@endsection
