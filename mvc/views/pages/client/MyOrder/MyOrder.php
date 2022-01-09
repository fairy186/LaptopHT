<div>
     <?php
     if($data['dOrder'] !=[])
     foreach ($data['dOrder'] as $key => $value) {
          $totalCost = $this->num_to_price($value['Cost']);
          echo "
               <div class='p-3'>
                    <div class='border p-2 fw-bold bg-primary bg-opacity-25 d-flex justify-content-between'>
                         <span class='fs-5'>$value[Status_Order]</span>
                         <span>Mã Đơn: $value[ID_Order]</span>
                         <span class='fs-5 text-danger'>$totalCost</span>
                    </div>
                    <div class='bg-primary bg-opacity-10'>";
          foreach ($value['Details'] as $key1 => $value1) {
               $img = json_decode($value1['Images'], 1)[0];
               $price = $this->num_to_price($value1['Price']);
               $c = $this->num_to_price($value1['Price'] * $value1['Quantity']);
               echo "
                    <div class='d-flex rounded border p-3'>
                    <img class='me-3' src='/$data[domain]/images/$value1[ID_Lap]/$img' style='height:100px'/>
                    <div>
                         <div><span class='fw-bold'>$value1[Name_Lap]</span></div>
                         <div><span class='fw-bold'>Số lượng:</span> $value1[Quantity]</div>
                         <div><span class='fw-bold '>Đơn giá:</span> $price</div>
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
                    <a class='btn btn-primary mt-5' href='/$data[domain]/".$_SESSION['url'][0]."'> Quay lại</a>
               </div>"
     ?>
</div>