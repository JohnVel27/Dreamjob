<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB DREAMER STUDENT SURVEY</title>

    <style>
        body{
            font-family: "Arial";
        }
        input{
            font-size:1.5cm;
            height:60px;
            width:200px;
        }

    </style>

   
</head>

<body>
    <h1>Welcome to the Job Dreamer Student Survey.Input your details here to Registers</h1>

    <form action="core/handlesForms.php" method="POST">
        <p><label for="Firstname">Firstname</label><input type="text" name="Firstname"></p>
        <p><label for="Lastname">Lastname</label><input type="text" name="Lastname"></p>
        <p><label for="Email">Email</label><input type="text" name="Email"></p>
        <p><label for="Gender">Gender</label><input type="text" name="Gender"></p>
        <p><label for="DreamJob">Dreamjob</label><input type="text" name="DreamJob"></p>
        <p><label for="YearLVL">YearLVL</label><input type="text" name="YearLVL">
        <input type="submit" name="insertJobDreamerStudent">
    </p>
    </form>


</body>
</html>
