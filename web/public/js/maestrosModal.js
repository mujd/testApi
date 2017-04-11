
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
function cerrarPerfil() {
    winId = "winRegistrarPerfil";

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

function cerrarUcl() {
    winId = "winRegistrarUcl";

    wins.window(winId).close();
}

function registrarCompetenciaConductual() {

    wins = new dhtmlXWindows();
    //skin = "dhx_terrace";
    //wins.setSkin(skin);
    winId = "winRegistrarCompetenciaConductual";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("<b>Registrar Competencia Conductual</b>");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('competencia_add');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}

function cerrarCompetenciaConductual() {
    winId = "winRegistrarCompetenciaConductual";

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

function cerrarEvaluacion() {
    winId = "winRegistrarEvaluacion";
    wins.window(winId).close();
}
