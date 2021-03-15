// Submit form data via Ajax
$("#FormInsertProject").on('submit', function(e) {
    e.preventDefault();

    $.ajax({
        type: 'POST',
        url: 'php/project/project_insert.php',
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('.submitBtn').attr("disabled", "disabled");
            $('#FormInsertProject').css("opacity", ".5");
        },
        success: function(response) {
            console.log(response);
            if (response.status == 1) {
                $('#FormInsertProject')[0].reset();
                Swal.fire(
                    'แจ้งเตือน!',
                    'บันทึกข้อมูลสำเร็จ',
                    'success'
                )
                $('#exampleModalLong').modal('hide')
            } else {
                Swal.fire(
                    'Good job!',
                    'แก้ไข' + response.message,
                    'success'
                )
            }
            $('#FormInsertProject').css("opacity", "");
            $(".submitBtn").removeAttr("disabled");

        },
        error: function(error) {
            $('#FormInsertProject').css("opacity", "");
            Swal.fire(
                'แจ้งเตือน!',
                'กรอกข้อมูลให้ครบถ้วน',
                'error'
            )
        }
    });
});