<?php
session_start();

if (!($_SESSION['logged_in'] == true)) {
    header("location: ./login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Home</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<style id="applicationStylesheet" type="text/css">
	#submitProjectCSV {
        left: 0px;
        top: 0px;
        position: relative;
		color: white;
		width: 260px;
		height: 50px;
        font-weight: bold;
        text-align: left;
		border: none;
		margin: 0;
		padding: 0;
		background: #075FB9;
		font-size: 24px;
		cursor: pointer;

	}
  #Regional_Admin_Table_2 {
		position: absolute;
		width: 524px;
		height: 446px;
		left: 1167px;
		top: 280px;
		overflow: scroll;
	}
  #customers {
  font-family: Arial;
  border-collapse: collapse;
  width: 100%;
	font-size: 20px;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: rgba(0,94,184,1);
	  color: white;
	}
  #Rectangle_323_dd {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_323_dd {
		position: absolute;
		overflow: visible;
		width: 347.291px;
		height: 457.28px;
		left: 1160px;
		top: 280px;
	}
  #Talk_On_AI__Healthcare_df {
		left: 1200px;
		top: 300.878px;
		position: absolute;
		overflow: visible;
		width: 278px;
		white-space: nowrap;
		line-height: 28px;
		margin-top: -2px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(0,94,184,1);
		text-decoration: underline;
	}
  #The_IXN_for_the_NHS_is_proud_t_di {
		left: 1200px;
		top: 350px;
		position: absolute;
		overflow: visible;
		width: 275.781px;
		height: 170px;
		line-height: 20px;
		margin-top: -3px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(22,22,22,1);
		letter-spacing: 0.01399999976158142px;
	}
  #Hosted_by_David_Parker_dg {
		left: 1200px;
		top: 695.831px;
		position: absolute;
		overflow: visible;
		width: 161px;
		height: 17px;
		line-height: 20px;
		margin-top: -3px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 14px;
		color: rgba(22,22,22,1);
		letter-spacing: 0.01399999976158142px;
	}
  #Date_21st_March_2021_dh {
		left: 1200px;
		top: 680.195px;
		position: absolute;
		overflow: visible;
		width: 161px;
		height: 17px;
		line-height: 20px;
		margin-top: -3px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 14px;
		color: rgba(22,22,22,1);
		letter-spacing: 0.01399999976158142px;
	}
  #Box_e-link_3_c {
		position: absolute;
		width: 347.476px;
		height: 457.28px;
		left: 359.829px;
		top: 913px;
		overflow: visible;
    z-index: 1;
	}
  #Group_10776_cl {
		position: absolute;
		width: 347.476px;
		height: 457.28px;
		left: 0px;
		top: 0px;
		overflow: visible;
    z-index: 1;
	}
  #Group_10730_cm {
		position: absolute;
		width: 347.476px;
		height: 457.28px;
		left: 0px;
		top: 0px;
		overflow: visible;
    z-index: 1;
	}
  #Box_of_link_middle_size_cn {
		position: absolute;
		width: 347.476px;
		height: 457.28px;
		left: 0px;
		top: 0px;
		overflow: visible;
    z-index: 1;
	}
  #Group_10785_co {
		position: absolute;
		width: 347.476px;
		height: 457.28px;
		left: 0px;
		top: 0px;
		overflow: visible;
    z-index: 1;
	}
  #Group_10729_cp {
		position: absolute;
		width: 347.476px;
		height: 457.28px;
		left: 0px;
		top: 0px;
		overflow: visible;
    z-index: 1;
	}
  #Rectangle_323_cq {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_323_cq {
		position: absolute;
		overflow: visible;
		width: 347.291px;
		height: 457.28px;
		left: 0px;
		top: 0px;
    z-index: 1;
	}
  #Line_2_cr {
		fill: transparent;
		stroke: rgba(179,187,193,1);
		stroke-width: 4px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2_cr {
		overflow: visible;
		position: absolute;
		width: 346.976px;
		height: 4px;
		left: 0.5px;
		top: 457.117px;
		transform: matrix(1,0,0,1,0,0);
	}
	#WorkingGroup {
		left: 0px:
        top: -30px:
        position: relative;
		overflow: auto;
		width: 300px;
		height: 20px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
		background-color: rgba(7,95,185,1);
		font-family: arial;
		text-align: center;
		padding: 10px
	}

	.mediaViewInfo {
		--web-view-name: Admin Home;
		--web-view-id: Admin_Home;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Admin_Home;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Admin_Home {
		position: absolute;
		width: 1920px;
		height: 3108px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Admin Home;
		--web-view-id: Admin_Home;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	#This_is_the_contents_managemen {
		left: 86px;
		top: 204px;
		position: absolute;
		overflow: visible;
		width: 1712px;
		height: 72px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Block_Projects {
		position: absolute;
		width: 1711px;
		height: 765px;
		left: 86px;
		top: 482px;
		overflow: visible;
	}
	#Path_10087 {
		fill: rgba(242,244,248,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_10087 {
		overflow: visible;
		position: absolute;
		width: 1711px;
		height: 800px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Projects {
		left: 28px;
		top: 27px;
		position: absolute;
		overflow: visible;
		width: 111px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Save__Publish {
		left: 770px;
		top: 194px;
		position: absolute;
		overflow: visible;
		width: 155px;
		height: 18px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.11399999618530274px;
	}
	#You_can_upload_the_CSV_file_co {
		left: 28px;
		top: 83px;
		position: absolute;
		overflow: visible;
		width: 1647px;
		height: 72px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Component_11__1 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 39px;
		top: 629px;
		overflow: visible;
	}
	#Rectangle_334 {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334 {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Download {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Group_10795 {
		position: absolute;
		width: 527px;
		height: 451px;
		left: 588px;
		top: 237px;
		overflow: visible;
	}
	#ID2_Upload_your_CSV_File__You_ {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: hidden;
		width: 528px;
		height: 215px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Note_for_developers_A_successf {
		left: 0px;
		top: 217px;
		position: absolute;
		overflow: visible;
		width: 456px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#Component_11__2 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 340px;
		overflow: visible;
	}
	#Rectangle_334_ {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_ {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Upload {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 82px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Group_10796 {
		position: absolute;
		width: 500px;
		height: 451px;
		left: 1167px;
		top: 237px;
		overflow: visible;
	}
	#ID2_Publish__By_pressing_the_b {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: hidden;
		width: 501px;
		height: 167px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Component_11__3 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 392px;
		overflow: visible;
	}
	#Rectangle_334_bc {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_bc {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Publish {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 88px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Note_Once_you_publish_you_will {
		left: 0px;
		top: 217px;
		position: absolute;
		overflow: visible;
		width: 486px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#Group_10794 {
		position: absolute;
		width: 527px;
		height: 260px;
		left: 28px;
		top: 237px;
		overflow: visible;
	}
	#Note_If_you_are_uploading_cont {
		left: 31px;
		top: 215px;
		position: absolute;
		overflow: visible;
		width: 466px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#ID1_Download_the_current_CSV_f {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: hidden;
		width: 528px;
		height: 183px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Block_Regional_IXN_AdministratLink {
		position: absolute;
		width: 1711px;
		height: 765px;
		left: 86px;
		top: 2234px;
		overflow: visible;
	}
	#Path_10089 {
		fill: rgba(242,244,248,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_10089 {
		overflow: visible;
		position: absolute;
		width: 1711px;
		height: 765px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Regional_IXN_Administrators {
		left: 28px;
		top: 27px;
		position: absolute;
		overflow: visible;
		width: 380px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Save__Publish_bl {
		left: 770px;
		top: 194px;
		position: absolute;
		overflow: visible;
		width: 155px;
		height: 18px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.11399999618530274px;
	}
	#You_can_upload_the_CSV_file_co_bm {
		left: 28px;
		top: 83px;
		position: absolute;
		overflow: visible;
		width: 1647px;
		height: 72px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Group_10798 {
		position: absolute;
		width: 527px;
		height: 451px;
		left: 28px;
		top: 237px;
		overflow: visible;
	}
	#ID1_Download_the_current_CSV_f_bo {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: hidden;
		width: 528px;
		height: 183px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Note_If_you_are_uploading_cont_bp {
		left: 0px;
		top: 215px;
		position: absolute;
		overflow: visible;
		width: 466px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#Component_11__7 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 11px;
		top: 392px;
		overflow: visible;
	}
	#Rectangle_334_br {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_br {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Download_bs {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Group_10799 {
		position: absolute;
		width: 527px;
		height: 451px;
		left: 588px;
		top: 237px;
		overflow: visible;
	}
	#ID2_Upload_your_CSV_File__You__bu {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: hidden;
		width: 528px;
		height: 215px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Note_for_developers_A_successf_bv {
		left: 0px;
		top: 217px;
		position: absolute;
		overflow: visible;
		width: 456px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#Component_11__8 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 392px;
		overflow: visible;
	}
	#Rectangle_334_bx {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_bx {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Upload_by {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 82px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Group_10800 {
		position: absolute;
		width: 500px;
		height: 451px;
		left: 1167px;
		top: 237px;
		overflow: visible;
	}
	#ID2_Publish__By_pressing_the_b_b {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: hidden;
		width: 501px;
		height: 167px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
  #ID2_Publish__By_pressing_the_b_b_2 {
		left: 1160px;
		top: 238px;
		position: absolute;
		overflow: hidden;
		width: 501px;
		height: 167px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Component_11__9 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 392px;
		overflow: visible;
	}
	#Rectangle_334_b {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_b {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Publish_b {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 88px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Note_Once_you_publish_you_will_b {
		left: 0px;
		top: 217px;
		position: absolute;
		overflow: visible;
		width: 486px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#Block_Events {
		position: absolute;
		width: 1711px;
		height: 765px;
		left: 86px;
		top: 1358px;
		overflow: visible;
	}
	#Path_10088 {
		fill: rgba(242,244,248,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_10088 {
		overflow: visible;
		position: absolute;
		width: 1711px;
		height: 765px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Events {
		left: 28px;
		top: 27px;
		position: absolute;
		overflow: visible;
		width: 93px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Save__Publish_b {
		left: 770px;
		top: 194px;
		position: absolute;
		overflow: visible;
		width: 155px;
		height: 18px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.11399999618530274px;
	}
	#You_can_upload_the_CSV_file_co_b {
		left: 28px;
		top: 83px;
		position: absolute;
		overflow: visible;
		width: 1647px;
		height: 72px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#ID1_Download_the_current_CSV_f_ca {
		left: 28px;
		top: 237px;
		position: absolute;
		overflow: hidden;
		width: 528px;
		height: 183px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#ID2_Publish__By_pressing_the_b_cb {
		left: 1167px;
		top: 237px;
		position: absolute;
		overflow: hidden;
		width: 501px;
		height: 167px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Note_If_you_are_uploading_cont_cc {
		left: 28px;
		top: 452px;
		position: absolute;
		overflow: visible;
		width: 466px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#Component_11__4 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 39px;
		top: 629px;
		overflow: visible;
	}
	#Rectangle_334_ce {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_ce {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Download_cf {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 116px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Group_10797 {
		position: absolute;
		width: 527px;
		height: 451px;
		left: 588px;
		top: 237px;
		overflow: visible;
	}
	#ID2_Upload_your_CSV_File__You__ch {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: hidden;
		width: 528px;
		height: 215px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(22,22,22,1);
	}
	#Note_for_developers_A_successf_ci {
		left: 0px;
		top: 217px;
		position: absolute;
		overflow: visible;
		width: 456px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#Component_11__5 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 392px;
		overflow: visible;
	}
	#Rectangle_334_ck {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_ck {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Upload_cl {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 82px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Component_11__6 {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 1167px;
		top: 629px;
		overflow: visible;
	}
	#Rectangle_334_cn {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_cn {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Publish_co {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 88px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Note_Once_you_publish_you_will_cp {
		left: 1167px;
		top: 454px;
		position: absolute;
		overflow: visible;
		width: 486px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(112,112,112,1);
	}
	#Head_Button_Events {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 396px;
		top: 312px;
		overflow: visible;
	}
	#Rectangle_334_cr {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_cr {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Events_cs {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 80px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Head_Button_Regional_IXN_ {
		position: absolute;
		width: 376px;
		height: 59px;
		left: 706px;
		top: 312px;
		overflow: visible;
	}
	#Group_10801 {
		position: absolute;
		width: 376px;
		height: 59px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_334_cv {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_cv {
		position: absolute;
		overflow: visible;
		width: 376px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
    #Rectangle_334_cvCreate {
        fill: rgba(7,95,185,1);
        stroke: rgba(7,95,185,1);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    .Rectangle_334_cvCreate {
        position: absolute;
        overflow: visible;
        width: 376px;
        height: 59px;
        left: 450px;
        top: 0px;
    }
	#Regional_IXN_Administrators_cw {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 325px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
    #Regional_IXN_Administrators_cwCreate {
        left: 470px;
        top: 16px;
        position: absolute;
        overflow: visible;
        width: 325px;
        white-space: nowrap;
        text-align: left;
        font-family: Arial;
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        color: rgba(255,255,255,1);
    }
	#Head_Button_Projects {
		position: absolute;
		width: 233px;
		height: 59px;
		left: 86px;
		top: 312px;
		overflow: visible;
	}
	#Rectangle_334_cy {
		fill: rgba(7,95,185,1);
		stroke: rgba(7,95,185,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_334_cy {
		position: absolute;
		overflow: visible;
		width: 233px;
		height: 59px;
		left: 0px;
		top: 0px;
	}
	#Projects_cz {
		left: 21px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 96px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#Heading {
		position: absolute;
		width: 285.404px;
		height: 37px;
		left: 85.596px;
		top: 124px;
		overflow: visible;
		cursor: pointer;
	}
	#IXN_for_the_NHS {
		left: 39.404px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 247px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 33px;
		color: rgba(14,42,59,1);
	}
	#IXN_Logo {
		position: absolute;
		width: 28.34px;
		height: 37px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10713 {
		position: absolute;
		width: 28.34px;
		height: 37px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Header {
		position: absolute;
		width: 1920px;
		height: 80px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_10086 {
		fill: rgba(14,42,59,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_10086 {
		overflow: visible;
		position: absolute;
		width: 1920px;
		height: 80px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Contents_Management_System {
		left: 52px;
		top: 27px;
		position: absolute;
		overflow: visible;
		width: 461px;
		height: 27px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: rgba(247,247,247,1);
		letter-spacing: 0.11399999618530274px;
	}
	#Group_10793 {
		position: absolute;
		width: 85px;
		height: 37px;
		left: 1797px;
		top: 22px;
		overflow: visible;
	}
	#Rectangle_298 {
		fill: rgba(243,243,243,1);
	}
	.Rectangle_298 {
		position: absolute;
		overflow: visible;
		width: 85px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Logout {
		left: 9px;
		top: 8px;
		position: absolute;
		overflow: visible;
		width: 44px;
		white-space: nowrap;
		text-align: left;
		font-family: arial;
		font-style: normal;
		font-weight: bold;
		font-size: 20px;
		color: #0E2A3B;
	}
</style>
<script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page.
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.prefix = "--web-";
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.VIEW_CHANGING = "viewChanging";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.APPLICATION_RESIZE = "applicationResize";
	this.SIZE_STATE_NAME = "data-is-view-scaled";
	this.STATE_NAME = this.prefix + "state";

	this.lastTrigger = null;
	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.applicationStylesheet = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.views = {};
	this.viewIds = [];
	this.viewQueries = {};
	this.overlays = {};
	this.overlayIds = [];
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;
	this.horizontalScrollbarsNeeded = false;
	this.verticalScrollbarsNeeded = false;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		var views = self.getVisibleViews();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectOverlays();
		self.collectMediaQueries();

		for (let index = 0; index < views.length; index++) {
			var view = views[index];
			self.setViewOptions(view);
			self.setViewVariables(view);
			self.centerView(view);
		}

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.enableDeepLinking) {
				self.syncronizeViewToURL();
			}

			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}

			self.initialized = true;
		}

		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);

			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.centerView(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}

		if (self.showUpdateNotification) {
			self.showNotification();
		}

		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;

		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send:
					//
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null'
					// has been blocked by CORS policy:
					// Cross origin requests are only supported for protocol schemes:
					// http, data, chrome, chrome-extension, https.
					//
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					//
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date:
					//
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}

					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {

				if (self.refreshRequest.status === 2 ||
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;

						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}


					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1))";
		notification.setAttribute("style", styleRule);

		notification.className= "PageRefreshedClass";

		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				notification.parentNode.removeChild(notification);
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}

		// http protocol - check the headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";

		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}

			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.updateURLState = function(view, stateName) {
		stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

		if (self.supportsPopState==false) {
			self.setFragment(stateName);
		}
		else {
			if (stateName!=window.location.hash) {

				if (window.location.hash==null) {
					window.history.replaceState({name:view.viewId}, null, stateName);
				}
				else {
					window.history.pushState({name:view.viewId}, null, stateName);
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;

			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views.
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}

				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Hide overlay
	 * @param {Object} overlay element to hide
	 **/
	self.hideOverlay = function(overlay) {
		var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);

			//if (self.showByMediaQuery) {
				overlay.style.display = "none";
			//}
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var isOverlay = view ? self.isOverlay(view) : false;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);

			if (isOverlay && view && setViewOptions) {
				self.setViewVariables(null, view);
			}
			else {
				if (view && setViewOptions) self.setViewOptions(view);
				if (view && setViewOptions) self.setViewVariables(view);
			}
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	self.getElementView = function(element) {
		var view = element;
		var viewFound = false;

		while (viewFound==false || view==null) {
			if (view && self.viewsDictionary[view.id]) {
				return view;
			}
			view = view.parentNode;
		}
	}

	/**
	 * Show overlay over view
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 * @param {String} id id of view or view reference
	 * @param {Number} x x location
	 * @param {Number} y y location
	 */
	self.showOverlay = function(event, id, x, y) {
		var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
		var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var anchorLeft = false;
		var anchorTop = false;
		var anchorRight = false;
		var anchorBottom = false;
		var display = null;
		var reparent = true;
		var view = null;

		if (overlay==null || overlay==false) {
			self.log("Overlay not found, '"+ id + "'");
			return;
		}

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var isAnimated = animation!="";
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", animation);
			}

			if ("stopImmediatePropagation" in event) {
				event.stopImmediatePropagation();
			}
		}

		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// remove any current overlays
		if (self.currentOverlay) {

			// act as switch if same button
			if (self.currentOverlay==actionTarget || self.currentOverlay==null) {
				if (self.lastTrigger==button) {
					self.removeOverlay(isAnimated);
					return;
				}
			}
			else {
				self.removeOverlay(isAnimated);
			}
		}

		if (reparent) {
			view = self.getElementView(button);
			if (view) {
				view.appendChild(overlay);
			}
		}

		if (query) {
			//self.setElementAnimation(overlay, null);
			//overlay.style.animation = animation;
			self.enableMediaQuery(query);

			var display = overlay && overlay.style.display;

			if (overlay && display=="" || display=="none") {
				overlay.style.display = "block";
				//self.setViewOptions(overlay);
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}
		else if (id) {

			display = window.getComputedStyle(overlay).getPropertyValue("display");

			if (display=="" || display=="none") {
				overlay.style.display = "block";
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}

		// do not set x or y position if centering
		var horizontal = self.prefix + "center-horizontally";
		var vertical = self.prefix + "center-vertically";
		var style = overlay.style;
		var transform = [];

		centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
		centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
		anchorLeft = self.getIsStyleDefined(id, "left");
		anchorRight = self.getIsStyleDefined(id, "right");
		anchorTop = self.getIsStyleDefined(id, "top");
		anchorBottom = self.getIsStyleDefined(id, "bottom");


		if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
			style = self.viewsDictionary[overlay.id].styleDeclaration.style;
		}

		if (centerHorizontally) {
			style.left = "50%";
			style.transformOrigin = "0 0";
			transform.push("translateX(-50%)");
		}
		else if (anchorRight && anchorLeft) {
			style.left = x + "px";
		}
		else if (anchorRight) {
			//style.right = x + "px";
		}
		else {
			style.left = x + "px";
		}

		if (centerVertically) {
			style.top = "50%";
			transform.push("translateY(-50%)");
			style.transformOrigin = "0 0";
		}
		else if (anchorTop && anchorBottom) {
			style.top = y + "px";
		}
		else if (anchorBottom) {
			//style.bottom = y + "px";
		}
		else {
			style.top = y + "px";
		}

		if (transform.length) {
			style.transform = transform.join(" ");
		}

		self.currentOverlay = overlay;
		self.lastTrigger = button;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function(animate) {
		var overlay = self.currentOverlay;
		animate = animate===false ? false : true;

		if (overlay) {
			var style = overlay.style;

			if (style.animation && self.supportAnimations && animate) {
				self.reverseAnimation(overlay, true);

				var duration = self.getAnimationDuration(style.animation, true);

				setTimeout(function() {
					self.setElementAnimation(overlay, null);
					self.hideOverlay(overlay);
					self.currentOverlay = null;
				}, duration);
			}
			else {
				self.setElementAnimation(overlay, null);
				self.hideOverlay(overlay);
				self.currentOverlay = null;
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			//target.addEventListener("animationend", self.animationEndHideHandler);

			var duration = self.getAnimationDuration(lastAnimation, true);
			var isOverlay = self.isOverlay(target);

			setTimeout(function() {
				self.setElementAnimation(target, null);

				if (isOverlay) {
					self.hideOverlay(target);
				}
				else {
					self.hideView(target);
				}
			}, duration);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
		self.dispatchEvent(new Event(event.type));
	}

	self.isOverlay = function(view) {
		var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

		return result;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);

				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
				self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}

		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;

		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;

		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);

			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;

			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale.
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var maximumScale = self.maximumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
		var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;
		var style = view.style;

		if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
			style = self.viewsDictionary[view.id].styleDeclaration.style;
		}

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit" || scaleToFitType=="") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);

		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
				//canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			//canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
			//canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);

			return desiredScale;
		}

		if (scaleToFitType=="default" || scaleToFitType=="") {
			desiredScale = 1;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}
			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
				else {
					transformValue += " translateX(" + 0 + ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;


			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);

			return desiredScale;
		}
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view
	 * @param {String} type type of scaling - width, height, all, none
	 * @param {Boolean} scaleUp if scale up enabled
	 * @param {Number} scale target scale value
	 */
	self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? scale : scaleNeededToFitWidth;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {

			if (scaleUp && maximumScale==null) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}
		else if (type=="height") {
			minScale = Math.min(1, scaleNeededToFitHeight);
			if (minimumScale!="" && maximumScale!="") {
				minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
			}
			else {
				if (minimumScale!="") {
					minScale = Math.max(minimumScale, scaleNeededToFitHeight);
				}
				if (maximumScale!="") {
					minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
				}
			}

			if (scaleUp && maximumScale=="") {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=minScale) {
				canCenter = true;
			}
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}

		self.horizontalScrollbarsNeeded = canCenter;

		return canCenter;
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view to scale
	 * @param {String} type type of scaling
	 * @param {Boolean} scaleUp if scale up enabled
	 * @param {Number} scale target scale value
	 */
	self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? 1 : scale;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
		}
		else if (type=="height") {
			minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
			canCenter = scaleNeededToFitHeight>=minScale;
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitHeight>=1) {
				canCenter = true;
			}
		}

		self.verticalScrollbarsNeeded = canCenter;

		return canCenter;
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth) || isNaN(elementHeight)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}

		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		// need to get browser viewport width when element
		var isParentWindow = view && view.parentNode && view.parentNode===document.body;
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}

		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementHeight)) {
			return newScale;
		}

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}

		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;

		// listen for both events
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}

		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();

		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}

			if (view) {
				var display = getComputedStyle(view).display;

				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getVisibleViews = function() {
		var viewIds = self.getViewIds();
		var views = [];

		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}

			if (view) {
				var display = getComputedStyle(view).display;

				if (display=="none") {
					continue;
				}

				if (display=="block" || display=="flex") {
					views.push(view);
				}
			}
		}

		return views;
	}

	self.getStateNameByViewId = function(id) {
		var state = self.viewsDictionary[id];
		return state && state.stateName;
	}

	self.getMatchingViews = function(ids) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state && state.rule;
				var matchResults = window.matchMedia(rule.conditionText);
				var view = self.views[viewId];

				if (matchResults.matches) {
					if (ids==true) {
						matchingViews.push(viewId);
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.ruleMatchesQuery = function(rule) {
		var result = window.matchMedia(rule.conditionText);
		return result.matches;
	}

	self.getViewsByStateName = function(stateName, matchQuery) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {

			// find state name
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state.rule;
				var mediaRule = state.mediaRule;
				var view = self.views[viewId];
				var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
				var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
				var matchesResults = false;

				if (viewStateName==stateName) {
					if (matchQuery) {
						matchesResults = self.ruleMatchesQuery(rule);

						if (matchesResults) {
							matchingViews.push(view);
						}
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = self.getHashFragment();

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}

			self.showMediaQueryViewsByState(stateName);
			return;
		}

		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}

		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;

		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}

		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) {
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}

		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) {
			return capture;
		});

		return value;
	}

	/**
	 * Get the first defined value of property. Returns empty string if not defined
	 * @param {String} id id of element
	 * @param {String} property
	 */
	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;

			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];

				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;

					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];

						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {

							if (mediaRule.style && mediaRule.style.getPropertyValue(property)!="") {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && cssRule.style.getPropertyValue(property)!="") {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}

		return values.pop();
	}

	self.getIsStyleDefined = function(id, property) {
		var value = self.getCSSPropertyValueForElement(id, property);
		return value!==undefined && value!="";
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getElement(id);
			self.views[id] = view;
		}

		self.viewIds = viewIds;
	}

	self.collectOverlays = function() {
		var viewIds = self.getViewIds();
		var ids = [];

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			const isOverlay = view && self.isOverlay(view);

			if (isOverlay) {
				ids.push(id);
				self.overlays[id] = view;
			}
		}

		self.overlayIds = ids;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		var stateName = self.prefix + "state";
		var stateValue;

		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];

			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				var mediaViewInfoFound = false;
				var mediaId = null;

				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];

					selectorText = mediaRule.selectorText;

					if (selectorText==".mediaViewInfo" && mediaViewInfoFound==false) {

						mediaId = self.getStyleRuleValue(mediaRule, property);
						stateValue = self.getStyleRuleValue(mediaRule, stateName);

						selectorIDText = "#" + mediaId;
						selectorClassText = "." + mediaId + "_Class";

						// prevent duplicates from load and domcontentloaded events
						if (self.addedViews.indexOf(mediaId)==-1) {
							self.addView(mediaId, cssRule, mediaRule, stateValue);
						}

						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						mediaViewInfoFound = true;
					}

					if (selectorIDText==selectorText || selectorClassText==selectorText) {
						var styleObject = self.viewsDictionary[mediaId];
						if (styleObject) {
							styleObject.styleDeclaration = mediaRule;
						}
						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText;

				if (selectorText==null) continue;

				selectorText = selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					self.addView(selectorText, cssRule, null, stateValue);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view. A view object contains the id of the view and the style rule
	 * Use enableMediaQuery(rule) to enable
	 * An array of view names are in self.addedViews array
	 */
	self.addView = function(viewId, cssRule, mediaRule, stateName) {
		var state = {name:viewId, rule:cssRule, id:viewId, mediaRule:mediaRule, stateName:stateName};
		self.addedViews.push(viewId);
		self.viewsDictionary[viewId] = state;
		self.mediaQueryDictionary[viewId] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} id id of view in current
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 * @param {String} parent id of parent view
	 */
	self.goToView = function(id, maintainPreviousState, parent) {
		var state = self.viewsDictionary[id];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = id;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 */
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];

		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			if (self.currentOverlay) {
				self.removeOverlay(false);
			}

			if (self.showByMediaQuery) {
				var stateName = targetState;

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
				return;
			}

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.centerView(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}

		event.stopImmediatePropagation();
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly
			// and fade out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);

			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		self.setElementAnimation(element, null);

		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	/**
	 * Get duration in animation string
	 * @param {String} animation animation value
	 * @param {Boolean} inMilliseconds length in milliseconds if true
	 */
	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = parseFloat(animation.replace(expression, "$" + "1"));
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		var elementId = id ? id.trim() : id;
		var element = elementId ? document.getElementById(elementId) : null;

		return element;
	}

	self.getElementByClass = function(className) {
		className = className ? className.trim() : className;
		var elements = document.getElementsByClassName(className);

		return elements.length ? elements[0] : null;
	}

	self.resizeHandler = function(event) {

		if (self.showByMediaQuery) {
			if (self.enableDeepLinking) {
				var stateName = self.getHashFragment();

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
			}
		}
		else {
			var visibleViews = self.getVisibleViews();

			for (let index = 0; index < visibleViews.length; index++) {
				var view = visibleViews[index];
				self.scaleViewIfNeeded(view);
			}
		}

		window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
		else if (view) {
			self.centerView(view);
		}
	}

	self.centerView = function(view) {

		if (self.scaleViewsToFit) {
			self.scaleViewToFit(view, true);
		}
		else {
			self.scaleViewToActualSize(view);  // for centering support for now
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.getHashFragment = function() {
		var value = window.location.hash ? window.location.hash.replace("#", "") : "";
		return value;
	}

	self.showBlockElement = function(view) {
		view.style.display = "block";
	}

	self.hideElement = function(view) {
		view.style.display = "none";
	}

	self.showStateFunction = null;

	self.showMediaQueryViewsByState = function(state, event) {
		// browser will hide and show by media query (small, medium, large)
		// but if multiple views exists at same size user may want specific view
		// if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
		// if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
		// if no state is defined show view
		// an viewChanging event is dispatched before views are shown or hidden that can be prevented

		// get all matched queries
		// if state name is specified then show that view and hide other views
		// if no state name is defined then show
		var matchedViews = self.getMatchingViews();
		var matchMediaQuery = true;
		var foundViews = self.getViewsByStateName(state, matchMediaQuery);
		var showViews = [];
		var hideViews = [];

		// loop views that match media query
		for (let index = 0; index < matchedViews.length; index++) {
			var view = matchedViews[index];

			// let user determine visible view
			if (self.showStateFunction!=null) {
				if (self.showStateFunction(view, state)) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// state was defined so check if view matches state
			else if (foundViews.length) {

				if (foundViews.indexOf(view)!=-1) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// if no state names are defined show view (define unused state name to exclude)
			else if (state==null || state=="") {
				showViews.push(view);
			}
		}

		if (showViews.length) {
			var viewChangingEvent = new Event(self.VIEW_CHANGING);
			viewChangingEvent.showViews = showViews;
			viewChangingEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangingEvent);

			if (viewChangingEvent.defaultPrevented==false) {
				for (var index = 0; index < hideViews.length; index++) {
					var view = hideViews[index];

					if (self.isOverlay(view)) {
						self.removeOverlay(view);
					}
					else {
						self.hideElement(view);
					}
				}

				for (var index = 0; index < showViews.length; index++) {
					var view = showViews[index];

					if (index==showViews.length-1) {
						self.clearDisplay(view);
						self.setViewOptions(view);
						self.setViewVariables(view);
						self.centerView(view);
						self.updateURLState(view, state);
					}
				}
			}

			var viewChangeEvent = new Event(self.VIEW_CHANGE);
			viewChangeEvent.showViews = showViews;
			viewChangeEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangeEvent);
		}

	}

	self.clearDisplay = function(view) {
		view.style.setProperty("display", null);
	}

	self.hashChangeHandler = function(event) {
		var fragment = self.getHashFragment();
		var view = self.getViewById(fragment);

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			self.showMediaQueryViewsByState(stateName);
		}
		else {
			if (view) {
				self.hideViews();
				self.showView(view);
				self.setViewVariables(view);
				self.updateViewLabel();

				window.dispatchEvent(new Event(self.VIEW_CHANGE));
			}
			else {
				window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
			}
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;

			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}

			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.setElementHTML = function(id, value) {
		var element = self.getElement(id);
		element.innerHTML = value;
	}

	self.getStackArray = function(error) {
		var value = "";

		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {

		  }
		}

		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);

		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;

		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }

			return newArray;
		}

		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}

	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script>
