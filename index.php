<?php
include "database.php";

$problems = $db->query("SELECT * FROM problems");


?>



<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container mt-3 bg-secondary" style="height: 595px;">
        <div class="row ">
            <div class="col">
                <div class="card text-light bg-dark mt-4" style="width: 18rem;">
                    <img src="images/a.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Hi! My name is Suzy.I came to a new apatment tonight and I hear some scary voices.
                        </p>
                    </div>
                </div>
            </div>
           

        </div>
        <div class="col-4">
            <form  class="mt-3" action="process.php" method="post">
                <ul class="list-group ">
               <?php foreach ($problems as $problem) : ?>
                    <li class="list-group-item text-light bg-dark">
                        <input class="form-check-input me-1 " type="radio" value="<?php echo $problem["id"];?>" name="id[]">
                       
                        <?php echo $problem["text"]; ?>
                    </li>
                   
            <?php endforeach; ?>
            <button type="submit">continue</button> 
                </ul>

            </form>

        </div>

    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
