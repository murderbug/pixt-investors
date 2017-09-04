<?php
	ob_start();
	session_start();
	require( "cms/config.php" );
	require_once 'loggedin.php';
	
	if ( $name == '' ) {
		require_once 'cms/dbconnect.php';
		$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
		$userRow=mysql_fetch_array($res);
		
		$name = $userRow['userName'];
		$email =  $userRow['userEmail'];
	}
	
	require_once 'cms/company_db.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="<?php echo($companyName) ?>">
        <meta name="robots" content="noindex" />
		
        <title><?php echo($companyName) ?> | <?php echo($companyTagline) ?></title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.php?v=<?php echo rand() ?>">

		
		
		<!-- Modernizer Script for old Browsers -->		
        <script async src="js/modernizr-2.6.2.min.js"></script>
	
    </head>
	
    <body id="body"> 
    
    <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <div class="blog-icon">
                            <i class="fa fa-gavel fa-5x"></i>
                        </div>
                        <div class="blog-title">
                            <h1>NON-DISCLOSURE &amp; CONFIDENTIALITY AGREEMENT</h1>
                        </div>
                        
					</div>     <!-- End col-lg-12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
        
        
                <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                   
                    <div id="blog-posts" class="col-md-8 col-md-offset-2">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry">
								<div class="post-excerpt">
									<h3 class="color">Non-Disclosure &amp; Confidentiality Agreement</h3>
									
								
									<p>This Non-Disclosure and Confidentiality Agreement (the "Agreement") is entered into by and between <?php echo($companyRegisteredName) ?> with its principal offices at <?php echo($companyAddress) ?> ("Disclosing Party") and <strong><?php echo $name ?></strong> and/or owner of email address: <strong><?php echo $email ?></strong> ("The User") of the <?php echo($companyName) ?> website located at <?php echo $companyURL ?> (“The Website") for purposes of preventing the unauthorized disclosure of Confidential Information as defined below. The parties agree to enter into a confidential relationship with respect to the disclosure of certain proprietary and confidential information belonging to the Disclosing Party (the "Confidential Information").</p>
									<h4 class="color">1.	 Definitions.</h4>
										<p>(a) For purposes of this Agreement, "Confidential Information" shall include all information or material that has or could have commercial value or other utility in the business or prospective business of Disclosing Party. Confidential Information also includes all information of which unauthorized disclosure could be detrimental to the interests of Disclosing Party, whether or not such information is identified as Confidential Information by Disclosing Party. By example and without limitation, Confidential Information includes, but is not limited to, the following: All documents and writings pertaining to the business of the Company, including trade secrets, technical and financial information, data, designs, algorithms, code, scripts, systems drawings, sketches, proposals, strategic partners, clients, investors, all lists and records, economic and financial analyses, financial data, contracts, notes, memoranda, books, correspondence, manuals, reports or research, whether developed by the Company or its strategic partners, clients, and/or investors, or developed by Website User acting alone or jointly with the Company or with any other person or entity, any product development and ideas, apparatus as well as all other information, written, oral, graphic or computerized relating to the business of the Company or of any of persons or entities with which the Company does business, provided that such information was not first publicly disclosed by the Company and thus known to the Website User.</p>
										<p>(b)  For purposes of this Agreement, the term "Website User" shall include Website User, the company he or she represents, and all affiliates, subsidiaries, strategic partners, and related companies of Website User.  For purposes of this Agreement, the term "Representative" shall include any and all of Website User's employers, and/or directors, officers, employees, agents, and financial, legal, and other advisors.</p>
									<h4 class="color">2. Exclusions</h4>
										<p>Confidential Information does not include information that Website User can demonstrate:  (a) was in Website User's possession prior to it being furnished to Website User under the terms of this Agreement, provided the source of that information was not known by Website User to be bound by a confidentiality agreement with Disclosing Party; (b) is now, or hereafter becomes, through no act or failure to act on the part of Website User, generally known to the public; (c) is rightfully obtained by Website User from a third party, without breach of any obligation to Disclosing Party; or (d) is independently developed by Website User without use of or reference to the Confidential Information.</p>
									
									<h4 class="color">3. Confidentiality</h4>
										<p>Website User and his Representatives shall not disclose any of the Confidential Information in any manner whatsoever, except as provided in paragraphs 4 and 5 of this Agreement, and shall hold and maintain the Confidential Information in strictest confidence.</p>
										
									<h4 class="color">4. Permitted Disclosures</h4>
										<p>Website User may disclose Disclosing Party's Confidential Information to Website User's responsible Representatives with a bona fide need to know such Confidential Information, but only to the extent necessary to evaluate or to carry out a proposed transaction or relationship with Disclosing Party and only if such persons are advised of the confidential nature of such Confidential Information and the terms of this Agreement and are bound by a written agreement or by a legally enforceable code of professional responsibility to protect the confidentiality of such Confidential Information.</p>
											
									<h4 class="color">5. Required Disclosures</h4>
										<p>Website User may disclose Disclosing Party's Confidential Information if and to the extent that such disclosure is required by court order, provided that Website User provides Disclosing Party a reasonable opportunity to review the disclosure before it is made and to interpose its own objection to the disclosure.</p>
												
									<h4 class="color">6. Use</h4>
										<p>Website User and his Representatives shall use the Confidential Information solely for the purpose of evaluating a possible transaction or relationship with Disclosing Party and shall not in any way use the Confidential Information to the detriment of Disclosing Party.  Nothing in this Agreement shall be construed as granting any rights to Website User, by license or otherwise, to any of Disclosing Party's Confidential Information.</p>
													
									<h4 class="color">7. Return of Documents</h4>
										<p>If Website User does not proceed with the possible transaction with Disclosing Party, Website User shall notify Disclosing Party of that decision and shall, at that time or at any time upon the request of Disclosing Party for any reason, return to Disclosing Party any and all records, notes, and other written, printed or other tangible materials in its possession pertaining to the Confidential Information immediately on the written request of Disclosing Party. The returning of materials shall not relieve Website User from compliance with other terms and conditions of this Agreement.</p>
														
									<h4 class="color">8. No Additional Agreements</h4>
										<p>Neither the holding of discussions nor the exchange of material or information shall be construed as an obligation of Disclosing Party to enter into any other agreement with Website User or prohibit Disclosing Party from providing the same or similar information to other parties and entering into agreements with other parties.  Disclosing Party reserves the right, in its sole discretion, to reject any and all proposals made by Website User or his Representatives with regard to a transaction between Website User and Disclosing Party and to terminate discussions and negotiations with Website User at any time.  Additional agreements of the parties, if any, shall be in writing signed by Disclosing Party and Website User.</p>
															
									<h4 class="color">9. Irreparable Harm</h4>
										<p>Website User understands and acknowledges that any disclosure or misappropriation of any of the Confidential Information in violation of this Agreement may cause Disclosing Party irreparable harm, the amount of which may be difficult to ascertain, and therefore agrees that Disclosing Party shall have the right to apply to a court of competent jurisdiction for specific performance and/or an order restraining and enjoining any such further disclosure or breach and for such other relief as Disclosing Party shall deem appropriate.  Such right of Disclosing Party is to be in addition to the remedies otherwise available to Disclosing Party at law or in equity.</p>
																
									<h4 class="color">10. Survival</h4>
										<p>This Agreement shall continue in full force and effect at all times.</p>
																	
									<h4 class="color">11. Successors and Assigns</h4>
										<p>This Agreement and each party's obligations hereunder shall be binding on the representatives, assigns, and successors of such party and shall inure to the benefit of the assigns and successors of such party. Further, the rights and obligations of Website User hereunder are not assignable.</p>
																		
									<h4 class="color">12. Governing Law</h4>
										<p>This Agreement shall be governed by and construed in accordance with the laws of Singapore.  The parties hereby irrevocably consent to the jurisdiction of Singapore in any action arising out of or relating to this Agreement, and waive any other venue to which either party might be entitled by domicile or otherwise.</p>
																			
									<h4 class="color">13. Severability</h4>
										<p>If any provision of this Agreement is found to be invalid or unenforceable, the remainder of this Agreement shall be interpreted so as best to effect the intent of the parties.</p>
																				
									<h4 class="color">14. Entire Agreement</h4>
										<p>This Agreement expresses the full and complete understanding of the parties with respect to the subject matter hereof and supersedes all prior or contemporaneous proposals, agreements, representations and understandings, whether written or oral, with respect to the subject matter.  This Agreement is not, however, to limit any rights that Disclosing Party may have under trade secret, copyright, patent or other laws that may be available to Disclosing Party.  This Agreement may not be amended or modified except in writing signed by each of the parties to the Agreement.  This Agreement shall be construed as to its fair meaning and not strictly for or against either party.  The headings hereof are descriptive only and not to be construed in interpreting the provisions hereof.</p>									
										<p>By clicking the “I Agree” button below and/or anywhere else on the <?php echo($companyName) ?> website or other <?php echo($companyName) ?> documentation or properties, the Website User agrees to the terms of this non-disclosure agreement and the Confidentiality Notice presented on this website.</p>
									
									<p class="text-center"><a class="btn btn-transparent "  onclick="history.back(-1)">I Agree</a> &nbsp; <a class="btn btn-transparent " href="logout.php?logout">No thanks</a></p>
								</div>
                            </article>
							
                            <!-- End Single Post -->

                        </div>
                    </div>
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
        <?php include 'includes/footer.php' ?>
        
    </body>
</html>
<?php ob_end_flush(); ?>