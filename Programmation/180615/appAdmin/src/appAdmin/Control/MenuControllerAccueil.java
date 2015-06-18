package appAdmin.Control;
 
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;

import appAdmin.Main;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
 
public class MenuControllerAccueil implements Initializable {
       
		private Stage prevStage;
                
        //private Scene prevScene;
       
        @FXML
        private Button modifierProduitPanel;
       
        @FXML
        private Button ajouterProduitPanel;       
        
        @FXML
        private Button modifierInfosClientPanel;
        
        public MenuControllerAccueil() {
        	this.prevStage = new Stage();
            // this.prevScene = prevStage.getScene();
        }
        
        public void setPrevStage(Stage stage){
        	this.prevStage = stage;
        }
    
   /* public void setPrevScene(Scene scene){
    	
    	this.prevScene = scene;
    	
    }*/
    
    @FXML
    public void goToModifierProduit(Event event) throws IOException {
       
       //Stage stage = new Stage();
    	  FXMLLoader loader2 = new FXMLLoader();
    	  loader2.setLocation(Main.class.getResource("View/fenetreModifierProduit.fxml"));
          prevStage.setTitle("Modifier Produit");
          Pane myPane = null;
          myPane = loader2.load();
          Scene scene = new Scene(myPane);
          scene.getStylesheets().add("application/application.css");
          prevStage.setScene(scene);
          
         MenuControllerModifierProduit controller2 = (MenuControllerModifierProduit)loader2.getController();
         if(controller2 != null) controller2.setPrevStage(prevStage); 
    }
    
    @FXML
    public void goToAjouterProduit(Event event) throws IOException {
       
       //Stage stage = new Stage();
    	  FXMLLoader loader2 = new FXMLLoader();
    	  loader2.setLocation(Main.class.getResource("View/fenetreAjoutProduit.fxml"));
          prevStage.setTitle("Ajouter Produit");
          Pane myPane = null;
          myPane = loader2.load();
          Scene scene = new Scene(myPane);
          scene.getStylesheets().add("application/application.css");
          prevStage.setScene(scene);
          
          MenuControllerAjouterProduit controller2 = (MenuControllerAjouterProduit)loader2.getController();
         if(controller2 != null) controller2.setPrevStage(prevStage);  
    }
      
    @FXML
    public void goToModifierClient(Event event) throws IOException {
       
       //Stage stage = new Stage();
    	  FXMLLoader loader2 = new FXMLLoader();
    	  loader2.setLocation(Main.class.getResource("View/fenetreModfierInfosClient.fxml"));
          prevStage.setTitle("Ajouter Produit");
          Pane myPane = null;
          myPane = loader2.load();
          Scene scene = new Scene(myPane);
          scene.getStylesheets().add("application/application.css");
          prevStage.setScene(scene);
          
         /* MenuControllerModfierClient controller2 = (MenuControllerModifierClient)loader2.getController();
         if(controller2 != null) controller2.setPrevStage(prevStage);  */
    }
    
@Override
public void initialize(URL location, ResourceBundle resources) {
	
}
   
 
}