<style type="text/css">

	@font-face {
		font-family: Regular;
		src: url("/resources/font/SourceSansPro-Regular.ttf");
	}

	@font-face {
		font-family: Light;
		src: url("/resources/font/SourceSansPro-Light.ttf");
	}
	@font-face {
		font-family: SemiBold;
		src: url("/resources/font/SourceSansPro-SemiBold.ttf");
	}
	@font-face {
		font-family: LaBelle;
		src: url("/resources/font/LaBelleAurore-Regular.ttf");
	}
	@font-face {
		font-family: BoldFont;
		src: url("/resources/font/luckiestguy.ttf");
	}

	::-webkit-scrollbar {
		width: 4px;
		cursor: pointer;
	}

	::-webkit-scrollbar-track {
		background: none; 
	}


	::-webkit-scrollbar-thumb {
		background: #848484; 
	}


	::-webkit-scrollbar-thumb:hover {
		background: #99938B; 
	}

	body{
		margin:auto;
		padding:0;
		width: 100%;
		height: 100%;
		background: #202020;
		font-size:1em;
		font-family: Regular;
		color: #E0E0E0;
	}
	
	a{
		text-decoration: none;
		color: white;
		transition: all 0.3s ease;
	}

	a:hover{
		filter: brightness(1.4);
		transition: all 0.3s ease;
	}

	.mainflexbox{
		display: flex;
		flex-direction: column;
		row-gap: 0px;
		align-items: center;
	}

	.mainflexbox > .header1{
		position: fixed;
		z-index: 9;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		width: 100%;
		height: 55px;
		background: #1B488D;
	}
	.mainflexbox > .header1 > .container{
		display: flex;
		flex-direction: row;
		column-gap: 30px;
		width: 58%;
		height: 100%;
		align-items: center;
		justify-content: space-between;
		font-size: 1.6em;
	}
	.mainflexbox > .header1 > .container > .sosyalMedya{
		display: flex;
		flex-direction: row;
		column-gap: 50px;
	}
	.mainflexbox > .header1 > .container > .destek{
		display: flex;
		flex-direction: row;
		column-gap: 50px;
		align-items: center;
	}

	.mainflexbox > .header1 > .container > .destek > a{
		display: flex;
		flex-direction: row;
		column-gap: 20px;
		align-items: center;
		font-size: 1.1em;
		border-bottom: 3px solid #2D5EA7;
		padding: 5px 10px;
	}

	.mainflexbox > .header2{
		margin-top: 55px;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		width: 100%;
		height: 80px;
		background: rgba(05, 05, 05, 0.5);
	}

	.mainflexbox > .header2 > .container{
		display: flex;
		flex-direction: row;
		column-gap: 30px;
		width: 58%;
		height: 100%;
		align-items: center;
		justify-content: space-between;
		font-size: 1em;
	}
	.mainflexbox > .header2 > .container > .logo > a{
		display: flex;
		flex-direction: row;
		column-gap: 10px;
		align-items: center;
		font-size: 1.2em;
		font-family: BoldFont;
		color:#2D5EA7;
		text-shadow: 1px 1px 2px black;
	}
	.mainflexbox > .header2 > .container > .navbtns{
		display: flex;
		flex-direction: row;
		column-gap: 20px;
		align-items: center;
		font-size: 1.2em;
	}
	.mainflexbox > .header2 > .container > .navbtns > a:hover{
		color: orange;
	}
	.mainflexbox > .header2 > .container > .navmenubtns{
		display: none;
	}

	.mainflexbox > .footer{
		display: flex;
		flex-direction: column;
		align-items: center;
		background: rgba(11, 11, 11, 0.2);
		width: 100%;
		height: 100%;
		border-top: 1px solid #050505;
	}

	.mainflexbox > .footer > .infoFooter{
		color: white;
		font-size: 1.3em;
		display: flex;
		flex-direction: row;
		column-gap: 50px;
		row-gap: 50px;
		flex-wrap: wrap;
		align-items: center;
		width: calc(90% - 100px);
		height: 100%;
		padding: 50px;
	}

	.mainflexbox > .footer > .infoFooter > .iletisimfooter{
		display: flex;
		flex-direction: column;
		row-gap: 20px;
		width: 30%;
	}

	.mainflexbox > .footer > .infoFooter > img{
		width: 30%;
	}

	.mainflexbox > .footer > .infoFooter > .footernav{
		display: flex;
		flex-direction: column;
		row-gap: 20px;
		align-items: flex-end;
		width: 30%;
	}

	.mainflexbox > .footer > .altFooter{
		color: silver;
		font-size: 1.1em;
		display: flex;
		align-items: center;
		justify-content: center;
		background: #444444;
		width: 100%;
		height: 70px;
	}

	.mainflexbox > .footer > .altFooter > .comp{
		width: 85%;
	}

	@media only screen and (max-width: 1300px) {
		
		.mainflexbox > .header1 > .container{
			width: 90%;
		}

		.mainflexbox > .header1 > .container > .sosyalMedya{
			column-gap: 25px;
		}

		.mainflexbox > .header2 > .container{
			width: 90%;
		}
		.mainflexbox > .header2 > .container > .logo > a{
			font-size: 1em;
		}
		.mainflexbox > .header2 > .container > .navbtns{
			display: none;
		}
		.mainflexbox > .header2 > .container > .navmenubtns{
			display: flex;
			font-size: 2.5em;
			background: rgba(0, 0, 0, 0.5);
			color: white;
			padding: 10px 20px;
			border-radius: 10px;
		}
		.mainflexbox > .header2 > .container > .navmenubtns > .phonenavs{
			z-index: 9;
			position: absolute;
			top: 135px;
			right: 10px;
			font-size: 0.7em;
			background: rgba(40, 40, 40, 1.0);
			padding: 85px;
			border-radius: 10px;
			outline: 5px solid #444444;

			display: none;
			flex-direction: column;
			row-gap: 50px;
		}
		.mainflexbox > .header2 > .container > .navmenubtns > .phonenavs > a{
			font-size: 1em;
			padding: 10px;
		}

		.mainflexbox > .footer > .infoFooter > .iletisimfooter{
			width:100%;
		}

		.mainflexbox > .footer > .infoFooter > img{
			width:100%;
		}

		.mainflexbox > .footer > .infoFooter > .footernav{
			width:100%;
			align-items: flex-start;
		}

		.mainflexbox > .footer > .altFooter > .comp{
			width: 85%;
		}

	}


</style>