@extends('master.layout.app')

@section('title','Homepage')

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
                <ANY data-toggle="modal" data-target="#add-to-cart" data-dismiss="modal">
                  <a href="#" class="btn-b btn-b-primary sh4">Tambah ke Keranjang</a>
                </ANY>
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

<!-- ============ MODAL ADD TO CART=============== -->
<div class="modal fade" id="add-to-cart" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body pd-30">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="gre2 d-flex">
          <i class="fas fa-check baby-big mr-2"></i>
          <p><span>1</span> produk berhasil ditambahkan ke keranjang belanja</p>
        </div>
        <section class="row">
          <div class="col-md-2">
            <figure>
              <img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')">
            </figure>
          </div>
          <div class="col-md-10 d-flex flex-column justify-content-between">
            <div>
              <p> <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum.</b> </p>
            </div>
            <div>
              <div>
                <p class="mb-0 text-muted normal"><strike>Rp 400.000</strike></p>

              </div>
              <h5 class="price">Rp 275.000</h5>
            </div>
          </div>
        </section>
      </div>
      <!-- Modal footer -->
      <div class="modal-cart m-2">
        <div class="">
          <span class="font-weight-bold baby-big d-inline">My shopping cart</span>
          <p class="text-muted d-inline smaller">(<span>1</span> product)</p>
        </div>
        <div class="my-4 d-flex justify-content-between">
          <div class="" >
            <p class="d-inline text-muted normal font-weight-bold">Subtotal :</p>
            <p class="d-inline baby-big font-weight-bold">Rp 350.000</p>
          </div>
          <div class="">
            <p class="d-inline text-muted normal font-weight-bold">Total :</p>
            <h4 class="d-inline price big">Rp 350.000</h4>
          </div>
        </div>
        <section class="d-flex row">
          <div class="col">
            <a href="{{ URL::to('master/cart')}}" class="btn-b btn-block btn-b-secondary sh4">Lihat Keranjang</a>
          </div>
          <div class="col">
            <ANY data-toggle="modal" data-target="#buy" data-dismiss="modal">
              <a href="{{ URL::to('master/modal-pay')}}" class="btn-b btn-block btn-b-primary sh4">Pembayaran</a>
            </ANY>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>


<!-- banner section -->
  <section id="banner-section" class="d-flex flex-column justify-content-end full-sec">
    <section class="d-grid grid-banner">
      <div class="big">
        <div class="swiper-container single-item-swipe">
          <div class="swiper-wrapper">
            <figure class="swiper-slide">
              <img src="{!! asset('resources/views/master/assets/img/bg-img.png') !!}" style="background-image:url('{!! asset('resources/views/master/assets/img/1.jpg') !!}')" alt="">
            </figure>
            <figure class="swiper-slide">
              <img src="{!! asset('resources/views/master/assets/img/bg-img.png') !!}" style="background-image:url('{!! asset('resources/views/master/assets/img/2.jpg') !!}')" alt="">
            </figure>
            <figure class="swiper-slide">
              <img src="{!! asset('resources/views/master/assets/img/bg-img.png') !!}" style="background-image:url('{!! asset('resources/views/master/assets/img/4.jpg') !!}')" alt="">
            </figure>
            <figure class="swiper-slide">
              <img src="{!! asset('resources/views/master/assets/img/bg-img.png') !!}" style="background-image:url('{!! asset('resources/views/master/assets/img/banner.png') !!}')" alt="">
            </figure>
          </div>
          <div class="swiper-pagination swiper-pagination-1"></div>
          <div class="swiper-button-prev swiper-button-prev-1"><i class="fas fa-chevron-left wh"></i></div>
          <div class="swiper-button-next swiper-button-next-1"><i class="fas fa-chevron-right wh"></i></div>
        </div>
      </div>
      <div>
        <figure>
          <img src="{!! asset('resources/views/master/assets/img/banner.png') !!}" alt="">
        </figure>
      </div>
      <div>
        <figure>
          <img src="{!! asset('resources/views/master/assets/img/banner.png') !!}" alt="">
        </figure>
      </div>
    </section>
    <section class="mg-t-20">
      <h5>Hot Item</h5>
      <section class="one-row-slider d-flex">
        <div class="swiper-container six-items-swipe">
          <div class="swiper-wrapper">
            <div class="card swiper-slide">
                <div class="card-body d-flex flex-column">
                  <figure>
                    <img src="{!! asset('resources/views/master/assets/img/bg-img.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')">
                  </figure>
                  <section class="d-flex">
                    <h6 class="card-subtitle text-muted small mt-1">Card subtitle with</h6>
                  </section>
                </div>
              </div>
            @for($i=0;$i<12;$i++)
              <div class="card swiper-slide">
                <div class="card-body d-flex flex-column">
                  <figure>
                    <img src="{!! asset('resources/views/master/assets/img/bg-img.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')">
                  </figure>
                  <section class="d-flex">
                    <h6 class="card-subtitle text-muted small mt-1">Card subtitle</h6>
                  </section>
                </div>
              </div>
            @endfor
          </div>
          <div class="swiper-button-prev swiper-button-prev-6"><i class="fas fa-chevron-left wh"></i></div>
          <div class="swiper-button-next swiper-button-next-6"><i class="fas fa-chevron-right wh"></i></div>
        </div>
      </section>
    </section>
  </section>
<!-- /banner section -->

