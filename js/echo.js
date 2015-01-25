function echo()
{
//chadly here
    console.log(arguments); 
    var htmlOutput = "";
    for (var i=0; i < arguments.length; i++) {
        htmlOutput += arguments[i] + '<br>';
    }
    document.write('<p>'+htmlOutput+'</p>' );
}

echo();
echo('bla');
echo('foo', 'bar', 'baz');
