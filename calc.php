<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CALACULATORE</title>
    <!-- animated clas -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- internal css -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: yellow;
        }

        .container {
            background-color: cyan;
            position: absolute;
            top: 35%;
            width: 35%;
            left: 30%;

            border-radius: 10px;
            box-shadow: 10px 10px 10px black;
        }

        .text {
            flex: 1;
            margin: 0 0.5rem;
            font-size: 20px;
            animation-iteration-count: 25;
            animation: pulse 2s infinite;
            animation-duration: 1s;
        }

        .left-side {
            display: table;
            float: left;
            margin-top: 10px;
        }

        .right-side {
            float: left;
            margin-left: 300px;
        }

        .input-group input {
            border: none;
            background-color: transparent;
            border-bottom: 2px solid blue;
            font-size: 15px;
            outline: none;
            margin: 7px;
        }

        .form-group select {
            color: blueviolet;
            width: 80px;
            border-radius: 5px;
            margin: 7px;
        }

        .form-group .btn-group input {
            width: 80px;
            background-color: greenyellow;
            height: 30px;
            border-radius: 5px;
            border: none;
            font-size: 15px;
            text-transform: capitalize;
            color: black;
        }

        .pera {
            color: brown;
            font-weight: bold;
            font-size: 18px;
            font-style: italic;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="left-side">
                <div class=" animate__pulse text">
                    PHP<br>
                    CALCULATOR
                </div>
            </div>
            <div class="right-side">
                <div class="form-group">
                    <form action="" method="POST">
                        <div class="input-group">
                            <input id="first" type="text" name="num1" placeholder="enter numbers">
                        </div>
                        <div class="input-group">
                            <input id="second" type="text" name="num2" placeholder="enter numbers">
                        </div>
                        <div class="selection">
                            <select name="opration" id="">
                                <option id="add" value="add">add</option>
                                <option id="div" value="div">div</option>
                                <option id="sub" value="sub">sub</option>
                                <option id="mul" value="mul">mul</option>
                            </select>
                        </div>
                        <div class="btn-group">
                            <input type="submit" name="submit" value="submit">
                        </div>
                    </form>

                    <div class="newp">
                        <p></p>
                    </div>
                    <div class="pera">
                        <p>
                            <?php
                            if (isset($_POST['submit'])) {
                                $num1 = $_POST['num1'];
                                $num2 = $_POST['num2'];

                                //if inboxes are empty then


                                
                                $opration = $_POST['opration'];
                                switch ($opration) {
                                    case "add":
                                        $addition = ((int)$num1  + (int)$num2);
                                        echo "<br> ADDITION OF TWO NUMBERS IS= $addition";
                                        # code...
                                        break;

                                    case "mul":
                                        $multiplication = ((int)$num1 * (int)$num2);
                                        echo "<br> Multiplication of two number is= $multiplication";
                                        break;

                                    case "div":
                                        $division = ((int)$num1 / (int)$num2);
                                        echo "<br> division of two number is= $division";
                                        break;

                                    case "sub":
                                        $substriction = ((int)$num1 - (int)$num2);
                                        echo "<br> substriction of two numbers is = $substriction";
                                        break;

                                    default:
                                        # code...
                                        echo "please enter any number or select any choice!";
                                        break;
                                }
                                # code...
                            }
                            ?>
                        </p>
                    </div>
                    <div class="erro-msg">
                    <h3>
                    <?php
                    
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                    if (empty($num1)) {
                                    # code...
                                    echo "<br>please enter some values in first textbox";
                                }
                                elseif(empty($num2)){
                                    echo "<br>please enter some values in second textbox";
                                }
                                else{
                                    echo "your enter number are $num1 and $num2";
                                }
                                ?>
                    </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>