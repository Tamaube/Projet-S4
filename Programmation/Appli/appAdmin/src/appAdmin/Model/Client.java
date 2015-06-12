package appAdmin.Model;

public class Client {
	public int numero;
	public String nom;
	public String prenom;
	public String pseudo;
	public String mail;
	public int age;
	public String rue;
	public String ville;
	public String pays;
	public int codePostal;
	
	public Client(int id, String nom, String prenom,String pseudo,String mail,int age,
			String rue, String ville, String pays, int codePostal){
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
	}
}
