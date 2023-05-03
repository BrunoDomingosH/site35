function Aparecer()
    {
        lateral.classList.add('animar');
    }

    function Fechar()
    {
        lateral.classList.remove('animar');
    }

    var imagens = ["CARROSEL1.png","CARROSEL2.png", "CARROSEL3.png", "CARROSEL4.png"]; // lista das imagens que serão exibidas
    var indice = 0; // índice da imagem atual

    setInterval(function() {
      indice = (indice + 1) % imagens.length; // atualiza o índice da imagem
      document.getElementById("imagem").src = imagens[indice]; // atualiza a imagem exibida
    }, 3000); // atualiza a imagem a cada 3 segundos (3000 milissegundos)