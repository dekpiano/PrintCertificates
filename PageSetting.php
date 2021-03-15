<?php include_once 'header.php'; 

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
    <div class="row">
        <div class="col-md-4">
            <form>
                <div class="form-group">
                    <label for="email">ชื่อที่ใช้ทดสอบ</label>
                    <input type="text" class="form-control" placeholder="ชื่อที่ ใช้ทดสอบ" id="email"
                        value="ชื่อ นามสกุล">
                </div>
                <?php  echo $_SERVER['HTTP_HOST'];?>
                <div class="form-group">
                    <label for="email">แกนชื่อ แนวนอน </label>
                    <input type="text" class="form-control" placeholder="Enter email" id="email" value="100">
                </div>
                <div class="form-group">
                    <label for="email">แกนชื่อ แนวตั้ง </label>
                    <input type="text" class="form-control" placeholder="Enter email" id="email" value="auto">
                </div>
                <div class="form-group">
                    <label for="text">ขนาดตัวอักษร </label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email" value="30">
                </div>
                <div class="form-group">
                    <label for="text">สีตัวอักษร </label>
                    <input type="color" class="form-control" placeholder="Enter email" id="email" value="#ff0560">
                </div>
                <div class="form-group">
                    <label for="text">ตำแหน่งหมายเลขเกียรติบัตร แกนแนวนอน </label>
                    <input type="text" class="form-control" placeholder="Enter email" id="email" value="250">
                </div>
                <div class="form-group">
                    <label for="text">ตำแหน่งหมายเลขเกียรติบัตร แกนแนวตั้ง </label>
                    <input type="text" class="form-control" placeholder="Enter email" id="email" value="30">
                </div>
                <div class="btn-group btn-group-lg">
                    <button type="button" class="btn btn-primary">บันทึก</button>
                    <button type="button" class="btn btn-warning">ดูตัวอย่าง</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <iframe src="PageEx.php" frameborder="0" width="100%" height="100%"></iframe>
         
        </div>
    </div>


</main>

<?php include_once 'footer.php'; ?>