package controller;

public class ControleurGeneral {
	public ControleurConnexion sonControleurConnexion;
	public ControleurAdministration sonControleurAdministration;
	
	public ControleurGeneral(){
		sonControleurAdministration = new ControleurAdministration();
		sonControleurConnexion = new ControleurConnexion();
	}
}
