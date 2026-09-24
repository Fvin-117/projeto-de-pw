<?php
    include("function.php");
    index();
    include HEADER_TEMPLATE;
?>

<header class="re-page-head">
    <h2>Clientes</h2>
    <div class="d-flex flex-wrap gap-2">
        <a class="btn btn-re" href="add.php"><i class="fa-solid fa-user-plus me-1"></i> Novo Cliente</a>
        <a class="btn btn-re-outline" href="index.php"><i class="fa-solid fa-rotate me-1"></i> Atualizar</a>
    </div>
</header>

<?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
<?php endif; ?>

<div class="re-table-wrap">
    <div class="table-responsive">
        <table class="table table-hover re-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Endereço</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($customers): ?>
                    <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td class="re-id"><?php echo $customer['id']; ?></td>
                            <td>
                                <img src="../img/casaexemplo.png" alt="" style="width: 90px; height: 68px; object-fit: cover;">
                            </td>
                            <td class="fw-semibold"><?php echo $customer['name']; ?></td>
                            <td><?php echo $customer['city']; ?></td>
                            <td><?php echo $customer['hood']; ?></td>
                            <td><?php echo $customer['address']; ?></td>
                            <td>
                                <div class="d-inline-flex flex-column gap-1">
                                    <div class="d-flex gap-1">
                                        <a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-re-outline">
                                            <i class="fa fa-eye"></i> Visualizar
                                        </a>
                                        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-re">
                                            <i class="fa fa-pencil"></i> Editar
                                        </a>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-re-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal" data-customer="<?= $customer['id']; ?>">
                                        <i class="fa fa-trash"></i> Excluir
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">
                            <div class="re-empty">
                                <i class="fa-solid fa-folder-open"></i>
                                <p class="mb-3">Nenhum registro encontrado.</p>
                                <a class="btn btn-re" href="add.php"><i class="fa-solid fa-user-plus me-1"></i> Cadastrar cliente</a>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "modal.php"; ?>
<?php include FOOTER_TEMPLATE; ?>