</head>
<body>

<?php

include_once("db_connect.php");

$count_query = mysqli_query($link, "SELECT COUNT(*) as total_records FROM projects");
$count = mysqli_fetch_array($count_query);
$total = $count['total_records'];
 ?>

<div id="Admin_Home">
	<div id="This_is_the_contents_managemen">
		<span>This is the Contents Management System for the IXN for the NHS page. You can manage the contents relating to Projects, Events, and Regional IXN Administrators, using the appropriate CSV file format provided by the IXN. </span>
	</div>
	<div id="Block_Projects">
		<svg class="Path_10087" viewBox="0 0 1711 765">
			<path id="Path_10087" d="M 0 0 L 1711 0 L 1711 765 L 0 765 L 0 0 Z">
			</path>
		</svg>
		<div id="Projects">
			<span>Projects</span>
		</div>
		<div id="Save__Publish">
			<span></span>
		</div>
		<div id="You_can_upload_the_CSV_file_co">
			<span>You can upload the CSV file containing the information about Projects. Please note that this will affect all of the project videos and information that can be found in the IXN for the NHS website: Upcoming Projects, Project Archives, Working Groups. </span>
		</div>
		<div id="Component_11__1" class="Component_11___1">

			<!-- download latest CSV button -->
			<form action="export_db.php" method = "get">
				<input type="submit" value="  Download CSV" id="submitProjectCSV">
			</form>

			<br>

			<!-- Download all CSVs button -->
			<form action="export_all_CSVs.php" method = "get">
				<input type="submit" value="  Download all CSVs" id="submitProjectCSV">
			</form>

		</div>
		<div id="Group_10795">
			<div id="ID2_Upload_your_CSV_File__You_">
				<span>2. Upload your CSV File<br/></span><br><span style="font-style:normal;font-weight:normal;">You can upload the latest version of your CSV file by clicking the button below. Note that only .csv file is allowed. After a successful upload, you may want to assign the working groups to each projects by using the Edit Working Groups button.</span><br>
			</div>
			<div id="Note_for_developers_A_successf">
			</div>
			<div id="Component_11__2" class="Component_11___2">
				<!-- this is the Project Upload function -->

				<?php
			session_start();

				function phpAlert($msg) {
    		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
				}

				$errorfile = fopen("errorfile.txt", "r");
				$errormsg = fread($errorfile,filesize("errorfile.txt"));

				if (($_GET["upload"]) == 'True') {
			          $upload = True;
								echo phpAlert(   "Upload Successful!"   );
			  }
				if (($_GET["upload"]) == 'False') {
						echo phpAlert("Upload unsuccessful. " . $errormsg);
					}
				if (($_GET["publish"]) == 'True') {
						echo phpAlert("Pages published.");
					}
				if (($_GET["publish"]) == 'False') {
						echo phpAlert("No records to publish. Please upload a CSV file.");
					}
				if (($_GET["wg"]) == 'True') {
						echo phpAlert("Working groups updated.");
					}


				?>
				<div>
					<form action="upload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
						<input type="submit" value="   Upload CSV" name="submit" id="submitProjectCSV">
					</form>

                <br><br>
                <?php
                if ($total > 0) {
                    echo '<a href="WorkingGroups.php" style="text-decoration: none" id="WorkingGroup" class="WorkingGroup"> <span>  Edit Working Groups</span></a>';
                }
                ?>

				<!-- <a href="WorkingGroups.php" style="text-decoration: none" id="WorkingGroup" class="WorkingGroup"> <span>Edit Working Groups</span></a> -->
                </div>
			</div>
		</div>
		<div id="Group_10796">
			<div id="ID2_Publish__By_pressing_the_b">
				<span>3. Publish<br/></span><br><span style="font-style:normal;font-weight:normal;">By pressing the button below, you can publish the csv file you just uploaded in Step 2. If you would like to go back, simply reupload a new file in Step 2.   <br/><br/><br/><br/></span><br>
			</div>
			<div id="Component_11__3" class="Component_11___3">
				<a href="generate.php">
					<svg class="Rectangle_334_bc">
					<rect id="Rectangle_334_bc" rx="0" ry="0" x="0" y="0" width="233" height="59">
					</rect>
				</svg>
			</a>
			<a href="generate.php">
				<div id="Publish">
					<span>Publish</span>
				</div>
			</a>
			</div>
			<div id="Note_Once_you_publish_you_will">
			</div>
		</div>
		<div id="Group_10794">
			<div id="Note_If_you_are_uploading_cont">
			</div>
			<div id="ID1_Download_the_current_CSV_f">
				<span>1. Download the current CSV file <br/></span><br><span style="font-style:normal;font-weight:normal;">It is recommended to first download the current <br/>csv file that is used in the live site, and then make<br/>the necessary edits on it. You can download the current or all csv files with the buttons below. <br/><br/><br/><br/></span><br>
			</div>
		</div>
	</div>
	<div id="Block_Regional_IXN_AdministratLink">
		<svg class="Path_10089" viewBox="0 0 1711 765">
			<path id="Path_10089" d="M 0 0 L 1711 0 L 1711 765 L 0 765 L 0 0 Z">
			</path>
		</svg>
		<div id="Regional_IXN_Administrators">
			<span>Regional IXN Administrators</span>
		</div>
		<div id="Save__Publish_bl">
			<span></span>
		</div>
		<div id="You_can_upload_the_CSV_file_co_bm">
			<span>You can upload the CSV file containing the information about Regional IXN Administrators. Please note that this will affect the contents in the Regional IXN Administrator page.</span>
		</div>
		<div id="Group_10798">
			<div id="ID1_Download_the_current_CSV_f_bo">
				<span>1. Download the current CSV file <br/></span><br><span style="font-style:normal;font-weight:normal;">It is recommended to first download the current <br/>csv file that is used in the live site, and then make<br/>the necessary edits on it. You can download the current csv file by clicking the button below. <br/><br/><br/><br/></span><br>
			</div>
			<div id="Note_If_you_are_uploading_cont_bp">
			</div>
			<div id="Component_11__7" class="Component_11___7">

			<!-- download latest CSV button -->
			<form action="export_ra.php" method = "get">
				<input type="submit" value="  Download CSV" id="submitProjectCSV">
			</form>

			<br>

			<!-- Download all CSVs button -->
			<form action="export_all_RAs.php" method = "get">
				<input type="submit" value="  Download all CSVs" id="submitProjectCSV">
			</form>

			</div>
		</div>


		<div id="Group_10799">
			<div id="ID2_Upload_your_CSV_File__You__bu">
				<span>2. Upload your CSV File<br/></span><br><span style="font-style:normal;font-weight:normal;">You can upload the latest version of your CSV file by clicking the button below. Note that only .csv file is allowed. If you csv file contains errors such as (inappropriate number of columns, typo), it will return an error message.   <br/><br/><br/><br/></span><br>
			</div>
			<div id="Note_for_developers_A_successf_bv">
			</div>

			<div id="Component_11__8" class="Component_11___8">

				<!-- This is the events upload function -->
				<form action="ra_upload.php" method="post" enctype="multipart/form-data">
					<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
					<input type="submit" value="   Upload & Publish" name="submit" id="submitProjectCSV">
				</form>

			</div>
		</div>
		<div id="Group_10800">
			<div id="ID2_Publish__By_pressing_the_b_b">
				<span>Preview:<br/></span><br><span style="font-style:normal;font-weight:normal;"><br/><br/><br/><br/></span><br>
			</div>
			<!-- <div id="Component_11__9" class="Component_11___9">
				<svg class="Rectangle_334_b">
					<rect id="Rectangle_334_b" rx="0" ry="0" x="0" y="0" width="233" height="59">
					</rect>
				</svg>
				<div id="Publish_b">
					<span>Publish</span>
				</div>
			</div> -->
			<div id="Note_Once_you_publish_you_will_b">
			</div>
        </div>

    <?php

    $adminsQuery = mysqli_query($link, "SELECT COUNT(*) FROM regionaladmins");
    $adminscount = mysqli_fetch_array($adminsQuery);

    if (count($adminscount) > 0) {
      $adminsInfo = mysqli_query($link, "SELECT * FROM regionaladmins");

?>
<div id="Regional_Admin_Table_2">
  <table id="customers">
    <!-- adapted from https://www.w3schools.com/css/css_table.asp -->
    <tr><th>Name</th><th>City</th></tr>
    <?php
    while($row = mysqli_fetch_array($adminsInfo)){
      $name = $row['fName'] . " " . $row['lName'];
      // $email = $row['email'];
      $city = $row['city'];
      // $country = $row['country'];
      echo "<tr><td>".$name."</td><td>".$city."</td></tr>";
    }
     ?>
  </table>

</div>
<?php
} else {
    ?>
    <div id="ID2_Publish__By_pressing_the_b_b_2">
      <span><br/></span><br><span style="font-style:normal;font-weight:normal;">There is currently no information to display.<br/><br/><br/><br/></span><br>
    </div>
<?php
}
 ?>

	</div>
	<div id="Block_Events">
		<svg class="Path_10088" viewBox="0 0 1711 765">
			<path id="Path_10088" d="M 0 0 L 1711 0 L 1711 765 L 0 765 L 0 0 Z">
			</path>
		</svg>
		<div id="Events">
			<span>Events</span>
		</div>
		<div id="Save__Publish_b">
			<span></span>
		</div>
		<div id="You_can_upload_the_CSV_file_co_b">
			<span>You can upload the CSV file containing the information about Events. Please note that this will affect the Event gallery in the Learn More about IXN page.</span>
		</div>
		<div id="ID1_Download_the_current_CSV_f_ca">
			<span>1. Download the current CSV file <br/></span><br><span style="font-style:normal;font-weight:normal;">It is recommended to first download the current <br/>csv file that is used in the live site, and then make<br/>the necessary edits on it. You can download the current csv file by clicking the button below. <br/><br/><br/><br/></span><br>
		</div>
		<div id="ID2_Publish__By_pressing_the_b_cb">
			<span>Preview:<br/></span>
      <!-- <br><span style="font-style:normal;font-weight:normal;">By pressing the button below, you can publish the csv file you just uploaded in Step 2. If you would like to go back, simply reupload a new file in Step 2.   <br/><br/><br/><br/></span><br> -->
	 </div>
    <?php


    $eventsGalleryQuery = mysqli_query($link, "SELECT COUNT(*) FROM events");
    $eventscount = mysqli_fetch_array($eventsGalleryQuery);

    if (count($eventscount) > 0) {

      $eventsGalleryRow = mysqli_query($link, "SELECT * FROM events ORDER BY eventID DESC LIMIT 1");
      $eventsrow = mysqli_fetch_array($eventsGalleryRow);

     ?>

      <svg class="Rectangle_323_dd">
        <rect id="Rectangle_323_dd" rx="0" ry="0" x="0" y="0" width="347.291" height="457.28">
        </rect>
      </svg>
      <div id="Talk_On_AI__Healthcare_df">
        <a href="<?php echo $eventsrow['link']; ?>"><?php echo $eventsrow['eventTitle']; ?></a>
      </div>
      <div id="The_IXN_for_the_NHS_is_proud_t_di">
        <span><?php echo $eventsrow['description']; ?> </span>
      </div>
      <div id="Hosted_by_David_Parker_dg">
        <span>Author: </span><span style="font-style:normal;font-weight:normal;"> <?php echo $eventsrow['authorName'] ?></span>
      </div>
      <div id="Date_21st_March_2021_dh">
        <span>Date:</span><span style="font-style:normal;font-weight:normal;"> <?php echo $eventsrow['eventDate']; ?></span>
      </div>

    <?php
  } else {
   ?>
   <div id="ID2_Publish__By_pressing_the_b_cb">
     <span><br/></span>
     <br><span style="font-style:normal;font-weight:normal;">There is currently no information to display.  <br/><br/><br/><br/></span><br>
   </div>
   <?php
 }
   ?>
		<div id="Note_If_you_are_uploading_cont_cc">
		</div>
		<div id="Component_11__4" class="Component_11___4">

			<!-- download latest CSV button -->
			<form action="export_events.php" method = "get">
				<input type="submit" value="  Download CSV" id="submitProjectCSV">
			</form>

			<br>

			<!-- Download all CSVs button -->
			<form action="export_all_events.php" method = "get">
				<input type="submit" value="  Download all CSVs" id="submitProjectCSV">
			</form>

			<!-- <svg class="Rectangle_334_ce">
				<rect id="Rectangle_334_ce" rx="0" ry="0" x="0" y="0" width="233" height="59">
				</rect>
			</svg>
			<div id="Download_cf">
				<span>Download  asdadsd</span>
			</div> -->


		</div>
		<div id="Group_10797">
			<div id="ID2_Upload_your_CSV_File__You__ch">
				<span>2. Upload your CSV File<br/></span><br><span style="font-style:normal;font-weight:normal;">You can upload the latest version of your CSV file by clicking the button below. Note that only .csv file is allowed. If you csv file contains errors such as (inappropriate number of columns, typo), it will return an error message.   <br/><br/><br/><br/></span><br>
			</div>
			<div id="Note_for_developers_A_successf_ci">
			</div>
			<div id="Component_11__5" class="Component_11___5">
				<div>
					<!-- This is the events upload function -->
					<form action="events_upload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
						<input type="submit" value="   Upload & Publish" name="submit" id="submitProjectCSV">
					</form>
				</div>
			</div>
		</div>

		<!-- <div id="Component_11__6" class="Component_11___6">
			<svg class="Rectangle_334_cn">
				<rect id="Rectangle_334_cn" rx="0" ry="0" x="0" y="0" width="233" height="59">
				</rect>
			</svg>
			<div id="Publish_co">
				<span>Publish</span>
			</div>
		</div> -->
		<div id="Note_Once_you_publish_you_will_cp">
		</div>
	</div>
	<a href="#Block_Events">
	<div id="Head_Button_Events" class="Head_Button__Events">
		<svg class="Rectangle_334_cr">
			<rect id="Rectangle_334_cr" rx="0" ry="0" x="0" y="0" width="233" height="59">
			</rect>
		</svg>
		<div id="Events_cs">
			<span>Events</span>
		</div>
	</div>
