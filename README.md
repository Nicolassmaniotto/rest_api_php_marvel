# rest_api_php_marvel
 rest api alimentado pela api marvel
 
#Versão do PHP utilizada 8.0.3

<h1> Extensões Utilizadas</h1>
<li>mysqli
<li>curl


<h1> Ações Nescessarias </h1>
Ir ate app_marvel_db/private/senha2.php 
e substituir com as suas chaves do marvel api

Ir ate app_marvel_db/mariadb/connect.php
 <li>alterar os dados de acordo com o seu banco de dados
 <li>conexao pensada em trabalho com SQL, Mariadb

Ir ate api_front/public_html/index.php
  <li>alterar o valor da constante server pelo valor do seu servidor
Ir ate app_marvel_db e iniciar o servidor
   <li>exempolo  'php -S 0.0.0.0:4444'
   <li> apos iniciar o servidor chamar a pagina de criação construtor.php
