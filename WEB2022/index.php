<?php
$limit="10";
//code viết bởi ATM-TOOL liên hệ hợp tác zalo : 0865181743
$cookie="";//cookie zalo 
$head=array(
"Host:sapi.zalopay.vn",
"Cookie:".$cookie);
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"https://sapi.zalopay.vn/v2/history/transactions?page_size=".$limit);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

curl_setopt($ch,CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36");
curl_setopt($ch,CURLOPT_HTTPHEADER, $head);

$crl=curl_exec($ch);
//code viết bởi ATM-TOOL liên hệ hợp tác zalo : 0865181743
$json=json_decode($crl);
$check=$json->data->transactions;
if($check){
	$id=0;
$view=[];
foreach($check as $row){
	$json=$row;
	$mgd=$row->trans_id;
	if(!$mgd){
		die("Lỗi Không Tìm Thấy Giao Dịch");
		}
	$info=$json->status_info;
	$trangthai=$info->title;
	$nd=$info->message;
	$loai=$json->sign;
	if($loai == 1){
		$truornhan="Nhận Tiền";
		//code viết bởi ATM-TOOL liên hệ hợp tác zalo : 0865181743
	}else{ $truornhan="Trừ Tiền";
	
	}
	$money=$json->trans_amount;
	$time=$json->trans_time;
	//code viết bởi ATM-TOOL liên hệ hợp tác zalo : 0865181743
	$title=$json->title;
	$id=$id+1;
	$view[]=array(
	"id"=>$id,
	"title"=>$title,
	"mgd"=>$mgd,
	"noidung"=>$nd,
	"money"=>$money,
	"trangthai"=>$trangthai,
	"loai"=>$truornhan,
	"time"=>$time);
	}
	if($view==[]){
	  die("NICK NÀY CHƯA CÓ GIAO DỊCH");
	}else{
	  echo json_encode($view, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
	}
	//code viết bởi ATM-TOOL liên hệ hợp tác zalo : 0865181743
	}else{ die("Không Có Giao Dịch Hoặc Cookie Die"); }