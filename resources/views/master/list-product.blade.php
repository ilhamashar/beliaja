@extends('master.layout.app')

@section('title','List Product')

@section('content')
<!-- ============ MODAL QUICK PREVIEW =============== -->
<div class="modal fade" id="quick_preview" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body pd-30">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <section class="row">
          <div class="col-md-5">
            <figure>
              <img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')">
            </figure>
          </div>
          <div class="col-md-7 d-flex flex-column justify-content-between">
            <div>
              <p> <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.</b> </p>
              <table class="col-md-6 text-muted small">
                <tr>
                  <td>Berat</td>
                  <td>:</td>
                  <td>1 kg</td>
                </tr>
                <tr>
                  <td>Minimum Order</td>
                  <td>:</td>
                  <td>1 pcs</td>
                </tr>
              </table>
            </div>
            <div>
              <p class="mb-0 text-muted"><strike>Rp 400.000</strike></p>
              <h4 class="price big">Rp 275.000</h4>
            </div>
            <div>
              <section class="d-flex">
                <div class="mr-4">
                  <a href="#" class="btn-b btn-b-primary sh4">Tambah ke Keranjang</a>
                </div>
                <div>
                  <a href="{{ URL::to('master/detail-product')}}" class="btn-b btn-b-secondary sh4">Lihat Detail</a>
                </div>
              </section>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- -->
