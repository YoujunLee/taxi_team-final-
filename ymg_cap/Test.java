
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
public class Test {
	public static void main(String[] args) {
		try {
			Connection con = null;

			con = DriverManager.getConnection("jdbc:mysql://localhost",
					"root", "taxi");

			java.sql.Statement st = null;
			ResultSet rs = null;
			st = con.createStatement();
			rs = st.executeQuery("SHOW DATABASES");
			rs = st.executeQuery("USE youjun");
			rs = st.executeQuery("SELECT * FROM ps3reg");
			

			while (rs.next()) {
				String str = rs.getNString(1);
				System.out.println(str);
			}
		} catch (SQLException sqex) {
			System.out.println("SQLException: " + sqex.getMessage());
			System.out.println("SQLState: " + sqex.getSQLState());
		}

	}
}
