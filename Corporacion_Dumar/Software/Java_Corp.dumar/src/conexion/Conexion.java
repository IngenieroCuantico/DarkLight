package conexion;

import java.sql.*;

import javax.swing.JOptionPane;


public class Conexion {
	
	private Statement statement;
	private Connection var_conexion;
	private String jdbc;
	private String ruta;
	private String usuario;
	private String password;

	private String mensaje;

	
	
	public Conexion() {
		
		this.var_conexion = null;
		this.statement =  null;
		this.jdbc = "com.mysql.cj.jdbc.Driver";
		this.ruta = "jdbc:mysql://localhost:3306/bdcorporacionJava";
		this.usuario = "darklight";
		this.password = "Zeus9119*";
		this.mensaje = "";
		

		
	}


	private void AbrirConexion() {

		try {
		
			Class.forName(this.jdbc);
			
			this.var_conexion = DriverManager.getConnection(this.ruta,this.usuario, this.password);
			
			this.statement = this.var_conexion.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_UPDATABLE);
			//Original-Main
			/*
			 * 
			 * this.statement = this.var_conexion.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_UPDATABLE);
			 * 
			 * 
			 * 
			 * */
						//ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.TYPE_FORWARD_ONLY
			Conexion conex = new Conexion();
			
			//this.mensaje = conex.mensaje();
			
			
		}catch(SQLException e){
			e.printStackTrace();
			
		}catch(ClassNotFoundException e) {
			e.printStackTrace();
		}
		
	
	}
	
	
	/**/public String ejecutar(String Sentencia) {
		
		try {
			
				this.AbrirConexion();

				this.statement.executeUpdate(Sentencia);
				
				return "Operacion Exitosa";
				
								
		    }catch(SQLException e) {
			
		    	return e.toString();
			
		    }
		
		}


	public ResultSet consultar(String Sentencia) {
		
		ResultSet resultado = null;
		
		try {
			
			this.AbrirConexion();
			
			resultado = statement.executeQuery(Sentencia);
			
		//	this.mensaje();
		
			
			}catch(SQLException e){
				
				e.printStackTrace();
				
		}
		
		return resultado;
	 } 
}









/*  Reciclaje
 * 
 * 	/*
	private String mensaje() {
		
		String msj= " ";
		
		msj =(String)JOptionPane.showInputDialog(null, "Se Ha Consultado Desde EL Objeto Conexion");
		
		return msj;
		
	}
	*/
 
 
 	/*
public static void main(String[] args) {
		
		System.out.println("Hola Mundo");
		String sentencia = "SELECT * FROM producto";
		
		Conexion ejecutarconexion = new Conexion();
		
		ejecutarconexion.Ejecutar(sentencia);
}



	private String mensaje2() {
		String msj2 = " ";
		
		msj2 = JOptionPane.showMessageDialog( null, "asi es","Agregando desde la conexion",JOptionPane.INFORMATION_MESSAGE);
		
		msj2.valueOf(msj2);
		return msj2;
	}
	

		 JOptionPane.showMessageDialog(this,"No Hay Resultados","Consultar",
					JOptionPane.INFORMATION_MESSAGE);

	*/


 
 

/*System.out.println("Ingresado Al Sistema, Felicitaciones Ingeniero Esplendido Dumar");
return true;
*/
