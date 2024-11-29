<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</head>
<body>
    <div class="h3 text-center">student form</div>
        <table 

         class="container table table-bordered text-center">
    
             <tr>
             <td colspan="7"><a href="<?php echo e(route('table.create')); ?>" class="btn btn-outline-success btn-sm float-end">Create Form</a>
        </td>
        </tr>
        <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
                <!-- <th>name</th>
                <th>city</th>
                <th>address</th> -->
            
             <?php if(isset($student)): ?>
             <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
             <td><?php echo e($blog['id']); ?></td>
                <td><?php echo e($blog['Name']); ?></td>

                <td><?php echo e($blog['Email']); ?></td>
                <td><?php echo e($blog['Contact']); ?></td>
                
                <td><?php echo e($blog['Address']); ?></td>
                <td>
                
                              
                <form action="<?php echo e(route('table.destroy',$blog->id)); ?>" method="Post">
                <a href="<?php echo e(route('table.edit', $blog->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        
                    </form>
                    </td>
             </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?> 
        </table>
</body>
</html>


<?php /**PATH D:\Crud\resources\views/table.blade.php ENDPATH**/ ?>