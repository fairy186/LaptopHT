<?php
class CommentModel extends DB
{
     public function Get()
     {
          $qr = "SELECT * FROM `comment`";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_array($sql)) {
               $kq[] = $row;
          }
          return $kq;
     }

     public function GetCommByID_Lap($id)
     {
          $qr = "SELECT * FROM `comment` JOIN `customer` ON comment.ID_Cus = customer.ID_Cus
                                        WHERE comment.ID_Lap='$id'
                                        ORDER BY Time_Comm DESC";
          $sql = mysqli_query($this->con, $qr);
          $kq = array();
          while ($row = mysqli_fetch_assoc($sql)) {
               $kq[] = $row;
          }
          return $kq;
     }

}
