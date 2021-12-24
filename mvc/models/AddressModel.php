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

    public function GetDistrict()
    {
        $qr = "SELECT * FROM `district`";
        $sql = mysqli_query($this->con, $qr);
        $kq = array();
        while ($row = mysqli_fetch_array($sql)) {
            $kq[] = $row;
        }
        return $kq;
    }

    public function GetWard()
    {
        $qr = "SELECT * FROM `ward`";
        $sql = mysqli_query($this->con, $qr);
        $kq = array();
        while ($row = mysqli_fetch_array($sql)) {
            $kq[] = $row;
        }
        return $kq;
    }
}
