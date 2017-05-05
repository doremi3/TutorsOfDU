function addInput(divName){
     
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "<input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
         
     
}