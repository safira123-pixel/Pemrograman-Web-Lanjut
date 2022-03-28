

<?php $__env->startSection('content'); ?>

<div class="container mt-5">

<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Edit Mahasiswa
</div>
<div class="card-body">
<?php if($errors->any()): ?>
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
<form method="post" action="<?php echo e(route('mahasiswa.update', $Mahasiswa->nim)); ?>" id="myForm">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<div class="form-group">
<label for="Nim">Nim</label>
<input type="text" name="Nim" class="form-control" id="Nim" value="<?php echo e($Mahasiswa->nim); ?>" aria-describedby="Nim" >
</div>
<div class="form-group">
<label for="Nama">Nama</label>
<input type="text" name="Nama" class="form-control" id="Nama" value="<?php echo e($Mahasiswa->nama); ?>" aria-describedby="Nama" >
</div>
<div class="form-group">
<label for="Kelas">Kelas</label>
<input type="Kelas" name="Kelas" class="form-control" id="Kelas" value="<?php echo e($Mahasiswa->kelas); ?>" aria-describedby="Kelas" >
</div>
<div class="form-group">
<label for="Jurusan">Jurusan</label>
<input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="<?php echo e($Mahasiswa->jurusan); ?>" aria-describedby="Jurusan" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mahasiswa.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 4\Pemrograman Web Lanjut\cms\siakad\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>