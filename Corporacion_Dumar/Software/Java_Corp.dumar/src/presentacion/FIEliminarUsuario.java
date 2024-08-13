package presentacion;


import java.awt.GridLayout;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.*;

import javax.swing.*;

import logica.Producto;

public class FIEliminarUsuario extends JInternalFrame{
	
	
	private JTextField textId;
	private JLabel labelId;
	
	
	private JLabel labelNombre;
	private JTextField textNombre;
		
	private JLabel labelPrecio;
	private JTextField textPrecio;

	private JTextField textCantidad;
	private JLabel labelCantidad;
		
	private JButton buttonEliminar;
	private JButton buttonConsultar;

	public FIEliminarUsuario() {
		
		initGUI();
		
	}

	
	private void initGUI() {
		
		setTitle("Eliminar Producto");
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
			buttonConsultar = new JButton();
			
			getContentPane().add(buttonConsultar);
			
			buttonConsultar.setText("Consultar");
			
			buttonConsultar.addActionListener(new ActionListener() {
				
				public void actionPerformed(ActionEvent evt) {
					
					buttonConsultarActionPerformed(evt);
					
					System.out.println("Id consultado Satisfactoriamente por consola...");
					
				}
			});
			
		}
		
		
		{
			buttonEliminar = new JButton();
			
			getContentPane().add(buttonEliminar);
			
			buttonEliminar.setText("ELiminar");
			
			buttonEliminar.addActionListener(new ActionListener() {
			
				public void actionPerformed(ActionEvent evt) {
				
					buttonEliminarActionPerformed(evt);
					
					System.out.println("ELliminado Satisfactoriamente por consola...");
				}
				
			});
			
		}
		
		setSize(300,200);
		
	}
	

	private void buttonConsultarActionPerformed(ActionEvent evt) 
	
	{	
		
	Producto producto = new	Producto(Integer.parseInt(this.textId.getText()));
		
		if(producto.consultar())
			
		{
			
		this.textNombre.setText(producto.nombreretorno());
		this.textCantidad.setText(String.valueOf(producto.cantidadretorno()));
		this.textPrecio.setText(String.valueOf(producto.precioretorno()));
		
		} else	{
		 
			JOptionPane.showMessageDialog(this,"No Existen Resultados","Consultar",JOptionPane.WARNING_MESSAGE);
	
		}
	}

	
	
	
	private void buttonEliminarActionPerformed(ActionEvent evt) {
		
	
		Producto producto = new Producto(Integer.parseInt(this.textId.getText()));
		
	
		
		JOptionPane.showMessageDialog(this,producto.eliminar(),"Eliminar ", JOptionPane.INFORMATION_MESSAGE);
		buttonLimpiarActionPerformed(evt);
		
	}
	
	
	private void buttonLimpiarActionPerformed(ActionEvent evt) {
		
		textId.setText("");
		textNombre.setText("");
		textCantidad.setText("");
		textPrecio.setText("");		
		
	}
	
	

}



/*reciclaje
 * 
 * 
 * , this.textNombre.getText(), 	Integer.parseInt(this.textCantidad.getText()),	Integer.parseInt(this.textPrecio.getText())
 * */