<section class="flat-wrap">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kategori Barang</li>
    </ol>
  </nav>

  <section class="sec-white-md title">
    <section class="d-flex">
      <h6><span>Kategori</span> "<b>Perlengkapan Summit</b>"</h6>
      <div class="d-flex">
        <span>Urutan</span>
        <ul class="list-inline">
          <li class="list-inline-item">
            <button class="btn-b sh4 btn-b-secondary" type="button">Lorem, ipsum.</button>
          </li>
          <li class="list-inline-item">
            <button class="btn-b sh4 btn-b-secondary" type="button">Lorem, ipsum.</button>
          </li>
          <li class="list-inline-item">
            <button class="btn-b sh4 btn-b-secondary" type="button">Lorem, ipsum.</button>
          </li>
          <li class="list-inline-item">
            <button class="btn-b sh4 btn-b-primary" type="button">Lorem, ipsum.</button>
          </li>
        </ul>
      </div>
    </section>
  </section>

  <section class="row pd-t-20">
    <div class="col-md-2 bot-line-list">
      <h6><b><i class="fas fa-filter"></i> SARING</b></h6>
      <div class="bot-line">
        <h6>Berdasarkan Kategori</h6>
        <div class="small">
        @for ($i = 0; $i < 4; $i++)
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck{{$i}}">
            <label class="form-check-label" for="exampleCheck{{$i}}">Subkategori <span class="text-muted">(1245)</span></label>
          </div>
        @endfor
        </div>
      </div>

      <div class="bot-line">
        <h6>Rentang Harga</h6>
        <div class="small">
          <div class="input-group input-group-sm mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Rp</span>
            </div>
            <input type="number" class="form-control" placeholder="Min" aria-label="Min" aria-describedby="basic-addon1">
          </div>
          <div class="input-group input-group-sm mt-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Rp</span>
          </div>
          <input type="number" class="form-control" placeholder="Max" aria-label="Max" aria-describedby="basic-addon1">
        </div>
        </div>
      </div>

      <div class="bot-line">
        <h6>Warna</h6>
        <ul class="list-inline mb-2">
          <li class="list-inline-item">
            <label class="checkbox-wrapper">
              <input type="checkbox">
              <span class="checkmark bg-orange"></span>
            </label>
          </li>
          <li class="list-inline-item">
            <label class="checkbox-wrapper">
              <input type="checkbox">
              <span class="checkmark bg-red"></span>
            </label>
          </li>
          <li class="list-inline-item">
            <label class="checkbox-wrapper">
              <input type="checkbox">
              <span class="checkmark bg-blue"></span>
            </label>
          </li>
          <li class="list-inline-item">
            <label class="checkbox-wrapper">
              <input type="checkbox">
              <span class="checkmark bg-green"></span>
            </label>
          </li>
        </ul>
      </div>

      <div class="bot-line">
        <h6>Rating</h6>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            <ul class="list-inline ratings">
              @for ($j = 0; $j < 5;$j++)
                <li class="list-inline-item smaller ye"><i class="fas fa-star"></i></li>
              @endfor
            </ul>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
          <label class="form-check-label" for="defaultCheck2">
            <ul class="list-inline ratings">
              @for ($j = 0; $j < 4;$j++)
                <li class="list-inline-item smaller ye"><i class="fas fa-star"></i></li>
              @endfor
              <li class="list-inline-item smaller"> <i class="far fa-star"></i></li>
            </ul>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
          <label class="form-check-label" for="defaultCheck3">
            <ul class="list-inline ratings">
              @for ($j = 0; $j < 3;$j++)
                <li class="list-inline-item smaller ye"><i class="fas fa-star"></i></li>
              @endfor
              @for ($j = 0; $j < 2;$j++)
              <li class="list-inline-item smaller"> <i class="far fa-star"></i></li>
              @endfor
            </ul>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
          <label class="form-check-label" for="defaultCheck4">
            <ul class="list-inline ratings">
              @for ($j = 0; $j < 2;$j++)
                <li class="list-inline-item smaller ye"><i class="fas fa-star"></i></li>
              @endfor
              @for ($j = 0; $j < 3;$j++)
              <li class="list-inline-item smaller"> <i class="far fa-star"></i></li>
              @endfor
            </ul>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
          <label class="form-check-label" for="defaultCheck5">
            <ul class="list-inline ratings">
              @for ($j = 0; $j < 1;$j++)
                <li class="list-inline-item smaller ye"><i class="fas fa-star"></i></li>
              @endfor
              @for ($j = 0; $j < 4;$j++)
              <li class="list-inline-item smaller"> <i class="far fa-star"></i></li>
              @endfor
            </ul>
          </label>
        </div>
      </div>

      <div class="bot-line">
        <h6>Ukuran</h6>
        <ul class="list-inline mb-2">
          <li class="list-inline-item mt-2">
            <button class="btn btn-sm btn-outline-secondary" type="button">S</button>
          </li>
          <li class="list-inline-item mt-2">
            <button class="btn btn-sm btn-outline-secondary" type="button">M</button>
          </li>
          <li class="list-inline-item mt-2">
            <button class="btn btn-sm btn-outline-secondary" type="button">L</button>
          </li>
          <li class="list-inline-item mt-2">
            <button class="btn btn-sm btn-outline-warning active" type="button">XL</button>
          </li>
          <li class="list-inline-item mt-2">
            <button class="btn btn-sm btn-outline-secondary" type="button">XXL</button>
          </li>

        </ul>
      </div>

    </div>
    <div class="col-md-10">
      <section class="d-flex row">
        @for ($i = 0; $i < 25; $i++)
        <div class="col-md-2 pd-lr-5 pb-3">
          <div class="card list-items sh">
            <div class="card-body d-flex flex-column">
              <figure>
                <img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')">
                <div class="overlay"></div>
                <figcaption>
                  <a href="#" data-toggle="modal" data-target="#quick_preview" class="btn btn-primary btn-sm">Lihat Cepat</a>
                </figcaption>
              </figure>
              <section class="d-flex">
                <a href="{{ URL::to('master/detail-product')}}"><h6 class="card-title small"> Lorem ipsum dolor sit amet. </h6></a>
                <div class="d-flex">
                  <div>
                    <p class="small text-muted"><strike>Rp 50.000</strike></p>
                    <h4 class="price">Rp 75.000</h4>
                    <ul class="list-inline ratings">
                      @for ($j = 0; $j < 4;$j++)
                        <li class="list-inline-item smaller ye"><i class="fas fa-star"></i></li>
                      @endfor
                      <li class="list-inline-item smaller ye"> <i class="fas fa-star-half-alt"></i></li>
                    </ul>
                  </div>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </section>
            </div>
          </div>
        </div>
        @endfor
      </section>
      <nav aria-label="Page navigation" class="pd-15">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="k" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item">
            <a class="page-link" href="#">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </section>

</section>
<!-- -->

@endsection
