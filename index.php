<?php
    $db_connection = pg_connect("host=databaseWilliam port=5432 dbname=postgres user=williamdel password=2181336");
    $SQLQuery = 'SELECT * FROM "Comidas"';
    $RecordSet = pg_query($db_connection, $SQLQuery);

?>
<h1> Comidas </h1> 
<table class="table table-bordered">
        <th>Nombre</th>
        <th>Pais</th>
    </thead>
    <tbody>
<?php
   while ($row = pg_fetch_row($RecordSet)) {
?>
         <tr>
             <td><?php echo $row[1]; ?></td>
             <td><?php echo $row[2]; ?></td>
        </tr>
<?php
    }
    pg_close($dbconn);
?>