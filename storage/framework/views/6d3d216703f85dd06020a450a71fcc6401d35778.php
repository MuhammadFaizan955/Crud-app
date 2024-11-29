<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
form{
    background-color: green;
    color: chartreuse;
}
button{
    border: 3px none gray;
    outline-style: solid;
    outline-color: chartreuse;
    outline-width: 5px;
    color: chartreuse;
    background-color: green;
    width: 10%;
}
h1{
    border: 3px none gray;
    outline-style: solid;
    outline-color: chartreuse;
    outline-width: 5px;
    color: chartreuse;
    background-color: green;
    text-align: center;
}
input{
    width: 50%;
}

</style>

<body>
    
        <h1><marquee>ADMISSION FORM</marquee></h1><br>

        <form method="POST" action="<?php echo e(route('blog.store')); ?>">
        <?php echo csrf_field(); ?> 
     
        <label for="name">NAME</label>
        <br>
        <input type="text"id="Name" placeholder="full name"  name="Name">
        <br>
        <label for="name">Email</label>
        <br>
        <input type="text"id="email"placeholder="emai" name="Email">
        <br>
        <label for="name">CONTACT</label>
        <br>
        <input type="text"id="contact"placeholder="contact" name="Contact" >
        <br>
        <label for="name">City</label>
        <br>
        <input type="text"id="cnic"placeholder="cnic"name="City">
        <br>
        <label for="name">Address</label>
        <br>
        <input type="text"id="father name" placeholder="father name" name="Address">
        <br>
        
        <button type="submit">submit</button><br>
      </form>
</body>
</html>
</body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/index.blade.php ENDPATH**/ ?>