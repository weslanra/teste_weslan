<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Avonale</title>
    <link rel="stylesheet" href="../../public/css/main.css"/>
  </head>
  <body>
    <div id="container">
      <nav id="sidebar">
        <div class="nav-brand">
          <img src="../../public/assets/avonale.jpg" alt="">
        </div>

        <ul class="menu">
          <li>
            <a class="nav-link" href="../index/">Mega-sena</a>
          </li>
          <li>
            <a class="nav-link active" href="../file/">Arquivo</a>
          </li>
          <li>
            <a class="nav-link" href="../users/">Gerador de Usuário</a>
          </li>
        </ul>
      </nav>
      <section id="painel">
        <div id="main-container">
          <div class="container-form">
            <form id="form_file" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="file" name="file_txt" accept="text/plain">
              </div>

              <div class="form-group text-center">
                <input class="btn btn-submit" type="submit" value="Enviar arquivo" />
              </div>
            </form>
          </div>
          <div class="container-text">
            <pre id="content-text"></pre>
          </div>
        </div>
      </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../public/js/main.js"></script>
  </body>
</html>