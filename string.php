<?php
//strlen() - Retorna o tamanho da string contando com "espaço".
$str = "Allan matias de lima";
$tamanho = strlen($str);
echo $tamanho."<br>";

//strpos() - Mostra quantos caracteres exixtem antes da palavra.
$texto = "Seja bem vindo ao Senac";
$resultado = strpos($texto, "Senac");
echo $resultado."<br>";

//str_replace() - substituir uma palavra
$frase = "Seja bem vindo ao Google";
$substituir = str_replace("Google","Senac",$frase);
echo $substituir."<br>";

//substr()-Retorna uma parte do texto.
$frase = "Curso técnico no Senac";
$sub = substr($frase,17,6);
echo $sub."<br>";

//strtolower()- transforma em minúscula
$texto = "AULA DE PHP";
$string = strtolower($texto);
echo $string."<br>";

//strtoupper() - Converte uma string maiúscula.
$texto = "aula de php";
$string = strtoupper($texto);
echo $string."<br>";

//ucfirst() - Converte o primeiro caractere de uma string para maiúscula.
$texto = "seja bem vindo ao Senac";
$string = ucfirst($texto);
echo $string."<br>";

//ucwords()- Converte a primeira letra de cada palavra para letra maiúscula.
$texto = "seja bem vindo ao senac";
$substituir = ucwords($texto);
echo $substituir."<br>"; 

//str_repeat() -Repete uma string um número especificado de vezes.
$texto = "Curso de informática <br>";
$fraseRepeticao = str_repeat($texto,3);
echo $fraseRepeticao;

//str_split() - Coloca dentro de array
$texto = "Senac";
$array = str_split($texto);
print_r($array);
echo "<br>";

//strrev() - inverte uma string
$texto ="Senac";
$inverso = strrev($texto);
echo $inverso."<br>";

//strcasecmp() - Compara duas strings (sensível a maiúsculas e mininúsculas)
$frase1 = "Senac";
$frase2 = "senac";
$comparar = strcasecmp($frase1,$frase2);
echo $comparar."<br>";
// Qdo o resultado for "0" está certo e qdo for "1" é diferente.
?>