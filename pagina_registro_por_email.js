function Aparecer()
    {
        lateral.classList.add('animar');
    }

    function Fechar()
    {
        lateral.classList.remove('animar');
    }
    function abrir()
    {
         if(termo.checked==false)
         {
            alert("Você não pode continuar")
         }
         else
         {
            window.open("p.principal.html","_self")
         }
    }