<?php include_once 'header.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">โครงการ</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#exampleModalLong">
                + เพิ่มโครงการ
            </button>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">

            <?php $sel_proj = select("SELECT proj_ID,proj_Topic,proj_Img FROM tb_certificate_project"); 
                foreach ($sel_proj as $key => $v_proj) :
            ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="uploads/<?=$v_proj['proj_Img']?>"
                            alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                            src="uploads/<?=$v_proj['proj_Img']?>"
                            data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text"><?=$v_proj['proj_Topic']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="PageSetting.php?IdProject=<?=$v_proj['proj_ID']?>" class="btn btn-sm btn-outline-secondary">ตั้งค่า</a>
                                    <a href="#" id="EditProject" project-ID="<?=$v_proj['proj_ID']?>" class="btn btn-sm btn-outline-secondary EditProject">แก้ไข</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">พิมพ์</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>


</main>

<?php include_once 'footer.php'; ?>