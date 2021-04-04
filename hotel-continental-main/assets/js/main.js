function upDown(x){
    const input =  document.querySelector('input[type=number]');
    if(x===1){
       input.stepDown();
    }
    else if(x===2){
        input.stepUp();
    }    
}

