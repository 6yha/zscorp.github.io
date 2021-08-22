<?php
$msg = "Новая заявка 'ЗАДАЙ МНЕ ВОПРОС'! \n
					Имя: ".$_POST['name']." \n
					Номер телефона: ".$_POST['subject']." \n
					Сообщение: ".$_POST['message'].";";
			$msg_1 = urlencode($msg);
			fopen("https://api.telegram.org/bot1950334104:AAEKK911x_RFpW0pcEvBsxtVjpfjNaQ0ovE/sendMessage?chat_id=479722158&text=".$msg_1."","r");
?>