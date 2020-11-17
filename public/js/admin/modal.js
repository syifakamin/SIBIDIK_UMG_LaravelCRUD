$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

$('#edit').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) 
  var mytitle = button.data('mytitle') 	
  var mytitle2 = button.data('mytitle2') 
  var mytitle3 = button.data('mytitle3')
  var mytitle4 = button.data('mytitle4') 
  var id = button.data('id')

  var modal = $(this)

  modal.find('.modal-body #no_reg').val(mytitle);
  modal.find('.modal-body #nama').val(mytitle2);
  modal.find('.modal-body #fakultas').val(mytitle3);
  modal.find('.modal-body #prodi').val(mytitle4);
  modal.find('.modal-body #id').val(id);
})

$('#deleteBtn').on('click', function(e){
  e.preventDefault();
  var id = $(this).data('id');
  var token = $("meta[name='csrf-token']").attr("content");
  $.ajax({
    method: 'delete',
    url: '/camaba/delete/' + id,
    data: {
      _token: token,
      id: id
    },
    success: function(response) {
      alert(response.message);
      window.location.href="/camaba";
    },
    error: function(error) {
      alert(error.message);
    }
  });
})