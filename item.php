<?php

session_start();

include 'data/config.php';

include 'data/check.php';

include 'data/data.php';

$user_check = check_login($conn);

$user_ban = check_ban($conn);

$data = get_data($conn);

$item = get_item($conn);

$rows = get_owned($conn);

$row = check_own($conn);

$alert = get_alert($conn);



if (!$_GET['id']){

    header('location:home.php');

}

?>



<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox Item</title>

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

                

				<div id="Body">

					

	

                <div id="ItemContainer">

		<h2>LUCKBLOX Hat</h2>

		<div id="Item">

			<div id="Thumbnail">

				<a id="ctl00_cphRoblox_AssetThumbnailImage" title="<?php echo $item['name']?>" onclick="" style="display:inline-block;cursor:pointer;"><img style='width:250px;' src="textures/items/<?php echo $item['name']?>.png" border="0" id="img" alt="<?php echo $item['name']?>" blankurl=""></a>

			</div>

			<div id="Summary">

				<h3><?php echo $item['name']?></h3>

			    

				<div id="ctl00_cphRoblox_RobuxPurchasePanel">

	

				    <div id="RobuxPurchase">

				        <div id="PriceInRobux"><?php echo $item['type']?>: <?php echo $item['price']?></div>

				        <div id="BuyWithRobux">

					        <a id="ctl00_cphRoblox_PurchaseWithRobuxButton" class="Button" href="data/buyitem.php?id=<?php echo $item['id']?>"><?php echo $item['type']?>: <?php echo $item['price']?></a>

				        </div>

				    </div>

				

</div>

				<div id="Creator">Created by: <a id="ctl00_cphRoblox_CreatorHyperLink" href="user.php?id=1"><?php echo $item['creator']?></a></div>

				<div id="LastUpdate">Updated: <?php echo $item['date']?></div>

				<div id="LastUpdate">Owned: <?php echo $rows?></div>

				<div id="ctl00_cphRoblox_DescriptionPanel">

	

					<div id="DescriptionLabel">Description:</div>

					<div id="Description"><?php echo $item['description']?></div>

				    <div id="DescriptionLabel"></div>

					<?php if($row == 1){ ?> <div style='color: Green; font-weight: bold;'><h4><?php echo 'Item Owned';?></div></h4> <?php }else{}?>



	            



</div>

	            <p></p>

			</div>

			

			

			<div style="clear: both;">

		

		

            

                    

                

            

        </div>

    

</div>

	</div>

	

	<div id="ctl00_cphRoblox_ItemPurchasePopupPanel" class="modalPopup" style="display: none">

	

		<div id="ctl00_cphRoblox_ItemPurchasePopupUpdatePanel">

		

				

			

	</div>

	

</div>

	

	

	



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