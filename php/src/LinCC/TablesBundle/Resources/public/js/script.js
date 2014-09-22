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
    var url = Routing.generate('display_table', {name:'varlist'});
    var thisTableEl = this.el;
    
    $.get(url,
        {
            frag: 1,
            from: this.rowCount(),
            qty: 30
        }).done(function(data){
            thisTableEl.find('tbody').append($(data));
        });
    
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
