package appAdmin.Model;
import java.sql.*;
import java.util.ArrayList;

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

	public boolean ajouterProduit(Produit pdt) throws SQLException {
		Statement monInstruction = getConnexion().createStatement();
		String requete = "INSERT INTO produit(nom, prix, coup_coeur, stock, description) VALUES("+pdt.nom+", "+
		pdt.prix+", "+pdt.coupDeCoeur+", "+pdt.quantite+", "+pdt.description+")";
		System.out.println(requete);
		monInstruction.executeUpdate(requete);
		return true;
	}
	
	public ArrayList<Produit> getProduits() throws SQLException{
		Statement monInstruction = getConnexion().createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,
				ResultSet.CONCUR_UPDATABLE);
		String requete = "Select * FROM produit";
		ResultSet monResultat = monInstruction.executeQuery(requete);
		ArrayList resultats = new ArrayList<Produit>();
		ArrayList resultatLigne = new ArrayList();
		ResultSetMetaData rsmd = monResultat.getMetaData();
		while(monResultat.next()){
        	// Pour chaque contenu de colonne, on va r�cup�rer un objet qu'on va caster en string
        	for(int i = 1; i <= rsmd.getColumnCount(); i++){
        		resultatLigne.add(monResultat.getObject(i));
        	}
        	resultats.add(resultatLigne);
        	resultatLigne = new ArrayList<>();
        }
		return resultats;
	}
}
