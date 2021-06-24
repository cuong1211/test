<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('codemirror') }}/">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lib/codemirror.css">
    <link rel="stylesheet" href="addon/hint/show-hint.css">
    <link rel="stylesheet" href="theme/darcula.css">
    <script src="lib/codemirror.js"></script>
    <script src="addon/hint/show-hint.js"></script>
    <script src="addon/hint/javascript-hint.js"></script>
    <script src="mode/javascript/javascript.js"></script>
    <script src="mode/javascript/javascript.js"></script>
    <script src="addon/hint/xml-hint.js"></script>
    <script src="addon/hint/html-hint.js"></script>
    <script src="mode/xml/xml.js"></script>
    <script src="mode/htmlmixed/htmlmixed.js"></script>
    <script src="addon/edit/closetag.js"></script>
    <script src="addon/fold/xml-fold.js"></script>
   
</head>

<body>
    <form>
        <textarea id="codemirror" class="first">

        </textarea>
    </form>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("codemirror"), {
            lineNumbers: true,
            tabSize: 9,
            mode: "text/html",
            // mode: {name: "javascript", globalVars: true},
            theme: "darcula",
            extraKeys: { "Ctrl-Space": "autocomplete" },
            autoCloseTags: true,
            value: "<!DOCTYPE html>\n<html>\n\n</html>"
        });
    </script>
</body>

</html>
