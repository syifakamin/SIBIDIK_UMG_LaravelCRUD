@extends('layout.admin.admin_app')

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
                  <li class="nav-item dropdown active">
                    <a href="/detail" class="active"><i class="fas fa-th-large"></i> <span>Perangkingan WASPAS</span></a>
                  </li>
                  <li class="menu-header">Laporan</li>
                  <li class="nav-item dropdown">
                    <a href="/waspas" class="nav-link"><i class="far fa-file-alt"></i> <span>Hasil Perangkingan</span></a>
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
            <h3>Perangkingan WASPAS</h3>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item">Sistem Pendukung Keputusan</div>
              <div class="breadcrumb-item">Perangkingan WASPAS</div>
            </div>
          </div>
          <h6 class="section-title">Fitur ini digunakan untuk melihat proses dan hasil perhitungan nilai akhir</h6>

<!-- Contoh Table -->
<div class="row">
  
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Nama Calon Mahasiswa Baru</h4>
                    <div class="input-group-btn" style="position: absolute; right: 10px;">
                    </div>
                  </div>

                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                      @foreach($subject as $subject_row)
                      <tr>
                        <td>{{$subject_row}}</td>
                      </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
              </div>
            </div>




                  <div class="card">
                    <div class="card-header">
                      <h4>Kriteria Penilaian</h4>
                      <div class="input-group-btn" style="position: absolute; right: 10px;">
                      </div>
                    </div>

                    <div class="card-body p-0">
                      <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        @foreach($criteria as $criteria_row)
                        <tr>
                          <td>{{$criteria_row}}</td>
                        </tr>
                        @endforeach
                        </table>
                      </div>
                    </div>
                </div>
              </div>





                  <div class="card">
                    <div class="card-header">
                      <h4>Bobot Penilaian</h4>
                      <div class="input-group-btn" style="position: absolute; right: 10px;">
                      </div>
                    </div>

                    <div class="card-body p-0">
                      <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        @foreach($weight as $weight_row)
                        <tr>
                          <td>{{$weight_row}}</td>
                        </tr>
                        @endforeach
                        </table>
                      </div>
                    </div>
                </div>
              </div>






                <div class="card">
                  <div class="card-header">
                    <h4>Matriks Nilai</h4>
                    <div class="input-group-btn" style="position: absolute; right: 10px;">
                    </div>
                  </div>

                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                      @foreach($a_nilai as $nilai_row)
                      <tr>
                        <td>{{$nilai_row}}</td>
                      </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
              </div>





                <div class="card">
                  <div class="card-header">
                    <h4>Nilai Batas (max dan min)</h4>
                    <div class="input-group-btn" style="position: absolute; right: 10px;">
                    </div>
                  </div>

                  <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      @foreach ($limit as $limit_row)
                      <tr>
                        <td>{{$limit_row}}</td>
                      </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>
              </div>
            </div>




                  <div class="card">
                    <div class="card-header">
                      <h4>Normalisasi</h4>
                      <div class="input-group-btn" style="position: absolute; right: 10px;">
                      </div>
                    </div>

                    <div class="card-body p-0">
                      <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        @foreach($value as $value_row)
                        <tr>
                          <td>{{$value_row}}</td>
                        </tr>
                        @endforeach
                        </table>
                      </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header">
                      <h4>Hasil Akhir</h4>
                      <div class="input-group-btn" style="position: absolute; right: 10px;">
                      </div>
                    </div>

                    <div class="card-body p-0">
                      <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        @foreach($Q as $q_row)
                        <tr>
                          <td>{{$q_row[0]}}</td>
                          <td>{{$q_row[1]}}</td>
                          <td>{{$q_row[2]}}</td>
                          <td>{{$q_row[3]}}</td>
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
