<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox SignUp</title>

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

    <form name="aspnetForm" method="post" action="data/regaction.php" id="aspnetForm">



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

								<span><a id="ctl00_lsLoginStatus" href="login.php">Login</a></span>

							    </div>

							    <div id="Settings"></div>

						</div>

						<div id="Logo"><a id="ctl00_rbxImage_Logo" title="LUCKBLOX" href="home.php" style="display:inline-block;cursor:pointer;"><img src="textures/logo.png" border="0" id="img" alt="LUCKBLOX"></a>

						</div>

					</div>

                    <div class="Navigation">

						<span><a id="ctl00_hlMyLUCKBLOX" class="MenuItem" href="user.php">My LUCKBLOX</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlGames" class="MenuItem" href="games.php">Games</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlCatalog" class="MenuItem" href="catalog.php">Catalog</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

                        <span><a id="ctl00_hlBuildersClub" class="MenuItem" href="browse.php">Browse</a></span>

						<span class="Separator">&nbsp;|&nbsp;</span>

						<span><a id="ctl00_hlNews" class="MenuItem" href="https://discord.gg/5DGsVHKtVT" target="_blank">News</a>&nbsp;<a id="ctl00_hlNewsFeed" href="https://discord.gg/5DGsVHKtVT"><img src="textures/feed-icon-14x14.png" border="0"></a></span>

						

 					</div>

				</div>

                

				<div id="Body">

					

	

		<div id="Registration">

			<div id="ctl00_cphLUCKBLOX_upAccountRegistration">

	

					<h2>Sign Up and Play</h2>

					<h3>Step 1 of 2: Create Account</h3>

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

					<div id="EnterUsername">

						<fieldset title="Paste a invite key">

							<legend>LUCKBLOX invite key</legend>

							<div class="Suggestion">

								U can get a key on the discord server

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="UsernameRow">

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Key:</label>&nbsp;<input name="key" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox">

							</div>

						</fieldset>

					</div>

					<div id="EnterUsername">

						<fieldset title="Choose a name for your LUCKBLOX character">

							<legend>Choose a name for your LUCKBLOX character</legend>

							<div class="Suggestion">

								Use 3-20 alphanumeric characters: A-Z, a-z, 0-9, no spaces

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="UsernameRow">

								<label for="ctl00_cphLUCKBLOX_UserName" id="ctl00_cphLUCKBLOX_UserNameLabel" class="Label">Character Name:</label>&nbsp;<input name="username" type="text" id="ctl00_cphLUCKBLOX_UserName" tabindex="1" class="TextBox">

							</div>

						</fieldset>

					</div>

					<div id="EnterPassword">

						<fieldset title="Choose your LUCKBLOX password">

							<legend>Choose your LUCKBLOX password</legend>

							<div class="Suggestion">

								4-10 characters, no spaces

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="PasswordRow">

								<label for="ctl00_cphLUCKBLOX_Password" id="ctl00_cphLUCKBLOX_LabelPassword" class="Label">Password:</label>&nbsp;<input name="password" type="password" id="ctl00_cphLUCKBLOX_Password" tabindex="2" class="TextBox">

							</div>

		

						</fieldset>

					</div>

					<div id="EnterEmail">

						<fieldset title="Provide your parent's email address">

							<legend>Provide your parent's email address</legend>

							<div class="Suggestion">

								This will allow you to recover a lost password

							</div>

							<div class="Validators">

								<div></div>

								<div></div>

								<div></div>

							</div>

							<div class="EmailRow">

								<label for="ctl00_cphLUCKBLOX_TextBoxEMail" id="ctl00_cphLUCKBLOX_LabelEmail" class="Label">Your Parent's Email:</label>&nbsp;<input name="email" type="text" id="ctl00_cphLUCKBLOX_TextBoxEMail" tabindex="4" class="TextBox">

							</div>

						</fieldset>

					</div>

					<div class="Confirm">

						<input type="submit" name="ctl00$cphLUCKBLOX$ButtonCreateAccount" value="Register" onclick="" tabindex="5" class="BigButton">

					</div>

				

</div>

		</div>

		<div id="Sidebars">

			<div id="AlreadyRegistered">

				<h3>Already Registered?</h3>

				<p>If you just need to login, go to the <a id="ctl00_cphLUCKBLOX_HyperLinkLogin" href="login.php">Login</a> page.</p>

				<p>If you have already registered but you still need to download the game installer, go directly to <a id="ctl00_cphLUCKBLOX_HyperLinkDownload" href="data/release/LuckBlox-Beta-1.7.zip">download</a>.</p>

			</div>

			<div id="TermsAndConditions">

				<h3>Terms &amp; Conditions</h3>

				<p>Registration does not provide any guarantees of service. See our <a id="ctl00_cphLUCKBLOX_HyperLinkToS" href="terms.php" target="_blank">Terms of Service</a> and <a id="ctl00_cphLUCKBLOX_HyperLinkEULA" href="terms.php" target="_blank">Licensing Agreement</a> for details.</p>

				<p>LUCKBLOX will not share your email address with 3rd parties. See our <a id="ctl00_cphLUCKBLOX_HyperLinkPrivacy" href="privacy.php" target="_blank">Privacy Policy</a> for details.</p>

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

			





		

</form>



    </body>

</html>