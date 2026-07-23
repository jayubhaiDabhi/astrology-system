<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<style>
    
    /* ================= RESET ================= */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #d57e2f;
    font-family: 'Segoe UI', sans-serif;
}

/* ================= NAVBAR ================= */
.class_navbar {
    height: 70px;
    width: 100%;
    background-color: #9f2800;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}

/* Clock section */
.class_clock {
    display: flex;
    align-items: center;
    gap: 20px;
    color: #d57e2f;
}

.class_clock a {
    font-size: 28px;
    color: #d57e2f;
    text-decoration: none;
    transition: 0.3s;
}

.class_clock a:hover {
    transform: scale(1.1);
}

.clock {
    font-size: 18px;
}

/* ================= SIDEBAR ================= */
.sidebar {
    position: fixed;
    top: 0;
    left: -250px;
    width: 250px;
    height: 100vh;
    background: #d57e2f;
    transition: 0.4s ease;
    box-shadow: 3px 0 15px rgba(0,0,0,0.3);
    z-index: 1000;

    display: flex;
    flex-direction: column;
}

/* Sidebar header */
.sidebar header {
    font-size: 24px;
    color: #d57e2f;
    text-align: center;
    line-height: 70px;
    background: #9f2800;
}

/* Scrollable menu */
.sidebar ul {
    flex: 1;
    overflow-y: auto;
    list-style: none;
}

/* Scrollbar */
.sidebar ul::-webkit-scrollbar {
    width: 6px;
}

.sidebar ul::-webkit-scrollbar-thumb {
    background: #9f2800;
    border-radius: 10px;
}

/* Sidebar links */
.sidebar ul li {
    list-style: none;
}

.sidebar ul a {
    display: block;
    line-height: 50px;
    font-size: 18px;
    color: #9f2800;
    padding-left: 30px;
    border-top: 1px solid rgba(0,0,0,0.2);
    border-bottom: 1px solid rgba(0,0,0,0.2);
    text-decoration: none;
    transition: 0.3s;
}

.sidebar ul li:hover a {
    padding-left: 40px;
    color: #d57e2f;
    background: #9f2800;
}

.sidebar ul a i {
    margin-right: 10px;
}

/* Toggle */
#check {
    display: none;
}

label #btn,
label #cancel {
    position: absolute;
    cursor: pointer;
    background: #d57e2f;
    border-radius: 5px;
    transition: 0.3s;
}

label #btn {
    left: 20px;
    top: 15px;
    font-size: 28px;
    color: #9f2800;
    padding: 6px 10px;
}

label #cancel {
    z-index: 1100;
    left: -50px;
    top: 15px;
    font-size: 28px;
    color: #9f2800;
    padding: 6px 10px;
}

#check:checked ~ .sidebar {
    left: 0;
}

#check:checked ~ label #btn {
    left: 260px;
    opacity: 0;
    pointer-events: none;
}

#check:checked ~ label #cancel {
    left: 200px;
}

/* ================= MAIN CONTAINER ================= */
.numerology_container {
    width: 90%;
    margin: 30px auto;
    background-color: antiquewhite;
    color: #9f2800;
    font-size: 28px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    padding: 20px;
}

.numerologyheader {
    background-color: #9f2800;
    color: #d57e2f;
    height: 100px;
    font-size: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
}

/* ================= SUB CONTAINER ================= */
.subcontainer {
    height: 500px;
    overflow-y: auto;
    padding: 15px;
}

/* ================= FORM ================= */
#nm,
#day,
#month,
#year {
    width: 100%;
    height: 40px;
    margin-top: 10px;
    padding: 8px;
    font-size: 16px;
    color: #9f2800;
    border: 2px solid #9f2800;
    border-radius: 6px;
    outline: none;
    transition: 0.3s;
}

#nm:focus,
#day:focus,
#month:focus,
#year:focus {
    box-shadow: 0 0 8px rgba(159, 40, 0, 0.4);
}

