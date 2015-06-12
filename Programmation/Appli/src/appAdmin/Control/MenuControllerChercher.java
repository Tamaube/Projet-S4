package appAdmin.Control;

import java.io.IOException;
import java.net.URL;
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
import javafx.scene.layout.Pane;
import javafx.stage.Stage;

import javax.swing.JOptionPane;

import application.Main;


public class MenuControllerChercher implements Initializable{
	
    private Stage prevStage;
	
	public MenuControllerChercher() {}
    
    public void setPrevStage(Stage stage){
        this.prevStage = stage;
   }
		
	@Override
	public void initialize(URL location, ResourceBundle resources) {
		
	}

}