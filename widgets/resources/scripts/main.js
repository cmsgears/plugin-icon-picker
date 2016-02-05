jQuery( document ).ready( function() {

	jQuery( '.icon-picker .choose-icon' ).click( function() {

		var element 	= jQuery( this );
		
		if( !element.hasClass( 'disabled' ) ) {

			var parent 		= element.closest( '.icon-picker' );
			var iconSets	= parent.find( '.icon-sets' );
	
			iconSets.slideToggle( 'slow' );
		}
	});

	jQuery( '.icon-sets .wrap-icon' ).click( function() {

		var element 	= jQuery( this );
		var parent 		= element.closest( '.icon-picker' );
		var iconSets	= parent.find( '.icon-sets' );
		var sIcon		= element.find( '.picker-icon' );
		var iconClass	= 'picker-icon ' + sIcon.attr( 'icon' );
		var tIcon		= parent.find( '.choose-icon' );
		tIcon			= tIcon.find( '.picker-icon' );

		tIcon.attr( 'class', iconClass );

		parent.find( '.icon-field' ).val( sIcon.attr( 'icon' ) );

		iconSets.slideToggle( 'slow' );
	});

});