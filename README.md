# Formulário - Inscrição Curso Técnico

Este projeto é um sistema de inscrição de cursos técnicos. Ele permite que os usuários preencham um formulário com informações pessoais e escolham um curso para se inscrever. As informações são salvas em um arquivo de texto para registro, e o projeto inclui um botão para visualizar a lista de inscrições.

## Funcionalidades

- Formulário de inscrição com campos para:
  - Nome
  - Telefone
  - Curso
  - Opções adicionais (prova ampliada, acesso mínimo, etc.)
  - Pergunta sobre experiência de trabalho na área
- Salvamento das inscrições em arquivos de texto específicos para cada curso.
- Exibição de mensagens de confirmação e validação de dados.
- Botão para acessar a lista de inscrições salvas.

## Tecnologias Utilizadas

- **HTML**: para estruturar a página.
- **CSS**: para estilização e layout.
- **PHP**: para processar os dados do formulário e salvar em arquivos.
- **JavaScript**: para funcionalidade do botão de acesso à lista.

## Estrutura do Projeto

- `index.html`: Página principal com o formulário de inscrição.
- `Prova.php`: Script para processar o envio do formulário, salvar os dados e exibir uma mensagem de confirmação.
- `lista-inscricoes.php`: (opcional) Página para listar as inscrições salvas.
- `styles-formulario.css`: Arquivo de estilo para a formatação e layout do formulário.
- `/imagem`: Pasta para armazenar imagens usadas no projeto.

## Como Usar

1. Clone este repositório.
   ```bash
   git clone https://github.com/usuario/formulario-inscricao-curso-tecnico.git
2. Abra o projeto em seu servidor local (por exemplo, usando o XAMPP ou WAMP).
3. Navegue até index.html para acessar o formulário.
4. Preencha os campos e clique em "Enviar" para salvar as informações.
5. Clique em "Ver Lista de Inscrições" para visualizar as inscrições salvas.

   
Funcionalidades Futuros
Armazenamento em banco de dados (como MySQL) para melhor organização e pesquisa.
Tela de listagem com opções de filtragem e busca.
Recursos de autenticação para proteger o acesso às listas de inscrições.

# 
Este `README.md` inclui uma visão geral do projeto, lista de funcionalidades, tecnologias usadas, instruções para uso e possíveis melhorias.
