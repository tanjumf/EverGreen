<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                 <h3>User list <a class="btn btn-success float-right btn-sm" href ="" >
                 <i class="fa fa-plus-circle"></i>Add user</a></h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                
              </div><!-- /.card-body -->
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                 <tr>
                 <th>sL No</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Action</th>
                 </tr>
              </thead>
              <tbody>
               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                 <td><?php echo e($key+1); ?></td>
                 <td><?php echo e($user->name); ?></td>
                 <td><?php echo e($user->email); ?></td>
                 <td>
                 <a title="Edit" class="btn btn-sm btn-primary" href=""><i class="fa fa-edit"></i></a>
                 <a title="Delete" class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                 </td>
                 </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
              </table>
            </div>
           
            
          </section>
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DCL\Desktop\project2020\blog\resources\views/backend/view-user.blade.php ENDPATH**/ ?>