</a>

<!-- create new admin -->
    <a href="Admin_SignUp.php">
        <div id="Head_Button_Regional_IXN_" class="Head_Button__Regional_IXN_">
            <div id="Group_10801">
                <svg class="Rectangle_334_cvCreate">
                    <rect id="Rectangle_334_cvCreate" rx="0" ry="0" x="0" y="0" width="376" height="59">
                    </rect>
                </svg>
                <div id="Regional_IXN_Administrators_cwCreate">
                    <span>Create New Admin Account</span>
                </div>
            </div>
        </div>
    </a>

    <!-- jump to regional IXN admin -->
    <a href="#Regional_IXN_Administrators">
        <div id="Head_Button_Regional_IXN_" class="Head_Button__Regional_IXN_">
            <div id="Group_10801">
                <svg class="Rectangle_334_cv">
                    <rect id="Rectangle_334_cv" rx="0" ry="0" x="0" y="0" width="376" height="59">
                    </rect>
                </svg>
                <div id="Regional_IXN_Administrators_cw">
                    <span>Regional IXN Administrators</span>
                </div>
            </div>
        </div>
    </a>


















	<a href="#Block_Projects">
	<div id="Head_Button_Projects" class="Head_Button__Projects">
		<svg class="Rectangle_334_cy">
			<rect id="Rectangle_334_cy" rx="0" ry="0" x="0" y="0" width="233" height="59">
			</rect>
		</svg>
		<div id="Projects_cz">
			<span>Projects</span>
		</div>
	</div>
</a>
	<div id="Heading" onclick="window.location='Home.php';">
		<div id="IXN_for_the_NHS">
			<span>IXN for the NHS</span>
		</div>
		<div id="IXN_Logo">
			<img id="Group_10713" src="images/Group_10713.png" srcset="images/Group_10713.png 1x, images/Group_10713@2x.png 2x">
		</div>
	</div>
	<div id="Header">
		<svg class="Path_10086" viewBox="0 0 1920 80">
			<path id="Path_10086" d="M 0 0 L 1920 0 L 1920 80 L 0 80 L 0 0 Z">
			</path>
		</svg>
		<div id="Contents_Management_System">
			<span>Contents Management System</span>
		</div>
		<div id="Group_10793">
			<svg class="Rectangle_298">
				<rect id="Rectangle_298" rx="0" ry="0" x="0" y="0" width="85" height="37">
				</rect>
                <li><a href="includes/logout.inc.php"</li>
			</svg>
			<div id="Logout">
				<span>Logout</span>
			</div>
		</div>
	</div>
</div>
</body>
</html>
