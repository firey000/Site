<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <main style="margin: 20px;">
        <form action="./data.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название товара</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Цена товара</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="price">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Описание</label>
                <textarea class="form-control" id="exampleInputPassword1" name="description"> </textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Картинка товара</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Создать товар</button>
        </form>
    </main>
</body>

</html>