#submitbtn {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    font-size: 18px;
    background-color: transparent;
    color: #9f2800;
    border: 2px solid #9f2800;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
}

#submitbtn:hover {
    background-color: #9f2800;
    color: #d57e2f;
}

/* ================= TOP BUTTONS ================= */
.top-buttons {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    background-color: #9f2800;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 15px;
}

.button-1,
.button-2,
.button-3,
.button-4,
.button-5 {
    background-color: #9f2800;
    color: #d57e2f;
    padding: 10px 15px;
    border: 1px solid #d57e2f;
    cursor: pointer;
    font-size: 18px;
    border-radius: 6px;
    transition: 0.3s;
}

.button-1:hover,
.button-2:hover,
.button-3:hover,
.button-4:hover,
.button-5:hover {
    background-color: #d57e2f;
    color: #9f2800;
}

/* ================= INFO ================= */
.info-1,
.info-2,
.info-3,
.info-4,
.info-5 {
    display: none;
    padding: 15px;
    margin-top: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

/* ================= LOSHU GRID ================= */
.loshugrid {
    width: 350px;
    height: 350px;
    margin: 20px auto;
    display: flex;
    flex-wrap: wrap;
    border: 2px solid #000;
}

.loshugrid div {
    width: calc(100% / 3);
    height: calc(100% / 3);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid black;
    font-weight: bold;
}

/* ================= TABLE ================= */
.pinnacle_table {
    margin: 20px auto;
    border-collapse: collapse;
    width: 90%;
    text-align: center;
}

.pinnacle_table td,
.pinnacle_table th {
    border: 1px solid #333;
    padding: 10px;
}

.pinnacle_table tr:first-child {
    background-color: #d57e2f;
    font-weight: bold;
}

/* ================= FOOTER ================= */
.footer {
    background-color: #9f2800;
    height: 80px;
    margin-top: 50px;
    border-radius: 8px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .numerology_container {
        width: 95%;
        font-size: 20px;
    }

    .loshugrid {
        width: 280px;
        height: 280px;
    }

    .class_clock a {
        font-size: 22px;
    }

    .clock {
        font-size: 14px;
    }
}

</style>
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
                <li><a href="numerology_user_detail.php"><i class="fa-solid fa-1"></i>numerology</a></li>
                <li><a href="vastu.php"><i class="fa-solid fa-compass"></i>vastushastra</a></li>
                <li><a href="panchang.php"><i class="fa-solid fa-moon"></i>panchang</a></li>
                <li><a href="celendar.php"><i class="fa-regular fa-calendar-days"></i>celendar</a></li>
                <li><a href="festival.php"><i class="fa-solid fa-f"></i>festival</a></li>
                <li><a href="learn_astro.php"><i class="fa-solid fa-hand"></i>jyotish</a></li>
                <li><a href="planets\planets.php"><i class="fa-solid fa-earth-africa"></i>planets</a></li>
                <li><a href="lyrics\lyric.php"><i class="fa-solid fa-om"></i>lyrics</a></li>
                <li><a href="gallery.php"><i class="fa-solid fa-image"></i>gallery</a></li>
                <li><a href="shop.php"><i class="fa-solid fa-cart-shopping"></i>shop</a></li>
                <li><a href="contect1.php"><i class="fa-solid fa-envelope"></i>contact us</a></li>
                <img src="images\proicon.png" style="height: 50px; width: 50px; background-color : #9f2800; border-radius : 50%; margin-left:37%; margin-top : 5%;">
            </ul>
        </div>


        <div class="class_clock">
            <a href="home.php"><i class="fas fa-home"></i></a>
            <!-- <a href="setting.php"><i class="fa-solid fa-gear"></i></a> -->
            <a href="user.php"><i class="fa-solid fa-circle-user"></i></a>
            <div class="clock"><?php include 'clock.php' ?></div>
        </div>
    </div>
</body>
</html>