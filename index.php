<?php require("header.html");

?>

<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>


                <div class="art-contentLayout">
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        	<div class="art-Post-inner">
`                            <h2 class="art-PostHeaderIcon-wrapper">
                                <img src="res/images/welcome1.png" width="9" height="9" alt="PostHeaderIcon" />
                                <span class="art-PostHeader">Welcome</span>
                            </h2>
                            <div class="art-PostContent" style="color:#333333">
                                
							<p align="left" ><b>Mango Bulletin Business</b> is a discussion forum that gives information about various programming languages, general knowledge related questions, information related to Android,Java,PHP related questions ,etc. </p>

							<p align="left">This forum is useful for the beginners to get information  related to  various topics. There is a centralized database in which all the information is managed. The administrator acts as the highest authority and has the rights to update the database. There are also connected user who acts as an intermediate user who can also answer the questions of the end-user if they know it. The intermediate user can also cache the information provided by the administrator to the end-user. This cached information is useful when the same question is repeated some another user , then the intermediate user can get the information from cache memory and reply to the end-user. This reduces the response time.</p> 

							<p align="left">Whenever a question is asked by the end-user to get information ,it is received by the administrator who fetches the information from the database and reply to the end-user. Whenever the new information is arrived it is updated by the end-user. The end-user is provided with the access rights which is  managed by the administrator. The access to the database is provided to the end-user according to these rights only.</p>

           
                                   
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                            <h2 class="art-PostHeaderIcon-wrapper">
                                <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                                <span class="art-PostHeader">Who uses our site?</span>
                            </h2>
                            <div class="art-PostContent" style="color:#333333">
                                
                                    
                                   
                                  <p align="left">Our site can help the new comers about getting information about programming languages.It will also be useful for getting information about various technical questions.Users can satisfy their needs of getting information related to various programming languages from a single source.To make a form that give information about various technical questions .
The questions are based on various programming languages.
The various questions are like how to setup the languages, datatypes etc.
</p>
                                                                     
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="art-sidebar1">
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Log In</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                        <div>
                                        
                                        
                                        <script type="text/javascript">
										function check(f)
										{
											if(f.uid.value=="")	
											{
												document.getElementById("spuid").innerHTML="Please,Enter the user id ";
												//alert("Please,Enter Your User Id")
												f.uid.focus()
												return false;
												}
											else if(f.pwd.value=="")
												{
													document.getElementById("a").innerHTML="Please,Enter the password";
													//alert("Please,Enter Your Password")
													f.pwd.focus()
													return false;
													
													}	
												
												else
												return true;
											}
										
										
										</script>
										 <form action="loginH.php" method="POST" onsubmit="return check(this)">
  <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name..." name="uid">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password..." name="pwd">
  </div>

										
										
                                       
										
<input type="submit" value="login" class="btn btn-primary btn-block"><br />
<a href="register.php"><input type="button" value="Sign Up" class="btn btn-primary btn-block"></a>

<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";
				
?>

</form>

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="art-sidebar2">
                        <div class="art-Block" >
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Highlights</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                      <marquee direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="1" scrolldelay="1" style="height:400px;">  <div>
                                                         <?php 
														echo "New updates will Coming soon...<br>
														<br><br>
														
															  please check your Email for updates"
														?>
															
                                                          </div>
		</marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div><div class="art-Footer">
                    
                    <?php require("footer.php")?>