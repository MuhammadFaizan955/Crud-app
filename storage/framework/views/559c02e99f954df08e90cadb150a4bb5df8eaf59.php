<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-2 text-center text-success fs-5" style="margin: auto; width: 70%;">
        <form method="POST" class="form p-5 bg-dark" action="<?php echo e(route('table.store')); ?>" style="border-radius: 20px;">
        <?php echo csrf_field(); ?>  
    
        <h1><marquee>ADMISSION FORM</marquee></h1><br>
        <div class="mb-6">
        <label for="name">FULL NAME</label>
        <input type="text" name="Name" class="form-control" id="title" placeholder="full name"value>
        </div>
        <div class="mb-3"> 
        <label for="name">Email</label>
        <input type="text" name="Email" class="form-control"id="email"placeholder="emai"value>
        </div>
        <div class="mb-3">
        <label for="name">CONTACT</label>
        <input type="text" name="Contact" class="form-control" id="contact"placeholder="contact"value>
        </div>
        <!-- <div class="mb-3"> -->
        <!-- <label for="name">CNIC</label> -->
        <!-- <input type="text" name="title" class="form-control" id="cnic"placeholder="cnic"value> -->
        <!-- <br>
        <label for="name">FATHER NAME</label>
        <input type="text" name="title" class="form-control" id="father name" placeholder="father name"value>
        </div>
        <label for="course">COURSE</label><br>
        <select id="subject"name="subject"size="4" multiple>
        <option value="computer science">computer science</option>
        <option value="physics">physics</option>
        <option value="math">math</option>
        <option value="english">english</option>
        <option value="urdu">urdu</option>    
        </select>
        <br> -->
        <!-- <div class="mb-3">
        <label for="dob">COUNTRY</label><br>
        <input type="text" name="title" class="form-control" id="country"placeholder="country"value><br>
        </div>
        <div class="mb-3">
        <label for="city">CITY</label><br>
        <input type="text" name="title" class="form-control" id="city"placeholder="city" value><br>
        </div> -->
        <div class="mb-3">
        <label for="address">ADDRESS</label><br>
        <input type="text" name="Address" class="form-control" id="address"placeholder="address"value><br><br>
        </div>
        <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
      </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/blog.blade.php ENDPATH**/ ?>