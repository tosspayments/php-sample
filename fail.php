<?php
    $message = $_GET['message'];
    $code = $_GET['code'];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <title>결제 실패</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
</head>
<body>
<section>
    <h1>결제 실패</h1>
    <p><?php echo $message ?></p>
    <span>에러코드: <?php echo $code ?></span>
</section>
</body>
</html>




