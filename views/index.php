<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Asistencia</title>
    <link rel="icon" type="image/x-icon" href="<?php echo RUTA; ?>assets/images/favicon.png">
    <link rel="stylesheet" href="<?php echo RUTA; ?>assets/css/snackbar.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>assets/index/css/styles.css">

</head>
<body>
    <img src="<?php echo RUTA; ?>assets/images/bg.jpg" alt="Background Image" class="bg-video">
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-lg-0">
                <div class="widget">
                    <div class="fecha">
                        <p id="diaSemana" class="diaSemana"></p>
                        <p id="dia" class="dia"></p>
                        <p>De</p>
                        <p id="mes" class="mes"></p>
                        <p>Del</p>
                        <p id="year" class="year"></p>
                        <p></p>
                    </div>
                    <div class="reloj">
                        <p id="horas" class="horas"></p>
                        <p>:</p>
                        <p id="minutos" class="minutos"></p>
                        <p>:</p>
                        <div class="caja-segundos">
                            <p id="segundos" class="segundos"></p>
                            <p id="ampm" class="ampm"></p>
                        </div>
                    </div>
                </div>
                <h1 class="fst-italic lh-1 mb4">Sistema de Registro De Asistencia</h1>
                <p class="mb-5">Entradas y Salidas De Las Personas</p>
                <form id="contactForm" autocomplete="off">
                    <div class="row input-group-newsletter">
                        <div class="col">
                            <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingrese Codigo">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary" id="submitButton">Registrar</button>
                        </div>
                    </div>
                    <div class="social-icons">
                        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                            <div>
                                <label>
                                    <input type="radio" name="radio" value="entrada" checked>
                                    <span>Entrada</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio" value="salida">
                                    <span>Salida</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a href="<?php echo RUTA; ?>plantilla.php?pagina=login" class="btn btn-primary">Login</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo RUTA; ?>assets/js/snackbar.min.js"></script>
    <script src="<?php echo RUTA; ?>assets/js/axios.min.js"></script>
    <script>
        const ruta = '<?php echo RUTA; ?>';
        function mensaje(tipo, mensaje){
            Snackbar.show({
                text: mensaje,
                pos: 'top-right',
                backgroundColor: tipo == 'success' ? '#079F00' : '#FF0303',
                actionText: 'Cerrar'
            });
        }
    </script>
    <script src="<?php echo RUTA; ?>assets/index/js/scripts.js"></script>
</body>
</html>
