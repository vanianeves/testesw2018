 <?PHP    
    $host = "localhost";    
    $usuario = "root";    
    $senha = "123456";    
    $banco = "full_teaching";    

    $database = mysqli_connect($host,$usuario,$senha,$banco);    

$result=mysqli_query("SELECT * FROM user");

$i=0;
while($row=mysqli_fetch_array($result)) { 
  $response[$i]['id']  = $row['id']; 
  $response[$i]['nome']= $row['nick_name'];
  $data['alunos'][$i] = $response[$i];
  $i=$i+1;
} 

echo json_encode($data);


?> 
