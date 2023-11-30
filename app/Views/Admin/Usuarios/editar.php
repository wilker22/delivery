<?php echo $this->extend('Admin/layout/principal'); ?>

<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>


<?php echo $this->section('estilos'); ?>



<?php echo $this->endSection(); ?>


<?php echo $this->section('conteudo'); ?>


<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header bg-primary pb-0 pt-4">
                <h4 class="card-title text-white"><?php echo esc($titulo) ?></h4>
            </div>

            <div class="card-body">

            <?php if(session()->has('errors_model')) : ?>
                <ul>
                    <?php foreach(session('errors_model') as $error) : ?>
                        <li class="text-danger"><?php echo $error;?></li>
                    <?php endforeach ?>
                </ul>

            <?php endif;?>
                <form class="forms-sample">
                    <input type="hidden" name="<?php echo csrf_token() ?>" value="<?php echo csrf_hash() ?>">
                
                    <?php echo $this->include('Admin/Usuarios/form');?>
                </form>
            </div>


        </div>
    </div>




</div>



<?php echo $this->endSection(); ?>



<?php echo $this->section('scripts'); ?>

<?php echo $this->endSection(); ?>