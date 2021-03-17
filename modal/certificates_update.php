<!-- Modal -->
<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="modal_updateTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_updateTitle"> แก้ไขโครงการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> <!-- action="php/project/project_insert.php" -->
                <form id="FormInsertProject"  method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <input type="text" class="form-control" id="up_proj_NameProject" name="up_proj_NameProject"
                            placeholder="ชื่อโครงการ *" autofocus required>
                            <div class="invalid-feedback">กรุณากรอกชื่อโครงการ</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="up_proj_Topic" name="up_proj_Topic"
                            placeholder="หัวข้อเกียรติบัตร *" required>
                            <div class="invalid-feedback">กรุณากรอกหัวข้อเกียรติบัตร</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="up_proj_Abbreviution" name="up_proj_Abbreviution"
                            placeholder="อักษรย่อ บนเกียรติบัตร" >
                            <div class="invalid-feedback">กรุณากรอกอักษรย่อ บนเกียรติบัตร</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="up_proj_NumberStart" name="up_proj_NumberStart"
                            aria-describedby="emailHelp" placeholder="หมายเลขเริ่มต้นในเกียรติบัตร" >
                            <div class="invalid-feedback">กรุณากรอกหมายเลขเริ่มต้นในเกียรติบัตร</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="up_proj_Years" name="up_proj_Years"
                            placeholder="ปีการศึกษา *" required>
                            <div class="invalid-feedback">กรุณากรอกปีการศึกษา</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">ไฟล์เกียรติบัตร</label>
                        <input type="file" class="form-control" id="up_proj_Img" name="up_proj_Img" placeholder="ปีการศึกษา *"
                            required>
                            <div class="invalid-feedback">กรุณาเลือกไฟล์เกียรติบัตร  jpg หรือ png</div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
                </form>
            </div>
        </div>
    </div>
</div>