<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页模板</title>
</head>
<body>
   <h1>首页模板</h1>
   <h2>姓名:<?php //echo $name; ?></h2>
   <h2>年龄:<?php //echo $age; ?></h2>
   <?php foreach($stu as $v) :?>
       <p>姓名:<?php echo $v['name']?></p>
   <?php endforeach;?>

   <p><?php echo $student->name; ?></p>
   <p><?php echo $student->age; ?></p>
   <p><?php echo $student->sex; ?></p>
   <p>爱好:<?php echo $hobby; ?></p>

</body>
</html>