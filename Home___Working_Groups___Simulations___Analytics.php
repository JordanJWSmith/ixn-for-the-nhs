<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simulations & Analytics</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: Home > Working Groups > Simulations & Analytics;
		--web-view-id: Home__Working_Groups__Simulations__Analytics;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Home__Working_Groups__Simulations__Analytics;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Home__Working_Groups__Simulations__Analytics {
		position: absolute;
		width: 1920px;
		height: 2425px;
		background-color: rgba(240,244,245,1);
		overflow: hidden;
		--web-view-name: Home > Working Groups > Simulations & Analytics;
		--web-view-id: Home__Working_Groups__Simulations__Analytics;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {

		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}

	}
	/* The dropdown container */
	.dropdown {
		float: left;
		overflow: hidden;
	}

	/* Dropdown button */
	.dropdown .dropbtn {
		font-size: 16px;
		border: none;
		outline: none;
		color: white;
		padding: 14px 16px;
		background-color: inherit;
		font-family: Arial; /* Important for vertical align on mobile phones */
		margin: 0; /* Important for vertical align on mobile phones */
	}
	.dropdown .filterbtn {
		background-color: rgba(232,237,238,1);
		width: 249px;
		height: 60px;
		left: 1300.321px;
		top: 3709px;
		border: 1px solid rgba(112,112,112,1);
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 22px;
		color: rgba(112,112,112,1);
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 15px;
		padding-right: 15px;
	}





	/* Dropdown content (hidden by default) */
	.dropdown-content {
	display: none;
	position: absolute;
	background-color: #f0f0f0;
	min-width: 50px;
	max-height:190px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
	overflow-y :auto;
	overflow-x:hidden;
	font-family: Arial;
	font-style: normal;
	font-weight: normal;
	font-size: 13px;
	}

	/* Dropdown content (hidden by default) */
	.dropdown-filter-content {
	display: none;
	position: absolute;
	background-color: #f0f0f0;
	min-width: 249px;
	max-height:190px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
	overflow-y :auto;
	overflow-x:hidden;
	font-family: Arial;
	font-style: normal;
	font-weight: normal;
	font-size: 13px;
	}

	/* Links inside the dropdown */
	.dropdown-filter-content a {
	float: none;
	color: rgba(112,112,112,1);
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
	}

	/* Add a grey background color to dropdown links on hover */
	.dropdown-filter-content a:hover {
	background-color: #ddd;
	}

	/* Show the dropdown menu on hover */
	.dropdown:hover .dropdown-filter-content {
	display: block;
	}

	/* Links inside the dropdown */
	.dropdown-content a {
	float: none;
	color: rgba(112,112,112,1);
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
	}

	/* Add a grey background color to dropdown links on hover */
	.dropdown-content a:hover {
	background-color: #ddd;
	}

	/* Show the dropdown menu on hover */
	.dropdown:hover .dropdown-content {
	display: block;
	}

	#no_results {
		position: absolute;
		background-color: rgba(240,244,245,1);;
		width: 1190px;
		border-style: solid;
		border-width: 3px;
		border-color: rgba(0,94,184,1);
		padding: 50px;
		margin: 20px;
		left: 341px;
		top: 720px;
		/* height: 400px; */
		font-family: Arial;
		font-size: 40px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
		overflow: scroll;
	}
	#no_results_text {
		margin: 20px;
		font-family: Arial;
		font-size: 28px;
		/* padding: 20px; */
	}
	.Filter_Bar {
		position: absolute;
		/* background-color: rgba(232,237,238,1); */
		background-color: none;
		width: 252px;
		height: 60px;
		left: 1285.321px;
		top: 609px;
		overflow: visible;
		/* cursor:pointer; */
		/* border: 1px solid rgba(112,112,112,1); */
		text-align: right;
		font-family: Arial;
    font-style: normal;
    font-weight: normal;
    font-size: 22px;
		color: rgba(112,112,112,1);
		padding-top: 15px;
  	padding-bottom: 15px;
		padding-left: 15px;
		padding-right: 15px;
	}
	#Pagination_Bar_bg {
		position: absolute;
		width: 1190.597px;
		height: 52.258px;
		left: 360px;
		top: 2187px;
		overflow: visible;
	}
	#Group_4206_bg {
		position: absolute;
		width: 1190.598px;
		height: 52.258px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_4207_bg {
		position: absolute;
		width: 1190.598px;
		height: 0.863px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#ID1__6_of_50_items_bg {
		left: 181px;
		top: 18px;
		position: absolute;
		overflow: visible;
		width: 99px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.11399999618530274px;
	}
	#ID6_bg {
		left: 125px;
		top: 18px;
		position: absolute;
		overflow: visible;
		width: 9px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.11399999618530274px;
	}
	#Items_per_page_bg {
		left: 8px;
		top: 18px;
		position: absolute;
		overflow: visible;
		width: 96px;
		white-space: nowrap;
		line-height: 24px;
		margin-top: -5px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.11399999618530274px;
	}
	#Group_4213_bg {
		position: absolute;
		width: 0.863px;
		height: 52.258px;
		left: 1148.334px;
		top: 0px;
		overflow: visible;
	}
	#Group_4214_bha {
		position: absolute;
		width: 0.863px;
		height: 52.258px;
		left: 1106.07px;
		top: 0px;
		overflow: visible;
	}
	#Group_4216_bhb {
		position: absolute;
		width: 0.863px;
		height: 52.258px;
		left: 165.604px;
		top: 0px;
		overflow: visible;
	}
	#Icon_-_Carret--Right__20_bhc {
		position: absolute;
		width: 8.313px;
		height: 14.547px;
		left: 1168.279px;
		top: 23.054px;
		overflow: visible;
	}
	#Group_10684_bhd {
		position: absolute;
		width: 123.208px;
		height: 52.258px;
		left: 969.793px;
		top: 0px;
		overflow: visible;
	}
	#of_9_pages_bhe {
		left: 57.207px;
		top: 17px;
		position: absolute;
		overflow: visible;
		width: 67px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.05400000095367432px;
	}
	#ID2_bhf {
		left: 15.207px;
		top: 17px;
		position: absolute;
		overflow: visible;
		width: 9px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.11399999618530274px;
	}
	#Group_4215_bhg {
		position: absolute;
		width: 0.863px;
		height: 52.258px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#chevron--down__20_bhh {
		position: absolute;
		width: 10.781px;
		height: 6.146px;
		left: 36.871px;
		top: 23.813px;
		overflow: visible;
	}
	#carret--left__20_bhi {
		position: absolute;
		width: 8.313px;
		height: 14.547px;
		left: 1124.938px;
		top: 23.054px;
		overflow: visible;
	}
	#chevron--down__20_bhj {
		position: absolute;
		width: 10.781px;
		height: 6.146px;
		left: 138.004px;
		top: 24.365px;
		overflow: visible;
	}
	#Box_v-link_bhk {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 971px;
		top: 1701px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home___Project_Detail_View.html;
		cursor: pointer;
	}
	#Box_v-link_1_bhl {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10784_bhm {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10732_bhn {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10730_bho {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Box_of_link_middle_size_bhp {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10729_bhq {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_323_bhr {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_323_bhr {
		position: absolute;
		overflow: visible;
		width: 580px;
		height: 458px;
		left: 0px;
		top: 0px;
	}
	#Line_2_bhs {
		fill: transparent;
		stroke: rgba(179,187,193,1);
		stroke-width: 4px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2_bhs {
		overflow: visible;
		position: absolute;
		width: 580px;
		height: 4px;
		left: 0.5px;
		top: 458.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Icon_ionic-ios-arrow-dropright_bht {
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 520px;
		top: 387.503px;
		overflow: visible;
	}
	#Icon_ionic-ios-arrow-dropright_bhu {
		fill: rgba(7,95,185,1);
	}
	.Icon_ionic-ios-arrow-dropright_bhu {
		overflow: visible;
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Screenshot_2021-02-26_at_17040_bhv {
		position: absolute;
		width: 550px;
		height: 308px;
		left: 15px;
		top: 15px;
		overflow: visible;
	}
	#Project_Title_bhw {
		left: 58px;
		top: 379px;
		position: absolute;
		overflow: hidden;
		text-overflow: ellipsis;
		width: 440px;
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
	#Line_3_bhx {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_3_bhx {
		overflow: visible;
		position: absolute;
		width: 550px;
		height: 2px;
		left: 15.5px;
		top: 322.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Box_v-link_bhy {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 360px;
		top: 1701px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home___Project_Detail_View.html;
		cursor: pointer;
	}
	#Box_v-link_1_bhz {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10784_bh {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10732_bh {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10730_bh {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Box_of_link_middle_size_bh {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10729_bh {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_323_bh {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_323_bh {
		position: absolute;
		overflow: visible;
		width: 580px;
		height: 458px;
		left: 0px;
		top: 0px;
	}
	#Line_2_bh {
		fill: transparent;
		stroke: rgba(179,187,193,1);
		stroke-width: 4px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2_bh {
		overflow: visible;
		position: absolute;
		width: 580px;
		height: 4px;
		left: 0.5px;
		top: 458.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Icon_ionic-ios-arrow-dropright_bh {
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 520px;
		top: 387.503px;
		overflow: visible;
	}
	#Icon_ionic-ios-arrow-dropright_bia {
		fill: rgba(7,95,185,1);
	}
	.Icon_ionic-ios-arrow-dropright_bia {
		overflow: visible;
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Screenshot_2021-02-26_at_17040_bh {
		position: absolute;
		width: 550px;
		height: 308px;
		left: 15px;
		top: 15px;
		overflow: visible;
	}
	#Project_Title_bia {
		left: 58px;
		top: 379px;
		position: absolute;
		overflow: hidden;
		text-overflow: ellipsis;
		width: 440px;
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
	#Line_3_bib {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_3_bib {
		overflow: visible;
		position: absolute;
		width: 550px;
		height: 2px;
		left: 15.5px;
		top: 322.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Box_v-link_bic {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 971px;
		top: 1215px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home___Project_Detail_View.html;
		cursor: pointer;
	}
	#Box_v-link_1_bid {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10784_bie {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10732_bif {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10730_big {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Box_of_link_middle_size_bih {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10729_bii {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_323_bij {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_323_bij {
		position: absolute;
		overflow: visible;
		width: 580px;
		height: 458px;
		left: 0px;
		top: 0px;
	}
	#Line_2_bik {
		fill: transparent;
		stroke: rgba(179,187,193,1);
		stroke-width: 4px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2_bik {
		overflow: visible;
		position: absolute;
		width: 580px;
		height: 4px;
		left: 0.5px;
		top: 458.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Icon_ionic-ios-arrow-dropright_bil {
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 520px;
		top: 387.503px;
		overflow: visible;
	}
	#Icon_ionic-ios-arrow-dropright_bim {
		fill: rgba(7,95,185,1);
	}
	.Icon_ionic-ios-arrow-dropright_bim {
		overflow: visible;
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Screenshot_2021-02-26_at_17040_bin {
		position: absolute;
		width: 550px;
		height: 308px;
		left: 15px;
		top: 15px;
		overflow: visible;
	}
	#Project_Title_bio {
		left: 58px;
		top: 379px;
		position: absolute;
		overflow: hidden;
		text-overflow: ellipsis;
		width: 440px;
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
	#Line_3_bip {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_3_bip {
		overflow: visible;
		position: absolute;
		width: 550px;
		height: 2px;
		left: 15.5px;
		top: 322.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Box_v-link_biq {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 360px;
		top: 1215px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home___Project_Detail_View.html;
		cursor: pointer;
	}
	#Box_v-link_1_bir {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10784_bis {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10732_bit {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10730_biu {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Box_of_link_middle_size_biv {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10729_biw {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_323_bix {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_323_bix {
		position: absolute;
		overflow: visible;
		width: 580px;
		height: 458px;
		left: 0px;
		top: 0px;
	}
	#Line_2_biy {
		fill: transparent;
		stroke: rgba(179,187,193,1);
		stroke-width: 4px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2_biy {
		overflow: visible;
		position: absolute;
		width: 580px;
		height: 4px;
		left: 0.5px;
		top: 458.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Icon_ionic-ios-arrow-dropright_biz {
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 520px;
		top: 387.503px;
		overflow: visible;
	}
	#Icon_ionic-ios-arrow-dropright_bi {
		fill: rgba(7,95,185,1);
	}
	.Icon_ionic-ios-arrow-dropright_bi {
		overflow: visible;
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Screenshot_2021-02-26_at_17040_bi {
		position: absolute;
		width: 550px;
		height: 308px;
		left: 15px;
		top: 15px;
		overflow: visible;
	}
	#Project_Title_bi {
		left: 58px;
		top: 379px;
		position: absolute;
		overflow: hidden;
		text-overflow: ellipsis;
		width: 440px;
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
	#Line_3_bi {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_3_bi {
		overflow: visible;
		position: absolute;
		width: 550px;
		height: 2px;
		left: 15.5px;
		top: 322.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Box_v-link_bi {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 971px;
		top: 729px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home___Project_Detail_View.html;
		cursor: pointer;
	}
	#Box_v-link_1_bi {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10784_bi {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10732_bi {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10730_bi {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Box_of_link_middle_size_bi {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10729_bja {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_323_bjb {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_323_bjb {
		position: absolute;
		overflow: visible;
		width: 580px;
		height: 458px;
		left: 0px;
		top: 0px;
	}
	#Line_2_bjc {
		fill: transparent;
		stroke: rgba(179,187,193,1);
		stroke-width: 4px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2_bjc {
		overflow: visible;
		position: absolute;
		width: 580px;
		height: 4px;
		left: 0.5px;
		top: 458.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Icon_ionic-ios-arrow-dropright_bjd {
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 520px;
		top: 387.503px;
		overflow: visible;
	}
	#Icon_ionic-ios-arrow-dropright_bje {
		fill: rgba(7,95,185,1);
	}
	.Icon_ionic-ios-arrow-dropright_bje {
		overflow: visible;
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Screenshot_2021-02-26_at_17040_bjf {
		position: absolute;
		width: 550px;
		height: 308px;
		left: 15px;
		top: 15px;
		overflow: visible;
	}
	#Project_Title_bjg {
		left: 58px;
		top: 379px;
		position: absolute;
		overflow: hidden;
		text-overflow: ellipsis;
		width: 440px;
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
	#Line_3_bjh {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_3_bjh {
		overflow: visible;
		position: absolute;
		width: 550px;
		height: 2px;
		left: 15.5px;
		top: 322.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Box_v-link_bji {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 360px;
		top: 729px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home___Project_Detail_View.html;
		cursor: pointer;
	}
	#Box_v-link_1_bjj {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10784_bjk {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10732_bjl {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10730_bjm {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Box_of_link_middle_size_bjn {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_10729_bjo {
		position: absolute;
		width: 580.5px;
		height: 458.5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_323_bjp {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_323_bjp {
		position: absolute;
		overflow: visible;
		width: 580px;
		height: 458px;
		left: 0px;
		top: 0px;
	}
	#Line_2_bjq {
		fill: transparent;
		stroke: rgba(179,187,193,1);
		stroke-width: 4px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2_bjq {
		overflow: visible;
		position: absolute;
		width: 580px;
		height: 4px;
		left: 0.5px;
		top: 458.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Icon_ionic-ios-arrow-dropright_bjr {
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 520px;
		top: 387.503px;
		overflow: visible;
	}
	#Icon_ionic-ios-arrow-dropright_bjs {
		fill: rgba(7,95,185,1);
	}
	.Icon_ionic-ios-arrow-dropright_bjs {
		overflow: visible;
		position: absolute;
		width: 29.25px;
		height: 29.25px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Screenshot_2021-02-26_at_17040_bjt {
		position: absolute;
		width: 550px;
		height: 308px;
		left: 15px;
		top: 15px;
		overflow: visible;
	}
	#Project_Title_bju {
		left: 58px;
		top: 379px;
		position: absolute;
		overflow: hidden;
		text-overflow: ellipsis;
		width: 440px;
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
	#Line_3_bjv {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_3_bjv {
		overflow: visible;
		position: absolute;
		width: 550px;
		height: 2px;
		left: 15.5px;
		top: 322.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Search_Bar_bjw {
		position: absolute;
		width: 865px;
		height: 60px;
		left: 360px;
		top: 623px;
		overflow: visible;
	}
	.Search_Bar_bjw .search-container {
	float: left;
}
	/* Search bar adapted from https://www.w3schools.com/howto/howto_css_searchbar.asp  */
	.Search_Bar_bjw input[type=text] {
  float: left;
  padding: 6px;
	width: 100%;
	height: 60px;
  border: none;
  margin-top: 0px;
  margin-right: 16px;
  font-size: 25px;
}
/* Search bar adapted from https://www.w3schools.com/howto/howto_css_searchbar.asp  */
.Search_Bar_bjw .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
	height: 60px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.Search_Bar_bjw .search-container button:hover {
  background: #ccc;
}
	#Rectangle_324_bjx {
		fill: rgba(255,255,255,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_324_bjx {
		position: absolute;
		overflow: visible;
		width: 865px;
		height: 60px;
		left: 0px;
		top: 0px;
	}
	#Rectangle_325_bjy {
		fill: rgba(232,237,238,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_325_bjy {
		position: absolute;
		overflow: visible;
		width: 107px;
		height: 60px;
		left: 758px;
		top: 0px;
		cursor: pointer;
	}
	#Icon_map-search_bjz {
		fill: rgba(7,95,185,1);
	}
	.Icon_map-search_bjz {
		overflow: visible;
		position: absolute;
		width: 34.121px;
		height: 34.12px;
		left: 794px;
		top: 16px;
		transform: matrix(1,0,0,1,0,0);
		cursor: pointer;
	}
	#Search_for_past_projects_bj {
		left: 25px;
		top: 17px;
		position: absolute;
		overflow: visible;
		width: 254px;
		white-space: nowrap;
		line-height: 28px;
		margin-top: -2px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(112,112,112,1);
	}
	#paragraph-body_bj {
		position: absolute;
		width: 1163px;
		height: 121px;
		left: 360px;
		top: 490px;
		overflow: visible;
	}
	#This_is_the_projects_archives__bj {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 1164px;
		height: 121px;
		line-height: 28px;
		margin-top: -2px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(33,43,50,1);
	}
	#Sub-title_bj {
		position: absolute;
		width: 795px;
		height: 53px;
		left: 360px;
		top: 395px;
		overflow: visible;
	}
	#Simulations__Analytics_Case_St {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 796px;
		white-space: nowrap;
		line-height: 50px;
		margin-top: -1px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 48px;
		color: rgba(33,43,50,1);
	}
	#Working_Groups_bj {
		left: 568px;
		top: 340px;
		position: absolute;
		overflow: visible;
		width: 145px;
		white-space: nowrap;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home___Working_Groups_.html;
		cursor: pointer;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(0,94,184,1);
		text-decoration: underline;
	}
	#Sitemap_arrow_bj {
		position: absolute;
		width: 10.583px;
		height: 18.509px;
		left: 530.92px;
		top: 343.107px;
		overflow: visible;
	}
	#Icon_ionic-ios-arrow-forward_bj {
		fill: rgba(112,112,112,1);
	}
	.Icon_ionic-ios-arrow-forward_bj {
		overflow: visible;
		position: absolute;
		width: 10.584px;
		height: 18.509px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#IXN_for_the_NHS_bj {
		left: 360px;
		top: 340px;
		position: absolute;
		overflow: visible;
		width: 144px;
		white-space: nowrap;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home.html;
		cursor: pointer;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(0,94,184,1);
		text-decoration: underline;
	}
	#Header_bj {
		position: absolute;
		width: 1922px;
		height: 300px;
		left: -2px;
		top: 0px;
		overflow: visible;
	}
	#Group_10747_bka {
		position: absolute;
		width: 1922px;
		height: 300px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_327_bkb {
		fill: rgba(0,94,184,1);
	}
	.Rectangle_327_bkb {
		position: absolute;
		overflow: visible;
		width: 1922px;
		height: 162px;
		left: 0px;
		top: 0px;
	}
	#Rectangle_328_bkc {
		fill: rgba(255,235,59,1);
	}
	.Rectangle_328_bkc {
		position: absolute;
		overflow: visible;
		width: 1922px;
		height: 138px;
		left: 0px;
		top: 162px;
	}
	#Group_10748_bkd {
		position: absolute;
		width: 416px;
		height: 75px;
		left: 367px;
		top: 194px;
		overflow: visible;
	}
	#Coronavirus_COVID-19_bke {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 367px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: bold;
		font-size: 32px;
		color: rgba(33,43,50,1);
	}
	#Get_the_latest_advice_about_co_bkf {
		left: 0px;
		top: 48px;
		position: absolute;
		overflow: visible;
		width: 417px;
		white-space: nowrap;
		line-height: 28px;
		margin-top: -2px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(0,94,184,1);
		text-decoration: underline;
	}
	#Group_10749_bkg {
		position: absolute;
		width: 193px;
		height: 62px;
		left: 367px;
		top: 22px;
		overflow: visible;
	}
	#Rectangle_329_bkh {
		fill: rgba(255,255,255,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_329_bkh {
		position: absolute;
		overflow: visible;
		width: 193px;
		height: 62px;
		left: 0px;
		top: 0px;
	}
	#Client_Logo_bki {
		left: 36px;
		top: 18px;
		position: absolute;
		overflow: visible;
		width: 122px;
		white-space: nowrap;
		line-height: 28px;
		margin-top: -2px;
		text-align: left;
		font-family: Arial;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(0,94,184,1);
	}
	#Path_10079_bkj {
		fill: rgba(179,187,193,1);
		stroke: rgba(232,237,238,1);
		stroke-width: 0.4000000059604645px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_10079_bkj {
		overflow: visible;
		position: absolute;
		width: 1162px;
		height: 2.4px;
		left: 367.467px;
		top: 107.5px;
		transform: matrix(1,0,0,1,0,0);
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

		// http protocol - check headers
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


	// Pagination start
	// Adapted from: https://www.allphptricks.com/create-simple-pagination-using-php-and-mysqli/
	if (isset($_GET['arch_page_no']) && $_GET['arch_page_no']!="") {
			$arch_page_no = $_GET['arch_page_no'];
			} else {
					$arch_page_no = 1;
					}

	if (isset($_GET['search']) && $_GET['search']!="") {
			$search_param = $_GET['search'];
			} else {
					$search_param = "";
					}

	if (isset($_GET['filter']) && $_GET['filter']!="") {
			$filter_param = $_GET['filter'];
			} else {
					$filter_param = "";
					}

	$arch_total_records_per_page = 6;
	$arch_offset = ($arch_page_no-1) * $arch_total_records_per_page;
	$arch_previous_page = $arch_page_no - 1;
	$arch_next_page = $arch_page_no + 1;
	// $arch_adjacents = 2;

	$arch_result_count = mysqli_query($link, "SELECT COUNT(*) As total_records FROM projects WHERE (projectTitle LIKE '%$search_param%' OR projectAuthors LIKE '%$search_param%' OR techUsed LIKE '%$search_param%' OR projectKeywords LIKE '%$search_param%') AND (university LIKE '%$filter_param%') AND (workingGroup = 7)"
	);
	$arch_total_records = mysqli_fetch_array($arch_result_count);
	$arch_total_records = $arch_total_records['total_records'];
	$arch_total_no_of_pages = ceil($arch_total_records / $arch_total_records_per_page);
	$arch_second_last = $arch_total_no_of_pages - 1;

	$arch_result = mysqli_query(
			$link,
			"SELECT * FROM projects WHERE (projectTitle LIKE '%$search_param%' OR projectAuthors LIKE '%$search_param%' OR techUsed LIKE '%$search_param%' OR projectKeywords LIKE '%$search_param%') AND (university LIKE '%$filter_param%') AND (workingGroup = 7) ORDER BY popularity DESC LIMIT $arch_offset, $arch_total_records_per_page"
			);

	$arch_thumbnails = array();
	$arch_titles = array();
	$arch_universities = array();
	$arch_slugs = array();
	$arch_filenames = array();

	while($row = mysqli_fetch_array($arch_result)) {
		$arch_id = $row['projectID'];
		$arch_rawstring = $row['youtubeLink'];

		if (strpos($arch_rawstring, "youtu.be/") !== false){
			$arch_tinysplit = explode("be/", $arch_rawstring);
			$arch_vidID = substr($arch_tinysplit[1], 0, 11);
		} else {
			$arch_split = explode("v=", $row['youtubeLink']);
			$arch_vidID = substr($arch_split[1], 0, 11);
		}

		$arch_imgurl = "https://img.youtube.com/vi/" . $arch_vidID . "/hqdefault.jpg?w=600";
		$arch_title = $row['projectTitle'];
		$arch_slug = $arch_id . '-' . strtolower(str_replace(" ", "-", $arch_title));
		$arch_filename = 'projects/' . $arch_slug. '.php';


		if (file_exists($arch_filename)) {
		array_push($arch_thumbnails, $arch_imgurl);
		array_push($arch_titles, $arch_title);
		array_push($arch_slugs, $arch_slug);
		array_push($arch_filenames, $arch_filename);
		}
	}

	$universities_result = mysqli_query(
			$link,
			"SELECT DISTINCT(university) from projects");
	while($uni_row = mysqli_fetch_array($universities_result)) {
		array_push($arch_universities, $uni_row['university']);
	}

	$directory = "projects/";
	$filecount = 0;
	$files = glob($directory . "*");
	if ($files){
	 $filecount = count($files);
	}

	 ?>

<div id="Home__Working_Groups__Simulations__Analytics">
	<div id="Pagination_Bar_bg" class="Pagination_Bar">
		<img id="Group_4206_bg" src="images/Group_4206_bg.png" srcset="images/Group_4206_bg.png 1x, images/Group_4206_bg@2x.png 2x">

		</svg>
		<img id="Group_4207_bg" src="images/Group_4207_bg.png" srcset="images/Group_4207_bg.png 1x, images/Group_4207_bg@2x.png 2x">

		</svg>
		<div id="ID1__6_of_50_items_bg">
			<?php
			if (($arch_offset + $arch_total_records_per_page) > ($arch_total_records)) {
				$arch_lim = $arch_total_records;
			} else {
				$arch_lim = $arch_offset + $arch_total_records_per_page;
			}
			 ?>
			<span><?php echo $arch_offset + 1; ?> – <?php echo $arch_lim; ?> of <?php echo $arch_total_records; ?> items </span>
		</div>
		<div id="ID6_bg">
			<!-- <span>6</span> -->
		</div>
		<div id="Items_per_page_bg">
			<!-- <span>Items per page</span> -->
		</div>
		<img id="Group_4213_bg" src="images/Group_4213_bg.png" srcset="images/Group_4213_bg.png 1x, images/Group_4213_bg@2x.png 2x">

		</svg>
		<img id="Group_4214_bha" src="images/Group_4214_bha.png" srcset="images/Group_4214_bha.png 1x, images/Group_4214_bha@2x.png 2x">

		</svg>
		<img id="Group_4216_bhb" src="images/Group_4216_bhb.png" srcset="images/Group_4216_bhb.png 1x, images/Group_4216_bhb@2x.png 2x">

		</svg>
		<?php if($arch_page_no < $arch_total_no_of_pages) {
		echo '<a href="?search='.$search_param.'&filter='.$filter_param.'&arch_page_no='.$arch_next_page.'#Simulations__Analytics_Case_St"> <img id="Icon_-_Carret--Right__20_bhc" src="images/Icon_-_Carret--Right__20_bhc.png" srcset="images/Icon_-_Carret--Right__20_bhc.png 1x, images/Icon_-_Carret--Right__20_bhc@2x.png 2x" > </a>';
		}
		?>
		<!-- <img id="Icon_-_Carret--Right__20_bhc" src="images/Icon_-_Carret--Right__20_bhc.png" srcset="images/Icon_-_Carret--Right__20_bhc.png 1x, images/Icon_-_Carret--Right__20_bhc@2x.png 2x"> -->

		</svg>
		<div id="Group_10684_bhd">
			<div id="of_9_pages_bhe">
				<span>of <?php echo $arch_total_no_of_pages; ?> pages</span>
			</div>
			<div id="ID2_bhf">
				<span><?php echo $arch_page_no; ?></span>
			</div>
			<img id="Group_4215_bhg" src="images/Group_4215_bhg.png" srcset="images/Group_4215_bhg.png 1x, images/Group_4215_bhg@2x.png 2x">

			</svg>
			<div class="dropdown">
				<button class="dropbtn"><img id="chevron--down__20_bhh" src="images/chevron--down__20_bhh.png" srcset="images/chevron--down__20_bhh.png 1x, images/chevron--down__20_bhh@2x.png 2x">
					>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<?php
					for($i = 1; $i <= $arch_total_no_of_pages; ++$i) {
						echo '<a href="?search='.$search_param.'&filter='.$filter_param.'&arch_page_no='.$i.'#Simulations__Analytics_Case_St">'.$i.'</a>';

					}
					?>

				</div>
			</div>

			</svg>
		</div>
		<?php if ($arch_page_no > 1) {
		echo '<a href="?search='.$search_param.'&filter='.$filter_param.'&arch_page_no='.$arch_previous_page.'#Simulations__Analytics_Case_St"> <img id="carret--left__20_bhi" src="images/carret--left__20_bhi.png" srcset="images/carret--left__20_bhi.png 1x, images/carret--left__20_bhi@2x.png 2x"> </a>';
		}
		?>

		</svg>

		</svg>
		</div>

		<?php
		if (($arch_total_records == 0) or ($filecount == 0)) {
			?>
			<div id='no_results' class='no_results'>Sorry, we couldn't find any results.
				<div id='no_results_text' class='no_results_text'>Please refine your search.</div>
			</div>

			<?php
		} else {
			if ($arch_thumbnails[5]) {
		?>
	<div onclick="window.location='projects/<?php echo $arch_slugs[5] ?>.php';" id="Box_v-link_bhk" class="Box_v_link">
		<div id="Box_v-link_1_bhl">
			<div id="Group_10784_bhm">
				<div id="Group_10732_bhn">
					<div id="Group_10730_bho">
						<div id="Box_of_link_middle_size_bhp">
							<div id="Group_10729_bhq">
								<svg class="Rectangle_323_bhr">
									<rect id="Rectangle_323_bhr" rx="0" ry="0" x="0" y="0" width="580" height="458">
									</rect>
								</svg>
								<svg class="Line_2_bhs" viewBox="0 0 580 4">
									<path id="Line_2_bhs" d="M 0 0 L 580 0">
									</path>
								</svg>
							</div>
							<div id="Icon_ionic-ios-arrow-dropright_bht">
								<svg class="Icon_ionic-ios-arrow-dropright_bhu" viewBox="3.375 3.375 29.25 29.25">
									<path id="Icon_ionic-ios-arrow-dropright_bhu" d="M 3.375 18 C 3.375 26.07890701293945 9.921093940734863 32.625 18 32.625 C 26.07890701293945 32.625 32.625 26.07890701293945 32.625 18 C 32.625 9.921092987060547 26.07890701293945 3.375 18 3.375 C 9.921093940734863 3.375 3.375 9.921093940734863 3.375 18 Z M 20.56640625 18 L 14.80781269073486 12.29765605926514 C 14.28046894073486 11.77031230926514 14.28046894073486 10.90546894073486 14.80781269073486 10.37812519073486 C 15.33515644073486 9.850781440734863 16.20000076293945 9.850781440734863 16.72734451293945 10.37812519073486 L 23.43515777587891 17.10703086853027 C 23.94843864440918 17.62031173706055 23.96250152587891 18.44999885559082 23.47734451293945 18.97734260559082 L 16.86796951293945 25.60781097412109 C 16.60078239440918 25.87499809265137 16.25625038146973 26.00859260559082 15.90468788146973 26.00859260559082 C 15.56015682220459 26.00859260559082 15.20859432220459 25.87499809265137 14.94843769073486 25.61484336853027 C 14.42109394073486 25.08749961853027 14.4140625 24.22968673706055 14.94843769073486 23.6953125 L 20.56640625 18 Z">
									</path>
								</svg>
							</div>
						</div>
						<img id="Screenshot_2021-02-26_at_17040_bhv" src=<?php echo $arch_thumbnails[5]; ?> srcset=<?php echo $arch_thumbnails[5]; ?>>

					</div>
					<div id="Project_Title_bhw">
						<span><?php echo $arch_titles[5]; ?> </span>
					</div>
				</div>
				<svg class="Line_3_bhx" viewBox="0 0 550 1">
					<path id="Line_3_bhx" d="M 0 0 L 550 1">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<?php
	}

	 if ($arch_thumbnails[4]) {
	 ?>
	<div onclick="window.location='projects/<?php echo $arch_slugs[4] ?>.php';" id="Box_v-link_bhy" class="Box_v_link">
		<div id="Box_v-link_1_bhz">
			<div id="Group_10784_bh">
				<div id="Group_10732_bh">
					<div id="Group_10730_bh">
						<div id="Box_of_link_middle_size_bh">
							<div id="Group_10729_bh">
								<svg class="Rectangle_323_bh">
									<rect id="Rectangle_323_bh" rx="0" ry="0" x="0" y="0" width="580" height="458">
									</rect>
								</svg>
								<svg class="Line_2_bh" viewBox="0 0 580 4">
									<path id="Line_2_bh" d="M 0 0 L 580 0">
									</path>
								</svg>
							</div>
							<div id="Icon_ionic-ios-arrow-dropright_bh">
								<svg class="Icon_ionic-ios-arrow-dropright_bia" viewBox="3.375 3.375 29.25 29.25">
									<path id="Icon_ionic-ios-arrow-dropright_bia" d="M 3.375 18 C 3.375 26.07890701293945 9.921093940734863 32.625 18 32.625 C 26.07890701293945 32.625 32.625 26.07890701293945 32.625 18 C 32.625 9.921092987060547 26.07890701293945 3.375 18 3.375 C 9.921093940734863 3.375 3.375 9.921093940734863 3.375 18 Z M 20.56640625 18 L 14.80781269073486 12.29765605926514 C 14.28046894073486 11.77031230926514 14.28046894073486 10.90546894073486 14.80781269073486 10.37812519073486 C 15.33515644073486 9.850781440734863 16.20000076293945 9.850781440734863 16.72734451293945 10.37812519073486 L 23.43515777587891 17.10703086853027 C 23.94843864440918 17.62031173706055 23.96250152587891 18.44999885559082 23.47734451293945 18.97734260559082 L 16.86796951293945 25.60781097412109 C 16.60078239440918 25.87499809265137 16.25625038146973 26.00859260559082 15.90468788146973 26.00859260559082 C 15.56015682220459 26.00859260559082 15.20859432220459 25.87499809265137 14.94843769073486 25.61484336853027 C 14.42109394073486 25.08749961853027 14.4140625 24.22968673706055 14.94843769073486 23.6953125 L 20.56640625 18 Z">
									</path>
								</svg>
							</div>
						</div>
						<img id="Screenshot_2021-02-26_at_17040_bh" src=<?php echo $arch_thumbnails[4]; ?> srcset=<?php echo $arch_thumbnails[4]; ?>>

					</div>
					<div id="Project_Title_bia">
						<span><?php echo $arch_titles[4]; ?> </span>
					</div>
				</div>
				<svg class="Line_3_bib" viewBox="0 0 550 1">
					<path id="Line_3_bib" d="M 0 0 L 550 1">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<?php
	}

	 if ($arch_thumbnails[3]) {
	 ?>
	<div onclick="window.location='projects/<?php echo $arch_slugs[3] ?>.php';" id="Box_v-link_bic" class="Box_v_link">
		<div id="Box_v-link_1_bid">
			<div id="Group_10784_bie">
				<div id="Group_10732_bif">
					<div id="Group_10730_big">
						<div id="Box_of_link_middle_size_bih">
							<div id="Group_10729_bii">
								<svg class="Rectangle_323_bij">
									<rect id="Rectangle_323_bij" rx="0" ry="0" x="0" y="0" width="580" height="458">
									</rect>
								</svg>
								<svg class="Line_2_bik" viewBox="0 0 580 4">
									<path id="Line_2_bik" d="M 0 0 L 580 0">
									</path>
								</svg>
							</div>
							<div id="Icon_ionic-ios-arrow-dropright_bil">
								<svg class="Icon_ionic-ios-arrow-dropright_bim" viewBox="3.375 3.375 29.25 29.25">
									<path id="Icon_ionic-ios-arrow-dropright_bim" d="M 3.375 18 C 3.375 26.07890701293945 9.921093940734863 32.625 18 32.625 C 26.07890701293945 32.625 32.625 26.07890701293945 32.625 18 C 32.625 9.921092987060547 26.07890701293945 3.375 18 3.375 C 9.921093940734863 3.375 3.375 9.921093940734863 3.375 18 Z M 20.56640625 18 L 14.80781269073486 12.29765605926514 C 14.28046894073486 11.77031230926514 14.28046894073486 10.90546894073486 14.80781269073486 10.37812519073486 C 15.33515644073486 9.850781440734863 16.20000076293945 9.850781440734863 16.72734451293945 10.37812519073486 L 23.43515777587891 17.10703086853027 C 23.94843864440918 17.62031173706055 23.96250152587891 18.44999885559082 23.47734451293945 18.97734260559082 L 16.86796951293945 25.60781097412109 C 16.60078239440918 25.87499809265137 16.25625038146973 26.00859260559082 15.90468788146973 26.00859260559082 C 15.56015682220459 26.00859260559082 15.20859432220459 25.87499809265137 14.94843769073486 25.61484336853027 C 14.42109394073486 25.08749961853027 14.4140625 24.22968673706055 14.94843769073486 23.6953125 L 20.56640625 18 Z">
									</path>
								</svg>
							</div>
						</div>
						<img id="Screenshot_2021-02-26_at_17040_bin" src=<?php echo $arch_thumbnails[3]; ?> srcset=<?php echo $arch_thumbnails[3]; ?>>

					</div>
					<div id="Project_Title_bio">
						<span><?php echo $arch_titles[3]; ?> </span>
					</div>
				</div>
				<svg class="Line_3_bip" viewBox="0 0 550 1">
					<path id="Line_3_bip" d="M 0 0 L 550 1">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<?php
	}

	if ($arch_thumbnails[2]) {
	?>
	<div onclick="window.location='projects/<?php echo $arch_slugs[2] ?>.php';" id="Box_v-link_biq" class="Box_v_link">
		<div id="Box_v-link_1_bir">
			<div id="Group_10784_bis">
				<div id="Group_10732_bit">
					<div id="Group_10730_biu">
						<div id="Box_of_link_middle_size_biv">
							<div id="Group_10729_biw">
								<svg class="Rectangle_323_bix">
									<rect id="Rectangle_323_bix" rx="0" ry="0" x="0" y="0" width="580" height="458">
									</rect>
								</svg>
								<svg class="Line_2_biy" viewBox="0 0 580 4">
									<path id="Line_2_biy" d="M 0 0 L 580 0">
									</path>
								</svg>
							</div>
							<div id="Icon_ionic-ios-arrow-dropright_biz">
								<svg class="Icon_ionic-ios-arrow-dropright_bi" viewBox="3.375 3.375 29.25 29.25">
									<path id="Icon_ionic-ios-arrow-dropright_bi" d="M 3.375 18 C 3.375 26.07890701293945 9.921093940734863 32.625 18 32.625 C 26.07890701293945 32.625 32.625 26.07890701293945 32.625 18 C 32.625 9.921092987060547 26.07890701293945 3.375 18 3.375 C 9.921093940734863 3.375 3.375 9.921093940734863 3.375 18 Z M 20.56640625 18 L 14.80781269073486 12.29765605926514 C 14.28046894073486 11.77031230926514 14.28046894073486 10.90546894073486 14.80781269073486 10.37812519073486 C 15.33515644073486 9.850781440734863 16.20000076293945 9.850781440734863 16.72734451293945 10.37812519073486 L 23.43515777587891 17.10703086853027 C 23.94843864440918 17.62031173706055 23.96250152587891 18.44999885559082 23.47734451293945 18.97734260559082 L 16.86796951293945 25.60781097412109 C 16.60078239440918 25.87499809265137 16.25625038146973 26.00859260559082 15.90468788146973 26.00859260559082 C 15.56015682220459 26.00859260559082 15.20859432220459 25.87499809265137 14.94843769073486 25.61484336853027 C 14.42109394073486 25.08749961853027 14.4140625 24.22968673706055 14.94843769073486 23.6953125 L 20.56640625 18 Z">
									</path>
								</svg>
							</div>
						</div>
						<img id="Screenshot_2021-02-26_at_17040_bi" src=<?php echo $arch_thumbnails[2]; ?> srcset=<?php echo $arch_thumbnails[2]; ?>>

					</div>
					<div id="Project_Title_bi">
						<span><?php echo $arch_titles[2]; ?> </span>
					</div>
				</div>
				<svg class="Line_3_bi" viewBox="0 0 550 1">
					<path id="Line_3_bi" d="M 0 0 L 550 1">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<?php
	}

	if ($arch_thumbnails[1]) {
	?>
	<div onclick="window.location='projects/<?php echo $arch_slugs[1] ?>.php';" id="Box_v-link_bi" class="Box_v_link">
		<div id="Box_v-link_1_bi">
			<div id="Group_10784_bi">
				<div id="Group_10732_bi">
					<div id="Group_10730_bi">
						<div id="Box_of_link_middle_size_bi">
							<div id="Group_10729_bja">
								<svg class="Rectangle_323_bjb">
									<rect id="Rectangle_323_bjb" rx="0" ry="0" x="0" y="0" width="580" height="458">
									</rect>
								</svg>
								<svg class="Line_2_bjc" viewBox="0 0 580 4">
									<path id="Line_2_bjc" d="M 0 0 L 580 0">
									</path>
								</svg>
							</div>
							<div id="Icon_ionic-ios-arrow-dropright_bjd">
								<svg class="Icon_ionic-ios-arrow-dropright_bje" viewBox="3.375 3.375 29.25 29.25">
									<path id="Icon_ionic-ios-arrow-dropright_bje" d="M 3.375 18 C 3.375 26.07890701293945 9.921093940734863 32.625 18 32.625 C 26.07890701293945 32.625 32.625 26.07890701293945 32.625 18 C 32.625 9.921092987060547 26.07890701293945 3.375 18 3.375 C 9.921093940734863 3.375 3.375 9.921093940734863 3.375 18 Z M 20.56640625 18 L 14.80781269073486 12.29765605926514 C 14.28046894073486 11.77031230926514 14.28046894073486 10.90546894073486 14.80781269073486 10.37812519073486 C 15.33515644073486 9.850781440734863 16.20000076293945 9.850781440734863 16.72734451293945 10.37812519073486 L 23.43515777587891 17.10703086853027 C 23.94843864440918 17.62031173706055 23.96250152587891 18.44999885559082 23.47734451293945 18.97734260559082 L 16.86796951293945 25.60781097412109 C 16.60078239440918 25.87499809265137 16.25625038146973 26.00859260559082 15.90468788146973 26.00859260559082 C 15.56015682220459 26.00859260559082 15.20859432220459 25.87499809265137 14.94843769073486 25.61484336853027 C 14.42109394073486 25.08749961853027 14.4140625 24.22968673706055 14.94843769073486 23.6953125 L 20.56640625 18 Z">
									</path>
								</svg>
							</div>
						</div>
						<img id="Screenshot_2021-02-26_at_17040_bjf" src=<?php echo $arch_thumbnails[1]; ?> srcset=<?php echo $arch_thumbnails[1]; ?>>

					</div>
					<div id="Project_Title_bjg">
						<span><?php echo $arch_titles[1]; ?> </span>
					</div>
				</div>
				<svg class="Line_3_bjh" viewBox="0 0 550 1">
					<path id="Line_3_bjh" d="M 0 0 L 550 1">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<?php
	}

	if ($arch_thumbnails[0]) {
	?>
	<div onclick="window.location='projects/<?php echo $arch_slugs[0] ?>.php';" id="Box_v-link_bji" class="Box_v_link">
		<div id="Box_v-link_1_bjj">
			<div id="Group_10784_bjk">
				<div id="Group_10732_bjl">
					<div id="Group_10730_bjm">
						<div id="Box_of_link_middle_size_bjn">
							<div id="Group_10729_bjo">
								<svg class="Rectangle_323_bjp">
									<rect id="Rectangle_323_bjp" rx="0" ry="0" x="0" y="0" width="580" height="458">
									</rect>
								</svg>
								<svg class="Line_2_bjq" viewBox="0 0 580 4">
									<path id="Line_2_bjq" d="M 0 0 L 580 0">
									</path>
								</svg>
							</div>
							<div id="Icon_ionic-ios-arrow-dropright_bjr">
								<svg class="Icon_ionic-ios-arrow-dropright_bjs" viewBox="3.375 3.375 29.25 29.25">
									<path id="Icon_ionic-ios-arrow-dropright_bjs" d="M 3.375 18 C 3.375 26.07890701293945 9.921093940734863 32.625 18 32.625 C 26.07890701293945 32.625 32.625 26.07890701293945 32.625 18 C 32.625 9.921092987060547 26.07890701293945 3.375 18 3.375 C 9.921093940734863 3.375 3.375 9.921093940734863 3.375 18 Z M 20.56640625 18 L 14.80781269073486 12.29765605926514 C 14.28046894073486 11.77031230926514 14.28046894073486 10.90546894073486 14.80781269073486 10.37812519073486 C 15.33515644073486 9.850781440734863 16.20000076293945 9.850781440734863 16.72734451293945 10.37812519073486 L 23.43515777587891 17.10703086853027 C 23.94843864440918 17.62031173706055 23.96250152587891 18.44999885559082 23.47734451293945 18.97734260559082 L 16.86796951293945 25.60781097412109 C 16.60078239440918 25.87499809265137 16.25625038146973 26.00859260559082 15.90468788146973 26.00859260559082 C 15.56015682220459 26.00859260559082 15.20859432220459 25.87499809265137 14.94843769073486 25.61484336853027 C 14.42109394073486 25.08749961853027 14.4140625 24.22968673706055 14.94843769073486 23.6953125 L 20.56640625 18 Z">
									</path>
								</svg>
							</div>
						</div>
						<img id="Screenshot_2021-02-26_at_17040_bjt" src=<?php echo $arch_thumbnails[0]; ?> srcset=<?php echo $arch_thumbnails[0]; ?>>

					</div>
					<div id="Project_Title_bju">
						<span><?php echo $arch_titles[0]; ?> </span>
					</div>
				</div>
				<svg class="Line_3_bjv" viewBox="0 0 550 1">
					<path id="Line_3_bjv" d="M 0 0 L 550 1">
					</path>
				</svg>
			</div>
		</div>
	</div>

		<?php
		}
		}

		if (isset($_GET['search']) && $_GET['search']!="") {
	  		$search_default = $_GET['search'];
	  		} else {
	  				$search_default = "Search for past projects...";
	  				}

	   if (isset($_GET['filter']) && $_GET['filter']!="") {
	   		$filter_default = $_GET['filter'];
	   		} else {
	   				$filter_default = "University";
	   				}
		?>
		<div id="Filter_Bar" class="Filter_Bar">
	  	<div class="dropdown">
	  			<button class="filterbtn"><?php echo $filter_default ?>
	  				<div style="float: right;">
	  				<img src="images/chevron--down__20_gn.png" srcset="images/chevron--down__20_gn.png 1x, images/chevron--down__20_gn@2x.png 2x">
	  			</div>
	  			</button>

	  			<div class="dropdown-filter-content">

	  				<?php
	  				echo '<a href="?search='.$search_param.'&filter=#Simulations__Analytics_Case_St">All</a>';
	  				 foreach ($arch_universities as &$uni) {
	  					 echo '<a href="?search='.$search_param.'&filter='.$uni.'#Simulations__Analytics_Case_St">'.$uni.'</a>';
	  				 }

	  				 ?>
	  			</div>
	  		</div>

	  </div>

	<div id="Search_Bar_bjw" class="Search_Bar_bjw">
		<form action="./Home___Working_Groups___Simulations___Analytics.php?#Simulations__Analytics_Case_St" >
			<?php
 		 echo '<input type="hidden" name="filter" value="'. $filter_param .'">';

 		 ?>
 		 <input type="text" placeholder=<?php echo $search_default; ?> name="search">
 		 <button type="submit">
 			 <svg class="Rectangle_325_bjy"><rect id="Rectangle_325_bjy" rx="0" ry="0" x="0" y="0" width="107" height="60"></rect></svg>
 			 <svg class="Icon_map-search_bjz" viewBox="1.44 1.44 34.12 34.12">
 				 <path
 				 id="Icon_map-search_bjz" d="M 26.40695762634277 21.86676979064941 C 27.68398284912109 19.76938438415527 28.359375 17.36110496520996 28.35921669006348 14.90554046630859 C 28.35921669006348 7.466635227203369 22.33999824523926 1.44296658039093 14.89960861206055 1.439999580383301 C 7.465894222259521 1.442225337028503 1.440000176429749 7.466635227203369 1.440000176429749 14.90406036376953 C 1.440000176429749 22.33480834960938 7.466635227203369 28.35847473144531 14.9040584564209 28.35847473144531 C 17.45564270019531 28.35847473144531 19.83291816711426 27.63750267028809 21.86454200744629 26.40547561645508 L 31.01983451843262 35.56002807617188 L 35.56002807617188 31.01761245727539 L 26.40695762634277 21.86676979064941 Z M 14.9025764465332 23.2323112487793 C 10.30230712890625 23.2211856842041 6.583224296569824 19.50358581542969 6.575065135955811 14.91296005249023 C 6.581601619720459 10.31626987457275 10.3058910369873 6.591318130493164 14.90257835388184 6.583965301513672 C 19.5006217956543 6.595832824707031 23.2211856842041 10.31343269348145 23.2308292388916 14.91296005249023 C 23.2211856842041 19.49839401245117 19.49913597106934 23.2211856842041 14.90257453918457 23.2323112487793 Z">
 			 </path>
 			 </svg>
 		 </button>
 	 </form>
		<!-- <svg class="Rectangle_324_bjx">
			<rect id="Rectangle_324_bjx" rx="0" ry="0" x="0" y="0" width="865" height="60">
			</rect>
		</svg>
		<svg class="Rectangle_325_bjy">
			<rect id="Rectangle_325_bjy" rx="0" ry="0" x="0" y="0" width="107" height="60">
			</rect>
		</svg>
		<svg class="Icon_map-search_bjz" viewBox="1.44 1.44 34.12 34.12">
			<path id="Icon_map-search_bjz" d="M 26.40695762634277 21.86676979064941 C 27.68398284912109 19.76938438415527 28.359375 17.36110496520996 28.35921669006348 14.90554046630859 C 28.35921669006348 7.466635227203369 22.33999824523926 1.44296658039093 14.89960861206055 1.439999580383301 C 7.465894222259521 1.442225337028503 1.440000176429749 7.466635227203369 1.440000176429749 14.90406036376953 C 1.440000176429749 22.33480834960938 7.466635227203369 28.35847473144531 14.9040584564209 28.35847473144531 C 17.45564270019531 28.35847473144531 19.83291816711426 27.63750267028809 21.86454200744629 26.40547561645508 L 31.01983451843262 35.56002807617188 L 35.56002807617188 31.01761245727539 L 26.40695762634277 21.86676979064941 Z M 14.9025764465332 23.2323112487793 C 10.30230712890625 23.2211856842041 6.583224296569824 19.50358581542969 6.575065135955811 14.91296005249023 C 6.581601619720459 10.31626987457275 10.3058910369873 6.591318130493164 14.90257835388184 6.583965301513672 C 19.5006217956543 6.595832824707031 23.2211856842041 10.31343269348145 23.2308292388916 14.91296005249023 C 23.2211856842041 19.49839401245117 19.49913597106934 23.2211856842041 14.90257453918457 23.2323112487793 Z">
			</path>
		</svg>
		<div id="Search_for_past_projects_bj">
			<span>Search for past projects</span>
		</div>-->
	</div>


	<div id="paragraph-body_bj">
		<div id="This_is_the_projects_archives__bj">
			<span>This is the projects archives for all the past projects that have been completed by university students as part of the IXN for the NHS. All projects are open-source to serve humanity. </span>
		</div>
	</div>
	<div id="Sub-title_bj" class="Sub_title">
		<div id="Simulations__Analytics_Case_St">
			<span>Simulations & Analytics Case Studies</span>
		</div>
	</div>
	<div onclick="window.location='Home___Working_Groups_.html';" id="Working_Groups_bj">
		<span>Working Groups</span>
	</div>
	<div id="Sitemap_arrow_bj" class="Sitemap_arrow">
		<svg class="Icon_ionic-ios-arrow-forward_bj" viewBox="11.246 6.196 10.583 18.509">
			<path id="Icon_ionic-ios-arrow-forward_bj" d="M 18.6390266418457 15.44730091094971 L 11.63498497009277 8.448769569396973 C 11.11698341369629 7.930768013000488 11.11698341369629 7.093148231506348 11.63498497009277 6.580657005310059 C 12.15298652648926 6.068166732788086 12.9906063079834 6.068166732788086 13.50860786437988 6.580657005310059 L 21.44395065307617 14.51048946380615 C 21.94541931152344 15.01195812225342 21.95643997192383 15.81651496887207 21.48252487182617 16.33451461791992 L 13.51411819458008 24.31945419311523 C 13.25511741638184 24.57845497131348 12.91345691680908 24.7052001953125 12.57730674743652 24.7052001953125 C 12.24115657806396 24.7052001953125 11.89949703216553 24.57845497131348 11.64049625396729 24.31945419311523 C 11.1224946975708 23.80145263671875 11.1224946975708 22.96383476257324 11.64049625396729 22.45134162902832 L 18.6390266418457 15.44730091094971 Z">
			</path>
		</svg>
	</div>
	<div onclick="window.location='Home.php';" id="IXN_for_the_NHS_bj">
		<span>IXN for the NHS</span>
	</div>
	<div id="Header_bj" class="Header">
		<div id="Group_10747_bka">
			<svg class="Rectangle_327_bkb">
				<rect id="Rectangle_327_bkb" rx="0" ry="0" x="0" y="0" width="1922" height="162">
				</rect>
			</svg>
			<svg class="Rectangle_328_bkc">
				<rect id="Rectangle_328_bkc" rx="0" ry="0" x="0" y="0" width="1922" height="138">
				</rect>
			</svg>
		</div>
		<div id="Group_10748_bkd">
			<div id="Coronavirus_COVID-19_bke">
				<span>Coronavirus (COVID-19)</span>
			</div>
			<div id="Get_the_latest_advice_about_co_bkf">
			<a href="https://www.nhs.uk/conditions/coronavirus-covid-19/"><span>Get the latest advice about coronavirus</span></a>
			</div>
		</div>
		<div id="Group_10749_bkg">
			<svg class="Rectangle_329_bkh">
				<rect id="Rectangle_329_bkh" rx="0" ry="0" x="0" y="0" width="193" height="62">
				</rect>
			</svg>
			<div id="Client_Logo_bki">
				<span>Client Logo</span>
			</div>
		</div>
		<svg class="Path_10079_bkj" viewBox="0 0 1162 2">
			<path id="Path_10079_bkj" d="M 0 2 C 0 2 22.1279296875 1.9619140625 312.6279296875 1.4619140625 C 603.1279296875 0.9619140625 1162 0 1162 0">
			</path>
		</svg>
	</div>
</div>
</body>
</html>
