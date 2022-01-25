<!-- Banner Intestazione -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="bg-light p-4 text-center rounded-3 shadow">

                <h1 class="m-0"><?php echo $templateParams["titolo-intestazione"]; ?></h1>

				<!-- Breadcrumb -->
				<div class="d-flex justify-content-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-dots mb-0">
							<li class="breadcrumb-item">
								<a href="index.php">Home</a>
							</li>
							<li class="breadcrumb-item active">
								<a href="<?php echo $templateParams["titolo-intestazione"];?>.php"><?php echo $templateParams["titolo-intestazione"]; ?></a>
							</li>
						</ol>
					</nav>
				</div>

			</div>
		</div>
	</div>
</div>
