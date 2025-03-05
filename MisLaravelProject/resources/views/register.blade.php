<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            @csrf
            <input type="text" name="email" placeholder="email" required/>
            <input type="password" name="password" placeholder="password" required/>
            <select>
                @foreach ($Roles as $role)
                    <option value="{{ Auth::class->$role }}">{{ Auth::class->$role }}</option>
                @endforeach
            </select>
            <button>Rgister</button>
        </form>
    </div>
</body>
</html>