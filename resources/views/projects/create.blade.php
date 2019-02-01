<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
</head>
<body>
<h1>Create a new project</h1>

<form method="POST" action="/projects">
    {{csrf_field()}}

    <div>
        <input type="text" name="title", placeholder="Project title">
    </div>
    <div>
        <textarea name="description" id="" placeholder="project description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Create Project</button>
    </div>
</form>

</body>
</html>