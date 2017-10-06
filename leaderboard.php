[[230,"AkJn","2017-10-06 17:50:59",false],[170,"go_girl","2017-10-06 15:05:03",false],[160,"aryadas98","2017-10-06 17:52:58",false],[150,"scopeInfinity","2017-10-06 01:54:42",false],[120,"The_Wanderer","2017-10-06 02:21:25",false],[100,"Suvom","2017-10-05 20:34:33",false],[100,"Skeladoom07","2017-10-05 22:54:54",false],[100,"psycho007","2017-10-05 23:42:11",false],[100,"DaredevilDJ","2017-10-06 02:45:32",false],[100,"asutosh","2017-10-06 18:03:35",false],[70,"alpha","2017-10-06 01:42:37",false],[50,"rrrohan","2017-10-05 20:06:34",false],[50,"hacker29","2017-10-05 22:33:11",false],[50,"php.net","2017-10-06 11:51:27",false],[50,"bhaibhai","2017-10-06 13:29:48",false],[20,"DNS404","2017-10-06 08:05:58",false]]
<?php
// //Hardcoded - Frozen Leaderboard
exit(0);
require("flagcontroller.php");
$con = dbConnect();
	
$sql="SELECT S.anwid as id,username,qid,time,now()-lastcheattime as t FROM `score` S JOIN login L on L.anwid=S.anwid where isadmin=0 ORDER BY time";
$result=mysqli_query($con,$sql);
$data = array();
while($row = $result->fetch_assoc())
    {
	   if(!isset($data[$row['id']]))
	   	$data[$row['id']][0]=0;
       $data[$row['id']][0] += getPoints($row['qid']);
       $data[$row['id']][1] = $row['username'];
       $data[$row['id']][2] = $row['time'];
       $time = $row['t'];
       if($time!=null && $time<3600) 
       	$time = true;
       else 
       	$time = false;
	   $data[$row['id']][3] = $time ;
	}
function sortByOrder($a, $b) {
	if($a[0]>$b[0])
		return -1;
	if($a[0]<$b[0])
		return +1;
	if($a[2]<$b[2])
		return -1;
	return +1;
}
usort($data,'sortByOrder');
$size = min(20,sizeof($data));
$ndata = array();
for ($i=0; $i < $size; $i++) { 
	$ndata[$i] = $data[$i];
}
echo json_encode($ndata);
?>