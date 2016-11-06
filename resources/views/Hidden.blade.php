<html>
<head>
<script src="/bootstrap/js/jquery.min.js"></script>
<script>
  function loadlink(){
    var link = document.getElementById("hidden-link");
    link.click();
  }
  document.addEventListener('DOMContentLoaded',function(){
    loadlink();
  }, false);
</script>
</head>
<body>
<a href="/ReviewResult/{{$app_no_id}}/Menu" id="hidden-link"></a>
</body>
</html>
