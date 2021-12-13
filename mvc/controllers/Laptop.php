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
                "dLap" => $this->dLap->Add($_POST['name'], $_POST['']),
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


}
