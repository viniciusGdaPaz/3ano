    <!-- Lista de personagens cadastrados -->
    <div class="col-md-6">
        <h1>Personagens Cadastrados</h1>
        <div class="list-group">
            <?php
            $personagens = $personagemCont->listar();

            foreach ($personagens as $index => $personagem):
                $psg = clone $personagem;
               
            ?>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <h5><?php echo $personagem->getNickname(); ?></h5>
                    <div>
                        <!-- Botão para abrir o colapso -->
                        <button class="btn btn-info btn-sm" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $index; ?>">
                            Visualizar
                        </button>
                        <a href="editar.php?id_edit=<?php echo $personagem->getId(); ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="excluir.php?id_del=<?php echo $personagem->getId(); ?>" onclick="return confirm('Deseja mesmo excluir <?php echo $personagem->getNickname(); ?>?');" class="btn btn-danger btn-sm">Excluir</a>
                    </div>
                </div>
                <!-- Conteúdo colapsável -->
                <?php
                $personagemArray = $personagemService->calcularEstatisticas($psg); // Usa o método que retorna um array associativo com estatísticas
                ?>
                <div id="collapse-<?php echo $index; ?>" class="collapse mt-2">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Nick:</strong> <?php echo $personagemArray['nickname']; ?></p>
                                <p><strong>Vida:</strong> <?php echo $personagemArray['vida']; ?></p>
                                <p><strong>Ataque:</strong> <?php echo $personagemArray['attack']; ?></p>
                                <p><strong>Defesa:</strong> <?php echo $personagemArray['defense']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <!-- Novos atributos ao lado -->
                                <p><strong>Classe:</strong> <?php echo $personagemArray['classe']; ?></p>
                                <p><strong>Habilidade:</strong> <?php echo $personagemArray['habilidade']; ?></p>
                                <p><strong>Item:</strong> <?php echo $personagemArray['item']; ?></p>
                                <p><strong>Bônus de Classe:</strong> <?php echo $personagemArray['item_bonus']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
