package appAdmin.Control;

import java.sql.SQLException;
import java.util.ArrayList;

import appAdmin.Model.Client;
import appAdmin.Model.Connexion;
import appAdmin.Model.Produit;

//Controleur permettant d'appeler une instance de Connexion et ainsi se connecter à la base de données

public class ControleurConnexion {
	public ControleurGeneral sonControleurGeneral;
	public Connexion saConnexion;
	public Client admin;
	
	public ControleurConnexion() throws InstantiationException, IllegalAccessException{
		saConnexion = new Connexion();
	}
	public boolean connexionAdmin(String psd, String mdp) throws SQLException{
		return saConnexion.connecterAdmin(psd, mdp);
	}
	
	public void addProduit(Produit pdt) throws SQLException{
		saConnexion.ajouterProduit(pdt);
	}
	
	public ArrayList<Produit> getProduits() throws SQLException{
		return saConnexion.getProduits();
	}
	
	public ArrayList<Client> getUtilisateurs() throws SQLException{
		return saConnexion.getUtilisateurs();
	}
	

}


