<?php
    include_once 'dbh.xbs.php';

    $sql = "create table Account(	 
        
        ID 			varchar(15)     PRIMARY	KEY not null,  	
        password 	varchar(20) 	not null	,  	
        name 		varchar(20) 	not null	,   
        age			integer(4) 	 	not null	,	
        gender		varchar(10) 	not null	,	
        email		varchar(40) 	not null	,	
        total		integer(8)		default 0
    );";

    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);

?>