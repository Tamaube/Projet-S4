package appAdmin.Model;

import java.util.ArrayList;

public class Client {
	public int numero;
	public String pseudo;
	public String nom;
	public String prenom;
	public String mail;
	public int age;
	public String rue;
	public String ville;
	public String pays;
	public String codePostal;
	public ArrayList<Avis> sesAvis;
	
	public Client(int id, String pseudo, String nom, String prenom, int age, String mail,
			String rue, String ville, String codePostal, String pays, ArrayList<Avis> sesAvis){
		this.numero = id;
		this.nom = nom;
		this.prenom = prenom;
		this.pseudo = pseudo;
		this.mail = mail;
		this.age = age;
		this.rue = rue;
		this.ville = ville;
		this.pays = pays;
		this.codePostal = codePostal;
		this.sesAvis = sesAvis;
	}
}
