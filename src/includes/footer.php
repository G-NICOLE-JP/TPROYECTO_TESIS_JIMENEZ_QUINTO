</div>
</div>
<?php 
include "../conexion.php";
$sql=mysqli_query($conexion,"SELECT * FROM configuracion;");
$resulta=mysqli_fetch_array($sql);
?>

<footer class="footer">
    <div class="container-fluid">
        <div class="copyright text-center">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a href="#" target="_blank"><?php echo $resulta['nombre']; ?></a>.
        </div>
    </div>
</footer>
</div>
</div>
<div id="nuevo_pass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Cambiar contraseña</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmPass">
                    <div class="form-group">
                        <label for="actual"><i class="fas fa-key"></i> Contraseña Actual</label>
                        <input id="actual" class="form-control" type="password" name="actual" placeholder="Contraseña actual" required>
                    </div>
                    <div class="form-group">
                        <label for="nueva"><i class="fas fa-key"></i> Contraseña Nueva</label>
                        <input id="nueva" class="form-control" type="password" name="nueva" placeholder="Contraseña nueva" required>
                    </div>
                    <button class="btn btn-success btn-block" type="button" onclick="btnCambiar(event)">Cambiar clave</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../assets/js/material-dashboard.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-notify.js"></script>
<script src="../assets/js/arrive.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="../assets/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="../assets/js/sweetalert2.all.min.js"></script>
<script src="../assets/js/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/js/chart.min.js"></script>
<script src="../assets/js/funciones.js"></script>
</body>

</html>