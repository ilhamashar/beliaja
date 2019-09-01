@extends('master.layout.app')

@section('title','Detail Product')

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
                  <a href="#" class="btn-b btn-b-secondary sh4">Lihat Detail</a>
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
      <li class="breadcrumb-item"><a href="#">Kategori</a></li>
      <li class="breadcrumb-item"><a href="#">Sub Kategori</a></li>
      <li class="breadcrumb-item active" aria-current="page">Nama Barang</li>
    </ol>
  </nav>

  <section class="detail-sec">
    <div class="detail-image d-flex flex-column">
      <figure>
        <img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')">
      </figure>
      <section class="d-flex my-3 detail-image-item">
        <div class="detail-image-items">
          <figure><img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/003.jpg') !!}')"></figure>
        </div>
        <div class="detail-image-items">
          <figure><img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')"></figure>
        </div>
        <div class="detail-image-items">
          <figure><img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/005_small.png') !!}')"></figure>
        </div>
        <div class="detail-image-items">
          <figure><img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/ver002.png') !!}')"></figure>
        </div>
      </section>
      <section class="sec-white-md d-flex justify-content-between align-items-center sh3">
        <div>
          <a href="" class="btn-b btn-b-secondary sh4"><i class="fas fa-heart"></i> Suka</a>
        </div>
        <div class="d-flex align-items-center">
          <span>Share : </span>
          <ul class="ml-3 list-inline">
            <li class="list-inline-item ro ro-fb"><i class="fab fa-facebook-f"></i></li>
            <li class="list-inline-item ro ro-tw"><i class="fab fa-twitter"></i></li>
            <li class="list-inline-item ro ro-gplus"><i class="fab fa-google-plus-g"></i></li>
            <li class="list-inline-item ro ro-pin"><i class="fab fa-pinterest-p"></i></li>
            <li class="list-inline-item ro ro-line"><i class="fab fa-line"></i></li>
          </ul>
        </div>
      </section>
    </div>
    <div class="detail-desc">
      <section class="sec-white-md title sh3">
        <h6 class="baby-big font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, nisi. </h6>
        <div class="d-flex justify-content-start my-3">
         <ul class="list-inline ratings mr-3">
           @for ($j = 0; $j < 4;$j++)
             <li class="list-inline-item ye"><i class="fas fa-star"></i></li>
           @endfor
           <li class="list-inline-item ye"> <i class="fas fa-star-half-alt"></i></li>
         </ul>
         <p class="mb-0 small">4.8 out of 5 <span class="text-muted">(34 reviews)</span></p>
        </div>
        
         <p class="small text-muted mb-0"><strike>Rp 50.000</strike></p>
         <div class="d-flex align-items-center justify-content-start">
          <h4 class="big price mb-0 mr-3">Rp 75.000</h4>
          <div class="box-sale-left">
            69% SALE
          </div>
         </div>
         <i class="smaller text-muted">Last updated: 02-02-2018 11:59:59</i>

         <div class="mt-3">
          <p class="font-weight-bold mb-0">Informasi</p>
          <table class="table table-sm baby-small table-borderless table-striped">
            <tr>
              <td width="10%"><i class="fas fa-cart-plus"></i></td>
              <td>Terjual</td>
              <td>:</td>
              <td>5468</td>
            </tr>
            <tr>
              <td><i class="fas fa-eye"></i></td>
              <td>Dilihat</td>
              <td>:</td>
              <td>5468</td>
            </tr>
            <tr>
              <td><i class="fas fa-heart"></i></td>
              <td>Disukai</td>
              <td>:</td>
              <td>5468</td>
            </tr>
            <tr>
              <td><i class="fas fa-boxes"></i></td>
              <td>Stok</td>
              <td>:</td>
              <td>5468</td>
            </tr>
          </table>
         </div>

        <form class="baby-small">
          <div class="form-group row d-flex align-items-center">
            <label for="staticEmail" class="col-sm-2 col-form-label">Warna</label>
            <div class="col-sm-10">
              <select class="custom-select wd-auto">
                <option selected>Hitam</option>
                <option value="1">Merah</option>
                <option value="2">Biru</option>
              </select>
            </div>
          </div>
          <div class="form-group row d-flex align-items-center">
            <label for="inputPassword" class="col-sm-2 col-form-label">Variasi</label>
            <div class="col-sm-10">
              <ul class="list-inline mb-2">
                <li class="list-inline-item mt-2">
                  <button class="btn btn-sm btn-outline-secondary" type="button">S</button>
                </li>
                <li class="list-inline-item mt-2">
                  <button class="btn btn-sm btn-outline-warning active" type="button">M</button>
                </li>
                <li class="list-inline-item mt-2">
                  <button class="btn btn-sm btn-outline-secondary" type="button">L</button>
                </li>
                <li class="list-inline-item mt-2">
                  <button class="btn btn-sm btn-outline-secondary" type="button">XL</button>
                </li>
                <li class="list-inline-item mt-2">
                  <button class="btn btn-sm btn-outline-secondary" type="button">XXL</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="form-group row d-flex align-items-center">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kuantitas</label>
            <div class="col-sm-10">
              <div class="input-group input-number-group">
                <div class="input-group-button">
                  <span class="input-number-decrement">-</span>
                </div>
                <input class="input-number" type="number" value="1" min="0" max="1000">
                <div class="input-group-button">
                  <span class="input-number-increment">+</span>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex row pt-3">
            <div class="col-md-4 d-flex">
              <button class="btn btn-primary btn-block normal sh4"><i class="far fa-comment"></i> Chat Penjual</button>
            </div>
            <div class="col-md-8 pl-0">
              <button class="btn-b btn-b-primary btn-block normal sh4"><b>TAMBAH KE KERANJANG</b></button>
            </div>
          </div>
          <p class="text-right mt-2 mb-0"><a href="">Learn how to buy</a></p>
        </form>

      </section>
    </div>
    <div class="detail-info py-2 pl-2 baby-small">
      <h6><b>Pengiriman</b></h6>
      <div class="d-flex my-2 baby-small">
        <i class="fas fa-truck mt-1"></i>
        <p class="pd-lr-15 mb-0">
          <span>DKI Jakarta, Kota Jakarta Barat, Cengkareng</span>
        </p>
        <a href="">UBAH</a>
      </div>
      <div>
        <p class="text-muted mb-2 mt-3">
          Metode Pengiriman
        </p>
        <div>
          <div class="mb-2 d-flex justify-content-between">
            <span>Flat rate</span>
            <span><b>Rp 10.000</b></span>
          </div>
          <div class="mb-2 d-flex justify-content-between">
            <span>Local pickup</span>
            <span><b>Rp 10.000</b></span>
          </div>
          <div class="mb-2 d-flex justify-content-between">
            <span>Free shipping</span>
            <span><b>Rp 0</b></span>
          </div>
          <div class="small mt-1 d-flex justify-content-end">
            <a href="#">Pilihan lain</a>
          </div>
        </div>
      </div>
      <div class="sec-white-md sh2 my-4 text-center">
        <h6><b>PESAN SEBELUM</b></h6>
        <span class="big or"><b>16:00</b></span>
        <br>
        <span class="baby-small">Agar barang dikirim hari ini</span>
        <p class="small mb-0 mt-1 text-muted">Waktu pelayanan : Senin - Sabtu <br> pukul 7:00 - 16:00 WIB</p>
      </div>
      <h6 class="mb-1 mt-3"><b>Pembayaran</b></h6>
      <div>
        <p class="text-muted mb-2 mt-3">
          Metode Pembayaran
        </p>
      </div>
      <div>
          <div class="mb-2 d-flex justify-content-between">
            <span>PayPal</span>
            <span><i class="fas fa-check-circle gre"></i></span>
          </div>
          <div class="mb-2 d-flex justify-content-between">
            <span>Doku</span>
            <span><i class="fas fa-check-circle gre"></i></span>
          </div>
          <div class="mb-2 d-flex justify-content-between">
            <span>Kartu Kredit</span>
            <span><i class="fas fa-check-circle gre"></i></span>
          </div>
          <div class="mb-2 d-flex justify-content-between">
            <span>Transfer Rekening</span>
            <span><i class="fas fa-check-circle gre"></i></span>
          </div>
      </div>
    </div>
  </section>

  <!-- START SPECIFIC SECTION -->
  <section class="specific-sec">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Detail Produk</a>
        <a class="nav-item nav-link " id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">Ulasan <span class="font-weight-normal">(34)</span></a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <section class="row">
          <div class="col-md-1">
            <span class="or"><b>Spesikasi</b></span>
          </div>
          <div class="col-md-11">
             <table class="table table-sm table-borderless">
            <tr>
              <td>Kategori</td>
              <td>:</td>
              <td class="col-1">Lorem</td>
            </tr>
            <tr>
              <td>Berat</td>
              <td>:</td>
              <td>500 gram</td>
            </tr>
            <tr>
              <td>Merk</td>
              <td>:</td>
              <td>Lorem, ipsum</td>
            </tr>
            <tr>
              <td>Garansi</td>
              <td>:</td>
              <td>Seumur hidup wohoho</td>
            </tr>
          </table>
          </div>
        </section>

        <section class="row">
          <div class="col-md-1">
            <span class="or"><b>Deskripsi</b></span>
          </div>
          <div class="col-md-11">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, hic facilis. Assumenda, ratione ipsam veniam soluta temporibus dignissimos aliquam quidem nesciunt quisquam incidunt est dolores animi hic voluptate illo quam.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque enim, quidem totam officiis in eligendi. Est qui dolore quasi nostrum.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nam amet praesentium numquam mollitia optio debitis fugiat ab tenetur quisquam quibusdam eveniet earum obcaecati veritatis veniam officia similique pariatur est corporis possimus, vel iste beatae! Repellat cum eaque hic? Dignissimos nam ab quo harum, debitis quod vel minima, adipisci similique veniam corrupti ea dicta assumenda quisquam necessitatibus, dolorem aut at.</p>
          </div>
        </section>
      </div>
      <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
        <section class="d-flex justify-content-center align-items-center">
          <div class="d-flex flex-column align-items-center px-3">
            <div class="d-flex align-items-end">
              <h1 class="mb-0">4.8</h1>
              <p class="mb-1">/ 5</p>
            </div>
            <ul class="list-inline ratings">
              @for ($j = 0; $j < 4;$j++)
                <li class="list-inline-item ye"><i class="fas fa-star"></i></li>
              @endfor
              <li class="list-inline-item ye"> <i class="fas fa-star-half-alt"></i></li>
            </ul>
            <p class="small text-muted">34 reviews</p>
          </div>
          <div class="rating-detail small">
            <div class="d-flex align-items-center">
              <ul class="list-inline ratings">
                @for ($j = 0; $j < 5;$j++)
                  <li class="list-inline-item ye"><i class="fas fa-star"></i></li>
                @endfor
              </ul>
              <div class="progress mx-3">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="">14</span>
            </div>

            <div class="d-flex align-items-center">
              <ul class="list-inline ratings">
                @for ($j = 0; $j < 4;$j++)
                  <li class="list-inline-item ye"><i class="fas fa-star"></i></li>
                @endfor
                <li class="list-inline-item"><i class="far fa-star"></i></li>
              </ul>
              <div class="progress mx-3">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="">8</span>
            </div>

            <div class="d-flex align-items-center">
              <ul class="list-inline ratings">
                @for ($j = 0; $j < 3;$j++)
                  <li class="list-inline-item ye"><i class="fas fa-star"></i></li>
                @endfor
                @for ($j = 0; $j < 2;$j++)
                <li class="list-inline-item"><i class="far fa-star"></i></li>
                @endfor
              </ul>
              <div class="progress mx-3">
                <div class="progress-bar w-25" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="">1</span>
            </div>

            <div class="d-flex align-items-center">
              <ul class="list-inline ratings">
                @for ($j = 0; $j < 2;$j++)
                  <li class="list-inline-item ye"><i class="fas fa-star"></i></li>
                @endfor
                @for ($j = 0; $j < 3;$j++)
                <li class="list-inline-item"><i class="far fa-star"></i></li>
                @endfor
              </ul>
              <div class="progress mx-3">
                <div class="progress-bar w-25" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="">1</span>
            </div>
            <!-- START RATING 5 -->
            <div class="d-flex align-items-center">
              <ul class="list-inline ratings">
                @for ($j = 0; $j < 1;$j++)
                  <li class="list-inline-item ye"><i class="fas fa-star"></i></li>
                @endfor
                @for ($j = 0; $j < 4;$j++)
                <li class="list-inline-item"><i class="far fa-star"></i></li>
                @endfor
              </ul>
              <div class="progress mx-3">
                <div class="progress-bar w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="">1</span>
            </div>
            <!-- START RATING 5 -->
          </div>
        </section>
        <!-- START REVIEW -->
        <section class="review-detail">
          <h6 class="or">Ulasan Produk</h6>
          @for($j=0;$j<6;$j++)
          <div class="review-detail-item">
            <div class="d-flex justify-content-between">
              <div>
                <p class="mb-1 or">John Doe<br><span class="smaller text-muted font-italic">26 Juli 2018 11:59:59 WIB</span></p>
              </div>
              <div>
                <h1 class="gra"><i class="fas fa-quote-right"></i></h1>
              </div>
            </div>
            <section>
              <ul class="list-inline ratings smaller">
                @for ($k = 0; $k < 3;$k++)
                  <li class="list-inline-item ye"><i class="fas fa-star"></i></li>
                @endfor
                @for ($k = 0; $k < 2;$k++)
                <li class="list-inline-item"><i class="far fa-star"></i></li>
                @endfor
              </ul>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero earum quis, odit nam rem.</p>
            </section>
          </div>
          @endfor
        </section>
          <!-- END REVIEW -->
      </div>
    </div>
  </section>
  <!-- END SPECIFIC SECTION -->

  <!-- START RELATED PRODUCT -->
  <h6 class="font-weight-bold mb-3">Produk yang berkaitan</h6>
  <section class="d-flex row">
    @for ($i = 0; $i < 6; $i++)
    <div class="col-md-2 pb-3">
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
  <!-- END RELATED PRODUCT -->

</section>
<!-- -->

@endsection
