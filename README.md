# Abstract

É uma biblioteca com objetivo de ajudar a construir interfaces sem que esta interferir no design final

## Dependências
- Npm
- Grunt

## Instalação
Após baixar o projeto, rodar os comandos ```npm install``` e  ```grunt compile```

## Tecnologias
- Less
- PostCss
- Pug

## Conceitos
- [Design Atômico](http://bradfrost.com/blog/post/atomic-web-design/)
- [Componenentes inclusivos](https://inclusive-components.design/)
- [Design Agnóstico](http://bradfrost.com/blog/post/managing-technology-agnostic-design-systems/)
- [Zen Garden](http://www.csszengarden.com/)
- [Design System customizado para cada cliente](http://bradfrost.com/blog/post/creating-themeable-design-systems/)
- [Padrões de exibição de conteúdo](http://v3.danielmall.com/articles/content-display-patterns/) 

## Organização de arquivos
Todos os arquivos de componentes ficam juntos, usando o mesmo nome, mudando apenas a extensão conforme cada caso
```
ui _ atoms/
    |
    |_ buttons.less
    |_ buttons.pug
    |_ buttons.js
    |_ buttons.spec.js
    |_ buttons.md
    |_ buttons.fixtures.json
```    

## Deploy
Criar um arquivo .ftpconfig na raiz do projeto
```
{
  "key1": {
    "username": "",
    "password": ""
  }
}
```
