<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body style="background-image:url('img/wing.png');">
<br>
<table width = "500" border="0" bgcolor = "#9cc4e4" align="left" cellpadding="10">
    <tr align="center">
        <td ><img src="img/02.jpg" height = "550"></td>
    </tr>
</table>

<table width = "800" border="0" bgcolor = "#d5e0ea" align="center" cellpadding="10">
    <tr>
        <td >NAME GAME</td>
    </tr>
    <tr>
        <td >DETAIL</td>
    </tr>
    <tr>
        <td >PRICE</td>
    </tr>
    <tr>
        <td align="center">
        <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">Buy</button>
        </td>
    </tr>

</table>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="font-family: TH SarabunPSK;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 30px;"><strong>ยืนยันการซื้อสินค้า</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="font-family: TH SarabunPSK; font-size: 24px">
        คุณต้องการซื้อสินค้าชิ้นนี้ใช่หรือไม่
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" href="buygame.php">Yes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>