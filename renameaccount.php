<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BULUKUMBA EXPLORE</title>
    <link rel="stylesheet" href="css/Rating.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="icon.svg" type="image/x-icon">
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: white;
            margin-top: 10px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px; /* Adjust as needed */
        }

        .card {
            background-color: #ccc;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        .card-header {
            background-color: #0056b3;
            border-bottom: none;
        }

        form {
            text-align: center;
            padding: 20px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #f9f9f9;
            color: #333;
        }

        button {
            background-color: #0056b3;
            color: #f9f9f9;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ddd;
        }

        p {
            color: #FF0000;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>

</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Change Account</h1>
                </div>
            <div class="card-body">
                <form method="post" action="update_process.php">
                    <div class="mb-3">
                        <input type="email" id="last_email" name="last_email" class="form-control" placeholder="Type your last email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" id="last_password" name="last_password" class="form-control" placeholder="Type your last password" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" id="new_email" name="new_email" class="form-control" placeholder="Type your new email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" id="new_password" name="new_password" class="form-control" placeholder="Type your new password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
        <?php if(isset($message) && !empty($message)) { ?>
            <p><?php echo $message; ?></p>
        <?php } ?>
    </div>  
</body>
</html>
