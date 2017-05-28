import Waypoint from '../../node_modules/waypoints/lib/noframework.waypoints.js';

var descriptionContainer = document.querySelector('[data-js-fixed-items]');
var descriptionOffset = descriptionContainer.getBoundingClientRect().top;
var descriptionContents = document.querySelectorAll('[data-js-fixed-item]');
var descriptionContentIndexes = [];

var projectSections = document.querySelectorAll('[data-js-project-section]');

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
new window.Waypoint({
element: project,
handler: function(direction) {
        if (direction === 'up' && this.previous() ) {
        activeSectionChanged( this.previous().element )
        } else {
        activeSectionChanged( this.element )
        }
},
group: 'project-sections',
offset: descriptionOffset
});
});



var absoluteItemContainers = document.querySelectorAll('[data-js-project-section]');
var absoluteItemClass = '.builder-item';

absoluteItemContainers.forEach(function( item ){
var containerBoundsTop = item.offsetTop + item.offsetHeight;
item.querySelectorAll(absoluteItemClass).forEach(function(el){
var itemBoundsTop = el.offsetTop + el.offsetHeight;
if ( itemBoundsTop > containerBoundsTop ) {
        item.style['min-height'] = itemBoundsTop + 'px';
}

});
})