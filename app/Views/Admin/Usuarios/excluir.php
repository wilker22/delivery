<?php echo $this->extend('Admin/layout/principal'); ?>

<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>


<?php echo $this->section('estilos'); ?>



<?php echo $this->endSection(); ?>


<?php echo $this->section('conteudo'); ?>


<div class="row">

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-header bg-primary pb-0 pt-4">
                <h4 class="card-title text-white"><?php echo esc($titulo) ?></h4>
            </div>

            <div class="card-body">

                <?php if (session()->has('errors_model')) : ?>
                    <ul>
                        <?php foreach (session('errors_model') as $error) : ?>
                            <li class="text-danger"><?php echo $error; ?></li>
                        <?php endforeach ?>
                    </ul>

                <?php endif; ?>

                <?php echo form_open("admin/usuarios/excluir/$usuario->id"); ?>

                    <div>
                        <strong>Atenção!</strong> Tem certeza da exclusão do usuário <strong><?php echo esc($usuario->nome) ?>?</strong>
                    </div>
                    <div>
                            <button type="submit" class="btn btn-danger mr-2 btn-sm">
                                <i class="mdi mdi-trash-can btn-icon-prepend"></i>
                                Excluir
                            </button>
                    </div>
                <?php echo form_close() ?>
                </form>
            </div>


        </div>
    </div>




</div>



<?php echo $this->endSection(); ?>



<?php echo $this->section('scripts'); ?>

<link rel="stylesheet" href="<?php echo site_url('admin/vendors/mask/jquery.mask.min.js'); ?>">
<link rel="stylesheet" href="<?php echo site_url('admin/vendors/mask/app.js'); ?>">


<?php echo $this->endSection(); ?>