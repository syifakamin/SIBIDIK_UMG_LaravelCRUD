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