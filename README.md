# The Waifu Calculator 

![the waifu calculator](https://i.imgur.com/Fqyawnp.png)

**Waifu Calculator es una calculadora muy bacana
en esta calculadora se pueden realizar las 4 operaciones
matematicas.**

- Sumar 
* Restar
* Multiplicar 
+ Dividir

Esta calculadora esta realiza con las tecnologias actuales

- **HTML5**
* **CCS3**
* **Bootstrap 5.3**
* **JS ES6**
+ **JQuery 3.7** 

**Interactiva con el usuario**
No solo realiza las operaciones descritas tambien 
cuenta con unos espectaculares sonidos en los botones
el cual te hara dejar de usar tu calculadora del dia.

**Funciones Principales**

*this is the function to evalue two values*
```
//make the operation
function op(){
    $('.result input').val( eval( $('.result input').val() )  );
}
```

*function clear*
```
//clear the result
$(document).ready( ()=>{

    $('#btnClear').click( ()=>{
        $('.result input').val('0')
      })

} )
```
** main operators buttons sounds **

*function division*
```
/// DIV ///
$(document).ready( ()=>{
//make the var and create element audio
let div= document.createElement('audio');
//add a attribute with the sound
div.setAttribute('src', './sound/buttonOp.mp3');

//create a event listener
div.addEventListener('ended', ()=>{
 this.play();
}, false);

//if is cliked the event will be start
$('#div').click( ()=>{
div.play();
} )

});
```

*multiplicate*
```
$(document).ready( ()=>{
//make the var and create element audio
let multi= document.createElement('audio');
//add a attribute with the sound
multi.setAttribute('src', './sound/buttonOp.mp3');

//create a event listener
multi.addEventListener('ended', ()=>{
 this.play();
}, false);

//if is cliked the event will be start
$('#multi').click( ()=>{
multi.play();
} )

});
```

*rest*
```
$(document).ready( ()=>{
//make the var and create element audio
let rest= document.createElement('audio');
//add a attribute with the sound
rest.setAttribute('src', './sound/buttonOp.mp3');

//create a event listener
rest.addEventListener('ended', ()=>{
 this.play();
}, false);

//if is cliked the event will be start
$('#rest').click( ()=>{
rest.play();
} )

});

```

*function sum*
```
/// SUM ///
$(document).ready( ()=>{
//make the var and create element audio
let sum= document.createElement('audio');
//add a attribute with the sound
sum.setAttribute('src', './sound/buttonOp.mp3');

//create a event listener
sum.addEventListener('ended', ()=>{
 this.play();
}, false);

//if is cliked the event will be start
$('#sum').click( ()=>{
sum.play();
} )

});
```
