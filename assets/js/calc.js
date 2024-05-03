
//body background music
$(document).ready( ()=>{
    let clear= document.createElement('audio');
    clear.setAttribute('src', './assets/sound/bg.mp3');

    clear.addEventListener('ended', ()=>{

    this.play();
    }, false);

    $('#testme').click( ()=>{
    clear.play();
    } )
    
});


function insert(num) {

    if( $('.result input').val() == 0)
        //quito el valor
        $('.result input').val('');
        //agrego el valor y adentro va el nuevo valor 
        $('.result input').val( $('.result input').val()+num );
     
}

//make the operation
function op(){
    $('.result input').val( eval( $('.result input').val() )  );
}

//clear the result
$(document).ready( ()=>{

    $('#btnClear').click( ()=>{
        $('.result input').val('0')
      })

} )


/////////////////////////////////////////////////
/// BUTTONS ///
//////////////////////////
/// SEVEN ///
$(document).ready( ()=>{
let seven= document.createElement('audio');
seven.setAttribute('src', './assets/sound/button.mp3');

//evento disparador
seven.addEventListener('ended', ()=>{
//entonces dale al play play
this.play();
}, false);

//ejecuta el sonido dentro del id del elemento
$('#seven').click( ()=>{
seven.play();
} )


});

//////////
/// EIGHT ///
$(document).ready( ()=>{
let eight= document.createElement('audio');
eight.setAttribute('src', './assets/sound/button.mp3');

eight.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#eight').click( ()=>{
eight.play();
} )


});

///////////////
/// NINE ///
$(document).ready( ()=>{
let nine= document.createElement('audio');
nine.setAttribute('src', './assets/sound/button.mp3');

nine.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#nine').click( ()=>{
nine.play();
} )


});
/////////////////
/// FOUR ///
$(document).ready( ()=>{
let four= document.createElement('audio');
four.setAttribute('src', './assets/sound/button.mp3');

four.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#four').click( ()=>{
four.play();
} )


});
/////////////////
/// FIVE ///
$(document).ready( ()=>{
let five= document.createElement('audio');
five.setAttribute('src', './assets/sound/button.mp3');

five.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#five').click( ()=>{
five.play();
} )

});
/////////////////
/// SIX ///
$(document).ready( ()=>{
let six= document.createElement('audio');
six.setAttribute('src', './assets/sound/button.mp3');

six.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#six').click( ()=>{
six.play();
} )

});

/////////////////
/// ONE ///
$(document).ready( ()=>{
let one= document.createElement('audio');
one.setAttribute('src', './assets/sound/button.mp3');

one.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#one').click( ()=>{
one.play();
} )

});
/////////////////
/// TWO ///
$(document).ready( ()=>{
let two= document.createElement('audio');
two.setAttribute('src', './assets/sound/button.mp3');

two.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#two').click( ()=>{
two.play();
} )

});

/////////////////
/// THREE ///
$(document).ready( ()=>{
let three= document.createElement('audio');
three.setAttribute('src', './assets/sound/button.mp3');

three.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#three').click( ()=>{
three.play();
} )

});
/////////////////
/// ZERO ///
$(document).ready( ()=>{
let zero= document.createElement('audio');
zero.setAttribute('src', './assets/sound/button.mp3');

zero.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#zero').click( ()=>{
zero.play();
} )

});

////////////////////////////////////////////////////////
/// BUTTONS END ///
/////////////////
////////////////////////////////////////////////////////
/// OPERATORS ///
/////////////////

/// DIV ///
$(document).ready( ()=>{
let div= document.createElement('audio');
div.setAttribute('src', './assets/sound/buttonOp.mp3');

div.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#div').click( ()=>{
div.play();
} )

});

/////////////////
/// MULTI ///
$(document).ready( ()=>{
let multi= document.createElement('audio');
multi.setAttribute('src', './assets/sound/buttonOp.mp3');

multi.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#multi').click( ()=>{
multi.play();
} )

});

/////////////////
/// REST ///
$(document).ready( ()=>{
let rest= document.createElement('audio');
rest.setAttribute('src', './assets/sound/buttonOp.mp3');

rest.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#rest').click( ()=>{
rest.play();
} )

});

/////////////////
/// POINT ///
$(document).ready( ()=>{
    let rest= document.createElement('audio');
    rest.setAttribute('src', './assets/sound/buttonOp.mp3');
    
    rest.addEventListener('ended', ()=>{
     this.play();
    }, false);
    
    $('#point').click( ()=>{
    rest.play();
    } )
    
    });

///////////////// 
/// SUM ///
$(document).ready( ()=>{
let sum= document.createElement('audio');
sum.setAttribute('src', './assets/sound/buttonOp.mp3');

sum.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#sum').click( ()=>{
sum.play();
} )

});

////////////////////////////////////////////////
/// OPERATORS END ///
/////////////////

////////////////////////////////////////////////
/// CLEAR BUTTON ///
/////////////////

/////////////////
/// CLEAR ///
$(document).ready( ()=>{
let clear= document.createElement('audio');
clear.setAttribute('src', './assets/sound/buttonClean.mp3');

clear.addEventListener('ended', ()=>{

 this.play();
}, false);

$('#btnClear').click( ()=>{
clear.play();
} )

});

////////////////////////////////////////////////
/// CLEAR BUTTON END ///
/////////////////

////////////////////////////////////////////////
/// OPERATION ///
/////////////////

/// OPERATION ///
$(document).ready( ()=>{
let result= document.createElement('audio');
result.setAttribute('src', './assets/sound/yametokudasai.mp3');

result.addEventListener('ended', ()=>{
this.play();
}, false);

$('#result').click( ()=>{
result.play();
} )


});

////////////////////////////////////////////////
/// OPERATION END ///
/////////////////

////////////////////////////////////////////////
/// WAIFUS ///
/////////////////

/// WAIFU BTN0 ///
$(document).ready( ()=>{
let waifubtn0= document.createElement('audio');
waifubtn0.setAttribute('src', './assets/sound/buttonWaifu.mp3');

waifubtn0.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#waifubtn0').click( ()=>{
waifubtn0.play();
} )


});

/// WAIFU BTN1 ///
$(document).ready( ()=>{
let waifubtn1= document.createElement('audio');
waifubtn1.setAttribute('src', './assets/sound/buttonWaifu.mp3');

waifubtn1.addEventListener('ended', ()=>{
 this.play();
}, false);

$('#waifubtn1').click( ()=>{
waifubtn1.play();
} )


});

////////////////////////////////////////////////
/// WAIFUS END ///
/////////////////


