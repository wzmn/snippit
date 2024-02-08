<?php 

	/* Template Name: Blogs Page */ 
	get_header();
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
 	<style>
		.banner-text-container {
			/* transform: translateX(-50%);
			left: 50%; */
		}
		.banner-text {
			height: 100%;
			max-width: 630px;
			width: 100%;
		}
		.top-div-bg {
			background-image: none;
		}
		@media (min-width: 1200px) {
			.top-div-bg {
				background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
			}
		}
		.loader svg {
			width: 20px;
			height: 20px;
			fill: white;
			opacity: 0;
		}

		.loader {
			position: absolute;
			width: 60px;
			background: #0a84ff;
			height: 100%;
			top: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			left: calc(50% + 30px);
		}

		.loader.active svg {
			animation: loader 8s infinite;
			opacity: 1;
		}

		@keyframes loader {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(1440deg);
			}
		}
		.has-error .error-message div {
			color: red;
			margin-bottom: 0.5rem;
		}
		.messages{

		}
		[type="submit"] {
			cursor: pointer;
		}

		ul.country-list>li {
			transition: all 0.5s ease;
			padding: 0;
			height: 52px;
			padding-left: 0.5rem;
		}

		ul.country-list>li span {
			transition: all 0.5s ease;

		}

		ul.country-list>li.active {
			background: #012D5E;
			color: white;
			padding-left: 1px;
		}

		ul.country-list>li.active span {
			background: white;
			color: #012D5E;
			padding: calc(1rem - 1px);
		}
		.required-field{
			color: red;
		}
	</style>

	<div class="relative z-10 modal hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
		<div class="fixed inset-0 bg-[#b5b5b5] bg-opacity-75 transition-opacity"></div>

		<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
			<div class="flex min-h-[100%] items-end justify-center p-4 text-center sm:items-center sm:p-0">				
				<div
					class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
					<div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
						<div class="sm:flex sm:items-start flex-col">
							<label for="country-search" class="border border-[#d4d4d8] mb-2 w-full flex">
								<input type="text" id="country-search" placeholder="Search" class="py-2 w-full px-1" />
								<span class="bg-blue flex items-center px-4 text-white cursor-pointer clear-country-search">
									<i class="fa fa-times"></i>
								</span>
							</label>
							<ul role="list" class="country-list overflow-y-scroll gap-y-2 max-h-[200px] w-full"></ul>
						</div>
					</div>
					<div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
						<button type="button"
							class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-blue shadow-sm sm:ml-3 sm:w-auto border border-[#d4d4d8]">Confirm</button>
						<button type="button" data-action="close"
							class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 sm:mt-0 sm:w-auto shadow-sm ring-1 ring-inset">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!--div class="truncate whitespace-normal mx-auto h-[800px] bg-contain bg-no-repeat bg-top bg-[#f1f8fe] relative top-div-bg" style="">
		<?php if (get_the_content()) : ?>
			<div class="absolute banner-text-container container h-full">
				<div class="flex flex-wrap flex-col justify-evenly pl-20 pr-4 banner-text mt-4 md:-mt-8">
					
					<?php the_content();?>
				</div>
			</div>
		<?php endif;?>
		</div-->

		<div class="truncate whitespace-normal mx-auto min-h-[300px] bg-contain bg-no-repeat bg-right-top bg-[#f1f8fe] top-div-bg" style="">
		<!--Offer Form Start-->
		<div class="flex flex-col justify-end pr-10 pl-20 panel-text max-w-[40rem]">
			<div class="font-semibold text-2xl mb-2 mt-8">Let's get Started</div>
			<div class="text-lg mb-5">Enter Your Details for Our <br> Expert Team to Contact You!</div>
			<div>
				<form autocomplete="on" id="offers">
					<div class="font-semibold text-sm mb-1">Do You have Gas Ducted Heating & Cooling System</div>
					<div class="flex mb-4">
						<label class="flex items-center mb-2 py-1 mr-5 text-sm" for="yes_hcs">
							<input type="radio" class="mr-2" id="yes_hcs" value="yes_hcs" name="hcs"
								checked>
							<span>Yes</span>
						</label>
						<label class="flex items-center mb-2 py-1 text-sm" for="no_hcs">
							<input type="radio" class="mr-2" id="no_hcs" value="no_hcs"
								name="hcs">
							<span>No</span>
						</label>
					</div>
					<div class="font-semibold text-sm mb-1">Do You have Gas Hot Water Systems</div>
					<div class="flex mb-4">
						<label class="flex items-center mb-2 py-1 mr-5 text-sm" for="yes_hws">
							<input type="radio" class="mr-2" id="yes_hws" value="yes_hws" name="hws"
								checked>
							<span>Yes</span>
						</label>
						<label class="flex items-center mb-2 py-1 text-sm" for="no_hws">
							<input type="radio" class="mr-2" id="no_hws" value="no_hws"
								name="hws">
							<span>No</span>
						</label>
					</div>
					<div class="mb-4">
						<label class="mb-2" for="no_of_bedrooms">
							<div class="mb-2 font-semibold text-sm">No. of Bedrooms<span class="required-field">*</span></div>
							<input class="border-shadow mb-2 p-2 w-full" type="number" name="no_of_bedrooms" required>
						</label>
					</div>
					<div class="mb-4">
						<label class="mb-2" for="no_of_members">
							<div class="mb-2 font-semibold text-sm">No. of Family Members<span class="required-field">*</span></div>
							<input class="border-shadow mb-2 p-2 w-full" type="number" name="no_of_members" required>
						</label>
					</div>
					<div class="mb-4">
						<label class="mb-2" for="full_name">
							<div class="mb-2 font-semibold text-sm">Full Name<span class="required-field">*</span></div>
							<input class="border-shadow mb-2 p-2 w-full" type="text" name="full_name" required>
						</label>
					</div>
					<div class="flex flex-col gap-x-4 mb-4 email-block">
						<div class="emailOTPSpace">
							<label class="mb-2 w-3/5" for="email">
								<div class="mb-2 font-semibold text-sm">Email ID<span class="required-field">*</span></div>
								<div class="flex">
									<input class="border-shadow mb-2 p-2 w-full" type="email" name="email" required />
									<a
										class="bg-blue flex items-center cursor-pointer text-white mb-2 px-4 shrink-0 mr-1 edit-otp-email disabled-link">Edit
										Email</a>
									<a
										class="bg-blue flex items-center cursor-pointer text-white mb-2 px-4 shrink-0 otp-email">Get
										OTP</a>
								</div>
							</label>
						</div>
						<div class="emailValidateOTPSpace">
							<label class="mb-2 w-2/5" for="OTP-Email">
								<div class="mb-2 font-semibold text-sm">Enter Email OTP</div>
								<div class="flex justify-between mb-2 otp-container">
									<input required id="OTP-Email"
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<a class="bg-blue flex items-center cursor-pointer text-white px-4 shrink-0 validate-email-otp">Validate Email OTP</a>
								</div>
								<div class="resend-email text-center">
									<span class="remaining-time text-blue font-semibold cursor-pointer"></span>
								</div>
							</label>
						</div>
					</div>					
					<div class="flex flex-col gap-x-4 mb-4 phone-block">
						<div class="mobileOTPSpace">
							<label class="mb-2 w-3/5" for="phone">
								<div class="mb-2 font-semibold text-sm">Mobile Number<span class="required-field">*</span></div>
								<div class="flex">
									<span title="Click to change"
										class="cursor-pointer border-shadow mb-2 p-2 bg-white border-r-2 border-[#d6e9fb] country-code">+</span>
									<input class="border-shadow mb-2 p-2 w-full" type="number" id="phone"
										name="phone" required />
									<a
										class="bg-blue flex items-center cursor-pointer text-white mb-2 px-4 shrink-0 mr-1 edit-otp-number disabled-link">Edit
										Mobile</a>
									<a
										class="bg-blue flex items-center cursor-pointer text-white mb-2 px-4 shrink-0 otp-number">Get
										OTP</a>
								</div>
							</label>
						</div>
						<div class="mobileValidateOTPSpace">
							<label class="mb-2 w-2/5" for="OTP-Mobile">
								<div class="mb-2 font-semibold text-sm">Enter Mobile OTP</div>
								<div class="flex justify-between mb-2 otp-container">
									<input required id="OTP-Mobile"
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<input required
										class="w-[30px] p-2 bg-[#cddded] text-center focus:outline-none focus:ring"
										type="text" inputmode="numeric" maxlength="1" />
									<a class="bg-blue flex items-center cursor-pointer text-white px-4 shrink-0 validate-phone-otp">Validate Mobile OTP</a>
								</div>
								<div class="resend-mobile text-center">
									<span class="remaining-time text-blue font-semibold cursor-pointer"></span>
								</div>
							</label>
						</div>
					</div>
					<div class="mb-4">
						<label class="mb-2" for="street">
							<div class="mb-2 font-semibold text-sm">Street<span class="required-field">*</span></div>
							<input class="border-shadow mb-2 p-2 w-full" type="text" name="street" required>
						</label>
					</div>
					<div class="mb-4">
						<label class="mb-2" for="city">
							<div class="mb-2 font-semibold text-sm">City<span class="required-field">*</span></div>
							<input class="border-shadow mb-2 p-2 w-full" type="text" name="city" required>
						</label>
					</div>
					<div class="mb-4">
						<label class="mb-2" for="state">
							<div class="mb-2 font-semibold text-sm">State<span class="required-field">*</span></div>
							<input class="border-shadow mb-2 p-2 w-full" type="text" name="state" required>
						</label>
					</div>
					<div class="mb-4">
						<label class="mb-2" for="postcode">
							<div class="mb-2 font-semibold text-sm">Postcode<span class="required-field">*</span></div>
							<input class="border-shadow mb-2 p-2 w-full" type="number" name="postcode" required>
						</label>
					</div>
					<div class="relative">
						<input class="bg-blue p-2 text-white w-full rounded-[0.375rem]" type="submit"
							value="Submit">
						<div class="loader">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<path
									d="M304 48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zm0 416c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zM48 304c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm464-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zM142.9 437c18.7-18.7 18.7-49.1 0-67.9s-49.1-18.7-67.9 0s-18.7 49.1 0 67.9s49.1 18.7 67.9 0zm0-294.2c18.7-18.7 18.7-49.1 0-67.9S93.7 56.2 75 75s-18.7 49.1 0 67.9s49.1 18.7 67.9 0zM369.1 437c18.7 18.7 49.1 18.7 67.9 0s18.7-49.1 0-67.9s-49.1-18.7-67.9 0s-18.7 49.1 0 67.9z" />
							</svg>
						</div>
					</div>
					<div class="error-message text-center py-4">
						<div class="messages"></div>
					</div>
				</form>
			</div>
		</div>
		<!--Offer Form End-->
		</div>
		<div class="grid grid-cols-3 gap-4 bg-gradient p-6 text-center text-white font-bold rounded-br-curve  md:mb-40 mb-20">
		
		</div>
		<style>
			a.more-link {
				margin-top: 10px;
				display: flex;
				color: #0a84ff;
				font-weight: 400;
			}
			.font-red {
				color: red;
			}
			a.disabled-link {
				pointer-events: none;
				cursor: default;
			}
		</style>
		<div class="container mx-auto px-5 mb-20">
			<div class="grid lg:grid-cols-2 grid-cols-1 gap-12">
				
			<?php
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				// The Query
				$the_query = new WP_Query(  array( 'post_type' => 'post', 'posts_per_page' => -1, 'paged' => $paged ) );

				// The Loop
				if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); 
			?>
				<div class="shadow flex">
					<div class="flex flex-col md:flex-row-reverse items-center justify-between w-full">
						<?php if (get_the_post_thumbnail_url()) :?>
						<div class="image min-w-[250px] max-w-[250px] mb-5 md:mb-0">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						</div>
						<?php endif;?>
						<div class="content h-full px-8 py-4">
							<a href="<?php echo get_the_permalink();?>" class="text-2xl mb-2"><?php echo get_the_title();?></a>	
							<p class="font-light">
								<?php echo get_the_excerpt();?>
							</p>
							
						</div>
					</div>
				</div>
			<?php } } 
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			</div>
		</div>

		<script>
                    
                document.addEventListener("DOMContentLoaded", function() {
                    const formState = {
                        otpApi: 'https://prod-eks.snippit.com.au/api/core/otp',
                        otpVerifyApi: 'https://prod-eks.snippit.com.au/api/core/otp/verify-otp',
						offersApi: '',
                        emailOtpSent: !1,
                        mobileOtpSent: !1,
                        resendCount: 3,
                        selectedCountry: "",
                        selectedCountryName: "",
                        emailOtp: !1,
                        mobileOtp: !1,
						emailOtpValidated: !1,
						mobileOtpValidated: !1
                    };

                    function createLi(data, key) {
                        let li = document.createElement("li");
                        let span = document.createElement("span");
                        li.setAttribute('data-key', key);
                        li.setAttribute('data-value', data.name);
                        li.classList.value = "flex py-2 px-2 gap-x-2 items-center cursor-pointer shadow-sm ring-1 ring-inset";
                        span.classList.value = "bg-[#012D5E] text-white p-2 text-sm";
                        span.innerText = data.mobileCode;
                        li.addEventListener("click", b => {
                            b.target.classList.toggle("active")
                            document.querySelector('ul.country-list').dispatchEvent(new CustomEvent("ccselect", {
                                detail: {
                                    selected: key
                                }
                            }));
                        })
                        li.appendChild(span);
                        li.appendChild(document.createTextNode(data.name));
                        return li;
                    }
                    document.querySelector('ul.country-list').addEventListener('ccselect', c => {
                        document.querySelectorAll(`ul.country-list li:not([data-key="${c.detail.selected}"])`).forEach(
                            g => {
                                g.classList.remove("active")
                            })
                    })
                    COUNTRIES.map((s, i) => {
                        document.querySelector('ul.country-list').appendChild(createLi(s, i))
                    })
                    new debounce("#country-search", value => {
                        document.querySelectorAll("ul.country-list>li").forEach(f => {
                            if (f.getAttribute('data-value').toLowerCase().indexOf(value.toLowerCase()) < 0) {
                                f.classList.add('hidden')
                            } else {
                                f.classList.remove('hidden')
                            }
                        })
                    })
                    document.querySelector('.country-code').addEventListener("click", x => document.querySelector('.modal')
                        .classList.remove('hidden'))
                    document.querySelector('.clear-country-search').addEventListener("click", s => {
                        document.querySelector('#country-search').value = ""
                        document.querySelectorAll("ul.country-list>li").forEach(f => {
                            f.classList.remove('hidden')
                        })
                    })	
                    document.querySelectorAll(".modal button").forEach(d => {
                        d.addEventListener("click", c => {
                            if (c.target.dataset.action !== 'close') {
                                formState.selectedCountry = document.querySelector(
                                    "ul.country-list>.active span").innerText;

                                formState.selectedCountryName = document.querySelector(
                                    "ul.country-list>.active").dataset.value;

                                document.querySelector('.country-code').innerText = document.querySelector(
                                    "ul.country-list>.active span").innerText;
                            }
                            document.querySelector('.modal').classList.add('hidden')
                        })
                    })

                    document.querySelectorAll(".otp-container").forEach(s => {
                        s.querySelectorAll("input").forEach((x, k) => {
                                x.addEventListener("keydown", o => {
                                    o.preventDefault();
                                    if (o.key >= 0){
                                        o.target.value = o.key;
                                        if (o.target.nextElementSibling){
                                            o.target.nextElementSibling.focus()
                                        }
                                    }
                                    let key = o.keyCode || o.charCode;
                                    if( key == 8 || key == 46 ) {
                                        o.target.value = "";
                                        if (o.target.previousElementSibling) {
                                            o.target.previousElementSibling.focus();
                                        }
                                    }
                                })
                        })
                    })

                    function resendTimerMail() {
                        window.emailIntervalCount = 30;

                        function onClick() {
                            this.removeEventListener('click', onClick);
                            resendTimerMail();
                            //resend otp mail
                            sendOTP({
                                username: document.querySelector('input[name="company_owner.email"]').value
                            }).then(s => {
                                formState.emailOtpSent = true;
                                addFormError(1,
                                `OTP has been sent to ${document.querySelector('input[name="company_owner.email"]').value}`);
                            })
                        }
						console.log("email interval cnt: "+window.emailIntervalCount);
						clearInterval(window.emailInterval);
                        window.emailInterval = setInterval(() => {
                            if (window.emailIntervalCount == 0) {
                                clearInterval(window.emailInterval)
                                document.querySelector(".resend-email > span").innerText = "";
                                document.querySelector(".resend-email > span").addEventListener('click', onClick);
                                document.querySelector('.otp-email').removeAttribute("disabled");
                                // formState.emailOtpSent = false;
                            } else {
                                let secs = window.emailIntervalCount.toString().padStart(2, '0')
                                document.querySelector(".resend-email > span").innerText = `0:${secs}`;
                            }
                            window.emailIntervalCount--
                        }, 1000);
                    }

                    async function sendOTP(payload){
                        return await fetch(formState.otpApi, {
                            method: "POST",
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(payload),
                        })
                    }
					async function validateOTP(payload){
                        return await fetch(formState.otpVerifyApi, {
                            method: "POST",
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(payload),
                        })
                    }

					let error_message = document.forms.offers.querySelector(".error-message>.messages");
					function sendMail() {console.log("Send Email");
						let form = event.target;
                        let loader = form.querySelector(".loader");
						var params = {
							gdhcs: document.querySelector('input[name="hcs"]:checked').value,
							ghws: document.querySelector('input[name="hws"]:checked').value,
							no_of_bedrooms: document.querySelector('input[name="no_of_bedrooms"]').value,
							no_of_family_members: document.querySelector('input[name="no_of_members"]').value,
							fullname: document.querySelector('input[name="full_name"]').value,
							email: document.querySelector('input[name="email"]').value,
							mobile: document.querySelector('input[name="phone"]').value,
							street: document.querySelector('input[name="street"]').value,
							city: document.querySelector('input[name="city"]').value,
							state: document.querySelector('input[name="state"]').value,
							postcode: document.querySelector('input[name="postcode"]').value,
						};

						const serviceID = "service_sd5zxx4";
						const templateID = "template_0b9e467";
						emailjs.send(serviceID,templateID,params)
						.then(
							res =>{
								console.log(res);
								loader.classList.toggle("active")
								error_message.querySelectorAll("div").forEach(s => s.remove())
								if(res.status == 200){									
									form.classList.remove("has-error");
                                    addFormError(1, "Form submitted sucessfully.");
                                    form.reset();
									document.querySelector('input[name="email"]').removeAttribute("readonly");
									document.querySelector('input[name="phone"]').removeAttribute("readonly");
									document.querySelectorAll(".emailotpMsgBlock").forEach(s => s.remove());
									document.querySelectorAll(".validateemailotpMsgBlock").forEach(s => s.remove());
									document.querySelectorAll(".phoneotpMsgBlock").forEach(s => s.remove());
									document.querySelectorAll(".validatephoneotpMsgBlock").forEach(s => s.remove());
									document.querySelector('.otp-email').classList.remove("disabled-link");
									document.querySelector(".edit-otp-email").classList.add("disabled-link");
									document.querySelector('.otp-number').classList.remove("disabled-link");
									document.querySelector(".edit-otp-number").classList.add("disabled-link");
								} else {
									form.classList.add("has-error")
                                    addFormError(999, 'An error has occured, please check the fields and try again'
                                    );
								}								
							}
						)
						.catch((err) => {
							console.log(err)
							form.classList.add("has-error")
                            addFormError(999, 'An error has occured, please check the fields and try again');
						});
					}

                    function resendTimerMobile() {
                        window.mobileIntervalCount = 30;

                        function onClick() {
                            this.removeEventListener('click', onClick);
                            resendTimerMobile();
                            //resend otp mobile
                            sendOTP({
                                username: formState.selectedCountry + document.querySelector('input[name="phone"]').value
                            }).then(s => {
                                formState.mobileOtpSent = true;
                                addFormError(1,
                                    `OTP has been re-sent to ${formState.selectedCountry} ${document.querySelector('input[name="phone"]').value}`
                                );
                            })
                        }
						clearInterval(window.mobileInterval);
                        window.mobileInterval = setInterval(() => {
                            if (window.mobileIntervalCount == 0) {
                                clearInterval(window.mobileInterval)
                                document.querySelector(".resend-mobile > span").innerText = "";
                                document.querySelector(".resend-mobile > span").addEventListener('click', onClick);
                                document.querySelector('.otp-number').removeAttribute("disabled");
                                // formState.mobileOtpSent = false;
                            } else {
                                let secs = window.mobileIntervalCount.toString().padStart(2, '0')
                                document.querySelector(".resend-mobile > span").innerText = `0:${secs}`;
                            }
                            window.mobileIntervalCount--
                        }, 1000);
                    }

					//Enable Email Edit
					document.querySelector(".edit-otp-email").addEventListener("click", (s) => {console.log("Edit Email OTP");
						// console.log("here");
						
						document.querySelector('input[name="email"]').removeAttribute("readonly");
						document.querySelector(".otp-email").classList.remove("disabled-link");
						document.querySelector(".validate-email-otp").classList.remove("disabled-link");
						document.querySelectorAll(".emailotpMsgBlock").forEach(s => s.remove());
						document.querySelectorAll(".validateemailotpMsgBlock").forEach(s => s.remove());
						s.target.classList.add("disabled-link");
						formState.emailOtpSent = false;
						formState.emailOtp = false;
						formState.emailOtpValidated = false;
						document.querySelectorAll('[for="OTP-Email"] input').forEach(k => {
							k.value = "";
						})
					// 	document.querySelectorAll('[for="OTP-Email"] input').forEach(k => {
					// 	   formState.emailOtp += k.value;
					//    })
					});
					//Enable Phone Edit
					document.querySelector(".edit-otp-number").addEventListener("click", (s) => {console.log("Edit Phone OTP");
						document.querySelector('input[name="phone"]').removeAttribute("readonly");
						document.querySelector(".otp-number").classList.remove("disabled-link");
						document.querySelector(".validate-phone-otp").classList.remove("disabled-link");
						document.querySelectorAll(".phoneotpMsgBlock").forEach(s => s.remove());
						document.querySelectorAll(".validatephoneotpMsgBlock").forEach(s => s.remove());
						s.target.classList.add("disabled-link");
						formState.mobileOtpSent = false;
						formState.mobileOtp = false;
						formState.mobileOtpValidated = false;
						document.querySelectorAll('[for="OTP-Mobile"] input').forEach(k => {
							k.value = "";
						})
					});

                    document.querySelector(".otp-email").addEventListener("click", (s) => {console.log("Generate Email OTP");
                        // if (formState?.emailOtpSent) {
                        //     return;
                        // }
						console.log("generate email otp");
                        if (document.querySelector('input[name="email"]').reportValidity()) {
                            // send otp
                            s.target.setAttribute("disabled", true);
							s.target.classList.add("disabled-link");
							document.querySelector(".edit-otp-email").classList.remove("disabled-link");
							document.querySelector('input[name="email"]').readOnly = true;
							error_message.querySelectorAll("div").forEach(s => s.remove());
                            sendOTP({
                                username: document.querySelector('input[name="email"]').value
                            }).then(s => {
                                formState.emailOtpSent = true;
                                resendTimerMail();
                                // addFormError(1, `OTP has been sent to ${document.querySelector('input[name="email"]').value}`);
                                addEmailMessage(1, `OTP has been sent to ${document.querySelector('input[name="email"]').value}`, document.forms.offers.querySelector(".emailOTPSpace"), "emailotpMsgBlock");
								
                            }).catch(err => {
                                // addFormError(1,`There was an error sending email OTP, please contact support`);
								addEmailMessage(1, `There was an error sending email OTP, please contact support`, document.forms.offers.querySelector(".emailOTPSpace"), "emailotpMsgBlock");
                                console.log(err)
                            })
                        }
                    })

					document.querySelector(".validate-email-otp").addEventListener("click", (s) => {console.log("Validate Email OTP");
                       
					   formState.emailOtp = "";
					   document.querySelectorAll('[for="OTP-Email"] input').forEach(k => {
						   formState.emailOtp += k.value;
					   })
					   console.log(formState.emailOtp);
					   if (document.querySelector('input[name="email"]').reportValidity() && (!isNaN(formState.emailOtp) && formState.emailOtp.toString().length == 6)) {
						   // validate otp
						   // s.target.setAttribute("disabled", true);
						   s.target.classList.add("disabled-link");
						   validateOTP({
							   username: document.querySelector('input[name="email"]').value,
							   otp: formState.emailOtp
						   }).then(s => {
							   formState.emailOtpValidated = true;
							//    addFormError(1, `OTP for ${document.querySelector('input[name="email"]').value} has been validated successfully`);
							   addEmailMessage(1, `OTP for ${document.querySelector('input[name="email"]').value} has been validated successfully`, document.forms.offers.querySelector(".emailValidateOTPSpace"), "validateemailotpMsgBlock");
								
						   }).catch(err => {console.log("failure");
							//    addFormError(1,`There was an error validating email OTP, please contact support`);
							   addEmailMessage(1, `There was an error validating email OTP, please contact support`, document.forms.offers.querySelector(".emailValidateOTPSpace"), "validateemailotpMsgBlock");
							   console.log(err)
						   })
					   } else {
							let element = document.querySelector('input[id="OTP-Email"]');
							console.log('formState.emailOtp', formState.emailOtp);
							if (!formState.emailOtp) {
								element.setCustomValidity("Please Validate/Enter Email OTP");
								element.reportValidity()
								return;
							} else {
								element.setCustomValidity("");
							}
					   }
				   })

                    document.querySelector(".otp-number").addEventListener("click", (s) => {console.log("Generate Phone OTP");
                        let element = document.querySelector('input[name="phone"]');						
                        if (!formState.selectedCountry) {
                            element.setCustomValidity("Please Select a country code");
                            element.reportValidity()
                            return;
                        } else {
                            element.setCustomValidity("");
                        }
                        // if (formState?.mobileOtpSent) {
                        // 	return;
                        // }
                        if (element.reportValidity()) {
                            // send otp
                            s.target.setAttribute("disabled", true);
							element.readOnly = true;
							s.target.classList.add("disabled-link");
							document.querySelector(".edit-otp-number").classList.remove("disabled-link");
							document.querySelector('input[name="phone"]').readOnly = true;
							// error_message.querySelectorAll("div").forEach(s => s.remove());

                            sendOTP({
                                username: formState.selectedCountry + document.querySelector('input[name="phone"]').value
                            }).then(s => {
                                formState.mobileOtpSent = true;
                                resendTimerMobile();
                                // addFormError(1,
                                //     `OTP has been sent to ${formState.selectedCountry} ${document.querySelector('input[name="phone"]').value}`
                                // );
								addEmailMessage(1, `OTP has been sent to ${formState.selectedCountry} ${document.querySelector('input[name="phone"]').value}`, document.forms.offers.querySelector(".mobileOTPSpace"), "phoneotpMsgBlock");
                            }).catch(err => {
                                // addFormError(1,`There was an error sending mobile OTP, please contact support`);
								addEmailMessage(1, `There was an error sending mobile OTP, please contact support`, document.forms.offers.querySelector(".mobileOTPSpace"), "phoneotpMsgBlock");
                                console.log(err)
                            })
            
                        }
                    })

				   document.querySelector(".validate-phone-otp").addEventListener("click", (s) => {console.log("validate Phone OTP");                       
					   	formState.mobileOtp = "";
					   	document.querySelectorAll('[for="OTP-Mobile"] input').forEach(k => {
							formState.mobileOtp += k.value;
					   	})
                        let element = document.querySelector('input[name="phone"]');
                        
                        if (element.reportValidity() && (!isNaN(formState.mobileOtp) && formState.mobileOtp.toString().length == 6)) {
                            // validate otp
                            // s.target.setAttribute("disabled", true);
								s.target.classList.add("disabled-link");
								validateOTP({
								username: document.querySelector('input[name="phone"]').value,
								otp: formState.mobileOtp
							}).then(s => {
								formState.mobileOtpValidated = true;
								// addFormError(1,
								// `OTP for ${document.querySelector('input[name="phone"]').value} has been validated successfully`);
								addEmailMessage(1, `OTP for ${document.querySelector('input[name="phone"]').value} has been validated successfully`, document.forms.offers.querySelector(".mobileValidateOTPSpace"), "validatephoneotpMsgBlock");
							}).catch(err => {
								// addFormError(1,`There was an error validating phone OTP, please contact support`);
								addEmailMessage(1, `There was an error validating phone OTP, please contact support`, document.forms.offers.querySelector(".mobileValidateOTPSpace"), "validatephoneotpMsgBlock");
								console.log(err)
							})            
                        } else {
							let element = document.querySelector('input[id="OTP-Mobile"]');
							console.log('formState.mobileOtp', formState.mobileOtp);
							if (!formState.mobileOtp) {
								console.log('formState.mobileOtpp', formState.mobileOtp);
								element.setCustomValidity("Please Validate/Enter Mobile OTP");
								element.reportValidity()
								return;
							} else {
								element.setCustomValidity("");
							}
					   }
				   })

                    // let error_message = document.forms.offers.querySelector(".error-message>.messages");
				   
					function addEmailMessage(id, msg, parentEle, otpMsgBlock, fontcolor="text-black") {						
                        let html = document.createElement("div");
                        html.classList.add("font-light")
                        html.classList.add(fontcolor)
                        html.classList.add("mb-2")
                        html.classList.add(otpMsgBlock)
                        html.id = id;
                        html.innerHTML = msg;
                        parentEle.appendChild(html)
                    }

                    function addFormError(id, msg, fontcolor="text-black") {
                        let html = document.createElement("div");
                        html.classList.add("font-light")
                        html.classList.add(fontcolor)
                        html.classList.add("mb-2")
                        html.id = id;
                        html.innerHTML = msg;
                        error_message.appendChild(html)
                    }
                   
                    gsap.registerPlugin(ScrollTrigger);

                    document.forms.offers.addEventListener("submit", (event) => {console.log("final submit");
                        console.log(formState)
                        event.preventDefault();
						//
						// document.querySelectorAll(".emailotpMsgBlock").forEach(s => s.remove());
						// document.querySelectorAll(".validateemailotpMsgBlock").forEach(s => s.remove());
						// document.querySelectorAll(".phoneotpMsgBlock").forEach(s => s.remove());
						// document.querySelectorAll(".validatephoneotpMsgBlock").forEach(s => s.remove());
                        if (!formState.emailOtpSent || !formState.mobileOtpSent) {
                            addFormError(999, 'You need to enter the OTP sent to your mobile and email', "font-red");
                            return;
                        }
						if (!formState.emailOtpValidated || !formState.mobileOtpValidated) {
                            addFormError(999, 'You need to validate the OTP sent to your mobile and email', "font-red");
                            return;
                        }

                        let form = event.target;
                        let loader = form.querySelector(".loader");
                        // formState.emailOtp = "";
                        // formState.mobileOtp = "";
                        // document.querySelectorAll('[for="OTP-Email"] input').forEach(s => {
                        //     formState.emailOtp += s.value;
                        // })
                        // document.querySelectorAll('[for="OTP-Mobile"] input').forEach(s => {
                        //     formState.mobileOtp += s.value;
                        // })

                        let output = new FormData(form)
                        let payload = {
                            company_owner: {},
                            company_country: formState.selectedCountryName,
                            // email_otp: formState.emailOtp,
                            // mobile_otp: formState.mobileOtp,
                            company_mobile_phone: "",
                            company_landline: "",
                            company_name: "",
                            company_email: "",
                        };
                        // for (const [key, value] of output) {
                        //     let ownerObj = key.match(/(?:owner.)(.+)/);
                        //     let addressObj = key.match(/(?:address.)(.+)/);
                        //     let companyObj = key.match(/(?:company\.)(.+)/);
                        //     if (!!ownerObj) {
                        //         payload["company_owner"][`${ownerObj[1]}`] = value
                        //         continue;
                        //     }
                        //     if (!!addressObj) {
                        //         payload["address"][addressObj[1]] = value;
                        //         continue;
                        //     }
                        //     if (!!companyObj) {
                        //         payload["company"][companyObj[1]] = value;
                        //         continue;
                        //     }
                        //     payload[key] = value;
                        // }
                        // payload.company_owner.phone = formState.selectedCountry + payload.company_owner.phone
                        payload.phone = formState.selectedCountry + document.querySelector('input[name="phone"]').value
                        loader.classList.toggle("active")
						console.log(payload);
						sendMail();
                    })                 
                })
                </script>


<?php 
		endwhile;
	endif;
get_footer(); 

?>