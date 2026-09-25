<?php
include "function.php";
add();
include HEADER_TEMPLATE;
?>

<header class="re-page-head">
    <h2>Novo Imóvel</h2>
</header>

<form action="add.php" method="post" enctype="multipart/form-data" class="re-card">

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-location-dot"></i> Endereço</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="address" name="customer[address]">
            </div>
            <div class="col-md-3">
                <label for="hood" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="hood" name="customer[hood]">
            </div>
            <div class="col-md-3">
                <label for="zip_code" class="form-label">CEP</label>
                <input type="text" class="form-control" id="zip_code" name="customer[zip_code]" maxlength="8">
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label">Município</label>
                <input type="text" class="form-control" id="city" name="customer[city]">
            </div>
            <div class="col-md-2">
                <label for="state" class="form-label">UF</label>
                <input type="text" class="form-control" id="state" name="customer[state]" maxlength="2">
            </div>
        </div>
    </div>

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-phone"></i> Contato</h3>
        <div class="row g-3">
            <div class="col-md-4">
                <label for="phone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="phone" name="customer[phone]" maxlength="11">
            </div>
            <div class="col-md-4">
                <label for="mobile" class="form-label">Celular</label>
                <input type="text" class="form-control" id="mobile" name="customer['mobile']" maxlength="11">
            </div>
        </div>
    </div>

    <div class="re-fieldset">
        <h3 class="re-section"><i class="fa-solid fa-images"></i> Imagens</h3>
        <label for="image" id="img-drop" class="re-drop">
            <i class="fa-solid fa-cloud-arrow-up" aria-hidden="true"></i>
            <strong>clique para escolher uma imagem</strong>
        </label>

        <input type="file" id="image" name="customer[image]" class="visually-hidden" multiple
            accept="image/jpeg,image/png,image/webp">

        <img id="preview" class="re-thumb d-none" alt="Imagem selecionada">

        <script>
            var input = document.getElementById('image');
            var dropZone = document.getElementById('img-drop');
            var preview = document.getElementById('preview');

            input.addEventListener('change', function () {
                var arquivo = this.files[0];

                if (!arquivo) {
                    // sem arquivo -> volta a mostrar o "convite"
                    preview.classList.add('d-none');
                    preview.src = '';
                    dropZone.classList.remove('d-none');
                    return;
                }

                // com arquivo -> esconde o "convite" e mostra a prévia no lugar
                dropZone.classList.add('d-none');
                preview.src = URL.createObjectURL(arquivo);
                preview.classList.remove('d-none');
            });

            // clicar na prévia reabre o seletor de arquivo, já que ela não é mais um <label>
            preview.addEventListener('click', function () {
                input.click();
            });
        </script>

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