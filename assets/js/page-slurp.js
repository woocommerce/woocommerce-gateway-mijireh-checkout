/*global wc_mijireh_checkout_page_slurp, ajaxurl, Pusher */
(function ( $ ) {

	$( function () {

		$( '#page_slurp' ).on( 'click', function () {
			var page_id = $( this ).attr( 'rel' ),
				data    = {
					action: 'page_slurp',
					page_id: page_id
				};

			$( '#page_slurp' ).attr( 'disabled', 'disabled' );
			$( '#slurp_progress' ).show();
			$( '#slurp_progress_bar' ).html( wc_mijireh_checkout_page_slurp.starting_up );

			$.post( ajaxurl, data, function ( job_id ) {
				// The job id is the id for the page slurp job or 0 if the slurp failed
				if ( 'http' === job_id.substring( 0, 4 ) ) {
					var msg = wc_mijireh_checkout_page_slurp.wrong_php_config_message;
					msg += '\n\n';
					msg += job_id;
					msg += '\n\n';
					msg += wc_mijireh_checkout_page_slurp.set_slurp_page_message;

					window.alert( msg );
				} else {
					var pusher       = new Pusher( '7dcd33b15307eb9be5fb' ),
						channel_name = 'slurp-' + job_id,
						channel      = pusher.subscribe( channel_name );

					channel.bind( 'status_changed', function ( data ) {

						if ( 'info' === data.level ) {
							$( '#slurp_progress_bar' ).html( data.message );
							$( '#slurp_progress_bar' ).width( data.progress + '%' );
						}

						if ( 100 === data.progress ) {
							pusher.unsubscribe( channel_name );

							$( '#slurp_progress').hide();
							$( '#page_slurp').removeAttr( 'disabled' );
						}
					});
				}

			}).error( function () {
				$( '#slurp_progress' ).hide();
				$( '#page_slurp' ).removeAttr( 'disabled' );

				window.alert( wc_mijireh_checkout_page_slurp.access_key_message );
			});

			return false;
		});

	});

}( jQuery ));
