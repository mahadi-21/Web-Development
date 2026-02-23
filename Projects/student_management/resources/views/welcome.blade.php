<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 50px;
            border-radius: 16px;
            text-align: center;
            max-width: 550px;
            width: 90%;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .btn-primary {
            background: #22c55e;
            color: #fff;
        }

        .btn-primary:hover {
            background: #16a34a;
        }

        .btn-outline {
            border: 2px solid #fff;
            color: #fff;
        }

        .btn-outline:hover {
            background: #fff;
            color: #1e293b;
        }

        footer {
            margin-top: 30px;
            font-size: 0.9rem;
            opacity: 0.85;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Student Management System</h1>
    <p>
        Manage students, courses, attendance, results, and academic records
        easily with our smart and secure platform.
    </p>

    <div class="buttons">
        <a href="/login" class="btn btn-primary">Login</a>
        <a href="/register" class="btn btn-outline">Register</a>
    </div>

    <footer>
        © 2026 Student Management System. All rights reserved.
    </footer>
</div>

</body>
</html>
