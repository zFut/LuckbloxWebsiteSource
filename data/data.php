<?php



function get_data(){

    include 'config.php';

    $user = $_SESSION['username'];

    $request = mysqli_query($conn,"SELECT * FROM users WHERE username = '$user'");

    $data = mysqli_fetch_array($request);

    return $data;

}





function get_alert(){

    include 'config.php';

    $request = mysqli_query($conn,"SELECT * FROM alert");

    $alert = mysqli_fetch_array($request);

    return $alert;

}



function get_profile(){

    include 'config.php';

    $id = $_GET['id'];

    $requests = mysqli_query($conn,"SELECT * FROM users WHERE id = '$id'");

    $rows = mysqli_num_rows($requests);

    if ($rows == 1){

    $playerprofile = mysqli_fetch_array($requests);

    return $playerprofile;

    } else {

        header('location: ../browse.php');

    }

}



function get_games_home(){

    include 'config.php';

    $user = $_SESSION['username'];

    $requests = mysqli_query($conn,"SELECT * FROM games WHERE creator = '$user'");

    $playergames = mysqli_fetch_array($requests);

    return $playergames;

}



function get_games_home_rows(){

    include 'config.php';

    $user = $_SESSION['username'];

    $requests = mysqli_query($conn,"SELECT * FROM games WHERE creator = '$user'");

    $rowgames = mysqli_num_rows($requests);

    return $rowgames;

}



function get_games_profile(){

    include 'config.php';

    $id = $_GET['id'];

    $requests = mysqli_query($conn,"SELECT * FROM games WHERE cid = '$id'");

    $playergames = mysqli_fetch_array($requests);

    return $playergames;

}



function get_games_profile_rows(){

    include 'config.php';

    $id = $_GET['id'];

    $requests = mysqli_query($conn,"SELECT * FROM games WHERE cid = '$id'");

    $rowgames = mysqli_num_rows($requests);

    return $rowgames;

}



function get_players(){

    include "config.php";

    $playerdata = array();

    $sql = "SELECT * FROM users";

    $res = mysqli_query($conn, $sql);



    while($ar = mysqli_fetch_assoc($res))

    {

        $playerdata[] = $ar;

    }

    return $playerdata;

}



function get_games(){

    include "config.php";

    $gamesdata = array();

    $sql = "SELECT * FROM games";

    $res = mysqli_query($conn, $sql);



    while($ar = mysqli_fetch_assoc($res))

    {

        $gamesdata[] = $ar;

    }

    return $gamesdata;

}



function get_gameprofile(){

    include 'config.php';

    if ($_GET){

        if (!empty ($_GET['id'])){

        if (is_numeric($_GET['id'])){

        $id = $_GET['id'];

        $requests = mysqli_query($conn,"SELECT * FROM games WHERE id = '$id'");

        $rows = mysqli_num_rows($requests);

        if ($rows == 1){

        $gameprofile = mysqli_fetch_array($requests);

        return $gameprofile;

        } else {

            header('location: ../games.php');

        }

        } else {

            header('location: ../games.php');

        }

    } else {

    header('location: ../games.php');

    }  

    } else {

    header('location: ../games.php');

    } 

}



function get_items(){

    include "config.php";

    $itemsdata = array();

    $sql = "SELECT * FROM catalog";

    $res = mysqli_query($conn, $sql);



    while($ar = mysqli_fetch_assoc($res))

    {

        $itemsdata[] = $ar;

    }

    return $itemsdata;

}



function get_item(){

    include 'config.php';

    if ($_GET){

        if (!empty ($_GET['id'])){

            if (is_numeric($_GET['id'])){

                

                $id = $_GET['id'];

                $requests = mysqli_query($conn,"SELECT * FROM catalog WHERE id = '$id'");

                $rows = mysqli_num_rows($requests);

                if ($rows == 1){

                $item = mysqli_fetch_array($requests);

                return $item;

                } else {

                    header('location: ../catalog.php');

                }

    

            } else {

                header('location: ../catalog.php');

            }

        

        } else {

            header('location: ../catalog.php');

        }

    

    }else{

        header('location: ../catalog.php');

    }

}



function get_owned(){

    include 'config.php';

    $id = $_GET['id'];

    $requests = mysqli_query($conn,"SELECT * FROM hats_owned WHERE id = '$id'");

    $rows = mysqli_num_rows($requests);

    return $rows;

}



function get_keys(){

    include "config.php";

    $keys = array();

    $sql = "SELECT * FROM gkeys";

    $res = mysqli_query($conn, $sql);



    while($ar = mysqli_fetch_assoc($res))

    {

        $keys[] = $ar;

    }

    return $keys;

}



