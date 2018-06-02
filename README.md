# kdAstro

Simples cadastro de Pessoa Física e de outros dados.

## Início rápido

Certifique-se de que o <strong>git</strong>, <strong>composer</strong> e o <strong>php</strong> (Versão 7) estão instalados em sua máquina e funcionam corretamente na linha de comando. Se tudo estiver certo, prossiga da seguinte forma em sua linha de comando:

### Links para download
<ul>
	<li><a href="https://git-scm.com/" target="_blank">git</a></li>
	<li><a href="https://getcomposer.org/download/" target="_blank">composer</a></li>
	<li><a href="https://secure.php.net/downloads.php" target="_blank">php</a></li>
</ul>

<strong>Abra o terminal e faça a mágica acontecer:</strong>
<pre>
git clone https://github.com/gabrielrufino/kdAstro
cd kdAstro
composer install
php -S localhost:3000 -t public
</pre>

Você já pode acessar http://localhost:3000 em seu navegador e ver uma prévia do sistema. Mas <strong>precisamos ir mais além</strong>. Para que os cadastros sejam registrados, é necessário configurar o banco de dados.

## Configurando o banco de dados

A versão do <strong>MySQL</strong> usada é a <strong>5.7</strong>.

### Hora de iniciar o MySQL

Lorem Ipsum

### DATABASE_URL
Um dos arquivos gerados após a instalação das dependências é o <pre>.env</pre> em seu diretório principal. Acesse-o e configure o linha que define o <pre>DATABASE_URL</pre> da seguinte forma:

<pre>
# ...
DATABASE_URL=mysql://user:pass@127.0.0.1:3306/kdastro
# ...
</pre>

De forma que <strong>user</strong> é o seu usuário do MySQL e <strong>pass</strong> é a senha de acesso.

### Criando nosso banco de dados


Execute o comando:
<pre>
php bin/console doctrine:database:create
</pre>

### Iniciando a tabela cadastros

Execute o comando:
<pre>
php bin/console doctrine:migrations:migrate
</pre>

