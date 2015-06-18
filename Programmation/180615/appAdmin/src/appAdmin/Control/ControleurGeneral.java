package appAdmin.Control;

import java.sql.SQLException;

import appAdmin.Control.ControleurAdministration;
import appAdmin.Control.ControleurConnexion;

public class ControleurGeneral {
	public ControleurConnexion sonControleurConnexion;
	public ControleurAdministration sonControleurAdministration;
	public ControleurVue sonControleurVue;
	// TODO : Controleur Vue
	
	public ControleurGeneral() throws InstantiationException, IllegalAccessException{
		sonControleurAdministration = new ControleurAdministration();
		sonControleurConnexion = new ControleurConnexion();
	}
	
	public static void main(String[] args) throws SQLException, InstantiationException, IllegalAccessException{
		ControleurGeneral test = new ControleurGeneral();
		System.out.println(test.sonControleurConnexion.saConnexion.getProduits());
	}
}
