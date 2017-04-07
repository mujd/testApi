
function registrarPerfil() {

    wins = new dhtmlXWindows();
    skin = "dhx_terrace";
    wins.setSkin(skin);
    winId = "winRegistrarPerfil";
    wins.createWindow(winId, 1, 1, 780, 530);
    wins.window(winId).setText("Registrar Perfil");
    wins.window(winId).setModal(true);
    wins.window(winId).button("minmax").disable();
    wins.window(winId).centerOnScreen();
    wins.window(winId).progressOn();
    wins.window(winId).setIconCss("without_icon");
    var url = Routing.generate('add_perfil');
    wins.window(winId).attachURL(url);
    wins.window(winId).attachEvent("onContentLoaded", function (id) {
        id.progressOff();
    });
}
   