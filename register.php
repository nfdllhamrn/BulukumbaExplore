<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register - Bulukumba Explore</title>
    <link rel="stylesheet" href="css/Rating.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Register Form</h1>
            </div>
            <div class="card-body">
                <form action="register_process.php" method="post">
                    <input type="email" id="email" name="email" placeholder="Enter email" required><br><br>
                    <input type="password" id="password" name="password" placeholder="Enter password" required><br><br>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <p><a href="renameaccount.php" class="delren">Change Account? Here!</a></p>
                    <p><a href="deleteaccount.php" class="delren">Delete Account? Here!</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
