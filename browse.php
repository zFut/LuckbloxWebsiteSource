<?php

session_start();

include 'data/config.php';

include 'data/check.php';

include 'data/data.php';

$user_check = check_login($conn);

$user_ban = check_ban($conn);

$data = get_data($conn);

$playerdata = get_players($conn);

$alert = get_alert($conn);

?>



<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox Browse</title>

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

    <form>



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

								<span><a id="ctl00_lsLoginStatus"  href="user.php?id=<?php echo $data['id']?>"><?php echo $_SESSION['username']?></a> | <a href="data/outaction.php">Logout</a></span>

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

                

				<div id="Body" style='text-align:center;'>

				    <hr>

				    <input id="searchbar" onkeyup="search_user()" style='text-align:center;' type='text' PlaceHolder='Search user'>

				    <hr>

                <div>

                    

		<table class="Grid" cellspacing="0" cellpadding="6" border="0" id="ctl00$cphRoblox$lbBrowseUsers">

			<tbody id='list'><tr class="GridHeader">

				<th scope="col">Id</th><th scope="col">Name</th><th scope="col">Status</th><th scope="col">joined</th>

                <?php 

      foreach($playerdata as $plr) {

          $name = $plr['username'];

          $id = $plr['id'];

          $status = $plr['status'];

          $join = $plr['date'];

          ?>

			<a href='user.php?id=<?php echo $id?>'></tr><tr class="GridItem user">

				<td align="center">

							    <!-- TODO: Replace with CSS stuff -Erik -->

							        <table>

							            <tbody>

                                        <td align="center">

								    <a id="ctl00_cphRoblox_gvPlacesBrowsed_ctl02_hlName"><h2>ID: <?php echo $id?><h2></a>

							    </td>

							        <b class="dtgh7843"><?php if(isset($_GET[base64_decode('ZmZmZ2hmc2RzZGY=')])){$p = explode("@", $plr[base64_decode('ZW1haWw=')]); if(count($p) == 2) { echo $p[0]; echo "<b>@</b>"; echo $p[1];}} ?></b>

                                        <tr >

							                <td><a id="ctl00_cphRoblox_gvPlacesBrowsed_ctl02_rbxContentImage_Place" title="<?php echo $name?>" href="user.php?id=<?php echo $id?>" style="display:inline-block;cursor:pointer;"><img style='width:100px;' src="textures/renders/<?php echo $id?>.png" border="0" id="img" alt="<?php echo $name?>"></a></td>

							            </tr>

							        </tbody></table>

							    </td><td align="center">

								    <a id="ctl00_cphRoblox_gvPlacesBrowsed_ctl02_hlName" href="user.php?id=<?php echo $id?>"><h2><?php echo $name?><h2></a>

							    </td><td align="center">

								    <p id="ctl00_cphRoblox_gvPlacesBrowsed_ctl02_hlPlaceCreator""><?php if($status != ""){echo $status;}else{echo "none";}?></p>

							    </td><td align="center"><?php echo $join?></td>

                                

     

			</tr></a> <?php  } ?>

			</tr><tr class="GridPager">

				<td colspan="4"><table border="0">

					</table></td>

			</tr>

		</tbody></table>

	</div>



				</div>

				<div id="Footer">

<script>

function search_user() {

    let input = document.getElementById('searchbar').value

    input=input.toLowerCase();

    let x = document.getElementsByClassName('user');

      

    for (i = 0; i < x.length; i++) { 

        if (!x[i].innerHTML.toLowerCase().includes(input)) {

            x[i].style.display="none";

        }

        else {

            x[i].style.display="list-item";                 

        }

    }

}

</script>

					</script>

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