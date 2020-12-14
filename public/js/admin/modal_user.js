$('#modal_user').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  
  $('#edit_user').on('show.bs.modal', function (event) {
  
    var id = button.data('id')
    var button = $(event.relatedTarget) 
    var name = button.data('name')
    var role_user = button.data('role_user')
    var email = button.data('email')
    var password = button.data('password') 
  
    var modal = $(this)
  
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #role_user').val(role_user);
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #password').val(password);
  })
  
  $('#deleteBtn_user').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax({
      method: 'delete',
      url: '/user/delete/' + id,
      data: {
        _token: token,
        id: id
      },
      success: function(response) {
        alert(response.message);
        window.location.href="/user";
      },
      error: function(error) {
        alert(error.message);
      }
    });
  })