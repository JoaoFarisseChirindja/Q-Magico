<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
        .carousel-container {
            position: relative;
            width: 100%;
            max-width: 900px;
            margin: auto;
            overflow: hidden;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel div {
            min-width: 100%;
            box-sizing: border-box;
        }

        .carousel img {
            width: 100%;
            height: auto;
            display: block;
        }

        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
    </style>


</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
   <h3>Por que escolher o Q Mágico?</h3>
   <p>O Q Mágico é uma plataforma inovadora de ensino e aprendizado de xadrez, fundada pelo FM Mateus Viageiro, um dos grandes nomes do xadrez em Moçambique. Com uma equipe diretiva composta pelo FM Donaldo Paiva e pela WIM Vânia Vilhete, oferecemos a você a oportunidade de aprender com os melhores e crescer no mundo do xadrez.</p>
   <a href="courses.html" class="inline-btn">nossos cursos</a>
</div>

<div class="box-container">

   <div class="box">
      <i class="fas fa-chess"></i>
      <div>
         <h3>+1k</h3>
         <span>jogos e análises</span>
      </div>
   </div>

   <div class="box">
      <i class="fas fa-users"></i>
      <div>
         <h3>+5k</h3>
         <span>membros na comunidade</span>
      </div>
   </div>

   <div class="box">
      <i class="fas fa-chess-queen"></i>
      <div>
         <h3>+3</h3>
         <span>mestres titulados</span>
      </div>
   </div>

   <div class="box">
      <i class="fas fa-trophy"></i>
      <div>
         <h3>100%</h3>
         <span>foco na excelência</span>
      </div>
   </div>

</div>


</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

<h1 class="heading">avaliações dos jogadores</h1>

<div class="box-container">

   <div class="box">
      <p>Aprender no Q Mágico transformou meu jogo! A abordagem prática e os tutores experientes me ajudaram a evoluir rapidamente.</p>
      <div class="user">
         <img src="images/pic-2.jpg" alt="">
         <div>
            <h3>Vasco Mateus Felizardo Viageiro </h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>
      </div>
   </div>

   <div class="box">
      <p>A comunidade é incrível! Participar dos torneios e interagir com outros jogadores me motivou a seguir treinando todos os dias.</p>
      <div class="user">
         <img src="images/pic-3.jpg" alt="">
         <div>
            <h3>Joao Farisse Chirindja</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>
      </div>
   </div>

   <div class="box">
      <p>Os materiais exclusivos e análises de partidas do Q Mágico são incomparáveis. Recomendo para todos os níveis de jogadores.</p>
      <div class="user">
         <img src="images/pic-4.jpg" alt="">
         <div>
            <h3>Marcos Simiao Macuacua</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>
      </div>
   </div>

   <div class="box">
      <p>A tutoria personalizada fez toda a diferença para melhorar minhas estratégias e dominar as aberturas.</p>
      <div class="user">
         <img src="images/pic-5.jpg" alt="">
         <div>
            <h3>Lorenzo Napoleao</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>
      </div>
   </div>

   <div class="box">
      <p>Treinar no Q Mágico me preparou para competições. Adoro os desafios diários e a diversidade de conteúdos.</p>
      <div class="user">
         <img src="images/pic-6.jpg" alt="">
         <div>
            <h3>Rafael Chirindza</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>
      </div>
   </div>

   <div class="box">
      <p>Com a ajuda dos mestres do Q Mágico, finalmente alcancei meu primeiro título de torneio regional. Estou muito grato!</p>
      <div class="user">
         <img src="images/pic-7.jpg" alt="">
         <div>
            <h3>Adriano Tirano</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>
      </div>
   </div>
   <!DOCTYPE html>
<body>


    <div class="carousel-container">
    <div class="carousel">
        <div>
            <img src="images/1.jpg" alt="Imagem 1">
        </div>
        <div>
            <img src="images/2.jpg" alt="Imagem 2">
        </div>
        <div>
            <img src="images/3.jpg" alt="Imagem 3">
        </div>
        <div>
            <img src="images/4.jpg" alt="Imagem 4">
        </div>
        <div>
            <img src="images/5.jpg" alt="Imagem 5">
        </div>
        <div>
            <img src="images/6.jpg" alt="Imagem 6">
        </div>
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div>
  
  
<script>
    let index = 0;

    function moveSlide(direction) {
        const slides = document.querySelectorAll('.carousel div');
        const totalSlides = slides.length;
        index += direction;

        if (index < 0) {
            index = totalSlides - 1;
        } else if (index >= totalSlides) {
            index = 0;
        }

        const carousel = document.querySelector('.carousel');
        carousel.style.transform = `translateX(-${index * 100}%)`;
    }

    // Auto carousel
    setInterval(() => moveSlide(1), 3000); // Muda a imagem automaticamente a cada 3 segundos
</script>


</body>
</html>

</div>


</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>