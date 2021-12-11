<?php
class Join extends DB
{
     public function Get($data = [])
     { //data=[[table1,table2,key], [table1,table2,key],]
          $qr = "Select * from ";
          $i = 0;
          $str = $data[0][0];
          while ($i < count($data)) {
               $str .= " join " . $data[$i][1] . " on " . $data[$i][0] . "." . $data[$i][2] . "=" . $data[$i][1] . "." . $data[$i][2];
               $i++;
          }
          $qr .= $str;
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
          // $kq=json_encode($kq);
          return $kq;
     }
}
