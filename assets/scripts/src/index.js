import Waypoint from '../../node_modules/waypoints/lib/noframework.waypoints.js';

var descriptionContainer = document.querySelector('.home-project-descriptions');
var descriptionOffset = descriptionContainer.getBoundingClientRect().top;
var descriptionContents = document.querySelectorAll('.home-project-description');
var descriptionContentIndexes = [];

var projectSections = document.querySelectorAll('.project-section');

var activeProject;
descriptionContents.forEach( function( el ) { descriptionContentIndexes.push( el.dataset.pageid ) } )


function activeSectionChanged(element){
if (activeProject === element ) {
return;
}
activeProject = element;
var projectIndex = activeProject.dataset.pageid;
var descriptionIndex = descriptionContentIndexes.indexOf( projectIndex )
var activeDescription = descriptionContents[ descriptionIndex ];
descriptionContents.forEach(function( el, i ) {
if ( i !== descriptionIndex ) {
        el.classList.remove('js-visible')
}
})
activeDescription.classList.add('js-visible');
}

projectSections.forEach(function(project){
new Waypoint({
element: project,
handler: function(direction) {
        if (direction === 'up') {
        activeSectionChanged( this.previous().element )
        } else {
        activeSectionChanged( this.element )
        }
},
group: 'project-sections',
offset: descriptionOffset
});
});
