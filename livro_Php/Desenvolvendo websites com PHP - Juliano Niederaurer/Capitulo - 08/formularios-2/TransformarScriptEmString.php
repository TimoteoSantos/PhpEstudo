<?php
    //existem providencias que precisam ser tomadas quendo estamos criando formularios
    //pois formualarios podem ser ultilizados para incluir conteudo malicioso no nosso sistema
    //a primeira nescessidade é a de transformar tudo que recebemos em texto puro String

    //o usuario pode incluir um link de uma imagem por exemplo no nosso formulario
    $dado = "<img src=https://s2-techtudo.glbimg.com/4_tizBHk3h8ZgpqZXoRoF4XMJ30=/0x0:6000x4000/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2023/f/w/FQkUYHRJq3H1gscf2qrA/content-pixie-wnanpxm6bn8-unsplash.jpg height='145px'>";
    echo $dado . "<br>"; // se nos nao estamos preparados para isso ira mostrar a imagem na tela

    // lidando com o link como se ele fosse um texto transformando um link em uma string
    $novoDado = htmlspecialchars($dado);
    //como podemos observar a imagem nao aparece mais so o link
    echo $novoDado;

