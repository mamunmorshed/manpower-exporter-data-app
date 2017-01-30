$("input[name=agent_compensation_amount]").on('keyup', calculate);
$("input[name=agent_advance_amount]").on('keyup', calculate);

function calculate(){
	var commission = $("input[name=agent_commission]").val();
	var compensation = $("input[name=agent_compensation_amount]").val();
	var advance = $("input[name=agent_advance_amount]").val();
	var due = commission - compensation - advance;

	$("input[name=agent_due_amount]").val(due);
}