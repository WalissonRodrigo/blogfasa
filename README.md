# blogfasa

Blog desenvolvido em **Laravel** para prática do framework.

## Sobre

Sistema de blog com posts, comentários, autenticação de usuários e painel administrativo. Projeto de estudo do ecossistema Laravel com PHP.

## Tecnologias

- PHP
- Laravel
- MySQL
- JavaScript
- Bootstrap

## Configuração

1. Instale as dependências PHP:

```bash
composer install
```

2. Instale as dependências front-end:

```bash
npm install && npm run dev
```

3. Copie `.env.example` para `.env` e configure o banco de dados:

```bash
cp .env.example .env
php artisan key:generate
```

4. Execute as migrations:

```bash
php artisan migrate
```

5. Inicie o servidor:

```bash
php artisan serve
```

## Estrutura

- `app/` — Código-fonte da aplicação.
- `config/` — Configurações do Laravel.
- `database/` — Migrations e seeders.
- `resources/` — Views, assets e localização.
- `routes/` — Definição de rotas.

## Próximos passos

- Atualizar para Laravel mais recente.
- Adicionar testes com PHPUnit.
- Melhorar validações e segurança dos formulários.
