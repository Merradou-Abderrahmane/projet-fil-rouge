<?php
require_once __DIR__.'/../../manager/artisanManager.php';
$artisanManager = new ArtisanManager();
$data = $artisanManager->getAllArtisans();

if(!empty($_POST)){      
    $searchInput = $_POST["search"] ;
    $data = $artisanManager->searchByInput($searchInput);
}
else
{

    $data = $artisanManager->getAllArtisans();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://kit.fontawesome.com/110fb8b8a8.js" crossorigin="anonymous"></script>
    <title>Artisan management</title>
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/custom.css" />
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand  ">
        <!-- Navbar Brand-->
        <div class='w-100'>
            <img id="logo" class=" ms-3 rounded-circle" style="width:50px;" src="../assets/images/logo.png" alt="logo">

            <a class="navbar-brand ps-3" id="top-title" href="../index.php">Artisan management</a>
            <a href="../authentication/logOut.php" style="text-decoration: none; margin-left: 850px; "  > <i class="fa fa-sign-out" style="margin-right:5px;" aria-hidden="true"></i>log Out</a>

        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion " id="sidenavAccordion">
                <div class="sb-sidenav-menu sb-sidenav-custom">
                    <div class="nav">
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-fw fa-globe"></i></div>
                            Browse Artisans <br>
                        </a>
                        <a class="nav-link" href="search.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-fw fa-search"></i></div>
                            Find Artisan <br>
                        </a>
                        <a class="nav-link" href="insert.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-fw fa-plus-circle"></i></div>
                            Add Artisan <br>
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer sb-sidenav-custom">
                    <div class="small">Logged in as:</div>
                    🟢 Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main> 
 
                <form method="POST" enctype="multipart/form-data">
                    <div class=" text-center w-100">
                    <h1 class="mt-4"> <i class="fa fa-fw fa-search"></i> Find Artisan</h1>
                    <input class="searchBar pe-5" type= "text" style=" height : 38px"  name="search" >
                    <input type="submit" value ="search" style="background-color:#FAC213; color:black;" class="btn btn mb-2">
                    </div> 
                </form>

                <div class="container-fluid px-2">
                    <form method="GET" enctype="multipart/form-data">
                        <div class="card mt-4 ">
                            <div class="card-header">

                            </div>
                            <div class="card-body" id="card-body">
                                <table class="table">
                                    <thead id="table-head">
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name </th>
                                            <th class="d-none d-lg-table-cell">Address</th>
                                            <th class="d-none d-lg-table-cell">Phone</th>
                                            <!-- <th class="d-none d-lg-table-cell">Description</th> -->
                                            <th id="actions">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($data as $artisan) {
                                    ?>
                                        <tr>
                                            <td><img class="border rounded-circle" style="max-width:50px;" src="<?php echo 'http://localhost/projet-fil-rouge/admin' . '../uploads/' . $artisan->getPhoto(); ?>"></td>
                                            <td><?= $artisan->getName() ?></td>
                                            <td><?= $artisan->getAddress() ?></td>
                                            <td><?= $artisan->getPhone() ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $artisan->getId() ?>" class="text-primary" style="text-decoration: none;"><i class="fa fa-fw fa-edit"></i>Edit</a> |
                                                <a href="delete.php?id=<?php echo $artisan->getId() ?>" class="text-danger" style="text-decoration: none;" onClick="return confirm('Are you sure you want to delete this artisan ?');"><i class="fa fa-fw fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                                <!-- <button class="btn-custom btn-secondary-custom-1" id="print"  onclick="onPrint()">Print</button> -->
                            </div>
                        </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>