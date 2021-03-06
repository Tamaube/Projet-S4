package controller;

import java.sql.SQLException;
import java.util.ArrayList;

import modele.Client;
import modele.Connexion;
import modele.Produit;

public class ControleurConnexion {
	public ControleurGeneral sonControleurGeneral;
	public Connexion saConnexion;
	public Client admin;
	
	public ControleurConnexion(){
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


