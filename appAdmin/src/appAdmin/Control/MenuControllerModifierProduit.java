package appAdmin.Control;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;

import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import appAdmin.Main;
import appAdmin.Model.Produit;
//import appAdmin.Control.MenuControllerAjouterProduit.ProduitProperty;

public class MenuControllerModifierProduit implements Initializable {
	
	private Stage prevStage;
    private Scene scene;
    private ControleurGeneral sonControleurGeneral;
    private ControleurAdministration sonControleurAdministration;
  
    
    //Classe permettant d'introduire les Informations sur les produits dans le tableau de la vue
	public class ProduitProperty{
		
		 public SimpleStringProperty id = new SimpleStringProperty();
	     public SimpleStringProperty nom = new SimpleStringProperty();
	     public SimpleStringProperty prix = new SimpleStringProperty();
	     public SimpleStringProperty stock = new SimpleStringProperty();
	     public SimpleStringProperty desc = new SimpleStringProperty();
	         
	     public String getId() {
	    	 return id.get();
	     }
	 
	     public String getNom() {
	    	 return nom.get();
	     }	
	     
	     public String getPrix() {
	    	 return prix.get();
	     }
	 
	     public String getStock() {
	    	 return stock.get();
	     }	
	     
	     public String getDesc() {
	    	 return desc.get();
	     }
	 	
	} 
    
    public Scene getScene() {
		return scene;
	}

	public void setScene(Scene scene) {
		this.scene = scene;
	}
	
	//Tous les élements "@FXML" appartiennent à la vue
    @FXML 
    private Button accueilButton;
    @FXML
    private Button quitterButton;
    
    @FXML
    ObservableList<ProduitProperty> dataProduit;
    
    @FXML
    private TableView<ProduitProperty> produitsTable;
    @FXML
    private TableColumn<ProduitProperty, String> idColumn;
    @FXML
    private TableColumn<ProduitProperty, String> nomColumn;
    @FXML
    private TableColumn<ProduitProperty, String> prixColumn;
    @FXML
    private TableColumn<ProduitProperty, String> coupDeCoeurColumn;
    @FXML
    private TableColumn<ProduitProperty, String> stockColumn;
    @FXML
    private TableColumn<ProduitProperty, String> descColumn;
 
    /*@FXML 
    private Button chercherButton;
    @FXML
    private Button modifierButton;
    @FXML
    private Button supprimerButton;*/
    
    public MenuControllerModifierProduit() {
		// TODO Auto-generated constructor stub
        this.prevStage = new Stage();
    }
    
    public void setPrevStage(Stage stage){
        this.prevStage = stage;
    }
     
	   /*@FXML
	   public void remplirProduit() throws SQLException {
	    	produits = FXCollections.observableArrayList();
	    	ResultSet rs1 = this.co.getProduit();
			while(rs1.next()){
				Produit p = new Produit();
				String nom = rs1.getString(1);
				p.setNom(nom);
				String desc = rs1.getString(2);
				p.setDesc(desc);	
				float prix = rs1.getFloat(3);
				p.setPrix(prix);
				int quantite = rs1.getInt(4);
				p.setQuantite(quantite);
				produits.add(p);
			}*/
			
		@Override
		public void initialize(URL location, ResourceBundle resources) {

		//Instances des produits affichés dans le tableau
			
	        ProduitProperty pp = new ProduitProperty();
			pp.id.set("1");
			pp.nom.set("TSMetallica");
			pp.prix.set("12");
			pp.desc.set("TShirt Metallica Rose");
			pp.stock.set("20");

	        ProduitProperty pp2 = new ProduitProperty();
			pp2.id.set("2");
			pp2.nom.set("TSRock");
			pp2.prix.set("5");
			pp2.desc.set("teeshirt Rock vert");
			pp2.stock.set("50");
			
	        ProduitProperty pp3 = new ProduitProperty();
			pp3.id.set("3");
			pp3.nom.set("BottineHaute");
			pp3.prix.set("50");
			pp3.desc.set("Chaussure Bottine Haute");
			pp3.stock.set("2");
			
	        ProduitProperty pp4 = new ProduitProperty();
			pp4.id.set("4");
			pp4.nom.set("SweatMetallica");
			pp4.prix.set("25");
			pp4.desc.set("Un super sweat");
			pp4.stock.set("20");
			
	        ProduitProperty pp5 = new ProduitProperty();
			pp5.id.set("5");
			pp5.nom.set("Tee Shirt Rammstein");
			pp5.prix.set("15");
			pp5.desc.set("tee shirt rammstein");
			pp5.stock.set("45");
			
	        ProduitProperty pp6 = new ProduitProperty();
			pp6.id.set("6");
			pp6.nom.set("Tee Shirt Meow");
			pp6.prix.set("25");
			pp6.desc.set("tee shirt en coton Couleur(s) du produit Noir");
			pp6.stock.set("50");
			
	        ProduitProperty pp7 = new ProduitProperty();
			pp7.id.set("7");
			pp7.nom.set("Tee Shirt Kitty");
			pp7.prix.set("15");
			pp7.desc.set("Coton Couleur : noir");
			pp7.stock.set("20");
			
			//ControleurBD.ajoutProduit(pp.id.get(), pp.nom.get());
			/*Produit p = new Produit(sonControleurAdministration, nomText.getText(), descText.getText(), Float.parseFloat(prixText.getText()), Integer.parseInt(stockText.getText()));
	  		sonControleurGeneral.sonControleurConnexion.addProduit(p);*/
			
			idColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("id"));
			nomColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("nom"));
			prixColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("prix"));
			stockColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("stock"));
			descColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("desc"));
			
			dataProduit = FXCollections.observableArrayList();
			dataProduit.add(pp);
			dataProduit.add(pp2);
			dataProduit.add(pp3);
			dataProduit.add(pp4);
			dataProduit.add(pp5);
			dataProduit.add(pp6);
			dataProduit.add(pp7);
		    produitsTable.setItems(dataProduit);
		    
		    
		    //Permet d'afficher les produits dans la base de données
		    /*try {
		    	
				for(Produit p : Main.sonControleurGeneral.sonControleurConnexion.getProduits()){
			        ProduitProperty pp = new ProduitProperty();
					//pp.id.set(p.getId());
					pp.nom.set(p.getNom());
					pp.prix.set(Float.toString(p.getPrix()));
					pp.desc.set(p.getDescription());
					pp.stock.set(Integer.toString(p.getQuantite()));
					dataProduit.add(pp);
				}
			} catch (SQLException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}*/
		
		}
   	
	//fonction appelée par le bouton "précédent"	
	@FXML
	public void goToAccueil(Event event) throws IOException {
	            
	    FXMLLoader loader = new FXMLLoader();
	   	loader.setLocation(Main.class.getResource("View/Accueil.fxml"));
	    prevStage.setTitle("Accueil");
	    Pane myPane = null;
	    myPane = loader.load();
	    Scene scene = new Scene(myPane);
	    scene.getStylesheets().add("application/application.css");
	    prevStage.setScene(scene);
	         
	    MenuControllerAccueil controller = (MenuControllerAccueil)loader.getController();
	    if(controller != null)
	      controller.setPrevStage(prevStage);	   	   	   	   
	} 
	
	//fonction appelée par le bouton "quitter"
	@FXML
	public void quitterControleur(MouseEvent event){
		Alert alert = new Alert(AlertType.INFORMATION);
		alert.setTitle("Information");
		alert.setHeaderText(null);
		alert.setContentText("Les produits ont bien été enregistrés");

		alert.showAndWait();
		prevStage.close();
	}
}	 	 