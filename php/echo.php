
<!-- Chadly Here -->

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php
function eecho()
{
    $numargs = func_num_args();

    $arg_list = func_get_args();
    echo "<p>";
    for ($i = 0; $i < $numargs; $i++) {
        echo $arg_list[$i] . "<br />";
    }
    echo "</p>";
}

eecho();
eecho('bla');
eecho('foo', 'bar', 'baz');
?>
 </body>
</html>