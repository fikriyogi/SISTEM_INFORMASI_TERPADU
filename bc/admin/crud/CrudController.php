<?php
include_once 'Dao.php';

class CrudController extends Config
{


    public function __construct()
    {
        $dao = new Config();
        $conn = $dao->openConnection();
        $this->conn = $conn;
    }

    public $conn;


    /* Fetch All */
    public function readData()
    {
        try {
            $resource = $this->conn->query("SELECT * FROM `tb_message` ORDER BY id DESC");
            $row = $resource->fetchAll(PDO::FETCH_ASSOC);
            // $this->conn->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (!empty($row)) {
            return $row;
        }
    }

    /* Fetch Single Record by Id */
    public function readSingle($id)
    {
        try {
            $resource = $this->conn->query("SELECT id,title,description, url, category FROM `tb_message` WHERE id=" . $id . " ORDER BY id DESC");
            $row = $resource->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (!empty($row)) {
            return $row;
        }
    }

    /* Add New Record */
    public function add($formArray)
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        $this->conn->query("INSERT INTO `tb_message`(`title`, `description`, `url`, `category`) VALUES ('" . $title . "','" . $description . "','" . $url . "','" . $category . "')");

    }

    /* Edit a Record */
    public function edit($formArray)
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        $this->conn->query("UPDATE tb_message SET title = '" . $title . "' , description='" . $description . "', url='" . $url . "', category='" . $category . "' WHERE id=" . $id);
    }

    /* Delete a Record */
    public function delete($id)
    {
        $this->conn->query("DELETE FROM `tb_message` where id='$id'");
    }
}

?>