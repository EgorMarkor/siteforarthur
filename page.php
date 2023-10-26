<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Page with zakaz</title>
    <style media="screen">
      #identification {padding: 10px;}
      #price {
        font-size: 76px;
      }
      #photka {
	width: 100%;
	height: auto;
	}
      #back #backimg {
        width: 50px;
        height: 50px;
      }
      .wrapper {
        display: flex;
      }
      .block {
        display: inline-block;
        margin: 2px;
      }
      #butoplat {
        margin-top: 20px;
        margin-left: 50%;
	font-size: 52px;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</head>
<?php
$m_shop = '1938602603';
$m_orderid = '1';
$m_amount = number_format(100, 2, '.', '');
$m_curr = 'USD';
$m_desc = base64_encode('Test');
$m_key = 'bdY0hGqW';

$arHash = array(
	$m_shop,
	$m_orderid,
	$m_amount,
	$m_curr,
	$m_desc
);

$arHash[] = $m_key;

$sign = strtoupper(hash('sha256', implode(':', $arHash)));
?>
<body>
  <a id='back' href="http://localhost/"><img id='backimg' src='images/back.png'></a>
  <h3 id="identification"></h3>
  <img id='photka' src="" alt=""><br>
  <div class="wrapper">
    <div class="block"><p id='price'></p></div>
    <div class="block">
	<form method="post" action="https://payeer.com/merchant/">
	<input type="hidden" name="m_shop" value="<?=$m_shop?>">
	<input type="hidden" name="m_orderid" value="<?=$m_orderid?>">
	<input type="hidden" name="m_amount" value="<?=$m_amount?>">
	<input type="hidden" name="m_curr" value="<?=$m_curr?>">
	<input type="hidden" name="m_desc" value="<?=$m_desc?>">
	<input type="hidden" name="m_sign" value="<?=$sign?>">
	<input type="submit" name="m_process" value="Оплатить" class="btn btn-success" id='butoplat' />
	</form>
    </div>
  </div>
  <script type="text/javascript">
      let price = localStorage.getItem("price").slice(3);
    document.getElementById('photka').src = localStorage.getItem("ssilka");
    document.getElementById('identification').innerHTML = localStorage.getItem("zagolovok");
    document.getElementById('price').innerHTML = price;
    document.cookie = "user=John"; // обновляем только куки с именем 'user'
    alert(document.cookie); // показываем все куки
  </script>
</body>
</html>