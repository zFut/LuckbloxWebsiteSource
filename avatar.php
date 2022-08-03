<?php



session_start();



include 'data/config.php';



include 'data/check.php';



include 'data/data.php';



$user_check = check_login($conn);



$user_ban = check_ban($conn);



$data = get_data($conn);



$alert = get_alert($conn);



$bc = check_bc($conn);



$avatar = $data['avatar'];



list($head, $torso, $Rarm, $Larm, $Rleg, $Lleg) = explode(':', $avatar);

?>











<!DOCTYPE html>



<html>



    <head>



        <title>LuckBlox Home</title>



        <link rel="icon" href="textures/ico.png"> 



        <style>



            <?php 



            include 'data/main.css';



            ?>



        </style>



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



					



	



                    <div id="UserContainer">



                        <div id="LeftBank">



                            <div id="ProfilePane">



                                



                <table width="100%" id='profilecolor' cellpadding="6" cellspacing="0">



                    <tbody><tr>



                        <td>



                            <span id="ctl00_cphLUCKBLOX_rbxUserPane_lUserName" class="Title"><?php if($data['bc'] == 1){ ?> <img src='textures/bc.png' style="width: 4%;"> <?php } echo $_SESSION['username']?></span><br>



                            <span id="ctl00_cphLUCKBLOX_rbxUserPane_lUserOnlineStatus" class="UserOfflineMessage">[ Online ]</span>



                        </td>



                    </tr>



                    <tr>



                        <td>



                            <span id="ctl00_cphLUCKBLOX_rbxUserPane_lUserLUCKBLOXURL"><?php echo $_SESSION['username']?>'s LUCKBLOX:</span><br>



                            <a id="ctl00_cphLUCKBLOX_rbxUserPane_hlUserLUCKBLOXURL" href="user.php?id=<?php echo $data['id']?>">https://luckblox.xyz/user.php?id=<?php echo $data['id']?></a><br>



                            <br>



                            <div style="left: 0px; float: left; position: relative; top: 0px">



                                <a id="ctl00_cphLUCKBLOX_rbxUserPane_Image1" disabled="disabled" title="LUCKBLOX" onclick="return false" style="display:inline-block;"><img src="textures/renders/<?php echo $data['id']; ?>.png" style="width:180px;" border="0" alt="LUCKBLOX" blankurl="http://t7.LUCKBLOX.com:80/blank-180x220.gif"></a><br>



                                <div id="ctl00_cphLUCKBLOX_rbxUserPane_AbuseReportButton1_AbuseReportPanel" class="ReportAbusePanel">



                    <?php if($data['bc'] == 1){ ?> <h4 style='text-align:center; width: 238%;'>Bc Member!</h4><?php } ?>



                    



                



                </div>



                            </div>



                            



                            



                <p>Note: hats will be added soon. dont beg for em in server or u gay.</p>

                



                    



                        </td>



                    </tr>



                </tbody></table>



                



                            </div>



                            



                            



                        </div>



                        <div id="RightBank">



                            <div id="UserPlacesPane">



                                



                <div id="UserPlaces">



                    <h4>Avatar</h4>

                    <form action='data/updcolors.php' method='post'>

                    <?php 



if (isset($_GET['error'])){ 



    if (!empty ($_GET['error'])){



    if (strpos($_GET['error'], 'script') == false){



?>



  <h5 class="error" style='text-align: center;'><?php echo $_GET['error']; ?></h5>



<?php 



}



} 



} 



?>

                    

                    <h3>Head:<input type='text' name='head' value='<?php echo $head;?>'></h3>

                    <h3>Torso:<input type='text' name='torso' value='<?php echo $torso;?>'></h3>

                    <h3>Right Arm:<input type='text' name='Rarm' value='<?php echo $Rarm;?>'></h3>

                    <h3>Left Arm:<input type='text'  name='Larm' value='<?php echo $Larm;?>'></h3>

                    <h3>Right Leg:<input type='text'  name='Rleg' value='<?php echo $Rleg;?>'></h3>

                    <h3>Left Leg:<input type='text'  name='Lleg' value='<?php echo $Rleg;?>'></h3>

                    <input type="submit" style='width: 200px;' value="Change" class="BigButton">

                    </form>

                    <img src='textures/colors.png' style='width: 400px;'>



                    



                 </div>



                            </div>



                            

<div>         



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







	



    </body>



</html>