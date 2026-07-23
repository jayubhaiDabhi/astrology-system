<?php
include("logcon.php");
session_start();
$usernm = $_SESSION["username"];
$userpw = $_SESSION["password"];

// Move this section to the top of the file, before the form processing
$select = mysqli_prepare($conn, "SELECT * FROM register WHERE us = ? AND pass = ?");
mysqli_stmt_bind_param($select, "ss", $usernm, $userpw);
mysqli_stmt_execute($select);
mysqli_stmt_store_result($select);

// Bind the result variables
mysqli_stmt_bind_result($select, $uid, $us, $em, $num, $pass, $image);

if (mysqli_stmt_num_rows($select) > 0) {
    mysqli_stmt_fetch($select);
    // Store the values in $fetch array to maintain compatibility with rest of the code
    $fetch = array(
        'uid' => $uid,
        'us' => $us,
        'em' => $em,
        'num' => $num,
        'pass' => $pass,
        'image' => $image
    );
} 

if(isset($_POST['updateprofile'])){
    $updatename = $_POST['updatename'];
    $updateemail = $_POST['updateemail'];
    $updatenum = $_POST['updatenum']; // Added for phone number
    
    // Handle file upload for image
    if(isset($_FILES['updateimage']['name']) && !empty($_FILES['updateimage']['name'])){
        $img_name = $_FILES['updateimage']['name'];
        $tmp_name = $_FILES['updateimage']['tmp_name'];
        $img_upload_path = 'uploaded_img/'.$img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
    } else {
        // Keep existing image if no new upload
        $img_name = $fetch['image'];
    }

    // Update user profile information including phone number
    $sql = "UPDATE register SET us = ?, em = ?, num = ?, image = ? WHERE us = ? AND pass = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $updatename, $updateemail, $updatenum, $img_name, $usernm, $userpw);
    
    if(mysqli_stmt_execute($stmt)){
        $_SESSION["username"] = $updatename;
        $message[] = 'Profile information updated successfully!';
    } else {
        $message[] = 'Error updating profile information!';
    }

    // Handle password update
    $oldpw = $_POST['updatepassword']; // Password entered by user
    $newpw = $_POST['newpassword'];
    $confirmpw = $_POST['confirmpassword'];

    if(!empty($oldpw) || !empty($newpw) || !empty($confirmpw)){
        // First verify old password against database
        $check_password = mysqli_prepare($conn, "SELECT pass FROM register WHERE us = ? AND pass = ?");
        mysqli_stmt_bind_param($check_password, "ss", $usernm, $oldpw);
        mysqli_stmt_execute($check_password);
        mysqli_stmt_store_result($check_password);

        if(mysqli_stmt_num_rows($check_password) == 0){
            $message[] = 'Old password is incorrect!';
        }
        elseif(empty($newpw) || empty($confirmpw)){
            $message[] = 'Please enter both new password and confirm password!';
        }
        elseif($newpw != $confirmpw){
            $message[] = 'New password and confirm password do not match!';
        }
        else{
            // All validations passed, update the password
            $sql = "UPDATE register SET pass = ? WHERE us = ? AND pass = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sss", $confirmpw, $usernm, $oldpw);
            if(mysqli_stmt_execute($stmt)){
                $_SESSION["password"] = $confirmpw;
                $message[] = 'Password updated successfully!';
            } else {
                $message[] = 'Error updating password!';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
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
        justify-content: center;
        align-items: center;
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('log.jpg') no-repeat;
        background-size: cover;
        background-position: center;
        padding: 20px;
    }

    .update-profile {
        width: 100%;
        max-width: 500px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
        color: #fff;
        border-radius: 15px;
        padding: 35px;
    }

    .update-profile form {
        text-align: center;
    }

    .update-profile img {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 4px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .flex {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .inputbox {
        text-align: left;
    }

    .inputbox span {
        display: block;
        margin-bottom: 8px;
        font-size: 15px;
        color: #fff;
        letter-spacing: 0.5px;
    }

    .box {
        width: 100%;
        padding: 12px 15px;
        border: none;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .box:focus {
        background: rgba(255, 255, 255, 0.2);
        outline: none;
    }

    .box::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .message {
        background: rgba(255, 255, 255, 0.1);
        padding: 12px;
        border-radius: 8px;
        margin-bottom: 15px;
        font-size: 14px;
        border-left: 4px solid #2ecc71;
    }

    .current-image {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.7);
        margin-top: 5px;
    }

    .btn {
        width: 100%;
        padding: 12px 0;
        margin-top: 10px;
        border: none;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.9);
        color: #000;
        font-size: 15px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background: #fff;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .btn a {
        text-decoration: none;
        color: inherit;
        display: block;
        width: 100%;
        height: 100%;
    }

    /* Custom file input styling */
    input[type="file"] {
        padding: 8px;
    }

    /* Password fields group */
    .password-group {
        background: rgba(255, 255, 255, 0.05);
        padding: 20px;
        border-radius: 10px;
        margin-top: 15px;
    }

    /* Success message animation */
    @keyframes slideIn {
        from {
            transform: translateY(-10px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .message {
        animation: slideIn 0.3s ease-out;
    }

    /* Responsive design */
    @media (max-width: 480px) {
        .update-profile {
            padding: 20px;
        }

        .box {
            padding: 10px;
        }

        .update-profile img {
            height: 120px;
            width: 120px;
        }
    }
</style>

<body>
    <div class="update-profile">
        <form action="" method="post" enctype="multipart/form-data">
            <?php
            // Display profile image
            if (empty($fetch['image'])) {
                echo '<img class="avatarimg" src="images/default-avatar.png" alt="Default Profile">';
            } else {
                echo '<img class="avatarimg" src="uploaded_img/' . htmlspecialchars($fetch['image']) . '" alt="Profile Picture">';
            }

            // Display any messages
            if (isset($message)) {
                foreach ($message as $msg) {
                    echo '<div class="message">' . htmlspecialchars($msg) . '</div>';
                }
            }
            ?>
            <div class="flex">
                <!-- Personal Info Section -->
                <div class="inputbox">
                    <span>Username</span>
                    <input type="text" name="updatename" value="<?php echo htmlspecialchars($fetch['us']); ?>" class="box" required>
                    
                    <span>Email</span>
                    <input type="email" name="updateemail" value="<?php echo htmlspecialchars($fetch['em']); ?>" class="box" required>
                    
                    <span>Phone Number</span>
                    <input type="number" name="updatenum" value="<?php echo htmlspecialchars($fetch['num']); ?>" class="box" required>
                    
                    <span>Profile Image</span>
                    <input type="file" name="updateimage" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
                    <?php if(!empty($fetch['image'])): ?>
                        <span class="current-image">Current: <?php echo htmlspecialchars($fetch['image']); ?></span>
                    <?php endif; ?>
                </div>
                
                <!-- Password Section -->
                <div class="inputbox password-group">
                    <input type="hidden" name="oldpassword" value="<?php echo htmlspecialchars($fetch['pass']); ?>">
                    <span>Old Password</span>
                    <input type="password" name="updatepassword" placeholder="Enter previous password" class="box">
                    <span>New Password</span>
                    <input type="password" name="newpassword" placeholder="Enter new password" class="box">
                    <span>Confirm Password</span>
                    <input type="password" name="confirmpassword" placeholder="Confirm new password" class="box">
                </div>

                <div class="buttons">
                    <input type="submit" class="btn" value="Update Profile" name="updateprofile">
                    <button type="button" class="btn" style="margin-top: 10px;">
                        <a href="user.php">Go Back</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>