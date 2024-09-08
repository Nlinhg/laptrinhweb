<?php
//bắt đầu phiên làm việc
session_start();

$cookie_Fname = "firstName";
$cookie_Lname = "LastName";
$cookie_email = "Email";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cookie_Fname_value = htmlspecialchars($_POST["firstname"]);
    $cookie_Lname_value = htmlspecialchars($_POST["lastname"]);
    $cookie_email_value = htmlspecialchars($_POST["email"]);

    setcookie($cookie_Fname, $cookie_Fname_value, time() + (86400 * 30), "/"); 
    setcookie($cookie_Lname, $cookie_Lname_value, time() + (86400 * 30), "/");
    setcookie($cookie_email, $cookie_email_value, time() + (86400 * 30), "/");

    $_SESSION["firstname"] = $cookie_Fname_value;
    $_SESSION["lastname"] = $cookie_Lname_value;
    $_SESSION["email"] = $cookie_email_value;
    $_SESSION["additional_info"] = htmlspecialchars($_POST["ad_inf"]);

    if (isset($_FILES["fileUpload"]) && $_FILES["fileUpload"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                $_SESSION["uploaded_image"] = $target_file; 
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            background-color: #e0e7ed;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
            font-size: 16px;
        }
        .highlight {
            font-weight: bold;
            color: #333;
        }
        .uploaded-image {
            margin-top: 20px;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    echo "<h2>THÔNG TIN NGƯỜI DÙNG LẤY TỪ SESSION</h2>";
    echo "<h4>Khi nhấn F5 hoặc biểu tượng restart nội dung sẽ không thay đổi</h4>";

    if (isset($_SESSION["firstname"])) {
        echo "<p>First Name is: <strong>" . $_SESSION["firstname"] . "</strong></p>";
    }
    if (isset($_SESSION["lastname"])) {
        echo "<p>Last Name is: <strong>" . $_SESSION["lastname"] . "</strong></p>";
    }
    if (isset($_SESSION["email"])) {
        echo "<p>Email is: <strong>" . $_SESSION["email"] . "</strong></p>";
    }
    if (isset($_SESSION["additional_info"])) {
        echo "<p>Additional Information: <strong>" . $_SESSION["additional_info"] . "</strong></p>";
    }

    if (isset($_SESSION["uploaded_image"])) {
        echo "<h4>Uploaded Image:</h4>";
        echo "<img src='" . $_SESSION["uploaded_image"] . "' alt='Uploaded Receipt' class='uploaded-image'>";
    }
    ?>
</div>
</body>
</html>
