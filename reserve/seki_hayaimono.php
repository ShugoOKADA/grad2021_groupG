<?PHP
require_once("../header.php");
$c = filter_input(INPUT_GET, "c", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if (!is_null($c)) {
  print "選択された座席:" . implode(",", $c) . "<br>";
}
?>
<!-- Section-->
<section class="py-5">
  <table class="btn-group btn-group-toggle" data-toggle="buttons">
    <tr>
      <td><input type="checkbox" name="c[]" id="cA-1" value="A-1"><input type="button" class="btn btn-success" value="A-1" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cA-2" value="A-2"><input type="button" class="btn btn-success" value="A-2" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cA-3" value="A-3"><input type="button" class="btn btn-success" value="A-3" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cA-4" value="A-4"><input type="button" class="btn btn-success" value="A-4" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cA-5" value="A-5"><input type="button" class="btn btn-success" value="A-5" class="cx"></td>
    </tr>
    <tr>
      <td><input type="checkbox" name="c[]" id="cB-1" value="B-1"><input type="button" class="btn btn-success" value="B-1" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cB-2" value="B-2"><input type="button" class="btn btn-success" value="B-2" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cB-3" value="B-3"><input type="button" class="btn btn-success" value="B-3" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cB-4" value="B-4"><input type="button" class="btn btn-success" value="B-4" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cB-5" value="B-5"><input type="button" class="btn btn-success" value="B-5" class="cx"></td>
    </tr>
    <tr>
      <td><input type="checkbox" name="c[]" id="cC-1" value="C-1"><input type="button" class="btn btn-success" value="C-1" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cC-2" value="C-2"><input type="button" class="btn btn-success" value="C-2" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cC-3" value="C-3"><input type="button" class="btn btn-success" value="C-3" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cC-4" value="C-4"><input type="button" class="btn btn-success" value="C-4" class="cx"></td>
      <td><input type="checkbox" name="c[]" id="cC-5" value="C-5"><input type="button" class="btn btn-success" value="C-5" class="cx"></td>
    </tr>
    <tr>

    </tr>
  </table>
  <form action="kakunin_hayaimono.php" method="post">
    <input type="submit" value="確認">
    <input type="hidden" name="eventId" value="<?= $_GET['eventId'] ?>">
    <input type="hidden" name="name" value="<?= $_GET['name'] ?>">
    <input type="hidden" name="mail" value="<?= $_GET['mail'] ?>">
    <input type="hidden" name="pass" value="<?= $_GET['pass'] ?>">
    <input type="hidden" name="number" value="1">
  </form>

  <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function(e) {
      document.querySelector('#f1').addEventListener('submit', function(e) {
        var c = [].map.call(document.querySelectorAll('[name="c[]"]:checked'), function(x) {
          return x.value;
        }).join(",");
        if (c === "") {
          alert("座席を選択してください。");
          e.preventDefault();
        } else {
          if (!confirm(c + " が選択されています。よろしいですか?")) {
            e.preventDefault();
          }
        }
      });
      [].forEach.call(document.querySelectorAll('.cx'), function(x) {
        x.addEventListener('click', function(e) {
          var t = e.target;
          var n = document.querySelector('#c' + t.value);
          n.checked = !n.checked;
        });
      });
    });
  </script>
  <style>
    [name="c[]"] {
      display: none;
    }

    [name="c[]"]:checked+.cx {
      background-Color: skyblue;
    }
  </style>
</section>
<!-- Footer-->
<?php require_once("../footer.php"); ?>