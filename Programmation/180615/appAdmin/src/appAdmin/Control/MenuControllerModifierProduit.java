package appAdmin.Control;

import java.io.IOException;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.LinkedList;
import java.util.ResourceBundle;

import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;

import javax.swing.JOptionPane;

import appAdmin.Main;
import appAdmin.Model.Connexion;
import appAdmin.Control.ControleurBD;
import appAdmin.Main.Message;
import appAdmin.Model.Produit;

public class MenuControllerModifierProduit {
	
    @FXML
    private TableView<Produit> produitsTable;
    @FXML
    private TableColumn<Produit, Integer> idColumn;
    @FXML
    private TableColumn<Produit, String> nomColumn;
    @FXML
    private TableColumn<Produit, Number> prixColumn;
    @FXML
    private TableColumn<Produit, String> coupDeCoeurColumn;
    @FXML
    private TableColumn<Produit, Number> stockColumn;
    @FXML
    private TableColumn<Produit, String> descColumn;

    private Stage prevStage;
    
    private ObservableList<Produit> produits = FXCollections.observableArrayList();
    
    @FXML
    private Button precedentButton2;
    @FXML 
    private Button chercherButton;
    @FXML
    private Button modifierButton;
    @FXML
    private Button supprimerButton;
    @FXML
    private TextField id;
    @FXML
    private TextField nom;

    private Connexion co = new Connexion();
    
    public MenuControllerModifierProduit() {}
    
    public void setPrevStage(Stage stage){
        this.prevStage = stage;
    }
    
    public void retirerProduit(MouseEvent event){
    	if(!(produits.isEmpty()))
    		produits.remove(produits.size()-1);
    }
    
	   @FXML
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
			}
			
	        nomColumn.setCellValueFactory(cellData -> cellData.getValue().nomProperty());
	        descColumn.setCellValueFactory(cellData -> cellData.getValue().descProperty());
	        prixColumn.setCellValueFactory(cellData -> cellData.getValue().prixProperty());
	        stockColumn.setCellValueFactory(cellData -> cellData.getValue().quantiteProperty());
	         
			produitsTable.setItems(produits);
	    }
    
    
	    @FXML
	    public void initialize() throws SQLException{
		remplirProduit();
	}
	
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
	
	@FXML
	public void chercher(Event event) throws IOException{
		   
		Message recherche = new Message("Recherche","Recherche en cours");
		recherche.setVisible(true);
		
		recherche.dispose();
	}
	   	 
}	 
		 
		 