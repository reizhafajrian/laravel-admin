
@extends("template/bar")
@section('title')
Dashboard
@endSection()
@section('content')
@section('bodyclass')
class="c-app flex-row align-items-center"
@endsection

    <div class="c-wrapper c-fixed-components">
      @include('template/header')
      <div class="c-body">
      </div>
@endsection