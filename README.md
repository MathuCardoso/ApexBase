# ApexBase

Uma estrutura base para projetos PHP Vanilla, pensada para desenvolvedores que desejam iniciar projetos pessoais sem depender de frameworks robustos.

## Descrição

O **ApexBase** funciona como um mini framework para aplicações PHP puras. A proposta é oferecer uma base enxuta, organizada e fácil de entender, com recursos essenciais para acelerar o desenvolvimento, como roteamento, carregamento de views, helpers e conexão com banco de dados.

> Aviso: este projeto foi criado com foco em **estudo, prototipação e desenvolvimento local**. Ele **não é recomendado para produção**.

## Funcionalidades

- Roteamento simples com suporte a rotas `GET` e `POST`
- Suporte a **path parameters** em rotas, como `/user/{id}`
- Carregamento de views por controller
- Helpers globais para utilidades comuns
- Configuração por variáveis de ambiente com `.env`
- Conexão com banco de dados via `PDO`
- Tratamento básico de erros HTTP (`404`, `500`) e erro de conexão com banco
- Servidor local rápido usando o servidor embutido do PHP via Composer

## Tecnologias utilizadas

- PHP
- HTML
- CSS
- JavaScript
- Composer
- PDO
- `vlucas/phpdotenv`

## Instalação

Clone o repositório:

```bash
git clone <url-do-repositorio>
cd ApexBase
```

Instale as dependências:

```bash
composer install
```

Crie o arquivo de ambiente a partir do exemplo:

```bash
cp .env.example .env
```

No Windows PowerShell, você também pode usar:

```powershell
Copy-Item .env.example .env
```

Depois, preencha as variáveis do arquivo `.env`, principalmente as configurações de banco de dados:

```env
APP_NAME=ApexBase
APP_LANG=pt-BR
APP_DATE_FORMAT=d/m/Y
APP_DEFAULT_TIMEZONE=America/Sao_Paulo
APP_ENV=development

DB_DRIVER=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=seu_banco
DB_USER=root
DB_PASSWORD=
```

## Como usar

Inicie o servidor local com um dos comandos:

```bash
composer serve
```

ou

```bash
composer run serve
```

Por padrão, a aplicação será servida em:

```text
http://localhost:8000
```

### Exemplo de rota

As rotas ficam em `app/routing/routes.php`:

```php
use App\controller\HomeController;
use App\routing\Router;

Router::get('/callable', function () {
	echo 'Callable funcionando!';
});

Router::get('/user/{nome}/{idade}', function ($params) {
	echo "Nome: {$params['nome']}<br>Idade: {$params['idade']}";
});
```

### Exemplo de carregamento de view

Nos controllers, você pode renderizar uma view assim:

```php
public function index(): void
{
    $this->loadView('home');
}
```

## Estrutura do projeto

```text
basePhpProject/
├── composer.json
├── README.md
├── app/
│   ├── controllers/
│   │   └── HomeController.php
│   ├── model/
│   ├── repository/
│   └── service/
├── apx/
│   └── core/
│       ├── database/
│       │   ├── config.php
│       │   └── Connection.php
│       ├── http/
│       │   └── View.php
│       ├── router/
│       │   └── Router.php
│       └── util/
│           └── helpers.php
├── public/
│   ├── index.php
│   ├── css/
│   │   ├── home.css
│   │   └── main.css
│   └── js/
│       └── script.js
├── view/
│   ├── home.php
│   ├── errors/
│   │   ├── 404.php
│   │   ├── 500.php
│   │   └── dbError.php
│   └── layouts/
│       └── html_template/
│           ├── footer.php
│           └── header.php
├── routes/
│   └── web.php
├── storage/
│   └── logs.txt
└── vendor/
```

### Pastas importantes

- `app/controllers`: controllers da aplicação e lógica de roteamento por controller.
- `app/model`: modelos ou classes relacionadas à representação de dados.
- `app/repository`: classes de acesso a dados e abstrações de persistência.
- `app/service`: serviços de domínio e regras de negócio.
- `apx/core/database`: configuração e implementação da conexão com PDO.
- `apx/core/router`: implementação do roteador da aplicação.
- `apx/core/http`: helpers para renderização de views e resposta HTTP.
- `public`: ponto de entrada (`index.php`) e recursos públicos (`css`, `js`).
- `view`: templates, layouts e páginas de erro.
- `routes`: definição das rotas, por exemplo `web.php`.
- `storage`: logs e arquivos gerados em execução.
- `vendor`: dependências gerenciadas pelo Composer.

## Contribuição

Contribuições são bem-vindas. Para colaborar:

1. Faça um fork do projeto
2. Crie uma branch para sua feature ou correção
3. Realize as alterações
4. Execute testes manuais no ambiente local
5. Abra um Pull Request com uma descrição clara

Se a ideia for uma melhoria estrutural, vale abrir uma issue antes para alinhar a proposta.

## Licença

Este projeto ainda **não possui uma licença definida** no repositório. Se você pretende reutilizar ou distribuir este código, o ideal é adicionar uma licença explícita antes.

## Autor

**Matheus Cardoso**  
Desenvolvedor responsável pelo projeto **ApexBase**.
