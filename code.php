
<?php
include("path.php");
$login = false;
$total = 0;


if (isset($_POST["add"])) {
    if (isset($_SESSION['id'])) {
        $login = true;
        if (isset($_SESSION["cart"])) {
            $item_array_id = array_column($_SESSION["cart"], "product_id");
            if (!in_array($_GET["id"], $item_array_id)) {
                $count = count($_SESSION["cart"]);

                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],

                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
                
            } else {
                echo '<script>alert("Product Added to the Cart")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        } else {
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    } else {
        header('location: ' . $BASE_URL . 'login.php');
    }
}

