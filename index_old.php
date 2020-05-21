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
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <script>
    // $.ajax({
    //   url: 'http://localhost:8888/NewsFeed/get_page.php?url=<?= $_GET['url'] ?>',
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
        title: 'Meu título 1',
        description: 'Minha descrição 2'
      },
      {
        title: 'Meu título 2',
        description: 'Minha descrição 3'
      },
      {
        title: 'Meu título 4',
        description: 'Minha descrição 5'
      },
      {
        title: 'Meu título 6',
        description: 'Minha descrição 7'
      },
    ];

console.log(posts);
    posts.forEach(post => {
      $("#content").append(`<div><h3 class='title'>${post.title}</h3><span class='description'>${post.description}</span></div>`);
    })

  </script>

  <style>
    *{
      font-family: 'Roboto', sans-serif;
    }
    .title{
      color: #f09;
    }

    .description{
      color: #ff0;
    }
  </style>
</head>
<body>
  <div id="content"></div>
</body>
</html>