$('th a').click(function () {

  $(this).each(function(){
    var classes = ['desc','asc'];
    this.className = classes[($.inArray(this.className, classes)+1)%classes.length];
  });

  return false;

});
