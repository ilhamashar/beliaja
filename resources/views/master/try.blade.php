@extends('master.layout.app')

@section('title','Nyoba bae')

@section('content')
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
        <figure class="swiper-slide">
          <img src="{!! asset('resources/views/master/assets/img/bg-img.png') !!}" style="background-image:url('{!! asset('resources/views/master/assets/img/5.jpg') !!}')" alt="">
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

@endsection
