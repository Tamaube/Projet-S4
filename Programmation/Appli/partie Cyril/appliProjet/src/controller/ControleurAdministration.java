package controller;

import java.util.ArrayList;

import mainAppli.MainAppli;
import modele.GestionCategorie;
import modele.Produit;

public class ControleurAdministration{
	public ControleurGeneral sonControleurGeneral;
	public GestionCategorie saGestionDeCategorie;
	public ArrayList<Produit> sesProduits;
	
	public ControleurAdministration(){
		sonControleurGeneral = MainAppli.sonControleurGeneral;
		saGestionDeCategorie = new GestionCategorie();
		sesProduits = null;
	}
	
}
