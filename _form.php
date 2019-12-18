<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Update user <b><?php echo $user['titulo'] ?></b>
                <?php else: ?>
                    Create new User
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>titulo</label>
                    <input name="titulo" value="<?php echo $user['titulo'] ?>"
                           class="form-control <?php echo $errors['titulo'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['titulo'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>fecha</label>
                    <input name="fecha" value="<?php echo $user['fecha'] ?>"
                           class="form-control <?php echo $errors['fecha'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['fecha'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>imagen</label>
                    <input name="imagen" id='imagen' value="<?php echo $user['imagen'] ?>"
                           class="form-control  <?php echo $errors['imagen'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['imagen'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>pdf</label>
                    <input name="pdf" id='pdf' value="<?php echo $user['pdf'] ?>"
                           class="form-control  <?php echo $errors['pdf'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['pdf'] ?>
                    </div>
                </div>
            
                <div class="form-group">
                    <label>Image</label>
                    <input name="picture" id="img" type="file" class="form-control-file">
                </div>


                </div>



             

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/codigo.js"></script>