/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package supper;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.FlowLayout;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.io.DataInputStream;
import java.io.FileOutputStream;
import java.io.File;
import java.io.ObjectInputStream;
import java.io.FileNotFoundException;
import java.io.ObjectOutputStream;
import java.io.IOException;
import java.io.Serializable;
import java.sql.Connection;
import javax.swing.BorderFactory;
import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;
import java.sql.*;
import java.util.Collections;
import javax.swing.JOptionPane;


/**
 *
 * @author Nachman Rosen
 */
public class Data extends JFrame  {
    JTextField[] list=new JTextField[6];
    JTextField tf1;
    JComboBox <String>cb;
    JTextField tf;
    
    public void setup(){
     
     JLabel label=new JLabel("enter name of supper");
      
      setLayout(new FlowLayout());
      setSize(500,500);
     JTextField tf=new JTextField(30);
    
     //this GUI takes data(ingredients) entered in the text fields and adds them to an array:list[]. The GUI has two buttons:ADD Supper to List, takes from 
     //list array and uses constructor to construct a new supper object. Then the Class Supper Add method is called on tha object, to add ithe supper
     //to the array of suppers to be picked.The supper is then sent to a mysql database, where it is saved for future use. The second button, when clicked, runs the program and picks 5 suppers and display's its ingedients.
     label.setOpaque(true);
     add(label);
     
     add(tf);
 
      JLabel label2=new JLabel("type ingredients or select from choices"); 
      add(label2);
     for(int i=1;i<6;i++){
       
       label2.setOpaque(true);
       JTextField tf1=new JTextField(40);
       add(tf1);
       JComboBox <String>cb=new JComboBox<>();
       cb.insertItemAt("avocado", 0);
       cb.insertItemAt("apples", 1);
       cb.insertItemAt("banana", 2);
       cb.insertItemAt("carrots", 3);
       cb.insertItemAt("chicken", 4);
       cb.insertItemAt("cheese", 5);
       cb.insertItemAt("chicken cutlets", 6);
       cb.insertItemAt("cornflake crumbs", 6);
       cb.insertItemAt("eggs",7);
       cb.insertItemAt("eggplant", 8);
       cb.insertItemAt("flour", 9);
       cb.insertItemAt("ground chicken",10);
       cb.insertItemAt("ground meat", 11);
       cb.insertItemAt("garlic", 12);
       
       cb.insertItemAt("ketchup",13);
       cb.insertItemAt("mayonaise", 14);
       cb.insertItemAt("oil", 15);
       cb.insertItemAt("onions", 16);
       cb.insertItemAt("baking powder",17);
       cb.insertItemAt("Pam",18);
       cb.insertItemAt("potatoes", 19);
       cb.insertItemAt("sugar", 20);
       cb.insertItemAt("noodles", 21);
       cb.insertItemAt("rice", 22);
       cb.insertItemAt("tuna fish", 23);
       cb.insertItemAt("tomato sauce", 24);
       list[i]=tf1;
       add(cb);
       
       
       
       
       
       
       
       
       
       JButton add=new JButton("Select Ingredient");
       add.addMouseListener(new MouseAdapter(){
           public void mouseClicked(MouseEvent e) {
               
              tf1.setText(cb.getItemAt(cb.getSelectedIndex())); 
               
       }
     });
       add(add);
       JLabel label1=new JLabel("select ingredient"+ i); 
       add(label1);
               }
     
    
      JButton submit=new JButton("Add Supper To List");
     submit.addMouseListener(new MouseAdapter(){
      public void mouseClicked(MouseEvent e) {
      
       String a=tf.getText(); 
       if(list[5]==null){
      Supper x=new Supper(a,list[1].getText(),list[2].getText(),list[3].getText(),list[4].getText(),true);
      Supper.Add(x);
       }
      Supper y=new Supper(a,list[1].getText(),list[2].getText(),list[3].getText(),list[4].getText(),list[5].getText(),true);
      Supper.Add(y);
     //WriteObject obj=newWriteObject();
     try(Connection con = getConnection())
        {
            //Statement createStatement = con.createStatement();
           String sql= ( "INSERT INTO supper_ing(supper,ingredient1, ingredient2, ingredient3,ingredient4,ingredient5)"+ "VALUES  (?,?,?,?,?,?)") ;
           PreparedStatement preparedStatement = con.prepareStatement(sql);
           String b=tf.getText(); 
	  preparedStatement.setString(1, b);
	 preparedStatement.setString(2, list[1].getText());
     preparedStatement.setString(3, list[2].getText());
      preparedStatement.setString(4, list[3].getText());
       preparedStatement.setString(5, list[4].getText());
        preparedStatement.setString(6, list[5].getText());
          preparedStatement.executeUpdate();
            //createStatement.executeUpdate(sql);
           // 2,,list[1].getText(),list[2].getText(),list[3].getText(),list[4].getText(),list[5].getText()
            System.out.println("Table updated.");

           // printResultSet(rs) ;
        } catch (ClassNotFoundException | SQLException ex)
        {
            ex.printStackTrace();
        } 
     //AddSupper();
      }
});
     JButton pick=new JButton("Show Ingredients for this week's suppers");
     pick.addMouseListener(new MouseAdapter(){
      public void mouseClicked(MouseEvent e) {
          try(Connection con = getConnection())
        {
            Statement createStatement = con.createStatement();
            String sql=("SELECT supper,ingredient1, ingredient2, ingredient3,ingredient4,ingredient5 FROM supper_ing");
          ResultSet rs = createStatement.executeQuery(sql);
          while(rs.next()){
           String s=rs.getString("supper"); 
           Supper data=new Supper(s,rs.getString("ingredient1"),rs.getString("ingredient2"),rs.getString("ingredient3"),rs.getString("ingredient4"),rs.getString("ingredient5"),true);
        Supper.Add(data);
          }
        } catch (ClassNotFoundException | SQLException ex)
        {
            ex.printStackTrace();
        } 
     Supper.PickSuppers(5);
      }
     });
    
     add(submit);
      add(pick);
    setVisible(true); 

    
    
    }
    
    
    public Data(){
    setup();
}
    
    
     public static Connection getConnection() throws ClassNotFoundException, SQLException
    {
        Class.forName("com.mysql.jdbc.Driver");
        ///return DriverManager.getConnection("jdbc:mysql://localhost/suppers?"+"user=suppers&password=2944");
        return DriverManager.getConnection("jdbc:mysql://localhost/suppers", "suppers", "2944");
        //return DriverManager.getConnection("jdbc:mysql://localhost/recipes", "recipes", "nachman");
    }
//   public  void AddSupper()
//   {
//        try(Connection con = getConnection())
//        {
//            //Statement createStatement = con.createStatement();
//           String sql= ( "INSERT INTO supper_ing(supper,ingredient1, ingredient2, ingredient3,ingredient4,ingredient5)"+ "VALUES  (?,?,?,?,?,?)") ;
//           PreparedStatement preparedStatement = con.prepareStatement(sql);
//           String b=tf.getText(); 
//	  preparedStatement.setString(1, b);
//	 preparedStatement.setString(2, list[1].getText());
//     preparedStatement.setString(3, list[2].getText());
//      preparedStatement.setString(4, list[3].getText());
//       preparedStatement.setString(5, list[4].getText());
//        preparedStatement.setString(6, list[5].getText());
//          preparedStatement.executeUpdate();
//            //createStatement.executeUpdate(sql);
//           // 2,,list[1].getText(),list[2].getText(),list[3].getText(),list[4].getText(),list[5].getText()
//            System.out.println("Table updated.");
//
//           // printResultSet(rs) ;
//        } catch (ClassNotFoundException | SQLException ex)
//        {
//            ex.printStackTrace();
//        } 
   }
   
