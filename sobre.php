<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EcoStake - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

	<style>
	.deposit{
		
		background: linear-gradient(rgb(72, 249, 52), rgb(43, 186, 27));
		color: #082b04;
		border: 1px solid #0f2b0c;
		padding: 2px;
		padding-left: 8px;
		padding-right: 8px;
		border-radius: 2px;
		font-size: 12px;
		font-weight: bold;
	}
	.withdraw{
		
		background: linear-gradient(rgb(249, 88, 52), rgb(186, 58, 26));
		color: rgb(43, 4, 4);
		border: 1px solid #2b0c0c;
		padding: 2px;
		padding-left: 8px;
		padding-right: 8px;
		border-radius: 2px;
		font-size: 12px;
		font-weight: bold;
	}
	body{
	  background: linear-gradient(
      rgba(0, 0, 0, 0.9), 
      rgba(0, 0, 0, 0.1),
	  rgba(0, 0, 0, 0.9)
    ), 
	  url("images/index.jpg");
	  background-color: #111; /* Used if the image is unavailable */
	  background-position: center; /* Center the image */
	  background-repeat: no-repeat; /* Do not repeat the image */
	  background-size: cover;
	  

		
	}
	.moedas{
	width: 150px;
	height: 100px;
	display: inline-block;
	margin: 15px 15px 0 15px;
	color: #ffffff;
	font-height: bold;
	border: 2px solid #white;
}
.img-moedas{
	width: 5em;
	height: 5em;
}
.bt-index{
	width: 200px;
	color: #808387;
	background: linear-gradient(#091216, #202327);
	border: 1px solid #ffffff;
	font-height: bold;
	height: 42px;
	border-radius: 3px;
	font-size: 150%;
	padding: 5px;
}
.bt-index:hover{
	
	color: #a0a3a7;
	background: linear-gradient(#293236, #495256);
	border: 1px solid #ffffff;
	font-height: bold;
	
}
	</style>
  </head>

  <body id="page-top" style='margin-top: 0px; padding: 0px;'>



    <div id="wrapper" style='padding-top: 0px; margin-top: 0px;'>

      <div id="content-wrapper" style='padding-top: 0px; margin-top: 0px;'>

        <div class="container-fluid" style='padding-top: 0px; margin-top: 0px;'>
			<div class="card-body" style='text-align: center;'><img src='images/logo5.png'/></div>
        </div>

		<div id="conteudo-right">
		<br>
		<div style='text-align: center; margin: 0 auto;'>
			<a href='login.php' class='bt-index'>Login</a> <a href='cadastro.php' class='bt-index'>Register</a> <a href='sobre.php' class='bt-index'>About Us</a> 
		</div>
		<br>
		<div style='text-align: center;'><span style='background-color: #fff; height: 1px; width: 80%;'></span></div></br>
		<div style='width: 100vw; justify-content: center; align-items: center; display: flex; '>
		<div style='max-width: 1024px; background-color: #111; color: white; padding: 25px; margin: 5px; border: 1px solid #444;'>
		<div style='font-size: 24px; text-align: center;'><b>Welcome to Eco Stake</b></div></br>
		<div style='text-align: justify;'>A PoS (Stake) and Masternode Shared mining pool that does not work with quotas or deposits.</div></br>

<div style='font-size: 24px; text-align: center;'><b>How we arise:</b></div></br>
<div style='text-align: justify;'>The Eco Stake was created by a group of friends who fell in love with cryptomeda PoS who decided to join forces to bet their coins all together. From then on, new investors began to emerge and thus the idea of ​​expanding and becoming a shared pool where each investor applies the amount that can and receives the income according to the% that he applied in the pool has arisen, everyone from the smallest to the largest investor.</div></br>
<div style='font-size: 24px; text-align: center;'><b>Who we are:</b></div></br>
<div style='text-align: justify;'>The STAKE ECO pool is a PoS (Stake) Mining and Shared Masternodes pool, with a new POOL concept. We do not work with minimum quotas and minimum deposits. Our system is automated based on percentage (%) of investment.</div></br>
<div style='font-size: 24px; text-align: center;'><b>NOTICE:</b></div></br>
<div style='text-align: justify;'>We are not, investment groups, we are not mining bitcoin or another crypto-currency through POW, we do not make custody, because the coins are of all, we are only joining them in a single place, being that at any moment, the return may be requested of the coins, because for participation in the POOL, we do not require or have a contract that obliges the participant to stay for a certain time.</div></br>

<div style='font-size: 24px; text-align: center;'><b>System:</b></div></br>
<div style='text-align: justify;'>
- Wallets 24/7 online</br>
- Private keys stored in a safe place</br>
- The servers are highly protected: HW Firewalls, DDOS protection</br>
- Team and Support able to clarify the POOL and the Cryptomoedas.</br>
</div></br>


<div style='font-size: 24px; text-align: center;'><b>Rules for Stake:</b></div></br>

<div style='text-align: justify;'>
<b>Deposit:</b> You can make the deposit at any time! We will combine your coins with the coins already in the POOL, after finishing the cycle through Coincontrol (CC). Therefore, for all intents and purposes, your coins will only start the staking process at the end of the current cycle;</br>
<b>Cycle:</b> It can be daily or within 6 days or more, depending on the currency, maturation time, amounts of currencies and weight in each POOL;</br>
<b>Withdrawal:</b> You can request withdrawal at any time, but in the same way as the deposit, your coins can only be released after finishing the cycle through Coincontrol (CC). After the end of the cycle, we have up to 24 hours to withdraw your coins;</br>
<b>Participation:</b> To participate in any POOL of the existing currencies, there is no minimum deposit amount in the POOL currencies in which you will participate;</br>
<b>FEE Fee:</b> You will be charged a 3% fee for all stakes (profit only, not your deposit) to defray expenses incurred with the server, which will be deducted before completing the acomapanhameto worksheet;</br>
The Cryptomoedas market has a HIGH LEVEL OF RISK THAT MAY RESULT, INCLUDING THE TOTAL LOSS OF ITS INVESTMENTS.</br>

Each person is responsible for doing his or her own careful research, detailed analysis, before engaging in any transaction, be it deposit or withdrawal of your coins. Also, never invest values ​​that you can not lose or that you will miss.
</div></br>
<div style='font-size: 24px; text-align: center;'><b>Rules for Masternode:</b></div></br>
<div style='text-align: justify;'>
<b>1.</b> Depending on the Masternode you can have a minimum quota to enter;</br>
<b>2.</b> Your earnings percentage is based on the amount of coins you have in the masternode;</br>
<b>3.</b> The proceeds will be distributed once a week on the Saturday of each week.</br>
<b>4.</b> Fee will be charged 5% of the earnings to cover expenses;</br>
<b>5.</b> The masternode can not be undone because of coin pump;</br>
<b>6.</b> The masternode will only be undone if everyone agrees or if a person owns 51% of all coins in the masternode, and after the announcement or confirmation the masternode will still work for 7 days until it is completely undone.</br>
<b>7.</b> Anyone can request the exit of the masternode and after the interest in the withdrawal not minimum or maximum time for it to happen, because to exit will need someone to enter, so the release only happens if someone replaced his place.</br>
<b>8.</b> People who already have coins in the masternode have priority to buy the currencies of the person who is retiring, if someone is not interested, the community will be replaced.</br>
<b>9.</b> The negotiation is in the coins already in the masternode or out of it, as will be done by the members who are leaving or who is entering, the altsbr will not have any involvement or responsibility, being at the discretion of those involved in the substitution of how they will negotiate, by btc, doge, real etc.</br>
</div></br>
<div style='font-size: 24px; text-align: center;'><b>Pros and cons:</b></div></br>
<div style='text-align: justify;'>
<b>Pros:</b></br>
* We are an intuitive user interface to manage your coins and check out the community pool.</br>
* The payout time is much lower when you are together with our pool than doing Stake solo.</br>
* Together, we earn greater rewards than individually.</br>
* We are absolutely transparent where we also show all drives in our discord.</br>
* Our pool is completely independent.</br>
* There are no restrictions on deposits or withdrawals.</br>
* No hardware expense for you.</br>
* No electricity, computer or server expense for you.</br>
* Completely safe and stress-free.</br></br>
<b>Cons:</b></br>
* You have to trust us from the moment you send your coins to our servers.
</div></br>
<div style='font-size: 24px; text-align: center;'><b>How Our Pool Works:</b></div></br>
<div style='text-align: justify;'>
 The ECO STAKE pool is a PoS (Stake) Mining and Shared Masternodes pool. We do not have a minimum amount or accounts to participate in the pool. We seek to serve everyone from the best to the smallest investor so that each investor applies what he can and his earnings in the pool to the pool, based on the percentage he has applied to Stake or MN.</br>
In the case of MN "for example": Joao wants to enter into a MN of $ PAC, a MN of $ PAC There are 500,000 coins, João Só has 10% of the amount to apply. Suppose at the date of payment of the income of this MN he has yielded $ 10,000 CAP, as John applied 10% to complete the shared MN, he will also receive 10% of this income on the date of payment. If John wants to let the accumulating income from the pool to STAKE (in the case of POS currency) or to close another MN he can, as he can also request the loot to sell the proceeds and take the investment is all at the discretion of the investor.</br>
 The same case applies in the situation of STAKE, stake solo has lower incomes and spending both energy and machine. In PoS mining, all coins are pooled into a single wallet set up on a dedicated server. The more coins in weight in the pool portfolio, the greater the amount of coins in the block, increasing the income for all.</br>
Let's suppose that John wants to invest in POS (Stake) and pool money has an X amount of this coin already in the pool and John deposits 10% of this coin to add to the pool, the pool income will rise due to the weight which increased and John will receive 10% of the income that will be generated. At the moment the yields are shown in the spreadsheets in our Discord for the accompaniment of all, each currency has its specific channel in our discord where the spreadsheets and information are made available.</br>
Each currency yields a different% depending on the currency settings as well as weight and currency time on the network. In the case of Bitcoin Cure (BTCC), it is new to the network, and we still do not have a precise income from it, we are testing the yields and we will have a more concrete result in the next 15 days. At the moment we have 86k btcc, put while yielding 0.1% day. To make deposits or withdrawals, we also have the form in our Discord. We have the deposit form in #depositos_deposits where the form must be filled out, and to request withdrawals, has the form that must be filled in #retiradas_withdrawals.</br>
When you request a withdrawal, you will receive it immediately after the wager generated or income of the shared masternode, 24 hours a day, 7 days a week. We are constantly optimizing our portfolios to generate the maximum possible share. Every coin is different and we know it.
</div></br>
<div style='font-size: 24px; text-align: center;'><b>Common questions:</b></div></br>
<div style='text-align: justify;'>
<b>Is there a charge to join the pool?</b></br>
A: It's free to sign up and get started. We charge only 3% of all POS coin stacks and 5% of the Masternode Revenues we use to keep the pool active.</br></br>

<b>Is there a minimum amount of coins per deposit?</b></br>
A: No. You invest with whatever amount you think is best.</br></br>
<b>Can I buy coins in the Pool?</b></br>
A: No. You can compare crypto coins in some Exchange or POOL DISCORD where there is a P2P channel. On the Site we have a "TIPS" channel that can be used to exchange currencies. Remembering that we are not responsible for any trading, this is entirely the responsibility of the investor.</br></br>

<b>Where do I get the address to send coins to the Pool?</b><br>
A: Detect the pool, through your registration you can get the address by clicking and deposit in the desired currency.</br></br>

<b>When can I deposit into the pool?</b></br>
A: You can make a deposit at any time, as soon as the deposit is confirmed in the network it will already be processed.</br></br>

<b>When can I make a withdrawal from the pool?</b></br>
A: You may request withdrawal at any time, however, please note that we will process all withdrawals manually for security reasons, but all requests will be processed daily. Currency that is in stake cycle or in the cycle of Masternode it will be necessary to wait for the cycle to avoid harming other investors, if someone wants to enter, we can replace their balance immediately benefiting all.</br></br>

<b>Can I just make a deposit or can I add more coins to my balance?</b></br>
A: You can deposit as many times as you want, and your coins will start to bet as much as the confirmations allow. Your total weight and pool rewards will be calculated as one, and you will receive the correct proportion of stake rewards or masternodes due to you.</br></br>

<b>Can I transfer from an Exchange directly to the pool or to my Wallet Desktop first and then to the pool?</b></br>
A: This is your choice, both processes can be done. We are not responsible for shipping errors.</br></br>

<b>Can I use an Exchange as my withdrawal address?</b></br>
A: Yes, however, we recommend that you use a Wallet from the desktop in which you have full control.</br></br>

<b>How do I check my coins?</b></br>
A: It will be shown in Dashboard, inside your backoffice.</br></br>

<b>When a STAKE is paid, does the reward go back into my service wallet?</b></br>
A: No, it is added to your current currencies in the pool and is set to bet again. You will need to request a withdrawal that should be completed.</br></br>

<b>Do I have to keep my wallet open if I send coins to the pool?</b></br>
A: It is not necessary, but it is good to keep your wallet synchronized with the network for when you request a withdrawal and do not have delays or any problems.</br></br>

<b>Can I promote the pool?</b></br>
A: All you can</br></br>

<b>Can not find what you are looking for?</b></br>
A: Contact our support through our social networks.</br>
</div></br>
<div style='font-size: 24px; text-align: center;'><b>Why bet on our Pool and not bet alone?</b></div></br>
<div style='text-align: justify;'>
Betting solo coins on your local wallet will take a long time and will certainly not reduce your energy bill. Often, small properties do not give you rewards. With the power of the pool you have many advantages like:</br>
The payout time is much lower when we are together in our pool.</br>
Together, we won more rewards than individually.</br>
In airdrops you will have opportunities and bonuses in participating in airdrops.</br>
Even with the least amount of coins, you still get rewards.</br>
</div></br>
 <div style='font-size: 24px; text-align: center;'><b>Community polls:</b></div></br>
<div style='text-align: justify;'>
See your coins and participate in polls as an investor!
 </div>
</div>
		</div>
		</div>
		
		
	</div>
        
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer" style='color: #fff; background-color: transparent; width: 100%;'>
          <div class="container my-auto" >
            <div class="copyright text-center my-auto"><br><br>
              <span>Copyright © EcoStakePool 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>


  </body>
</html>
