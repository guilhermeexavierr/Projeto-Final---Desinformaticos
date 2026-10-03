Projeto final para a disciplina de Desenvolvimento Web. Trata-se de uma loja virtual básica com exibição de produtos e envio de pedidos via formulário.

## Tecnologias
- HTML5
- CSS3
- JavaScript
- PHP

## Páginas e Arquivos

- `index.html`: Página inicial com a apresentação da loja.
- `produtos.html`: Catálogo com a listagem dos produtos.
- `produto01.html` a `produto04.html`: Páginas de detalhes com especificações e formulário de compra.
- `processa.php`: Recebe os dados do formulário via POST e gera o comprovante.
- `css/style.css`: Estilos gerais da aplicação.
- `js/script.js`: Script com alerta de confirmação do pedido.

## Como Executar
Como o projeto utiliza PHP para processar o formulário, execute em um servidor local:
1. Abra o terminal na pasta do projeto.
2. Inicie o servidor interno do PHP:
   ```bash
   
   php -S localhost:8000
