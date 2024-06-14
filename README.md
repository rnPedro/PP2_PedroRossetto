

```markdown
# Projeto de Programação para Internet

Este repositório contém um projeto desenvolvido em PHP para a disciplina de Programação para Internet. O projeto inclui funcionalidades para receber e listar mensagens de contato utilizando um banco de dados MySQL.

## Visão Geral

O projeto consiste em uma página web que:
1. Recebe mensagens de contato através de um formulário.
2. Armazena as mensagens em um banco de dados MySQL.
3. Exibe as mensagens armazenadas em uma tabela na página web.

## Estrutura do Projeto

- `paginaDados.php`: Script principal que exibe as mensagens recebidas e armazenadas no banco de dados.
- `header.php`: Inclui o cabeçalho da página (não fornecido, mas mencionado no código).
- `CSS/mensagem.css`: Arquivo CSS para estilização da página.
- `dados.php`: Script para conexão com o banco de dados (não fornecido, mas mencionado no código).
- `index.php`: Página principal do site (link fornecido no código).

## Pré-requisitos

Antes de começar, certifique-se de ter o seguinte instalado:

- [PHP](https://www.php.net/downloads)
- [MySQL](https://dev.mysql.com/downloads/mysql/)
- Servidor web (ex. [Apache](https://httpd.apache.org/download.cgi))

## Instalação

1. Clone este repositório para sua máquina local.
   ```sh
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```

2. Configure o banco de dados MySQL.
   - Crie um banco de dados.
   - Crie uma tabela `form` com as colunas `cpf`, `nome`, e `assunto`.

3. Atualize as configurações de conexão no arquivo `dados.php` com suas credenciais do banco de dados.

4. Execute o servidor PHP.
   ```sh
   php -S localhost:8000
   ```

5. Abra seu navegador e acesse `http://localhost:8000/paginaDados.php`.

## Uso

- Envie uma mensagem através do formulário de contato.
- Acesse a página `paginaDados.php` para visualizar as mensagens recebidas.

## Contribuição

Se você quiser contribuir com o projeto, sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

## Autor

- [Pedro Henrique](https://github.com/rnPedro)
```

