<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>國立中正大學總務處-公告內容</title>
<body bgcolor="#FFFFFF">
<table width="600" border="1" cellspacing="2" cellpadding="2" align="center" bordercolor="#996699">
<?php

    $result = array (
                'subject' => "test",
                'date' => time(),
                'depart' => '測試組',
                'content' => 'foobar'
              );
	$result = json_decode(json_encode($result),FALSE);
	$date=getdate($result->date);
	
	echo "<tr>";
	echo "<td width=\"100\" height=\"30\" align=\"center\" valign=\"middle\">公告主題</td>";
	echo "<td height=\"30\">". nl2br($result->subject) . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td width=\"100\" height=\"30\" align=\"center\" valign=\"middle\">公告時間</td>";
	echo "<td height=\"30\">".$date["year"]."/".$date["mon"]."/".$date["mday"]."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td width=\"100\" height=\"30\" align=\"center\" valign=\"middle\">公告組別</td>";
	echo "<td height=\"30\">" . nl2br($result->depart) . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td width=\"100\" height=\"300\" align=\"center\" valign=\"middle\">公告內容</td>";
	echo "<td height=\"300\">" . nl2br($result->content) . "</td>";
	echo "</tr>";
?>
</table>
