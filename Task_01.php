
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
    <form method="POST">
    <input name = "number" type = "Number" placeholder="Insert Number Here" required>
    <button type = "submit">Submit</button>
    </form>
    </div>
</body>
<?php
    $number = $_POST['number'];

    if($number > 0){
        echo "The Number is Positive";
    }else if($number < 0){
        echo "The Number is Negative";
    }else if($number==0){
        echo "The Number is zeor";
    }



?>
</html>