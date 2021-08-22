<?php
$msg = "Новая заявка 'ЗАКАЗАТЬ САЙТ'! \n
					Имя: ".$_POST['name']." \n
					Номер телефона: ".$_POST['email']." \n
					Тарифный план и пакет: ".$_POST['zay']." \n
					Сообщение: ".$_POST['message'].";";
			$msg_1 = urlencode($msg);
			fopen("https://api.telegram.org/bot1950334104:AAEKK911x_RFpW0pcEvBsxtVjpfjNaQ0ovE/sendMessage?chat_id=479722158&text=".$msg_1."","r");
?>