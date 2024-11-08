<div class="control-box">
	<fieldset>
		<legend><?php echo sprintf( esc_html( $description ), $desc_link ); ?></legend>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><?php echo esc_html( __( 'Field type', 'contact-form-7' ) ); ?></th>
					<td>
						<fieldset>
							<legend class="screen-reader-text"><?php echo esc_html( __( 'Field type', 'contact-form-7' ) ); ?></legend>
							<label><input type="checkbox" name="required" /> <?php echo esc_html( __( 'Required field', 'contact-form-7' ) ); ?></label>
						</fieldset>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-name' ); ?>"><?php echo esc_html( __( 'Name', 'contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="name" class="tg-name oneline" id="<?php echo esc_attr( $args['content'] . '-name' ); ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-limit' ); ?>"><?php echo esc_html( __( "File size limit (bytes)", 'contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="limit" class="filesize oneline option" id="<?php echo esc_attr( $args['content'] . '-limit' ); ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-filetypes' ); ?>"><?php echo esc_html( __( 'Acceptable file types', 'contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="filetypes" class="filetype oneline option" placeholder="jpeg|png|jpg|gif" id="<?php echo esc_attr( $args['content'] . '-filetypes' ); ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-blacklist-types' ); ?>"><?php echo esc_html( __( 'Blacklist file types', 'contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="blacklist-types" class="filetype oneline option" placeholder="exe|bat|com" id="<?php echo esc_attr( $args['content'] . '-blacklist-types' ); ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-min-file' ); ?>"><?php echo esc_html( __( 'Minimum file upload', 'contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="min-file" class="filetype oneline option" placeholder="5" id="<?php echo esc_attr( $args['content'] . '-min-file' ); ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-max-file' ); ?>"><?php echo esc_html( __( 'Max file upload', 'contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="max-file" class="filetype oneline option" placeholder="10" id="<?php echo esc_attr( $args['content'] . '-max-file' ); ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-id' ); ?>"><?php echo esc_html( __( 'Id attribute', 'contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="id" class="idvalue oneline option" id="<?php echo esc_attr( $args['content'] . '-id' ); ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-class' ); ?>"><?php echo esc_html( __( 'Class attribute', 'contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="class" class="classvalue oneline option" id="<?php echo esc_attr( $args['content'] . '-class' ); ?>" /></td>
				</tr>
			</tbody>
		</table>
	</fieldset>
</div>

<div class="insert-box">
	<input type="text" name="<?php echo $type; ?>" class="tag code" readonly="readonly" onfocus="this.select()" />
	<div class="submitbox">
		<input type="button" class="button button-primary insert-tag" value="<?php echo esc_attr( __( 'Insert Tag', 'contact-form-7' ) ); ?>" />
	</div>
	<br class="clear" />
	<p class="description mail-tag">
		<label for="<?php echo esc_attr( $args['content'] . '-mailtag' ); ?>"><?php echo sprintf( esc_html( __( "To attach the file uploaded through this field to mail, you need to insert the corresponding mail-tag (%s) into the File Attachments field on the Mail tab.", 'contact-form-7' ) ), '<strong><span class="mail-tag"></span></strong>' ); ?><input type="text" class="mail-tag code hidden" readonly="readonly" id="<?php echo esc_attr( $args['content'] . '-mailtag' ); ?>" /></label>
	</p>
</div>