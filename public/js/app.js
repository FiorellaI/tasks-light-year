var tasks = [];

$(function() {

	$('.datepicker').datepicker({language: 'es', format: 'dd/mm/yyyy'});
	$("form").submit(addTask);

});

var addTask = function() {

	var newTask = {};
	newTask.done = false;
	newTask.name = $("#taskName").val();
	newTask.due_date = moment($("#taskDate").datepicker('getDate')).format("YYY-MM-DD");
	tasks.push(newTask);


    $.post('/tasks', newTask, function(data){
        console.log(data);
    },'json');


	var item = $(".list-group-item:first").clone();
	item.find("[data-field=task-name]").html(newTask.name);
	item.find("[data-field=task-date]").html(moment(newTask.date).fromNow());
	item.find("button").click(checkTask);
	item.appendTo(".list-group").show();

	$(":input").val("");
	$("input:first").focus();
	return false;
};

var checkTask = function() {
	$(this).removeClass("btn-default").addClass("btn-success").next("span").addClass("done");
};