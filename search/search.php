<?php include "../INC/header.php"; ?>
<div class="search-body">
	<div class="search-body-wrap">
		<div class="search-body-query">
			<div class="search-body-query-content">
				<div class="search-body-query-result">Search result for: <?=$_GET['query']?></div>
				<div class="search-body-query-sub"><a href="../main/index.php">Home</a> / Search result for:
					"<?=$_GET['query']?>"</div>
			</div>
		</div>
	</div>
	<div class="search-body-new">
		<div class="search-body-new-wrap">
			<h2 class="search-body-new-title">
				New Search:
			</h2>
			<div class="search-body-new-content">
				<form action="/search/search.php" method="get">
					<input style="font-size: 20px; line-height: 40px;" id="search-input" class="search-input"
						type="text" name="query" placeholder="Type Here" required />
					<button class="search-submit" type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
							y="0px" fill="#000" width="20px" height="20px" viewBox="0 0 17 17"
							enable-background="new 0 0 17 17" xml:space="preserve">
							<g>
								<path d="M15.422,16.707c-0.341,0-0.673-0.141-0.904-0.381l-3.444-3.434c-1.174,0.813-2.58,1.245-4.006,1.245
										C3.163,14.137,0,10.974,0,7.068S3.163,0,7.068,0s7.068,3.163,7.068,7.068c0,1.426-0.432,2.832-1.245,4.006l3.444,3.444
										c0.231,0.231,0.372,0.563,0.372,0.904C16.707,16.125,16.125,16.707,15.422,16.707z M7.068,2.57c-2.48,0-4.498,2.018-4.498,4.498
										s2.018,4.498,4.498,4.498s4.498-2.018,4.498-4.498S9.548,2.57,7.068,2.57z" />
							</g>
						</svg>
					</button>
				</form>
				<p style="font-weight: 100; margin-top: 20px;">If you are not happy with the results below please do another search.</p>
			</div>
		</div>
	</div>
	<div class="search-body-contain">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td valign="top" class="content">
					<table width="100%" style="max-width: 1300px; margin: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td class="border-n">
								<div class="search-request">Product </div>
								<?
									include "../admin/conf/conf_post1.php";
									include "./prolist.php";
								?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="top" class="content">
					<table width="100%" style="max-width: 1300px; margin: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td class="border-n">
								<div class="search-request">Portfolio </div>
								<? 
								include "../admin/conf/conf_post.php";
								include "./portfoliolist.php";
								?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="top" class="content">
					<table width="100%" style="max-width: 1300px; margin: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td class="border-n">
								<div class="search-request">Q & A </div>
								<? 
								include "../admin/conf/conf_board.php";
								include "./boardlist.php";
								?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>
<?php include "../INC/footer.php"; ?>