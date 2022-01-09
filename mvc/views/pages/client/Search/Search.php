<div id="Listlaptop" class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 g-2 mt-2">
</div>
<div class="text-center">
    <button id="XemThem" class="btn btn-secondary mt-3" style="padding: 5px 125px;">Xem thêm</button>
</div>
<script>
    var vt = 0;
    $(document).ready(function() {
        $.post('<?php echo "/$data[domain]/Ajax/Get_Search_Laptop/$data[info]/" ?>' + vt, {}, function(data) {
            $("#Listlaptop").append(data);
            vt = vt + 1;
            $.post('<?php echo "/$data[domain]/Ajax/Get_Search_Laptop/$data[info]/" ?>' + vt, {}, function(data) {
                if (data == "")
                    $("#XemThem").remove();
            })
        })
    })
    $("#XemThem").click(function() {
        $.post('<?php echo "/$data[domain]/Ajax/Get_Search_Laptop/$data[info]/" ?>' + vt, {}, function(data) {
            $("#Listlaptop").append(data);
            vt = vt + 1;
            $.post('<?php echo "/$data[domain]/Ajax/Get_Search_Laptop/$data[info]/" ?>' + vt, {}, function(data) {
                if (data == "")
                    $("#XemThem").remove();
            })
        })
    })
</script>