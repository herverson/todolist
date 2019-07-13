<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @include('inc.mensagens')
      @yield('content')
    </div>

    <footer id="footer" class="text-center">
      <p>Copyright &copy; 2019 Todo List</p>
    </footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
  </body>
</html>
