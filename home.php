<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">opções rápidas</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">curtidas e comentários</h3>
         <p>total de curtidas: <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">ver curtidas</a>
         <p>total de comentários: <span><?= $total_comments; ?></span></p>
         <a href="comments.php" class="inline-btn">ver comentários</a>
         <p>playlist salva: <span><?= $total_bookmarked; ?></span></p>
         <a href="bookmark.php" class="inline-btn">ver favoritos</a>
      </div>
      <?php
         }else{ 
      ?>
   
      
      <?php
      }
      ?>

<div class="box">
   <h3 class="title">categorias principais</h3>
   <div class="flex">
      <a href="search_course.php?"><i class="fas fa-chess-board"></i><span>Estrategia</span></a>
      <a href="#"><i class="fas fa-brain"></i><span>Tática</span></a>
      <a href="#"><i class="fas fa-play-circle"></i><span>Partidas Clássicas</span></a>
      <a href="#"><i class="fas fa-book"></i><span>Teoria de Aberturas</span></a>
      <a href="#"><i class="fas fa-hourglass-half"></i><span>Finalizações</span></a>
      <a href="#"><i class="fas fa-chess-king"></i><span>Reis do Xadrez</span></a>
      <a href="#"><i class="fas fa-users"></i><span>Torneios</span></a>
      <a href="#"><i class="fas fa-gamepad"></i><span>Jogos Rápidos</span></a>
   </div>
</div>

<div class="box">
   <h3 class="title">tópicos populares</h3>
   <div class="flex">
      <a href="#"><i class="fas fa-chess-pawn"></i><span>Peão</span></a>
      <a href="#"><i class="fas fa-chess-knight"></i><span>Cavalo</span></a>
      <a href="#"><i class="fas fa-chess-bishop"></i><span>Bispo</span></a>
      <a href="#"><i class="fas fa-chess-rook"></i><span>Torre</span></a>
      <a href="#"><i class="fas fa-chess-queen"></i><span>Rainha</span></a>
      <a href="#"><i class="fas fa-chess-king"></i><span>Rei</span></a>
   </div>
</div>


<div class="box tutor">
   <h3 class="title">torne-se um treinador</h3>
   <p>Compartilhe seu conhecimento e inspire a próxima geração de jogadores de xadrez.</p>
   <a href="admin/register.php" class="inline-btn">comece agora</a>
</div>


</section>

<!-- seção de seleção rápida termina -->


<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">Cursos Recentes</h1>

   <div class="box-container">

      <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box">
         <div class="tutor">
            <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_tutor['name']; ?></h3>
               <span><?= $fetch_course['date']; ?></span>
            </div>
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">view playlist</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">Ainda nao temos cursos, mas acredite ja , ja teremos!</p>';
      }
      ?>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">ver mais </a>
   </div>

</section>

<!-- courses section ends -->












<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>