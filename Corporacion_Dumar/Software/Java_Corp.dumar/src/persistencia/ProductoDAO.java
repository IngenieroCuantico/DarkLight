package persistencia;

public class ProductoDAO {
	
	private int id;
	private String nombre;
	private int cantidad;
	private int precio;
	private String msj;
	
	
	public ProductoDAO() {
		
	}
	
	public ProductoDAO (int identificacionConstructor) {
		
	this.id = identificacionConstructor;
	
	
	}
	
	public ProductoDAO(String nombre) {
		
		this.nombre = nombre;
	}
	
	public ProductoDAO(int identificacion, String nombre, int cantidad, int precio) {
		
		this.id = identificacion;
		this.nombre = nombre;
		this.cantidad = cantidad;
		this.precio =  precio;
			
	}
	
	public int retornoId() {
		
		return this.id;
	}
	
	
	
	

	public String insertar(){
			
		return "insert into producto (id,nombre,cantidad,precio) values ('"+this.id+"','"+this.nombre+"','"+this.cantidad+"','"+this.precio+"')";

			/*return "insert into producto (idproducto, nombreproducto, cantidadproducto, precioproducto) values ()";*/ 			
			
	}
		
	public String consultar() {
		
		return "select * from producto where id='"+this.id+"'";
	}
	
	
	public String actualizar() {
		
		return "update producto set nombre = '"+this.nombre+"', cantidad ='"+this.cantidad+"',precio = '"+this.precio+"' where id = '"+this.id+"'";
	}
	
	
	public String eliminar() {
		return "delete from producto where id = '"+this.id+"'";
	}
		
	
	
	public String buscar(String filtro) {
		return "select * from producto where nombre like '"+filtro+"%'";		
	}
	


}
