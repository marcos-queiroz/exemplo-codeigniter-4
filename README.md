# CodeIgniter 4 Application Starter

## O que é CodeIgniter?

O CodeIgniter é um Frameword PHP completo, leve, rápida, flexível e seguro. 
Mais informações podem ser encontradas no [site oficial](http://codeigniter.com).

## Testando a Aplicação

Baixe o projeto ou clone em um diretório de sua preferência.

Após o termiar de baixar, execute o comando `composer update` no diretorio criado para atualizar os repositorios do projeto.

Você pode utilizar o servidor de testes do próprio CodeIgniter utilizando o comando `php spark serve`, mas se preferir, pode ser usado algum servidor Web, como o Apache, ISS etc. 


**Lembrando que o host deve ser apostado para o diretório '/public' da aplicação**

Mais detalhes na [documentação oficial](https://codeigniter4.github.io/userguide/).


## Setup

Copie o arquivo `env` para `.env` e personalizar seu aplicativo, especificamente a baseURL
e quaisquer configurações do banco de dados.

## Important Change with index.php

O `index.php` não está mais na raiz do projeto! Foi movido para dentro da pasta * public *,
para melhor segurança e separação de componentes.

Isso significa que você deve configurar seu servidor da Web para "apontar" para a pasta * public * do seu projeto e
não para a raiz do projeto. Uma prática melhor seria configurar um host virtual para apontar para lá. Uma prática ruim seria apontar o servidor da Web para a raiz do projeto e esperar inserir * public /...*, como o restante de sua lógica e
estrutura são expostos.

## Base de Dados

Use o script para criar a base de dados que é utilizada no projeto.

`CREATE TABLE news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        body text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);`

Insira algumas notícias para demonstrar o funcionamento.

`
INSERT INTO news VALUES
(1,'Elvis sighted','elvis-sighted','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2,'Say it isn\'t so!','say-it-isnt-so','Scientists conclude that some programmers have a sense of humor.'),
(3,'Caffeination, Yes!','caffeination-yes','World\'s largest coffee shop open onsite nested coffee shop for staff only.');
`

No arquivo `.env` descomente os campos e insira as informações de conexão do seu Banco de dados

`database.default.hostname = localhost`

`database.default.database = ci4tutorial`

`database.default.username = root`

`database.default.password = `

`database.default.DBDriver = MySQLi`

## Mode de debug

Você também pode ativar o mode de depuração de erros no mesmo arquivo `.env`, basta alterar a linha `# CI_ENVIRONMENT = production` para `CI_ENVIRONMENT = development`


## Teste

Agora se tudo estiver correto, basta acessar a URL: http://localhost:8080/ e será exibido um belo `Hello Word!`, na página temos uma NavBar com os links disponíveis.