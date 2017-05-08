  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

    </div>
  </footer>

  <script>
  var absoluteItemContainers = document.querySelectorAll('.project-section');
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
  </script>
  <script src="/assets/js/vendor/noframework.waypoints.min.js"></script>
  <script>
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
      var waypoint = new Waypoint({
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
    })


  </script>

</body>
</html>