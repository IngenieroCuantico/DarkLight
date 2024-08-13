package presentacion;


import java.awt.GridLayout;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.*;

import javax.swing.*;

import logica.Producto;

public class FIAgregarProducto extends JInternalFrame {
	
	private JTextField textId;
	private JLabel labelId;
	
	
	private JLabel labelNombre;
	private JTextField textNombre;
		
	private JTextField textPrecio;
	private JLabel labelPrecio;
	
	private JLabel labelCantidad;
	private JTextField textCantidad;
	
	private JButton buttonLimpiar;
	private JButton buttonAgregar;

	
	
	public FIAgregarProducto() {
		
		initGUI();
		
	}
	
	private void initGUI() {
		
		setTitle("Agregar Producto");
		setVisible(true);
		setClosable(true);
		getContentPane().setLayout(new GridLayout(7,2,0,0));
		
		
		{
			labelId = new JLabel();
			getContentPane().add(labelId);
			labelId.setText("Identificacion");
			
		}
		{
			textId = new JTextField();
			getContentPane().add(textId);
		}
		{
			
			labelNombre = new JLabel();
			getContentPane().add(labelNombre);
			labelNombre.setText("Nombre");
			
		}
		{
			
			textNombre = new JTextField();
			getContentPane().add(textNombre);
			
		}
		{
			labelCantidad = new JLabel();
			getContentPane().add(labelCantidad);
			labelCantidad.setText("Cantidad");
			
		}
		
		{
			textCantidad = new JTextField();
			getContentPane().add(textCantidad);
			
		}
		
		{
			
			labelPrecio = new JLabel();
			getContentPane().add(labelPrecio);
			labelPrecio.setText("Precio");
			
			
		}
		{
			textPrecio = new JTextField();
			getContentPane().add(textPrecio);
			
		}
		{
			buttonAgregar = new JButton();
			
			getContentPane().add(buttonAgregar);
			
			buttonAgregar.setText("Agregar");
			
			buttonAgregar.addActionListener(new ActionListener() {
				
				public void actionPerformed(ActionEvent evt) {
					
					buttonAgregarActionPerformed(evt);
					
					System.out.println("Agregado Satisfactoriamente por consola...");
					
				}
			});
			
		}
		
		
		{
			buttonLimpiar = new JButton();
			
			getContentPane().add(buttonLimpiar);
			
			buttonLimpiar.setText("Limpiar");
			
			buttonLimpiar.addActionListener(new ActionListener() {
			
				public void actionPerformed(ActionEvent evt) {
				
					buttonLimpiarActionPerformed(evt);
					
					System.out.println("Limpiado Satisfactoriamente por consola...");
				}
				
			});
			
		}
		
		setSize(300,200);
				
	}
	
	
	
	private void buttonAgregarActionPerformed(ActionEvent evt) {

		Producto producto = new Producto(   
										
											Integer.parseInt(this.textId.getText()),
															this.textNombre.getText(),
		 									Integer.parseInt(this.textCantidad.getText()),
		 									Integer.parseInt(this.textCantidad.getText()
		 											) 
		 								);
				 						 						
		JOptionPane.showMessageDialog(this, producto.agregar(),"Agregar", JOptionPane.INFORMATION_MESSAGE);
		
	}

	
	
	
	private void buttonLimpiarActionPerformed(ActionEvent evt) {
		
		textId.setText("");
		textNombre.setText("");
		textCantidad.setText("");
		textPrecio.setText("");		
		
	}
	
	
	
}

//TRASH
/*reciclaje
 * 
 * 
 * , this.textNombre.getText(), 	Integer.parseInt(this.textCantidad.getText()),	Integer.parseInt(this.textPrecio.getText())
 * */


/*buttonLimpiarActionPerformed(evt);*/
