
@extends('layout.admin.admin_app')


@section('judul')
  Penilaian Camaba -
@endsection


@section('content')

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
                    
                              <!-- Modal EDIT-->
                              <div class="modal fade" id="edit_penilaian" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="editTitle">Penilaian Calon Mahasiswa</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{ url('/hasil_perhitungan/update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id_camaba" id="id_camaba">
                                      @foreach ($dataKriteria as $rowKriteria)
                                      <div class="form-group">
                                        <input type="hidden" name="id_kriteria[]" value="{{$rowKriteria->id}}">
                                        <label for="nilai">{{$rowKriteria->nama_kriteria}}</label>
                                        <input type="text" name="nilai[]" class="form-control" id="{{$rowKriteria->id}}" required>
                                      </div>
                                      @endforeach
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
                          @php $btndata=null @endphp
                          @foreach ($dataKriteria as $rowKriteria)
                            @foreach ($dataNilai as $rowNilai)
                              @if($row->id==$rowNilai->camaba_id AND $rowKriteria->id==$rowNilai->kriteria_id)
                                @php $btndata .= 'data-id_'.$rowNilai->kriteria_id.'="'.$rowNilai->nilai.'" ' @endphp
                                <td>{{ $rowNilai->nilai }}</td>
                              @endif
                            @endforeach
                          @endforeach
                          <td> 
                              <!-- Button Modal EDIT Data trigger -->
                              <button class="btn btn-warning" data-camaba_id="{{$row->id}}" data-jskriteria="{{$dataKriteria}}" @php echo $btndata @endphp data-toggle="modal" data-target="#edit_penilaian">
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