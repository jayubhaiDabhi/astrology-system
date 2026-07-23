<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Form</title>

    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Body with image background */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            background: url('images/numerology-bg.png') no-repeat center center/cover;
        }

        /* Dark overlay for readability */
        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        /* Form container */
        #numerology_form {
            background: #9f2800;
            padding: 30px 25px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
            text-align: center;
        }

        /* Title */
        #numerology_form h2 {
            margin-bottom: 20px;
            color: #f5d2b3;
        }

        /* Inputs */
        #numerology_form input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #e6c2a6;
            border-radius: 8px;
            font-size: 14px;
            background-color: #fff7f0;
            color: #5a1a00;
            outline: none;
            transition: 0.3s;
        }

        #numerology_form input::placeholder {
            color: #a06a4a;
        }

        #numerology_form input:focus {
            border-color: #ffd2a6;
            box-shadow: 0 0 10px rgba(255, 210, 166, 0.5);
        }

        /* Date fields */
        .date {
            display: flex;
            gap: 10px;
        }

        .date input {
            width: 33%;
        }

        /* Button */
        #submitbtn {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #ae644b, #9c3513);
            color: #fff5eb;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        #submitbtn:hover {
            background: linear-gradient(135deg, #d69151, #d57e2f);
            color: #5a1a00;
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 400px) {
            #numerology_form {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    
    <form id="numerology_form" method="post" action="numerology.php" onsubmit="return validateForm()">
        <h2>🔮 Numerology Calculator</h2>

        <input type="text" name="nm" id="nm" placeholder="Enter Your Name" required>

        <div class="date">
            <input id="day" type="number" name="birthday" placeholder="Date" required>
            <input id="month" type="number" name="birthmonth" placeholder="Month" required>
            <input id="year" type="number" name="birthyear" placeholder="Year" required>
        </div>

        <button id="submitbtn" type="submit" name="submit">Submit</button>
    </form>

    <script>
        function validateForm() {

            const name = document.getElementById("nm").value.trim();
            const day = document.getElementById("day").value;
            const month = document.getElementById("month").value;
            const year = document.getElementById("year").value;

            if (name === "" || day === "" || month === "" || year === "") {
                alert("All fields are required!");
                return false;
            }

            if (!/^[a-zA-Z\s]+$/.test(name)) {
                alert("Name must contain only letters");
                return false;
            }

            if (day < 1 || day > 31) {
                alert("Invalid day");
                return false;
            }

            if (month < 1 || month > 12) {
                alert("Invalid month");
                return false;
            }

            const currentYear = new Date().getFullYear();
            if (year < 1900 || year > currentYear) {
                alert("Invalid year");
                return false;
            }

            return true;
        }
    </script>

</body>

</html>