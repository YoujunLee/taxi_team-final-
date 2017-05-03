package gcmserver;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import com.google.android.gcm.server.Message;
import com.google.android.gcm.server.MulticastResult;
import com.google.android.gcm.server.Result;
import com.google.android.gcm.server.Sender;

public class GCMServerSide {

	public void sendMessage() throws IOException {
		//Sender sender = new Sender("AIzaSyAtSzpp8doubEv4Ad9RBCWbeMdVWR_T45o"); // android
		Sender sender = new Sender("AIzaSyCmNf1nk8VISHwQyDDbEARrNiWr2QVGIGs"); // server
		String regId = "APA91bH6CBg-P1mVAB7sSgtUPMksZba6hF2nVTZcSmHMrPTvVgNJpdNkWJ9GGSaf723pQD0tHjAOT9PvhYjKJNUMx1GArxZOx15Xt6uJI66CWKJKmFgtXBQKTHcMhk8FlYXSBBXaWe5E";
		Message message = new Message.Builder().addData("msg", "my msg").build();
		
		List<String> list = new ArrayList<String>();
		list.add(regId);
		
		MulticastResult multiResult = sender.send(message, list, 5);
		System.out.println(multiResult);
		if (multiResult != null) {
			List<Result> resultList = multiResult.getResults();
			for (Result result : resultList) {
				System.out.println(result.getMessageId());
			}
		}
	}

	public static void main(String[] args) throws Exception {
		GCMServerSide s = new GCMServerSide();
		s.sendMessage();
	}

}