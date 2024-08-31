<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 600px;
            max-width: 90%;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group .inline-group {
            display: flex;
            justify-content: space-between;
        }

        .form-group .inline-group input[type="text"],
        .form-group .inline-group input[type="email"] {
            width: 50%;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group .checkbox-container {
            display: flex;
            flex-wrap: wrap;
        }

        .form-group .checkbox-container div {
            width: 50%;
            margin-bottom: 10px;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #acddf0;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #eab2b2;
        }

        .error {
            color: red;
            margin-bottom: 10px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Payment Receipt Upload Form</h2>
        <form id="paymentForm" onsubmit="return validateForm()" method="post" action="bai2a.php">
            <div class="form-group">
                <label for="firstName">Name</label>
                <div class="inline-group">
                    <input type="text" id="firstName" name="firstName" placeholder="First Name">
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="inline-group">
                    <input type="email" id="email" name="email" placeholder="example@example.com">
                    <input type="text" id="invoiceId" name="invoiceId" placeholder="Enter Invoice ID">
                </div>
            </div>
            <div class="form-group">
                <label>Pay For</label>
                <div class="checkbox-container">
                    <div><input type="checkbox" name="payFor[]" id="payFor1" value="15K Category"> 15K Category</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor2" value="35K Category"> 35K Category</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor3" value="55K Category"> 55K Category</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor4" value="75K Category"> 75K Category</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor5" value="116K Category"> 116K Category</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor6" value="Shuttle One Way"> Shuttle One Way</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor7" value="Shuttle Two Ways"> Shuttle Two Ways</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor8" value="Training Cap Merchandise"> Training Cap Merchandise</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor9" value="Compressport T-Shirt Merchandise"> Compressport T-Shirt Merchandise</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor10" value="Buf Merchandise"> Buf Merchandise</div>
                    <div><input type="checkbox" name="payFor[]" id="payFor11" value="Other"> Other</div>
                </div>
            </div>
            <div class="error" id="error-message"></div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <script>
    function validateForm() {
        var firstName = document.getElementById('firstName').value.trim();
        var lastName = document.getElementById('lastName').value.trim();
        var email = document.getElementById('email').value.trim();
        var invoiceId = document.getElementById('invoiceId').value.trim();
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var isChecked = false;

        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                isChecked = true;
            }
        });

        if (firstName === '') {
            alert("Tên không được để trống");
            return false; 
        }

        if (lastName === '') {
            alert("Họ không được để trống");
            return false; 
        }

        if (email === '') {
            alert("Email không được để trống");
            return false; 
        }

        if (invoiceId === '') {
            alert("Mã hóa đơn không được để trống");
            return false; 
        }

        if (!validateEmail(email)) {
            alert("Định dạng email không hợp lệ");
            return false; 
        }

        if (!isChecked) {
            alert("Ít nhất một tùy chọn 'Pay For' phải được chọn");
            return false; 
        }
    }

</script>

</body>
</html>
