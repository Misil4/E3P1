function Ver_mas(id){
    if(id=="mas")
    {
        document.getElementById("desplegar").style.display="block";   
        document.getElementById("mas").style.display="none"; 
    }
    else
    {
        document.getElementById("desplegar").style.display="none";
        document.getElementById("mas").style.display="inline";
    }
 }