@extends('master')

@section('content')
  <!-- Basic Bootstrap Table -->
  <div class="card mb-4">
    <h5 class="card-header">Tabel Penjualan</h5>
    <div class="card-body">
      <div class="d-flex mt-1">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#modalTop"> 
          <span class="tf-icon bx bx-plus"></span> Data
        </button>
      </div>

      <!-- Modal -->
      <div class="modal modal-top fade" id="modalTop" tabindex="-1">
        <div class="modal-dialog">
          <form class="modal-content" method="POST" action="/transactions">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="modalTopTitle">Form penjualan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="kode" class="form-label">Kode</label>
                  <input type="number" id="kode" name="kode" 
                  class="form-control" placeholder="Masukkan kode pesanan">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="namaMenu" class="form-label">Nama menu</label>
                  <input type="text" id="namaMenu" name="namaMenu" 
                  class="form-control" placeholder="Masukkan nama menu">
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="col">
                  <label for="jumlah" class="form-label">Jumlah</label>
                  <input type="number" id="jumlah" name="jumlah" 
                  class="form-control" placeholder="Masukkan jumlah pembelian">
                </div>
                <div class="col">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" id="harga" name="harga" 
                  class="form-control" placeholder="Rp.">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="tanggal" class="form-label">Tanggal penjualan</label>
                  <input type="date" id="tanggal" name="tanggal" 
                  class="form-control">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>

    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Kode</th>
            <th>Nama menu</th>
            <th>Jumlah</th>
            <th>Harga menu</th>
            <th>Total bayar</th>
            <th>Tanggal penjualan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>0001</td>
            <td>Ayam geprek</td>
            <td>3</td>
            <td>15000</td>
            <td></td>
            <td>6/3/2022</td>
            <td>

            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
@endsection