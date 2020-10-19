<?php
include 'index.php';
include 'database.php';
?>
<?php
$pri=new connect();
$get=$pri->read();
//print_r($get);
?>
<div calss="container">

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">class</th>
        <th scope="col">Edit</th>
        <th scope="col">DELETE</th>
      </tr>
    </thead>
    <?php foreach ($get as $value):?>
    <tbody>

      <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['fname']; ?></td>
        <td><?php echo $value['lname'];?></td>
        <td><?php echo $value['class'];?></td>
           <td><a href="edit.php?id=<?php echo $value['id']?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg> </a></td>

<td> <a href="delete.php?id=<?php echo $value['id']?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293 6.854 8.146z"/>
</svg></td>



      </tr>

    </tbody
    <?php endforeach;?>
  </table>




</div>
