@extends('master.layout.app')

@section('title','Edit Wish List')

@section('content')

<!-- ============ MODAL Lihat Cepat =============== -->
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
      <li class="breadcrumb-item">Wish List</li>
      <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
  </nav>

  <section class="detail-sec sec-white-md sec-more-pd sh2 flex-column">
    <h6 class="baby-big font-weight-bold">Wish List </h6>
    <div class="my-2 d-flex justify-content-between align-items-center">
      <div class="d-flex">
        <form class=" my-2 my-lg-0 mr-3">
          <div class="form-inline">
            <input class="vw-50 form-control mr-sm-2" type="search" placeholder="Pencarian ..." aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">
              <!-- <i class="fa fa-loop"></i> -->
              Cari
            </button>
          </div>
        </form>
        <a href="#" class="btn-b btn-b-primary sh3 font-weight-bold mr-3">Hapus Item</a>
        <a href="{{ URL::to('master/wish-list') }}" class="btn-b btn-b-secondary sh3 font-weight-bold">Batal</a>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
          Seleksi semua item
        </label>
      </div>
    </div>

    <section class="d-flex row my-3 pd-lr-5">
        @for ($i = 0; $i < 6; $i++)
        <div class="col-md-2 pd-lr-10 pb-3">
          <div class="card list-items wish-list sh">
            <div class="form-check">
              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
            </div>
            <a href="" class="ex-btn btn btn-danger smaller">x</a>
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
                  <a href="#"><i class="fas fa-heart"></i></a>
                </div>
                <button type="submit" class="btn-b btn-b-primary mt-1">Beli</button>
              </section>
            </div>
          </div>
        </div>
        @endfor
      </section>

  </section>

</section>
<!-- -->

@endsection
