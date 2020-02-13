<?php
if (($_SERVER['HTTP_HOST'] == 'eset.lozovaya.in.ua') || ($_SERVER['HTTP_HOST'] == 'eset.lozovaya.org.ua')) {
	$site = 'http://eset.lozovaya.in.ua/';
}
else {
	$site = 'http://enot32.ru/';
}

// ссылки на официальные версии антивируса, отсутствуют в Docker-контейнере!
$link = array(
"eav" => "/download/eav_nt32_rus.msi",
"ess" => "/download/ess_nt32_rus.msi",
"eav64" => "/download/eav_nt64_rus.msi",
"ess64" => "/download/ess_nt64_rus.msi"
);

echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="нод32, nod32, антивирус скачать, бесплатно антивирус, бесплатный антивирус, бесплатный антивирус скачать, антивирус бесплатно скачать, бесплатно скачать бесплатный антивирус, nod32, ключи для nod32, антивирус, антивирус скачать бесплатно, скачать антивирус бесплатно, nod32 ключи, nod32 скачать бесплатно, обновить антивирус, обновить нод, обновить нод32, обновить eset, ESET NOD32" />
    <meta name="description" content="Бесплатный сервер обновлений продуктов ESET" />

	<title>ESET | Скачай и обнови антивирус бесплатно!</title>
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css"> -->

	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png">
</head>
<body>
    <!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
$db_date = filemtime('../updates/lastevent.txt');
echo '	<nav class="navbar navbar-default navbar-fixed-top">
    	<div class="container-fluid">
      		<!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	        	</button>
	        	<a class="navbar-brand" href="/"><img src="images/logo-eset.png" alt="enot32.ru"></a>
	        	<p class="navbar-text">Последний раз антивирусные базы были обновлены: '. date("d.m.Y в G:i (T, \G\M\TO)", $db_date) .'</p>
	        </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="navbar" class="collapse navbar-collapse" role="tabpanel">
	        <ul class="nav navbar-nav navbar-right" role="tablist">
	            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Обзор</a></li>
	            <li role="presentation"><a href="#how" aria-controls="how" role="tab" data-toggle="tab">Как настроить?</a></li>
	        </ul>
        </div>
      </div>
    </nav>

	<div class="container">
		<div class="row">
			<div class="alert hidden-xs">
				<img src="images/header.jpg" alt="ENOT32.RU" class="img-responsive center-block img-rounded" width="100%">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-9 col-md-9 col-lg-9 tab-content">
		<!-- Главная -->
				<div role="tabpanel" class="tab-pane fade in active" id="home">
					<div class="alert alert-warning alert-dismissible fade in text-center" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>УВАЖАЕМЫЕ ПОЛЬЗОВАТЕЛИ СЕРВИСА!</strong><br />
						КОМПАНИЯ ESET УЖЕ ЗАБЛОКИРОВАЛА ДОСТУП К ОДНОМУ ИЗ МОИХ СЕРВЕРОВ ОБНОВЛЕНИЙ,<br />
						ПОЭТОМУ БОЛЬШАЯ ПРОСЬБА: ОТКЛЮЧАЙТЕ В АНТИВИРУСЕ ФУНКЦИЮ ThreatSense!!!<br />
						(<kbd>F5</kbd> -> Служебные программы -> Система своевременного обнаружения -><br />
						Убрать галочку "Включить систему своевременного обнаружения")<br />
						Я не имею возможности постоянно покупать новые доменные имена, поэтому<br />
						если этот сервис тоже загнётся, будете учиться юзать <a class="alert-link" href="https://google.com/" target="_blank">гугль</a>/<a class="alert-link" href="https://ya.ru/" target="_blank">янду</a>!
					</div>
					<div class="container-fluid panel panel-default">
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6" style="padding-right:20px; border-right: 1px solid #ccc;">
								<h2 class="text-center"><span class="eav_title">Антивирус</span><br>ESET NOD32<br><span class="tabs_product_description">Антивирус | Антишпион</span></h2>
								<img src="images/270x240-EAV.png" alt="Antivirus" class="img-responsive center-block img-rounded">
								<p class="text-justify">Для надежной защиты домашнего компьютера от вирусов, червей, троянских программ, шпионского, рекламного и потенциально опасного ПО, руткитов и фишинг-атак, и эффективного быстрого лечения зараженных файлов и восстановления системы.</p>
								<p class="text-center"><a class="btn btn-primary" href="'.$link["eav"].'"><i class="fa fa-download"></i> Скачать (32-bit)</a></p>
								<p class="text-center"><a class="btn btn-primary" href="'.$link["eav64"].'"><i class="fa fa-download"></i> Скачать (64-bit)</a></p>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<h2 class="text-center">ESET NOD32<br><span class="ess_title">Smart Security</span><br><span class="tabs_product_description">Антивирус | Антиспам | Антишпион | Файервол</span></h2>
								<img src="images/270x240-ESS.png" alt="Smart Security" class="img-responsive center-block img-rounded">
								<p class="text-justify">Интеллектуальное комплексное решение для обеспечения безопасности домашнего компьютера, относится к решениям класса Internet Security и рекомендовано большинству пользователей, активно использующих компьютер и Интернет.</p>
								<p class="text-center"><a class="btn btn-primary" href="'.$link["ess"].'"><i class="fa fa-download"></i> Скачать (32-bit)</a></p>
								<p class="text-center"><a class="btn btn-primary" href="'.$link["ess64"].'"><i class="fa fa-download"></i> Скачать (64-bit)</a></p>
							</div>
						</div>
					</div>
				</div>
	<!-- Как настроить? -->
				<div role="tabpanel" class="panel panel-default tab-pane fade" id="how">
					<div class="container">
						<div class="row">
							<div class="col-sm-9 col-md-9 col-lg-9">
								<h2 class="text-center">Настройка ESET на бесплатное обновление с нашего сервера</h2>
								<p class="text-left">Инструкции одинаковы как для ESET NOD32 Antivirus, так и для ESET Smart Security.<br />
									<br />
									1. Откройте Ваш антивирус:<br />
									<br />
									<img src="images/1st.jpg" width="650"><br />
									<br />
									2. Нажмите клавишу <kbd>F5</kbd> для доступа к настройкам, найдите слева пункт «Обновление»:<br />
									<br />
									<img src="images/2nd.jpg" width="650"><br />
									<br />
									3. Напротив списка серверов для обновлений нажмите «Изменить...» и в появившемся окне введите адрес <input class="form-control" type="url" size="30" value="'.$site.'" readonly><br />
									<br /><img src="images/3rd.jpg"><br />
									<br />';
