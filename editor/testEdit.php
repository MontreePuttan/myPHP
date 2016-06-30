<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- Include Font Awesome. -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Editor style. -->
    <link href="css/froala_editor.min.css" rel="stylesheet" type="text/css" />
    <link href="css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Code Mirror style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

    <!-- Include Editor Plugins style. -->
    <link rel="stylesheet" href="css/plugins/char_counter.css">
    <link rel="stylesheet" href="css/plugins/code_view.css">
    <link rel="stylesheet" href="css/plugins/colors.css">
    <link rel="stylesheet" href="css/plugins/emoticons.css">
    <link rel="stylesheet" href="css/plugins/file.css">
    <link rel="stylesheet" href="css/plugins/fullscreen.css">
    <link rel="stylesheet" href="css/plugins/image.css">
    <link rel="stylesheet" href="css/plugins/image_manager.css">
    <link rel="stylesheet" href="css/plugins/line_breaker.css">
    <link rel="stylesheet" href="css/plugins/quick_insert.css">
    <link rel="stylesheet" href="css/plugins/table.css">
    <link rel="stylesheet" href="css/plugins/video.css">
<head>

<body>
<!-- Create a tag that we will use as the editable area.
     You can use a div tag as well. -->

<?php echo $content = $_POST['content']; print_r($content); ?>
<form method="post" action="">

    <textarea id="edit" name="content">

    </textarea>

    <div>
        <input type="submit" value="OK"/>
    </div>
</form>

<!-- Include jQuery. -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Include JS files. -->
<script type="text/javascript" src="js/froala_editor.min.js"></script>

<!-- Include Code Mirror. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

<!-- Include Plugins. -->
<script type="text/javascript" src="js/plugins/align.min.js"></script>
<script type="text/javascript" src="js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="js/plugins/colors.min.js"></script>
<script type="text/javascript" src="js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="js/plugins/entities.min.js"></script>
<script type="text/javascript" src="js/plugins/file.min.js"></script>
<script type="text/javascript" src="js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="js/plugins/image.min.js"></script>
<script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="js/plugins/link.min.js"></script>
<script type="text/javascript" src="js/plugins/lists.min.js"></script>
<script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="js/plugins/quote.min.js"></script>
<script type="text/javascript" src="js/plugins/table.min.js"></script>
<script type="text/javascript" src="js/plugins/save.min.js"></script>
<script type="text/javascript" src="js/plugins/url.min.js"></script>
<script type="text/javascript" src="js/plugins/video.min.js"></script>

<!-- Include Language file if we want to use it. -->
<script type="text/javascript" src="js/languages/ro.js"></script>

<!-- Initialize the editor. -->


<script>
    $(function() {
        $('#edit').froalaEditor()
    });
</script>

<link href="css/froala_style.min.css" rel="stylesheet" type="text/css" />

<div class="fr-view">
    Here comes the HTML edited with the Froala rich text editor.
</div>
</body>
</html>