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
                "dLap" => $this->dLap->Get()
            ]
        );
    }

    function Add()
    {
        if (isset($_POST['sm'])) {
            $data = [
                "page" => "AddLaptop",
                "dLap" => $this->dLap->Add($_POST['id'], $_POST['name'], $_POST['price'], $_POST['insur'], $_POST['laptype'], $_POST['manu'], $_POST['img'], $_POST['cpu'], $_POST['gpu'], $_POST['ram'], $_POST['storage'], $_POST['screen'], $_POST['audio'], $_POST['connec'], $_POST['o_f'], $_POST['d_w'], $_POST['mate'], $_POST['batte'], $_POST['os'], $_POST['r_t']),
                "dType" => $this->dType->Get(),
                "dManu" => $this->dManu->Get()
            ];
        } else {
            $data = [
                "page" => "AddLaptop",
                "dType" => $this->dType->Get(),
                "dManu" => $this->dManu->Get()
            ];
        }
        $this->view("Layout1", $data);
    }

    function Edit($id)
    {
        if (isset($_POST['sm'])) {
            $data = [
                "page" => "EditLaptop",
                "id" => $id,
                "name" => $id,
                "dLap" => $this->dLap->Edit($_POST['id'], $_POST['name'], $_POST['price'], $_POST['insur'], $_POST['laptype'], $_POST['manu'], $_POST['img'], $_POST['cpu'], $_POST['gpu'], $_POST['ram'], $_POST['storage'], $_POST['screen'], $_POST['audio'], $_POST['connec'], $_POST['o_f'], $_POST['d_w'], $_POST['mate'], $_POST['batte'], $_POST['os'], $_POST['r_t']),
                "dType" => $this->dType->Get(),
                "dManu" => $this->dManu->Get()
            ];
        } else {
            $data = [
                "page" => "EditLaptop",
                "id" => $id,
                "dType" => $this->dType->Get(),
                "dManu" => $this->dManu->Get()
            ];
        }
        $this->view("Layout1", $data);
    }
}
