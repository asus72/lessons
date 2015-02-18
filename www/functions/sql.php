<?php
    function sql_connect (){
        mysql_connect(['localhost', 'root', '']) ;
        mysql_select_db('test');
    }

    function sql_query ($res){
        sql_connect();
        $res = mysql_query('SELECT * FROM news');
    }

    function sql_extract (){

    }