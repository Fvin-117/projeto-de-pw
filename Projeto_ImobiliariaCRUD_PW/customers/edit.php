<?php
include "function.php";
edit();
include HEADER_TEMPLATE;
?>

<header class="re-page-head">
    <h2>Atualizar Imóvel
        <small>Casa nº <?php echo $customer['id']; ?></small>
    </h2>
</header>

<form action="edit.php?id=<?= $customer['id']; ?>" method="post" enctype="multipart/form-data" class="re-card">


    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-location-dot"></i> Endereço</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="address" name="customer[address]"
                    value="<?php echo $customer['address']; ?>">
            </div>
            <div class="col-md-3">
                <label for="hood" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="hood" name="customer[hood]"
                    value="<?php echo $customer['hood']; ?>">
            </div>
            <div class="col-md-3">
                <label for="zip_code" class="form-label">CEP</label>
                <input type="text" class="form-control" id="zip_code" name="customer[zip_code]" maxlength="8"
                    value="<?php echo $customer['zip_code']; ?>">
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label">Município</label>
                <input type="text" class="form-control" id="city" name="customer[city]"
                    value="<?php echo $customer['city']; ?>">
            </div>
            <div class="col-md-2">
                <label for="state" class="form-label">UF</label>
                <input type="text" class="form-control" id="state" name="customer[state]" maxlength="2"
                    value="<?php echo $customer['state']; ?>">
            </div>
        </div>
    </div>

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-phone"></i> Contato</h3>
        <div class="row g-3">
            <div class="col-md-4">
                <label for="phone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="phone" name="customer[phone]" maxlength="11"
                    value="<?php echo $customer['phone']; ?>">
            </div>
            <div class="col-md-4">
                <label for="mobile" class="form-label">Celular</label>
                <input type="text" class="form-control" id="mobile" name="customer[mobile]" maxlength="11"
                    value="<?php echo $customer['mobile']; ?>">
            </div>
        </div>
    </div>

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-images"></i> Imagens</h3>

        <label for="images" id="img-drop" class="re-drop">
            <i class="fa-solid fa-cloud-arrow-up" aria-hidden="true"></i>
            <strong>clique para escolher uma imagem</strong>
        </label>

        <?php if (!empty($customer['image'])): ?>

            <img src="<?php echo BASEURL . 'uploads/' . htmlspecialchars($customer['image']); ?>" alt="Imagem atual"
                width="300">

        <?php else: ?>

            <p class="mt-2">Nenhuma imagem cadastrada.</p>

        <?php endif; ?>

        <input type="file" name="customer[image]" accept="image/jpeg,image/png,image/webp">

    </div>

    <div id="actions" class="re-actions">
        <button type="submit" class="btn btn-re">
            <i class="fa-solid fa-floppy-disk me-1"></i> Salvar
        </button>
        <a href="index.php" class="btn btn-re-outline">
            <i class="fa-solid fa-rotate-left me-1"></i> Cancelar
        </a>
    </div>
</form>

<?php include FOOTER_TEMPLATE; ?>