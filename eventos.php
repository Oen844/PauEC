<?php 

    session_start();
    $userId = $_SESSION['user'];

    

    /*select class.id_class as 'IdAsignatura', class.name as 'nombreAsignatura', class.color as 'color', courses.name 'NombreCurso', users.name, users.id as 'IdUsers', users.type as 'IdType' from class, courses,users
where class.id_course = courses.id_course and courses.id_course =  users.type and users.id =  3 ;*/

    header('Content-type: application/json');
    $pdo = new PDO("mysql:dbname=phpcalendar;host=127.0.0.1","root","");

    //Seleccionar los eventos del calendario

    

    if($userId == 2){
        $sentenciaSql= $pdo ->prepare("select class.id_class as 'id', class.name as 'title', courses.name as 'descripcion', class.color as 'color' , schedule.time_start 'start', schedule.time_end 'end'
        from class, courses,users, schedule
        where class.id_course = courses.id_course and schedule.id_class = class.id_class  and courses.id_course =  users.type ;");
        $sentenciaSql ->execute();
        $resultado= $sentenciaSql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
    }else{
        $sentenciaSql= $pdo ->prepare("select class.id_class as 'id', class.name as 'title', courses.name as 'descripcion', class.color as 'color' , schedule.time_start 'start', schedule.time_end 'end'
        from class, courses,users, schedule
        where class.id_course = courses.id_course and schedule.id_class = class.id_class  and courses.id_course =  users.type and users.id =  '$userId' ;");
        $sentenciaSql ->execute();
        $resultado= $sentenciaSql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
    }

   
?>