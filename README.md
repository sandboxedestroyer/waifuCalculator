# The Waifu Calculator 

![the waifu calculator](https://i.imgur.com/Fqyawnp.png)

**The Waifu Calculator it is a really cool calculator
in this calculator you can make the four matematical operations**

- Sum
* Rest
* Multiplicate
+ Splite


*This calculator are maked with the new technologies*

- **HTML5**
* **CCS3**
* **Bootstrap 5.3**
* **JS ES6**
+ **JQuery 3.7** 

**Interactive with the user**
Not only you can make the four operations also
has with a cool sounds in the buttons
which will make you leave your normal calculator
not only make operations also too 
working with espectucular sounds in the buttons
this cool calculator are will be leave your old calculator

**Main Functions**

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

*function multiplicate*
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

*function rest*
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

**Main functions Buttons**

*All buttons used the same kind of function only changes the names for be more easy to read and code *

```
/// ZERO ///
$(document).ready( ()=>{
//make the var and create element audio
let zero= document.createElement('audio');
//add a attribute with the sound
zero.setAttribute('src', './sound/button.mp3');

//create a event listener
zero.addEventListener('ended', ()=>{
 this.play();
}, false);

//if is cliked the event will be start
$('#zero').click( ()=>{
zero.play();
} )

});
```

**Full Responsive**
*This calculator its full responsive so you can used in you smartphone*

**System Requeriments**

*You don;t need install another requeriments to used you can used without install nothing but you need used all librarys 
 if you like to work with the waifu calculator :D
* 

** Main functions  **
*
here its the differents functions and how work in the Waifu calculator
*

![the main function on the Waifu Calculator](https://imgur.com/t0unfnK)

