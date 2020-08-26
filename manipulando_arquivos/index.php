<?php

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste \r\n";
$tamanhoArquivo = filesize($arquivo);

// Escrever no arquivo
$arquivoAberto = fopen($arquivo, 'a'); // Arquivo aberto para escrita
fwrite($arquivoAberto, $conteudo);
fclose($arquivoAberto); //Fecha arquivo)



// Ler arquivo
// Executa o loop enquanto não for a ultima linha
$arquivoAberto = fopen($arquivo, 'r'); // Arquivo aberto para leitura
while(!feof($arquivoAberto)){
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo "$linha <br>";
}




?>