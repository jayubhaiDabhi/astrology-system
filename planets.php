<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="learn_astro.css" rel="stylesheet">
    <title>Document</title>
    <h1 class="pagetitle">
        <span class="highlight">Planets </span>
    </h1>
</head>
<style>
    
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

</style>
<body>

    <div class="video" style="height:350px;">

        <iframe class="dpvideo" id="dpYoutubVideoI" src="https://www.youtube.com/embed/AOri7jyNpoY?si=7_9bPaNF-ppMErQ2"></iframe>

        <div class="videoclose"></div>
    </div>

    <div class="main">

        <h2 class="dptitle">About Planetes</h2>
        <p class="dpcontent">Hello everyone, welcome to AstroSage 2 minutes astrology tutorial. In this course,we will focus on predictions and not calculations. For calculations and making free birth chart, you can go to AstroSage Cloud at Astro. Astro Cloud is a very comprehensive astrology software and you can get all kind of astrological calculations there.</p>
        <p class="dpcontent">Coming back to astrology, whole astrology is based on nine planets, 12 signs, 27 nakshatra or constellation, and 12 houses.The basis of all predictions is the relation of all these factors with each other. Let's start with understanding planets.</p>
        <p class="dpcontent">There are 9 planets. Here, Il am telling the names of planets in Sanskrit as well apart from English. Even if we are learning astrology in English, knowing Hindi and Sanskrit names will prove helpful going forward so try to memorize the names in Sanskrit as well.</p>
        <ol>
            <li>
                <p class="dpcontent">First planet is Sun. Sun is known as Surya or Ravi in Sanskrit.</p>
            </li>
            <li>
                <p class="dpcontent">Second is Moon, known as Chandra in Sanskrit.</p>
            </li>
            <li>
                <p class="dpcontent">Third is Mars, known as Mangal or Bhaum in Sanskrit. In South India it is also known as Kuja.</p>
            </li>
            <li>
                <p class="dpcontent">Fourth is Mercury, Budh in Sanskrit.</p>
            </li>
            <li>
                <p class="dpcontent">Fifth one is Jupiter, Guru or Brihaspati in Sanskrit.</p>
            </li>
            <li>
                <p class="dpcontent">Sixth is Venus i.e. Shukra in Sanskrit.</p>
            </li>
            <li>
                <p class="dpcontent">Seventh being Saturn, Shani in Sanskrit.</p>
            </li>
            <li>
                <p class="dpcontent">Eighth is North Node. Rahu in Sanskrit.</p>
            </li>
            <li>
                <p class="dpcontent">And, last being South Node or Ketu in Sanskrit</p>
            </li>
            </li>
        </ol>
        <p class="dpcontent">in Sanskrit, correct word is 'Graha' which is roughly translated to planet in English.Graha means 'that influences'. You can see that this definition is not based on revolution around Sun which is taught in schools and hence should not be confused. Astrological meaning of 'Planet' is different from the Astronomical meaning. According to modern Astrononmy, Sun is considered as Star and hot a planet. Moon is a satellite and Rahu and Ketu are mathematical nodes. As per Vedic Astrology, Sun, Moon, Rahu and Ketu are grahas i.e. planet because they have nfluence on us.</p>
        <p class="dpcontent"></p>
    </div>

</body>

</html>