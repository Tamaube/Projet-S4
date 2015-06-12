package appAdmin.Control;

import java.io.IOException;
import java.net.URL;
import java.util.LinkedList;
import java.util.Optional;
import java.util.ResourceBundle;

import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;

import javax.swing.JOptionPane;

import application.Main;


public class MenuControllerEnregistrer implements Initializable{

	
    private Stage prevStage;
    private Scene scene;
    
    public Scene getScene() {
		return scene;
	}

	public void setScene(Scene scene) {
		this.scene = scene;
	}

	
	@Override
	public void initialize(URL location, ResourceBundle resources) {
		
	}	
	
}