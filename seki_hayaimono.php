<?PHP
$c=filter_input(INPUT_GET,"c",FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);
if(!is_null($c)){
  print "選択された座席:".implode(",",$c)."<br>";

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>早い者勝ち・抽選.com</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
        <form method="get" action="kakunin_hayaimono.php" id="f1">
        <input type="checkbox" name="c[]" id="cA-1" value="A-1"><input type="button" value="A-1" class="cx">
        <input type="checkbox" name="c[]" id="cA-2" value="A-2"><input type="button" value="A-2" class="cx">
        <input type="checkbox" name="c[]" id="cA-3" value="A-3"><input type="button" value="A-3" class="cx">
        <input type="checkbox" name="c[]" id="cA-4" value="A-4"><input type="button" value="A-4" class="cx">
        <input type="checkbox" name="c[]" id="cA-5" value="A-5"><input type="button" value="A-5" class="cx"><br>
        <input type="checkbox" name="c[]" id="cB-1" value="B-1"><input type="button" value="B-1" class="cx">
        <input type="checkbox" name="c[]" id="cB-2" value="B-2"><input type="button" value="B-2" class="cx">
        <input type="checkbox" name="c[]" id="cB-3" value="B-3"><input type="button" value="B-3" class="cx">
        <input type="checkbox" name="c[]" id="cB-4" value="B-4"><input type="button" value="B-4" class="cx">
        <input type="checkbox" name="c[]" id="cB-5" value="B-5"><input type="button" value="B-5" class="cx"><br>
        <input type="checkbox" name="c[]" id="cC-1" value="C-1"><input type="button" value="C-1" class="cx">
        <input type="checkbox" name="c[]" id="cC-2" value="C-2"><input type="button" value="C-2" class="cx">
        <input type="checkbox" name="c[]" id="cC-3" value="C-3"><input type="button" value="C-3" class="cx">
        <input type="checkbox" name="c[]" id="cC-4" value="C-4"><input type="button" value="C-4" class="cx">
        <input type="checkbox" name="c[]" id="cC-5" value="C-5"><input type="button" value="C-5" class="cx"><br><br>
        <a href="###"><input type="submit" value="確認" ><br>
        </form> 
        <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function(e){
  document.querySelector('#f1').addEventListener('submit',function(e){
    var c=[].map.call(document.querySelectorAll('[name="c[]"]:checked'),function(x){
      return x.value;
    }).join(",");
    if(c===""){
      alert("座席を選択してください。");
      e.preventDefault();
    }else{
      if(!confirm(c+" が選択されています。よろしいですか?")){
        e.preventDefault();
      }
    }
  });
  [].forEach.call(document.querySelectorAll('.cx'),function(x){
    x.addEventListener('click',function(e){
      var t=e.target;
      var n=document.querySelector('#c'+t.value);
      n.checked=!n.checked;
    });
  });
});
    </script>
<style>
[name="c[]"]{display:none;}
[name="c[]"]:checked + .cx{background-Color:skyblue;}
</style>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

