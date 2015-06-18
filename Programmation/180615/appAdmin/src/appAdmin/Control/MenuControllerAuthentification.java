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
import javafx.scene.control.TextField;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
 
public class MenuControllerAuthentification implements Initializable {
       
		private Stage prevStage;

        //private Scene prevScene;
       
		 @FXML 
	     private TextField id;
		 
	     @FXML 
	     private TextField mdp;
	     
	     @FXML 
	     private Button OKButton;
	     
	     public MenuControllerAuthentification() {
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
	     public void goToAccueil(Event event) throws IOException {
	        
	        //Vérifier si le pseudo et le mdp sont ok 
	    	 
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
	     
@Override
public void initialize(URL location, ResourceBundle resources) {
	     	
}
	        
	      
}