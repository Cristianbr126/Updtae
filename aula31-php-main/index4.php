<?php

require_once "PessoaDAO.php";
require_once "pessoa.php";

$dao = new pessoaDAO();
///$pessoas = $dao->delete(5);


$pessoas = $dao->update(2, ['nome' => 'João', 'cpf' => '123.456.789-00', 'email' => 'joao@example.com', 'idade' => 30]);
?>