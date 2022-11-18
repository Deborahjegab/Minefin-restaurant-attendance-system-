   $(document).on('submit', '#saveUserForm', function (event) {
    event.preventDefault();
    var first_name = $('#Inputfirst_name').val();
    var last_name = $('#Inputlast_name').val();
    var department_name = $('#Inputdepartment_name').val();
    var position = $('#Inputposition').val();
 
    if (first_name != '' && last_name != '' && department_name != '' && position != '') {

        $.ajax({
            url: "add_staff.php",
            data: { first_name: first_name, last_name: last_name, department_name: department_name, position: position },
            type: 'post',
            success: function (data) {
                var json = JSON.parse(data);
                if (status == 'success') {
                    table = $('#datatable').Datatable();
                    table.draw();
                    alert(' successfully Added');
                    $('#Inputfirst_name').val('');
                    $('#Inputlast_name').val('');
                    $('#Inputdepartment_name').val('');
                    $('#Inputposition').val('');
                    $('#addUserModal').modal('hide');
                }
            }

        });


    }
    else {
        alert("please fill all the required fields  ");
    }


});
   