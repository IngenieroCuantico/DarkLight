package presentacion;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JDesktopPane;
import javax.swing.JFrame;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.WindowConstants;

public class FPrincipal extends JFrame{
	
	private JMenuBar menuBar;
	private JMenu menuProducto;
	private JDesktopPane panelEscritorio;
	private JMenuItem menuItemBuscarProducto;
	private JMenuItem menuItemConsultarProducto;
	private JMenuItem menuItemAgregarProducto;
	private JMenuItem menuItemEliminarProducto;
	private JMenuItem menuItemActualizarProducto;
	
	
	
	public FPrincipal() {
		initGUI();
	}
	
	
	
	public static void main(String[] args) {
		
		FPrincipal  frame = new FPrincipal();
		frame.setVisible(true);
		
	}	
	
	
	
	private void initGUI() {
			
		setDefaultCloseOperation(WindowConstants.DISPOSE_ON_CLOSE);
			setTitle("Sistema Principal Corporacion Dumar");
									
				{
					panelEscritorio = new JDesktopPane();
					getContentPane().add(panelEscritorio);
											
				}
									
										
				{
					menuBar = new JMenuBar();
					setJMenuBar(menuBar);
												
					{
						menuProducto = new JMenu();
						
						menuBar.add(menuProducto);
						
						menuProducto.setText("Administrador");
						
							{
							
							menuItemAgregarProducto = new JMenuItem();
							
							menuProducto.add(menuItemAgregarProducto);
							
							menuItemAgregarProducto.setText("Agregar");
			
							menuItemAgregarProducto.addActionListener(new ActionListener() {
																
								public void actionPerformed(ActionEvent evt) {
																		
									menuItemAgregarProductoActionPerformed(evt);
																		
									}
																									
							});
																
							}
													
													
							{
							
							menuItemConsultarProducto = new JMenuItem();
							
							menuProducto.add(menuItemConsultarProducto);
							
							menuItemConsultarProducto.setText("Consultar");
														
							menuItemConsultarProducto.addActionListener(
									
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemConsultarProductoActionPerformed(evt);
											}
											
										});
												
						 	}														
						
							{
							
							menuItemActualizarProducto = new JMenuItem();
							
							menuProducto.add(menuItemActualizarProducto);
							
							menuItemActualizarProducto.setText("Actualizar");
														
								menuItemActualizarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemActualizarProductoActionPerformed(evt);
											}
											
										});
												
							}
						
							
							{
							
							menuItemEliminarProducto = new JMenuItem();
							
							menuProducto.add(menuItemEliminarProducto);
							
							menuItemEliminarProducto.setText("Eliminar");
														
								menuItemEliminarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemEliminarProductoActionPerformed(evt);
											}
											
										});
												
							}
		
			

							{
							
							menuItemBuscarProducto = new JMenuItem();
							
							menuProducto.add(menuItemBuscarProducto);
							
							menuItemBuscarProducto.setText("Buscar");
								
								menuItemBuscarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
								
												menuItemBuscarProductoActionPerformed(evt);
												
											}
											
										});
												
							}
						
						
						
							
							
							
							
							
					}//menu producto
					
					{//menu administrador
						
						menuProducto = new JMenu();
						
						menuBar.add(menuProducto);
						
						menuProducto.setText("Cliente");
						
							{
							
							menuItemAgregarProducto = new JMenuItem();
							
							menuProducto.add(menuItemAgregarProducto);
							
							menuItemAgregarProducto.setText("Agregar");
			
							menuItemAgregarProducto.addActionListener(new ActionListener() {
																
								public void actionPerformed(ActionEvent evt) {
																		
									menuItemAgregarProductoActionPerformed(evt);
																		
									}
																									
							});
																
							}
													
													
							{
							
							menuItemConsultarProducto = new JMenuItem();
							
							menuProducto.add(menuItemConsultarProducto);
							
							menuItemConsultarProducto.setText("Consultar");
														
							menuItemConsultarProducto.addActionListener(
									
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemConsultarProductoActionPerformed(evt);
											}
											
										});
												
						 	}														
						
							{
							
							menuItemActualizarProducto = new JMenuItem();
							
							menuProducto.add(menuItemActualizarProducto);
							
							menuItemActualizarProducto.setText("Actualizar");
														
								menuItemActualizarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemActualizarProductoActionPerformed(evt);
											}
											
										});
												
							}
						
							
							{
							
							menuItemEliminarProducto = new JMenuItem();
							
							menuProducto.add(menuItemEliminarProducto);
							
							menuItemEliminarProducto.setText("Eliminar");
														
								menuItemEliminarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemEliminarProductoActionPerformed(evt);
											}
											
										});
												
							}
		
			

							{
							
							menuItemBuscarProducto = new JMenuItem();
							
							menuProducto.add(menuItemBuscarProducto);
							
							menuItemBuscarProducto.setText("Buscar");
								
								menuItemBuscarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
								
												menuItemBuscarProductoActionPerformed(evt);
												
											}
											
										});
												
							}
						
						
						
							
							
							
							
							
					}//menu administrador
					{//menu usuarios
						menuProducto = new JMenu();
						
						menuBar.add(menuProducto);
						
						menuProducto.setText("Producto");
						
							{
							
							menuItemAgregarProducto = new JMenuItem();
							
							menuProducto.add(menuItemAgregarProducto);
							
							menuItemAgregarProducto.setText("Agregar");
			
							menuItemAgregarProducto.addActionListener(new ActionListener() {
																
								public void actionPerformed(ActionEvent evt) {
																		
									menuItemAgregarProductoActionPerformed(evt);
																		
									}
																									
							});
																
							}
													
													
							{
							
							menuItemConsultarProducto = new JMenuItem();
							
							menuProducto.add(menuItemConsultarProducto);
							
							menuItemConsultarProducto.setText("Consultar");
														
							menuItemConsultarProducto.addActionListener(
									
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemConsultarProductoActionPerformed(evt);
											}
											
										});
												
						 	}														
						
							{
							
							menuItemActualizarProducto = new JMenuItem();
							
							menuProducto.add(menuItemActualizarProducto);
							
							menuItemActualizarProducto.setText("Actualizar");
														
								menuItemActualizarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemActualizarProductoActionPerformed(evt);
											}
											
										});
												
							}
						
							
							{
							
							menuItemEliminarProducto = new JMenuItem();
							
							menuProducto.add(menuItemEliminarProducto);
							
							menuItemEliminarProducto.setText("Eliminar");
														
								menuItemEliminarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
							
												menuItemEliminarProductoActionPerformed(evt);
											}
											
										});
												
							}
		
			

							{
							
							menuItemBuscarProducto = new JMenuItem();
							
							menuProducto.add(menuItemBuscarProducto);
							
							menuItemBuscarProducto.setText("Buscar");
								
								menuItemBuscarProducto.addActionListener(
										
										new ActionListener() {
											
											public void actionPerformed(ActionEvent evt) {
								
												menuItemBuscarProductoActionPerformed(evt);
												
											}
											
										});
												
							}
						
						
						
							
							
							
							
							
					}//menu producto
													
					setSize(500, 400);
				}//menuBar
								
		}//corchete initGUI()
	
	
	
	
			protected void menuItemAgregarProductoActionPerformed(ActionEvent evt) {
			
				FIAgregarProducto frameAgregar = new FIAgregarProducto();
			
					this.panelEscritorio.add(frameAgregar);
					
					
			}
			
			
			private void menuItemConsultarProductoActionPerformed(ActionEvent evt) {
				
				FIConsultarProducto frameConsultar = new FIConsultarProducto();
				
					this.panelEscritorio.add(frameConsultar);
			}
			
						
			private void menuItemActualizarProductoActionPerformed(ActionEvent evt) {
				
				FIActualizarProducto frameActualizar = new FIActualizarProducto();
				
					this.panelEscritorio.add(frameActualizar);
			}
			
			private void menuItemEliminarProductoActionPerformed(ActionEvent evt) {
				
				FIEliminarProducto frameEliminar = new FIEliminarProducto();
				
				this.panelEscritorio.add(frameEliminar);
			}
			
			
			
			private void menuItemBuscarProductoActionPerformed(ActionEvent evt) {
				
				FIBuscarProducto frameBuscar = new FIBuscarProducto();
			
					this.panelEscritorio.add(frameBuscar);
			}
					
			
	
		
}


