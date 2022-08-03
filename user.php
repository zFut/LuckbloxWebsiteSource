<?php

session_start();

include 'data/config.php';

include 'data/check.php';

include 'data/data.php';

$user_check = check_login($conn);

$user_ban = check_ban($conn);

$item = get_hats_user($conn);

$data = get_data($conn);

$playerprofile = get_profile($conn);

$alert = get_alert($conn);

$playergames = get_games_profile($conn);

$rowgames = get_games_profile_rows($conn);

$request = check_friend($conn);

$friends = get_friend_profile($conn);

?>





<!DOCTYPE html>

<html>

    <head>

        <title>LuckBlox Profiles</title>

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

                        <div id="Authentication"><span><a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="https://luckblox.xyz/user.php?id=<?php echo $data['id']?>"><?php echo $_SESSION['username']?></a> | <a href="data/outaction.php">Logout</a></span></div>

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

					

	

                    <div id="UserContainer">

                        <div id="LeftBank">

                            <div id="ProfilePane">

                                

                <table width="100%" id='profilecolor' cellpadding="6" cellspacing="0">

                    <tbody><tr>

                        <td>

                            <span id="ctl00_cphLUCKBLOX_rbxUserPane_lUserName" class="Title">

                                <?php if($playerprofile['bc'] == 1) { ?> <img src='textures/bc.png' style="width: 4%;"> <?php } echo $playerprofile['username']?></span><br>

                            <?php if($playerprofile['banned'] == 1){?>

                            <span  style="color: red;" >[ Banned ]</span>

                            <?php } else { if($playerprofile['seen'] == 1){?>

                            <span  style="color: blue;" >[ Online ]</span>

                            <?php } else { if($playerprofile['seen'] == 0){ ?>

                            <span  class="UserOfflineMessage">[ Offline ]</span>

                            <?php } } }?>

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <span id="ctl00_cphLUCKBLOX_rbxUserPane_lUserLUCKBLOXURL"><?php echo $playerprofile['username']?>'s LUCKBLOX:</span><br>

                            <a id="ctl00_cphLUCKBLOX_rbxUserPane_hlUserLUCKBLOXURL" href="user.php?id=<?php echo $playerprofile['id']?>">https://luckblox.xyz/user.php?id=<?php echo $playerprofile['id']?></a><br>

                            <br>

                            <div style="left: 0px; float: left; position: relative; top: 0px">

                                <a id="ctl00_cphLUCKBLOX_rbxUserPane_Image1" disabled="disabled" title="LUCKBLOX" onclick="return false" style="display:inline-block;"><img src="textures/renders/<?php echo $playerprofile['id']; ?>.png" style="width:180px;" border="0" alt="LUCKBLOX" blankurl="http://t7.LUCKBLOX.com:80/blank-180x220.gif"></a><br>

                                <div id="ctl00_cphLUCKBLOX_rbxUserPane_AbuseReportButton1_AbuseReportPanel" class="ReportAbusePanel">

                    

                    <?php if($playerprofile['bc'] == 1){ ?> <h4 style='text-align:center; width: 238%;'>Bc Member!</h4><?php } ?>

                

                </div>

                            </div>

                            

                            

                

               <?php

                

                if ($data['id'] != $playerprofile['id']){

                    if ($request != false){

                    $uid = $request['uid'];

                    $fid = $request['fid'];

                    $ac = $request['accepted'];

                    

                    if ($ac != 1 && $uid == $data['id']){ ?>

                        <p>Pending</p>

                     <?php } else { if($ac == 1){?>

                        <p><a href="data/FDecline.php?id=<?php echo $data['id']?>&uid=<?php echo $playerprofile['id']?>">Remove Friend</a></p>

                     <?php } if ($ac != 1 && $fid == $data['id']){ ?>

                        <p><a href="data/FAccept.php?id=<?php echo $data['id']?>&uid=<?php echo $playerprofile['id']?>">Accept Request</a> or <a href="data/FDecline.php?id=<?php echo $data['id']?>&uid=<?php echo $playerprofile['id']?>">Decline Request</a></p>

                     <?php } } } else { ?> <p><a href="data/FRequest.php?id=<?php echo $data['id']?>&uid=<?php echo $playerprofile['id']?>">Add Friend</a></p> <?php }?>



                      <p><a href="">Message</a></p>

                      <?php } else { ?> <h2>Your Profile</h2> <?php }?>

                <p><span id="ctl00_cphLUCKBLOX_rbxUserPane_rbxPublicUser_lBlurb">

                    <?php echo $playerprofile['status']?>

                

                

                    

                        </td>

                    </tr>

                </tbody></table>

                

                            </div>

                            <div id="UserBadgesPane">

                                

                

                <div id="UserBadges">

                    <h4>Badges</h4>

                    <p style="padding: 10px 10px 10px 10px;"></p>

                    <table id="ctl00_cphLUCKBLOX_rbxUserBadgesPane_dlBadges" cellspacing="0" align="Center" border="0">

                    </table>

                    

                </div>

                            </div>

                            <div id="UserStatisticsPane">

                                

                

                <div id="UserStatistics" style="    padding-bottom: 80px !important;">

                    <h4>Statistics</h4>

                    <div class="Statistic">

                        <div class="Label"><acronym title="The number of times this user's place has been visited.">tix</acronym>:</div>

                        <div class="Value"><span id="ctl00_cphLUCKBLOX_rbxUserStatisticsPane_lPlaceVisitsStatistics"><?php echo $playerprofile['tix']?></span></div>

                    </div>

                    <div class="Statistic">

                        <div class="Label"><acronym title="The number of times this user's profile has been viewed.">bux</acronym>:</div>

                        <div class="Value"><span id="ctl00_cphLUCKBLOX_rbxUserStatisticsPane_lProfileViewsStatistics"><?php echo $playerprofile['bux']?></span></div>

                    </div>

                    <div class="Statistic">

                        <div class="Label"><acronym title="The number of this user's friends.">Friends</acronym>:</div>

                        <div class="Value"><span id="ctl00_cphLUCKBLOX_rbxUserStatisticsPane_lFriendsStatistics">0</span></div>

                    </div>

                    <div class="Statistic">

                        <div class="Label"><acronym title="The number of times this user's character has destroyed another user's character in-game.">Knockouts</acronym>:</div>

                        <div class="Value"><span id="ctl00_cphLUCKBLOX_rbxUserStatisticsPane_lKillsStatistics">0</span></div>

                    </div>



                    

                    

                </div>

                            </div>

                            <div style="height: 20px;"></div>

                        </div>

                        <div id="RightBank">

                            <div id="UserPlacesPane">

                                

                <div id="UserPlaces">

                    <h4>Showcase</h4>

                    <?php if ($rowgames == 1){?>

                    <div id="ctl00_cphLUCKBLOX_rbxUserPlacesPane_ShowcasePlacesAccordion">

                    <div class="Place">

    

    <div class="Statistics">

        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl20_rbxPlatform_lStatistics"><?php echo $playergames['name'];?></span></div>

    <div class="Thumbnail">

        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ctl20_rbxPlatform_rbxPlaceThumbnail" disabled="disabled" title="<?php echo $playergames['name'];?>" href="game.php?id=<?php echo $playergames['id'];?>"><img style='width: 100%; text-align:center;' src="textures/games/place.png" border="0" id="img"></a>

    </div>

    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ctl20_rbxPlatform_pDescription">

				

        <div class="Description">

            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl20_rbxPlatform_lDescription"><?php echo $playergames['description'];?></span>

        </div>

    

			</div>

    

</div>

                </div>

                <?php } else { ?>

                    <p style="padding: 10px 10px 10px 10px;">This person doesnt have any games.</p>

                <?php }?>

                    

                 </div>

                            </div>

                            <div id="FriendsPane">

                                

                

                <div id="Friends">

                    <h4><?php echo $playerprofile['username']?>'s Friends <a href="">See all</a></h4>

                    <nav>

                    <ul>

                    <?php 

                    

                        foreach($friends as $fr) {

                        $uid = $fr['uid'];

                        $fid = $fr['fid'];

                        $uname = $fr['uname'];

                        $fname= $fr['fname'];

                        if($data['id'] != $_GET['id']){

                        if($uid != $data['id']){

                    ?>

                        

                        <li style='display: inline-block;'><a href='user.php?id=<?php echo $fid?>'><img style='width: 100px;' src='textures/renders/<?php echo $fid?>.png'><h3><?php echo $fname?></h3></a></li>



                    <?php }else{ if($fid != $data['id']){?>

                        <li style='display: inline-block;'><a href='user.php?id=<?php echo $uid?>'><img style='width: 100px;' src='textures/renders/<?php echo $uid?>.png'><h3><?php echo $uname?></h3></a></li>

                    <?php } } } else {

                        

                        if($fid != $data['id']){

                            ?>

                                <li style='display: inline-block;'><a href='user.php?id=<?php echo $fid?>'><img style='width: 100px;' src='textures/renders/<?php echo $fid?>.png'><h3><?php echo $fname?></h3></a></li>

        

                            <?php }else{ if($uid != $data['id']){?>

                                <li style='display: inline-block;'><a href='user.php?id=<?php echo $uid?>'><img style='width: 100px;' src='textures/renders/<?php echo $uid?>.png'><h3><?php echo $uname?></h3></a></li>

                            <?php } } } } ?>

                

                    </ul>

                </nav>

                </div>

                            </div>

                            <div style="height: 20px;"></div>

                            </div>

                        

		





