<?php

$yx=opendir('Sameel'); while($isi=readdir($yx)){ if($isi != '.' && $isi != '..'){ $token=$isi; 

function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
if(file_exists('Like_RamadhanCoday')){ $log=json_encode(file('Like_RamadhanCoday')); }else{ $log=''; }
$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=20&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){
$x=$stat[data][$i-1][id]."\n";
$y=fopen('Like_RamadhanCoday','a');
fwrite($y,$x);
fclose($y);
$stickers= array('827160920784270','383649408463165','1758297987718557', '334188620117492', '575284979224213', '465624336970446', '396449313832508', '392309624199683', '334188620117492', '575284979224213', '465624336970446', '1775284646045573','785424341628920','510424512639605','139084309983547','163174240907887','155884458459895','1435019743455649','118497732197776',);
$emo=$stickers[rand(0,count($stickers)-1)];
$emx=$stickers[rand(0,count($stickers)-1)];
$text= array('💮💮💮','🔘🔘🔘','🍅🍅🍅','🍍🍍🍍','🍈🍈🍈','🍓🍓🍓','🍉🍉🍉','🍏🍏🍏','🍊🍊🍊','🎲🎲🎲','🍺🍺🍺','🍻🍻🍻','🍹🍹🍹','🍷🍷🍷','🍟🍟🍟','🍔🍔🍔','🍝🍝🍝','🍥🍥🍥','🍘🍘🍘','🍩🍩🍩','🍮🍮🍮','🍦🍦🍦','🍨🍨🍨','🍧🍧🍧','🍰🍰🍰','🍫🍫🍫','🍪🍪🍪','🍬🍬🍬','🍭🍭🍭','🍯🍯🍯','🍎🍎🍎','💕💕💕','🎧🎧🎧','💡💡💡','📺📺📺','💿💿💿','📷📷📷','💾💾💾','💽💽💽','💝💝💝','🌏🌏🌏','🌀🌀🌀','🌠🌠🌠','🌼🌼🌼','🌰🌰🌰','🌵🌵🌵','🍁🍁🍁','🌻🌻🌻','🌸🌸🌸','💎💎💎','🌑🌑🌑','💞💞💞',);
$cx = $text[rand(0,count($text)-1)];
$cxx = $text[rand(0,count($text)-1)];
$txxt =array('LOVE',
'WOW',);
$cxxx = $txxt[rand(0,count($txxt)-1)];
$message_ara = ' '.$cx.' ';
$message_ar = ' '.$cxx.' ';

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=post&access_token='.$token);
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$token.'&message='.urlencode($message_ara).'&attachment_id='.$emo.'&method=post');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$token.'&message='.urlencode($message_ar).'&attachment_id='.$emx.'&method=post');

echo '<span style="color:red">'.$stat[data][$i-1][from][name].'</span> <span style="color:green">Done</span><hr/>';
}
}
}
}
?>