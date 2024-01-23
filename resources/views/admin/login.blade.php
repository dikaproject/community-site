<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Admin</h2>
        @if($errors->any())
            <div class="error">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        @if(Session::has('error'))
            <div class="error">{{ Session::get('error') }}</div>
        @endif
        @if(Session::has('success'))
            <div class="success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin_login_submit') }}" method="post">
            @csrf
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <br>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('admin_forget_password') }}">Forget Password</a>
    </div>
</body>
</html>
