package appAdmin.Control;

import java.sql.CallableStatement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.LinkedList;

import javax.swing.JOptionPane;

import appAdmin.Control.ControleurBD.OutilsJDBC;
import appAdmin.Model.Client;
import appAdmin.Model.Produit;

///////////////////////////////////////////////
//											  //
//CE CONTROLEUR N'EST PAS UTILISE ACTUELLEMENT//
//											  //
/////////////////////////////////////////////////

public class ControleurBD {
	public static class OutilsJDBC {
		// permet de faire la connexion 
		public static Connection openConnection (String url) {
			Connection co=null;
			try {
				Class.forName("oracle.jdbc.driver.OracleDriver");
				co= DriverManager.getConnection(url);
			}
			catch (ClassNotFoundException e){
				JOptionPane.showMessageDialog(null,"il manque le driver oracle");
				System.exit(1);
			}
			catch (SQLException e) {
				JOptionPane.showMessageDialog(null,"impossible de se connecter, veuillez verifiez l'etat de votre connection");
				System.exit(1);
			}
			return co;
			}
		// Fonction qui permet d'executer une requête, en passant en paramètre la requête, la connection JDBC, et un entier
		public static ResultSet exec1Requete (String requete, Connection co, int type){
			ResultSet res=null;
			try {
				Statement st;
				if (type==0){
					st=co.createStatement();}
				else {
					st=co.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, 
						       	ResultSet.CONCUR_READ_ONLY);
					};
				res= st.executeQuery(requete);
			}
			catch (SQLException e){
				System.out.println("Probleme lors de l'execution de la requete : "+requete);
				e.printStackTrace();
			};
			return res;
		}
		
		// fonction qui permet la fermeture de la connection à la Base de données
		public static void closeConnection(Connection co){
			try {
				co.close();
			}
			catch (SQLException e) {
			}	
	}
	}
	
	// Déclaration de tous les attributs nécessaire pour les fonctions, les requêtes
	static Connection co;// Variable de connection
	private static PreparedStatement ajoutProduit;
	private static PreparedStatement afficherProduit;
	private static PreparedStatement afficherUtilisateur;
	private static PreparedStatement supprimerProduit;

	/**
	 * initBD procédure statique qui permet de faire appel a une requête pl/sql, ou bien d'effectuer des requêtes sql
	 * en java 
	 */
	public static void initBD()
	{
		co=OutilsJDBC.openConnection("jdbc:oracle:thin:cberth7/asse@r2d2.iut-orsay.fr:1521:etudom");
		try {			
		
			ajoutProduit = co.prepareStatement("Insert into Produit(idProduit, nomProduit, prixProduit, stockProduit, descProduit) values(?,?,?,?,?)");
			
			afficherProduit = co.prepareStatement("Select * FROM Produit");
					
			afficherUtilisateur = co.prepareStatement("Select * FROM Client");
			
			supprimerProduit = co.prepareStatement("Delete FROM Produit WHERE id = ?");
			
			//modifierUtilisateur = co.prepareStatement("");
			
			//modifierProduit = co.prepareStatement("");
				
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	/**
	 * Ajout d'un produit
	 * @param idProduit, numero du produit en question 
	 * @param nomProduit, nom du produit
	 */
	public static void ajoutProduit(String idProduit, String nomProduit)
	{
		try {		
			ajoutProduit.setString(1, idProduit);
			ajoutProduit.setString(2, nomProduit);
			ajoutProduit.execute();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	/**
	 * Suppression d'un produit
	 * @param idProduit, numero du produit en question 
	 */
	public static void supprimerProduit(int idProduit)
	{
		try {		
			supprimerProduit.setInt(1, idProduit);supprimerProduit.execute();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	/**
	 * fonction permettant de recuperer tous les utilisateurs via le resultat obtenu des requêtes 
	 * @return un utilisateur
	 */
	public static Client[] afficherClient(){
		
		try {
			ResultSet result = affcherClient.executeQuery();
			LinkedList<Client> listeRetour = new LinkedList<Client>();
			while(result.next())
			{
				listeRetour.add(new Client(result.getString("id"),result.getString("nom")));
			}
			Client []retour = new Client[listeRetour.size()];
			listeRetour.toArray(retour);
			return retour;
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			return null;
		}
	}

	/**
	 * fonction permettant de recuperer tous les produist via le resultat obtenu des requêtes 
	 * @return un produit
	 */
	public static Produit[] afficherProduit(){
		
		try {
			ResultSet result = affcherProduit.executeQuery();
			LinkedList<Produit> listeRetour = new LinkedList<Produit>();
			while(result.next())
			{
				listeRetour.add(new Produit(result.getString("id"),result.getString("nom")));
			}
			Produit []retour = new Produit[listeRetour.size()];
			listeRetour.toArray(retour);
			return retour;
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			return null;
		}
	}

	/**
	 * procédure pour fermer la connexion 
	 */
	public static void close()
	{
		OutilsJDBC.closeConnection(co);
	}
}