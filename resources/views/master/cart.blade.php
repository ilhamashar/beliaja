@extends('master.layout.app')

@section('title','Keranjang Belanja')

@section('content')
<!-- ============ MODAL BELI =============== -->
<div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Informasi Pengiriman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <section class="row d-flex buy-fix-height">
          <div class="col-md-6 d-flex flex-column">
            <h6 class="text-muted">Nama produk</h6>
            <div class="list-gray">
              <ul class="list-unstyled small">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
              </ul>
            </div>
            <h6 class="align-self-end my-2 text-muted small">Total : Rp <span>800.000</span></h6>
          </div>
          <div class="col-md-6 d-flex flex-column justify-content-between">
            <div>
              <h6 class="text-muted"> Catatan untuk Beliaja </h6>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Contoh : T shirt ukuran L; warna merah"></textarea>
              </div>
            </div>
          </div>
        </section>
        <section class="my-2">
          <div class="d-flex justify-content-between">
            <h6 class="">Tujuan Pengiriman</h6>
            <a href="" data-toggle="modal" data-target="#add_address" class="small">Tambah Alamat Baru <i class="fas fa-chevron-right"></i></a>
          </div>
          <div class="bg-gray p-3 d-flex align-items-center justify-content-between">
            <i class="fas fa-map-marker-alt"></i>
            <div class="mx-3">
              <h6 class="baby-small mb-1">Alamat Kost</h6>
              <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, illum et est optio neque placeat ab perspiciatis sed fugit minima!</p>
            </div>
            <select name="" class="custom-select wd-auto" id="">
              <option value="a" selected>Alamat Kost</option>
              <option value="1">Lorem, ipsum.</option>
            </select>
          </div>
        </section>
        <section class="row py-2">
          <div class="col-md-4">
            <h6 class="text-muted">Metode Pengiriman</h6>    
            <select name="" class="custom-select wd-auto" id="">
              <option value="a" selected>Free Shipping</option>
              <option value="1">Local pickup</option>
              <option value="1">Lorem, ipsum.</option>
            </select>        
          </div>
          <div class="col-md-8 d-flex justify-content-end align-items-center">
            <div class="d-flex align-items-end flex-column">
              <h6 class="text-muted">Biaya Pengiriman</h6>
              <span class="font-weight-bold text-right">Rp <span>8.000</span></span>
            </div>
            <div class="d-flex align-items-end flex-column ml-3">
              <h6 class="text-muted">Total Pembayaran</h6>
              <span class="font-weight-bold text-right">Rp <span>808.000</span></span>
            </div>
          </div>
        </section>
        <a href="{{ URL::to('master/gotopay')}}" class="btn-b btn-b-primary btn-block sh4 mt-3">Simpan</a>
      </div>
    </div>
  </div>
</div>
<!-- -->

<!-- START MODAL ADD NEW ADDRESS -->
<div class="modal fade" id="add_address" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <a href="" class="mb-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-chevron-left"></i> Kembali</span>
        </a>
        <section class="bg-gray mt-3 p-3 mb-2">
          <form action="">
            <div class="form-group">
              <label for="">Alamat disimpan sebagai</label>
              <input type="text" class="form-control" id="" placeholder="Nama Alamat">
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Nama Penerima</label>
                  <input type="text" class="form-control" placeholder="Nama Penerima">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">No. HP Penerima</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">+62</span>
                    </div>
                    <input type="text" class="form-control" placeholder="No HP" aria-label="Username" aria-describedby="">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Kode Pos</label>
                  <input type="text" class="form-control" placeholder="Kode Post">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Provinsi</label>
                  <select name="" class="custom-select" id="">
                    <option value="1">Lorem, ipsum.</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Kotamadya/Kabupaten</label>
                  <select name="" class="custom-select" id="">
                    <option value="1">Lorem, ipsum.</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Kecamatan</label>
                  <select name="" class="custom-select" id="">
                    <option value="1">Lorem, ipsum.</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <textarea name="" id="" class="form-control" rows="5" placeholder="Alamat lengkap penerima"></textarea>
            </div>
          </form>
        </section>
        <div class="d-flex justify-content-end">
          <a href="" data-toggle="modal" data-target="#buy" class="btn-b btn-b-primary sh4 mt-3">Tambah Alamat</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL ADD NEW ADDRESS -->

