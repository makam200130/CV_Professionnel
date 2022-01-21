<?php
class User{
    public $userName;
}
try{
    $name='root';
    $host='localhost';
    $db='cv';
    $port=3306;
    $password='root';
    $db =new PDO("mysql: host=$host; port=$port; dbname=$db",
        "$name",
        "$password"
        //[PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION]
    );

    echo "CONNECTION REUSSI";
    
}
    catch(PDOException $e){
        echo 'CONNEXION ECHOUE : '.$e->getMessage();
}

    $user=[
        'username'=> "eba",
        'userPassword'=> "1234"];
    // $insert_user = "INSERT INTO users (userName, userPassword) 
    //     VALUES (:username, :userPassword)";
    // $stm_insert_user= $db->prepare($insert_user);
    // // $stm_insert_user->bindParam(':username',$user['username'],PDO::PARAM_STR);
    // // $stm_insert_user->bindParam(':userPassword',$user['userPassword'],PDO::PARAM_STR);
    // $stm_insert_user->execute($user
    //     // [$user['username'],$user["password"]]
    // );
    // $result = $stm_insert_user->fetchAll();
    // echo '<pre>';
    //     print_r($result);
    // echo '<pre>';  
    
    
    $select_user = "SELECT userName FROM users  WHERE userName = :username AND userPassword = :userPassword";
    $stm_select_user= $db->prepare($select_user);
    // $stm_insert_user->bindParam(':username',$user['username'],PDO::PARAM_STR);
    // $stm_insert_user->bindParam(':userPassword',$user['userPassword'],PDO::PARAM_STR);
    $stm_select_user->execute($user
        // [$user['username'],$user["password"]]
    );
    $result = $stm_select_user->fetchObject('User');
    echo '<pre>';
        print_r($result);
    echo '<pre>';  


    $db->exec('SET CHARACTER SET utf8');
?>