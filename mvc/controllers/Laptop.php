<?php
class Laptop extends Controller
{
    protected $dLap;
    protected $dType;
    protected $dManu;
    protected $data;

    function __construct()
    {
        $this->dLap = $this->model("LaptopModel");
        $this->dType = $this->model("LaptopTypeModel");
        $this->dManu = $this->model("ManufacturerModel");
    }

    // action mặc định

    function DefaultAction()
    {
        $this->view(
            "Layout1",
            [
                "page" => "Laptop",
                "title" => "Laptop",
                "dLap" => $this->dLap->Get()
            ]
        );
    }

    function Add()
    {
        if (isset($_POST['sm'])) {
            $check = $this->dLap->CheckID($_POST['ma'])[0];
            if ($check) {
                $this->dLap->Add($_POST['id'], $_POST['name'], $_POST['price'], $_POST['insur'], $_POST['laptype'], $_POST['manu'], $_POST['img'], $_POST['cpu'], $_POST['gpu'], $_POST['ram'], $_POST['storage'], $_POST['screen'], $_POST['audio'], $_POST['connec'], $_POST['o_f'], $_POST['d_w'], $_POST['mate'], $_POST['batte'], $_POST['os'], $_POST['r_t']);
                $data = [
                    "page" => "AddLaptopType",
                    "dLap" => $this->dLap->Add($_POST['id'], $_POST['name'], $_POST['price'], $_POST['insur'], $_POST['laptype'], $_POST['manu'], $_POST['img'], $_POST['cpu'], $_POST['gpu'], $_POST['ram'], $_POST['storage'], $_POST['screen'], $_POST['audio'], $_POST['connec'], $_POST['o_f'], $_POST['d_w'], $_POST['mate'], $_POST['batte'], $_POST['os'], $_POST['r_t']),
                    "dType" => $this->dType->Get(),
                    "dManu" => $this->dManu->Get(),
                    "url" => "../LaptopType",
                    "tb" => "Đã thêm"
                ];
            } else {
                $data = [
                    "page" => "AddLaptopType",
                    "dType" => $this->dType->Get(),
                    "dManu" => $this->dManu->Get(),
                    "tb" => "Lỗi"
                ];
            }
        } else {
            $data = [
                "page" => "AddLaptop",
                "dType" => $this->dType->Get(),
                "dManu" => $this->dManu->Get()
            ];
        }
        $data['title'] = "Thêm Laptop";
        $this->view("Layout1", $data);
    }

    function Edit($id)
    {
        $rows = $this->dLap->GetByID($id);
        // $rows1 = $this->dLap->GetByID($id)["Price"];
        // echo $rows1;
        // $name = $this->dLap->GetByID($id)["Name_Lap"];
        // $price = $this->dLap->GetByID($id)["Price"];
        // ["Price"]["Insurance"]["ID_Type"]["ID_Manu"]["Images"]["CPU"]["GPU"]["RAM"]["Storage"]["Screen"]["Audio"]["Connection"]["Other_Feature"]["Dimen_Wei"]["Material"]["Battery"]["OS"]["Release_Time"];
        if (isset($_POST['sm'])) {
            //sau khi submit
            // print_r($_POST);
            $check = $this->dLap->CheckName($_POST['id'])[0];
            if ($check) {
                $this->dLap->Edit($id, $_POST['name']);
                $data = [
                    "page" => "EditLaptop",
                    "dLap" => $this->dLap->Edit($_POST['id'], $_POST['name'], $_POST['price'], $_POST['insur'], $_POST['laptype'], $_POST['manu'], $_POST['img'], $_POST['cpu'], $_POST['gpu'], $_POST['ram'], $_POST['storage'], $_POST['screen'], $_POST['audio'], $_POST['connec'], $_POST['o_f'], $_POST['d_w'], $_POST['mate'], $_POST['batte'], $_POST['os'], $_POST['r_t']),
                    "dType" => $this->dType->Get(),
                    "dManu" => $this->dManu->Get(),
                    "url" => "../../Laptop",
                    "tb" => "Đã thêm",
                ];
            } else {
                $data = [
                    "page" => "EditLaptop",
                    "id" => $id,
                    "name" => $rows['Name_Lap'],
                    "tb" => "Lỗi"
                ];
            }
        } else {
            //trước khi submit
            $data = [
                "page" => "EditLaptop",
                "id" => $id,
                // "name" => $name,
                "dType" => $this->dType->Get(),
                "dManu" => $this->dManu->Get()
            ];
        }
        $data['title'] = "Sửa Laptop";
        $this->view("Layout1", $data);
    }
}
