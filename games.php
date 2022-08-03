<?php

session_start();

include 'data/config.php';

include 'data/check.php';

include 'data/data.php';

$user_check = check_login($conn);

$user_ban = check_ban($conn);

$data = get_data($conn);

$gamesdata = get_games($conn);

$alert = get_alert($conn);

?>





<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox Games</title>

        <link rel="icon" href="textures/ico.png"> 

        <style>

            <?php 

            include 'data/main.css';

            ?>

        </style><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9246802718391639"

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

                <div id="Body">

					

    

                    <div id="GamesContainer">

                        

                <div id="ctl00_cphRoblox_rbxGames_GamesContainerPanel">

                    

                    <div class="DisplayFilters">

                        <h2>Games</h2>

                        <div id="BrowseMode">

                            <?php if ($data['perm'] == 3){?>

                        <h4><Button  onClick="window.open('hosted.php');">Host Game.</button></h4>

                        <?php } else { if ($data['perm'] == 2){?>

                        <h4><Button  onClick="window.open('hosted.php');">Host Game.</button></h4>

                        <?php } else { if ($data['perm'] == 1){?>

                        <h4><Button  onClick="window.open('hosted.php');">Host Game.</button></h4>

                        <?php } } }?>

                            <h4>Browse</h4>

                            <ul>

                                <li><img id="ctl00_cphRoblox_rbxGames_MostPopularBullet" class="GamesBullet" src="textures/games_bullet.png" border="0"><a id="ctl00_cphRoblox_rbxGames_hlFeatured" href="">Featured Games</a></li>

                            </ul>

                        </div>

                        <div id="ctl00_cphRoblox_rbxGames_pTimespan">

                        

                            <div id="Timespan">

                                <h4>Time</h4>

                                <ul>

                                    <li><img id="ctl00_cphRoblox_rbxGames_MostPopularBullet" class="GamesBullet" src="textures/games_bullet.png" border="0"><a id="ctl00_cphRoblox_rbxGames_hlTimespanAllTime" href="">All-time</a></li>

                                </ul>

                            </div>

                        

                    </div>

                    </div>

                    

                            <div id="Games">

                                <span id="ctl00_cphRoblox_rbxGames_lGamesDisplaySet" class="GamesDisplaySet">Most Popular (Now)</span>

                                <table id="ctl00_cphRoblox_rbxGames_dlGames" cellspacing="0" align="Center" border="0" width="550">

                        <tbody>

                        <tr>

                            <?php 

      foreach($gamesdata as $gm) {

          $name = $gm['name'];

          $id = $gm['id'];

          $cid = $gm['cid'];

          $creator = $gm['creator'];

          $date = $gm['date'];

          $status = $gm['status'];

          ?>

                            <td class="Game" valign="top">

                                    <div style="padding-bottom:5px">

                                        <div class="GameThumbnail">

                                            <a id="ctl00_cphRoblox_rbxGames_dlGames_ctl00_ciGame" title="<?php echo $name?>" href="game.php?id=<?php echo $id?>" style="display:inline-block;cursor:pointer;"><img src="textures/games/place.png" border="0" id="img" alt="<?php echo $name?>"></a>

                                        </div>

                                        <div class="GameDetails">

                                            <div class="GameName"><a id="ctl00_cphRoblox_rbxGames_dlGames_ctl00_hlGameName" href="game.php?id=<?php echo $id; ?>"><?php echo $name?></a></div>

                                            <div class="GameLastUpdate"><span class="Label">Updated:</span> <span class="Detail"><?php echo $date?></span></div>

                                            <div class="GameCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxGames_dlGames_ctl00_hlGameCreator" href="user.php?id=<?php echo $cid;?>"><?php echo $creator?></a></span></div>

                                            <div id="ctl00_cphRoblox_rbxGames_dlGames_ctl00_pGameCurrentPlayers">

                                

                                                <div class="GameCurrentPlayers"><span class="DetailHighlighted"><?php echo $status?></span></div>

                                            

                                        </div>

                                        </div>

                                    </div>



                                    

                                    </td><?php  } ?>

                        </tr>

                    </tbody></table>

                                

                            </div>

                        

                

                </div>

                        

                

                        <div style="clear: both;">

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