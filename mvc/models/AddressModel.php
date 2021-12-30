<?php

class AddressModel extends DB
{
    public function GetProvince()
    {
        $qr = "SELECT * FROM `province`";
        $sql = mysqli_query($this->con, $qr);
        $kq = array();
        while ($row = mysqli_fetch_array($sql)) {
            $kq[] = $row;
        }
        return $kq;
    }

    public function GetDistrict($id)
    {
        $qr = "SELECT * FROM `district` WHERE `_province_id`='$id'";
        $sql = mysqli_query($this->con, $qr);
        $kq = array();
        while ($row = mysqli_fetch_assoc($sql)) {
            $kq[] = $row;
        }
        return $kq;
    }

    public function GetWard($id)
    {
        $qr = "SELECT * FROM `ward` WHERE `_district_id`='$id'";
        $sql = mysqli_query($this->con, $qr);
        $kq = array();
        while ($row = mysqli_fetch_array($sql)) {
            $kq[] = $row;
        }
        return $kq;
    }
}
