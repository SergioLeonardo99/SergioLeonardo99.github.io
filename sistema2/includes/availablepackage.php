<div class="container wow fadeInDown" style=" height:500px;">
    <div class="col-md-12" style="border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px;">
        <div class="panel panel-success">
            <div class="panel-heading panel-title" >
                <span style="font-weight:bold; font-family:verdana;"><i class="glyphicon glyphicon-cog"></i> Mascotas </span>
            </div>
            <div class="panel-body" style="background-color:#fff;">

 			
            <div class="col-lg-3">
            <em style="color:red;">Nota: Los campos con (*) son obligatorios</em></div>
            <div class="col-lg-6">
            	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                	<table>
                    	<tr>
                        	<td style="text-align:right; font-weight:bold;">Nombre de la mascota*  : &emsp;</td>
                            <td style="text-align:center;">&emsp; <textarea class="form-control" name="cnpname" required></textarea></td>
                        </tr>
                        <tr>
                        	<td style="text-align:right;font-weight:bold;">Edad * : &emsp;</td>
                            <td style="text-align:center;">&emsp; <input type="number" step="any" class="form-control" name="prize" required /></td>
                        </tr>
                        <tr>
                        	<td style="text-align:right;font-weight:bold;">Descripción * : &emsp;</td>
                            <td style="text-align:center;">&emsp; <textarea class="form-control" name="des" required></textarea></td>
                        </tr>
                         <tr>
                        	<td style="text-align:right;font-weight:bold;">Imagen* : &emsp;</td>
                            <td style="text-align:center;">&emsp; <input type="file" name="image" required /></td>
                        </tr>
                         <tr>
                        	<td style="text-align:right;font-weight:bold;">Estado* : &emsp;</td>
                            <td style="text-align:center;">&emsp; <select name="stat" class="form-control">
                            					<option>Select</option>
                                                <option value="Available">Disponible</option>
                                                <option value="Un-Available">No-disponible</option>
                            </select></td>
                        </tr>
                         <tr style="margin-top:20px;">
                        	<td style="text-align:right;font-weight:bold;" colspan="2"><br /><p></p>
                            <button class="btn btn-default" type="clear">Cancelar</button>
                            <button class="btn btn-success" type="submit" name="save">Guardar</button></td>
                            
                        </tr>
                    
                    </table>
                </form>
            </div>
            <div class="col-lg-3"></div>

            </div>
        </div>
    </div>
</div>
<?php 
include('includes/dbconn.php');
if(isset($_POST['save'])){
			$name = $_POST['cnpname'];
			$prize = $_POST['prize'];
			$des = $_POST['des'];
			$stat = $_POST['stat'];
			 //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"]);
                                $location = "../upload/" . $_FILES["image"]["name"];
			if(empty($name) || empty($prize) || empty($des) || empty($stat)){
					echo '<script>alert("Fields must be empty.");
								 window.location.href="addcnp.php";
					</script>';
				
				}else {
					$sql = ("INSERT INTO tblcnp VALUES(NULL,'$name','$prize','$des','$location','$stat')") or die (mysql_error());
                    $result=mysqli_query($con, $sql);
					if($result==true){
						echo '<script>alert("Save Successfully!");
									window.location.href="addcnp.php";</script>';}else {
										echo '<script>alert("Sory unable to process your request!");
									window.location.href="addcnp.php";</script>';
										}
						
					}
		}
?>