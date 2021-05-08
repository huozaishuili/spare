<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <form id="form" method="post">
        姓名 <input type="text" name="name">
        职位 <input type="text" name="position">
        电话 <input type="text" name="phone">
        公司 <input type="text" name="company">
        邮箱 <input type="text" name="email">
        <input type="button" id="button" value="提交">
    </form>
    <script src='https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js'></script>
    <script>
    $('#button').click(function(){
        $data=$('#form').serialize();$.post('/api/user',$data);
        });
    </script>
</body>
</html>