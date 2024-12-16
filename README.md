<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

ligue o apache e o mysql no xamp
crie um banco com nome->todo_list

1-clone o projeto
2-abra o projeto em seu editor de texto,copie o texto excrito em '.env.exemple.', crie um arquivo com o nome -> '.env' e cole
3-na raiz  do projeto,rode o comando -> composer install
4-rode o comando -> php artisan migrate, para criar as tabelas
5-rode o comando -> php artisan serve para iniciar.

instale o postman para testar as rotas
https://www.postman.com/downloads/




TODO LIST - Laravel

Desafio 1
Criar uma lista (FEITO)
Compartilhar uma lista (FEITO)
Deletar uma lista (FEITO)
Adicionar tarefas na lista (FEITO)
Concluir tarefas na lista (FEITO)
Remover uma tarefa (FEITO)
Somente pessoas autorizadas poderão cadastrar outros usuarios (NÃO FEITO)


como usar?

1- crie um usuario (post)
        localhoost/api/criarUsuario (nome_usuario
                                     senha_usuario|required|min:8|
                                     cargo)


2-crie uma lista (post)
        localhoost/api/criar (fk_usuario,
                              nome_lista)


3-crie uma tarefa (post) 
        localhoost/api/criarTarefa (id_lista,
                                    nome_tarefa)


4-concluir tarefa (patch)
        localhoost/api/concluir/{id_tarefa}


5-deletar tarefa (delete)
        localhoost/api/deletarTarefa/{id_tarefa}



6-deletar lista(delete)
        localhoost/api/deletar/{id_lista}


7-compartilhar lista (post)
        localhoost/api/compartilhar
                                (id_send_usuario,
                                 id_lista,
                                    id_receiver_usuario)

8-Vizualizar suas lista (get)
        localhoost/api/verLista/{id_usuario}
