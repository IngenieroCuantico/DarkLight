package logica;


import java.sql.*;

import conexion.Conexion;
import persistencia.ProductoDAO;

public class Administrador {
 	
	private int id;
	private String nombre;
	private int cantidad;
	private int precio;
	
	
	
	//constructor Producto.
	public Administrador() {}
	
	//constructor Producto sobrecargado
	public Administrador(int identificacion, String Nombre, int Cantidad, int Precio) {
		
		this.id = identificacion;
		this.nombre = Nombre;
		this.cantidad = Cantidad;
		this.precio =  Precio;
	
	}
	
	
	//constructor Producto sobrecargado
	public Administrador(int id) {
		
		this.id = id;
		
	}
	
	
	public int idretorno() {
		
		return this.id;
	}
	
	public String nombreretorno() {
		
		return this.nombre;
	}
	
	public int cantidadretorno() {
		
		return this.cantidad;
		
	}
	
	public long precioretorno() {
		
		return this.precio;
	}
	
	
	
	public String agregar() {
		
		Conexion conexion = new Conexion();
		
		ProductoDAO productodao = new ProductoDAO(this.id, this.nombre, this.cantidad,this.precio);
		
		return conexion.ejecutar(productodao.insertar());
		
	}
	

	public boolean consultar() {
		
		Conexion conexion = new Conexion();
		
		ProductoDAO productoDAO = new ProductoDAO(this.id);
		
		ResultSet resultado = conexion.consultar(productoDAO.consultar());
		
		try {
			
			if (resultado.next()){
				
				this.nombre=resultado.getString("nombre");
				this.cantidad=resultado.getInt("cantidad");
				this.precio=resultado.getInt("precio");
				
					return true;
					
			}else{
			
					return false;
					
			}
			
			}catch(SQLException e) {
				
				e.printStackTrace();
				
				return false;
			}
		}
	
	
	
	public String actualizar() {
		
		Conexion conexion = new Conexion();
		
		ProductoDAO productoDAO = new ProductoDAO(this.id,this.nombre, this.cantidad, this.precio);
		
			return conexion.ejecutar(productoDAO.actualizar());
		
		
		}
	
	
	
		public String eliminar() {
		
			Conexion conexion = new Conexion();
		
			ProductoDAO productodao = new ProductoDAO(this.id);
		
			return conexion.ejecutar(productodao.eliminar());
		
		}
	
	
		public String[][] buscar(String filtro){

			Conexion con = new Conexion();	
			
			ProductoDAO productoDAO = new ProductoDAO();
						
			ResultSet resultado = con.consultar(productoDAO.buscar(filtro));
			
			String [][] datos = null;
		
			
			
		try {
	
			resultado.last();
					
			datos =  new String[resultado.getRow()][4];
			
			resultado.beforeFirst();
			
			int i = 0;
			
			while(resultado.next()) {
				
				datos[i][0] = resultado.getString("id");
				datos[i][1] = resultado.getString("nombre");
				datos[i][2] = resultado.getString("cantidad");
				datos[i][3] = resultado.getString("precio");
		
				
				
				i++;
			}
			//resultado.beforeFirst();
		
			
		}catch (SQLException e) {
			e.printStackTrace();
		}
			                    
		return datos;                  
              
			                        
			
		}
	}
	
	
	

