<?php
$servername="localhost";
$username="root";
$password="";
$db_name="pro_astro";
$conn=new mysqli($servername,$username,$password,$db_name);
/*
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
echo"connection success";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        min-height: 100vh;
    }

    /* Admin Header Styles */
    .admin-header {
        background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
        padding: 15px 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        display: flex;
    }

    .admin-info h2 {
        color: #fff;
        font-size: 24px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    .logout-btn {
        background-color: rgba(220, 53, 69, 0.9);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .logout-btn:hover {
        background-color: #dc3545;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    /* Sidebar Styles */
    .top-buttons {
        position: fixed;
        background: linear-gradient(180deg, #9f2800 0%, #8a2300 100%);
        width: 250px;
        height: 100vh;
        /* padding-top: 80px; */
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        z-index: 900;
    }

    .admin-dashboard h2 {
        color: #fff;
        padding: 20px;
        text-align: center;
        font-size: 24px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        margin-bottom: 20px;
    }

    .button-1, .button-2, .button-3, .button-4 {
        background: transparent;
        color: #fff;
        padding: 15px 25px;
        border: none;
        cursor: pointer;
        width: 100%;
        text-align: left;
        font-size: 16px;
        transition: all 0.3s ease;
        border-left: 4px solid transparent;
    }

    .button-1:hover, .button-2:hover, .button-3:hover, .button-4:hover {
        background: rgba(255,255,255,0.1);
        border-left: 4px solid #d57e2f;
        transform: none;
    }

    /* Content Area Styles */
    .info-1, .info-2, .info-3, .info-4 {
        margin-left: 250px;
        margin-top: 80px;
        padding: 30px;
        min-height: calc(100vh - 80px);
        background-color: #f8f9fa;
        border: none;
        position: relative;
    }

    /* Dashboard Blocks */
    .flex {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        padding: 20px;
    }

    .sectionblock {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        height: 200px;
        border: none;
        overflow: hidden;
    }

    .sectionblock:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .headblock {
        background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
        color: white;
        padding: 15px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 15px 15px 0 0;
    }

    .sectionblock a {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: calc(100% - 60px);
        text-decoration: none;
        color: #9f2800;
        font-size: 24px;
        transition: all 0.3s ease;
    }

    .sectionblock a:hover {
        color: #d57e2f;
    }

    /* Table Styles */
    .cart-container {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        padding: 40px;
        margin: 30px;
    }

    .cart-container h2 {
        color: #9f2800;
        font-size: 32px;
        margin-bottom: 30px;
        position: relative;
        padding-bottom: 15px;
    }

    .cart-container h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
        border-radius: 2px;
    }

    /* Table Styles */
    .shop-table {
        width: 100%;
        border-spacing: 0 10px;
        border-collapse: separate;
        margin: 20px 0;
    }

    .shop-table th {
        background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
        color: white;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 14px;
        padding: 20px 15px;
        letter-spacing: 1px;
    }

    .shop-table th:first-child {
        border-radius: 10px 0 0 10px;
    }

    .shop-table th:last-child {
        border-radius: 0 10px 10px 0;
    }

    .shop-table tr {
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .shop-table tr:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .shop-table td {
        background: white;
        padding: 20px 15px;
        vertical-align: middle;
        border: none;
    }

    .shop-table td:first-child {
        border-radius: 10px 0 0 10px;
    }

    .shop-table td:last-child {
        border-radius: 0 10px 10px 0;
    }

    /* Image Styles */
    .imgsize {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .imgsize:hover {
        transform: scale(1.1);
    }

    /* Price and Total Columns */
    .price-column, .total-column {
        font-weight: 600;
        color: #9f2800;
    }

    /* Action Button */
    .delete-btn {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
        display: inline-block;
        border: none;
        cursor: pointer;
    }

    .delete-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
    }

    /* Cart Actions Section */
    .cart-actions {
        background: linear-gradient(to right, #f8f9fa, white);
        border-radius: 15px;
        padding: 25px;
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .grand-total {
        font-size: 24px;
        font-weight: 700;
        color: #9f2800;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .grand-total::before {
        content: '💰';
        font-size: 28px;
    }

    /* Empty Cart Message */
    .empty-cart-message {
        text-align: center;
        padding: 40px;
        font-size: 20px;
        color: #666;
        background: #f8f9fa;
        border-radius: 10px;
        margin: 20px 0;
    }

    /* User Account Table Specific Styles */
    .user-id {
        font-weight: 600;
        color: #9f2800;
    }

    .username {
        font-weight: 500;
        color: #333;
    }

    .email {
        color: #666;
        font-style: italic;
    }

    .mobile {
        font-family: monospace;
        letter-spacing: 1px;
    }

    .password {
        font-family: monospace;
        letter-spacing: 2px;
        color: #666;
    }

    /* Enhance table styles for user accounts */
    .shop-table tr:nth-child(even) {
        background-color: rgba(159, 40, 0, 0.02);
    }

    .shop-table tr:hover td {
        background-color: rgba(213, 126, 47, 0.05);
    }

    /* Style modifications for user count */
    .info-4 .grand-total::before {
        content: '��';
    }

    .info-4 .cart-container h2::after {
        background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
    }

    /* Delete button variations */
    .info-4 .delete-btn {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        opacity: 0.9;
    }

    .info-4 .delete-btn:hover {
        opacity: 1;
        transform: translateY(-2px);
    }

    /* Empty state styling */
    .info-4 .empty-cart-message {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        background: linear-gradient(to right, #f8f9fa, white);
    }

    .info-4 .empty-cart-message p {
        font-size: 24px;
        color: #666;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        width: 400px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from {
            transform: translate(-50%, -60%);
            opacity: 0;
        }
        to {
            transform: translate(-50%, -50%);
            opacity: 1;
        }
    }

    .modal-header {
        padding: 20px;
        background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
        color: white;
        border-radius: 15px 15px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-header h3 {
        margin: 0;
        font-size: 20px;
    }

    .close-modal {
        color: white;
        font-size: 28px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .close-modal:hover {
        transform: scale(1.1);
    }

    .modal-body {
        padding: 20px;
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 500;
    }

    .input-group input {
        width: 100%;
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .input-group input:focus {
        border-color: #9f2800;
        outline: none;
        box-shadow: 0 0 0 3px rgba(159, 40, 0, 0.1);
    }

    .modal-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 30px;
    }

    .cancel-btn, .save-btn {
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .cancel-btn {
        background: #f8f9fa;
        color: #333;
    }

    .save-btn {
        background: linear-gradient(135deg, #9f2800 0%, #d57e2f 100%);
        color: white;
    }

    .cancel-btn:hover, .save-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    /* Add this to your existing admin-actions styles */
    .change-password-btn {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
        margin-right: 10px;
        margin-left: 800px;
    }

    .change-password-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
</style>

<body>
    
<div class="cart-container">
            <h2>User Account Management</h2>
            <table class="shop-table">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM register");
                if (mysqli_num_rows($query) > 0) {
                    echo "<tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>";
                    while ($data = mysqli_fetch_assoc($query)) {
                        echo "<tr>
                            <td class='user-id'>" . number_format($data['uid']) . "</td>
                            <td class='username'>" . htmlspecialchars($data['us']) . "</td>
                            <td class='email'>" . htmlspecialchars($data['em']) . "</td>
                            <td class='mobile'>" . number_format($data['num']) . "</td>
                            <td class='password'>•••••••••</td>
                            <td><a href='dashboard.php?remove_user={$data['uid']}' class='delete-btn' 
                                onclick='return confirm(\"Are you sure you want to remove this user?\");'>
                                Remove</a></td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'><div class='empty-cart-message'>
                            <p>👤 No Users Registered</p>
                        </div></td></tr>";
                }
                ?>
            </table>
            <?php if (mysqli_num_rows($query) > 0) { ?>
                <div class="cart-actions">
                    <div class="grand-total">Total Users: <?php echo mysqli_num_rows($query); ?></div>
                    <form method="POST" onsubmit="return confirm('Are you sure you want to delete all users? This action cannot be undone!');">
                        <button type="submit" class="delete-btn" name="delete_all_users">Delete All Users</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>
