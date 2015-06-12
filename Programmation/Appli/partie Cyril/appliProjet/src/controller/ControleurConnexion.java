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
	
	public boolean addProduit(Produit pdt) throws SQLException{
		return saConnexion.ajouterProduit(pdt);
	}
	
	public ArrayList<Produit> getProduits() throws SQLException{
		return saConnexion.getProduits();
	}
}

