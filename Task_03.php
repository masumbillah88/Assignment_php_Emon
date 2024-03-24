
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Number</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        text-align: center;
        }
        .container {

            margin: 50px auto;
            width: 400px;
            border: 1px solid #ccc;
            padding: 20px 30px 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

        }
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        p{
            color:red;
            font-size: 20px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
            letter-spacing: 0.1em;
        }

        h2 {
            color: red;
            font-size: 25px;

        }

        #result {
            margin-top: 20px;

        }
    </style>
</head>
<body>
    <div class = "container">
        <h1>Grade Calculator</h1>
    <form method="POST">
    <input name = "marks" type = "Number" placeholder="Insert Score Here" required>
    <button type = "submit">Submit</button>
    </form>
    <?php
    $marks = $_POST['marks'];

    if($marks >=90){
        echo "Result is : A";
    }else if($marks>=80 && $marks <90 ){
        echo "Result is : B";
    }else if($marks >=70 && $marks <80){
        echo "Result is : C ";
    }else if($marks >=60 && $marks <70){
        echo "Result is : D ";
    }else{
        echo "Result is : Fail ";
    }
       
    
    ?>
    </div>
</body>

       
    




</html>