<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "pro_astro");
if (!$conn) {
    die("fail to connect");
}

// Add buy functionality
if(isset($_POST['buy_submit'])) {
    if(!isset($_SESSION['uid'])) {
        echo "<script>alert('Please login first!'); window.location.href='log.php';</script>";
        exit();
    }
    
    $uid = $_SESSION['uid'];
    $uname = $_SESSION['username'];
    $uadd = $_POST['address'];
    $img = $_POST['img'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = max(1, intval($_POST['quantity'])); // Ensure minimum quantity is 1
    $total = $price * $quantity;
    
    $sql = "INSERT INTO buy (uid, uname, uadd, img, name, quantity, price, total) 
            VALUES ('$uid', '$uname', '$uadd', '$img', '$name', '$quantity', '$price', '$total')";
    
    if(mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Purchase successful!'); 
            window.location.href='home.php';
        </script>";
    } else {
        echo "<script>alert('Purchase failed! Please try again.');</script>";
    }
}

if (isset($_POST["sphatikmala"])) {
    $in = "insert into cart values(2,'sphatikmala.jpeg','sphatikmala',2149,1,2149)";
    $in = mysqli_query($conn, $in);
    if (!$in) {
        echo "Not insert";
    } else {
        echo "add to cart sucessfully";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;

        }

        /* navbar */
        .class_navbar {
            height: 60px;
            width: 100%;
            background-color: #9f2800;
            display: flex;
            flex-wrap: wrap;
            height: 70px;
        }

        .class_clock {
            margin-left: 1000px;
            color: #d57e2f;
            margin-top: 5px;
            display: flex;
        }

        .class_clock a {
            font-size: 40px;
            margin-left: 30px;
            margin-top: 10px;
            color: #d57e2f;
        }

        .clock {
            font-size: 20px;
            margin-left: 35px;
        }

        /* slide bar */
        .sidebar {
            position: fixed;
            left: -250px;
            width: 250px;
            height: 100%;
            background: #d57e2f;
            transition: all .5s ease;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.3);

        }

        .sidebar header {
            font-size: 22px;
            color: #d57e2f;
            text-align: center;
            line-height: 70px;
            background: #9f2800;
            user-select: none;
        }

        .sidebar ul a {
            display: block;
            height: 100%;
            width: 100%;
            line-height: 50px;
            font-size: 20px;
            color: #9f2800;
            padding-left: 40px;
            box-sizing: border-box;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            transition: .4s;
            text-decoration: none;
        }

        ul li:hover a {
            padding-left: 50px;
            color: #d57e2f;
            background: #9f2800;
        }

        .sidebar ul a i {
            margin-right: 16px;

        }

        #check {
            display: none;
        }

        label #btn,
        label #cancel {
            position: absolute;
            cursor: pointer;
            background: #d57e2f;
            border-radius: 3px;

        }

        label #btn {
            left: 20px;
            top: 15px;
            font-size: 30px;
            color: #9f2800;
            padding: 6px 12px;
            transition: all .5s;
        }

        label #cancel {
            z-index: 1111;
            left: -40px;
            top: 17px;
            font-size: 30px;
            color: #9f2800;
            padding: 4px 9px;
            transition: all .5s ease;
        }

        #check:checked~.sidebar {
            left: 0;
        }

        #check:checked~label #btn {
            left: 250px;
            opacity: 0;
            pointer-events: none;

        }

        #check:checked~label #cancel {
            left: 40px;

        }

        div {
            display: block;
            unicode-bidi: isolate;
        }

        body {
            color: #581e00;
            background: #d57e2f;
        }

        .shoptitle {
            color: #9f2800;
            text-align: center;
            font-size: xx-large;
            padding: 40px;
        }

        .dptitlecon {
            margin-left: auto;
            margin-right: auto;
            font-size: 1.6rem;
            margin: 6px auto;
            line-height: 1.3;
            font-weight: 600;
            padding: 6px 6px 0;
        }

        .separatorline {
            height: 1px;
            margin-bottom: 15px;
            background: linear-gradient(to right, #eaac5b, #781e00, #eaac5b);
        }

        .main {
            padding-top: 15px;
            padding-bottom: 15px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-left: 300px;
            margin-right: 300px;
        }

        .block {
            color: #781e00;
            background: #efb86f;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
            width: 170px;
            border-radius: 5px;
            text-align: center;
            margin: 3px;
            line-height: 1.3;
        }

        .singleblock {
            cursor: pointer;
            transition: transform .2s ease-in-out;
        }

        a {
            text-decoration: none;
            color: #581e00;
        }

        .blockimg {
            margin: 0 auto;
            padding: 20px 30px;
            border-radius: 4px 4px 0 0;
        }

        .dpcontainer {
            height: 0;
            overflow: hidden;
            position: relative;
        }

        .dpratio {
            padding-bottom: 100%;
        }

        .dpcontainerimg {
            border-radius: 4px 4px 0 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .blocktitle {
            border-top: 1px solid rgba(0, 0, 0, .1);
            font-weight: 500;
            padding: 10px 6px;
            position: relative;
            font-size: 1.2rem;
        }


        .button-1,
        .button-2,
        .button-3,
        .button-4,
        .btncart {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 5px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            border-radius: 5px;
            height: 30px;
            width: 150px;
        }

        .btnbuy,
        .btnct {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
        }

        .info-1,
        .info-2,
        .info-3,
        .info-4 {

            background-color: #d57e2f;
            padding: 20px;
            border: 1px solid #9f2800;
            display: none;
            text-align: center;
        }

        .info {
            background-color: #d57e2f;
            padding: 20px;
            border: 1px solid #9f2800;
            display: none;
        }

        .button {
            background-color: #9f2800;
            color: #d57e2f;
            height: 50px;
            width: 50px;
            border: none;
            margin-top: 1px;
            font-size: xx-large;
        }

        #info-container {
            margin-top: 50px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px #9f2800;
            height: auto;
            width: 90%;
            margin-left: 5%;
            margin-bottom: 50px;
        }
        
 /* navbar */
 .class_navbar {
     height: 60px;
     width: 100%;
     background-color: #9f2800;
     display: flex;
     flex-wrap: wrap;
     height: 70px;
 }

 .class_clock {
     margin-left: 1000px;
     color: #d57e2f;
     margin-top: 5px;
     display: flex;
 }

 .class_clock a {
     font-size: 40px;
     margin-left: 35px;
     margin-top: 10px;
     color: #d57e2f;
 }

 .clock {
     font-size: 20px;
     margin-left: 35px;
 }

 /* slide bar */
 .sidebar {
     position: fixed;
     left: -250px;
     width: 250px;
     height: 100%;
     background: #d57e2f;
     transition: all .5s ease;
     box-shadow: 0 0 10px rgb(0, 0, 0, 0.3);

 }

 .sidebar header {
     font-size: 22px;
     color: #d57e2f;
     text-align: center;
     line-height: 70px;
     background: #9f2800;
     user-select: none;
 }

 .sidebar ul a {
     display: block;
     height: 100%;
     width: 100%;
     line-height: 50px;
     font-size: 20px;
     color: #9f2800;
     padding-left: 40px;
     box-sizing: border-box;
     border-top: 1px solid black;
     border-bottom: 1px solid black;
     transition: .4s;
     text-decoration: none;
 }

 .sidebar ul li:hover a {
     padding-left: 50px;
     color: #d57e2f;
     background: #9f2800;
 }

 .sidebar ul a i {
     margin-right: 16px;

 }

 #check {
     display: none;
 }

 label #btn,
 label #cancel {
     position: absolute;
     cursor: pointer;
     background: #d57e2f;
     border-radius: 3px;
 }

 label #btn {
     left: 20px;
     top: 15px;
     font-size: 30px;
     color: #9f2800;
     padding: 6px 12px;
     transition: all .5s;
 }

 label #cancel {
     z-index: 1111;
     left: -195px;
     top: 17px;
     font-size: 30px;
     color: #9f2800;
     padding: 4px 9px;
     transition: all .5s ease;
 }

 #check:checked~.sidebar {
     left: 0;
 }

 #check:checked~label #btn {
     left: 250px;
     opacity: 0;
     pointer-events: none;
 }


 #check:checked~label #cancel {
     left: 195px;

 }

 #check:checked~section {
     margin-left: 500px;
 }

 section {
     background-position: center;
     background-size: cover;
     transition: all 0.5s;
     height: 100%;
 }

