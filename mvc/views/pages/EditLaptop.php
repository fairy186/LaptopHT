<h1 style='color: blue;' align='center'>CHỈNH SỬA LAPTOP</h1>
<form action="./Edit" class="row g-3" method="post">

    <div class="col-12 my-0 p-1">
        <label for="validationCustom01" class="form-label">Mã Laptop</label>
        <input type="text" class="form-control" name="id" value="<?php echo $data['id']?>" id="validationCustom01" required>
        <label id="ID"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Tên Laptop</label>
        <input type="text" class="form-control" name="name" id="validationCustom01" required>
        <label id="name_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Giá</label>
        <input type="text" class="form-control" name="price" id="validationCustom01" required>
        <label id="price_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Bảo hành</label>
        <input type="text" class="form-control" name="insur" id="validationCustom01" required>
        <label id="insur_id"></label>
    </div>

    <div class="col-4 my-0 p-1">
        <select class="form-select" name="laptype" id="validationCustom04" required>
            <option selected disabled value="">Loại Laptop</option>
            <?php
            $dtype = $data['dType'];
            for ($i = 0; $i < count($dtype); $i++) {
                $dty = $dtype[$i];
                echo "<option selected value='$dty[ID_Type]'>$dty[Name_Type]</option>";
            }
            ?>
        </select>
    </div>

    <div class="col-4 my-0 p-1">
        <select class="form-select" name="manu" id="validationCustom04" required>
            <option selected disabled value="">Hãng sản xuất</option>
            <?php
            $dmanu = $data['dManu'];
            for ($i = 0; $i < count($dmanu); $i++) {
                $dman = $dmanu[$i];
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
    <label for="validationCustom01" class="form-label">Hình ảnh</label>
        <input type="text" class="form-control" name="img" id="validationCustom01" required>
        <label id="img_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">CPU</label>
        <input type="text" class="form-control" name="cpu" id="validationCustom01" required>
        <label id="cpu_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">GPU</label>
        <input type="text" class="form-control" name="gpu" id="validationCustom01" required>
        <label id="gpu_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">RAM</label>
        <input type="text" class="form-control" name="ram" id="validationCustom01" required>
        <label id="ram_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Ổ cứng</label>
        <input type="text" class="form-control" name="storage" id="validationCustom01" required>
        <label id="storage_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Màn hình</label>
        <input type="text" class="form-control" name="screen" id="validationCustom01" required>
        <label id="screen_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Âm thanh</label>
        <input type="text" class="form-control" name="audio" id="validationCustom01" required>
        <label id="audio_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Kết nối</label>
        <input type="text" class="form-control" name="connec" id="validationCustom01" required>
        <label id="connec_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Tính năng khác</label>
        <input type="text" class="form-control" name="o_f" id="validationCustom01" required>
        <label id="of_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Kích thước</label>
        <input type="text" class="form-control" name="d_w" id="validationCustom01" required>
        <label id="dw_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Chất liệu</label>
        <input type="text" class="form-control" name="mate" id="validationCustom01" required>
        <label id="mate_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Pin</label>
        <input type="text" class="form-control" name="batte" id="validationCustom01" required>
        <label id="batte_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Hệ điều hành</label>
        <input type="text" class="form-control" name="os" id="validationCustom01" required>
        <label id="os_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
    <label for="validationCustom01" class="form-label">Thời gian phát hành</label>
        <input type="text" class="form-control" name="r_t" id="validationCustom01" required>
        <label id="rt_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <button class="btn btn-primary" name="sm" type="submit">Thêm</button>
    </div>
</form>