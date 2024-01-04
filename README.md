
# Projeto MVC-PHP com Hydrahon ORM

## Visão Geral
Este é um projeto PHP baseado no padrão de arquitetura MVC (Model-View-Controller) que utiliza a ORM Hydrahon versão 1.1 para interação com um banco de dados MySQL. O banco de dados foi nomeado como "mvc-php" e contém uma tabela chamada "usuarios" com os campos id, nome e email. O objetivo principal do projeto é realizar operações CRUD (Create, Read, Update, Delete) na tabela de usuários.

## Requisitos
Certifique-se de ter os seguintes requisitos instalados em seu ambiente de desenvolvimento:

- PHP (versão recomendada: 7.0 ou superior)
- MySQL
- Composer
### Instalação
1. Clone o repositório:
```
git clone https://github.com/seu-usuario/seu-projeto.git
```
2. Instale as dependências usando o Composer:
```
composer install
```
3. Configure o banco de dados 

### Uso
O projeto segue a estrutura MVC padrão:

- Model: Localizado em src/models, contém a lógica de interação com o banco de dados usando a Hydrahon ORM.
- View: Localizado em src/views, contém as visualizações que serão renderizadas para o usuário.
- Controller: Localizado em src/controllers, controla a lógica da aplicação, chamando métodos no modelo e renderizando as visualizações.
Para realizar operações CRUD na tabela de usuários, você pode acessar a url padrão:

http://localhost/

Contribuição
Sinta-se à vontade para contribuir, abrir issues ou fornecer sugestões para melhorar este projeto. Seja respeitoso e siga as diretrizes de contribuição.