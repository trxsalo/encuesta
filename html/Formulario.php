<main class="container p-4 container-lg"">
<div class=" row justify-content-center">

    <div class="row">
        <div class="col-md-12">

            <?php if(isset($_SESSION['mensaje'])) {?>
            <div class="alert alert-<?=$_SESSION['mensaje_tipo'];?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION["mensaje"] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            <?php session_unset(); }?>

            <div class="card card-body">
                <form action="../src/registrar.php" method="POST">
                    <h3 class="align-items-center">
                        ENCUESTA SOBRE QUE TANTO LE AGRADA PHP
                        </h1>
                        <p>
                            Por favor complete la encuesta con sinceridad.
                        </p>
                        <p>
                            Solo marca uno por pregunta.
                        </p>
                        <div class="container">
                            <div class="row">

                                <div class="col">

                                    <div class="card-body ">
                                        <p>
                                            Es usted:
                                        </p>


                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="profesion"
                                                    value="Estudaintes">
                                                Estudiante
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="profesion"
                                                    value="Profesional">
                                                Profesional
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="profesion"
                                                    value="Freelance">
                                                Freelance
                                            </label>
                                        </div>

                                    </div>


                                    <div class="card-body">
                                        <p>
                                            En que rol cumple:
                                        </p>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="rol"
                                                    value="Diseñador UX/UI">
                                                Diseñador UX/IU
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="rol"
                                                    value="Programador fronted">
                                                Frontend Developer
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="rol"
                                                    value="Programador back end">
                                                Programador Back end
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="rol"
                                                    value="DBA(Database Administrator)">
                                                DBA(Database Administrator)
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col">

                                    <div class="card-body">
                                        <p>
                                            Tiene conocimiento sobre el lenguaje PHP:
                                        </p>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="conocePHP"
                                                    value="SI">
                                                SI
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="conocePHP"
                                                    value="NO">
                                                NO
                                            </label>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <p>
                                            Que tanto conoce el lenguaje PHP:
                                        </p>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="phpConocimiento"
                                                    value="Ninguno">
                                                Ninguno
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="phpConocimiento"
                                                    value="Bajo">
                                                Bajo
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="phpConocimiento"
                                                    value="Medio">
                                                Medio
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <input class="form-check-input" type="checkbox" name="phpConocimiento"
                                                    value="Alto">
                                                Alto
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <input type="submit" value="ENVIAR"
                                    class="btn btn btn-outline-success btn-block form-control" name="enviar">
                            </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</main>