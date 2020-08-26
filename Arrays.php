<?php

$carros = array("Fusca", "Brasília", "Uno");

// Para printar todos os valores
print_r($carros);

echo "<hr>";
echo($carros[0]);
echo "<hr>";
// ADICIONANDO VALORES NO ARRAY
$carros[] = "Camaro";
print_r($carros);
echo "<hr>";

// ADICIONAR UEM UMA POSIÇÃO ESPECIFICA
$carros[100000] = "GOLZERA";
print_r($carros);
echo "<hr>";

// Caso eu queira definir a posição dos elementos
$nomes = array(1=>"Iago", 2=>"Ianca", 3=>"Igor");

// Para printar todos os valores
print_r($nomes);

echo "<hr>";
echo($nomes[1]);
echo "<hr>";



$totalCarros =  count($carros);
echo "O total de carros é $totalCarros <br>";

// Pegar todos valores do array
// Foreach
foreach($carros as $carro){
    echo $carro."<br>";
}
echo"<hr>";

/////////////////////////// Arrays Assossiativos ///////////////////////////////
$pessoa = array("nome"=> "Roberval", "idade"=> 44, "altura"=>2.22);
$pessoa["cidade"] = "Itaquaquecetuba";
echo $pessoa["cidade"].'<br>';

foreach($pessoa as $indice => $valor){
    echo "$indice: $valor <br>";
}
echo"<hr>";


///////////////////////// Arrays Multidimensionais ////////////////////////
$times = array(
    "cariocas"=> array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
    "paulistas"=> array("santos", "sao paulo", "palmeiras"),
    "baianos"=> array("bahia", "vitoria", "itabuna")
);
echo $times["cariocas"]["campeao"];
echo"<br>";
echo $times["paulistas"][0];
echo"<br>";


foreach($times["cariocas"] as $indice => $valor){
    echo "$indice: $valor <br>";
}
echo"<hr>";



//////////////////////////////////////////// Funçoes de array ///////////////////////////////////////

// https://www.php.net/manual/en/book.array.php

// Verificar se está no array
$nomes = array("Iago", "Junior", "Maicon", "Maria", "João");

if (in_array("Iago", $nomes)) {
    echo "Existe no array <br>";
}
else{
    echo "Não existe no array <br>";
}

// Chaves do array
$keys = array_keys($nomes);
echo("Retorna as chaves ");
print_r($keys);
echo"<br>";

// Valores do array
$values = array_values($nomes);
echo("Retorna os valores ");
print_r($values);
echo"<br>";


// Mesclar arrays
$carros = array("Fusca", "Brasília", "Uno");
$nomes_carros = array_merge($nomes, $carros);
echo "Juntando dois arrays";
print_r($nomes_carros);
echo"<br>";


// Excluir ultima posição do array
// array_pop($nomes_carros); // Dá para fazer assim sem mostrar
echo 'Exclui ultimo elemento <---'.array_pop($nomes_carros).'---> ';
print_r($nomes_carros);
echo"<br>";



// Excluir primeira posição do array
// array_shift($nomes_carros); // Dá para fazer assim sem mostrar
echo 'Exclui primeiro elemento <---'.array_shift($nomes_carros).'---> ';
print_r($nomes_carros);
echo"<br>";


// Adiciona elemento na primeira posição do array
array_unshift($nomes_carros,"Robson");
echo 'Adiciona na primeira posição ';
print_r($nomes_carros);
echo"<br>";


// Adiciona elemento no final do array
array_push($nomes_carros,"Kombi");
echo 'Adiciona na primeira posição ';
print_r($nomes_carros);
echo"<br>";


// Mescla arrays como chaves e values
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Botafogo", "Flamengo");
$times = array_combine($keys, $values);
echo 'Mescla arrays como chaves e values';
print_r($times);
echo"<br>";


// Calcular soma dos elementos do array
$soma = array(4, 5, 6, 7, 8);
echo 'A soma do array é: '.array_sum($soma);
echo"<br>";


// Transforma string em array
$data = "22/08/2019";
// Divisor, string
$novaData = explode("/", $data);
echo "Transforma em array ---";
print_r($novaData);
echo"<br>";

// Transformar array em string
$frase = array("Iago", "Ivanir", "Dalmolin");
$string = implode(" ", $frase);
echo "Transformado em string $string";


?>