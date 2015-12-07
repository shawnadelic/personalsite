$(function()
{ 
    var pink = '#E3092D',
	blue = '#1523A1',
    	green = '#3A7D14',
   	purple = '#6610A1',
    	orange = '#F5210A', colors = [pink,green,orange,blue,purple];

    //$('.splash').each( function(){$(this).css('color',colors[Math.floor(Math.random()*colors.length)])});

    var splashes = document.querySelectorAll(".splash");

    var hover_color = function() {
        this.style.color = this.over_color;
    }

    var restore_color = function() {
        this.style.color = random_color();
    }
    
    var random_color = function () {
        return colors[Math.floor(Math.random()*colors.length)];
    }

    for(var i=0;i<splashes.length;i++)
    {
        if(splashes[i].href)
        {
            splashes[i].out_color = random_color();
            splashes[i].over_color = '#333';
            splashes[i].style.color = splashes[i].out_color
            splashes[i].onmouseover = hover_color;
            splashes[i].onmouseout = restore_color;
        }
        else
        {
            splashes[i].style.color = random_color();
        }
    }
});
