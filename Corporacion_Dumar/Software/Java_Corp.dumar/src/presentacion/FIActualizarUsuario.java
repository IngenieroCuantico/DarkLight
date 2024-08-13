package presentacion;

import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JTextField;
import javax.swing.JInternalFrame;

import java.awt.*;
import javax.swing.*;

import logica.Producto;



public class FIActualizarUsuario extends JInternalFrame{
	private JTextField textId;
	private JLabel labelId;
	
	
	private JLabel labelNombre;
	private JTextField textNombre;
		
	private JTextField textPrecio;
	private JLabel labelPrecio;
	
	private JLabel labelCantidad;
	private JTextField textCantidad;
	
	private JButton buttonConsultar;
	private JButton buttonActualizar;

	
	
	public FIActualizarUsuario() {
		
		initGUI();
		
	}
	
	private void initGUI() {
		
		setTitle("Actualizar Producto");
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
					
					System.out.println("Agregado Satisfactoriamente por consola...");
					
				}
			});
			
		}
		
		
		{
			buttonActualizar = new JButton();
			
			getContentPane().add(buttonActualizar);
			
			buttonActualizar.setText("Actualizar");
			
			buttonActualizar.addActionListener(new ActionListener() {
			
				public void actionPerformed(ActionEvent evt) {
				
					buttonActualizarActionPerformed(evt);
					
					System.out.println("Producto Actualizado Satisfactoriamente...Mensaje Mostrado X_::_X...");
				}
				
			});
			
		}
		
		setSize(300,200);
		
		
	}
	
	private void buttonConsultarActionPerformed(ActionEvent evt) 
	{

		Producto producto = new Producto(Integer.parseInt(this.textId.getText()));
		
		
		if (producto.consultar()) {
			
			this.textNombre.setText(producto.nombreretorno());
			this.textCantidad.setText(String.valueOf(producto.cantidadretorno()));
			this.textPrecio.setText(String.valueOf(producto.precioretorno()));
			
			
		}else {
			
			JOptionPane.showMessageDialog(this,"No Existen Resultados Buscados Por Este id","SISTEMA PRINCIPAL EYE. Consultar",JOptionPane.ERROR_MESSAGE);
			
		}
		
		JOptionPane.showMessageDialog(this, producto.agregar(),"Agregar", JOptionPane.INFORMATION_MESSAGE);
		

		
	}

	
	
	
	private void buttonActualizarActionPerformed(ActionEvent evt) {

//		buttonLimpiarActionPerformed(evt);
		
		Producto producto = new Producto(   
				
				Integer.parseInt(this.textId.getText()),
								this.textNombre.getText(),
					Integer.parseInt(this.textCantidad.getText()),
					Integer.parseInt(this.textCantidad.getText()
							) 
				);
		
		JOptionPane.showMessageDialog(this,producto.actualizar(),"Actualizar. SISTEMA EYE", JOptionPane.INFORMATION_MESSAGE);
		
		textId.setText("");
		textNombre.setText("");
		textCantidad.setText("");
		textPrecio.setText("");		
		
	}
	
	
	

	
	
}
