<?php

//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Configurar essas variáveis de acordo com o seu ambiente
define("DB_HOST", "localhost");
define("DB_NAME", "crud_tds");
define("DB_USER", "root");
define("DB_PASSWORD", "bancodedados");

//Configurar variaveis para a sessao do usuario
define("SESSAO_USUARIO_ID", "USUARIO");
define("SESSAO_USUARIO_NOME", "USUARIONOME");

//CONFIGURAR a url base da aplicação
define("BASE_URL", "/lpw/crud_alunos_login/");
