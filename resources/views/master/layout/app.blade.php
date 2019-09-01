<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Beliaja">
	<meta name="keywords" content="beliaja, commerce, ecommerce, online shop, shop, online">
	<meta name="author" content="Beliaja IT Developer Team">
	<meta name="robots" content="index,follow">

  <title>Beli Aja | @yield('title')</title>

  <link rel="shortcut icon" type="x-icon" href="{!! asset('resources/views/master/assets/img/icon.png') !!}">

  <!-- CSS GOES HERE -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="{!! asset('resources/views/master/assets/vendor/slick/slick.css') !!}">
  <link rel="stylesheet" href="{!! asset('resources/views/master/assets/vendor/slick/slick-theme.css') !!}">
  <link rel="stylesheet" href="{!! asset('resources/views/master/assets/vendor/swiper/swiper.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('resources/views/master/assets/css/master.css') !!}">

  <!-- FONTS HERE -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  

</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ URL::to('master')}}">
      <img src="{!! asset('resources/views/master/assets/img/logo.png') !!}" width="30" height="30" class="d-inline-block align-top" alt="">
      Beliaja
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori
          </a>
          
          <div class="dropdown-menu pt-0" aria-labelledby="navbarDropdown"style="margin-top:20px; width:200px">
            <ul class="menu">
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/fashion-wanita.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mr-auto ml-3" href="#">Fashion Wanita</span>
                  <i class="fas fa-chevron-right"></i>
                </a>
                <ul class="submenu">
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Atasan</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Dress</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Setelan</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Celana</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Kaos</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Jeans</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Poloshirt</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Baju Muslim</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Jaket</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Sweater</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Jilbab</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Kebaya</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Kacamata</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Sandal</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Sepatu</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Pakaian Dalam</span>
                    </a>
                  </li>
                  
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Kacamata</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Tas</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Jam Tangan</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/fashion-pria.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Fashion Pria</span>
                  <i class="fas fa-chevron-right"></i>
                </a>
                <ul class="submenu">
                  <li>
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Kacamata</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Kaos</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Polo</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Kemeja</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Jas</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Sweater</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Pakaian Dalam</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Sepatu</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Sandal</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Jam</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Jeans</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Dompet</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Kaos Kaki</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Muslim</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/perawatan.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Kecantikan</span>
                  <i class="fas fa-chevron-right"></i>
                </a>
                <ul class="submenu">
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Makeup</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Perawatan Wajah</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Softlens</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Parfum</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Pelangsing</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Perawatan Tubuh</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Hair Care</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/handphone.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Handphone</span>
                  <i class="fas fa-chevron-right"></i>
                </a>
                <ul class="submenu">
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Sparepart</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Hp & Smartphone</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Tablet</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Powerbank</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Headset</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Smartwatch</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Memory Card</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Aksesoris</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/elektronik.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Elektronik</span>
                  <i class="fas fa-chevron-right"></i>
                </a>
                <ul class="submenu">
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">TV</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Voice Recorder</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Aksesoris</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">CD/DVD/VCD</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Headphone</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Speaker</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Proyektor</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Lainnya</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/komputer.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Komputer</span>
                  <i class="fas fa-chevron-right"></i>
                </a>
                <ul class="submenu">
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Laptop</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Hardware</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">DC</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Dekstop</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Server</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Printer</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Monitor</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Software</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Aksesoris</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/hobi-olahraga.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Hobi/Olahraga</span>
                  <i class="fas fa-chevron-right"></i>
                </a>
                <ul class="submenu">
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Buku</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Games</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Musik</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Cincin</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Lari</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Diving</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Badminton</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Renang</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Dancing</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Sepak bola & Futsal</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Basket</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Hunting</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Fitnes</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Stakeboard</span>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a style="display:flex; align-items:center" class=" px-2">
                      <span class="baby-small" href="#">Tenis</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/furniture.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Furniture</span>
                </a>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/rumah-tangga.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Rumah Tangga</span>
                </a>
              </li>
              <li class="px-2 py-1 dropdown-item">
                <a style="display:flex; align-items:center" class="my-1 mx-1 justify-content-between">
                  <img src="{!! asset('resources/views/master/assets/img/kategori/fashion-anak.png') !!}" width="20" height="20" class="d-inline-block align-top" alt="">
                  <span class="baby-small mx-3 mr-auto ml-3" href="#">Fashion Anak</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <form class=" my-2 my-lg-0 mx-auto">
        <div class="form-inline">
          <input class="vw-50 form-control mr-sm-2" type="search" placeholder="Saya sedang mencari ..." aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">
            <!-- <i class="fa fa-loop"></i> -->
            Cari
          </button>
        </div>
        <div>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Lorem ipsum</a></li>
          <li class="list-inline-item"><a href="#">Phasellus iaculis</a></li>
          <li class="list-inline-item"><a href="#">Nulla volutpat</a></li>
        </ul>
        </div>
      </form>
      <div class="navbar-nav">
        <a class="nav-item da-gra nav-link" href="{{ URL::to('master/cart') }}" data-toggle="tooltip" data-placement="bottom" title="Shopping cart"><i class="fa fa-lg fa-shopping-cart"></i></a>
        <a class="nav-item da-gra nav-link" href="{{ URL::to('master/wish-list') }}" data-toggle="tooltip" data-placement="bottom" title="Wishlist"><i class="far fa-lg fa-heart"></i></a>
        <a class="nav-item mx-2 nav-link" data-toggle="modal" data-target="#modalRegister" href="#">Daftar</a>
        <a class="nav-item ml-2 baby-small btn-b-primary btn-b" data-toggle="modal" data-target="#modalLogin" href="#">Masuk</a>
      </div>
    </div>
  </nav>
