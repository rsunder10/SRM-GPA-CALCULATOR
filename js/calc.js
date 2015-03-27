//Calc Logic Behing calculating the gpa >>>> Jquery

$(document).ready(function(e) {
    	var count=8;
	$('#more').click(function(e) {
var text='<div class="row"><div class="col-xs-2"><label class="form-control-static">SUBJECT '+count+'</label></div><div class="col-xs-4"><input type="text" class="form-control" placeholder="Enter Credit"></div><div class="col-xs-4"><select id="gr" class="form-control"><option>Select Grade</option><option value="10">S</option><option value="9">A</option><option value="8">B</option><option value="7">C</option><option value="5">D</option><option value="0">U</option></select></div></div><br>';
		
		$('#moread').append(text);
		count++;	
			if (count==16)
		{
			$('#more').attr('disabled','disabled');
		}	
    });
	$('#cal').click(function(e) {
        calculate();
		
    });
	
});


function calculate(){
	var total=parseInt(0);
	var total_cre=parseInt(0);
	var tta=[];
	
	$('input[type="text"]').each(function() {		
	var newt;
        newt=parseInt($(this).val());
			if(isNaN(newt))
			{
				newt=0;
			}
			tta.push(newt);
		total+=newt;
		//coded by sunder email-sunderis10@gmail.com
    });


	var i=0;
	$('select').each(function() {
        var grad;
		grad=$(this).val();
		parseInt(grad);
		if(isNaN(grad))
			{
				grad=0;
			}
		total_cre+=parseInt(tta[i]*grad);
		i++;
    });
var gpa=parseFloat(total_cre/total);

		if(!isNaN(gpa))
			{
$('#result').html('<h1>Your GPA is <b>'+gpa+'</b></h1>');
$('#hide').removeClass('hidden');
$('#gpa').val(gpa);
    $('html, body').animate({
    scrollTop: $("#register").offset().top
    }, 1000);
			}
	
}