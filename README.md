# Teste full-stack EllosDesign

## Documentação do projeto

### Tecnologias usadas

- HTML - Estruturação da Página
- [SASS](https://sass-lang.com/) - Para pré-processamento do CSS
- JS - Para criação de scripts para a página
- PHP - Para criação da API do back-end
- MySQL - Banco de dados

### Link do projeto ao vivo:

https://teste-frontend-developer-production.up.railway.app/

- _OBS_.: O link para visualisar o projeto ao vivo serve apenas para a página estática, se desejar testar a API e verificar se o formulário está enviando as informações para o banco de dados, será necessário rodar o mesmo localmente na sua máquina.

### Requisitos necessário para rodar o projeto localmente

1. Recomenda-se o uso do XAMPP como servidor local pois seu instalador já possui o MySQL para rodar a API. Para fazer o download clique [aqui](https://www.apachefriends.org/pt_br/index.html).
2. (NÂO OBRIGATÓRIO) Caso seja tenha desejo em alterar algum CSS da página, será necessário ter o SASS instalado na sua máquina para poder compilar os estilos SCSS em arquivos CSS. Para instala-lo basta seguir as instruções do site oficial da biblioteca clicando [aqui](https://sass-lang.com/install).

### Como rodar o projeto

1. Primeiramente faça o clone do repositório no diretório "/htdocs" localizado na pasta raiz do XAMPP utilizando o comando:

```sh
    git clone https://github.com/guilhermehelton/teste-frontend-developer.git
```

- Também é possível clonar em qualquer outra pasta do seu computador, basta alterar a pasta que o XAMPP irá servir. Clique [aqui](https://www.servti.com/2019/01/08/como-alterar-pasta-padrao-htdocs-do-xampp/) para ler o tutorial de como fazer isso.

2. Inicie o serviço "APACHE" e o "MySQL" no XAMPP.
3. Acesse o phpmyadmin e crie um banco de dados com o nome "_api_" se você já possuir um banco criado basta alterar o valor da constante "\_DB_NAME" para o nome do seu banco de dados já existente
4. E importe o arquivo "clientes.sql" localizado em ./api/clientes.sql.
5. Com isso o projeto já está configurando e pronto para ser acessado.

### Features

- Integração com a API criada, para cadastrar as mensagens no banco de dados
- Animações utilizando a biblioteca ScollReveal
- Uso de SASS como pré-processador CSS
