<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}
?>
 

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projetos</title>
    <link rel="stylesheet" href="components/styles/style.css" />
  </head>
  <body>
    <header>
      <div>
        <a href="../../index.html">
            <img src="../../assets/icons8-lista-100.png" alt="">
            <h1 class="linear">PhList</h1>
        </a>
      </div>
      <nav>
        <ul>
        <?php echo htmlspecialchars($_SESSION["username"]); ?>
          <a href="../login/reset-password.php">
            <li>Redefinir senha</li>
          </a>
          <a href="../login/logout.php">
            <li>Sair</li>
          </a>
        </ul>
      </nav>
    </header>
    <main>
      <section class="projetos" id="projetos">
        <h2 class="heading">Nossos <span>Projetos</span></h2>
        <div class="projetos-container">
          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Projeto 1</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque
                quibusdam quod at asperiores, esse ad veniam soluta sapiente
                corrupti, dolor perspiciatis nisi harum ducimus. Placeat non
                aspernatur molestiae adipisci delectus!
              </p>
              <a href="#"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Projeto 2</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque
                quibusdam quod at asperiores, esse ad veniam soluta sapiente
                corrupti, dolor perspiciatis nisi harum ducimus. Placeat non
                aspernatur molestiae adipisci delectus!
              </p>
              <a href="#"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Projeto 3</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque
                quibusdam quod at asperiores, esse ad veniam soluta sapiente
                corrupti, dolor perspiciatis nisi harum ducimus. Placeat non
                aspernatur molestiae adipisci delectus!
              </p>
              <a href="#"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Projeto 4</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque
                quibusdam quod at asperiores, esse ad veniam soluta sapiente
                corrupti, dolor perspiciatis nisi harum ducimus. Placeat non
                aspernatur molestiae adipisci delectus!
              </p>
              <a href="#"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Projeto 5</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque
                quibusdam quod at asperiores, esse ad veniam soluta sapiente
                corrupti, dolor perspiciatis nisi harum ducimus. Placeat non
                aspernatur molestiae adipisci delectus!
              </p>
              <a href="#"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Projeto 6</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque
                quibusdam quod at asperiores, esse ad veniam soluta sapiente
                corrupti, dolor perspiciatis nisi harum ducimus. Placeat non
                aspernatur molestiae adipisci delectus!
              </p>
              <a href="#"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>
        </div>
      </section>

      <div class="messageBox" id="messageBox">
                <div class="txtsBoxSpam">
                    <img src="assets/icons8-github-48.png" alt="GitHubIcon">
                    <h2>GitHub</h2>
                </div>
                <div class="perfilGit" id="perfilGit">

                    <div onmouseenter="fetchGitHubReadme('thepokenik', 'thepokenik')" id="judeuRepos">
                        <a href="https://github.com/thepokenik" target="_blank">
                            <img src="assets/judas.png" alt="">
                            <span>Nikolas Melo</span>
                        </a>
                    </div>

                    <div id="ryanRepos">
                        <a onmouseenter="fetchGitHubReadme('RyanGustavoGoncalves', 'RyanGustavoGoncalves')" href="https://github.com/RyanGustavoGoncalves" target="_blank">
                            <img src="assets/SP-Studio.png" alt="">
                            <span>Ryan Gonçalves</span>
                        </a>
                    </div>

                    <div id="bigodeRepos">
                        <a onmouseenter="fetchGitHubReadme('lonelykkj', 'lonelykkj')" href="https://github.com/lonelykkj" target="_blank">
                            <img src="assets/bigode.png" alt="">
                            <span>Heitor Morales</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="messageBoxLkd" id="messageBoxLkd">
                <div class="txtsBoxSpamLkd">
                    <img src="assets/icons8-linkedin-50.png" alt="GitHubIcon">
                    <h2>Linkedin</h2>
                </div>
                
                <div class="perfilGit" id="perfilGit">

                    <div onmouseenter="fetchGitHubReadme('thepokenik', 'thepokenik')" id="judeuRepos">
                        <a href="https://github.com/thepokenik" target="_blank"> 
                            <img src="assets/judas.png" alt="">
                            <span>Nikolas Melo</span>
                        </a>
                    </div>

                    <div id="ryanRepos">
                        <a onmouseenter="fetchGitHubReadme('RyanGustavoGoncalves', 'RyanGustavoGoncalves')" href="www.linkedin.com/in/ryan-gustavo-97275226b" target="_blank">
                            <img src="assets/SP-Studio.png" alt="">
                            <span>Ryan Gonçalves</span>
                        </a>
                    </div>

                    <div id="bigodeRepos">
                        <a onmouseenter="fetchGitHubReadme('lonelykkj', 'lonelykkj')" href="https://github.com/lonelykkj" target="_blank">
                            <img src="assets/bigode.png" alt="">
                            <span>Heitor Morales</span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="modal"></div>
    </main>
    <footer>
      <div class="logoEtec">
        <img src="assets/logo-etec.png" alt="etecIlzaPintus" />
      </div>
      <div>
        <h2>Projeto Programação Web ®</h2>
        <br />
        <span>Profº Claudinei</span>
      </div>
      <div class="footerInf">
        <ul>
          <a href="../sobre/sobre.html" target="_blank">
            <li>Sobre o projeto</li>
          </a>
          <br />
          <a href="https://www.etecsjcampos.com.br" target="_blank">
            <li>Nossa instituição</li>
          </a>
        </ul>
      </div>
      <div class="footerSoc">
        <ul>
          <li onclick="showMessageModal(true, messageBox)" class="gitHub">
            GitHub
          </li>
          <li onclick="showMessageModal(true, messageBoxLkd)">Linkedin</li>
        </ul>
      </div>
    </footer>
    <script src="components/scripts/script.js"></script>
  </body>
</html>