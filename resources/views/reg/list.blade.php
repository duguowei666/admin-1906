<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('/admin/do_reg')}}" method="post">
    @csrf
    公司名: <input type="text" name="name"><br>
    法人 : <input type="text" name="person"><br>
    地址: <input type="text" name="address"><br>
    营业执照: <input type="file" name="log"><br>
    电话: <input type="text" name="tel"><br>
    email: <input type="text" name="email"><br>
            <button>注册</button>
</form>
</body>
</html>