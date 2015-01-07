
		<?php do_action( 'wpmoly_before_metabox_content' ); ?>
		<input type="hidden" id="wpmoly-autocomplete-collection" value="<?php echo wpmoly_o( 'collection-autocomplete' ); ?>" />
		<input type="hidden" id="wpmoly-autocomplete-genre" value="<?php echo wpmoly_o( 'genre-autocomplete' ); ?>" />
		<input type="hidden" id="wpmoly-autocomplete-actor" value="<?php echo wpmoly_o( 'actor-autocomplete' ); ?>" />

		<div id="wpmoly-meta" class="wpmoly-meta">

			<div id="wpmoly-meta-status" class="active">
				<div id="wpmoly-meta-status-loader"><img src="<?php echo WPMOLY_URL . '/assets/img/grid_o.svg'; ?>" data-on="<?php echo WPMOLY_URL . '/assets/img/grid.svg'; ?>" data-off="<?php echo WPMOLY_URL . '/assets/img/grid_o.svg'; ?>" width="16" alt="" /></div>
				<div id="wpmoly-meta-status-content">WPMovieLibrary: ready!</div>
			</div>

			<div id="wpmoly-meta-menu-bg"></div>
			<ul id="wpmoly-meta-menu" class="hide-if-no-js">

<?php foreach ( $tabs as $id => $tab ) : ?>

				<li id="wpmoly-meta-<?php echo $id ?>" class="tab<?php echo $tab['active'] ?>"><a href="#wpmoly-meta-<?php echo $id ?>-panel"><span class="<?php echo $tab['icon'] ?>"></span>&nbsp; <span class="text"><?php echo $tab['title'] ?></span></a></li>
<?php endforeach; ?>
				<li class="tab off hide-if-no-js"><a href="#"><span class="wpmolicon icon-collapse"></span>&nbsp; <span class="text"><?php _e( 'Collapse', 'wpmovielibrary' ) ?></span></a></li>
			</ul>

			<div id="wpmoly-meta-panels">

				<?php do_action( 'wpmoly_before_metabox_panels' ); ?>

<?php foreach ( $panels as $id => $panel ) : ?>

				<div id="wpmoly-meta-<?php echo $id ?>-panel" class="panel<?php echo $panel['active'] ?> hide-if-js"><?php echo $panel['content'] ?></div>
<?php endforeach; ?>

				<?php do_action( 'wpmoly_after_metabox_panels' ); ?>
			</div>
			<div style="clear:both"></div>

		</div>

		<?php do_action( 'wpmoly_after_metabox_content' ); ?>
