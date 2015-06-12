package appAdmin.Control;
 
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;

import application.Main;
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
        private Button affichagePanel;
       
        @FXML
        private Button modifierPanel;
        
  
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
   
@Override
public void initialize(URL location, ResourceBundle resources) {
	
}
   
 
}