<?php
    require_once('includes/dbconnection.php');

    if(isset($_POST['submitbutton']))
    {
    // fetch data from
    $boxno = $_POST['boxno'];
    $store = $_POST['store'];
    $description = $_POST['description'];

    // submitting data data  
    $insertData = mysqli_query($conn, "INSERT INTO august(boxno,store,description)
    VALUES('$boxno', '$store', '$description')");
    if($insertData)
    {
        $response = "data submitted successfully";
    }
    else{
        $response = "error occured";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRICAN SHIPPING</title>
    
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   
    
</head>
<body>
<?php
    require_once('includes/header.php')
?>
<form action="goods.php" method="POST">
    
    <div class="container-fluid">
        <div class="row pt-5">
            
            <div class="col-lg-6">
                <label for="goodno" class="form-label"><b>Goods Number:</b></label>
                <input type="text" class="form-control" placeholder="Enter luggage no...." name="boxno">
            </div>
            <div class="col-lg-6">
                <label for="store" class="form-label"><b>Store:</b></label>
                <select class="form-select" aria-label="Default select example" name="store">
                    <option selected>Open this select menu</option>
                    <option value="store 1">Store 1</option>
                    <option value="store 2">Store 2</option>
                    <option value="store 3">Store 3</option>
                    <option value="store 4">Store 4</option>
                </select> 
            </div>
            
            <div class="col-lg-3">
                <label for="Description" class="form-label"><b>Description:</b></label>
                <select class="form-select" aria-label="Default select example" name="description">
                    <option selected>Open this select menu</option>
                    <option value="Box">Box</option>
                    <option value="Barrel">Barrel</option>
                    <option value="Fridge">Fridge</option>
                    <option value="Bike">Bike</option>
                    <option value="Machinery">Machinery</option>
                    <option value="Furniture">Furniture</option>
                    <option value="other">other</option>
                </select>  
            </div>
            <div class="col-lg-3 pt-4">
                <button type="submit" name="submitbutton" class="btn btn-primary ">SUBMIT</button>
            </div>
            <div class="col-lg-3 pt-4">
                <?php
                    include('includes/response.php')
                ?>
            </div>
           
            
        </div>
        <div class="col-lg-6 pt-5">
                <img src="images/warehouse2.jpg" alt="" height="" width="">
            </div>   
    </div>
</form>

<?php
    require_once('includes/scripts.php')
?>
</body>
</html>