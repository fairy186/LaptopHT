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
        $this->data["domain"] = $this->domain;
        $this->data["controller"] = get_class($this);
        $this->data["dir"] = $this->fixDir("App.js");
        $this->data["url"] = "/" . $this->data['domain'] . "/" . $this->data['controller'];
    }

    // action mặc định

    function DefaultAction()
    {
        $this->data["page"] = "Laptop";
        $this->data['title'] = "Laptop";
        $this->data['dLap'] = $this->dLap->Get();
        $this->view("AdminLayout", $this->data);
    }

    function Add()
    {
        $this->data["page"] = "AddLaptop";
        $this->data['title'] = "Thêm laptop";
        $this->data['action'] = "Add";
        $this->data['dType'] = $this->dType->Get();
        $this->data['dManu'] = $this->dManu->Get();
        if (isset($_POST['sm'])) {
            $check = $this->validate([$this->dLap->CheckID($_POST['ma']),$this->dLap->CheckName($_POST['ten'])]);
            $img = $this->upFile($_POST['ma']);
            $ram = json_encode(["memRAM" => $_POST['memRAM'], "typeRAM" => $_POST['typeRAM'], "busRAM" => $_POST['busRAM'], "maxRAM" => $_POST['maxRAM']]);
            $screen = json_encode(["sizeSC" => $_POST['sizeSC'], "resoSC" => $_POST['resoSC'], "freSC" => $_POST['freSC'], "techSC" => $_POST['techSC']]);
            $connection = json_encode(["port" => $_POST['port'], "wireless" => $_POST['wireless']]);
            $other_feature = json_encode(["webcam" => $_POST['webcam'], "ledKB" => $_POST['ledKB'], "otherF" => $_POST['otherF']]);
            if ($check)
                $this->data["goDefault"] = $this->dLap->Add($_POST['ma'], $_POST['ten'], $_POST['price'], $_POST['insu'], $_POST['type'], $_POST['manu'], $img, $_POST['cpu'], $_POST['gpu'], $ram, $_POST['disk'], $screen, $_POST['audio'], $connection, $other_feature, $_POST['d_w'], $_POST['material'], $_POST['pin'], $_POST['os'], $_POST['release']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("AdminLayout", $this->data);
    }
    function Edit($id)
    {
        $this->data["page"] = "EditLaptop";
        $this->data['title'] = "Sửa laptop";
        $this->data['action'] = "Edit";
        $this->data['dType'] = $this->dType->Get();
        $this->data['dManu'] = $this->dManu->Get();
        $this->data["id"] = $id;
        $this->data["name"] = $this->dLap->GetByID($id)["Name_Lap"];;
        if (isset($_POST['sm'])) {
            $check = $this->validate([$this->dLap->CheckName($_POST['ten'])]);
            if ($check)
                $this->data["goDefault"] = $this->dLap->Edit($id, $_POST['ten'],  $_POST['name'], $_POST['price'], $_POST['insur'], $_POST['laptype'], $_POST['manu'], $_POST['img'], $_POST['cpu'], $_POST['gpu'], $_POST['ram'], $_POST['storage'], $_POST['screen'], $_POST['audio'], $_POST['connec'], $_POST['o_f'], $_POST['d_w'], $_POST['mate'], $_POST['batte'], $_POST['os'], $_POST['r_t']);
            else
                $this->data["tb"] = "Lỗi";
        }
        $this->view("AdminLayout", $this->data);
    }

    function Delete($id)
    {
        $this->data["page"] = "DeleteLaptop";
        $this->data['title'] = "Xóa laptop";
        $this->data['action'] = "Delete";
        $this->data['id'] = $id;
        if (isset($_POST['sm'])) {
            $this->data["goDefault"] = $this->dLap->Delete($id);
        }
        $this->view("AdminLayout", $this->data);
    }
    function upFile($forderName)
    {
        $imgdata = [];
        $target_dir = "images/$forderName/";
        $forder = "images/$forderName";
        if (!is_dir($forder))
            mkdir($forder);
        $files = glob("$forder/*"); // get all file names
        foreach ($files as $file) { // iterate files
            if (is_file($file)) {
                unlink($file); // delete file
            }
        }
        foreach ($_FILES["img"]["name"] as $key => $value) {
            $target_file = $target_dir . basename($_FILES["img"]["name"][$key]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["img"]["tmp_name"][$key]);
            if ($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                // echo "File is not an image.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["img"]["size"][$key] > 40 * 1024 * 1024) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["img"]["tmp_name"][$key], $target_file)) {
                    $imgdata[] = htmlspecialchars(basename($_FILES["img"]["name"][$key]));
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        return json_encode($imgdata);
    }
}
