function Table(el) {
    this.el = el;
}

Table.prototype.columnCount = function()
{
    return this.el.find('thead th').length;
}

Table.prototype.rowCount = function()
{
    console.log(this.el);
    return this.el.find('tbody tr').length;
}

Table.prototype.addRows = function(row)
{
    var newEl = $('<tr><td>asd</td></tr>');
    var res = Routing.generate('display_table', {name:'asd'});
    //this.el.find('tbody').append(hincluderEl);
    console.log(res);
    return true;
}

var aTable;
$(document).ready(function(){
    aTable = new Table($('table')); 
});

$(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() === $(document).height()) {
        aTable.addRows();
    }
});
