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
    <div class="d-flex mt-2">
        <?php
        foreach ($data['dManu'] as $key => $value)
            echo "<a  href='/$data[domain]/Search/$value[Name_Manu]' class='flex-fill btn btn-success fw-bold mx-1 fst-italic rounded-pill bg-gradient'> $value[Name_Manu]</a><span class='flex-fill'> </span>";
        ?>
    </div>
    <div class="d-flex justify-content-end my-2">
        <?php
        foreach ($data['dType'] as $key => $value)
            echo "<a href='/$data[domain]/Search/$value[Name_Type]' class='flex-fill fst-italic btn btn-dark fw-bold mx-1 rounded-pill bg-gradient'> $value[Name_Type]</a><span class='flex-fill'> </span>";
        ?>
        <select id="sapxep" class="form-select " aria-label="Default select example" style="width: 120px;">
            <option value="Add_Time/DESC" selected>Mới nhất</option>
            <option value="Add_Time/ASC">Cũ nhất</option>
            <option value="Price/ASC">Giá tăng dần</option>
            <option value="Price/DESC">Giá giảm dần</option>
        </select>
    </div>
    <div id="Listlaptop" class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 g-2">
    </div>
    <div class="text-center">
        <button id="XemThem" class="btn btn-secondary mt-3" style="padding: 5px 125px; display:none;">Xem thêm</button>
    </div>
</div>
<script>
    var vt = 0;
    $(document).ready(function() {
        load_Laptop();
    })
    $("#sapxep").change(function() {
        vt = 0;
        $("#Listlaptop").html('');
        console.log($(this).val());
        load_Laptop($(this).val());
    })
    $("#XemThem").click(function() {
        load_Laptop($("#sapxep").val());
    })

    function load_Laptop(sx = "Add_Time/DESC") {
        $.post('<?php echo "/$data[domain]/Ajax/Get_Laptop/" ?>' + vt + "/" + sx, {}, function(data) {
            $("#Listlaptop").append(data);
            vt = vt + 1;
            $.post('<?php echo "/$data[domain]/Ajax/Get_Laptop/" ?>' + vt + "/" + sx, {}, function(data) {
                if (data != "")
                    $("#XemThem").css("display","inline-block");
                else
                    $("#XemThem").css("display","none");

            })
        })
    }
</script>