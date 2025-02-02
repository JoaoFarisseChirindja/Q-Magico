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
   <title>Professores</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- teachers section starts  -->

<section class="teachers">

<h1 class="heading">tutores especializados</h1>

<form action="search_tutor.php" method="post" class="search-tutor">
   <input type="text" name="search_tutor" maxlength="100" placeholder="buscar tutor..." required>
   <button type="submit" name="search_tutor_btn" class="fas fa-search"></button>
</form>

<div class="box-container">

   <div class="box offer">
      <h3>torne-se um tutor</h3>
      <p> Ensine o seu xadrez e ajude a criar Grandes Mestres !</p>
      <a href="admin/register.php" class="inline-btn">comece agora</a>
   </div>

   <?php
      $select_tutors = $conn->prepare("SELECT * FROM `tutors`");
      $select_tutors->execute();
      if($select_tutors->rowCount() > 0){
         while($fetch_tutor = $select_tutors->fetch(PDO::FETCH_ASSOC)){

            $tutor_id = $fetch_tutor['id'];

            $count_playlists = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
            $count_playlists->execute([$tutor_id]);
            $total_playlists = $count_playlists->rowCount();

            $count_contents = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ?");
            $count_contents->execute([$tutor_id]);
            $total_contents = $count_contents->rowCount();

            $count_likes = $conn->prepare("SELECT * FROM `likes` WHERE tutor_id = ?");
            $count_likes->execute([$tutor_id]);
            $total_likes = $count_likes->rowCount();

            $count_comments = $conn->prepare("SELECT * FROM `comments` WHERE tutor_id = ?");
            $count_comments->execute([$tutor_id]);
            $total_comments = $count_comments->rowCount();
   ?>
   <div class="box">
      <div class="tutor">
         <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
         <div>
            <h3><?= $fetch_tutor['name']; ?></h3>
            <span><?= $fetch_tutor['profession']; ?></span>
         </div>
      </div>
      <p>playlists : <span><?= $total_playlists; ?></span></p>
      <p>vídeos totais : <span><?= $total_contents ?></span></p>
      <p>likes totais : <span><?= $total_likes ?></span></p>
      <p>comentários totais : <span><?= $total_comments ?></span></p>
      <form action="tutor_profile.php" method="post">
         <input type="hidden" name="tutor_email" value="<?= $fetch_tutor['email']; ?>">
         <input type="submit" value="ver perfil" name="tutor_fetch" class="inline-btn">
      </form>
   </div>

   ?>
</div>

      <?php
            }
         }else{
            echo '<p class="empty">no tutors found!</p>';
         }
      ?>

   </div>

</section>

<!-- teachers section ends -->






























<?php include 'components/footer.php'; ?>    

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>