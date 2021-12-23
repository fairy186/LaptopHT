<style>
</style>
<h1 style='color: blue;' align='center'>THÊM LAPTOP</h1>
<form action="/<?php echo $data['domain'] ?>/Laptop/Add" class="row" method="post" enctype="multipart/form-data">
    <div class="col-12 m-0 p-3 row border">
        <div class="col-12 col-xl-6">
            <h4>Thông tin cơ bản</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Mã laptop</label>
                <div class="col-sm-8">
                    <input type="text" vali name="id" class="form-control">
                    <label mess="id"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Tên laptop</label>
                <div class="col-sm-8">
                    <input type="text" vali name="name" class="form-control">
                    <label mess="name"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Giá</label>
                <div class="col-sm-8">
                    <input type="number" vali name="price" min="1000000" max="9999999999"class="form-control">
                    <label mess="price"></label>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <h4 class="d-none d-xl-block" style="visibility:hidden"> Cấu hình</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">CPU</label>
                <div class="col-sm-8">
                    <input type="text" vali name="cpu" class="form-control">
                    <label mess1="cpu"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">GPU</label>
                <div class="col-sm-8">
                    <input type="text" vali name="gpu" class="form-control">
                    <label mess1="gpu"></label>
                </div>
            </div>
            <div class="row" id="disk">
                <label class="col-sm-4 col-form-label">Ổ cứng</label>
                <div class="col-sm-8">
                    <input type="text" vali name="disk" class="form-control">
                    <label mess1="disk"></label>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="row">
                <label class="col-sm-4 col-form-label">Bảo hành</label>
                <div class="col-sm-8">
                    <input type="text" vali name="insu" class="form-control">
                    <label mess1="insu"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Năm ra mắt</label>
                <div class="col-sm-8">
                    <input type="text" vali name="release" class="form-control">
                    <label mess1="release"></label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <select class=" form-select" name="type" required>
                        <option selected disabled value="">Loại Laptop</option>
                        <?php
                        $dtype = $data['dType'];
                        for ($i = 0; $i < count($dtype); $i++) {
                            $dty = $dtype[$i];
                            echo "<option value='$dty[ID_Type]'>$dty[Name_Type]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-6">
                    <select class="form-select" name="manu" required>
                        <option selected disabled value="">Hãng sản xuất</option>
                        <?php
                        $dmanu = $data['dManu'];
                        for ($i = 0; $i < count($dmanu); $i++) {
                            $dman = $dmanu[$i];
                            echo "<option value='$dman[ID_Manu]'>$dman[Name_Manu]</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mt-3 mt-xl-0">
            <div class="input-group">
                <span class="input-group-text border-0 bg-transparent"> Hình ảnh</span>
                <input id="gallery-photo-add" type="file" accept="image/*" class="form-control rounded-pill" name="img[]" required multiple>
            </div>
            <div class="gallery mt-1 row row-cols-5 g-2 g-lg-3"></div>
        </div>
    </div>
    <div class="col-12 m-0 p-0 row">
    </div>
    <div class="col-12 m-0 p-0 row">
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Màn hình</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Kích thước</label>
                <div class="col-sm-8">
                    <input type="text" vali name="sizeSC" class="form-control">
                    <label mess1="sizeSC"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Độ phân giải</label>
                <div class="col-sm-8">
                    <input type="text" vali name="resoSC" class="form-control">
                    <label mess1="resoSC"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Tần số quét</label>
                <div class="col-sm-8">
                    <input type="text" vali name="freSC" class="form-control">
                    <label mess1="freSC"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Công nghệ</label>
                <div class="col-sm-8">
                    <input type="text" vali name="techSC" class=" form-control">
                    <label mess1="techSC"></label>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>RAM</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Dung lượng</label>
                <div class="col-sm-8">
                    <input type="text" vali name="memRAM" class="form-control">
                    <label mess1="memRAM"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Loại RAM</label>
                <div class="col-sm-8">
                    <input type="text" vali name="typeRAM" class="form-control">
                    <label mess1="typeRAM"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Bus RAM</label>
                <div class="col-sm-8">
                    <input type="text" vali name="busRAM" class="form-control">
                    <label mess1="busRAM"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Hỗ trợ tối đa</label>
                <div class="col-sm-8">
                    <input type="text" vali name="maxRAM" class="form-control">
                    <label mess1="maxRAM"></label>
                </div>
            </div>
        </div>

    </div>
    <div class="col-12 m-0 p-0 row">
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Kết nối & Tính năng</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Cổng kết nối</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="port" class="form-control">
                    <label mess1="port"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Kết nối không dây</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="wireless" class="form-control">
                    <label mess1="wireless"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Âm thanh</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="audio" class="form-control">
                    <label mess1="audio"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Webcam</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="webcam" class="form-control">
                    <label mess1="webcam"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Đèn bàn phím</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="ledKB" class="form-control">
                    <label mess1="ledKB"></label>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 my-0 p-3 border">
            <h4>Thông tin khác</h4>
            <div class="row">
                <label class="col-sm-4 col-form-label">Thông số vật lý</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="d_w" class="form-control">
                    <label mess1="d_w"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Chất liệu</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="material" class="form-control">
                    <label mess1="material"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Pin</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="pin" class="form-control">
                    <label mess1="pin"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Tính năng khác</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="otherF" class="form-control">
                    <label mess1="otherF"></label>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label">Hệ điều hành</label>
                <div class="col-sm-8">
                    <input type="text" vali no-re name="os" class="form-control">
                    <label mess1="os"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 my-0 p-1">
        <center>
            <button class="btn btn-outline-dark mt-3 disaled" name="sm" type="submit">
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
                        // $($.parseHTML('<img>')).attr('src', event.target.result).addClass("col p-2").appendTo(placeToInsertImagePreview);
                        var khung = $($.parseHTML('<div>')).addClass("p-1 col p-1").appendTo(placeToInsertImagePreview);
                        $($.parseHTML('<img>')).attr('src', event.target.result).css("width", "100%").addClass("border").appendTo(khung);
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