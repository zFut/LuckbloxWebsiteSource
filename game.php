<?php

session_start();

include 'data/config.php';

include 'data/check.php';

include 'data/data.php';

$user_check = check_login($conn);

$user_ban = check_ban($conn);

$data = get_data($conn);

$gameprofile = get_gameprofile($conn);

$alert = get_alert($conn);



if (!$_GET['id']){

    header('location:games.php');

}

?>





<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox Game</title>

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









		<form name="aspnetForm" method="post" action="" id="aspnetForm">



            

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

                        <div id="Authentication"><span><a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="user.php?id=<?php echo $data['id']?>"><?php echo $_SESSION['username']?></a> | <a href="data/outaction.php">Logout</a></span></div>

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

                

            

                    

                    <div id="Place_PlacePanel" class="Panel">

                        <h4>

                            <span id="ctl00_cphRoblox_PlaceName"><?php echo $gameprofile['name']?></span>

                        </h4>

                        <div style="padding: 1em">

                            <div style="text-align: center">

                                <a id="ctl00_cphRoblox_PlaceThumbnail" disabled="disabled" title="<?php echo $gameprofile['name']?>" onclick="return false" style="display:inline-block;"><img style='width:400px;' src="textures/games/place.png" border="0" id="img" alt="~~Cloud city v 3~~"></a>

                            </div>

                            <div style="text-align: center; margin-top: 1em">

                                <span id="ctl00_cphRoblox_VisitButtons_VisitMPButton">

                    

                <div id="ctl00_cphRoblox_VisitButtons_PlaceLauncher1_Panel1" class="modalPopup" style="display: none">

                    

                    <div style="margin: 1.5em">

                        <div id="Spinner" style="float:left;margin:0 1em 1em 0">

                            <img id="ctl00_cphRoblox_VisitButtons_PlaceLauncher1_Image1" src="" border="0"></div>

                        <div id="Requesting" style="display: inline">

                            Requesting a server</div>

                        <div id="Waiting" style="display: none">

                            Waiting for a server</div>

                        <div id="Loading" style="display: none">

                            A server is loading the game</div>

                        <div id="Joining" style="display: none">

                            The server is ready. Joining the game...</div>

                        <div id="Error" style="display: none">

                            An error occured. Please try again later</div>

                        <div id="Expired" style="display: none">

                            There are no game servers available at this time. Please try again later</div>

                        <div id="GameEnded" style="display: none">

                            The game you requested has ended</div>

                        <div id="GameFull" style="display: none">

                            The game you requested is full. Please try again later</div>

                        <div style="text-align: center; margin-top: 1em">

                            <input id="Cancel" type="button" class="Button" value="Cancel"></div>

                    </div>

                

                </div>

                <input type="hidden" name="ctl00$cphRoblox$VisitButtons$PlaceLauncher1$HiddenField1" id="ctl00_cphRoblox_VisitButtons_PlaceLauncher1_HiddenField1">

                

                    <h3>Status: <?php echo $gameprofile['status']?> <h3>

                    <button id="ctl00_cphRoblox_VisitButtons_hlMultiplayerVisit" class="Button" onclick="window.location = 'data/game.php?id=<?php echo $data['id'];?>&game=<?php echo $gameprofile['id']?>&ver=<?php echo $gameprofile['version']?>'; return false;">Visit Online</button>

                </span>

                

                

                             </div>

                            <div style="text-align: center; margin-top: 1em">

                               <div id="ctl00_cphRoblox_AbuseReportButton1_AbuseReportPanel" class="ReportAbusePanel">

                    

                    

                

                </div>

                            </div>

                            <div style="text-align: center; margin-top: 1em">

                <span id="ctl00_cphRoblox_PlaceAccessIndicator_Public" style="display:inline;"><img id="ctl00_cphRoblox_PlaceAccessIndicator_iPublic" src="textures/public.png" border="0">&nbsp;Public</span>

                

                                <img id="ctl00_cphRoblox_CopyLockedIcon" src="textures/CopyLocked.png" border="0">

                                Copy Protection: CopyLocked

                            </div>

                            

                            <div style="margin-top: 1em">

                                <span id="ctl00_cphRoblox_PlaceDescription"><h2 style='text-align:center;'><?php echo $gameprofile['description']?></h2></span>

                            </div>

                            <div style="margin-top: 1em">

                                <a href='data/release/LuckBlox-Beta-1.7.zip'id="ctl00_cphRoblox_PlaceDescription"><h2 style='text-align:center;'>Download Client here</h2></a>

                            </div>

                        </div>

                    </div>

                    <div id="Place_AuthorPanel" class="Panel">

                        <h4>Author</h4>

                        <div style="padding: 1em">

                            <a id="ctl00_cphRoblox_AvatarImage" disabled="disabled"  href="user.php?id=<?php echo $gameprofile['cid']?>" style="display:inline-block;"><img style="width:170px;" src="textures/renders/<?php echo $gameprofile['cid']?>.png" border="0" id="img" alt="<?php echo $gameprofile['creator']?>" blankurl="user.php?id=<?php echo $gameprofile['cid']?>"></a>

                            <p style="text-align: center">

                                <a id="ctl00_cphRoblox_AuthorName" href="user.php?id=1"><h2 style="text-align:center;"><?php echo $gameprofile['creator']?></h2></a>

                            </p>

                        </div>

                    </div>

                    

                

                                </div>

                                <div id="Footer">

	<iframe style="width:100%;height:1px;border:0;"></iframe>

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