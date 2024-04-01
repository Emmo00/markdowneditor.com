<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/js/app.js')
  <link
      href="https://unpkg.com/md-editor-v3@4.12.3/lib/style.css"
      rel="stylesheet"
    />
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world! by emma go
  </h1>
  <div class="editor">
    <div id="editor">
      <Editor content="lslsls"></Editor>
    </div>
  </div>
</body>
</html>