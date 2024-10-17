<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Complete</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f06a58;
            color: #333;
        }
        .message-box {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .message-box h1 {
            color: #f30c18;
            margin-bottom: 20px;
        }
        .message-box p {
            font-size: 16px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Task Complete</h1>
        <p>Has the given task been successfully completed?</p>
        <a href="{{route('check_login',$data->token)}}">Login</a>
    </div>
</body>
</html>
