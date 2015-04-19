<html>
   <head>
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
 
        <script type="text/javascript">
                $(document).ready(function(){
                    $("#name").autocomplete({
                      source:'php/getautocomplete.php',
                      minLength:1,
                      select: function(event, ui) {
                        $('#nameid').val(ui.item.value);
                      }
                    });
                });
        </script>
   </head>
 
   <body>
 
      <form method="post" action="">
             Name : <input type="text" id="name" name="name" />
             <input type="hidden" name="nameid" id="nameid" />
      </form>
 
   </body>
<html>