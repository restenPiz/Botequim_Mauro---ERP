<h1>Sistema de Gestao do Restaurante e Bar Mauro - Mossurize</h1>

<p>Este e um criado para resolver os problemas na area de stock, vendas e relatorios do restaurante. O sistema traz consigo uma diversa gama de solucoes permitindo a resolucao desses problemas, mais tambem trazendo alguns componentes novos como:</p>

<ul>
  <li>Integracao com um <br>QR MENU<br></li>
  <li>Controle de Acesso, permitindo o gerenciamento de todos os usuarios do sistema</li>
</ul>

<h3>Passos para rodar o projecto:</h3>

<ul>
  <li>Passo 1: Clonar/Baixar o projecto</li>
  <li>Passo 2: Criar um banco de dados com o seguinte nome: erp-botequim-mauro</li>
  <li>Passo 3: Abrir o seu editor de texto e se dirigir ao terminal: <b>composer update</b></li>
  <li>Passo 4: <b>php artisan key:generate</b></li>
  <li>Passo 5: <b>php artisan optimize:clear</b></li>
  <li>Passo 6: <b>php artisan config:cache</b></li>
  <li>Passo 7: <b>php artisan migrate</b></li>
  <li>Passo 7: <b>php artisan db:seed</b></li>
</ul>

<p>NB: <b>Apos digitar esses comandos, deves olhar e perceber se tem um ficheiro .Env criado. Caso nao tenha deves criar e copiar o conteudo que esta no ficheiro .ENV.Example e colar no >ENV</b></p>