function check_own(){

    include 'config.php';

    $user = $_SESSION['username'];

    $id = $_GET['id'];

    $requests = mysqli_query($conn,"SELECT * FROM hats_owned WHERE id = '$id' AND owner='$user'");

    $row = mysqli_num_rows($requests);

    return $row;

}



function get_hats_home(){

    include "config.php";

    $user = $_SESSION['username'];

    $hats = array();

    $item = array();

    $sql = "SELECT * FROM hats_owned WHERE owner='$user'";

    $res = mysqli_query($conn, $sql);



    while($ar = mysqli_fetch_assoc($res))

    {

        $hats[] = $ar;

    }

    

    foreach($hats as $it) {

        $name = $it['id'];

        

        $sql = "SELECT * FROM catalog WHERE id = '$name'";

        $res = mysqli_query($conn, $sql);



        while($as = mysqli_fetch_assoc($res)){

            $item[] = $as;

        }

    }

    

    return $item;





}



function get_hats_user(){

    include "config.php";

    if ($_GET){

        if (!empty ($_GET['id'])){

        if (is_numeric($_GET['id'])){

        

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

        $hats = array();

        $item = array();



        $sql = "SELECT * FROM users WHERE id = '$id'";

        $res = mysqli_query($conn, $sql);

        $info = mysqli_fetch_assoc($res);

        $user = $info['username'];



        $sql = "SELECT * FROM hats_owned WHERE owner='$user'";

        $res = mysqli_query($conn, $sql);



        while($ar = mysqli_fetch_assoc($res))

        {

            $hats[] = $ar;

        }

    

        foreach($hats as $it) {

            $name = $it['id'];

        

            $sql = "SELECT * FROM catalog WHERE id = '$name'";

            $res = mysqli_query($conn, $sql);



            while($as = mysqli_fetch_assoc($res)){

                $item[] = $as;

            }

        

        }

        return $item;

        

        } else {

            header('location: ../browse.php');

        }

        

        } else {

            header('location: ../browse.php');

        }

    

    }else{

        header('location: ../browse.php');

    }



}



function check_bc(){

    include 'config.php';

    $user= $_SESSION['username'];

    $requests = mysqli_query($conn,"SELECT * FROM users WHERE username = '$user'");

    $res = mysqli_fetch_array($requests);



    if ($res['bc'] == 1){

        $requests = mysqli_query($conn,"SELECT * FROM hats_owned WHERE owner='$user' and id='5' ");

        $rows = mysqli_num_rows($requests);

        if ($rows == 0){

            $bc = 'no rows';

            $sql = "INSERT INTO hats_owned (owner,id) values ('$user','5')";

            $res1 = mysqli_query($conn, $sql); 

        } 

    }

}



function check_friend(){



    include 'config.php';



    $fid = $_GET['id'];

    $user = $_SESSION['username'];



    

    $check = "SELECT * FROM users WHERE username = '$user'";



    $requests = mysqli_query($conn,$check);

    $res = mysqli_fetch_array($requests);

    $id = $res['id'];



    $sql = "SELECT * FROM friends WHERE fid = '$fid' AND uid='$id' OR fid = '$id' AND uid='$fid'";

    if ($conn->query($sql)){

        $req = mysqli_query($conn,$sql);

        $request = mysqli_fetch_array($req);

       return $request;

    }else{ 

        false;

    }



}



function get_friend_profile(){



    include "config.php";



    $friends = array();

    $uid = $_GET['id'];

    

    $sql = "SELECT * FROM friends WHERE fid='$uid' AND accepted='1' OR uid='$uid' AND accepted='1'";



    $res = mysqli_query($conn, $sql);

    while($ar = mysqli_fetch_assoc($res))



    {



        $friends[] = $ar;



    }



    return $friends;



}



function get_games_host(){



    include 'config.php';



    $user = $_SESSION['username'];

    $requestid = mysqli_query($conn,"SELECT * FROM users WHERE username = '$user'");

    $result = mysqli_fetch_assoc($requestid);



    $id = $result['id'];



    $requests = mysqli_query($conn,"SELECT * FROM games WHERE cid = '$id'");

 

    while($ar = mysqli_fetch_assoc($requests))



    {



        $games[] = $ar;



    }



    return $games;



}



function get_friend_home(){



    include "config.php";



    $friends = array();

    $user = $_SESSION['username'];



    

    $check = "SELECT * FROM users WHERE username = '$user'";



    $requests = mysqli_query($conn,$check);

    $res = mysqli_fetch_array($requests);

    $id = $res['id'];

    

    $sql = "SELECT * FROM friends WHERE fid='$id' AND accepted='1' OR uid='$id' AND accepted='1'";



    $res = mysqli_query($conn, $sql);

    while($ar = mysqli_fetch_assoc($res))



    {



        $friends[] = $ar;



    }



    return $friends;



}

?>