if (($_SERVER['HTTP_HOST'] == 'eset.lozovaya.in.ua') || ($_SERVER['HTTP_HOST'] == 'eset.lozovaya.org.ua')) {
	echo '									<img src="/images/3rd-loz.jpg"><br />
									<br />
									4. Нажмите кнопку «Добавить», а затем «OK»<br />
									<br />
									<img src="/images/4th-loz.jpg"><br />
									<br />
									5. Если в списке серверов обновлений автоматически не появился сервер <b>'.$site.'</b>, выберите его из списка вручную и нажмите кнопку «OK»<br />
									<br />
									<img src="/images/5th-loz.jpg" width="650"><br />
									<br />';
} else {
	echo '									<img src="/images/3rd.jpg"><br />
									<br />
									4. Нажмите кнопку «Добавить», а затем «OK»<br />
									<br />
									<img src="/images/4th.jpg"><br />
									<br />
									5. Если в списке серверов обновлений автоматически не появился сервер <b>'.$site.'</b>, выберите его из списка вручную и нажмите кнопку «OK»<br />
									<br />
									<img src="/images/5th.jpg" width="650"><br />
									<br />';
}
echo '									6. Перейдите на вкладку «Обновление» и попробуйте обновить антивирус:<br />
									<br />
									<img src="images/6th.jpg" width="650"><br />
									<br />
									<img src="images/7th.jpg" width="650"><br />
									<br />
									<img src="images/8th.jpg" width="650"><br />
									<br />
									Обновилось? Поздравляем, Вы всё сделали правильно!</p>';
