$('#modal_kriteria').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  
  $('#edit_kriteria').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget) 
    var nama_kriteria = button.data('nama_kriteria') 	
    var jenis_kriteria = button.data('jenis_kriteria') 
    var bobot_kriteria = button.data('bobot_kriteria') 
    var id_kriteria = button.data('id_kriteria')
  
    var modal = $(this)
  
    modal.find('.modal-body #nama_kriteria').val(nama_kriteria);
    modal.find('.modal-body #jenis_kriteria').val(jenis_kriteria);
    modal.find('.modal-body #bobot_kriteria').val(bobot_kriteria);
    modal.find('.modal-body #id_kriteria').val(id_kriteria);
  })
  
  $('#deleteBtn_kriteria').on('click', function(e){
    e.preventDefault();
    var id_kriteria = $(this).data('id_kriteria');
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax({
      method: 'delete',
      url: '/kriteria/delete/' + id_kriteria,
      data: {
        _token: token,
        id_kriteria: id_kriteria
      },
      success: function(response) {
        alert(response.message);
        window.location.href="/kriteria";
      },
      error: function(error) {
        alert(error.message);
      }
    });
  })