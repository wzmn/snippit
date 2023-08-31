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
						a.classList.add("text-blue")
						li.append(a)
						list.append(li)
					}
					
					Array.from(document.querySelectorAll(".main div[id^='block']")).map((f) => {
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