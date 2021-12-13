<?php
class LaptopModel extends DB
{
     public function Get()
     {
          $qr = "Select * from laptop";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
     }
          public function Add($id, $name, $price, $insur, $id_type, 
                              $id_manu, $img, $cpu, $gpu, $ram, 
                              $storage, $screen, $audio, $connec, 
                              $o_f, $d_w, $material, $battery, $os, $r_t ){
               $qr="INSERT INTO `laptop`(`ID_Lap`,`Name_Lap`, `Price`, `Insurance`, 
                                        `ID_Type`, `ID_Manu`, `Images`, `CPU`, 
                                        `GPU`, `RAM`, `Storage`, `Screen`, `Audio`, 
                                        `Connection`, `Other_Feature`, `Dimen_Wei`, 
                                        `Material`, `Battery`, `OS`, `Release_Time`) 
                    VALUES ($id,'$name','$price','$insur','$id_type',
                         '$id_manu','$img','$cpu','$gpu','$ram','$storage',
                         '$screen','$audio','$connec','$o_f','$d_w','$material',
                         '$battery','$os','$r_t')";
               $sql=mysqli_query($this->con,$qr);
               return $sql;
          }
     }
