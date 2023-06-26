<?php 
$comments = [];
$form_errors = [];

if ($_POST['add_comment']) {
  $content_errors = [];
  $username_errors = [];

  if (!$_POST['content'] || strlen($_POST['content']) == 0) {
    $content_errors[] = 'Le contenu du commentaire est obligatoire.';
  }

  if (!$_POST['username'] || strlen($_POST['username']) == 0) {
    $username_errors[] = 'Le nom d\'utilisateur est obligatoire.';
  }
  
  $form_errors['content'] = $content_errors;
  $form_errors['username'] = $username_errors;

  if (count($content_errors) == 0 && count($username_errors) == 0) {
    $comment = [
      "username" => htmlentities($_POST['username']),
      "content" => htmlentities($_POST['content'])
    ];
  
    array_push($comments, $comment);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faille XSS</title>
  <style>
    body {
      width: 70%;
      margin: auto;
    }

    .subtitle {
      font-size: 1.2rem;
      margin-bottom: 30px
    }

    .input-wrapper {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .input-wrapper label {
      display: block;
    }

    .info {
      background: lightblue;
      padding: 10px;
      color: white;
    }

    #comments {
      margin-top: 30px;
    }

    .primary-btn {
      background: #1087EE;
      border: solid 1px #1087EE;
      color: white;
      padding: 5px;
      border-radius: 7px;
    }

    .danger-btn {
      background: #EE8710;
      border: solid 1px #EE8710;
      color: white;
      padding: 5px;
      border-radius: 7px;
    }

    .actions {
      /* text-align: center; */
    }

    .comment {
      border: solid 1px grey;
      padding: 10px;
      background: #DDEEFF;
    }
    .comment .user {
      margin: 0;
    }

    .input-error {
      margin-top: 3px;
      font-size: small;
      color: red;
    }

    @media screen and (max-width: 767px) {
      body {
        width: calc(100% - 40px);
        padding: 20px;
        margin: auto
      }
    }
  </style>
</head>
<body>
  <h1>Voir la faille XSS en oeuvre</h1>

  <p class="subtitle">Exemple d'un formulaire pour commenter un article du blog</p>
  
  <form action="" class="comment-form" method="post">
    <div class="input-wrapper">
      <label for="uname">Username</label>
      <input type="text" id="uname" name="username">
      <?php if(isset($form_errors['username']) && count($form_errors['username']) > 0): ?>
        <?php foreach($form_errors['username'] as $err): ?>
          <div class="input-error"><?= $err ?></div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="input-wrapper">
      <label for="ucomment">Comment</label>
      <textarea name="content" id="ucomment" cols="30" rows="10" placeholder="Your comment here !"></textarea>
      <?php if(isset($form_errors['content']) && count($form_errors['content']) > 0): ?>
        <?php foreach($form_errors['content'] as $err): ?>
          <div class="input-error"><?= $err ?></div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="actions">
      <input class="primary-btn" type="submit" value="Envoyer" name="add_comment">
      <input class="danger-btn" type="reset" value="Tout effacer" >
    </div>
  </form>

  <div id="comments">
    <h2>Comments</h2>
    <?php if(count($comments) > 0): ?>
      <?php foreach($comments as $item): ?>
        <div class="comment">
          <p class="user"><?= $item['username'] ?></p>
          <hr>
          <div class="content"> <pre><?= $item['content'] ?> </pre></div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="info">No comment yet !</div>
    <?php endif; ?>
  </div>

</body>
</html>