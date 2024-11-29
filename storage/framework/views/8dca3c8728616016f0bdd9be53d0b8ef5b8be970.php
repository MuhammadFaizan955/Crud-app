<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form action="<?php echo e(route('read.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label class="form-label">name</label>
        <input type="text" name="name" class="form-control">



        

        <label class="form-label">CNIC</label>
        <input type="number" name="cnic" class="form-control">

    

        <label class="form-label">phone</label>
        <input type="number" name="contact" class="form-control">

        <label class="form-label">country</label>
        <input type="text" name="country" class="form-control">
        <br>

        <button type="submit" class="btn btn-sm btn-success">Submit</button>
</form>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/form.blade.php ENDPATH**/ ?>