package appAdmin.Model;

import java.util.ArrayList;

import appAdmin.Control.ControleurAdministration;

public class Produit {
	public ControleurAdministration sonControleurAdministration;
	public String nom;
	public String description;
	public float prix;
	public int quantite;
	public boolean coupDeCoeur;
	public ArrayList<Avis> sesAvis;
	public Categorie saCategorie;
	
	public Produit(ControleurAdministration sonControleurAdministration, String nom, String description, float prix, int quantite,
			boolean coupDeCoeur, ArrayList<Avis> sesAvis, Categorie saCategorie){
		this.nom = nom;
		this.description = description;
		this.prix = prix;
		this.quantite = quantite;
		this.coupDeCoeur = coupDeCoeur;
		this.sesAvis = sesAvis;
		this.saCategorie = saCategorie;
	}
	
	public Produit(ControleurAdministration sonControleurAdministration, String nom, String description, float prix, int quantite){
		this.nom = nom;
		this.description = description;
		this.prix = prix;
		this.quantite = quantite;
	}
}
