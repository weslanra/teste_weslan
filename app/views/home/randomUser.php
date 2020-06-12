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
            <a class="nav-link" href="../file/">Arquivo</a>
          </li>
          <li>
            <a class="nav-link active" href="../users/">Gerador de Usuário</a>
          </li>
        </ul>
      </nav>
      <section id="painel">
        <div id="content-users" class="bg-white p-2 overflow-auto">
          <table id="table-user">
            <thead>
              <tr>
                <th colspan="2">Nome</th>
                <th>Gênero</th>
                <th>Idade</th>
                <th>Nacionalidade</th>
                <th>E-mail</th>
                <th>Usuário</th>
                <th>Telofone</th>
                <th>Celular</th>
                <th>País</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Rua</th>
                <th>Código Postal</th>
                <th colspan="2">Fuso horário</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../public/js/randomUser.js"></script>
  </body>
</html>