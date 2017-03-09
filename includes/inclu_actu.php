
<?php


include_once "modele/connexion_bdd.php"; 

$result = $bdd->query('SELECT * FROM evenement');
//$result = $result->fetchAll(); 
//var_dump($result);



?>

	<div id="section2" class="container-fluid contActu">

		<div class="row rowActu">
			<div class="panel panel-default paneldef">

			<!--panel header-->
				<div class="panel-heading panelH"> 
					<span class="glyphicon glyphicon-list-alt">	
					</span>News
				</div>
			<!--panel body-->
				<div class="panel-body panelB">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>EVENT</th>
								<th>DESCRIPTION</th>
								<th>DATE</th>
								<th>Delete</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>

<?php 		while($donnee = $result->fetch()) 
		{ ?>
		       				<tr>  
	                    		<td><?php echo $donnee['event']; ?></td>    
	                   			<td><?php echo $donnee['description']; ?></td>
	             				<td><?php echo $donnee['date']; ?></td>
	                    		<td><a href="delete.php?id=<?php echo $donnee['id']; ?>">Delete</a></td>
	                    		<td><a href="edit.php?id=<?php echo $donnee['id']; ?>">Edit</a></td>
	                		</tr>
	                	
<?php   } ?>				
						</tbody>

					</table>

					

				</div>	
			</div>	
		</div>
		<div class="row rowBt">
		<a href="form.php"><input type="button" name="submit" value="WRITE YOUR OWN NEWS"></a>
		</div>
	</div>