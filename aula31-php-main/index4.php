<?php

require_once "PessoaDAO.php";
require_once "pessoa.php";

$dao = new pessoaDAO();
///$pessoas = $dao->delete(5);


$pessoas = new pessoa("Cristian", "123.456.789-00", "cristian@example.com", 18, 4);

$p = $dao->update($pessoas);

echo "Atualizado: " . $p;
?> 