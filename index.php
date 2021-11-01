<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Todo-List</title>
</head>
<body>
    <label class="titel">Mette's Todo-list</label><br>

    <div class="alles">
    <div class="textboxenknop">
    <input type="text" id="textbox" class="textbox"><br>
    <input onclick="AddItem()" type="submit" id="button" class="btn btn-primary" value="Add item">
    </div>
        <br>
        <div class="todolistje">
    <ul id="todolist" class="todolist">
    </ul>
        </div>
    </div>

</body>
<script src="script.js"></script>
</html>