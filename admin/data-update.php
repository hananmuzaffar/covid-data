<!DOCTYPE html>
<html>
    <head>
        <title>Table Updation</title>
        <?php include '../includes/meta-tags.php' ?>
    </head>
    <body>
        <div class="container">
            <div class="row center">
                <?php include '../includes/header.php';
                        require '../config/db.php';
              			require '../config/clear.php' ?>
                <form method="post" action=" ">
                    <button name="submit" type="submit" value="Clear Database" class="btn waves-effect red white-text"/><i class="fa-solid fa-trash-can"></i> Clear Database</button>
                </form>
            </div>
        </div>
        <?php include '../includes/footer.php' ?>
    </body>
</html>