<?php

class Sortition {
  private $min = 1;
  private $max = 60;
  private $size = 6;
  
 /**
  * Função de ordenação
  *
  * @param array $numbers
  * @return $numbers[]
  */
  public function insertSort($numbers){
    for($i = 0; $i < $this->size; $i++) {
      $eleito = $numbers[$i];

      $j = $i -1;
      while( $j >= 0 && $eleito < $numbers[$j]) {
        $numbers[$j + 1] = $numbers[$j];

        $j = $j-1;
      }

      $numbers[$j + 1] = $eleito;
    }

    return $numbers;
  }

  /**
   * Gerador de números aleatórios.
   *
   * @return $numbers[]
   */
  public function random($notEqual = []) {
    $numbers = [];

    for($i = 0; $i < $this->size; $i++) {
      $n = random_int($this->min, $this->max);

      // Garantindo que o primeiro número do array seja diferente dos números na variável $notEqual
      // Este treicho do código garante que as três apostas do problema contenham, pelo menos, o primeiro número diferente.
      if($i == 0) {
        for($k = 0; $k < count($notEqual); $k++) {
          if( $n == $notEqual[$k] ) {
            $n = random_int($this->min, $this->max);
            $k = -1;
          }
        }
      }

      // Verificando se o novo número sorteado é igual aos demais valores do array.
      for($j = 0; $j < $i; $j++) {
        if( $numbers[$j] == $n ) {
          $n = random_int($this->min, $this->max);
          $j = 0;
        }
      }
    
      $numbers[$i] = $n;
    }

    return $this->insertSort( $numbers );
  }

  /**
   * Função para comparar duas apostas de seis dígitos.numero-sorteado
   * retorna true se forem iguais ou false, caso contrário.
   *
   * @param array $aposta1
   * @param array $aposta2
   * @return boolean
   */
  public static function betComparison($aposta1, $aposta2) {
    $i = 0;
    $fl_igual = true;

    while($i < 6 && $fl_igual) {
      if($aposta1[$i] != $aposta2[$i]) {
        $fl_igual = false;
      }

      $i++;
    }

    return $fl_igual;
  }
}