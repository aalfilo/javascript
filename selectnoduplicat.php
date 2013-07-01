    <select id="select1" name="indication_subject[]">
      <option value="" selected="selected">a </option>
      <option> Accounting</option>
      <option> Afrikaans</option>
      <option> Applied Information and Communication Technology</option>
      <option> Arabic</option>
      <option> Art and Design</option>
      <option> Biology</option>
      <option> Business Studies</option>
    </select>
     
    <select id="select2" name="indication_subject[]">
      <option value="" selected="selected">a </option>
      <option> Accounting</option>
      <option> Afrikaans</option>
      <option> Applied Information and Communication Technology</option>
      <option> Arabic</option>
      <option> Art and Design</option>
      <option> Biology</option>
      <option> Business Studies</option>
    </select>
    <script>
    function preventDupes( select, index ) {
        var options = select.options,
            len = options.length;
        while( len-- ) {
            options[ len ].disabled = false;
        }
        select.options[ index ].disabled = true;
        if( index === select.selectedIndex ) {
            alert('You\'ve already selected the item "' + select.options[index].text + '".\n\nPlease choose another.');
            this.selectedIndex = 0;
        }
    }
     
    var select1 = select = document.getElementById( 'select1' );
    var select2 = select = document.getElementById( 'select2' );
     
    select1.onchange = function() {
        preventDupes.call(this, select2, this.selectedIndex );
    };
     
    select2.onchange = function() {
        preventDupes.call(this, select1, this.selectedIndex );
    };
     
    </script>

