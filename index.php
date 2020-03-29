<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link href="styles.css" rel="stylesheet">
    <title>Calculater Using PHP</title>
</head>
<body>
    <div class="container rounded-pill">
        <div class="row row-content align-items-center">
            <div class="col-6 col-sm-6">
                <h1 class="vl"> PHP<br>Calculater</h1>
            </div>
            <div class="col-6 col-sm-6">
                <form method="POST">
                    <div class="form-group">
                       <input type="text" placeholder="Enter First Input" name="num1" class="form-control mx-sm-6">                
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Enter First Input" name="num2" class="form-control mx-sm-6">                
                    </div>
                    <div>
                       <select name="operation" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose Operatio</option>
                            <option value="add">ADD</option>
                            <option value="sub">SUB</option>
                            <option value="mult">MULT</option>
                            <option value="div">DIV</option>
                        </select>
                    </div>
                    <br>
                    <div class="button">
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div>
                <p class="serif">
                    <?php
                        if(isset($_POST['submit'])){
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            // echo "{$num1} {$num2}";
                            $operation = $_POST['operation'];
                            switch($operation){
                                case "add": $sum = $num1 + $num2;
                                echo "The addition of two number is {$sum}";
                                break;    
                                case "sub": $sub = $num1 - $num2;
                                echo "The substraction of two number is {$sub}";
                                break;   
                                case "mult": $mult = $num1 * $num2;
                                echo "The Multiplication of two number is {$mult}";
                                break; 
                                case "div": $div = $num1 / $num2;
                                echo "The division of two number is {$div}";
                                break;            
                                default: echo "Sorry Not Exist";              
                            }

                        }
                    ?>
                </p>
            </div>
    </div>
</body>
</html>


<!-- 
<div class="container">
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <h2>Uthappizza</h2>
                <p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
            </div>
        </div> -->