# AtaideShoes é um E-commerce feito em Wordpress com Woocommerce

## Descrição
Projeto de uma loja virtual de sapatos utilizando o Wordpress e os plugins WooCommerce e Elementor

### Tema
- Hello Elementor

### Plugins
- Brazilian Markt on WooCommerce
- Elementor (free)
- ElementsKit Lite
- FiboSearch
- Fluid Checkout
- Melhor Envio
- Mercado Pago
- Produtct Filter by WBW
- Really Simple SSL
- ShopEngine
- WooCommerce

## Instalação
### Instalação utilizando o XAMPP

Após instalar o XAMPP acesse o diretório do mesmo localize a pasta htdocs, acesse a pasta e dentro do terminal do GitBash utilize os seguintes comandos:

```bash
  git clone https://github.com/MelquiAtaide/AtaideShoes-E-Commerce-WordPress.git
```
Depois de clonar o repositório, navegue até o diretório clonado:
```bash
  cd AtaideShoes-E-Commerce-WordPress
```

### Configurando o banco de dados
Acesse o Xampp e inicie o Apache e MySQL, crie um banco de dados no PHPMyAdmin.

Crie um arquivo de configuração do WordPress a partir do arquivo de exemplo:
```bash
  cp wp-config-sample.php wp-config.php
```

Edite o arquivo wp-config.php para configurar a conexão com o banco de dados. Atualize as seguintes linhas com as informações do seu banco de dados:

```php
  define('DB_NAME', 'nome_do_banco_de_dados');
  define('DB_USER', 'usuario_do_banco_de_dados');
  define('DB_PASSWORD', 'senha_do_banco_de_dados');
  define('DB_HOST', 'localhost');
```

### Finalizando a Instalação

Acesse o seu navegador e vá até a URL onde adicione: http://localhost/nome-do-repositorio.

============X============
