<?php

class Home extends Controller {
  /**
   * Controlador da View home/index
   *
   * @return void
   */
  public function index() {
    $sorteio = $this->util('Sortition');

    $mega1 = $sorteio->random();
    $mega2 = $sorteio->random([ $mega1[0] ]);
    $mega3 = $sorteio->random([ $mega1[0], $mega2[0] ]);

    $this->view('home/index', [
      'mega1' => $mega1,
      'mega2' => $mega2,
      'mega3' => $mega3
    ]);
  }

  /**
   * Controlador da View home/formFile
   *
   * @return void
   */
  public function file() {
    $this->view('home/formFile');
  }

  /**
   * Controlador da View home/randomUser
   *
   * @return void
   */
  public function users() {
    $this->view('home/randomUser', []);
  }

  /**
   * Função para receber o formulário form_file.
   * Esta função faz o download do arquivo de texto para a pasta tmp e retrona o arquivo lido
   * usando a classe ReadyFile.
   *
   * @return void
   */
  public function readyFile() {
    $uploaddir = dirname(__DIR__) . '\\tmp\\';
    $uploadfile = $uploaddir . basename($_FILES['file_txt']['name']);

    if (move_uploaded_file($_FILES['file_txt']['tmp_name'], $uploadfile)) {
        $rfile = $this->model('ReadyFile');
        $rfile->load($uploadfile);

        echo $rfile->getArchive();
    } else {
        echo "Falha ao enviar arquivo, verifique se foi enviado um arquivo de texto!\n";
    }
  }
}