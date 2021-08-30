![Logo Alicerce](https://raw.githubusercontent.com/alexmfs/alicerce/main/dist/_data/logo.png)


# Abstract

É uma biblioteca com objetivo de ajudar a construir interfaces sem que esta interferir no design final

## Dependências
- Npm
- Gulp

## Instalação
Após baixar o projeto, rodar os comandos ```npm i``` e  ```gulp```

## Tecnologias
- Sass
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
src/_core/
src/baseComponents/buttons/
    |
    |_ buttons.scss
    |_ buttons.pug
    |_ buttons.js
    |_ buttons.spec.js
    |_ buttons.md
    |_ buttons.fixtures.json
src/components/
src/views/
```
