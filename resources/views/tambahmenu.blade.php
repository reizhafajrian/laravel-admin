@extends("template/bar")
@section('title')
Dashboard
@endSection()
@section('css')
<link rel="stylesheet" href="css/tambahmenu.css">
@endsection
@section('content')
@section('bodyclass')
class="c-app flex-row align-items-center"
@endsection

<div class="c-wrapper c-fixed-components">
  @include('template/header')
  <div class="c-body">
    <main class="c-main">
      <form method="POST" action="">
      @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama Menu</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Ayam Bakar">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Gambar Menu</label>
          <input type="text" class="form-control" id="gambar" name="gambar" placeholder="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Desc Menu</label>
          <textarea type="text" class="form-control" id="desc" name="desc" placeholder=""></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" placeholder="20000">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Tipe</label>
          <select  class="form-control" id="tipe" name="tipe" >
            <option>Makanan</option>
            <option>Minuman</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ketersedian</label>
          <input  type="number" name="ketersedian" class="form-control" id="ketersedian" placeholder="20000">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </main>
  </div>
  @endsection