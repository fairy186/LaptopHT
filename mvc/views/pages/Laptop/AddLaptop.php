<style>
    img {
        margin: 5px;
        border: 1px blue solid;
    }
</style>
<h1 style='color: blue;' align='center'>THÊM LAPTOP</h1>

<form action="/<?php echo $data['domain'] ?>/Laptop/Add" method="post">
    <div class="col-12 m-0 p-0 row">
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Sản phẩm</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Mã laptop</label>
                <div class="col-sm-8">
                    <input type="text" name="ma" class="form-control">
                    <label mess="ma"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Tên laptop</label>
                <div class="col-sm-8">
                    <input type="text" name="ten" class="form-control">
                    <label mess="ten"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Giá</label>
                <div class="col-sm-8">
                    <input type="text" name="gia" class="form-control">
                    <label mess="gia"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Bảo hành</label>
                <div class="col-sm-8">
                    <input type="text" name="insu" class="form-control">
                    <label mess="insu"></label>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Cấu hình</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">CPU</label>
                <div class="col-sm-8">
                    <input type="text" name="cpu" class="form-control">
                    <label mess="cpu"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">GPU</label>
                <div class="col-sm-8">
                    <input type="text" name="gpu" class="form-control">
                    <label mess="gpu"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Ổ cứng</label>
                <div class="col-sm-8">
                    <input type="text" name="disk" class="form-control">
                    <label mess="disk"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Âm thanh</label>
                <div class="col-sm-8">
                    <input type="text" name="audio" class="form-control">
                    <label mess="audio"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 m-0 p-0 row">
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Danh mục & ảnh</h4>
            <select class="form-select" name="type" id="validationCustom04" required>
                <option selected disabled value="">Loại Laptop</option>
                <?php
                $dtype = $data['dType'];
                for ($i = 0; $i < count($dtype); $i++) {
                    $dty = $dtype[$i];
                    echo "<option value='$dty[ID_Type]'>$dty[Name_Type]</option>";
                }
                ?>
            </select>
            <label mess="type"></label>
            <select class="form-select" name="manu" id="validationCustom04" required>
                <option selected disabled value="">Hãng sản xuất</option>
                <?php
                $dmanu = $data['dManu'];
                for ($i = 0; $i < count($dmanu); $i++) {
                    $dman = $dmanu[$i];
                    echo "<option value='$dman[ID_Manu]'>$dman[Name_Manu]</option>";
                }
                ?>
            </select>
            <label mess="manu"></label>
            <div class="input-group">
                <span class="input-group-text border-0 bg-transparent"> Hình ảnh</span>
                <input id="gallery-photo-add" type="file" accept="image/*" class="form-control" name="img[]" placeholder="Ổ cứng" required multiple>
            </div>
            <div class="gallery mt-1"></div>

        </div>
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>RAM</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Dung lượng </label>
                <div class="col-sm-8">
                    <input type="text" name="memRAM" class="form-control">
                    <label mess="memRAM"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Loại RAM</label>
                <div class="col-sm-8">
                    <input type="text" name="typeRAM" class="form-control">
                    <label mess="typeRAM"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Bus RAM</label>
                <div class="col-sm-8">
                    <input type="text" name="busRAM" class="form-control">
                    <label mess="busRAM"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Hỗ trợ tối đa</label>
                <div class="col-sm-8">
                    <input type="text" name="maxRAM" class="form-control">
                    <label mess="maxRAM"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 m-0 p-0 row">
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Màn hình</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Kích thước</label>
                <div class="col-sm-8">
                    <input type="text" name="sizeSC" class="form-control">
                    <label mess="sizeSC"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Độ phân giải</label>
                <div class="col-sm-8">
                    <input type="text" name="resoSC" class="form-control">
                    <label mess="resoSC"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Tần số quét</label>
                <div class="col-sm-8">
                    <input type="text" name="freSC" class="form-control">
                    <label mess="freSC"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Công nghệ</label>
                <div class="col-sm-8">
                    <input type="text" name="techSC" class=" form-control">
                    <label mess="techSC"></label>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Kết nối & Tính năng khác</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Cổng giao tiếp</label>
                <div class="col-sm-8">
                    <input type="text" name="port" class="form-control">
                    <label mess="port"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Kết nối không dây</label>
                <div class="col-sm-8">
                    <input type="text" name="wireless" class="form-control">
                    <label mess="wireless"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Webcam </label>
                <div class="col-sm-8">
                    <input type="text" name="webcam" class="form-control">
                    <label mess="webcam"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Tính năng khác </label>
                <div class="col-sm-8">
                    <input type="text" name="otherF" class="form-control">
                    <label mess="otherF"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 m-0 p-0 row">
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Kích thước & Trọng lượng</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Dài</label>
                <div class="col-sm-8">
                    <input type="text" name="width" class="form-control">
                    <label mess="width"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Rộng</label>
                <div class="col-sm-8">
                    <input type="text" name="depth" class="form-control">
                    <label mess="depth"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Dày</label>
                <div class="col-sm-8">
                    <input type="text" name="height" class="form-control">
                    <label mess="height"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Nặng</label>
                <div class="col-sm-8">
                    <input type="text" name="weight" class="form-control">
                    <label mess="weight"></label>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Thông tin khác</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Chất liệu</label>
                <div class="col-sm-8">
                    <input type="text" name="material" class="form-control">
                    <label mess="material"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Pin</label>
                <div class="col-sm-8">
                    <input type="text" name="pin" class="form-control">
                    <label mess="pin"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Hệ điều hành</label>
                <div class="col-sm-8">
                    <input type="text" name="os" class="form-control">
                    <label mess="os"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Năm ra mắt</label>
                <div class="col-sm-8">
                    <input type="text" name="release" class="form-control">
                    <label mess="release"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 my-0 p-1">
        <center>
            <button class="btn btn-outline-dark mt-3" name="sm" type="submit">
                <h4 class="mx-3 my-1">Xác nhận</h4>
            </button>
        </center>
    </div>
</form>
<script>
    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
            $(placeToInsertImagePreview).html("");
            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).css("height", "120px").appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#gallery-photo-add').on('change', function() {
            imagesPreview(this, 'div.gallery');
        });
    });
</script>