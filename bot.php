<?php
$access_token = '+Ym1bm/k6t0t+wkMlwlGmWO7WUewAY4Ab2F8Mrv6UlvbIBFC4EdKtllruMQj7Px0pc7Vhz4YZ0uontkOhz7SI4OLrtt3gGGbBaFt5ZXEvGOKdULn2LR9lZ/erFzK2oNLTC3bFlSkVTj4Vcb+1btDqgdB04t89/1O/w1cDnyilFU=';


// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text 
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			// Text execute
			if ($text == "สวัสดี") {
			   $messages = [
				'type' => 'text',
				'text' => "สวัสดีค่ะ Umibot ยินดีรับใช้ค่ะ ><"
				];
				// Data
			   $data = [
				'replyToken' => $replyToken,
				'messages' => [$messages]
				];
			} elseif ($text == "หิวจัง") {
			   $messages = [
				'type' => 'text',
				'text' => "หิวเมื่อไร ก็แวะมา เซเว่นอีเลฟเว่น ^^"
				];
				// Data
			   $data = [
				'replyToken' => $replyToken,
				'messages' => [$messages]
				];
			} elseif ($text == "อรุณสวัสดิ์") {
			   $image =  [
        			'type' => 'image',
      				'originalContentUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/Joke.jpg',
       				'previewImageUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/Joke240.jpg',
     				];
			   $messages = [
				'type' => 'text',
				'text' => "อรุณสวัสดิ์ค่าาา~ เช้าๆแบบนี้ รับโจ๊กเห็ดหอมหมูสับอุ่นๆไปทานไหมคะ ?"
				];
				// Data
			   $data = [
				'replyToken' => $replyToken,
				'messages' => [$image,$messages]
				];
			} elseif ($text == "ลาก่อน") {
			   $messages = [
				'type' => 'text',
				'text' => "ไว้เจอกันใหม่นะคะ"
				];
				// Data
			   $data = [
				'replyToken' => $replyToken,
				'messages' => [$messages]
				];
			}elseif ($text == "อยากกินมันฝรั่ง") {
			   $image =  [
        			'type' => 'image',
      				'originalContentUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/Kara.jpg',
       				'previewImageUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/Kara240.jpg',
     				];
			   $messages = [
				'type' => 'text',
				'text' => 'ถ้าให้แนะนำมันฝรั่งแล้วล่ะก็ ต้องนี่เลย คารามูโจ้ รสฮ็อตชิลลี่ เผ็ด จัดจ้าน ราคาเพียง 20 บาทเท่านั้นค่ะ'
				];
				// Data
			   $data = [
				'replyToken' => $replyToken,
				'messages' => [$image,$messages]
				];
			} elseif ($text == "อยากกินขนม") {
			   $image =  [
        			'type' => 'image',
      				'originalContentUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/Cornflick.jpg',
       				'previewImageUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/Corn240.jpg',
     				];
			   $messages = [
				'type' => 'text',
				'text' => 'พูดถึงขนม ต้องนี่เลย ขนมข้าวโพดอบกรอบรสนม ตรา 7 Select หอมนุ่มรสนมมากมาย ราคาเพียง 20 บาทเท่านั้นค่ะ!!'
				];
				// Data
			   $data = [
				'replyToken' => $replyToken,
				'messages' => [$image,$messages]
				];
			} elseif ($text == "อยากกินไอติม") {
			   $image =  [
        			'type' => 'image',
      				'originalContentUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/Walls.jpg',
       				'previewImageUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/Walls240.jpg',
     				];
			   $messages = [
				'type' => 'text',
				'text' => 'ถ้าพูดถึงไอศครีม ต้องนี่เลย~ ไอศครีมวอลล์ ช็อคโกนัตตี้ครั้นซ์ ราคาเพียง 79 บาทเท่านั้น!!'
				];
				// Data
			   $data = [
				'replyToken' => $replyToken,
				'messages' => [$image,$messages]
				];
			} elseif ($text == "โปรโมชัน") {
			    $image =  [
        			'type' => 'image',
      				'originalContentUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/sev.jpg',
       				'previewImageUrl' => 'https://raw.githubusercontent.com/Umisagi/LBdup2/master/img/sev240.jpg',
     				];
			   $messages = [
				'type' => 'text',
				'text' => 'โปรโมชันสุดคุ้มประจำวันนี้ แค่มีเหรียญก็สามารถแลกสินค้าสุดคุ้มได้ฟรีค่ะ!!'
				];
				// Data
			   $data = [
				'replyToken' => $replyToken,
				'messages' => [$image,$messages]
				];
			} else {
			    $messages = [
				'type' => 'text',
				'text' => "ระบบไม่สามารถประมวลผลคำที่ท่านส่งมาได้ ขออภัยด้วยค่ะ"
				];
				 // Data  
			    $data = [
				'replyToken' => $replyToken,
				'messages' => [$messages]
				];
			}
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
		}
	}
}
echo "OK";
