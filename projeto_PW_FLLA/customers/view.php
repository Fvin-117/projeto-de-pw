<?php
include('function.php');
view($_GET['id']);


include(HEADER_TEMPLATE);
?>

<header class="re-page-head">
    <h2><?php echo $customer['name']; ?>
        <small>Casa nº <?php echo $customer['id']; ?></small>
    </h2>
    <div class="d-flex flex-wrap gap-2">
        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-re">
            <i class="fa-solid fa-pen-to-square me-1"></i> Editar
        </a>
        <a href="index.php" class="btn btn-re-outline">
            <i class="fa-solid fa-arrow-rotate-left me-1"></i> Voltar
        </a>
    </div>
</header>

<?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
<?php endif; ?>

<div class="re-card">

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-location-dot"></i> Endereço</h3>
        <dl class="row re-dl mb-0">
            <dt class="col-sm-4 col-md-3">Endereço</dt>
            <dd class="col-sm-8 col-md-9"><?php echo $customer['address']; ?></dd>

            <dt class="col-sm-4 col-md-3">Bairro</dt>
            <dd class="col-sm-8 col-md-9"><?php echo $customer['hood']; ?></dd>

            <dt class="col-sm-4 col-md-3">CEP</dt>
            <dd class="col-sm-8 col-md-9"><?php echo cep($customer['zip_code']); ?></dd>

            <dt class="col-sm-4 col-md-3">Cidade</dt>
            <dd class="col-sm-8 col-md-9"><?php echo $customer['city']; ?></dd>

            <dt class="col-sm-4 col-md-3">UF</dt>
            <dd class="col-sm-8 col-md-9"><?php echo $customer['state']; ?></dd>
        </dl>
    </div>

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-phone"></i> Contato</h3>
        <dl class="row re-dl mb-0">
            <dt class="col-sm-4 col-md-3">Telefone</dt>
            <dd class="col-sm-8 col-md-9"><?php echo telefone($customer['phone']); ?></dd>

            <dt class="col-sm-4 col-md-3">Celular</dt>
            <dd class="col-sm-8 col-md-9"><?php echo telefone($customer['mobile']); ?></dd>
        </dl>
    </div>

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-images"></i> Imagens</h3>
        <img src="../img/casaexemplo.png" alt="">
    </div>

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-clock-rotate-left"></i> Registro</h3>
        <dl class="row re-dl mb-0">
            <dt class="col-sm-4 col-md-3">Data de Cadastro</dt>
            <dd class="col-sm-8 col-md-9"><?php echo formatData($customer['created'], "d/m/Y H:i:s"); ?></dd>

            <dt class="col-sm-4 col-md-3">Última atualização</dt>
            <dd class="col-sm-8 col-md-9"><?php echo formatData($customer['modified'], "d/m/Y H:i:s"); ?></dd>
        </dl>
    </div>
</div>

<?php include FOOTER_TEMPLATE; ?>