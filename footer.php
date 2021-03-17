</div>
</div>

</body>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มโครงการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> <!-- action="php/project/project_insert.php" -->
                <form id="FormInsertProject"  method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <input type="text" class="form-control" id="proj_NameProject" name="proj_NameProject"
                            placeholder="ชื่อโครงการ *" autofocus required>
                            <div class="invalid-feedback">กรุณากรอกชื่อโครงการ</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="proj_Topic" name="proj_Topic"
                            placeholder="หัวข้อเกียรติบัตร *" required>
                            <div class="invalid-feedback">กรุณากรอกหัวข้อเกียรติบัตร</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="proj_Abbreviution" name="proj_Abbreviution"
                            placeholder="อักษรย่อ บนเกียรติบัตร" >
                            <div class="invalid-feedback">กรุณากรอกอักษรย่อ บนเกียรติบัตร</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="proj_NumberStart" name="proj_NumberStart"
                            aria-describedby="emailHelp" placeholder="หมายเลขเริ่มต้นในเกียรติบัตร" >
                            <div class="invalid-feedback">กรุณากรอกหมายเลขเริ่มต้นในเกียรติบัตร</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="proj_Years" name="proj_Years"
                            placeholder="ปีการศึกษา *" required>
                            <div class="invalid-feedback">กรุณากรอกปีการศึกษา</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">ไฟล์เกียรติบัตร</label>
                        <input type="file" class="form-control" id="proj_Img" name="proj_Img" placeholder="ปีการศึกษา *"
                            required>
                            <div class="invalid-feedback">กรุณาเลือกไฟล์เกียรติบัตร  jpg หรือ png</div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
feather.replace()
</script>
<script>
$(document).ready(function(e) {
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
});
</script>
<script src="php/project/js_project.js?v=1000"></script>


</html>