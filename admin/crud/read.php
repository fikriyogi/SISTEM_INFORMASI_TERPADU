<?php
    include_once 'CrudController.php';
    $crudcontroller = new CrudController();
    switch($_POST["type"]) {
    
        case "single":
            
            if(isset($_POST["id"])) {
                $row = $crudcontroller->readSingle($_POST["id"]);
                if(!empty($row)) {
                    $responseArray["title"] = $row[0]["title"];
                    $responseArray["description"] = $row[0]["description"];
                    $responseArray["url"] = $row[0]["url"];
                    $responseArray["category"] = $row[0]["category"];
                    echo json_encode($responseArray);
                }
            }
            break;
        case "all":
            $row = $crudcontroller->readData();
            require_once "list.php";
            break;
            
        default:
            break;
    }

?>