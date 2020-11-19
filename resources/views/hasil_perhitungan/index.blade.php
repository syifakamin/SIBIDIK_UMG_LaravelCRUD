
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
                      <li class=""><a class="nav-link" href="/camaba">Data Calon Mahasiswa </a></li>
                    </ul>
                  </li>
                  <li class="menu-header">Penilaian</li>
                  <li class="nav-item dropdown active">
                    <a href="#" class="active nav-link"><i class="far fa-user"></i> <span>Penilaian Camaba</span></a>
                  </li>
                  <li class="menu-header">Sistem Pendukung Keputusan</li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link"><i class="fas fa-th-large"></i> <span>Perangkingan WASPAS</span></a>
                  </li>
                  <li class="menu-header">Laporan</li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link"><i class="far fa-file-alt"></i> <span>Hasil Perangkingan</span></a>
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
            <h3>Penilaian Camaba</h3>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item">Penilaian Camaba</div>
            </div>
          </div>
          <h6 class="section-title">Fitur ini digunakan untuk memberikan nilai calon mahasiswa</h6>

        <!-- Alert jika sukses -->
        @if(session('sukses'))
          <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        {{session('sukses')}}
                      </div>
                    </div>
                    @endif

        <!-- Contoh Table -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Penilaian Calon Mahasiswa</h4>
                    <div class="input-group-btn" style="position: absolute; right: 10px;">
                    
                              <!-- Button  -->
                              <!-- Button Modal Tambah Data trigger -->
                              @csrf
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                                Tambah
                              </button>

                              <!-- Modal TAMBAH-->
                              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah Calon Mahasiswa</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/camaba/create/" method="POST">

                                    <!-- Cara mengatasi The PUT method is not supported for this route. Supported methods: GET, HEAD, POST. -->
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                    <!-- End cara mengatasi -->

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor Registrasi</label>
                                        <input type="text" name="no_reg" class="form-control" id="no_reg" aria-describedby="emailHelp" placeholder="Nomor Registrasi" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Fakultas</label>
                                        <input type="text" name="fakultas" class="form-control" id="fakultas" aria-describedby="emailHelp" placeholder="Fakultas" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Program Studi</label>
                                        <input type="text" name="program_studi" class="form-control" id="program_studi" aria-describedby="emailHelp" placeholder="Program Studi" required>
                                      </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                      </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Modal EDIT-->
                              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="editTitle">Edit Calon Mahasiswa</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{ url('/camaba/update/') }}" method="POST">
                                     
                                      
                                    <!-- Cara mengatasi The PUT method is not supported for this route. Supported methods: GET, HEAD, POST. -->
                                    <!-- <input type="hidden" name="_method" value="GET"> -->
                                    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                                    <!-- End cara mengatasi -->
                                      @csrf
                                      <!-- Menambahkan hidding ID untuk update data dengan ID  -->
                                      <input type="hidden" name="id" id="id" value="">

                                      <div class="form-group">
                                        <label for="no_reg">Nomor Registrasi</label>
                                        <input type="text" name="no_reg" class="form-control" id="no_reg" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="nama"  required>
                                      </div>
                                      <div class="form-group">
                                        <label for="fakultas">Fakultas</label>
                                        <input type="text" name="fakultas" class="form-control" id="fakultas"  required>
                                      </div>
                                      <div class="form-group">
                                        <label for="prodi">Program Studi</label>
                                        <input type="text" name="prodi" class="form-control" id="prodi"  required>
                                      </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                  </div>
                </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                      <tr>
                          <th>No Registrasi Camaba</th>
                          <th>Nama Camaba</th>
                          <th>Prodi Camaba</th>
                          @foreach ($dataKriteria as $rowKriteria)
                          <th>{{ $rowKriteria->nama_kriteria }}</th>
                          @endforeach
                          <th>Aksi</th>
                      </tr>
                      @foreach($data as $row)
                      <tr>
                          <td>{{ $row->no_reg }}</td>
                          <td>{{ $row->nama }}</td>
                          <td>{{ $row->program_studi }}</td>
                          @foreach ($dataKriteria as $rowKriteria)
                            @foreach ($dataNilai as $rowNilai)
                              @if($row->id==$rowNilai->camaba_id AND $rowKriteria->id==$rowNilai->kriteria_id)
                                <td>{{ $rowNilai->nilai }}</td>
                              @endif
                            @endforeach
                          @endforeach
                          <td> 
                              <!-- Button Modal EDIT Data trigger -->
                              <button class="btn btn-warning" >
                                Edit
                              </button>
                            </td>
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