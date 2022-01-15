<div class="bg-dark bg-opacity-75 text-light">
     <?php
     if ($data['dOrder'] != [])
          foreach ($data['dOrder'] as $key => $value) {
               $totalCost = $this->num_to_price($value['Cost']);
               $time = $this->format_date($value['Time_Order']);
               echo "
               <div class='p-3'>
                    <div class='border p-2 fw-bold bg-primary bg-opacity-25 d-flex justify-content-between'>
                         <span>Mã Đơn: $value[ID_Order]</span>
                         <span class='fs-5'>$value[Status_Order]</span>
                         <span class='fs-5' style='color:red;'>Tổng: $totalCost</span>
                    </div>
                    <div class='bg-primary bg-opacity-10'>";
               foreach ($value['Details'] as $key1 => $value1) {
                    $img = json_decode($value1['Images'], 1)[0];
                    $price = $this->num_to_price($value1['Price']);
                    $c = $this->num_to_price($value1['Price'] * $value1['Quantity']);
                    echo "
                    <div class='d-flex rounded border p-3'>
                    <img class='me-3' src='$data[domain]/images/$value1[ID_Lap]/$img' style='height:120px'/>
                    <div>
                            <div class='text-warning fw-bold p-1'>$value1[Name_Lap]</div>
                            <div class='p-1'><span >Số lượng:</span> $value1[Quantity]</div>
                            <div class='p-1'><span >Đơn giá:</span> $price</div>
                            <div class='p-1'><span >Thời điểm: </span>$time</div>
                    </div>
                    <div class='mx-auto'></div>
                    <div class='d-flex align-items-center fw-bold'>
                         <div> $c</div>
                    </div>

                    </div>
                    ";
               }
               echo      "</div>
               </div>        
          ";
          }
     else
          echo "<div class='text-center mt-5 fs-5'> 
                    <div>Bạn chưa đặt đơn hàng nào !</div>
                    <a class='btn btn-primary mt-5' href='$data[domain]/" . $_SESSION['url'][0] . "'> Quay lại</a>
               </div>"
     ?>
</div>