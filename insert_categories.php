<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css" />
    <title>Add Categories</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3 class="text-center">Ingreso de categorias</h3>
            </div>
            <div class="col-md-12">
                <form class="form-group" accept-charset="utf-8" action="save_category.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <br>
                        <label class="control-label" for="categoria">Nueva categoria</label>
                        <input type="text" required="" placeholder="Ingrese aqui la nueva categoria" class="form-control" id="categoria" name="categoria">
                        <?php
                        include_once("config_products.php");
                        include_once("db.php");
                        $link = new Db();
                        $sqlCtg="select id_category, category_name from categories order by id_category asc";
                        $stmtCtg = $link->prepare($sqlCtg);
                        $stmtCtg->execute();
                        $dataCtg=$stmtCtg->fetchAll();
                        ?>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-success" value="Añadir Categoria">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a class="text-center" href="welcome.php">Volver</a>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>