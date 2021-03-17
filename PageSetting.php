<?php include_once 'header.php'; 

    $sel_set = select("SELECT * FROM tb_certificate_project WHERE proj_ID = '".$_GET['IdProject']."'");
    //print_r($sel_set);
?>

<style>
input[type="color"] {
    width: 100%;
    height: 40px;
}
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">ตั้งค่าเกียรติบัตร</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-4">
            <form id="FormUpdateProject">
            <input type="text" class="form-control d-none" placeholder="ชื่อที่ ใช้ทดสอบ" id="proj_ID" name="proj_ID"
                        value="<?=$sel_set[0]['proj_ID']?>" >
                <div class="form-group">
                    <label for="email">ชื่อที่ใช้ทดสอบ</label>
                    <input type="text" class="form-control" placeholder="ชื่อที่ ใช้ทดสอบ" id="proj_NameTest" name="proj_NameTest"
                        value="<?=$sel_set[0]['proj_NameTest']?>">
                </div>             
                <div class="form-group">
                    <label for="email">ตำแหน่งแกนชื่อ แนวนอน </label>
                    <input type="text" class="form-control" placeholder="แกนชื่อ แนวนอน" id="proj_AxisX" name="proj_AxisX" value="<?=$sel_set[0]['proj_AxisX']?>">
                </div>
                <div class="form-group">
                    <label for="email">ตำแหน่งแกนชื่อ แนวตั้ง </label>
                    <input type="text" class="form-control" placeholder="แกนชื่อ แนวตั้ง" id="proj_AxisY" name="proj_AxisY" value="<?=$sel_set[0]['proj_AxisY']?>">
                </div>
                <div class="form-group">
                    <label for="text">ขนาดตัวอักษร </label>
                    <input type="text" class="form-control" placeholder="ขนาดตัวอักษร" id="proj_FontSize" name="proj_FontSize" value="<?=$sel_set[0]['proj_FontSize']?>">
                </div>
                <div class="form-group">
                    <label for="text">สีตัวอักษร </label>
                    <input type="color" class="form-control" placeholder="สีตัวอักษร" id="proj_FontColor" name="proj_FontColor" value="<?=$sel_set[0]['proj_FontColor']?>">
                </div>
                <div class="form-group">
                    <label for="text">ตำแหน่งหมายเลขเกียรติบัตร แกนแนวนอน </label>
                    <input type="text" class="form-control" placeholder="ตำแหน่งหมายเลขเกียรติบัตร แกนแนวนอน" id="proj_NumberAxisX" name="proj_NumberAxisX" value="<?=$sel_set[0]['proj_NumberAxisX']?>">
                </div>
                <div class="form-group">
                    <label for="text">ตำแหน่งหมายเลขเกียรติบัตร แกนแนวตั้ง </label>
                    <input type="text" class="form-control" placeholder="ตำแหน่งหมายเลขเกียรติบัตร แกนแนวตั้ง" id="proj_NumberAxisY" name="proj_NumberAxisY" value="<?=$sel_set[0]['proj_NumberAxisY']?>">
                </div>
                <div class="btn-group btn-group-lg">
                    <button type="button" id="SaveSuccess" class="btn btn-primary">บันทึก</button>
                    <button type="submit" class="btn btn-warning">ดูตัวอย่าง</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <iframe src="PageEx.php?ExIdProject=<?=$sel_set[0]['proj_ID']?>" frameborder="0" width="100%" height="100%"></iframe>
         
        </div>
    </div>


</main>

<?php include_once 'footer.php'; ?>