<!-- top deals section -->
<section id="yel-high-sec" class="d-flex">
  <div class="title col-md-2">
    <div class="image">
      <img src="{!! asset('resources/views/master/assets/img/price-tag.png') !!}" alt="Top Deals" height="40">
    </div>
    <h3>TOP <br> DEALS</h3>
  </div>
  <div class="items col-md-10">
    <div class="swiper-container four-items-swipe">
      <section class="swiper-wrapper one-row-slider d-flex">
        @for ($i = 0; $i < 9; $i++)
          <div class="swiper-slide">
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
                  <a href="{{ URL::to('master/detail-product')}}"><h6 class="card-title small"> Lorem ipsum dolor sit amet with more lines</h6></a>
                  <div class="d-flex">
                    <div>
                      <p class="small text-muted"><strike>Rp 50.000</strike></p>
                      <h4 class="price">Rp 75.000</h4>
                    </div>
                    <a href="#"><i class="far fa-heart"></i></a>
                  </div>
                </section>
              </div>
            </div>
          </div>
          @endfor
          <div class="swiper-slide">
          <div class="card list-items sh">
            <div class="card-body d-flex flex-column">
              <div class="box-sale">
                <p class="mb-0">
                  80%<br>SALE
                </p>
              </div>
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
                  </div>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </section>
            </div>
          </div>
        </div>
        </section>
        <div class="swiper-button-prev swiper-button-prev-4"><i class="fas fa-chevron-left wh"></i></div>
        <div class="swiper-button-next swiper-button-next-4"><i class="fas fa-chevron-right wh"></i></div>
    </div>
  </div>
</section>
<!-- /top deals section -->

<!-- special category section -->
<section class="spec-cat-sec">
  <div class="title">
    <h5>FASHION TRENDS</h5>
    <p><a href="{{ URL::to('master/list-product')}}">Lihat Semua <i class="fa fa-chevron-right"></i></a></p>
  </div>
  <section class="d-flex row">
  @for ($i = 0; $i < 6; $i++)
    <div class="col-md-2">
      <div class="card list-items sh">
        <div class="card-body d-flex flex-column">
          <div class="box-sale box-sale-round">
            <p class="mb-0">
              80%
            </p>
          </div>
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
</section>
<!-- /special category section -->

<!-- special category section -->
<section class="spec-cat-sec">
  <div class="title">
    <h5>BEAUTY CARE</h5>
    <p><a href="{{ URL::to('master/list-product')}}">Lihat Semua <i class="fa fa-chevron-right"></i></a></p>
  </div>
  <section class="d-flex row">
    @for ($i = 0; $i < 6; $i++)
    <div class="col-md-2">
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
</section>
<!-- /special category section -->

<!-- middle section -->
<section id="mid-sec">
  <div class="d-flex">
    <div class="d-flex">
      <div>
        <h4>Ingin mendapatkan PROMO setiap hari?</h4>
        <p>Feel-good shopping only in <span class="or"> <b>Beliaja</b> </span></p>
      </div>
      <a href="" class="btn btn-primary">Daftar Sekarang</a>
    </div>
    <figure class="col-md-4">
      <img src="{!! asset('resources/views/master/assets/img/vector.png') !!}" alt="">
    </figure>
  </div>
</section>
<!-- /middle section -->

<!-- special category section -->
<section class="spec-cat-sec">
  <div class="title">
    <h5>Kategori</h5>
    <!-- <p><a href="#">Lihat Semua <i class="fa fa-chevron-right"></i></a></p> -->
  </div>
  <section class="d-grid grid-10-col">
    <div>
      <a href="#">
        <figure><img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/box_category.png') !!}')"></figure>
      </a>
    </div>
    @for ($i = 0; $i < 8; $i++)
    <div>
      <a href="#">
        <figure><img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/box_category_1.png') !!}')"></figure>
      </a>
    </div>
    @endfor
    <div>
      <a href="#">
        <figure><img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/box_category.png') !!}')"></figure>
      </a>
    </div>
  </section>
</section>
<!-- /special category section -->

<!-- news section -->
<section class="spec-cat-sec">
  <section class="d-flex row align-items-center justify-content-between dashed-b-40">
    <div class="col-md-10">
      <section class="row">
        @for ($i = 0; $i < 2; $i++)
          <div class="col-md-6 news">
            <h6> Lorem ipsum dolor sit amet consectetur. </h6>
            <section class="row">
              <div class="col-md-5">
                <figure><img src="{!! asset('resources/views/master/assets/img/bg-img.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/box_category.png') !!}')"></figure>
              </div>
              <div class="col-md-7">
                <p class="small"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt laborum doloremque accusamus vitae perspiciatis pariatur voluptas veniam repudiandae quam dolore unde ad, ut totam maiores fugit temporibus. </p>
                <a href="" class="btn-b btn-b-primary sh4 small">Read more</a>
              </div>
            </section>
          </div>
        @endfor
      </section>
    </div>
    <div class="col-md-2 d-flex justify-content-end">
      <a href="" class="small">Load More News <i class="fa fa-chevron-right"></i></a>
    </div>
  </section>
</section>
<!-- /news section -->

<!-- news section -->
<section class="spec-cat-sec mb-5">
  <h5 class="mb-4"> Mengapa memilih berbelanja di <span class="or"> <b>Beliaja</b>  </span> ?</h5>
      <section class="row">
        @for ($i = 0; $i < 3; $i++)
          <div class="col-md-4">
            <section class="row d-flex align-items-center">
              <div class="col-md-4">
                <figure><img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/box_category.png') !!}')" class="fully-rounded"></figure>
              </div>
              <div class="col-md-8">
                <h6 class="or font-weight-bold">Easy</h6>
                <p class="smaller mb-0"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt laborum doloremque accusamus vitae perspiciatis pariatur  </p>
              </div>
            </section>
          </div>
        @endfor
      </section>
</section>
<!-- /news section -->

@endsection
