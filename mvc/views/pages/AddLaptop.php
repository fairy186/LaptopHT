<h1 style='color: blue;' align='center'>THÊM LAPTOP</h1>

<form action="./Add" class="row g-3" method="post">

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="id" placeholder="Mã Laptop" required>
        <label id="ID"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="name" placeholder="Tên Laptop" required>
        <label id="name_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="price" placeholder="Giá" required>
        <label id="price_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="insur" placeholder="Bảo hành" required>
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
        <input type="text" class="form-control" name="img" placeholder="Hình ảnh" required>
        <label id="img_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="cpu" placeholder="CPU" required>
        <label id="cpu_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="gpu" placeholder="GPU" required>
        <label id="gpu_id"></label>
    </div>

    <div class="col-12 my-0 p-1">
        <input type="text" class="form-control" name="storage" placeholder="Ổ cứng" required>
        <label id="storage_id"></label>
    </div>

    <table>
        <tr>
            <h4>RAM</h4>
        </tr>
        <tr>
            <td style="text-align: right;">
                Dung lượng RAM
            </td>
            <td>
                <div class="col-10 p-1">
                    <input type="text" class="form-control" name="ram" required>
                    <label id="ram_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Loại RAM
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="ram" required>
                    <label id="ram_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Tốc độ Bus RAM
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="ram" required>
                    <label id="ram_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Hỗ trợ RAM tối đa
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="ram" required>
                    <label id="ram_id"></label>
                </div>
            </td>
        </tr>
    </table>



    <table>
        <tr>
            <h4>Màn hình</h4>
        </tr>
        <tr>
            <td style="text-align: right;">
                Kích thước màn hình
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="screen" required>
                    <label id="screen_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Độ phân giải
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="screen" required>
                    <label id="screen_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Tần số quét
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="screen" required>
                    <label id="screen_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Công nghệ màn hình
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="screen" required>
                    <label id="screen_id"></label>
                </div>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <h4>Kết nối & Tính năng khác</h4>
        </tr>
        <tr>
            <td style="text-align: right;">
                Cổng giao tiếp
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="connec" required>
                    <label id="connec_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Kết nối không dây
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="connec" required>
                    <label id="connec_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Webcam
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="o_f" required>
                    <label id="of_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Tính năng khác
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="o_f" required>
                    <label id="of_id"></label>
                </div>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <h4>Âm thanh</h4>
        </tr>
        <tr>
            <td style="text-align: right;">
                Công nghệ âm thanh
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="audio" required>
                    <label id="audio_id"></label>
                </div>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <h4>Kích thước & Trọng lượng</h4>
        </tr>
        <tr>
            <td style="text-align: right;">
                Dài
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="d_w" required>
                    <label id="dw_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Rộng
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="d_w" required>
                    <label id="dw_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Dày
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="d_w" required>
                    <label id="dw_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Nặng
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="d_w" required>
                    <label id="dw_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Chất liệu
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="mate" required>
                    <label id="mate_id"></label>
                </div>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <h4>Thông tin khác</h4>
        </tr>
        <tr>
            <td style="text-align: right;">
                Pin
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="batte" required>
                    <label id="batte_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Hệ điều hành
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="os" required>
                    <label id="os_id"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Thời điểm ra mắt
            </td>
            <td>
                <div class="col-10 my-0 p-1">
                    <input type="text" class="form-control" name="r_t" required>
                    <label id="rt_id"></label>
                </div>
            </td>
        </tr>
    </table>

    <div class="col-12 my-0 p-1">
        <button class="btn btn-primary" name="sm" type="submit">Thêm</button>
    </div>
</form>