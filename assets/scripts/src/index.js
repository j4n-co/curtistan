import {} from '../../node_modules/waypoints/lib/noframework.waypoints.js';
import jQuery from 'jquery';

var $ = jQuery;

$('document').ready( () => {
	$( '[data-js-project-section]' ).each( (index, project) => {
		new window.Waypoint({
			element: project,
			handler: function(direction) {
				$( '[data-js-project-section]' ).removeClass('js-visible');
				if ( direction === 'down' ) {
					$(this.element).addClass('js-visible');
				} else {
					$(this.element).prev().addClass('js-visible');

				}
				 console.log(this.element)
			},
			offset: function() {
				let childEl = $(this.element).find('[data-js-fixed-item]');
				let r = $('[data-js-fixed-item]').first().offset().top;
				if ( childEl[0] ) {
					r = childEl.offset().top
				}
				return r;
			}
		});
	});

})
