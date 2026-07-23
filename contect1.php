<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="contect1.css">
    <title>Document</title>
</head>

<body>

    <section class="wrapper contact">
        <div class="content">
            <h2>Contact Us</h2>

        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><img src="icon/map-map-marker-svgrepo-com.svg" alt="Icon" width="40" height="40"></div>
                    <div class="text">
                        <h3>Addrss</h3>
                        <p style="font-size: 1.1rem;">Paliyad Road,Near koli bording<br>Botad,364710</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="icon/phone-svgrepo-com.svg" alt="Icon" width="40" height="40"></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p style="font-size: 1.1rem;">992-949-1000</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="icon/email-mail-svgrepo-com.svg" alt="Icon" width="40" height="40"></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p style="font-size: 1.1rem;">Abc1234@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform wrapper">
            <form action="https://api.web3forms.com/submit" method="POST" >
                    <h2>Send MSG</h2>
                    <input type="hidden" name="access_key" value="6e40d59d-1e2e-4351-936d-adbfc6752046">
                    <div class="input-box">
                        <input type="text" name="name" required>
                        <span>Enter Your Name</span>
                    </div>
                    <div class="input-box">
                        <input type="mail" name="mail" required>
                        <span>Your Email</span>
                    </div>
                    <div class="input-box">
                        <textarea name="message" required></textarea>
                        <span>Your Message</span>
                    </div>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>