if (($_SERVER['HTTP_HOST'] == 'eset.lozovaya.in.ua') || ($_SERVER['HTTP_HOST'] == 'eset.lozovaya.org.ua')) {
	echo '									<p>Не получилось? Убедитесь, что вы скопировали адрес <b>http://</b>eset.lozovaya.in.ua/ из специального поля на этой страничке, а не <b>http<u>s</u>://</b>eset.lozovaya.in.ua/ из адресной строки! ESET не умеет работать с защищёнными протоколами!</p>';
}
else {
	echo '									<p>Не получилось? Убедитесь, что вы скопировали адрес <b>http://</b>enot32.ru/ из специального поля на этой страничке, а не <b>http<u>s</u>://</b>'.$_SERVER['HTTP_HOST'].'/ из адресной строки! ESET не умеет работать с защищёнными протоколами!</p>';
}

echo '							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading text-center">Скачать бесплатно</div>
					<div class="panel-body">
						<div class="list-group">
							<a class="list-group-item hidden-xs" href="'.$link["eav"].'"><strong>ESET NOD32 Antivirus</strong><br /><i class="fa fa-download"></i> <small>вер. <b>4.2</b> (32-bit)</small></a>
							<a class="list-group-item hidden-xs" href="'.$link["ess"].'"><strong>ESET NOD32 Smart Security</strong><br /><i class="fa fa-download"></i> <small>вер. <b>4.2</b> (32-bit)</small></a>
							<a class="list-group-item hidden-xs" href="'.$link["eav64"].'"><strong>ESET NOD32 Antivirus</strong><br /><i class="fa fa-download"></i> <small>вер. <b>4.2</b> (64-bit)</small></a>
							<a class="list-group-item hidden-xs" href="'.$link["ess64"].'"><strong>ESET NOD32 Smart Security</strong><br /><i class="fa fa-download"></i> <small>вер. <b>4.2</b> (64-bit)</small></a>
							<a class="list-group-item" href="https://play.google.com/store/apps/details?id=com.eset.ems2.gp" target="_blank"><strong>ESET Mobile Security</strong><br /><i class="fa fa-download"></i> <small>Скачать на Google Play</small></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>';
if (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) { $IPversion = 'Вы используете IPv6-версию сайта'; }
elseif (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) { $IPversion = 'Вы используете IPv4-версию сайта'; }
else { $IPversion = ''; }

if ($_SERVER['HTTP_HOST'] == 'eset.lozovaya.in.ua')
{
	$hosttracker = '<a href="https://www.host-tracker.com/UptimeGraph/UptimeInfo/b8b09822-f939-4544-8fde-7abc16f825b9" target="_blank" rel="nofollow"><img id="HostTrackerInformer" width="80" height="15" border="0" alt="website monitoring results and uptime stats" src="https://i.h-t.co/test speed.png?id=b8b09822-f939-4544-8fde-7abc16f825b9" /></a><br />';
}
else if ($_SERVER['HTTP_HOST'] == 'enot32.ru')
{
	$hosttracker = '<a href="https://www.host-tracker.com/UptimeGraph/UptimeInfo/5327be35-7173-4341-9408-ba64358d005f" target="_blank" rel="nofollow"><img id="HostTrackerInformer" width="80" height="15" border="0" alt="website monitoring results and uptime stats" src="https://i.h-t.co/test speed.png?id=5327be35-7173-4341-9408-ba64358d005f" /></a><br />';
}
else
{
	$hosttracker = '';
}

echo '	<footer class="footer">
	<div class="container-fluid">
		<p class="text-center text-muted"><small>&copy; '.date("Y", time()).' <a href="https://hub.docker.com/u/enot32" target="_blank">enot32</a></small></p>
		<p class="text-center text-muted"><small>'.$IPversion.'<br />
			'.$hosttracker.'
			<span style="color:red">Сервис предоставляется бесплатно, «как есть» («as is»), без каких-либо гарантий, явных или подразумеваемых.<br />
			Администрация не несёт ответственности за содержимое файлов обновлений, предоставляемых компанией ESET,<br />
			а также за несвоевременное обновление баз антивирусных сигнатур.</span></small>
		</p>
	</div>
    </footer>
</body>
</html>';
?>
