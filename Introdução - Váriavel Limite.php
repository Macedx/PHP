
    <?php
// Escreva um programa que leia 3 números inteiros:
// - O 1° número corresponde ao 1° termo de uma PA;
// - O 2° número corresponde à razão da sequência;
// - O 3° número corresponde ao limite superior da sequência. 
    
//Definindo parâmetros
    $primeiroTermo = 12;
    $razao = 5;
    $limite = 29;

//Iniciando o 1° termo como o próximo

    $termoAtual = $primeiroTermo;

// Exibindo a progressão aritmética
    echo "Progressão Aritmética:\n";
    while ($termoAtual <= $limite){
        echo $termoAtual;
        if ($termoAtual + $razao <= $limite){
            echo ",";
        }

//Avançando para o próximo termo 
        $termoAtual += $razao;
    }

     ?>