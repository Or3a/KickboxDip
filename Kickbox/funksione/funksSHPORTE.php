
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
                    echo '<script>window.location="Shporta.php"</script>';
                }
            }
        }
    }
?>


<?php 

$lastFatureStr="";
if(isset($_POST["porosit"])){

            $idS = $_SESSION['sID']; /* Current logged in user */
            

            /* Krijo nje fature te re bosh */
            $cmimi = $_SESSION['CMIM_T'];

            mysqli_query($conn, "INSERT INTO fatura(ID_sportisti, Cmim_fatura)
                                 VALUES ($idS, $cmimi)");

            /* Gjesh id e fatures se gjeneruar */
            $lastFature = mysqli_query($conn, "SELECT ID_fatura
                                               FROM fatura
                                               WHERE ID_sportisti = $idS AND ID_fatura = (SELECT MAX(ID_fatura)
                                                                                          FROM fatura
                                                                                          WHERE ID_sportisti = $idS)");
            
            while ($row = $lastFature->fetch_assoc()) {
                $lastFatureStr = strval($row['ID_fatura']);
            }
            

            foreach ($_SESSION["shporta"] as $key => $value) {
                /* Te dhenat per cdo item te fatures */
                $product_id = strval($value['product_id']);
                $item_quantity = strval($value['item_quantity']);

                /* Fusim cdo produkt te fatures */
                mysqli_query($conn, "INSERT INTO fatura_produkt(ID_fatura, ID_produkte, Sasia_produkt) VALUES ('$lastFatureStr', '$product_id', '$item_quantity')");
            }

            $_SESSION['CMIM_T'] = NULL;
            
            echo '<script>alert("Blerja u krye me sukses!Faleminderit!")</script>';
            echo '<script>window.location="Shporta.php"</script>';
            
  
}

?>