.button-2 {
    background-color: #4CAF50;
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-bottom: 5px;
}

.button-2:hover {
    background-color: #45a049;
}

input[name="address"] {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
    z-index: 1000;
}

.popup-content {
    position: relative;
    background-color: #efb86f;
    margin: 7% auto;
    padding: 20px;
    width: 50%;
    max-width: 500px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.close {
    position: absolute;
    right: 10px;
    top: 5px;
    font-size: 24px;
    cursor: pointer;
    color: #9f2800;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #9f2800;
}

.form-group input, .form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-group textarea {
    height: 100px;
    resize: vertical;
}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>

    <!--navbar part-->
    <div class="class_navbar">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header><b>MENU</b></header>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i>home</a></li>
                <li><a href="numerology.php"><i class="fa-solid fa-1"></i>numerology</a></li>
                <li><a href="panchang.php"><i class="fa-solid fa-moon"></i>panchang</a></li>
                <li><a href="celendar.php"><i class="fa-regular fa-calendar-days"></i>celendar</a></li>
                <li><a href="festival.php"><i class="fa-solid fa-f"></i>festival</a></li>
                <li><a href="jyotish.php"><i class="fa-solid fa-hand"></i>jyotish</a></li>
                <li><a href="planets.php"><i class="fa-solid fa-earth-africa"></i>planets</a></li>
                <li><a href="lyrics.php"><i class="fa-solid fa-om"></i>lyrics</a></li>
                <li><a href="gallery.php"><i class="fa-solid fa-image"></i>gallery</a></li>
                <li><a href="shop.php"><i class="fa-solid fa-cart-shopping"></i>shop</a></li>
            </ul>
        </div>


        <div class="class_clock">
            <a href="home.php"><i class="fas fa-home"></i></a>
            <!-- <a href="setting.php"><i class="fa-solid fa-gear"></i></a> -->
            <a href="user.php"><i class="fa-solid fa-circle-user"></i></a>
            <!-- <a href="cart.php"><button class="button"><i class="fa-solid fa-cart-shopping"></i></button></a> -->
            <div class="clock"><?php include 'clock.php' ?></div>
        </div>
    </div>

    <div class="shoptitle">
        <p> shop </p>
    </div>
    <div class="main">
        <?php

        // $conn = mysqli_connect("localhost", "root", "", "pro_astro");
        // if (!$conn) {
        //     die("fail to connect");
        // }

        $query = mysqli_query($conn, "SELECT * FROM additem");
        if (mysqli_num_rows($query) > 0) {
            while ($data = mysqli_fetch_assoc($query)) {
                echo '
        

                <div class="block singleblock">
                    <div class="blockimg">
                         <div class="dpcontainer dpratio">
                             <img src="'.$data["img"].'" class="dpcontainerimg">
                        </div>
                    </div>

                     <div class="blocktitle">'.$data["name"].'<br>
                        price '.$data["price"].'
                        <button type="button" class="button-2" 
                            onclick="openBuyForm(this)" 
                            data-img="'.$data["img"].'" 
                            data-name="'.$data["name"].'" 
                            data-price="'.$data["price"].'">
                            Buy Now
                        </button>
                     </div>
                 </div>

        ';
            }
        }


        ?>

    </div>

    <!-- Add this HTML for the popup form -->
    <div id="buyFormPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeBuyForm()">&times;</span>
            <h2>Complete Your Purchase</h2>
            <form id="buyForm" method="post" onsubmit="return validateForm()">
                <input type="hidden" name="img" id="popup_img">
                <input type="hidden" name="name" id="popup_name">
                <input type="hidden" name="price" id="popup_price">
                
                <div class="form-group">
                    <label>Product:</label>
                    <div id="display_name" style="font-weight: bold; color: #9f2800;"></div>
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <div>₹<span id="display_price" style="font-weight: bold; color: #9f2800;"></span></div>
                </div>
                <div class="form-group">
                    <label>Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1" onchange="updateTotal()">
                </div>
                <div class="form-group">
                    <label>Total Amount:</label>
                    <div>₹<span id="total_price" style="font-weight: bold; color: #9f2800;"></span></div>
                </div>
                <div class="form-group">
                    <label>Delivery Address:</label>
                    <textarea name="address" required placeholder="Enter your delivery address"></textarea>
                </div>
                <label>Only Cash On Delivery</label>
                <button type="submit" name="buy_submit" class="button-2">Confirm Purchase</button>
            </form>
        </div>
    </div>

    <!--footer part-->
    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>

    <!-- Add this JavaScript -->
    <script>
    function openBuyForm(button) {
        // Get data from button attributes
        const img = button.getAttribute('data-img');
        const name = button.getAttribute('data-name');
        const price = button.getAttribute('data-price');

        // First check if user is logged in
        <?php if(!isset($_SESSION['uid'])) { ?>
            alert('Please login first!');
            window.location.href = 'log.php';
            return;
        <?php } ?>

        // Set the values in the popup
        document.getElementById('popup_img').value = img;
        document.getElementById('popup_name').value = name;
        document.getElementById('popup_price').value = price;
        
        // Display the values
        document.getElementById('display_name').textContent = name;
        document.getElementById('display_price').textContent = price;
        document.getElementById('total_price').textContent = price;
        
        // Reset quantity to 1
        document.getElementById('quantity').value = 1;
        
        // Show the popup
        document.getElementById('buyFormPopup').style.display = 'block';
        
        // Calculate initial total
        updateTotal();
    }

    function closeBuyForm() {
        document.getElementById('buyFormPopup').style.display = 'none';
        // Clear the form
        document.getElementById('buyForm').reset();
    }

    function updateTotal() {
        const price = parseFloat(document.getElementById('popup_price').value);
        let quantity = parseInt(document.getElementById('quantity').value) || 0;
        
        // Ensure quantity is at least 1
        if(quantity < 1) {
            quantity = 1;
            document.getElementById('quantity').value = 1;
        }
        
        const total = price * quantity;
        document.getElementById('total_price').textContent = total.toFixed(2);
    }

    function validateForm() {
        const address = document.querySelector('textarea[name="address"]').value;
        const quantity = parseInt(document.getElementById('quantity').value);
        
        if(address.trim() === '') {
            alert('Please enter delivery address');
            return false;
        }
        
        if(quantity < 1) {
            alert('Quantity must be at least 1');
            document.getElementById('quantity').value = 1;
            updateTotal();
            return false;
        }
        
        return confirm('Are you sure you want to confirm this purchase?');
    }

    // Close popup when clicking outside
    window.onclick = function(event) {
        const popup = document.getElementById('buyFormPopup');
        if (event.target === popup) {
            closeBuyForm();
        }
    }
    </script>
</body>

</html>