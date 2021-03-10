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
            <div class="modal-body">
                <form>
                    <div class="form-group">                     
                        <input type="text" class="form-control" id="proj_NameProject" name="proj_NameProject" placeholder="ชื่อโครงการ *" autofocus>                       
                    </div>  
                    <div class="form-group">                     
                        <input type="text" class="form-control" id="proj_Topic" name="proj_Topic" placeholder="หัวข้อเกียรติบัตร *" >                       
                    </div> 
                    <div class="form-group">                     
                        <input type="text" class="form-control" id="proj_Abbreviution" name="proj_Abbreviution"  placeholder="อักษรย่อ บนเกียรติบัตร" >                       
                    </div>   
                    <div class="form-group">                     
                        <input type="text" class="form-control" id="proj_NumberStart" name="proj_NumberStart" aria-describedby="emailHelp" placeholder="หมายเลขเริ่มต้นในเกียรติบัตร" >                       
                    </div>  
                    <div class="form-group">                     
                        <input type="text" class="form-control" id="proj_Years" name="proj_Years" placeholder="ปีการศึกษา *" >                       
                    </div>  
                    <div class="form-group">   
                        <label for="exampleFormControlFile1">ไฟล์เกียรติบัตร</label>                  
                        <input type="file" class="form-control" id="proj_Img" name="proj_Img" placeholder="ปีการศึกษา *" >                       
                    </div>       
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
feather.replace()
</script>

</html>