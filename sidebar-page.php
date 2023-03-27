<?php 

	/* Template Name: Fixed Sidebar with page */ 
	get_header();
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
		<div class="container mx-auto" hero>
			<div class="flex items-center justify-center min-h-[400px] relative text-center truncate whitespace-normal">
				<div class="w-full md:w-4/6 px-5">
					<div class="text-5xl md:text-7xl">
						<?php the_title(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-20 md:mb-40 main">
			<div class="flex px-5">
				<div class="w-1/4 sidebar hidden md:block">
					<ul class="pt-10">
						
					</ul>
				</div>
				<div class="w-full md:w-3/4">
				<?php if( have_rows('sections') ): ?>					
					<?php while( have_rows('sections') ): the_row(); ?>
					<div class="mb-16" id="block-<?php echo get_row_index(); ?>">
						<h2><?php echo get_sub_field('title'); ?></h2>
						<?php echo get_sub_field('content');?>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
					
						
					<!-- <div class="mb-16" id="block-1">
						<h2>1.	About the Website</h2>

						<p>(a)	Welcome to www.snippit.com.au (Website). The Website Essential Services Provider (Services).</p>
						<p>(b)	The Website is operated by Snippit Pty Ltd(ACN 30664818848). Access to and use of the Website, or any of its associated Products or Services, is provided by Snippit Pty Ltd. Please read these terms and conditions (Terms) carefully. By using, browsing and/or reading the Website, this signifies that you have read, understood and agree to be bound by the Terms. If you do not agree with the Terms, you must cease usage of the Website, or any of Services, immediately.</p>
						<p>(c)	Snippit Pty Ltd reserves the right to review and change any of the Terms by updating this page at its sole discretion. When Snippit Pty Ltd updates the Terms, it will use reasonable endeavours to provide you with notice of updates to the Terms. Any changes to the Terms take immediate effect from the date of their publication. Before you continue, we recommend you keep a copy of the Terms for your records.</p>

					</div>
					<div class="mb-16" id="block-2">
						<h2>2.	Acceptance of the Terms</h2>
						<p>(a)	You accept the Terms by remaining on the Website. You may also accept the Terms by clicking to accept or agree to the Terms where this option is made available to you by Snippit Pty Ltd in the user interface.</p>
					</div>
					<div class="mb-16" id="block-3">
						<h2>3.	Registration to use the Services</h2>

						<p>(a)	In order to access the Services, you must first register for an account through the Website (Account).</p>

						<p>(b)	As part of the registration process, or as part of your continued use of the Services, you may be required to provide personal information about yourself (such as identification or contact details), including:</p>

						<ul class="pl-10 text-sm mb-5">
							<li>(i)	Email address</li>
							<li>(ii) Preferred username</li>
							<li>(iii) Mailing address</li>
							<li>(iv) Telephone number</li>
							<li>(v) 100 Points (NATIONAL POLICE CHECK (NPC) 100 POINT CHECKLIST)</li>
						</ul>
						<p>(c)	You warrant that any information you give to Snippit Pty Ltd in the course of completing the registration process will always be accurate, correct and up to date.</p>

						<p>(d)	Once you have completed the registration process, you will be a registered member of the Website (Member) and agree to be bound by the Terms.</p>

						<p>(e)	You may not use the Services and may not accept the Terms if:
							<ul class="pl-10 text-sm">
								<li>(i)	you are not of legal age to form a binding contract with Snippit Pty Ltd; or</li>
								<li>(ii) you are a person barred from receiving the Services under the laws of Australia or other countries including the country in which you are resident or from which you use the Services.</li>
							</ul>
						</p>
					</div>
					<div class="mb-16" id="block-4">
						<h2>4.	Your obligations as a Member</h2>
						<p>(a)	As a Member, you agree to comply with the following:</p>
						<ul class="pl-10 text-sm mb-5">
							<li>(i)	you will use the Services only for purposes that are permitted by:</li>
							<ul class="pl-10 text-sm mb-5">
								<li>(A)	the Terms; and</li>
								<li>(B)	any applicable law, regulation or generally accepted practices or guidelines in the relevant jurisdictions;</li>
							</ul>
							<li>(ii)	you have the sole responsibility for protecting the confidentiality of your password and/or email address. Use of your password by any other person may result in the immediate cancellation of the Services;</li>
							<li>(iii)	any use of your registration information by any other person, or third parties, is strictly prohibited. You agree to immediately notify Snippit Pty Ltd of any unauthorised use of your password or email address or any breach of security of which you have become aware;</li>
							<li>(iv)	access and use of the Website is limited, non-transferable and allows for the sole use of the Website by you for the purposes of Snippit Pty Ltd providing the Services;</li>
							<li>(v)	you will not use the Services or the Website in connection with any commercial endeavours except those that are specifically endorsed or approved by the management of Snippit Pty Ltd;</li>
							<li>(vi)	you will not use the Services or Website for any illegal and/or unauthorised use which includes collecting email addresses of Members by electronic or other means for the purpose of sending unsolicited email or unauthorised framing of or linking to the Website;</li>
							<li>(vii)	you agree that commercial advertisements, affiliate links, and other forms of solicitation may be removed from the Website without notice and may result in termination of the Services. Appropriate legal action will be taken by Snippit Pty Ltd for any illegal or unauthorised use of the Website; and</li>
							<li>(viii)	you acknowledge and agree that any automated use of the Website or its Services is prohibited.</li>
						</ul>
					</div>
					<div class="mb-16" id="block-5">
						<h2>5.	Payment</h2>
						<p>(a)	Where the option is given to you, you may make payment for the Services (Services Fee) by way of:</p>
						<ul class="pl-10 text-sm mb-5">
							<li>(i)	Electronic funds transfer (EFT) into our nominated bank account</li>
							<li>(ii) Credit Card Payment (Credit Card)</li>
							<li>(iii)	PayPal (PayPal)</li>
						</ul>
						<p>(b)	All payments made in the course of your use of the Services are made using eWay. In using the Website, the Services or when making any payment in relation to your use of the Services, you warrant that you have read, understood and agree to be bound by the eWay terms and conditions which are available on their website.</p>
						<p>(c)	You acknowledge and agree that where a request for the payment of the Services Fee is returned or denied, for whatever reason, by your financial institution or is unpaid by you for any other reason, then you are liable for any costs, including banking fees and charges, associated with the Services Fee.</p>
						<p>(d)	You agree and acknowledge that Snippit Pty Ltd can vary the Services Fee at any time.</p>
					</div>
					<div class="mb-16" id="block-6">
						<h2>6.	Refund Policy</h2>
						<p>Snippit Pty Ltd will only provide you with a refund of the Services Fee in the event they are unable to continue to provide the Services or if the management of Snippit Pty Ltd makes a decision, at its absolute discretion, that it is reasonable to do so under the circumstances (Refund).</p>
					</div>
					<div class="mb-16" id="block-7">
						<h2>7.	Copyright and Intellectual Property</h2>

						<p>(a)	The Website, the Services and all of the related products of Snippit Pty Ltd are subject to copyright. The material on the Website is protected by copyright under the laws of Australia and through international treaties. Unless otherwise indicated, all rights (including copyright) in the Services and compilation of the Website (including but not limited to text, graphics, logos, button icons, video images, audio clips, Website code, scripts, design elements and interactive features) or the Services are owned or controlled for these purposes, and are reserved by Snippit Pty Ltd or its contributors.</p>

						<p>(b)	All trademarks, service marks and trade names are owned, registered and/or</p>
						
						<p>licensed by Snippit Pty Ltd, who grants to you a worldwide, non-exclusive, royalty-free, revocable license whilst you are a Member to:</p>

						<ul class="pl-10 text-sm mb-5">
							<li>(i)	use the Website pursuant to the Terms;</li>
							<li>(ii) copy and store the Website and the material contained in the Website in your device's cache memory; and</li>
							<li>(iii) print pages from the Website for your own personal and non-commercial use.</li>
						</ul>

						<p>Snippit Pty Ltd does not grant you any other rights whatsoever in relation to the Website or the Services. All other rights are expressly reserved by Snippit Pty Ltd.</p>

						<p>(c)	Snippit Pty Ltd retains all rights, title and interest in and to the Website and all related Services. Nothing you do on or in relation to the Website will transfer any:</p>
						<ul class="pl-10 text-sm mb-5">
							<li>(i)	business name, trading name, domain name, trade mark, industrial design, patent, registered design or copyright, or</li>
							<li>(ii) a right to use or exploit a business name, trading name, domain name, trade mark or industrial design, or</li>
							<li>(iii) a thing, system or process that is the subject of a patent, registered design or copyright (or an adaptation or modification of such a thing, system or process), to you.</li>
						</ul>
						<p>(d)	You may not, without the prior written permission of Snippit Pty Ltd and the permission of any other relevant rights owners: broadcast, republish, up-load to a third party, transmit, post, distribute, show or play in public, adapt or change in any way the Services or third party Services for any purpose, unless otherwise provided by these Terms. This prohibition does not extend to materials on the Website, which are freely available for re-use or are in the public domain.</p>

					</div>
					<div class="mb-16" id="block-8">
						<h2>8.	Privacy</h2>
						<p>(a)	Snippit Pty Ltd takes your privacy seriously and any information provided through your use of the Website and/or Services are subject to Snippit Pty Ltd's Privacy Policy, which is available on the Website.</p>
					</div>
					<div class="mb-16" id="block-9">
						<h2>9.	General Disclaimer</h2>

						<p>(a)	Nothing in the Terms limits or excludes any guarantees, warranties, representations or conditions implied or imposed by law, including the Australian Consumer Law (or any liability under them) which by law may not be limited or excluded.</p>
						

						<p>(b)	Subject to this clause, and to the extent permitted by law:</p>

						<ul class="pl-10 text-sm mb-5">
							<li>(i)	all terms, guarantees, warranties, representations or conditions which are not expressly stated in the Terms are excluded; and</li>
							<li>(ii) Snippit Pty Ltd will not be liable for any special, indirect or consequential loss or damage (unless such loss or damage is reasonably foreseeable resulting from our failure to meet an applicable Consumer Guarantee), loss of profit or opportunity, or damage to goodwill arising out of or in connection with the Services or these Terms (including as a result of not being able to use the Services or the late supply of the Services), whether at common law, under contract, tort (including negligence), in equity, pursuant to statute or otherwise.</li>
							<li></li>
						</ul>
						<p>(c)	Use of the Website and the Services is at your own risk. Everything on the Website and the Services is provided to you "as is" and "as available" without warranty or condition of any kind. None of the affiliates, directors, officers, employees, agents, contributors and licensors of Snippit Pty Ltd make any express or implied representation or warranty about the Services or any products or Services (including the products or Services of Snippit Pty Ltd) referred to on the Website. This includes (but is not restricted to) loss or damage you might suffer as a result of any of the following:</p>
						<ul class="pl-10 text-sm mb-5">
							<li>(i)	failure of performance, error, omission, interruption, deletion, defect, failure to correct defects, delay in operation or transmission, computer virus or other harmful component, loss of data, communication line failure, unlawful third party conduct, or theft, destruction, alteration or unauthorised access to records;</li>
							<li>(ii) the accuracy, suitability or currency of any information on the Website, the Services, or any of its Services related products (including third party material and advertisements on the Website);</li>
							<li>(iii) costs incurred as a result of you using the Website, the Services or any of the products of Snippit Pty Ltd; and</li>
							<li>(iv) the Services or operation in respect to links which are provided for your convenience.</li>
						</ul>
					</div>
					<div class="mb-16" id="block-10">
						<h2>10.	Limitation of liability</h2>
						<p>(a)	Snippit Pty Ltd's total liability arising out of or in connection with the Services or these Terms, however arising, including under contract, tort (including negligence), in equity, under statute or otherwise, will not exceed the resupply of the Services to you.</p>
						<p>(b)	You expressly understand and agree that Snippit Pty Ltd, its affiliates, employees, agents, contributors and licensors shall not be liable to you for any direct, indirect, incidental, special consequential or exemplary damages which may be incurred by you, however caused and under any theory of liability. This shall include, but is not limited to, any loss of profit (whether incurred directly or indirectly), any loss of goodwill or business reputation and any other intangible loss.</p>
					</div>
					<div class="mb-16" id="block-11">
						<h2>11.	Termination of Contract</h2>
						<p>(a)	The Terms will continue to apply until terminated by either you or by Snippit Pty Ltd as set out below.</p>
						<p>(b)	If you want to terminate the Terms, you may do so by:</p>
						<ul class="pl-10 text-sm mb-5">
							<li>(i)	providing Snippit Pty Ltd with days' notice of your intention to terminate; and</li>
							<li>(ii) closing your accounts for all of the services which you use, where Snippit Pty Ltd has made this option available to you.</li>
						</ul>
						<p>Your notice should be sent, in writing, to Snippit Pty Ltd via the 'Contact Us' link on our homepage.</p>
						<p>(c)	Snippit Pty Ltd may at any time, terminate the Terms with you if:</p>
						<ul class="pl-10 text-sm mb-5"><ul>
							<li>(i)	you have breached any provision of the Terms or intend to breach any provision;</li>
							<li>(ii)	Snippit Pty Ltd is required to do so by law;</li>
							<li>(iii)	the provision of the Services to you by Snippit Pty Ltd is, in the opinion of Snippit Pty Ltd, no longer commercially viable.</li>
						</ul>
						<p>(d)	Subject to local applicable laws, Snippit Pty Ltd reserves the right to discontinue or cancel your membership at any time and may suspend or deny, in its sole discretion, your access to all or any portion of the Website or the Services without notice if you breach any provision of the Terms or any applicable law or if your conduct impacts Snippit Pty Ltd's name or reputation or violates the rights of those of another party.</p>
					</div>
					<div class="mb-16" id="block-12">
						<h2>12.	Indemnity</h2>
						<p>(a)	You agree to indemnify Snippit Pty Ltd, its affiliates, employees, agents, contributors, third party content providers and licensors from and against:</p>
						<ul class="pl-10 text-sm mb-5">
							<li>(i)	all actions, suits, claims, demands, liabilities, costs, expenses, loss and damage (including legal fees on a full indemnity basis) incurred, suffered or arising out of or in connection with your content;</li>
							<li>(ii) any direct or indirect consequences of you accessing, using or transacting on the Website or attempts to do so; and/or</li>
							<li>(iii) any breach of the Terms.</li>
						</ul>
					</div>
					<div class="mb-16" id="block-13">
						<h2>13.	Dispute Resolution</h2>
						<p>(a)	Compulsory:</p>
						<p>If a dispute arises out of or relates to the Terms, either party may not commence any Tribunal or Court proceedings in relation to the dispute, unless the following clauses have been complied with (except where urgent interlocutory relief is sought).</p>
						<p>(b) Notice:</p>
						<p>A party to the Terms claiming a dispute (Dispute) has arisen under the Terms, must give written notice to the other party detailing the nature of the dispute, the desired outcome and the action required to settle the Dispute.</p>
						<p>(c) Resolution:</p>
						<p>On receipt of that notice (Notice) by that other party, the parties to the Terms (Parties) must:</p>
						<ul class="pl-10 text-sm mb-5">
							<li>(i)	Within 14 days of the Notice endeavour in good faith to resolve the Dispute expeditiously by negotiation or such other means upon which they may mutually agree;</li>
							<li>(ii)	If for any reason whatsoever, 14 days after the date of the Notice, the Dispute has not been resolved, the Parties must either agree upon selection of a mediator or request that an appropriate mediator be appointed by the President of the Law Society of VIC or his or her nominee;</li>
							<li>(iii)	The Parties are equally liable for the fees and reasonable expenses of a mediator and the cost of the venue of the mediation and without limiting the foregoing undertake to pay any amounts requested by the mediator as a pre-condition to the mediation commencing. The Parties must each pay their own costs associated with the mediation;</li>
							<li>(iv) The mediation will be held in Melbourne, Australia.</li>
						</ul>
						<p>(d)	Confidential:</p>
						<p>All communications concerning negotiations made by the Parties arising out of and in connection with this dispute resolution clause are confidential and to the extent possible, must be treated as "without prejudice" negotiations for the purpose of applicable laws of evidence.</p>
						<p>(e)	Termination of Mediation:</p>
						<p>If 30 days have elapsed after the start of a mediation of the Dispute and the Dispute has not been resolved, either Party may ask the mediator to terminate the mediation and the mediator must do so.</p>
					</div>
					<div class="mb-16" id="block-14">
						<h2>14.	Venue and Jurisdiction</h2>
						<p>The Services offered by Snippit Pty Ltd is intended to be viewed by residents of Australia. In the event of any dispute arising out of or in relation to the Website, you agree that the exclusive venue for resolving any dispute shall be in the courts of Victoria, Australia.</p>
					</div>
					<div class="mb-16" id="block-15">
						<h2>15.	Governing Law</h2>
						<p>The Terms are governed by the laws of Victoria, Australia. Any dispute, controversy, proceeding or claim of whatever nature arising out of or in any way relating to the Terms and the rights created hereby shall be governed, interpreted and construed by, under and pursuant to the laws of Victoria, Australia, without reference to conflict of law principles, notwithstanding mandatory rules. The validity of this governing law clause is not contested. The Terms shall be binding to the benefit of the parties hereto and their successors and assigns.</p>
					</div>
					<div class="mb-16" id="block-16">
						<h2>16.	Independent Legal Advice</h2>
						<p>Both parties confirm and declare that the provisions of the Terms are fair and reasonable and both parties having taken the opportunity to obtain independent legal advice and declare the Terms are not against public policy on the grounds of inequality or bargaining power or general grounds of restraint of trade.</p>
					</div>
					<div class="mb-16" id="block-17">
						<h2>17.	Severance</h2>
						<p>If any part of these Terms is found to be void or unenforceable by a Court of competent jurisdiction, that part shall be severed and the rest of the Terms shall remain in force.</p>
					</div> -->

				</div>
			</div>
		</div>
		<script>
			document.addEventListener("DOMContentLoaded", function(){
				ifExists(".main", ()=>{
					let list = document.querySelector(".sidebar ul");
					let main = document.querySelector(".main");

					let addToList = (text, link) => {
						let li = document.createElement("li");
						let a = document.createElement("a");
						a.href = link;
						a.innerText = text;
						li.append(a)
						list.append(li)
					}
					
					Array.from(document.querySelectorAll(".main div[id]")).map((f) => {
						addToList(f.querySelector("h2").innerHTML, "#" + f.id)
					})

					smoothScrollTo(".sidebar a");

					gsap.timeline({
						scrollTrigger: {
							trigger: ".sidebar",
							pin: true,
							//markers: true,
							start: () => "top +=100",
							end: () => "+=" + (main.offsetHeight - list.offsetHeight),	
							toggleActions: "play none reverse none",
							invalidateOnRefresh: true,
						}
					});

				})
			})
			
		</script>
<?php 
		endwhile;
	endif;
get_footer(); 

?>