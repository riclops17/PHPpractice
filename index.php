<script>
    function prueba(){
        console.log("AAAAAAAAAAAAAAAAAA");
    }
</script>

<?php
include("db.php")
?>
<?php include("includes/header.php") ?>
     <div class = "container p-4">
         <div class = "row">
             <div class="col-md-4">
                 <?php if(isset($_SESSION['message'])){?>
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <?= $_SESSION['message']?>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 <?php session_unset();}?>
                 <div class="card card-body">
                     <!--A traves de un metodo post va a mandar los datos del formulario a save task php-->
                     <form action="save_task.php"method="POST">
                         <div class="form-group">
                             <input type="text" name ="title" class="form-control"placeholder="titulo de tarea" autofocus>
                         </div>
                         <div class="form-group">
                             <textarea name="description"  rows="2" class = "form-control" placeholder="descripcion de la tarea"></textarea>
                         </div>
                         <input type="button"class="btn btn-success btn-block" onclick="prueba()" name="save_task"value="Guardar">
                         <!-- on click -->
                     </form>
                 </div>
             </div>
             <div class = "col-md-8">
                <table class = "table table-bordered">
                    <thead>
                    <tr>
                        <th>titulo</th>
                        <th>descripcion</th>
                        <th>fecha de creacion</th>
                        <th>accciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM task";
                    $result_tasks =mysqli_query(CONEXCHION,$query);
                    while($row = mysqli_fetch_array($result_tasks)){?>
                        <tr>
                            <td> <?php echo $row['title']?> </td>
                            <td> <?php echo $row['description']?> </td>
                            <td> <?php echo $row['created_at']?> </td>
                            <td>
                                <a href="edit_task.php?id=<?php echo $row['id']?>"class= "btn btn-secondary">
                                   Editar
                                </a>
                                <a href="delete_task.php?id=<?php echo $row['id']?>"class= "btn btn-danger">
                                    eliminar
                                </a>

                            </td>
                        </tr>
                            <?php }  ?>



                    </tbody>

                </table>
             </div>
         </div>
     </div>
<?php include("includes/footer.php") ?>