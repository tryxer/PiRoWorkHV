  // isotop pour la page event
          var $grid = $('.grid').isotope({
          itemSelector: '.element-item',
          layoutMode: 'fitRows'
        });
           


            $('.filters-button-group').on( 'click', 'button', function() {
          var filterValue = $( this ).attr('data-filter');
          // use filterFn if matches value
          
          $grid.isotope({ filter: filterValue });
        });