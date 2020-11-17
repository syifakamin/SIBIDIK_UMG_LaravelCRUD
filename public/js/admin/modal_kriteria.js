$('#modal_kriteria').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  
  $('#edit_kriteria').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget) 
    var nama_kriteria = button.data('nama_kriteria') 	
    var jenis = button.data('jenis') 
    var bobot = button.data('bobot') 
    var id = button.data('id')
  
    var modal = $(this)
  
    modal.find('.modal-body #nama_kriteria').val(nama_kriteria);
    modal.find('.modal-body #jenis').val(jenis);
    modal.find('.modal-body #bobot').val(bobot);
    modal.find('.modal-body #id').val(id);
  })
  
  $('#deleteBtn_kriteria').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax({
      method: 'delete',
      url: '/kriteria/delete/' + id,
      data: {
        _token: token,
        id: id
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