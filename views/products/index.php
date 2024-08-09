<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <th><?= $product->id ?></th>
                    <td>
                        <?php if ($product->image !== null): ?>
                            <img src="<?= $product->image ?>" alt="product-image" width="200">
                        <?php else: ?>
                            Sem imagem
                        <?php endif; ?>
                    </td>
                    <td><?= $product->name ?></td>
                    <td><?= $product->price ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>