<h1>Mon gros titre</h1>
<?php
$teams=[];
$team_1 =[
    "name"=>"canadiens",
    "score"=>0,
];
$team_2 =[
    "name"=>"canadiens",
    "score"=>1,
];
$team_3 =[
    "name"=>"canadiens",
    "score"=>2,
];
$team_4 =[
    "name"=>"senateur",
    "score"=>3,
];
echo $team_4["name"];
$teams = [$team_1,$team_2,$team_3,$team_4];

var_dump($teams);
echo"<br><br>";
print_r($teams)

?>
<ul>
    <?php
    foreach($teams as $teams_data){
        if($team_data["score"]>0){
            echo"<li>".$team_data['name']."a".$team_data"</li>"
        };
    };
    ?>
</ul>
<h2>nouveau tableau</h2>
<table>
    <tr>
        <th style="border: 1px solid #000;">nom</th>
        <th style="border: 1px solid #000;">score</th>
    </tr>
    <?php
    foreach ($teams as $team_data){
    ?>
       <tr>
        <td><?php echo $teams_data["name"]?></td>
        <td><?php echo $teams_data["score"]?></td>
       </tr>
       <?php
           }
           ?>
</table>