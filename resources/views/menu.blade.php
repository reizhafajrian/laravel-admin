@extends("template/bar")
@section('title')
Menu
@endSection()
@section('css')
<link rel="stylesheet" href="css/menu.css">
@endsection
@section('content')
@section('bodyclass')
class="c-app flex-row align-items-center"
@endsection
<div class="c-wrapper c-fixed-components">
    @include('template/header')
    <div class="container top">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:foodMenu();">Food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:drinkMenu();">Drink</a>
            </li>
        </ul>
    </div>
    <main class="c-main">
        <div class="fit-layout">
            <div class="layout-container food">
            @foreach($collection as $data)
               @if($data->tipe=="Makanan")
                <div class="card" style="width: 15rem;">
                    <img src="{{$data->gambar}}" alt="" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->nama}}</h5>
                        <p class="card-text">{{$data->desc}}</p>
                        <div class="add-button">
                            <button type="button" class="btn btn-pill btn-primary">-</button>
                            <div class="value">0</div>
                            <button type="button" class="btn btn-pill btn-primary">+</button>
                        </div>
                    </div>
                </div>
          

            </div>
            @else
            <div class="layout-container drink">
                <div class="card">
                    <img src="{{$data->gambar}}" alt="" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->nama}}</h5>
                        <p class="card-text">{{$data->desc}}</p>
                        <div class="add-button">
                            <button type="button" class="btn btn-pill btn-primary">-</button>
                            <div class="value">0</div>
                            <button type="button" class="btn btn-pill btn-primary">+</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        @endif
        @endforeach

    </main>
    <div class="container total">
        <div class="menu-infos">
            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapse-detail" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Detail Order
                </a>
            </p>
            <div class="collapse" id="collapse-detail">
            </div>

        </div>
    </div>
    <div class="menu-info">
        <div>Total</div>
        <div id="total">0</div>
        <button type="button" class="btn btn-success">Check out</button>
    </div>
</div>
</div>
<script src="js/food.js"></script>
<script type="module" src="js/total.js"></script>
@endsection