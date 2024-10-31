<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
        }
    </style>
</head>
<body class="bg-light text-dark">
    <div class="form-container">
        <h2 class="text-center">Send Email</h2>
        <form action="send_email.php" method="post" class="p-4 border rounded bg-white shadow">
            <div class="mb-3">
                <label for="username" class="form-label">Full Name</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Send To... Email ID" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Email</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
