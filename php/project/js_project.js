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
                $('#exampleModalLong').modal('hide')
                Swal.fire({
                    title: 'แจ้งเตือน',
                    text: "บันทึกข้อมูลสำเร็จ",
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ตกลง'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                })
            } else {
                Swal.fire(
                    'แจ้งเตือน!',
                    response.message,
                    'error'
                )
            }
            $('#FormInsertProject').css("opacity", "");
            $(".submitBtn").removeAttr("disabled");

        },
        error: function(error) {
            $('#FormInsertProject').css("opacity", "");
            Swal.fire(
                'แจ้งเตือน!',
                'กรอกข้อมูลให้ครบถ้วน' + error.responseText,
                'error'
            )
        }
    });
});


// Submit form data via Ajax
$("#FormUpdateProject").on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/project/ProjecrUpdateSetting.php',
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
                window.location.reload();
            } else {
                Swal.fire(
                    'แจ้งเตือน!',
                    response.message,
                    'error'
                )
            }
            $('#FormInsertProject').css("opacity", "");
            $(".submitBtn").removeAttr("disabled");

        },
        error: function(error) {
            $('#FormInsertProject').css("opacity", "");
            Swal.fire(
                'แจ้งเตือน!',
                'กรอกข้อมูลให้ครบถ้วน' + error.responseText,
                'error'
            )
        }
    });
});

$("#SaveSuccess").on('click', function() {
    Swal.fire({
        title: 'คุณต้องการบันทึกการตั้งค่าหรือไม่!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ใช่',
        cancelButtonText: 'ยกเลิก'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "PageMain.php";
        }

    })
});