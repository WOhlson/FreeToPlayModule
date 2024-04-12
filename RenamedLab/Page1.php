<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 

    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>User Login</title>
</head>
<body>

	<div id="frm">
    <form method="post" action="Page1Back.php" >
	
		<p>
         <center><H1>Create a tournament!
		 </center> 
		 
		   </p>
         <p>
		 <center>
               <label>Tournament Name</label>
                    <input type="text" name="Tname" id="Tname">
				
         
        
              <label>T_ID</label>
                <input type="text" name="tid" id="tid">

                 </center> 
        </p>
        <p>
         <center><H2>Create a Match!
		 </center> 
		 
		   </p>
         <p>
		 <center>
               <label>M_ID</label>
                    <input type="text" name="mid" id="mid">
				
               <label>Round</label>
                    <input type="text" name="round" id="round">

                <label>Date</label>
                    <input type="text" name="date" id="date">
                <br>

                <label>Hour</label>
                    <input type="text" name="hour" id="hour">

                <label>Minute</label>
                    <input type="text" name="minute" id="minute">
        
              <label>T_ID</label>
                <input type="text" name="mtid" id="mtid">

                 </center> 
        </p>
        <p>
         <center><H2>Enter a Player!
		 </center> 
		 
		   </p>
        <p>
		 <center>
               <label>P_ID</label>
                    <input type="text" name="pid" id="pid">
				
               <label>Player_Name</label>
                    <input type="text" name="Pname" id="Pname">

                <label>Seed</label>
                    <input type="text" name="seed" id="seed">

                <label>M_ID</label>
                    <input type="text" name="pmid" id="pmid">
        
              <label>T_ID</label>
                <input type="text" name="ptid" id="ptid">

                 </center> 
        </p>
           <center>
                <input type="submit" id="btn" value="Submit"/>
                
			</center>
    </form>
	</div>
</body>
</html>