<header class="description-box">
	<h3>
		<?php echo esc_html( $field_types['mfile']['heading'] ); ?>
	</h3>
	<p>
		<?php
			echo wp_kses(
				$field_types['mfile']['description'],
				array(
					'a' => array( 'href' => true ),
					'strong' => array(),
				),
				array( 'http', 'https' )
			);
		?>
	</p>
</header>

<style>
	.control-box.dnd-file-upload legend { float: left; width: 160px; }
	.control-box.dnd-file-upload fieldset { margin-block: 4px!important; }
</style>

<div class="control-box dnd-file-upload">

	<?php
		$tgg->print( 'field_type', array(
			'with_required' => true,
			'select_options' => array(
				'mfile' => $field_types['mfile']['display_name'],
			),
		) );

		// Fieldname
		$tgg->print( 'field_name' );
	?>

	<fieldset>
		<legend id="<?php echo esc_attr( $tgg->ref( 'limit-option-legend' ) ); ?>">
			<?php
				esc_html_e( 'File size limit (bytes)', 'drag-and-drop-multiple-file-upload-contact-form-7' );
			?>
		</legend>
		<label>
			<?php
				echo sprintf(
					'<input %s />',
					wpcf7_format_atts( array(
						'type' => 'text',
						'data-tag-part' => 'option',
						'data-tag-option' => 'limit:',
						'placeholder' => 10485760
					) )
				);
			?>
		</label>
	</fieldset>

	<fieldset>
		<legend id="<?php echo esc_attr( $tgg->ref( 'filetypes-option-legend' ) ); ?>">
			<?php
				esc_html_e( 'Acceptable file types', 'drag-and-drop-multiple-file-upload-contact-form-7' );
			?>
		</legend>
		<label>
			<?php
				echo sprintf(
					'<input %s />',
					wpcf7_format_atts( array(
						'type' => 'text',
						'data-tag-part' => 'option',
						'data-tag-option' => 'filetypes:',
						'placeholder' => 'jpeg|png|jpg|gif',
					) )
				);
			?>
		</label>
	</fieldset>

	<fieldset>
		<legend id="<?php echo esc_attr( $tgg->ref( 'blacklist-types-option-legend' ) ); ?>">
			<?php
				esc_html_e( 'Blacklist file types', 'drag-and-drop-multiple-file-upload-contact-form-7' );
			?>
		</legend>
		<label>
			<?php
				echo sprintf(
					'<input %s />',
					wpcf7_format_atts( array(
						'type' => 'text',
						'data-tag-part' => 'option',
						'data-tag-option' => 'blacklist-types:',
						'placeholder' => 'exe|bat|com',
					) )
				);
			?>
		</label>
	</fieldset>

	<fieldset>
		<legend id="<?php echo esc_attr( $tgg->ref( 'min-file-option-legend' ) ); ?>">
			<?php
				esc_html_e( 'Minimum File Upload', 'drag-and-drop-multiple-file-upload-contact-form-7' );
			?>
		</legend>
		<label>
			<?php
				echo sprintf(
					'<input %s />',
					wpcf7_format_atts( array(
						'type' => 'text',
						'data-tag-part' => 'option',
						'data-tag-option' => 'min-file:',
						'placeholder' => 5
					) )
				);
			?>
		</label>
	</fieldset>

	<fieldset>
		<legend id="<?php echo esc_attr( $tgg->ref( 'max-file-option-legend' ) ); ?>">
			<?php
				esc_html_e( 'Minimum File Upload', 'drag-and-drop-multiple-file-upload-contact-form-7' );
			?>
		</legend>
		<label>
			<?php
				echo sprintf(
					'<input %s />',
					wpcf7_format_atts( array(
						'type' => 'text',
						'data-tag-part' => 'option',
						'data-tag-option' => 'max-file:',
						'placeholder' => 10
					) )
				);
			?>
		</label>
	</fieldset>

	<?php
		// Class Name
		$tgg->print( 'class_attr' );

		// ID name
		$tgg->print( 'id_attr' );
	?>

</div>

<footer class="insert-box">
	<?php
		$tgg->print( 'insert_box_content' );
	?>
</footer>