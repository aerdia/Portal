// app/views/admin/code.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Code</title>
</head>
<body>
    <h1>Upload Code</h1>
    <form action="/admin/code" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <textarea name="code" rows="10" cols="50"></textarea>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
