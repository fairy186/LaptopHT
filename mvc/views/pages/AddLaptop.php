<h1 style='color: blue;' align='center'>THÊM LAPTOP</h1>
<form action="./Add" class="row g-3" method="post">

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="id" placeholder="Mã Laptop" id="validationCustom01" required>
        <label id="ID"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="name" placeholder="Tên Laptop" id="validationCustom01" required>
        <label id="name_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="price" placeholder="Giá" id="validationCustom01" required>
        <label id="price_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="insur" placeholder="Bảo hành" id="validationCustom01" required>
        <label id="insur_id"></label>
    </div>

    <div class="col-4 my-0 p-1">
        <select class="form-select" name="laptype" id="validationCustom04" required>
            <option selected disabled value="">Loại Laptop</option>
            <?php
                $dtype=$data['dType'];
                for ($i=0; $i < count($dtype); $i++) { 
                    $dty=$dtype[$i];
                    echo "<option selected value='$dty[ID_Type]'>$dty[Name_Type]</option>";
                }            
            ?>
        </select>
    </div>

    <div class="col-4 my-0 p-1">
        <select class="form-select" name="manu" id="validationCustom04" required>
            <option selected disabled value="">Hãng sản xuất</option>
            <?php
                $dmanu=$data['dManu'];
                for ($i=0; $i < count($dmanu); $i++) { 
                    $dman=$dmanu[$i];
                    echo "<option selected value='$dman[ID_Manu]'>$dman[Name_Manu]</option>";
                }            
            ?>
        </select>
    </div>

    <!-- <div class="mb-3">
        <label for="formFile" class="form-label">Hình ảnh</label>
        <input class="form-control" name="img" type="file" id="formFile">
    </div> -->

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="img" placeholder="Hình ảnh" id="validationCustom01" required>
        <label id="img_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="cpu" placeholder="CPU" id="validationCustom01" required>
        <label id="cpu_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="gpu" placeholder="GPU" id="validationCustom01" required>
        <label id="gpu_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="ram" placeholder="RAM" id="validationCustom01" required>
        <label id="ram_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="storage" placeholder="Ổ cứng" id="validationCustom01" required>
        <label id="storage_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="screen" placeholder="Màn hình" id="validationCustom01" required>
        <label id="screen_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="audio" placeholder="Âm thanh" id="validationCustom01" required>
        <label id="audio_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="connec" placeholder="Kết nối" id="validationCustom01" required>
        <label id="connec_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="o_f" placeholder="Tính năng khác" id="validationCustom01" required>
        <label id="of_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="d_w" placeholder="Kích thước" id="validationCustom01" required>
        <label id="dw_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="mate" placeholder="Chất liệu" id="validationCustom01" required>
        <label id="mate_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="batte" placeholder="Pin" id="validationCustom01" required>
        <label id="batte_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="os" placeholder="Hệ điều hành" id="validationCustom01" required>
        <label id="os_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="r_t" placeholder="Thời gian phát hành" id="validationCustom01" required>
        <label id="rt_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <button class="btn btn-primary" name="sm" type="submit">Thêm</button>
    </div>
</form>