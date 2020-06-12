<?php

class ReadyFile {
  private $archive;

  /**
   * Função para ler arquivo de texto e arquivar o resultado na variável $archive
   *
   * @param string $dir
   * @return void
   */
  public function load($dir) {
    $fh = fopen($dir, 'r');
    while ($line = fgets($fh)) {
      $this->archive .= $line;
    }
    fclose($fh);
  }

  /**
   * getArchive
   *
   * @return string
   */
  public function getArchive() {
    return $this->archive;
  }

  /**
   * setArchive
   *
   * @param string $archive
   * @return void
   */
  public function setArchive($archive) {
    $this->archive = $archive;
  }
}