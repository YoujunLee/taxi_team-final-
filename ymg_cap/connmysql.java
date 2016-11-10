import java.sql.Connection;

import java.sql.DriverManager;

import java.sql.ResultSet;

import java.sql.SQLException;

import java.sql.Statement;

import java.util.ArrayList;

 

 

public class connmysql {

    private Statement stat;

    private ResultSet rs;

    private ArrayList<String> aList;

    

    

    public final ArrayList<String> testMySql() {
    	  try {

              Class.forName("org.git.mm.mysql.Driver");

              System.out.println("jdbc success");

          } catch (ClassNotFoundException e) {

             System.out.println(e.getMessage());

          }

      
         

        try {

            aList = new ArrayList<String>();

            Connection con = null;
            con = DriverManager.getConnection("jdbc:mysql://localhost/youjun",
					"root", "taxi");

            

            stat = con.createStatement();

        

        

             rs = stat.executeQuery("SELECT * FROM ps3reg");

             

  

            while (rs.next()) {

                 aList.add(rs.getNString(1));

            }

     

        } catch (SQLException sqex) {

            System.out.println("SQLException: " + sqex.getMessage());

            System.out.println("SQLState: " + sqex.getSQLState());

        }

        

 
        return aList;

     

    }

}