<div>         </div>

<div id="UserAssetsPane" style="margin-top: 20%px;">



				<div id="ctl00_cphLUCKBLOX_rbxUserAssetsPane_upUserAssetsPane">

		

		<div id="UserAssets">

			<h4>Stuff</h4>

			<div id="AssetsMenu">

				

						<div id="ctl00_cphRobloxLUCKBLOX_rbxUserAssetsPane_AssetCategoryRepeater_ctl00_AssetCategorySelectorPanel" class="AssetsMenuItem_Selected">

			<a id="ctl00_cphLUCKBLOX_rbxUserAssetsPane_AssetCategoryRepeater_ctl00_AssetCategorySelector" class="AssetsMenuButton_Selected" href="">Hats</a>

		</div>

					

						<div id="ctl00_cphLUCKBLOX_rbxUserAssetsPane_AssetCategoryRepeater_ctl01_AssetCategorySelectorPanel" class="AssetsMenuItem">

			<a id="ctl00_cphLUCKBLOX_rbxUserAssetsPane_AssetCategoryRepeater_ctl01_AssetCategorySelector" class="AssetsMenuButton" href="">Shirts</a>

		</div>

					

			</div>

			<div id="AssetsContent">

				

				<table id="ctl00_cphLUCKBLOX_rbxUserAssetsPane_UserAssetsDataList" cellspacing="0" border="0">

			<tbody><tr>

            <?php 

                    foreach($item as $it) {

                    $name = $it['name'];

                    $id = $it['id'];

                    $price = $it['price'];

                    $type = $it['type'];

                    ?>



				<td class="Asset" valign="top">

					    <div style="padding:5px">

						<div class="AssetThumbnail">

							<a id="ctl00_cphLUCKBLOX_rbxUserAssetsPane_UserAssetsDataList_ctl00_AssetThumbnailHyperLink" title="<?php echo $name?>" href="item.php?id=<?php echo $id?>" style="display:inline-block;cursor:pointer;"><img style ="width:100px;" src="textures/items/<?php echo $name?>.png" border="0" id="img" alt="<?php echo $name?>" blankurl=""></a>

						</div>

						<div class="AssetDetails">

							<div class="AssetName"><a id="ctl00_cphLUCKBLOX_rbxUserAssetsPane_UserAssetsDataList_ctl00_AssetNameHyperLink" href="item.php?id=<?php echo $id?>"><?php echo $name?></a></div>

							<div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphLUCKBLOX_rbxUserAssetsPane_UserAssetsDataList_ctl00_GameCreatorHyperLink" href="user.php?id=1">LuckBlox</a></span></div>

							<div class="AssetPrice"><span class="PriceInRobux"><?php echo $type?>: <?php echo $price?></span></div>

					

						</div>

					</div></td>

                    

                    <?php }?>

			</tr>

		</tbody></table>

				

			</div>

			<div style="clear:both;"></div>

		</div>

	

	</div>

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