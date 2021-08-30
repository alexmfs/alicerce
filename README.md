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
- [Design Agnóstico](http://bradfrost.com/blog/post/managing-technology-agnostic-design-systems/)
- [Único Design System para diversas marcas diferentes](http://bradfrost.com/blog/post/creating-themeable-design-systems/)
- [Componenentes inclusivos](https://inclusive-components.design/)
- [Zen Garden](http://www.csszengarden.com/)
- [Mantenha os arquivos de um componente no mesmo lugar](https://medium.com/tableless/8-regras-simples-para-uma-arquitetura-css-robusta-e-escal%C3%A1vel-545c6dade170#ea98)
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

# PostCss - Plugins para testar

## Variáveis nativas em media querie
https://github.com/postcss/postcss-custom-media

## Media querie inline
https://github.com/arccoza/postcss-if-media
npm install postcss-if-media --save

## Atalho para focus, hover, active
https://github.com/kilian/postcss-hocus

## @apply
https://github.com/pascalduez/postcss-apply

## Novas fucnionalidades css nativas
https://github.com/csstools/postcss-preset-env