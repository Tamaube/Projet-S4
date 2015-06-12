package appAdmin.Model;

import appAdmin.Model.Client;

public class Avis {
	public String titre;
	public String contenu;
	public int score;
	public Client sonClient;
	
	public Avis(String titre, String contenu, int score, Client sonClient){
		this.titre = titre;
		this.contenu = contenu;
		this.score = score;
		this.sonClient = sonClient;
	}
}
