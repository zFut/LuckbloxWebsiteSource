<?php

session_start();

include 'data/config.php';

include 'data/check.php';

include 'data/data.php';

$user_check = check_login($conn);

$user_ban = check_ban($conn);

$data = get_data($conn);

$keys = get_keys($conn);

$alert = get_alert($conn);



if($data['perm'] != 1){

	header('location:home.php');

}

?>



<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox Panel</title>

        <link rel="icon" href="textures/ico.png"> 

        <style>

            <?php 

            include 'data/main.css';

            ?>

        </style>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9246802718391639"

     crossorigin="anonymous"></script>

    </head>

    <body>

   



			<div id="Container">



            <div id="AdvertisingLeaderboard">

     <script type="text/javascript"><!--

	    google_ad_client = "pub-2247123265392502";

	    google_ad_width = 728;

	    google_ad_height = 90;

	    google_ad_format = "728x90_as";

	    google_ad_type = "text_image";

	    google_ad_channel = "";

	    //-->

    </script>

    

</div>

				<div id="Header">

					<div id="Banner">

						<div id="Options">

                        <div id="Authentication">

								<span><a id="ctl00_lsLoginStatus" href="user.php?id=<?php echo $data['id']?>"><?php echo $_SESSION['username']?></a> | <a href="data/outaction.php">Logout</a></span>

							    </div>

							    <div id="Settings"></div>

						</div>

						<div id="Logo"><a id="ctl00_rbxImage_Logo" title="LUCKBLOX" href="home.php" style="display:inline-block;cursor:pointer;"><img src="textures/logo.png" border="0" id="img" alt="LUCKBLOX"></a>

						</div>

						<div id="Alerts"><table style="width:100%;height:101%">

			            <tbody><tr>

				        <td valign="middle">



					    <div>

						<div id="AlertSpace">

							<div>

								<div id="TicketsAlert">

									<a class="TicketsAlertIcon"><img src="textures/bux.png" style="border-width:0px;"></a>&nbsp;

									<a class="TicketsAlertCaption" style="font-size: 12px; color:#3075ff !important;"><?php echo $data['bux']?> Bux</a>&nbsp;

                                    <a class="TicketsAlertIcon"><img src="textures/tix.png" style="border-width:0px;"></a>&nbsp;

									<a class="TicketsAlertCaption" style="font-size: 12px; color:#3075ff !important;"><?php echo $data['tix']?> Tix</a>

                                    

								</div>

				</div>

						</div>

					</div>

				</td>

						</tr>

	</tbody></table></div>

					</div>

                    <div class="Navigation">

						<span><a id="ctl00_hlMyLUCKBLOX" class="MenuItem" href="home.php">My LUCKBLOX</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlGames" class="MenuItem" href="games.php">Games</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlCatalog" class="MenuItem" href="catalog.php">Catalog</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

                        <span><a id="ctl00_hlBuildersClub" class="MenuItem" href="browse.php">Browse</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlNews" class="MenuItem" href="https://discord.gg/5DGsVHKtVT" target="_blank">News</a>&nbsp;<a id="ctl00_hlNewsFeed" href="https://discord.gg/5DGsVHKtVT"><img src="textures/feed-icon-14x14.png" border="0"></a></span>

						

 					</div>

 					<?php if ($alert['on'] == true){?>

 					<div class="Navigation1">

						

						<span><?php echo $alert['message'];?></span>

						

 					</div>

 					<?php } ?>

				</div>

                

				<div id="Body">

					

	

		<div id="Registration1">

			<div id="ctl00_cphLUCKBLOX_upAccountRegistration">

	

					<h2>Panel</h2>

					<h3>Admin Panel</h3>

					<h3>User: <?php echo $_SESSION['username']?></h3>

					<?php 

      if (isset($_GET['error'])){ 

          if (!empty ($_GET['error'])){

          if (strpos($_GET['error'], 'script') == false){

      ?>

        <h4 class="error" style='text-align: center;'><?php echo $_GET['error']; ?></h4>

    <?php 

    }

    } 

    } 

    ?>

	                <form action='data/keyaction.php' method='post'>

					<div id="EnterUsername">

						<fieldset title="key">

							<legend>Keys</legend>

							<div class="Suggestion">

								U can generate keys

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<?php 

      foreach($keys as $k) {

          $key = $k['gkeys'];

          ?>

							<div class="UsernameRow" style='text-align:center;'>

								<p for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label"><?php echo $key?></p><br>

							</div>

							<?php  } ?>



							<div class="Confirm">

						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Generate" onclick="" tabindex="5" class="BigButton">

					</div>

						</fieldset>

					</div>

					</form>

					

	              <form action='data/dailyaction.php' method='post'>

					<div id="EnterUsername">

						<fieldset title="tix">

							<legend>Daily tix giver</legend>

							<div class="Suggestion">

								Give user 10 tix.

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>



							<div class="Confirm">

						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Give" onclick="" tabindex="5" class="BigButton">

					</div>

						</fieldset>

					</div>

	              </form>

	              <form action='data/alertupd.php' method='post'>

					<div id="EnterUsername">

						<fieldset title="Alert">

							<legend>Update Alert</legend>

							<div class="Suggestion">

								U can change the alert message here.

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="UsernameRow" style='text-align:center;'>

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Alert:</label>&nbsp;<input name="msg" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>

							</div>

							<div class="UsernameRow" style='text-align:center;'>

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">1/false:</label>&nbsp;<input name="stat" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>

							</div>

							

							<div class="Confirm">

						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Update" onclick="" tabindex="5" class="BigButton">

					</div>

						</fieldset>

					</div>

				 </form>

				  <form action='data/resetaction.php' method='post'>

					<div id="EnterUsername">

						<fieldset title="password">

							<legend>Change password</legend>

							<div class="Suggestion">

								U can change your password here.

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="UsernameRow" style='text-align:center;'>

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Username:</label>&nbsp;<input name="username" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>

							</div>

							<div class="UsernameRow" style='text-align:center;'>

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Password:</label>&nbsp;<input name="password" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>

							</div>

							<div class="Confirm">

						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Change" onclick="" tabindex="5" class="BigButton">

					</div>

						</fieldset>

					</div>

					</form>

					<form action='data/banaction.php' method='post'>

					<div id="EnterUsername">

						<fieldset title="ban">

							<legend>Ban</legend>

							<div class="Suggestion">

								U can ban a user.

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="UsernameRow" style='text-align:center;'>

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Username:</label>&nbsp;<input name="username" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>

							</div>

							<div class="UsernameRow" style='text-align:center;'>

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Reason:</label>&nbsp;<input name="reason" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>

							</div>

							<div class="Confirm">

						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Ban" onclick="" tabindex="5" class="BigButton">

					</div>

						</fieldset>

					</div>

					</form>

					<form action='data/unbanaction.php' method='post'>

					<div id="EnterUsername">

						<fieldset title="unban">

							<legend>UnBan</legend>

							<div class="Suggestion">

							U can unban a user.

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="UsernameRow" style='text-align:center;'>

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Username:</label>&nbsp;<input name="username" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>

							</div>

							<div class="Confirm">

						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Unban" onclick="" tabindex="5" class="BigButton">

					</div>

						</fieldset>

					</div>

					</form>

					<form action='data/addgame.php' method='post'>



					<div id="EnterUsername">



						<fieldset title="games">



							<legend>Add games</legend>



							<div class="Suggestion">



								Add games here.



							</div>



							<div class="Validators">



								<div></div>



								<div></div>



								<div></div>



								<div></div>



								<div></div>



							</div>



							<div class="UsernameRow" style='text-align:center;'>



								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Name:</label>&nbsp;<input name="name" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>



							</div>



							<div class="UsernameRow" style='text-align:center;'>



								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Creator:</label>&nbsp;<input name="creator" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>



							</div>



							<div class="UsernameRow" style='text-align:center;'>



								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Creator Id:</label>&nbsp;<input name="creatorId" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>



							</div>



							<div class="UsernameRow" style='text-align:center;'>



								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Description:</label>&nbsp;<input name="desc" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>



							</div>



							<div class="UsernameRow" style='text-align:center;'>



								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">ip:</label>&nbsp;<input name="address" placeholder='ip : port' type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>



							</div>



							<div class="UsernameRow" style='text-align:center;'>



								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">status:</label>&nbsp;<input name="status" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>



							</div>



							<div class="Confirm">



						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Add" onclick="" tabindex="5" class="BigButton">



					</div>



						</fieldset>



					</div>



					</form>



					<form action='data/remgame.php' method='post'>



					<div id="EnterUsername">



						<fieldset title="games">



							<legend>Remove games</legend>



							<div class="Suggestion">



								Remove games here.



							</div>



							<div class="Validators">



								<div></div>



								<div></div>



								<div></div>



								<div></div>



								<div></div>



							</div>



							<div class="UsernameRow" style='text-align:center;'>



								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Id:</label>&nbsp;<input name="id" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>



							</div>





							<div class="Confirm">



						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Remove" onclick="" tabindex="5" class="BigButton">



					</div>



						</fieldset>



					</div>



					</form>

					</form>

					<form action='data/crender.php' method='post'>

					<div id="EnterUsername">

						<fieldset title="render">

							<legend>render avatars</legend>

							<div class="Suggestion">

							

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="UsernameRow" style='text-align:center;'>

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Id:</label>&nbsp;<input name="id" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox" style='width:250px;'>

							</div>

							<div class="Confirm">

						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="render" onclick="" tabindex="5" class="BigButton">

					</div>

						</fieldset>

					</div>

					</form>

					

				

					<div class="Confirm">

						

					</div>

				

</div>

		</div>

		

		<div id="ctl00_cphLUCKBLOX_ie6_peekaboo" style="clear: both"></div>



				</div>

				<div id="Footer">

					

<hr>

<p class="Legalese">

         LUCKBLOX, "Online Building Toy", characters, logos, names, and all related indicia

    are trademarks of ROBLOX,  ©2007-2021. Patents pending.

        <br>LUCKBLOX is not affliated with ROBLOX, Lego, MegaBloks, Bionicle, Pokemon, Nintendo, Lincoln Logs, Yu Gi Oh, K'nex, Tinkertoys, Erector Set, or the Pirates of the Caribbean. ARrrr!. This is a fan site!

        <br>Use of this site signifies your acceptance of the <a id="ctl00_rbxFooter_hlTermsOfService" href="tos.php">Terms and Conditions</a>.

    </p>



				</div>

			</div>

			





		





    </body>

</html>