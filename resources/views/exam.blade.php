<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html editor</title>
    {{-- <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }


        .btn {
            poistion: fixed;
            right: 0;
            padding: 0.4rem;
            width: 4rem;
            background: rgb(0, 0, 0);
            color: gold;
            font-size: 1rem;
            outline: none;
            cursor: pointer;
            height: 90vh;
        }

        .btn:hover {
            color: white;
            background: blue;
        }


        .main-editor {
            background: rgba(0, 0, 0, 0.91);
            display: flex;
            width: 100%;
            padding: 1rem;
            box-shadow: 0 2px 3px black;
            position: fixed;
            height: 100vh;
            justify-content: center;
            align-items: center;
            border: 7px solid #36383f;
        }

        .first {
            background-color: #ffffff;
            width: 50%;
            overflow-x: hidden;
            overflow-y: auto;
            white-space: pre;
            box-shadow: 0 1px 1px rgb(22, 22, 22);
            outline: none;
            padding: 0.4rem;
            height: 90vh;
        }

        .second {
            background-color: rgb(255, 255, 255);
            width: 50%;
            overflow-y: auto;
            white-space: pre;
            right: 0;
            box-shadow: 0 1px 1px rgb(22, 22, 22);
            padding: 0.4rem;
            height: 90vh;
        }

    </style> --}}
</head>

<body>
    <div class="main-editor">
        <form action="{{url('/exam')}}" method="POST">
            @csrf
            <input type="text" name="code" class="form-control" id="fname" >
            <button type="submit" class="btn">Run</button>
        </form>
        
    </div>

    {{-- <script>
        var element = document.getElementById('code');
        //  This gives you a string representing that element and its content
        var html = element.outerHTML;
        //  This gives you a JSON object that you can send with jQuery.ajax's `data`
        // option, you can rename the property to whatever you want.
        var json = JSON.stringify({ html: html});

        //  This gives you a string in JSON syntax of the object above that you can 
        // send with XMLHttpRequest.
        console.log(element)
        const first = document.querySelector(".first");
        const iframe = document.querySelector("iframe");
        const btn = document.querySelector("button");

        btn.addEventListener("click", () => {
            var html = first.textContent;
            iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
        });


        first.addEventListener('keyup', () => {
            var html = first.textContent;
            iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
        })

        first.addEventListener("paste", function(e) {
            e.preventDefault();
            var text = e.clipboardData.getData("text/plain");
            document.execCommand("insertText", false, text);
        });

    </script> --}}
</body>

</html>
