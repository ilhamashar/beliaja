@extends('master.layout.app')

@section('title','Sisa Waktu Pembayaran')

@section('content')

<!-- -->
<section class="flat-wrap">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Ringkasan Pemesanan</li>
      <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
    </ol>
  </nav>

  <section class="detail-sec sec-white-md sec-more-pd sh2 flex-column">
    <h6 class="baby-big font-weight-bold">Cara Pembayaran</h6>
    <section class="row d-flex">
    <!-- START LEFT CONTENT -->
      <div class="col-md-8">
        
        <!-- START HOW TO/TIPS -->
        <section class="bg-gray p-4 text-muted hg-full rounded">
          <!-- START UP SECTION -->
          <section class="">
            <h6 class="">KETENTUAN</h6>
            <ul class="initial pl-4">
              <li>Pemesanan terhitung setelah melakukan pembayaran</li>
              <li>Jika tidak melakukan pembayaran sebelum waktu yang ditentukan maka pemesana dianggap batal</li>
            </ul>
          </section>
          <!-- END UP SECTION -->
          <!-- START LOW SECTION -->
            <section class="or mt-4">
              <h6 class=""><i class="fas fa-exclamation-triangle mr-2"></i> Tips mempercepat proses verifikasi</h6>
              <ul class="initial pl-4">
                <li>Jumlah transfer sama persis dengan jumlah pembayaran yang ditentukan, perhatikan 3 digit terakhir</li>
                <li>Pastikan pembayaran sudah berhasil, kemudian unggah bukti pembayaran</li>
              </ul>
            </section>
          <!-- END LOW SECTION -->
        </section>
        <!-- END HOW TO/TIPS -->
      </div>
      <!-- END LEFT CONTENT -->
      <!-- START RIGHT CONTENT -->
      <div class="col-md-4">
        <section class="bg-lg-orange baby-small p-3 rounded border border-warning">
          <div class="text-center">
            <h6 class="text-muted">Sisa Waktu Pembayaran</h6>
                <p class="d-none" id="expired_date">August 10, 2018 23:59:59</p>
            <section class="d-flex justify-content-center">
              <section class="timer d-flex align-items-center rounded" id="demo">
                <div class="d-flex flex-column">
                  <span class="more-big" id="hour">23</span>
                  <span class="small">jam</span>
                </div>
                <p class="mb-0 mx-2">:</p>
                <div class="d-flex flex-column">
                  <span class="more-big" id="minute">23</span>
                  <span class="small">menit</span>
                </div>
                <p class="mb-0 mx-2">:</p>
                <div class="d-flex flex-column">
                  <span class="more-big" id="second">23</span>
                  <span class="small">detik</span>
                </div>
              </section>
            </section>
            <p class="small mb-0 mt-1 or">Bayar sebelum : <span>14 Juli 2018</span></p> 
            <p class="mt-2">
              <span class="baby-small text-muted">Transfer pembayaran ke nomor rekening :</span> <br>
              <span class="baby-big font-weight-bold">156 4213545212</span>
            </p>
            <p class="mb-1">
              <span class="baby-small text-muted">Jumlah Pembayaran :</span> <br>
              <span class="big or font-weight-bold">Rp 808.354</span> <br>
              <a href="#" class="small"><u>Detail Pembayaran</u></a>
            </p>
          </div>
        </section>
        <section class="bg-lg-orange baby-small px-3 py-1 rounded border border-warning my-1">
          <p class="mb-0 small text-muted">Pastikan untuk tidak menginformasikan bukti dan data pembayaran <span class="font-weight-bold">kepada pihak manapun</span> kecuali di Beliaja</p>
        </section>
        <div class="mt-3 baby-small">
          <a href="{{ URL::to('master/buying')}}" class="btn-b btn-b-primary btn-block sh4">Cek Status Pembayaran</a>
        </div>  
      </div>
      <!-- END RIGHT CONTENT -->
    </section>

  </section>

</section>
<!-- -->

@endsection
