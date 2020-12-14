@extends('layout.admin.admin_app')


@section('judul')
  Hasil Perangkingan -
@endsection


@section('content')

<!-- Main Sidebar -->

    <div class="main-sidebar">
            <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                <a href="index.html">SIBIDIK-UMG</a>
              </div>
              <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">UMG</a>
              </div>
              <ul class="sidebar-menu">
                  <li class="menu-header">Dashboard</li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
                  </li>
                  <li class="menu-header">Managemen Data</li>
                  <!-- Tambahkan active ketika sidebar tersebut diklik -->
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Managemen Data</span></a>
                    <ul class="dropdown-menu">
                      <!-- Tambahkan active ketika sidebar tersebut diklik -->
                      <li><a class="nav-link" href="/manage_user">Managemen User</a></li>
                      <li><a class="nav-link" href="/kriteria">Data Kriteria & Bobot</a></li>
                      <li class="nav-link"><a class="nav-link" href="/camaba">Data Calon Mahasiswa </a></li>
                    </ul>
                  </li>
                  <li class="menu-header">Penilaian</li>
                  <li class="nav-item dropdown">
                    <a href="/hasil_perhitungan" class="nav-link"><i class="far fa-user"></i> <span>Penilaian Camaba</span></a>
                  </li>
                  <li class="menu-header">Sistem Pendukung Keputusan</li>
                  <li class="nav-item dropdown ">
                    <a href="/detail_waspas" class="nav-link"><i class="fas fa-th-large"></i> <span>Perangkingan WASPAS</span></a>
                  </li>
                  <li class="menu-header">Laporan</li>
                  <li class="nav-item dropdown active">
                    <a href="/waspas" class="nav-link active"><i class="far fa-file-alt"></i> <span>Hasil Perangkingan</span></a>
                  </li>
                  <li class="menu-header">Tentang Aplikasi</li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link"><i class="fas fa-rocket"></i> <span>Tentang Aplikasi</span></a>
                  </li>
                </ul>

                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                  <a href="https://github.com/syifakamin/sibidik-UMG" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Kembangkan Aplikasi
                  </a>
                </div>
            </aside>
          </div>
    <!-- End Sidebar Section -->
  
  <!-- Section Header -->
    <div class="section-header">
            <h3>Hasil Perangkingan</h3>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item">Laporan</div>
              <div class="breadcrumb-item">Hasil Perangkingan</div>
            </div>
          </div>
          <h6 class="section-title">Fitur ini digunakan untuk melihat proses dan hasil perhitungan nilai akhir</h6>

<!-- Contoh Table -->
<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Hasil Perangkingan Metode WASPAS</h4>
                    <div class="input-group-btn" style="position: absolute; right: 10px;">
                    </div>
                  </div>

                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                      <tr>
                          <!-- <th>Rangking</th> -->
                          <th>No Registrasi Camaba</th>
                          <th>Nama Camaba</th>
                          <th>Prodi Camaba</th>
                          <th>Hasil Akhir</th>
                      </tr>
                      @foreach($hasil as $row)
                      <tr>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[0]; ?></td>
                      </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
              </div>
            </div>
</div>
@endsection

@section('js')

@endsection
