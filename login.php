<?php
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: grid;
            place-content: center;
            min-height: 100vh;
        }
    </style>
    <script src="/scripts/snippet-javascript-console.min.js?v=1"></script>
</head>
<body>
<form id="form_login">
    <p>
        <input type="text" id="username" placeholder="username"/>
    </p>
    <p>
        <input type="password" id="password" placeholder="password"/>
    </p>
    <p>
        <input type="text" id="server" placeholder="server"/>
    </p>
    <p>
        <button id="submitbutton" type="button">Masuk</button>
    </p>
</form>
</body>
</html>