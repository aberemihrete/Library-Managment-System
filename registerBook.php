<?php 
    require_once('./config/dbconfig.php'); 
    $db = new operationss();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Library Book Registration</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Book Registration Form </h2>
                    </div>
                        <?php $db->Store_Record(); ?>
                        <div class="card-body">
                            <form method="POST">
                                ISBN:<input type="number" name="ISBN" placeholder=" ISBN" class="form-control mb-2" required>
                                Title: <input type="text" name="title" placeholder=" Title" class="form-control mb-2" required >
                                Author: <input type="text" name="author" placeholder=" Author" class="form-control mb-2" required >
                                Edition: <input type="number" name="edition" placeholder=" Edition" class="form-control mb-2" required >	
                                Price: <input type="number" name="price" placeholder=" Price" class="form-control mb-2" required >
				No. of copy: <input type="number" name="NoOfCopy" placeholder="No. of copy" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_save"> Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>