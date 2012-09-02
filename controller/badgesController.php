<?php

Class badgesController Extends baseController {

public function index() 
{
        $this->registry->template->blog_heading = 'This is the blog Index';
        $this->registry->template->show('blog_index');
}

public function view(){
	//TODO: recuperar el ID desde la URL encoded
	$id = $_GET['d'];
	$badge = DAOFactory::getBadgeDAO()->load($id);
	if($badge == null || $badge->id < 1){
		$this->registry->template->show('error');
		return;
	}
	
	//This is the URL you want to shorten
	$longUrl = 'http://badgme.litmon.com/badges/view?d='.$id;
	$apiKey = 'AIzaSyDMw9VeaKhBuArlcltbPHg819NbnURjy0w';
	
	/**********************/
	$postData = array('longUrl' => $longUrl, 'key' => $apiKey);
	$jsonData = json_encode($postData);
	$curlObj = curl_init();
	curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url');
	curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curlObj, CURLOPT_HEADER, 0);
	curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
	curl_setopt($curlObj, CURLOPT_POST, 1);
	curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);
	$response = curl_exec($curlObj);
	//change the response json string to object
	$json = json_decode($response);
	curl_close($curlObj);
	$url = $json->id;
	/**********************/
	
	/*** should not have to call this here.... FIX ME ***/
	$this->registry->template->title = $badge->title;
	$this->registry->template->content = $badge->description;
	$this->registry->template->url = $url;
	$this->registry->template->id = $id;
	$this->registry->template->show('view');
}

public function save(){
	//recuperamos los valores ingresados por el usuario
	$title = $_POST['title'];
	$description = $_POST['description'];
	$badge = new Badge();
	$badge->title = $title;
	$badge->description = $description;
	$id = DAOFactory::getBadgeDAO()->insert($badge);
	$id = md5($id);
	
	//This is the URL you want to shorten
	$longUrl = 'http://badgme.litmon.com/badges/view?d='.$id;
	$apiKey = 'AIzaSyDMw9VeaKhBuArlcltbPHg819NbnURjy0w';
	
	/**********************/
	$postData = array('longUrl' => $longUrl, 'key' => $apiKey);
	$jsonData = json_encode($postData);
	$curlObj = curl_init();
	curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url');
	curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curlObj, CURLOPT_HEADER, 0);
	curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
	curl_setopt($curlObj, CURLOPT_POST, 1);
	curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);
	$response = curl_exec($curlObj);
	//change the response json string to object
	$json = json_decode($response);
	curl_close($curlObj);
	$url = $json->id;
	/**********************/

	/*** should not have to call this here.... FIX ME ***/
	$this->registry->template->title = $title;
	$this->registry->template->content = $description;
	$this->registry->template->url = $url; 
	$this->registry->template->id = $id;
	$this->registry->template->show('view');
}

}
?>
