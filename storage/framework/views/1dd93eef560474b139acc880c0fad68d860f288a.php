<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
    <div class="container mt-2 text-center text-success fs-5" style="margin: auto; width: 70%;">
        <form method="POST" class="form p-5 bg-danger" action="" style="border-radius: 20px;">
            <div class="mb-1">         
    <label for="username">User Name</label><br>
    <input type="text"id="username"placeholder="username"value>
            </div>
    <div class="mb-1">
    <label for="pasword">Pasword</label><br>
    <input type="password"id="password"placeholder="password"value>
    </div>
    <div class="mb-1">
    <label for="email">Email</label><br>
    <input type="emai"id="email"placeholder="email"value>
    </div>
    <button type="submit" name="log in" class="btn btn-outline-success">Log in</button>
        </form>
    <a href="/form">for</a>
    <a href="<?php echo e(route('test32')); ?>">in</a>  
</body>
</html>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/log.blade.php ENDPATH**/ ?>