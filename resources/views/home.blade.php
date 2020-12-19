    @extends('layout.admin.admin_app')

    @section('content')
    <!-- Main Sidebar -->
  <!-- Start Main Content -->
    <div class="main-content" style="padding:0%;">
        <section class="section">
        
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Calon Mahasiswa</h4>
                  </div>
                  <div class="card-body">
                      {{$totalCamaba}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kriteria Penilaian</h4>
                  </div>
                  <div class="card-body">
                  {{$totalKriteria}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Camaba Lolos Seleksi</h4>
                  </div>
                  <div class="card-body">
                  {{$mhs_lolos}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Nilai Terbaik</h4>
                  </div>
                  <div class="card-body">
                    {{$max}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- End main content -->

      @endsection