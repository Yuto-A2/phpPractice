<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    
<?php
function getUsers(){
    
    $url = 'users.json';

    $data = file_get_contents($url);
    return json_decode($data, true);
}


$users = getUsers();

if(!empty($users)){
    for($i = 0; $i < count($users); $i++){
        echo '<div class="col-md-3 mb-3">
        <div class="card">
         <div class="card-body">
           <h5 class="card-title">' . $users[$i]['name'] . '</h5>
           <p class="card-text">' . $users[$i]['address']['geo']['lng'] . '</p>
           <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
        </div>
        </div>';
    }
}
?>
</body>
</html>
