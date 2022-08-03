<?php

session_start();

include 'data/config.php';

include 'data/check.php';

include 'data/data.php';

$user_check = check_login($conn);

$user_ban = check_ban($conn);

$data = get_data($conn);

$itemsdata = get_items($conn);

$alert = get_alert($conn);

?>



<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox Catalog</title>

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

					

	

                <div id="CatalogContainer">

    <div id="SearchBar" class="SearchBar">

        <span class="SearchBox"><input name="ctl00$cphRoblox$rbxCatalog$SearchTextBox" type="text" maxlength="100" id="ctl00_cphRoblox_rbxCatalog_SearchTextBox" class="TextBox"></span>

        <span class="SearchButton"><input type="submit" name="ctl00$cphRoblox$rbxCatalog$SearchButton" value="Search" id="ctl00_cphRoblox_rbxCatalog_SearchButton"></span>

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

    </div>

    <div class="DisplayFilters">

	    <h2>Catalog</h2>

	    <div id="BrowseMode">

		    <h4>Browse</h4>

		    <ul>

			    <li><img id="ctl00_cphRoblox_rbxCatalog_BrowseModeFeaturedBullet" class="GamesBullet" src="textures/games_bullet.png" border="0"><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeFeaturedSelector" href=""><b>Featured</b></a></li>



		    </ul>

	    </div>

	    <div id="Category">

		    <h4>Category</h4>

		    

				    <ul>

			    

				    <li>

					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl01_SelectedCategoryBullet" class="GamesBullet" src="textures/games_bullet.png" border="0">

					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl01_AssetCategorySelector" href="">Hats</a>

				    </li>

			    

				    </ul>

			    

	    </div>

	    <div id="ctl00_cphRoblox_rbxCatalog_CurrencyType">

	        <h4>Currency</h4>

	        <ul>

	            <li><img id="ctl00_cphRoblox_rbxCatalog_CurrencyAllBullet" class="GamesBullet" src="textures/games_bullet.png" border="0"><a id="ctl00_cphRoblox_rbxCatalog_CurrencyAllSelector" href=""><b>All</b></a></li>

	        </ul>

	    </div>

	    

    </div>

    <div class="Assets">

        <span id="ctl00_cphRoblox_rbxCatalog_AssetsDisplaySetLabel" class="AssetsDisplaySet">Featured Hats</span>

	    

	    <table id="ctl00_cphRoblox_rbxCatalog_AssetsDataList" cellspacing="0" align="Center" border="0" width="735">

	<tbody style='text-align:center;'>

	<?php 

      foreach($itemsdata as $itm) {

          $name = $itm['name'];

		  $creator = $itm['creator'];

          $id = $itm['id'];

          $price = $itm['price'];

          $type = $itm['type'];

          ?>

	

		<td valign="top" >

		        <div class="Asset" >

			        <div class="AssetThumbnail">

				        <a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetThumbnailHyperLink" title="<?php echo $name?>" href="item.php?id=<?php echo $id?>" style="display:inline-block;cursor:pointer;"><img style="width: 120px;" src="textures/items/<?php echo $name?>.png" border="0" id="img" alt="<?php echo $name?>" blankurl="http://t6.roblox.com:80/blank-120x120.gif"></a>

			        </div>

			        <div class="AssetDetails">

				        <div class="AssetName"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetNameHyperLink" href="item.php?id=<?php echo $id?>"><?php echo $name?></a></div>

				        <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_GameCreatorHyperLink" href="user.php?id=1"><?php echo $creator?></a></span></div>

				        

				        

				        <div id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_Div3" class="AssetPrice"><span class="PriceInRobux"><?php echo $type?>: <?php echo $price?></span></div>

			        </div>

			    </div>

		    </td>

		        

	<?php  } ?>



</tbody></table>

        

    <div style="clear: both;">

</div>



				</div>



				</div>

				

				<div id="Footer">

					

<hr>

<div id="Footer">

    <iframe style="width:100%;height:1px;border:0;"></iframe>

    <hr>

    <p class="Legalese">

         LUCKBLOX, "Online Building Toy", characters, logos, names, and all related indicia

    are trademarks of ROBLOX,  ©2007-2021. Patents pending.

        <br>LUCKBLOX is not affliated with ROBLOX, Lego, MegaBloks, Bionicle, Pokemon, Nintendo, Lincoln Logs, Yu Gi Oh, K'nex, Tinkertoys, Erector Set, or the Pirates of the Caribbean. ARrrr!. This is a fan site!

        <br>Use of this site signifies your acceptance of the Terms and Conditions.

    </p>

</div>



    



				</div>

			</div>

			





		

</form>



    </body>

</html>