<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <form id="form" method="post">
        用户名 <input type="text" name="user">
        密码 <input type="password" name="password">
        状态 <input type="text" name="state">
        <input type="button" id="button" value="提交">
    </form>
    <script src='https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js'></script>
    <script>
    $('#button').click(function(){
        $data=$('#form').serialize();$.post('/api/Admin',$data);
        });
    </script>
</body>
</html>