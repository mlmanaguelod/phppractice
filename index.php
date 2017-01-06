<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IfElse Sample</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <div class="container">
        <div class="panel">
            <form action="ifelse.php" method="GET">
                <div class="form-group">
                    <label for="user_input">String</label>
                    <input type="text" name="string" id="user_input" value="<?php echo $userInput; ?>">
                    <p class="help-block">Input the string that you wish to convert to.</p>
                </div>
            </form>
        </div>

        <div class="string-list">
            <h6 class="h6">String Functions</h6>
            <ul>
                <li>
                   <input value="strrev" type="radio" name="string_function" id="strrev">
                        <?php if($stringFunction == "strrev"):
                                echo "checked";
                            endif;
                        ?>
                    <label for="strrev">strrev</label>
                </li>
                <li>
                    <input value="ucwords" type="radio" name="string_function" id="ucwords">
                    <label for="ucwords">ucwords</label>
                </li>
                <li>
                    <input value="strlen" type="radio" name="string_function" id="strlen">
                    <label for="strlen">strlen</label>
                </li>
                <li>
                    <input value="md5" type="radio" name="string_function" id="md5">
                    <label for="md5">md5</label>
                </li>
                <li>
                    <input value="str_shuffle" type="radio" name="string_function" id="str_shuffle">
                    <label for="str_shuffle">str_shuffle</label>
                </li>
                <li>
                    <input value="strtolower" type="radio" name="string_function" id="strtolower">
                    <label for="strtolower">strtolower</label>
                </li>
            </ul>
        </div>

            <button type="submit">Perfrom String Function</button>

                <div class="string-results">
                    <div class="panel-title h6">RESULTS</div>
                    <div class="result-box"><?php echo $results; ?></div>
                </div>

                TESTTESTTESTTESTTEST


    </div>

</body>
</html>