# DOCUMENTAÇÃO PARA OS FRONTEND'S

Essa é uma documentação voltada a desenvolvedores frontend que queiram contribuir com o projeto.

### Clonando Repositorio
---
    git clone https://github.com/JuanPietro14/DownTube.frontend.git

Após clonar o repositorio é necessario que você entre dentro da pasta ***/webapp***

### Iniciando aplicação
----

    php artisan serve


acesse em: http://localhost:8000

Para todos os comandos seguintes você deve está na pasta / do projeto.

### Acessando pasta do CSS/JS/IMAGES
---
    cd public

### Acessando pasta do HTML
---
    cd resource/views

---
A inclusão do CSS/JS/IMAGES no nosso html é feita da seguinte maneira:

```html
<img class="yt" src="{{asset('images/yt.png')}}" alt="">

<!-- substitua o valor do asset, pela pasta e o arquivo desejado. -->

```

