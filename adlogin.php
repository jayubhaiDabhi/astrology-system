<?php
session_start();
include("config.php");

if(isset($_SESSION['admin_username'])) {
    header('Location: dashboard.php');
    exit();
}

if (isset($_POST["bt"])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $queryy = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $quer = mysqli_query($conn, $queryy);
    if (mysqli_num_rows($quer) == 1) {
        $_SESSION['admin_username'] = $user;
        header('Location: dashboard.php');
        exit();
    } else {
        echo "<script>alert('Incorrect Password or Username');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
            padding: 20px;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h1 {
            color: #9f2800;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .login-header p {
            color: #666;
            font-size: 14px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            color: #333;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #eee;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            border-color: #9f2800;
            outline: none;
            box-shadow: 0 0 0 3px rgba(159, 40, 0, 0.1);
        }

        .password-group {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 14px;
        }

        .login-button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(159, 40, 0, 0.3);
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #666;
        }

        .login-footer a {
            color: #9f2800;
            text-decoration: none;
            font-weight: 500;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-container {
            animation: fadeIn 0.5s ease;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Admin Login</h1>
            <p>Enter your credentials to access the admin panel</p>
        </div>
        
        <form method="post">
            <div class="input-group">
                <label for="user">Username</label>
                <input type="text" id="user" name="user" required 
                       placeholder="Enter your username">
            </div>
            
            <div class="input-group">
                <label for="pass">Password</label>
                <div class="password-group">
                    <input type="password" id="pass" name="pass" required 
                           placeholder="Enter your password">
                    <span class="password-toggle" onclick="togglePassword()">👁️</span>
                </div>
            </div>
            
            <button type="submit" name="bt" class="login-button">
                Login to Dashboard
            </button>
        </form>
        
        <div class="login-footer">
            <p>Having trouble logging in? Contact <a href="mailto:support@example.com">support</a></p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('pass');
            const toggleBtn = document.querySelector('.password-toggle');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleBtn.textContent = '🔒';
            } else {
                passwordInput.type = 'password';
                toggleBtn.textContent = '👁️';
            }
        }
    </script>
</body>
</html>
