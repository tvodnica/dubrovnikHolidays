  /*SERVICES*/

  var thingToRent = document.getElementById("rent-a-nesto");
  let counter = 1;

  window.addEventListener('load', () => {
    thingToRent.style.animation = 'rental-animation 3s infinite';
    setInterval(frame, 3000);
  });

  function frame() {
    if(counter > 5){
      counter = 0;
    }
    if(counter == 0){
      thingToRent.innerText = 'a car?';
    }
    else if(counter == 1){
      thingToRent.innerText = 'a kayak?';
    }
    else if(counter == 2){
      thingToRent.innerText = 'a boat?';
    }
    else if(counter == 3){
      thingToRent.innerText = 'a jet ski?';
    }
    else if(counter == 4){
      thingToRent.innerText = 'a SUP board?';
    }
    else if(counter == 5){
      thingToRent.innerText = 'something else?';
    }else{
      thingToRent.innerText = 'GREŠKA!';
    }
    counter++;    
  };
