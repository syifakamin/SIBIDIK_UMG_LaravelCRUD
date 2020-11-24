
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
                  <li class="nav-item dropdown active">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Managemen Data</span></a>
                    <ul class="dropdown-menu">
                      <!-- Tambahkan active ketika sidebar tersebut diklik -->
                      <li><a class="nav-link" href="/managemen_user">Managemen User</a></li>
                      <li class="active"><a class="nav-link" href="/kriteria">Data Kriteria & Bobot</a></li>
                      <li><a class="nav-link" href="/kriteria">Data Calon Mahasiswa </a></li>
                    </ul>
                  </li>
                  <li class="menu-header">Penilaian</li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Penilaian kriteria</span></a>
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
            <h3>Data Kriteria dan Bobot</h3>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item">Management Data</div>
              <div class="breadcrumb-item">Data Kriteria dan Bobot</div>
            </div>
          </div>
          <h6 class="section-title">Fitur ini digunakan untuk menambah, menyunting, dan hapus Data Kriteria dan Bobot</h6>

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
                    <h4>Data Kriteria dan Bobot</h4>
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
                                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kriteria & Bobot</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/kriteria/create" method="POST">

                                    <!-- Cara mengatasi The PUT method is not supported for this route. Supported methods: GET, HEAD, POST. -->
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                    <!-- End cara mengatasi -->
                                    
                                      <div class="form-group">
                                        <label for="nama_kriteria">Nama Kriteria</label>
                                        <input type="text" name="nama_kriteria" class="form-control" id="nama_kriteria" aria-describedby="emailHelp" placeholder="Nama Kriteria" required>
                                      </div>

                                      <!-- Jenis Kriteria -->
                                      <div class="form-group">
                                      <label for="jenis"> Jenis Kriteria </label>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="jenis" id="benefit_jenis" value="Benefit">
                                          <label class="form-check-label" for="benefit_jenis">
                                            Benefit
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="jenis" id="cost_jenis" value="Cost">
                                          <label class="form-check-label" for="cost_jenis">
                                            Cost
                                          </label>
                                        </div>
                                      </div>
                                      <!-- End Jenis Kriteria -->

                                      <div class="form-group">
                                        <label for="bobot">Bobot </label>
                                        <input type="text" name="bobot" class="form-control" id="bobot" aria-describedby="emailHelp" placeholder="Bobot (1-100)" required>
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
                              <div class="modal fade" id="edit_kriteria" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="editTitle">Edit Kriteria</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{ url('/kriteria/update/') }}" method="POST">
                                     
                                      
                                    <!-- Cara mengatasi The PUT method is not supported for this route. Supported methods: GET, HEAD, POST. -->
                                    <!-- <input type="hidden" name="_method" value="GET"> -->
                                    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                                    <!-- End cara mengatasi -->
                                      @csrf
                                      <!-- Menambahkan hidding ID untuk update data dengan ID  -->
                                      <input type="hidden" name="_method" value="POST">
                                      <input type="hidden" name="id" id="id" value="">

                                      <div class="form-group">
                                        <label for="nama_kriteria">Nama Kriteria</label>
                                        <input type="text" name="nama_kriteria" class="form-control" id="nama_kriteria" required>
                                      </div>

                                      <!-- Jenis Kriteria -->
                                      <div class="form-group">
                                      <label for="jenis"> Jenis Kriteria </label>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="jenis" id="benefit_jenis" value="Benefit">
                                          <label class="form-check-label" for="benefit_jenis">
                                            Benefit
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="jenis" id="cost_jenis" value="Cost">
                                          <label class="form-check-label" for="cost_jenis">
                                            Cost
                                          </label>
                                        </div>
                                      </div>
                                      <!-- End Jenis Kriteria -->

                                      <!-- Mulai Bobot -->
                                      <div class="form-group">
                                        <label for="bobot">Bobot</label>
                                        <input type="text" name="bobot" class="form-control" id="bobot"  required>
                                      </div>
                                    <!-- End bobot -->

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
                            <td>ID</td>
                            <td>Nama Kriteria</td>
                            <td>Jenis</td>
                            <td>Bobot </td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($data_kriteria as $kriteria)
                        <tr>
                            <td>{{$kriteria->id}}</td>
                            <td>{{$kriteria->nama_kriteria}}</td>
                            <td>{{$kriteria->jenis}} </td>
                            <td>{{$kriteria->bobot}}</td>
                            <td> 
                              <!-- Button Modal EDIT Data trigger -->
                              <button class="btn btn-warning" data-id="{{$kriteria->id}}" data-nama_kriteria="{{$kriteria->nama_kriteria}}" data-jenis="{{$kriteria->jenis}}" data-bobot="{{$kriteria->bobot}}" data-toggle="modal" data-target="#edit_kriteria">
                                Edit
                              </button>

                              <!-- Button Modal DELETE data trigger -->
                              <button type="button" class="btn btn-danger" id="deleteBtn_kriteria" data-id="{{$kriteria->id}}">
                                Hapus
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