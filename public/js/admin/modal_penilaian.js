$('#modal_penilaian').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  
  $('#edit_penilaian').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget) 
    var nilai = button.data('nilai') 	
    var nilai_2 = button.data('nilai_2') 
    var nilai_3 = button.data('nilai_3') 
    var id = button.data('id')
  
    var modal = $(this)
  
    modal.find('.modal-body #nilai').val(nilai);
    modal.find('.modal-body #nilai_2').val(nilai_2);
    modal.find('.modal-body #nilai_3').val(nilai_3);
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