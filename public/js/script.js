

const buttons = document.querySelectorAll("button");
console.log(buttons)

   buttons.forEach(button => {
       button.addEventListener('click', controlForm);
   }); 

function controlForm() 
{
    return alert('Sei sicuro di voler eliminare il file?'); 
}
   


