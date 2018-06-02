# kdAstro

Simples cadastro de Pessoa Física e de outros dados.

## Início rápido

Certifique-se de que o <strong>git</strong>, <strong>composer</strong> e o <strong>php</strong> (Versão 7) estão instalados em sua máquina e funcionam corretamente na linha de comando. Se tudo estiver certo, prossiga da seguinte forma em sua linha de comando:

<strong>Execute: </strong>
<pre>
git clone https://github.com/gabrielrufino/kdAstro
cd kdAstro
composer install
php -S localhost:3000 -t public
</pre>

### Links para download
<ul>
	<li><a href="https://git-scm.com/">git</a></li>
	<li><a href="https://getcomposer.org/download/">composer</a></li>
	<li><a href="https://secure.php.net/downloads.php">php</a></li>
</ul>


Você já pode acessar http://localhost:3000 em seu navegador e visualizar uma prévia do sistema. Mas <strong>precisamos ir mais além</strong>. Para que os cadastros sejam registrados, é necessário configurar o nosso banco de dados.

## Configurando o banco de dados

Usaremos o banco de dados <strong>MySQL</strong> em sua versão <strong>5.7</strong>. Uma das formas mais fáceis e rápidas de instalar e inicializar o MySQL é usando sistemas como <strong>MySQL</strong> ou <strong>XAMPP</strong>, que integram o mesmo com outras ferramentas. Mas, também é possível instalar o MySQL de forma isolada. Uma boa pesquisa resolve rapidinho ;)

### Inicie o serviço

Antes de tudo, é essencial que você tenha o servidor do MySQL inicializado corretamente, para que possamos armazenar nossos cadastros de forma efetiva.

### DATABASE_URL

Um dos arquivos gerados após a instalação das dependências é o <code>.env</code> em seu diretório principal, arquivo responsável por registrar nossas variáveis de ambiente. Acesse-o e configure a variável que define o <code>DATABASE_URL</code> da seguinte forma:

<strong>Edite:</strong>
<pre>
# .env
# ...
DATABASE_URL=mysql://user:pass@127.0.0.1:3306/kdastro
# ...
</pre>

De forma que <strong>user</strong> é o seu usuário do MySQL e <strong>pass</strong> é a senha de acesso.

### Criando nosso banco de dados

Estamos em um ponto em que o MySQL já está a postos para trabalhar, já apontamos para o servidor em que nossa aplicação irá se conectar. <strong>Precisamos apertar o gatilho e criar nosso banco de dados</strong>. É fácil!

<strong>Execute:</strong>
<pre>
php bin/console doctrine:database:create
</pre>

### Hora de criar nossa tabela

O banco de dados instanciado por si só não é suficiente, precisamos criar uma tabela que agregue todos os nossos cadastros.

<strong>Execute:</strong>
<pre>
php bin/console doctrine:migrations:migrate
</pre>

Esse comando faz com que nossa idealização da tabela no projeto seja efetivamente construída como planejamos.


## kdAstro pronto!

<strong>Execute:</strong>
<pre>
php -S localhost:3000 -t public
</pre>

A partir de agora, podemos acessar http://localhost:3000 e testar de forma completa a aplicação construída principalmente em <strong>Symfony4 + MySQL + Bootstrap</strong>.
 