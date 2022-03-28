

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Mahasiswa
            </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nim: </b><?php echo e($Mahasiswa->nim); ?></li>
                <li class="list-group-item"><b>Nama: </b><?php echo e($Mahasiswa->nama); ?></li>
                <li class="list-group-item"><b>Kelas: </b><?php echo e($Mahasiswa->kelas); ?></li>
                <li class="list-group-item"><b>Jurusan: </b><?php echo e($Mahasiswa->jurusan); ?></li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="<?php echo e(route('mahasiswa.index')); ?>">Kembali</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mahasiswa.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 4\Pemrograman Web Lanjut\cms\siakad\resources\views/mahasiswa/detail.blade.php ENDPATH**/ ?>