package appAdmin.Control;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.Optional;
import java.util.ResourceBundle;

import javax.swing.JOptionPane;

import appAdmin.Control.ControleurBD;
import appAdmin.Model.Avis;
import appAdmin.Model.Categorie;
import appAdmin.Model.Connexion;
import appAdmin.Model.Produit;
import appAdmin.Main;
import javafx.beans.property.SimpleIntegerProperty;
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
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;

//Controller pour "l'ajout d'un produit"

public class MenuControllerAjouterProduit implements Initializable{
	
     private Stage prevStage;
     private Scene scene;
     private ControleurGeneral sonControleurGeneral;
     private ControleurAdministration sonControleurAdministration;
   
    //classe permettant d'instancier les produits dans le tableau de la vue
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

	 @FXML 
     private TextField idText;
     @FXML 
     private TextField nomText;
     @FXML 
     private TextField prixText;
     @FXML 
     private TextField stockText;
     @FXML 
     private TextField descText;
     @FXML
     private Button ajouterButton;
     @FXML 
     private Button quitterButton;
     @FXML 
     private Button accueilButton;
     
     ObservableList<ProduitProperty> dataProduit;
     
     @FXML
     private TableView<ProduitProperty> produitTable;
     @FXML
     private TableColumn<ProduitProperty, String> idColumn;
     @FXML
     private TableColumn<ProduitProperty, String> nomColumn;
     @FXML
     private TableColumn<ProduitProperty, String> prixColumn;
     @FXML
     private TableColumn<ProduitProperty, String> stockColumn;
     @FXML
     private TableColumn<ProduitProperty, String> descColumn;
     @FXML
     private TableColumn<ProduitProperty, String> coeurColumn;
     
	public MenuControllerAjouterProduit() {
		// TODO Auto-generated constructor stub
        this.prevStage = new Stage();	
	}
     
	@Override
	public void initialize(URL location, ResourceBundle resources) {
		// TODO Auto-generated method stub
		idColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("id"));
		nomColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("nom"));
		prixColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("prix"));
		stockColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("stock"));
		descColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("desc"));
		
		dataProduit = FXCollections.observableArrayList();
	    produitTable.setItems(dataProduit);
	}
		
    
    //ancien bouton "ajouter"
   /* @FXML
    public void ajoutProduit(MouseEvent event) throws IOException, SQLException{
  	   	
  	  if(nomText.getText().length()==0 && prixText.getText().length()==0 && stockText.getText().length()==0
  			&& descText.getText().length()==0){
  		  // TODO : 1) Créer une nouvelle instance de Produit
  		  // 2) Appeler controleurGeneral.sonControleurConnexion.saConnexion.addProduit(produit);
  		  Alert alert = new Alert(AlertType.WARNING);
  		  alert.setTitle("Oops !");
  		  alert.setHeaderText("Je crois que tu as oublié quelque chose...");
  		  alert.setContentText("Remplissez vos champs de texte");
  		  alert.showAndWait();  	
  	  }
  	  else
  	  {

  	    Produit p = new Produit(sonControleurAdministration, nomText.getText(), descText.getText(), Float.parseFloat(prixText.getText()), Integer.parseInt(stockText.getText()));		
  		//co.ajouterProduit(p);
  		sonControleurGeneral.sonControleurConnexion.addProduit(p);
  		Alert alert = new Alert(AlertType.CONFIRMATION);
  		alert.setTitle("Encore ?");
  		alert.setHeaderText("Ajout de produits");
  		alert.setContentText("D'autres produits à rajouter ?");
  		ButtonType buttonTypeOui = new ButtonType("Oui");
  		ButtonType buttonTypeNon = new ButtonType("Non");
  		
  		alert.getButtonTypes().setAll(buttonTypeOui, buttonTypeNon);

  		Optional<ButtonType> result = alert.showAndWait();
  		if (result.get() == buttonTypeOui){
  			
  			 FXMLLoader loader = new FXMLLoader();
  			 Stage stage = new Stage();
  	   	     loader.setLocation(Main.class.getResource("view/fenetreAjoutProduit.fxml"));
  	         stage.setTitle("Ajout Produit");
  	         Pane myPane = null;
  	         myPane = loader.load();
  	         Scene scene = new Scene(myPane);
  	         stage.setScene(scene);
	         scene.getStylesheets().add("application/application.css");
  	         stage.show();	
  	         
  	         MenuControllerAjouterProduit controlleur = (MenuControllerAjouterProduit)loader.getController();
  	         controlleur.setScene(scene);
  	         controlleur.setPrevStage(stage);
  			
  		} else {
  		    alert.close();
  		    JOptionPane.showMessageDialog(null, "Produit enregistré");
  		}
  		
  		
  		  
  	  }
  	  
  	  
  	  
    } */
	
	//bouton "ajouter actuel"
    public void ajouterProduit(MouseEvent event) throws SQLException{
		
		if(!idText.getText().isEmpty() && !nomText.getText().isEmpty()){
			ProduitProperty pp = new ProduitProperty();
			pp.id.set(idText.getText());
			pp.nom.set(nomText.getText());
			pp.desc.set(descText.getText());
			pp.prix.set(prixText.getText());
			pp.stock.set(stockText.getText());

			idText.clear();
			nomText.clear();
			prixText.clear();
			stockText.clear();
			descText.clear();
			dataProduit.add(pp);
			//ControleurBD.ajoutProduit(pp.id.get(), pp.nom.get());
			Produit p = new Produit(sonControleurAdministration, nomText.getText(), descText.getText(), Float.parseFloat(prixText.getText()), Integer.parseInt(stockText.getText()));
	  		sonControleurGeneral.sonControleurConnexion.addProduit(p);
		}
		/*else{
			Alert alert = new Alert(AlertType.INFORMATION);
			alert.setTitle("Information");
			alert.setHeaderText(null);
			alert.setContentText("Veuillez remplir les champs Id et Nom");
		}*/
	}
	
    //bouton "quitter"
	public void quitterControleur(MouseEvent event){
		Alert alert = new Alert(AlertType.INFORMATION);
		alert.setTitle("Information");
		alert.setHeaderText(null);
		alert.setContentText("Les produits ont bien été enregistrés");

		alert.showAndWait();
		prevStage.close();
	}


	//bouton "précédent"
    @FXML
    public void goToAccueil(Event event) throws IOException {
       
       //Stage stage = new Stage();
    	  FXMLLoader loader2 = new FXMLLoader();
    	  loader2.setLocation(Main.class.getResource("view/Accueil.fxml"));
          prevStage.setTitle("Accueil");
          Pane myPane = null;
          myPane = loader2.load();
          Scene scene = new Scene(myPane);
          scene.getStylesheets().add("application/application.css");
          prevStage.setScene(scene);
          
         MenuControllerAccueil controller2 = (MenuControllerAccueil)loader2.getController();
         if(controller2 != null) controller2.setPrevStage(prevStage);  
    }
    
	public Stage getPrevStage() {
		return prevStage;
	}
	
	public void setPrevStage(Stage prevStage) {
		this.prevStage = prevStage;
	}

}
