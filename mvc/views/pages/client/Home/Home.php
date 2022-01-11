<div>
    <div class="row p-0 pt-2">
        <div id="carouselExampleCaptions" class="carousel slide col-12 col-md-8" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php
                foreach ($data['dSlider'] as $key => $value) {
                    if ($key == 0) {
                        echo "
                <div class='carousel-item active'>
                    <img src='/$data[domain]/images/slider/$value[Image]' class='d-block w-100' alt='...'>
                </div>
                ";
                    } else
                        echo "
                <div class='carousel-item '>
                    <img src='/$data[domain]/images/slider/$value[Image]' class='d-block w-100' alt='...'>
                </div>
                ";
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="col-4 d-none d-md-block">
            <a href="#"><img class="w-100 mb-2" src="//cdn.tgdd.vn/2021/07/banner/Evogen11-390x97-1.png" alt="Sticky Evo Gen11"></a>
            <a href="#"><img class="w-100" src="//cdn.tgdd.vn/2022/01/banner/sticky-win-390x97.png" alt="1 Đổi 1 Trong 1 Tháng"></a>
        </div>
    </div>
    <div class="d-flex justify-content-end my-2">
        <select class="form-select " aria-label="Default select example" style="width: 200px;">
            <option selected>Sắp xếp</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div id="Listlaptop" class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 g-2">
    </div>
    <div class="text-center">
        <button id="XemThem" class="btn btn-secondary mt-3" style="padding: 5px 125px;">Xem thêm</button>
    </div>
</div>
<script>
    var vt = 0;
    $(document).ready(function() {
        $.post('<?php echo "/$data[domain]/Ajax/Get_Laptop/" ?>' + vt, {}, function(data) {
            $("#Listlaptop").append(data);
            vt = vt + 1;
            $.post('<?php echo "/$data[domain]/Ajax/Get_Laptop/" ?>' + vt, {}, function(data) {
                if (data == "")
                    $("#XemThem").remove();
            })
        })
    })
    $("#XemThem").click(function() {
        $.post('<?php echo "/$data[domain]/Ajax/Get_Laptop/" ?>' + vt, {}, function(data) {
            $("#Listlaptop").append(data);
            vt = vt + 1;
            $.post('<?php echo "/$data[domain]/Ajax/Get_Laptop/" ?>' + vt, {}, function(data) {
                if (data == "")
                    $("#XemThem").remove();
            })
        })
    })
</script>