<?php

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'khoyaniwebsite';

    $con = mysqli_connect($hname,$uname,$pass,$db);

    if(!$con){
        die("Can not Connect to Database".mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key => $value){
            $data[$key] = trim($value);
            $data[$key] = stripcslashes($value);
            $data[$key] = htmlspecialchars($value);
            $data[$key] = strip_tags($value);
        }
        return $data;
    }

    function select($sql, $values, $datatypes)
    {
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare ($con, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query can not be executed - Select");
            }
        }
        else{
            die("Query can nto be prepared - Select");
        }
    }

    function update($sql, $values, $datatypes)
    {
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare ($con, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query can not be executed - Update");
            }
        }
        else{
            die("Query can nto be prepared - Update");
        }
    }

?>