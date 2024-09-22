<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo View</title>
</head>
<body style="text-align: center">

    <h1>Hi, I am a demo view</h1>
    <p>My name is {{ $name }}</p>
    <p>My age is {{ $age }}</p>

    <div style="width: 100%; text-align:center">
        <form action="/" method="POST">
            @csrf
            {{-- csrf la gi nhi??????? --}}
            <input type="text" name="num1"> +
            <input type="text" name="num2">
            <input type="submit" value="submit  ">
            <input type="text" disabled value="{{ isset($sum) ? $sum : 0 }}">
        </form>
    </div>
</body>
</html>
