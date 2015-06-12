package modele;

import java.util.ArrayList;

public class Categorie {
	public String nom;
	public int num;
	public ArrayList<Categorie> sesSousCategories;
	public Categorie saCategorieMere;
	public ArrayList<Produit> sesProduits;
	public GestionCategorie saGestionCategorie;
	
	public Categorie(String nom, int num, ArrayList<Categorie> sesSousCategories, Categorie saCategorieMere,
			ArrayList<Produit> sesProduits, GestionCategorie saGestionCategorie){
		this.nom = nom;
		this.num = num;
		this.sesSousCategories = sesSousCategories;
		this.saCategorieMere = saCategorieMere;
		this.sesProduits = sesProduits;
		this.saGestionCategorie = saGestionCategorie;
	}
}
