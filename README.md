# php-cli-color
Simple and easy to use the PHP command-line output of color...

## How to use
```php
<?php
require_once 'color.php';

$tes = new cli_color;

echo $tes->black("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->red("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->green("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->yellow("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->blue("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->purple("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->cyan("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->white("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->color_background("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->underline("Testing color class, github.com/fadhil-riyanto").PHP_EOL;
echo $tes->reset().PHP_EOL;
?>
```
## run result

<img src="https://i.ibb.co/TKprZtc/Screenshot-10-15-2020-21-44-22.png" alt="Screenshot-10-15-2020-21-44-22" border="0">
