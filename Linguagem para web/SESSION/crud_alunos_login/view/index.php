<?php
//inclusão da verificação
include_once(__DIR__."/view/login/loginVerifica.php");
//Inclusão do HTML do header
include_once(__DIR__ . "/view/include/header.php");

//Inclusão do menu
include_once(__DIR__ . "/view/include/menu.php");


?>

<div class="row mt-3 justify-content-center">
	<div class="col-3">
		<div class="card text-center">
			<img class="card-image-top mx-auto"
					src="<?= BASE_URL?>/img/card_alunos.png" 
					style="max-width: 200px; height: auto;" />
	
			<div class="card-body">
            	<h5 class="card-title">Alunos</h5>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="<?= BASE_URL?>/view/alunos/listar.php" class="card-link">
						Listagem de Alunos</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<?php
include_once(__DIR__ . "/view/include/footer.php"); 
?>   
