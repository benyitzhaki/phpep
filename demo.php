<?php
/**
 * Created by Ben Yitzhaki <ben.yitzhaki@gmail.com>.
 * Simple example of how to use the library
 * Date: 17/07/2016
 * Time: 8:47 PM
 */

require('src/phpep.php');
$expr = new PHPEP("1 + 1");
$stack = $expr->exec();
print_r($stack);