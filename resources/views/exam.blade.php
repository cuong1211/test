@extends('layout.frontend.index')
@section('content')
    <div class="content_wrapper">
        <div class="container">
            <h1>ĐỀ BÀI</h1>
            
            <form action="{{ url('/createcode') }}" method="POST">
                <button onclick="run()" class="btn">Run code!</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="row">
                    <div class="col-md-6 ">
                        <div style="border: 5px solid gray; height: 600px;">
                            @csrf
                            <textarea id="codemirror" class="first" name="title"></textarea>
                        </div>
                    </div>
            </form>
            <div class="col-md-6 ">
                <iframe id="code_result" width="100%" style="border: 5px solid gray; height: 600px;">
                </iframe>
            </div>

        </div>
    </div>
    </div>
    <script>
        var doc = document.getElementById('code_result').contentWindow.document;
        var html_value;
        var editor = CodeMirror.fromTextArea(document.querySelector('.first'), {
            lineNumbers: true,
            // tabSize: 0,
            mode: "text/html",
            // mode: {name: "javascript", globalVars: true},
            // theme: "darcula",
            extraKeys: {
                "Ctrl-Space": "autocomplete"
            },

            autoCloseTags: true,
        });

        function run() {
            html_value = editor.getValue();
            doc.open();
            doc.write(html_value);
            doc.close();
        }
    </script>
@endsection
