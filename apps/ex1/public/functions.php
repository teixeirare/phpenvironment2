<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <?php include_once '../includes/styles.php' ?>
</head>

<body>
    <h1>Functions</h1>
    <a href="/">Home</a>
    <?php

    /**
     * Adds to values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The sum of the tow value
     */

    function add(int|float $x, int|float $y): int|float
    {
        return $x + $y;
    }
    ;

    /**
     * subtract to values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The subtract of the tow value
     */


    function subtract($x, $y)
    {
        return $x - $y;
    }

    /**
     * multiply to values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The multiply of the tow value
     */

    function multiply($x, $y)
    {
        return $x * $y;
    }

    /**
     * divide to values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The divide of the tow value
     */


    function divide($x, $y)
    {
        return $x / $y;
    }


    /**
     * modules to values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The modules of the tow value
     */

    // divide
    function modulus($x, $y)
    {
        return $x % $y;
    }

    ?>

    <div> 3 + 4 = <?= add(3, 4) ?></div>
    <div> 3 - 4 = <?= subtract(3, 4) ?></div>
    <div> 3 * 4 = <?= multiply(3, 4) ?></div>
    <div> 3 / 4 = <?= divide(3, 4) ?></div>
    <div> 12 / 0 = Throws an Exception
        <?php
        // Division by zero throws an error
        //echo divide(12, 0);
        ?>
    </div>

    <div> 21 mod 3 = <?= modulus(21, 3) ?></div>


</body>

</html>