package appAdmin.Model;

import java.util.ArrayList;

import appAdmin.Control.ControleurAdministration;

public class Produit {
	public ControleurAdministration sonControleurAdministration;
	public String id;
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
	
	public ControleurAdministration getSonControleurAdministration() {
		return sonControleurAdministration;
	}

	public void setSonControleurAdministration(
			ControleurAdministration sonControleurAdministration) {
		this.sonControleurAdministration = sonControleurAdministration;
	}

	public String getNom() {
		return nom;
	}

	public void setNom(String nom) {
		this.nom = nom;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public float getPrix() {
		return prix;
	}

	public void setPrix(float prix) {
		this.prix = prix;
	}

	public int getQuantite() {
		return quantite;
	}

	public void setQuantite(int quantite) {
		this.quantite = quantite;
	}

	public boolean isCoupDeCoeur() {
		return coupDeCoeur;
	}

	public void setCoupDeCoeur(boolean coupDeCoeur) {
		this.coupDeCoeur = coupDeCoeur;
	}

	public ArrayList<Avis> getSesAvis() {
		return sesAvis;
	}

	public void setSesAvis(ArrayList<Avis> sesAvis) {
		this.sesAvis = sesAvis;
	}

	public Categorie getSaCategorie() {
		return saCategorie;
	}

	public void setSaCategorie(Categorie saCategorie) {
		this.saCategorie = saCategorie;
	}

	public Produit(ControleurAdministration sonControleurAdministration, String nom, String description, float prix, int quantite){
		this.nom = nom;
		this.description = description;
		this.prix = prix;
		this.quantite = quantite;
	}
	
}
