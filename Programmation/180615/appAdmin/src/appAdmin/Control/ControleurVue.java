package appAdmin.Control;

import appAdmin.Main;

public class ControleurVue {
	public MenuControllerAccueil sonControleurAccueil;
	public ControleurGeneral sonControleurGeneral;
	
	
	public ControleurVue(){
		sonControleurAccueil = new MenuControllerAccueil();
		sonControleurGeneral = Main.sonControleurGeneral;
	}
}
