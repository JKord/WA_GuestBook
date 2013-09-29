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
            <form action="guestbook/add" method="POST">
                <ul>
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
            <div class="reviews">
            </div>
        </div>
        <footer>
            <span>GuestBook © 2013</span>
        </footer>
    </div>
</body>
</html>