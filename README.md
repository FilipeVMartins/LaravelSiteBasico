# INTRO

Website feito com Laravel 6.7, contendo um sistema simples de recebimento de mensagens enviadas por visitantes através de formulário com post method e visualização e exclusão das mesmas com autenticação de login pelo administrador do site.


# ESTRUTURA (MVC)


## MODELS (utilizado 1 DB MySQL e 2 tabelas).

* app\User - acessa a tabela 'users' contendo as colunas padrões do laravel ui authentication.

* app\Message - acessa a tabela 'messages' contendo: chave primária, nome, email, mensagem enviada, data de criação e data de modificação.

* database\migrations (duas utilizadas)

  * CreateUsersTable - migration padrão do laravel authentication para criar a tabela 'users'.

  * CreateMessagesTable - migration para criação da tabela 'messages' que armazenará as mensagens recebidas dos visitantes.
  

## VIEWS

* resources\views\auth - pasta contendo os templates padrões do laravel ui authentication.

* resources\views\inc - pasta contendo os layouts de inclusões condicionais a serem feitas no layout principal.

  * inc\messages - layout das mensagens de confirmações/erros/alertas enviadas aos usuários do site (adm e visitantes).

  * inc\navbar - layout da barra de navegação para ser exibida em todas as views.

  * inc\showcase - layout do showcase para ser exibido na view 'home'.

  * inc\sidebar - layout da sidebar de exemplo.

  * resources\views\layouts (layouts principais 1)

    * app - layout principal de todo o domínio da aplicação.

  * resources\views\about - template da view onde será apresentado melhor sobre.

  * resources\views\contact - template da view onde o visitante poderá deixar uma mensagem para o admnistrador.

  * resources\views\home - template da view inicial do domínio da aplicação.

  * resources\views\messages - template da view onde o admnistrador poderá visualizar as mensagens recebidas pela aplicação e excluí-las, autenticação necessária para acesso.
  
        
## CONTROLLERS

* app\Http\Controllers\Auth - Pasta contendo os controllers padrões do laravel ui authentication.

* app\Http\Controllers\MessagesControler - Controller responsável pelos métodos de requisição de inserção e exclusão de registros na tabela 'messages' ao model 'Message', também é responsável pelo método que retorna à rota da view 'messages' todos os registros contidos na tabela 'messages' do model 'Message'.

* app\Http\Controllers\pagesController - Controller responsável pelos métodos de controle das rotas.


## ROUTES (usadas apenas 'routes\web', no próprio arquivo encontram-se descrições para cada uma)