//   public void writeDataOutputStream() {
//        DataOutputStream dataOut = null;
//        DataInputStream dataIn = null;
//        try {
//String a=tf.getText();
//String b=list[1].getText();
//String c=list[2].getText();
//String d=list[3].getText();
//String e=list[4].getText();
//String f=list[5].getText();
//            //Specify the file path here
//            File file = new File("C:\\Users\\Nachman Rosen\\Documents\\NetBeansProjects\\supper\\supper.txt");
//
//            if (!file.exists()) {
//                file.createNewFile();
//            }
//            FileOutputStream fw = new FileOutputStream(file);
//            dataOut = new DataOutputStream(fw);
//          
//            dataOut.writeUTF(a);
//            
//            dataOut.writeUTF(b);
//            
//            dataOut.writeUTF(c);
//           
//            dataOut.writeUTF(d);
//            
//            dataOut.writeUTF(e);
//            
//            dataOut.writeUTF(f);
//            System.out.println("File Written Successfully");
//            //Reading data from the same file
//            dataIn = new DataInputStream(new FileInputStream(file));
//
//            while (dataIn.available() > 0) {
//
//                String readUTF = dataIn.readUTF();
//                Supper p=new Supper(readUTF,readUTF,readUTF,readUTF,readUTF,readUTF,true);
//                Supper.Add(p);
//                
//            }
//        } catch (FileNotFoundException ex) {
//        } catch (IOException ex) {
//        } finally {
//            try {if (dataOut!=null){
//                dataOut.close();
//            }
//                if (dataIn!=null){
//                dataIn.close();
//                }
//            } catch (IOException ex) {
//            }
//        }
//    }