<!-- POP-UP-LOGIN -->
<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body p-0 bg-orange">
        <button type="button" class="close m-2" data-dismiss="modal">&times;</button>
        <div>
        <div class="row" style="margin-left:0px">
          <section class="col-md-7 p-5 text-center bg-white">
            <h4 class="or font-weight-bold mb-5 mt-4 pb-3">Masuk ke Akun Anda</h4>
            <form class="">
              <div class="form-group inputpd2 mt-3">
                <input type="email" class="baby-small form-control inputpd" id="inputEmail" placeholder="Email">
              </div>
              <div class="form-group inputpd2">
                <input type="password" class="baby-small form-control inputpd" id="inputPassword" placeholder="Password">
              </div>
              <div class="text-left form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label baby-small" for="rememberMe">Ingat password</label>
              </div>
              <div class="">
                <button type="submit"class="col btn btn-b btn-b-primary sh1 font-weight-bold my-2">MASUK</button>
              </div>
              <div class="smaller text-right">
              <span><a href="#" >Lupa password?</a></span>
              </div>
            </form>
          </section>
          <section class="d-flex flex-column justify-content-center col-md-5 text-center p-0">
            <div>
              <img src="{!! asset('resources/views/master/assets/img/logo-white.png') !!}" width="25%" class="img-login "alt="">
            </div>
              <h5 class="font-weight-bold wh mt-4">Beliaja</h5>
              <p class="font-weight-normal wh smaller mb-4">Belanja Menyenangkan!</p>
              <p class="font-weight-normal wh baby-small mt-5 mb-2">Belum memiliki Akun?</p>

            <div class="">
                <ANY data-toggle="modal" data-target="#modalRegister" data-dismiss="modal">
                  <button type="submit"class="col-md-5 btn btn-primary sh1 ">DAFTAR</button>
                </ANY>
              </div>
          </section>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- END-POPUP-LOGIN -->

