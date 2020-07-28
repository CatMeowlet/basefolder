# Get Started

This is a modified version of this repo https://github.com/hiloki/flocss/blob/master/README_eng.md

Requirement :octocat:
+ Node JS ver. 8.15.0
+ Yarn

Setting File 
+ __Gulp__
  + gulp/**.js - gulp location for the tasks.
  + gulp/config - configuration for gulp tasks.
  
Basic 
+ Target "__/src__".
+ Type "__yarn install__"  (Only execute once).
+ After "__yarn install__" execute build "__yarn build__" (Only execute once).
+ After build execute "__yarn start__" to watch live changes.
  + Set the proxy of src/gulp/config/server.js and start the browser Detect. *Might need rebuilding
+ If you don't use live watch "__yarn watch__".

CSS

For css we use sass to compile. 

+ "__src/pc__" - this is where PC view css located.
+ "__src/pc/css/core__" - this is where mixins , root and variable located.
+ "__src/pc/css/layout__" - this is where container , header , main , and footer located.
+ "__src/pc/css/object__" - this is where component , project , and utility located.
  + "__./component__" - this is for repepetive small style like button.
  + "__./project__" - this is where small elements that makes up your current page like img slider.
  + "__./utility__" - this is where your utility located.
+ "__src/pc/page__" - this is for pages like home. To use the component you can just do shown below.
  ```scss
  @import "../core/**/*";
  ```
+ "__src/pc/css/style__" - a compilation of the components.
  ```scss
  @import "core/**/*";
  @import "layout/**/*";
  // @import "object/**/**/*;
  @import "object/component/**/*";
  @import "object/project/**/*";
  @import "object/utility/**/*";
  ```
# Coding Rule
   ```scss
   // to maximize productivity use class name that start to their corresponding file location for easy navigation
   // c-* , p-*, u-*,l-*; object/component , project ,  utility,  and layout.
   // ex.
   
       l-container{ … };
       
       c-card{ … }; // *recommend: to specify the basic attribute of a class here and put the rest into variation
       
       p-galleryShowcase{ … };
      
       u-fontSize{ … };
      
  ```
 HTML : 
    
  ```HTML
     // creating a varation and creating a nested class
     // variation must be indicated by " -- " and nested class must be " __ ". 
     // *to avoid long name for class  "__"
     // name it if it's a component relates to parent.
     
      <div class="c-card01 c-card01--l"> 
        <div class="c-card01__text--title ">...</div>
        <div class="c-card01__text--desc "> ... </div>
        <div class="c-card01__btnMenu">
          <a class="c-btn01 c-btn01--l"> ... </a>
        </div>
      </div>  
  ```
 SCSS:
    
   ```scss
   // Base
    c-card01{
   // Variation apply for like color and size
      &--xl{ … }// this variation is extra large
      &--l{ … }  // this variation is large
   // __ component of card
      &__text{
        &--title{ … }
        &--desc{ … }
      }
      &__btnMenu{ … } // c-btn01 must not be edited inside here only the size of the btnMenu
    }// ./end of card01
    
    
 ```
  
 # Additional Info
  + When creating a sass file use the naming " _file.scss ".
  + __component__ can be edited in __project__ and __page__ , __project__ to __page__ but not the other way around.
  
  
  
  
  
  
  
  
  
  
  
  
  
  
