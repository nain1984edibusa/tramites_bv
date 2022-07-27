<?php
/*
 * INSTITUTO NACIONAL DE PATRIMONIO CULTURAL
 * Portal de Trámites 2022
 */
?>

<div class="modal fade" tabindex="-1" role="dialog" id="ModalRegistroObjeto">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="controller/registrar_usuario.php" autocomplete="off" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">Registro de Objetos</h4>
                </div>
                </br>
                <div class="modal-body">
<!--                    <p>Ingrese la información personal solicitada. El correo electrónico que registre le permitirá activar su cuenta, por lo tanto ingrese una cuenta de correo electrónico a la cual tenga acceso.</p>
                        <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Importante:</strong> En los campos de Provincia, Cantón, Parroquia y Dirección, registre su información domiciliaria actual.
                        </div>-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input id="cantidad" name="cantidad" type="number" class="tooltips-general material-control" placeholder="Por ejemplo: 10" required="" maxlength="70" data-toggle="tooltip" data-placement="top"  onKeyUp="this.value = this.value.toUpperCase();"><!--title="Escriba su número de identificación"-->
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cantidad<span class="sp-requerido">*</span></label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <span>Tipo bien cultural <span class="sp-requerido">*</span></span>
                                <select id="tipo_identificacion" name="tipo_identificacion" class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" <!--title="Elija su tipo de indentificación"-->>
                                    <option value="" disabled="" selected="">Selecciona una opción</option>
                                    <option value="CI">CI</option>
                                    <option value="RUC">RUC</option>
                                    <option value="PASAPORTE">Pasaporte</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input id="nombres" name="nombres" type="text" class="tooltips-general material-control" placeholder="Por ejemplo: Carlos Manuel" required="" maxlength="70" data-toggle="tooltip" data-placement="top" onKeyUp="this.value = this.value.toUpperCase();"> <!--title="Escriba sus nombres completos"--> 
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tema <span class="sp-requerido">*</span></label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input id="apellidos" name="apellidos" type="text" class="tooltips-general material-control" placeholder="Por ejemplo: Silva Cuadrado" required="" maxlength="50" data-toggle="tooltip" data-placement="top" onKeyUp="this.value = this.value.toUpperCase();"> <!--title="Escriba sus apellidos completos"--> 
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Autor <span class="sp-requerido">*</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input id="provincia" name="provincia" type="text" class="tooltips-general material-control" placeholder="Por ejemplo: Cotopaxi" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escriba/seleccione su provincia de residencia" onKeyUp="this.value = this.value.toUpperCase();">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tecnica <span class="sp-requerido">*</span></label>
                                <input type="hidden" name="id_provincia" id="id_provincia"/>
                                <input type="hidden" name="id_regional" id="id_regional"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <div class="group-material">
                                    <input id="largo" name="largo" type="number" class="material-control tooltips-general" placeholder="Por ejemplo: 10" required="" maxlength="100" data-toggle="tooltip" data-placement="top";"> 
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Largo (cm)<span class="sp-requerido">*</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                    <input id="ancho" name="ancho" type="number" class="material-control tooltips-general" placeholder="Por ejemplo: 10" required="" maxlength="100" data-toggle="tooltip" data-placement="top";"> 
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Ancho (cm)<span class="sp-requerido">*</span></label>
                                </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                    <input id="profundidad" name="profundidad" type="number" class="material-control tooltips-general" placeholder="Por ejemplo: 10" required="" maxlength="100" data-toggle="tooltip" data-placement="top";"> 
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Profundidad (cm)<span class="sp-requerido">*</span></label>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal"><i class="zmdi zmdi-close"></i> &nbsp; Cancelar</button>
                        </div>
                        <div class="col-xs-6 text-center">
                            <button type="submit" disabled id="btn_registrarse" class="btn btn-success"><i class="zmdi zmdi-account-add"></i> &nbsp; Registrarse</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

