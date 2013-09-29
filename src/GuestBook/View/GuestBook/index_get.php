<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome to GuestBook</title>

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src=""></script>

    <script>

    </script>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <h1>Гостьова книга</h1>
            <div>
                <span></span>
                <form action="/guestbook/add" method="POST">
                    <ul class="form">
                        <li>
                            <label for="name">Ім'я:*</label>
                            <input type="text" name="name" id="name" />
                        </li>
                        <li>
                            <label for="email">E-mail:*</label>
                            <input type="text" name="email" id="email" />
                        </li>
                        <li>
                            <label for="text">Повідомлення:*</label>
                            <textarea name="text" id="text"></textarea>
                        </li>
                        <li>
                            <input type="submit" value="Залишити повідомлення" />
                        </li>
                    </ul>
                </form>
            </div>
            <div class="reviews">
                <ul>
                  <?php if($parameters['reviews']) {?>
                    <?php foreach($parameters['reviews'] as $r) :?>
                        <li>
                            <div class="caption"><?= $r->getName() ?><span><?= date('d.m.Y H:m:s', $r->getDate()) ?></span></div>
                            <div class="text"><?= $r->getText() ?></div>
                        </li>
                    <?php endforeach;?>
                  <?php }else{?>
                    Повідомлення ще немає.
                  <?php }?>
                 </ul>
            </div>
        </div>
        <footer>
            <span>GuestBook © 2013</span>
        </footer>
    </div>
</body>
</html>