<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <style media="screen">
      #staticEmail{
        border: 1px solid #ccc;
      }
    </style>
    <script type="text/javascript">
      function showSuggestion(str) {
        if(str.length == 0){
          document.getElementById('output').innerHTML = '';
        } else {
          // AJAX REQ
          var xmlhttp = new XMLHttpRequest();

          xmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
              document.getElementById('output').innerHTML = this.responseText;
            }
          }

          xmlhttp.open("GET", "suggest.php?q="+str, true);
          xmlhttp.send();
        }
      }
    </script>
    <title>Search user</title>
  </head>
  <body>

    <div class="container">
      <form>
        <legend>Ajax & PHP</legend>
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Search Users</label>
          <div class="col-sm-10">
            Serch user: <input type="text" class="form-control-plaintext" id="staticEmail" onkeyup="showSuggestion(this.value)">
            <p>Suggestion: <span id="output" style="font-weight: bold"></span> </p>
          </div>
        </div>
      </form>
    </div>

  </body>
</html>
