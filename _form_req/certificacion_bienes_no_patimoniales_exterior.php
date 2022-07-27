<?php
/*
 * INSTITUTO NACIONAL DE PATRIMONIO CULTURAL
 * Portal de Trámites 2020
 */
include_once 'modelo/clsNacionalidad.php';
include_once 'modelo/clspais.php';
?>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Formulario de Información</div>
        <form enctype="multipart/form-data" method="post" class="form-padding" action="controller/registrar_tramite.php" autocomplete="off">
            <input type="hidden" name="idt" id="idt" value="<?php echo $_GET["idt"]; ?>">
            <input type="hidden" name="estadot" id="estadot" value="<?php echo $estado_inicial; ?>">
            <input type="hidden" name="duraciont" id="duraciont" value="<?php echo $tramite_tiempo; ?>">
            <input type="hidden" name="iniciat" id="iniciat" value="<?php echo $inicia_tramite; ?>">
            <div class="row">
                <div class="col-xs-12">
                    <p class="instrucciones_formularios_ct">Recuerde que los campos marcados con <span class="sp-requerido">*</span> son requeridos.</p>
                </div>
                <div class="col-xs-12">
                    <legend><i class="zmdi zmdi-info-outline"></i> &nbsp; Información General</legend>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 checkbox">
                    <div class="group-material">
                        <input id="ubicacion_domiciliaria" type="checkbox" name="remember" kl_vkbd_parsed="true">
                        <label for="ubicacion_domiciliaria">Corresponde a mi ubicación domiciliaria</label>
                        <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $_SESSION["codusuario"]; ?>"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="group-material">
                        <input id="provincia" name="provincia" type="text" class="tooltips-general material-control" placeholder="Por ejemplo: Cotopaxi" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escriba/seleccione la provincia de ubicación del bien" onKeyUp="this.value = this.value.toUpperCase();">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Provincia <span class="sp-requerido">*</span></label>
                        <input type="hidden" name="id_provincia" id="id_provincia"/>
                        <input type="hidden" name="id_regional" id="id_regional" value="<?php echo $_SESSION["regional"]; ?>"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="group-material">
                        <input id="canton" name="canton" type="text" class="tooltips-general material-control" placeholder="Por ejemplo: Latacunga" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escriba/seleccione el cantón de ubicación del bien" onKeyUp="this.value = this.value.toUpperCase();">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Cantón <span class="sp-requerido">*</span></label>
                        <input type="hidden" name="id_canton" id="id_canton"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="group-material">
                        <input id="parroquia" name="parroquia" type="text" class="tooltips-general material-control" placeholder="Por ejemplo: Juan Montalvo" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escriba/seleccione su parroquia de residencia" onKeyUp="this.value = this.value.toUpperCase();">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Parroquia <span class="sp-requerido">*</span></label>
                        <input type="hidden" name="id_parroquia" id="id_parroquia"/>
                    </div>
                </div>                             
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="group-material">
                        <input id="direccion" name="direccion" type="text" class="material-control tooltips-general" placeholder="Por ejemplo: Benalcázar 2340 y 9 de Octubre" required="" maxlength="100" data-toggle="tooltip" data-placement="top" onKeyUp="this.value = this.value.toUpperCase();"> <!--title="Escriba la dirección de su domicilio" -->
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Dirección <span class="sp-requerido">*</span></label>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="group-material">
                        <span>País de Origen <span class="sp-requerido">*</span></span>
                        <select name="nacionalidad" id="nacionalidad" class="tooltips-general material-control" required="" data-toggle="tooltip" data-placement="top" title="Elija la nacionalidad">
                            <option value="" disabled="" selected="">Selecciona el país de origen</option>
                            <?php
                            $pais = new clsNacionalidad;
                            $rsNacionalidad = $pais->nac_seleccionartodo();
                            while ($row = mysqli_fetch_array($rsNacionalidad)) {
                                ?>
                                <option value="<?php echo $row["nac_codigo"]; ?>"><?php echo $row["nac_nombre"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>          
            </div>
            <div class="col-xs-12">
                <legend><i class="zmdi zmdi-gps-dot"></i> &nbsp; Datos destino</legend>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="group-material">
                        <input name="fecha_envio" id="fecha_envio" type="date" class="material-control tooltips-general" placeholder="Escoja una fecha de envió" step="1" max="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>" required="" data-toggle="tooltip" data-placement="top" > <!--title="Escribe el código correlativo del libro, solamente números"-->
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Fecha de envió <span class="sp-requerido">*</span></label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="group-material">
                        <input id="direccion" name="direccion" type="text" class="material-control tooltips-general" placeholder="Por ejemplo: Benalcázar 2340 y 9 de Octubre" required="" maxlength="100" data-toggle="tooltip" data-placement="top" onKeyUp="this.value = this.value.toUpperCase();"> <!--title="Escriba la dirección de su domicilio" -->
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Dirección de envió<span class="sp-requerido">*</span></label>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="group-material">
                        <span>País de Envió <span class="sp-requerido">*</span></span>
                        <select name="pais-envio" id="pais-envio" class="tooltips-general material-control" required="" data-toggle="tooltip" data-placement="top" title="Elija la nacionalidad">
                            <option value="" disabled="" selected="">Selecciona el país de envió</option>
                            <?php
                            $pais = new clspais();
                            $rsPais = $pais->pais_seleccionartodo();
                            while ($row = mysqli_fetch_array($rsPais)) {
                                ?>
                                <option value="<?php echo $row["pai_codigo"]; ?>"><?php echo $row["pai_nombre"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="group-material">
                        <input id="direccion" name="direccion" type="text" class="material-control tooltips-general" placeholder="Por ejemplo: Benalcázar 2340 y 9 de Octubre" required="" maxlength="100" data-toggle="tooltip" data-placement="top" onKeyUp="this.value = this.value.toUpperCase();"> <!--title="Escriba la dirección de su domicilio" -->
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Ciudad de envió<span class="sp-requerido">*</span></label>
                    </div>
                </div> 
            </div>
            <div class="col-xs-12">
                <legend><i class="zmdi zmdi-check-all"></i> &nbsp; Objetos a certificar</legend>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr class="info">
                                <td colspan="1" class="nuevo">Nuevo registro <a href="?sec=1"><img src="img/plus1.png" alt="Nuevo" width="20" height="20" /></a></td>
                            </tr>

                            <!--                        <div class="col-xs-6 text-center">
                                                        <button type="reset" id="registrarseNuevo" class="btn btn-info" data-toggle="modal" data-target="#ModalRegistroObjeto"> Registrar Objeto &nbsp;&nbsp; <i class="zmdi zmdi-account-add"></i></button>       
                                                    </div>-->

                        <div class="col-xs-6 text-center">
                            <button type="reset" id="registrarseNuevo" class="btn btn-info" data-toggle="modal" data-target="#ModalRegistroObjeto"> Registrarse &nbsp;&nbsp; <i class="zmdi zmdi-account-add"></i></button>       
                        </div>

                        <tr class="info">
                            <th style="width:15%">Cantidad</th>
                            <th style="width:30%">Tipo de bien cultural</th>
                            <th style="width:10%">Tema</th>
                            <th style="width:10%">Autor</th>
                            <th style="width:10%">Técnica</th>
                            <th style="width:10%">Dimensiones</th>
                            <th style="width: 10%;" class="text-right">Acciones</th>
                        </tr>
                        </thead>

                    </table>          
                </div>
            </div>
            <br>
            <div class="col-xs-12">
                <legend><i class="zmdi zmdi-calendar-alt"></i> &nbsp; Lugar, Fecha y Hora de Atención</legend>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="group-material">
                    <span>Lugar de la cita <span class="sp-requerido">*</span></span>
                    <select id="hora" name="hora" class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige la hora">
                        <option value="" disabled="" selected="">Selecciona la zonal</option>
                        <option value="08:00 - 08:20">Zonal 1</option>
                        <option value="14:00 - 14:20">Zonal 2</option>
                        <option value="15:30 - 15:50">15:30 - 15:50</option>
                    </select>
                </div>
            </div>

            <!--             <div id="fec2" class="row margensup" >-->
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="group-material">
                        <input id="txtfec2" name="txtfec2" type="date" class="tooltips-general material-control" placeholder="Escoge la fecha" pattern="[0-9]{1,20}"  maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe el código correlativo del libro, solamente números">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Fecha de atención <span class="sp-requerido">*</span></label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="group-material">
                        <span>Horario disponible <span class="sp-requerido">*</span></span>
                        <select id="txthor2" name="txthor2" class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige la hora">
                            <option value="" disabled="" selected="">Selecciona una hora</option>
                            <option value="08:00 - 08:20">08:00 - 08:20</option>
                            <option value="14:00 - 14:20">14:00 - 14:20</option>
                            <option value="15:30 - 15:50">15:30 - 15:50</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 checkbox">
                    <div class="group-material">
                        <input id="checkbox1" required="" type="checkbox" name="remember" kl_vkbd_parsed="true">
                        <label for="checkbox1">Acepto el presente <a href="#" data-toggle="modal" data-target="#ModalRegistroObjeto">Acuerdo de Confidencialidad y Responsabilidad</a></label> 
                    </div>
                </div>            
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-center">
                        <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                        <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-arrow-right"></i> &nbsp;&nbsp; Enviar</button>
                        <!--<a href="ue_bandeja_enviados.php?proc=regtra&est=1" class="enlace_especial">Completado</a>-->
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once("./modal/acuerdo_conf.php"); ?>
<?php include_once("./includes/footer.php"); ?>
<?php include_once('./modal/registro_objeto.php'); ?>