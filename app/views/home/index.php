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
            <a class="nav-link active" href="../index/">Mega-sena</a>
          </li>
          <li>
            <a class="nav-link" href="../file/">Arquivo</a>
          </li>
          <li>
            <a class="nav-link" href="../users/">Gerador de Usuário</a>
          </li>
        </ul>
      </nav>
      <section id="painel">
        <div class="volante-mega">
          <div class="bg-white p-2">
            <div class="header-mega">
              <h1>MEGA-SENA</h1>
            </div>

            <table class="table">
              <tbody>
                <?php
                  $str = '<tr>';
                  $j = 0;

                  for($i = 1; $i <= 60; $i++) {
                    $class = '';
                    if($j < 6) {
                      if($i == $data['mega1'][$j]) {
                        $class = 'numero-sorteado';
                        $j++;
                      }
                    }

                    $str .= "<td class='$class'>$i</td>";

                    if($i % 10 == 0) {
                      $str .= "</tr><tr>";
                    }else if($i == 60){
                      $str .= "</tr>";
                    }
                  }

                  echo $str;
                ?>
              </tbody>
            </table>

            <table class="table">
              <tbody>
                <?php
                  $str = '<tr>';
                  $j = 0;

                  for($i = 1; $i <= 60; $i++) {
                    $class = '';
                    if($j < 6) {
                      if($i == $data['mega2'][$j]) {
                        $class = 'numero-sorteado';
                        $j++;
                      }
                    }

                    $str .= "<td class='$class'>$i</td>";

                    if($i % 10 == 0) {
                      $str .= "</tr><tr>";
                    }else if($i == 60){
                      $str .= "</tr>";
                    }
                  }

                  echo $str;
                ?>
              </tbody>
            </table>

            <table class="table">
              <tbody>
                <?php
                  $str = '<tr>';
                  $j = 0;

                  for($i = 1; $i <= 60; $i++) {
                    $class = '';
                    if($j < 6) {
                      if($i == $data['mega3'][$j]) {
                        $class = 'numero-sorteado';
                        $j++;
                      }
                    }

                    $str .= "<td class='$class'>$i</td>";

                    if($i % 10 == 0) {
                      $str .= "</tr><tr>";
                    }else if($i == 60){
                      $str .= "</tr>";
                    }
                  }

                  echo $str;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>