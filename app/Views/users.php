<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
        function confirma(){
            if(!confirm('Deseja excluir o registro?')){
                return false;
            }else{
                return true;
            }
        }
    </script>
</head>

<body>
    <div class="container mt-5">
    <?php echo anchor(base_url('user/create'), 'Novo Cliente', ['class' =>'btn btn-success mb-3']) ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Fone</th>
                <th>Cidade</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['nome'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['fone'] ?></td>
                    <td><?php echo $user['cidade'] ?></td>
                    <td>
                        <?php echo anchor('user/edit/'.$user['id'], 'Editar') ?>
                        -
                        <?php echo anchor('user/delete/'.$user['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php echo $pager->Links('default','default_bootstrap'); ?>
    </div>
</body>

</html>