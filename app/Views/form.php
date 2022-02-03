<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($user['nome']) ? 'Edição' : 'Novo Cliente' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <?php echo anchor(base_url(), 'Página Inicial', ['class' => 'btn btn-success mb-3']) ?>
        <?php echo form_open('user/store') ?>
        <div class="form-group mt-3">
            <label for="nome">Nome</label>
            <input type="text" value="<?php echo isset($user['nome']) ? $user['nome'] : '' ?>" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="email">E-mail</label>
            <input type="email" value="<?php echo isset($user['email']) ? $user['email'] : '' ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="fone">Fone</label>
            <input type="text" value="<?php echo isset($user['fone']) ? $user['fone'] : '' ?>" name="fone" id="fone" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="dataNasc">Data de Nascimento</label>
            <input type="date" value="<?php echo isset($user['dataNasc']) ? $user['dataNasc'] : '' ?>" name="dataNasc" id="dataNasc" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="logradouro">Logradouro</label>
            <input type="text" value="<?php echo isset($user['logradouro']) ? $user['logradouro'] : '' ?>" name="logradouro" id="logradouro" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="cidade">Cidade</label>
            <input type="text" value="<?php echo isset($user['cidade']) ? $user['cidade'] : '' ?>" name="cidade" id="cidade" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="bairro">Bairro</label>
            <input type="text" value="<?php echo isset($user['bairro']) ? $user['bairro'] : '' ?>" name="bairro" id="bairro" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="uf">UF</label>
            <input type="text" value="<?php echo isset($user['uf']) ? $user['uf'] : '' ?>" name="uf" id="uf" class="form-control">
        </div>
        <input type="submit" value="Salvar" class="btn btn-success mt-3">
        <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] : '' ?>">
        <?php echo form_close(); ?>
    </div>
</body>

</html>