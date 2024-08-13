package presentacion;

import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JInternalFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JTextField;

import logica.Producto;




public class FIConsultarUsuario extends JInternalFrame{

	private JLabel labelNombre;
	private JTextField textNombre;
	private JLabel labelCantidad;
	private JButton buttonLimpiar;
	private JButton buttonConsultar;
	private JTextField textPrecio;
	private JLabel labelPrecio;
	private JTextField textCantidad;
	private JTextField textId;
	private JLabel labelId;
	
	
	public FIConsultarUsuario() {
		initGUI();
		}
	
	private void initGUI() {
		
		setTitle("Consultar Producto");
		setVisible(true);
		setClosable(true);
		
		getContentPane().setLayout(new GridLayout(5, 2, 0, 0));
		
		{
			labelId = new JLabel();
			getContentPane().add(labelId);
			labelId.setText("Id");
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
				}
			});
		}
		
		setSize(250,150);
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
		 JOptionPane.showMessageDialog(this,"No Hay Resultados","Consultar",JOptionPane.INFORMATION_MESSAGE);
	
		}
	}

	private void buttonLimpiarActionPerformed(ActionEvent evt) {
		this.textId.setText("");
		this.textNombre.setText("");
		this.textCantidad.setText("");
		this.textPrecio.setText("");
		
		
		}
	}
