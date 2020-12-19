@extends('layout.admin.admin_app')


@section('judul')
  Hasil Perangkingan -
@endsection


@section('content')

<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Hasil Perangkingan Metode WASPAS</h4>
                    <div class="input-group-btn" style="position: absolute; right: 10px;">
                    <form action="/waspas/cetak"><button type="submit" class="btn btn-primary navbar-btn navbar-link">Cetak</button></form>
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
