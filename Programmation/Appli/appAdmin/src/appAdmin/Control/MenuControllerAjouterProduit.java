package appAdmin.Control;

import java.net.URL;
import java.util.ResourceBundle;

import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;

public class MenuControllerAjouterProduit implements Initializable{
	
	public class ProduitProperty{
		
		 public SimpleStringProperty id = new SimpleStringProperty();
	     public SimpleStringProperty nom = new SimpleStringProperty();
	         
	        public String getId() {
	            return id.get();
	        }
	 
	        public String getNom() {
	            return nom.get();
	        }		
	}
	
     private Stage prevStage;
     private Scene scene;
     
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
     private Button ajouterButton;
     @FXML 
     private Button quitterButton;
     
     ObservableList<ProduitProperty> dataProduit;
     
     @FXML
     private TableView<ProduitProperty> produitTable;
     @FXML
     private TableColumn<ProduitProperty, String> idColumn;
     @FXML
     private TableColumn<ProduitProperty, String> nomColumn;
     
	public MenuControllerAjouterProduit() {
		// TODO Auto-generated constructor stub
        this.prevStage = new Stage();	
	}

	@Override
	public void initialize(URL location, ResourceBundle resources) {
		// TODO Auto-generated method stub
		idColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("id"));
		nomColumn.setCellValueFactory(new PropertyValueFactory<ProduitProperty, String>("nom"));
		
		dataProduit = FXCollections.observableArrayList();
	    produitTable.setItems(dataProduit);
	}
		
	public void ajouterProduit(MouseEvent event){
		
		if(!idText.getText().isEmpty() && !nomText.getText().isEmpty()){
			ProduitProperty pp = new ProduitProperty();
			pp.id.set(idText.getText());
			pp.nom.set(nomText.getText());
			idText.clear();
			nomText.clear();
			dataProduit.add(pp);
			ControleurBD.ajoutProduit(pp.id.get(), pp.nom.get());
		}		
	}
	
	public void quitterControleur(MouseEvent event){
		Alert alert = new Alert(AlertType.INFORMATION);
		alert.setTitle("Information");
		alert.setHeaderText(null);
		alert.setContentText("Les produits ont bien été enregistrés");

		alert.showAndWait();
		prevStage.close();
	}

	public Stage getPrevStage() {
		return prevStage;
	}

	public void setPrevStage(Stage prevStage) {
		this.prevStage = prevStage;
	}
}
