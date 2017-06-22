<?php
  $conn = mysqli_connect("localhost", "root", "toor8vkdldj8");
  mysqli_select_db($conn, 'opentutorials');
  $result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
</head>
<body id="target">
    <header>
        <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
        <h1><a href="http://localhost:8080/index.php">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
        <?php 
          while($row = mysqli_fetch_assoc($result)){
            echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
          }
        ?>
        </ol>
    </nav>

  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'">
    <input type="button" value="black" onclick="document.getElementById('target').className='black'">
    <a href="http://localhost:8080/write.php">쓰기</a>
  </div>
  <article>
    <form action="process.php" method="POST">
      <p>
        제목 : <input type="text" name="title">
      </p>
      <p>
        작성자 : <input type="text" name="author">
      </p>
      <p>
        본문 : <textarea name="description"></textarea>
      </p>
      <input type="submit" name="name">
    </form>
    <?php
      
    ?>
  </article>

</body>
</html>