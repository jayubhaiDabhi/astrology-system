<?php




// if (isset($_POST["update"])) {
//     $update_value = $_POST['update_quantity'];
//     $update_id = $_POST['update_quantity_id'];
//     if ($update_value > 0) {
//         $stmt = $conn->prepare("UPDATE cart SET quantity = ? WHERE no = 1");
//         $stmt->bind_param("iii", $update_value, $update_id, $user);
//         $stmt->execute();
//     }
// }

// Remove single item
if (isset($_GET['remove'])) {
    $remove = $_GET['remove'];
    $stmt = $conn->prepare("DELETE FROM cart WHERE no = ? AND uid = ?");
    $stmt->bind_param("ii", $remove, $user);
    $stmt->execute();
    header("location:add_cart.php");
    exit();
}

// // Remove all items
// if (isset($_POST['alldelete'])) {
//     $stmt = $conn->prepare("DELETE FROM cart WHERE uid = ?");
//     $stmt->bind_param("i", $user);
//     $stmt->execute();
//     header("location:cart.php");
//     exit();
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>

        *{
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: antiquewhite;
            padding: 20px;
        }

        .cart-container {
            max-width: 900px;
            margin: auto;
            background: #d57e2f;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 23px rgba(12, 11, 12, 8.1);
            margin-top: 100px;
            max-height: 500px;
            overflow-y: scroll;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .cart-container::-webkit-scrollbar {
            display: none;
        }


        h2 {
            text-align: center;
            font-size: 28px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #9f2800;
            color: white;
        }

        .imgsize {
            width: 80px;
            border-radius: 8px;
        }

        input {
            width: 60px;
            text-align: center;
        }

        .update-btn,
        .delete-btn,
        .checkout-btn,
        .continue-btn {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: 0.3s;
        }


        .delete-btn {
            background-color: #9f2800;
            color: white;
            margin-top: 55px
        }

        .continue-btn {
            background-color: #1976d2;
            color: white;
        }

        .update-btn:hover,
        .delete-btn:hover,
        .checkout-btn:hover,
        .continue-btn:hover {
            opacity: 0.8;
        }

        .cart-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

    </style>
</head>

<body>
   
    <div class="cart-container">
        <h2>My Cart</h2>
        <table>
            <?php

            $conn = mysqli_connect("localhost", "root", "", "pro_astro");
            if (!$conn) {
                die("fail to connect");
            }

            $query = mysqli_query($conn, "SELECT * FROM cart");
            if (mysqli_num_rows($query) > 0) {
                echo "<tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>";
                $num = 1;
                $grand_total = 0;
                while ($data = mysqli_fetch_assoc($query)) {
                    $total = $data['price'] * $data['quantity'];
                    echo "<tr>
                    <td>{$num}</td>
                    <td><img src='images/" . htmlspecialchars($data['img']) . "' class='imgsize'></td>
                    <td>" . htmlspecialchars($data['name']) . "</td>
                    <td>$" . number_format($data['price'], 2) . "</td>
                    <td>" . number_format($data['quantity']) . "</td>
                    <td>$" . number_format($total, 2) . "</td>
                    <td><a href='cart.php?remove={$data['no']}' class='delete-btn'>Remove</a></td>
                </tr>";
                    $grand_total += $total;
                    $num++;
                }
            } else {
                echo "<tr><td colspan='7' style='text-align:center; font-size: 20px;'>Your Cart is Empty</td></tr>";
            }
            ?>
        </table>
        <?php if ($grand_total > 0) { ?>
            <div class="cart-actions">
                <a href="shop.php"><button class="continue-btn">Continue Shopping</button></a>
                <div style="font-size: 18px; font-weight: bold;">Grand Total: $<?php echo number_format($grand_total, 2); ?></div>

            </div>
            <form method="POST">
                <button type="submit" class="delete-btn" name="alldelete">Delete All</button>
                <button type="submit" class="delete-btn" name="allbuy">Buy All</button>
            </form>

        <?php } ?>
    </div>
</body>

</html>