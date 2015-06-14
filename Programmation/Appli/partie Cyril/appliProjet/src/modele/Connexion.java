package modele;
import java.math.BigDecimal;
import java.sql.*;
import java.util.ArrayList;

import mainAppli.MainAppli;

public class Connexion {
	private Connection maConnexion;
	private Client admin;
	
	public Connexion(){
		try{
			Class.forName("oracle.jdbc.driver.OracleDriver");
		}
		catch (ClassNotFoundException e){
			System.out.println("Impossible de charger le pilote");
			System.exit(1);
		}
		String url = "jdbc:oracle:thin:cberth7/asse@oracle.iut-orsay.fr:1521:etudom";
		
		try {
			Connection maConnect = DriverManager.getConnection(url);
			maConnexion = maConnect;
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	
	public boolean connecterAdmin(String psd, String mdp) throws SQLException{
		Statement monInstruction = getConnexion().createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,
				ResultSet.CONCUR_UPDATABLE);
		String requete = "SELECT * " +
				"FROM produit " + 
				"WHERE droit = 1 " +
				"AND pseudo = "+ psd + " "+
				"AND password = " + mdp;
		
		ResultSet monResultat;
		monResultat = monInstruction.executeQuery(requete);
		ResultSetMetaData rsmd = monResultat.getMetaData();
		monResultat.last();
		int nbLignes = monResultat.getRow();
		monResultat.first();
		if(nbLignes == 1){
			return true;
		}else{
			return false;
		}
	}

	public Connection getConnexion(){
		return maConnexion;
	}
	
	public Client getAdmin(){
		return this.admin;
	}

	public void ajouterProduit(Produit pdt) throws SQLException {
		Statement monInstruction = getConnexion().createStatement();
		String requete = "INSERT INTO produit(nom, prix, coup_coeur, stock, description) VALUES("+pdt.nom+", "+
		pdt.prix+", "+pdt.coupDeCoeur+", "+pdt.quantite+", "+pdt.description+")";
		monInstruction.executeUpdate(requete);
	}
	
	public void supprimerProduit(int id) throws SQLException{
		Statement monInstruction = getConnexion().createStatement();
		String requete = "DELETE FROM produit WHERE id="+id;
		monInstruction.executeUpdate(requete);
	}
	
	public ArrayList<Client> getUtilisateurs() throws SQLException{
		Statement monInstruction = getConnexion().createStatement();
		String requete = "SELECT * FROM utilisateur";
		return null;
	}
	
	public ArrayList<Produit> getProduits() throws SQLException{
		Statement monInstruction = getConnexion().createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,
				ResultSet.CONCUR_UPDATABLE);
		String requete = "Select * FROM produit";
		ResultSet monResultat = monInstruction.executeQuery(requete);
		ArrayList<Produit> resultats = new ArrayList<Produit>();
		ArrayList<Object> resultatLigne = new ArrayList();
		ResultSetMetaData rsmd = monResultat.getMetaData();
		while(monResultat.next()){
        	// Pour chaque contenu de colonne, on va r�cup�rer un objet qu'on va caster en string
        	for(int i = 1; i <= rsmd.getColumnCount(); i++){
        		resultatLigne.add(monResultat.getObject(i));
        	}
        	// Cast to Produit
        	// ... Horrible code, but it works, so ... meh
        	// It's the last time I work with Oracle, returns everything in BigDecimal ._.
        	resultats.add(new Produit(MainAppli.sonControleurGeneral.sonControleurAdministration, resultatLigne.get(1).toString(),
        			resultatLigne.get(5).toString(),((BigDecimal) resultatLigne.get(2)).floatValue(), ((BigDecimal)resultatLigne.get(4)).intValue(), ((BigDecimal)resultatLigne.get(3)).equals(1),
        			null, null));
        	resultatLigne = new ArrayList<>();
        }
		return resultats;
	}
}
