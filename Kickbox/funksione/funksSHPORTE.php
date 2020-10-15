
<?php
    if (isset($_POST["add"])){
        if (isset($_SESSION["shporta"])){
            $item_array_id = array_column($_SESSION["shporta"],"product_id");
            if (!in_array($_GET["ID_produkte"],$item_array_id)){
                $count = count($_SESSION["shporta"]);
                $item_array = array(
                    'product_id' => $_GET["ID_produkte"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["shporta"][$count] = $item_array;
                echo '<script>window.location="Shporta.php"</script>';
            }else{
                echo '<script>alert("Produkti gjendet ne shporte")</script>';
                echo '<script>window.location="Shporta.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["ID_produkte"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["shporta"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["shporta"] as $keys => $value){
                if ($value["product_id"] == $_GET["ID_produkte"]){
                    unset($_SESSION["shporta"][$keys]);
                    echo '<script>alert("Produkti u hoq!")</script>';
                    echo '<script>window.location="Shporta.php"</script>';
                }
            }
        }
    }
?>