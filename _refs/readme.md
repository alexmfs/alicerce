```
#!less

.col(@a){
   width: @a * 100%;
}

div{
 .col(1/6);
}

```

# Possível estrutura #

pug -w ./pug/*.pug -o ./www/

```
ui
|_ bower_componentes/
|   |
|   |_ jquery/
|   |_ modernizr/
|   |_ bootstrap/
|   |_ foundation/
|   |_ compass/
|   |_ bouboun/
|
|_ componentes/
|   |    
|   |_ bosons/
|   |    |
|   |    |_ variables.less
|   |    |_ mixins.less
|   |    |_ extends.less
|   |    
|   |_ atoms/
|   |    |
|   |    |_ buttons.less
|   |    |_ buttons.js
|   |    |_ buttons.spec.js
|   |    |_ buttons.md
|   |    |
|   |    |_ input.less
|   |    |_ input.js
|   |    |_ input.spec.js
|   |    |_ input.md
|   |    |
|   |    |_ input-checkbox.less
|   |    |_ input-checkbox.js
|   |    |_ input-checkbox.spec.js
|   |    |_ input-checkbox.md
|   |    |
|   |    |_ input-radio.less
|   |    |_ input-radio.js
|   |    |_ input-radio.spec.js  
|   |    |_ input-radio.md
|   |    |
|   |    |_ label.less
|   |    |_ label.js
|   |    |_ label.spec.js
|   |    |_ label.md
|   |    |
|   |    |_ titles.less
|   |    |_ titles.js
|   |    |_ titles.spec.js
|   |    |_ titles.md
|   |    |
|   |    |_ progressbar.less
|   |    |_ progressbar.js
|   |    |_ progressbar.spec.js
|   |    |_ progressbar.md
|   |
|   |_ molecules/
|   |    |
|   |    |_ forms.less
|   |    |_ forms.js
|   |    |_ forms.spec.js
|   |    |_ forms.md
|   |    |
|   |    |_ alert.less
|   |    |_ alert.js
|   |    |_ alert.spec.js
|   |    |_ alert.md
|   |    |
|   |    |_ menu.less
|   |    |_ menu.js
|   |    |_ menu.spec.js
|   |    |_ menu.md
|   |    |
|   |    |_ loginform.less
|   |    |_ loginform.js
|   |    |_ loginform.spec.js
|   |    |_ loginform.md
|   |    |
|   |    |_ search.less
|   |    |_ search.js
|   |    |_ search.spec.js
|   |    |_ search.md
|   |    |
|   |    |_ product.less
|   |    |_ product.js
|   |    |_ product.spec.js
|   |    |_ product.md
|   |
|   |_ organisms/
|        |
|        |_ header.less
|        |_ header.js
|        |_ header.spec.js
|        |_ header.md
|        |
|        |_ footer.less
|        |_ footer.js
|        |_ footer.spec.js
|        |_ footer.md
|        |
|        |_ sidebar.less
|        |_ sidebar.js
|        |_ sidebar.spec.js
|        |_ sidebar.md
|        |
|        |_ products.less
|        |_ products.js
|        |_ products.spec.js
|        |_ products.md
|
|_ layout/
    |
    |_ exemplo/
    |   |
    |   |_ src/
    |   |   |_ style.css    
    |   |   |_ style.less
    |   |   |_ scripts.js
    |   |   |_ gruntfile.js    
    |   |
    |   |_ dist/
    |       |_ style.css
    |       |_ style.min.css
    |       |_ scripts.min.js     
    |
    |_ site1/
    |   |
    |   |_ src/
    |   |   |_ style.css    
    |   |   |_ style.less
    |   |   |_ scripts.js
    |   |   |_ gruntfile.js
    |   |
    |   |_ blackfriday/
    |   |   |
    |   |   |_ blackfriday.less
    |   |   |_ blackfriday.js
    |   |   |_ gruntfile.js         
    |   |
    |   |_ dist/
    |       |_ style.css
    |       |_ style.min.css
    |       |_ scripts.min.js     
    |
    |_ site2/
        |    
        |_ style.less
        |_ style.css
        |_ style.min.css
        |_ scripts.js
        |_ scripts.min.js
        |_ gruntfile.js      
```

```
// less

@black: #000;


#button(@a) {

  &when ((@a) = style1){
      border: 1px solid transparent;
  }

  &when ((@a) = style2){
      border-left: 5px solid;
  }

}


.button{
  #button(style1);
}

.border(@color: @black){
	border: 1px solid @color;
}



#module {
  .border();
  padding: 10px;
  h3 {
    color: red;
  }
}

.news {
  &:extend(#module all);
}


.posts{
  &:extend(#module all);
}


// css

.button {
  border: 1px solid transparent;
}
#module,
.news,
.posts {
  border: 1px solid #000;
  padding: 10px;
}
#module h3,
.news h3,
.posts h3 {
  color: red;
}

```
