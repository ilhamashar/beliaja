@extends('master.layout.app')

@section('title','Pembayaran')

@section('content')

<!-- -->
<section class="flat-wrap">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ringkasan Pemesanan</li>
    </ol>
  </nav>

  <section class="detail-sec sec-white-md sec-more-pd sh2 flex-column">
    <h6 class="baby-big font-weight-bold">Ringkasan Pemesanan</h6>
    <section class="row">
    <!-- START LEFT CONTENT -->
      <div class="col-md-8">
        <!-- START SHOPPING METHOD -->
        <h6 class="text-muted mt-2">Pilihan Pengiriman</h6>
        <hr class="my-1">
        <span class="font-weight-bold">Free Shipping</span> <br>
        <span class="text-muted small">Dapat didapatkan pada <span>13-18 Juli 2018</span></span> <br>
        <h4 class="price">Rp 0</h4>
        <!-- END SHOPPING METHOD -->
        <!-- START GOODS -->
        <h6 class="text-muted mt-3 pt-3 mb-0">Pembelian</h6>
        <section class="cart">
        <table class="table mb-0">
          <thead>
            <tr>
              <th scope="col" width="60%">Barang <span>(2)</span></th>
              <th scope="col">Harga Satuan</th>
              <th scope="col">Kuantitas</th>
            </tr>
          </thead>
          <tbody>
          @for ($a = 0; $a < 2; $a++)
            <tr>
              <td>
                <div class="d-flex">
                  <figure class="col-md-2 pl-0">
                    <img src="{!! asset('resources/views/master/assets/img/bg-square.png') !!}" alt="" style="background-image: url('{!! asset('resources/views/master/assets/img/004.jpg') !!}')">
                  </figure>
                  <div class="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex eveniet culpa amet.</p>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="font-weight-bold mb-0">Rp 75.000</h6>
                <p class="small mb-0"><span class="text-muted"><strike>Rp 50.000</strike> </span><span>-33%</span></p>
              </td>
              <td>1</td>
            </tr>
          @endfor
          </tbody>
        </table>
        </section>
        <!-- END GOODS -->
      </div>
      <!-- END LEFT CONTENT -->
      <!-- START RIGHT CONTENT -->
      <div class="col-md-4">
        <div class="detail-info pl-2 baby-small">
          <div class="bg-gray-pre">
            <h6 class="text-muted mt-2">Pengiriman</h6>
            <hr class="my-1">
            <span>Pengiriman ke</span> 
            <p class="font-weight-bold or my-2">John Doe</p>
            <p>
              <span>Alamat lengkap Lorem ipsum dolor sit amet consectetur adipisicing.</span> <br>
              <span>Kecamatan, Kabupaten, Provinsi</span> <br>
              <span>08950526482</span>
            </p>
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
          <div class="mb-3 d-flex align-items-center justify-content-between">
            <span class="">Total</span>
            <span class="or"><b>Rp 180.000</b></span>
          </div>
          <a href="#" class="btn-b btn-b-primary btn-block sh4 " data-toggle="modal" data-target="#modalPembayaran">Pilih Metode Pembayaran</a>
        </div>  
      </div>
      <!-- MODAL CONTENT -->
      <div class="modal fade" id="modalPembayaran" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Pilih Metode Pembayaran</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body px-4">
              <section class="bg-gray p-3 d-flex align-items-center justify-content-between">
                <div>
                  <h7 class="text-muted">Total Tagihan</h7>
                  <h5 class="price">Rp<span> 4.556.000</span></h5>
                </div>
                <div>
                  <a href="#" class="baby-small"><span>Detail Tagihan</span></a>
                </div>
                
              </section>
              <section class="my-3">
                <h6>Transfer Bank</h6>
                <div class="row mx-2 col-md-10 px-0">
                  <div class="rounded p-2 border col-md-2 d-flex align-items-center">
                    <figure class="">
                      <img src="{!! asset('resources/views/master/assets/img/bri.png') !!}" alt="bri" class="">
                    </figure>
                  </div>
                  <div class="rounded p-2 border col-md-2 ml-3 d-flex align-items-center">
                    <figure class="">
                      <img src="{!! asset('resources/views/master/assets/img/bni_logo.svg.png') !!}" alt="bri" class="">
                    </figure>
                  </div>
                  <div class="rounded p-2 border col-md-2 ml-3 d-flex align-items-center">
                    <figure class="">
                      <img src="{!! asset('resources/views/master/assets/img/mandiri.png') !!}" alt="bri" class="">
                    </figure>
                  </div>
                  <div class="rounded p-2 border col-md-2 ml-3 d-flex align-items-center">
                    <figure class="">
                      <img src="{!! asset('resources/views/master/assets/imG/BCA.png') !!}" alt="bri" class="">
                    </figure>
                  </div>
                </div>
              </section>
              <section class="d-flex">
                <div style="" class="col-md-2 p-0">
                  <h6>Kartu Kredit</h6>
                  <div class="ml-2 rounded py-4 border col-md-10 d-flex align-items-center">
                    <figure class="">
                      <img src="{!! asset('resources/views/master/assets/imG/kredit-card.png') !!}" alt="bri" class="">
                    </figure>
                  </div>
                </div>
                <div style="" class="col-md-5">
                  <h6>Pilihan Lainnya</h6>
                  <div class="row mx-2">
                    <div class="rounded p-2 border col-md-5 d-flex align-items-center">
                      <figure class="">
                        <img src="{!! asset('resources/views/master/assets/imG/paypal.png') !!}" alt="bri" class="">
                      </figure>
                    </div>
                    <div class="rounded p-3 border col-md-5 ml-3 d-flex align-items-center">
                      <figure class="">
                        <img src="{!! asset('resources/views/master/assets/imG/doku_logo.png') !!}" alt="bri" class="">
                      </figure>
                    </div>
                  </div>
                </div>
                  
              </section>
              <ANY data-toggle="modal" data-target="#simpanPembayaran" data-dismiss="modal">
                <a href="#"  class="btn-b btn-b-primary btn-block sh4 mt-3">Simpan</a>
              </ANY>
            </div>
          </div>
        </div>
      </div>
      <!-- END MODAL CONTENT -->
      <!-- MODAL SIMPAN PEMBAYARAN -->
      <div class="modal fade" id="simpanPembayaran" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Pembayaran</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body px-4">
              <section class="bg-gray p-3 d-flex align-items-center justify-content-between">
                <div>
                  <h7 class="text-muted baby-small">Total Tagihan</h7>
                  <h6 class="price baby-small">Rp<span> 4.556.000</span></h6>
                </div>
                <div>
                  <a href="#" class="baby-small"><span>Detail Tagihan</span></a>
                </div>
                
              </section>
              <section class="my-3">
                <div class="d-flex justify-content-between align-items-center ">
                  <h6>Transfer Bank <span>BRI</span></h6>
                  <div class="p-0 col-md-2 d-flex align-items-center justify-content-end">
                    <figure class="">
                      <img src="{!! asset('resources/views/master/assets/img/bri.png') !!}" alt="bri" class="">
                    </figure>
                  </div>
                </div>
                <div>
                  <form class="">
                    <div class="form-group inputpd2 mt-3">
                      <input type="text" class="baby-small form-control inputpd" id="inputUsername" placeholder="Masukkan nomor rekening">
                    </div>
                    <div class="form-group inputpd2 mt-3">
                      <input type="text" class="baby-small form-control inputpd" id="inputUsername" placeholder="Masukkan nama pemilik rekening">
                    </div>
                  </form>
                </div>
                <p class="smaller">Demi kenyamanan transaksi anda pastikan untuk <b>tidak menginformasikan bukti dan data pembayaran kepada pihak manapun kecuali Beliaja</b></p>
              </section>
              <a href="#" class="mt-2 btn-b btn-b-primary btn-block sh4 " data-toggle="modal" data-target="#modalPembayaran">BAYAR</a>
            </div>
          </div>
        </div>
      </div>
      <!-- END MODAL SIMPAN PEMBAYARAN -->
      <!-- END RIGHT CONTENT -->
    </section>

  </section>

</section>
<!-- -->

@endsection
