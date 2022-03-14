<link rel="stylesheet" type="text/css" href="<?php print module_path(); ?>/assets/css/list.css" />


<h1 class="list-header">OCDLA Criminal Appellate Review Summaries</h1>



<div class="car-container">
	<?php component('SearchWidget'); ?>
</div>

<div class="car-container">
	<?php component('MessageWidget'); ?>
</div>


<div id="search-meta">
    <div id="search-query">Query: <?php print $query; ?></div>
	<div id="search-count">Showing <?php print $count; ?> results.</div>
</div>


<?php if($results): ?>
	<div id="car-list-container" class="list-container">

		<?php print $list; ?>

	</div> <!-- end list container -->

<?php else: ?>
	<div id="car-list-container" class="list-container">

		Your search returned no results.

	</div> <!-- end list container -->
<?php endif; ?>



<script src="<?php print module_path(); ?>/assets/js/admin.js">
</script>


