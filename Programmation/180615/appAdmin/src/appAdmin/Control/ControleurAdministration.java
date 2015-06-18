package appAdmin.Control;

import java.util.ArrayList;

import appAdmin.Main;
import appAdmin.Model.GestionCategorie;
import appAdmin.Model.Produit;

public class ControleurAdministration{
	public ControleurGeneral sonControleurGeneral;
	public GestionCategorie saGestionDeCategorie;
	public ArrayList<Produit> sesProduits;
	
	public ControleurAdministration(){
		sonControleurGeneral = Main.sonControleurGeneral;
		saGestionDeCategorie = new GestionCategorie();
		sesProduits = null;
	}
	
}
