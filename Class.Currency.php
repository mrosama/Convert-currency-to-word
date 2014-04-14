<?php
/*
 *class to convert number to text with formatting currency (Egypt,Saudia)
 *@Author Osama Salama
 *@Version 0.1
 *@CopyRight 2010,2011
 *@Email osama_eg@outlook.com
*/
class Currency {


//@var	_Si  المبلغ بالقروش.
private $_Si =" قروش  ";
//@var	_S  المبلغ بالقروش.
private $_S =" قرشا  ";

//@var	_S  المبلغ بالجنية.
private $_LEi = " جنيهات ";

//@var	_LE  المبلغ بالجنية.
private $_LE =" جنيها  ";

//@var	_H  المبلغ بالهللة.
private $_H=" هللة ";

//@var	_R  المبلغ ريال.
private $_R=" ريال ";

//@var	_Ri  المبلغ ريالات.
private $_Ri=" ريالات ";
 
   /**
   * Currency::Eg() -Function To Convert to Egypt Currency
   *
   *@param Param  Type:intger  number want to convert and formating.
   *@return String
   */

public function Eg($Param){
 
$myval=(int) $Param;
$val=sprintf("%015.2f",$Param);
$param1=substr($val,-2); 
 
$param2=$this->Calculate($myval);
$param3=$this->Calculate($param1);
if($param2!="" and $param1 >=0){
$result=$param2 . $this->_LE . " و " . $param3 .$this->_S ."فقط لاغير ";
}
if($param2!="" and ($param1 <=9 and $param1 >=1)){
$result=$param2 . $this->_LE . " و " . $param3 . $this->_Si .  " فقط لا غير ";
} 
if($param2=="" and $param1!=0){
$result=$param3 . $this->_S .  "فقط لاغير ";
}
if($param2=="" and $param1==0){
$result="";
}
if($param2!="" and $param1==0){
$result=$param2. $this->_LE ."فقط لاغير ";
}
return $result;
}


   /**
   * Currency::Sa() -Function To Convert to Soudia Currency
   *
   *@param Param  Type:intger  number want to convert and formating.
   *@return String
   */

public function Sa($Param){
 
$myval=(int) $Param;
$val=sprintf("%015.2f",$Param);
$param1=substr($val,-2); 
 
$param2=$this->Calculate($myval);
$param3=$this->Calculate($param1);
if($param2!="" and $param1 >=0){
$result=$param2 . $this->_R . " و " . $param3 .$this->_H ."فقط لاغير ";
}
if($param2!="" and ($param1 <=9 and $param1 >=1)){
$result=$param2 . $this->_R . " و " . $param3 . $this->_H .  " فقط لا غير ";
} 
if($param2=="" and $param1!=0){
$result=$param3 . $this->_R .  "فقط لاغير ";
}
if($param2=="" and $param1==0){
$result="";
}
if($param2!="" and $param1==0){
$result=$param2. $this->_R ."فقط لاغير ";
}
return $result;
}


 

private function Calculate($Params){

$Num=(int) $Params;
$NumFormat=sprintf('%012d',$Num);

$Char1=substr($NumFormat,-1,1);
switch($Char1){
case "1":
$Number1=" واحد"; 
break;
case "2":
$Number1=" اثنان"; 
break;
case "3":
$Number1=" ثلاثة"; 
break;
case "4":
$Number1=" اربعة"; 
break;
case "5":
$Number1=" خمسة ";
break;
case "6":
$Letter1=" ستة"; 
break;
case "7":
$Number1=" سبعة"; 
break;
case "8":
$Number1=" ثمانية"; 
break;
case "9":
$Number1=" تسعة "; 
break;
}
$Char2=substr($NumFormat,-2,1);
switch($Char2){
case "1":
$Number2 ="عشر"; 
break;
case "2":
$Number2 ="عشرون"; 
break;
case "3":
$Number2 ="ثلاثون"; 
break;
case "4":
$Number2 ="اربعون"; 
break;
case "5":
$Number2 =" خمسون";
break;
case "6":
$Number2="ستون"; 
break;
case "7":
$Number2="سبعون"; 
break;
case "8":
$Number2="ثمانون"; 
break;
case "9":
$Number2="تسعون"; 
break;

}
 
 
if($Number1!="" and $Char2 >1){
$Number2=$Number1. " و " .$Number2;
}
if($Number2==""){
$Number2 = $Number1;
}
if($Char1==0 and $Char2==1){
$Number2 = $Number2 . " ة ";
}
if($Char1==1 and $Char2==1){
$Number2 = "احدى عشر";
}
if($Char1==2 and $Char2==1){
$Number2 = "اثنى عشر";
}
if($Char1 >2 and  $Char2==1){
$Number2 = $Number1 . " " . $Number2;
}

$Char3=substr($NumFormat,-3,1);
if($Char3==1){
$Number3 ="مائة"; 
}
if($Char3==2){
$Number3 ="مئتان"; 
}
if($Char3>2){
$g=$this->Calculate($Char3);
$Number3= substr($g, 0, -1)." مائة";  
}
if($Number3!="" and $Number2!=""){
$Number3 = $Number3 . " و" . $Number2;
}
if($Number3==""){
$Number3 = $Number2;
}

$Char4=substr($NumFormat, 6, 3);

if($Char4==1){
$Number4 = "الف";
}
if($Char4==2){
$Number4 = "الفان";
}
if($Char4 >=3 and $Char4 <=10 ){
$Number4 =$this->Calculate($Char4) . " آلاف";
}
if($Char4 >10){
$Number4 =$this->Calculate($Char4) . " الف";
}
if($Number4!="" and $Number3!=""){
$Number4=$Number4 . " و" . $Number3;
}
if($Number4==""){
$Number4=$Number3;
}
$Char5=substr($NumFormat, 3, 3);
if($Char5==1){
$Number5 = "مليون";
}
if($Char5==2){
$Number5 = "مليونان";
}
if($Char5 >=3 and $Char5 <=10 ){
$Number5 =$this->Calculate($Char5) . "  ملايين";
}
if($Char5 >10){
$Number5 =$this->Calculate($Char5) . "  مليون";
}
if($Number5!="" and $Number4!=""){
$Number5=$Number5 . " و" . $Number4;
}
if($Number5==""){
$Number5 = $Number4;
}

$Char6=substr($NumFormat, 1, 3);
if($Char6==1){
$Number6 = "مليار";
}
if($Char6==2){
$Number6 = "ملياران";
}
if($Char6 >2){
$Number6 =$this->Calculate($Char6) . "  مليار";
}
if($Number6!="" and $Number5!=""){
$Number6=$Number6 . " و" . $Number5;
}
if($Number6==""){
$Number6 = $Number5;
}
return $Number6;
}

}

?>