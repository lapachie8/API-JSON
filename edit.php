<?php 
	include "koneksi.php";
	$qry = mysqli_query($koneksi,"SELECT * FROM API");
	$data = mysqli_fetch_array($qry);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>tambah data</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<section id="input-form">
 		<form method="post">
 			<div class="form">
 				<label>id</label>
 				<input type="text" name="id" value="<?php echo $data['id'] ?>">
 			</div>
 			<div class="form">
 				<label>username</label>
 				<input type="text" name="username" value="<?php echo $data['username'] ?>">
 			</div>
 			<div class="form">
 				<label>password</label>
 				<input type="password" name="password" value="<?php echo $data['password'] ?>">
 			</div>
 			<div class="form">
 				<label>level</label>
 				<option type="text" name="level" value="<?php echo $data['level'] ?>">
 					<option>ADMIN</option>
 					<option>MEMBER</option>
 					<option>GUEST</option>
 				</option>
 			</div>
 			<div class="form">
 				<label>FULLNAME</label>
 				<input type="text" name="fullname" value="<?php echo $data['fullname'] ?>">
 			</div>
 			<div class="form">
 				<label>SUBMIT</label>
 				<input type="submit" name="edit" value="UPDATE">
 			</div>

 			<?php  
 			if (isset($_POST['edit'])) 
                {
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    $fullname = $_POST['fullname'];
                    $update = mysqli_query($koneksi, "UPDATE users SET id='$id',username='$username',password='$password',level='$level',fullname='$fullname' WHERE 1");
                    if($update)
                    {
                        ?>
                        <script type="text/javascript">
                            alert('Update Berhasil ');
                            document.location.href="index.php";
                        </script>
                        <?php
                    }
                    else
                    {
                        echo "FAIL GANNN";
                    }
                }

 			?>
 		 <!-- </form>-->
 	</section>
 
 </body>
 </html>