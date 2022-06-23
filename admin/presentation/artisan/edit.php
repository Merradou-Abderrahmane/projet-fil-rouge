<?php
require_once '../../manager/artisanManager.php';

$artisanManager = new ArtisanManager();

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $artisan = $artisanManager->getArtisan($id);
}

if(isset($_POST['update'])){
	$fileName = $_FILES["uploadedFile"]["name"];
	$editedArtisan = new Artisan();

	$editedArtisan->setName($_POST['name']);
    $editedArtisan->setDescription($_POST['description']);
    $editedArtisan->setPhone($_POST['phone']);
    $editedArtisan->setAddress($_POST['address']);

	$tempName = $_FILES["uploadedFile"]["tmp_name"];

	if (!empty($fileName)){
		$editedArtisan->setPhoto($fileName);
		$artisanManager->uploadPhoto($fileName, $tempName);
	}else {
			$editedArtisan->setPhoto($artisan->getPhoto());
		}
	
	$artisanManager->editArtisan($editedArtisan, $id);

    header('location: ../index.php');
}

?>
<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<script src="https://kit.fontawesome.com/110fb8b8a8.js" crossorigin="anonymous"></script>
	<title>Artisan management</title>
	<link href="../assets/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand  ">
		<!-- Navbar Brand-->
		<div class="d-flex justify-content-center">
			<div class='w-100'>
				<img id="logo" class=" ms-3 rounded-circle" style="width:50px;" src="../assets/images/logo.png" alt="logo">

				<a class="navbar-brand ps-3" id="top-title" href="../index.php">Artisan management</a>
				<a href="../authentication/logOut.php" style="text-decoration: none; margin-left: 850px; "  > <i class="fa fa-sign-out" style="margin-right:5px;" aria-hidden="true"></i>log Out</a>

			</div>

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
                            </a>					</div>
				</div>
				<div class="sb-sidenav-footer sb-sidenav-custom">
					<div class="small">Logged in as:</div>
					🟢 Admin
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-2">
					<h1 class="mt-4"><i class="fa fa-fw fa-edit"></i>Edit Artisan</h1>

					<div id="formCard" class="card mb-4 ">

						<div class="card-header">
							<div>✒️ Form</div>
						</div>
						<div class="card-body">
							<form method="POST" enctype="multipart/form-data" id="formSubmit" class="row g-3">
								<div class="col-md-6">
								    <input type="hidden" id='id' name='id' value=<?php echo $artisan->getId() ?>>
									<label for="inputTitle" class="form-label">Name</label>
									<input type="text" required name="name" value=<?= $artisan->getName() ?>  class="form-control" id="inputTitle">
								</div>
								<div class="col-md-6">
									<label for="inputAuthor" class="form-label">Phone</label>
									<input type="text" required name="phone" value=<?= $artisan->getPhone() ?> class="form-control" id="inputAuthor">
								</div>
								<div class="col-12">
									<label for="inputPrix" class="form-label">Address</label>
									<input type="text" required name="address" value=<?= $artisan->getAddress() ?>  class="form-control" id="inputPrix">
								</div>
								<div class="col-6">
									<label for="department" class="form-label">Description </label>
									<input type="text" required name="description" value=<?= $artisan->getDescription() ?> class="form-control">
								</div>
								<div class="col-6">
									<label for="photo" class="form-label">Photo</label>
									<input type="file"  name="uploadedFile" class="form-control" value="">
								</div>

								<div class="col-12">
									<button id="submitButton" type="submit" name="update" value="update" class="btn btn-primary-custom-2"><i class="fa fa-fw fa-edit"></i>Update</button>
									<!-- <a href="../index.php">Form</a> -->
								</div>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
	</main>
	</div>
	</div>
</body>

</html>