<section class="flat-wrap">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Keranjang Belanja</li>
    </ol>
  </nav>

  <section class="detail-sec sec-white-md sec-more-pd sh2 flex-column">
    <h6 class="baby-big font-weight-bold">Keranjang Belanja </h6>
    <section class="row">
    <!-- START LEFT CONTENT -->
      <div class="col-md-8">
        <div class="d-flex align-items-center justify-content-between">
          <div class="form-check">
            <input class="form-check-input mr-1" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Seleksi semua item
            </label>
          </div>
          <a href="" class="btn btn-light">DELETE</a>
        </div>
        <section class="cart">
        @for ($a = 0; $a < 5; $a++)
          <div class="d-flex">
            <div class="form-check align-self-center mr-1">
              <input class="form-check-input" type="checkbox" value="" id="select-{{$a}}">
            </div>
            <div class="d-flex">
              <figure class="col-md-3 pl-0">
                <img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')">
              </figure>
              <div class="d-flex flex-column justify-content-between">
                <div>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex eveniet culpa amet.</p>
                </div>
                <div>
                  <h6 class="font-weight-bold mb-0">Rp 75.000</h6>
                  <p class="small mb-0"><span class="text-muted"><strike>Rp 50.000</strike> </span><span>-33%</span></p>
                </div>
                <div>
                  <div class="form-group d-flex align-items-center mb-0 py-0">
                    <!-- <label for="inputPassword" class="col-form-label mr-2 text-muted">Kuantitas</label> -->
                    <div class="">
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
                </div>
              </div>
              <a href="#" class="ml-auto align-self-end btn-b btn-b-secondary small sh3"><i class="fas fa-heart mr-1"></i>Pindah ke Wish List</a>
            </div>
            <a href="#" class="big bla ml-auto">x</a>
          </div>
        @endfor
        </section>
      </div>
      <!-- END LEFT CONTENT -->
      <!-- START RIGHT CONTENT -->
      <div class="col-md-4">
        <div class="detail-info py-2 pl-2 baby-small">
          <h6><b>Lokasi</b></h6>
          <div class="d-flex my-2 baby-small justify-content-between">
            <div class="d-flex">
              <i class="fas fa-map-marker-alt mt-1"></i>
              <p class="pd-lr-15 mb-0">
                <span>DKI Jakarta, Kota Jakarta Barat, Cengkareng</span>
              </p>
            </div>
            <a href="">UBAH</a>
          </div>
          <h6 class="pt-3"><b>Ringkasan Pemesanan</b></h6>
          <div class="mb-2 d-flex justify-content-between">
            <span class="text-muted">Sub Total (2 barang)</span>
            <span><b>Rp 150.000</b></span>
          </div>
          <div class="mb-2 d-flex justify-content-between">
            <span class="text-muted">Biaya Pengiriman</span>
            <span><b>Rp 30.000</b></span>
          </div>
          <div class="d-flex row">
            <h6 class="col-md-8"><span class="badge badge-secondary btn-block"><i class="fas fa-tag mr-2"></i> Potongan 100 ribu</span></h6>
            <div class="col-md-4 pl-0">
              <a href="" class="btn btn-primary btn-block">Gunakan</a>              
            </div>
          </div>
          <div class="my-3 pd-t-10 border-t-gra d-flex align-items-center justify-content-between">
            <span class="">Total</span>
            <span class="or big"><b>Rp 180.000</b></span>
          </div>
          <a href="" data-toggle="modal" data-target="#buy" class="btn-b btn-b-primary btn-block sh4">Lanjut ke Pembayaran</a>
        </div>  
      </div>
      <!-- END RIGHT CONTENT -->
    </section>

  </section>

</section>
<!-- -->

@endsection
