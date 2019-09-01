@extends('master.layout.app')

@section('title','Pembelian')

@section('content')

<!-- -->
<section class="flat-wrap">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pembelian</li>
    </ol>
  </nav>

  <section class="detail-sec sec-white-md sec-more-pd sh2 flex-column">
    <h6 class="baby-big font-weight-bold">Pembelian</h6>
    <section class="mt-2">
    <!-- START TABS CONTENT -->
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Status Pembayaran <span class="font-weight-normal">(1)</span></a>
          <a class="nav-item nav-link " id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">Status Pemesanan <span class="font-weight-normal"></span></a>
          <a class="nav-item nav-link " id="nav-second-tab" data-toggle="tab" href="#nav-third" role="tab" aria-controls="nav-third" aria-selected="false">Konfirmasi Pemesanan <span class="font-weight-normal"></span></a>
          <a class="nav-item nav-link " id="nav-second-tab" data-toggle="tab" href="#nav-fourth" role="tab" aria-controls="nav-fourth" aria-selected="false">Daftar Transaksi <span class="font-weight-normal"></span></a>
        </div>
      </nav>
      <div class="tab-content tab-content-2" id="nav-tabContent">
        <!-- START STATUS PEMBAYARAN -->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <table class="table">
            <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Nominal Pembayaran</th>
              <th scope="col">Sumber Pembayaran</th>
              <th scope="col">Tujuan Pembayaran</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @for ($a = 0; $a < 1; $a++)
            <tr>
              <td>
                9 Agustus 2018
              </td>
              <td>
                <h6 class="font-weight-bold mb-0 re">Rp 75.000</h6>
                <a href="#" class="small mt-2"><u>1 invoice</u></a>
              </td>
              <td>
                <p class="mb-0">
                  Rekening
                  <br>
                  <span class="font-weight-bold">John Doe</span> 
                  <br>
                  <span class="small">02135168511</span>
                </p>
              </td>
              <td>
                <b>BRI</b>
              </td>
              <td>
                <a href=""><i class="fas fa-info-circle mr-2"></i> Cara Pembayaran</a> 
                  <br>
                <a href=""><i class="fas fa-upload mr-2"></i> Unggah Bukti</a>
                  <br>
                <a href=""><i class="fas fa-edit mr-2"></i> Ubah Data Bayar </a>
                  <br>
                <a href=""><i class="fas fa-times-circle mr-2"></i> Batalkan Pembelian</a>
              </td>
            </tr>
          @endfor
          </tbody>
        </table>
        </div>
        <!-- END STATUS PEMBAYARAN -->
        <!-- START STATUS PEMESANAN -->
        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
          <table class="table mt-3">
            <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Kode Transaksi</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @for ($a = 0; $a < 1; $a++)
            <tr>
              <td>
                9 Agustus 2018
              </td>
              <td>
                <span class="font-weight-bold">INV/20180712/XVIII/VIII/1290899</span>
              </td>
              <td>
                <span>Rp 600.000</span>
              </td>
              <td>
                <span class="badge badge-warning p-2 rounded-0">Masih di kurir</span>
              </td>
              <td>
                <a href="" class="btn btn-primary">LACAK</a>
              </td>
            </tr>
            <tr>
              <td>
                9 Agustus 2018
              </td>
              <td>
                <span class="font-weight-bold">INV/20180712/XVIII/VIII/1290899</span>
              </td>
              <td>
                <span>Rp 600.000</span>
              </td>
              <td>
                <span class="badge badge-info p-2 rounded-0">Perjalanan oleh kurir</span>
              </td>
              <td>
                <a href="" class="btn btn-primary">LACAK</a>
              </td>
            </tr>
          @endfor
          </tbody>
        </table>
        </div>
        <!-- END STATUS PEMESANAN -->
        <!-- START KONFIRMASI PEMESANAN -->
        <div class="tab-pane fade" id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab">
          <table class="table mt-3">
            <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Kode Transaksi</th>
              <th scope="col">Alamat Pengiriman</th>
              <th scope="col">Diterima oleh</th>
              <th scope="col">Total</th>
              <th scope="col">Konfirmasi</th>
            </tr>
          </thead>
          <tbody>
          @for ($a = 0; $a < 1; $a++)
            <tr>
              <td>
                9 Agustus 2018
              </td>
              <td>
                <span class="font-weight-bold">INV/20180712/XVIII/VIII/1290899</span>
              </td>
              <td>
                <span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus at distinctio expedita!
                </span>
              </td>
              <td><span>Mbak nya namanya siapa ya</span></td>
              <td width="10%">
                <span>Rp 600.000</span>
              </td>
              <td>
                <a href="" class="btn btn-primary">Barang sudah diterima</a>
              </td>
            </tr>
          @endfor
          </tbody>
        </table>
        </div>
        <!-- END KONFIRMASI PEMESANAN -->
        <!-- START TAB DAFTAR TRANSAKSI -->
        <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab">
          <section class="d-flex align-items-center">
            <span>Tampilkan berdasarkan : </span> 
            <form action="" class="form-inline">
              <select name="" id="" class="custom-select mx-2 form-control-sm">
                <option value="" selected>Semua status</option>
                <option value="">Lorem, ipsum.</option>
                <option value="">Lorem ipsum dolor sit amet consectetur.</option>
              </select>
              <input type="date" name=""
               class="form-control form-control-sm"
               value=""
               min="2018-01-01" max="2018-12-31"/ > 
               <div class="mx-1">-</div> 
              <input type="date" name=""
               class="form-control form-control-sm"
               value=""
               min="2018-01-01" max="2018-12-31"/ >
               <input type="text" class="form-control mx-2 form-control-sm" placeholder="Invoice/Nama Penerima">
               <button class="btn-b btn-b-primary btn btn-sm">Tampilkan</button>
            </form>
          </section>
          <table class="table mt-3">
            <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Kode Transaksi</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @for ($a = 0; $a < 1; $a++)
            <tr>
              <td>
                9 Agustus 2018
              </td>
              <td>
                <span class="font-weight-bold">INV/20180712/XVIII/VIII/1290899</span>
              </td>
              <td>
                <span>Rp 600.000</span>
              </td>
              <td>
                <span class="badge badge-danger p-2 rounded-0">9 Agustus 2018 15:56:56 WIB Pembayaran dibatalkan</span>
              </td>
              <td>
                <a href="" class="btn-b btn-b-primary">BELI LAGI</a>
              </td>
            </tr>
          @endfor
          </tbody>
        </table>
        </div>
        <!-- END TAB DAFTAR TRANSAKSI -->
      </div>
    <!-- END TABS CONTENT -->
    </section>

  </section>

</section>
<!-- -->

@endsection
