<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Feed</title>
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <script>
    // $.ajax({
    //   url: 'http://localhost:8888/NewsFeed/get_page.php?url=',
    //   type:'GET',
    //   success: function(data){
    //     const posts = [];
    //     const post_titles = $(data).find('h2[data-hook="post-title"]');
    //     for(let i=0; i< post_titles.length; i++){
    //       const span = $(post_titles[i]).find('span');
    //       const span2 = $(span[0]).find('span');
    //       posts.push({title: $(span2[0]).html()});
    //     }

    //     const post_descriptions = $(data).find('.blog-post-description-style-font');
    //     for(let i=0; i< post_descriptions.length; i++){
    //       const div = $(post_descriptions[i]).find('div');
    //       const div2 = $(div[0]).find('div');
    //       const div3 = $(div2[0]).find('div');
    //       posts[i].description = $(div3[0]).html();
    //     }
        
    //     posts.forEach(post => {
    //       $("#content").append(`<div><h3 class='title'>${post.title}</h3><span class='description'>${post.description}</span></div>`);
    //     })
    //   }
    // });

    let posts = [
      {
        title: 'Município de São Simão informa primeiro caso de paciente infectado com o COVID 19',
        description: 'O paciente é jovem, de 29 anos, não tem problemas pré-existente, mas tem o histórico de deslocamento para outras cidades. Ele está em isolamento em casa, sob orientação e cuidados de nossa equipe de saúde. Inicialmente o mesmo passou por',
        url: 'http://google.com'
      },
      {
        title: 'BOLETIM EPIDEMIOLÓGICO – COVID-19',
        description: 'BOLETIM ATUALIZADO EM 21 DE MAIO DE 2020   O Município de São Simão, visando a transparência para com a população, e tomando todas as medidas recomendadas pelo Ministério da Saúde neste momento de pandemia, apresentará o boletim epidemiológico dos',
        url: 'http://google.com'
      },
      {
        title: 'INFORME DA CAIXA ECONOMICA FEDERAL',
        description: 'Auxílio Emergencial: Caixa paga nesta terça 1ª parcela para novos aprovados nascidos em janeiro A Caixa Econômica Federal (CEF) começa a pagar nesta terça-feira (19/05) a primeira parcela do Auxílio Emergencial para um novo grupo de pessoas aprovadas para receber',
        url: 'http://google.com'
      },
      {
        title: 'Animais de grande porte soltos em vias públicas é crime!',
        description: 'O município de São Simão, através de empresa contratada para esse fim, passará a recolher animais de grande porte soltos nas vias públicas.   Os animais são recolhidos para evitar maus tratos, acidentes de trânsito e proliferação de doenças. As',
        url: 'http://google.com'
      },
    ];

    // console.log(posts);
    $(document).ready(() => {
      posts.forEach(post => {
        $("#content").append(`<div><h2 class='title'><a href='${post.url}'>${post.title}</a></h2><span class='description'>${post.description}</span><br /><br /><a href='${post.url}'>Leia Mais »</a></div>`);
      })
    })
    

  </script>

  <style>
    *{
      font-family: 'Open Sans', sans-serif;
      color: #333;
    }
    .title{
      font-weight: 600;
    }

    .title a{
      text-decoration: none;
    }

    .description{
      font-weight: 300;
    }
  </style>
</head>
<body>
  <div id="content"></div>
</body>
</html>