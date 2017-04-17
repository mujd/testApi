
function registrarPerfil() {

    wins = new dhtmlXWindows();
    //skin = "dhx_terrace";
    //wins.setSkin(skin);
    winId = "winRegistrarPerfil";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("<b>Registrar Perfil</b>");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('perfil_add');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function cerrarRegistrarPerfil() {
    winId = "winRegistrarPerfil";
    wins.window(winId).close();
}

function actualizarPerfil(id) {

    wins = new dhtmlXWindows();
//    skin = "dhx_terrace";
//    wins.setSkin(skin);
    winId = "winPerfilActualizar";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("Modificar Perfil");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('perfil_update', {'id': id});
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}



function cerrarActualizarPerfil() {
    winId = "winPerfilActualizar";
    wins.window(winId).close();
}
function progressPerfil() {
    winId = "winRegistrarPerfil";
    wins.window(winId).progressOn();
}

function refreshTablaPerfil() {
    var $table = $('#example');
    $table.bootstrapTable('refresh');
}
function registrarPersona() {

    wins = new dhtmlXWindows();
    //skin = "dhx_terrace";
    //wins.setSkin(skin);
    winId = "winRegistrarPersona";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("<b>Registrar Persona</b>");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('persona_add');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function actualizarPersona(id) {

    wins = new dhtmlXWindows();
//    skin = "dhx_terrace";
//    wins.setSkin(skin);
    winId = "winPersonaActualizar";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("Modificar Persona");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('persona_update', {'id': id});
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function cerrarPersona() {
    winId = "winRegistrarPersona";

    wins.window(winId).close();
}

function registrarEmpresa() {

    wins = new dhtmlXWindows();
    //skin = "dhx_terrace";
    //wins.setSkin(skin);
    winId = "winRegistrarEmpresa";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("<b>Registrar Empresa</b>");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('empresa_add');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function actualizarEmpresa(id) {

    wins = new dhtmlXWindows();
//    skin = "dhx_terrace";
//    wins.setSkin(skin);
    winId = "winEmpresaActualizar";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("Modificar Empresa");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('empresa_update', {'id': id});
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function cerrarEmpresa() {
    winId = "winRegistrarEmpresa";

    wins.window(winId).close();
}

function registrarUcl() {

    wins = new dhtmlXWindows();
    //skin = "dhx_terrace";
    //wins.setSkin(skin);
    winId = "winRegistrarUcl";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("<b>Registrar Ucl</b>");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('ucl_add');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function actualizarUcl(id) {

    wins = new dhtmlXWindows();
//    skin = "dhx_terrace";
//    wins.setSkin(skin);
    winId = "winUclActualizar";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("Modificar Ucl");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('ucl_update', {'id': id});
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function cerrarUcl() {
    winId = "winRegistrarUcl";

    wins.window(winId).close();
}

function registrarConducta() {

    wins = new dhtmlXWindows();
    //skin = "dhx_terrace";
    //wins.setSkin(skin);
    winId = "winRegistrarConducta";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("<b>Registrar Conducta</b>");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('conducta_add');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function actualizarConducta(id) {

    wins = new dhtmlXWindows();
//    skin = "dhx_terrace";
//    wins.setSkin(skin);
    winId = "winConductaActualizar";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("Modificar Conducta");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('conducta_update', {'id': id});
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function cerrarConducta() {
    winId = "winRegistrarConducta";

    wins.window(winId).close();
}

function registrarCurso() {

    wins = new dhtmlXWindows();
    //skin = "dhx_terrace";
    //wins.setSkin(skin);
    winId = "winRegistrarCurso";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("<b>Registrar Curso</b>");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('curso_add');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function actualizarCurso(id) {

    wins = new dhtmlXWindows();
//    skin = "dhx_terrace";
//    wins.setSkin(skin);
    winId = "winCursoActualizar";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("Modificar Curso");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('curso_update', {'id': id});
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function cerrarCurso() {
    winId = "winRegistrarCurso";

    wins.window(winId).close();
}

function registrarEvaluacion() {

    wins = new dhtmlXWindows();
    //skin = "dhx_terrace";
    //wins.setSkin(skin);
    winId = "winRegistrarEvaluacion";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("<b>Registrar Evaluación</b>");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('evaluacion_add');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function actualizarEvaluacion(id) {

    wins = new dhtmlXWindows();
//    skin = "dhx_terrace";
//    wins.setSkin(skin);
    winId = "winEvaluacionActualizar";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("Modificar Evaluación");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('evaluacion_update', {'id': id});
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function cerrarEvaluacion() {
    winId = "winRegistrarEvaluacion";
    wins.window(winId).close();
}
