package mainAppli;

import java.sql.SQLException;

import modele.Connexion;
import controller.ControleurAdministration;
import controller.ControleurConnexion;
import controller.ControleurGeneral;

public class MainAppli {
	public static ControleurGeneral sonControleurGeneral;
	
	public static void main(String[] args) throws SQLException{
		sonControleurGeneral = new ControleurGeneral();
	}
}
