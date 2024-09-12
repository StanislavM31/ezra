<?php


<html>

<head>
    <title>Авторизация</title>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
</head>

<body>

            <h3>Авторизуйтесь</h3>
            <form id="authForm" method="post">
                <label for="login">Логин</label>
                <input type="text" id="login" name="login" placeholder="Логин" required><br>

                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" placeholder="Пароль" required><br>

                <button type="submit">Войти</button>
            </form>

    <script src="./scripts/auth.js"></script>
</body>

</html>
