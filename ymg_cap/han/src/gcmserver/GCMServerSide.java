package gcmserver;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import com.google.android.gcm.server.Message;
import com.google.android.gcm.server.MulticastResult;
import com.google.android.gcm.server.Result;
import com.google.android.gcm.server.Sender;




public class GCMServerSide {

   public void sendMessage(ArrayList<String> aList) throws IOException {
      //Sender sender = new Sender("AIzaSyAtSzpp8doubEv4Ad9RBCWbeMdVWR_T45o"); // android
      Sender sender = new Sender("AIzaSyCmNf1nk8VISHwQyDDbEARrNiWr2QVGIGs"); // server
      
     
      //String regIdCconmausa = "APA91bHWwBzWr1hqsa9bsCjXmwajUDPnBT_gCm3rpkLJE9aPesCFYtQ8WcAkq18L6itXPAbmuf--Hv59_rEfinLOeu40ujf_pZ3q5v8xePTIMJx9iSX-7oOaxTAPjogRhg7eVL8YCegW";
      //String galaxy = "APA91bG7xIqKeI_zWq7qYEFHorOWO2AxH5Hj6idml-frDyzjeGMnmbNePJp0cfojiJIsC6nCIH407Fk8TqBwa0Xhs74Hp1EqYnZ23FJeGVwvrzd7TcokiSqxqmb-zep1HxcmBgKNU7mE";
      //String g2 = "APA91bElOFONJbIdkFjq14syESdtTd857xIhjtjAiOQgam4CRgl-mIX4fF_j2PUr1b8out-yf44_RQ_fVv5OXvkNFGmsciB5hV5Oht4pnQcgzRE9fj1_oQYpDqJrcGwneYuHWYmbUyQF";
      
      Message message = new Message.Builder().addData("msg", "This is from HB's local com").build();
      
      List<String> list = aList;

      

      MulticastResult multiResult = sender.send(message, list, 5);



      if (multiResult != null) {



          List<Result> resultList = multiResult.getResults();



          for (Result result : resultList) {



              System.out.println(result.getMessageId());



          }



      }



  }



  public static void main(String[] args) throws Exception {



      GCMServerSide s = new GCMServerSide();

      connmysql a = new connmysql();



      ArrayList<String> list = a.testMySql();

      s.sendMessage(list);



  }



}