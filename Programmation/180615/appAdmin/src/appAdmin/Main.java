package appAdmin;

import java.awt.Dimension;
import java.awt.Font;
import java.awt.Toolkit;
import java.io.IOException;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.stage.Stage;

import javax.swing.JFrame;
import javax.swing.JLabel;

import appAdmin.Main;
import appAdmin.Control.ControleurAdministration;
import appAdmin.Control.ControleurBD;
import appAdmin.Control.ControleurConnexion;
import appAdmin.Control.ControleurGeneral;
import appAdmin.Control.MenuControllerAuthentification;

public class Main extends Application {
	
	public static ControleurGeneral sonControleurGeneral;
	
	public static class Message extends JFrame{
		/**
		 * 
		 */
		private static final long serialVersionUID = 1L;

		public Message(String title, String message)
		{
			super(title);
			Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
	    	this.setSize(300, 100);
	    	this.setLocation(screenSize.width/2-150, screenSize.height/2-50);
	    	JLabel connexe = new JLabel(message);
	    	connexe.setFont(new Font("Calibri",Font.BOLD,15));
	    	connexe.setHorizontalAlignment(JLabel.CENTER);
	    	this.getContentPane().add(connexe);
		}
	}
	
	 private Stage primaryStage;
	    private BorderPane rootLayout;

	 @Override
	    public void start(Stage primaryStage) {
	        this.primaryStage = primaryStage;
	        this.primaryStage.setTitle("Rock'n'Clothes");
	        initRootLayout();
	        showStartMenu();	        
	 }

	    /**
	     * Initializes the root layout.
	     */
	    public void initRootLayout() {
	        try {
	            // Load root layout from fxml file.
	            FXMLLoader loader = new FXMLLoader();
	            loader.setLocation(Main.class.getResource("View/RootLayout.fxml"));
	            rootLayout = (BorderPane) loader.load();

	            //menuController controller = new menuController(primaryStage);
	            
	            // Show the scene containing the root layout.
	            Scene scene = new Scene(rootLayout);
	            primaryStage.setScene(scene);
	            scene.getStylesheets().add("application/application.css");
	            primaryStage.show();
	            
	        } catch (IOException e) {
	            e.printStackTrace();
	        }
	    }

	    /**
	     * Affichage du menu principal
	     */
	    public void showStartMenu() {
	        try {
	            // Chargement du menu
	            FXMLLoader loader = new FXMLLoader();
	            loader.setLocation(Main.class.getResource("View/authentification.fxml"));
	            AnchorPane startMenu = (AnchorPane) loader.load();

	            rootLayout.setCenter(startMenu);
	            
	            // 
	            MenuControllerAuthentification controller = (MenuControllerAuthentification)loader.getController();
	            controller.setPrevStage(primaryStage);
	            primaryStage.show();
	        } catch (IOException e) {
	            e.printStackTrace();
	        }
	    }

	    public BorderPane getRootLayout() {
			return rootLayout;
		}

		public void setRootLayout(BorderPane rootLayout) {
			this.rootLayout = rootLayout;
		}

		/**
	     * Returns the main stage.
	     * @return
	     */
	    public Stage getPrimaryStage() {
	        return primaryStage;
	    }

	    public static void main(String[] args) throws InstantiationException, IllegalAccessException {
	    	sonControleurGeneral = new ControleurGeneral();
	    	Message connection = new Message("Connexion", "Connexion en cours");
	    	connection.setVisible(true); 
	    	//ControleurBD.initBD();
	    	connection.dispose();
	        launch(args);
	        //ControleurBD.close();
	    }
 
}