<!--POPUP-REGISTER -->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body p-0 bg-white">
        <button type="button" class="close m-2" data-dismiss="modal">&times;</button>
        <div>
        <div class="row" style="margin-left:0px">
          <section class="d-flex flex-column justify-content-center col-md-5 text-center p-0 bg-orange">
              <p class="font-weight-normal wh baby-small mb-1">Mau dapat PROMO setiap hari?</p>
              <p class="font-weight-bold wh baby-small mb-5">Bergabung sekarang!</p>
              <div>
              <img src="{!! asset('resources/views/master/assets/img/logo-white.png') !!}" width="25%" class="img-login "alt="">
            </div>
              <h5 class="font-weight-bold wh mt-4">Beliaja</h5>
              <p class="font-weight-normal wh baby-small mt-5 mb-2">Sudah punya akun?</p>

            <div class="">
              <ANY data-toggle="modal" data-target="#modalLogin" data-dismiss="modal">
                <button type="submit"class="col-md-5 btn btn-primary sh1">MASUK</button>
              </ANY>
            </div>
          </section>
          <section class="col-md-7 p-5 text-center">
            <h4 class="or font-weight-bold mb-5 mt-4">Daftarkan Akun Anda</h4>
            <form class="">
              <div class="form-group inputpd2 mt-3">
                <input type="text" class="baby-small form-control inputpd" id="inputUsername" placeholder="Nama depan">
              </div>
              <div class="form-group inputpd2 mt-3">
                <input type="text" class="baby-small form-control inputpd" id="inputLastName" placeholder="Lastname">
              </div>
              <div class="form-group inputpd2 mt-3">
                <input type="email" class="baby-small form-control inputpd" id="inputEmailLog" placeholder="Email">
              </div>
              <div class="form-group inputpd2">
                <input type="password" class="baby-small form-control inputpd" id="inputPasswordReg" placeholder="Password">
              </div>
              <div class="form-group inputpd2 mt-3">
                <input type="text" class="baby-small form-control inputpd" id="inputPhone" placeholder="Phone numbers">
              </div>
              <div class="text-left form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMeReg">
                <label class="form-check-label smaller" for="rememberMe">By creating an account, you agree to Beliaja's condition of use and privacy notice.</label>
              </div>
              <div class="">
                  <button type="submit"class="col btn btn-b btn-b-primary sh1 font-weight-bold my-2">DAFTAR</button>
              </div>
            </form>
          </section>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--END-POPUP-REGISTER -->

  @yield('content')

  <footer>
    <div class="pd-bt-15">
      <section class="row">
        <div class="col-md-3">
          <h6>Jelajahi Beliaja</h6>
          <ul>
            <li><a href="http://">Tentang Kami</a></li>
            <li><a href="http://">Karir</a></li>
            <li><a href="http://">Kebijakan Beliaja</a></li>
            <li><a href="http://">Kebijakan Privasi</a></li>
            <li><a href="http://">Blog</a></li>
            <li><a href="http://">Flash Sale</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>Beli</h6>
          <ul>
            <li><a href="http://">Belanja di Beliaja</a></li>
            <li><a href="http://">Cara Berbelanja</a></li>
            <li><a href="http://">Pembayaran</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>Bantuan</h6>
          <ul>
            <li><a href="http://">Syarat dan Ketentuan</a></li>
            <li><a href="http://">Pusat Resolusi</a></li>
            <li><a href="http://">Panduan Keamanan</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>Hubungi Kami</h6>
          <ul>
            <li><div class="d-flex align-items-center"><i class="mg-r-10 far fa-envelope"></i><div>info@beliaja.com</div></div></li>
            <li><div class="d-flex align-items-center"><i class="mg-r-10 fa fa-phone"></i><div>(0271) 235 155</div></div></li>
            <li><div class="d-flex align-items-center"><i class="mg-r-10 fab fa-whatsapp"></i><div>+62 895 5987 5897 </div></div></li>
          </ul>
        </div>
      </section>
    </div>
  </footer>
  <div class="foot">
    <div class="d-flex">
      <div class="d-flex">
        <div>
          <img src="{!! asset('resources/views/master/assets/img/logo-white.png') !!}" width="50" alt="">
        </div>
        <div class="ml-2">
          <p class="mb-1 smaller wh">Copyright &copy 2018, PT Beliaja <br> Hak Cipta Dilindungi</p>
        </div>
      </div>
      <div class="d-flex">
        <div>
          <p class="mb-0 small wh">Temukan kami di </p>
        </div>
        <div class="ml-2">
          <ul class="list-inline">
            <li class="list-inline-item"><a href=""><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fab fa-google-plus-g"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPTS GOES HERE -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="{!! asset('resources/views/master/assets/vendor/slick/slick.min.js') !!}"></script>
  <script src="{!! asset('resources/views/master/assets/vendor/swiper/swiper.min.js') !!}"></script>
  <script src="{!! asset('resources/views/master/assets/js/master.js') !!}"></script>
</body>
</html>
