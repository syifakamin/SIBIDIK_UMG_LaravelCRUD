$('#modal_penilaian').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  
  $('#edit_penilaian').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var modal = $(this);

    var kriteria = button.data('jskriteria');
    var id       = button.data('camaba_id')

    $.each(kriteria, function(x,y){
      var value = button.data('id_'+y.id);
      modal.find('.modal-body #'+y.id).val(value);
    });
    modal.find('.modal-body #id_camaba').val(id);
    
  })

  $('#deleteBtn_penilaian').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax({
      method: 'delete',
      url: '/hasil_perhitungan/delete/' + id,
      data: {
        _token: token,
        id: id
      },
      success: function(response) {
        alert(response.message);
        window.location.href="/hasil_perhitungan";
      },
      error: function(error) {
        alert(error.message);
      }
    });
  })