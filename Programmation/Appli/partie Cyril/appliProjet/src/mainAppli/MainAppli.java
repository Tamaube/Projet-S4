package mainAppli;

import java.sql.SQLException;
import java.util.ArrayList;

import modele.Connexion;
import modele.Produit;
import controller.ControleurAdministration;
import controller.ControleurConnexion;
import controller.ControleurGeneral;

public class MainAppli {
	public static ControleurGeneral sonControleurGeneral;
	
	public static void main(String[] args) throws SQLException{
		sonControleurGeneral = new ControleurGeneral();
		ArrayList<Produit> test = sonControleurGeneral.sonControleurConnexion.saConnexion.getProduits();
		for(int i = 0; i < test.size(); i++){
			System.out.println(test.get(i).nom);
		}
	}
}
