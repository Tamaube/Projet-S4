package appAdmin.Control;

import java.sql.SQLException;

import appAdmin.Control.ControleurAdministration;
import appAdmin.Control.ControleurConnexion;

//Controleur Général reprenant les autres controleurs pour pouvoir accéder à la base données 

public class ControleurGeneral {
	public ControleurConnexion sonControleurConnexion;
	public ControleurAdministration sonControleurAdministration;
	public ControleurVue sonControleurVue;
	
	public ControleurGeneral() throws InstantiationException, IllegalAccessException{
		sonControleurAdministration = new ControleurAdministration();
		sonControleurConnexion = new ControleurConnexion();
	}
	
	public static void main(String[] args) throws SQLException, InstantiationException, IllegalAccessException{
		ControleurGeneral test = new ControleurGeneral();
		System.out.println(test.sonControleurConnexion.saConnexion.getProduits());
	}
}
